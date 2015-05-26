<?
	include_once   "./header.php";
?>
    <div id="header_wrap" style="width:100%;height:70px;background:skyblue;z-index:19995">
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
      <div id="area1">
        <div id="video_area">
          <div class="youtube_div">
            <iframe allowfullscreen="1" src="<?=$_gl['youtube_url']?>" frameborder="0" id="ytplayer" class="ytplayer"></iframe>
          </div>
          <div id="cover_area" style="position : absolute;top : 0;left : 0;width : 100%;height : 100%;background : url('./images/movCover.png') repeat;overflow : hidden;z-index : 10;">
          </div>
        </div>
      </div>
      <div>
        <a href="#" onclick="prev_txt();return false;"><</a>
        <div id="metal_txt1">
          "쿠션 하나도 특별하게, 그게 제 스타일이에요."
        </div>
        <div id="metal_txt2" style="display:none">
          "메탈쿠션2222222222"
        </div>
        <div id="metal_txt3" style="display:none">
          "메탈쿠션3333333333"
        </div>
        <a href="#" onclick="next_txt();return false;">></a>
      </div>
      <div id="player_wrap" style="display:none;z-index:10;position:absolute">
        <iframe allowfullscreen="1" src="<?=$_gl['youtube_url']?>" frameborder="0" id="ytplayer" class="ytplayer" style="width:100%;height:100%;"></iframe>
      </div>
      <div>
        <a href="#event_movie" class="popup-with-zoom-anim" onclick="start_api();">이벤트 참여</a>
      </div>
    </div>
    <div class="mask"></div>
<?
	include_once   "./popup_div.php";
?>

  </body>
</html>
<script type="text/javascript">
var txt_num = 0;

$(window).resize(function(){
	var width = $(window).width();
	var youtube_height = (width / 16) * 9;
	$("#ytplayer").width(width);
	$("#ytplayer").height(youtube_height);
	$("#cover_area").width($("#ytplayer").width());
	$("#cover_area").height($("#ytplayer").height());
});

$(document).ready(function() {
	//처음 화면 크기에 따라 영상및 커버 크기 변경
	var width = $(window).width();
	$("#ytplayer").width(width);
	$("#cover_area").width($("#ytplayer").width());
	var youtube_height = (width / 16) * 9;
	$("#ytplayer").height(youtube_height);
	$("#cover_area").height($("#ytplayer").height());

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


	$(".mask").click(function(){
		$(".mask").fadeOut(300);
		$("#player_wrap").fadeOut(300);
	});
});

function open_video()
{
	$(".mask").width($(window).width());
	$(".mask").height($(window).height());
	$(".mask").fadeIn(300);
	$("#player_wrap").fadeIn(300);
}

function prev_txt()
{
	if (txt_num == 0)
	{
		$("#metal_txt1").fadeOut("fast", function(){
			$("#metal_txt3").fadeIn("fast", function(){
				txt_num = 2;
			});
		});
	}else if (txt_num == 1){
		$("#metal_txt2").fadeOut("fast", function(){
			$("#metal_txt1").fadeIn("fast", function(){
				txt_num = 0;
			});
		});
	}else{
		$("#metal_txt3").fadeOut("fast", function(){
			$("#metal_txt2").fadeIn("fast", function(){
				txt_num = 1;
			});
		});
	}
}

function next_txt()
{
	if (txt_num == 0)
	{
		$("#metal_txt1").fadeOut("fast", function(){
			$("#metal_txt2").fadeIn("fast", function(){
				txt_num = 1;
			});
		});
	}else if (txt_num == 1){
		$("#metal_txt2").fadeOut("fast", function(){
			$("#metal_txt3").fadeIn("fast", function(){
				txt_num = 2;
			});
		});
	}else{
		$("#metal_txt3").fadeOut("fast", function(){
			$("#metal_txt1").fadeIn("fast", function(){
				txt_num = 0;
			});
		});
	}
}

function event_start()
{
	alert(document.body.scrollHeight);
	$(".mask").width($(window).width());
	$(".mask").height($(window).height());
	$(".mask").fadeIn(300);
	$("#event_movie").fadeIn(300);
}

function start_api()
{
	$("#fake_btn").show();
	$("#real_btn").hide();

	// 유튜브 반복 재생
	var controllable_player,start, 
	statechange = function(e){
		if (e.data === 0) // 종료됨
		{
			$("#fake_btn").hide();
			$("#real_btn").show();
			//$("#btn_sel_cloud").attr("data-mfp-src","#share_present");
			//$("#btn_sel_cloud").attr("class","popup-with-zoom-anim");
			//$("#btn_event_wait").hide();
			//$("#btn_event").show();
		}
	};
	function onYouTubeIframeAPIReady() {
		controllable_player = new YT.Player('ytplayer_pop', {events: {'onStateChange': statechange}}); 
	}

	if(window.opera){
		addEventListener('load', onYouTubeIframeAPIReady, false);
	}

	//alert(typeof(controllable_player));
	if (typeof(controllable_player) == 'undefined'){
		onYouTubeIframeAPIReady();
	}
}

function answer_complete()
{
	var answer_txt	= $("#answer_input").val();

	if (answer_txt == "메탈쿠션")
	{
		$.ajax({
			type:"POST",
			data:{
				"exec"					: "insert_message",
				"mb_receive"		: mb_receive,
				"mb_message"		: mb_message,
				"mb_send"			: mb_send
			},
			url: "../main_exec.php",
			success: function(response){
				//alert(response);
				//$("#mb_idx").val(response);
				setTimeout("ins2_data('" + response + "');",500);
			}
		});
	}else{
		alert("정답을 다시 입력해주세요.");
	}
}
</script>