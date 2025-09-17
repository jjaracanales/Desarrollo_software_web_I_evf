<div class="row g-3">
  <div class="col-md-3">
    <label class="form-label">RUT</label>
    <input type="text" name="rut" value="{{ old('rut', $user->rut ?? '') }}" class="form-control" required>
    @error('rut')<div class="text-danger small">{{ $message }}</div>@enderror
  </div>
  <div class="col-md-3">
    <label class="form-label">Nombre</label>
    <input type="text" name="nombre" value="{{ old('nombre', $user->nombre ?? '') }}" class="form-control" required>
    @error('nombre')<div class="text-danger small">{{ $message }}</div>@enderror
  </div>
  <div class="col-md-3">
    <label class="form-label">Apellido</label>
    <input type="text" name="apellido" value="{{ old('apellido', $user->apellido ?? '') }}" class="form-control" required>
    @error('apellido')<div class="text-danger small">{{ $message }}</div>@enderror
  </div>
  <div class="col-md-3">
    <label class="form-label">Email (@ventasfix.cl)</label>
    <input type="email" name="email" value="{{ old('email', $user->email ?? '') }}" class="form-control" required>
    @error('email')<div class="text-danger small">{{ $message }}</div>@enderror
  </div>
  <div class="col-md-4">
    <label class="form-label">Contraseña</label>
    <input type="password" name="password" class="form-control" @if(!isset($user)) required @endif>
    @error('password')<div class="text-danger small">{{ $message }}</div>@enderror
  </div>
</div>