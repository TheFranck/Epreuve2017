<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manga as Manga;
use App\Author as Author;

class ListController extends Controller
{
  public function index()
  {
    $mangas = Manga::all();
    $value = array();
    $i=0;

    foreach ($mangas as $manga) {
      array_push($value, [
        "title" => $manga->title,
        "author" => array(),
        "id" => $manga->id,
        "cover" =>$manga->cover,
        "description"=>$manga->description,
      ]
    );

    foreach ($manga->authors as $author)
    {
      array_push($value[$i]["author"], $author->author_name);
    };
    $i ++;
  };

    return view('liste', ["mangas" => $value]);
  }
/************************************/

  public function addManga()
  {
    $authors= Author::all();
    $authorsList = array();
    foreach ($authors as $author)
    {
      $authorsList[$author->id] = $author->author_name;
    }
    return view('addManga', ['authors' => $authorsList ]);
  }

/************************************/

public function insertManga(Request $request)
{
  $store = $request->cover->store('public/img');
  $store = str_replace("public", "storage", $store);
  $manga = new Manga;
  $manga->title = $request->title;
  $manga->description = $request->description;
  $manga->cover = $store;
  $manga->save();
  $manga->authors()->attach($request->author);
  return redirect ('/list');
}
/***********************************/

public function deleteManga(Request $request)
{
  $manga = Manga::find($request->id);
  $manga->authors()->detach();
  $manga->delete();
  return redirect ('/list');
}

/***********************************/

public function updateManga(Request $request)
{
  $manga = Manga::find($request->id);
  $authors= Author::all();
  $authorsList = array();
  foreach ($authors as $author)
    {
      $authorsList[$author->id] = $author->author_name;
    }
  return view('updateManga', ['title' => $manga->title, 'authors' => $authorsList, 'id' => $manga->id, 'description' => $manga->description]);
}

/***********************************/

public function updateMangaAction(Request $request)
{
  $manga = Manga::find($request->id);
  $manga->title = $request->title;
  $manga->save();
  $manga->authors()->detach();
  $manga->authors()->attach($request->author);
  //$manga->description = $request->description;
  return redirect ('/list');
}

}
