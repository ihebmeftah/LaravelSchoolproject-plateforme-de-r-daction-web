@extends('template')
@section('title')
    Inscription Client
@endsection
@section('mybody')
    <form method="POST" action="{{url("inscriptionclient")}}">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="Nom">Nom</label>
                <input type="text" class="form-control" id="Nom" name="nom" placeholder="Nom">
            </div>
            <div class="form-group col-md-6">
                <label for="Prenom">Prenom</label>
                <input type="text" class="form-control" id="Prenom" name="prenom" placeholder="Prenom ">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Password</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
            </div>
        </div>
        <div class="form-group">
            <label for="CIN">CIN</label>
            <input type="text" class="form-control" id="CIN" placeholder="13 276 604">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">Pays</label>
                <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">Ville</label>
                <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="inputZip">Code postale</label>
                <input type="text" class="form-control" id="inputZip">
            </div>
        </div>

        <button type="submit" class="btn btn-primary btn-lg btn-block">Inscrire Client</button>
    </form>
@endsection
