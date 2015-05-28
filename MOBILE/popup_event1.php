<?
	include_once   "./header.php";
?>
<div class="popup_wrap">
  <div class="p_mid p_position big">
    <div class="block_close clearfix">
      <a href="#confirm1_alert" class="btn_close popup-with-zoom-anim" style="outline:none"><img src="images/popup/btn_close_w.png" /></a>
    </div>
    <div class="block_content">
      <div class="inner">
        <div class="title title_input"><img src="images/popup/title_event.png" /></div>
        <div style="width:100%; background:#000; margin-bottom:10px;">
          <iframe allowfullscreen="1" src="<?=$_gl['youtube_url2']?>" frameborder="0" id="ytplayer" class="ytplayer"></iframe>
        </div>
        <div class="txt_notice">
          <img src="images/popup/txt_notice_movie.png" />
        </div>
        <div class="block_btn" id="fake_btn">
          <a href="#" onclick="alert('영상을 끝까지 보셔야 이벤트 참여가 가능합니다.');" class="common_3"><img src="images/popup/btn_movie_ok.png" /></a>
        </div>
        <div class="block_btn" id="real_btn" style="display:none">
          <a href="popup_event2.php" class="common_3"><img src="images/popup/btn_movie_ok.png" /></a>
        </div>
      </div><!--inner-->
    </div>
  </div>
</div>
<?
	include_once   "./popup_div.php";
?>
</body>
</html>
<script type="text/javascript">
    // 유튜브 반복 재생
    var controllable_player,start, 
    statechange = function(e){
		if (e.data === 0)
		{
			$("#fake_btn").hide();
			$("#real_btn").show();
		}
		else if (e.data === 1)
		{
		}
		else if (e.data === 2)
		{
		}
		else if (e.data === 5)
		{
		}
    	//controllable_player.playVideo(); 
    };
    function onYouTubeIframeAPIReady() {
		controllable_player = new YT.Player('ytplayer', {events: {'onStateChange': statechange}}); 
    }

    if(window.opera){
		addEventListener('load', onYouTubeIframeAPIReady, false);
    }
	setTimeout(function(){
    	if (typeof(controllable_player) == 'undefined'){
    		onYouTubeIframeAPIReady();
    	}
		//$(".cover_area").css("background","url('./images/movCover.png') repeat");

    }, 1000)


$(document).ready(function() {

	//처음 화면 크기에 따라 영상및 커버 크기 변경
	var width = $(window).width();
	$("#ytplayer").width(width);
	var youtube_height = (width / 16) * 9;
	$("#ytplayer").height(youtube_height);

	// 팝업 jQuery 스타일
	$('.popup-with-zoom-anim').magnificPopup({
		type: 'inline',
		fixedContentPos: true,
		fixedBgPos: true,
		overflowY: 'hidden',
		closeBtnInside: true,
		//preloader: false,
		midClick: true,
		removalDelay: 300,
		mainClass: 'my-mfp-zoom-in',
		showCloseBtn : false,
		closeOnBgClick: true,
		callbacks: {
			open: function() {
			},
			close: function() {
			}
		}
	});
});

</script>