@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row mt-4">
        <div class="col d-flex justify-content-between">
            <h2 class=""><i class="fas fa-user-tie"></i> Clientes</h2>
            <a href="{{ route('customers.create') }}" class="btn btn-primary align-middle"><i class="fas fa-plus pr-2"></i> Crear Cliente</a>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card mt-4 border-0 shadow-sm">
                <div class="card-body">
                    <h5 class="mb-3 font-weight-bold">Tabla de Clientes</h5>
                    <table id="tabla" class="table" >
                        <thead class="text-secondary">
                            <tr>
                                <th>Cliente</th>
                                <th>RUC</th>
                                <th>Ciudad</th>
                                <th>Dirección</th>
                                <th>Celular</th>
                                <th>Email</th>
                                <th>Contacto</th>
                                <th class="text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($customers as $customer)
                                <tr>
                                    <td class="text-uppercase">{{ $customer->name }}</td>
                                    <td>{{ $customer->ruc }}</td>
                                    <td>{{ $customer->city }}</td>
                                    <td>{{ $customer->address }}</td>
                                    <td>{{ $customer->phone }}</td>
                                    <td>{{ $customer->email }}</td>
                                    <td class="text-capitalize">{{ $customer->contact }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('customers.edit', $customer) }}" class="btn btn-primary" data-toggle="tooltip" title="Editar"><i class="far fa-edit"></i></a>
                                        <a href="{{ route('customers.destroy', $customer->id) }}" class="btn btn-danger delete" data-toggle="tooltip" title="Eliminar"><i class="far fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                            @endforeach 
                        </tbody>
                    </table>
                    <div class="col-12 justify-content-center d-flex">
                       {{$customers->links("pagination::bootstrap-4")}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
