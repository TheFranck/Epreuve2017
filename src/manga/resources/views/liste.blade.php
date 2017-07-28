@extends('layout.baseLayout')

@section('content')
<div class="img-header2">
</div>
<section id="liste">
  <h2>Votre Mangathèque virtuelle</h2>
  <p>La liste des mangas présents dans votre mangathèque avec la couverture du premier tome, le titre, le nom du mangaka et un synopsis rapide.</p>
  <table id="table" class="table table-striped">
    <thead>
    <tr>
      <th>Couverture</th>
      <th>Nom du Manga</th>
      <th>Nom du Mangaka</th>
      <th>Synopsis</th>
    </tr>
    </thead>
    <tbody>
  @foreach ($mangas as $manga)
    <tr>
      <td id="cover">
      <img src="{{ URL::asset($manga['cover'])}}" alt="Couverture du manga">
      </td>
      <td id="titre">{{ $manga['title'] }}</td>
      <td id="auteur">
          @foreach ($manga['author'] as $author)
            {{ $author }}
          @endforeach
      </td>
      <td id="syno">{{ $manga['description'] }}</td>
        <td>
          <div class="maj-sup">
            {{ Form::open(['url' => '/delete/manga']) }}
            {{ Form::hidden('id', $manga['id']) }}
            {{ Form::submit('Supprimer')}}
            {{ Form::close() }}
            {{ Form::open(['url' => '/update/manga']) }}
            {{ Form::hidden('id', $manga['id']) }}
            {{ Form::submit('Mettre à jour ')}}
            {{ Form::close() }}
          </div>
        </td>
  </tr>
@endforeach
  </tbody>
  </table>

</section>
@endsection
