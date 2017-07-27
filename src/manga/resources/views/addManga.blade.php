@extends('layout.baseLayout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-body">
                  <h2>Votre bibliothèque virtuelle</h2>
                  <p>Rajouter un livre via un formulaire</p>

                  {{ Form::open(['url' => '/insert/manga','files'=>true]) }} <!-- Trouver sur laravel Collective-->

                  {{ Form::label('title', 'le Titre du livre') }}
                  {{ Form::text('title') }}
                  {{ Form::label('author', 'le nom d\'un auteur') }}
                  {{ Form::select('author[]', $authors, null, array('multiple' => 'multiple'))}}
                  {{ Form::file('cover')}}
                  {{ Form::submit('Ajouter ce Manga')}}

                  {{ Form::close() }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
