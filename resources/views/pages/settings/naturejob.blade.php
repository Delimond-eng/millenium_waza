@extends("layouts.settings")

@section("settingPage")
<div id="App">

    <div class="card">
        <div class="card-body w-100">
            <div class="content-page-header p-0">
                <h5>Nature job (services)</h5>
                <div class="list-btn">
                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#naturejob_modal"><i class="fa fa-plus-circle me-2" aria-hidden="true"></i>Services</a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-table">
                        <div class="card-body">
                            <div class="table-responsive no-pagination">
                                <table class="table table-center table-hover datatable">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>#</th>
                                            <th>Nature job</th>
                                            <th>Description</th>

                                            <th class="no-sort">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="(f, index) in nature_jobs" :key="index">
                                            <td>@{{ index+1 }}</td>

                                            <td>@{{ f.libelle }}</td>
                                            <td>@{{ f.description }}</td>


                                            <td class="d-flex align-items-center">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class=" btn-action-icon " data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-edit me-2"></i>Edit</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="far fa-trash-alt me-2"></i>Delete</a>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal custom-modal fade" id="naturejob_modal" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <form  @submit.prevent="createNatureJob" method="POST" action="{{ route("nature_job.create") }}" class="modal-content">

                @csrf
                <div class="modal-header border-0 pb-0">
                    <div class="form-header modal-header-title text-start mb-0">
                        <h4 class="mb-0">Ajouter nature service</h4>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <div v-if="error" class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Erreur!</strong> @{{ error }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                    <div v-else-if="result" class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Succès!</strong> Opération effectué avec succès !
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="input-block mb-3">
                                <label>Libellé  <span class="text-danger">*</span></label>
                                <input type="text" name="libelle" class="form-control" placeholder="Entrer le libellé">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="input-block mb-3">
                                <label>Description  <span class="text-danger">*</span></label>
                                <textarea name="description" id="" class="form-control"></textarea>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" data-bs-dismiss="modal" class="btn btn-back cancel-btn me-2">Cancel</a>
                    <button :disabled="isLoading" type="submit" class="btn btn-primary paid-continue-btn"><span v-if="isLoading" class="spinner-border spinner-border-sm me-2"></span> Enregistrer</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section("scripts")
    <script src="{{ asset('assets/js/vuejs2.js') }}"></script>
    <script type="module" src="{{ asset('assets/js/app/settings.js') }}"></script>
@endsection

