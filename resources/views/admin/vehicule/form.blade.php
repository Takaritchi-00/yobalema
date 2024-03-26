<div class="box box-info padding-1">
    <div class="box-body">


        <div class="form-group">
            <label for="photo">Photo </label>
            <input type="file" class="form-control" accept=".jpeg, .jpg, .png" id="" name="photo">
        </div>

        <div class="form-group">
            <div class="form-floating">
                <select class="form-select" id="floatingSelectGrid" name="type">
                    <option selected>Sélectionner Le type de service</option>
                    <option value="A">Moto</option>
                    <option value="B">Voiture</option>
                    <option value="C">Camion</option>
                    <option value="D">Mini Bus</option>
                </select>
                <label for="floatingSelectGrid">Les Types</label>
            </div>
        </div>



        <div class="form-group">
            {{ Form::label('date_achat') }}
            {{ Form::date('date_achat', $vehicule->date_achat, ['class' => 'form-control' . ($errors->has('date_achat') ? ' is-invalid' : ''), 'placeholder' => 'Date Achat']) }}
            {!! $errors->first('date_achat', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('kilometres') }}
            {{ Form::number('kilometres', $vehicule->kilometres, ['class' => 'form-control' . ($errors->has('kilometres') ? ' is-invalid' : ''), 'placeholder' => 'Kilometres', 'step' => '1']) }}
            {!! $errors->first('kilometres', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <!--
        <div class="form-group">
            {{ Form::label('matricule') }}
            {{ Form::text('matricule', $vehicule->matricule, ['class' => 'form-control' . ($errors->has('matricule') ? ' is-invalid' : ''), 'placeholder' => 'Matricule']) }}
            {!! $errors->first('matricule', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        -->
        <div class="form-group">
            {{ Form::label('matricule') }}
            {{ Form::text('matricule', $vehicule->matricule, [
                'class' => 'form-control' . ($errors->has('matricule') ? ' is-invalid' : ''), 
                'placeholder' => 'Matricule',
                'pattern' => '[A-Z]{2}-\d{2}-[A-Z]{2}', // Expression régulière pour la validation
                'required' => true // Champ obligatoire
            ]) }}
            {!! $errors->first('matricule', '<div class="invalid-feedback">:message</div>') !!}
            <small class="form-text text-muted">Format attendu : XX-99-XX (par exemple : DK-01-AB).</small>
        </div>


        <div class="form-group">
            {{ Form::label('status') }}
            {{ Form::select('status', ['Disponible' => 'Disponible', 'Indisponible' => 'Indisponible'], $vehicule->status, ['class' => 'form-control' . ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Status']) }}
            {!! $errors->first('status', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('marque') }}
            {{ Form::select('marque', ['Mercedes' => 'Mercedes', 'Peugeot' => 'Peugeot', 'BMW' => 'BMW', 'Ford' => 'Ford', 'Suzuki' => 'Suzuki', 'Yamaha' => 'Yamaha'], $vehicule->marque, ['class' => 'form-control' . ($errors->has('marque') ? ' is-invalid' : ''), 'placeholder' => 'Marque']) }}
            {!! $errors->first('marque', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('suivi_compteur') }}
            {{ Form::text('suivi_compteur', $vehicule->suivi_compteur, ['class' => 'form-control' . ($errors->has('suivi_compteur') ? ' is-invalid' : ''), 'placeholder' => 'Suivi Compteur']) }}
            {!! $errors->first('suivi_compteur', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            <label for="chauffeur">Liste Chauffeurs </label>
            <select class="form-select" aria-label="select chauffeur" name="chauffeur_id">
                <option selected>Choisir un Chauffeur</option>
                @foreach($chauffeur as $chauffeur)
                @if(\Carbon\Carbon::now() <= \Carbon\Carbon::parse($chauffeur->date_expiration_permis)) <!-- Cette condition utilise la bibliothèque Carbon pour vérifier si la date actuelle est inférieure ou égale à la date d'expiration du permis du chauffeur -->
                    <option value="{{$chauffeur->id}}">{{$chauffeur->nom}} {{$chauffeur->prenom}}</option>
                    @endif
                    @endforeach
            </select>
        </div>

    </div> <br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>