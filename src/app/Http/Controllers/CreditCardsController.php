<?php

namespace App\Http\Controllers;

use App\Models\CreditCard;
use Illuminate\Http\Request;

class CreditCardsController extends Controller
{
    public function index()
    {
        $creditCards = CreditCard::all();

        return response()->json([
            'status' => true,
            'creditCards' => $creditCards
        ]);
    }

    public function show($id)
    {
        $creditCard = CreditCard::find($id);

        return response()->json([
            'status' => true,
            'creditCard' => $creditCard
        ], 200);
    }

    public function store(Request $request){
        $creditCard = CreditCard::create($request->all());

        return response()->json([
            'status' => true,
            'message' => 'Credit Card created successfully',
            'creditCard' => $creditCard
        ], 200);
    }

    public function update(Request $request, $id){
        $creditCard = CreditCard::find($id);
        $creditCard->update($request->all());

        return response()->json([
            'status' => true,
            'message' => 'Credit Card updated successfully',
            'creditCard' => $creditCard
        ], 200);
    }

    public function destroy(CreditCard $creditCard){
        $creditCard->delete();

        return response()->json([
            'status' => true,
            'message' => 'creditCard deleted successfully'
        ], 200);
    }
}
