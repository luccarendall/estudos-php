
<!--< ?php  o código php deve sempre vir após essa tag de inicio
?> e antes dessa tag de final (desnecessária se o arquivo for apenas php)-->

<!-- Como criar variável e atribuir valor-->
<?php
 $nomeVariavel = "valor"
 $_nomeCurso = "Programação de Páginas Dinâmicas com PHP";
 $ano_criacao = 1994;
 $flagLinguagemScript = true;
?>

<!-- Variáveis de requisição HTTP-->

<!--Exemplo-->
<!-- index.php-->
<html>
    <body>
        <h1>Página Login</h1>
        <h2><a href="protegida.php">protegida</a></h2>
        <hr/> <!-- d -->
        <?php
        session_start(); // Para usar var de sessão. Preciso iniciar o ambiente de sessão
         //  Sessões são uma forma simples de armazenar dados para usuários individuais usando um ID de sessão único. Sessões podem ser usadas para persistir informações entre requisições de páginas.
        if(isset($_SESSION["usuario"])) { // $_SESSION é só um array
            //isset é is set, se a var tá setada. 
        ?>
        <a href="logout.php">Logout</a>
        <?php
        } // essa doidice é pq isso tudo tá dentro do if. Só aparecendo se o if for true. Parecido com um ternário
        ?>
    </body>
</html>

<!--arquivo protegida.php -->
<?php
    session_start(); //novamente para usar var de sessao
    if(!isset($_SESSION["usuário"])) // se NÃO estiver logado
        header("Location: form_login.php", true, 301);
    else {
?>
<html><body>
    <h1>Olá, <?php echo($_SESSION["usuário"])?> </h1>
    <h2><a href="index.php">retornar</a></h2>
</body></html>
<?php
    }
?>

<!-- form_login.php-->
<html><body>
    <h1>Login do Usuário</h1>
    <?php 
        if(isset($_GET["erro"]))
         echo("<hr/><h2>".$_GET["erro"]."</h2><hr/>"); //Se essa página, meu form de login, tiver recebido um erro, esse erro vai ser mostrado na url (o metodo get faz isso)
         
         // <hr> representa uma quebra temática entre elementos de nível de parágrafo
    ?>
    <form action="login.php" method="post"> <!--chama para onde faço a verificação desse login-->
        <p>login:<input type="text" name="login"/></p>
        <p>senha:<input type="password" name="senha"/></p>
        <input type="submit" value="enviar"/>
    </form>
</body></html>

<!-- validacao_login.php-->
   <?php
        session_start(); //inicia a sessão, como sempre
        $erro=''; // seta a var erro com vazia
        // talvez pudesse fazer criar uma variável $_POST["login"] pra não precisar repetir. um $postLogin = $_POST["login"] por exemplo
        if(!isset($_POST["login"]) or ($_POST["login"] == ''))
        //em $_POST["login"] login é o name lá no form
            $erro = "Preencha o login";
        elseif( 
            !isset($_POST["senha"]) or ($_POST["senha"] == ''))
        //em $_POST["senha"] senha é o name lá no form
             $erro = "Preencha a senha";
        else(
            $login=$_POST["login"];
            $senha=$_POST["senha"];
            if($login!="admin" or $senha!="1234"){
                $erro="Login ou senha invalido(s)";
            }
            )
            )
        ?>
