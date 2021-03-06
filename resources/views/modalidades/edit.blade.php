@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Modalidades
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($modalidades, ['route' => ['modalidades.update', $modalidades->idmodalidades], 'method' => 'patch']) !!}

                        @include('modalidades.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection