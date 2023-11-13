@extends('layout')
@section('content')
    <section class="bg-body-secondary">
        <!-- Page header with logo and tagline-->
        <div class="text-start py-3 px-3">
            <h1 class="fw-bolder">Inventory</h1>
        </div>
        <!-- DataTales Example -->
        <div class="card shadow mb-1">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-borderless" id="dataTable">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Item Name</th>
                                <th>Item Price (RM)</th>
                                <th>Quantity</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($data_inventory as $inventory) 
                            <tr>
                                <td><div class="container" style="max-width: 200px;"><img src="{{$inventory->inventory_image}}" class="figure-img img-fluid rounded"></div></td>
                                <td>{{$inventory->inventory_name}}</td>
                                <td>{{$inventory->inventory_price}}</td>
                                <td>{{$inventory->inventory_quantity}}</td>
                                <td><a href = "inventory/{{$inventory->inventory_id}}/edit" type="button" class="btn btn-success bg-success">edit</a></td>
                                <td><a href = "inventory/{{$inventory->inventory_id}}/confirm" type="button" class="btn btn-danger bg-danger">delete</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <a type="button" class="btn btn-info bg-info" href="/inventory/form">+ add item</a>
    </section>
@endsection 