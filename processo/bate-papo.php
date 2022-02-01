<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comentários</title>
    <link rel="icon" type="image/png" href="img/chat.png">    
    <link type="text/css" rel="stylesheet" href="style/homepage.css">
    <link type="text/css" rel="stylesheet" href="style/inbox.css">
    <link type="text/css" rel="stylesheet" href="style/footer.css">
    <script src="js/jquery.js"></script>
    <script src="js/sweetalert2.js"></script>
</head>
<body>
    <div id="loading">loading&#8230;</div>

    <div id="inbox" class="column">
            <p class="title">CHAT DE COMENTÁRIOS</p>
            <input type="text" maxlength="15" name="username" class="searchField" placeholder="Pesquisar utilizador"/>
            <div id="searchContainer"></div>
            <div class="container"></div>
            <br>
            <hr>
        <p class="title">Nova Mensagem</p>
        <br>
        <br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div class="Enviar Mensagem">
        <form method="POST" action="escrever.php">    
		<?php
			if(isset($_SESSION['msg'])){
				echo "<p>".$_SESSION['msg']. "</p>";
				//Destruir sessão
				unset($_SESSION['msg']);
			}
			
		?>
        
                <input type="text" name="Nome" class="searchField" placeholder="Insere o Email ou Nome"/>    
                <br>
                <textarea type="text" maxlength="1000" name="msg" class="searchField" placeholder="Escreva a mensagem"></textarea>        
                <button>Enviar</button>
                </div>
            </form>
        </div>
            
    </div>
    <div id="chat" class="column">
    <div class="wrapper">
        <div class="form">
        <div class="bot-inbox inbox">       
            <div class="msg-header">
                <div class="innerContainer">
                                            <?php

                                                //credenciais
                            
                                                $servidor="localhost";
                                                $usuario="root";
                                                $senha="";
                                                $db="batepapo";
                            
                                                //conexao
                                                $conn=mysqli_connect($servidor, $usuario, $senha, $db);
                                                //Select
                                                $listar = "SELECT * FROM mensagens"; 
                            
                                                //Query
                                                $result_listar = mysqli_query($conn, $listar);
                            
                                                while($mostrar = mysqli_fetch_assoc($result_listar))
                                                {
                                                    echo "".$mostrar['Nome']."<br>";
                                                    echo "<p>".$mostrar['msg']."<br>"."</p>";
                                                    echo "<center>".$mostrar['data_msg']."<br>"."</center>";

                                                }
                    
                                            ?>
                     </div>                        
                </div>    
                
            </div>
            
    
        </div>
        </div>


    </div>
    </div>

    <div id="profile" class="column">
       
    </div>  

      <footer>
      <ul class="icones-sociais">
            <li><a href="https://facebook.com" target="_blank"><img src="img/facebook.png" width="40" height="40" alt="Icone do Twitter"></a></li>
            <li><a href="https://www.instagram.com/" target="_blank"><img src="img/instagram.png" width="40" height="40" alt="Icone do Linkedin"></a></li>
            <li><a href="https://whatsapp.com" target="_blank"><img src="img/whatsapp.png" width="40" height="40" alt="Icone do GitHub"></a></li>
            <li><a href="https://youtube.com/" target="_blank"><img src="img/youtube.png" width="40" height="40" alt="Icone do Twitter"></a></li>
        </ul>
       

      </footer>
    
</body>
</html>