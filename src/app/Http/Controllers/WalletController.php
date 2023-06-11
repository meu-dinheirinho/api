<?php

namespace App\Http\Controllers;

use App\Models\Wallet;
use Illuminate\Http\Request;

class WalletController extends Controller
{
    public function index()
    {
        $wallets = Wallet::all();

        return response()->json([
            'status' => true,
            'wallets' => $wallets
        ]);
    }

    public function store(Request $request){
        $wallet = Wallet::create($request->all());

        return response()->json([
            'status' => true,
            'message' => 'Wallet created successfully',
            'wallet' => $wallet
        ], 200);
    }

    public function update(Request $request, $id){
        $wallet = Wallet::find($id);
        $wallet->update($request->all());

        return response()->json([
            'status' => true,
            'message' => 'Wallet updated successfully',
            'wallet' => $wallet
        ], 200);
    }

    public function destroy(Wallet $wallet){
        $wallet->delete();

        return response()->json([
            'status' => true,
            'message' => 'Wallet deleted successfully'
        ], 200);
    }
}
