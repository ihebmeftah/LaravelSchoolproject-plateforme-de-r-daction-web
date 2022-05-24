@extends('template')
@section('title')
    Deposer projet
@endsection
@section('mybody')
    <form method="POST" action="{{url("deposerprojet")}}">
        @csrf
        <div class="form-group" >
            <label for="exampleFormControlInput1">TITRE</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="titre" placeholder="PROJET BLA BLA BLA">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">PRIX</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="80 DT">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">DELAI</label>
            <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="80 DT">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">DESCRIPTION</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="desc" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-success btn-lg btn-block">Deposer le projet</button>

    </form>
@endsection
