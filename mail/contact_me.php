<?php
//Ñáîð äàííûõ èç ïîëåé ôîðìû. 
$name = $_POST['name'];// Áåð¸ì äàííûå èç input c àòðèáóòîì name="name"
$phone = $_POST['phone']; // Áåð¸ì äàííûå èç input c àòðèáóòîì name="phone"
$email = $_POST['mail']; // Áåð¸ì äàííûå èç input c àòðèáóòîì name="mail"
$message = $_POST['message'];
 
$token = "7022596908:AAFiYK75WijA4MEsA5cbbDAtKZvdiGFF7nc"; // Òóò ïèøåì òîêåí
$chat_id = "669789653"; // Òóò ïèøåì ID ÷àòà, êóäà áóäóò îòïðàâëÿòüñÿ ñîîáùåíèÿ
$sitename = "domaubabushki.github.io"; //Óêàçûâàåì íàçâàíèå ñàéòà
 
$arr = array(
 
  'Çàêàç ñ ñàéòà: ' => $sitename,
  'Èìÿ: ' => $name,
  'Òåëåôîí: ' => $phone,
  'Ïî÷òà' => $email,
  'Îòçûâ' => $message
);
 
foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};
 
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
 
?>
