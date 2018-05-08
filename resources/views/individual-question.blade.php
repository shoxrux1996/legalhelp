@extends('layouts.app')
@section('styles')
    <link href="{{ asset('dist/css/questions.css')}}" rel="stylesheet">
@endsection

@section('content')
    <div id="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <h4 class="title"><a href="{{route('show.question',[$question->Email, $question->Title])}}">{{$question->Title}}</a></h4>
                    <p class="description">{{$question->Text}}
                    <p>
                        <span class="date">{{$question->Date}}</span>
                        <span class="author">{{$question->client->Fname}} {{$question->client->Lname}} {{$question->client->Mname}}</span>
                    </p>
                    <hr>
                    <p>
                        <span class="category">Category: <a >{{$question->category->Title}}</a></span>
                    </p>
                </div>
            </div>
            <div class="row">
                <h3>Answers</h3>
                <!-- Comment news style -->
                @foreach($question->answers as $answer)
                <div class="col-sm-9 answer">
                    <div class="answer-header">
                        <h4 class="lawyer-name">{{$answer->lawyer->Fname}} {{$answer->lawyer->Mname}} {{$answer->lawyer->Lname}}</h4>
                        <h6 class="lawyer-type">{{$answer->lawyer->job_status}}</h6>
                    </div>
                    <div class="clearfix">
                    </div>
                    <div>
                        <hr>
                    </div>
                    <div class="answer-content">
                       {{$answer->Text}}
                    </div>

                </div>
                @endforeach

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
