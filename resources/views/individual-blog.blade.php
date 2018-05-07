@extends('layouts.app')
@section('styles')
    <link href="{{ asset('dist/css/blog.css')}}" rel="stylesheet">

@endsection

@section('content')
    <!-- Content -->
    <div class="container-fluid">
        <!-- Blog item title -->
        <div class="row">
            <div class="blog-title text-center"
                 style="background-image: url({{asset('dist/images/blog-img-1.jpg')}})">
                <h6>
                    Блог юристов
                </h6>
                <h1>
                    <b>{sadjask dkjadjjasdjsajkdjkasdkjasjdajskdjas</b>
                </h1>

                <p>
                <h6>
                    Автор: shoxrux@mail.ru</h6>

                </p>
            </div>
        </div>
        <!-- /Blog item title -->
        <!-- Blog item text -->
        <div class="row padding-30">
            <div class="col-sm-8 col-xs-12 blog-text-description">
               sdasdk asdksadkjaskjdkjkajdjasjdjkasdjaskdjkasjd jasjdkjsakd
                sdasdk asdksadkjaskjdkjkajdjasjdjkasdjaskdjkasjd jasjdkjsakd
                sdasdk asdksadkjaskjdkjkajdjasjdjkasdjaskdjkasjd jasjdkjsakd
                sdasdk asdksadkjaskjdkjkajdjasjdjkasdjaskdjkasjd jasjdkjsakd
                sdasdk asdksadkjaskjdkjkajdjasjdjkasdjaskdjkasjd jasjdkjsakd

            </div>
        </div>
        <!-- /Blog item text -->


        <!-- Blog comments-->
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <hr>
                <h3><span class="">dasdas</span> комментарии</h3>
                <div class="row">
                    <div class="comments-container">
                        <ul id="comments-list" class="comments-list">
                            <li>
                                <div class="comment-main-level">

                                    <div class="comment-box">
                                        <div class="comment-head">
                                          2018-8-08
                                            <span>12</span>
                                        </div>
                                        <div class="comment-content">
                                           dask kdakdasddask kdakdasddask kdakdasddask kdakdasd
                                            dask kdakdasd
                                            dask kdakdasddask kdakdasddask kdakdasddask kdakdasd
                                            dask kdakdasd
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /Comments -->
                <!-- Leave your comment -->
                        <div class="row">
                            <h3>Оставь свою комментарию</h3>
                            <div class="widget-area no-padding blank">
                                <div class="status-upload">
                                    <form method="post" action="#">
                                        {{csrf_field()}}
                                        <textarea name="comment" placeholder="Ваше сообщение"></textarea>
                                        <button type="submit" class="btn btn-success green"><i class="fa fa-share"></i>
                                            Опубликовать
                                        </button>
                                    </form>
                                </div><!-- Status Upload  -->
                            </div><!-- Widget Area -->
                        </div>

                <!-- /Leave your comment -->
                <hr>
            </div>
        </div>
        <!-- /Blog comments-->
    </div>
    <!-- /Content -->

@endsection
