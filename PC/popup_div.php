<!----------------- 이벤트 영상보기 팝업 ----------------->
<div id="event_movie" class="zoom-anim-dialog mfp-hide" style="position:absolute;width:800px;height:500px;top:50%;left:50%;margin-top:-250px;margin-left:-400px;background:white;">
  <iframe allowfullscreen="1" src="<?=$_gl['youtube_url']?>" frameborder="0" id="ytplayer_pop" class="ytplayer_pop" style="width:400px;height:250px;"></iframe>
  <div id="fake_btn">
    <a href="#" onclick="alert('영상을 끝까지 보셔야 이벤트 참여가 가능합니다.');">힌트 영상보기</a>
  </div>
  <div id="real_btn" style="display:none;">
    <a href="#" onclick="input_word();">힌트 영상보기</a>
  </div>
<div>
<!----------------- 이벤트 영상보기 팝업 ----------------->

<!----------------- 이벤트 단어넣기 팝업 ----------------->
<div id="event_answer" class="zoom-anim-dialog mfp-hide" style="position:absolute;width:800px;height:500px;top:50%;left:50%;margin-top:-250px;margin-left:-400px;background:white;">
  <h3>신민아의 셀피 비밀영상 잘 보셨나요?</h3>
  <div>
    <input type="text" name="answer_input1" id="answer_input1" onkeyup="chktxt(this)" maxlength="1">
    <input type="text" name="answer_input2" id="answer_input2" onkeyup="chktxt(this)" maxlength="1">
    <input type="text" name="answer_input3" id="answer_input3" onkeyup="chktxt(this)" maxlength="1">
    <input type="text" name="answer_input4" id="answer_input4" onkeyup="chktxt(this)" maxlength="1">
    <a href="#" onclick="answer_complete()">정답입력완료</a>
  </div>
<div>
<!----------------- 이벤트 단어넣기 팝업 ----------------->

<!----------------- 이벤트 개인정보 입력 팝업 ----------------->
<div id="event_input" class="zoom-anim-dialog mfp-hide" style="position:absolute;width:800px;height:500px;top:50%;left:50%;margin-top:-250px;margin-left:-400px;background:white;">
  <h3>VDL 메탈쿠션 파운데이션을 받으시려면 고객님의 소중한 정보가 필요해요.</h3>
  <div>
    이름  <input type="text" name="mb_name" id="mb_name"><br />
    전화번호  
    <select name="mb_phone1" id="mb_phone1">
      <option value="010">010</option>
      <option value="011">011</option>
      <option value="016">016</option>
      <option value="017">017</option>
      <option value="018">018</option>
      <option value="019">019</option>
    </select> - 
    <input type="text" name="mb_phone2" id="mb_phone2"> - 
    <input type="text" name="mb_phone3" id="mb_phone3">
    <br />
    <input type="checkbox" name="use_agree" id="use_agree"> 개인정보 활용 약관 <a href="#pop_use_agree" class="popup-with-zoom-anim">자세히보기</a><br />
    <input type="checkbox" name="privacy_agree" id="privacy_agree"> 개인정보 취급위탁동의 약관 <a href="#pop_privacy_agree" class="popup-with-zoom-anim">자세히보기</a><br />
    <input type="checkbox" name="adver_agree" id="adver_agree"> 광고성 정보 전송동의 약관 <a href="#pop_adver_agree" class="popup-with-zoom-anim">자세히보기</a><br />
    <a href="#" onclick="input_info();">입력완료</a>
  </div>
<div>
<!----------------- 이벤트 개인정보 입력 팝업 ----------------->

<!----------------- 이벤트 완료 팝업 ----------------->
<div id="pop_thanks" class="zoom-anim-dialog mfp-hide" style="position:absolute;width:800px;height:500px;top:50%;left:50%;margin-top:-250px;margin-left:-400px;background:white;">
  <h3>참여해주셔서 감사합니다!</h3>
  <div>
    <a href="#" onclick="movie_share('twitter')">트위터</a>
    <a href="#" onclick="movie_share('facebook')">페이스북</a>
    <a href="#" onclick="movie_share('story')">카카오스토리</a>
  </div>
  <div>
    <a href="#" onclick="$.magnificPopup.close();">확인</a>
  </div>
