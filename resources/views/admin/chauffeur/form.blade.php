<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('nom') }}
            {{ Form::text('nom', $chauffeur->nom, ['class' => 'form-control' . ($errors->has('nom') ? ' is-invalid' : ''), 'placeholder' => 'Nom']) }}
            {!! $errors->first('nom', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('prenom') }}
            {{ Form::text('prenom', $chauffeur->prenom, ['class' => 'form-control' . ($errors->has('prenom') ? ' is-invalid' : ''), 'placeholder' => 'Prenom']) }}
            {!! $errors->first('prenom', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    
        <div class="form-group">
            <label for="photo">Photo </label>
            <input type="file" class="form-control" accept=".jpeg, .jpg, .png" id="" name="photo">
        </div>
        <div class="form-group">
            {{ Form::label('experiences') }}
            {{ Form::text('experiences', $chauffeur->experiences, ['class' => 'form-control' . ($errors->has('experiences') ? ' is-invalid' : ''), 'placeholder' => 'Experiences']) }}
            {!! $errors->first('experiences', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numero_permis') }}
            {{ Form::text('numero_permis', $chauffeur->numero_permis, ['class' => 'form-control' . ($errors->has('numero_permis') ? ' is-invalid' : ''), 'placeholder' => 'Numero Permis']) }}
            {!! $errors->first('numero_permis', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('date_emission_permis') }}
            {{ Form::date('date_emission_permis', $chauffeur->date_emission_permis, ['class' => 'form-control' . ($errors->has('date_emission_permis') ? ' is-invalid' : ''), 'placeholder' => 'Date Emission Permis']) }}
            {!! $errors->first('date_emission_permis', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('date_expiration_permis') }}
            {{ Form::date('date_expiration_permis', $chauffeur->date_expiration_permis, ['class' => 'form-control' . ($errors->has('date_expiration_permis') ? ' is-invalid' : ''), 'placeholder' => 'Date Expiration Permis']) }}
            {!! $errors->first('date_expiration_permis', '<div class="invalid-feedback">:message</div>') !!}
        </div> <br>

        <div class="form-group">
            <div class="form-floating">
                <select class="form-select" id="floatingSelectGrid" name="categorie">
                    <option selected>Sélectionner La Catégorie du Chauffeur</option>
                    <option value="A">Moto</option>
                    <option value="B">Voiture</option>
                    <option value="C">Camion</option>
                    <option value="D">Mini Bus</option>
                </select>
                <label for="floatingSelectGrid">Les Catégories</label>
            </div>
        </div>


        <div class="form-group">
            <label for="contrat">Contrat</label>
            <input type="file" name="contrat" id="" class="form-control" accept=".pdf, .doc, .docx">
        </div>

    </div> <br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>