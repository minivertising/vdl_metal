<?
	include_once   "./header.php";
?>
<!--contents_wrap-->
<div class="contents_wrap">
<!--area1-->


  <div class="wrap_menu">
    <!--icon_area-->
      <div class="icon_area">
        <a href="http://www.vdlcosmetics.com/product/index.jsp" target="_blank"><img src="images/btn_top_home.png" alt=""/></a>
        <a href="http://www.vdlcosmetics.com/product/index.jsp" target="_blank"><img src="images/btn_top_shop.png" alt=""/></a>
        <a href="http://www.vdlcosmetics.com/product/collection/list.jsp" target="_blank"><img src="images/btn_top_trend.png" alt=""/></a>
        <a href="http://www.vdlcosmetics.com/story/story.jsp" target="_blank"><img src="images/btn_top_meet.png" alt=""/></a>
        <a href="http://blog.naver.com/vdlcosmetic" target="_blank"><img src="images/btn_top_blog.png" alt=""/></a>
        <a href="http://www.vdlcosmetics.com/lounge/social.jsp" target="_blank"><img src="images/btn_top_social.png" alt=""/></a>
      </div>
    <!--icon_area-->    
    <!--icon_area-->
      <div class="block_logo">  
        <a href="#"><img src="images/logo_vdl.png" alt=""/></a>
      </div>
    <!--icon_area-->
      <div class="icon_area2">
        <a href="#" onclick="move_area('mv')"><img src="images/btn_gnb_mv_on.png" alt="" id="menu_navi1"/></a>
        <a href="#" onclick="move_area('life')"><img src="images/btn_gnb_mina_off.png" alt="" id="menu_navi2"/></a>
        <a href="#" onclick="move_area('event')"><img src="images/btn_gnb_event_off.png" alt="" id="menu_navi3"/></a>
        <a href="#" onclick="move_area('metal')"><img src="images/btn_gnb_metal_off.png" alt="" id="menu_navi4"/></a>
        <div class="sns">
        	<a href="#" onclick="sns_share('facebook');"><img src="images/btn_sns_fb.png" alt=""/></a>
        	<a href="#" onclick="sns_share('story');"><img src="images/btn_sns_ks.png" alt=""/></a>
            <a href="#" onclick="sns_share('twitter');"><img src="images/btn_sns_tw.png" alt=""/></a>
        	
        </div>
      </div>      
  </div>


  <div class="area1">
<!--video_area-->
    <div class="video_area">
<!--youtube_div-->
      <div class="youtube_div">
        <iframe allowfullscreen="1" src="<?=$_gl['youtube_url']?>" frameborder="0" id="ytplayer" class="ytplayer"></iframe>
      </div>
<!--youtube_div-->
<!--cover_area-->
      <div class="cover_area">
      </div>
<!--cover_area-->

    
    
<!--center_menu_area-->
      <div class="center_menu_area">
        <div class="title">
        	<div><img src="images/title.png" alt=""/></div>
   	    	<div class="btn_view_mv"><a href="#movie_pop" class="popup-with-zoom-anim"><img src="images/bt_top_play.png" alt=""/></a></div>
        </div>
      </div>
<!--center_menu_area-->
<!--scroll_navi_area-->
      <div class="scroll_navi_area">
	    <a href="#" onclick="move_area('life')"><img src="images/btn_go_down.png" alt=""/></a>
      </div>
<!--scroll_navi_area-->
    </div>
<!--video_area-->
  </div>
<!--area1-->




<!--area2-->
<div class="area2_bg bg2" style="display:none">
  <div class="area4">
  	<div class="inner">
  		<div class="title_mina"><img src="images/title_mina.png" alt=""/></div>
        <div class="txt_mina">
        	<div class="inner_txt_mina clearfix">
                <div class="arrow_left"><a href="#" onclick="prev_txt();return false;"><img src="images/btn_arrow_left.png" alt=""/></a></div>
                <div class="mina_txt" id="mina_txt1"><img src="images/txt_mina_say_1.png" alt=""/></div>
                <div class="mina_txt" id="mina_txt2" style="display:none"><img src="images/txt_mina_say_2.png" alt=""/></div>
                <div class="mina_txt" id="mina_txt3" style="display:none"><img src="images/txt_mina_say_3.png" alt=""/></div>
                <div class="arrow_right"><a href="#" onclick="next_txt();return false;"><img src="images/btn_arrow_right.png" alt=""/></a></div>
            </div>
        </div>
    </div>
  </div>
 </div>
