<?php


namespace App\Support\Payment\Gateways;

use App\Order;
use Illuminate\Http\Request;

class Saman implements GatewayInterface
{

    public function pay(Order $order)
    {
        // TODO: Implement pay() method.
    }

    public function verify(Request $request)
    {
        // TODO: Implement verify() method.
    }

    public function getName(): string
    {
        return 'saman';
    }
}
