@extends('layouts.base')
@section('title', 'Accueil')
@section('main')
<h1><img src="images/delorean.png" halt='voiture'>Créer un personnage</h1>
  <div class="container form-controle insertOne">
		<div class="row">
			<div class="panel panel-primary">
				<div class="panel-body">
					<form method="POST" action="/perso/insert" role="form">
            {{ csrf_field() }}
						<div class="form-group">
						</div>
						<div class="form-group form-taille">
							<label class="control-label">Nom/Prénom</label>
							<input  name="nom" type="text" class="form-control">
						</div>
						<div class="form-group form-taille">
							<label class="control-label">Rôle</label>
							<input name="role"  type="text"  class="form-control">
						</div>
						<div class="form-group form-taille">
							<label class="control-label">Age</label>
							<input name="age" type="number" class="form-control" min="0">
						</div>
            <div class="form-group form-taille">
              <label class="control-label">Film</label>
              <select multiple name="film[]" type="select" value="['multipe' => true]"  class="form-control">
                @foreach ($films as $film)
                <option value="{{{$film->id}}}">{{{$film->film}}}</option>
                @endforeach
              </select>
            </div>
						<div class="form-group">
							<button type="submit" class="btn btn-info btn-block">Ajouter le perso</button>
						</div>
						<hr>
					</form>
				</div>
			</div>
		</div>
	</div>

@endsection
