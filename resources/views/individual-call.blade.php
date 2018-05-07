@extends('layouts.app')
@section('styles')
    <link href="{{ asset('dist/css/questions.css')}}" rel="stylesheet">
@endsection

@section('content')
    <div id="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <ol class="breadcrumb">
                        <li><a href="">Недвижимость</a></li>
                        <li class="active">Жилищное право</li>
                    </ol>

                    <div class="question">
                        <h4 class="title">На что можно рассчитывать при сносе ветхого жилья (социальный найм) в случае
                            расселения застройщиком</h4>
                        <p class="description">Добрый день. Наш дом попал в программу адресного расселения ветхого
                            жилья. Квартира находится в очень хорошем районе, почти центр города.в частично
                            благоустроенном двухквартирном доме (только центр. отопление), 36кв. м., 3 комнаты, по
                            договору. Добрый день. Наш дом попал в программу адресного расселения ветхого жилья.</p>
                        <p>
                            <span class="date">10 Июля 2017, 06:38, </span>
                            <span class="number"> вопрос №1691463</span>
                            <span class="author">Бредун Светлана, г. Хабаровск </span>
                        </p>
                        <hr>
                        <p>
                            <span class="category">Категория: <a href="#">Жилищное право</a></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-9">
                    <form>
                        <div class="panel panel-danger col-md-10" style="padding-top: 10px;">
                            @if ($errors->has('text'))
                                <span class="help-block">
                                            <strong>{{ $errors->first('text') }}</strong>
                                        </span>
                            @endif
                            <div class="col-md-2" style="float:right; margin: 10px;">
                                <button type="submit" class="btn btn-success">Make a call</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')

@endsection
