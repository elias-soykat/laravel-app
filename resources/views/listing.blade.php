@extends('layout')

@section('content')
    <h1>{{ $heading }} - {{ $listing['id'] }}</h1>

    <h2>{{ $listing['title'] }}</h2>

    <p>{{ $listing['description'] }}</p>



    <a href="/listings">
        <button type="button">Back</button>
    </a>

    <!DOCTYPE html>
    <html lang="en">
@endsection
