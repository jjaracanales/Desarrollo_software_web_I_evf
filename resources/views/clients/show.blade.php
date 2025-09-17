@extends('layouts.admin')

@section('title', 'Detalle Cliente')

@section('content')
<div class="card">
  <div class="card-header d-flex justify-content-between align-items-center">
    <h5 class="mb-0">{{ $client->razon_social }}</h5>
    <a href="{{ route('clients.index') }}" class="btn btn-sm btn-secondary">Volver</a>
  </div>
  <div class="card-body">
    <dl class="row">
      <dt class="col-sm-2">RUT Empresa</dt><dd class="col-sm-10">{{ $client->rut_empresa }}</dd>
      <dt class="col-sm-2">Rubro</dt><dd class="col-sm-10">{{ $client->rubro }}</dd>
      <dt class="col-sm-2">Teléfono</dt><dd class="col-sm-10">{{ $client->telefono }}</dd>
      <dt class="col-sm-2">Dirección</dt><dd class="col-sm-10">{{ $client->direccion }}</dd>
      <dt class="col-sm-2">Contacto</dt><dd class="col-sm-10">{{ $client->contacto_nombre }} ({{ $client->contacto_email }})</dd>
    </dl>
  </div>
</div>
@endsection
