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
                            <h5 class="m-b-10">Sous-Direction</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Sous-Direction</a></li>
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
                                <button class="btn btn-success btn-sm btn-round has-ripple" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i> Ajouter une Sous-Direction</button>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="report-table" class="table table-bordered table-striped mb-0">

                                <thead>
                                    <tr>
                                        <th>Sous-Direction</th>
                                        <th>Lieux</th>
                                        <th width="50%">Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($sousdirection as $item)
                                    <tr>
                                        <td>
                                            {{ $item->libelle }}
                                        </td>
                                        <td>{{ $item->lieudirection }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>
                                            <!-- <a href="#!" class="btn btn-primary btn-sm"><i class="feather icon-plus"></i>Manage Facilities</a> -->
                                            <a href="#!" data-sousdirection_id="{{ $item->id }}" data-libelle="{{ $item->libelle }}" data-lieudirection="{{ $item->lieudirection }}" data-description="{{ $item->description }}" data-toggle="modal" data-target="#editModal" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Modification </a>
                                            <a href="#!" data-sousdirection_id="{{ $item->id }}" data-toggle="modal" data-target="#deleteModal" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Suppression </a>
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
                <h5 class="modal-title">Ajoute une Sous-Direction</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('sousdirection.store') }}">
                    @csrf()
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="Name">libelle</label>
                                <input type="text" class="form-control" id="libelle" name="libelle" placeholder="libelle">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group fill">
                                <label class="floating-label" for="Icon"></label>
                                <input type="text" class="form-control" id="lieudirection" name="lieudirection" placeholder="lieudirection">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="floating-label" for="Description">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                            </div>
                            <button class="btn btn-primary">Ajouter</button>
                            <button class="btn btn-danger">Annuller</button>
                        </div>
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
                <h5 class="modal-title">Modifier Sous-Direction</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('sousdirection.update',':id') }}">
                    @method('put')
                    @csrf()
                    <div class="row">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="floating-label" for="Name">libelle</label>
                                    <input type="text" class="form-control" id="libelle" name="libelle" placeholder="libelle">
                                </div>
                            </div>
                            <input type="hidden" name="sousdirection_id" id="sousdirection_id">
                            <div class="col-sm-6">
                                <div class="form-group fill">
                                    <label class="floating-label" for="Icon"></label>
                                    <input type="text" class="form-control" id="lieudirection" name="lieudirection" placeholder="lieudirection">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="floating-label" for="Description">Description</label>
                                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                                </div>

                            </div>
                        </div>


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
                <h4 class="modal-title text-white" id="myModalLabel16">Supprimer Sous-Direction</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                {{ Form::open(['route'=> ['sousdirection.destroy',':id'], 'files'=>true , 'method' => 'POST']) }}
                @method('delete')
                @csrf
                <div class="modal-body">
                    <p class="text-center">
                        Êtes-vous sûr de vouloir le supprimer ?
                    </p>
                    <input type="hidden" name="sousdirection_id" id="sousdirection_id">
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
        var sousdirection_id = button.data('sousdirection_id');
        var libelle = button.data('libelle');
        var lieudirection = button.data('lieudirection');
        var description = button.data('description');
        var modal = $(this);
        modal.find('.modal-body #sousdirection_id').val(sousdirection_id);
        modal.find('.modal-body #libelle').val(libelle);
        modal.find('.modal-body #lieudirection').val(lieudirection);
        modal.find('.modal-body #description').val(description);
    });

    $('#deleteModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget);
        var sousdirection_id = button.data('sousdirection_id');
        console.log(11);
        var modal = $(this);
        modal.find('.modal-body #sousdirection_id').val(sousdirection_id);
    });
</script>
@endsection