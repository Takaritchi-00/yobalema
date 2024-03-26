@extends('layouts.admin')

@section('template_title')
    Vehicule
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Vehicule') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('vehicules.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
										<th>Type</th>
										<th>Date Achat</th>
										<th>Kilometres</th>
										<th>Matricule</th>
										<th>Status</th>
										<th>Marque</th>
										<th>Suivi Compteur</th>
										<th>Chauffeur</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($vehicules as $vehicule)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
                                            <td><img src="/images/{{$vehicule->photo}}" alt="" width="100"></td>
											<td>{{ $vehicule->type }}</td>
											<td>{{ $vehicule->date_achat }}</td>
											<td>{{ $vehicule->kilometres }}</td>
											<td>{{ $vehicule->matricule }}</td>
											<td>{{ $vehicule->status }}</td>
											<td>{{ $vehicule->marque }}</td>
											<td>{{ $vehicule->suivi_compteur }}</td>
											<td>{{ $vehicule->chauffeur_id }}</td>

                                            <td>
                                                <form action="{{ route('vehicules.destroy',$vehicule->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('vehicules.show',$vehicule->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('vehicules.edit',$vehicule->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $vehicules->links() !!}
            </div>
        </div>
    </div>
@endsection
