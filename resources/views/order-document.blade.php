@extends('layouts.app')
@section('styles')
    <link href="{{ asset('dist/css/services.css')}}" rel="stylesheet">
@endsection

@section('content')

<!-- Content -->
<div id="wrapper">
    <div class="container" id="order-document">
        <!-- Info -->
        <div class="row background-white padding-30 text-center">
            <h3>Preparation of documents</h3>
            <h6>Do you need to make a claim or claim? Prepare an agreement? Register an LLC?
                                 Leave an application on the site and receive offers from lawyers from all over Uzbekistan. Is free!</h6>
            <h4><span class="label label-primary">1</span>Fill in the application form <i class="fa fa-arrow-circle-o-right"></i> <span class="label label-info">2</span> Get suggestions<i class="fa fa-arrow-circle-o-right"></i> <span class="label label-success">3</span> Select a lawyer</h4>
        </div>
        <!-- /Info -->

        <!-- Document ask form -->
        <div class="row ask-form">
            <h4>Ваш вопрос</h4>
            <div class="col-sm-7">
                <form action="#" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                    <div class="form-group">
                        <label for="document-type">Тип документа</label>
                        <select class="form-control general-input">
                            <option>sdsada</option>
                            <option>odaosdosao</option>
                        </select>
                    </div>
                    <div class="form-group{{$errors->has('title') ? ' has-error' : '' }}">
                        <label for="question">Мне нужно</label>
                            @if ($errors->has('title'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                            @endif
                        <input type="text" class="form-control general-input" id="question" name="title" />
                    </div>
                    <div class="form-group{{$errors->has('description') ? ' has-error' : '' }}">
                        <label for="description">Подробное описание</label>
                            @if ($errors->has('description'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                            @endif
                        <textarea class="form-control general-input" rows="15" name="description" placeholder="Чем подробнее вы опишете требования к документу,тем точнее юристы смогут оценить его стоимость."></textarea>
                    </div>
                    <div class="form-group">
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
                    </div>
                    <div class="form-group">
                        <label>Стоимость документа</label>
                        <p>
                            <input type="radio" name="payment_type" value="later" id="cost-1" checked onclick="disable()" />
                            <label for="cost-1">По договоренности с юристом</label>
                        </p>
                        <p>
                            <input type="radio" name="payment_type" value="about" id="cost-2" onclick="enable()"/>
                            <label for="cost-2">Я планирую заплатить</label>
                            <input type="number" name="cost" class="general-input" id="cost" disabled /> сум
                        </p>
                    </div>

                    <button type="submit" class="btn btn-default blue-button pull-right">Готово</button>
                </form>
            </div>
            <div class="col-sm-5">
                <h4>3 причины оставить заявку</h4>
                <ul class="list-unstyled">
                    <li>
                        <h4><i class="fa fa-check-square-o text-success"></i> Это бесплатно</h4>
                        <p>Вы оставляете заявку абсолютно бесплатно и ничего не теряете, если никто из юристов вам не подойдет.</p>
                    </li>
                    <li>
                        <h4><i class="fa fa-check-square-o text-success"></i> У вас появится выбор</h4>
                        <p>Вы сравниваете предложения
                            разных юристов и выбираете самые
                            выгодные условия.</p>
                    </li>
                    <li>
                        <h4><i class="fa fa-check-square-o text-success"></i> Это бесплатно</h4>
                        <p>Если вы останетесь недовольны
                            результатом, напишите нам, и мы
                            вернем вам деньги!.</p>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /Document ask form -->
    </div>
</div>
<!-- /Content -->


@endsection
@section('scripts')

@endsection