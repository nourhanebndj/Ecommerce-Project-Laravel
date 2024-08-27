<?php 
namespace App\Http\Controllers; 
   use App\Models\Product;
   use App\Models\Category; 
   use Illuminate\Http\Request; 
   use Illuminate\Database\Eloquent\ModelNotFoundException;

    
     class GuestController extends Controller { public function
    home() { 
    $produits=Product::latest()->take(6)->get();
    $categories = Category::all();
    return view('guest.home')->with('produits', $produits)->with('categories', $categories);
    }

    public function productDetails($id)
    {
    $produit = Product::find($id);
    if (!$produit) {
    return redirect()->route('home')->with('error', 'Product not found');
    }

    // Retrieve similar products
    $similarProducts = Product::where('category_id', $produit->category_id)
    ->where('id', '!=', $produit->id)
    ->get();

    // Retrieve all categories
    $categories = Category::all();

    return view('guest.product-details', [
    'produit' => $produit,
    'similarProducts' => $similarProducts,
    'categories' => $categories,
    ]);
    }

    public function shop(Request $request){
      $categories = Category::all();
      $products = Product::query();
  
      if ($request->has('category')) {
          $products->where('category_id', $request->category);
      }
  
      $products = $products->get();
  
      return view('guest.shop', compact('categories', 'products'));
  }
  
  public function categoryDetails($id)
    {
        $categories = Category::all();
        $category = Category::find($id);
        $products = $category->products; // Assurez-vous que la relation est définie dans votre modèle Category

        return view('guest.category-detail', compact('categories', 'category', 'products'));
    }
  public function search(Request $request){
    $products=Product::where('name','LIKE','%'.$request->search .'%')->get();
    $categories = Category::all();
    return view('guest.shop', compact('categories', 'products'));

  }
    }