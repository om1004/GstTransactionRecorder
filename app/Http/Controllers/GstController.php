<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Firm;

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

    public function store(Request $request) {
        $request->validate([
            'username' => 'required|string',
            'gstin' => 'required|string',
        ]);

        Firm::create($request->all());
        
        return redirect()->route('user.display')->with('success','User added successfully');
    }

    public function display() {
        $firms = Firm::all();
        return view('user.display',compact('firms'));
    }


}
