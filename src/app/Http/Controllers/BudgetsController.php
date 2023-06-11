<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use Illuminate\Http\Request;

class BudgetsController extends Controller
{
    public function index()
    {
        $budgets = Budget::all();

        return response()->json([
            'status' => true,
            'budgets' => $budgets
        ]);
    }

    public function store(Request $request){
        $budget = Budget::create($request->all());

        return response()->json([
            'status' => true,
            'message' => 'Budget created successfully',
            'budget' => $budget
        ], 200);
    }

    public function update(Request $request, $id){
        $budget = Budget::find($id);
        $budget->update($request->all());

        return response()->json([
            'status' => true,
            'message' => 'Budget updated successfully',
            'budget' => $budget
        ], 200);
    }

    public function destroy(Budget $budget){
        $budget->delete();

        return response()->json([
            'status' => true,
            'message' => 'Budget deleted successfully'
        ], 200);
    }
}
