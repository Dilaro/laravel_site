@extends('layouts.AdminDashboard.app')
@section('content')
    <div class="main-container" id="container">
        <div class="overlay"></div>
        <div class="cs-overlay"></div>
        <div class="search-overlay"></div>
        <div id="content" class="main-content">
            <div class="container">
                <div class="container">
                    <div id="navSection" data-spy="affix" class="nav sidenav">
                        <div class="sidenav-content">
                            <a href="#title" class="nav-link">Заголовок</a>
                            <a href="#underTitle" class="nav-link">Нижняя надпись</a>
                            <a href="#link" class="nav-link">Ссылка</a>
                            <a href="#photo" class="nav-link">Фото</a>
                        </div>
                    </div>
                    <div class="row layout-top-spacing">
{{--                        <div class="statbox widget box box-shadow">--}}
                        <div id="title" class="col-lg-12 layout-spacing">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Заголовок в слайдере</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="row">
                                    <div class="col-lg-6 col-12 mx-auto">
                                        <form method="post" name="123" enctype="multipart/form-data" action="{{ route('sliders.abc') }}">
                                            @csrf
                                            <div class="form-group form-align">
                                                <p>Введите ваш текст ниже.</p>
                                                <p>Он отобразится в слайдере.</p>
                                                <label for="t-text" class="sr-only">Text</label>
                                                <input id="t-text" type="text" name="text_up" placeholder="Какой-то текст..." class="form-control" required>
                                            </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="underTitle" class="col-lg-12 layout-spacing">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Текст в слайдере</h4>
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
                                            <input id="t-text" type="text" name="text_down" placeholder="Какой-то текст..." class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="link" class="col-lg-12 layout-spacing">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Cсылка</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="row">
                                    <div class="col-lg-6 col-12 mx-auto">
                                        <div class="form-group">
                                            <label for="url-text" class="sr-only">Url</label>
                                            <input id="url-text" name="link" placeholder="https://example.com" class="form-control" required >
                                            <input type="submit" form="123" name="link" class="mt-4 btn btn-primary">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="photo" class="col-lg-12 layout-spacing">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Загрузка фото в слайдер</h4>
                                    </div>
                                </div>
                            </div>
                                <div class="widget-content widget-content-area">
                                    <div class="custom-file-container" data-upload-id="myFirstImage">
                                    </div>
                                    <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                                </div>
                                <div>
                                    <label>Загрузить (одно фото) <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                    <label class="custom-file-container__custom-file" >
{{--                                        <input type="file" class="custom-file-container__custom-file__custom-file-input" name="image" >--}}
{{--                                        <input type="hidden" name="image" value="10485760" />--}}
{{--                                        <span class="custom-file-container__custom-file__custom-file-control">Выберите файл...--}}
{{--                                        <span class="custom-file-container__custom-file__custom-file-control__button">Смотреть</span>--}}
{{--                                        </span>--}}
                                    </label>
                                    <input type="submit" name="button" class="mt-4 btn btn-primary">
                                    <button type="submit" name="button" class="mt-4 btn btn-primary">Отправить</button>
                                    </form>
                                </div>
                            </div>
                        </div>
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    <!--  END CONTENT AREA  -->
    </div>
@endsection
