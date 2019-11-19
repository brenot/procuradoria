@extends('layouts.app')

@section('content')
    <div class="" id="vue-processos">
        <div class="hidden-print" id="cabecalho-processos">
            <div class="row">

                <div class="col-xs-1">
                    <a href="{{ route('processos.create') }}" class="btn btn-danger pull-right">
                        <i class="fa fa-plus"></i> Novo




                    </a>
                </div>

                <div class="col-md-10">



                    @include(






                        'layouts.partials.search-form-vue',
                        [
                            'routeSearch' => 'home.index',

                        ]
                    )










                </div>
                <div class="col-md-2 text-right pull-right">
                    <div class="btn btn-primary" @click="print()"><i class="fa fa-print"></i> Imprimir</div>
                </div>
            </div>
            {{-- <div class="row">
                 <div class="col-md-3">
                     <h3><span>@{{ tables.processos.total }}</span> Processo<span>@{{ tables.processos.length == 1 ? '' : 's' }}</span></h3>
                 </div>
                 <div class="col-md-2">

                 </div>
             </div>
 --}}




        </div>

        <div class="">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            @include('processos.partials.table')
        </div>

        @include('home.partials.filter-modal', ['isFilter' => true])
    </div>
@endsection
