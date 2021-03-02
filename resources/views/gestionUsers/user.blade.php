 @extends('layouts.master')
 @section('css')

 @endsection
 @section('content')
 <!-- [ Main Content ] start -->
 <div class="pcoded-main-container">
     <div class="pcoded-content">
         <!-- [ breadcrumb ] start -->
         <div class="page-header">
             <div class="page-block">
                 <div class="row align-items-center">
                     <div class="col-md-12">
                         <div class="page-header-title">
                             <h5 class="m-b-10">UTILISATEURS</h5>
                         </div>
                         <ul class="breadcrumb">
                             <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                             <li class="breadcrumb-item"><a href="#!">UTILISATEURS</a></li>
                             <li class="breadcrumb-item"><a href="#!">LISTE DES UTILISATEURS</a></li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
         <!-- [ breadcrumb ] end -->
         <!-- [ Main Content ] start -->
         <div class="row">
             <!-- customar project  start -->
             <div class="col-xl-12">
                 <div class="card">
                     <div class="card-body">
                         <div class="row align-items-center m-l-0">
                             <div class="col-sm-6">
                                 @include('inc.flash')
                             </div>
                             <div class="col-sm-6 text-right">
                                 <button class="btn btn-success btn-sm btn-round has-ripple" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i> Add Department</button>
                             </div>
                         </div>
                         <div class="table-responsive">
                             <table id="report-table" class="table table-bordered table-striped mb-0">
                                 <thead>
                                     <tr>
                                         <th>NOM ET PRENOM</th>
                                         <th>DATE DE NAISSANCE</th>
                                         <th>SITUATION MATRIMONIAL</th>
                                         <th>LIEUX DE NAISSANCE</th>
                                         <th>NIVEAU D'ETUDE</th>
                                         <th>GRADE</th>
                                         <th>VILLE DE RESIDENCE</th>
                                         <th>SUPERIEUR HIERACHIQUE</th>
                                         <th>DATE DE PRISE DE SERVICE</th>
                                         <th>NOMBRE D'ENFANT</th>
                                         <th>AGENCE REGIONAL</th>
                                         <th>DIPLOME</th>
                                         <th>POSTE</th>
                                         <th>DIECTION</th>
                                         <th>SOUS-DIRECTION</th>
                                         <th>SERVICE</th>
                                         <th>CONTACT</th>
                                         <th>E-MAIL</th>
                                         <th>PASSWORD</th>
                                         <th>ACTIONS</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <tr>
                                         <td>
                                             <img src="assets/images/ticket/p1.jpg">
                                         </td>
                                         <td>Anesthetics</td>
                                         <td>There are many variations of passages of Lorem Ipsum ...</td>
                                         <td>
                                             <!-- <a href="#!" class="btn btn-primary btn-sm"><i class="feather icon-plus"></i>Manage Facilities</a> -->
                                             <a href="#!" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
                                             <a href="#!" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                                         </td>
                                     </tr>
                                     <tr>
                                         <td>
                                             <img src="assets/images/ticket/p3.jpg">
                                         </td>
                                         <td>Cardiology</td>
                                         <td>There are many variations of passages of Lorem Ipsum ...</td>
                                         <td>
                                             <!-- <a href="#!" class="btn btn-primary btn-sm"><i class="feather icon-plus"></i>Manage Facilities</a> -->
                                             <a href="#!" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
                                             <a href="#!" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                                         </td>
                                     </tr>
                                     <tr>
                                         <td>
                                             <img src="assets/images/ticket/p2.jpg">
                                         </td>
                                         <td>Gastroenterology</td>
                                         <td>There are many variations of passages of Lorem Ipsum ...</td>
                                         <td>
                                             <!-- <a href="#!" class="btn btn-primary btn-sm"><i class="feather icon-plus"></i>Manage Facilities</a> -->
                                             <a href="#!" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
                                             <a href="#!" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                                         </td>
                                     </tr>
                                     <tr>
                                         <td>
                                             <img src="assets/images/ticket/p4.jpg">
                                         </td>
                                         <td>Anesthetics</td>
                                         <td>There are many variations of passages of Lorem Ipsum ...</td>
                                         <td>
                                             <!-- <a href="#!" class="btn btn-primary btn-sm"><i class="feather icon-plus"></i>Manage Facilities</a> -->
                                             <a href="#!" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
                                             <a href="#!" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                                         </td>
                                     </tr>
                                     <tr>
                                         <td>
                                             <img src="assets/images/ticket/p5.jpg">
                                         </td>
                                         <td>Gastroenterology</td>
                                         <td>There are many variations of passages of Lorem Ipsum ...</td>
                                         <td>
                                             <!-- <a href="#!" class="btn btn-primary btn-sm"><i class="feather icon-plus"></i>Manage Facilities</a> -->
                                             <a href="#!" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
                                             <a href="#!" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                                         </td>
                                     </tr>
                                 </tbody>
                             </table>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- customar project  end -->
         </div>
         <!-- [ Main Content ] end -->
     </div>
 </div>
 <div class="modal fade" id="modal-report" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-xl"> modal-xl
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title">Ajouter un Utilisateur</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <form method="POST" action="{{ route('user.store') }}">
                     @csrf()
                     <!-- <div class=" row">
                     <div class="col-sm-6">
                         <div class="form-group fill">
                             <label class="floating-label" for="Icon">Photo</label>
                             <input type="file" class="form-control" id="Icon" placeholder="sdf">
                         </div>
                     </div>
             </div><br> -->
                     <div class="row">
                         <div class="col-sm-4">
                             <div class="form-group">
                                 <label class="floating-label" for="Name">Nom et Prénom</label><br>
                                 <input type="text" class="form-control" id="nomprenom" name="nomprenom" placeholder="Nom er Prénom">
                             </div>
                         </div>
                         <div class="col-sm-4">
                             <div class="form-group">
                                 <label class="floating-label" for="Name">Date de Naissance</label><br>
                                 <input type="date" class="form-control" id="datenaissance" name="datenaissance" placeholder="Date de Naissance">
                             </div>
                         </div>
                         <div class="col-sm-4">
                             <div class="form-group fill">
                                 <label class="floating-label" for="Name">Situation Matrimoniale</label><br>
                                 <select class="mb-3 form-control" name="situationmatri" id="situationmatri">
                                     <option>-Veuillez Sélectionner-</option>
                                     <option value="Célibataire">Célibataire</option>
                                     <option value="En concubinage">En concubinage</option>
                                     <option value="Marié(e)">Marié(e)</option>
                                     <option value="Divorcée">Divorcée</option>
                                     <option value="Veuf ou Veuve">Veuf ou Veuve</option>
                                 </select>
                                 <!-- <input type="text" class="form-control" id="situationmatri" name="situationmatri" placeholder="Situation Matrimoniale"> -->
                             </div>
                         </div>
                     </div><br>
                     <div class="row">
                         <div class="col-sm-4">
                             <div class="form-group">
                                 <label class="floating-label" for="Name">Lieux de Naissance</label><br>
                                 <input type="text" class="form-control" id="lieuxnaissance" name="lieuxnaissance" placeholder="Lieux de Naissance">
                             </div>
                         </div>
                         <div class="col-sm-4">
                             <div class="form-group">
                                 <label class="floating-label" for="Name">Niveau d'etude</label><br>
                                 <select class="mb-3 form-control" id="Niveauetude" name="Niveauetude">
                                     <option>-Veuillez Sélectionner-</option>
                                     <option value="BAC">BAC</option>
                                     <option value="BAC+1">BAC+1</option>
                                     <option value="BAC+2">BAC+2</option>
                                     <option value="BAC+3">BAC+3</option>
                                     <option value="BAC+4">BAC+4</option>
                                     <option value="BAC+5">BAC+5</option>
                                     <option value="BAC+6 et plus">BAC+6 et plus</option>
                                 </select>
                             </div>
                         </div>
                         <div class="col-sm-4">
                             <div class="form-group fill">
                                 <label class="floating-label" for="Name">Grade</label><br>
                                 <select class="mb-3 form-control" id="grade_id" name="grade_id">
                                     <option>-Veuillez Sélectionner-</option>
                                     @foreach($grade as $item )
                                     <option value="{{ $item->id}}">{{ $item->libelle }}</option>
                                     @endforeach
                                 </select>
                             </div>
                         </div>
                     </div><br>
                     <div class="row">
                         <div class="col-sm-4">
                             <div class="form-group">
                                 <label class="floating-label" for="Name">Ville de Résidence</label><br>
                                 <input type="text" class="form-control" id="villeresidence" name="villeresidence" placeholder="Ville de Résidence">
                             </div>
                         </div>
                         <div class="col-sm-4">
                             <div class="form-group">
                                 <label class="floating-label" for="Name">Supérieur Hiérachique</label><br>
                                 <select class="mb-3 form-control" id="suphierachique" name="suphierachique">
                                     <option>-Veuillez Sélectionner-</option>
                                     <option value="Chef de service">Chef de service</option>
                                     <option value="Sous-Directeur">Sous-Directeur</option>
                                     <option value="Directeur">Directeur</option>
                                     <option value="Administrateur Adjoint">Administrateur Adjoint</option>
                                     <option value="Administrateur">Administrateur</option>
                                 </select>
                                 <!-- <input type="text" class="form-control" id="suphierachique" name="suphierachique" placeholder="Supérieur Hiérachique"> -->
                             </div>
                         </div>
                         <div class="col-sm-4">
                             <div class="form-group fill">
                                 <label class="floating-label" for="Name">Date de Prise de Service</label><br>
                                 <input type="date" class="form-control" id="datepriseservice" name="datepriseservice" placeholder="Date de Prise de Service">
                             </div>
                         </div>
                     </div><br>
                     <div class="row">
                         <div class="col-sm-4">
                             <div class="form-group">
                                 <label class="floating-label" for="Name">Nombre d'Enfants</label><br>
                                 <input type="text" class="form-control" id="nbrenfant" name="nbrenfant" placeholder="Nombre d'Enfants">
                             </div>
                         </div>

                         <div class="col-sm-4">
                             <div class="form-group fill">
                                 <label class="floating-label" for="Name">Agence Regional</label><br>
                                 <select class="form-control" name="agenceregional_id" id="agenceregional_id">
                                     @foreach($agence as $item )
                                     <option value="{{ $item->id}}">{{ $item->libelle }}</option>
                                     @endforeach

                                 </select>
                                 <!-- <input type="text" class="form-control" id="agenceregional_id" name="agenceregional_id" placeholder="Agence Regional"> -->
                             </div>
                         </div>

                         <div class="col-sm-4">
                             <div class="form-group">
                                 <label class="floating-label" for="Name">Poste</label><br>
                                 <input type="text" class="form-control" id="poste" name="poste" placeholder="Poste">
                             </div>
                         </div>
                     </div><br>
                     <div class="row">
                         <div class="col-sm-4">
                             <div class="form-group">
                                 <label class="floating-label" for="Name">Direction</label>
                                 <input type="text" class="form-control" id="direction_id" name="direction_id" placeholder="Direction">
                             </div>
                         </div>

                         <div class="col-sm-4">
                             <div class="form-group">
                                 <label class="floating-label" for="Name">Sous-Direction</label><br>
                                 <input type="text" class="form-control" id="'sous-direction_id" name="sous-direction_id" placeholder="Sous-Direction">
                             </div>
                         </div>

                         <div class="col-sm-4">
                             <div class="form-group">
                                 <label class="floating-label" for="Name">Service</label><br>
                                 <input type="text" class="form-control" id="service_id" name="service_id" placeholder="Service">
                             </div>
                         </div>

                     </div><br>
                     <div class="row">

                         <div class="col-sm-4">
                             <div class="form-group fill">
                                 <label class="floating-label" for="Name">Contact</label><br>
                                 <input type="text" class="form-control" id="contact" name="contact" placeholder="Contact">
                             </div>
                         </div>

                         <div class="col-sm-4">
                             <div class="form-group">
                                 <label class="floating-label" for="Name">E-mail</label><br>
                                 <input type="text" class="form-control" id="email" name="email" placeholder="E-mail">
                             </div>
                         </div>

                         <div class="col-sm-4">
                             <div class="form-group fill">
                                 <label class="floating-label" for="Name">Mot de Passe</label><br>
                                 <input type="text" class="form-control" id="password" name="password" placeholder="Mot de Passe">
                             </div>
                         </div>

                     </div><br>
                     <!-- <div class="row">
                         <div class="col-sm-12">
                             <div class="form-group">
                                 <label class="floating-label" for="Description">Description</label>
                                 <textarea class="form-control" id="Description" rows="3"></textarea>
                             </div>

                         </div>
                     </div> -->
                     <button class="btn btn-primary">Ajouter</button>
                     <button class="btn btn-danger">Annuller</button>

                 </form>
             </div>
         </div>
     </div>
 </div>
 <!-- [ Main Content ] end -->
 @endsection
 @section('js')
 <script>
     // DataTable start
     $('#report-table').DataTable();
     // DataTable end
 </script>

 @endsection