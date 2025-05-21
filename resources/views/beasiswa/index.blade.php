@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Beasiswa</h2>

    {{-- Flash Message --}}
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('beasiswa.create') }}" class="btn btn-primary mb-3">Tambah Beasiswa</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Deskripsi</th>
