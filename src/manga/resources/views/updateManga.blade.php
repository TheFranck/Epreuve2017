@extends('layout.baseLayout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">

                <div class="panel-body">
                  <h2>Mettre à jour un manga</h2>
                  <p>Vous pouvez mettre à jour, changer le titre d'un manga ou encore le mangaka</p>

                  {{ Form::open(['url' => '/update/manga/action']) }}

                  {{ Form::label('title', 'le Titre du livre') }}
                  {{ Form::text('title', $title) }}
                  {{ Form::label('author', 'le nom d\'un auteur') }}
                  {{ Form::select('author[]', $authors, null, array('multiple' => 'multiple'))}}
                  {{ Form::hidden('id', $id) }}
                  {{ Form::submit('Mettre à jour')}}

                  {{ Form::close() }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
