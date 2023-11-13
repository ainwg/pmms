@extends('layout')
@section('content')
<section>
<!DOCTYPE html>
<html>
<head>
    <title>PROMOTION</title>
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

        .edit-button,
        .delete-button,
        .details-button {
            padding: 5px 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .delete-button {
            background-color: red;
        }

        .add-button {
            position: absolute;
            right: 410px;
            top: 75px;
            margin-top: 10px;
            padding: 5px 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        a{
            color:white;
            text-decoration:none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>PROMOTION</h1>

        <table>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Date Start</th>
                <th>Date End</th>
                <th>Actions</th>
            </tr>
            @foreach($promotion as $promotions)
            <tr>
                <td>{{$promotions['title']}}</td>
                <td>{{$promotions['description']}}</td>
                <td>{{$promotions['time_start']}}</td>
                <td>{{$promotions['time_end']}}</td>
                <td>
                    <button class="details-button"><a href="{{ route('promotion.detail', $promotions['id']) }}">Details</a></button>
                </td>
            </tr>
            @endforeach
        </table>

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
                window.location.href = 'staffdetailadmin'
            }

            function addStaff() {
                // Implement the logic to add a new staff member
                // This function is called when the "Add" button is clicked
                window.location.href = 'addstaff'
                console.log('Add button clicked');
            }

            function editStaff(staffName) {
                // Implement the logic to edit an existing staff member
                // This function is called when the "Edit" button is clicked for a specific staff member
                window.location.href = 'editstaff'
                console.log('Edit button clicked for ' + staffName);
            }

            function deleteStaff(staffName) {
                // Implement the logic to delete an existing staff member
                // This function is called when the "Delete" button is clicked for a specific staff member
                console.log('Delete button clicked for ' + staffName);
            }
        </script>
    </div>
</body>
</html>
</section>
@endsection 