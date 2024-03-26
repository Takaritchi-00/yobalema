@extends('layouts.admin')

@section('template_title')
    {{ $vehicule->name ?? "{{ __('Show') Vehicule" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Vehicule</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('vehicules.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Photo:</strong>
                            <img src="/images/{{$vehicule->photo}}" alt="" width="100">
                        </div>
                        <div class="form-group">
                            <strong>Type:</strong>
                            {{ $vehicule->type }}
                        </div>
                        <div class="form-group">
                            <strong>Date Achat:</strong>
                            {{ $vehicule->date_achat }}
                        </div>
                        <div class="form-group">
                            <strong>Kilometres:</strong>
                            {{ $vehicule->kilometres }}
                        </div>
                        <div class="form-group">
                            <strong>Matricule:</strong>
                            {{ $vehicule->matricule }}
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $vehicule->status }}
                        </div>
                        <div class="form-group">
                            <strong>Marque:</strong>
                            {{ $vehicule->marque }}
                        </div>
                        <div class="form-group">
                            <strong>Suivi Compteur:</strong>
                            {{ $vehicule->suivi_compteur }}
                        </div>
                        <div class="form-group">
                            <strong>Chauffeur :</strong>
                            {{ $vehicule->chauffeur_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
