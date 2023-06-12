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

    public function getWalletCurrentValue($id_user, $id_wallet = null){
        if($id_wallet != null){
            $totalValue = Wallet::where('id_user', $id_user)->where('id', $id_wallet)->sum('current_value');
        }else{
            $totalValue = Wallet::where('id_user', $id_user)->sum('current_value');
        }

        return response()->json(['status' => true, 'value' => $totalValue]);
    }

    public function show($id)
    {
        $wallet = Wallet::find($id);

        return response()->json([
            'status' => true,
            'wallet' => $wallet
        ], 200);
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
