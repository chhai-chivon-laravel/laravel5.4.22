<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		/*$limit = 15;

		if ($request->has('limit')) {
			$limit = $request->get('limit');
		}*/
		/*return Product::paginate($limit);*/
		return Product::all();
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view("products.create");
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
        $product = Product::create($request->all());
        return response()->json($product, 201);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  Product $product
	 * @return \Illuminate\Http\Response
	 */
	public function show(Product $product)
	{
		return $product;
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		return view('products/edit/'+$id);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  Product $product
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request,Product $product)
	{
	    $product ->update($request->all());
	    return response()->json($product,200);
	}

	/**
	 * Remove the specified resource f//rom storage.
	 *
	 * @param  Product $product
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Product $product)
	{
       $product->delete();
       return response()->json(null,204);
	}
}
