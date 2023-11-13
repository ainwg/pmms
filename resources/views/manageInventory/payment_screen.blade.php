@extends('layout')
@section('content')
    <section class="bg-dark px-3 py-3"> 
                <div class="p-4 p-lg-5 bg-white rounded-3 text-center">
                    <div class="position-relative">
                    <a class="position-absolute top-0 end-0"  href="/pos"><i class="bi bi-x-lg"></i></a>
                    </div>
                    <div class="p-5 m-4 m-lg-5">
                        
                        <h1 class="display-5 fw-bold">Payment Method</h1>
                        <a class="btn btn-secondary bg-secondary btn-lg p-5 m-3" href="/pay/cash">CASH</a>
                        <a class="btn btn-secondary bg-secondary btn-lg p-5 m-3" href="/pay/qr">QR PAY</a>
                        <!--Form-->
                        <form action="/pay/cash" method="GET">
                        {{csrf_field()}}
                        <p class="text-center fs-4 fw-semibold">TOTAL PRICE: RM<input name="transaction_amount" type="amount" class="form-control" id="amount" placeholder="Insert amount" required> </p>
                        <div class="input-group mb-3">
                        <select name="transaction_type" class="form-select" id="inputGroupSelect01">
                            <option selected>Select Payment</option>
                            <option value="Cash">CASH</option>
                            <option value="Qr Pay">QR PAY</option>
                        </select>
                        </div>
                        <button type="submit" class="btn btn-primary bg-primary">Confirm</button>
                        </form>
                    </div>
                </div>
    </section>
@endsection 