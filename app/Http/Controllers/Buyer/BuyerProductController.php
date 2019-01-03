<?php

namespace App\Http\Controllers\Buyer;

use App\Buyer;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BuyerProductController extends ApiController
{
    public function index(Buyer $buyer)
    {
        $products = $buyer->transactions()->with('product')->get();

        return $this->showAll($products);
    }
}
