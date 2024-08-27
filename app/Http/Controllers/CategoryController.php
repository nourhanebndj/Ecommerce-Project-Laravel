<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Afficher la liste des catégories
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    // Ajouter une catégorie
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string'
        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->description = $request->description;

        try {
            $category->save();
            return redirect()->back()->with('success', 'Catégorie ajoutée avec succès.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Une erreur est survenue lors de l\'ajout de la catégorie.');
        }
    }

    // Supprimer une catégorie
    public function destroy($id)
    {
        $category = Category::find($id);

        if ($category) {
            try {
                $category->delete();
                return redirect()->back()->with('success', 'Catégorie supprimée avec succès.');
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'Une erreur est survenue lors de la suppression de la catégorie.');
            }
        } else {
            return redirect()->back()->with('error', 'Catégorie non trouvée.');
        }
    }


    //modifier categorie
    public function update(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string'
        ]);
        $id=$request->id_category;
        $category=Category::find($id);
        $category->name = $request->name;
        $category->description = $request->description;   
        try {
            $category->save();
            return redirect()->back()->with('success', 'Catégorie modifier avec succès.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Une erreur est survenue lors de la modification de la catégorie.');
        }
    }
}