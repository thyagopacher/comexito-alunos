<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'PHPMailer/class.phpmailer.php';
include 'PHPMailer/class.smtp.php';

class Email {

    public $origem = "Com Êxito";
    public $origem_email  = "contato2@comexito.com.br";
    public $usuario_email = "SMTP_Injection";
    public $para;
    public $para_email;
    public $copia;
    public $copia_email;
    public $mensagem;
    public $assunto;
    public $rodape = "<br><b>Mensagem eletrônica do sistema @ Com Êxito</b></br>";

    /*     * phpmailer */
    public $host = "smtp.sparkpostmail.com";
    public $senha = "46cb671d825ca907f8b37a3d73fb449a5cf8b713";
    public $ehHtml = true;
    public $porta = 587; //porta padrão
    public $seguranca = "tls";
    public $autenticacao = true;
    public $erro = "";
    public $mail;

    public function __construct() {
        $this->mail = new PHPMailer;
        $this->mail->IsSMTP();
    }

    /**
     * @assert () == true
     */
    public function envioSimples() {
        $headers = "From: {$this->origem} <{$this->origem_email}>\n";
        if ($this->ehHtml == true) {
            $headers .= "Content-type: text/html; charset=utf-8\n";
            if(isset($this->copia_email) && $this->copia_email != NULL && $this->copia_email != ""){
                $headers .= "Bcc: {$this->copia_email}\r\n";
            }
        }
        return mail($this->para_email, $this->assunto, $this->mensagem . $this->rodape, $headers);
    }

    public function envia() {
        $this->mail->setLanguage('br');   
        $this->mail->CharSet='UTF-8';
        $this->mail->isSMTP();  
        $this->mail->Host       = $this->host;
        $this->mail->SMTPAuth   = $this->autenticacao;
        $this->mail->Username   = $this->usuario_email;
        $this->mail->Password   = $this->senha;
        $this->mail->Port       = $this->porta;
      
        $this->mail->SMTPSecure = $this->seguranca;
        $this->mail->SetFrom($this->origem_email); // E-mail do remetente
        $this->mail->FromName = $this->origem; // Nome do remetente
        $this->mail->AddAddress($this->para_email, $this->para);
        if(isset($this->copia_email) && $this->copia_email != NULL && $this->copia_email != ""){
            $this->mail->addBCC($this->copia_email, $this->copia);
        }
        $this->mail->AddReplyTo($this->origem_email, $this->origem);
        $this->mail->IsHTML($this->ehHtml);
        $this->mail->Subject = $this->assunto;
        $this->mail->Body = $this->mensagem . $this->rodape;   
        $resenvio = $this->mail->send(); 
        $this->erro = $this->mail->ErrorInfo;
        if(($this->erro != NULL && $this->erro != "")){
            print_r($this->para_email);
            die($this->erro);
            $resenvio = $this->envioSimples();
        }
        return $resenvio;
    }
    
}
//


