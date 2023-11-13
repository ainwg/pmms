@extends('layout')
@section('content')
    <section class="bg-white px-3 py-3">
        <div class="container d-flex flex-column align-items-center">
            
        <!-- Page header with logo and tagline-->
        <div class="text-center pt-5 mt-5">
            <h1 class="fw-bolder">Manage Vendor</h1>
        </div>
        
            <div class="btn-container d-flex justify-content-center gap-3">
                <a href="/AddVendorPage" class="btn btn-primary">Add Vendor List</a>
                <a href="/ViewVendorPage" class="btn btn-primary">View Vendor List</a>
            </div>
        </div>
    </section>
@endsection
