<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    //
    public function index(){
        $categories=Category::where('status',1)->get();
        $products=Product::where('status',1)->get();
        $sliders=Slider::where('status',1)->get();
   
        return view('frontclient.index',compact('sliders'))->with('categories',$categories)->with('products',$products);
        
    }

    public function about(){
        return view('frontclient.about');
    }

    public function allcategorie(){
        return view('frontclient.allcategorie');
    }

    public function blog(){
        return view('frontclient.blog');
    }

    public function category(){
        $categories=Category::where('status',1)->get();
        $products=Product::where('status',1)->get();
   
        return view('frontclient.category')->with('categories',$categories)->with('products',$products);
        
    }

    public function contact(){
        return view('frontclient.contact');
    }

    public function compte(User $user, $raison_sociale){
        // $user = auth()->user();
        // $products = $user->products;
        $product_detail= Product::find($user);
        $author = User::where('raison_sociale', $raison_sociale)->firstOrFail();

        if ($author && $author->role === 'admin') {
            $products = $author->products;
            return view('frontclient.compte', ['user' => $user,'author' => $author,'products' => $products,'product_detail' => $product_detail]);
            // return view('author.profile', compact('author', 'authoredProducts'));
        } 
        if ($author && $author->role === 'societe') {
            $products = $author->products;
            return view('frontclient.compte', ['user' => $user,'author' => $author,'products' => $products,'product_detail' => $product_detail]);
            // return view('author.profile', compact('author', 'authoredProducts'));
        }
        else {
            
            return redirect()->back()->with('error', 'Auteur non trouvé');
        }


    }

    public function produit_details($id){
        $product_detail= Product::find($id);
        return view('frontclient.product-details', ['product_detail' => $product_detail]);
    }

    public function login(){
        return view('frontclient.login');
    }

    public function register1(){
        return view('frontclient.register');
    }

    public function politique_con(){
        return view('frontclient.politique-con');
    }

    public function search_societe(Request $request){
        $query = $request->input('query');
        $products = User::where('raison_sociale', 'like', "%$query%")->get();
        return view('frontclient.search-societe',compact('products'));
    }

    public function search_product(Request $request){
        $query = $request->input('query');
        $products = Product::where('nom', 'like', "%$query%")->get();
        return view('frontclient.search-result',compact('products'));
    }
}
