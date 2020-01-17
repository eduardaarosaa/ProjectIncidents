@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @if(isset($errors) && count($errors)> 0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <p>{{$error}}</p>
                        @endforeach
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">Bem vindo</div>

                    <div class="card-body">

                         
                        
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
