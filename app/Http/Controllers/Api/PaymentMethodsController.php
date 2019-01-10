<?php

namespace App\Http\Controllers\Api;

use Validator;
use App\TypeCard;
use Paymetn\PayU;
use App\PaymentMethods;
use Paymetn\PayUTokens;
use Paymetn\Environment;
use Paymetn\PayUParameters;
use Illuminate\Http\Request;
use Paymetn\SupportedLanguages;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PaymentMethodsController extends Controller
{
    public $successStatus = 200;

    public function __construct() {
        PayU::$apiKey = env('PAYU_KEY');
        PayU::$apiKey = env('PAYU_KEY');
        PayU::$apiLogin = env('PAYU_LOGIN');
        PayU::$merchantId = env('PAYU_MERCHANT');
        PayU::$language = SupportedLanguages::ES; //Seleccione el idioma.
        PayU::$isTest = env('PAYU_TEST');

        // URL de Pagos
        Environment::setPaymentsCustomUrl(env('PAYU_URL_PAYMENT'));
        // URL de Consultas
        Environment::setReportsCustomUrl(env('PAYU_URL_CONSULTATIONS'));
        // URL de Suscripciones para Pagos Recurrentes
        Environment::setSubscriptionsCustomUrl(env('PAYU_URL_RECURRING_PAYMENTS'));
    }

    public function get() {
        $idUser = Auth::id();
        $paymentMethods = PaymentMethods::userId($idUser)->get();

        foreach ($paymentMethods as $paymentMethod) {
            $paymentMethod['icon'] = TypeCard::find($paymentMethod->type_cards_id)->icon;
        }

        return response()->json($paymentMethods, $this->successStatus);
    }

    public function getById($id) {
        $idUser = Auth::id();
        $paymentMethods = PaymentMethods::userId($idUser)->get();

        foreach ($paymentMethods as $paymentMethod) {
            $paymentMethod['icon'] = TypeCard::find($paymentMethod->type_cards_id)->icon;
        }

        return response()->json($paymentMethods, $this->successStatus);
    }

    public function set(Request $request) {
        $validator = Validator::make($request->all(), [
            'type_cards_id' => 'required|int',
            'name' => 'required|string',
            'card' => 'required|string',
            'month' => 'required|int',
            'year' => 'required|int'
        ]);

        if ($validator->fails()) {
            $data = array(
                'success' => false,
                'error' => $validator->errors()
            );

            return response()->json($data, 401);
        }

        $token = "";

        $data = array(
            'name' => $request['name'],
            'card' => "####-####-####-" . substr($request['card'], 12, 4),
            'type_cards_id' => $request['type_card_id'],
            'token' => $token,
            'users_id' => Auth::id(),
            'month' => $request['month'],
            'year' => $request['year']
        );

        PaymentMethods::create($data);

        $data = array(
            'success' => true
        );

        return response()->json($data, $this->successStatus);

    }
}
