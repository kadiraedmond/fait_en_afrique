<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;
use App\Models\Requete;
use App\Models\Category;
use App\Models\Product;
class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $requete= DB::table('requetes')->get();
        $user = auth()->user();
        return view('dashboard.index',compact('user','requete'));
    }

    public function create()
    {
        return view('frontend.index') ;
        
    }

    public function store_requete(Request $request)
    {
            $this->validate($request, ['requete'=>'required|unique:requetes' ]);
                                       $requete=new Requete();
                                       $requete->user_id = auth()->id();
                                       $requete->requete=$request->input('requete');
                                       $requete->status=1;
                                       $requete->save();
                                       return redirect()->back()->with('status','votre requete a ete bien envoye');
       
    }

    public function product_add(){
        return view('dashboard.product-add');
    }

    public function product_edit(){
        return view('dashboard.product-edit');
    }

    public function product_list(){
        $user = auth()->user();
        $products = DB::table('products')->where('user_id', $user->id)->get();
        return view('dashboard.product-list',compact('products'));
    }
}
