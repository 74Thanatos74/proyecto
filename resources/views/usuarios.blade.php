@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <br>
            <div class="card">
                <div class="card-header">{{ __('Listado de Usuarios') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-responsive">
                        <tr>
                            <td>ID</td>
                            <td>NOMBRE</td>
                            <td>CORREO</td>
                            <td>CREADO</td>
                            <td>EDITAR</td>
                            <td>INHABILITAR</td>
                        </tr>

                        @foreach($data as $d)
                        <tr>
                            <td>{{ $d['id'] }}</td>
                            <td>{{ $d['name'] }}</td>
                            <td>{{ $d['email'] }}</td>
                            <td>{{ $d['created_at'] }}</td>
                            <td>
                            <form action="{{ url('editar_usuario/') }}">
                                <button name='editar' class="btn btn-block {{ config('adminlte.classes_auth_btn', 'btn-flat btn-primary') }}">Editar</button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ url('') }}">
                                <button name='inhabilitar' class="btn btn-block {{ config('adminlte.classes_auth_btn', 'btn-flat btn-primary') }}">Inhabilitar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
