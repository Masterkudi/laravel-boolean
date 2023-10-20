<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class CocktailApi extends Seeder
{
    public function run(): void
    {
        $response = Http::get('https://www.thecocktaildb.com/api/json/v1/1/search.php?f=a');
        $data = $response->json();

        if (!isset($data['drinks'])) {
            return;
        }

        foreach ($data['drinks'] as $cocktail) {
            $id = $cocktail['idDrink'] ?? null;
            $nome = $cocktail['strDrink'] ?? null;
            $category = $cocktail['strCategory'] ?? null;


            if ($id && !\App\Models\Cocktail::find($id)) {
                \App\Models\Cocktail::create([
                    'id' => $id,
                    'nome' => $nome,
                    'category' => $category,
                ]);
            }
        }
    }
}
