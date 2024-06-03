<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{
    protected $product;

    public function __construct()
    {
        $this->product = new product();
    }
    public function index()
    {
        $products = $this->product->all();
        $categories = Category::pluck("catname", "id");

        return view("product.index", compact("products", "categories"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->product->create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::where("id", $id)->first();
        $products = $this->product->all();
        $categories = Category::pluck("catname", "id");


        $view_data = [
            'product' => $product,
            'category' => $categories,
        ];
        return view('product.edit', compact("products", "categories"), $view_data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = $this->product->find($id);
        $product->update(array_merge($product->toArray(), $request->toArray()));

        return redirect('product')->with('success', 'product Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = $this->product->find($id);
        $product->delete();

        return redirect('product')->with('success', 'Deleted!');
    }
}