<!--area2-->


<!--area4-->
<div class="area4_bg" style="display:none;height:900px">
  <div class="area4">
  	<div class="tag_event"><img src="images/title_sec_event.png" alt=""/></div>
    
    <div class="btn_event">
<?
	if ($IE7 == "Y")
	{
?>
    	<a href="#" onclick="start_api();open_pop('IE7_event_movie','')"><img src="images/btn_event.png" alt=""/></a>
<?
	}else{
?>
    	<a href="#event_movie" class="popup-with-zoom-anim" onclick="start_api();"><img src="images/btn_event.png" alt=""/></a>
<?
	}
?>

    </div>

    <div class="video_area">
    <!--youtube_div-->
          <div class="youtube_div">
            <iframe allowfullscreen="1" src="<?=$_gl['youtube_url4']?>" frameborder="0" id="ytplayer_viral" class="ytplayer_viral"></iframe>
          </div>
    <!--youtube_div-->
    <!--cover_area-->
          <div class="cover_area">
          </div>
    <!--cover_area-->
    </div>
        
  </div>
 </div>  
<!--area4-->

<!--area5-->
<div class="area5_bg" style="display:none">
  <div class="area5">
    <div class="inner">
        <div class="txt_pro">
        	<div class="inner_txt_pro clearfix">
                <div class="arrow_left"><a href="#" onclick="prev_txt2();return false;"><img src="images/btn_arrow_left.png" alt=""/></a></div>
                <div class="mina_txt" id="metal_txt1"><img src="images/txt_pro_1.png" alt=""/></div>
                <div class="mina_txt" id="metal_txt2" style="display:none"><img src="images/txt_pro_2.png" alt=""/></div>
                <div class="mina_txt" id="metal_txt3" style="display:none"><img src="images/txt_pro_3.png" alt=""/></div>
                <div class="arrow_right"><a href="#" onclick="next_txt2();return false;"><img src="images/btn_arrow_right.png" alt=""/></a></div>
            </div>
        </div>
    </div>
  </div>
 </div>  
<!--area5-->

<!--footer-->
  <div class="footer" style="display:none">
    <img src="images/footer.png" alt=""/>
  </div>
<!--footer-->



<!--quickmenu-->
<div class="quickmenu">
  <a href="#"><img src="images/btn_top.png" width="45" height="45" alt=""/></a>
</div>
<!--quickmenu-->
      <div id="player_wrap" style="display:none;z-index:10;position:absolute">
        <iframe allowfullscreen="1" src="<?=$_gl['youtube_url2']?>" frameborder="0" id="ytplayer2" class="ytplayer2" style="width:100%;height:100%;"></iframe>
      </div>

</div>
    <div class="mask"></div>
<?
	include_once   "./popup_div.php";
?>
  </body>
</html>
<?
	if ($IE7 == "Y")
	{
?>
<script type="text/javascript">
function movie_share(media)
{
	if (media == "facebook")
	{
		media	= "fbmovie";
		var newWindow = window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent('https://youtu.be/eefSEWT_1jI'),'sharer','toolbar=0,status=0,width=600,height=325');
		$.ajax({
			type   : "POST",
			async  : false,
			url    : "../main_exec.php",
			data:{
				"exec" : "insert_share_info",
				"media" : media
			}
		});
	}else if (media == "twitter"){
		media	= "twmovie";
		var newWindow = window.open('https://twitter.com/intent/tweet?text=' + encodeURIComponent("VDL MEETS KAKAO FRIENDS! 친구에게 메시지를 보내고 컬렉션 제품이 담긴 VDL FRIENDS KIT를 받으세요! 참여만 해도 5천원 할인 쿠폰을 드려요.") + '&url='+ encodeURIComponent('https://youtu.be/eefSEWT_1jI'),'sharer','toolbar=0,status=0,width=600,height=325');
		$.ajax({
			type   : "POST",
			async  : false,
			url    : "../main_exec.php",
			data:{
				"exec" : "insert_share_info",
				"media" : media
			}
		});
	}else{
		alert("해당 브라우저에서는 지원하지 않는 기능입니다.");
	}
}

