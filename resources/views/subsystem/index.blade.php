@extends('layouts.app')

@section('content')
    <div class="" id="vue-agenda">
        <div class="hidden-print">
            <div class="row text-center">
                <div class="col-md-12">
                    <br><br><br><br>
                    <h1>Em qual sistema deseja entrar?</h1>
                </div>

                <div class="col-md-12">

                    <div class="home-buttons">

                        <a
                                class="btn btn-primary btn-lg raised gradient"
                                style="font-size: 3em;"
                                href="{{ route('subsystem.select', ['type' => App\Support\Constants::SUBSYSTEM_PROCESSOS]) }}"
                        >
                            <i class="fas fa-gavel"></i> Processos
                        </a>

                        <a
                                class="btn btn-primary btn-lg raised gradient"
                                style="font-size: 3em;"
                                href="{{ route('subsystem.select', ['type' => App\Support\Constants::SUBSYSTEM_OPINIOES]) }}"
                        >
                            <i class="fas fa-layer-group"></i> Pareceres
                        </a>


                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
