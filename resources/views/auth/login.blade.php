@extends('layouts.auth')

@section('content')
    <div class="main-wrapper login-body">
        <div class="login-wrapper">
            <div class="container">
                <div class="loginbox">
                    <div class="login-right">
                        <div class="login-right-wrap">
                            <h1 class="fw-bold text-uppercase text-primary">Connexion</h1>
                            <p class="account-subtitle">Veuillez vous connecter !</p>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="input-block mb-3">
                                    <label class="form-control-label">Email</label>
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Entrez l'adresse email..." >
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input-block mb-3">
                                    <label class="form-control-label">Mot de passe </label>
                                    <div class="pass-group">
                                        <input type="password" name="password" class="form-control pass-input @error('password') is-invalid @enderror" placeholder="Entrez le mot de passe...">
                                        <span class="fas fa-eye toggle-password"></span>
                                    </div>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input-block mb-3">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-check custom-checkbox">
                                                <input type="checkbox" class="form-check-input" {{ old('remember') ? 'checked' : '' }} id="cb1">
                                                <label class="custom-control-label" for="cb1">Garder ma session</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button class="btn btn-lg  btn-primary w-100" type="submit">Connecter</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

