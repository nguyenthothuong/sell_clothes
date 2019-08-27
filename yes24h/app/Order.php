<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'date','user_id', 'address_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function address()
    {
        return $this->belongsTo('App\OrderInfo');
    }

    public function orderDetails()
    {
        return $this->hasMany('App\OrderDetail');
    }
}
