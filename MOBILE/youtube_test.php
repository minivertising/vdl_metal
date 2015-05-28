<?
	include_once   "./header.php";
?>
        <div style="width:100%; background:#000; margin-bottom:10px;">
          <iframe allowfullscreen="1" src="<?=$_gl['youtube_url2']?>" frameborder="0" id="ytplayer" class="ytplayer"></iframe>
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

$(window).on("orientationchange",function(){
   if(window.orientation == 0) // Portrait
      {
	var width = $(window).width();
	var height = $(window).height();
	alert(height);
	$("#ytplayer").width(width);
	var youtube_height = (width / 16) * 9;
	$("#ytplayer").height(youtube_height);
      }
   else // Landscape
      {
	var width = $(window).width();
	alert(width);
	$("#ytplayer").width(width);
	var youtube_height = (width / 16) * 9;
	$("#ytplayer").height(youtube_height);
      }
});
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