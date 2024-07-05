@extends("layouts.settings")

@section("settingPage")
<div id="App">

    <div class="card">
        <div class="card-body w-100">

            <div class="content container-fluid">

                <div class="page-header">
                    <div class="content-page-header ">
                        <h5>Roles & Permission</h5>
                        <div class="list-btn">
                            <ul class="filter-list">
                                <li>
                                    <a class="btn btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#add_role"><i class="fa fa-plus-circle me-2" aria-hidden="true"></i>+ Roles</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-table">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-center table-hover datatable">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>#</th>
                                                <th>Libellé role</th>
                                                <th Class="no-sort">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr v-for="(role, index) in roles" :key="index">
                                                <td>@{{ index+1 }}</td>
                                                <td>@{{ role.libelle }}</td>
                                                <td class="d-flex align-items-center">
                                                    <a href="#" class="btn btn-greys me-2" data-bs-toggle="modal" data-bs-target="#edit_role"><i class="fa fa-edit me-1"></i> Edit Role</a>
                                                    <a href="permission-settings.html" class="btn btn-greys me-2"><i class="fa fa-shield me-1"></i> Permissions</a>
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
    </div>

    <div class="modal custom-modal fade" id="delete_modal" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete Account Details</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <button type="reset" data-bs-dismiss="modal" class="w-100 btn btn-primary paid-continue-btn">Delete</button>
                            </div>
                            <div class="col-6">
                                <button type="submit" data-bs-dismiss="modal" class="w-100 btn btn-primary paid-cancel-btn">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="modal custom-modal fade" id="add_role" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header border-0 pb-0">
                    <div class="form-header modal-header-title text-start mb-0">
                        <h4 class="mb-0">Ajouter un role</h4>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <form @submit.prevent="createRole" method="POST" action="{{ route('role.create') }}">
                    @csrf
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
                                <div class="input-block mb-0">
                                    <label>Nom du role <span class="text-danger">*</span></label>
                                    <input type="text" name="libelle" class="form-control" placeholder="Entrer le libellé du rôle...">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" data-bs-dismiss="modal" class="btn btn-back cancel-btn me-2">Annuler</button>
                        <button type="submit" :disabled="isLoading" class="btn btn-primary paid-continue-btn"><span v-if="isLoading" class="spinner-border spinner-border-sm me-2"></span> Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="modal custom-modal fade" id="edit_role" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header border-0 pb-0">
                    <div class="form-header modal-header-title text-start mb-0">
                        <h4 class="mb-0">Edit Role</h4>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <form action="#">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="input-block mb-0">
                                    <label>Role Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" Value="Admin" placeholder="Enter Role Name">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-bs-dismiss="modal" class="btn btn-back cancel-btn me-2">Close</button>
                        <button type="submit" data-bs-dismiss="modal" class="btn btn-primary paid-continue-btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection

@section("scripts")
    <script src="{{ asset('assets/js/vuejs2.js') }}"></script>
    <script type="module" src="{{ asset('assets/js/app/settings.js') }}"></script>
@endsection

