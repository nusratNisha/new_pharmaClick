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
        @if (auth()->user()->role=='patient')

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
        @endif



        @if (auth()->user()->role=='patient')
        <!-- =========================Start Appointment Form =================================== -->
        <div class="mt-6 bg-light">
            <h2 class="pl-3 text-xl text-white font-weight-bold mb-4 bg-primary py-2 rounded">
                Book an Appointment
            </h2>
            <div class="p-5">
                <form method="POST" action="{{ route('appointments.store') }}" class="p-5 rounded-lg">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="doctor-name" class="font-weight-bold">Doctor Name</label>
                        <select class="form-control" id="doctor-name" name="doctor_id" required>
                            <option value="" disabled selected>Select a Doctor</option>
                            @foreach ($doctors as $doctor)

                            <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="type" class="font-weight-bold">Appointment Type</label>
                        <select class="form-control" id="type" name="type" required>
                            <option value="online">Online</option>
                            <option value="offline">Offline</option>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="date" class="font-weight-bold">Date</label>
                        <input type="date" class="form-control" id="date" name="date" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="time" class="font-weight-bold">Time</label>
                        <input type="time" class="form-control" id="time" name="time" required value="08:00">
                    </div>

                    <div class="form-group d-flex justify-content-between">
                        <button type="submit" class="btn btn-success font-weight-bold">Book Appointment</button>
                    </div>
                </form>
            </div>
        </div>
        @endif
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Set the minimum date to today's date
                var today = new Date();
                var minDate = today.toISOString().split('T')[0];
                document.getElementById('date').setAttribute('min', minDate);

                // Disable weekends (Saturday and Sunday)
                var dateInput = document.getElementById('date');
                dateInput.addEventListener('input', function() {
                    var selectedDate = new Date(this.value);
                    var dayOfWeek = selectedDate.getDay(); // 0 = Sunday, 6 = Saturday
                    if (dayOfWeek === 0 || dayOfWeek === 6) {
                        alert('Appointments cannot be booked on weekends.');
                        this.value = ''; // Clear the value if weekend is selected
                    }
                });


                // Validate time on input (ensure it's within 8 AM to 6 PM)
                var timeInput = document.getElementById('time');
                timeInput.addEventListener('input', function() {
                    var selectedTime = this.value;
                    if (selectedTime < '08:00' || selectedTime > '18:00') {
                        alert('Please select a time between 08:00 AM and 06:00 PM.');
                        this.value = ''; // Clear the value if the time is out of range
                    }
                });
            });
        </script>
        <!-- =========================End Appointment Form =================================== -->
        @if (auth()->user()->role=='patient')
        <div class="mt-5 mb-5">
            <h2 class="pl-3 text-xl text-white font-weight-bold mb-4 bg-primary py-2 rounded">
                My Appointment
            </h2>
            <div class="table-responsive">
                <table class="table table-striped m-b-0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Doctor</th>
                            <th>Type</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Status</th>
                            <th width="1%">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($userAppointments as $index => $appointment)

                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $appointment->doctor->name }}</td>
                            <td>{{ ucfirst($appointment->type) }}</td>
                            <td>{{ \Carbon\Carbon::parse($appointment->date)->format('d M Y') }}</td>
                            <td>{{ \Carbon\Carbon::parse($appointment->time)->format('H:i') }}</td>
                            <td class="{{ strtolower($appointment->status) == 'canceled' ? 'text-red' : '' }}">{{ ucfirst($appointment->status) }}</td>
                            <td class="with-btn" nowrap>
                                @if ($appointment->status !='Canceled')
                                <a href="{{ route('appointment.cancel', ['id' => $appointment->id]) }}" class="btn btn-sm btn-danger  p-3">Cancel Appointment</a>
                                @endif
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center">No appointments found</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        @endif



        @if (auth()->user()->role=='doctor')
        <!-- ========================= Appointments for Doctors only =================================== -->
        <div class="mt-6 bg-light">
            <h2 class="pl-3 text-xl text-white font-weight-bold mb-4 bg-primary py-2 rounded">
                Appointments
            </h2>
            <div class="table-responsive">
                <table class="table table-striped m-b-0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Patient</th>
                            <th>Type</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Status</th>
                            <th width="1%">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($doctorAppointments as $index => $appointment)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $appointment->user->name }}</td> <!-- Patient's name -->
                            <td>{{ ucfirst($appointment->type) }}</td>
                            <td>{{ \Carbon\Carbon::parse($appointment->date)->format('d M Y') }}</td>
                            <td>{{ \Carbon\Carbon::parse($appointment->time)->format('H:i') }}</td>
                            <td class="{{ strtolower($appointment->status) == 'canceled' ? 'text-red' : '' }}">
                                {{ ucfirst($appointment->status) }}
                            </td>
                            <td class="with-btn" nowrap>
                                @if ($appointment->status == 'Pending')
                                <a href="{{ route('appointment.approve', ['id' => $appointment->id]) }}"
                                    class="btn btn-sm btn-success p-2 mr-2">Approve</a>
                                <a href="{{ route('appointment.reject', ['id' => $appointment->id]) }}"
                                    class="btn btn-sm btn-danger p-2">Reject</a>
                                @elseif ($appointment->status == 'Approved')
                                <a href="{{ route('appointment.reject', ['id' => $appointment->id]) }}"
                                    class="btn btn-sm btn-danger p-2">Reject</a>
                                @elseif ($appointment->status == 'Rejected')
                                <span class="badge badge-danger">Rejected</span>
                                @endif

                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center">No appointments found</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        @endif

    </div>

    <script>
        function selectDoctor(doctorName) {
            document.getElementById('doctor-name').value = doctorName;
        }
    </script>
</body>

</html>
@endsection