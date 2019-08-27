<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'code', 'name', 'brand', 'description', 'price', 'category_id',
    ];

    public function productDetail()
    {
        return $this->hasOne('App\ProductSize');
    }

    public function orderDetails()
    {
        return $this->hasMany('App\OrderDetail');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function images()
    {
        return $this->hasMany('App\Image');
    }

    public function getOrderDetailsCountAttribute()
    {
        return $this->orderDetails->count();
    }
}
