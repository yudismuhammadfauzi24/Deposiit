<?php

namespace App\Http\Controllers\Deposit;

use App\Deposit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DepositController extends Controller
{
    public function index(){

        $depoait = Deposit::all();
        return view('deposit.index',compact('depoait'));
    }
    public function create(){
        return view('deposit.create');
    }
    public function store(Request $request){
        $depoait = Deposit::create([
            'name'=>$request->name,
            'alamat'=>$request->alamat,
            'telepon'=>$request->telepon,
            'saldo'=>$request->saldo,
        ]);

        flash()->success('Saldo berhasil di buat');

        return redirect()->back();
    }
    }
