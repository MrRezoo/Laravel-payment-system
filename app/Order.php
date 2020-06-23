<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id', 'code', 'amount'];



    public function events()
    {
        return $this->belongsToMany(Event::class)->withPivot('quantity');
    }


    public function payment()
    {
        return $this->hasOne(Payment::class);
    }



    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
