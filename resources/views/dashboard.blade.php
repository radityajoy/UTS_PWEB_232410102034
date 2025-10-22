@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<h1>Dashboard</h1>

<p>Selamat datang, <strong>{{ $username ?? request()->query('username') ?? 'Guest' }}</strong>!</p>

<p>Selamat datang di halaman dashboard sederhana.</p>
@endsection
