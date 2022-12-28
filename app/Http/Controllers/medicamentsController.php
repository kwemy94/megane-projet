<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class medicamentsController extends Controller
{
    public function enregComprime(Request $request ){
        BD::table('medicaments')->insert($request);
        return redirect()->back();

    }
}
