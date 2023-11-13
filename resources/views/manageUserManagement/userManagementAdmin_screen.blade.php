@extends('layout')
@section('content')
<section>
<!DOCTYPE html>
<html>
<head>
    <title>User Management</title>
    <style>
        body {
            
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            text-align: center;
        }
        
        h1 {
            margin-bottom: 20px;
        }

        .total-cashier {
            font-weight: bold;
            margin-bottom: 20px;
        }

        .button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
    <h1>User Management Interface</h1>
        <div class="containers">
            
        </div>

        <button class="button" onclick="handleStaff()">Staff</button>
        <button class="button" onclick="handleSchedule()">Schedule</button>
    </div>
</body>
</html>
<script>
        function handleSchedule() {
            // Handle schedule button click event
            window.location.href = 'scheduleadmin'
            console.log("Schedule button clicked");
            // Add your logic here for handling schedule
        }

        function handleStaff() {
            // Handle staff button click event
            window.location.href = 'stafflistadmin'
            console.log("Staff button clicked");
            // Add your logic here for handling staff
        }
    </script>
</section>
@endsection 