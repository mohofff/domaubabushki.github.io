<?php
$email_address = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])	||
   !$email_address)
   {
	echo "������� ��� ������";
	return false;
   }
$name = $_POST['name'];
if ($email_address === FALSE) {
    echo '������������ �����';
    exit(1);
}
$phone = $_POST['phone'];
$message = $_POST['message'];
$to = 'mohow.org@gmail.com';
$email_subject = "���������� ����� ��:  $name";
$email_body = "�� �������� ����� ��������� �� ���������� ����� �� ����� ���-�����.\n\n"."����� ������ ������:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "��: noreply@yourdomain.com\n";
$headers .= "��������: $email_address";
mail($to,$email_subject,$email_body,$headers);
return true;
?>