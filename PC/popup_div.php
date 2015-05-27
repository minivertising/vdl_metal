<!----------------- 이벤트 영상보기 팝업 ----------------->
<div id="event_movie" class="popup_wrap zoom-anim-dialog mfp-hide" style="width:650px;top:50%;left:50%;margin-top:-325px;margin-left:-325px;">
  <div class="p_mid_event p_position">
    <div class="block_close clearfix">
      <a href="#confirm1_alert" class="btn_close popup-with-zoom-anim"><img src="images/popup/btn_close.png" /></a>
    </div>
    <div class="block_content">
      <div class="inner">
        <div class="title">
          <img src="images/popup/title_event_1.png" />
        </div>
        <div class="movie">
          <iframe allowfullscreen="1" src="<?=$_gl['youtube_url2']?>" frameborder="0" id="ytplayer_pop" class="ytplayer_pop"></iframe>
        </div>
        <div class="txt_notice">
          <img src="images/popup/txt_notice_movie.png" alt=""/>
        </div>
        <div class="btn_block" id="fake_btn">
          <a href="#" onclick="alert('영상을 끝까지 보셔야 이벤트 참여가 가능합니다.');"><img src="images/popup/btn_end_view.png" alt=""/></a>
        </div>
        <div class="btn_block" id="real_btn" style="display:none;">
          <a href="#" onclick="input_word();"><img src="images/popup/btn_end_view.png" alt=""/></a>
        </div>
      </div><!--inner-->
    </div>
  </div>
</div>
<!----------------- 이벤트 영상보기 팝업 ----------------->

<!----------------- IE7 이벤트 영상보기 팝업 ----------------->
<div id="IE7_event_movie" style="position:absolute;width:800px;height:500px;top:50%;left:50%;margin-top:-250px;margin-left:-400px;background:white;z-index:99999;display:none">
  <iframe allowfullscreen="1" src="<?=$_gl['youtube_url2']?>" frameborder="0" id="IE7_ytplayer_pop" class="IE7_ytplayer_pop" style="width:400px;height:250px;"></iframe>
  <div id="IE7_fake_btn">
    <a href="#" onclick="alert('영상을 끝까지 보셔야 이벤트 참여가 가능합니다.');">힌트 영상보기</a>
  </div>
  <div id="IE7_real_btn" style="display:none;">
    <a href="#" onclick="input_word();">힌트 영상보기</a>
  </div>
</div>
<!----------------- 이벤트 영상보기 팝업 ----------------->

<!----------------- 이벤트 단어넣기 팝업 ----------------->
<div id="event_answer" class="popup_wrap zoom-anim-dialog mfp-hide" style="width:650px;top:50%;left:50%;margin-top:-325px;margin-left:-325px">
  <div class="p_mid_event p_position">
    <div class="block_close clearfix">
      <a href="#confirm2_alert" class="btn_close popup-with-zoom-anim"><img src="images/popup/btn_close.png" /></a>
    </div>
    <div class="block_content">
      <div class="inner">
        <div class="title">
          <img src="images/popup/title_event_2.png" />
        </div>
        <div class="quiz">
          <div class="quiz_inner clearfix">
            <div><input type="text" name="answer_input1" id="answer_input1" onkeyup="chktxt(this)" maxlength="1"></div>
            <div><input type="text" name="answer_input2" id="answer_input2" onkeyup="chktxt(this)" maxlength="1"></div>
            <div><input type="text" name="answer_input3" id="answer_input3" onkeyup="chktxt(this)" maxlength="1"></div>
            <div><input type="text" name="answer_input4" id="answer_input4" onkeyup="chktxt(this)" maxlength="1"></div>
          </div>
          <div class="btn_hint">
            <a href="#"><img src="images/popup/btn_hint.png" alt=""/></a>
          </div>
        </div>
        <div class="btn_block">
          <a href="#" onclick="answer_complete()"><img src="images/popup/btn_event_end.png" alt=""/></a>
        </div>
      </div><!--inner-->
    </div>
  </div>
</div>
<!----------------- 이벤트 단어넣기 팝업 ----------------->

