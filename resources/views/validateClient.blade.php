@extends('template')
@section('title')
    Inscription Client
@endsection
@section('mybody')
@if (@empty($req->input('nom')) && @empty($req->input('prenom')))
<div class="alert alert-danger" role="alert">
    s'il vous plaît remplir le formulaire   !
  </div>
@else
<div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Well done!</h4>
    <p>Aww yeah {{ $req->input('nom') }} {{ $req->input('prenom') }}, Vous avez inscrit comme étant un client.</p>
    <hr>
    <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
</div>
@endif


@endsection
