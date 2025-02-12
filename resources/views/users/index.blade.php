@extends('layouts.app')

@section('title', 'Liste des utilisateurs')
<style>
    .btn{
        background: deeppink;
        border:none;
        font-family: poppins1;
    }
    .btn:hover{
        background: white;
        border: solid 1px deeppink;
        color: deeppink;
    }
    .table{
        font-family: poppins1;
    }
    .toConnect{
        font-family: poppins1;
        color: white;
        font-size: 1.2vw;
        text-align: center;
    }
    #box_connect{
        background:white;
        border: solid .1vw deeppink;
        padding: 0.3vw;
        border-radius: .5vw;
        display: flex;
        justify-content: center;
        align-items: center;
        color: white;
            
    }
    #box_connect:hover, .toConnect:hover{
        color: white;
        background:deeppink;
    }
    .user_list{
        color: deeppink;
        font-family: poppins;
    }
    td{
    color : deeppink;
    }
</style>

@section('content')

<h3 class="user_list">Liste des utilisateurs</h3>
<a href="{{ route('users.add') }}">
    <button class="btn btn-primary mt-3">
        <i class="bi bi-plus"></i>
        Nouvel utilisateur
    </button>
</a>
<table class="table mt-5">
    <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">Email</th>
            <th scope="col">Contact</th>
            <th scope="col">Adresse</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->lastname }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->contact }}</td>
                <td>{{ $user->address }}</td>
                <td>
                    <div class="row">
                        <div class="col-6 text-end">
                            <a href="{{ route('users.edit', $user->id) }}" class="text-black">
                                <i class="bi bi-pencil"></i>
                            </a>
                        </div>
                        <div class="col-6">

                            <a href="{{ route('users.delete', $user->id) }}" class="text-danger">
                                <i class="bi bi-trash ml-3"></i>
                            </a>
                        </div>
    
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
