@extends('layout')
@section('content')
<section>
    <style>
        body {
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            text-align: center;
        }

        .button-box {
            display: inline-block;
            margin-top: 20px;
        }

        .button {
            display: block;
            width: 100%;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-bottom: 10px;
        }
    </style>
    <div class="container">
        <h1>User Management Interface</h1>

        <div class="button-box">
            <button class="button" onclick="handleAttendance()"></a>Attendance</button>
            <button class="button" onclick="handleSchedule()">Schedule</button>
            <button class="button" onclick="handleStaff()">Staff</button>
        </div>
    </div>
    <script>
        function handleAttendance() {
            // Handle attendance button click event
            window.location.href = 'addattendance'
            console.log("Attendance button clicked");
            // Add your logic here for handling attendance
        }

        function handleSchedule() {
            // Handle schedule button click event
            window.location.href = 'schedule'
            console.log("Schedule button clicked");
            // Add your logic here for handling schedule
        }

        function handleStaff() {
            // Handle staff button click event
            window.location.href = 'stafflist'
            console.log("Staff button clicked");
            // Add your logic here for handling staff
        }
    </script>

</section>
@endsection 