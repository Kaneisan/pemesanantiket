@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Detail Tiket') }}</div>
                <div class="col"><br>
                    <a href="/home" type="button" class="btn btn-secondary">Back</a>
                </div>
                <div class="card-body">
                    <section class="vh-100" style="background-color: #eee;">
                        <div class="container py-5 h-100">
                            <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col-md-12 col-xl-4">

                                    <div class="card" style="border-radius: 15px;">
                                        <div class="card-body text-center">
                                            <h4 class="mb-2">{{$tikets->nama}}</h4>
                                            <p class="text-muted mb-4">{{$tikets->email}} <span class="mx-2">|</span>
                                            <p>Nomor Tiket : {{$tikets->no_tiket}}</p>
                                            </p>


                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                </div>
                </section>
            </div>
        </div>
    </div>
</div>
</div>
@endsection