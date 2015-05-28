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
        <div class="title title_input"><img src="images/popup/title_event2.png" /></div>
        <div class="quiz">
          <div class="block_input">
            <div class="inner_input clearfix">
              <div><input type="text" name="answer_input1" id="answer_input1" onkeyup="chktxt(this)" maxlength="1"></div>
              <div><input type="text" name="answer_input2" id="answer_input2" onkeyup="chktxt(this)" maxlength="1"></div>
              <div><input type="text" name="answer_input3" id="answer_input3" onkeyup="chktxt(this)" maxlength="1"></div>
              <div><input type="text" name="answer_input4" id="answer_input4" onkeyup="chktxt(this)" maxlength="1"></div>
            </div>
          </div>
          <div class="btn_hint">
            <a href="#hint_alert" class="popup-with-zoom-anim"><img src="images/popup/btn_hint.png" /></a>
          </div>
          <div class="bg_qiuz"><img src="images/popup/bg_quiz.png" /></div>
        </div>
        <div class="block_btn">
          <a href="#" onclick="answer_complete()" class="common_3"><img src="images/popup/btn_quiz_comp.png" /></a>
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

$(document).ready(function() {
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


</script>