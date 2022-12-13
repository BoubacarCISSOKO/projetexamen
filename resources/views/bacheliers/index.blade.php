@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>Liste des bacheliers </h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right mr-2">
                <a class="btn btn-primary" href="{{ route('bachelier.create') }}" pull-right>nouvelle inscription</a>
            </ol>
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
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Filiere</th>
                    <th>Date Naissance</th>
                    <th>Nom Representant</th>
                    <th>Adresse</th>
                    <th>Telephone</th>
                    <th>Action</th>
                    
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($bacheliers as $key => $bachelier)
                        <tr @if($bachelier->deleted_at) class="has-background-grey-lighter" @endif>
                            <td>{{$key+1}}</th>
                            <td>{{$bachelier->nom}}</td>
                            <td>{{$bachelier->prenom}}</td>
                            <td>{{$bachelier->filiere}}</td>
                            <td>{{$bachelier->dateNaiss}}</td>
                            <td>{{$bachelier->nomRepresentant}}</td>
                            <td>{{$bachelier->adresse}}</td>
                            <td>{{$bachelier->telephone}}</td>
                            </td>
                           
                            <td>
                            <div class="btn-group btn-group-sm">
                                
                                <a  href="#" class="btn btn-xs btn-info" title="Voir détails">
                                    <i class="fas fa-eye"></i></a>
                                </a>
                            
                                <a href="#" class="btn btn-xs btn-warning" title="Modifier">
                                    
                                    <i class="fa fas fa-edit"></i>
                                    
                                </a>
                                <a onclick="#" class="btn btn-xs btn-danger" title="Supprimer">
                                    <i class="fas fa-trash"></i>
                                
                                </a>
                               </div>
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
