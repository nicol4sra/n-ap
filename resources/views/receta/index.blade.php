@extends('layouts.app')

@section('title', 'Receta nutricional')

@php
    $genero = [0 => 'Femenino', 1 => 'Masculino'];
@endphp

@section('content')
    <div class="pagetitle">
        <h1>Crear Receta Nutricional</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Crear Receta</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-8" style="margin:2px">
                    <a href="{{ route('crear-receta') }}" class="btn btn-primary w-25" >
                        <i class="bi bi-star"> </i>Empezar
                    </a>
            </div>
        </div>
        <br>
    </section>

    <section class="section dashboard">
        <div class="row ">
            <div class="col-lg-11">

                <div class="row">
                    <table class="table" style="margin:20px">
                        <thead class="table-primary">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Edad</th>
                                <th scope="col">Género</th>
                                <th scope="col">Tipo</th>
                                <th scope="col">Comida</th>
                                <!-- <th scope="col">Calorias</th>
                                <th scope="col">Hc</th>
                                <th scope="col">Proteinas</th>
                                <th scope="col">Grasas</th> -->
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($recetas as $receta)
                                <tr>
                                    <th>{{ $receta->id }}</th>
                                    <td>{{ $receta->nombre }}</td>
                                    <td>{{ $receta->descripcion }}</td>
                                    <td>{{ $receta->edad }}</td>
                                    <td>{{ $genero[$receta->genero] }}</td>
                                    <td>{{ $receta->tipo->nombre }}</td>
                                    <td>{{ $receta->comida->nombre }}</td>
                                    <!-- @php
                                        $totalCalorias = 0;
                                        $totalHc = 0;
                                        $totalProteinas = 0;
                                        $totalGrasas = 0;

                                        foreach ($receta->alimentos as $alimento) {
                                            $totalCalorias += $alimento->calorias;
                                            $totalHc += $alimento->hc;
                                            $totalProteinas += $alimento->proteinas;
                                            $totalGrasas += $alimento->grasas;
                                        }
                                    @endphp
                                    <td>{{ $totalCalorias }}</td>
                                    <td>{{ $totalHc }}</td>
                                    <td>{{ $totalProteinas }}</td>
                                    <td>{{ $totalGrasas }}</td> -->
                                    <td class="d-flex" >
                                        <a type="button" href="{{ route('ver-receta', $receta->id) }}"
                                            class="btn btn-primary">Ver</a>
                                        <a type="button" href="{{ route('editar-receta', $receta->id) }}"
                                            class="btn btn-warning">Editar</a>
                                        <form action="{{ route('borrar-receta', $receta->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-danger">Borrar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->

                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Siguente</a></li>
                        </ul>
                    </nav><!-- End Basic Pagination -->

                    <!-- </div> -->
                </div>
            </div>
        </div>
    </section>
@endsection
