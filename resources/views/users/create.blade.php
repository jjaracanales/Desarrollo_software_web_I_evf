@extends('layouts.admin')

@section('title', 'Nuevo Usuario')

@section('content')
<div class="card">
  <div class="card-header d-flex justify-content-between align-items-center">
    <h5 class="mb-0">Nuevo Usuario</h5>
    <a href="{{ route('users.index') }}" class="btn btn-sm btn-secondary">Volver</a>
  </div>
  <div class="card-body">
    <form method="POST" action="{{ route('users.store') }}">
      @csrf
      @include('users._form')
      <div class="mt-3">
        <button class="btn btn-primary">Guardar</button>
      </div>
    </form>
  </div>
</div>
@endsection
