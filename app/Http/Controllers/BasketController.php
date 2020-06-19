<?php

namespace App\Http\Controllers;

use App\Event;
use App\Exceptions\QuantityExceededException;
use App\Support\Basket\Basket;
use Illuminate\Http\Request;

class BasketController extends Controller
{

    private $basket;

    public function __construct(Basket $basket)
    {
        $this->middleware('auth')->only(['checkoutForm','checkout']);
        $this->basket = $basket;
    }

    /**
     * Display a listing of the resource.
     *
     * @param Event $event
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $items = $this->basket->all();
        return view('events.cart', compact('items'));
    }


    /**
     * @param Event $event
     * @return \Illuminate\Http\RedirectResponse
     */
    public function add(Event $event)
    {
        try {

            $this->basket->add($event, 1);

            return back()->with('success', __('payment.added to basket'));
        } catch (QuantityExceededException $e) {
            return back()->with('error', __('payment.quantity exceeded'));
        }
    }


    public function update(Request $request, Event $event)
    {
        $this->basket->update($event, $request->quantity);
        return back();
    }

    public function checkoutForm()
    {
        $items = $this->basket->all();
        return view('events.checkout',compact('items'));
    }

    public function checkout(Request $request)
    {
        $this->validateForm($request);
        dd($request->all());
    }

    private function validateForm(Request $request)
    {
            $request->validate([
                'method' => ['required'],
                 'gateway' => ['required_if:method,online']
            ]);
    }


}