<!----------------- IE7 이벤트 단어넣기 팝업 ----------------->
<div id="IE7_event_answer" style="position:absolute;width:800px;height:500px;top:50%;left:50%;margin-top:-250px;margin-left:-400px;background:white;z-index:99999;display:none">
  <h3>신민아의 셀피 비밀영상 잘 보셨나요?</h3>
  <div>
    <input type="text" name="IE7_answer_input1" id="IE7_answer_input1" onkeyup="chktxt(this)" maxlength="1">
    <input type="text" name="IE7_answer_input2" id="IE7_answer_input2" onkeyup="chktxt(this)" maxlength="1">
    <input type="text" name="IE7_answer_input3" id="IE7_answer_input3" onkeyup="chktxt(this)" maxlength="1">
    <input type="text" name="IE7_answer_input4" id="IE7_answer_input4" onkeyup="chktxt(this)" maxlength="1">
    <a href="#" onclick="answer_complete()">정답입력완료</a>
  </div>
</div>
<!----------------- 이벤트 단어넣기 팝업 ----------------->

<!----------------- 이벤트 개인정보 입력 팝업 ----------------->
<div id="event_input" class="popup_wrap zoom-anim-dialog mfp-hide" style="width:550px;top:50%;left:50%;margin-top:-310px;margin-left:-275px;">
  <div class="p_mid_input p_position">
    <div class="block_close clearfix">
      <a href="#confirm3_alert" class="btn_close popup-with-zoom-anim"><img src="images/popup/btn_close.png" /></a>
    </div>
    <div class="block_content">
      <div class="inner">
        <div class="title">
          <img src="images/popup/title_input.png" />
        </div>
        <div class="block_input">
          <div class="input_one clearfix">
            <div class="label">
              <img src="images/popup/label_name.png" alt=""/>
            </div>
            <div class="input">
              <input type="text" name="mb_name" id="mb_name">
            </div>
          </div>
          <div class="input_one clearfix">
            <div class="label">
              <img src="images/popup/label_phone.png" alt=""/>
            </div>
            <div class="input_phone clearfix">
              <div class="phone_ip"><input type="tel" name="mb_phone1" id="mb_phone1"></div>
              <div class="phone_ip_dash">-</div>
              <div class="phone_ip"><input type="tel" name="mb_phone2" id="mb_phone2"></div>
              <div class="phone_ip_dash">-</div>
              <div class="phone_ip"><input type="tel" name="mb_phone3" id="mb_phone3"></div>
            </div>
          </div>
          <div class="input_one clearfix">
            <div class="label">
            </div>	
            <div class="notice">
              <img src="images/popup/txt_notice.png" alt=""/>
            </div>
          </div>
        </div>
        <div class="check_block">
          <div class="check_one clearfix">
            <div class="in_check">
              <input type="checkbox">
            </div>
            <div class="txt_check">
              <img src="images/popup/label_agree_all.png" alt=""/>
            </div>
          </div>  
          <div class="bar">
          </div>
          <div class="check_one clearfix">
            <div class="in_check">
              <input type="checkbox" name="use_agree" id="use_agree">
            </div>
            <div class="txt_check">
              <img src="images/popup/label_agree.png" alt=""/>
            </div>
            <div class="btn_check">
              <a href="#pop_use_agree" class="popup-with-zoom-anim"><img src="images/popup/btn_agree_info.png" alt=""/></a>
            </div>
          </div>
          <div class="check_one clearfix">
            <div class="in_check">
              <input type="checkbox" name="privacy_agree" id="privacy_agree">
            </div>
            <div class="txt_check">
              <img src="images/popup/label_agree.png" alt=""/>
            </div>
            <div class="btn_check">
              <a href="#pop_privacy_agree" class="popup-with-zoom-anim"><img src="images/popup/btn_agree_agency.png" alt=""/></a>
            </div>
          </div>
          <div class="check_one clearfix">
            <div class="in_check">
              <input type="checkbox" name="adver_agree" id="adver_agree">
            </div>
            <div class="txt_check">
              <img src="images/popup/label_agree.png" alt=""/>
            </div>
            <div class="btn_check">
              <a href="#pop_adver_agree" class="popup-with-zoom-anim"><img src="images/popup/btn_agree_ad.png" alt=""/></a>
            </div>
          </div>
        </div>
        <div class="btn_block">
          <a href="#" onclick="input_info();"><img src="images/popup/btn_input_ok.png" alt=""/></a>
        </div>
      </div><!--inner-->
    </div>
  </div>
</div>
<!----------------- 이벤트 개인정보 입력 팝업 ----------------->

