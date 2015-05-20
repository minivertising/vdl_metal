<?php
include_once "config.php";

switch ($_REQUEST['exec'])
{
	case "insert_message" :
		$mb_receive		= $_REQUEST['mb_receive'];
		$mb_message	= $_REQUEST['mb_message'];
		$mb_send		= $_REQUEST['mb_send'];

		$query 		= "INSERT INTO ".$_gl['member_info_table']."(mb_ipaddr, mb_send, mb_message, mb_receive, mb_gubun, mb_regdate) values('".$_SERVER['REMOTE_ADDR']."','".$mb_send."','".$mb_message."','".$mb_receive."','".$gubun."','".date("Y-m-d H:i:s")."')";
		$result 	= mysqli_query($my_db, $query);

		$ins_idx = mysqli_insert_id($my_db);
		//if ($result)
		//	$flag = "Y";
		//else
		//	$flag = "N";
		$_SESSION['ss_idx'] = $ins_idx;

		echo $ins_idx;
	break;

	case "insert_message2" :
		$mb_name		= $_REQUEST['mb_name'];
		$mb_phone		= $_REQUEST['mb_phone'];
		$mb_idx			= $_SESSION['ss_idx'];
		$key				= "f875ecbd21fa4214075c6645635c769c"; // 사용자가 발급받은 단축 URL KEY를 입력 하세요
		$serial				= VK_SerialNumber();
		$longurl				= "http://www.mnv.kr/PC/message.php?serial=".$serial;
		$longurl2				= "http://www.mnv.kr/MOBILE/winner_coupon.php?serial=".$serial;
		$url = sprintf("%s?url=%s&key=%s", "http://openapi.naver.com/shorturl.xml", $longurl, $key);
		$data =file_get_contents($url);
		$xml = simplexml_load_string($data, 'SimpleXMLElement', LIBXML_NOCDATA);

		if($xml->code == 200){
			$transUrl = $xml->result->url;
			$orgUrl = $xml->result->orgUrl;
			$qr = $xml->result->url.".qr";
			$_SESSION['ss_url'] = $transUrl;

			$url2 = sprintf("%s?url=%s&key=%s", "http://openapi.naver.com/shorturl.xml", $longurl2, $key);
			$data2 =file_get_contents($url2);
			$xml2 = simplexml_load_string($data2, 'SimpleXMLElement', LIBXML_NOCDATA);

			if($xml2->code == 200){
				$transUrl2 = $xml2->result->url;
				$orgUrl2 = $xml2->result->orgUrl;
				$qr2 = $xml2->result->url.".qr";

				$query 		= "UPDATE ".$_gl['member_info_table']." SET mb_name='".$mb_name."', mb_phone='".$mb_phone."', mb_url='".$transUrl."', mb_winner_url='".$transUrl2."', mb_qr='".$qr."', mb_serial='".$serial."' WHERE idx='".$mb_idx."'";
				$result 	= mysqli_query($my_db, $query);
				
				if ($result){
					$flag = $_SESSION['ss_url'];
				}else{
					$flag = "N";
				}
			}else{
				$flag = "N";
			}
		}else{
			$flag = "N";
		}
		echo $flag;
	break;

	case "insert_share_info" :
		$media	= $_REQUEST['media'];

		$query 		= "INSERT INTO ".$_gl['share_info_table']."(sns_media, sns_ipaddr, sns_gubun, sns_regdate) values('".$media."','".$_SERVER['REMOTE_ADDR']."','".$gubun."','".date("Y-m-d H:i:s")."')";
		$result 	= mysqli_query($my_db, $query);

		if ($result)
			$flag = "Y";
		else
			$flag = "N";

		echo $flag;

	break;

	case "join_friends" :
		$serial		= $_REQUEST['serial'];

		$query 		= "UPDATE ".$_gl['member_info_table']." SET mb_join='Y', mb_joindate='".date('Y-m-d H:i:s')."' WHERE mb_serial='".$serial."'";
		$result 	= mysqli_query($my_db, $query);

		if ($result){
			$query2			= "SELECT * FROM ".$_gl['member_info_table']." WHERE mb_serial='".$serial."'";
			$result2			= mysqli_query($my_db, $query2);
			$member_info	= mysqli_fetch_array($result2);

			send_lms($member_info['mb_phone'], $member_info['mb_winner_url']);

			$flag = "Y";
		}else{
			$flag = "N";
		}

		echo $flag;
	break;

	case "use_coupon" :
		$serial		= $_REQUEST['serial'];

		$query 		= "UPDATE ".$_gl['member_info_table']." SET mb_use='Y' WHERE mb_serial='".$serial."'";
		$result 	= mysqli_query($my_db, $query);

		if ($result)
			$flag = "Y";
		else
			$flag = "N";

		echo $flag;
	break;
}
?>