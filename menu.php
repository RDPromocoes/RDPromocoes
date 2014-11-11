<div id="logomenu"><img src="http://imgur.com/dKwB495.png" width="300px" height="210px"/></div>
<div>
    <?php 
    // Inicia sessões 
    session_start(); 

    if(isset($_SESSION['ID']) || isset($_SESSION['email']) || isset($_SESSION['nome'])) 
    { 
    //Logado
    $logado = $_SESSION['email']; 
	echo "<div id='welcome'>";    
	echo "Bem vindo<i style='color:red;'> " . $_SESSION['nome']. " " . $_SESSION['sobrenome']."</i><br></div>";
	include('busca.php');
    }
    else{
	echo "<div id='logo'>";	
    echo "RD Promoções, seu melhor site de <i style='color:red;'>descontos!</i></div>";
	include('busca.php');
    }

    ?>
</div>

<div id="menufundo"> 
    <div> 
        <?php 

        // Verifica se existe os dados da sessão de login 
        if(isset($_SESSION['ID']) || isset($_SESSION['email']) || isset($_SESSION['nome'])) 
        { 
        //Logado
        $logado = $_SESSION['email'];
        //echo "<div id='hr'><hr></div>";
        echo "<div id='menutxt'>";
        echo "<a href='index.php'>HOME</a> |";
        echo "<a href='contato.php'>CONTATO</a>   |";
        echo "EMPRESA   |";
        echo "PRODUTOS   |";
        echo "PARCEIROS | ";
        echo "<a href=''>MEU PERFIL - </a>";
        echo "<a href='logout.php?act=logout'>SAIR  </a>";
        echo "</div>";

        }
        else{
        //echo "<div id='hr2'><hr></div>";
        echo "<div id='menutxt'> <a href='index.php'>HOME</a> |";
        echo "<a href='contato.php'>CONTATO</a>   |";
        echo "EMPRESA   |";
        echo "PRODUTOS   |";
        echo "PARCEIROS | ";
        echo "<a href='login.php'>LOGIN</a>   |";
        echo "<a href='cad_cliente.php'>CADASTRE-SE</a>   ";
        echo "</div>";

        }

        ?>
    </div>
</div>