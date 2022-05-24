@extends('template')
@section('title')
    Inscription Client
@endsection
@section('mybody')
<div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Well done!</h4>
    <p>Aww yeah {{ $req->input('titre') }} , Vous avez deposé un projet .</p>
</div>

@endsection
