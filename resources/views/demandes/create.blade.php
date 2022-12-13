@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Demande d'orientation</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('demande.register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="nom" class="col-md-4 col-form-label text-md-end">Nom Etablissement</label>

                            <div class="col-md-6">
                                <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus>

                                @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="matricule" class="col-md-4 col-form-label text-md-end">Matricule</label>

                            <div class="col-md-6">
                                <input id="matricule" type="text" class="form-control @error('matricule') is-invalid @enderror" name="matricule" value="{{ old('matricule') }}" required autocomplete="matricule" autofocus>

                                @error('matricule')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="service" class="col-md-4 col-form-label text-md-end">Service</label>

                            <div class="col-md-6">
                                <input id="service" type="text" class="form-control @error('service') is-invalid @enderror" name="service" value="{{ old('service') }}" required autocomplete="service" autofocus>

                                @error('service')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="departement" class="col-md-4 col-form-label text-md-end">Departement</label>

                            <div class="col-md-6">
                                <input id="departement" type="text" class="form-control @error('departement') is-invalid @enderror" name="departement" value="{{ old('departement') }}" required autocomplete="departement" autofocus>

                                @error('departement')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="dateDebut" class="col-md-4 col-form-label text-md-end">Date Debut</label>

                            <div class="col-md-6">
                                <input id="dateDebut" type="date" class="form-control @error('dateDebut') is-invalid @enderror" name="dateDebut" value="{{ old('dateDebut') }}" required autocomplete="dateDebut" autofocus>

                                @error('dateNaiss')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="dateFin" class="col-md-4 col-form-label text-md-end">Date Fin</label>

                            <div class="col-md-6">
                                <input id="dateFin" type="date" class="form-control @error('dateFin') is-invalid @enderror" name="dateFin" value="{{ old('dateFin') }}" required autocomplete="dateFin" autofocus>

                                @error('dateFin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Soumettre
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
