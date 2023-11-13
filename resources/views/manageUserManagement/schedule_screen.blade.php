@extends('layout')
@section('content')
<section>
<!DOCTYPE html>
<html>
<head>
    <title>Time Table</title>
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

        <table>

                      <tr>
                          <th></th>
                          <th>08:00 - 10:00</th>
                          <th>10:00 - 12:00</th>
                          <th>12:00 - 14:00</th>
                          <th>14:00 - 16:00</th>
                          <th>16:00 - 18:00</th>
                      </tr>
                        
                      <tr>
                          <th>Monday</th>
                          <td onclick="showPopup('{{ $schedule->where('day', 'Monday')->where('time', '08:00 - 10:00')->first()?->name }}')">
                          {{ $schedule->where('day', 'Monday')->where('time', '08:00 - 10:00')->first()?->name }}</td>
                          <td onclick="showPopup('{{ $schedule->where('day', 'Monday')->where('time', '10:00 - 12:00')->first()?->name }}')">
                          {{ $schedule->where('day', 'Monday')->where('time', '10:00 - 12:00')->first()?->name }}</td>
                          <td onclick="showPopup('{{ $schedule->where('day', 'Monday')->where('time', '12:00 - 14:00')->first()?->name }}')">
                          {{ $schedule->where('day', 'Monday')->where('time', '12:00 - 14:00')->first()?->name }}</td>
                          <td onclick="showPopup('{{ $schedule->where('day', 'Monday')->where('time', '14:00 - 16:00')->first()?->name }}')">
                          {{ $schedule->where('day', 'Monday')->where('time', '14:00 - 16:00')->first()?->name }}</td>
                          <td onclick="showPopup('{{ $schedule->where('day', 'Monday')->where('time', '16:00 - 18:00')->first()?->name }}')">
                          {{ $schedule->where('day', 'Monday')->where('time', '16:00 - 18:00')->first()?->name }}</td>
                      </tr>
                      <tr>
                          <th>Tuesday</th>
                          <td onclick="showPopup('{{ $schedule->where('day', 'Tuesday')->where('time', '08:00 - 10:00')->first()?->name }}')">
                          {{ $schedule->where('day', 'Tuesday')->where('time', '08:00 - 10:00')->first()?->name }}</td>
                          <td onclick="showPopup('{{ $schedule->where('day', 'Tuesday')->where('time', '10:00 - 12:00')->first()?->name }}')">
                          {{ $schedule->where('day', 'Tuesday')->where('time', '10:00 - 12:00')->first()?->name }}</td>
                          <td onclick="showPopup('{{ $schedule->where('day', 'Tuesday')->where('time', '12:00 - 14:00')->first()?->name }}')">
                          {{ $schedule->where('day', 'Tuesday')->where('time', '12:00 - 14:00')->first()?->name }}</td>
                          <td onclick="showPopup('{{ $schedule->where('day', 'Tuesday')->where('time', '14:00 - 16:00')->first()?->name }}')">
                          {{ $schedule->where('day', 'Tuesday')->where('time', '14:00 - 16:00')->first()?->name }}</td>
                          <td onclick="showPopup('{{ $schedule->where('day', 'Tuesday')->where('time', '16:00 - 18:00')->first()?->name }}')">
                          {{ $schedule->where('day', 'Tuesday')->where('time', '16:00 - 18:00')->first()?->name }}</td>
                      </tr>
                      <tr>
                          <th>Wednesday</th>
                          <td onclick="showPopup('{{ $schedule->where('day', 'Wednesday')->where('time', '08:00 - 10:00')->first()?->name }}')">
                          {{ $schedule->where('day', 'Wednesday')->where('time', '08:00 - 10:00')->first()?->name }}</td>
                          <td onclick="showPopup('{{ $schedule->where('day', 'Wednesday')->where('time', '10:00 - 12:00')->first()?->name }}')">
                          {{ $schedule->where('day', 'Wednesday')->where('time', '10:00 - 12:00')->first()?->name }}</td>
                          <td onclick="showPopup('{{ $schedule->where('day', 'Wednesday')->where('time', '12:00 - 14:00')->first()?->name }}')">
                          {{ $schedule->where('day', 'Wednesday')->where('time', '12:00 - 14:00')->first()?->name }}</td>
                          <td onclick="showPopup('{{ $schedule->where('day', 'Wednesday')->where('time', '14:00 - 16:00')->first()?->name }}')">
                          {{ $schedule->where('day', 'Wednesday')->where('time', '14:00 - 16:00')->first()?->name }}</td>
                          <td onclick="showPopup('{{ $schedule->where('day', 'Wednesday')->where('time', '16:00 - 18:00')->first()?->name }}')">
                          {{ $schedule->where('day', 'Wednesday')->where('time', '16:00 - 18:00')->first()?->name }}</td>
                      </tr>
                      <tr>
                          <th>Thursday</th>
                          <td onclick="showPopup('{{ $schedule->where('day', 'Thursday')->where('time', '08:00 - 10:00')->first()?->name }}')">
                          {{ $schedule->where('day', 'Thursday')->where('time', '08:00 - 10:00')->first()?->name }}</td>
                          <td onclick="showPopup('{{ $schedule->where('day', 'Thursday')->where('time', '10:00 - 12:00')->first()?->name }}')">
                          {{ $schedule->where('day', 'Thursday')->where('time', '10:00 - 12:00')->first()?->name }}</td>
                          <td onclick="showPopup('{{ $schedule->where('day', 'Thursday')->where('time', '12:00 - 14:00')->first()?->name }}')">
                          {{ $schedule->where('day', 'Thursday')->where('time', '12:00 - 14:00')->first()?->name }}</td>
                          <td onclick="showPopup('{{ $schedule->where('day', 'Thursday')->where('time', '14:00 - 16:00')->first()?->name }}')">
                          {{ $schedule->where('day', 'Thursday')->where('time', '14:00 - 16:00')->first()?->name }}</td>
                          <td onclick="showPopup('{{ $schedule->where('day', 'Thursday')->where('time', '16:00 - 18:00')->first()?->name }}')">
                          {{ $schedule->where('day', 'Thursday')->where('time', '16:00 - 18:00')->first()?->name }}</td>
                      </tr>
                      <tr>
                          <th>Friday</th>
                          <td onclick="showPopup('{{ $schedule->where('day', 'Friday')->where('time', '08:00 - 10:00')->first()?->name }}')">
                          {{ $schedule->where('day', 'Friday')->where('time', '08:00 - 10:00')->first()?->name }}</td>
                          <td onclick="showPopup('{{ $schedule->where('day', 'Friday')->where('time', '10:00 - 12:00')->first()?->name }}')">
                          {{ $schedule->where('day', 'Friday')->where('time', '10:00 - 12:00')->first()?->name }}</td>
                          <td onclick="showPopup('{{ $schedule->where('day', 'Friday')->where('time', '12:00 - 14:00')->first()?->name }}')">
                          {{ $schedule->where('day', 'Friday')->where('time', '12:00 - 14:00')->first()?->name }}</td>
                          <td onclick="showPopup('{{ $schedule->where('day', 'Friday')->where('time', '14:00 - 16:00')->first()?->name }}')">
                          {{ $schedule->where('day', 'Friday')->where('time', '14:00 - 16:00')->first()?->name }}</td>
                          <td onclick="showPopup('{{ $schedule->where('day', 'Friday')->where('time', '16:00 - 18:00')->first()?->name }}')">
                          {{ $schedule->where('day', 'Friday')->where('time', '16:00 - 18:00')->first()?->name }}</td>
                      </tr>
                  </table>

        <!-- Pop-up -->
        <div class="popup-overlay" id="popupOverlay">
            <div class="popup">
                <span class="popup-close" onclick="closePopup()">&times;</span>
                <h2 id="popupTitle"></h2>
                <div class="popup-buttons">
                    <button onclick="showPopupadd('add')">Add</button>
                </div>
            </div>
        </div>
        <!-- Pop-up add schedule-->
        <div class="popup-overlay" id="popupOverlayadd">
            <div class="popup">
                <h2>Add Schedule</h2>
                <form class="popup-form" action ="{{ route('schedule.add')}}" method="POST" onsubmit="submitForm(event)">
                {{csrf_field()}}
                    <input type="text" id="name" placeholder="Name" name="name" required>
                    <input type="text" id="student_id" placeholder="Student ID"  name="student_id" required>
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
        function showPopupadd(className) {
            document.getElementById('popupTitle').textContent = className;
            document.getElementById('popupOverlayadd').style.display = 'flex';
        }
        function closePopup() {
            document.getElementById('popupOverlay').style.display = 'none';
            document.getElementById('popupOverlayadd').style.display = 'none';
        }

        function performAction(action) {
            // Replace with your logic for handling the action
            alert(action + ' action performed!');
        }
        // function submitForm(event) {
        //         event.preventDefault();

        //         const name = document.getElementById('namet').value;
        //         const studentId = document.getElementById('studentId').value;

        //         // Send the data to the server using AJAX or fetch
        //         fetch('{{ route('schedule.store') }}', {
        //             method: 'POST',
        //             headers: {
        //                 'Content-Type': 'application/json',
        //                 'X-CSRF-TOKEN': '{{ csrf_token() }}',
        //             },
        //             body: JSON.stringify({ name: name, student_id: studentId }),
        //         })
        //             .then(response => response.json())
        //             .then(data => {
        //                 console.log(data);
        //                 closePopup();
        //                 // Add logic to handle success or display any messages
        //             })
        //             .catch(error => {
        //                 console.error('Error:', error);
        //                 // Add logic to handle error or display any messages
        //             });
        //     }
    </script>
</body>
</html>
</section>
@endsection 