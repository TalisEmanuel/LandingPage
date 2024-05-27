<?php
    class Form{
        public static function alert ($tipo,$mensagem){
            if($tipo == 'erro'){
                echo'<div style="position: fixed;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                z-index: 9999;
                background-color: rgba(255, 0, 0, 0.7);
                color: #fff;
                padding: 10px 20px;
                border-radius: 5px;
                text-align: center; " >'.$mensagem.'</div>';
                return false;
            }
        }
       
    
        public static function cadastrar($nome,$email,$phone){
        $sql = MySql::conectar() ->prepare("INSERT INTO usuario VALUES (null,?,?,?) ");
        $sql ->execute(array($nome,$email,$phone));   
    
        }      
   
}
    


?>