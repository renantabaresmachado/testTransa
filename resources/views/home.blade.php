@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table  class="table">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Editar</th>
                                <th>Excluir</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                               <td>{{$user->name}}</td> 
                               <td>{{$user->email}}</td>
                               <td><a href="/edit/{{$user->id}}"><i class="fas fa-edit"></a></i></td>
                               <td><a href="javascript:(confirm('Tem certeza que deseja excluir?') ? window.location.href='{{route('del' , $user->id)}}' : false)" ><i class="fas fa-trash-alt"></i></a></td>
                            </tr>       
                            @endforeach
                        </tbody>
                   </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
