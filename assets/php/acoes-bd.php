<?php

    require "config.php";

    //----------------começo da ação botão inserir--------------------------
    include('config.php');

    if (isset($_POST['btn_insert'])) {
        
        //variaveis para receber informações da caixa de texto
        $placa = $_POST["placa"];
        $marca = $_POST["marca"];
        $modelo = $_POST["modelo"];
        $versao = $_POST["versao"];
        $cor = $_POST["cor"];
        $comb = $_POST["comb"];
        $cat = $_POST["cat"];
        $opcionais = $_POST["opcionais"];
        $preco = $_POST["preco"];
        $quilometragem = $_POST["quilometragem"];
        $descricao = $_POST["descricao"];
        $botao_inserir = $_GET["botao_inserir"];

        //comando para inserir no mysql
        $comando_inserir = "INSERT INTO Carros(placa, marca, modelo, versao, cor, comb, cat, opcionais, preco, quilometragem, descricao) VALUES (".$placa.", ".$marca.", ".$modelo.", ".$versao.", ".$cor.", ".$comb.", ".$cat.", ".$opcionais.", ".$preco.", ".$quilometragem.", ".$descricao.");";

        echo "<br>";
        $resultado = mysqli_query($conexao, $comando_inserir);

        //chegagem se o resultado foi concluido
        if ($resultado) {
            echo "Registro cadastrado com sucesso";
        }
        else {
            echo "Registro não cadastrado";
        }
        //voltar para a página principapl
        echo "<br><br> <a href='index.html'> Voltar </a>";
    }

    //----------------fim da ação botão inserir--------------------------

    //----------------começo da ação botão editar--------------------------
    include('config.php');

    if (isset($_POST['btn_edit'])) {
        
        //variaveis para receber informações da caixa de texto
        $placa = $_GET["placa"];
        $marca = $_GET["marca"];
        $modelo = $_GET["modelo"];
        $versao = $_GET["versao"];
        $cor = $_GET["cor"];
        $comb = $_GET["comb"];
        $cat = $_GET["cat"];
        $opcionais = $_GET["opcionais"];
        $preco = $_GET["preco"];
        $quilometragem = $_GET["quilometragem"];
        $descricao = $_GET["descricao"];
        $botao_alterar = $_GET["botao_alterar"];

        //comando para atualizar a tabela
        $comando_editar = "UPDATE carros SET placa='.$placa.', marca = '.$marca.', modelo = '.$modelo.', versao = '.$versao.', cor = '.$cor.', comb = '.$comb., cat = '.$cat.', opcionais = '.$opcionais.', preco = '.$preco.', quilometragem = '.$quilometragem.', descricao = '.$descricao.' WHERE placa LIKE '.$placa.'";

        //checagem do resultado da alteração dos dados
        $resultado = mysqli_query($conexao, $comando_editar);

        if ($resultado) {
            echo "Registro alterado com sucesso";
        }
        else {
            echo "Registro não alterado. Tente novamente!";
        }
        //voltar para a página principapl
        echo "<br><br> <a href='index.php'> Voltar </a>";
    }
    //----------------fim da ação botão editar--------------------------

    //----------------começo da ação botão deletar--------------------------
    include('config.php');

    if (isset($_POST[btn_excluir])) {
        //variaveis para receber informações da caixa de texto
        $placa = $_POST["placa"];
        $marca = $_POST["marca"];
        $modelo = $_POST["modelo"];
        $versao = $_POST["versao"];
        $cor = $_POST["cor"];
        $comb = $_POST["comb"];
        $cat = $_POST["cat"];
        $opcionais = $_POST["opcionais"];
        $preco = $_POST["preco"];
        $quilometragem = $_POST["quilometragem"];
        $descricao = $_POST["descricao"];

        //comando exlcuir no banco de dados
        $comando_excluir = "DELETE FROM carros WHERE placa LIKE = '.$placa.'";

        //checagem se excluiu os dados do carro selecionado
        $resultado = mysqli_query($conexao, $comando_excluir);

        if ($resultado) {
            echo "Registro excluído com sucesso";
        }
        else {
            echo "Não foi possível excluir o registro. Tente novamente!";
        }
        echo "<br><br> <a href='index.php'> Voltar </a>";
    }
    //----------------fim da ação botão deletar-------------------------- 
    
    //----------------começo da ação botão listar--------------------------
    <?php
    include('config.php');

     $conexao = mysqli_connect('$localhost','$root','','clvmotors');

     $resultado = mysqli_query($conexao,"SELECT * FROM carros");

     echo '\n';

     while (linha = mysqli_fetch_array ($resultado)) {
        echo $linha["placa"] . "<br>";
        echo $linha["marca"] . "<br>";
        echo $linha["modelo"] . "<br>";
        echo $linha["versao"] . "<br>";
        echo $linha["cor"] . "<br>";
        echo $linha["comb"] . "<br>";
        echo $linha["cat"] . "<br>";
        echo $linha["opcionais"] . "<br>";
        echo $linha["preco"] . "<br>";
        echo $linha["quilometragem"] . "<br>";
        echo $linha["descricao"] . "<br>";
        echo "<br><\n>"
     }
     echo "<\n>";
     mysqli_close($conexao);
    ?>

?>