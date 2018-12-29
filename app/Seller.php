<?php

namespace App;

use App\Scopes\SellersScope;

class Seller extends User
{
    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new SellersScope());
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
