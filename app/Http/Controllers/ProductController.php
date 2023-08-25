<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
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
        //
    }
    function select_by_cat($name){
        $categories=Category::get();
        $products=Product::where('product_category',$name)->where('status',1)->get();
        return view  ('frontclient.index')->with('products',$products)->with('categories',$categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::All()->pluck('category_name','category_name');
        return view('dashboard.product-add')->with('categories',$categories);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $this->validate($request, ['nom'=>'required|unique:products',
                                       'prix'=>'required',
                                       'product_category'=>'required',
                                       'product_image'=>'image|nullable|max:1999']);
   
                                       if($request->hasFile('product_image')){
                                          //1-select image with extension
                                          $fileNameWithExt=$request->file('product_image')->getClientOriginalName();
                                          //2-get just file name
                                          $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
                                          //3-get just extension
                                           $extension = $request->file('product_image')->getClientOriginalExtension();
                                          //4-file name store
                                          $fileNametostore=$fileName.'_'.time().'.'.$extension;
                                          //uplaoder l'image
                                          $path=$request->file('product_image')->move('product_images/product_images',
                                                     $fileNametostore);
                                       }
                                       else{
                                           
                                           $fileNametostore='noimage.jpg';
                                       }
                                       $produit=new Product();
                                       $produit->user_id = auth()->id();
                                       $produit->nom=$request->input('nom');
                                       $produit->prix=$request->input('prix');
                                       $produit->product_category=$request->input('product_category');
                                       // $produit->mot_de_passe=$request->input('mot_de_passe');
                                       // $produit->email=$request->input('email');
                                       
                                       // $product->product_category=$request->input('product_category');
                                       $produit->product_image=$fileNametostore;
                                       $produit->status=1;
                                       $produit->save();
                                       return redirect()->back()->with('status','le  produit  ' .$produit->nom.'  a ete bien ajoute');
                                    
                                   
       
    }




    public function searchproduct(Request $request){
        $nom = $request->input('nom');
        $category_name = $request->input('category_name');
        // $domaine = $request->input('domaine');

        $searchproduct = DB::table('products')
                ->where('nom', 'LIKE', '%'.$nom.'%')
                ->where('category_name','LIKE', '%'.$category_name.'%')
                // ->where('domaine', 'LIKE', '%'.$domaine.'%')
            
                ->paginate(6);
        
            return view('frontend.search',compact('searchproduct'));
    
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
    public function edit()
    {
        return view('dashboard.product-edit');
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
