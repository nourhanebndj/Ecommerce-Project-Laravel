<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User; 
use App\Models\Category; // Importation du modèle Category
use App\Models\Commande; 

class ClientController extends Controller
{
    // Fonction qui permet d'afficher le dashboard client
    public function dashboard()
    {
        return view('client.dashboard');
    }

    public function profile()
    {
        return view('client.profile');
    }

    public function updateprofile(Request $request)
    {
        /** @var User $user */
        $user = Auth::user(); // Explicitly type-hinting

        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->password) {
            $user->password = Hash::make($request->password);
        }

        $user->update(); 
        return redirect('/client/profile');
    }

    public function cart()
    {
        $categories = Category::all(); 
        
        // Debugging: Retrieve all commandes for the user
        $commande = Commande::where('client_id', Auth::user()->id)->get();
    
        // Retrieve the active commande
        $commande = Commande::where('client_id', Auth::user()->id)
        ->where('etat', 'en cour')
        ->with('lignecommandes')
        ->first();

        
        
                            if (!$commande || $commande->lignecommandes->isEmpty()) {
                                $commande = null;
                            }
        return view('guest.cart')->with('categories', $categories)->with('commande', $commande);
    }
    
    
}