<?php

namespace App\Http\Controllers;

use App\Models\Cocktail;
use Illuminate\Http\Request;

class CocktailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cocktails = Cocktail::all();

        return response()->json($cocktails);
    }
}
