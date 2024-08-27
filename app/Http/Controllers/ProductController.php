<?php 
namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
// Display the list of products
public function index()
{
$products = Product::with('category')->get();
$categories = Category::all();
return view('admin.products.index', compact('products', 'categories'));
}

// Store the product
public function store(Request $request)
{
$request->validate([
'name' => 'required|string|max:255',
'description' => 'required|string|max:255',
'price' => 'required|numeric',
'price_promotion' => 'nullable|numeric',
'qte' => 'required|integer',
'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
'additional_photos.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
'category_id' => 'required|exists:categories,id',
]);

$produit = new Product();
$produit->name = $request->name;
$produit->description = $request->description;
$produit->price = $request->price;
$produit->price_promotion = $request->price_promotion;
$produit->qte = $request->qte;
$produit->category_id = $request->category_id;

if ($request->hasFile('photo')) {
$newname = uniqid() . '.' . $request->file('photo')->getClientOriginalExtension();
$destinationPath = 'uploads';
$request->file('photo')->move($destinationPath, $newname);
$produit->photo = $newname;
}

$additionalPhotos = [];
if ($request->hasFile('additional_photos')) {
foreach ($request->file('additional_photos') as $additionalPhoto) {
$additionalNewName = uniqid() . '.' . $additionalPhoto->getClientOriginalExtension();
$additionalPhoto->move($destinationPath, $additionalNewName);
$additionalPhotos[] = $additionalNewName;
}
$produit->additional_photos = json_encode($additionalPhotos);
}

if ($produit->save()) {
return redirect()->back()->with('success', 'Product saved successfully!');
} else {
return redirect()->back()->with('error', 'Error saving product.');
}
}

// Delete a product
public function destroy($id)
{
$produit = Product::find($id);
if ($produit) {
$file_path = public_path('uploads/' . $produit->photo);
if (file_exists($file_path)) {
unlink($file_path);
}

// Handle additional photos deletion
if ($produit->additional_photos) {
$additionalPhotos = json_decode($produit->additional_photos, true);
foreach ($additionalPhotos as $additionalPhoto) {
$additionalFilePath = public_path('uploads/' . $additionalPhoto);
if (file_exists($additionalFilePath)) {
unlink($additionalFilePath);
}
}
}

if ($produit->delete()) {
return redirect()->back()->with('success', 'Product deleted successfully!');
} else {
return redirect()->back()->with('error', 'Error deleting product.');
}
} else {
return redirect()->back()->with('error', 'Product not found.');
}
}

// Update product
public function update(Request $request, $id)
{
// Validate the request data
$request->validate([
'name' => 'required|string|max:255',
'description' => 'required|string|max:255',
'price' => 'required|numeric',
'price_promotion' => 'nullable|numeric',
'qte' => 'required|integer',
'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
'additional_photos.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
'category_id' => 'required|exists:categories,id',
]);

// Find the product by ID
$produit = Product::find($id);

// Check if the product exists
if (!$produit) {
return redirect()->back()->with('error', 'Product not found.');
}

// Update the product details
$produit->name = $request->name;
$produit->description = $request->description;
$produit->price = $request->price;
$produit->price_promotion = $request->price_promotion;
$produit->qte = $request->qte;
$produit->category_id = $request->category_id;

$destinationPath = 'uploads';

// Update main photo
if ($request->file('photo')) {
$file_path = public_path() . '/uploads/' . $produit->photo;
if (file_exists($file_path)) {
unlink($file_path);
}

// Upload new photo
$newname = uniqid() . '.' . $request->file('photo')->getClientOriginalExtension();
$request->file('photo')->move($destinationPath, $newname);
$produit->photo = $newname;
}

// Update additional photos
if ($request->hasFile('additional_photos')) {
// Delete old additional photos
if ($produit->additional_photos) {
$oldAdditionalPhotos = json_decode($produit->additional_photos, true);
foreach ($oldAdditionalPhotos as $oldPhoto) {
$oldFilePath = public_path('uploads/' . $oldPhoto);
if (file_exists($oldFilePath)) {
unlink($oldFilePath);
}
}
}

// Save new additional photos
$additionalPhotos = [];
foreach ($request->file('additional_photos') as $additionalPhoto) {
$additionalNewName = uniqid() . '.' . $additionalPhoto->getClientOriginalExtension();
$additionalPhoto->move($destinationPath, $additionalNewName);
$additionalPhotos[] = $additionalNewName;
}
$produit->additional_photos = json_encode($additionalPhotos);
}

// Save the updated product
if ($produit->save()) {
return redirect()->back()->with('success', 'Product updated successfully!');
} else {
return redirect()->back()->with('error', 'Error updating product.');
}
}
}