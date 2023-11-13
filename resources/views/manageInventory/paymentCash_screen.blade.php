@extends('layout')
@section('content')
    <section class="bg-dark px-3 py-3">             
                <div class="p-4 p-lg-5 bg-white rounded-3 text-center">
                    <div class="position-relative">
                    <a class="position-absolute top-0 end-0"  href="/pos"><i class="bi bi-x-lg"></i></a>
                    </div>
                    <div class="p-3 m-3 m-lg-5">
                        <h1 class="display-5 pb-5 fw-bold">Cash</h1>
                        <h3 class="display-8 fw-bold">Enter Amount Paid</h3>
                        <div class="input-group mb-3 display-8">
                        <span class="input-group-text">RM</span>
                        <input type="text" class="form-control form-control-lg bg-body-secondary">
                        </div>
                        <a href="/pay/balance" type="button" class="btn btn-primary bg-primary">Confirm</a>
                    </div>
                </div>
    </section>
@endsection 