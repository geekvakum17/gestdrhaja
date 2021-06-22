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
                    </tr>
                  </thead>
                  <tbody>

                    @foreach($users as $item)
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
