@extends('layouts.admin')

@section('template_title')
{{ __('Liste') }} Chauffeur
@endsection

@section('content')
<!--- content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Chauffeur') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('chauffeurs.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                {{ __('Créer Nouveau') }}
                            </a>
                        </div>
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

                                    <th>Photo</th>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>Experiences</th>
                                    <th>Numero Permis</th>
                                    <th>Date Emission Permis</th>
                                    <th>Date Expiration Permis</th>
                                    <th>Categorie</th>
                                    <th>Contrat</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($chauffeurs as $chauffeur)
                                <tr>
                                    <td>{{ ++$i }}</td>

                                    <td><img src="/images/{{$chauffeur->photo}}" alt="" width="100"></td>
                                    <td>{{ $chauffeur->nom }}</td>
                                    <td>{{ $chauffeur->prenom }}</td>
                                    <td>{{ $chauffeur->experiences }}</td>
                                    <td>{{ $chauffeur->numero_permis }}</td>
                                    <td>{{ $chauffeur->date_emission_permis }}</td>
                                    <td>{{ $chauffeur->date_expiration_permis }}</td>
                                    <td>{{ $chauffeur->categorie }}</td>
                                    <td><a href="{{asset('images/'.$chauffeur->contrat)}}" download>{{$chauffeur->contrat}}</a></td>

                                    <td>
                                        <form action="{{ route('chauffeurs.destroy',$chauffeur->id) }}" method="POST">
                                            <a class="btn btn-sm btn-primary " href="{{ route('chauffeurs.show',$chauffeur->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                            <a class="btn btn-sm btn-success" href="{{ route('chauffeurs.edit',$chauffeur->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $chauffeurs->links() !!}
        </div>
    </div>
</div>
@endsection