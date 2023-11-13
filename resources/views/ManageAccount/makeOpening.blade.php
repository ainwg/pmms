@extends('layout')

@section('content')
    
    {{-- Open Register button --}}
    <div class="card" style="height: 80vh;">
        <div class="card-body d-flex align-items-center justify-content-center">
            <button type="button" class="btn btn-primary bg-primary" data-bs-toggle="modal" data-bs-target="#openCashfloat">
                Open Register
            </button>
        </div>
    </div>
    
    <!-- Make Opening Modal -->
    <form action="{{ url('/account/open-register') }}" method="POST">
        @csrf
    <div class="modal fade" id="openCashfloat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Opening Cash Float</h1>
            <button type="button" class="btn-close-dark " data-bs-dismiss="modal" aria-label="Close"></button>
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
                        <input type="hidden" name="account_open_amount" id="accountOpenAmount">   
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

    <script>
        
        // Get references to the input fields and the total amount element
        const inputFields = document.querySelectorAll('input[type="number"]');
        const totalAmountElement = document.getElementById('totalAmount');
        const accountOpenAmountInput = document.getElementById('accountOpenAmount');
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
            accountOpenAmountInput.value = total.toFixed(2);
        }

    </script>
    

@endsection