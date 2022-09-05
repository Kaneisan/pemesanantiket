@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard Admin') }}</div>
                <div class="card-body">
                    <form action="/cektiket" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Masukkan Nomor Tiket</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="no_tiket">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection