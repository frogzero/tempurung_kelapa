<div class="banner">
		<div class="container">
<div class="banner-bottom">
	<div class="banner-bottom-left">
		<h2>B<br>U<br>Y</h2>
	</div>
	<div class="banner-bottom-right">
		<div  class="callbacks_container">
					<ul class="rslides" id="slider4">
					<li>
								<div class="banner-info">
									<h3>Simple tapi elegan</h3>
									<p>Yo mulai blonjo</p>
								</div>
							</li>
							<li>
								<div class="banner-info">
								   <h3>Belanja online</h3>
									<p>Yo mulai blonjo</p>
								</div>
							</li>
							<li>
								<div class="banner-info">
								  <h3>Bungkus gan</h3>
									<p>Yo mulai blonjo</p>
								</div>								
							</li>
						</ul>
					</div>
					<!--banner-->
	  			<script src="<?=base_url()?>assets/delarosa/web/js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager:true,
			        nav:false,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
	</div>
	<div class="clearfix"> </div>
	</div>
	<div class="shop">
		<a href="<?=site_url('home/all_produk/')?>">SHOP COLLECTION NOW</a>
	</div>
	</div>
</div>