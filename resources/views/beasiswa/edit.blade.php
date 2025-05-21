@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Beasiswa</h2>

    <form action="{{ route('beasiswa.update', $beasiswa->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama" class="form-label">Nama Beasiswa</label>
            <input type="text" name="nama" class="form-control" value="{{ $beasiswa->nama }}" required>
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea name="deskripsi" class="form-control">{{ $beasiswa->deskripsi }}</textarea>
        </div>

        <div class="mb-3">
            <label for="tanggal_mulai" class="form-label">Tanggal Mulai</label>
            <input type="date" name="tanggal_mulai" class="form-control" value="{{ $beasiswa->tanggal_mulai }}" required>
        </div>

        <div class="mb-3">
            <label for="tanggal_selesai" class="form-label">Tanggal Selesai</label>
            <input type="date" name="tanggal_selesai" class="form-control" value="{{ $beasiswa->tanggal_selesai }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
</div>
@endsection
