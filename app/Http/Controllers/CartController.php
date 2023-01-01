<?php

namespace App\Http\Controllers;

use App\Http\Requests\CartRequest;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $user = auth()->user();
        // $items = $user->product()->get();
        $items = $user->product;
        // dd($items[0]->pivot->qty);
        // dd($items);
        // dd($x[1]);
        // $user->product()->first()->pivot->qty
        return view('pages.cart', compact('user', 'items'));
    }

    public function addToCart(CartRequest $request) {
        $cartItem = Cart::where('product_id', $request->product_id)->first();

        //If product id doesnt exist in user cart. If exist then update cart
        if(!isset($cartItem)) {
            Cart::create([
                'qty'        => $request->qty,
                'user_id'    => auth()->id(),
                'product_id' => $request->product_id
            ]);
        }
        else {
            $cartItem->update([
                'qty' => $cartItem->qty + $request->qty,
            ]);
        }

        return redirect()->route('cart');
    }

    public function updateCart(CartRequest $request) {
        $cartItem = Cart::where('product_id', $request->product_id)->first();
        $cartItem->update([
            'qty' => $request->qty,
        ]);

        return redirect()->back();

    }

    public function removeItemFromCart(Request $request) {
        $cartItem = Cart::where('product_id', $request->product_id)->first();
        $cartItem->delete();

        return redirect()->back();
    }
}
