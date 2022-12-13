@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Tecnicos</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{ route('tecnicos.create') }}" class="btn btn-success">Nuevo</a>
                            <table class="table table-striped mt-2">
                                <thead style="background-color:#6777ef">
                                    <th style="color:#fff;">Nombre</th>
                                    <th style="color:#fff;">Acciones</th>
                                </thead>
                                <tbody>
                                @foreach ($tecnicos as $tecnico)
                                <tr>
                                    <td>{{ $tecnico->nombre_tecn }}</td>
                                    <td>

                                        <a class="btn btn-primary" href="{{ route('tecnicos.edit',$tecnico->doc) }}">Editar</a>

                                        {!! Form::open(['method' => 'DELETE','route' => ['tecnicos.destroy', $tecnico->doc],'style'=>'display:inline']) !!}
                                            {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                                        {!! Form::close() !!}

                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>

                            <!-- Centramos la paginacion a la derecha -->
                            <div class="pagination justify-content-end">
                                {!! $tecnicos->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
