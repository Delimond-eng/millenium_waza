@extends("layouts.settings")

@section("settingPage")
    <div class="card">
        <div class="card-body w-100">
            <div class="content-page-header">
                <h5>Fonctions</h5>
            </div>
            <form method="POST" action="{{ route('settings.fonctions.create') }}">
                 @csrf
                @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Erreur</strong> {{ session("error") }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                @if (session('result'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Succès!</strong> Opération effectuée.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                <div class="form-group-item">
                    <div class="row">
                        <div class="col-lg-12 col-12">
                            <div class="input-block mb-3">
                                <label>Libellé <sup class="text-danger">*</sup></label>
                                <input type="text" name="libelle" class="form-control" placeholder="Entrez le libellé de la fonction...">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="btn-path text-end">
                        <button type="reset" class="btn btn-cancel bg-primary-light me-3">Annuler</button>
                        <button type="submit" class="btn btn-primary">Sauvegarder</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="card-table">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-center">
                    <thead class="thead-light">
                        <tr>
                            <th>Libellé fonction</th>
                            <th class="no-sort">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($fonctions as $fonction)
                        <tr>
                            <td>{{ $fonction->libelle }}</td>
                            <td class="d-flex align-items-center">
                                <a class="btn btn-greys bg-primary-light me-1" href="#"><i
                                                        class="far fa-edit me-2"></i>Editer</a>
                                <a class="btn btn-greys bg-danger-light" href="#"><i
                                class="far fa-trash-alt me-2"></i>Supprimer</a>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

