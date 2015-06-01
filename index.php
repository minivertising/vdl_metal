<?
	include_once "config.php";

	//unset($media);
	$media	= $_REQUEST['media'];

	//$_SESSION['ss_media'] = $media;

	VM_InsertTrackingInfo($media, $gubun);

	if($gubun == "MOBILE")
	{
		Header("Location:http://www.vdl-metalcushion.com/MOBILE/index.php");
		exit;
	}else{
		Header("Location:http://www.vdl-metalcushion.com/PC/index.php");
		exit;
	}

?>
