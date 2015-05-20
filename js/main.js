
function sns_share(media)
{
	if (media == "facebook")
	{
		var newWindow = window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent('http://www.mnv.kr/?media=facebook'),'sharer','toolbar=0,status=0,width=600,height=325');
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
		// 카카오톡 링크 버튼을 생성합니다. 처음 한번만 호출하면 됩니다.
		Kakao.Link.createTalkLinkButton({
		  container: '#kakao-link-btn',
		  label: "VDL MEETS KAKAO FRIENDS\r\nVDL FRIENDS KIT를 받아라!\r\n\r\n친구에게 메시지를 보내고 5천원 할인 쿠폰과 VDL 프렌즈 키트를 받자! 친구에게 메시지만 보내도 VDL 한정 컬렉션 제품을 받을 수 있는 기회가 온다!",
		  image: {
			src: 'http://www.mnv.kr/MOBILE/images/img_sns_share_new.jpg',
			width: '1200',
			height: '630'
		  },
		  webButton: {
			text: 'VDL 써머 컬렉션',
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
	}else if (media == "twitter"){
		var newWindow = window.open('https://twitter.com/intent/tweet?text=' + encodeURIComponent("VDL MEETS KAKAO FRIENDS 친구에게 메시지를 보내고 컬렉션 제품이 담긴 VDL FRIENDS KIT를 받아가세요! 참여만해도 5천원 할인 쿠폰을 드려요.") + '&url='+ encodeURIComponent('http://bit.ly/1Egma1r'),'sharer','toolbar=0,status=0,width=600,height=325');
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
						url : 'http://www.mnv.kr/?media=story'
					}
				}).then(function(res) {
					// 이전 API 호출이 성공한 경우 다음 API를 호출합니다.
					return Kakao.API.request( {
						url : '/v1/api/story/post/link',
						data : {
						link_info : res,
							content:"VDL MEETS KAKAO FRIENDS 친구에게 메시지를 보내고 컬렉션 제품이 담긴 VDL FRIENDS KIT를 받아가세요! 참여만해도 5천원 할인 쿠폰을 드려요."
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

function send_kakao()
{
	var k_url = $("#c_url").text();
	// 카카오톡 링크 버튼을 생성합니다. 처음 한번만 호출하면 됩니다.
	Kakao.Link.createTalkLinkButton({
	  container: '#kakao-link-btn',
	  label: "VDL 플러스 친구 맺고 카카오프렌즈 KIT 받자!!\r\n아래 링크 클릭해서 플러스 친구 가입\r\n" + k_url,
	  image: {
		src: 'http://www.mnv.kr/MOBILE/images/img_sns_share_new.jpg',
		width: '1200',
		height: '630'
	  },
	  webButton: {
		text: 'VDL x KAKAO',
		url: 'http://www.mnv.kr/?media=sendkakao' // 앱 설정의 웹 플랫폼에 등록한 도메인의 URL이어야 합니다.
	  }
	});
}

function chk_len(val)
{
	if (val.length == 4)
	{
		$("#mb_phone3").focus();
	}
}

function chk_len2(val)
{
	if (val.length == 4)
	{
		$("#mb_phone3").blur();
	}
}

function tog_col(param)
{
	if (param == "1")
	{
		//$("#sub_menu").show();
	}else if (param == "2"){
		//$("#sub_menu").show();
	}else{
		if ($("#sub_menu").css("display") == "block")
			$("#sub_menu").hide();
		else
			$("#sub_menu").show();
	}
}

function show_event()
{
	popup_desc('pop_event_main');
}

function input_message()
{
	if (chk_ins == 0)
	{
		chk_ins = 1;
		var mb_receive		= $("#mb_receive").val();
		var mb_message	= $("#mb_message").val();
		var mb_send			= $("#mb_send").val();

		if (mb_receive == "")
		{

			//alert('개인정보 입력을 안 하셨습니다');
			setTimeout("ins_message_data();",500);

			$("#mb_receive").focus();
			chk_ins = 0;
			return false;
		}

		if (mb_message == "")
		{

			//alert('개인정보 입력을 안 하셨습니다');
			setTimeout("ins_message_data();",500);

			$("#mb_message").focus();
			chk_ins = 0;
			return false;
		}

		if (mb_send == "")
		{

			//alert('개인정보 입력을 안 하셨습니다');
			setTimeout("ins_message_data();",500);

			$("#mb_send").focus();
			chk_ins = 0;
			return false;
		}

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
	}
}

function m_input_message()
{
	if (chk_ins == 0)
	{
		chk_ins = 1;
		var mb_receive		= $("#mb_receive").val();
		var mb_message	= $("#mb_message").val();
		var mb_send			= $("#mb_send").val();

		if (mb_receive == "")
		{

			//alert('개인정보 입력을 안 하셨습니다');
			setTimeout("ins_message_data();",500);

			$("#mb_receive").focus();
			chk_ins = 0;
			return false;
		}

		if (mb_message == "")
		{

			//alert('개인정보 입력을 안 하셨습니다');
			setTimeout("ins_message_data();",500);

			$("#mb_message").focus();
			chk_ins = 0;
			return false;
		}

		if (mb_send == "")
		{

			//alert('개인정보 입력을 안 하셨습니다');
			setTimeout("ins_message_data();",500);

			$("#mb_send").focus();
			chk_ins = 0;
			return false;
		}

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
				//setTimeout("ins2_data('" + response + "');",500);
				location.href = "./popup_input2.php";
			}
		});
	}
}

function input_message2()
{
	if (chk_ins2 == 0)
	{
		chk_ins = 1;
		var mb_name		= $("#mb_name").val();
		var mb_phone1		= $("#mb_phone1").val();
		var mb_phone2		= $("#mb_phone2").val();
		var mb_phone3		= $("#mb_phone3").val();
		var mb_phone		= mb_phone1 + "-" + mb_phone2 + "-" + mb_phone3;
		//var mb_idx			= $("#mb_idx").val();
		if (mb_name == "")
		{

			//alert('개인정보 입력을 안 하셨습니다');
			setTimeout("ins_data2();",500);

			$("#mb_name").focus();
			return false;
		}

		if (mb_phone1 == "")
		{

			//alert('개인정보 입력을 안 하셨습니다');
			setTimeout("ins_data2();",500);

			$("#mb_phone1").focus();
			return false;
		}

		if (mb_phone2 == "")
		{

			//alert('개인정보 입력을 안 하셨습니다');
			setTimeout("ins_data2();",500);

			$("#mb_phone2").focus();
			return false;
		}

		if (mb_phone3 == "")
		{

			//alert('개인정보 입력을 안 하셨습니다');
			setTimeout("ins_data2();",500);

			$("#mb_phone3").focus();
			return false;
		}

		if ($('#use_agree').is(":checked") == false)
		{
			//alert("개인정보 활용 동의를 안 하셨습니다");
			setTimeout("agree_use_data();",500);
			return false;
		}

		if ($('#privacy_agree').is(":checked") == false)
		{
			//alert("개인정보 활용 동의를 안 하셨습니다");
			setTimeout("agree_privacy_data();",500);
			return false;
		}

		if ($('#adver_agree').is(":checked") == false)
		{
			//alert("개인정보 활용 동의를 안 하셨습니다");
			setTimeout("agree_adver_data();",500);
			return false;
		}

		$.ajax({
			type:"POST",
			data:{
				"exec"					: "insert_message2",
				"mb_name"		: mb_name,
				"mb_phone"		: mb_phone
			},
			url: "../main_exec.php",
			success: function(response){
				if (response == "E")
				{
					alert("사용자가 많습니다. 다시 참여해 주세요.");
				}else if (response == "N"){
					alert("사용자가 많습니다. 다시 참여해 주세요.");
				}else{
					//$("#mb_idx").val(response);
					$("#c_url").html(response);
					setTimeout("thanks_data('" + response + "');",500);
				}
			}
		});
	}

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
				chk_ins = 0;
				chk_ins2 = 0;
				//$("#mb_receive").val("");
				//$("#mb_send").val("");
				//$("#mb_message").val("");
			}
		}
	}, 0);
}

