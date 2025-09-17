@extends('layouts.admin')

@section('title', 'Editar Cliente')

@section('content')
<div class="card">
  <div class="card-header d-flex justify-content-between align-items-center">
    <h5 class="mb-0">Editar Cliente</h5>
    <a href="{{ route('clients.index') }}" class="btn btn-sm btn-secondary">Volver</a>
  </div>
  <div class="card-body">
    <form method="POST" action="{{ route('clients.update', $client) }}">
      @csrf
      @method('PUT')
      @include('clients._form')
      <div class="mt-3">
        <button class="btn btn-primary">Actualizar</button>
      </div>
    </form>
  </div>
</div>
@endsection
