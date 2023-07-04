@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактирование Пользователя</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@stop

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <form action="{{route('user.update', $user->id)}}" method="post">
                    @method('patch')
                    @csrf

                    <div class="form-group">
                        <input type="text" value="{{ $user->name ?? old('name')}}" name="name" class="form-control" placeholder="Имя">
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{ $user->age ?? old('age')}}" name="age" class="form-control" placeholder="Возраст">
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{ $user->address ?? old('address')}}" name="address" class="form-control" placeholder="Адресс">
                    </div>

                    <div class="form-group">
                        <select name="is_admin" class="custom-select form-control-border" id="exampleSelectBorder">
                            <option disabled selected>Роль</option>
                            <option value="1">Админ</option>
                            <option value="0">Пользователь</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Обновить">
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