function sns_share(media)
{
	if (media == "facebook")
	{
		var newWindow = window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent('http://www.mnv.kr/?media=fbshare'),'sharer','toolbar=0,status=0,width=600,height=325');
		$.ajax({
			type   : "POST",
			async  : false,
			url    : "../main_exec.php",
			data:{
				"exec" : "insert_share_info",
				"media" : media
			}
		});
	}else if (media == "twitter"){
		var newWindow = window.open('https://twitter.com/intent/tweet?text=' + encodeURIComponent("VDL MEETS KAKAO FRIENDS! 친구에게 메시지를 보내고 컬렉션 제품이 담긴 VDL FRIENDS KIT를 받으세요! 참여만 해도 5천원 할인 쿠폰을 드려요.") + '&url='+ encodeURIComponent('http://www.mnv.kr/?media=twshare'),'sharer','toolbar=0,status=0,width=600,height=325');
		$.ajax({
			type   : "POST",
			async  : false,
			url    : "../main_exec.php",
			data:{
				"exec" : "insert_share_info",
				"media" : media
			}
		});
	}else{
		alert("해당 브라우저에서는 지원하지 않는 기능입니다.");
	}
}

function open_pop(param, param2)
{
	$(".mask").width($(window).width());
	$(".mask").height($(window).height());

	$(".mask").show();

	if (param2 != "")
		$("#" + param2).hide();
	
	$("#" + param).show();
}

function close_pop(param, param2)
{
	$(".mask").width($(window).width());
	$(".mask").height($(window).height());

	$(".mask").show();

	if (param != "")
	{
		$("#" + param).hide();
		$(".mask").hide();
	}
	$("#" + param2).show();
}

function start_api()
{
	$("#IE7_fake_btn").show();
	$("#IE7_real_btn").hide();

	// 유튜브 반복 재생
	var controllable_player,start, 
	statechange = function(e){
		if (e.data === 0) // 종료됨
		{
			$("#IE7_fake_btn").hide();
			$("#IE7_real_btn").show();
			//$("#btn_sel_cloud").attr("data-mfp-src","#share_present");
			//$("#btn_sel_cloud").attr("class","popup-with-zoom-anim");
			//$("#btn_event_wait").hide();
			//$("#btn_event").show();
		}
	};
	function onYouTubeIframeAPIReady() {
		controllable_player = new YT.Player('IE7_ytplayer_pop', {events: {'onStateChange': statechange}}); 
	}

	if(window.opera){
		addEventListener('load', onYouTubeIframeAPIReady, false);
	}

	//alert(typeof(controllable_player));
	if (typeof(controllable_player) == 'undefined'){
		onYouTubeIframeAPIReady();
	}
}

function input_word()
{
	$("#IE7_event_movie").hide();
	$("#IE7_event_answer").show();
}

function chktxt(param) 
{
	if (param.id == "IE7_answer_input1")
	{
		if (param.value == "메")
		{
			$("#IE7_answer_input2").focus();
		}
	}else if (param.id == "IE7_answer_input2"){
		if (param.value == "탈")
		{
			$("#IE7_answer_input3").focus();
		}
	}else if (param.id == "IE7_answer_input3"){
		if (param.value == "쿠")
		{
			$("#IE7_answer_input4").focus();
		}
	}else if (param.id == "IE7_answer_input4"){
		if (param.value == "션")
		{
			$("#IE7_answer_input4").blur();
		}
	}
}

