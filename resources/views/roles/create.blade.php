@extends('layouts.app')

@section('content')

<h3>Ajouter un rôle</h3>

<form action="{{ route('roles.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Nom:</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group">
        <label for="description">Description:</label>
        <textarea class="form-control" id="description" name="description" required></textarea>
    </div>
    <button type="submit" class="btn btn-dark">Ajouter</button>
</form>

@endsection
