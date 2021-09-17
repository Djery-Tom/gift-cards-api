<?php

namespace App\Http\Controllers;

use App\Models\CardType;
use Illuminate\Http\Request;

class CardTypeController extends Controller
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
        $types = CardType::all();
        return response($types);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'max_avail_value' => 'required|integer|min:0|max:100',
        ]);

        $type = new CardType($request->all());
        $type->save();
        return response(['message' => 'Card type saved']);
    }
}
