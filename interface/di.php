<?php

Class Autenticacao
{

    public function autenticar($email, $senha)
    {
        $logger = new SystemLog;
        $dados = new UsuarioDados;

        $correto = $dados->buscarPorEmailSenha($mail, $senha);

        if ($correto) {
            $_SESSION['user'] = $email;
            $logger->success("Logando com usuario $email");
            return $correto;
        }

        $enviadorDeEmail = new EnviadorDeEmail;
        $enviadorDeEmail->enviar($email);


        $logger->success("Tentativa de login Falhou para $email");
    }

}

$Autenticacao = new Autenticacao();

if ($Autenticacao->autenticar($email, $senha)) {
    header("Location: /admin/index.php");
} else {
    die('Deu Errado');
}


