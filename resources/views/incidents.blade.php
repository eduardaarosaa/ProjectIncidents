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
                    <div class="card-header">Lista dos incidentes</div>

                    <div class="card-body">

                         <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Código</th>
                            <th scope="col">Título</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Criticidade</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Status</th>
                            <th scope="col">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($incidents as $row)
                        <tr>
                            <td>{{$row->id}}</td>
                            <td>{{$row->title}}</td>
                            <td>{{$row->description}}</td>
                            <td>{{$row->criticality}}</td>
                            <td>{{$row->type}}</td>
                            <td>{{$row->status}}</td>
                            <td>
                                <a href="">
                                    <button type="" class="btn btn-success">Editar</button>
                                </a>
                                <br><br>
                                <form action="apagar/{{$row->id}}" method="post">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-success">Apagar </button>
                                    </form>
                            </td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $incidents->links() !!}
                        
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
