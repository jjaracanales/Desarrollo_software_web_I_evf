@extends('layouts.admin')

@section('title', 'Detalle Producto')

@section('content')
<div class="card">
  <div class="card-header d-flex justify-content-between align-items-center">
    <h5 class="mb-0">{{ $product->nombre }} ({{ $product->sku }})</h5>
    <a href="{{ route('products.index') }}" class="btn btn-sm btn-secondary">Volver</a>
  </div>
  <div class="card-body">
    <img src="{{ $product->imagen_url }}" class="img-fluid mb-3" style="max-height:200px"/>
    <p>{{ $product->descripcion_corta }}</p>
    <p>{{ $product->descripcion_larga }}</p>
    <dl class="row">
      <dt class="col-sm-2">Precio neto</dt><dd class="col-sm-10">${{ number_format($product->precio_neto,0,',','.') }}</dd>
      <dt class="col-sm-2">Precio venta</dt><dd class="col-sm-10">${{ number_format($product->precio_venta,0,',','.') }}</dd>
      <dt class="col-sm-2">Stock</dt><dd class="col-sm-10">{{ $product->stock_actual }}</dd>
    </dl>
  </div>
</div>
@endsection
