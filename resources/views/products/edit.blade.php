@extends('layouts.admin')

@section('title', 'Editar Producto')

@section('content')
<div class="card">
  <div class="card-header d-flex justify-content-between align-items-center">
    <h5 class="mb-0">Editar Producto</h5>
    <a href="{{ route('products.index') }}" class="btn btn-sm btn-secondary">Volver</a>
  </div>
  <div class="card-body">
    <form method="POST" action="{{ route('products.update', $product) }}">
      @csrf
      @method('PUT')
      @include('products._form')
      <div class="mt-3">
        <button class="btn btn-primary">Actualizar</button>
      </div>
    </form>
  </div>
</div>
@endsection
@extends('layouts.admin')

@section('title', 'Editar Producto')

@section('content')
<div class="card">
  <div class="card-header d-flex justify-content-between align-items-center">
    <h5 class="mb-0">Editar Producto</h5>
    <a href="{{ route('products.index') }}" class="btn btn-sm btn-secondary">Volver</a>
  </div>
  <div class="card-body">
    <form method="POST" action="{{ route('products.update', $product) }}">
      @csrf
      @method('PUT')
      @include('products._form')
      <div class="mt-3">
        <button class="btn btn-primary">Actualizar</button>
      </div>
    </form>
  </div>
</div>
@endsection
