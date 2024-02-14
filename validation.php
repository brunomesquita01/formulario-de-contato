<?php
$nome= filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$telefone= filter_input(INPUT_POST, 'telefone', FILTER_VALIDATE_INT);
$msg= filter_input(INPUT_POST, 'msg', FILTER_SANITIZE_STRING);

$to= 'brunomsqgms@gmail.com';
$subjec= "Novo Contrato pelo site";
$message= "Nome: $nome 
        Telefone: $telefone 
        Mesnsagem: $msg";
$headers = 'From: brunomsqgms@gmail.com' . "\r\n" .
        'Reply-To: brunomsqgms@gmail.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
$enviarEmail= mail($to, $subjec, $message, $headers);

if($enviarEmail){
    echo "Email enviado com sucesso.";
}
else{
    echo "Erro ao enviar sua mensagem.";
}