<div>
<!----------------- 이벤트 완료 팝업 ----------------->


<!----------------- 개인정보 활용 약관 팝업 ----------------->
<div id="pop_use_agree" class="zoom-anim-dialog mfp-hide" style="position:absolute;width:400px;height:200px;top:50%;left:50%;margin-top:-250px;margin-left:-400px;background:white;">
  <h3>개인정보 활용 약관 내용</h3>
  <div>
    <a href="#event_input" class="popup-with-zoom-anim">확인</a>
  </div>
<div>
<!----------------- 개인정보 활용 약관 팝업 ----------------->

<!----------------- 개인정보 취급위탁동의 약관 팝업 ----------------->
<div id="pop_privacy_agree" class="zoom-anim-dialog mfp-hide" style="position:absolute;width:400px;height:200px;top:50%;left:50%;margin-top:-250px;margin-left:-400px;background:white;">
  <h3>개인정보 취급위탁동의 약관 내용</h3>
  <div>
    <a href="#event_input" class="popup-with-zoom-anim">확인</a>
  </div>
<div>
<!----------------- 개인정보 취급위탁동의 약관 팝업 ----------------->

<!----------------- 광고성 정보전송동의 약관 팝업 ----------------->
<div id="pop_adver_agree" class="zoom-anim-dialog mfp-hide" style="position:absolute;width:400px;height:200px;top:50%;left:50%;margin-top:-250px;margin-left:-400px;background:white;">
  <h3>광고성 정보전송동의 약관 내용</h3>
  <div>
    <a href="#event_input" class="popup-with-zoom-anim">확인</a>
  </div>
<div>
<!----------------- 광고성 정보전송동의 약관 팝업 ----------------->

<!----------------- 개인정보 입력 alert 팝업 ----------------->
<div id="pop_input" class="zoom-anim-dialog mfp-hide" style="position:absolute;width:400px;height:200px;top:50%;left:50%;margin-top:-250px;margin-left:-400px;background:white;">
  <h3>개인정보를 입력해주세요.</h3>
  <div>
    <a href="#event_input" class="popup-with-zoom-anim">확인</a>
  </div>
<div>
<!----------------- 개인정보 입력 alert 팝업 ----------------->

<!----------------- 개인정보 활용약관 alert 팝업 ----------------->
<div id="pop_use_agree_alert" class="zoom-anim-dialog mfp-hide" style="position:absolute;width:400px;height:200px;top:50%;left:50%;margin-top:-250px;margin-left:-400px;background:white;">
  <h3>개인정보 활용약관에 동의해주세요.</h3>
  <div>
    <a href="#event_input" class="popup-with-zoom-anim">확인</a>
  </div>
<div>
<!----------------- 개인정보 활용약관 alert 팝업 ----------------->

<!----------------- 개인정보 취급위탁 동의약관 alert 팝업 ----------------->
<div id="pop_privacy_agree_alert" class="zoom-anim-dialog mfp-hide" style="position:absolute;width:400px;height:200px;top:50%;left:50%;margin-top:-250px;margin-left:-400px;background:white;">
  <h3>개인정보 취급위탁동의 약관에 동의해주세요.</h3>
  <div>
    <a href="#event_input" class="popup-with-zoom-anim">확인</a>
  </div>
<div>
<!----------------- 개인정보 취급위탁 동의약관 alert 팝업 ----------------->

<!----------------- 광고성 정보전송 동의약관 alert 팝업 ----------------->
<div id="pop_adver_agree_alert" class="zoom-anim-dialog mfp-hide" style="position:absolute;width:400px;height:200px;top:50%;left:50%;margin-top:-250px;margin-left:-400px;background:white;">
  <h3>광고성 정보 전송동의 약관에 동의해주세요.</h3>
  <div>
    <a href="#event_input" class="popup-with-zoom-anim">확인</a>
  </div>
<div>
<!----------------- 광고성 정보전송 동의약관 alert 팝업 ----------------->


