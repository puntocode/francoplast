@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row mt-4">
        <div class="col d-flex justify-content-between">
            <div>
                <h2 class=""><a href="{{ route('customers.index') }}" class="text-decoration-none"><i class="fas fa-arrow-left pr-2"></i></a>Crear Cliente</h2>
                <p class="text-black-50">Complete el formulario para crear un nuevo cliente</p>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <form  action="{{ route('customers.store') }}"  method="POST" novalidate>
                        @csrf
                        <div class="form-group">
                            <label for="titulo">Cliente</label>
                            <input class="form-control @error('name') is-invalid @enderror" id="name" name="name" type="text" value="{{ old('name') }}">
                            @error('name')
                                <span class="text-danger"><strong>Error: {{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="titulo">RUC</label>
                            <input class="form-control @error('ruc') is-invalid @enderror" id="ruc" name="ruc" type="text" value="{{ old('ruc') }}">
                            @error('ruc')
                                <span class="text-danger"><strong>Error: {{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="address">Direccion</label>
                            <input class="form-control @error('address') is-invalid @enderror" id="address" name="address" type="text" value="{{ old('address') }}">
                            @error('ruc')
                                <span class="text-danger"><strong>Error: {{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="city">Ciudad</label>
                            <input class="form-control @error('city') is-invalid @enderror" id="city" name="city" type="text" value="{{ old('city') }}">
                            @error('city')
                                <span class="text-danger"><strong>Error: {{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="phone">Celular</label>
                            <input class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" type="number" value="{{ old('phone') }}">
                            @error('phone')
                                <span class="text-danger"><strong>Error: {{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control @error('email') is-invalid @enderror" id="email" name="email" type="email" value="{{ old('email') }}">
                            @error('email')
                                <span class="text-danger"><strong>Error: {{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="contact">Contacto</label>
                            <input class="form-control @error('contact') is-invalid @enderror" id="contact" name="contact" type="text" value="{{ old('contact') }}">
                            @error('contact')
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


