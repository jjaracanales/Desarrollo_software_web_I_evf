@extends('layouts.admin')

@section('title', 'Detalle Usuario')

@section('content')
<div class="card">
  <div class="card-header d-flex justify-content-between align-items-center">
    <h5 class="mb-0">{{ $user->nombre }} {{ $user->apellido }}</h5>
    <a href="{{ route('users.index') }}" class="btn btn-sm btn-secondary">Volver</a>
  </div>
  <div class="card-body">
    <dl class="row">
      <dt class="col-sm-2">RUT</dt><dd class="col-sm-10">{{ $user->rut }}</dd>
      <dt class="col-sm-2">Email</dt><dd class="col-sm-10">{{ $user->email }}</dd>
      <dt class="col-sm-2">Creado</dt><dd class="col-sm-10">{{ $user->created_at }}</dd>
    </dl>
  </div>
</div>
@endsection
