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
                <a href = "/pay" class="btn btn-primary bg-primary">PAY</a>
                    <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Item</th>
                                <th>Quantity</th>
                                <th>Transaction</th>
                            </tr>
                        </thead>
                        <tbody>
                        <!--Form-->
                        <form action="/add" method="POST">
                        {{csrf_field()}}
                            <tr>
                            <td>
                                <select name="inventory_id" class="form-select" id="inputGroupSelect01">
                                <option selected required>Select Inventory ID</option>
                                @foreach($data_inventory as $inventory) 
                                    <option value="{{$inventory->inventory_id}}">{{$inventory->inventory_name}}</option>
                                @endforeach
                                </select>
                            </td>
                            <td>
                                <input name="purchase_quantity" type="quantity" class="form-control" id="quantity" placeholder="Insert quantity" required>
                            </td>
                            <td>
                                <input name="transaction_id" type="id" class="form-control" id="quantity" placeholder="Insert id" required>
                            </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
                        <div class="float-end px-2 py-2">
                        <button type="submit" class="btn btn-primary bg-primary btn-lg">+ ADD ITEM</button>
                        </div>
                        </form>  
                    
    </section>
@endsection 