@extends('layouts.main')
@section('content')
 <!-- partial -->
 <div class="main-panel">
    <div class="content-wrapper">
      <div class="row">

        <div class="col-md-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Default form</h4>
              <p class="card-description">
                Demande D'autorisation d'Absence
              </p>
              <form class="forms-sample" method="POST" action="{{ route('absence.store') }}">
                @csrf()
                <div class="form-group">
                  <label for="exampleInputUsername1">Nom et Prénom de l'Intérim</label>
                  <input type="text" class="form-control" id="nomiterim" name="nomiterim" placeholder="Username">
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Objet de l'Absence</label><br><br><br><br><br><br>

                <div class="form-check">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" id="objetabsence" name="objetabsence" value="Mariage" onclick="choice()" checked>
                      Mariage
                    </label>
                </div>&nbsp;&nbsp;

                <div class="form-check">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" id="objetabsence" name="objetabsence" value="Naissance" onclick="choice()">
                      Naissance
                    </label>
                </div>&nbsp;&nbsp;

                <div class="form-check">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" id="objetabsence" name="objetabsence" value="Décès" onclick="choice()">
                      Décès
                    </label>
                </div>&nbsp;&nbsp;

                <div class="form-check">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" id="objetabsence3" name="objetabsence" onclick="choice()">
                      Autres
                    </label>
                    <input type="text" class="form-control" id="objetabsence4" name="objetabsence" style="display: none;">
                </div>

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

                <div class="form-group">
                    <label for="exampleInputUsername1">DATE DE DEPART</label>
                    <input type="text" class="form-control" id="datedepart" name="datedepart" placeholder="">
                </div>

                <div class="form-group">
                    <label for="exampleInputUsername1">DATE DE RETOUR PREVUE</label>
                    <input type="text" class="form-control" id="dateretour" name="dateretour" placeholder="">
                </div>

                <div class="form-group">
                    <label for="exampleInputUsername1">Durée en Jours Ouvrables</label>
                    <input type="text" class="form-control" id="nbrejourouvrable" name="nbrejourouvrable" placeholder="">
                </div>
                <input type="hidden" class="form-control" id="statu" name="statu" value="3">

                <button type="submit" class="btn btn-success mr-2">Demandez</button>
                <button class="btn btn-danger">Annuller</button>
              </form>

            </div>
          </div>
        </div>

        <div class="col-md-6 grid-margin stretch-card">

        <div class="card">
             <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputUsername1"><strong>INFO UTILE</strong></label><br>
                    <p>Mariage du Travailleur...... <strong>4 jours ouvrables</strong> </p>
                    <p>Mariage d'un de ses enfants, d'un frère, de la mère du travailleur...<strong>2 jours ouvrables</strong></p>
                    <p>Décès du conjoint ...... <strong>5 jours ouvrables</strong></p>
                    <p>Décès d'un enfant, du père, de la mère du travilleur...... <strong>5 jours ouvrables</strong></p>
                    <p>Décès d'un frère ou d'une soeur...... <strong>2 jours ouvrables</strong></p>
                    <p>Décès d'un beau-père d'une belle-mère...... <strong>2 jours ouvrables</strong></p>
                    <p>Naissance d'un enfant...... <strong>2 jours ouvrables</strong> </p>
                    <p>Baptême d'un enfant...... <strong>1 jours ouvrables</strong></p>
                    <p>Prémière communion d'un enfant...... <strong>1 jours ouvrables</strong></p>
                    <p>Déménagement...... <strong>1 jours ouvrables</strong></p>
                    <p>Mariage du Travailleur...... <strong>4 jours ouvrables</strong></p>
                    <p>Mariage du Travailleur...... <strong>4 jours ouvrables</strong></p>
                </div>
             </div>
          </div>
       </div>

      </div>
    </div>
 </div>






@endsection
