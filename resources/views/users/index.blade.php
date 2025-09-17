@extends('layouts.admin')

@section('title', 'Usuarios')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
  <h4 class="mb-0">Usuarios</h4>
  <a href="{{ route('users.create') }}" class="btn btn-primary">Nuevo</a>
</div>
<div class="card">
  <div class="table-responsive">
    <table class="table table-striped mb-0">
      <thead>
        <tr>
          <th>RUT</th>
          <th>Nombre</th>
          <th>Email</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @forelse ($users as $user)
          <tr>
            <td>{{ $user->rut }}</td>
            <td>{{ $user->nombre }} {{ $user->apellido }}</td>
            <td>{{ $user->email }}</td>
            <td class="text-end">
              <a class="btn btn-sm btn-secondary" href="{{ route('users.edit', $user) }}">Editar</a>
              <form action="{{ route('users.destroy', $user) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar usuario?')">Eliminar</button>
              </form>
            </td>
          </tr>
        @empty
          <tr><td colspan="4" class="text-center">Sin registros</td></tr>
        @endforelse
      </tbody>
    </table>
  </div>
  <div class="card-footer">{{ $users->links() }}</div>
</div>
@endsection
