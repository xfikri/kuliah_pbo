@extends('layouts.app')

@section('content')
    <h1>Tambah Beasiswa</h1>

    <form action="{{ route('beasiswa.store') }}" method="POST">
        @csrf
        <label>Nama:</label>
        <input type="text" name="nama" required><br><br>

        <label>Deskripsi:</label>
        <textarea name="deskripsi"></textarea><br><br>

        <label>Tanggal Mulai:</label>
        <input type="date" name="tanggal_mulai" required><br><br>

        <label>Tanggal Selesai:</label>
        <input type="date" name="tanggal_selesai" required><br><br>

        <button type="submit">Simpan</button>
    </form>
@endsection
