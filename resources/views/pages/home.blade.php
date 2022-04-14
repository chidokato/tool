@extends('layout.index')

@section('title')
<?php if ( $head_setting['title'] == '' ) echo $head_setting['name']; else echo $head_setting['title']; ?>
@endsection
@section('description')
<?php echo $head_setting['description']; ?>
@endsection
@section('keywords')
<?php echo $head_setting['keywords']; ?>
@endsection
@section('robots')
<?php if ( $head_setting['robot'] == 0 ) echo "index, follow";  elseif ( $head_setting['robot'] == 1 ) echo "noindex, nofollow"; ?>
@endsection
@section('url')
<?php echo asset(''); ?>
@endsection
@section('home')
class="current-menu-item"
@endsection

@section('content')
@include('layout.header')
<?php use App\product; ?>
<section id="body">
    <section class="main-slide">
        <div class="uk-slidenav-position slide-show" data-uk-slideshow="{autoplay: true, autoplayInterval: 7500, animation: 'random-fx'}">
            <ul class="uk-slideshow">
                @foreach($home_slider as $val)
                <li><img src="data/themes/{{$val->img}}" alt="{{$val->name}}" /></li>
                @endforeach
            </ul>
            <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
            <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
            <ul class="uk-dotnav uk-dotnav-contrast uk-position-bottom uk-flex-center">
                <?php $i = 0; ?>
                @foreach($home_slider as $val)
                <li data-uk-slideshow-item="{{$i}}"><a href="#"></a></li>
                <?php $i = $i+1; ?>
                @endforeach
            </ul>
        </div>
    </section><!-- .main-search -->
    <h1 style='position: absolute;left: -1000px;'>{{ $head_setting['title'] }}</h1>

    <section class="main-search uk-visible-large">
        <div class="uk-container uk-container-center">
            <form action="#" method="POST">
                <div class="uk-grid">
                    <div class="uk-width-large-1-4">
                        <input placeholder='Nhập từ khóa' type="text" name="">
                    </div>
                    <div class="uk-width-large-1-4">
                        <select>
                            <option>-Tỉnh thành-</option>
                            <option>Hà Nội</option>
                        </select>
                    </div>
                    <div class="uk-width-large-1-4">
                        <select>
                            <option>-Quận Huyện-</option>
                            <option>Hà Nội</option>
                        </select>
                    </div>
                    <div class="uk-width-large-1-4">
                        <input type="submit" name="" value="Tìm kiếm">
                    </div>
                </div>
            </form>
        </div>
    </section><!-- .main-search -->

    <section class="main-hot uk-container uk-container-center">
        <section class="panel-body">
            <ul class="uk-grid lib-grid-20 uk-grid-width-1-1 uk-grid-width-medium-1-2 uk-grid-width-large-1-2 list-product" data-uk-grid-match="{target:'.title'}">
                <?php $i = 0; ?>
                @foreach($product_hot as $val)
                @if($i<2)
                <li>
                    <div class="product">
                        <div class="thumb">
                            <a class="image img-cover img-shine" href="{{$val->category->slug}}/{{$val->slug}}.html" title="{{$val->name}}"><img src="data/product/{{$val->img}}" alt="{{$val->name}}" /></a>
                            <div class="infor-hot">
                                <h3 class="title"><a href="{{$val->category->slug}}/{{$val->slug}}.html" title="{{$val->name}}">{{$val->name}}</a></h3>
                                <span>{{$val->address}}, {{$val->district->name}}, {{$val->district->city->name}}</span>
                            </div>
                            @if($val->price)
                            <span class='price-hot'><strong>Giá:</strong><i> {{$val->price}}</i></span>
                            @else
                            <span class='price-hot'><strong>Giá:</strong><i> Liên hệ</i></span>
                            @endif
                        </div>
                        
                    </div>
                </li>
                @endif
                <?php $i = $i+1; ?>
                @endforeach
            </ul>
            <ul class="uk-grid lib-grid-20 uk-grid-width-1-2 uk-grid-width-medium-1-4 uk-grid-width-large-1-4 list-product" data-uk-grid-match="{target:'.title'}">
                <?php $i = 0; ?>
                @foreach($product_hot as $val)
                @if($i>1)
                <li>
                    <div class="product">
                        <div class="thumb">
                            <a class="image img-cover img-shine" href="{{$val->category->slug}}/{{$val->slug}}.html" title="{{$val->name}}"><img src="data/product/{{$val->img}}" alt="{{$val->name}}" /></a>
                            @if($val->price)
                            <span class='price'><strong>Giá:</strong><i> {{$val->price}}</i></span>
                            @else
                            <span class='price'><strong>Giá:</strong><i> Liên hệ</i></span>
                            @endif
                        </div>
                        <div class="infor">
                            <h3 class="title"><a href="{{$val->category->slug}}/{{$val->slug}}.html" title="{{$val->name}}">{{$val->name}}</a></h3>
                            <span>{{$val->address}}, {{$val->district->name}}, {{$val->district->city->name}}</span>
                        </div>
                    </div>
                </li>
                @endif
                <?php $i = $i+1; ?>
                @endforeach
            </ul>
        </section><!-- .panel-body -->
    </section><!-- .main-hot -->

    <section class="main-dang-ky main-search">
        <div class="bg-dangky">
            <div class="uk-container uk-container-center">
                <h4>ĐĂNG KÝ NHẬN THÔNG TIN DỰ ÁN MỚI NHẤT</h4>
                <form action="dang-ky" method="POST">
					<input type="hidden" name="_token" value="{{csrf_token()}}" />
					<input type="hidden" name="link" value="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; ?>" />
					<input type="hidden" name="_token" value="{{csrf_token()}}" />
                    <div class="uk-grid">
                        <div class="uk-width-large-1-4">
                            <input type="text" placeholder="Họ và tên" class="" name="name">
                        </div>
                        <div class="uk-width-large-1-4">
                            <input required type="tel" placeholder="Số điện thoại (*)" class="" name="phone">
                        </div>
                        <div class="uk-width-large-1-4">
                            <input type="email" placeholder="Địa chỉ email" class="" name="email">
                        </div>
                        <div class="uk-width-large-1-4">
                            <input style="margin-right: 20px;" type="submit" value="NHẬN NGAY">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section><!-- .main-dang-ky -->

    <section class="section-home">
        <div class="uk-container uk-container-center">
            <header class="panel-head">
                <h2 class="heading-1"><a href="#" title="DỰ ÁN MỚI NHẤT">DỰ ÁN MỚI NHẤT</a></h2>
            </header>
            <div class="panel-body">
                <ul class="uk-grid lib-grid-20 uk-grid-width-1-2 uk-grid-width-medium-1-4 uk-grid-width-large-1-4 list-product" data-uk-grid-match="{target:'.title'}">
                    @foreach($product as $val)
                    <li>
                        <div class="product">
                            <div class="thumb">
                                <a class="image img-cover img-shine" href="{{$val->category->slug}}/{{$val->slug}}.html">
                                    <img src="data/product/thumbnail/{{$val->img}}" alt="{{$val->name}}" />
                                </a>
                                @if($val->price)
                                <span class='price'><strong>Giá:</strong><i> {{$val->price}}</i></span>
                                @else
                                <span class='price'><strong>Giá:</strong><i> Liên hệ</i></span>
                                @endif
                            </div>
                            <div class="infor">
                                <h3 class="title"><a href="{{$val->category->slug}}/{{$val->slug}}.html" title="{{$val->name}}">{{$val->name}}</a></h3> 
                                <span>{{$val->address}}, {{$val->district->name}}, {{$val->district->city->name}}</span>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div><!-- .panel-body -->
        </div>
    </section>

    <section class="section-home info-maiviet">
        <div class="uk-container uk-container-center">
            <header class="panel-head">
                <h2><a href="#">MAI VIỆT LAND</a></h2>
                <p>CUNG CẤP GIẢI PHÁP BẤT ĐỘNG SẢN TOÀN DIỆN CHO KHÁCH HÀNG</p>
            </header>
            <div class="panel-body">
				<div class="uk-slidenav-position slider" data-uk-slider="{autoplay: true, autoplayInterval: 1500}">
					<div class="uk-slider-container">
						<ul class="uk-slider uk-grid lib-grid-20 uk-grid-width-1-2 uk-grid-width-medium-1-4 uk-grid-width-large-1-4 list-article" data-uk-grid-match="{target:'.title'}" >
							<li>
								<div class="info-iteam">
									<div class="thumb thumb1"></div>
									<div class="infor">
										<h4>THÔNG TIN MINH BẠCH</h4>
										<p>Khách hàng mua căn hộ giá gốc từ CĐT, thụ hưởng những chính sách bán hàng mới nhất và ưu đãi nhất.</p>
									</div>
								</div>
							</li>
							<li>
								<div class="info-iteam">
									<div class="thumb thumb2"></div>
									<div class="infor">
										<h4>QUY TRÌNH ĐƠN GIẢN</h4>
										<p>Khách hàng dễ dàng tìm được căn hộ ưng ý từ quỹ căn trực tiếp CĐT, thủ tục ký HĐ thuận tiện qua sự tư vấn của các chuyên viên BĐS.</p>
									</div>
								</div>
							</li>
							<li>
								<div class="info-iteam">
									<div class="thumb thumb3"></div>
									<div class="infor">
										<h4>ĐỒNG BỘ TỪ A-Z</h4>
										<p>MAI VIỆT LAND tư vấn căn hộ ở, đầu tư, kinh doanh cho khách hàng để tối ưu công năng sử dụng và mục tiêu tài chính.</p>
									</div>
								</div>
							</li>
							<li>
								<div class="info-iteam">
									<div class="thumb thumb4"></div>
									<div class="infor">
										<h4>SẢN PHẨM ĐA DẠNG</h4>
										<p>Khách hàng được mua giá gốc từ Chủ Đầu Tư, thụ hưởng những chính sách bán hàng mới nhất và ưu đãi nhất.</p>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div><!-- .slider -->
                <a class="button" href="gioi-thieu">Tìm hiểu thêm về Mai Việt Land</a>
            </div><!-- .panel-body -->
        </div>
    </section>

    <div id="homepage" class="page-body">
        <div class="uk-container uk-container-center">
            

            <section class="homepage-featured-news">
                <header class="panel-head">
                    <h2 class="heading-1"><a href="tin-tuc-bds" title="Tin tức">Tin tức bất động sản</a></h2>
                </header>
                <section class="panel-body">
                    <ul class="uk-grid lib-grid-20 uk-grid-width-large-1-2 list-article">
                        @foreach($home_news as $val)
                        <li>
                            <article class="article uk-clearfix">
                                <div class="thumb">
                                    <a class="image img-cover img-zoomin" href="{{$val->category->slug}}/{{$val->slug}}/{{$val->id}}.html" title="{{$val->name}}"><img style='    height: 100%;' src="data/news/280-175/{{$val->img}}" alt="{{$val->name}}" /></a>
                                </div>
                                <div class="infor">
                                    <h3 class="title"><a href="{{$val->category->slug}}/{{$val->slug}}/{{$val->id}}.html" title="">{{$val->name}}</a></h3>
									<div class="meta"><i class="fa fa-user"></i> {{$val->user}} | <i class="fa fa-clock-o"></i> {{$val->date}} | <i class="fa fa-eye"></i> {{$val->hits}}view</div>
                                    <div class="description">{{$val->detail}}</div>
                                    <div class="viewmore"><a href="{{$val->slug}}/{{$val->id}}.html" title="Xem thêm">Xem thêm <i class="fa fa-angle-double-right"></i></a></div>
                                </div>
                            </article>
                        </li>
                        @endforeach
                    </ul>
                </section>
            </section>

            <section style='margin-bottom: 20px;'>
                <header class="panel-head">
                    <h2 class="heading-1"><a title="Đối tác đầu tư">Đối tác đầu tư</a></h2>
                </header>
                <section class="panel-body">
                    <div class="uk-slidenav-position slider" data-uk-slider="{autoplay: true, autoplayInterval: 1500}">
                        <div class="uk-slider-container">
                            <ul class="uk-slider uk-grid lib-grid-20 uk-grid-width-1-2 uk-grid-width-medium-1-4 uk-grid-width-large-1-6 list-article" data-uk-grid-match="{target:'.title'}" >
                                @foreach($home_doitac as $val)
								<li>
                                    <article class="article">
                                        <div class="thumb">
                                            <a class="image img-cover img-flash" ><img src="data/themes/{{$val->img}}" alt="logo đối tác" /></a>
                                        </div>
                                    </article><!-- .article -->
                                </li>
								@endforeach
                            </ul>
                        </div>
                    </div><!-- .slider -->
                </section><!-- .panel-body -->
            </section><!-- .actual-products -->

        </div>
    </div>
</section>
@endsection
