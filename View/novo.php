<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Cadastro de Contato</title>
    </head>
    <body>
        <form action="../Controller/controle.php?action=cad" method="post">
            <h1>Cadastro</h1>
            <p>Insira seus dados de contato.</p>
            <p><label>Nome  <input name="nome" placeholder="Você" required ></label></p>
            <p><label>Email     <input type="email" id="email_addr" name="email" placeholder="voce@email.com" required /></label></p>
            <p><label>RGA   <input type="number" id="rga" name="rga" placeholder="200000000000"  /></label></p>
            <p><label>Telefone  <input type="phone" id="telefone" name="telefone" placeholder="6733333333"  /></label></p>
            <p><label>Celular   <input type="phone" id="celular" name="celular" placeholder="6799999999"  /></label></p>
            <label for="curso">Curso <select id="curso" name="curso" type="text" >
                <option value="Sem curso">Sem curso</option>
                <option value="Ciência da Computação">Ciência da Computação</option>
                <option value="Engenharia da Computação">Engenharia da Computação</option>
                <option value="Análises de Sistemas">Análises de Sistemas</option>
                <option value="Tecnologia em Redes">Tecnologia em Redes</option>
                <option value="Engenharia Elétrica">Engenharia Elétrica</option>
                <option value="Engenharia Civil">Engenharia Civil</option>
                <option value="Engenharia de Produção">Engenharia de Produção</option>
                <option value="Arquitetura e Urbanismo">Arquitetura e Urbanismo</option>
                <option value="Farmácia">Farmácia</option>
                <option value="Administração">Administração</option>
                <option value="Agronomia">Agronomia</option>
                <option value="Alimentos">Alimentos</option>
                <option value="Artes Visuais">Artes Visuais</option>
                <option value="Direito">Direito</option>
                <option value="Jornalismo">Jornalismo</option>
                <option value="Ciências Sociais">Ciências Sociais</option>
                <option value="Comunicação Social">Comunicação Social</option>
                <option value="Ciências Biológicas">Ciências Biológicas</option>
                <option value="Educação Física">Educação Física</option>
                <option value="Enfermagem">Enfermagem</option>
                <option value="Física">Física</option>
                <option value="Medicina">Medicina</option>
                <option value="Filosofia">Filosofia</option>
                <option value="Fisioterapia">Fisioterapia</option>
                <option value="Geografia">Geografia</option>
                <option value="História">História</option>
                <option value="Letras">Letras</option>
                <option value="Matemática">Matemática</option>
                <option value="Odontologia">Odontologia</option>
                <option value="Psicologia">Psicologia</option>
                <option value="Turismo">Turismo</option>
                <option value="Zootecnia">Zootecnia</option>
                <option value="Sistemas de Informação">Sistema de Informação</option>
                <option value="Química">Química</option>
                <option value="Outros">Outros</option>
            </select> </label>
            <p><label>Facebook  <input type="text" id="facebook" name="facebook" placeholder="facebook.com/voce"  /></label></p>
            <p><input type="submit" name="submit" value="enviar"></p>
        </form>
        <p>
            <a id="Novo" href="../Controller/controle.php?action=indice">Voltar para o início</a>
        </p>
        <?php
            // put your code here
        ?>
    </body>
</html>
