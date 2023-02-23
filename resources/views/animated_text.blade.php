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
                            <a href="#underTitle" class="nav-link">Анимированный текст</a>
                            <a href="#miniTitle1" class="nav-link">Мини-заголовок 1</a>
                            <a href="#text1" class="nav-link">Текст 1</a>
                            <a href="#miniTitle2" class="nav-link">Мини-заголовок 2</a>
                            <a href="#text2" class="nav-link">Текст 2</a>
                        </div>
                    </div>
                <div class="row layout-top-spacing">
                    <div class="widget-content widget-content-area">
                        <div id="title" class="col-lg-12 layout-spacing">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Заголовок</h4>
                                    </div>
                                </div>
                            </div>
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
                        <div id="underTitle" class="col-lg-12 layout-spacing">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Анимированный текст</h4>
                                    </div>
                                </div>
                            </div>
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
                        <div id="miniTitle1" class="col-lg-12 layout-spacing">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Мини-заголовок 1</h4>
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
                        <div id="text1" class="col-lg-12 layout-spacing">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Текст мини-заголовка 1</h4>
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
                        <div id="miniTitle2" class="col-lg-12 layout-spacing">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Мини-заголовок 2</h4>
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
                        <div id="text2" class="col-lg-12 layout-spacing">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Текст мини-заголовка 2</h4>
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
                                                <input type="submit" name="txt" class="mt-4 btn btn-primary">
                                            </div>
                                        </form>
                                    </div>
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
