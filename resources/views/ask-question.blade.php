@extends('layouts.app')
@section('styles')
    <link href="{{ asset('dist/css/services.css')}}" rel="stylesheet">
    <link href="{{ asset('dist/css/become-brilliant.css')}}" rel="stylesheet">
@endsection

@section('content')


    <!-- Content -->
    <div id="wrapper">
        <div class="container">

            <h3><b>Задайте свой вопрос юристу</b></h3>

            <!-- How does it work ? -->
            <div class="row" id="how-it-works">
                <div class="col-sm-3 text-center">
                    <h3 class="color-dark-blue">Как работает Yuridik.uz?</h3>
                </div>
                <div class="col-sm-3 text-primary">
                    <h5 class="text-primary"><span class="label label-primary">1</span> Задайте вопрос
                    </h5>
                    <p>Мы получаем более 1500 вопросов каждый день. Задайте свой!</p>
                </div>
                <div class="col-sm-3 text-info">
                    <h5 class="text-info"><span class="label label-info">2</span> Получите ответы</h5>
                    <p>На вопросы круглосуточно отвечают юристы со всей Узбекистана. Среднее время ответа — 15
                        минут.</p>
                </div>
                <div class="col-sm-3 text-success">
                    <h5 class="text-success"><span
                                class="label label-success">3</span> Проблема решена!</h5>
                    <p>95,4% клиентов остаются полностью довольны ответами и рекомендуют нас друзьям.</p>
                </div>
            </div>
            <!-- /How does it work? -->

            <form method="post" action="{{ route('ask.question')}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <!-- Question submit form -->
                <div class="row ask-form">
                    <h4>Задать вопрос</h4>
                    <div class="col-sm-7">
                        <div class="form-group{{$errors->has('category') ? ' has-error' : '' }} ">
                            <label for="category">@lang('question.Категория права')</label>
                            @if ($errors->has('category'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('category') }}</strong>
                                </span>
                            @endif
                            <select class="form-control general-input" name="category">
                                <option>New One</option>
                            </select>
                            {{--{{Form::select('category', $categories, old('category'), ['class'=>'form-control general-input', 'placeholder'=>''])}}--}}
                        </div>
                        <div class="form-group{{$errors->has('title') ? ' has-error' : '' }} ">
                            <label for="question">Ваш вопрос*</label>
                            @if ($errors->has('title'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                            @endif
                            <input type="text" class="form-control general-input" id="question" value="{{old('title')}}"
                                   placeholder="Как подать в суд, если неизвестен адрес ответчика?"
                                   name="title"/>
                        </div>
                        <div class="form-group{{$errors->has('description') ? ' has-error' : '' }}">
                            <label for="description">Подробное описание ситуации*</label>
                            @if ($errors->has('description'))
                                <span class="help-block">
                                <strong>{{ $errors->first('description') }}</strong>
                            </span>
                            @endif
                            <textarea class="form-control general-input" rows="15" id="description"
                                      name="description">{{old('description')}}</textarea>
                        </div>
                        <button type="submit" class="btn btn-default blue-button btn-lg">Опубликовать вопрос</button>
                        {{--<div class="form-group">
                            <label>@lang('question.Если нужно, прикрепите файл')</label>
                            <label class="btn btn-default general-input">
                                @lang('question.Выбрать файл') <input type="file" name="files[]" multiple hidden>
                            </label>
                            @if ($errors->any() && !($errors->has('description') || $errors->has('title') || $errors->has('name') || $errors->has('email') || $errors->has('password') || $errors->has('wrong-attempt') ))
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>--}}
                    </div>
                </div>
                <!-- /Question submit form -->


                {{--    <!-- Price table -->
                    <div class="row price-table">
                        <div class='wrapper'>
                            <div class='package col-sm-4'>

                                <input type="radio" name="type" id="standart-price" value="1"/>
                                <div class='name'>
                                    <label for="standart-price">@lang('question.Стандартная')</label>
                                </div>
                                <div class='price'>5000 @lang('question.сум')</div>
                                <hr>
                                <ul>
                                    <li>
                                        @lang('question.Моментальная публикация вопроса')
                                    </li>
                                    <li>
                                        @lang('question.Гарантия обязательного базового ответа юриста')
                                    </li>
                                </ul>
                            </div>
                            <div class='package brilliant col-sm-4'>
                                <input type="radio" name="type" id="vip-price" value="2"/>
                                <div class='name'>
                                    <label for="vip-price">@lang('question.VIP-консультация')</label>
                                </div>
                                <div class='price'>@lang('question.от') 25000 @lang('question.сум')</div>
                                <span>@lang('question.Стоимость вы устанавливаете сами')</span>
                                <hr>
                                <label>Savolni bekitish</label>
                                <input type="checkbox" value="1" name="disable">
                                <ul>
                                    <li>
                                        @lang('question.Моментальная публикация вопроса')
                                    </li>
                                    <li>
                                        @lang('question.Гарантия полного и подробного разбора ситуации')
                                    </li>
                                    <li>
                                        @lang('question.Мнения нескольких юристов')
                                    </li>
                                    <li>
                                        @lang('question.Первый ответ в течение 15 минут')
                                    </li>
                                    <li>
                                        @lang('question.Неограниченное количество дополнительных вопросов, уточнений')
                                    </li>
                                    <li>
                                        @lang('question.Возможность скрыть вопрос от других пользователей и поисковых систем')
                                    </li>
                                </ul>
                            </div>
                            <div class='package col-sm-4'>
                                <input type="radio" name="type" id="free-price" value="0" checked/>
                                <div class='name'>
                                    <label for="free-price">@lang('question.Бесплатная')</label>
                                </div>
                                <div class='price'>0 @lang('question.сум')</div>
                                <hr>
                                <ul>
                                    <li>
                                        @lang('question.Публикация вопроса в порядке очереди')
                                    </li>
                                    <li>
                                        @lang('question.Гарантии ответа нет')
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Modal for paid questions-->
                        <div id="paid-questions-modal" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">@lang('index.soon')!!!</h4>
                                    </div>
                                    <div class="modal-body">
                                        <img src="{{asset('dist/images/under-development.png')}}" alt="Under development"/>
                                        <h4>Функция "платные вопросы" в процессе разработки</h4>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default btn-dark-blue"
                                                data-dismiss="modal">@lang('index.close')</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- /Modal for paid questions-->
                    </div>
                    <!-- /Price table -->--}}
            </form>
        </div>
    </div>
    <!-- /Content -->
@endsection
@section('scripts')

@endsection

