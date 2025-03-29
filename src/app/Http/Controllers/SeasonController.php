<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Repuests\SeasonRequest;

class SeasonController extends Controller
{
    public function store(SeasonRequest $request)
    {
        $season = $request->only[
            'name',
        ]
        Season::find($request->id)->update($season);

        return view('products',compact('season'));
    }
}
