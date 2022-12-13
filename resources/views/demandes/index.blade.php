@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>Liste des demandes d'orientations </h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <a class="btn btn-primary" href="{{ route('demande.create') }}" pull-right>nouvelle demande</a>
            </ol>
            </div>
        </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
        <div class="row">
            <div class="col-12">
            <div class="card">
                <div class="card-header">
                    @if(session()->has('info'))
                        <div class="container">
                            <div class="alert alert-dismissible alert-success fade show" role="alert">
                                {{ session('info') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        @elseif(session()->has('error'))
                        <div class="container">
                            <div class="alert alert-dismissible alert-danger fade show" role="alert">
                                {{ session('error') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                    </div>
                    @endif

                  
                    <!-- end csv -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                    <th>#</th>
                    <th>Nom Etablissement</th>
                    <th>Matricule</th>
                    <th>Service</th>
                    <th>Departement</th>
                    <th>Date Debut</th>
                    <th>Date Fin</th>
                    
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($demandes as $key => $demande)
                        <tr @if($demande->deleted_at) class="has-background-grey-lighter" @endif>
                            <td>{{$key+1}}</th>
                            <td>{{$demande->nom}}</td>
                            <td>{{$demande->matricule}}</td>
                            <td>{{$demande->service}}</td>
                            <td>{{$demande->departement}}</td>
                            <td>{{$demande->dateDebut}}</td>
                            <td>{{$demande->dateFin}}</td>
                            </td>
                           
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
</div>
    </div>
</div>
@endsection
