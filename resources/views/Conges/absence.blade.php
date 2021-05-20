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
                <form method="POST" action="{{ route('demande.update',':id') }}">
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
                {{ Form::open(['route'=> ['demande.destroy',':id'], 'files'=>true , 'method' => 'POST']) }}
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
                {{ Form::close() }}
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
@endsection