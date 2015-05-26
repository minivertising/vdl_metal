<!----------------- 이벤트 영상보기 팝업 ----------------->
<div id="event_movie" class="zoom-anim-dialog mfp-hide" style="position:absolute;width:800px;height:500px;top:50%;left:50%;margin-top:-250px;margin-left:-400px;background:white;">
  <iframe allowfullscreen="1" src="<?=$_gl['youtube_url']?>" frameborder="0" id="ytplayer_pop" class="ytplayer_pop" style="width:400px;height:250px;"></iframe>
  <div id="fake_btn">
    <a href="#" onclick="alert('영상을 보셔야 이벤트 참여가 가능합니다.');">힌트 영상보기</a>
  </div>
  <div id="real_btn" style="display:none;">
    <a href="#" onclick="alert('1111');">힌트 영상보기</a>
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


