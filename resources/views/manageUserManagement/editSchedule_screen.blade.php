@extends('layout')
@section('content')
<section><!DOCTYPE html>
<html>
<head>
    <title>User Information</title>
    <style>
        body {
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            text-align: left;
        }

        .popup-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .popup {
            background-color: #fff;
            padding: 20px;
            border-radius: 4px;
        }

        .popup-form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .popup-form input[type="text"] {
            padding: 5px;
        }

        .popup-buttons {
            margin-top: 20px;
        }

        .popup-buttons button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin: 0 10px;
        }
    </style>
</head>
<body>
    <div class="container">    
        <h1>Add User</h1>
        <form action="/scheduleadmin/{{$schedules->id}}/update" method="POST">
        {{csrf_field()}}
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="{{$schedules->name}}" >
            </div>
            <div class="form-group">
                <label for="student-id">Student ID:</label>
                <input type="text" id="student_id" name="student_id" value="{{$schedules->student_id}}" >
            </div>
            <div id="day" id="colFormLabelLg" >
            <label for="name">Day:</label>
                        <select id="day" name="day">
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                        </div>
                        <div id="time" id="colFormLabelLg" >
                        <label for="name">Time:</label>
                        <select id="time" name="time">
                            <option value="08:00 - 10:00">08:00 - 10:00</option>
                            <option value="10:00 - 12:00">10:00 - 12:00</option>
                            <option value="12:00 - 14:00">12:00 - 14:00</option>
                            <option value="14:00 - 16:00">14:00 - 16:00</option>
                            <option value="16:00 - 18:00">16:00 - 18:00</option>
                        </select>
                        </div>
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>

    <script>
        function showPopup() {
            document.getElementById('popupOverlay').style.display = 'flex';
        }

        function closePopup() {
            document.getElementById('popupOverlay').style.display = 'none';
        }

        function submitForm(event) {
            event.preventDefault();

            // Get the input values
            var name = document.getElementById('nameInput').value;
            var studentId = document.getElementById('studentIdInput').value;

            // You can perform further processing with the name and studentId
            console.log('Name:', name);
            console.log('Student ID:', studentId);

            // Close the pop-up
            closePopup();
        }
    </script>
</body>
</html>
</section>
@endsection 