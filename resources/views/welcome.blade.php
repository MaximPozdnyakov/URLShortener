@extends('layouts.layout')

@section('content')
<div class="p-4 shadow-sm border col-lg-6 mx-auto">
    <h2 class="text-center mb-3 ">Paste URL to be shortened</h2>
    <form action="/shorten" method="POST">
        @csrf
        <div class="input-group border">
            <input type="text" name="longUrl" class="form-control" placeholder="Enter the link here" aria-label="Recipient's username" aria-describedby="button-addon2">
            <div class="input-group-append">
                <input type="submit" value="Shorten URL" class="btn btn-primary" id="button-addon2"></input>
            </div>
        </div>
        @if ($errors->any())
            <div>
                @foreach ($errors->all() as $error)
                    <p class="text-danger mt-3 mb-0">{{ $error }}</p>
                @endforeach
            </div>
        @endif
    </form>
</div>
@endsection

