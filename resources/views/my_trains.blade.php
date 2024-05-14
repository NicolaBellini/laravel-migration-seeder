@extends('layout.main')
@section('about')
<main class="bg-light">
    <div class="container">
    <table class="table">
        <thead>
            <tr>
            <th scope="col">azienda</th>
            <th scope="col">stazione di partenza</th>
            <th scope="col">stazione di arrivo</th>
            <th scope="col">partenza</th>
            <th scope="col">arrivo</th>
            <th scope="col">codice-treno</th>
            <th scope="col">numero carrozze</th>
            <th scope="col">in orario</th>
            <th scope="col">cancellato</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trains as $item)
            <tr>
            <td>{{$item->azienda}}</td>
            <td>{{$item->stazione_di_partenza}}</td>
            <td>{{$item->stazione_di_arrivo}}</td>
            <td>{{$item->orario_di_partenza}}</td>
            <td>{{$item->orario_di_arrivo}}</td>
            <td>{{$item->codice_treno}}</td>
            <td>{{$item->numero_carrozze}}</td>
            <td>{{$item->in_orario}}</td>
            <td>{{$item->cancellato}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$trains->links()}}
</main>
@endsection