<!----------------- 이벤트 완료 팝업 ----------------->
	<div id="pop_thanks" class="popup_wrap zoom-anim-dialog mfp-hide" style="width:550px;top:50%;left:50%;margin-top:-310px;margin-left:-275px;">
   	  <div class="p_mid_input p_position">
            <div class="block_close clearfix">
                <a href="#" class="btn_close"><img src="images/popup/btn_close.png" /></a>
            </div>
            <div class="block_content">
            	<div class="inner">
                	<div class="title">
       	    	    	<img src="images/popup/img_thanks.png" />
                    </div>
                    
                    
                    <div class="block_sns">
                        <div class="btn_sns">
                            <a href="#" onclick="movie_share('facebook')"><img src="images/popup/btn_share_fb.png" /></a>
                            <a href="#" onclick="movie_share('story')"><img src="images/popup/btn_share_ks.png" /></a>
                            <a href="#" onclick="movie_share('twitter')"><img src="images/popup/btn_share_tw.png" /></a>
                        </div>
                    </div>

                    <div class="btn_block end">
                        <a href="#" onclick="$.magnificPopup.close();"><img src="images/popup/btn_ok_big.png" alt=""/></a>
                    </div>
                </div><!--inner-->
            </div>
        </div>
	</div>
<!----------------- 이벤트 완료 팝업 ----------------->


<!----------------- 개인정보 활용 약관 팝업 ----------------->
<div id="pop_use_agree" class="popup_wrap zoom-anim-dialog mfp-hide" style="width:400px;top:50%;left:50%;margin-top:-250px;margin-left:-200px">
  <div class="p_mid_agree p_position">
    <div class="block_close clearfix">
      <a href="#event_input" class="btn_close popup-with-zoom-anim"><img src="images/popup/btn_close.png" /></a>
    </div>
    <div class="block_content">
      <div class="inner">
                개인정보 수집 · 이용에 대한 동의
                (주)LG생활건강(이하 "LG생활건강")는 이벤트 진행을 위한 개인정보 
                수집 이용을 위하여 다음과 같이 귀하의 동의를 받고자 합니다.
                LG생활건강은 보다 원활한 서비스 제공을 위하여 고객의 정보를 
                수집하고 있습니다. 고객의 정보는 이벤트 서비스에 참여하기 
                위한 필수정보로서 제공을 원하지 않을 경우 수집하지 않으며, 
                동의 거부 시 이벤트 참여에 제한을 받을 수 있습니다.
                (주)LG생활건강은 본 이벤트를 위하여 다음과 같이 고객님의 
                개인정보를 수집 및 이용합니다.
                >수집 · 이용 목적: 이벤트 혜택을 제공하기 위한 정보 전달
                : 이벤트 혜택 이용에 따른 본인확인, 고지사항 전달: 접속 빈도 
                파악 또는 회원의 서비스 이용에 대한 통계> 수집 필수 항목 : 
                이름, 연락처> 보유/이용기간 : 이벤트 종료 후 3개월까지
                (단, 관계 법령에 따라 필요한 경우 해당 법률에서 정한 기간까지)
                개인정보의 취급 위탁 동의
                (주)LG생활건강은 서비스 향상과 원활한 진행을 위하여 개인정보
                 처리 업무를 외부 전문 업체에 위탁하여 처리하고 있습니다.
                고객은 아래와 같은 개인정보 취급 위탁에 동의하지 않을 권리가 
                있으며 동의 거부시 이벤트 참여에 제한을 받을 수 있습니다.
                <취급위탁업체 위탁업무 및 이용목적 : 
                미니버타이징 (주) / 이벤트 대행 및 운영> 
                보유 및 이용기간 : 이벤트 종료 후 3개월까지
                (단, 관계 법령에 따라 필요한 경우 해당 법률에서 정한 기간까지)
      </div><!--inner-->
    </div>
  </div>
</div>
<!----------------- 개인정보 활용 약관 팝업 ----------------->

