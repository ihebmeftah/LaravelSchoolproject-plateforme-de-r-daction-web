@extends('template')
@section('title')
    Welcome page
@endsection
@section('mybody')
<div class="text-center">
                    <h1 class="display-4 mb-4 ">C'est une belle Plateformes de rédaction
                    </h1>
                    <p class="lead mb-5">De nos jours, les besoins en matière de rédaction se multiplient à un rythme
                        extraordinaire. Il ne suffit plus d'être présent sur internet, il faut y être actif.

                    </p>
                    <a href="{{url('inscriptionclient')}}" class="btn btn-outline-secondary  mx-1">Aller à la page d'inscription Client</a>
                    <a href="{{url('inscriptionredacteur')}}" class="btn btn-outline-secondary  mx-1">Aller à la page d'inscription Rédacteur</a>
                    <br>
                    <a href="{{url('login')}}" class="btn btn-success  mx-1 mt-2">Aller à la page de Login</a>
</div>

@endsection
