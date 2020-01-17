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
                <div class="card-header">Altere o incidente</div>

                <div class="card-body">
                    <form action="<?php echo route('update', $consulta->id)?>" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Título:</label>
                                    <input type="text" class="form-control" name="title" placeholder="Digite um título" value="{{$consulta->title}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Descrição</label>
                                    <textarea class="form-control" name="description" rows="3">{{$consulta->description}}</textarea>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Criticidade:</label>
                                    <select name="criticality" class="form-control form-control-lg">

                                        <option
                                        value="Alta"<?php if($consulta->criticality == 'Alta'){ echo ' selected="selected"'; } ?>>Alta</option>
                                        <option value="Média"<?php if($consulta->criticality == 'Média'){ echo ' selected="selected"'; } ?>>Média</option>
                                        <option value="Baixa"<?php if($consulta->criticality == 'Baixa'){ echo ' selected="selected"'; } ?>>Baixa</option>
                                    </select>

                                </div>
                            </div>
                        </div>
                
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Tipo:</label>
                                    <select name="type" class="form-control form-control-lg">
                                    <option value="Ataque Brute Force"<?php if($consulta->type == 'Ataque Brute Force'){ echo ' selected="selected"'; } ?>>Ataque Brute Force</option>
                                    <option value="Credenciais Vazadas"<?php if($consulta->criticality == 'Credenciais Vazadas'){ echo ' selected="selected"'; } ?>>Credenciais Vazadas</option>
                                    <option value="Ataque de DDos"<?php if($consulta->criticality == 'Ataque de DDos'){ echo ' selected="selected"'; } ?>>Ataque de DDos</option>
                                    <option value="Atividades anormais de usuário"<?php if($consulta->criticality == 'Atividades anormais de usuário'){ echo ' selected="selected"'; } ?>>Atividades anormais de usuário</option>
                                </select>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Status:</label>
                                <select name="status" class="form-control form-control-lg">
                                    <option value="1"<?php if($consulta->status== '1'){ echo ' selected="selected"'; } ?>>Aberto</option>
                                    <option value="2"<?php if($consulta->status== '2'){ echo ' selected="selected"'; } ?>>Fechado</option>

                                </select>

                            </div>
                        </div>
                    </div>


                    <button type="submit" class="btn btn-primary">Alterar</button>

                </form>
            </div>
        </div>
        <br>
        <a href="{{route('Incident')}}">
           <input type="button" class="btn btn-success" value="Voltar">
       </a> 
   </div>

</div>
</div>

@endsection
