<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class PaymentController extends Controller
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


    public function calculation(Request $request)
    {
        $this->validate($request, [
            'cart_total' => 'required|integer',
            'gift_card_ids' => 'required|array'
        ]);

        $discount = 0;
        $cards = Card::whereIn('id', $request->gift_card_ids)->get();

        if (sizeof($cards) == 1) {
            $discount = $cards[0]->value;
        } else {
            foreach ($cards as $card) {
                $discount += ($card->value * $card->type->max_avail_value / 100);
            }
        }


        return response(['payable_amount' => $request->cart_total - $discount, 'gift_discount' => $discount]);
    }
}
