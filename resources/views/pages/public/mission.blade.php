@extends("layouts.app")
@section("content")

    <div id="App">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="content-page-header">
                    <h5>Attribuer une mission à un collaborateur</h5>
                    <div class="list-btn">
                        <ul class="filter-list">
                            <li>
                                <a class="btn btn-filters w-auto popup-toggle" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="Filter"><span class="me-2"><img src="assets/img/icons/filter-icon.svg" alt="filter"></span>Filter </a>
                            </li>
                            <li>
                                <a class="btn-filters" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="Settings"><span><i class="fe fe-settings"></i></span> </a>
                            </li>
                            <li>
                                <a class="btn btn-primary" href="#"><i class="fa fa-plus-circle me-2" aria-hidden="true"></i>Ajouter collaborateur</a>
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
                                <table class="table table-stripped table-hover datatable">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>#</th>
                                            <th>Noms</th>
                                            <th>Matricule</th>
                                            <th>Rôle</th>
                                            <th>Téléphone</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th class="no-sort">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="(cl, i) in collaborateurs">
                                            <td>@{{ i+1 }}</td>

                                            <td>
                                                @{{ cl.name }}
                                            </td>
                                            <td>
                                                @{{ cl.matricule }}
                                            </td>


                                            <td><span v-if="cl.role">@{{ cl.role.libelle }}</span></td>
                                            <td>@{{ cl.phone }}</td>
                                            <td>@{{ cl.email }}</td>
                                            <td>
                                                <span class="badge bg-warning-light text-warning-light" v-if='cl.missions.length > 0'>En mission</span>
                                                <span v-else class="badge bg-success-light text-success-light">Disponible</span>
                                            </td>
                                            <td> <a class="btn btn-success " @click="form_mission.collaborateur_id=cl.id; events=cl.missions" data-bs-toggle="modal" data-bs-target="#mission_modal" style="color: white;" href="#"><i class="fa fa-share me-2" aria-hidden="true"></i>Attribuer Mission</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="toggle-sidebar">
            <div class="sidebar-layout-filter">
                <div class="sidebar-header">
                    <h5>Filter</h5>
                    <a href="#" class="sidebar-closes"><i class="fa-regular fa-circle-xmark"></i></a>
                </div>
                <div class="sidebar-body">
                    <form action="#" autocomplete="off">
                        <div class="accordion" id="accordionMain1">
                            <div class="card-header-new" id="headingOne">
                                <h6 class="filter-title">
                                    <a href="javascript:void(0);" class="w-100" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Filtrer
                                    <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                    </a>
                                </h6>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample1">
                                <div class="card-body-chat">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="checkBoxes1">
                                                <div class="form-custom">
                                                    <input type="text" class="form-control" id="member_search1" placeholder="Faites une recherche rapide">
                                                    <span><img src="assets/img/icons/search.svg" alt="img"></span>
                                                </div>
                                                <div class="selectBox-cont">
                                                    <label class="custom_check w-100">
                                                    <input type="checkbox" name="username">
                                                    <span class="checkmark"></span> Import
                                                    </label>
                                                    <label class="custom_check w-100">
                                                    <input type="checkbox" name="username">
                                                    <span class="checkmark"></span> Export
                                                    </label>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="filter-buttons">
                            <button type="submit" class="d-inline-flex align-items-center justify-content-center btn w-100 btn-primary">
                            Appiquer
                            </button>
                            <button type="submit" class="d-inline-flex align-items-center justify-content-center btn w-100 btn-secondary">
                            Annuler
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal custom-modal fade" id="mission_modal" role="dialog">
            <div class="modal-dialog modal-dialog-centered" :class="initialStep==2 ? 'modal-lg': 'modal-md'">
                <form @submit.prevent="submitData" method="POST" action="{{ route("mission.create") }}" class="modal-content">
                    @csrf
                    <div class="modal-header border-0 pb-0">
                        <div class="form-header modal-header-title text-start mb-0">
                            <h4 class="mb-0">@{{ initialStep }}/@{{ steps }} @{{ stepInfo }}</h4>
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
                        <div v-show="initialStep==1" class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="input-block mb-3">
                                    <label>Date début</label>
                                    <div class="cal-icon cal-icon-info">
                                        <input type="date" v-model="form_mission.date_debut" class="form-control" placeholder="Select Date debut">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="input-block mb-3">
                                    <label>Date fin</label>
                                    <div class="cal-icon cal-icon-info">
                                        <input type="date" v-model="form_mission.date_fin" class="form-control" placeholder="Select Date fin">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div v-if="initialStep==2" class="card bg-white">
                            <div class="card-body">
                                <div id="calendar"></div>
                            </div>
                        </div>

                        <div v-show="initialStep==3" class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="input-block mb-3">
                                    <label>Libellé de la mission <span class="text-danger">*</span></label>
                                    <textarea v-model="form_mission.libelle" class="form-control" placeholder="Entrer le libellé de la mission" required></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="input-block mb-3">
                                    <label>Job <span class="text-danger">*</span></label>
                                    <select @change="onChangeJob" class="form-select" v-model="form_mission.job_id" required>
                                        <option value="" hidden selected>Sélectionnez un job...</option>
                                        <option v-for="(data, index) in jobs" :value="data.id">@{{ data.libelle }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 border-1 border-dark-subtle" v-if="phases.length > 0">
                                <p class="fw-medium">PHASES</p>
                                <div class="row">
                                    <div class="col-lg-4 col-sm-6 col-6" v-for="(data, index) in phases" :key="index">
                                        <div class="checkboxes">
                                            <label>
                                                <input type="checkbox" name="checkbox" checked="" disabled> @{{ data.libelle }}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="input-block mb-3">
                                    <label>Manager <span class="text-danger">*</span></label>
                                    <select class="form-select" v-model="form_mission.manager_id" required>
                                        <option value="" hidden selected>Sélectionnez un manager...</option>
                                        <option v-for="(data, index) in managers" :value="data.id" v-show="form_mission.collaborateur_id !== data.id">@{{ data.matricule }} @{{ data.name }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="input-block mb-3">
                                    <label>Client <span class="text-danger">(optionnel)</span></label>
                                    <select class="form-select" v-model="form_mission.client_id">
                                        <option value="" hidden selected>Sélectionnez un client...</option>
                                        <option v-for="(data, index) in clients" :value="data.id">@{{ data.nom }}</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" @click="goToPrev" v-if="initialStep > 1" class="btn btn-back cancel-btn me-2">Précedent</button>
                        <button type="button"  @click="goToNext" v-if="initialStep < 3"  class="btn btn-primary paid-continue-btn">Suivant <i class="fa fa-angle-double-right me-2" aria-hidden="true"></i></button>
                        <button :disabled="isLoading" type="submit" v-else  class="btn btn-success"> <span v-if="isLoading" class="spinner-border spinner-border-sm me-2"></span> <i v-else class="fa fa-check-double me-2"></i> Sauvegarder</button>
                    </div>
                </form>
            </div>
        </div>


        <div class="modal custom-modal fade" id="step2_modal" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header border-0 pb-0">
                        <div class="form-header modal-header-title text-start mb-0">
                            <h4 class="mb-0">2/3 Disponibilité du collaborateur</h4>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">


                            <div class="card bg-white">
                                <div class="card-body">
                                    <div id="calendar"></div>
                                </div>
                            </div>



                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="#" data-bs-dismiss="modal" class="btn btn-back cancel-btn me-2">Cancel</a>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#step2_modal" class="btn btn-primary paid-continue-btn">Suivant <i class="fa fa-angle-double-right me-2" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection



@section('scripts')

<script src="{{ asset('assets/js/vuejs2.js') }}"></script>
<script src="{{ asset('assets/js/jquery-ui.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/fullcalendar/local.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/fullcalendar/fullcalendar.min.js') }}" type="text/javascript"></script>
<script type="module" src="{{ asset('assets/js/app/public.js') }}"></script>

@endsection

