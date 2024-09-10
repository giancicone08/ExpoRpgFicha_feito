<?php

namespace App\Http\Controllers;
use App\Models\RpgFicha;
use Illuminate\Http\Request;


class RpgFichaController extends Controller
{
     // Lista todas as fichas
     public function index()
     {
         $fichas = RpgFicha::all();
         return $fichas;
     }

     // Exibe o formulário para criar uma nova ficha


     // Armazena uma nova ficha
     public function store(Request $request)
     {
         $validated = $request->validate([
             'jogador' => 'required|string|max:255',
             'nome_personagem' => 'required|string|max:255',
             'raca' => 'required|string|max:255',
             'genero' => 'required|in:M,F',
             'classe' => 'required|string|max:255',
             'vigor' => 'required|integer|min:0',
             'conhecimento' => 'required|integer|min:0',
             'fortitude' => 'required|integer|min:0',
             'forca' => 'required|integer|min:0',
             'destreza' => 'required|integer|min:0',
             'inteligencia' => 'required|integer|min:0',
             'fe' => 'required|integer|min:0',
             'sorte' => 'required|integer|min:0',
         ]);

         RpgFicha::create($validated);

         return redirect()->route('rpg_ficha.index');
     }

     // Exibe uma ficha específica
     public function show(RpgFicha $rpg_ficha)
     {
         return view('rpg_ficha.show', compact('rpg_ficha'));
     }

     // Exibe o formulário para editar uma ficha
     public function edit(RpgFicha $rpg_ficha)
     {
         return view('rpg_ficha.edit', compact('rpg_ficha'));
     }

     // Atualiza uma ficha no banco de dados
     public function update(Request $request, RpgFicha $rpg_ficha)
     {
         $validated = $request->validate([
             'jogador' => 'required|string|max:255',
             'nome_personagem' => 'required|string|max:255',
             'raca' => 'required|string|max:255',
             'genero' => 'required|in:M,F',
             'classe' => 'required|string|max:255',
             'vigor' => 'required|integer|min:0',
             'conhecimento' => 'required|integer|min:0',
             'fortitude' => 'required|integer|min:0',
             'forca' => 'required|integer|min:0',
             'destreza' => 'required|integer|min:0',
             'inteligencia' => 'required|integer|min:0',
             'fe' => 'required|integer|min:0',
             'sorte' => 'required|integer|min:0',
         ]);

         $rpg_ficha->update($validated);

         return redirect()->route('rpg_ficha.index');
     }

     // Remove uma ficha do banco de dados
     public function destroy(RpgFicha $rpg_ficha)
     {
         $rpg_ficha->delete();

         return redirect()->route('rpg_ficha.index');
     }
}
