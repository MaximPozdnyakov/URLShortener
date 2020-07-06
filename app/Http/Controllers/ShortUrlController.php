<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ShortUrl;

use Illuminate\Support\Str;

use Illuminate\Support\Facades\Validator;

class ShortUrlController extends Controller
{
    public function store(Request $request){
        $messages = [
            'longUrl.required' => 'Please, enter a url.',
            'longUrl.url' => 'Sorry, url format is invalid',
        ];
        
        Validator::make($request->all(), [
            'longUrl' => 'required|url',
        ], $messages)->validate();

        $shortUrl = new ShortUrl;
        $shortUrl->longUrl = $request->input('longUrl');
        $shortUrl->slug = Str::random(5);
        $shortUrl->save();

        return view('shorten', ['longUrl' => $shortUrl->longUrl, 'shortUrl' => url("/{$shortUrl->slug}")]);;
    }
    public function show($slug){
        if ($slug === "shorten") {
            return redirect('/');
        } else {
            $url = ShortUrl::where('slug', $slug)->first();
            return redirect($url->longUrl);
        }
    }
}
