@extends('template')
@section('title')
    Gere profile
@endsection
@section('mybody')
    <section>
        <div class="container  ">
            <div class="row">
                <div class="col-12 col-sm-8  m-auto">
                    <div class="card border border-dark shadow">
                        <div class="card-header border-bottom border-dark text-center">
                            <h2> {{ $users->getname() }}</h2>
                        </div>
                        <div class="card-body ">
                            <svg class="mx-auto my-3" style="width: 100%;" xmlns="http://www.w3.org/2000/svg" width="60"
                                height="60" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                <path fill-rule="evenodd"
                                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                            </svg>
                            <div class="d-flex p-2 ">{{ $users->getId() }}</div>
                            <div class="d-flex p-2 ">
                                <a class="text-primary" href="https://github.com/ihebmeftah">{{ $users->getgithub() }}</a>
                            </div>
                            <div class="d-flex p-2 ">{{ $users->getphone() }}</div>
                            <div class="d-flex p-2 badge badge-secondary">#HTML #CSS #FLUTTER #JAVASCRIPT</div>
                            <div class="d-flex p-2">{{ $users->getdescp() }}</div>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success float-right" data-toggle="modal"
                                data-target="#exampleModal">
                                Modifier </button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modifier votre profile
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col">
                                                    <input type="text" class="form-control" placeholder="Nom">
                                                </div>
                                                <div class="col">
                                                    <input type="text" class="form-control" placeholder="Prenom">
                                                </div>
                                            </div>
                                            <input type="adress" name="prenom" class="form-control my-3 py-3"
                                                placeholder="Site web">
                                            <input type="phone" name="tlf" class="form-control my-3 py-3"
                                                placeholder="Numero de telephone">
                                            <input type="text" name="competences" class="form-control my-3 py-3"
                                                placeholder="Competences">
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Bio"></textarea>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-success">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
