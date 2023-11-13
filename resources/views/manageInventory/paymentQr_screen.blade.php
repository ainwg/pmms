@extends('layout')
@section('content')
    <section class="bg-dark px-3 py-3">             
                <div class="p-4 p-lg-5 bg-white rounded-3 text-center">
                    <div class="position-relative">
                    <a class="position-absolute top-0 end-0"  href="/pos"><i class="bi bi-x-lg"></i></a>
                    </div>
                    <div class="p-2 m-3 m-lg-5">
                        <h1 class="display-5 pb-3 fw-bold">QR Pay</h1>
                        <h3 class="display-8 fw-bold">Scan to Pay</h3>
                        <img src="{{ URL::asset('assets/images/qr.jpg')}}" class="rounded mx-auto d-block" width="30%" height="30%">
                    </div>
                    <a href="/pay/success" type="button" class="btn btn-primary bg-primary">Confirm</a>
                </div>
    </section>
@endsection 