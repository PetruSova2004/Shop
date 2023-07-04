@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Пользователь {{$user->title}}</h1>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@stop

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex p-3">
                            <div class="mr-3">
                                <a href="{{route('user.edit', $user->id)}}" class="btn btn-primary">Редактировать</a>
                            </div>
                            <form action="{{route('user.destroy', $user->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" class="btn btn-danger" value="Удалить">
                            </form>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <tbody>
                                <tr>
                                    <td>ID</td>
                                    <td>{{$user->id}}</td>
                                </tr>
                                <tr>
                                    <td>Имя</td>
                                    <td>{{$user->name}}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>{{$user->email}}</td>
                                </tr>
                                <tr>
                                    <td>Пароль</td>
                                    <td>{{$user->password}}</td>
                                </tr>
                                <tr>
                                    <td>Возвраст</td>
                                    <td>{{$user->age}}</td>
                                </tr>
                                <tr>
                                    <td>Адрес</td>
                                    <td>{{$user->address}}</td>
                                </tr>
                                <tr>
                                    <td>Пол</td>
                                    <td>{{$user->genderTitle}}</td>
                                </tr>

                                <tr>
                                    <td>Роль</td>
                                    <td>{{$user->roleTitle}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
@stop

@section('css')

@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
