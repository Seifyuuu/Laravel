@extends('template.main')

@section('content')
    <h1>page front</h1>
    @foreach ($frontTab as $item )
       <div class="col-4"> 
        <h1>Nom de la personne : {{$item->name}}</h1>
        <p> Fonction : {{$item->poste}}</p>
        <div><p>Photo : </p>
        <img src="{{$item->photo}}" alt=""></div></div>
        <hr>
    @endforeach

@endsection