function move_area(area)
{
	if (area == "kit")
	{
		$( 'html, body' ).animate({ scrollTop: $(".sec_summer").height() + $(".sec_movie").height() + 75},500);
	}else if (area == "collection"){
		$( 'html, body' ).animate({ scrollTop: $(".sec_summer").height() - 75},500);
	}
}

function ins2_data(idx)
{
	popup_desc('pop_event_input2');
}

function thanks_data(url)
{
	popup_desc('pop_event_thank');
}

function ins_data()
{
	popup_desc('pop_input1');
}

function ins_message_data()
{
	popup_desc('pop_message_input1');
}

function ins_data2()
{
	popup_desc('pop_input2');
}

function agree_use_data()
{
	popup_desc('pop_use_agree_alert');
}

function agree_privacy_data()
{
	popup_desc('pop_privacy_agree_alert');
}

function agree_adver_data()
{
	popup_desc('pop_adver_agree_alert');
}


function copy_url(ss_url)
{
	//window.clipboardData.setData('text',"11<?=$_SESSION['ss_url']?>");
    //alert("클립보드에 복사되었습니다.");
	var text = $("#c_url").text();
	if(window.clipboardData){
		// IE처리
		// 클립보드에 문자열 복사
		window.clipboardData.setData('text', text);
	} else {
		// 비IE 처리    
		window.prompt ("Ctrl+C를 눌러 메시지 URL을 복사해주세요!", text);  
	}
}

