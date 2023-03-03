@extends('layouts.AdminDashboard.app')
@section('content')
    <div class="main-container" id="container">
        <div class="overlay"></div>
        <div class="cs-overlay"></div>
        <div class="search-overlay"></div>
        <div id="content" class="main-content">
            <div class="container">
                <div class="container">
                    <div class="row layout-top-spacing">
                        <div class="col-lg-12 layout-spacing">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Редактирование заголовка в слайдере</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="row">
                                    <div class="col-lg-6 col-12 mx-auto">
                                        <form method="post" name="123" enctype="multipart/form-data"
                                              action="{{ route('slideridup', $data->id) }}">
                                            @csrf
                                            <div class="form-group form-align">
                                                <p>Введите ваш текст ниже.</p>
                                                <p>Он отобразится в слайдере.</p>
                                                <label for="t-text" class="sr-only">Text</label>
                                                <input id="t-text" type="text" name="text_up" value="{{$data->text_up}}"
                                                       placeholder="Какой-то текст..." class="form-control" required>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="underTitle" class="col-lg-12 layout-spacing">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Редактирование текста в слайдере</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="row">
                                    <div class="col-lg-6 col-12 mx-auto">
                                        <div class="form-group form-align">
                                            <p>Введите ваш текст ниже.</p>
                                            <p>Он отобразится в слайдере.</p>
                                            <label for="t-text" class="sr-only">Text</label>
                                            <input id="t-text" type="text" name="text_down" value="{{$data->text_down}}"
                                                   placeholder="Какой-то текст..." class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="link" class="col-lg-12 layout-spacing">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Редактирование ссылки</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="row">
                                    <div class="col-lg-6 col-12 mx-auto">
                                        <div class="form-group">
                                            <label for="url-text" class="sr-only">Url</label>
                                            <input id="url-text" name="link" placeholder="https://example.com"
                                                   value="{{$data->link}}" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="photo" class="col-lg-12 layout-spacing">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Изменить фото</h4>
                                    </div>
                                    <img width="250" height="200" src="{{ Vite::asset('public/' . $data->image) }}">
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="custom-file-container" data-upload-id="myFirstImage">
                                </div>
                                <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                            <div>
                                {{--                                    <label>Загрузить (одно фото) <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>--}}
                                {{--                                    <label class="custom-file-container__custom-file" >--}}
                                {{--                                        <input type="file" class="custom-file-container__custom-file__custom-file-input" name="image" >--}}
                                {{--                                        <input type="hidden" name="image" value="10485760" />--}}
                                {{--                                        <span class="custom-file-container__custom-file__custom-file-control">Выберите файл...--}}
                                {{--                                        <span class="custom-file-container__custom-file__custom-file-control__button">Смотреть</span>--}}
                                {{--                                        </span>--}}
                                {{--                                    </label>--}}
                                <a href="{{route('slideridup', $data->id)}}">
                                    <input type="submit" name="button" class="mt-4 btn btn-primary">
                                </a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  END CONTENT AREA  -->

@endsection
