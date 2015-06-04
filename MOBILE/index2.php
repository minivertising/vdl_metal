<?
	include_once   "./header.php";

	if (!$_SESSION['ss_media'])
	{
		$media	= $_REQUEST['media'];
echo $media;
		$_SESSION['ss_media'] = $media;
		//VM_InsertTrackingInfo($media, $gubun);
	}

?>
<a href="popup_event1.php">이벤트 참여</a>