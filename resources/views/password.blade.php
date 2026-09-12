@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-white text-center py-4">{{ $message }}</h1>
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6">
                <div class="card" data-bs-theme="dark">
                    <div class="card-header">
                        <h2 class="card-title text-center">La tua nuova password è:</h2>
                    </div>
                    <div class="card-body d-flex flex-column align-items-center">
                        <p class="card-text text-center">{{ strlen($password)>0 ? $password : "Non è stata generata alcuna password" }}</p>
                        <a class="btn btn-danger" href="/">Return to index</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection