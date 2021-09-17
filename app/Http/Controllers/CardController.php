<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function getAll()
    {
        $cards = Card::all();
        return response($cards);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'value' => 'required|integer',
            'type_id' => 'required|exists:cards_types,id'
        ]);

        $card = new Card($request->all());
        $card->save();
        return response(['message' => 'Card saved']);
    }
}
