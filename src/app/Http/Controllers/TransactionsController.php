<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionsController extends Controller
{
    public function index()
    {
        $transactions = Transaction::all();

        return response()->json([
            'status' => true,
            'transactions' => $transactions
        ]);
    }

    public function getTransactionTotalByType($id_wallet, $id){
        $transactionValue = Transaction::where('id_wallet', $id_wallet)->where('id_type_transaction', $id)->sum('value');
        return response()->json(['status' => true, 'value' => $transactionValue]);
    }

    public function show($id)
    {
        $transaction = Transaction::find($id);

        return response()->json([
            'status' => true,
            'transaction' => $transaction
        ], 200);
    }

    public function store(Request $request){
        $transaction = Transaction::create($request->all());

        return response()->json([
            'status' => true,
            'message' => 'Transaction created successfully',
            'transaction' => $transaction
        ], 200);
    }

    public function update(Request $request, $id){
        $transaction = Transaction::find($id);
        $transaction->update($request->all());

        return response()->json([
            'status' => true,
            'message' => 'Transaction updated successfully',
            'transaction' => $transaction
        ], 200);
    }

    public function destroy(Transaction $transaction){
        $transaction->delete();

        return response()->json([
            'status' => true,
            'message' => 'Transaction deleted successfully'
        ], 200);
    }
}
