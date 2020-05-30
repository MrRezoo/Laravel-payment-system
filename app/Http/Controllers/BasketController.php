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
        $this->basket = $basket;
    }

    /**
     * Display a listing of the resource.
     *
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


}
