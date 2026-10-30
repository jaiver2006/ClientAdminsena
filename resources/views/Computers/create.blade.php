@extends('layouts.appFormulario')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-7">

                <div class="card shadow-lg border-0 rounded-4">

                    <div class="card-header text-center text-white" style="background-color:#004d1b;">
                        <h3 class="mb-0">
                            <i class="fas fa-desktop me-2"></i>
                            Registro de Computador
                        </h3>
                    </div>

                    <div class="card-body p-4">

                        <form action="{{ route('computer.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label fw-bold">
                                    Número del Computador
                                </label>
                                <input type="number" name="number" class="form-control" value="{{ old('number') }}"
                                    placeholder="Ej. 1024" required>
                                @error('number')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">
                                    Marca
                                </label>
                                <input type="text" name="brand" class="form-control" value="{{ old('brand') }}"
                                    placeholder="Ej. Dell, Lenovo, HP" required>
                                @error('brand')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label class="form-label fw-bold">Imagen del computador</label>
                                <input type="file" name="imagen" class="form-control"
                                    accept="image/jpeg,image/png,image/webp" required>
                                @error('imagen')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success btn-lg">
                                    <i class="fas fa-save me-2"></i>
                                    Registrar Computador
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
@endsection
