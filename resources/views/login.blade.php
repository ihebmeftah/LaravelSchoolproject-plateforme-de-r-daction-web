@extends('template')
@section('title')
    Login page
@endsection
@section('mybody')
    <form>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>

        <br>
        <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
    </form>
@endsection
