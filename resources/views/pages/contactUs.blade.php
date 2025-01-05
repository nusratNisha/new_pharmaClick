@extends('layouts.default')

@section('title', 'contactUs')

@section('content')
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact Us</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: 'Roboto', sans-serif;
            }
        </style>
    </head>
    <body class="bg-gray-100">
    <header class="relative">
        <img alt="A scenic view of a clinic building with a clear blue sky in the background" class="w-full h-72 object-cover" height="300" src="https://storage.googleapis.com/a1aa/image/W5auGCykATb7CJIqe2VhgKJKgUKXYJIXDtH1o4w76HEt2BBKA.jpg" width="1920">
        <div class="absolute inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center">
            <h1 class="text-3xl font-bold text-white">Contact Us</h1>
        </div>
    </header>
    <div class="container mx-auto mt-10 p-7 bg-white shadow-md rounded">
        <h2 class="text-2xl font-bold mb-4">Get in Touch</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="flex items-center">
                <i class="fas fa-envelope text-gray-700 text-3xl mr-4"></i>
                <div>
                    <h3 class="text-2xl font-semibold">Email Address</h3>
                    <p>pku@umpsa.edu.my</p>
                </div>
            </div>
            <div class="flex items-center">
                <i class="fas fa-clock text-gray-700 text-3xl mr-4"></i>
                <div>
                    <h3 class="text-2xl font-semibold">Clinic Hours</h3>
                    <p>Monday - Thursday: 8:00 AM - 12:45 PM and 2:00 PM - 4:45 PM</p>
                    <p>Friday: 8:00 AM - 12:00 PM and 2:45 PM - 4:45 PM</p>
                    <p>Saturday - Sunday: Closed</p>
                </div>
            </div>
            <div class="flex items-center">
                <i class="fas fa-map-marker-alt text-gray-700 text-3xl mr-4"></i>
                <div>
                    <h3 class="text-2xl font-semibold">Clinic Address</h3>
                    <p>University Health Center</p>
                    <p>Universiti Malaysia Pahang Al-Sultan Abdullah</p>
                    <p>26600 Pekan</p>
                    <p>Pahang, Malaysia</p>
                </div>
            </div>
            <div class="flex items-center">
                <i class="fas fa-phone text-gray-700 text-3xl mr-4"></i>
                <div>
                    <h3 class="text-2xl font-semibold">General Line</h3>
                    <p>09 - 4315042</p>
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-blue-950 text-white p-8 mt-10">
        <div class="container mx-auto flex items-center justify-center">
            <img alt="Clinic logo or related image" class="mr-4" height="50" src="https://storage.googleapis.com/a1aa/image/pCUGXAWOzgazElt2iSigjkaFHs6hDVPnjwivfRZ6af9ctDCUA.jpg" width="50">
            <p>Universiti Malaysia Pahang Al-Sultan Abdullah</p>
        </div>
    </footer>
    </body>
    </html>
@endsection