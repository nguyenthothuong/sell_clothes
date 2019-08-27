<header>
	<div id="id-header"><div class="wrapper"><div class="info-right-home full left" style="margin-bottom: 0;"><div class="ul-info-home" id="tr-shippingArea"></div>
</div>
<div class="logo-signin full left"><div class="logo left">
	<a href="{{ route('home') }}" title="Mua sắm Online Yes24.com"><img src="{{ asset('images/logo.png') }}" alt="Mua sắm Online Yes24.vn" width="159" height="59">
	</a>
	</div><div id="signin-fixed" class="signin left"><ul class="list-unstyle tr-search"><li class="tr-wapper-search"><input class="search txtSearchKey" type="text" onkeyup="" value="" placeholder="Bạn tìm gì hôm nay?"><a href="javascript:void('0');" onclick="GotoSearch();" class="tr-bg-all icon-searh" title="Tìm kiếm"></a><div id="quickSearch" style="display: none;"><ul id="recommentList"></ul><div class="EventList" style="display: none;"><div class="bs-title bs-title-border-top">KHUYẾN MÃI LIÊN QUAN</div><div id="EventRecommentList"></div></div></div></li><li class="tr-login-productseen"><a href="" class="tr-bg-all tr-top-keosao" title="SẢN PHẨM ĐÃ XEM">Sản phẩm<br><span>Đã xem</span></a></li><li class="tr-login-keosao"><a href="" class="tr-top-keosao" title="Giao nhanh" onclick="ga('send', 'event', 'Giao Nhanh', 'click', 'Giao Nhanh_menutop', 1.00, { 'nonInteraction': 1 });">Giao nhanh <br><span>Tp.HCM</span></a></li><li class="tr-login-km"><a href="" target="_blank" class="tr-bg-all tr-km-right" title="Khuyến mãi" onclick="ga('send', 'event', 'Khuyến mãi', 'click', 'Khuyến mãi_menutop', 1.00, { 'nonInteraction': 1 });">Khuyến mãi <br><span>Giảm giá sốc</span></a></li>
	

	@auth
	<li class="tr-login-regis">
		<span id="spLoginHtml">
			<span><a href="{{ route('login') }}" class="tr-bg-all tr-login-reg" >{{ Auth::user()->first_name }}</a></span>
			<a class="tr-account-order">Đăng xuất</a>
			<form method="POST" action="{{ route('logout') }}" id="form-logout">
				@csrf
			</form>
			<script>
				$(document).ready(function() {
					$('.tr-account-order').on('click', function(e) {
						e.preventDefault();
						$('#form-logout').submit();
					});
				});
			</script>
	</li>
	@else
	<li class="tr-login-regis">
		<span id="spLoginHtml">
			<span><a href="{{ route('login') }}" class="tr-bg-all tr-login-reg" >@lang('labels.login')</a></span>
			<a  href="{{ route('register') }}" class="tr-account-order">Đăng Ký</a>
			</li>
	@endauth

	
	<li class="tr-login-cart"><a rel="nofollow" href="" class="tr-bg-all tr-shopping-cart" title="Giỏ hàng" admicro-data-event="100430" admicro-data-auto="1" admicro-data-order="false">
		<span class="tr-shopping-cart-count">0</span></a></li></ul></div></div></div></div>
</header>