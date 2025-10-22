@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<h1>Profile</h1>

<div class="card">
  <div class="card-body">
    <h5 class="card-title">{{ $profile['username'] }}</h5>
    <p class="card-text"><strong>Email:</strong> {{ $profile['email'] }}</p>
    <p class="card-text">{{ $profile['bio'] }}</p>
  </div>
</div>

@endsection
