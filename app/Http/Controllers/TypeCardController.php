<?php

namespace App\Http\Controllers;

use App\TypeCard;
use Illuminate\Http\Request;
use PHPUnit\Util\Type;

class TypeCardController extends Controller
{
    public function __construct() {
        $this->middleware(['auth']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typeCards = TypeCard::active(true)->paginate(10);
        return view('type_cards.index', compact('typeCards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('type_cards.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validForm($request);

        $file = $request->file('image');
        $destinationPath = '../public/images/';
        $date = date('Y-m-d H:i:s');
        $nameFile = $request['name'] . $date . "." . $file->getClientOriginalExtension();
        $nameFile = str_replace(':', '-', $nameFile);
        $nameFile = str_replace(' ', '-', $nameFile);
        $file->move($destinationPath, $nameFile);
        $url = asset('images/'.$nameFile);

        $data = array(
            'name' => $request['name'],
            'code' => $request['code'],
            'icon' => $nameFile
        );

        TypeCard::create($data);

        return redirect()->route('type-cards.index')
            ->with('flash_message',
                'Se registro se dio de alta!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TypeCard  $typeCard
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $typeCard = TypeCard::find($id);
        return view('type_cards.edit', compact('typeCard'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TypeCard  $typeCard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TypeCard $typeCard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TypeCard  $typeCard
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = array(
            'active' => 0
        );

        TypeCard::find($id)->update($data);

        return redirect()->route('type-cards.index')
            ->with('flash_message',
                'Se elimino su registro!');
    }

    private function validForm(Request $request) {
        $this->validate($request, [
                'name' => 'required|string|max:255',
                'code' => 'required|string|max:255',
                'image'=>'required|mimes:jpeg,png'
            ]
        );
    }
}
