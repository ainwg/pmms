@extends('layout')
@section('content')
<section>
<!DOCTYPE html>
<html>
<head>
    <title>Staff List</title>
    <style>
        body {
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            text-align: center;
        }

        table {
            width: 400px;
            margin: 0 auto;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ccc;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        .details-button {
            padding: 5px 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Staff List</h1>
        
        <table>
            <tr>
                <th>Name</th>
                <th>Student ID</th>
                <th>Actions</th>
            
            </tr>
        @foreach($data_staffs as $staff)
            <tr>
                
                <td>{{$staff['name']}}</td>
                <td>{{$staff['student_id']}}</td>
                <td>
                    <!-- <button class="details-button" onclick="route('user.detail', {{$staff['id']}})">Details</button> -->
                    <button class="details-button"><a href="{{ route('staff.detail', $staff['id']) }}">Details</a></button>
                </td>
            </tr>
        @endforeach
        </table>
    </div>

    <script>
        function showDetails(staffName) {

            // Display the pop-up overlay
            document.getElementById('popupOverlay').style.display = 'flex';

            // Set the staff name in the pop-up
            document.getElementById('staffName').textContent = staffName;

            // Set the staff details in the pop-up (you can fetch the details from a database or any other source)
            var staffDetails = getStaffDetails(staffName); // Replace this with your own logic to fetch staff details
            document.getElementById('staffDetails').textContent = staffDetails;
        }

        function closePopup() {
            // Hide the pop-up overlay
            document.getElementById('popupOverlay').style.display = 'none';
        }

        function getStaffDetails(staffName) {
            // This is a placeholder function to fetch staff details based on their name
            // Replace this with your own logic to fetch staff details from a database or any other source
            // Return the staff details as a string
             window.location.href = 'staffdetail'
            
        }
    </script>
</body>
</html>
</section>
@endsection 