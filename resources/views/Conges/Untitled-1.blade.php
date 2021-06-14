<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">CONGES </h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">CONGES</a></li>
                            <!-- <li class="breadcrumb-item"><a href="#!">Department</a></li> -->
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
                        @include('inc.flash')
                        <div class="row align-items-center m-l-0">
                            <div class="col-sm-6">

                            </div>
                            <div class="col-sm-6 text-right">
                                <button class="btn btn-success btn-sm btn-round has-ripple" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i> Demander un Congé</button>
                            </div>
                            <br>
                        </div>
                        <div class="table-responsive">
                            <table id="report-table" class="table table-bordered table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>NOM ET PRENOM DE L'INTERIM</th>

                                        <th>OBJET D'ABSENCE</th>
                                        <th>DATE DE DEPART</th>
                                        <th>DATE DE RETOUR PREVUE</th>
                                        <th>DUREE(JOUR OUVRABLE)</th>
                                        <th>STATU DE LA DEMANDE</th>
                                        <th width="30%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($absence as $item)
                                    <tr>
                                        <td>
                                            {{ $item->nomiterim }}
                                        </td>

                                        <td>
                                            {{ $item->objetabsence }}
                                        </td>
                                        <td>
                                            {{ $item->datedepart }}
                                        </td>
                                        <td>
                                            {{ $item->dateretour }}
                                        </td>
                                        <td>
                                            {{ $item->nbrejourouvrable }}
                                        </td>
                                        <td>
                                            {{ $item->statu}}
                                        </td>
                                        <td>
                                            <a href="#!" data-absence_id="{{ $item->absence_id }}" data-fonctionIterim="{{ $item->nomiterim }}" data-datedebut="{{ $item->objetabsence }}" data-datefin="{{ $item->datedepart }}" data-dureeconge="{{ $item->dateretour }}" data-datereprise="{{ $item->nbrejourouvrable }}" data-toggle="modal" data-target="#editModal" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Modification </a>
                                            <a href="#!" data-absence_id="{{ $item->absence_id }}" data-toggle="modal" data-target="#deleteModal" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Suppression </a>
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
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Demander une Autorisation D'Absence</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('absence.store') }}">
                    @csrf()
                    <div class="row">

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="floating-label" for="Name">Nom et Prénom de l'Intérim</label><br>
                                <input type="text" class="form-control" id="nomiterim" name="nomiterim" placeholder="">
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="floating-label" for="Name">Objet de l'Absence</label><br><br>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="objetabsence" name="objetabsence" value="Mariage" onclick="choice()" checked>
                                    <label class="form-check-label" for="gridRadios1">Mariage</label>
                                </div><br>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="objetabsence" name="objetabsence" value="Naissance" onclick="choice()">
                                    <label class="form-check-label" for="gridRadios2">Naissance</label>
                                </div><br>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="objetabsence" name="objetabsence" value="Décès" onclick="choice()">
                                    <label class="form-check-label" for="gridRadios2">Décès</label>
                                </div><br>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="objetabsence3" name="objetabsence" onclick="choice()">
                                    <label class="form-check-label" for="gridRadios2">Autres</label>
                                    <input type="text" class="form-control" id="objetabsence4" name="objetabsence" style="display: none;">
                                </div>

                                <script>
                                    function choice() {

                                        if ($('input[type=radio][id=objetabsence3]').is(':checked')) {
                                            $('#objetabsence4').css("display", "block");
                                        } else if ($('input[type=radio][id=objetabsence]').is(':checked')) {
                                            $('#objetabsence4').css("display", "none");
                                        }
                                    }
                                </script>

                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group fill">
                                <label class="floating-label" for="Name">DATE DE DEPART</label><br>
                                <input type="date" class="form-control" id="datedepart" name="datedepart" placeholder="">
                            </div>
                        </div>
                    </div><br>

                    <div class="row">

                        <div class="col-sm-4">
                            <div class="form-group fill">
                                <label class="floating-label" for="Name">DATE DE RETOUR PREVUE</label><br>
                                <input type="date" class="form-control" id="dateretour" name="dateretour" placeholder="">
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group fill">
                                <label class="floating-label" for="Name">Durée en Jours Ouvrables</label><br>
                                <input type="text" class="form-control" id="nbrejourouvrable" name="nbrejourouvrable"  placeholder="">
                            </div>
                        </div>




                        <input type="hidden" class="form-control" id="statu" name="statu" value="3">

                    </div><br>

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group fill">
                                <label class="floating-label" for="Name"><strong>INFO UTILE</strong></label><br>
                                <p>Mariage du Travailleur...... <strong>4 jours ouvrables</strong> </p>
                                <p>Mariage d'un de ses enfants, d'un frère, de la mère du travailleur...<strong>2 jours ouvrables</strong></p>
                                <p>Décès du conjoint ...... <strong>5 jours ouvrables</strong></p>
                                <p>Décès d'un enfant, du père, de la mère du travilleur...... <strong>5 jours ouvrables</strong></p>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group fill">
                                <label class="floating-label" for="Name"><strong>INFO UTILE</strong></label><br>
                                <p>Décès d'un frère ou d'une soeur...... <strong>2 jours ouvrables</strong></p>
                                <p>Décès d'un beau-père d'une belle-mère...... <strong>2 jours ouvrables</strong></p>
                                <p>Naissance d'un enfant...... <strong>2 jours ouvrables</strong> </p>
                                <p>Baptême d'un enfant...... <strong>1 jours ouvrables</strong></p>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group fill">
                                <label class="floating-label" for="Name"><strong>INFO UTILE</strong></label><br>
                                <p>Prémière communion d'un enfant...... <strong>1 jours ouvrables</strong></p>
                                <p>Déménagement...... <strong>1 jours ouvrables</strong></p>
                                <p>Mariage du Travailleur...... <strong>4 jours ouvrables</strong></p>
                                <p>Mariage du Travailleur...... <strong>4 jours ouvrables</strong></p>
                            </div>
                        </div>
                    </div><br><br>

                    <button class="btn btn-primary">Demander</button>
                    <button class="btn btn-danger">Annuller</button>
            </div>
            </form>
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modifier Congé</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{-- <form method="POST" action="{{ route('demande.update',':id') }}"> --}}
                    @method('put')
                    @csrf()
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="floating-label" for="Name">Fonction de l'Itérim</label><br>
                                <input type="text" class="form-control" id="fonctionIterim" name="fonctionIterim" placeholder="">
                                <input type="date" class="form-control" id="datedebut" name="datedebut" placeholder="">
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group fill">
                                <label class="floating-label" for="Name">Date de Début</label><br>
                                <input type="date" class="form-control" id="datedebut" name="datedebut" placeholder="">
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group fill">
                                <label class="floating-label" for="Name">Date de Fin</label><br>
                                <input type="date" class="form-control" id="datefin" name="datefin" placeholder="">
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-sm-4">
                            <div class="form-group fill">
                                <label class="floating-label" for="Name">Durée du Congé</label><br>
                                <input type="text" class="form-control" id="dureeconge" name="dureeconge" placeholder="">
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group fill">
                                <label class="floating-label" for="Name">Date de Reprise</label><br>
                                <input type="date" class="form-control" id="datereprise" name="datereprise" placeholder="">
                            </div>
                        </div>
                        <input type="hidden" class="form-control" id="demande_id" name="demande_id">


                    </div>
                    <button class="btn btn-primary">Modifier</button>
                    <button class="btn btn-danger">Annuller</button>
            </div>
            </form>
        </div>
    </div>