function m_copy_url(ss_url)
{
	//window.clipboardData.setData('text',"11<?=$_SESSION['ss_url']?>");
    //alert("클립보드에 복사되었습니다.");
	var text = $("#c_url").text();
	if(window.clipboardData){
		// IE처리
		// 클립보드에 문자열 복사
		window.clipboardData.setData('text', text);
	} else {
		// 비IE 처리    
		window.prompt ("URL을 복사해주세요!", text);  
	}
}

function stop_cha(param)
{
	if (param == "1")
	{
		clearInterval(interval_id);
		$("#muzi_cha").attr("src","images/chra_1_1.png");
		$("#peach_cha").attr("src","images/chra_2_2.png");
		$("#neo_cha").attr("src","images/chra_3_2.png");
	}else if (param == "2"){
		clearInterval(interval_id);
		$("#muzi_cha").attr("src","images/chra_1_2.png");
		$("#peach_cha").attr("src","images/chra_2_1.png");
		$("#neo_cha").attr("src","images/chra_3_2.png");
	}else{
		clearInterval(interval_id);
		$("#muzi_cha").attr("src","images/chra_1_2.png");
		$("#peach_cha").attr("src","images/chra_2_2.png");
		$("#neo_cha").attr("src","images/chra_3_1.png");
	}
}

function move_cha(param)
{
	interval_id	= setInterval(function(){
		if (cha_gubun == 0)
		{
			$('#muzi_cha').attr("src","images/chra_1_1.png");
			$('#peach_cha').attr("src","images/chra_2_1.png");
			$('#neo_cha').attr("src","images/chra_3_1.png");
			cha_gubun = 1;
			cha_back_gubun = 0;
		}else if (cha_gubun == 1){
			$('#muzi_cha').attr("src","images/chra_1_2.png");
			$('#peach_cha').attr("src","images/chra_2_2.png");
			$('#neo_cha').attr("src","images/chra_3_2.png");
			if (cha_back_gubun == 0)
				cha_gubun = 2;
			else
				cha_gubun = 0;
		}else{
			$('#muzi_cha').attr("src","images/chra_1_3.png");
			$('#peach_cha').attr("src","images/chra_2_3.png");
			$('#neo_cha').attr("src","images/chra_3_3.png");
			cha_gubun = 1;
			cha_back_gubun = 1;
		}
	},800);
}

function m_stop_cha(param)
{
	if (param == "1")
	{
		clearInterval(interval_id);
		$("#muzi_cha").attr("src","images/img_ch_1.png");
		$("#peach_cha").attr("src","images/img_ch_2_2.png");
		$("#neo_cha").attr("src","images/img_ch_3_2.png");
	}else if (param == "2"){
		clearInterval(interval_id);
		$("#muzi_cha").attr("src","images/img_ch_1_1.png");
		$("#peach_cha").attr("src","images/chra_2.png");
		$("#neo_cha").attr("src","images/img_ch_3_2.png");
	}else{
		clearInterval(interval_id);
		$("#muzi_cha").attr("src","images/img_ch_1_1.png");
		$("#peach_cha").attr("src","images/img_ch_2_2.png");
		$("#neo_cha").attr("src","images/img_ch_3.png");
	}
}