<!----------------- 개인정보 취급위탁동의 약관 팝업 ----------------->
<div id="pop_privacy_agree" class="popup_wrap zoom-anim-dialog mfp-hide" style="width:400px;top:50%;left:50%;margin-top:-250px;margin-left:-200px">
  <div class="p_mid_agree p_position">
    <div class="block_close clearfix">
      <a href="#event_input" class="btn_close popup-with-zoom-anim"><img src="images/popup/btn_close.png" /></a>
    </div>
    <div class="block_content">
      <div class="inner">
                개인정보 수집 · 이용에 대한 동의
                (주)LG생활건강(이하 "LG생활건강")는 이벤트 진행을 위한 개인정보 
                수집 이용을 위하여 다음과 같이 귀하의 동의를 받고자 합니다.
                LG생활건강은 보다 원활한 서비스 제공을 위하여 고객의 정보를 
                수집하고 있습니다. 고객의 정보는 이벤트 서비스에 참여하기 
                위한 필수정보로서 제공을 원하지 않을 경우 수집하지 않으며, 
                동의 거부 시 이벤트 참여에 제한을 받을 수 있습니다.
                (주)LG생활건강은 본 이벤트를 위하여 다음과 같이 고객님의 
                개인정보를 수집 및 이용합니다.
                >수집 · 이용 목적: 이벤트 혜택을 제공하기 위한 정보 전달
                : 이벤트 혜택 이용에 따른 본인확인, 고지사항 전달: 접속 빈도 
                파악 또는 회원의 서비스 이용에 대한 통계> 수집 필수 항목 : 
                이름, 연락처> 보유/이용기간 : 이벤트 종료 후 3개월까지
                (단, 관계 법령에 따라 필요한 경우 해당 법률에서 정한 기간까지)
                개인정보의 취급 위탁 동의
                (주)LG생활건강은 서비스 향상과 원활한 진행을 위하여 개인정보
                 처리 업무를 외부 전문 업체에 위탁하여 처리하고 있습니다.
                고객은 아래와 같은 개인정보 취급 위탁에 동의하지 않을 권리가 
                있으며 동의 거부시 이벤트 참여에 제한을 받을 수 있습니다.
                <취급위탁업체 위탁업무 및 이용목적 : 
                미니버타이징 (주) / 이벤트 대행 및 운영> 
                보유 및 이용기간 : 이벤트 종료 후 3개월까지
                (단, 관계 법령에 따라 필요한 경우 해당 법률에서 정한 기간까지)
      </div><!--inner-->
    </div>
  </div>
</div>
<!----------------- 개인정보 취급위탁동의 약관 팝업 ----------------->

<!----------------- 광고성 정보전송동의 약관 팝업 ----------------->
<div id="pop_adver_agree" class="popup_wrap zoom-anim-dialog mfp-hide" style="width:400px;top:50%;left:50%;margin-top:-250px;margin-left:-200px">
  <div class="p_mid_agree p_position">
    <div class="block_close clearfix">
      <a href="#event_input" class="btn_close popup-with-zoom-anim"><img src="images/popup/btn_close.png" /></a>
    </div>
    <div class="block_content">
      <div class="inner">
                개인정보 수집 · 이용에 대한 동의
                (주)LG생활건강(이하 "LG생활건강")는 이벤트 진행을 위한 개인정보 
                수집 이용을 위하여 다음과 같이 귀하의 동의를 받고자 합니다.
                LG생활건강은 보다 원활한 서비스 제공을 위하여 고객의 정보를 
                수집하고 있습니다. 고객의 정보는 이벤트 서비스에 참여하기 
                위한 필수정보로서 제공을 원하지 않을 경우 수집하지 않으며, 
                동의 거부 시 이벤트 참여에 제한을 받을 수 있습니다.
                (주)LG생활건강은 본 이벤트를 위하여 다음과 같이 고객님의 
                개인정보를 수집 및 이용합니다.
                >수집 · 이용 목적: 이벤트 혜택을 제공하기 위한 정보 전달
                : 이벤트 혜택 이용에 따른 본인확인, 고지사항 전달: 접속 빈도 
                파악 또는 회원의 서비스 이용에 대한 통계> 수집 필수 항목 : 
                이름, 연락처> 보유/이용기간 : 이벤트 종료 후 3개월까지
                (단, 관계 법령에 따라 필요한 경우 해당 법률에서 정한 기간까지)
                개인정보의 취급 위탁 동의
                (주)LG생활건강은 서비스 향상과 원활한 진행을 위하여 개인정보
                 처리 업무를 외부 전문 업체에 위탁하여 처리하고 있습니다.
                고객은 아래와 같은 개인정보 취급 위탁에 동의하지 않을 권리가 
                있으며 동의 거부시 이벤트 참여에 제한을 받을 수 있습니다.
                <취급위탁업체 위탁업무 및 이용목적 : 
                미니버타이징 (주) / 이벤트 대행 및 운영> 
                보유 및 이용기간 : 이벤트 종료 후 3개월까지
                (단, 관계 법령에 따라 필요한 경우 해당 법률에서 정한 기간까지)
      </div><!--inner-->
    </div>
  </div>
