@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Solicitudes</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            @can('crear-solicitud')
                            <a href="{{ route('solicitudes.create') }}" class="btn btn-success">Nuevo </a>
                            @endcan
                            @can('ver-solicitud')
                            <table class="table mt-2">
                                <thead style="background-color: #6777ef;">
                                    <th style="color:#fff">#</th>
                                    <th style="color:#fff"><h6>Fecha</h6></th>
                                    <th style="color:#fff"><h6>Hora</h6></th>
                                    <th style="color:#fff"><h6>Servicio</h6></th>
                                    <th style="color:#fff"><h6>Descripción</h6></th>
                                    <th style="color:#fff"><h6>Estado</h6></th>
                                    <th style="color:#fff"><h6>Opciones</h6></th>
                                </thead>
                                <tbody class="table-bordered" style="border:5em;">

                                    @foreach ($solicitudes as $solicitud)

                                     @if(auth()->user()->id == $solicitud->solicitante_soli || auth()->user()->id == 1 )
                                        <tr>
                                            <td scope="row">{{ $solicitud->id }}</td>
                                            <td>{{ $solicitud->soli_fecha}}</td>
                                            <td>{{ $solicitud->soli_hora }}</td>
                                            <td>{{ $solicitud->servicios->nombre_ser }}</td>

                                            <td style="text-align: justify;">{{ $solicitud->descripcion }}</td>
                                            @if($solicitud->estado != 0)
                                            <td><span class="badge badge-success">Aprobado</span></td>
                                            @else
                                               <td><span class="badge badge-danger" >Pendiente</span></td>
                                            @endif
                                            <td>
                                            @if(auth()->user()->id == 1 && $solicitud->estado != 0)

                                            {!! Form::open(['method' => 'PATCH','route' => ['solicitudes.update', $solicitud->id],'style'=>'display:inline']) !!}
                                                {!! Form::submit('Cancelar', ['class' => 'btn btn-danger']) !!}
                                            {!! Form::close() !!}

                                            @elseif(auth()->user()->id == 1 && $solicitud->estado == 0)
                                            {!! Form::open(['method' => 'PATCH','route' => ['solicitudes.update', $solicitud->id],'style'=>'display:inline']) !!}
                                                {!! Form::submit('Aprobar', ['class' => 'btn btn-success']) !!}
                                            {!! Form::close() !!}


                                            @endif

                                            @if(auth()->user()->id == $solicitud->solicitante_soli )

                                            {!! Form::open(['method' => 'DELETE','route' => ['solicitudes.destroy', $solicitud->id],'style'=>'display:inline']) !!}
                                                {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                                            {!! Form::close() !!}
                                            @endif
                                        </td>
                                        </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                            @endcan
                            <div class="pagination justify-content-end">
                                {!! $solicitudes->links() !!}
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

