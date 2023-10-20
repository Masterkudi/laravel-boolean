<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class CocktailApi extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $url = "https://www.thecocktaildb.com/api/json/v1/1/search.php?f=a";

        $drinks = Http::get($url)->json()["drinks"];

        dd($drinks);
    }
}
