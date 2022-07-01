@extends('layouts.master')

@section('content')
  Mi nombre es <?php echo $name ?>, y tengo <?php echo $age ?> años. <br>
  Mi nombre es {{ $name }}, y tengo {{ $age }} años.

  {{-- Ecapar codigo html --}}
  {!! $html !!}
  {{-- {!! $script !!} --}}

  <!-- Comentario en html -->
  <!-- $age  -->
  {{-- Comentario en Blade  --}}
  {{-- $age  --}}

  {{-- Condicionales en PHP --}}
  <?php if(true){ echo $name ?>
  - Condicional en php
  <?php } ?>
  <br>
  {{-- Condicionales en Blade --}}
  @if (true)
      {{ $name }}
  @endif
  <br>
  @if ($name !== "Leonidas Asprilla")
      Es true
  @else 
      No es true
  @endif
  <br>
  {{-- Ciclos en Blade --}}
  @foreach ($array as $a)
  <p>Este es el contenido del array: {{ $a }}</p>
  @endforeach
  <hr>
  @forelse ($array as $a)
      <li>{{ $a }}</li>
  @empty
      <p>No hay datos</p>
  @endforelse
  <hr>
  {{-- Fragmento de Vista --}}
  @include('fragment.subview')
  {{-- Layouts o Vistas Madre --}}
@endsection