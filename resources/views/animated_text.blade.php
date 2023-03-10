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
                            <a href="#beforeText" class="nav-link">Текст перед анимированным</a>
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
                                        <form method="post" enctype="multipart/form-data"
                                              action="{{ route('animations.addData', 'animatedid') }}">
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
                            <div id="beforeText" class="col-lg-12 layout-spacing">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Текст перед анимированным</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-12 mx-auto">
                                        <div class="form-group form-align">
                                            <p>Введите ваш текст ниже.</p>
                                            <label for="t-text" class="sr-only">Text</label>
                                            <input id="t-text" type="text" name="text_before"
                                                   placeholder="Какой-то текст..."
                                                   class="form-control" required>
                                        </div>
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
                                        <div class="form-group form-align">
                                            <p>Введите ваш текст ниже.</p>
                                            <label for="t-text" class="sr-only">Text</label>
                                            <input id="t-text" type="text" name="text_anim"
                                                   placeholder="Какой-то текст..."
                                                   class="form-control" required>
                                        </div>
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
                                            <div class="form-group form-align">
                                                <p>Введите ваш текст ниже.</p>
                                                <label for="t-text" class="sr-only">Text</label>
                                                <input id="t-text" type="text" name="left_subtitle"
                                                       placeholder="Какой-то текст..." class="form-control" required>
                                            </div>
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
                                            <div class="form-group form-align">
                                                <p>Введите ваш текст ниже.</p>
                                                <label for="t-text" class="sr-only">Text</label>
                                                <input id="t-text" type="text" name="text_left_subtitle"
                                                       placeholder="Какой-то текст..." class="form-control" required>
                                            </div>
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
                                            <div class="form-group form-align">
                                                <p>Введите ваш текст ниже.</p>
                                                <label for="t-text" class="sr-only">Text</label>
                                                <input id="t-text" type="text" name="right_subtitle"
                                                       placeholder="Какой-то текст..." class="form-control" required>
                                            </div>
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
                                            <div class="form-group form-align">
                                                <p>Введите ваш текст ниже.</p>
                                                <label for="t-text" class="sr-only">Text</label>
                                                <input id="t-text" type="text" name="text_right_subtitle"
                                                       placeholder="Какой-то текст..." class="form-control" required>
                                                <input type="submit" name="button" class="mt-4 btn btn-primary">
                                            </div>
                                        </div>
                                        </form>
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
                        <th>Текст перед анимированным</th>
                        <th>Анимированный текст</th>
                        <th>Левый подзаголовок</th>
                        <th>Правый подзаголовок</th>
                        <th>Левый текст</th>
                        <th>Правый Текст</th>
                        <th>Редактировать</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $el)
                        <tr>
                            <td>{{ $el->title}}</td>
                            <td>{{ $el->text_before}}</td>
                            <td>{{ $el->text_anim}}</td>
                            <td>{{ $el->left_subtitle}}</td>
                            <td>{{ $el->right_subtitle}}</td>
                            <td>{{ $el->text_left_subtitle}}</td>
                            <td>{{ $el->text_right_subtitle}}</td>
                            <td>
                                <a href="{{route('animatedid', $el->id)}}">
                                    <button class="mt-4 mb-4 btn btn-primary">Редактировать</button>
                                </a>
                                <a href="{{route('animatediddel', $el->id)}}">
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