function answer_complete()
{
	var answer_txt1	= $("#IE7_answer_input1").val();
	var answer_txt2	= $("#IE7_answer_input2").val();
	var answer_txt3	= $("#IE7_answer_input3").val();
	var answer_txt4	= $("#IE7_answer_input4").val();
	var answer_txt	= answer_txt1 + answer_txt2 + answer_txt3 + answer_txt4;
	if (answer_txt == "메탈쿠션")
	{
		open_pop("IE7_right_answer_alert", "IE7_event_answer");
	}else{
		$("#IE7_answer_input1").val("");
		$("#IE7_answer_input2").val("");
		$("#IE7_answer_input3").val("");
		$("#IE7_answer_input4").val("");
		open_pop("IE7_wrong_answer_alert", "IE7_event_answer");
	}
}

function input_info()
{
	var mb_name	= $("#IE7_mb_name").val();
	var mb_phone1	= $("#IE7_mb_phone1").val();
	var mb_phone2	= $("#IE7_mb_phone2").val();
	var mb_phone3	= $("#IE7_mb_phone3").val();
	var mb_phone	= mb_phone1 + "-" + mb_phone2 + "-" + mb_phone3;

	if (mb_name == "")
	{
		open_pop("IE7_pop_input", "IE7_event_input");

		//$("#mb_name").focus();
		return false;
	}

	if (mb_phone2 == "")
	{
		open_pop("IE7_pop_input", "IE7_event_input");
		return false;
	}

	if (mb_phone3 == "")
	{
		open_pop("IE7_pop_input", "IE7_event_input");
		return false;
	}

	if ($('#IE7_use_agree').is(":checked") == false)
	{
		open_pop("IE7_pop_use_agree_alert", "IE7_event_input");
		return false;
	}

	if ($('#IE7_privacy_agree').is(":checked") == false)
	{
		open_pop("IE7_pop_privacy_agree_alert", "IE7_event_input");
		return false;
	}

	if ($('#IE7_adver_agree').is(":checked") == false)
	{
		open_pop("IE7_pop_adver_agree_alert", "IE7_event_input");
		return false;
	}

	$.ajax({
		type:"POST",
		data:{
			"exec"					: "insert_info",
			"mb_name"		: mb_name,
			"mb_phone"		: mb_phone
		},
		url: "../main_exec.php",
		success: function(response){
			open_pop("IE7_pop_thanks", "IE7_event_input");
		}
	});
}

</script>
<?
	}else{
?>
<script type="text/javascript">
function movie_share(media)
{
	if (media == "facebook")
	{
		media	= "fbmovie";
		var newWindow = window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent('https://youtu.be/eefSEWT_1jI'),'sharer','toolbar=0,status=0,width=600,height=325');
		$.ajax({
			type   : "POST",
			async  : false,
			url    : "../main_exec.php",
			data:{
				"exec" : "insert_share_info",
				"media" : media
			}
		});
	}else if (media == "twitter"){
		media	= "twmovie";
		var newWindow = window.open('https://twitter.com/intent/tweet?text=' + encodeURIComponent("VDL MEETS KAKAO FRIENDS! 친구에게 메시지를 보내고 컬렉션 제품이 담긴 VDL FRIENDS KIT를 받으세요! 참여만 해도 5천원 할인 쿠폰을 드려요.") + '&url='+ encodeURIComponent('https://youtu.be/eefSEWT_1jI'),'sharer','toolbar=0,status=0,width=600,height=325');
		$.ajax({
			type   : "POST",
			async  : false,
			url    : "../main_exec.php",
			data:{
				"exec" : "insert_share_info",
				"media" : media
			}
		});
	}else{
		media	= "stmovie";
		// 로그인 창을 띄웁니다.
		Kakao.Auth.login({
			success: function() {

				// 로그인 성공시, API를 호출합니다.
				Kakao.API.request( {
					url : '/v1/api/story/linkinfo',
					data : {
						url : 'https://youtu.be/eefSEWT_1jI'
					}
				}).then(function(res) {
					// 이전 API 호출이 성공한 경우 다음 API를 호출합니다.
					return Kakao.API.request( {
						url : '/v1/api/story/post/link',
						data : {
						link_info : res,
							content:"VDL MEETS SHIN MINA,\r\n특별한 피부의 새로운 시작, 진화된 [메탈 쿠션]을 만나다.\r\첫 화장 그대로 화사하고 깨끗한 피부를 연출해주는 VDL의 베스트 셀링 아이템, 뷰티 메탈 쿠션 파운데이션. 무결점 피부의 새로운 뮤즈 신민아가 완벽한 쿠션 선택을 제안한다."
						}
					});
				}).then(function(res) {
					return Kakao.API.request( {
						url : '/v1/api/story/mystory',
						data : { id : res.id }
					});
				}).then(function(res) {
					$.ajax({
						type   : "POST",
						async  : false,
						url    : "../main_exec.php",
						data:{
							"exec" : "insert_share_info",
							"media" : media	
						}
					});
					alert("카카오스토리에 공유 되었습니다.");
				}, function (err) {
					alert(JSON.stringify(err));
				});

			},
			fail: function(err) {
				alert(JSON.stringify(err))
			},
		});
	}
}

