<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function viewProduct($slug) {
        $product = Product::where('slug', $slug)->first();

        return view('pages.productdetail', compact('product'));
    }

    public function addProductPage() {
        return view('pages.admin.addproduct');
    }

    public function addProduct(ProductRequest $request) {
        $file = $request->file('image');
        $imageName = Str::slug($request->name).'.'.$file->getClientOriginalExtension();
        Storage::putFileAs('public/images', $file, $imageName);
        $imageName = 'images/'.$imageName;

        Product::create([
            'slug'        => Str::slug($request->name),
            'image'       => $imageName,
            'name'        => $request->name,
            'description' => $request->description,
            'price'       => $request->price,
            'stock'       => $request->stock
        ]);

        return redirect()->route('index');
    }


    public function search(Request $request) {
        $products = Product::where('name', 'LIKE', "%$request->search%")->paginate(8);

        return view('pages.search')->with('products', $products);
    }

    public function deleteItem($slug) {
        $item = Product::where('slug', $slug)->first();

        if(isset($item)) {
            Storage::delete('public/'.$item->image);
            $item->delete();
        }

        return redirect()->route('index');
    }
}
