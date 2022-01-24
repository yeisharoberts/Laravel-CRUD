<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        $customer = Customer::all();
        //pass data to views
        return view('customers.index',['customers'=>$customer]);
    }

    public function create(){
        return view('customers.create');
    }

    public function store(Customer $customer){
  //      validate if the details exist in our request or not
        request()->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'username' => 'required',
            'age' => 'required',
            'address' => 'required'
        ]);

        Customer::create([
            'firstname' => request('firstname'),
            'lastname' => request('lastname'),
            'username' => request('username'),
            'age' => request('age'),
            'address' => request('address'),
        ]);
        return redirect('/customers');
    }

    public function edit(Customer $customer){
        return view('customers.edit',['customer'=>$customer]);
    }

    public function update(Customer $customer){

        request()->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'username' => 'required',
            'age' => 'required',
            'address' => 'required'
        ]);
        $customer->update([
            'firstname' => request('firstname'),
            'lastname' => request('lastname'),
            'username' => request('username'),
            'age' => request('age'),
            'address' => request('address')
        ]);
        return redirect('/customers');
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();
        //back to main page after deletion
        return redirect('/customers');
    }

    public function show(Customer $customer)
    {
        return view('customers.show',[
            'customers' => Customer::find($customer)
        ]);
    }   
}
