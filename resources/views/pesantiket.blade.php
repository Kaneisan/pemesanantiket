@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
                @endif
                <div class="card-header">{{ __('Pemesanan Tiket') }}</div>

                <div class="card-body">
                    <form action="{{ url('tiket')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" placeholder="Isikan Nama Lengkap">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Isikan Email">
                            <small id="email" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Alamat</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="alamat" aria-describedby="emailHelp" placeholder="Isikan Alamat">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <button type="submit" class="btn btn-primary">Pesan Tiket</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection