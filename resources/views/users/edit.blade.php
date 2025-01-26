@extends('users.form')

@section('title', 'Modification utilisateur')

@section('form_action', route('users.doEdit', $user->id))