function m_move_cha(param)
{
	interval_id	= setInterval(function(){
		if (cha_gubun == 0)
		{
			$('#muzi_cha').attr("src","images/img_ch_1_1.png");
			$('#peach_cha').attr("src","images/img_ch_2_2.png");
			$('#neo_cha').attr("src","images/img_ch_3_2.png");
			cha_gubun = 1;
		}else{
			$('#muzi_cha').attr("src","images/img_ch_1.png");
			$('#peach_cha').attr("src","images/img_ch_2.png");
			$('#neo_cha').attr("src","images/img_ch_3.png");
			cha_gubun = 0;
		}
	},800);
}

function go_friends(serial)
{
	$.ajax({
		type:"POST",
		data:{
			"exec"			: "join_friends",
			"serial"		: serial
		},
		url: "../main_exec.php",
		success: function(response){
			if (response == "N"){
				alert("사용자가 많습니다. 다시 참여해 주세요.");
			}else{
				location.href = "http://plus.kakao.com/home/@vdl";
			}
		}
	});
}

var col_muzi_cnt = 0;
var col_apeach_cnt = 0;
var col_neo_cnt = 0;
function prev_collection(param)
{
	if (param == "muzi")
	{
		if (col_muzi_cnt == 0)
		{
			$("#muzi_block1").fadeOut("fast", function(){
				$("#thumb_muzi1").removeClass("selected");
				$("#thumb_muzi3").addClass("selected");
				$("#muzi_block3").fadeIn("fast", function(){
					col_muzi_cnt = 2;
				});
			});
		}else if (col_muzi_cnt == 1){
			$("#muzi_block2").fadeOut("fast", function(){
				$("#thumb_muzi2").removeClass("selected");
				$("#thumb_muzi1").addClass("selected");
				$("#muzi_block1").fadeIn("fast", function(){
					col_muzi_cnt = 0;
				});
			});
		}else if (col_muzi_cnt == 2){
			$("#muzi_block3").fadeOut("fast", function(){
				$("#thumb_muzi3").removeClass("selected");
				$("#thumb_muzi2").addClass("selected");
				$("#muzi_block2").fadeIn("fast", function(){
					col_muzi_cnt = 1;
				});
			});
		}
	}else if (param == "apeach"){
		if (col_apeach_cnt == 0)
		{
			$("#apeach_block1").fadeOut("fast", function(){
				$("#thumb_apeach1").removeClass("selected");
				$("#thumb_apeach5").addClass("selected");
				$("#apeach_block5").fadeIn("fast", function(){
					col_apeach_cnt = 4;
				});
			});
		}else if (col_apeach_cnt == 1){
			$("#apeach_block2").fadeOut("fast", function(){
				$("#thumb_apeach2").removeClass("selected");
				$("#thumb_apeach1").addClass("selected");
				$("#apeach_block1").fadeIn("fast", function(){
					col_apeach_cnt = 0;
				});
			});
		}else if (col_apeach_cnt == 2){
			$("#apeach_block3").fadeOut("fast", function(){
				$("#thumb_apeach3").removeClass("selected");
				$("#thumb_apeach2").addClass("selected");
				$("#apeach_block2").fadeIn("fast", function(){
					col_apeach_cnt = 1;
				});
			});
		}else if (col_apeach_cnt == 3){
			$("#apeach_block4").fadeOut("fast", function(){
				$("#thumb_apeach4").removeClass("selected");
				$("#thumb_apeach3").addClass("selected");
				$("#apeach_block3").fadeIn("fast", function(){
					col_apeach_cnt = 2;
				});
			});
		}else if (col_apeach_cnt == 4){
			$("#apeach_block5").fadeOut("fast", function(){
				$("#thumb_apeach5").removeClass("selected");
				$("#thumb_apeach4").addClass("selected");
				$("#apeach_block4").fadeIn("fast", function(){
					col_apeach_cnt = 3;
				});
			});
		}
	}else{
		if (col_neo_cnt == 0)
		{
			$("#neo_block1").fadeOut("fast", function(){
				$("#thumb_neo1").removeClass("selected");
				$("#thumb_neo4").addClass("selected");
				$("#neo_block4").fadeIn("fast", function(){
					col_neo_cnt = 3;
				});
			});
		}else if (col_neo_cnt == 1){
			$("#neo_block2").fadeOut("fast", function(){
				$("#thumb_neo2").removeClass("selected");
				$("#thumb_neo1").addClass("selected");
				$("#neo_block1").fadeIn("fast", function(){
					col_neo_cnt = 0;
				});
			});
		}else if (col_neo_cnt == 2){
			$("#neo_block3").fadeOut("fast", function(){
				$("#thumb_neo3").removeClass("selected");
				$("#thumb_neo2").addClass("selected");
				$("#neo_block2").fadeIn("fast", function(){
					col_neo_cnt = 1;
				});
			});
		}else if (col_neo_cnt == 3){
			$("#neo_block4").fadeOut("fast", function(){
				$("#thumb_neo4").removeClass("selected");
				$("#thumb_neo3").addClass("selected");
				$("#neo_block3").fadeIn("fast", function(){
					col_neo_cnt = 2;
				});
			});
		}
	}
}

