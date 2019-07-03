<?php

namespace App\Http\Controllers\Api;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
	private $product;

	public function __construct(Product $product)
	{
		$this->product = $product;
	}

    public function index()
    {
    	return response()->json($this->product->paginate(5));
    }

    public function show(Product $id)
    {
        $product = $this->product->find($id);

        $data = ['data' => $product];
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $productData = $request->all();
        $this->product->create($productData);

        return response()->json(['msg' => 'Product Created Successfully', 'code' => 201]);
    }

    public function update(Request $request, Product $id)
    {
        $data = $request->all();
        $id->update($data);

        return response()->json(['msg' => 'Product Updated Successfully', 'code' => 201]);
    }

    public function delete(Product $id)
    {
        $id->delete();

        return response()->json(['msg' => 'Product (' . $id->name . ') Deleted Successfully', 'code' => 200]);

    }
}
