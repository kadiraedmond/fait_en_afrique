<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function category_add()
    {
        //
        return view('dashboard.category-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sauverproduit(Request $request)
    {
        $this->validate($request, [
            'category_name' => 'required|unique:categories',
            'image' => 'image|nullable|max:1999']);

            if($request->hasFile('category_image')){
                //1-select image with extension
                $fileNameWithExt=$request->file('category_image')->getClientOriginalName();
                //2-get just file name
                $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
                //3-get just extension
                 $extension = $request->file('category_image')->getClientOriginalExtension();
                //4-file name store
                $fileNametostore=$fileName.'_'.time().'.'.$extension;
                //uplaoder l'image
                $path=$request->file('category_image')->move('category_image/category_image', 
                $fileNametostore);
             }

           else{
               $fileNametostore='noimage.jpg';
           }

        $categorie = new category();
        $categorie->category_name = $request->input('category_name');
        $categorie->category_image=$fileNametostore;
        $categorie->status=1;
        $categorie->save();
        return redirect()->back()->with('status','la categorie' . $categorie->category_name . 'a ete bien publie');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function category_list()
    {
        $categories = Category::get();
        return view('dashboard.category-list')->with('categories', $categories);
    

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('dashboard.product-add');
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
        //
    }
}
