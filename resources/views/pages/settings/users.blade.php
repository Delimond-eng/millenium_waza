
@extends("layouts.settings")

@section("settingPage")
    <div id="App">
        <div class="card">
            <div class="card-body w-100">
                <div class="content-page-header">
                    <h5 class="setting-menu">Parametres des utilisateurs</h5>
                </div>
                <div class="row">

                    <div class="col-lg-12">
                        <div class="form-title">
                            <h5>Informations générales</h5>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="input-block mb-3">
                            <label>NOM</label>
                            <input type="text" class="form-control" placeholder="Entrer le nom">
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="input-block mb-3">
                            <label>POSTNOM</label>
                            <input type="text" class="form-control" placeholder="Entrer le postnom">
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="input-block mb-3">
                            <label>PRENOM</label>
                            <input type="text" class="form-control" placeholder="Entrer le prenom">
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="input-block mb-3">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="Enter Email Address">
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="input-block mb-3">
                            <label>Telephone</label>
                            <input type="text" class="form-control" placeholder="Entrer le Mobile Number">
                        </div>
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="input-block mb-3">
                            <label>Matricule</label>

                            <input type="text" class="datetimepicker form-control" placeholder="Entrer le numéro matricule">

                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="input-block mb-3">
                            <label>Fonctions</label>
                            <select name="" id="" class="form-control">
                                <option value=""> GERANT</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="input-block mb-3">
                            <label>Roles</label>
                            <select name="" id="" class="form-control">
                                <option value=""> Administrateur</option>
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
                            <label>Mot de passe</label>
                            <input type="password" class="form-control" placeholder="Entrer le mot de passe">
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="input-block mb-3">
                            <label>Confirmation</label>
                            <input type="password" class="form-control" placeholder="Enter la confirmation du mot de passe">
                        </div>
                    </div>


                    <div class="col-lg-12">
                        <div class="btn-path text-end">
                            <a href="javascript:void(0);" class="btn btn-cancel bg-primary-light me-3">Annuler</a>
                            <a href="javascript:void(0);" class="btn btn-primary">Enregistrer</a>
                        </div>
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
