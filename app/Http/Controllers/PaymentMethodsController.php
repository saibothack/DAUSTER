<?php

namespace App\Http\Controllers;

use App\PaymentMethods;
use App\TypeCard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Paymetn\PayU;
use Paymetn\Environment;
use Paymetn\SupportedLanguages;
use Paymetn\PayUParameters;
use Paymetn\PayUTokens;

class PaymentMethodsController extends Controller
{

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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paymentMethods = PaymentMethods::userId(Auth::id())->paginate(10);

        foreach ($paymentMethods as $paymentMethod) {
            $paymentMethod->type_card = TypeCard::find($paymentMethod->type_card_id);
        }

        return view('payment_methods.index', compact('paymentMethods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $typeCards = TypeCard::active(1)->get();
        return view('payment_methods.create', compact('typeCards'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $token = "";

        $type_card = TypeCard::find($request['type_card_id']);

        $parameters = array(
            //Ingrese aquí el nombre del pagador.
            PayUParameters::PAYER_NAME => $request['name'],
            //Ingrese aquí el identificador del pagador.
            PayUParameters::PAYER_ID => Auth::id(),
            //Ingrese aquí el número de la tarjeta de crédito
            PayUParameters::CREDIT_CARD_NUMBER => $request['card'],
            //Ingrese aquí la fecha de vencimiento de la tarjeta de crédito
            PayUParameters::CREDIT_CARD_EXPIRATION_DATE => $request['year'] . "/" . $request['month'],
            //Ingrese aquí el nombre de la tarjeta de crédito
            PayUParameters::PAYMENT_METHOD => $type_card->code
        );
            
        $response = PayUTokens::create($parameters);

        if($response){
            //podrás obtener el token de la tarjeta
            $data = array(
                'name' => $request['name'],
                'card' => "####-####-####-" . substr($request['card'], 12, 4),
                'type_cards_id' => $request['type_card_id'],
                'token' => $response->creditCardToken->creditCardTokenId,
                'users_id' => Auth::id(),
            );

            PaymentMethods::create($data);

            return redirect()->route('payment-methods.index')
                ->with('flash_message',
                    'Se agrego su método de pago!');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PaymentMethods  $paymentMethods
     * @return \Illuminate\Http\Response
     */
    public function show(PaymentMethods $paymentMethods)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PaymentMethods  $paymentMethods
     * @return \Illuminate\Http\Response
     */
    public function edit(PaymentMethods $paymentMethods)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PaymentMethods  $paymentMethods
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PaymentMethods $paymentMethods)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PaymentMethods  $paymentMethods
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaymentMethods $paymentMethods)
    {
        //
    }
}
