@extends('layout.baseLayout')

@section('content')
    <section id="liste">
                  <h2>Votre Mangathèque virtuelle</h2>
                  <p>Ici se trouve la liste de vos mangas</p>
                  <table>
                    <tr>
                      <th>nom du livre</th>
                      <th>Auteur du Livre</th>
                    </tr>

                    @foreach ($mangas as $manga)


                      <tr>
                        <td>
                          <img src="{{ URL::asset($book['cover'])}}" alt="">
                        </td>
                        <td>{{ $manga['title'] }}</td>
                        <td>
                          @foreach ($manga['author'] as $author)
                            {{ $author }}
                          @endforeach
                        </td>
                        <td>{{ Form::open(['url' => '/delete/manga']) }} <!-- Trouver sur laravel Collective-->
                            {{ Form::hidden('id', $manga['id']) }}
                            {{ Form::submit('Supprimer')}}
                            {{ Form::close() }}
                        </td>
                        <td>
                          {{ Form::open(['url' => '/update/manga']) }} <!-- Trouver sur laravel Collective-->
                          {{ Form::hidden('id', $manga['id']) }}
                          {{ Form::submit('Mettre à jour ')}}
                          {{ Form::close() }}
                        </td>
                      </tr>
                    @endforeach
                  </table>

    </section>
@endsection
