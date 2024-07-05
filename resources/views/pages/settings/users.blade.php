
@extends("layouts.settings")

@section("settingPage")
    <div id="App">
        <div class="card">
            <div class="card-body w-100">
                <div class="content-page-header">
                    <h5 class="setting-menu">Parametres des utilisateurs</h5>
                </div>
                <form @submit.prevent="createUser" method="POST" action="{{ route("user.create") }}" class="row">
                    @csrf

                    <div v-if="error" class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Erreur!</strong> @{{ error }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                    <div v-else-if="result" class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Succès!</strong> Opération effectué avec succès !
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-title">
                            <h5>Informations générales</h5>
                        </div>
                    </div>
                    <div class="col-lg-12 col-12">
                        <div class="input-block mb-3">
                            <label>NOM D'UTILISATEUR <sup class="text-danger">*</sup></label>
                            <input type="text" name="name" class="form-control" placeholder="Entrer le nom complet d'utilisateur" required>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="input-block mb-3">
                            <label>Email <sup class="text-danger">*</sup></label>
                            <input name="email" type="email" class="form-control" placeholder="Enter Email Address" required>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="input-block mb-3">
                            <label>Telephone <sup class="text-danger">*</sup></label>
                            <input type="tel" name="phone" class="form-control" placeholder="Entrer le Mobile Number" required>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="input-block mb-3">
                            <label>Matricule <sup class="text-danger">*</sup></label>
                            <input name="matricule" type="text" class="datetimepicker form-control" placeholder="Entrer le numéro matricule" required>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="input-block mb-3">
                            <label>Roles <sup class="text-danger">*</sup></label>
                            <select name="role_id" class="form-select" required>
                                <option value="" hidden selected>Sélectionnez un rôle...</option>
                                <option v-for="(role, index) in roles" :value="role.id">@{{ role.libelle }}</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-title">
                            <h5>Authentication Informations</h5>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="input-block mb-3">
                            <label>Mot de passe <sup class="text-danger">*</sup></label>
                            <input type="password" name="password" class="form-control" placeholder="Entrer le mot de passe" required>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="input-block mb-3">
                            <label>Confirmation <sup class="text-danger">*</sup></label>
                            <input name="confirm" type="password" class="form-control" placeholder="Enter la confirmation du mot de passe" required>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="btn-path text-end">
                            <button type="reset" class="btn btn-cancel bg-primary-light me-3">Annuler</button>
                            <button type="submit" :disabled="isLoading" class="btn btn-primary"><span v-if="isLoading" class="spinner-border spinner-border-sm me-2"></span>Enregistrer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section("scripts")
    <script src="{{ asset('assets/js/vuejs2.js') }}"></script>
    <script type="module" src="{{ asset('assets/js/app/settings.js') }}"></script>
@endsection
