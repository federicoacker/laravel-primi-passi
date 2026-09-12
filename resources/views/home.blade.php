@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-md-6">
                <form action="/password" class="form-control" method="GET" data-bs-theme="dark">
                    <div class="d-flex flex-column row-gap-2">
                        <h2 class="card-title py-4">Generatore di password sicure</h2>
                        <div class="form-control">
                            <label class="form-label" for="uppercase">Include Uppercase Letters</label>
                            <input type="checkbox" id="uppercase" name="uppercase" />
                        </div>
                        <div class="form-control">
                            <label class="form-label" for="numbers">Include Numbers</label>
                            <input type="checkbox" id="numbers" name="numbers" />
                        </div>
                        <div class="form-control">
                            <label class="form-label" for="symbols">Include Symbols</label>
                            <input type="checkbox" id="symbols" name="symbols" />
                        </div>
                        <div class="form-control">
                            <label class="form-label" for="length">Password Length (Required)</label>
                            <input required type="number" id="length" name="length" value = "5"/>
                        </div>
                        <button class="btn btn-danger">Genera Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection