<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Stats;

class StatsController extends Controller
{
    public function visitors(Request $request)
    {
        if($request->stats){
            $stats = Stats::find(1);
            $visitors = $stats->visitors;
            $visitors++;
            $stats->update([
                'visitors' => $visitors
            ]);

            return response()->json(['visitors' => 'counted']);
        }
    }
}
