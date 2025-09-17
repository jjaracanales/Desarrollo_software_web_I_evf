@extends('layouts.admin')

@section('title', 'Productos')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
  <h4 class="mb-0">Productos</h4>
  <a href="{{ route('products.create') }}" class="btn btn-primary">Nuevo</a>
  </div>
<div class="card">
  <div class="table-responsive">
    <table class="table table-striped mb-0">
      <thead>
        <tr>
          <th>SKU</th>
          <th>Nombre</th>
          <th>Precio Neto</th>
          <th>Precio Venta</th>
          <th>Stock</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @forelse ($products as $product)
          <tr>
            <td>{{ $product->sku }}</td>
            <td>{{ $product->nombre }}</td>
            <td>${{ number_format($product->precio_neto, 0, ',', '.') }}</td>
            <td>${{ number_format($product->precio_venta, 0, ',', '.') }}</td>
            <td>{{ $product->stock_actual }}</td>
            <td class="text-end">
              <a class="btn btn-sm btn-secondary" href="{{ route('products.edit', $product) }}">Editar</a>
              <form action="{{ route('products.destroy', $product) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar producto?')">Eliminar</button>
              </form>
            </td>
          </tr>
        @empty
          <tr><td colspan="6" class="text-center">Sin registros</td></tr>
        @endforelse
      </tbody>
    </table>
  </div>
  <div class="card-footer">{{ $products->links() }}</div>
</div>
@endsection
