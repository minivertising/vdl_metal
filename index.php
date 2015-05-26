<?
	include_once "config.php";

	//unset($media);
	$media	= $_REQUEST['media'];

	//$_SESSION['ss_media'] = $media;

	VM_InsertTrackingInfo($media, $gubun);

	if($gubun == "MOBILE")
	{
		Header("Location:http://www.mnv.kr/MOBILE/index.php");
		exit;
	}else{
		Header("Location:http://www.mnv.kr/PC/index.php");
		exit;
	}

?>
