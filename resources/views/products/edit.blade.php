@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row mt-4">
        <div class="col d-flex justify-content-between">
            <div>
                <h2 class=""><a href="{{ route('products.index') }}" class="text-decoration-none"><i class="fas fa-arrow-left pr-2"></i></a>Editar Producto</h2>
                <p class="text-black-50">Complete el formulario para editar este Producto</p>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <form  action="{{ route('products.update', $product) }}"  method="POST" novalidate>
                         @method('PUT')
                        @csrf
                     <div class="form-group">
                            <label for="titulo">Producto</label>
                            <input class="form-control @error('name') is-invalid @enderror" id="name" name="name" type="text" value="{{ $product->name }}">
                            @error('name')
                                <span class="text-danger"><strong>Error: {{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="size">Tamaño</label>
                            <input class="form-control @error('size') is-invalid @enderror" id="size" name="size" type="text" value="{{ $product->size }}">
                            @error('size')
                                <span class="text-danger"><strong>Error: {{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="cost">Costo</label>
                            <input class="form-control @error('cost') is-invalid @enderror" id="cost" name="cost" type="number" value="{{ $product->cost }}">
                            @error('cost')
                                <span class="text-danger"><strong>Error: {{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="sale">Venta</label>
                            <input class="form-control @error('sale') is-invalid @enderror" id="sale" name="sale" type="number" value="{{ $product->sale }}">
                            @error('sale')
                                <span class="text-danger"><strong>Error: {{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="wholesaler">Costo Mayorista</label>
                            <input class="form-control @error('wholesaler') is-invalid @enderror" id="wholesaler" name="wholesaler" type="number" value="{{$product->wholesaler }}">
                            @error('wholesaler')
                                <span class="text-danger"><strong>Error: {{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="stock">Stock</label>
                            <input class="form-control @error('stock') is-invalid @enderror" id="stock" name="stock" type="number" value="{{ $product->stock }}">
                            @error('stock')
                                <span class="text-danger"><strong>Error: {{ $message }}</strong></span>
                            @enderror
                        </div>


                        <div class="text-right mt-4">
                            <button class="btn btn-primary" type="submit">GUARDAR</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


