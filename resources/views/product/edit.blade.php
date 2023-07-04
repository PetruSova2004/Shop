@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактирование Продукта</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    @include('layouts.alerts')

@stop

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <form action="{{route('product.update', $product->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <input type="text" name="title" value="{{$product->title}}" class="form-control" placeholder="Наименование">
                    </div>
                    <div class="form-group">
                        <input type="text" name="description" value="{{$product->description}}" class="form-control" placeholder="Описание">
                    </div>
                    <div class="form-group">
                        <textarea name="content" class="form-control" cols="30" rows="10"
                                  placeholder="Контент">{{$product->content}}</textarea>
                    </div>
                    <div class="form-group">
                        <input type="text" name="price" value="{{$product->price}}" class="form-control" placeholder="Цена">
                    </div>
                    <div class="form-group">
                        <input type="text" name="count" value="{{$product->count}}" class="form-control" placeholder="Кол-во на складе">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input name="preview_image" type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Выберите файл</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Загрузка</span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group" data-select2-id="54">
                        <select name="category_id" class="form-control select2 select2-hidden-accessible" style="width: 100%;"
                                data-select2-id="1" tabindex="-1" aria-hidden="true">
                            <option selected="selected" disabled>Выберите категорию</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->title}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group" data-select2-id="29">
                        <label>Теги</label>
                        <select name="tags[]" multiple="" data-placeholder="Выберите теги" style="width: 100%;"
                                data-select2-id="7" tabindex="-1" aria-hidden="true">
                            @foreach($tags as $tag)
                                <option value="{{$tag->id}}">{{$tag->title}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group" data-select2-id="29">
                        <label>Цвета</label>
                        <select name="colors[]" multiple="" data-placeholder="Выберите цвета" style="width: 100%;"
                                data-select2-id="7" tabindex="-1" aria-hidden="true">
                            @foreach($colors as $color)
                                <option value="{{$color->id}}">{{$color->title}}</option>
                            @endforeach
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
