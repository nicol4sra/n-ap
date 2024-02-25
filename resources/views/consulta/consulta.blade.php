@extends('layouts.app')

@section('title', 'Consulta con especialista')

@section('content')

    <div class="pagetitle">
        <h3>Consultas</h3>
    </div>
    <br>

    <section class="section">
        <div class="row">
            <div class="col-lg-4">
                <div class="card" style="width: 16rem;">
                <img src="{{ asset('images/consulta/train2.jpg') }}" class="card-img-top" style="width: 16rem;">
                <div class="card-body">
                  <h5 class="">Entrenador</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="{{ route('nutricional-personalizado') }}" type="button"
                            class="btn btn-primary">Consultar</a>
                </div>
              </div>   
            </div>
            <div class="col-lg-4">
                <div class="card" style="width: 16rem;">
                <img src="{{ asset('images/consulta/nutricionista.webp') }}" class="card-img-top" style="width: 16rem;">
                <div class="card-body">
                  <h5 class="">Nutricionista</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="{{ route('nutricional-personalizado') }}" type="button"
                            class="btn btn-primary">Consultar</a>
                </div>
              </div>   
            </div>
            <div class="col-lg-4">
                <div class="card" style="width: 16rem;">
                <img src="{{ asset('images/consulta/psycho.jpg') }}" class="card-img-top" style="width: 16rem;">
                <div class="card-body">
                  <h5 class="">Psicologo</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="{{ route('nutricional-personalizado') }}" type="button"
                            class="btn btn-primary">Consultar</a>
                </div>
              </div>   
            </div>
            <div class="modal fade" id="mi-modal" data-bs-backdrop="static">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h5 class="modal-title">Este es el titulo</h5>
                            <button type="button" data-bs-dismiss="modal" class="btn-close"></button>
                        </div>

                        <div class="modal-body text-center">

                            <div class="row">
                                <div class="col-sm-4 mb-3 mb-sm-0">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Basico</h5>
                                            <h3>$0</h3>
                                            <ul>
                                                <li>Especialista</li>
                                                <li>Entrenador</li>
                                                <li>Dieta personalizada</li>
                                                <li>consulta gratis</li>
                                            </ul>
                                            <a href="{{ route('plan_especialista') }}" class="btn btn-primary">Comprar
                                                ahora</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="card border-primary">
                                        <div class="card-body">
                                            <h5 class="card-title">Pro</h5>
                                            <h3>$20</h3>
                                            <ul>
                                                <li class="list-group">Especialista</li>
                                                <li class="list-group">Entrenador</li>
                                                <li class="list-group">Dieta personalizada</li>
                                                <li class="list-group">consulta gratis</li>
                                            </ul>
                                            <a href="{{ route('plan_especialista') }}" class="btn btn-primary">Comprar
                                                ahora</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="card border-primary">
                                        <div class="card-body">
                                            <h5 class="card-title">Premium</h5>
                                            <h3>$45</h3>
                                            <ul>
                                                <li class="list-group">Especialista</li>
                                                <li class="list-group">Entrenador</li>
                                                <li class="list-group">Dieta personalizada</li>
                                                <li class="list-group">Consulta gratis</li>
                                            </ul>
                                            <a href="{{ route('plan_especialista') }}" class="btn btn-primary">Comprar
                                                ahora</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancelar</button>
                            <button type="button" class="btn btn-primary">guardar</button>

                        </div>

                    </div>
                </div>
            </div>
    </section>
@endsection