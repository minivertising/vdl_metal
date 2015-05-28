<?
	include_once   "./header.php";
?>
<div class="popup_wrap">
  <div class="p_mid p_position big">
    <div class="block_close clearfix">
      <a href="index.php" class="btn_close"><img src="images/popup/btn_close_w.png" /></a>
    </div>
    <div class="block_content">
      <div class="inner">
        <div class="title title_input"><img src="images/popup/bg_thanks.png" /></div>
        <div class="block_sns">
          <a href="#" onclick="movie_share('facebook')"><img src="images/popup/btn_share_fb.png" /></a>
          <a href="#" onclick="movie_share('kakao')" id="kakao-link-btn"><img src="images/popup/btn_share_kt.png" /></a>
          <a href="#" onclick="movie_share('story')"><img src="images/popup/btn_share_ks.png" /></a>
          <a href="#" onclick="movie_share('twitter')"><img src="images/popup/btn_share_tw.png" /></a>
        </div>
        <div class="block_btn">
          <a href="index.php" class="common_3"><img src="images/popup/btn_ok.png" /></a>
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
Kakao.init('050c56bc8b9f3d019a9daa270fc255b9');

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
		var newWindow = window.open('https://twitter.com/intent/tweet?text=' + encodeURIComponent("VDL MEETS SHIN MINA 신민아 셀피의 비밀을 말하다. 신민아 셀피의 비밀 힌트 영상을 보고 퀴즈를 맞춰주세요! 맞추신 분에게는 VDL 뷰티 메탈쿠션 파운데이션과 LG전자 G4를 선물로 드려요!") + '&url='+ encodeURIComponent('http://www.mnv.kr/?media=twshare'),'sharer','toolbar=0,status=0,width=600,height=325');
		$.ajax({
			type   : "POST",
			async  : false,
			url    : "../main_exec.php",
			data:{
				"exec" : "insert_share_info",
				"media" : media
			}
		});
	}else if (media == "kakao"){
		media	= "ktmovie";

		// 카카오톡 링크 버튼을 생성합니다. 처음 한번만 호출하면 됩니다.
		Kakao.Link.createTalkLinkButton({
		  container: '#kakao-link-btn',
		  label: "VDL MEETS SHIN MINA\r\n신민아 셀피의 비밀 힌트 영상을 보고 퀴즈를 맞춰주세요! 맞추신 분에게는 VDL 뷰티 메탈 쿠션 파운데이션과 LG전자 G4를 선물로 드려요!",
		  image: {
			src: 'http://www.belifbomb.com/MOBILE/img/sns_image.png',
			width: '1200',
			height: '630'
		  },
		  webButton: {
			text: 'VDL MEETS SHIN MINA',
			url: 'http://www.mnv.kr/?media=kakao' // 앱 설정의 웹 플랫폼에 등록한 도메인의 URL이어야 합니다.
		  }
		});
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
							content:"VDL MEETS SHIN MINA\r\n신민아 셀피의 비밀 힌트 영상을 보고 퀴즈를 맞춰주세요! 맞추신 분에게는 VDL 뷰티 메탈 쿠션 파운데이션과 LG전자 G4를 선물로 드려요!"
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

</script>