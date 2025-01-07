@extends('layouts.default')

@section('title', 'Appointments')

@section('content')
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Book an Appointment</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-100 p-4">
    <div class="max-w-6xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-center text-3xl font-bold mb-6 bg-blue-950 text-white py-4 rounded">
            Book an Appointment
        </h1>
        <div class="mb-6">
            <h2 class="pl-3 text-xl text-white font-semibold mb-4 bg-blue-900 py-2 rounded ">
                Doctor
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="bg-gray-200 p-4 rounded-lg text-center cursor-pointer hover:bg-gray-300" onclick="selectDoctor('dr. Azwan Syamh')">
                    <img alt="Placeholder image of dr. Azwan Syamh" class="mx-auto mb-2 rounded-full" height="100" src="https://storage.googleapis.com/a1aa/image/SyUvsA3M1Zp4J5fVw4fiyYgBt1WMeIEcba9sIwmEgzPnUgfPB.jpg" width="100" />
                    <p class="text-lg font-medium">dr. Azwan Syamh</p>
                </div>
                <div class="bg-gray-200 p-4 rounded-lg text-center cursor-pointer hover:bg-gray-300" onclick="selectDoctor('dr. Indah')">
                    <img alt="Placeholder image of dr. Indah" class="mx-auto mb-2 rounded-full" height="100" src="https://storage.googleapis.com/a1aa/image/4TiU6HVGX4ItMRGTdKgb71HHCbPPSuepp73Hi3ClFhiMF4fTA.jpg" width="100" />
                    <p class="text-lg font-medium">dr. Indah</p>
                </div>
                <div class="bg-gray-200 p-4 rounded-lg text-center cursor-pointer hover:bg-gray-300" onclick="selectDoctor('dr. Syaida')">
                    <img alt="Placeholder image of dr. Syaida" class="mx-auto mb-2 rounded-full" height="100" src="https://storage.googleapis.com/a1aa/image/MNfrjFe5hinCjE7Bz3evk55m7XFeHTU2pNkVbayIZUHCpAffE.jpg" width="100" />
                    <p class="text-lg font-medium">dr. Syaida</p>
                </div>
                <div class="bg-gray-200 p-4 rounded-lg text-center cursor-pointer hover:bg-gray-300" onclick="selectDoctor('dr. Syaida')">
                    <img alt="Placeholder image of dr. Syaida" class="mx-auto mb-2 rounded-full" height="100" src="https://storage.googleapis.com/a1aa/image/MNfrjFe5hinCjE7Bz3evk55m7XFeHTU2pNkVbayIZUHCpAffE.jpg" width="100" />
                    <p class="text-lg font-medium">dr. Syaida</p>
                </div>
                <div class="bg-gray-200 p-4 rounded-lg text-center cursor-pointer hover:bg-gray-300" onclick="selectDoctor('dr. Syaida')">
                    <img alt="Placeholder image of dr. Syaida" class="mx-auto mb-2 rounded-full" height="100" src="https://storage.googleapis.com/a1aa/image/MNfrjFe5hinCjE7Bz3evk55m7XFeHTU2pNkVbayIZUHCpAffE.jpg" width="100" />
                    <p class="text-lg font-medium">dr. Syaida</p>
                </div>
                <div class="bg-gray-200 p-4 rounded-lg text-center cursor-pointer hover:bg-gray-300" onclick="selectDoctor('dr. Syaida')">
                    <img alt="Placeholder image of dr. Syaida" class="mx-auto mb-2 rounded-full" height="100" src="https://storage.googleapis.com/a1aa/image/MNfrjFe5hinCjE7Bz3evk55m7XFeHTU2pNkVbayIZUHCpAffE.jpg" width="100" />
                    <p class="text-lg font-medium">dr. Syaida</p>
                </div>
            </div>
        </div>
        <div class="mb-6">
            <h2 class="pl-3 text-xl text-white font-semibold mb-4 bg-blue-900 py-2 rounded">
                Dentist
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="bg-gray-200 p-4 rounded-lg text-center cursor-pointer hover:bg-gray-300" onclick="selectDoctor('drs. Ibnu')">
                    <img alt="Placeholder image of drs. Ibnu" class="mx-auto mb-2 rounded-full" height="100" src="https://storage.googleapis.com/a1aa/image/yaQfitxVTdWeOkNS1vYT10VSCk7GxgYlOfbfnCFkT3MWpAffE.jpg" width="100" />
                    <p class="text-lg font-medium">drs. Ibnu</p>
                </div>
            </div>
        </div>
        <!-- =========================Start Appointment Form =================================== -->
        <div class="mt-6 bg-gray-200">
            <h2 class="pl-3 text-xl text-white font-semibold mb-4 bg-blue-900 py-2 rounded">
                Book an Appointment
            </h2>
            <div class="p-40">

                <form method="POST" action="{{ route('appointments.store') }}" class=" p-5 rounded-lg">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="doctor-name">
                            Doctor Name
                        </label>
                        <!-- Doctor selection dropdown -->
                        <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="doctor-name" name="doctor_id">
                            <option value="">Select a Doctor</option>
                            @foreach ($doctors as $doctor)
                            <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="appointment-type">
                            Appointment Type
                        </label>
                        <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="appointment-type" name="appointment_type">
                            <option value="online">Online</option>
                            <option value="offline">Offline</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="appointment-date">
                            Date
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="appointment-date" name="appointment_date" type="date">
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="appointment-time">
                            Time
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="appointment-time" name="appointment_time" type="time">
                    </div>

                    <div class="flex items-center justify-between">
                        <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                            Book Appointment
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <!-- =========================End Appointment Form =================================== -->

        <div class="mt-6">
            <h2 class="pl-3 text-xl text-white font-semibold mb-4 bg-blue-900 py-2 rounded">
                Cancel Appointment
            </h2>
            <form class="bg-gray-200 p-4 rounded-lg">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="appointment-id">
                        Appointment ID
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="appointment-id" type="text" placeholder="Enter Appointment ID">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="reason">
                        Reason for Cancellation
                    </label>
                    <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="reason" placeholder="Enter Reason"></textarea>
                </div>
                <div class="flex items-center justify-between">
                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                        Cancel Appointment
                    </button>
                </div>
            </form>
        </div>
        <div class="mt-6">
            <h2 class="pl-3 text-xl text-white font-semibold mb-4 bg-blue-900 py-2 rounded">
                Appointments List
            </h2>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 bg-gray-200 text-left">Date</th>
                            <th class="py-2 px-4 bg-gray-200 text-left">Time</th>
                            <th class="py-2 px-4 bg-gray-200 text-left">Doctor Name</th>
                            <th class="py-2 px-4 bg-gray-200 text-left">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border px-4 py-2">Monday</td>
                            <td class="border px-4 py-2">9:00 AM</td>
                            <td class="border px-4 py-2">dr. Azwan Syamh</td>
                            <td class="border px-4 py-2">
                                <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                    <option value="active">Active</option>
                                    <option value="miss">Missed</option>
                                    <option value="canceled">Canceled</option>
                        </tr>
                        </thead>
                    <tbody>
                        <tr>
                            <td class="border px-4 py-2">Tuesday</td>
                            <td class="border px-4 py-2">10:00 AM</td>
                            <td class="border px-4 py-2">dr. Indah</td>
                            <td class="border px-4 py-2">
                                <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                    <option value="active">Active</option>
                                    <option value="miss">Missed</option>
                                    <option value="canceled">Canceled</option>
                        </tr>
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