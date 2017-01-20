<?php
include "config.php";
echo '<!DOCTYPE html>
	<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">
';
include "page_header.php";
?>
	<body>
		<!-- Mmenu -->
		<div class="menumobile">
            <div class="header">
                <a href="#menu" class="hidden-lg hidden-md hidden-sm "></a>
                <div class="clear"></div>
            </div>
			<nav id="menu">
				<ul>
					<li><a class="active" href="<?=$root?>">Trang chủ</a></li>
					<li><a href="<?=$root?>">Giới thiệu</a></li>
					<li><a href="<?=$root?>">Sản phẩm mẫu</a></li>
					<li><a href="<?=$root?>">Kiến thức nhà đẹp</a>
					<li><a href="<?=$root?>">Liên hệ</a></li>
					<li><a href="<?=$root?>">Đăng nhập</a></li>
					<li><a href="<?=$root?>">Đăng ký</a></li>
				</ul>
			</nav>
		</div>
		<!-- Header -->
		<div class="block-top">
			<div class="container">
				<div class="col-sm-4 box-hotline">
					<span><i class="fa fa-phone" aria-hidden="true"></i> Mr. Hoàng: 0969.680.011 - 0511.3550.345</span>
				</div>
				<div class="col-sm-8 box-mail">
					<span><i class="fa fa-envelope-o" aria-hidden="true"></i> hoangduy.land.dn@gmail.com</span>
					<ul class="icons-social">
						<li><a href=""><img src="" alt="" class="imgresponsive"></a></li>
						<li><a href=""><img src="" alt="" class="imgresponsive"></a></li>
						<li><a href=""><img src="" alt="" class="imgresponsive"></a></li>
						<li><a href=""><img src="" alt="" class="imgresponsive"></a></li>
						<li><a href=""><img src="" alt="" class="imgresponsive"></a></li>
					</ul>
				</div>
			</div>
		</div>



		<!-- Footer -->
			<span id="top-link-block" class="hidden">
				<a href="#top" class="well well-sm"  onclick="$('html,body').animate({scrollTop:0},'slow');return false;">
					<i class="fa fa-chevron-up" aria-hidden="true"></i>
				</a>
			</span><!-- /top-link-block -->
		</div><!-- End Footer -->
		
		<script type="text/javascript">
			// Header Fixed
			$(window).scroll(function() {
			  if ($(this).scrollTop() > 100){
			    $('.block-menu').addClass('header-fix');
			  } else {
			    $('.block-menu').removeClass('header-fix');
			  }
			});
		</script>
		<script type="text/javascript"> // mmenu
			jQuery(document).ready(function( $ ) {
			  $("nav#menu").mmenu({
			     "offCanvas": {
			        "position": "right"
			     },
			     "extensions": [
			        "theme-dark"
			     ],
			     "counters": true,
			     "navbars": [
			        {
			           "position": "top"
			        }
			     ]
			  });
			});
		</script>
		<script type="text/javascript">
			// Back To Top
			if ( ($(window).height() + 100) < $(document).height() ){
			  $('#top-link-block').removeClass('hidden').affix({
			      // how far to scroll down before link "slides" into view
			      offset: {top:100}

			  });
			}
		</script>
	</body>
<?
echo '	</html>';

?>