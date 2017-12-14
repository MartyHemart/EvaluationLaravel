{{-- @extends('layouts.base')
@section('title', 'Accueil')
@section('main')
   <h1><img src="/images/delorean.png" alt="Voiture">Insertion des Personnages</h1>
<div class="container insertOne">
    {!! Form::open(['url' => '/perso/insert', 'class' => 'insertForm']) !!}
      {{{ Form::hidden('id')}}}
      <div class="form-group" >
      {{{ Form::label('nom') }}}
      {{{ Form::text('nom') }}}
    </div>
    <div class="form-group">
      {{{ Form::label('role') }}}
      {{{ Form::text('role') }}}
    </div>
    <div class="form-group">
      {{{ Form::label('age') }}}
      {{{ Form::text('age') }}}
    </div>
    <div class="form-group">
      {{{ Form::label('film') }}}
      {{{ Form::select('films') }}}
    </div>
    {{-- <div class="form-group">
    <label class="control-label">Film</label>
    <select multiple name="films" type="select" class="form-control">
    @foreach ($films as $film)
    <option value="{{{$film->id}}}">{{{$film->film}}}</option>
    @endforeach
    </select>
    </div> --}}
    {{-- {{{ Form::submit('ajouter un perso') }}}
    {!! Form::close() !!}
</div> --}}
{{-- @endsection --}}

@extends('layouts.base')
@section('title', 'Accueil')
@section('main')
  {{-- <h1>Insertion des chats</h1> --}}
  <div class="container form-controle">
		<div class="row">
			<div class="panel panel-primary">
				<div class="panel-body">
					<form method="POST" action="/perso/insert" role="form">
            {{ csrf_field() }}
						<div class="form-group">
							<h2>Créer un perso<img src="#"> </h2>
						</div>
						<div class="form-group">
							<label class="control-label">Nom</label>
							<input  name="nom" type="text" class="form-control">
						</div>
						<div class="form-group">
							<label class="control-label">role</label>
							<input name="role"  type="text"  class="form-control">
						</div>
						<div class="form-group">
							<label class="control-label">age</label>
							<input name="age" type="number" class="form-control">
						</div>
            {{-- <div class="form-group">
              <label class="control-label">Sex</label>
              <select  name="gender" type="select" class="form-control">
                @foreach ($genders as $gender)
                <option value="{{{$gender->id}}}">{{{$gender->gender}}}</option>
                @endforeach
              </select>
            </div> --}}

            {{-- <div class="form-group">
              <label class="control-label">Film</label>
              <select multiple name="film[]" type="select" value="['multipe' => true]"  class="form-control">
                @foreach ($films as $film)
                <option value="{{{$film->id}}}">{{{$film->film}}}</option>
                @endforeach
              </select>
            </div> --}}
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
