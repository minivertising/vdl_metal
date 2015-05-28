<?
	include_once   "./header.php";
?>
<style>
.swiper-container {
    width: 300px;
    height: 300px;
}      
</style>
<script type="text/javascript">
$(document).ready(function() {
var mySwiper = new Swiper ('.swiper-container', {
      // Optional parameters
      direction: 'horizontal',
      loop: true,
	  prevButton : '.swiper-slide-prev',
	  nextButton : '.swiper-slide-next'
    });


});
function prev_slide()
{
	mySwiper.slideNext(false);
}
function next_slide()
{
	mySwiper.slidePrev(false);
}

</script><!-- Slider main container -->
<div class="swiper-container">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">Slide 1</div>
        <div class="swiper-slide">Slide 2</div>
        <div class="swiper-slide">Slide 3</div>
    </div>
</div>
	<div style="position:absolute;z-index:99999">
	  <a href="#" class="swiper-slide-prev">◀◀◀◀</a>
	  <a href="#" class="swiper-slide-next">▶▶▶▶</a>
	</div>
