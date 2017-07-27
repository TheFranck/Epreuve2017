@extends('layout.baseLayout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-body">
                  <h2>Rajout d'un mangaka</h2>
                  <p>Ajouter un mangaka via ce formulaire</p>
                  <ul class="mangaka_name">
                    @foreach ($authors as $author)
                        <li> {{ $author }} </li>
                    @endforeach
                  </ul>
                  {{ Form::open(['url' => '/insert/author']) }} <!-- Trouver sur laravel Collective-->
                  {{ Form::label('name', 'le nom d\'un auteur') }}
                  {{ Form::text('name')}}
                  {{ Form::submit('Ajouter cet auteur')}}
                  {{ Form::close() }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
