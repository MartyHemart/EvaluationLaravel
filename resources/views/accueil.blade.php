@extends('layouts.base')
@section('title', 'Accueil')
@section('main')
  <h1><img src="images/logo.png">Liste des Personnages</h1>
  <div class="container tableau">
    <table class="table table-hover table-dark">
  <thead>
    <tr class="table-primary">
      <th scope="col">#</th>
      <th scope="col">Nom/Prénom</th>
      <th scope="col">Rôle</th>
      <th scope="col">Age</th>
      <th scope="col">Film</th>
      <th scope="col">Supp</th>
      <th scope="col">Update<th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @foreach($personnages as $personnage)
      <th class="table-info" scope="row"> {{ $personnage -> id }}</th>
      <td>{{ $personnage -> nom }}</td>
      <td>{{ $personnage -> role }}</td>
      <td>{{ $personnage -> age }}</td>
      {{-- <td>{{ $personnage -> sexe_id }} </td> --}}
      @if($personnage->films)
      <td>
      @foreach($personnage->films as $film)

      {{ $film->film }}<br>
      @endforeach
      </td>
      @else
      <td>Non indiquer</td>
      @endif
      <td>
        <form action="/perso/delete/{{$personnage->id}}" method="get">
        <button type="submit" >
          {{ csrf_field() }}
          <i class="fa fa-trash-o fa-3x" aria-hidden="true"></i>
        </button>
        </form>
      </td>
      <td>
        <form action="/perso/update/{{$personnage->id}}" method="get">
        <button type="submit" >
          {{ csrf_field() }}
          <i class="fa fa-pencil-square-o fa-3x" aria-hidden="true"></i>
        </button>
        </form>
      </td>
      </tr>

      @endforeach
  </tbody>


</table>
</div>
@endsection
