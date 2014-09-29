<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="../Style/style.css">
 		<title>Gestão</title>
	</head>
	<body>
		
		<!-- Titulo -->	
		<div class = "titulo">
			<h1>Bem vindo a CACOM</h1>
        
		
        </div>
        <!-- Menu -->	
        <div class = "menu">
       	
        	<div class = "menuItem">
        		<a href="../View/armarios.php">Armários</a>
        	</div>

        	<div class = "menuItem">
        		<a href="../View/impressora.php">Impressora</a>
        	</div>

        	<div class = "menuItem">
        		<a href="../View/gestao.php">Gestão</a>
        	</div>

        </div>


		<!-- Conteudo -->	
        <div class = "conteudo">
        	


        	<!-- Corpo -->
        	<div class= "core">
        		<a href="../View/gestao.php">Estatuto da CACOM</a>

        		<a href="https://drive.google.com/drive/#folders/0B_5IzvyoQu-sWmlIcHNrcHdXVUE">Informações da gestão</a>
        			
        	</div>
        	<div class = "sidebar">
	        	<!-- Login -->
	        	<div class = "login">
					<form action="../Controller/controle.php?action=logando" method="post">
						<label>login <input name="login" placeholder="login" required ></label><br>
						<label>senha <input type="password" id="senha" name="senha" required /></label><br>
						<input type="submit" name="submit" value="enviar">
					</form>
				</div>

				<div class = "linksExternos">
					Links Externos:
					 <dl>
						<dt><a href="http://www-nt.ufms.br/">UFMS</a></dt>
						<dt><a href="http://facom.ufms.br/">FACOM</a></dt>
						<dt><a href="http://ead.facom.ufms.br/">EAD</a></dt>
					</dl>
				</div>
			</div>

		</div>

		<!-- Rodape -->
		<div class = "rodape">
        		
        	
       	</div>
         
	</body>    
</html>