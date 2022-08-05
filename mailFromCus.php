
<?php

$company = $_POST[company];
$contact = $_POST[contact];
$tel = $_POST[tel];
$fax = $_POST[fax];
$email = $_POST[email];
$Cusmsg = $_POST[Cusmsg];
$capcha = $_POST[capcha];
$textCapcha  = $_POST[textCapcha];

if($company!="" && $contact!="" && $tel!="" && $email!="" ){

    if($fax == "")
	{
            $fax = "ไม่ระบุ";
	}
    if($Cusmsg == "" )
	{
            $Cusmsg = "ไม่มี";
	}

    require("PHPMailer_v5.0.2/class.phpmailer.php");
    $mail = new PHPMailer();

    $body = "คุณ $contact <br>
		 จาก $company <br>
		 ให้ติดต่อกลับที่หมายเลขโทรศัพท์ $tel <br>
		 หมายเลขแฟกซ์ $fax <br>
		 อีเมล์ $email <br>
		 ข้อความเพิ่มเติม $Cusmsg<br>";

    $mail->CharSet = "UTF-8";
    $mail->IsSMTP();
    $mail->SMTPDebug = 0;
    $mail->SMTPAuth = true;
    $mail->Host = "thdirectory.com"; // SMTP server
    $mail->Port = 25; // พอร์ท
    $mail->Username = "feedback@thdirectory.com"; // account SMTP
    $mail->Password = "Q0cawZ6FG"; // รหัสผ่าน SMTP

    $mail->SetFrom($email);
    $mail->AddReplyTo($email);  
    $mail->Subject = "ลูกค้าขอรายละเอียดสินค้า";

    $mail->MsgHTML($body);

    $mail->AddAddress("siamapply@gmail.com");  //--->เมลลูกค้า ถ้ามีสองรายชื่อก็เพิ่ม AddAddress
    // $mail->AddAddress("chanchavinlohaphan@gmail.com "); 


    if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo "Message sent!";
    }
}else{
    echo "mail error";
    echo "<script>window.location='Contact_Us.php';</script>";
}
?>
