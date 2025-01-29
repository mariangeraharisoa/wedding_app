@extends('layouts.app')

@section('content')
<h3>@yield('title')</h3>
<form class="mt-5" action="@yield('form_action')" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Nom</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name ?? '') }}">
    </div>
    <div class="mb-3">
        <label for="lastname" class="form-label">Prénom</label>
        <input type="text" class="form-control" id="lastname" name="lastname" value="{{ old('lastname', $user->lastname ?? '') }}">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email ?? '') }}">
    </div>
    <div class="mb-3">
        <label for="contact" class="form-label">Contact</label>
        <input type="text" class="form-control" id="contact" name="contact" value="{{ old('contact', $user->contact ?? '') }}">
    </div>
    <div class="mb-3">
        <label for="address" class="form-label">Adresse</label>
        <input type="text" class="form-control" id="address" name="address" value="{{ old('address', $user->address ?? '') }}">
    </div>
    <div class="mb-3">
        <label for="type" class="form-label">Type de compte</label>
        <select class="form-select" id="type" name="type_id">
            @foreach ($user_types as $user_type)
                <option value="{{ $user_type->id }}" @if(old('type', $user->type_id ?? '') == $user_type->id) selected @endif>{{ $user_type->name }}</option>
            @endforeach
        </select>
    </div>
    @if(isset($isAdd) && $isAdd)
        <div class="mb-3">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="mb-3">
            <label for="confirmPassword" class="form-label">Confirmer votre mot de passe</label>
            <input type="password" class="form-control" id="confirmPassword" name="confirmPassword">
        </div>
    @endif
    <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>
    <a href="{{ route('users.index') }}">
        <button class="btn btn-secondary mt-3">
            <i class="bi bi-arrow-left"></i>
            Retour
        </button>
@endsection