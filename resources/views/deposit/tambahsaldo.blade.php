@extends('layouts.app')

@section('content')
<div class='container'>
     <div class="row justify-content-center">
         <div class="col-md-6">
                <div class="card"> 
                      <div class="card-body">
                        <form action="{{route('saldo.update', $depoait->id)}}" method="post">
                            @csrf
                            @method('PATCH')
                            <div class="from-group">
                               <label for="name">Nama </label>
                              <input type="text" name="name" id="name" value="{{$depoait->name}}"  class="form-control">
                            </div>
                            <div class="from-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat" id="alamat"  value="{{$depoait->alamat}}" class="form-control">
                             </div>
                          <div class="form-group">
                             <label for="telp">Telp</label>
                             <input type="number" name="telp" id="telp"  value="{{$depoait->telpon}}" class="form-control">
                          </div>
                          <div class="form-group">
                            <label for="saldo">Saldo</label>
                            <input type="number" name="saldo" id="saldo" class="form-control">
                         </div>
                          <div>
                          <button class="btn btn-outline-info btn-block">Simpan</button>
                         </div>
                     </form>
                 </div>
              <div>
         </div>
    </div>
</div>


@endsection