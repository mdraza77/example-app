@extends('layouts.main')
@push('title')
<title>Courses Page</title>
@endpush
@section('main-section')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-3xl font-bold text-gray-800 mb-4">Explore Our Courses</h1>
    <p class="text-lg text-gray-700">Discover a wide range of courses tailored to your interests.</p>
    <div class="flex flex-wrap justify-center gap-4 mt-8">
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-2">BBA</h3>
            <p class="text-gray-700">Unlock your business potential with our Bachelor of Business Administration program.</p>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-2">BCA</h3>
            <p class="text-gray-700">Pursue a career in technology with our Bachelor of Computer Applications program.</p>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-2">MBA</h3>
            <p class="text-gray-700">Take your business skills to the next level with our Master of Business Administration program.</p>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-2">MCA</h3>
            <p class="text-gray-700">Advance your technology career with our Master of Computer Applications program.</p>
        </div>
    </div>
</div>
@endsection