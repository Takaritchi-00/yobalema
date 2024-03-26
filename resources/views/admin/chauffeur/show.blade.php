@extends('layouts.admin')

@section('template_title')
{{ __('Show') }} Chauffeur
@endsection

@section('content')
<!--- content -->

<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="float-left">
                        <!--  {{ $chauffeur->name ?? "{{ __('Show') Chauffeur" }} -->
                        <span class="card-title">{{ __('Show') }} Chauffeur</span>
                    </div>
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('chauffeurs.index') }}"> {{ __('Back') }}</a>
                    </div>
                </div>

                <div class="card-body">

                    <div class="form-group">
                        <strong>Nom:</strong>
                        {{ $chauffeur->nom }}
                    </div>
                    <div class="form-group">
                        <strong>Prenom:</strong>
                        {{ $chauffeur->prenom }}
                    </div>
                    <div class="form-group">
                        <strong>Photo:</strong>
                        {{ $chauffeur->photo }}
                    </div>
                    <div class="form-group">
                        <strong>Experiences:</strong>
                        {{ $chauffeur->experiences }}
                    </div>
                    <div class="form-group">
                        <strong>Numero Permis:</strong>
                        {{ $chauffeur->numero_permis }}
                    </div>
                    <div class="form-group">
                        <strong>Date Emission Permis:</strong>
                        {{ $chauffeur->date_emission_permis }}
                    </div>
                    <div class="form-group">
                        <strong>Date Expiration Permis:</strong>
                        {{ $chauffeur->date_expiration_permis }}
                    </div>
                    <div class="form-group">
                        <strong>Categorie:</strong>
                        {{ $chauffeur->categorie }}
                    </div>
                    <div class="form-group">
                        <strong>Contrat:</strong>
                        {{ $chauffeur->contrat }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection