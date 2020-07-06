@extends('layouts.layout')

@section('content')
<div class="col-lg-6 mx-auto">
  <h2><strong>Your shortened URL</strong></h2>
  <p>Copy the shortened link and share it in messages, texts, posts, websites and other locations.</p>
</div>
<div class="p-4 shadow-sm border col-lg-6 row mx-auto">
  <div class="row col-12 mx-auto">
    <div class="col-8 border p-3"><strong id="copy">{{ $shortUrl }}</strong></div>
    <button class="btn btn-primary col-4" onclick="copyTextFromElement('copy')">Copy</button>
  </div>
  <div class="row col-12 mx-auto">
    <p class="mt-3 mb-0">Long URL: <a href="{{ $longUrl }}">{{ $longUrl }}</a></p>
  </div>
</div>
@endsection
