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
                            <a href="#diagram1" class="nav-link">Диаграмма 1</a>
                            <a href="#diagram2" class="nav-link">Диаграмма 2</a>
                            <a href="#diagram3" class="nav-link">Диаграмма 3</a>
                            <a href="#diagram4" class="nav-link">Диаграмма 4</a>
                            <a href="#text" class="nav-link">Текст под диаграммами</a>
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
                                            <h4>Подзаголовок</h4>
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
                            <div id="diagram1" class="col-lg-12 layout-spacing">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Текст диаграммы 1</h4>
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
                            <div id="diagram2" class="col-lg-12 layout-spacing">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Текст диаграммы 2</h4>
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
                            <div id="diagram3" class="col-lg-12 layout-spacing">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Текст диаграммы 3</h4>
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
                            <div id="diagram4" class="col-lg-12 layout-spacing">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Текст диаграммы 4</h4>
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
                            <div id="text" class="col-lg-12 layout-spacing">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Текст под диаграммами</h4>
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
