<?php

namespace App\Http\Controllers\Transaction;

use App\Http\Controllers\ApiController;
use App\Transaction;

class TransactionController extends ApiController
{
    /**
     * Showing all transactions
     */
    public function index()
    {
        return $this->showAll(Transaction::all());
    }

    /**
     * Getting specific transaction and showing it
     *
     * @param \App\Transaction $transaction
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Transaction $transaction)
    {
        return $this->showOne($transaction);
    }
}
