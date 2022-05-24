@extends('template')
@section('title')
    Liste de projet
@endsection
@section('mybody')
    <br>
    <div class="" style="width: 1000px;">
        <table class="table ">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Titre</th>
                    <th scope="col">Description</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Delai</th>
                    <th scope="col"></th>
                    <th scope="col"></th>



                </tr>
            </thead>
            <tbody>
                @foreach ($projetarray as $p)
                    <tr>
                        <th scope="row">{{ $p->getId() }}</th>
                        <td>{{ $p->getTitre() }}</td>

                        <td> {{ $p->getDescription() }}</td>
                        <td>{{ $p->getPrix() }} dt</td>
                        <td>{{ $p->getDelai() }}</td>
                        <td>
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal1">
                                Postuler </button>
                        </td>

                        <td>
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal2">
                                Proposer un prix </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Postuler</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Propose prix</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Proposer Votre Prix</label>
                                <input type="number" class="form-control" id="exampleFormControlInput1"
                                    placeholder="99$">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
