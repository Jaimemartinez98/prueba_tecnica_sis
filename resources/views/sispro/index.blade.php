@extends('layouts.app')

@section('content')
    @include('flash-message')

    <form action="{{ route('sispro.token') }}" method="POST" enctype="multipart/form-data">
        @csrf

    <div class="row">

        <div class="col-6">
            <label for="nit" class="form-label">NIT</label>
            <input type="text" class="form-control" name="nit" id="nit" placeholder="Ingrese el nit"
                value="{{ old('nit') }}">
            @if ($errors->has('nit'))
                <p class="text-danger">{{ $errors->first('nit') }}</p>
            @endif
        </div>

        <div class="col-6">
            <label for="token" class="form-label">TOKEN</label>
            <input type="text" class="form-control" name="token" id="token"
                placeholder="Ingrese el token" value="{{ old('token') }}">
            @if ($errors->has('token'))
                <p class="text-danger">{{ $errors->first('token') }}</p>
            @endif
        </div>

        <br><br><br><br>

        <button type="submit" class="btn btn-success">Enviar</button>

    </div>

</form>

@endsection
