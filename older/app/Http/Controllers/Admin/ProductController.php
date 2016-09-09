<?php

namespace Fully\Http\Controllers\Admin;

use Fully\Product;
use Request;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Fully\Http\Requests;
use Fully\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.products',['products' => $products]);    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    try {


            $this->file->create(Input::all());
            $this->product->create(Input::all());
            Flash::message('product was successfully added');
            return langRedirectRoute('admin.products.index');
        } catch (ValidationException $e) {
            return langRedirectRoute('admin.products.create')->withInput()->withErrors($e->getErrors());
        }

        // $file = Request::file('file');
        // $extension = $file->getClientOriginalExtension();
        // Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));

        // $entry = new \App\File();
        // $entry->mime = $file->getClientMimeType();
        // $entry->original_filename = $file->getClientOriginalName();
        // $entry->filename = $file->getFilename().'.'.$extension;

        // $entry->save();

        // $product  = new Product();
        // $product->file_id=$entry->id;
        // $product->name =Request::input('name');
        // $product->description =Request::input('description');
        // $product->price =Request::input('price');
        // $product->imageurl =Request::input('imageurl');

        // $product->save();

        // return redirect('/admin/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect('/admin/products');
    }




}