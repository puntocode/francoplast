@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row mt-4">
        <div class="col d-flex justify-content-between">
            <h2 class=""><i class="fas fa-user-tie"></i> Productos</h2>
            <a href="{{ route('products.create') }}" class="btn btn-primary align-middle"><i class="fas fa-plus pr-2"></i> Crear Producto</a>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card mt-4 border-0 shadow-sm">
                <div class="card-body">
                    <h5 class="mb-3 font-weight-bold">Tabla de Productos</h5>
                    <table id="tabla" class="table" >
                        <thead class="text-secondary">
                            <tr>
                                <th>Codigo</th>
                                <th>Producto</th>
                                <th>Tamaño</th>
                                <th>Costo</th>
                                <th>Venta</th>
                                <th>Mayorista</th>
                                <th>Stock</th>
                                <th class="text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                             @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->code }}</td>
                                    <td class="text-uppercase">{{ $product->name }}</td>
                                    <td>{{ $product->size }}</td>
                                    <td>{{ number_format($product->cost, 0, '.', '.') }}</td>
                                    <td>{{ number_format($product->sale, 0, '.', '.') }}</td>
                                    <td>{{ number_format($product->wholesaler, 0, '.', '.') }}</td>
                                    <td>{{ $product->stock }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('products.edit', $product) }}" class="btn btn-primary" data-toggle="tooltip" title="Editar"><i class="far fa-edit"></i></a>
                                        <a href="{{ route('products.destroy', $product->id) }}" class="btn btn-danger delete" data-toggle="tooltip" title="Eliminar"><i class="far fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                            @endforeach 
                        </tbody>
                    </table>
                    <div class="col-12 justify-content-center d-flex">
                       {{$products->links("pagination::bootstrap-4")}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection