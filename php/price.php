<?php if (isset($_POST["otprav"])) {
$to = "pinkertoon17@gmail.com";
$subject = "Письмо с формы \"Узнать стоимость\"";
$charset = "utf-8";
$headerss ="Content-type: text/html; charset=$charset\r\n";
$headerss.="MIME-Version: 1.0\r\n";
$headerss.="Date: ".date('D, d M Y h:i:s O')."\r\n";
$msg = "Имя: ".$_POST["name"]."\n";
$msg .= "Email: ".$_POST["email"]."\n";
$msg .= "Номер телефона: ".$_POST["phone"]."\n";
$msg .= "Сообщение: ".$_POST["form-text"]."\n";
mail($to, $subject, $msg, $headerss);
print "<script>alert(\"Сообщение успешно отправлено!\");window.location = window.location.href</script>";
}