@extends('layout')
@section('content')
<section>
<!DOCTYPE html>
<html>
<head>
    <title>SCHEDULE</title>
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
            width: 100%;
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

        /* Pop-up Styling */
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
            position:relative;
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
        .popup-close {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 18px;
            color: #999;
            cursor: pointer;
        }

        .popup-close:hover {
            color: #555;
        }
        
    </style>
</head>
<body>
    <div class="container">
        <h1>SCHEDULE</h1>
        
        <button onclick="showPopup1()">Add</button>
        <table>

            <tr>
                <th></th>
                @foreach($time_header as $time_header)
                    <th>{{ $time_header }}</th>
                @endforeach
            </tr>
            
            <tr>
                @foreach($days as $days)
                    <tr>
                        <td>{{ $days }}</td>
                        @foreach($times as $time)
                            <td>
                                @foreach($schedules as $schedule)
                                    @if($schedule['day'] == $days && $schedule['time_id'] == $time['id'])
                                        {{ $schedule['name'] }}
                                        <a href="{{ route('admin.schedules.edit',  $schedule['id']) }}">&#9999;</i></a>
                                        <a href="{{ route('admin.schedules.delete',  $schedule['id']) }}"> &#128465;</i></a>
                                    @endif
                                @endforeach
                            </td>
                        @endforeach
                    </tr>
                @endforeach
            </tr>
        </table>

        <!-- Pop-up -->
        <div class="popup-overlay" id="popupOverlay">
            <div class="popup">
                <span class="popup-close" onclick="closePopup()">&times;</span>
                <h2 id="popupTitle"></h2>
                <div class="popup-buttons">
                    <button onclick="showPopup1()">Add</button>
                    <button onclick="performAction('delete')">Delete</button>
                </div>
            </div>
        </div>

        

        <!-- Pop-up add schedule-->
        <div class="popup-overlay" id="popupOverlay1">
            <div class="popup">
                <h2>Add Schedule</h2>
                <form class="popup-form" action ="{{ route('admin.schedule.add') }}" method="POST" onsubmit="submitForm(event)">
                {{csrf_field()}}
                    <input type="text" id="name" placeholder="Name" name="name" required>
                    <input type="text" id="student_id" placeholder="Student ID" name="student_id" required>
                        <div id="day" id="colFormLabelLg" >
                        <select id="day" name="day">
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                        </div>
                        <div id="time" id="colFormLabelLg" >
                        <select id="time_id" name="time_id">
                            @foreach($times as $times)
                                <option value="{{$times['id']}}">{{$times['time']}}</option>
                            <!-- <option value="10:00 - 12:00">10:00 - 12:00</option>
                            <option value="12:00 - 14:00">12:00 - 14:00</option>
                            <option value="14:00 - 16:00">14:00 - 16:00</option>
                            <option value="16:00 - 18:00">16:00 - 18:00</option> -->
                            @endforeach
                        </select>
                        </div>
                    <div class="popup-buttons">
                        <button type="submit">Submits</button>
                        <button type="button" onclick="closePopup()">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Pop-up edit schedule-->
        <div class="popup-overlay" id="popupOverlay2">
            <div class="popup">
                <h2>Edit Schedule</h2>
                {{csrf_field()}}
                <form class="popup-form"  onsubmit="submitForm(event)">
                    <input type="text" id="nameInput" placeholder="Name" required>
                    <input type="text" id="studentIdInput" placeholder="Student ID" required>
                    <div class="popup-buttons">
                        <button type="submit">Submit</button>
                        <button type="button" onclick="closePopup()">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function showPopup(className) {
            document.getElementById('popupTitle').textContent = className;
            document.getElementById('popupOverlay').style.display = 'flex';
        }
        function showPopup1(className) {
            document.getElementById('popupTitle').textContent = className;
            document.getElementById('popupOverlay1').style.display = 'flex';
        }
        function showPopup2(className) {
            document.getElementById('popupTitle').textContent = className;
            document.getElementById('popupOverlay2').style.display = 'flex';
        }


        function closePopup() {
            document.getElementById('popupOverlay').style.display = 'none';
            document.getElementById('popupOverlay1').style.display = 'none';
            document.getElementById('popupOverlay2').style.display = 'none';
        }

        
        // function submitForm(event) {
        //     event.preventDefault();

        //     // Get the input values
        //     var name = document.getElementById('nameInput').value;
        //     var studentId = document.getElementById('studentIdInput').value;

        //     // You can perform further processing with the name and studentId
        //     console.log('Name:', name);
        //     console.log('Student ID:', studentId);

        //     // Close the pop-up
        //     closePopup();
        // }

        function performAction(action) {
            // Replace with your logic for handling the action
            alert(action + ' action performed!');
            closePopup();
        }
    </script>
</body>
</html>
</body>
</html>
</section>
@endsection 