function sns_share(media)
{
	if (media == "facebook")
	{
		var newWindow = window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent('http://www.mnv.kr/?media=fbshare'),'sharer','toolbar=0,status=0,width=600,height=325');
		$.ajax({
			type   : "POST",
			async  : false,
			url    : "../main_exec.php",
			data:{
				"exec" : "insert_share_info",
				"media" : media
			}
		});
	}else if (media == "twitter"){
		var newWindow = window.open('https://twitter.com/intent/tweet?text=' + encodeURIComponent("VDL MEETS KAKAO FRIENDS! 친구에게 메시지를 보내고 컬렉션 제품이 담긴 VDL FRIENDS KIT를 받으세요! 참여만 해도 5천원 할인 쿠폰을 드려요.") + '&url='+ encodeURIComponent('http://www.mnv.kr/?media=twshare'),'sharer','toolbar=0,status=0,width=600,height=325');
		$.ajax({
			type   : "POST",
			async  : false,
			url    : "../main_exec.php",
			data:{
				"exec" : "insert_share_info",
				"media" : media
			}
		});
	}else{
		// 로그인 창을 띄웁니다.
		Kakao.Auth.login({
			success: function() {

				// 로그인 성공시, API를 호출합니다.
				Kakao.API.request( {
					url : '/v1/api/story/linkinfo',
					data : {
						url : 'http://www.mnv.kr/?media=ksshare'
					}
				}).then(function(res) {
					// 이전 API 호출이 성공한 경우 다음 API를 호출합니다.
					return Kakao.API.request( {
						url : '/v1/api/story/post/link',
						data : {
						link_info : res,
							content:"VDL MEETS SHIN MINA,\r\n특별한 피부의 새로운 시작, 진화된 [메탈 쿠션]을 만나다.\r\첫 화장 그대로 화사하고 깨끗한 피부를 연출해주는 VDL의 베스트 셀링 아이템, 뷰티 메탈 쿠션 파운데이션. 무결점 피부의 새로운 뮤즈 신민아가 완벽한 쿠션 선택을 제안한다."
						}
					});
				}).then(function(res) {
					return Kakao.API.request( {
						url : '/v1/api/story/mystory',
						data : { id : res.id }
					});
				}).then(function(res) {
					$.ajax({
						type   : "POST",
						async  : false,
						url    : "../main_exec.php",
						data:{
							"exec" : "insert_share_info",
							"media" : "story"
						}
					});
					alert("카카오스토리에 공유 되었습니다.");
				}, function (err) {
					alert(JSON.stringify(err));
				});

			},
			fail: function(err) {
				alert(JSON.stringify(err))
			},
		});
	}
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

	if (typeof(controllable_player) == 'undefined'){
		onYouTubeIframeAPIReady();
	}
}

function input_word()
{
	setTimeout("popup_desc('event_answer');",500);
}

