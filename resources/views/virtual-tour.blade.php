@extends('layouts.app')

@section('content')
<div class="flex min-h-screen">
    <!-- Sidebar -->
    <aside class="w-64 bg-white shadow-md">
        <div class="p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Menu</h2>
            <nav class="space-y-4">
                <a href="{{ route('dashboard') }}" class="block text-gray-700 hover:text-blue-600">Dashboard</a>
                <a href="#" class="block text-gray-700 hover:text-blue-600">Profile</a>
                <a href="#" class="block text-gray-700 hover:text-blue-600">Room Booking</a>
                <a href="#" class="block text-gray-700 hover:text-blue-600">Settings</a>
                <a href="{{ route('virtual-tour') }}" class="block text-gray-700 hover:text-blue-600 font-semibold">Virtual Tour Teknik UNTIRTA</a>
            </nav>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 bg-gray-100 p-8">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h1 class="text-3xl font-bold text-gray-800 mb-4">Virtual Tour Teknik UNTIRTA</h1>
            <p class="text-gray-600">This page is currently empty. You can add your content here later.</p>
        </div>
    </main>
</div>
@endsection
