@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Dashboard</div>

        <div class="panel-body">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <a href="{{ route('andamentos.create') }}">Procuradoria</a>

            <form action="{{ route('andamentos.store') }}" method="POST">
                {{ csrf_field() }}

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="form-group">
                    <label for="Processo"></label>
                    <input name="processo_id" class="form-control" id="exampleInputEmail1" aria-describedby="numero_judicialHelp" placeholder="Processo">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Número Alerj</label>
                    <input name="numero_alerj" class="form-control" id="exampleInputPassword1" placeholder="Número Alerj">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
@endsection
