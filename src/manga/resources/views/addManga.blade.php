@extends('layout.baseLayout')

@section('content')
<div class="img-header3">
</div>
<section class="upManga">
  <h2>Ajouter un nouveau manga</h2>
  <p>Ajouter un manga via ce formulaire.</p>
  <p>Entrez un titre, choisissez le mangaka du manga et entrez un synopsis.</p>
  <p>Dans le cas où un mangaka n'est pas présent dans la liste, rendez-vous dans <a href="/add/author">Ajouter un mangaka</a>.</p>
    {{ Form::open(['url' => '/insert/manga','files'=>true, 'class' => 'formManga']) }}
    {{ Form::label('title', 'le Titre du Manga') }}
    {{ Form::text('title') }}
    {{ Form::label('author', 'le nom d\'un auteur') }}
    {{ Form::select('author[]', $authors, null, array('multiple' => 'multiple'))}}
    {{ Form::label('description', 'Synopsis du manga') }}
    {{ Form::textarea('description') }}
    {{ Form::file('cover')}}
    {{ Form::submit('Ajouter ce Manga',['class' => 'buttonAdd'])}}
    {{ Form::close() }}
</section>
@endsection