</div>

<div class="modal modal-danger fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h4 class="modal-title text-white" id="myModalLabel16">Supprimer Poste</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                {{-- {{ Form::open(['route'=> ['demande.destroy',':id'], 'files'=>true , 'method' => 'POST']) }} --}}
                @method('delete')
                @csrf
                <div class="modal-body">
                    <p class="text-center">
                        Êtes-vous sûr de vouloir le supprimer ?
                    </p>
                    <input type="hidden" class="form-control" id="demande_id" name="demande_id">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Non, Annuler
                    </button>
                    <button type="submit" class="btn btn-warning">Oui, Supprimer</button>
                </div>
                {{-- {{ Form::close() }} --}}
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
    // DataTable start
    $('#report-table').DataTable();
    // DataTable end
</script>
<script>
    $('#editModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget);
        var demande_id = button.data('demande_id');
        var fonctionIterim = button.data('fonctionIterim');
        var datedebut = button.data('datedebut');
        var datefin = button.data('datefin');
        var dureeconge = button.data('dureeconge');
        var datereprise = button.data('datereprise');
        var modal = $(this);
        modal.find('.modal-body #demande_id').val(demande_id);
        modal.find('.modal-body #fonctionIterim').val(fonctionIterim);
        modal.find('.modal-body #datedebut').val(datedebut);
        modal.find('.modal-body #datefin').val(datefin);
        modal.find('.modal-body #dureeconge').val(dureeconge);
        modal.find('.modal-body #datereprise').val(datereprise);
    });

    $('#deleteModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget);
        var id = button.data('id');
        console.log(id);
        var modal = $(this);
        modal.find('.modal-body #id').val(id);
    });
