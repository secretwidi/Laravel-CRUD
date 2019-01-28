<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;

class SupplierController extends Controller
{
        function index(){
          $supplier = Supplier::get(['supplier_id','name','address', 'telp']);
          return view('supplier.index', compact('supplier'));
        }

        function create(){
          return view('supplier.create');
        }

        function store(Request $request){
          $txtId = $request->input('txt_id');
          $txtName = $request->input('txt_name');
          $txtAddress = $request->input('txt_address');
          $txtTelp = $request->input('txt_telp');

          echo $txtId."<br /> ".
          $txtName."<br />".
          $txtAddress."<br />".
          $txtTelp;

          Supplier::create([
            'supplier_id'=>$txtId,
            'name' =>$txtName,
            'address'=>$txtAddress,
            'telp'=>$txtTelp
          ]);

          return redirect('/Supplier');
        }

        public function show($id){
          $supplier = Supplier::where('supplier_id', $id)->get();
          return view('supplier.show',compact('supplier'));
        }

        public function edit($id) {
          $supplier = Supplier::where('supplier_id', $id)->get();
          return view('supplier.edit',compact('supplier'));
        }

        public function update(Request $request, $id)
        {
          $txtId = $request->input('txt_id');
          $txtName = $request->input('txt_name');
          $txtAddress = $request->input('txt_address');
          $txtTelp = $request->input('txt_telp');

          Supplier::where('supplier_id', $id)->update([
            'name'=> $txtName,
            'address'=> $txtAddress,
            'telp'=> $txtTelp
          ]);

          return redirect('/Supplier');
        }

        public function destroy($id)
        {
          $supplier = Supplier::where('supplier_id', $id)->first();
          $supplier->delete();
          return redirect('/Supplier');
        }
};
