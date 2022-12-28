<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class comptesController extends Controller
{
    private function enregCompte(Request $request){
        DB::table('comptes')->insert($request);
        return redirect()->back();
    }
}
