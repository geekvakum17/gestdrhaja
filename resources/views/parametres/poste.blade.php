@extends('layouts.main')
@section('content')
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
                @include('inc.flash')
              <h4 class="card-title">LISTE DES POSTES</h4>
              <div class="text-center">
                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal-2">Ajout d'un Poste<i class="mdi mdi-plus ml-1"></i></button>
              </div>
              <div class="table-responsive pt-3">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>
                        Libelle
                      </th>
                      <th width="30%">
                        Action
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($roles as $item)
                    <tr>
                      <td>
                        {{ $item->name }}
                      </td>
                      <td>
                        <a href="#!" data-statu_id="{{ $item->id }}" data-libelle="{{ $item->name }}" data-toggle="modal" data-target="#editModal" class="btn btn-info btn-sm"><i class="mdi mdi-pencil"></i>&nbsp;Modification </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="#!" data-statu_id="{{ $item->id }}" data-toggle="modal" data-target="#deleteModal" class="btn btn-danger btn-sm"><i class="mdi mdi-delete"></i>&nbsp;Suppression </a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>


 <!-- Modal starts -->

  <div class="modal fade" id="exampleModal-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel-2">Ajout d'un Poste</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{ route('poste.store') }}">
                @csrf()
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="floating-label" for="Name">libelle</label>
                            <input type="text" class="form-control" id="Name" name="name" placeholder="">
                        </div>
                    </div>

                </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Ajouter</button>
          <button type="button" class="btn btn-light" data-dismiss="modal">Annuller</button>
        </div>
    </form>
      </div>
    </div>
  </div>
  <!-- Modal Ends -->



    </div>
    <!-- partial -->
  </div>

    @endsection
    @section('js')
    @endsection
