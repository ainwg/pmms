@extends('layout')

@section('content')

    <!-- Close Register Modal -->
    <form action="{{ url('/account/close-register') }}" method="POST">
        @csrf
    <div class="modal fade" id="closeCashfloat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Closing Cash Float</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">5 sen</label>
                    <div class="col-sm-3">
                        <input type="number" class="form-control" name="rm0.05" min="0">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">10 sen</label>
                    <div class="col-sm-3">
                        <input type="number" class="form-control" name="rm0.1" min="0">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">20 sen</label>
                    <div class="col-sm-3">
                        <input type="number" class="form-control" name="rm0.2" min="0">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">50 sen</label>
                    <div class="col-sm-3">
                        <input type="number" class="form-control" name="rm0.5" min="0">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">RM1</label>
                    <div class="col-sm-3">
                        <input type="number" class="form-control" name="rm1" min="0">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">RM5</label>
                    <div class="col-sm-3">
                        <input type="number" class="form-control" name="rm5" min="0">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">RM10</label>
                    <div class="col-sm-3">
                        <input type="number" class="form-control" name="rm10" min="0">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">RM20</label>
                    <div class="col-sm-3">
                        <input type="number" class="form-control" name="rm20" min="0">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">RM50</label>
                    <div class="col-sm-3">
                        <input type="number" class="form-control" name="rm50" min="0">
                    </div>
                </div>
                <div class="mb-3 row">
                    <h5 class="col-sm-2 col-form-label">Total</h5>
                    <div class="col-sm-3">
                        <h3 id="totalAmount"></h3>
                        <input type="hidden" name="account_close_amount" id="accountCloseAmount">   
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary bg-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary bg-primary">Submit</button>
            </div>
        </div>
        </div>
    </div>
    </form>

    <div class="row">
        <div class="col">
            <div class="d-flex flex-row-reverse">
                {{-- Close Register button --}}
                <button type="button" class="btn btn-danger bg-danger" data-bs-toggle="modal" data-bs-target="#closeCashfloat">
                    Close Register
                </button>
            </div>
        </div>
    </div>

    <br>

    <div class="card">
        <div class="card-body">
            <h4>{{ $account_open_datetime ? \Carbon\Carbon::parse($account_open_datetime)->setTimezone('Asia/Kuala_Lumpur')->format('d-m-y h:i A') : '' }}</h4>

            <br>

            <table class="table">
                <tbody>
                    <tr>
                        <th>Cash Float</th>
                        <td>RM {{ $account_open_amount }}</td>
                    </tr>
                    <tr>
                        <th>Cash Payment</th>
                        <td>RM {{ $sales_amount }}</td>
                    </tr>
                    <tr>
                        <th>Other Payment</th>
                        <td>RM 0.00</td>
                    </tr>
                    <tr class="table-secondary">
                        <th class="fs-5">Total Payment</th>
                        <td class="fs-5">RM {{ number_format($sales_amount + $account_open_amount, 2) }}</td>
                    </tr>
                    <tr class="table-secondary">
                        <th class="fs-5">Total Sales</th>
                        <td class="fs-5">RM {{ $sales_amount }}</td>
                    </tr>
                </tbody>
              </table>

        </div>
    </div>


    <script>
        
        // Get references to the input fields and the total amount element
        const inputFields = document.querySelectorAll('input[type="number"]');
        const totalAmountElement = document.getElementById('totalAmount');
        const accountCloseAmountInput = document.getElementById('accountCloseAmount');
        const form = document.querySelector('form');

        // Add event listeners to the input fields
        inputFields.forEach(inputField => {
            inputField.addEventListener('input', calculateTotal);
        });

        // Calculate the total amount
        function calculateTotal() {
            let total = 0;

            // Loop through the input fields and calculate the total
            inputFields.forEach(inputField => {
                const value = parseFloat(inputField.value) || 0;
                const denomination = parseFloat(inputField.name.replace(/[^0-9.-]+/g, '')) || 0; // Extract denomination from input field name
                total += value * denomination;
            });

            // Display the total amount
            totalAmountElement.textContent = 'RM' + total.toFixed(2);
            accountCloseAmountInput.value = total.toFixed(2);
        }

    </script>
    

@endsection