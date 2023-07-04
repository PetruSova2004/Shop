@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Под-Категория</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                    </ol>
                </div><!-- /.col -->
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
                        <div class="card-header">
                            <a href="{{route('sub_category.create')}}" class="btn btn-primary">Добавить</a>
                            <a href="{{route('sub_category.parser')}}" class="btn btn-primary">Загрузить под-категории с
                                Atehno</a>
                            <a href="{{route('sub_category.parser_update')}}" class="btn btn-primary">Обновить под-категории с
                                Atehno</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Наименование</th>
                                    <th>Категория</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($sub_categories as $sub_category)
                                    <tr>
                                        <td>{{$sub_category->id}}</td>
                                        <td>
                                            <a href="{{route('sub_category.show', $sub_category->id)}}">{{$sub_category->title}}</a>
                                        </td>
                                        @foreach($categories as $category)
                                            @if($sub_category->category_id == $category->id)
                                                <td>
                                                    <a href="{{route('category.show', ['category' => $category->id])}}">{{$category->title}}</a>
                                                </td>
                                            @endif
                                        @endforeach
                                        <td></td>
                                    </tr>
                                @endforeach
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
