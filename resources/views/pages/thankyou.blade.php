@extends('layout.index')

@section('title')
Cảm ơn bạn đã đăng ký tư vấn dự án !
@endsection
@section('description')
Cảm ơn bạn đã đăng ký tư vấn dự án !
@endsection
@section('keywords')

@endsection
@section('robots')
noindex, nofollow
@endsection
@section('url')
<?php echo asset('').'dang-ky'; ?>
@endsection

@section('content')
@include('layout.header')
<section id="body">
    <div id="product-page" class="page-body">
        <div class="breadcrumb">
            <div class="uk-container uk-container-center">
                <ul class="uk-breadcrumb">
                    <li><a href="{{asset('')}}" title="Trang chủ"><i class="fa fa-home"></i> Trang chủ</a></li>
                    <li class="uk-active"><a href="lien-he" title="Liên hệ">Liên hệ</a></li>
                </ul>
            </div>
        </div><!-- .breadcrumb -->
        <div class="uk-container uk-container-center">
            <div class="uk-grid ">
                <div class="uk-width-large-2-4">
                    <article class="article detail-content">
                        Cảm ơn bạn đã đăng ký tư vấn dự án !
                    </article><!-- .article -->
                    <div class="hd-search header-search">
                        <form action="" method="" class="uk-form form">
                            <input type="text" name="name" class="uk-width-1-1 input-text" placeholder="Họ & Tên ...">
                            <br>
                            <input type="text" name="tel" class="uk-width-1-1 input-text" placeholder="Số điện thoại ...">
                            <br>
                            <input type="text" name="email" class="uk-width-1-1 input-text" placeholder="Địa chỉ email...">
                            <br>
                            <textarea name="note" style="margin: 0px; width: 414px; height: 105px;" class="uk-width-1-1 input-text keyword" placeholder='Ghi chú' ></textarea>
                            <br>
                            <input style='background-color: red; border: none; color: #fff; padding: 7px 15px;' type="submit" name="btnsubmit" class="btnsubmit" value="GỬI ĐI">

                        </form>
                        <div class="searchResult"></div>
                    </div>
                </div><!-- .uk-width-larg-3-4 -->
                
            </div><!-- .uk-grid -->
        </div><!-- .uk-container -->
    </div>
</section><!-- #body -->
<br>

@endsection
