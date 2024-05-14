@extends('layout.main')
@section('about')
<main class="bg-light">
    <div class="container">
        <h1>about</h1>
        @foreach ($trains as $item)
            <p>{{$item->azienda}}</p>
        @endforeach
    </div>
</main>
@endsection

