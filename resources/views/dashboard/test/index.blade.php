@extends('layouts.master')

@section('content')
  {{-- Fragmento de Vista --}}
  @include('fragment.subview')
  
  @forelse ($posts as $a)
    <div class="box item">
      <li>{{ $a }}</li>
    </div>
  @empty
      <p>No hay datos</p>
  @endforelse
  <br>
  {{ $name }}

@endsection