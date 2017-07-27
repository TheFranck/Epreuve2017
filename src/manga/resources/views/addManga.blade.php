@extends('layout.baseLayout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-body">
                  <h2>Ajouter un nouveau manga</h2>
                  <p>Rajouter un manga via ce formulaire</p>

                  {{ Form::open(['url' => '/insert/manga','files'=>true]) }}
                  {{ Form::label('title', 'le Titre du Manga') }}
                  {{ Form::text('title') }}
                  {{ Form::label('author', 'le nom d\'un auteur') }}
                  {{ Form::select('author[]', $authors, null, array('multiple' => 'multiple'))}}
                  {{ Form::label('description', 'Synopsis du manga') }}
                  {{ Form::textarea('description') }}
                  {{ Form::file('cover')}}
                  {{ Form::submit('Ajouter ce Manga')}}

                  {{ Form::close() }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
