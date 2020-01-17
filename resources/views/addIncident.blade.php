@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if(isset($errors) && count($errors)> 0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <p>{{$error}}</p>
                        @endforeach
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">Adicionar um incidente</div>

                    <div class="card-body">
                        <form action="{{route('Incident.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Título:</label>
                                        <input type="text" class="form-control" name="title" placeholder="Digite um título" value="{{old('title')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Descrição</label>
                                            <textarea class="form-control" name="description" rows="3"></textarea>
                                        </div>

                                    </div>
                                </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Criticidade:</label>
                                        <select name="criticality" class="form-control form-control-lg">
                                                <option>Alta</option>
                                                <option>Média</option>
                                                <option>Baixa</option>
                                        </select>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Tipo:</label>
                                        <select name="type" class="form-control form-control-lg">
                                            <option>Ataque Brute Force</option>
                                            <option>Credenciais Vazadas</option>
                                            <option>Ataque de DDos</option>
                                            <option>Atividades anormais de usuário</option>
                                        </select>

                                    </div>
                                </div>
                            </div>



                            <button type="submit" class="btn btn-primary">Cadastrar</button>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
