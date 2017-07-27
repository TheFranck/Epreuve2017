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
        //"cover" =>$manga->cover,
      ]
    );
    foreach ($manga->authors as $author)
    {
      array_push($value[$i]["author"], $author->name);
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
      $authorsList[$author->id] = $author->name;
    }
    return view('addManga', ['authors' => $authorsList ]);
  }

/************************************/

public function insertManga(Request $request)
{
  //$store = $request->cover->store('public/img');
  $store = str_replace("public", "storage", $store); // On remplace public par storage
  $manga = new Manga;
  $manga->title = $request->title;
  //$book->author = $request->author;
  //$book->save();
  $manga->cover = $store;
  $manga->save();
  $manga->authors()->attach($request->author);
  return redirect ('/list');
}

}