function next_collection(param)
{
	if (param == "muzi")
	{
		if (col_muzi_cnt == 0)
		{
			$("#muzi_block1").fadeOut("fast", function(){
				$("#thumb_muzi1").removeClass("selected");
				$("#thumb_muzi2").addClass("selected");
				$("#muzi_block2").fadeIn("fast", function(){
					col_muzi_cnt = 1;
				});
			});
		}else if (col_muzi_cnt == 1){
			$("#muzi_block2").fadeOut("fast", function(){
				$("#thumb_muzi2").removeClass("selected");
				$("#thumb_muzi3").addClass("selected");
				$("#muzi_block3").fadeIn("fast", function(){
					col_muzi_cnt = 2;
				});
			});
		}else if (col_muzi_cnt == 2){
			$("#muzi_block3").fadeOut("fast", function(){
				$("#thumb_muzi3").removeClass("selected");
				$("#thumb_muzi1").addClass("selected");
				$("#muzi_block1").fadeIn("fast", function(){
					col_muzi_cnt = 0;
				});
			});
		}
	}else if (param == "apeach"){
		if (col_apeach_cnt == 0)
		{
			$("#apeach_block1").fadeOut("fast", function(){
				$("#thumb_apeach1").removeClass("selected");
				$("#thumb_apeach2").addClass("selected");
				$("#apeach_block2").fadeIn("fast", function(){
					col_apeach_cnt = 1;
				});
			});
		}else if (col_apeach_cnt == 1){
			$("#apeach_block2").fadeOut("fast", function(){
				$("#thumb_apeach2").removeClass("selected");
				$("#thumb_apeach3").addClass("selected");
				$("#apeach_block3").fadeIn("fast", function(){
					col_apeach_cnt = 2;
				});
			});
		}else if (col_apeach_cnt == 2){
			$("#apeach_block3").fadeOut("fast", function(){
				$("#thumb_apeach3").removeClass("selected");
				$("#thumb_apeach4").addClass("selected");
				$("#apeach_block4").fadeIn("fast", function(){
					col_apeach_cnt = 3;
				});
			});
		}else if (col_apeach_cnt == 3){
			$("#apeach_block4").fadeOut("fast", function(){
				$("#thumb_apeach4").removeClass("selected");
				$("#thumb_apeach5").addClass("selected");
				$("#apeach_block5").fadeIn("fast", function(){
					col_apeach_cnt = 4;
				});
			});
		}else if (col_apeach_cnt == 4){
			$("#apeach_block5").fadeOut("fast", function(){
				$("#thumb_apeach5").removeClass("selected");
				$("#thumb_apeach1").addClass("selected");
				$("#apeach_block1").fadeIn("fast", function(){
					col_apeach_cnt = 0;
				});
			});
		}
	}else{
		if (col_neo_cnt == 0)
		{
			$("#neo_block1").fadeOut("fast", function(){
				$("#thumb_neo1").removeClass("selected");
				$("#thumb_neo2").addClass("selected");
				$("#neo_block2").fadeIn("fast", function(){
					col_neo_cnt = 1;
				});
			});
		}else if (col_neo_cnt == 1){
			$("#neo_block2").fadeOut("fast", function(){
				$("#thumb_neo2").removeClass("selected");
				$("#thumb_neo3").addClass("selected");
				$("#neo_block3").fadeIn("fast", function(){
					col_neo_cnt = 2;
				});
			});
		}else if (col_neo_cnt == 2){
			$("#neo_block3").fadeOut("fast", function(){
				$("#thumb_neo3").removeClass("selected");
				$("#thumb_neo4").addClass("selected");
				$("#neo_block4").fadeIn("fast", function(){
					col_neo_cnt = 3;
				});
			});
		}else if (col_neo_cnt == 3){
			$("#neo_block4").fadeOut("fast", function(){
				$("#thumb_neo4").removeClass("selected");
				$("#thumb_neo1").addClass("selected");
				$("#neo_block1").fadeIn("fast", function(){
					col_neo_cnt = 0;
				});
			});
		}
	}
}

