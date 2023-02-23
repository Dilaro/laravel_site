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
                            <a href="#underTitle" class="nav-link">Текст</a>
                            <a href="#video" class="nav-link">Видео</a>
                        </div>
                    </div>
                    <div class="row layout-top-spacing">
                        <div id="title" class="col-lg-12 layout-spacing">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Заголовок (отобразиться поверх видео)</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="row">
                                    <div class="col-lg-6 col-12 mx-auto">
                                        <form method="post">
                                            <div class="form-group form-align">
                                                <p>Введите ваш текст ниже.</p>
                                                <label for="t-text" class="sr-only">Text</label>
                                                <input id="t-text" type="text" name="txt" placeholder="Какой-то текст..." class="form-control" required>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="underTitle" class="col-lg-12 layout-spacing">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Текст (отобразиться под заголовком)</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="row">
                                    <div class="col-lg-6 col-12 mx-auto">
                                        <form method="post">
                                            <div class="form-group form-align">
                                                <p>Введите ваш текст ниже.</p>
                                                <label for="t-text" class="sr-only">Text</label>
                                                <input id="t-text" type="text" name="txt" placeholder="Какой-то текст..." class="form-control" required>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="video" class="col-lg-12 layout-spacing">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Загрузка видео</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="custom-file-container" data-upload-id="myFirstImage">
                                    <label>Загрузить (одно видео) <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                    <label class="custom-file-container__custom-file" >
                                        <input type="file" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
                                        <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                        <span class="custom-file-container__custom-file__custom-file-control">Выберите файл...
                                        <span class="custom-file-container__custom-file__custom-file-control__button">Смотреть</span>
                                        </span>
                                    </label>
                                    <input type="submit" name="txt" class="mt-4 btn btn-primary">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  END CONTENT AREA  -->
    </div>
@endsection