function chktxt(param) 
{
	if (param.id == "answer_input1")
	{
		if (param.value == "메")
		{
			$("#answer_input2").focus();
		}
	}else if (param.id == "answer_input2"){
		if (param.value == "탈")
		{
			$("#answer_input3").focus();
		}
	}else if (param.id == "answer_input3"){
		if (param.value == "쿠")
		{
			$("#answer_input4").focus();
		}
	}else if (param.id == "answer_input4"){
		if (param.value == "션")
		{
			$("#answer_input4").blur();
		}
	}
}

function answer_complete()
{
	var answer_txt1	= $("#answer_input1").val();
	var answer_txt2	= $("#answer_input2").val();
	var answer_txt3	= $("#answer_input3").val();
	var answer_txt4	= $("#answer_input4").val();
	var answer_txt	= answer_txt1 + answer_txt2 + answer_txt3 + answer_txt4;
	if (answer_txt == "메탈쿠션")
	{
		setTimeout("popup_desc('right_answer_alert');",500);
	}else{
		$("#answer_input1").val("");
		$("#answer_input2").val("");
		$("#answer_input3").val("");
		$("#answer_input4").val("");
		setTimeout("popup_desc('wrong_answer_alert');",500);
	}
}

function input_info()
{
	var mb_name	= $("#mb_name").val();
	var mb_phone1	= $("#mb_phone1").val();
	var mb_phone2	= $("#mb_phone2").val();
	var mb_phone3	= $("#mb_phone3").val();
	var mb_phone	= mb_phone1 + "-" + mb_phone2 + "-" + mb_phone3;

	if (mb_name == "")
	{
		setTimeout("popup_desc('pop_input');",500);

		$("#mb_name").focus();
		return false;
	}

	if (mb_phone2 == "")
	{
		setTimeout("popup_desc('pop_input');",500);

		$("#mb_phone2").focus();
		return false;
	}

	if (mb_phone3 == "")
	{
		setTimeout("popup_desc('pop_input');",500);

		$("#mb_phone3").focus();
		return false;
	}

	if ($('#use_agree').is(":checked") == false)
	{
		setTimeout("popup_desc('pop_use_agree_alert');",500);
		return false;
	}

	if ($('#privacy_agree').is(":checked") == false)
	{
		setTimeout("popup_desc('pop_privacy_agree_alert');",500);
		return false;
	}

	if ($('#adver_agree').is(":checked") == false)
	{
		setTimeout("popup_desc('pop_adver_agree_alert');",500);
		return false;
	}

	$.ajax({
		type:"POST",
		data:{
			"exec"					: "insert_info",
			"mb_name"		: mb_name,
			"mb_phone"		: mb_phone
		},
		url: "../main_exec.php",
		success: function(response){
			setTimeout("popup_desc('pop_thanks');",500);
		}
	});
}

</script>
<?
	}
