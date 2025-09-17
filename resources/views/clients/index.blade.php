@extends('layouts.admin')

@section('title', 'Clientes')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
  <h4 class="mb-0">Clientes</h4>
  <a href="{{ route('clients.create') }}" class="btn btn-primary">Nuevo</a>
</div>
<div class="card">
  <div class="table-responsive">
    <table class="table table-striped mb-0">
      <thead>
        <tr>
          <th>RUT Empresa</th>
          <th>Razón Social</th>
          <th>Rubro</th>
          <th>Contacto</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @forelse ($clients as $client)
          <tr>
            <td>{{ $client->rut_empresa }}</td>
            <td>{{ $client->razon_social }}</td>
            <td>{{ $client->rubro }}</td>
            <td>{{ $client->contacto_nombre }} ({{ $client->contacto_email }})</td>
            <td class="text-end">
              <a class="btn btn-sm btn-secondary" href="{{ route('clients.edit', $client) }}">Editar</a>
              <form action="{{ route('clients.destroy', $client) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar cliente?')">Eliminar</button>
              </form>
            </td>
          </tr>
        @empty
          <tr><td colspan="5" class="text-center">Sin registros</td></tr>
        @endforelse
      </tbody>
    </table>
  </div>
  <div class="card-footer">{{ $clients->links() }}</div>
</div>
@endsection
