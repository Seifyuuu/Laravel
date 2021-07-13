@extends('template.main')

@section('content')

    <div id="accueil" class="text-center p-5 mb-5">
        <h1>Hello Coding School</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, temporibus.</p>
        <hr>
        <p>Lorem ipsum dolor sit amet.</p>
        <button type="button" class="btn btn-primary">About</button>
    </div>

    <div class="text-center">
        <h1>BONUS :</h1>
        <p>{{url()->current()}}</p>
        <p>{{url()->previous()}}</p>
    </div>

@endsection