var chk_sel_thumb = 0;
function sel_thumb(chac, num)
{
	if (chk_sel_thumb == 0)
	{
		chk_sel_thumb = 1;
		if (chac == "muzi")
		{
			var sel_muzi_num	= col_muzi_cnt + 1;
			$("#" + chac + "_block" + sel_muzi_num).fadeOut("fast", function(){
				$("#thumb_" + chac + sel_muzi_num).removeClass("selected");
				$("#thumb_" + chac + num).addClass("selected");
				$("#" + chac + "_block" + num).fadeIn("fast", function(){
					col_muzi_cnt = num - 1;
					chk_sel_thumb = 0;
				});
			});
		}else if (chac == "apeach"){
			var sel_apeach_num	= col_apeach_cnt + 1;
			$("#" + chac + "_block" + sel_apeach_num).fadeOut("fast", function(){
				$("#thumb_" + chac + sel_apeach_num).removeClass("selected");
				$("#thumb_" + chac + num).addClass("selected");
				$("#" + chac + "_block" + num).fadeIn("fast", function(){
					col_apeach_cnt = num - 1;
					chk_sel_thumb = 0;
				});
			});
		}else{
			var sel_neo_num	= col_neo_cnt + 1;
			$("#" + chac + "_block" + sel_neo_num).fadeOut("fast", function(){
				$("#thumb_" + chac + sel_neo_num).removeClass("selected");
				$("#thumb_" + chac + num).addClass("selected");
				$("#" + chac + "_block" + num).fadeIn("fast", function(){
					col_neo_cnt = num - 1;
					chk_sel_thumb = 0;
				});
			});
		}
	}
}

var m_chk_sel_thumb = 0;
function m_sel_thumb(chac, num)
{
	if (m_chk_sel_thumb == 0)
	{
		m_chk_sel_thumb = 1;
		if (chac == "muzi")
		{
			var sel_muzi_num	= col_muzi_cnt + 1;
			$("#" + chac + "_block" + sel_muzi_num).fadeOut("fast", function(){
				$("#thumb_" + chac + sel_muzi_num).removeClass("selected");
				$("#muzi_txt_block" + sel_muzi_num).fadeOut("fast");
				$("#thumb_" + chac + num).addClass("selected");
				$("#" + chac + "_block" + num).fadeIn("fast", function(){
					$("#muzi_txt_block" + num).fadeIn("fast");
					col_muzi_cnt = num - 1;
					m_chk_sel_thumb = 0;
				});
			});
		}else if (chac == "apeach"){
			var sel_apeach_num	= col_apeach_cnt + 1;
			$("#" + chac + "_block" + sel_apeach_num).fadeOut("fast", function(){
				$("#thumb_" + chac + sel_apeach_num).removeClass("selected");
				$("#apeach_txt_block" + sel_apeach_num).fadeOut("fast");
				$("#thumb_" + chac + num).addClass("selected");
				$("#" + chac + "_block" + num).fadeIn("fast", function(){
					$("#apeach_txt_block" + num).fadeIn("fast");
					col_apeach_cnt = num - 1;
					m_chk_sel_thumb = 0;
				});
			});
		}else{
			var sel_neo_num	= col_neo_cnt + 1;
			$("#" + chac + "_block" + sel_neo_num).fadeOut("fast", function(){
				$("#thumb_" + chac + sel_neo_num).removeClass("selected");
				$("#neo_txt_block" + sel_neo_num).fadeOut("fast");
				$("#thumb_" + chac + num).addClass("selected");
				$("#" + chac + "_block" + num).fadeIn("fast", function(){
					$("#neo_txt_block" + num).fadeIn("fast");
					col_neo_cnt = num - 1;
					m_chk_sel_thumb = 0;
				});
			});
		}
	}
}

