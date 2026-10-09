@extends('layouts.app')

@section('contenido')
    <div class="container mt-5">

        <div class="card shadow-lg border-0">

            <div class="card-header bg-primary text-white">
                <h3 class="mb-0">
                    Centro: {{ $trainingCenter['name'] }}
                </h3>
            </div>

            <div class="card-body">

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label class="fw-bold">ID</label>
                        <div class="form-control bg-light">
                            {{ $trainingCenter['id'] }}
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="fw-bold">Nombre del Centro</label>
                        <div class="form-control">
                            {{ $trainingCenter['name'] }}
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-md-12 mb-3">
                        <label class="fw-bold">Ubicación</label>
                        <div class="form-control">
                            {{ $trainingCenter['location'] }}
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label class="fw-bold">Fecha de registro</label>
                        <div class="form-control">
                            {{ \Carbon\Carbon::parse($trainingCenter['created_at'])->format('d/m/Y H:i') }}
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="fw-bold">Última actualización</label>
                        <div class="form-control">
                            {{ \Carbon\Carbon::parse($trainingCenter['updated_at'])->format('d/m/Y H:i') }}
                        </div>
                    </div>

                </div>

                <hr class="my-4">

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label class="fw-bold">Ubicación</label>
                        <div class="form-control text-muted bg-light">
                            {{ $trainingCenter['location'] }}
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="fw-bold">Nombre</label>
                        <div class="form-control text-muted bg-light">
                            {{ $trainingCenter['name'] }}
                        </div>
                    </div>

                </div>

                <div class="mt-4 text-end">
                    <a href="{{ url()->previous() }}" class="btn btn-secondary">Volver</a>
                </div>

            </div>

        </div>

    </div>
@endsection
