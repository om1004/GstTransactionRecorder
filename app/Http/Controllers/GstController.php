<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Firm;
use App\Models\Taxes;
use App\Models\Transaction;

class GstController extends Controller
{
    public function userForm()
    {
        return view('user.form');
    }

    public function transactionForm()
    {
        return view('transaction.form');
    }

    public function userStore(Request $request) {
        $request->validate([
            'username' => 'required|string',
            'gstin' => 'required|string',
        ]);

        Firm::create($request->all());
        
        return redirect()->route('user.display')->with('success','User added successfully');
    }

    public function transactionStore(Request $request)
    {
        $validate = $request->validate([
            'gstin' => 'string|required',
            'date' => 'string|required',
            'invoice' => 'string|required',
            'product' => 'string|required',
            'amt' => 'integer|required',
            'tax_slab' => 'array|required'
        ]);

        Transaction::create([
            'invoice' => $validate['invoice'],
            'seller_gstin' => $validate['gstin'],
            'trans_date' => $validate['date'],
            'product_name' => $validate['product'],
            'total' => $validate['amt']
        ]);


        Taxes::create([
            'invoice' => $validate['invoice'],
            'tax_slab' => 5
        ]);

        return response()->json(['message'=>'Data saved successfully']);

    }

    public function display() {
        $firms = Firm::all();
        return view('user.display',compact('firms'));
    }


}
