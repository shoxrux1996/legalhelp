@extends('layouts.app')
@section('styles')
    <link href="{{ asset('dist/css/services.css')}}" rel="stylesheet">
    <link href="{{ asset('dist/css/become-brilliant.css')}}" rel="stylesheet">
@endsection

@section('content')

<!-- Content -->
<div id="wrapper">
    <div class="container" id="order-call">
        <!-- Info -->
        <div class="row background-white padding-30">
            <div class="col-sm-8">
                <h4><b>Legal advice by phone</b></h4>
                <p>On Legal Help you can get legal assistance by phone from any region of Uzbekistan. To do this, leave a request or call a single hotline.</p>
                <p>You can get free basic advice only if there are free lawyers on the line. As part of a paid legal advice, a complete analysis of your situation is guaranteed: the lawyer will put everything in order and answer additional questions.</p>
            </div>
        </div>
        <!-- /Info -->
        <form method="post" action="#" enctype="multipart/form-data">
       {{-- <!-- Consulting type -->
            <div class="row price-table">
                <h4><b>Тип консультации</b></h4>
                <div class='wrapper'>
                    <div class='package brilliant col-sm-offset-3 col-sm-3'>
                        <input type="radio" name="payment_type" id="cost-price" checked onclick="unhide()" value="paid" />
                        <div class='name'>
                            <label for="cost-price">
                                Платная
                            </label>
                        </div>
                        <hr>
                        <ul>
                            <li>
                                Гарантия звонка в течение 30 минут
                            </li>
                            <li>
                                Подробный разбор вашей ситуации
                            </li>
                            <li>
                                Гарантия возврата денег — 30 дней
                            </li>
                            <li>
                                Первый ответ в течение 15 минут
                            </li>
                        </ul>
                    </div>
                    <div class='package col-sm-3'>
                        <input type="radio" name="payment_type" id="free-price" onclick="hide()" value="free" />
                        <div class='name'>
                            <label for="free-price">
                                Бесплатная
                            </label>
                        </div>
                        <hr>
                        <ul>
                            <li>
                                Базовая консультация при наличии свободных юристов на линии
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        <!-- /Consulting type -->--}}
        
        {{csrf_field()}}
        <!-- Consulting form -->
            <div class="row ask-form">
                <h4>Ваш вопрос</h4>
                <div class="col-sm-7">
                    <div class="form-group{{$errors->has('title') ? ' has-error' : '' }}">
                        <label for="question">Subject of the question*</label>
                            @if ($errors->has('title'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                            @endif
                        <input type="text" class="form-control general-input" id="question" name="title" />
                    </div>
                    <div class="form-group{{$errors->has('description') ? ' has-error' : '' }}">
                        <label for="description">Detailed description</label>
                            @if ($errors->has('description'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                            @endif
                        <textarea class="form-control general-input" rows="15" id="description" name="description"></textarea>
                    </div>
                    {{--<div class="form-group">
                        <label>Если нужно, прикрепите файл</label>
                        <label class="btn btn-default general-input">
                            Выбрать файл <input type="file" name="files[]" multiple hidden>
                        </label>
                        @if ($errors->any() && !($errors->has('description') || $errors->has('title')))
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>   --}}
                </div>
                {{--<div class="col-sm-5">
                    <h4>Форма заявки на консультацию по телефону</h4>
                    <p>Чтобы получить качественную консультацию по телефону, мы просим вас подготовиться к разговору с юристом и правильно заполнить форму:</p>
                    <ul>
                        <li>Четко сформулируйте вопрос, который вас беспокоит;</li>
                        <li>Подробно и по пунктам опишите возникшую у вас ситуацию;</li>
                        <li>Сообщите все ключевые моменты ситуации и по возможности приложите сопутствующие документы.</li>
                    </ul>
                </div>--}}
            </div>
        <!-- /Consulting form -->

        {{--<!-- Price table -->
            <div class="row price-table" id="price-list">
                <div class='wrapper' id="phone-call-price">
                    <div class='package col-sm-4'>

                        <input type="radio" name="price" id="easy" value="easy" />
                        <div class='name'>
                            <label for="easy">Легкая</label>
                        </div>
                        <div class='price'>1000 сум</div>
                        <hr>
                        <ul>
                            Несложная ситуация, при которой юрист даст однозначно верный ответ за короткое время. Примерное время звонка — до 15 минут.
                        </ul>
                    </div>
                    <div class='package brilliant col-sm-4'>
                        <input type="radio" name="price" id="general" checked value="general" />
                        <div class='name'>
                            <label for="general">Обычная</label>
                        </div>
                        <div class='price'>от 5000 сум</div>
                        <hr>
                        <ul>
                            Ситуация, предполагающая уточнения и более детальное погружение в проблему. Примерное время разговора — до 30 минут.
                        </ul>
                    </div>
                    <div class='package col-sm-4'>
                        <input type="radio" name="price" id="vip" value="vip" />
                        <div class='name'>
                            <label for="vip">VIP</label>
                        </div>
                        <div class='price'>10000 сум</div>
                        <hr>
                        <ul>
                            Сложная ситуация, допускающая противоречивость и требующая изучения дополнительных документов и практик. Примерное время разговора — до 1 часа.
                        </ul>
                    </div>
                </div>
                <button type="submit" class="btn btn-default blue-button btn-lg">Продолжить</button>
            </div>
        <!-- Price table -->--}}
        </form>
    </div>
</div>
<!-- /Content -->


@endsection
