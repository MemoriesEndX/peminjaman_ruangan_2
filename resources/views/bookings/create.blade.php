@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-md">
    <h2 class="text-2xl font-bold mb-6 text-gray-800">Form Peminjaman Ruangan</h2>

    @if(session('error'))
        <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
            {{ session('error') }}
        </div>
    @endif

    <form method="POST" action="{{ route('booking.store') }}" class="space-y-6">
        @csrf

        <div>
            <label for="building" class="block mb-2 font-semibold text-gray-700">Gedung</label>
            <select id="building-select" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                <option value="">-- Pilih Gedung --</option>
                @foreach($buildings as $building)
                    <option value="{{ $building }}">{{ $building }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="room_id" class="block mb-2 font-semibold text-gray-700">Ruangan</label>
            <select name="room_id" id="room-select" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                <option value="">-- Pilih Ruangan --</option>
                @foreach($rooms as $room)
                    <option value="{{ $room->id }}" data-building="{{ $room->building }}">
                        {{ $room->name }} (Kapasitas: {{ $room->capacity }})
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="date" class="block mb-2 font-semibold text-gray-700">Tanggal Peminjaman</label>
            <input type="date" name="date" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ request('date') ?? '' }}" required>
        </div>

        <div>
            <label for="waktu_mulai" class="block mb-2 font-semibold text-gray-700">Waktu Mulai</label>
            <input type="time" name="waktu_mulai" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>

        <div>
            <label for="waktu_selesai" class="block mb-2 font-semibold text-gray-700">Waktu Selesai</label>
            <input type="time" name="waktu_selesai" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>

        <button type="submit" class="bg-blue-600 text-white font-semibold px-6 py-3 rounded hover:bg-blue-700 transition">Ajukan</button>
    </form>
</div>

<script>
    document.getElementById('building-select').addEventListener('change', function () {
        let building = this.value;
        let roomOptions = document.querySelectorAll('#room-select option');

        roomOptions.forEach(option => {
            if (!option.dataset.building) return; // skip default option
            option.hidden = option.dataset.building !== building;
        });

        document.getElementById('room-select').value = ''; // reset room select
    });
</script>
@endsection
