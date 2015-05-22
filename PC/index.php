<?
	include_once   "./header.php";
?>
    <div id="header_wrap" style="position:fixed;z-index:70;width:100%;height:70px;background:skyblue">
      <div>
        <a href="#">VDL SHOP</a> | 
        <a href="#">VDL TREND</a> | 
        <a href="#">MEET VDL</a> | 
        <a href="#">BLOG</a> | 
        <a href="#">SOCIAL CLUB</a>
      </div>
      <div>
        <a href="#">VDL MUSE SHIN MINA M/V</a>
        <a href="#">SHIN MINA BEAYTY LIFE</a>
        <a href="#">METAL CUSHION</a>
        <a href="#">EVENT</a>
        <a href="#">트위터</a>
        <a href="#">페이스북</a>
        <a href="#">스토리</a>
      </div>
    </div>
    <div id="contents_wrap">
      <div class="section" data-menuanchor="page1">
        <a href="#" onclick="open_video();">신민아의 메탈쿠션 영상 플레이</a>
        <div id="player_wrap" style="display:none;z-index:75">
          <iframe allowfullscreen="1" src="<?=$_gl['youtube_url']?>" frameborder="0" id="ytplayer" class="ytplayer" style="width:100%;height:100%;width:800px;height:450px;"></iframe>
        </div>
      </div>
      <div class="section" data-menuanchor="page2">page2</div>
      <div class="section" data-menuanchor="page3">page3</div>
      <div class="section" data-menuanchor="page4">page4</div>
    </div>
    <div class="mask"></div>
  </body>
</html>
<script type="text/javascript">
$(document).ready(function() {
	$('#contents_wrap').fullpage({
		//Navigation
		menu: "#header_wrap",
		anchors:['page1', 'page2', 'page3', 'page4'],
		navigation: true,
		navigationPosition: 'right',
		navigationTooltips: ['firstSlide', 'secondSlide'],
		showActiveTooltips: false,
		slidesNavigation: true,
		slidesNavPosition: 'bottom',

		//Scrolling
		css3: true,
		scrollingSpeed: 700,
		autoScrolling: true,
		fitToSection: true,
		scrollBar: false,
		easing: 'easeInOutCubic',
		easingcss3: 'ease',
		loopBottom: true,
		loopTop: false,
		loopHorizontal: true,
		continuousVertical: false,
		normalScrollElements: '#element1, .element2',
		scrollOverflow: false,
		touchSensitivity: 15,
		normalScrollElementTouchThreshold: 5,

		//Accessibility
		keyboardScrolling: true,
		animateAnchor: true,
		recordHistory: true,

		//Design
		controlArrows: true,
		verticalCentered: true,
		resize : false,
		sectionsColor : ['#ccc', '#fff', '#ccc', '#fff'],
		paddingTop: '3em',
		paddingBottom: '10px',
		fixedElements: '#header, .footer',
		responsive: 0,

		//Custom selectors
		sectionSelector: '.section',
		slideSelector: '.slide',

		//events
		onLeave: function(index, nextIndex, direction){},
		afterLoad: function(anchorLink, index){},
		afterRender: function(){},
		afterResize: function(){},
		afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex){},
		onSlideLeave: function(anchorLink, index, slideIndex, direction){}
	});

	$(".mask").click(function(){
		$(".mask").fadeOut(300);
	});

});

function open_video()
{
	$(".mask").width($(window).width());
	$(".mask").height($(window).height());
	$(".mask").fadeIn(300);
	$("#player_wrap").fadeIn(300);
}
</script>