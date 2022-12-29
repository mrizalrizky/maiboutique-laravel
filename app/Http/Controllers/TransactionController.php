<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\TransactionDetail;
use App\Models\TransactionHeader;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index() {
        //only transaction details that have transactionheader of authenticated user id will be shown
        $transactions = TransactionDetail::with('transaction.user')
        ->whereHas('transaction', function($transaction){
            $transaction->where('user_id', auth()->id());
        })->get();
        $userTransactions = TransactionHeader::where('user_id', auth()->id())->get();

        return view('pages.transactionhistory', compact('userTransactions'));
    }

    public function viewTransactionDetail($id) {
        $transactions = TransactionDetail::where('transaction_id', $id)->get();
        // $transactions = TransactionDetail::with('transaction.user')
        // ->whereHas('transaction', function($transaction){
        //     $transaction->where('user_id', auth()->id());
        // })->get();

        return view('pages.transactiondetail', compact('transactions'));
    }

    public function checkout(Request $request) {
        $cartItems = Cart::where('user_id', auth()->id())
        ->get();

        $transaction = TransactionHeader::create([
            'user_id' => auth()->id(),
            'total_price' => $request->total
        ]);

        foreach ($cartItems as $cart) {
            TransactionDetail::create([
                'transaction_id' => $transaction->id,
                'product_id' => $cart->product_id,
                'quantity' => $cart->qty
            ]);

            // //Update product stock in products table
            // $productItem = Product::find($cart->product_id);
            // $productItem->update([
            //     'stock' => $productItem->stock-$cart->qty
            // ]);
        }

        //Delete the cart after checkout successful
        Cart::where('user_id', auth()->id())->delete();

        return redirect()->route('transactions');
    }
}
