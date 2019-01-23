<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Model\Product;
use App\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Product[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return new ProductResource(Product::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product([
            'name' => $request->name,
            'amount'=> $request->amount,
        ]);
        new ProductResource($product->save());
        return http_response_code(200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Product[]|\Illuminate\Database\Eloquent\Collection
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        $collection = new ProductResource($product);
        return $collection->jsonSerialize();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $collection = new ProductResource($product->update($request->all()));
        $collection;
        return http_response_code(201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        new ProductResource($product->delete());

        return http_response_code(204);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Product[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getMinAmount(ProductService $productService){
        return new ProductResource($productService->getAllByMinFive());
    }
    /**
     * Display a listing of the resource.
     *
     * @return Product[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getWithNoResultAmount(ProductService $productService){
        return new ProductResource($productService->getWithNoResultAmount());
    }
}
