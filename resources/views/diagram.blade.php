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
                                        <form method="post" enctype="multipart/form-data"
                                              action="{{ route('diagrams.addData', 'diagramid') }}">
                                            @csrf
                                            <div class="form-group form-align">
                                                <p>Введите ваш текст ниже.</p>
                                                <label for="t-text" class="sr-only">Text</label>
                                                <input id="t-text" type="text" name="title"
                                                       placeholder="Какой-то текст..." class="form-control" required>
                                            </div>
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
                                        <div class="form-group form-align">
                                            <p>Введите ваш текст ниже.</p>
                                            <label for="t-text" class="sr-only">Text</label>
                                            <input id="t-text" type="text" name="subtitle"
                                                   placeholder="Какой-то текст..." class="form-control" required>
                                        </div>
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
                                            <div class="form-group form-align">
                                                <p>Введите ваш текст ниже.</p>
                                                <label for="t-text" class="sr-only">Text</label>
                                                <input id="t-text" type="text" name="text_first_diagram"
                                                       placeholder="Какой-то текст..." class="form-control" required>
                                            </div>
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
                                            <div class="form-group form-align">
                                                <p>Введите ваш текст ниже.</p>
                                                <label for="t-text" class="sr-only">Text</label>
                                                <input id="t-text" type="text" name="text_second_diagram"
                                                       placeholder="Какой-то текст..." class="form-control" required>
                                            </div>
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
                                            <div class="form-group form-align">
                                                <p>Введите ваш текст ниже.</p>
                                                <label for="t-text" class="sr-only">Text</label>
                                                <input id="t-text" type="text" name="text_third_diagram"
                                                       placeholder="Какой-то текст..." class="form-control" required>
                                            </div>
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
                                            <div class="form-group form-align">
                                                <p>Введите ваш текст ниже.</p>
                                                <label for="t-text" class="sr-only">Text</label>
                                                <input id="t-text" type="text" name="text_fourth_diagram"
                                                       placeholder="Какой-то текст..." class="form-control"
                                                       required>
                                            </div>
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
                                            <div class="form-group form-align">
                                                <p>Введите ваш текст ниже.</p>
                                                <label for="t-text" class="sr-only">Text</label>
                                                <input id="t-text" type="text" name="text_under_diagrams"
                                                       placeholder="Какой-то текст..." class="form-control"
                                                       required>
                                                <input type="submit" name="submit" class="mt-4 btn btn-primary">
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
        <div class="container mt-5 ml-4">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped mb-4">
                    <thead>
                    <tr>
                        <th>Заголовок</th>
                        <th>Подзаголовок</th>
                        <th>Текст диаграммы 1</th>
                        <th>Текст диаграммы 2</th>
                        <th>Текст диаграммы 3</th>
                        <th>Текст диаграммы 4</th>
                        <th>Текст под диаграммами</th>
                        <th>Редактировать</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $el)
                        <tr>
                            <td>{{ $el->title}}</td>
                            <td>{{ $el->subtitle}}</td>
                            <td>{{ $el->text_first_diagram}}</td>
                            <td>{{ $el->text_second_diagram}}</td>
                            <td>{{ $el->text_third_diagram}}</td>
                            <td>{{ $el->text_left_subtitle}}</td>
                            <td>{{ $el->text_fourth_diagram}}</td>
                            <td>{{ $el->text_under_diagrams}}</td>
                            <td>
                                <a href="{{route('diagramid', $el->id)}}">
                                    <button class="mt-4 mb-4 btn btn-primary">Редактировать</button>
                                </a>
                                <a href="{{route('diagramiddel', $el->id)}}">
                                    <button class="mt-4 mb-4 btn btn-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-trash-2 icon">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path
                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                        </svg>
                                    </button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
