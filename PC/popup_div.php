<!----------------- 이벤트 영상보기 팝업 ----------------->
<div id="event_movie" class="zoom-anim-dialog mfp-hide" style="position:absolute;width:800px;height:500px;top:50%;left:50%;margin-top:-250px;margin-left:-400px;background:white;">
  <iframe allowfullscreen="1" src="<?=$_gl['youtube_url']?>" frameborder="0" id="ytplayer_pop" class="ytplayer_pop" style="width:400px;height:250px;"></iframe>
  <div id="fake_btn">
    <a href="#" onclick="alert('영상을 보셔야 이벤트 참여가 가능합니다.');">힌트 영상보기</a>
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
    <input type="text" name="answer_input" id="answer_input">
    <a href="#" onclick="answer_complete()">정답입력완료</a>
  </div>
<div>
<!----------------- 이벤트 단어넣기 팝업 ----------------->

<!----------------- 이벤트 개인정보 입력 팝업 ----------------->
<div id="event_input" class="zoom-anim-dialog mfp-hide" style="position:absolute;width:800px;height:500px;top:50%;left:50%;margin-top:-250px;margin-left:-400px;background:white;">
  <h3>VDL 메탈쿠션 파운데이션을 받으시려면 고객님의 소중한 정보가 필요해요.</h3>
  <div>
    이름  <input type="text" name="mb_name" id="mb_name"><br />
    전화번호  <input type="text" name="mb_phone" id="mb_phone"><br />
    <input type="checkbox" name="use_agree" id="use_agree"> 개인정보 활용 약관 <a href="#">자세히보기</a><br />
    <input type="checkbox" name="privacy_agree" id="privacy_agree"> 개인정보 취급위탁동의 약관 <a href="#">자세히보기</a><br />
    <input type="checkbox" name="adver_agree" id="adver_agree"> 광고성 정보 전송동의 약관 <a href="#">자세히보기</a><br />
    <a href="#" onclick="input_info();">입력완료</a>
  </div>
<div>
<!----------------- 이벤트 개인정보 입력 팝업 ----------------->


