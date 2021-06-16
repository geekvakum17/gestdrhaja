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
              <h3 class="card-title">LISTE DES DEMANDES D'AUTORISATION D'ABSENCE</h3>
              <div class="text-center">
              </div>
              <div class="table-responsive pt-3">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>
                        NOM ET PRENOMS DE L'INTERIM
                      </th>
                      <th>
                        OBJET DE L'ABSENCE
                      </th>
                      <th>
                        DATE DE DEPART
                      </th>
                      <th>
                        DATE DE RETOUR PREVUE
                      </th>
                      <th>
                        DUREE EN JOURS OUVRABLES
                      </th>
                      <th>
                        STATU DE LA DEMANDE
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                     @foreach($absence as $item)
                    <tr>
                      <td>
                        {{ $item->nomiterim }}
                      </td>
                      <td>
                        {{$item->objetabsence }}
                      </td>
                      <td>
                        {{ $item->datedepart }}
                      </td>
                      <td>
                        {{ $item->dateretour}}
                      </td>
                      <td>
                        {{ $item->nbrejourouvrable}}
                      </td>
                      <td>
                          @if($item->statu == 3)
                             {{ __('En traitement')}}
                          @elseif ($item->statu == 2)
                            {{ __('Accordé')}}
                          @elseif ($item->statu == 1)
                            {{ __('Non Accordé')}}
                          @endif
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

    </div>
    <!-- partial -->
  </div>

    @endsection
    @section('js')
    @endsection
