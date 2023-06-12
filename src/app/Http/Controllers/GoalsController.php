<?php

namespace App\Http\Controllers;

use App\Models\Goal;
use Illuminate\Http\Request;

class GoalsController extends Controller
{
    public function index()
    {
        $goals = Goal::all();

        return response()->json([
            'status' => true,
            'goals' => $goals
        ]);
    }

    public function show($id)
    {
        $goal = Goal::find($id);

        return response()->json([
            'status' => true,
            'goal' => $goal
        ], 200);
    }

    public function store(Request $request){
        $goal = Goal::create($request->all());

        return response()->json([
            'status' => true,
            'message' => 'Goal created successfully',
            'goal' => $goal
        ], 200);
    }

    public function update(Request $request, $id){
        $goal = Goal::find($id);
        $goal->update($request->all());

        return response()->json([
            'status' => true,
            'message' => 'Goal updated successfully',
            'goal' => $goal
        ], 200);
    }

    public function destroy(Goal $goal){
        $goal->delete();

        return response()->json([
            'status' => true,
            'message' => 'Goal deleted successfully'
        ], 200);
    }
}
