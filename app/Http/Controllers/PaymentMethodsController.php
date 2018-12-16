<?php

namespace App\Http\Controllers;

use App\TypeCard;
use Paymetn\PayU;
use App\PaymentMethods;
use Paymetn\PayUTokens;
use Paymetn\Environment;
use Paymetn\PayUParameters;
use Illuminate\Http\Request;
use Paymetn\SupportedLanguages;
use Illuminate\Support\Facades\Auth;

class PaymentMethodsController extends Controller
{

    public function __construct() {
        $this->middleware(['auth']);
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
            $paymentMethod->type_card = TypeCard::find($paymentMethod->type_cards_id);
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
        $this->validate($request, [
            'type_card_id' => 'required|int',
            'name' => 'required|string',
            'card' => 'required|string',
            'month' => 'required|int',
            'year' => 'required|int'
        ]);

        $token = "";
        //$token = createToken($request);

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

        return redirect()->route('payment-methods.index')
            ->with('flash_message',
                'Se agrego su método de pago!');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PaymentMethods  $paymentMethods
     * @return \Illuminate\Http\Response
     */
    public function show(PaymentMethods $paymentMethods)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PaymentMethods  $paymentMethods
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paymentMethod = PaymentMethods::find($id);
        $paymentMethod->type_card = TypeCard::find($paymentMethod->type_cards_id);

        return view('payment_methods.edit', compact('paymentMethod'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PaymentMethods  $paymentMethods
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'month' => 'required|int',
            'year' => 'required|int'
        ]);

        $paymenth = PaymentMethods::findOrFail($id);
        $paymenth->fill($request->only('name', 'month', 'year'))->save();

        return redirect()->route('payment-methods.index')
            ->with('flash_message',
                'Su registro fue modificado.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PaymentMethods  $paymentMethods
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $payment = PaymentMethods::findOrFail($id);
        $payment->delete();

        return redirect()->route('payment-methods.index')
            ->with('flash_message',
                'Su registro fue eliminado.');
    }

    public function createToken(Request $request) {
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
            $token = $response->creditCardToken->creditCardTokenId;

        }

        return $token;
    }
}
