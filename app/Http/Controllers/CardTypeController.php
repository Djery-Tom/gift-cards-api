<?php

namespace App\Http\Controllers;

use App\Models\CardType;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

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
            'name' => 'required|unique:cards_types',
            'max_avail_value' => 'required|integer|min:0|max:100',
        ]);

        $type = new CardType($request->all());
        $type->save();
        return response(['message' => 'Card type saved']);
    }

    public function update(Request $request, $id)
    {
        $type = CardType::find($id);
        if (!isset($type))
            return response(['message' => 'Card type not found'], ResponseAlias::HTTP_NOT_FOUND);

        $this->validate($request, [
            'name' => 'required|unique:cards_types,id,' . $id,
            'max_avail_value' => 'required|integer|min:0|max:100',
        ]);

        $type->fill($request->all());
        $type->save();
        return response(['message' => 'Card type updated']);
    }
}
