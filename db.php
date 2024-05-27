<?php
    include('Form.php');
    if(isset($_POST['cadastrar']) && $_POST['cadastro']== 'form_ok'){
     $nome = $_POST['nome'];
     $email = $_POST['email'];
     $phone = $_POST['phone'];
        
     if($nome != null && $email != null && $phone!= null){
         // Conexão com o banco de dados
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "landingpage";

 $conn = new mysqli($servername, $username, $password, $dbname);

 // Verificar conexão
 if ($conn->connect_error) {
     die("Falha na conexão: " . $conn->connect_error);
 }
    // Consulta para verificar se o email já está cadastrado
 $sql = "SELECT * FROM usuarios WHERE email = '$email'";
 $result = $conn->query($sql);
 $sqlp = "SELECT * FROM usuarios WHERE phone = '$phone'";
 $resultp = $conn ->query($sqlp);
 

 if ($result->num_rows > 0) {
     // Email já existe no banco de dados
     Form::alert('erro', 'O email já está cadastrado.<span class="close">&times;</span>');
 } else if ($resultp->num_rows > 0){
         //celular ja cadastrado
     Form::alert('erro', 'O celular já está cadastrado.<span class="close">&times;</span>');

 } else {
     // Email não existe no banco de dados, podemos cadastrá-lo
     $sql_insert = "INSERT INTO usuarios (nome, email, phone) VALUES ('$nome', '$email', '$phone')";
     if ($conn->query($sql_insert) === TRUE) {
         header("Location:pgagradecimento.php");
         exit(); 
     } else {
         Form::alert('erro', 'Erro ao cadastrar: ' . $conn->error);
     }
 }
 $conn->close();
}
}

    ?>
        