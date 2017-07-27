@extends('layout.baseLayout')

@section('content')
    <section id="liste">
                  <h2>Votre Mangathèque virtuelle</h2>
                  <p>Ici se trouve la liste de vos mangas</p>
                  <table>
                    <tr>
                      <th>nom du Manga</th>
                      <th>Auteur du manga</th>
                    </tr>

                    @foreach ($mangas as $manga)


                      <tr>
                        <td>
                          <!--<img src="{{ URL::asset($manga['cover'])}}" alt="">-->
                        </td>
                        <td>{{ $manga['title'] }}</td>
                        <td>
                          @foreach ($manga['author'] as $author)
                            {{ $author }}
                          @endforeach
                        </td>
                      </tr>
                    @endforeach
                  </table>

    </section>
@endsection
