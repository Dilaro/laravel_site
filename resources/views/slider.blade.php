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
                                        <form method="post" name="123" enctype="multipart/form-data"
                                              action="{{ route('sliders.addData', 'sliderid') }}">
                                            @csrf
                                            <div class="form-group form-align">
                                                <p>Введите ваш текст ниже.</p>
                                                <p>Он отобразится в слайдере.</p>
                                                <label for="t-text" class="sr-only">Text</label>
                                                <input id="t-text" type="text" name="text_up"
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
                                            <input id="t-text" type="text" name="text_down"
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
                                        <h4>Cсылка</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="row">
                                    <div class="col-lg-6 col-12 mx-auto">
                                        <div class="form-group">
                                            <label for="url-text" class="sr-only">Url</label>
                                            <input id="url-text" name="link" placeholder="https://example.com"
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
                                        <h4>Загрузка фото в слайдер</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="row">
                                    <div class="col-lg-6 col-12 mx-auto">
                                        <div class="form-group form-align">
                                            <div class="custom-file-container" data-upload-id="myFirstImage">
                                            </div>
                                            <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                                            {{--                                    <label>Загрузить (одно фото) <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>--}}
                                            {{--                                    <label class="custom-file-container__custom-file" >--}}
                                            {{--                                        <input type="file" class="custom-file-container__custom-file__custom-file-input" name="image" >--}}
                                            {{--                                        <input type="hidden" name="image" value="10485760" />--}}
                                            {{--                                        <span class="custom-file-container__custom-file__custom-file-control">Выберите файл...--}}
                                            {{--                                        <span class="custom-file-container__custom-file__custom-file-control__button">Смотреть</span>--}}
                                            {{--                                        </span>--}}
                                            {{--                                    </label>--}}
                                            <input type="submit" name="button" class="mt-4 btn btn-primary">
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

        <!--  END CONTENT AREA  -->


        <div class="container mt-5 ml-4">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped mb-4">
                    <thead>
                    <tr>
                        <th>Заголовок</th>
                        <th>Подзаголовок</th>
                        <th>Ссылка</th>
                        <th class="text-center">Превью картинки</th>
                        <th>Редактировать</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $el)
                        <tr>
                            <td>{{ $el->text_up }}</td>
                            <td>{{ $el->text_down }}</td>
                            <td>{{ $el->link }}</td>
                            <td><img width="150" height="100" src="{{ Vite::asset('public/' . $el->image) }}"
                                     alt="photo db"></td>
                            <td>
                                <a href="{{route('sliderid', $el->id)}}">
                                    <button class="mt-4 mb-4 btn btn-primary">
                                        Редактировать
                                    </button>
                                </a>
                                <a href="{{route('slideriddel', $el->id)}}">
                                    <button class="mt-4 mb-4 btn btn-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             width="24" height="24" viewBox="0 0 24 24"
                                             fill="none" stroke="currentColor"
                                             stroke-width="2" stroke-linecap="round"
                                             stroke-linejoin="round"
                                             class="feather feather-trash-2 icon">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path
                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                            <line x1="10" y1="11" x2="10"
                                                  y2="17"></line>
                                            <line x1="14" y1="11" x2="14"
                                                  y2="17"></line>
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
