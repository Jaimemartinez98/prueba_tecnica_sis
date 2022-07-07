@extends('layouts.app')

@section('content')
@include('flash-message')

    <form action="{{ route('clients.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">

            <div class="col-6">
                <label for="name" class="form-label">Nombre del usuario</label>
                <input type="text" class="form-control" name="name" id="name"
                    placeholder="Ingrese el name del usuario" value="{{ old('name') }}">
                @if ($errors->has('name'))
                    <p class="text-danger">{{ $errors->first('name') }}</p>
                @endif
            </div>

            <div class="col-6">
                <label for="lastname" class="form-label">Apellido del usuario</label>
                <input type="text" class="form-control" name="lastname" id="lastname"
                    placeholder="Ingrese el apellido del usuario" value="{{ old('lastname') }}">
                @if ($errors->has('lastname'))
                    <p class="text-danger">{{ $errors->first('lastname') }}</p>
                @endif
            </div>

            <div class="col-6">
                <label for="phone" class="form-label">Télefono del usuario</label>
                <input type="text" class="form-control" name="phone" id="phone"
                    placeholder="Ingrese el phone del usuario" value="{{ old('phone') }}">
                @if ($errors->has('phone'))
                    <p class="text-danger">{{ $errors->first('phone') }}</p>
                @endif
            </div>
            <div class="col-6">
                <label for="address" class="form-label">Dirección del usuario</label>
                <input type="text" class="form-control" name="address" id="address"
                    placeholder="Ingrese el address del usuario" value="{{ old('address') }}">
                @if ($errors->has('address'))
                    <p class="text-danger">{{ $errors->first('address') }}</p>
                @endif
            </div>


            <div class="col-6">
                <label for="population" class="form-label">Población del usuario</label>
                <input type="text" class="form-control" name="population" id="population"
                    placeholder="Ingrese el population del usuario" value="{{ old('population') }}">
                @if ($errors->has('population'))
                    <p class="text-danger">{{ $errors->first('population') }}</p>
                @endif
            </div>

            <div class="col-6">
                <label for="email" class="form-label">Email del usuario</label>
                <input type="text" class="form-control" name="email" id="email"
                    placeholder="Ingrese el email del usuario" value="{{ old('email') }}">
                @if ($errors->has('email'))
                    <p class="text-danger">{{ $errors->first('email') }}</p>
                @endif
            </div>




            <br><br><br><br>
            <button type="submit" class="btn btn-success">Enviar</button>

        </div>



    </form>
@endsection