</div>
<!----------------- 광고성 정보전송동의 약관 팝업 ----------------->

<!----------------- 개인정보 입력 alert 팝업 ----------------->
<div id="pop_input" class="popup_wrap zoom-anim-dialog mfp-hide" style="width:400px;top:50%;left:50%;margin-top:-140px;margin-left:-200px">
  <div class="p_alert p_position">
    <div class="block_close clearfix">
      <a href="#event_input" class="btn_close popup-with-zoom-anim"><img src="images/popup/btn_close.png" /></a>
    </div>
    <div class="block_content">
      <div class="inner">
        <div class="title one">
          <img src="images/popup/title_alert_input_info.png" />
        </div>
        <div class="btn_block">
          <a href="#event_input" class="popup-with-zoom-anim"><img src="images/popup/btn_ok.png" alt=""/></a>
        </div>
      </div><!--inner-->
    </div>
  </div>
</div>
<!----------------- 개인정보 입력 alert 팝업 ----------------->

<!----------------- 개인정보 활용약관 alert 팝업 ----------------->
<div id="pop_use_agree_alert" class="popup_wrap zoom-anim-dialog mfp-hide" style="width:400px;top:50%;left:50%;margin-top:-140px;margin-left:-200px">
  <div class="p_alert p_position">
    <div class="block_close clearfix">
      <a href="#event_input" class="btn_close popup-with-zoom-anim"><img src="images/popup/btn_close.png" /></a>
    </div>
    <div class="block_content">
      <div class="inner">
        <div class="title one">
          <img src="images/popup/title_alert_agree_info.png" />
        </div>
        <div class="btn_block">
          <a href="#event_input" class="popup-with-zoom-anim"><img src="images/popup/btn_ok.png" alt=""/></a>
        </div>
      </div><!--inner-->
    </div>
  </div>
</div>
<!----------------- 개인정보 활용약관 alert 팝업 ----------------->

<!----------------- 개인정보 취급위탁 동의약관 alert 팝업 ----------------->
<div id="pop_privacy_agree_alert" class="popup_wrap zoom-anim-dialog mfp-hide" style="width:400px;top:50%;left:50%;margin-top:-140px;margin-left:-200px">
  <div class="p_alert p_position">
    <div class="block_close clearfix">
      <a href="#event_input" class="btn_close popup-with-zoom-anim"><img src="images/popup/btn_close.png" /></a>
    </div>
    <div class="block_content">
      <div class="inner">
        <div class="title one">
          <img src="images/popup/title_alert_agree_agency.png" />
        </div>
        <div class="btn_block">
          <a href="#event_input" class="popup-with-zoom-anim"><img src="images/popup/btn_ok.png" alt=""/></a>
        </div>
      </div><!--inner-->
    </div>
  </div>
</div>
<!----------------- 개인정보 취급위탁 동의약관 alert 팝업 ----------------->

<!----------------- 광고성 정보전송 동의약관 alert 팝업 ----------------->
<div id="pop_adver_agree_alert" class="popup_wrap zoom-anim-dialog mfp-hide" style="width:400px;top:50%;left:50%;margin-top:-140px;margin-left:-200px">
  <div class="p_alert p_position">
    <div class="block_close clearfix">
      <a href="#event_input" class="btn_close popup-with-zoom-anim"><img src="images/popup/btn_close.png" /></a>
    </div>
    <div class="block_content">
      <div class="inner">
        <div class="title one">
          <img src="images/popup/title_alert_agree_ad.png" />
        </div>
        <div class="btn_block">
          <a href="#event_input" class="popup-with-zoom-anim"><img src="images/popup/btn_ok.png" alt=""/></a>
        </div>
      </div><!--inner-->
    </div>
  </div>
</div>
<!----------------- 광고성 정보전송 동의약관 alert 팝업 ----------------->

