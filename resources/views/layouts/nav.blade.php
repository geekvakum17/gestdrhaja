<!-- [ navigation menu ] start -->
<nav class="pcoded-navbar menu-light ">
    <div class="navbar-wrapper">
        <div class="navbar-content scroll-div ">
            <div class="">
                <div class="main-menu-header">
                    <img class="img-radius" src="assets/images/user/avatar-2.jpg" alt="User-Profile-Image">
                    <div class="user-details">
                        <div id="more-details"><i class="fa fa-caret-down"></i></div>
                    </div>
                </div><br><br><br>
                <div class="collapse" id="nav-user-link">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="user-profile.html" data-toggle="tooltip" title="View Profile"><i class="feather icon-user"></i></a></li>
                        <li class="list-inline-item"><a href="email_inbox.html"><i class="feather icon-mail" data-toggle="tooltip" title="Messages"></i><small class="badge badge-pill badge-primary">5</small></a></li>
                        <li class="list-inline-item">
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" data-toggle="tooltip" title="Logout" class="text-danger"><i class="feather icon-power"></i></a>

                            {{--<a href="auth-signin.html" class="dropdown-item"><i class="feather icon-lock"></i> Déconnexion</a>--}}
                            {{-- <a class="dropdown-item" href="{{ route('logout') }}" >
                            <i class="feather icon-lock"></i>{{ __('Déconnexion') }}
                            </a> --}}
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                        </li>
                    </ul>
                </div>
            </div>

            <ul class="nav pcoded-inner-navbar ">



                @hasrole('Admin')
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-users"></i></span><span class="pcoded-mtext">Utilisateur</span></a>
                    <ul class="pcoded-submenu">
                        <!-- <li><a href="user-profile.html">Profile</a></li> -->
                        <!-- <li><a href="user-card.html">User Card</a></li> -->
                        <li><a href="{{ route('user.index') }}">Liste de Utilisateurs</a></li>
                        <li><a href="{{ route('poste.index') }}">Poste</a></li>
                    </ul>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-crop"></i></span><span class="pcoded-mtext">Paramètres</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="{{ route('direction.index') }}">Direction</a></li>
                        <li><a href="{{ route('sousdirection.index') }}">Sous - Direction</a></li>
                        <li><a href="{{ route('services.index') }}">Services</a></li>
                        <li><a href="{{ route('agenceregional.index') }}">Agence Régionale</a></li>
                        <li><a href="{{ route('grade.index') }}">Grade</a></li>
                        <li><a href="{{ route('statu.index') }}">Statu</a></li>
                    </ul>
                </li>
                @else

                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-award"></i></span><span class="pcoded-mtext">Congé</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="{{ route('absence.index') }}">Demande d'autorisation d'Absence</a></li>
                        <li><a href="{{ route('demande.index') }}">Demandez un Congé</a></li>
                        <li><a href="">Liste de mes demandes</a></li>
                    </ul>
                </li>

                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-folder"></i></span><span class="pcoded-mtext">Document Administratif</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="">Demandez un Document</a></li>
                        <li><a href="">Liste de mes demandes</a></li>
                    </ul>
                </li>

                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-mail"></i></span><span class="pcoded-mtext">Messageries</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="">Envoyé Un Message</a></li>
                        <li><a href="">Boîte de Recption</a></li>
                        <li><a href="">Message Envoyé</a></li>
                    </ul>
                </li>
                @endhasrole
            </ul>
        </div>
    </div>
</nav>
<!-- [ navigation menu ] end -->