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
                <h3>Documents</h3>
                <!-- Comment news style -->

                <div class="col-sm-9 answer">
                    <div class="answer-footer">
                                    <span class="pull-right answered-time">
                                        2018-5-5
                                    </span>
                    </div>
                    <div class="answer-header">
                        <h4 class="lawyer-name">Shokhrukh Shomakhmudov</h4>
                        <h6 class="lawyer-type">lawyer</h6>
                    </div>
                    <div class="clearfix">
                    </div>
                    <div>
                        <hr>
                    </div>
                    <div class="answer-content">
                        sadkask dajdjakdjkajdjksjakdjkajdjskjakdj jsakjdjaskdjkjaskdjaskjk
                    </div>

                </div>


                <!-- /Comment new style -->
            </div>
            <div class="row">
                <div class="col-sm-9">
                    <div class="panel panel-danger col-md-10" style="padding-top: 10px;">
                        @if ($errors->has('text'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('text') }}</strong>
                                    </span>
                        @endif
                        <div>
                            <textarea class="myTextEditor" style="width:100%;" placeholder="Answer">
                            </textarea>
                        </div>
                        <label class="btn btn-default general-input">
                            Выбрать файл <input type="file" name="files[]" multiple hidden>
                        </label>
                        <div class="col-md-2" style="float:right; margin: 10px;">
                            <button type="submit" class="btn btn-success">Answer</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src={{asset('js/tinymce/tinymce.min.js')}}></script>
    <script>tinymce.init({
            mode: "specific_textareas",
            editor_selector: "myTextEditor",
            plugins: ['link code', "textcolor"],
            height: 300,
            toolbar: ['undo redo | cut copy paste forecolor backcolor fontsizeselect fontselect'],
            fontsize_formats: '8pt 10pt 12pt 14pt 18pt 24pt 36pt'
        });
    </script>
@endsection
