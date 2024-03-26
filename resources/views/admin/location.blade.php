@extends('layouts.admin')

@section('template_title')
{{ __('Create') }} Chauffeur
@endsection

@section('content')
<div class="container-fluid py-5">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Liste Locations') }}
                            </span>


                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        <th>Nom Client</th>
                                        <th>Véhicule</th>
                                        <th>Chauffeur</th>
                                        <th>Lieu de Départ</th>
                                        <th>Lieu d'Arrivé</th>
                                        <th>Heure de début</th>
                                        <th>Heure de fin</th>
                                        <th>Paiement</th>
                                        <th>Status Paiement</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                @foreach($location as $loc)
                                <tbody>

                                    <tr>

                                        <td>{{$loc->id}}</td>
                                        <td>{{$loc->user->name}}</td>
                                        <td><img src="/images/{{$loc->vehicule->photo}}" alt="" width="100"></td>
                                        <td>{{$loc->vehicule->chauffeur->nom}} {{$loc->vehicule->chauffeur->prenom}}</td>
                                        <td>{{$loc->lieu_d}}</td>
                                        <td>{{$loc->lieu_a}}</td>
                                        <td>{{$loc->heure_debut}}</td>
                                        <td>{{$loc->heure_fin}}</td>
                                        <td>{{$loc->payer}}</td>
                                        <td>
                                            @if($loc->payer == 'En Cours')
                                            <a class="btn btn-sm btn-success" href="#"><i class="fa fa-fw fa-edit"></i> {{ __('Location en Cours') }}</a>
                                            @else
                                            <a class="btn btn-sm btn-info" href="#"><i class="fa fa-fw fa-edit"></i> {{ __('Location Payer') }}</a>
                                            @endif
                                        </td>
                                    </tr>


                                </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection