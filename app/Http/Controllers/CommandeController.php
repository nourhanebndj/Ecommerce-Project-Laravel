<?php

namespace App\Http\Controllers;

use App\Models\LigneCommande;
use Illuminate\Http\Request;
use App\Models\Commande;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;

class CommandeController extends Controller
{
    public function store(Request $request)
    {
        // Récupérer l'ID du client connecté
        $clientId = Auth::user()->id;

        // Vérifier si une commande "en cours" existe pour ce client
        $commande = Commande::where('client_id', $clientId)
                            ->where('etat', 'en cours')
                            ->first();

        // Si aucune commande n'est trouvée, en créer une nouvelle
        if (!$commande) {
            $commande = new Commande();
            $commande->client_id = $clientId;
            $commande->etat = 'en cours';
            $commande->save();
        }

        // Créer une nouvelle ligne de commande
        $lc = new LigneCommande();
        $lc->qte = $request->qte;
        $lc->product_id = $request->idproduct;
        $lc->commande_id = $commande->id;
        $lc->save();

        // Rediriger vers la page du panier avec la commande
        return redirect()->route('client.cart', ['commande' => $commande->id])
                         ->with('success', 'Produit commandé avec succès');
    }

    public function showCart($commandeId)
    {
        // Fetch the command with its line items and related products
        $commande = Commande::with('lignecommandes.product')->findOrFail($commandeId);

        // Calculate Subtotal
        $subtotal = $commande->lignecommandes->sum(function ($lc) {
            return $lc->product->price * $lc->qte;
        });

        $delivery = 500; // Example flat rate for delivery
        $total = $subtotal + $delivery;

        // Update the commande with the total price
        $commande->total_price = $total;
        $commande->save();

        // Fetch all categories
        $categories = Category::all();

        // Pass all values to the view
        return view('guest.cart', compact('commande', 'subtotal', 'delivery', 'total', 'categories'));
    }

    public function removeItem($id)
    {
        // Find the LigneCommande by ID and delete it
        $ligneCommande = LigneCommande::findOrFail($id);
        $commandeId = $ligneCommande->commande_id;
        $ligneCommande->delete();

        // Recalculate the totals if needed (optional)
        $commande = Commande::with('lignecommandes.product')->findOrFail($commandeId);
        $subtotal = $commande->lignecommandes->sum(function ($lc) {
            return $lc->product->price * $lc->qte;
        });
        $delivery = 500; // Example flat rate for delivery
        $total = $subtotal + $delivery;

        // Update the commande with the new total price
        $commande->total_price = $total;
        $commande->save();

        return view('client.checkout', compact('commande', 'subtotal', 'delivery', 'total'));
    }

    public function checkoutPage(Request $request)
    {
        // Retrieve the authenticated user
        $user = Auth::user();

        // Find the ongoing order for the user
        $commande = Commande::where('client_id', $user->id)
                            ->where('etat', 'en cours')
                            ->first();

        if (!$commande) {
            return redirect()->back()->with('error', 'No ongoing order found.');
        }

        // Calculate Subtotal
        $subtotal = $commande->lignecommandes->sum(function ($lc) {
            return $lc->product->price * $lc->qte;
        });

        $delivery = 500; // Example flat rate for delivery
        $total = $subtotal + $delivery;

        // Update the commande with the total price
        $commande->total_price = $total;
        $commande->save();

        $categories = Category::all();

        // Display the checkout view from the guest directory with the necessary data
        return view('guest.checkout', compact('commande', 'subtotal', 'delivery', 'total', 'user', 'categories'));
    }

    public function checkout(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'lastname' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'wilaya_id' => 'required|integer',
            'commune_id' => 'required|integer',
            'delivery' => 'required|in:domicile,bureau',
        ]);

        // Retrieve the authenticated user
        $user = Auth::user();

        // Retrieve the current commande
        $commande = Commande::where('client_id', $user->id)
                            ->where('etat', 'en cours')
                            ->first();

        if (!$commande) {
            return redirect()->back()->with('error', 'No ongoing order found.');
        }

        // Calculate the subtotal from the products in the commande
        $subtotal = $commande->lignecommandes->sum(function ($lc) {
            return $lc->product->price * $lc->qte;
        });

        $delivery = 500; // Fixed delivery fee
        $total = $subtotal + $delivery;

        // Update the commande with the final total
        $commande->total_price = $total;
        $commande->save();

        // Create a new order for the authenticated user based on the commande
        $order = Order::create([
            'client_id' => $user->id,
            'lastname' => $validatedData['lastname'],
            'phone' => $validatedData['phone'],
            'wilaya_id' => $validatedData['wilaya_id'],
            'commune_id' => $validatedData['commune_id'],
            'delivery' => $validatedData['delivery'],
            'total_price' => $total, // Store the total price here
        ]);

        // Store each product in the order items
        foreach ($commande->lignecommandes as $lc) {
            $order->items()->create([
                'product_name' => $lc->product->name,
                'quantity' => $lc->qte,
                'price' => $lc->product->price,
            ]);
        }

        // Mark the commande as completed
        $commande->etat = 'completed';
        $commande->save();

        // Redirect to the 'client.commande' page that lists the client's orders
        return redirect()->route('client.commande')->with('status', 'Order placed successfully!');
    }

    public function listOrders()
    {
        // Retrieve the authenticated user
        $user = Auth::user();

        // Fetch all orders for the authenticated client with their items
        $orders = Order::where('client_id', $user->id)->with('items')->get();

        // Pass the orders to the view
        return view('client.commande', compact('orders'));
    }

    public function showOrders()
    {
        $orders = Order::with(['wilaya', 'commune'])->get();
    
        return view('admin.Commandes.Commandes', compact('orders'));
    }
    
}