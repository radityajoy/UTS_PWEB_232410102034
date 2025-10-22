@extends('layouts.app')

@section('title', 'Pengelolaan')

@section('content')
<h1>Pengelolaan</h1>

@if(!empty($items) && count($items))
  <div class="row">
    @foreach($items as $item)
      <div class="col-md-4">
        <div class="card mb-3">
          <div class="card-body">
            <h5 class="card-title">{{ $item['title'] }}</h5>
            <p class="card-text">{{ $item['desc'] }}</p>
            <p class="text-muted">ID: {{ $item['id'] }}</p>
          </div>
        </div>
      </div>
    @endforeach
  </div>
@else
  <p>Tidak ada item untuk ditampilkan.</p>
@endif

@endsection
