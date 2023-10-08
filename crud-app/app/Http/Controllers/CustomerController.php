<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
 
     public function index()
    {
        //
        $customers = DB::table('customers')->get();//find all
        return view('customer.index',compact('customers'));
    }
    /**
     * Display a listing of the resource.
     

    /**
     * Show the form for creating a new resource.
     */

    //   public function index(){

    //     $customer = DB::table('customers')->get();

    //     return view('customer.index',compact('customer'));
    // }
    public function create()
    {
        //
        $category = DB::table('categories')->get();
        return view('customer.create')->with('categorylist',$category);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        
        // $customer = new Customer();
    //     $customer->name = $request->input('name');
    //     $customer->address = $request->input('address');
    //     $customer->email = $request->input('email');
    //     $customer->phone = $request->input('phone');
    //     $customer->age = $request->input('age');
    //     $customer->category_id = $request->input('category_id');
    // $customer->save();


        $request->validate([
                'name'=>'required|unique:customers',
                'age'=>'required|integer|min:0|max:1000',
                'image'=>'required|mimes:jpg,png,jpeg|max:5048'
        ]);


        $generatedImageName = 'image' . time() . '-'
            . $request->name . '.'
            . $request->image->extension();

        $request->image->move(public_path('images'), $generatedImageName);

        

        $customer1 = Customer::create([
            'name'=>$request->input('name'),
            'address'=>$request->input('address'),
            'email'=>$request->input('email'),
            'phone'=>$request->input('phone'),
            'age'=>$request->input('age'),
             'category_id' => $request->input('categories'),
             'image_path'=>$generatedImageName
             ]);
        
    
        return redirect('/customer');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        $customers = Customer::find($id);
        $category = Category::find($customers->category_id);
        return view('customer.show',compact('customers','category'));
      
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $customer = Customer::find($id);
        $categorylist = DB::table('categories')->get();
        // dd($id);
        return view('customer.edit', compact('customer','categorylist'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $customer = Customer::where('id', $id)
            ->update([
                'name'=>$request->input('name'),
            'address'=>$request->input('address'),
            'email'=>$request->input('email'),
            'phone'=>$request->input('phone'),
            'age'=>$request->input('age')
            ]);
        return redirect('/customer');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $customer = Customer::where('id',$id)
                    ->delete();
        return redirect('/customer');
    }
}