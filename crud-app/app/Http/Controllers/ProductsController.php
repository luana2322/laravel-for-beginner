<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function index(){
        $title = 'This is products view';
        $x = 2;
        return view('products.index',compact('title','x'));
    }

    public function getlistem(){
        $title = 'This is products view 1';

        $product = DB::table('products')
        //     ->min('id')
            
        //     // ->find(1) //auto is id
        //     // ->latest()
        //     // ->orderBy('id')
        //     // ->whereBetween('id',[1,5])
        //     // ->where("created_at",">","now()->subDay()")
        //     // ->orWhere('id',">","0")
        //     // ->select("body")
        //     // ->first()
            ->get();//all

        // $product1 = DB::table('products')
        //     ->where("id", 1)
        //     // ->update([
        //     //     'name' => 'product 1'
        //     // ])            
        //     ->delete();

        // dd($product);

        return view('products.index',compact('product'));

        }
    //
}