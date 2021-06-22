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
              <h4 class="card-title">LISTE DES UTILISATEURS</h4>
              <div class="text-center">
                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal-2">Ajouter un Utilisateur<i class="mdi mdi-plus ml-1"></i></button>
              </div>
              <div class="table-responsive pt-3">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>
                        NOM ET PRENOMS
                      </th>
                      <th>
                        CONTACT
                      </th>
                      <th>
                        E-MAIL
                      </th>
                      <th>
                        POSTE
                      </th>
                      <th width="30%">
                        Action
                      </th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach($user as $item)
                    <tr>
                      <td>
                        {{ $item->nomprenom }}
                      </td>
                      <td>
                        {{ $item->contact }}
                      </td>
                      <td>
                        {{ $item->email }}
                      </td>
                      <td>
                        {{ $item->poste}}
                      </td>
                      <td>
                        <a href="#!" data-statu_id="{{ $item->id }}" data-libelle="{{ $item->nomprenom }}" data-libelle="{{ $item->contact }}" data-libelle="{{ $item->email }}" data-toggle="modal" data-target="#editModal" class="btn btn-info btn-sm"><i class="mdi mdi-pencil"></i>&nbsp;Modification </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel-2">Ajouter un Utilisateur</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
            <form method="POST" action="{{ route('user.store') }}">
                @csrf()
                <div class="modal-header">
                    <h5 class="modal-title">Informations Personnelles</h5>
                </div><br>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="floating-label" for="Name">Matricules</label>
                            <input type="text" class="form-control" id="matricule" name="matricule" placeholder="" required>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="floating-label" for="Name">Nom et Prénom</label>
                            <input type="text" class="form-control" id="nomprenom" name="nomprenom" placeholder="" required>
                        </div>
                    </div>


                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="floating-label" for="Name">Date de Naissance</label>
                            <input type="date" class="form-control" id="datenaissance" name="datenaissance" placeholder="" required>
                        </div>
                    </div>

                </div><br>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="floating-label" for="Name">Situation Matrimoniale</label>
                            <select class="mb-3 form-control" name="situationmatri" id="situationmatri" required>
                                <option>-Veuillez Sélectionner-</option>
                                <option value="Célibataire">Célibataire</option>
                                <option value="En concubinage">En concubinage</option>
                                <option value="Marié(e)">Marié(e)</option>
                                <option value="Divorcée">Divorcée</option>
                                <option value="Veuf ou Veuve">Veuf ou Veuve</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="floating-label" for="Name">Lieux de Naissance</label>
                            <input type="text" class="form-control" id="lieuxnaissance" name="lieuxnaissance" placeholder="" required>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="floating-label" for="Name">Nombre d'Enfants</label>
                            <select class="mb-3 form-control" id="nbrenfant" name="nbrenfant" required>
                                <option>-Veuillez Sélectionner-</option>
                                <option value="00">Aucun</option>
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                                <option value="07">07</option>
                                <option value="08">08</option>
                                <option value="09">09</option>
                                <option value="10">10</option>
                                <option value="Plus de 10">Plus de 10</option>
                            </select>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="floating-label" for="Name">Niveau d'etude</label>
                            <select class="mb-3 form-control" id="Niveauetude" name="Niveauetude" required>
                                <option>-Veuillez Sélectionner-</option>
                                @foreach($niveauetude as $item )
                                <option value="{{ $item->id}}">{{ $item->libelle }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="floating-label" for="Name">Diplome</label>
                            <select class="mb-3 form-control" id="diplome" name="diplome" required>
                                <option>-Veuillez Sélectionner-</option>
                                @foreach($diplome as $item )
                                <option value="{{ $item->id}}">{{ $item->libelle }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                </div>

                <div class="modal-header">
                    <h5 class="modal-title">Informations Professionnelles</h5>
                </div><br>

                <div class="row">

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="floating-label" for="Name">Direction</label>
                            <select class="form-control" id="direction_id" name="direction_id" required>
                                <option>-Veuillez Sélectionner-</option>
                                @foreach($direction as $item )
                                <option value="{{ $item->id}}">{{ $item->libelle }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="floating-label" for="Name">Sous-Direction</label>
                            <select class="form-control" id="sousdirection_id" name="sousdirection_id" required>
                                <option>-Veuillez Sélectionner-</option>
                                @foreach($sousdirection as $item )
                                <option value="{{ $item->id}}">{{ $item->libelle }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="floating-label" for="Name">Agence Regional</label>
                            <select class="form-control" name="agenceregional_id" id="agenceregional_id" required>
                                <option>-Veuillez Sélectionner-</option>
                                @foreach($agence as $item )
                                <option value="{{ $item->id}}">{{ $item->libelle }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="floating-label" for="Name">Service</label>
                            <select class="form-control" id="service_id" name="service_id" required>
                                <option>-Veuillez Sélectionner-</option>
                                @foreach($service as $item )
                                <option value="{{ $item->id}}">{{ $item->libelle }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="floating-label" for="Name">Grade</label>
                            <select class="mb-3 form-control" id="grade_id" name="grade_id" required>
                                <option>-Veuillez Sélectionner-</option>
                                @foreach($grade as $item )
                                <option value="{{ $item->id}}">{{ $item->libelle }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="floating-label" for="Name">Date de Prise de Service</label>
                            <input type="date" class="form-control" id="datepriseservice" name="datepriseservice" placeholder="" required>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="floating-label" for="Name">Guichet Emploi Jeunes</label>
                            <select class="mb-3 form-control" id="guichet" name="guichet" required>
                                <option>-Veuillez Sélectionner-</option>
                                 <option value="Aucun">Aucun</option>
                                 <option value="Yopougon">Yopougon</option>
                                 <option value="Abobo">Abobo</option>
                                 <option value="Adjamé">Adjamé</option>
                                 <option value="Marcory">Marcory</option>
                                 <option value="Koumassi">Koumassi</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="floating-label" for="Name">Poste</label>
                            <select class="mb-3 form-control" id="poste" name="poste" required>
                                <option>-Veuillez Sélectionner-</option>
                                @foreach($role as $item )
                                <option value="{{ $item->id}}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="floating-label" for="Name">Contact</label>
                            <input type="text" class="form-control" id="contact" name="contact" placeholder="" required>
                        </div>
                    </div>

                </div><br>

                <div class="modal-header">
                    <h5 class="modal-title">Pramètres de Connexion</h5>
                </div><br>

                <div class="row">

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="floating-label" for="Name">E-mail</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="" required>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="floating-label" for="Name">Mot de Passe</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="" required>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="floating-label" for="Name">Confirmé votre mot de passe</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="" required>
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