?>
<script type="text/javascript">
var txt_num = 0;
var txt_num2 = 0;

    // 유튜브 반복 재생
    var controllable_player1,start, 
    statechange = function(e){
		if (e.data === 0)
		{
			controllable_player1.seekTo(0); controllable_player1.playVideo();controllable_player1.mute();
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
		controllable_player1 = new YT.Player('ytplayer', {events: {'onStateChange': statechange}}); 
    }

    // 유튜브 반복 재생
    var controllable_player2,start, 
    statechange2 = function(e){
		if (e.data === 0)
		{
			controllable_player2.seekTo(0); controllable_player2.playVideo();controllable_player2.mute();
		}
		else if (e.data === 1)
		{
			controllable_player2.mute();
		}
		else if (e.data === 2)
		{
		}
		else if (e.data === 5)
		{
		}
    	//controllable_player.playVideo(); 
    };
    function onYouTubeIframeAPIReady2() {
		controllable_player2 = new YT.Player('ytplayer_viral', {events: {'onStateChange': statechange2}}); 
    }

    if(window.opera){
		addEventListener('load', onYouTubeIframeAPIReady2, false);
    }
	setTimeout(function(){
    	if (typeof(controllable_player2) == 'undefined'){
    		onYouTubeIframeAPIReady2();
    	}
		//$(".cover_area").css("background","url('./images/movCover.png') repeat");

    }, 1000)

	// quick menu
	var quickTop;
	var navi1;
	var navi2;
	var navi3;
	var navi4;
$(window).scroll(function() {
	quickTop = ($(window).height()-$('.quickmenu').height()) /2;
	$('.quickmenu').stop().animate({top:$(window).scrollTop()+quickTop},400,'easeOutExpo');

	navi1	= $('.area1').height() - 135;
	navi2	= $('.area1').height() + $('.area2_bg').height() - 135;
	navi3	= $('.area1').height() + $('.area2_bg').height() + $('.area4_bg').height() - 135;
	navi4	= $('.area1').height() + $('.area2_bg').height() + $('.area4_bg').height() + $('.area5_bg').height() - 135;
	if ($(window).scrollTop() < navi1)
	{
		$("#menu_navi1").attr('src','images/btn_gnb_mv_on.png');
		$("#menu_navi2").attr('src','images/btn_gnb_mina_off.png');
		$("#menu_navi3").attr('src','images/btn_gnb_event_off.png');
		$("#menu_navi4").attr('src','images/btn_gnb_metal_off.png');
		controllable_player1.playVideo();
	}else if (navi1 <= $(window).scrollTop() && $(window).scrollTop() <= navi2){
		$("#menu_navi1").attr('src','images/btn_gnb_mv_off.png');
		$("#menu_navi2").attr('src','images/btn_gnb_mina_on.png');
		$("#menu_navi3").attr('src','images/btn_gnb_event_off.png');
		$("#menu_navi4").attr('src','images/btn_gnb_metal_off.png');
		controllable_player1.pauseVideo();
	}else if (navi2 <= $(window).scrollTop() && $(window).scrollTop() <= navi3){
		$("#menu_navi1").attr('src','images/btn_gnb_mv_off.png');
		$("#menu_navi2").attr('src','images/btn_gnb_mina_off.png');
		$("#menu_navi3").attr('src','images/btn_gnb_event_on.png');
		$("#menu_navi4").attr('src','images/btn_gnb_metal_off.png');
	}else{
		$("#menu_navi1").attr('src','images/btn_gnb_mv_off.png');
		$("#menu_navi2").attr('src','images/btn_gnb_mina_off.png');
		$("#menu_navi3").attr('src','images/btn_gnb_event_off.png');
		$("#menu_navi4").attr('src','images/btn_gnb_metal_on.png');
	}

});

$(window).resize(function(){
	var width = $(window).width();
	var youtube_height = (width / 16) * 9;
	$("#ytplayer").width(width);
	$("#ytplayer").height(youtube_height);
	$("#ytplayer_viral").width(width);
	$("#ytplayer_viral").height(youtube_height);
	$("#cover_area").width($("#ytplayer").width());
	$("#cover_area").height($("#ytplayer").height());
});

$(document).ready(function() {

	//처음 화면 크기에 따라 영상및 커버 크기 변경
	var width = $(window).width();
	$("#ytplayer").width(width);
	$("#ytplayer_viral").width(width);
	$("#ytplayer_pop").width(630);
	$("#IE7_ytplayer_pop").width(630);
	$("#cover_area").width($("#ytplayer").width());
	var youtube_height = (width / 16) * 9;
	var youtubepop_height = (630 / 16) * 9;
	$("#ytplayer").height(youtube_height);
	$("#ytplayer_viral").height(youtube_height);
	$("#ytplayer_pop").height(youtubepop_height);
	$("#IE7_ytplayer_pop").height(youtubepop_height);
	$("#cover_area").height($("#ytplayer").height());

	// 체크박스 스타일 설정
	$('#event_input input').on('ifChecked ifUnchecked', function(event){
		//alert(this.id);
	}).iCheck({
		checkboxClass: 'icheckbox_flat-blue',
		radioClass: 'iradio_square-blue',
		increaseArea: '0%'
	});

	$('.all_chk_cl').on('ifChecked', function(event){
		$('.zoom-anim-dialog input').iCheck('check');
	});

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
		closeOnBgClick: false,
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

	$(".area2_bg").show();
	$(".area3_bg").show();
	$(".area4_bg").show();
	$(".area5_bg").show();
	$(".footer").show();

	//setInterval(function(){
	//	$('.scroll_navi_area').animate({bottom:150},500).animate({bottom:160},500);
	//},1000);

	// 퀵메뉴 기본 위치
	var quick_height	= $(window).height()/2;
	$('.quickmenu').css("top",quick_height);

	$( '.quickmenu' ).click( function() {
		$( 'html, body' ).animate( { scrollTop : 0 }, 800 );
		return false;
	} );

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
		$("#mina_txt1").fadeOut("fast", function(){
			$("#mina_txt3").fadeIn("fast", function(){
				txt_num = 2;
			});
		});
	}else if (txt_num == 1){
		$("#mina_txt2").fadeOut("fast", function(){
			$("#mina_txt1").fadeIn("fast", function(){
				txt_num = 0;
			});
		});
	}else{
		$("#mina_txt3").fadeOut("fast", function(){
			$("#mina_txt2").fadeIn("fast", function(){
				txt_num = 1;
			});
		});
	}
}

function next_txt()
{
	if (txt_num == 0)
	{
		$("#mina_txt1").fadeOut("fast", function(){
			$("#mina_txt2").fadeIn("fast", function(){
				txt_num = 1;
			});
		});
	}else if (txt_num == 1){
		$("#mina_txt2").fadeOut("fast", function(){
			$("#mina_txt3").fadeIn("fast", function(){
				txt_num = 2;
			});
		});
	}else{
		$("#mina_txt3").fadeOut("fast", function(){
			$("#mina_txt1").fadeIn("fast", function(){
				txt_num = 0;
			});
		});
	}
}

function prev_txt2()
{
	if (txt_num2 == 0)
	{
		$("#metal_txt1").fadeOut("fast", function(){
			$("#metal_txt3").fadeIn("fast", function(){
				txt_num2 = 2;
			});
		});
	}else if (txt_num2 == 1){
		$("#metal_txt2").fadeOut("fast", function(){
			$("#metal_txt1").fadeIn("fast", function(){
				txt_num2 = 0;
			});
		});
	}else{
		$("#metal_txt3").fadeOut("fast", function(){
			$("#metal_txt2").fadeIn("fast", function(){
				txt_num2 = 1;
			});
		});
	}
}

function next_txt2()
{
	if (txt_num2 == 0)
	{
		$("#metal_txt1").fadeOut("fast", function(){
			$("#metal_txt2").fadeIn("fast", function(){
				txt_num2 = 1;
			});
		});
	}else if (txt_num2 == 1){
		$("#metal_txt2").fadeOut("fast", function(){
			$("#metal_txt3").fadeIn("fast", function(){
				txt_num2 = 2;
			});
		});
	}else{
		$("#metal_txt3").fadeOut("fast", function(){
			$("#metal_txt1").fadeIn("fast", function(){
				txt_num2 = 0;
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

function popup_desc(param)
{
	$.magnificPopup.open({
		items: {
			src: '#' + param+ ''
		},
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
		closeOnBgClick: false,
		callbacks: {
			open: function() {
			},
			close: function() {
				//chk_ins = 0;
				//chk_ins2 = 0;
				//$("#mb_receive").val("");
				//$("#mb_send").val("");
				//$("#mb_message").val("");
			}
		}
	}, 0);
}

function move_area(area)
{
	if (area == "mv")
	{
		$( 'html, body' ).animate({ scrollTop: 0},500);
	}else if (area == "life"){
		$( 'html, body' ).animate({ scrollTop: $(".area1").height() - 130},500);
	}else if (area == "event"){
		$( 'html, body' ).animate({ scrollTop: $(".area1").height() + $(".area2_bg").height() - 130},500);
	}else if (area == "metal"){
		$( 'html, body' ).animate({ scrollTop: $(".area1").height() + $(".area2_bg").height() + $(".area4_bg").height() - 130},500);
	}
}


</script>
