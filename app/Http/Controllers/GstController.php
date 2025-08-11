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
        try{

            $validate = $request->validate([
                'gstin' => 'string|required',
                'date' => 'string|required',
                'invoice' => 'string|required',
                'product' => 'string|required',
                'amts' => 'array|required'
            ]);
            
            Transaction::create([
                'invoice' => $validate['invoice'],
                'seller_gstin' => $validate['gstin'],
                'trans_date' => $validate['date'],
                'product_name' => $validate['product'],
                'total' => 1023
            ]);
            foreach ($validate['amts'] as $taxslab => $value) {
                if($value>0){
                    Taxes::create([
                    'invoice'   => $validate['invoice'],
                    'tax_slab'  => $taxslab,
                    'amount'    => $value
                ]);
            }
        }
        }catch(\Exception $e) {
            return response()->json(['message'=>$e->getMessage()]);
        }



        return response()->json(['message'=>'Data saved successfully']);

    }

    public function display() {
        $firms = Firm::all();
        return view('user.display',compact('firms'));
    }


}
