<?
	include_once   "./header.php";
?>
<style>
body{
	background:#000;
}

</style>
	<div class="popup_wrap">
   	  	<div class="p_mid p_position movie">
            <div class="block_close clearfix">
                <a href="index.php" class="btn_close"><img src="images/popup/btn_close_w.png" /></a>
            </div>
            <div class="block_content">
            	<div class="inner">
 					<div style="width:100%; background:#000;">
                    <iframe allowfullscreen="1" src="<?=$_gl['youtube_url4']?>" frameborder="0" id="ytplayer" class="ytplayer"></iframe>
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

});

</script>