@extends('layout')
@section('content')
<section class="bg-body-secondary">
    <!-- Page header with logo and tagline-->
    <div class="text-start py-3 px-3">
        <h1 class="fw-bolder">Vendor</h1>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-1">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-borderless" id="dataTable">
                    <thead>
                        <tr>
                            <th>Vendor Name</th>
                            <th>Contact Number</th>
                            <th>Type of Vendor</th>
                            <th>Item Lists</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data_vendor as $vendor) 
                        <tr>
                            <td>{{$vendor->name}}</td>
                            <td>{{$vendor->contact_number}}</td>
                            <td>{{$vendor->type_vendor}}</td>
                            <td>{{$vendor->item}}</td>
                            <td><a href="EditVendorPage/{{$vendor->id}}/edit" type="button" class="btn btn-success bg-success">edit</a></td>
                            <td><a href="DeleteVendorPage/{{$vendor->id}}/delete" type="button" class="btn btn-danger bg-danger">delete</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="/VendorMainPage" class="btn btn-primary float-end">Back</a>
            </div>
        </div>
    </div>
</section>
@endsection
