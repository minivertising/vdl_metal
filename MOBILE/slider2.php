<?
	include_once   "./header.php";
?>
<style>
.s2 {
    width: 100%;
}      
</style>
<div class="block_pro">
  <div class="txt_roll">
    <div class="inner_roll clearfix">
      <div class="arrow_left"><a href="#" class="swiper-slide-prev"><img src="images/btn_arrow_left.png" alt=""/></a></div>
	  <div class="txt"><a href="#"><img src="images/txt_pro_1.png" alt=""/></a></div>
      <div class="txt">
	    <div class="swiper-container s2">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><a href="#"><img src="images/txt_pro_1.png" alt=""/></a></div>
            <div class="swiper-slide"><a href="#"><img src="images/txt_pro_2.png" alt=""/></a></div>
            <div class="swiper-slide"><a href="#"><img src="images/txt_pro_3.png" alt=""/></a></div>
          </div>
        </div>
      </div>
      <div class="arrow_right"><a href="#" class="swiper-slide-next"><img src="images/btn_arrow_right.png" alt=""/></a></div>
    </div>
  </div>
  <div class="bg_pro"><img src="images/bg_pro.jpg" alt=""/></div>
</div>
</body>
</html>
<script type="text/javascript">
	var mySwiper2 = new Swiper ('.s2', {
	// Optional parameters
		direction: 'horizontal',
		loop: true,
	});
</script>