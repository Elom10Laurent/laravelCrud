<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;

class CardController extends Controller
{
    public function index(){
        $cards = Card::all();
        return view('cards.index', ['cards' => $cards]);

    }

    public function create(){
        return view('cards.card_crud.create');
    }

    public function storecard(Request $request){
        $data = $request->validate([
            'description' => 'required',
        ]);

        $newCard = Card::create($data);

        return redirect(route('card.index'));
    }
    public function editcard(Card $card){
        return view('cards.card_crud.edit', ['card' => $card]);
    }

    public function updatecard (Card $card, Request $request) {
        $data = $request->validate([
            'description' => 'required',
        ]);

        $card->update($data);
        return redirect(route('card.index'))->with('success', 'Product Updated Succesffuly');
    }
    public function destroycard(Card $card){
        $card->delete();
        return redirect(route('card.index'))->with('success', 'Product deleted Succesffuly');

    }

}
