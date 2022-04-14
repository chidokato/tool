@extends('layout.index')

@section('title')
<?php if ( $singleproduct['title'] == '' ) echo $singleproduct['name']; else echo $singleproduct['title']; ?>
@endsection
@section('description')
<?php echo $singleproduct['description']; ?>
@endsection
@section('keywords')
<?php echo $singleproduct['keywords']; ?>
@endsection
@section('robots')
<?php echo $singleproduct['robot']; ?>
@endsection
@section('url')
<?php echo asset('').$singleproduct->category['slug'].'/'.$singleproduct['slug'].'.html'; ?>
@endsection
@section('img')
<?php echo asset('').'data/product/'.$singleproduct['img']; ?>
@endsection

@section('content')
<?php use App\product_images; ?>
@include('layout.headerproduct')

<section id="body">
	<div id="product-page" class="page-body">
		<div class="breadcrumb">
			<div class="uk-container uk-container-center">
				<ul class="uk-breadcrumb">
					<li class="uk-active"><a href="{{asset('')}}" title="Trang chủ"><i class="fa fa-home"></i> Trang chủ</a></li>
					<li class="uk-active"><a href="{{$singleproduct->category->slug}}" title="Trang chủ">{{$singleproduct->category->name}}</a></li>
					<li >{{$singleproduct->name}}</li>
				</ul>
			</div>
		</div><!-- .breadcrumb -->
		<div class="uk-container uk-container-center">
		<section class="prd-detail">
			<section class="panel-body">
				<script>
					 $(document).ready(function() {
						var wd_width = $(window).width();
						if(wd_width > 600) {
							$("#content-slider").lightSlider({
								loop:true,
								keyPress:true
							});
							$('#image-gallery').lightSlider({
								gallery:true,
								item:1,
								thumbItem:6,
								slideMargin: 0,
								speed:500,
								auto:true,
								loop:true,
								onSliderLoad: function() {
									$('#image-gallery').removeClass('cS-hidden');
								}  
							});
						}else {
							$("#content-slider").lightSlider({
								loop:true,
								keyPress:true
							});
							$('#image-gallery').lightSlider({
								gallery:true,
								item: 1,
								thumbItem: 4,
								slideMargin: 0,
								speed:500,
								auto:true,
								loop:true,
								onSliderLoad: function() {
									$('#image-gallery').removeClass('cS-hidden');
								}  
							});
						}
						
					});
				</script>
				<div class="uk-grid uk-grid-medium">
					<div class="uk-width-large-4-6">
						<div class="prd-gallerys">
							<div class="slider">
								<ul id="image-gallery" class="gallery list-unstyled cS-hidden">
									<li data-thumb="data/product/thumbnail/{{$singleproduct->img}}"> 
										<a class="image img-cover" title="{{$singleproduct->name}}">
											<img src="data/product/{{$singleproduct->img}}" alt="{{$singleproduct->name}}" />
										</a>
									</li>
									@foreach($singleproduct->product_images as $imgditail)
									<li data-thumb="data/product/detail/{{$imgditail->img}}"> 
										<a class="image img-cover" title="{{$imgditail->name}}">
											<img src="data/product/detail/{{$imgditail->img}}" alt="{{$imgditail->name}}" />
										</a>
									</li>
									@endforeach
								</ul>
							</div>
						</div>
					</div>
					<div class="uk-width-large-2-6">
						<div class="prd-desc">
							<h1 class="prd-title">{{$singleproduct->name}}</h1>
							<p>{{$singleproduct->address}}, {{$singleproduct->district->name}}, {{$singleproduct->district->city->name}}</p>
							@if($singleproduct->price)
							<p class="price">Giá bán: <span>{{$singleproduct->price}}</span></p>
							@else
							<p class="price">Giá bán: <span>Liên hệ</span></p>
							@endif
							<div class="description">
								{!!$singleproduct->detail!!}
							</div>
						</div>
					</div>
				</div>
			</section>
		</section><!-- .prd-detail -->

		<section class='uk-visible-large' data-uk-sticky="{top: 0}">
			<nav class="product-nav" id='menu-center'>
				<ul>
					@if($singleproduct->heading7)
                    <li>
                        <a href="#chinh-sach">{{$singleproduct->tab7}}</a>
                    </li>
                    @endif
					@if($singleproduct->heading1)
					<li>
                        <a href="#section1">{{$singleproduct->tab1}}</a>
                    </li>
                    @endif
                    @if($singleproduct->heading2)
                    <li>
                        <a href="#section2">{{$singleproduct->tab2}}</a>
                    </li>
                    @endif
                    @if($singleproduct->heading3)
                    <li>
                        <a href="#section3">{{$singleproduct->tab3}}</a>
                    </li>
                    @endif
                    @if($singleproduct->heading4)
                    <li>
                        <a href="#section4">{{$singleproduct->tab4}}</a>
                    </li>
                    @endif
					
                    @if($singleproduct->heading5)
                    <li>
                        <a href="#section5">{{$singleproduct->tab5}}</a>
                    </li>
                    @endif
                    @if($singleproduct->heading6)
                    <li>
                        <a href="#section6">{{$singleproduct->tab6}}</a>
                    </li>
                    @endif
                    
                    <li>
                        <a href="#dang-ky">Đăng ký</a>
                    </li>
                    <div class='clr'></div>
				</ul>
			</nav><!-- .main-nav -->		
		</section><!-- .lower -->

		<div class="uk-grid lib-grid-20">
			<div class="uk-width-large-3-4">
				<section class="prd-detail">
					<section class="panel-body">
						@if($singleproduct->heading7)
						<div class="prd-content" id='chinh-sach'>
							<div class="chinh-sach">
								<i class="fa fa-gift"></i>
								<h2>{{$singleproduct->heading7}}</h2>
								<div class="chinh-sach-content">{!!$singleproduct->content7!!}</div>
							</div>
						</div><!-- .prd-content -->
						@endif
						
						@if($singleproduct->heading1)
						<div class="prd-content" id='section1'>
							<ul class="uk-list uk-clearfix nav-tabs" data-uk-switcher="{connect:'#tabContent'}">
								<h2><li class="uk-active" aria-expanded="true">{{$singleproduct->heading1}}</li></h2>
							</ul>
							<ul id="tabContent" class="uk-switcher tab-content">
								<li aria-hidden="false" class="uk-active">
									<article class="article detail-content">
										{!!$singleproduct->content1!!}
										<?php $section = product_images::where('p_id',$singleproduct->id)->where('section','section1')->where('note','option')->get(); ?>
										<?php $section1 = product_images::where('p_id',$singleproduct->id)->where('section','section1')->where('note','option 1')->get(); ?>
										<?php $section2 = product_images::where('p_id',$singleproduct->id)->where('section','section1')->where('note','option 2')->get(); ?>
										@include('layout.section')
										@include('layout.section1')
										@include('layout.section2')
									</article><!-- .article -->
								</li>
						   </ul> 
						</div><!-- .prd-content -->
						@endif
                    	@if($singleproduct->heading2)
						<div class="prd-content" id='section2'>
							<ul class="uk-list uk-clearfix nav-tabs" data-uk-switcher="{connect:'#tabContent'}">
								<h2><li class="uk-active" aria-expanded="true">{{$singleproduct->heading2}}</li></h2>
							</ul>
							<ul id="tabContent" class="uk-switcher tab-content">
								<li aria-hidden="false" class="uk-active">
									<article class="article detail-content">
										{!!$singleproduct->content2!!}
										<?php $section = product_images::where('p_id',$singleproduct->id)->where('section','section2')->where('note','option')->get(); ?>
										<?php $section1 = product_images::where('p_id',$singleproduct->id)->where('section','section2')->where('note','option 1')->get(); ?>
										<?php $section2 = product_images::where('p_id',$singleproduct->id)->where('section','section2')->where('note','option 2')->get(); ?>
										@include('layout.section')
										@include('layout.section1')
										@include('layout.section2')
									</article><!-- .article -->
								</li>
						   </ul> 
						   
						</div><!-- .prd-content -->
						@endif
                    	@if($singleproduct->heading3)
						<div class="prd-content" id='section3'>
							<ul class="uk-list uk-clearfix nav-tabs" data-uk-switcher="{connect:'#tabContent'}">
								<h2><li class="uk-active" aria-expanded="true">{{$singleproduct->heading3}}</li></h2>
							</ul>
							<ul id="tabContent" class="uk-switcher tab-content">
								<li aria-hidden="false" class="uk-active">
									<article class="article detail-content">
										{!!$singleproduct->content3!!}
										<?php $section = product_images::where('p_id',$singleproduct->id)->where('section','section3')->where('note','option')->get(); ?>
										<?php $section1 = product_images::where('p_id',$singleproduct->id)->where('section','section3')->where('note','option 1')->get(); ?>
										<?php $section2 = product_images::where('p_id',$singleproduct->id)->where('section','section3')->where('note','option 2')->get(); ?>
										@include('layout.section')
										@include('layout.section1')
										@include('layout.section2')
									</article>
								</li>
						   </ul> 
						</div>
						@endif
                    	@if($singleproduct->heading4)
						<div class="prd-content" id='section4'>
							<ul class="uk-list uk-clearfix nav-tabs" data-uk-switcher="{connect:'#tabContent'}">
								<h2><li class="uk-active" aria-expanded="true">{{$singleproduct->heading4}}</li></h2>
							</ul>
							<ul id="tabContent" class="uk-switcher tab-content">
								<li aria-hidden="false" class="uk-active">
									<article class="article detail-content">
										{!!$singleproduct->content4!!}
										<?php $section = product_images::where('p_id',$singleproduct->id)->where('section','section4')->where('note','option')->get(); ?>
										<?php $section1 = product_images::where('p_id',$singleproduct->id)->where('section','section4')->where('note','option 1')->get(); ?>
										<?php $section2 = product_images::where('p_id',$singleproduct->id)->where('section','section4')->where('note','option 2')->get(); ?>
										@include('layout.section')
										@include('layout.section1')
										@include('layout.section2')
									</article>
								</li>
						   </ul> 
						</div>
						@endif
						
                    	@if($singleproduct->heading5)
						<div class="prd-content" id='section5'>
							<ul class="uk-list uk-clearfix nav-tabs" data-uk-switcher="{connect:'#tabContent'}">
								<h2><li class="uk-active" aria-expanded="true">{{$singleproduct->heading5}}</li></h2>
							</ul>
							<ul id="tabContent" class="uk-switcher tab-content">
								<li aria-hidden="false" class="uk-active">
									<article class="article detail-content">
										{!!$singleproduct->content5!!}
										<?php $section = product_images::where('p_id',$singleproduct->id)->where('section','section5')->where('note','option')->get(); ?>
										<?php $section1 = product_images::where('p_id',$singleproduct->id)->where('section','section5')->where('note','option 1')->get(); ?>
										<?php $section2 = product_images::where('p_id',$singleproduct->id)->where('section','section5')->where('note','option 2')->get(); ?>
										@include('layout.section')
										@include('layout.section1')
										@include('layout.section2')
									</article><!-- .article -->
								</li>
						   </ul> 
						</div><!-- .prd-content -->
						@endif
                    	@if($singleproduct->heading6)
						<div class="prd-content" id='section6'>
							<ul class="uk-list uk-clearfix nav-tabs" data-uk-switcher="{connect:'#tabContent'}">
								<h2><li class="uk-active" aria-expanded="true">{{$singleproduct->heading6}}</li></h2>
							</ul>
							<ul id="tabContent" class="uk-switcher tab-content">
								<li aria-hidden="false" class="uk-active">
									<article class="article detail-content">
										{!!$singleproduct->content6!!}
										<?php $section = product_images::where('p_id',$singleproduct->id)->where('section','section6')->where('note','option')->get(); ?>
										<?php $section1 = product_images::where('p_id',$singleproduct->id)->where('section','section6')->where('note','option 1')->get(); ?>
										<?php $section2 = product_images::where('p_id',$singleproduct->id)->where('section','section6')->where('note','option 2')->get(); ?>
										@include('layout.section')
										@include('layout.section1')
										@include('layout.section2')
									</article><!-- .article -->
								</li>
						   </ul> 
						</div><!-- .prd-content -->
						@endif
                    	
						<div class="prd-content" id='dang-ky'>
							<ul class="uk-list uk-clearfix nav-tabs" data-uk-switcher="{connect:'#tabContent'}">
								<li style='text-align: center;float: inherit;' class="uk-active" aria-expanded="true">Đăng Ký Đặt Chỗ & Nhận Thông Tin Ưu Đãi Mới Nhất</li>
							</ul>
							<ul id="tabContent" class="uk-switcher tab-content">
								<li style='border: none;' aria-hidden="false" class="uk-active">
									<article class="article detail-content" style='padding: 0;'>
										<div class="dat-cho">
											<div class="uk-grid ">
												<div class="uk-width-large-1-2">
													<div> <span>Quý Khách Hàng Vui Lòng Điền Đầy Đủ Thông Tin Để Nhận</span> <span>Ưu Đãi Từ Nhà Đầu Tư &amp; Bộ <i><u>SALEKIT</u></i> Bán Hàng Gồm:</span>
													<ul>
														<li class="first">Chính sách bán hàng <b>mới nhất</b></li>
														<li>Tiến độ thi công và thanh toán <b>nhanh nhất</b></li>
														<li>Chương trình <b>Ưu đãi</b> khuyến mại</li>
														<li><b>Hình ảnh</b> chi tiết về mặt bằng và nội thất căn hộ</li>
														<li class="last">Bảng <b>check căn hộ</b> và báo giá chi tiết</li>
													</ul>
													</div>
												</div>
												<div class="uk-width-large-1-2">
													<h3>ĐĂNG KÝ NHẬN THÔNG TIN ƯU ĐÃI</h3>
													<div class="form-right">
														<form action="dang-ky" method="POST">
															<input type="hidden" name="_token" value="{{csrf_token()}}" />
															<input type="hidden" name="link" value="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; ?>" />
															<p style="text-align: center;"><input required name="name" style="width: 100%;" type="text" placeholder="Họ & Tên *"></p>
															<p style="text-align: center;"><input required name="email" style="width: 100%;" type="mail" placeholder="Địa chỉ Email *"></p>
															<p style="text-align: center;"><input required name="tel" style="width: 100%;" type="tel" placeholder="Số điện thoại *"></p>
															<p style="text-align: center;"><input type="submit" value="ĐĂNG KÝ"></p>
														</form>
													</div>
												</div>
											</div>
										</div>
									</article><!-- .article -->
								</li>
						   </ul> 
						</div><!-- .prd-content -->
						
						<div class="fb-comments" xid="{{$singleproduct->id}}" data-width="100%" data-numposts="5"></div>
						
						<section class="prdcatalogue prd-same">
							<header class="panel-head">
								<h2 class="heading-2"><span>Dự án danh mục {{$singleproduct->category->name}}</span></h2>
							</header>
							<section class="panel-body">
								<ul class="uk-grid lib-grid-20 uk-grid-width-1-2 uk-grid-width-medium-1-3 list-product">
									
								</ul>
							</section><!-- .panel-body -->
						</section><!-- .prdcatalogue -->
					</section><!-- .panel-body -->
					
				</section><!-- .prd-detail -->
			</div>
			
			@include('layout.sitebar-product')
			
		</div><!-- .uk-grid -->

		
			</div>
		
	</div>

</section><!-- #body -->

<style>
.dangky{    text-align: center !important;}
.dangky button{    background-color: red;
color: #fff;
padding: 9px 15px;
border: none;
border-radius: 5px;}
</style>
<script type="text/javascript">
// popup

var btn1 = document.getElementById("myBtn1");
var btn2 = document.getElementById("myBtn2");
var btn3 = document.getElementById("myBtn3");

btn1.onclick = function() {
  modal.style.display = "block";
}
btn2.onclick = function() {
  modal.style.display = "block";
}
btn3.onclick = function() {
  modal.style.display = "block";
}

</script>

@endsection