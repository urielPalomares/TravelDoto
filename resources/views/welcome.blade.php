@extends('layouts.base')

@section('title', 'TravelDoto')

@push('css')
    <link rel="stylesheet" href="css/main.css" />
@endpush

@section('content')
    <header id="header" style="text-align: center;">
        <h1>Travel Doto</h1>
        <p>Cotizador de gatos de tu vuelo más hotel<br /></p>
        <a href="cotizador"><input type="button" class="btn btn-warning" value="Comenzar"></a>
    </header>
@endsection

@push('scripts')
    <script src="js/main.js"></script>
@endpush