<?php
//���� ������ �� ����� �����. 
$name = $_POST['name'];// ���� ������ �� input c ��������� name="name"
$phone = $_POST['phone']; // ���� ������ �� input c ��������� name="phone"
$email = $_POST['mail']; // ���� ������ �� input c ��������� name="mail"
$message = $_POST['message'];
 
$token = "7022596908:AAFiYK75WijA4MEsA5cbbDAtKZvdiGFF7nc"; // ��� ����� �����
$chat_id = "669789653"; // ��� ����� ID ����, ���� ����� ������������ ���������
$sitename = "domaubabushki.ru"; //��������� �������� �����
 
$arr = array(
 
  '����� � �����: ' => $sitename,
  '���: ' => $name,
  '�������: ' => $phone,
  '�����' => $email,
  '�����' => $message
);
 
foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};
 
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
 
?>