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
                                 <button class="btn btn-success btn-sm btn-round has-ripple" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i> Ajouter un Utilisateur</button>
                             </div>
                         </div>
                         <div class="table-responsive">
                             <table id="report-table" class="table table-bordered table-striped mb-0">
                                 <thead>
                                     <tr>
                                         <th>NOM ET PRENOM</th>
                                         <th>POSTE</th>
                                         <th>CONTACT</th>
                                         <th>E-MAIL</th>
                                         <th>MOT DE PASSE</th>
                                         <th>ACTIONS</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                    @foreach($user as $item)
                                     <tr>
                                         <td>
                                            {{ $item->nomprenom }}
                                         </td>
                                         <td>{{ $item->poste }}</td>
                                         <td>{{ $item->contact }}</td>
                                         <td>{{ $item->email }}</td>
                                         <td>{{ $item->password }}</td>
                                         <td> 
                                            <button
                                                data-user_id="{{ $item->id }}" 
                                                data-nomprenom="{{ $item->nomprenom }}" 
                                                data-poste="{{ $item->poste }}" 
                                                data-contact="{{ $item->contact }}" 
                                                data-email="{{ $item->email }}" 
                                                data-password="{{ $item->password }}"
                                                data-grade="{{ App\Models\Grade::find($item->grade_id)->libelle  }}"
                                                data-toggle="modal" 
                                                data-target="#editModal" 
                                                class="btn btn-info btn-sm">
                                                <i class="feather icon-edit"></i>
                                                &nbsp;Modification 
                                            </button>
                                            <button data-user_id="{{ $item->id }}" data-toggle="modal" data-target="#deleteModal" class="btn btn-danger btn-sm">
                                                <i class="feather icon-trash-2"></i>
                                                &nbsp;Suppression 
                                            </button>
                                         </td>
                                     </tr>
                                     @endforeach
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
                 <h5 class="modal-title">Informations Personnelles</h5>
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
                                 <input type="text" class="form-control" id="nomprenom" name="nomprenom" placeholder="Nom et Prénom" required>
                             </div>
                         </div>

                         <div class="col-sm-4">
                             <div class="form-group">
                                 <label class="floating-label" for="Name">Date de Naissance</label><br>
                                 <input type="date" class="form-control" id="datenaissance" name="datenaissance" placeholder="Date de Naissance" required>
                             </div>
                         </div>

                         <div class="col-sm-4">
                             <div class="form-group fill">
                                 <label class="floating-label" for="Name">Situation Matrimoniale</label><br>
                                 <select class="mb-3 form-control" name="situationmatri" id="situationmatri" required>
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
                                 <input type="text" class="form-control" id="lieuxnaissance" name="lieuxnaissance" placeholder="Lieux de Naissance" required>
                             </div>
                         </div>

                         <div class="col-sm-4">
                             <div class="form-group">
                                 <label class="floating-label" for="Name">Nombre d'Enfants</label><br>
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
                                 <!-- <input type="text" class="form-control" id="nbrenfant" name="nbrenfant" placeholder="Nombre d'Enfants"> -->
                             </div>
                         </div>

                         <div class="col-sm-4">
                             <div class="form-group">
                                 <label class="floating-label" for="Name">Niveau d'etude</label><br>
                                 <select class="mb-3 form-control" id="Niveauetude" name="Niveauetude" required>
                                     <option>-Veuillez Sélectionner-</option>
                                     @foreach($niveauetude as $item )
                                     <option value="{{ $item->id}}">{{ $item->libelle }}</option>
                                     @endforeach
                                 </select>
                             </div>
                         </div>

                     </div><br>

                     <div class="row">

                         <div class="col-sm-4">
                             <div class="form-group">
                                 <label class="floating-label" for="Name">Diplome</label><br>
                                 <select class="mb-3 form-control" id="diplome" name="diplome" required>
                                     <option>-Veuillez Sélectionner-</option>
                                     @foreach($diplome as $item )
                                     <option value="{{ $item->id}}">{{ $item->libelle }}</option>
                                     @endforeach
                                 </select>
                                 <!-- <input type="text" class="form-control" id="suphierachique" name="suphierachique" placeholder="Supérieur Hiérachique"> -->
                             </div>
                         </div>

                     </div><br>

                     <div class="modal-header">
                         <h5 class="modal-title">Informations Professionnelles</h5>
                     </div><br>

                     <div class="row">

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="floating-label" for="Name">Direction</label><br>
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
                                <label class="floating-label" for="Name">Sous-Direction</label><br>
                                <select class="form-control" id="sousdirection_id" name="sousdirection_id" required>
                                    <option>-Veuillez Sélectionner-</option>
                                    @foreach($sousdirection as $item )
                                    <option value="{{ $item->id}}">{{ $item->libelle }}</option>
                                    @endforeach
                                </select>
                                <!-- <input type="text" class="form-control" id="sous-direction_id" name="sous-direction_id" placeholder="Sous-Direction"> -->
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="floating-label" for="Name">Service</label><br>
                                <select class="form-control" id="service_id" name="service_id" required>
                                    <option>-Veuillez Sélectionner-</option>
                                    @foreach($service as $item )
                                    <option value="{{ $item->id}}">{{ $item->libelle }}</option>
                                    @endforeach
                                </select>
                                <!-- <input type="text" class="form-control" id="service_id" name="service_id" placeholder="Service"> -->
                            </div>
                        </div>

                    </div><br>

                     <div class="row">

                        <div class="col-sm-4">
                            <div class="form-group fill">
                                <label class="floating-label" for="Name">Grade</label><br>
                                <select class="mb-3 form-control" id="grade_id" name="grade_id" required>
                                    <option>-Veuillez Sélectionner-</option>
                                    @foreach($grade as $item )
                                    <option value="{{ $item->id}}">{{ $item->libelle }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group fill">
                                <label class="floating-label" for="Name">Date de Prise de Service</label><br>
                                <input type="date" class="form-control" id="datepriseservice" name="datepriseservice" placeholder="Date de Prise de Service" required>
                            </div>
                        </div>


                         <div class="col-sm-4">
                             <div class="form-group fill">
                                 <label class="floating-label" for="Name">Agence Regional</label><br>
                                 <select class="form-control" name="agenceregional_id" id="agenceregional_id" required>
                                     <option>-Veuillez Sélectionner-</option>
                                     @foreach($agence as $item )
                                     <option value="{{ $item->id}}">{{ $item->libelle }}</option>
                                     @endforeach
                                 </select>
                                 <!-- <input type="text" class="form-control" id="agenceregional_id" name="agenceregional_id" placeholder="Agence Regional"> -->
                             </div>
                         </div>

                     </div><br>

                     <div class="row">

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="floating-label" for="Name">Poste</label><br>
                                <select class="mb-3 form-control" id="poste" name="poste" required>
                                    <option>-Veuillez Sélectionner-</option>
                                    @foreach($role as $item )
                                    <option value="{{ $item->id}}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                <!-- <input type="text" class="form-control" id="poste" name="poste" placeholder="Poste"> -->
                            </div>
                        </div>

                         <div class="col-sm-4">
                             <div class="form-group fill">
                                 <label class="floating-label" for="Name">Contact</label><br>
                                 <input type="text" class="form-control" id="contact" name="contact" placeholder="Contact" required>
                             </div>
                         </div>

                     </div><br>

                     <div class="modal-header">
                        <h5 class="modal-title">Pramètres de Connexion</h5>
                    </div><br>

                     <div class="row">

                         <div class="col-sm-4">
                             <div class="form-group">
                                 <label class="floating-label" for="Name">E-mail</label><br>
                                 <input type="text" class="form-control" id="email" name="email" placeholder="E-mail" required>
                             </div>
                         </div>

                         <div class="col-sm-4">
                             <div class="form-group fill">
                                 <label class="floating-label" for="Name">Mot de Passe</label><br>
                                 <input type="password" class="form-control" id="password" name="password" placeholder="Mot de Passe" required>
                             </div>
                         </div>

                         <div class="col-sm-4">
                            <div class="form-group fill">
                                <label class="floating-label" for="Name">Mot de Passe</label><br>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Mot de Passe" required>
                            </div>
                        </div>

                     </div><br>
                     <button class="btn btn-primary">Ajouter</button>
                     <button class="btn btn-danger">Annuller</button>

                 </form>
             </div>
         </div>
     </div>
 </div>

 <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modification d'un Utilisateur</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-header">
                <h5 class="modal-title">Informations Personnelles</h5>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('user.update',':id') }}">
                    @method('put')
                    @csrf()
                    
                    <div class="row">

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="floating-label" for="Name">Nom et Prénom</label><br>
                                <input type="text" class="form-control" id="nomprenom" name="nomprenom" placeholder="Nom et Prénom" required>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="floating-label" for="Name">Date de Naissance</label><br>
                                <input type="date" class="form-control" id="datenaissance" name="datenaissance" placeholder="Date de Naissance" required>
                            </div>
                        </div>

                        <input type="hidden" name="user_id" id="user_id">

                        <div class="col-sm-4">
                            <div class="form-group fill">
                                <label class="floating-label" for="Name">Situation Matrimoniale</label><br>
                                <select class="mb-3 form-control" name="situationmatri" id="situationmatri" required>
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
                                <input type="text" class="form-control" id="lieuxnaissance" name="lieuxnaissance" placeholder="Lieux de Naissance" required>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="floating-label" for="Name">Nombre d'Enfants</label><br>
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
                                <!-- <input type="text" class="form-control" id="nbrenfant" name="nbrenfant" placeholder="Nombre d'Enfants"> -->
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="floating-label" for="Name">Niveau d'etude</label><br>
                                <select class="mb-3 form-control" id="Niveauetude" name="Niveauetude" required>
                                    <option>-Veuillez Sélectionner-</option>
                                    @foreach($niveauetude as $item )
                                    <option value="{{ $item->id}}">{{ $item->libelle }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                    </div><br>

                    <div class="row">

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="floating-label" for="Name">Diplome</label><br>
                                <select class="mb-3 form-control" id="diplome" name="diplome" required>
                                    <option>-Veuillez Sélectionner-</option>
                                    @foreach($diplome as $item )
                                    <option value="{{ $item->id}}">{{ $item->libelle }}</option>
                                    @endforeach
                                </select>
                                <!-- <input type="text" class="form-control" id="suphierachique" name="suphierachique" placeholder="Supérieur Hiérachique"> -->
                            </div>
                        </div>

                    </div><br>

                    <div class="modal-header">
                        <h5 class="modal-title">Informations Professionnelles</h5>
                    </div><br>

                    <div class="row">

                       <div class="col-sm-4">
                           <div class="form-group">
                               <label class="floating-label" for="Name">Direction</label><br>
                               <select class="form-control" id="direction" name="direction" required>
                                   <option>-Veuillez Sélectionner-</option>
                                   @foreach($direction as $item )
                                   <option value="{{ $item->id}}">{{ $item->libelle }}</option>
                                   @endforeach
                               </select>
                           </div>
                       </div>

                       <div class="col-sm-4">
                           <div class="form-group">
                               <label class="floating-label" for="Name">Sous-Direction</label><br>
                               <select class="form-control" id="sousdirection" name="sousdirection" required>
                                   <option>-Veuillez Sélectionner-</option>
                                   @foreach($sousdirection as $item )
                                   <option value="{{ $item->id}}">{{ $item->libelle }}</option>
                                   @endforeach
                               </select>
                               
                           </div>
                       </div>

                       <div class="col-sm-4">
                           <div class="form-group">
                               <label class="floating-label" for="Name">Service</label><br>
                               <select class="form-control" id="service" name="service" required>
                                   <option>-Veuillez Sélectionner-</option>
                                   @foreach($service as $item )
                                   <option value="{{ $item->id}}">{{ $item->libelle }}</option>
                                   @endforeach
                               </select>
                               
                           </div>
                       </div>

                   </div><br>

                    <div class="row">

                       <div class="col-sm-4">
                           <div class="form-group fill">
                               <label class="floating-label" for="Name">Grade</label><br>
                               <select class="mb-3 form-control" id="grade" name="grade" required>
                                   {{-- <option>-Veuillez Sélectionner-</option> --}}
                                   @foreach($grade as $item )
                                       <option value="{{ $item->id }}">{{ $item->libelle }}</option>
                                   @endforeach
                               </select>
                           </div>
                       </div>

                       <div class="col-sm-4">
                           <div class="form-group fill">
                               <label class="floating-label" for="Name">Date de Prise de Service</label><br>
                               <input type="date" class="form-control" id="datepriseservice" name="datepriseservice" placeholder="Date de Prise de Service" required>
                           </div>
                       </div>


                        <div class="col-sm-4">
                            <div class="form-group fill">
                                <label class="floating-label" for="Name">Agence Regional</label><br>
                                <select class="form-control" name="agenceregional" id="agenceregional" required>
                                    <option>-Veuillez Sélectionner-</option>
                                    @foreach($agence as $item )
                                    <option value="{{ $item->id}}">{{ $item->libelle }}</option>
                                    @endforeach
                                </select>
                                
                            </div>
                        </div>

                    </div><br>

                    <div class="row">

                       <div class="col-sm-4">
                           <div class="form-group">
                               <label class="floating-label" for="Name">Poste</label><br>
                               <select class="mb-3 form-control" id="poste" name="poste" required>
                                   <option>-Veuillez Sélectionner-</option>
                                   @foreach($role as $item )
                                   <option value="{{ $item->id}}">{{ $item->name }}</option>
                                   @endforeach
                               </select>
                               
                           </div>
                       </div>

                        <div class="col-sm-4">
                            <div class="form-group fill">
                                <label class="floating-label" for="Name">Contact</label><br>
                                <input type="text" class="form-control" id="contact" name="contact" placeholder="Contact" required>
                            </div>
                        </div>

                    </div><br>

                    <div class="modal-header">
                       <h5 class="modal-title">Pramètres de Connexion</h5>
                   </div><br>

                    <div class="row">

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="floating-label" for="Name">E-mail</label><br>
                                <input type="text" class="form-control" id="email" name="email" placeholder="E-mail" required>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group fill">
                                <label class="floating-label" for="Name">Mot de Passe</label><br>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Mot de Passe" required>
                            </div>
                        </div>

                        <div class="col-sm-4">
                           <div class="form-group fill">
                               <label class="floating-label" for="Name">Mot de Passe</label><br>
                               <input type="password" class="form-control" id="password" name="password" placeholder="Mot de Passe" required>
                           </div>
                       </div>

                    </div><br>
                    <button class="btn btn-primary">Modifier</button>
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
    // $('#report-table').DataTable();
     // DataTable end
 </script>
 <script>
    $('#editModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var user_id = button.data('user_id');
        var nomprenom = button.data('nomprenom');
        var datenaissance = button.data('datenaissance');
        var situationmatri = button.data('situationmatri');
        var lieuxnaissance = button.data('lieuxnaissance');
        var nbrenfant = button.data('nbrenfant');
        var Niveauetude = button.data('Niveauetude');
        var diplome = button.data('diplome');
        var direction_id = button.data('direction');
        var sousdirection_id = button.data('sousdirection');
        var service_id = button.data('service');
        var grade = button.data('grade');
        
        var datepriseservice = button.data('datepriseservice');
        var agenceregional_id = button.data('agenceregional');
        var poste = button.data('poste');
        var contact = button.data('contact');
        var email = button.data('email');
        var password = button.data('password');
        var modal = $(this);
        modal.find('.modal-body #user_id').val(user_id);
        modal.find('.modal-body #nomprenom').val(nomprenom);
        modal.find('.modal-body #datenaissance').val(datenaissance);
        modal.find('.modal-body #situationmatri').val(situationmatri);
        modal.find('.modal-body #lieuxnaissance').val(lieuxnaissance);
        modal.find('.modal-body #nbrenfant').val(nbrenfant);
        modal.find('.modal-body #Niveauetude').val(Niveauetude);
        modal.find('.modal-body #diplome').val(diplome);
        modal.find('.modal-body #direction').val(direction);
        modal.find('.modal-body #sousdirection').val(sousdirection);
        modal.find('.modal-body #service').val(service);
        modal.find('.modal-body #grade').val(grade);
        modal.find('.modal-body #datepriseservice').val(datepriseservice);
        modal.find('.modal-body #agenceregional').val(agenceregional);
        modal.find('.modal-body #poste').val(poste);
        modal.find('.modal-body #contact').val(contact);
        modal.find('.modal-body #email').val(email);
        modal.find('.modal-body #password').val(password);
        
    });

     $('#deleteModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var user_id = button.data('user_id');
        console.log(11);
        var modal = $(this);
        modal.find('.modal-body #user_id').val(user_id);
    });
</script>

 @endsection