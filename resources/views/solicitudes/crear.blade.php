@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Creación de Solicitudes</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                        @if ($errors->any())
                            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                            <strong>¡Revise los campos!</strong>
                                @foreach ($errors->all() as $error)
                                    <span class="badge badge-danger">{{ $error }}</span>
                                @endforeach
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        @endif


                        <form  action="{{ route('solicitudes.store') }}"  method="POST" >
                            @csrf
                            <input type="hidden" class="form-control" name="solicitante_soli" value="{{auth()->user()->id}} ">
                            <input type="hidden" name="estado" value="0">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="fecha">Fecha</label>
                                    <input type="text" class="form-control" name="fecha" id="fecha" >
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="tm">Hora</label>
                                    <input type="text" class="form-control" name="hora" id="hora" >
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="sv">Servicio</label>
                                {!! Form::select('servicios', $servicios,[], array('class' => 'form-control')) !!}

                                </select>
                              </div>
                              <div class="form-group">
                                <label for="inputAddress2">Descripción</label>
                                <textarea name="descripcion" class="form-control"  rows="6" cols="17" maxlength="400" required></textarea>
                              </div>


                              <button type="submit" class="btn btn-success submitBtn">Registrar</button>

                      </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