</script>



<div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Input size</h4>
        <p class="card-description">
          Add classes like <code>.form-control-lg</code> and <code>.form-control-sm</code>.
        </p>
        <div class="form-group">
          <label>Large input</label>
          <input type="text" class="form-control form-control-lg" placeholder="Username" aria-label="Username">
        </div>
        <div class="form-group">
          <label>Default input</label>
          <input type="text" class="form-control" placeholder="Username" aria-label="Username">
        </div>
        <div class="form-group">
          <label>Small input</label>
          <input type="text" class="form-control form-control-sm" placeholder="Username" aria-label="Username">
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Select size</h4>
        <p class="card-description">
          Add classes like <code>.form-control-lg</code> and <code>.form-control-sm</code>.
        </p>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Large select</label>
          <select class="form-control form-control-lg" id="exampleFormControlSelect1">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect2">Default select</label>
          <select class="form-control" id="exampleFormControlSelect2">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect3">Small select</label>
          <select class="form-control form-control-sm" id="exampleFormControlSelect3">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Basic input groups</h4>
        <p class="card-description">
          Basic bootstrap input groups
        </p>
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">@</span>
            </div>
            <input type="text" class="form-control" placeholder="Username" aria-label="Username">
          </div>
        </div>
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text bg-primary text-white">$</span>
            </div>
            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
            <div class="input-group-append">
              <span class="input-group-text">.00</span>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">$</span>
            </div>
            <div class="input-group-prepend">
              <span class="input-group-text">0.00</span>
            </div>
            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
          </div>
        </div>
        <div class="form-group">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username">
            <div class="input-group-append">
              <button class="btn btn-sm btn-primary" type="button">Search</button>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-prepend">
              <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div role="separator" class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
              </div>
            </div>
            <input type="text" class="form-control" aria-label="Text input with dropdown button">
          </div>
        </div>
        <div class="form-group">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Find in facebook" aria-label="Recipient's username">
            <div class="input-group-append">
              <button class="btn btn-sm btn-facebook" type="button">
                <i class="mdi mdi-facebook"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Checkbox Controls</h4>
        <p class="card-description">Checkbox and radio controls (default appearance is in primary color)</p>
        <form>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input">
                    Default
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" checked>
                    Checked
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" disabled>
                    Disabled
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" disabled checked>
                    Disabled checked
                  </label>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="">
                    Default
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2" checked>
                    Selected
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="optionsRadios2" id="optionsRadios3" value="option3" disabled>
                    Disabled
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="optionsRadio2" id="optionsRadios4" value="option4" disabled checked>
                    Selected and disabled
                  </label>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="card-body">
        <p class="card-description">Add class <code>.form-check-{color}</code> for checkbox and radio controls in theme colors</p>
        <form>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <div class="form-check form-check-primary">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" checked>
                    Primary
                  </label>
                </div>
                <div class="form-check form-check-success">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" checked>
                    Success
                  </label>
                </div>
                <div class="form-check form-check-info">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" checked>
                    Info
                  </label>
                </div>
                <div class="form-check form-check-danger">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" checked>
                    Danger
                  </label>
                </div>
                <div class="form-check form-check-warning">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" checked>
                    Warning
                  </label>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <div class="form-check form-check-primary">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="ExampleRadio1" id="ExampleRadio1" checked>
                    Primary
                  </label>
                </div>
                <div class="form-check form-check-success">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="ExampleRadio2" id="ExampleRadio2" checked>
                    Success
                  </label>
                </div>
                <div class="form-check form-check-info">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="ExampleRadio3" id="ExampleRadio3" checked>
                    Info
                  </label>
                </div>
                <div class="form-check form-check-danger">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="ExampleRadio4" id="ExampleRadio4" checked>
                    Danger
                  </label>
                </div>
                <div class="form-check form-check-warning">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="ExampleRadio5" id="ExampleRadio5" checked>
                    Warning
                  </label>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Toggle Switch</h4>
        <p class="card-description">Add class <code>.toggle-switch-{color}</code> for toggle switch controls in theme colors</p>
        <div class="form-group row">
          <div class="col">
            <p class="mb-2">Primary</p>
            <label class="toggle-switch">
              <input type="checkbox" checked>
              <span class="toggle-slider round"></span>
            </label>
          </div>
          <div class="col">
              <p class="mb-2">Success</p>
            <label class="toggle-switch toggle-switch-success">
              <input type="checkbox" checked>
              <span class="toggle-slider round"></span>
            </label>
          </div>
          <div class="col">
              <p class="mb-2">Danger</p>
            <label class="toggle-switch toggle-switch-danger">
              <input type="checkbox" checked>
              <span class="toggle-slider round"></span>
            </label>
          </div>
          <div class="col">
              <p class="mb-2">Info</p>
            <label class="toggle-switch toggle-switch-info">
              <input type="checkbox" checked>
              <span class="toggle-slider round"></span>
            </label>
          </div>
          <div class="col">
              <p class="mb-2">Warning</p>
            <label class="toggle-switch toggle-switch-warning">
              <input type="checkbox" checked>
              <span class="toggle-slider round"></span>
            </label>
          </div>
          <div class="col">
              <p class="mb-2">Dark</p>
            <label class="toggle-switch toggle-switch-dark">
              <input type="checkbox" checked>
              <span class="toggle-slider round"></span>
            </label>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Inline forms</h4>
        <p class="card-description">
          Use the <code>.form-inline</code> class to display a series of labels, form controls, and buttons on a single horizontal row
        </p>
        <form class="form-inline">
          <label class="sr-only" for="inlineFormInputName2">Name</label>
          <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Jane Doe">

          <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
          <div class="input-group mb-2 mr-sm-2">
            <div class="input-group-prepend">
              <div class="input-group-text">@</div>
            </div>
            <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Username">
          </div>
          <div class="form-check mx-sm-2">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" checked>
              Remember me
            </label>
          </div>
          <button type="submit" class="btn btn-primary mb-2">Submit</button>
        </form>
      </div>
    </div>
  </div>
  <div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Horizontal Two column</h4>
        <form class="form-sample">
          <p class="card-description">
            Personal info
          </p>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">First Name</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" />
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Last Name</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" />
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Gender</label>
                <div class="col-sm-9">
                  <select class="form-control">
                    <option>Male</option>
                    <option>Female</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Date of Birth</label>
                <div class="col-sm-9">
                  <input class="form-control" placeholder="dd/mm/yyyy"/>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Category</label>
                <div class="col-sm-9">
                  <select class="form-control">
                    <option>Category1</option>
                    <option>Category2</option>
                    <option>Category3</option>
                    <option>Category4</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Membership</label>
                <div class="col-sm-4">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked>
                      Free
                    </label>
                  </div>
                </div>
                <div class="col-sm-5">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios2" value="option2">
                      Professional
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <p class="card-description">
            Address
          </p>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Address 1</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" />
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">State</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" />
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Address 2</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" />
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Postcode</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" />
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">City</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" />
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Country</label>
                <div class="col-sm-9">
                  <select class="form-control">
                    <option>America</option>
                    <option>Italy</option>
                    <option>Russia</option>
                    <option>Britain</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Select 2</h4>
        <div class="form-group">
          <label>Single select box using select 2</label>
          <select class="js-example-basic-single w-100">
            <option value="AL">Alabama</option>
            <option value="WY">Wyoming</option>
            <option value="AM">America</option>
            <option value="CA">Canada</option>
            <option value="RU">Russia</option>
          </select>
        </div>
        <div class="form-group">
          <label>Multiple select using select 2</label>
          <select class="js-example-basic-multiple w-100" multiple="multiple">
            <option value="AL">Alabama</option>
            <option value="WY">Wyoming</option>
            <option value="AM">America</option>
            <option value="CA">Canada</option>
            <option value="RU">Russia</option>
          </select>
        </div>
      </div>
    </div>
  </div>

</div>
</div>
<!-- content-wrapper ends -->
