@extends('/teamplate/home')
@section('contenu')
<h1>profil backend</h1>
<div class="row">
@foreach($backtab as $value)
<div class="card" style="width: 18rem;">
  <img src="{{asset('img/'.$value->src)}} " class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$value->nom}} </h5>
    <p class="card-text">{{$value->fonction}}</p>

  </div>
</div>


@endforeach
</div>
@endsection