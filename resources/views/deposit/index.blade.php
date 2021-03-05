@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card border-0 shadow">
        <div class="card-body">
            <div class="d-flex mb-2p">
                <div class="mr-auto">
                    <a href="{{route('deposit.create')}}" class="btn btn-info mr-2">Tambah Saldo</a>
                </div>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>Saldo</th>
                </tr>
            </thead>
            <tbody>
                @foreach($depoait as $deposit)
                <tr>
                    <td><a href="{{route('tambahsaldo', $deposit->id)}}" class="btn btn-outline-primary btn-sm">{{$deposit->name}}</a></td>
                    <td>{{$deposit->alamat}}</td>
                    <td>{{$deposit->telepon}}</td>
                    <td><a href="{{route('kurangsaldo', $deposit->id)}}" class="btn btn-outline-primary btn-sm">Rp.{{$deposit->saldo}}</a></td>
                </td>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>    
    </div>
</div>
</div>

@endsection