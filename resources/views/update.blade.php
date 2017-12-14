@extends('layouts.base')
@section('title', 'Accueil')
@section('main')
<h1><img src="/images/doc.png" alt="doc">Modification des Personnages</h1>
  <div class="container insertOne">
  {!! Form::open(['url' => '/perso/update', 'class' => 'insertForm']) !!}
      {{{ Form::hidden('id', $personnage->id)}}}
      <div class="form-group" >
      {{{ Form::label('nom') }}}
      {{{ Form::text('nom', $personnage->nom) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('role') }}}
      {{{ Form::text('role', $personnage->role) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('age') }}}
      {{{ Form::number('age', $personnage->age) }}}
    </div>
    <div class="form-group">
    {{{ Form::label('films') }}}

    {{{ Form::select('film[]', $films, $personnage->films, ['multiple' => true]) }}}
    </div>
    {{{ Form::submit('modifier le perso') }}}
  {!! Form::close() !!}
</div>


@endsection
