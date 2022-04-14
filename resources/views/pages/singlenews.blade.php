@extends('layout.index')

@section('title')
<?php if ( $singlenews['title'] == '' ) echo $singlenews['name']; else echo $singlenews['title']; ?>
@endsection
@section('description')
<?php echo $singlenews['desc']; ?>
@endsection
@section('keywords')
<?php echo $singlenews['key']; ?>
@endsection
@section('robots')
<?php if ( $singlenews['robot'] == 0 ) echo "index, follow";  elseif ( $singlenews['robot'] == 1 ) echo "noindex, nofollow"; ?>
@endsection
@section('url')
<?php echo asset('').$singlenews['slug']; ?>
@endsection

@section('content')
@include('layout.header')
<section id="body">
    <div id="product-page" class="page-body">
        <div class="breadcrumb">
            <div class="uk-container uk-container-center">
                <ul class="uk-breadcrumb">
                    <li class="uk-active"><a href="{{asset('')}}" title="Trang chủ"><i class="fa fa-home"></i> Trang chủ</a></li>
                    <li class="uk-active"><a href="{{asset('')}}{{$singlenews->category->slug}}" title="Trang chủ">{{$singlenews->category->name}}</a></li>
                    <li>{{$singlenews->name}}</li>
                </ul>
            </div>
        </div><!-- .breadcrumb -->
        <div class="uk-container uk-container-center">
            <div class="uk-grid ">
                <div class="uk-width-large-3-4">
                    <section class="artcatalogue">
                        <header class="panel-head">
                            <h1 class="heading-new">{{$singlenews->name}}</h1>
                        </header>
                        <section class="panel-body">
                            <div class='detail-content' style='border: 1px solid #ddd;padding: 10px;'>
                                {!!$singlenews->content!!}
                            </div>
                        </section><!-- .panel-body -->
                    </section>
                </div><!-- .uk-width-larg-3-4 -->
                @include('layout.sitebar')
            </div><!-- .uk-grid -->
        </div><!-- .uk-container -->
    </div>
</section><!-- #body -->
@endsection