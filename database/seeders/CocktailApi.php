<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class CocktailApi extends Seeder
{
    public function run(): void
    {
        $response = Http::get('https://www.thecocktaildb.com/api/json/v1/1/search.php?f=a');
        $data = $response->json();

        // Aggiungi un output di debug
        dd($data);

        foreach ($data as $cocktail) {
            $id = $cocktail['idDrink'] ?? null;
            $nome = $cocktail['strDrink'] ?? null;

            \App\Models\Cocktail::create([
                'id' => $id,
                'nome' => $nome,
            ]);
        }
    }
}
