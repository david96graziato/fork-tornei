{{--


Index Page by Sindria Inc.


--}}

@extends('layouts.frontend-skeleton')

@section('description', 'Modulo iscrizione tornei online tennisclubarzachena.it')
@section('title', 'Tornei')
@section('dynamic-styles')
    <link href="{{ asset('css/sindria-frontend.css') }}" rel="stylesheet">
@stop
@section('dynamic-fonts')
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
@stop
@section('dynamic-scripts')
    
@stop

@section('custom-content')
<div class="post post-page">
  <div class="container">
    <div class="title">
      <h3>Modulo Iscrizione Tornei Online Tennis Club</h3>
    </div>
    <br />
    
    @include('components.messages')
    
    <form action="{{ route('subscriber.store') }}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="form-row">        
        <div class="form-group col-md-4">
          <label for="name">Nome</label>
          <input class="form-control" placeholder="Nome" name="name" value="{{ old('name') }}" required>
        </div>
        <div class="form-group col-md-4">
          <label for="surname">Cognome</label>
          <input class="form-control" placeholder="Cognome" name="surname" value="{{ old('surname') }}" required>
        </div>
        <div class="form-group col-md-4">
          <label for="birthday">Data di nascita</label>
          <input class="form-control" placeholder="GG/MM/AAAA" name="birthday" value="{{ old('birthday') }}" required>
        </div>
      </div>
      <br />
      <div class="form-row">        
        <div class="form-group col-md-6">
          <label for="email">Email</label>
          <input class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required>
        </div>        
        <div class="form-group col-md-6">
          <label for="phone">Telefono</label>
          <input class="form-control" placeholder="Telefono" name="phone" value="{{ old('phone') }}" required>
        </div>
      </div>
      <br />
      <div class="form-row">        
        <div class="form-group col-md-6">
          <label for="fit">Numero tessera FIT</label>
          <input class="form-control" placeholder="Numero tessera FIT" name="fit" value="{{ old('fit') }}" required>
        </div>        
        <div class="form-group col-md-6">
          <label for="club">Circolo</label>
          <input class="form-control" placeholder="Circolo" name="club" value="{{ old('club') }}" required>
        </div>
      </div>
      <br />
      <div class="form-row">        
        <div class="form-group col-md-4">
          <label for="score_id">Classifica</label>
          <select class="form-control" name="score_id" value="{{ old('score_id') }}" required>
            <option value="" disabled selected>--Classifica--</option>
            @foreach ($scores as $score)
              <option value="{{ $score->id }}"{{ $score->id == old('score_id') ? " selected" : ""}}>{{ $score->name }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group col-md-4">
          <label for="category_id">Categoria</label>
          <select class="form-control" name="category_id" required>
            <option value="" disabled selected>--Categoria--</option>
            @foreach ($categories as $category)
              <option value="{{ $category->id }}"{{ $category->id == old('category_id') ? " selected" : ""}}>{{ $category->name }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group col-md-4">
          <label for="type_id">Singolo/Doppio</label>
          <select class="form-control" name="type_id" required>
            <option value="" disabled selected>--Iscritto come-</option>
            @foreach ($types as $type)
              <option value="{{ $type->id }}"{{ $type->id == old('type_id') ? " selected" : ""}}>{{ $type->name }}</option>
            @endforeach
          </select>
        </div>
      </div>
      <br />
      <div class="form-group">
        <label for="note">Note</label>
        <textarea class="form-control" name="note" placeholder="(Opzionale)"></textarea>
      </div>
      <br />
      <button type="submit" class="btn btn-primary btn-block" name="submit">Invia</button>
      <br />
    </form>
  </div>
</div>
@endsection