<!----------------- 이벤트 팝업 닫을때 1 alert 팝업 ----------------->
<div id="confirm1_alert" class="popup_wrap zoom-anim-dialog mfp-hide" style="width:400px;top:50%;left:50%;margin-top:-140px;margin-left:-200px">
  <div class="p_alert p_position">
    <div class="block_close clearfix">
      <a href="#event_movie" class="btn_close popup-with-zoom-anim"><img src="images/popup/btn_close.png" /></a>
    </div>
    <div class="block_content">
      <div class="inner">
        <div class="title">
          <img src="images/popup/title_alert_close.png" />
        </div>
        <div class="btn_block">
          <a href="#" onclick="$.magnificPopup.close();"><img src="images/popup/btn_out.png" alt=""/></a>
          <a href="#event_movie" class="popup-with-zoom-anim"><img src="images/popup/btn_keepgoing.png" alt=""/></a>
        </div>
      </div><!--inner-->
    </div>
  </div>
</div>
<!----------------- 이벤트 팝업 닫을때 1 alert 팝업 ----------------->

<!----------------- 이벤트 팝업 닫을때 2 alert 팝업 ----------------->
<div id="confirm2_alert" class="popup_wrap zoom-anim-dialog mfp-hide" style="width:400px;top:50%;left:50%;margin-top:-140px;margin-left:-200px">
  <div class="p_alert p_position">
    <div class="block_close clearfix">
      <a href="#event_answer" class="btn_close popup-with-zoom-anim"><img src="images/popup/btn_close.png" /></a>
    </div>
    <div class="block_content">
      <div class="inner">
        <div class="title">
          <img src="images/popup/title_alert_close.png" />
        </div>
        <div class="btn_block">
          <a href="#" onclick="$.magnificPopup.close();"><img src="images/popup/btn_out.png" alt=""/></a>
          <a href="#event_answer" class="popup-with-zoom-anim"><img src="images/popup/btn_keepgoing.png" alt=""/></a>
        </div>
      </div><!--inner-->
    </div>
  </div>
</div>
<!----------------- 이벤트 팝업 닫을때 2 alert 팝업 ----------------->

<!----------------- 이벤트 팝업 닫을때 3 alert 팝업 ----------------->
<div id="confirm3_alert" class="popup_wrap zoom-anim-dialog mfp-hide" style="width:400px;top:50%;left:50%;margin-top:-140px;margin-left:-200px">
  <div class="p_alert p_position">
    <div class="block_close clearfix">
      <a href="#event_input" class="btn_close popup-with-zoom-anim"><img src="images/popup/btn_close.png" /></a>
    </div>
    <div class="block_content">
      <div class="inner">
        <div class="title">
          <img src="images/popup/title_alert_close.png" />
        </div>
        <div class="btn_block">
          <a href="#" onclick="$.magnificPopup.close();"><img src="images/popup/btn_out.png" alt=""/></a>
          <a href="#event_input" class="popup-with-zoom-anim"><img src="images/popup/btn_keepgoing.png" alt=""/></a>
        </div>
      </div><!--inner-->
    </div>
  </div>
</div>
<!----------------- 이벤트 팝업 닫을때 3 alert 팝업 ----------------->

<!--미정답!-->
<div id="wrong_answer_alert" class="popup_wrap zoom-anim-dialog mfp-hide" style="width:400px;top:50%;left:50%;margin-top:-140px;margin-left:-200px">
  <div class="p_alert p_position">
    <div class="block_close clearfix">
      <a href="#event_answer" class="btn_close popup-with-zoom-anim"><img src="images/popup/btn_close.png" /></a>
    </div>
    <div class="block_content">
      <div class="inner">
        <div class="title">
          <img src="images/popup/title_alert_uncollect.png" />
        </div>
        <div class="btn_block">
          <a href="#event_answer" class="popup-with-zoom-anim"><img src="images/popup/btn_ok.png" alt=""/></a>
        </div>
      </div><!--inner-->
    </div>
  </div>
</div>
<!--end 미정답.--> 

    <!--정답!-->
<div id="right_answer_alert" class="popup_wrap zoom-anim-dialog mfp-hide" style="width:400px;top:50%;left:50%;margin-top:-140px;margin-left:-200px">
  <div class="p_alert p_position">
    <div class="block_close clearfix">
      <a href="#event_input" class="btn_close popup-with-zoom-anim"><img src="images/popup/btn_close.png" /></a>
    </div>
    <div class="block_content">
      <div class="inner">
        <div class="title">
          <img src="images/popup/title_alert_collect.png" />
        </div>
        <div class="btn_block">
          <a href="#event_input"  class="popup-with-zoom-anim"><img src="images/popup/btn_ok.png" alt=""/></a>
        </div>
      </div><!--inner-->
    </div>
  </div>
</div>
    <!--end 정답.--> 
