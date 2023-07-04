@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавать Пользователя</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@stop

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <form action="{{route('user.store')}}" method="post">
                    @csrf

                    <div class="form-group">
                        <input type="text" value="{{old('name')}}" name="name" class="form-control" placeholder="Имя">
                    </div>
                    <div class="form-group">
                        <input type="email" value="{{old('email')}}" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{old('password')}}" name="password" class="form-control"
                               placeholder="Пароль">
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{old('password_confirmation')}}" name="password_confirmation"
                               class="form-control" placeholder="Потверждение пароля">
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{old('age')}}" name="age" class="form-control" placeholder="Возраст">
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{old('address')}}" name="address" class="form-control" placeholder="Адресс">
                    </div>

                    <div class="form-group">
                        <select name="gender" class="custom-select form-control-border" id="exampleSelectBorder">
                            <option disabled selected>Пол</option>
                            <option {{old('gender') == 1 ? ' selected' : ''}} value="1">Мужской</option>
                            <option {{old('gender') == 2 ? ' selected' : ''}} value="2">Женский</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <select name="role" class="custom-select form-control-border" id="exampleSelectBorder">
                            <option disabled selected>Роль</option>
                            <option {{old('role') == 1 ? ' selected' : ''}} value="1">Админ</option>
                            <option {{old('role') == 2 ? ' selected' : ''}} value="0">Пользователь</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Добавить">
                    </div>

                </form>
            </div>
        </div>
    </section>
@stop

@section('css')

@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
