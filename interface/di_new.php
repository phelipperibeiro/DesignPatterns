<?php

interface UsuarioDados
{

    function buscarPorEmailSenha($email, $senha);
}

class UsuarioDadosDb implements UsuarioDados
{

    function buscarPorEmailSenha($email, $senha)
    {
        $sql = "select * from Usuario where email = {$email} and senha = {$senha}";

        if ($conn->count()) {
            return true;
        }

        return false;
    }

}

class UsuarioDadosExcel implements UsuarioDados
{

    function buscarPorEmailSenha($email, $senha)
    {
        $DadosAuth = Array();
        $file = fopen('DadosAuth.csv', 'r');
        while (($line = fgetcsv($file)) !== false) {
            list($email, $senha) = explode(';', $line);
            $DadosAuth[] = ['email' => $email, 'senha' => $senha];
        }
        fclose($file);

        foreach ($DadosAuth as $key => $auth) {
            if (isset($DadosAuth[$key]['email']) && isset($DadosAuth[$key]['senha'])) {
                if ($DadosAuth[$key]['email'] == $email && $DadosAuth[$key]['senha'] == $senha) {
                    return true;
                }
            }
        }

        return false;
    }

}

interface Logger
{

    function success($msg);

    function warning($msg);
}

class LoggerServerDb implements Logger
{

    function success($msg)
    {
        $sql = "insert into log ({$msg}, 1)";
    }

    function warning($msg)
    {
        $sql = "insert into log ({$msg}, 2)";
    }

}

class LoggerServerMongoDb implements Logger
{

    function success($msg)
    {
        $mongo->selectDB('LoggerDb')
                ->selectCollection('Logger')
                ->insert(array('msg' => utf8_decode($msg), 'codigo_msg' => 1));
    }

    function warning($msg)
    {
        $mongo->selectDB('LoggerDb')
                ->selectCollection('Logger')
                ->insert(array('msg' => utf8_decode($msg), 'codigo_msg' => 2));
    }

}

interface Mailer
{

    function enviar();
}

class ZendMail implements Mailer
{

    function enviar($email)
    {
        mail($email, $subject, $message);
    }

}

class SwiftMail implements Mailer
{

    function enviar($email)
    {
        mail($email, $subject, $message);
    }

}

Class Autenticacao
{

    public function __construct(UsuarioDados $UsuarioDados, Logger $Logger, Mailer $Mailer)
    {
        $this->dados = $UsuarioDados;
        $this->logger = $Logger;
        $this->mailer = $Mailer;
    }

    public function autenticar($email, $senha)
    {

        $correto = $this->dados->buscarPorEmailSenha($mail, $senha);

        if ($correto) {
            $_SESSION['user'] = $email;
            $this->logger->success("Logando com usuario $email");
            return $correto;
        }

        $this->mailer->enviar($email);


        $this->logger->warning("Tentativa de login Falhou para $email");
    }

}

$UsuarioDadosDb = new UsuarioDadosDb();
$LoggerServerDb = new LoggerServerDb();
$ZendMail = new ZendMail();

$Autenticacao = new Autenticacao($UsuarioDadosDb, $LoggerServerDb, $ZendMail);

if ($Autenticacao->autenticar($email, $senha)) {
    header("Location: /admin/index.php");
} else {
    die('Deu Errado');
}

$UsuarioDadosExcel = new UsuarioDadosExcel();
$LoggerServerMongoDb = new LoggerServerMongoDb();
$SwiftMail = new SwiftMail();

$Autenticacao = new Autenticacao($UsuarioDadosExcel, $LoggerServerMongoDb, $SwiftMail);

if ($Autenticacao->autenticar($email, $senha)) {
    file_get_contents('http://webservice.php');
}


