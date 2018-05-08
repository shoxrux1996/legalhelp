@extends('layouts.app')
@section('styles')
    <link href="{{ asset('dist/css/questions.css')}}" rel="stylesheet">
@endsection

@section('content')

    <div id="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    @foreach($questions as $question)
                    <div class="col-sm-12 question">
                        <h4 class="title"><a href="{{route('show.question',[$question->Email, $question->Title])}}">{{$question->Title}}</a></h4>
                        <p class="description">{{$question->Text}}
                        <p>
                            <span class="date">{{$question->Date}}</span>
                            <span class="author">{{$question->client->Fname}} {{$question->client->Lname}} {{$question->client->Mname}}</span>
                        </p>
                        <hr>
                        <p>
                            <span class="category">Category: <a >{{$question->category->Title}}</a></span>
                            <a class="answers" href="{{route('show.question',[$question->Email, $question->Title])}}">
                                {{$question->answers->count()}} ответа
                            </a>
                        </p>
                    </div>
                    @endforeach
                    <div class="col-sm-12 text-center">
                        {!! $questions->links('pagination') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
