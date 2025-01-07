@extends('layouts.default')

@section('title', 'Appointments')

@section('content')
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Book an Appointment</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>

<body class="bg-light p-4">
    <div class="container bg-white p-4 rounded shadow">
        <h1 class="text-center text-3xl font-weight-bold mb-4 bg-primary text-white py-3 rounded">
            Book an Appointment
        </h1>
        <div class="mb-4">
            <h2 class="pl-3 text-xl text-white font-weight-bold mb-4 bg-primary py-2 rounded">
                Doctor
            </h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="bg-light p-3 rounded text-center cursor-pointer hover-shadow" onclick="selectDoctor('dr. Azwan Syamh')">
                        <img alt="Placeholder image of dr. Azwan Syamh" class="mx-auto mb-2 rounded-circle" height="100" src="https://storage.googleapis.com/a1aa/image/SyUvsA3M1Zp4J5fVw4fiyYgBt1WMeIEcba9sIwmEgzPnUgfPB.jpg" width="100" />
                        <p class="text-lg font-weight-medium">dr. Azwan Syamh</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="bg-light p-3 rounded text-center cursor-pointer hover-shadow" onclick="selectDoctor('dr. Indah')">
                        <img alt="Placeholder image of dr. Indah" class="mx-auto mb-2 rounded-circle" height="100" src="https://storage.googleapis.com/a1aa/image/4TiU6HVGX4ItMRGTdKgb71HHCbPPSuepp73Hi3ClFhiMF4fTA.jpg" width="100" />
                        <p class="text-lg font-weight-medium">dr. Indah</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="bg-light p-3 rounded text-center cursor-pointer hover-shadow" onclick="selectDoctor('dr. Syaida')">
                        <img alt="Placeholder image of dr. Syaida" class="mx-auto mb-2 rounded-circle" height="100" src="https://storage.googleapis.com/a1aa/image/MNfrjFe5hinCjE7Bz3evk55m7XFeHTU2pNkVbayIZUHCpAffE.jpg" width="100" />
                        <p class="text-lg font-weight-medium">dr. Syaida</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-4">
            <h2 class="pl-3 text-xl text-white font-weight-bold mb-4 bg-primary py-2 rounded">
                Dentist
            </h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="bg-light p-3 rounded text-center cursor-pointer hover-shadow" onclick="selectDoctor('drs. Ibnu')">
                        <img alt="Placeholder image of drs. Ibnu" class="mx-auto mb-2 rounded-circle" height="100" src="https://storage.googleapis.com/a1aa/image/yaQfitxVTdWeOkNS1vYT10VSCk7GxgYlOfbfnCFkT3MWpAffE.jpg" width="100" />
                        <p class="text-lg font-weight-medium">drs. Ibnu</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- =========================Start Appointment Form =================================== -->
        <div class="mt-6 bg-light">
            <h2 class="pl-3 text-xl text-white font-weight-bold mb-4 bg-primary py-2 rounded">
                Book an Appointment
            </h2>
            <div class="p-5">

                <form method="POST" action="{{ route('appointments.store') }}" class="p-5 rounded-lg">
                    @csrf
                    <div class="mb-4">
                        <label class="form-label" for="doctor-name">Doctor Name</label>
                        <!-- Doctor selection dropdown -->
                        <select class="form-select" id="doctor-name" name="doctor_id">
                            <option value="">Select a Doctor</option>
                            @foreach ($doctors as $doctor)
                            <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-4">
                        <label class="form-label" for="appointment-type">Appointment Type</label>
                        <select class="form-select" id="appointment-type" name="appointment_type">
                            <option value="online">Online</option>
                            <option value="offline">Offline</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label class="form-label" for="appointment-date">Date</label>
                        <input class="form-control" id="appointment-date" name="appointment_date" type="date">
                    </div>

                    <div class="mb-4">
                        <label class="form-label" for="appointment-time">Time</label>
                        <input class="form-control" id="appointment-time" name="appointment_time" type="time">
                    </div>

                    <div class="d-flex justify-content-between">
                        <button class="btn btn-success" type="submit">Book Appointment</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- =========================End Appointment Form =================================== -->

        <div class="mt-6">
            <h2 class="pl-3 text-xl text-white font-weight-bold mb-4 bg-primary py-2 rounded">
                Cancel Appointment
            </h2>
            <form class="bg-light p-4 rounded">
                <div class="mb-4">
                    <label class="form-label" for="appointment-id">Appointment ID</label>
                    <input class="form-control" id="appointment-id" type="text" placeholder="Enter Appointment ID">
                </div>
                <div class="mb-4">
                    <label class="form-label" for="reason">Reason for Cancellation</label>
                    <textarea class="form-control" id="reason" placeholder="Enter Reason"></textarea>
                </div>
                <div class="d-flex justify-content-between">
                    <button class="btn btn-danger" type="button">Cancel Appointment</button>
                </div>
            </form>
        </div>
        <div class="mt-6">
            <h2 class="pl-3 text-xl text-white font-weight-bold mb-4 bg-primary py-2 rounded">
                Appointments List
            </h2>
            <div class="overflow-auto">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Doctor Name</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Monday</td>
                            <td>9:00 AM</td>
                            <td>dr. Azwan Syamh</td>
                            <td>
                                <select class="form-select">
                                    <option value="active">Active</option>
                                    <option value="miss">Missed</option>
                                    <option value="canceled">Canceled</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Tuesday</td>
                            <td>10:00 AM</td>
                            <td>dr. Indah</td>
                            <td>
                                <select class="form-select">
                                    <option value="active">Active</option>
                                    <option value="miss">Missed</option>
                                    <option value="canceled">Canceled</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        function selectDoctor(doctorName) {
            document.getElementById('doctor-name').value = doctorName;
        }
    </script>
</body>

</html>
@endsection