<div class="row g-3">
  <div class="col-md-3">
    <label class="form-label">SKU</label>
    <input type="text" name="sku" value="{{ old('sku', $product->sku ?? '') }}" class="form-control" required>
    @error('sku')<div class="text-danger small">{{ $message }}</div>@enderror
  </div>
  <div class="col-md-3">
    <label class="form-label">Nombre</label>
    <input type="text" name="nombre" value="{{ old('nombre', $product->nombre ?? '') }}" class="form-control" required>
    @error('nombre')<div class="text-danger small">{{ $message }}</div>@enderror
  </div>
  <div class="col-md-6">
    <label class="form-label">Descripción corta</label>
    <input type="text" name="descripcion_corta" value="{{ old('descripcion_corta', $product->descripcion_corta ?? '') }}" class="form-control" required>
    @error('descripcion_corta')<div class="text-danger small">{{ $message }}</div>@enderror
  </div>
  <div class="col-12">
    <label class="form-label">Descripción larga</label>
    <textarea name="descripcion_larga" class="form-control" rows="4" required>{{ old('descripcion_larga', $product->descripcion_larga ?? '') }}</textarea>
    @error('descripcion_larga')<div class="text-danger small">{{ $message }}</div>@enderror
  </div>
  <div class="col-md-6">
    <label class="form-label">URL de imagen</label>
    <input type="text" name="imagen_url" value="{{ old('imagen_url', $product->imagen_url ?? '') }}" class="form-control" required>
    @error('imagen_url')<div class="text-danger small">{{ $message }}</div>@enderror
  </div>
  <div class="col-md-3">
    <label class="form-label">Precio neto</label>
    <input type="number" step="0.01" name="precio_neto" value="{{ old('precio_neto', $product->precio_neto ?? '') }}" class="form-control" required>
    @error('precio_neto')<div class="text-danger small">{{ $message }}</div>@enderror
  </div>
  <div class="col-md-3">
    <label class="form-label">Stock actual</label>
    <input type="number" name="stock_actual" value="{{ old('stock_actual', $product->stock_actual ?? 0) }}" class="form-control" required>
    @error('stock_actual')<div class="text-danger small">{{ $message }}</div>@enderror
  </div>
  <div class="col-md-3">
    <label class="form-label">Stock mínimo</label>
    <input type="number" name="stock_minimo" value="{{ old('stock_minimo', $product->stock_minimo ?? 0) }}" class="form-control" required>
    @error('stock_minimo')<div class="text-danger small">{{ $message }}</div>@enderror
  </div>
  <div class="col-md-3">
    <label class="form-label">Stock bajo</label>
    <input type="number" name="stock_bajo" value="{{ old('stock_bajo', $product->stock_bajo ?? 0) }}" class="form-control" required>
    @error('stock_bajo')<div class="text-danger small">{{ $message }}</div>@enderror
  </div>
  <div class="col-md-3">
    <label class="form-label">Stock alto</label>
    <input type="number" name="stock_alto" value="{{ old('stock_alto', $product->stock_alto ?? 0) }}" class="form-control" required>
    @error('stock_alto')<div class="text-danger small">{{ $message }}</div>@enderror
  </div>
</div>
<div class="row g-3">
  <div class="col-md-3">
    <label class="form-label">SKU</label>
    <input type="text" name="sku" value="{{ old('sku', $product->sku ?? '') }}" class="form-control" required>
    @error('sku')<div class="text-danger small">{{ $message }}</div>@enderror
  </div>
  <div class="col-md-5">
    <label class="form-label">Nombre</label>
    <input type="text" name="nombre" value="{{ old('nombre', $product->nombre ?? '') }}" class="form-control" required>
    @error('nombre')<div class="text-danger small">{{ $message }}</div>@enderror
  </div>
  <div class="col-md-4">
    <label class="form-label">Imagen URL</label>
    <input type="text" name="imagen_url" value="{{ old('imagen_url', $product->imagen_url ?? '') }}" class="form-control" required>
    @error('imagen_url')<div class="text-danger small">{{ $message }}</div>@enderror
  </div>
  <div class="col-12">
    <label class="form-label">Descripción corta</label>
    <input type="text" name="descripcion_corta" value="{{ old('descripcion_corta', $product->descripcion_corta ?? '') }}" class="form-control" required>
    @error('descripcion_corta')<div class="text-danger small">{{ $message }}</div>@enderror
  </div>
  <div class="col-12">
    <label class="form-label">Descripción larga</label>
    <textarea name="descripcion_larga" class="form-control" rows="4" required>{{ old('descripcion_larga', $product->descripcion_larga ?? '') }}</textarea>
    @error('descripcion_larga')<div class="text-danger small">{{ $message }}</div>@enderror
  </div>
  <div class="col-md-3">
    <label class="form-label">Precio neto</label>
    <input type="number" step="0.01" min="0" name="precio_neto" value="{{ old('precio_neto', $product->precio_neto ?? '') }}" class="form-control" required>
    @error('precio_neto')<div class="text-danger small">{{ $message }}</div>@enderror
  </div>
  <div class="col-md-2">
    <label class="form-label">Stock actual</label>
    <input type="number" min="0" name="stock_actual" value="{{ old('stock_actual', $product->stock_actual ?? '') }}" class="form-control" required>
    @error('stock_actual')<div class="text-danger small">{{ $message }}</div>@enderror
  </div>
  <div class="col-md-2">
    <label class="form-label">Stock mínimo</label>
    <input type="number" min="0" name="stock_minimo" value="{{ old('stock_minimo', $product->stock_minimo ?? '') }}" class="form-control" required>
    @error('stock_minimo')<div class="text-danger small">{{ $message }}</div>@enderror
  </div>
  <div class="col-md-2">
    <label class="form-label">Stock bajo</label>
    <input type="number" min="0" name="stock_bajo" value="{{ old('stock_bajo', $product->stock_bajo ?? '') }}" class="form-control" required>
    @error('stock_bajo')<div class="text-danger small">{{ $message }}</div>@enderror
  </div>
  <div class="col-md-3">
    <label class="form-label">Stock alto</label>
    <input type="number" min="0" name="stock_alto" value="{{ old('stock_alto', $product->stock_alto ?? '') }}" class="form-control" required>
    @error('stock_alto')<div class="text-danger small">{{ $message }}</div>@enderror
  </div>
</div>