function show_menu()
{
	if ($("#mobile_menu").css("display") == "block")
	{
		$('#mobile_menu').animate({right:-200},300,'linear',function(){
			$("#mobile_menu").hide();
			$(".mask").fadeOut(300);
			$(window).off(".disableScroll");
		});
	}else{
		$(".mask").width($(window).width());
		$(".mask").height($(window).height());
		$(".mask").fadeTo(1000, 0.6);

		$('#mobile_menu').css('right','-200px');
		// 이동위치값 지정
		var position = 0;
		$('#mobile_menu').show().animate({right:position},300,'linear');

		$(window).on("mousewheel.disableScroll DOMMouseScroll.disableScroll touchmove.disableScroll", function(e) {
			e.preventDefault();
			return;
		});
	}
}

function chk_len(val)
{
	if (val.length == 4)
	{
		$("#mb_phone3").focus();
	}
}

function chk_len2(val)
{
	if (val.length == 4)
	{
		$("#mb_phone3").blur();
	}
}

function check_message(param)
{
	if (param == "receive")
	{
		var string1 = $("#mb_receive").val();
		if (getStringLength(string1) > 20)
		{
			alert("20자 이하로만 메세지를 작성하실 수 있습니다.");
		}
	}else if (param == "send"){
		var string2 = $("#mb_send").val();
		if (getStringLength(string2) > 20)
		{
			alert("20자 이하로만 메세지를 작성하실 수 있습니다.");
		}
	}else{
		var string3 = $("#mb_message").val();
		if (getStringLength(string3) > 200)
		{
			alert("200자 이하로만 메세지를 작성하실 수 있습니다.");
		}
	}
}

// 문자열 길이 체크 알파뉴메릭(1자리), 한글(2자리)
function getStringLength (str)
{
	var retCode = 0;
	var strLength = 0;

	for (i = 0; i < str.length; i++)
	{
	var code = str.charCodeAt(i)
	var ch = str.substr(i,1).toUpperCase()

	code = parseInt(code)

	if ((ch < "0" || ch > "9") && (ch < "A" || ch > "Z") && ((code > 255) || (code < 0)))
	strLength = strLength + 2;
	else
	strLength = strLength + 1;
	}
	return strLength;
}

function use_coupon(serial)
{
	if (confirm('쿠폰을 사용하시겠습니까?'))
	{
		$.ajax({
			type:"POST",
			data:{
				"exec"			: "use_coupon",
				"serial"		: serial
			},
			url: "../main_exec.php",
			success: function(response){
				if (response == "N"){
					alert("사용자가 많습니다. 다시 참여해 주세요.");
				}else{
					location.reload();
				}
			}
		});
	}
}

function only_num(obj)
{
	var inText = obj.value;
	var outText = "";
	var flag = true;
	var ret;
	for(var i = 0; i < inText.length; i++)
	{
		ret = inText.charCodeAt(i);
		if((ret < 48) || (ret > 57))
		{
			flag = false;
		}
		else
		{
			outText += inText.charAt(i);
		}
	}
 
	if(flag == false)
	{
		alert("전화번호란에 숫자입력만 가능합니다.");
		obj.value = outText;
		obj.focus();
		return false;
	} 
	return true;
}

