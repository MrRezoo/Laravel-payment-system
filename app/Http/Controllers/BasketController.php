<?php

namespace App\Http\Controllers;

use App\Event;
use App\Exceptions\QuantityExceededException;
use App\Support\Basket\Basket;
use App\Support\Payment\Transaction;
use Illuminate\Http\Request;

class BasketController extends Controller
{

    private $basket;
    private $transaction;

    public function __construct(Basket $basket, Transaction $transaction)
    {
        $this->middleware('auth')->only(['checkoutForm', 'checkout']);
        $this->basket = $basket;
        $this->transaction = $transaction;
    }


    public function add(Event $event)
    {
        try {

            $this->basket->add($event, 1);

            return back()->with('success', __('payment.added to basket'));
        } catch (QuantityExceededException $e) {
            return back()->with('error', __('payment.quantity exceeded'));
        }
    }


    public function index()
    {
        $items = $this->basket->all();
        return view('events.cart', compact('items'));
    }


    public function checkoutForm()
    {
        $items = $this->basket->all();
        return view('events.checkout', compact('items'));
    }


    public function update(Request $request, Event $event)
    {
        $this->basket->update($event, $request->quantity);
        return back();
    }

    public function checkout(Request $request)
    {
        $this->validateForm($request);

        $order =  $this->transaction->checkout();


        return redirect()->route('home')->with('success', __('payment.your order has been registered', ['orderNum' => $order->id]));
    }



    private function validateForm($request)
    {
        $request->validate([
            'method' => ['required'],
            'gateway' => ['required_if:method,online']
        ]);
    }


}
