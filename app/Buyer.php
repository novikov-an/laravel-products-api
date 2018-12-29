<?php

namespace App;

use App\Scopes\BuyersScope;

class Buyer extends User
{
    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new BuyersScope());
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
