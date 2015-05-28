<?
	include_once   "./header.php";
?>
<div class="popup_wrap">
  <div class="p_mid p_position big">
    <div class="block_close clearfix">
      <a href="#confirm1_alert" class="btn_close popup-with-zoom-anim"><img src="images/popup/btn_close_w.png" /></a>
    </div>
    <div class="block_content">
      <div class="inner">
        <div class="title title_input"><img src="images/popup/title_input.png" /></div>
        <div class="block_input_bg">
        </div>
        <div class="block_input clearfix">
          <div class="label"><img src="images/popup/label_name.png" /></div>
          <div class="input_txt name"><input type="text" name="mb_name" id="mb_name"></div>
        </div>
        <div class="block_input clearfix">
          <div class="label"><img src="images/popup/label_phone.png" /></div>
          <div class="input_txt">
            <div class="inner_phone clearfix">
              <div class="in_phone"><input type="text" name="mb_phone1" id="mb_phone1"></div>
              <div class="in_dash">-</div>
              <div class="in_phone"><input type="text" name="mb_phone2" id="mb_phone2" onkeyup="chk_len(this.value)"></div>
              <div class="in_dash">-</div>
              <div class="in_phone"><input type="text" name="mb_phone3" id="mb_phone3" onkeyup="chk_len2(this.value)"></div>
            </div>
          </div>
        </div>
        <div class="block_input notice clearfix">
          <div class="label"><img src="images/popup/blank.png"  class="blank"/></div>
          <div class="input_txt">
            <img src="images/popup/txt_notice.png" />
          </div>
        </div>
        <div class="block_ckeck">
          <div class="inner_check all clearfix">
            <div class="in_check"><input type="checkbox" name="all_agree" id="all_agree" class="all_chk_cl"></div>
            <div class="label_check">전체약관에 동의합니다.</div>
          </div>
          <div class="bar"></div>
          <div class="inner_check clearfix">
            <div class="in_check"><input type="checkbox" name="use_agree" id="use_agree"></div>
            <div class="label_check">동의합니다.</div>
            <div class="btn_check"><a href="#pop_use_agree" class="popup-with-zoom-anim">개인정보 활용 약관</a></div>
          </div>
          <div class="inner_check clearfix">
            <div class="in_check"><input type="checkbox" name="privacy_agree" id="privacy_agree"></div>
            <div class="label_check">동의합니다.</div>
            <div class="btn_check"><a href="#pop_privacy_agree" class="popup-with-zoom-anim">개인정보 취급위탁동의 약관</a></div>
          </div>
          <div class="inner_check clearfix">
            <div class="in_check"><input type="checkbox" name="adver_agree" id="adver_agree"></div>
            <div class="label_check">동의합니다.</div>
            <div class="btn_check"><a href="#pop_adver_agree" class="popup-with-zoom-anim">광고성 정보 전송 동의 약관</a></div>
          </div>
        </div>
        <div class="block_btn">
          <a href="#" onclick="input_info();" class="common_3"><img src="images/popup/btn_input_ok.png" /></a>
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
	// 체크박스 스타일 설정
	$('.block_ckeck input').on('ifChecked ifUnchecked', function(event){
		//alert(this.id);
	}).iCheck({
		checkboxClass: 'icheckbox_flat-blue',
		radioClass: 'iradio_square-blue',
		increaseArea: '0%'
	});

	$('.all_chk_cl').on('ifChecked', function(event){
		$('.block_ckeck input').iCheck('check');
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
		closeOnBgClick: true,
		callbacks: {
			open: function() {
			},
			close: function() {
			}
		}
	});
});

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
			location.href = "popup_thanks.php";
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

</script>