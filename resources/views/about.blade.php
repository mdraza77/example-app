<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
</head>

<body>
    @extends('layouts.main')
    @push('title')
    <title>About Us</title>
    @endpush
    @section('main-section')
    <div class="container mx-auto px-4 py-6">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">About Us</h1>
        <p class="text-lg text-gray-700">Learn more about our mission, vision, and values.</p>
        <div class="flex flex-wrap justify-center gap-4 mt-8">
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Our Mission</h3>
                <p class="text-gray-700">To empower individuals and businesses through innovative solutions.</p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Our Vision</h3>
                <p class="text-gray-700">To be a leading provider of cutting-edge technologies.</p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Our Values</h3>
                <p class="text-gray-700">Innovation, Integrity, and Customer Satisfaction.</p>
            </div>
        </div>
    </div>
    @endsection
</body>

</html>