<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;


class TransactionController extends Controller
{
    public function view()
    {
        $transactionPlant = Transaction::with('Plant')->get(); 
        return view('/transaksi/transaksi', compact('transactionPlant'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'transaction-id' => 'required',
            'user-id-fk' => 'required|exists:App\Models\User, user-id',
            'plant-id-fk' => 'required|exists:App\Models\Plant, plant-id',
            'transaction-date' => 'required|dateTime',
        ]);

        Transaction::create($validated);

        return redirect('/transaction')->with('success', 'Transaction created successfully.');
    }
}
