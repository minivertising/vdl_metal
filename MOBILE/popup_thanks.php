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
	}else if (media == "kakao"){
		media	= "ktmovie";

		// 카카오톡 링크 버튼을 생성합니다. 처음 한번만 호출하면 됩니다.
		Kakao.Link.createTalkLinkButton({
		  container: '#kakao-link-btn',
		  label: "지금 정해진 시간안에 폭탄 크림을 터트리면 빌리프의 다양한 선물이 쏟아집니다.\r\n\r\n더 많은 이벤트 자세히 보기",
		  image: {
			src: 'http://www.belifbomb.com/MOBILE/img/sns_image.png',
			width: '1200',
			height: '630'
		  },
		  webButton: {
			text: '수분폭탄, 즐거움이 터진다',
			url: 'http://www.belifbomb.com/?media=kakao' // 앱 설정의 웹 플랫폼에 등록한 도메인의 URL이어야 합니다.
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

</script>