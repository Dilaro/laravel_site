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
                            <a href="#underTitle" class="nav-link">Подзаголовок</a>
                            <a href="#link" class="nav-link">Текст</a>
                            <a href="#pieChart" class="nav-link">Круговая диаграмма</a>
                            <a href="#photo" class="nav-link">Фото</a>
                        </div>
                    </div>
                    <div class="row layout-top-spacing">
                        <div id="title" class="col-lg-12 layout-spacing">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Редактирование заголовка</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="row">
                                    <div class="col-lg-6 col-12 mx-auto">
                                        <form method="post" name="123" enctype="multipart/form-data"
                                              action="{{ route('companyidup', $data->id) }}">
                                            @csrf
                                            <div class="form-group form-align">
                                                <p>Введите ваш текст ниже.</p>
                                                <p>Он отобразится в слайдере.</p>
                                                <label for="t-text" class="sr-only">Text</label>
                                                <input id="t-text" type="text" name="title" value="{{$data->title}}"
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
                                        <h4>Редактирование подзаголовка</h4>
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
                                            <input id="t-text" type="text" name="text_down" value="route{{$data->text_down}}"
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
                                        <h4>Редактирование текста</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="row">
                                    <div class="col-lg-6 col-12 mx-auto">
                                        <div class="form-group">
                                            <label for="t-text" class="sr-only">Text</label>
                                            <input id="t-text" name="text" value="{{$data->text}}" placeholder="Какой-то текст..."
                                                   class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="pieChart" class="col-lg-12 layout-spacing">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Редактирование круговой диаграммы</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="row">
                                    <div class="col-lg-6 col-12 mx-auto">
                                        <div class="form-group">
                                            <label for="t-text" class="sr-only">Text</label>
                                            <input id="t-text" name="pie_chart" value="{{$data->pie_chart}}" placeholder="Какой-то текст..."
                                                   class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="photo" class="col-lg-12 layout-spacing">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Редактирование картинки</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="row">
                                    <div class="col-lg-6 col-12 mx-auto">
                                        <div class="form-group form-align">
                                            <div class="custom-file-container" data-upload-id="myFirstImage">
                                                <label>Загрузить (одно фото) <a href="javascript:void(0)"
                                                                                class="custom-file-container__image-clear"
                                                                                title="Clear Image">x</a></label>
                                                <label class="custom-file-container__custom-file">
                                                    <input type="file"
                                                           class="custom-file-container__custom-file__custom-file-input"
                                                           name="image">
                                                    <input type="hidden" name="image" value="10485760"/>
                                                    <span class="custom-file-container__custom-file__custom-file-control">Выберите файл...
                                                    <span
                                                        class="custom-file-container__custom-file__custom-file-control__button">Смотреть</span>
                                                    </span>
                                                </label>
                                                <a href="{{route('companyidup', $data->id)}}">
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
                </div>
            </div>
        </div>
    </div>
@endsection
