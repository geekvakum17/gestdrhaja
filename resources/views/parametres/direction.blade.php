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
                            <h5 class="m-b-10">Direction</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Direction</a></li>
                            {{-- <li class="breadcrumb-item"><a href="#!">Department</a></li> --}}
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
                                <button class="btn btn-success btn-sm btn-round has-ripple" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i> Ajouter une Direction</button>
                            </div>
                        </div>
                        <div class="table-responsive">
                            
                                
                           
                            <table id="report-table" class="table table-bordered table-striped mb-0">
                                <thead>
                                    <tr>
                                        
                                        <th>Direction</th>
                                        <th width="50%">Description</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($direction as $item)
                                    <tr>
                                        <td>{{ $item->libelle }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>
                                            <a href="#!" class="btn btn-primary btn-sm"><i class="feather icon-plus"></i>Manage Facilities</a>
                                            <a href="#!" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
                                            <a href="#!" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
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
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ajouter Direction</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('direction.store') }}">
                    @csrf()
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="floating-label" for="Icon">Libelle</label>
                                <input type="text" class="form-control" id="libelle" name="libelle" placeholder="libelle">
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="floating-label" for="Icon">Description</label>
                                <input type="text" class="form-control" id="description" name="description" placeholder="Description">
                            </div>
                        </div>
                            
                        </div>
                        <button class="btn btn-primary">Ajouter</button>
                            <button class="btn btn-danger">Annuller</button>
                    </div>
                </form>
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
@endsection