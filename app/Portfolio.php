<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable=['name','tag','link','description','image','status'];

    protected $attributes=[
        'status'=>0
    ];

}
