@extends('layout.baseLayout')

@section('content')
<div class="img-header4">
</div>
<section class="addAuthor">
                  <h2>Ajout d'un nouveau mangaka</h2>

                  <p>Liste des mangakas déjà présents.</p>
                  <ul class="mangaka_name">
                    @foreach ($authors as $author)
                        <li> {{ $author }} </li>
                    @endforeach
                  </ul>
                  <p>Ajouter un mangaka via ce formulaire.</p>
                  {{ Form::open(['url' => '/insert/author','class' => 'formAuthor']) }} <!-- Trouver sur laravel Collective-->
                  {{ Form::label('name', 'le nom d\'un auteur') }}
                  {{ Form::text('name')}}
                  {{ Form::submit('Ajouter cet auteur',['class' => 'buttonAdd'])}}
                  {{ Form::close() }}

</section>
@endsection
