<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AnimeController extends Controller
{

    public function home()
    {
        $response = Http::get('https://api.jikan.moe/v4/genres/anime')->json();
        $dati = $response['data'];
        return view('anime', compact('dati'));
    }

    public function byGenres($genre_id)
    {
        $uri = 'https://api.jikan.moe/v4/anime?genres=' . $genre_id;
        $anime = Http::get($uri)->json()['data'];
        return view('/genre', compact('anime'));
    }

    public function byId($id)
    {
        $uri = 'https://api.jikan.moe/v4/anime/' . $id;
        $anime = Http::get($uri)->json()['data'];
        return view('dettaglio', compact('anime'));
    }
}