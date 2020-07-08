<?php
session_start();
require_once 'config/DB.php';
class Login extends DB
{
    public function logar($nomeUser, $senha)
    {
        $sql  = "SELECT * FROM 	usuarios WHERE nomeUser = :nomeUser AND senha = :senha";
        $stmt = DB::prepare($sql);

        $stmt->bindValue(':nomeUser', $nomeUser, PDO::PARAM_STR);
        $stmt->bindValue(':senha', $senha, PDO::PARAM_STR);

        $stmt->execute();

        if ($stmt->rowCount()==1) {
            $_SESSION['logado'] = true;
            return true;
        } else {
            return false;
        }
    }


    public static function deslogar()
    {
        if (isset($_SESSION['logado'])) {
            unset($_SESSION['logado']);
            session_destroy();

            header("Location: index.php");
        }
    }
}
    ?>