<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    public function index(){
        return Customer::all();
    }

    public function create(request $request){
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'password' => 'required',
            'email' => 'required',
            'alamat' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 200);
        }

        $customer = new customer;
        $customer->nama = $request->nama;
        $customer->password = Hash::make($request->password);
        $customer->email = $request->email;
        $customer->alamat = $request->alamat;
        $customer->save();
        
        return response()->json($customer, 201);
        // return "Data berhasil Masuk";
    }

    public function delete($id){
        $customer = Customer::find($id);
        $customer->delete();

        return "Data berhasil dihapus";
    }

    public function show($id){
        $customer = Customer::find($id);
        // return response()->json(['success'=>'true','data'=>$customer],201);

        return $customer;
    }
}