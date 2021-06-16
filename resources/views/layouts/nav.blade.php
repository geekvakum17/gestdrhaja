
  <nav class="sidebar sidebar-offcanvas" id="sidebar">

    <ul class="nav">
      <li class="nav-item">
        <div class="sidebar-title"></div>
        <a class="nav-link" href="">
          <i class="mdi mdi-cards-variant menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
       @if (auth()->user()->hasRole('Admin'))
        <li class="nav-item">
            <div class="sidebar-title"></div>
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-account-circle-outline menu-icon"></i>
              <span class="menu-title">Utilisateur</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('user.index') }}">Ajout d'Utilisateurs</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced">
              <i class="mdi mdi-settings-outline menu-icon"></i>
              <span class="menu-title">Paramètres</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-advanced">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('direction.index') }}">Direction</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('sousdirection.index') }}">Sous-Direction</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('services.index') }}">Services</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('agenceregional.index') }}">Agence Régionale</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('guichet.index') }}">Guichet</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('poste.index') }}">Postes</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('grade.index') }}">Grade</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('statu.index') }}">Statu</a></li>
              </ul>
            </div>
          </li>

       @else
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="mdi mdi-view-grid menu-icon"></i>
              <span class="menu-title">Congé</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="{{ route('absence.index') }}">Autorisation d'Absence</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('listeabsence') }}">Liste des Demandes</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Demande de Congé</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="mdi mdi-file-word-box menu-icon"></i>
              <span class="menu-title">Documents</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="#">Demande</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">Liste des demandes</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="mdi mdi-message menu-icon"></i>
              <span class="menu-title">Messageries</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="#">Envoyé Un Message</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">Boîte de Recption</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">Message Envoyé</a></li>
              </ul>
            </div>
          </li>

     @endif
    </ul>

  </nav>
