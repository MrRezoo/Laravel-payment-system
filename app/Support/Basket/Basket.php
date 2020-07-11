<?php

namespace App\Support\Basket;

use App\Exceptions\QuantityExceededException;
use App\Event;
use App\Support\Storage\Contracts\StorageInterface;


class Basket
{
    private $storage;

    public function __construct(StorageInterface $storage)
    {
        $this->storage = $storage;
    }


    public function add(Event $event, int $quantity)
    {
        if ($this->has($event)) {
            $quantity = $this->get($event)['quantity'] + $quantity;
        }

        $this->update($event, $quantity);
    }

    public function update(Event $event, int $quantity)
    {
        if (!$event->hasStock($quantity)) {
            throw new QuantityExceededException();
        }


        if (!$quantity) {
            return $this->storage->unset($event->id);
        }



        $this->storage->set($event->id, [
            'quantity' => $quantity
        ]);
    }


    public function get(Event $event)
    {
        return $this->storage->get($event->id);
    }

    public function all()
    {
        $events = Event::find(array_keys($this->storage->all()));

        foreach ($events as $event) {
            $event->quantity = $this->get($event)['quantity'];
        }

        return $events;
    }


    public function subTotal()
    {
        $total = 0;
        foreach ($this->all() as $item) {
            $total += $item->price * $item->quantity;
        }


        return $total;
    }


    public function itemCount()
    {
        return $this->storage->count();
    }


    public function has(Event $event)
    {
        return $this->storage->exists($event->id);
    }


    public function clear()
    {
        return $this->storage->clear();
    }
}
