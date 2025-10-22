@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="row justify-content-center">
  <div class="col-md-6">
    <h3>Login</h3>
    <form action="{{ route('login.handle') }}" method="POST">
      @csrf
      <div class="mb-3">
        <label class="form-label">Username</label>
        <input name="username" type="text" class="form-control" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Password</label>
        <input name="password" type="password" class="form-control" required>
      </div>

      <button class="btn btn-primary" type="submit">Masuk</button>
    </form>
  </div>
</div>
@endsection
