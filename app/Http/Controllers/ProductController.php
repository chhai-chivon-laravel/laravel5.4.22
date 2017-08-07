<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class ProductController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request)
	{
		$limit = 15;

		if ($request->has('limit')) {
			$limit = $request->get('limit');
		}

		//dd(Session::all());

		/*if (Session::has('session1')) {
			$s1 = Session::get('session1');
			dd($s1);
		}

		dd(Session::all());*/

		// TODO: create page view index

		// TODO: list product with pagination



		/*return Product::paginate($limit);*/
		return view("products.list");
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
		/*dd($request->all());*/
		/*$product = new Product();
		$product->name = $request->name;
		$product->description = $request->get("description");
		$product->save();*/

		$pro = Product::create($request->all());

		// TODO:  if error alert message else alert message success

		$request->session()->put('session1', 'session1');

		return redirect('products')->with('session2', 'session2');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		$data = [];
		$product = Product::findOrFail($id);
		$data['pro'] = $product;
		return view("products/show",$data);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		// TODO: show view edit with product
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		// TODO: find all product by id if product = null or not found redirect edit with error message
		// TODO: update product by $id than redirect index page
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		//
	}
}
