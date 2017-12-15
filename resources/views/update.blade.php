@extends('layouts.base')
@section('title', 'Accueil')
@section('main')
<h1><img src="/images/doc.png" alt="doc">Modification des Personnages</h1>
  <div class="container insertOne">
  {!! Form::open(['url' => '/perso/update', 'class' => 'insertForm']) !!}
      {{{ Form::hidden('id', $personnage->id)}}}
      <div class="form-group form-taille" >
      {{{ Form::label('nom') }}}
      {{{ Form::text('nom', $personnage->nom) }}}
    </div>
    <div class="form-group form-taille-update">
      {{{ Form::label('role') }}}
      {{{ Form::text('role', $personnage->role) }}}
    </div>
    <div class="form-group form-taille-update">
      {{{ Form::label('age') }}}
      {{{ Form::number('age', $personnage->age) }}}
    </div>
     <div class="form-group form-taille-update">
      {{ csrf_field() }}
      <label class="control-label form-taille-update">Film</label>
      <select multiple name="film[]" type="select" value="['multipe' => true]"  class="form-control form-taille-update">
        @foreach ($films as $key => $value)
        <option value="{{{$key}}}">{{{$value}}}</option>
        @endforeach
      </select>
    </div>
    {{{ Form::submit('modifier le perso') }}}
  {!! Form::close() !!}
</div>

@endsection
