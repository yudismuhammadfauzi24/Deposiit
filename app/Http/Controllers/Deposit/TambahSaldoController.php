<?php

namespace App\Http\Controllers\deposit;

use App\Deposit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TambahSaldoController extends Controller
{
    public function create($id){
        $depoait = Deposit::findOrFail($id);
 
         return view('deposit.tambahsaldo', compact('depoait'));
     }
     public function update(Request $request, $id){
         $depoait = Deposit::findOrFail($id);
 
         $hitung = $depoait->saldo + $request->saldo;
         $depoait->update([
             'saldo' => $hitung,
         ]);
         flash()->success('Saldo  berhasil di tambah');
 
         return redirect(route('deposit'));
      
        }
}
