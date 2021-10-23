<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{


    public function index(\App\Models\Supplier $supplier)
    {
        $suppliers = $supplier::all();

        return view('supplier.index', compact('suppliers'));

    }

    public function create()
    {
        return  view('supplier.create');

    }

    public function store()
    {
        $data = request()->validate([

            'name'=> 'required|min:2',
            'address'=> 'sometimes|nullable',
            'business'=> 'required',
            'phone1' => 'required|numeric',
            'phone2' => 'sometimes|nullable',
            'mail' => 'required|email',
            'website'=> 'sometimes|nullable',
            'whatsapp'=> 'sometimes|nullable',
            'facebook'=> 'sometimes|nullable'
        ]);

        \App\Models\Supplier::create($data);

        return redirect (route('suppliers'));

    }

    public function edit(\App\Models\Supplier $supplier)
    {

        return  view('supplier.edit', compact('supplier'));
    }

    public function update(\App\Models\Supplier $supplier)
    {

        $data = request()->validate([

            'Name'=> 'required|min:2',
            'Address'=> 'sometimes|nullable',
            'Business'=> 'required',
            'Phone1' => 'required|numeric',
            'phone2' => 'sometimes|nullable',
            'Mail' => 'required|email',
            'Website'=> 'sometimes|nullable',
            'Whatsapp'=> 'sometimes|nullable',
            'Facebook'=> 'sometimes|nullable'

        ]);

        $supplier->update($data);

        return redirect(route('suppliers'));

    }
    public function destroy(\App\Models\Supplier $supplier )
    {
        $supplier->delete();

        return redirect(route('suppliers'));
    }

    public function search(Request $request )
    {
//
//        $query= $request->input('query');
//
//        $suppliers = Supplier::where('name','like',"%$query%")
//                             ->orwhere('business','like',"%$query%")
//                             ->orwhere('phone1','like',"%$query%")
//                             ->orwhere('phone2','like',"%$query%")
//                             ->orwhere('mail','like',"%$query%")
//                             ->orwhere('facebook','like',"%$query%")
//                             ->orwhere('website','like',"%$query%")
//                             ->orwhere('whatsapp','like',"%$query%")
//                             ->paginate(7);
//
//
//
//
//
//        return  view('supplier.search', compact('suppliers'));

    }






}
