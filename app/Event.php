<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function hasStock(int $quantity)
    {
        return $this->stock >= $quantity;
    }


    public function decrementStock(int $count)
    {
        return $this->decrement('stock', $count);
    }
}
