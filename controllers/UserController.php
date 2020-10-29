<?php 

//require_once '../models/UserModel.php';

if(isset($_POST['submit'])){

    $username = $_POST['usuario'];
    $password = $_POST['contraseña'];

    if(empty($username) || empty($password))
    {
        echo '<div class="alert alert-danger">nombre de usuario o contraseña vacio</div>';
        
    }else{
        $user = new User;

        if($user->getUser($username,$password)){ 
            session_start();
           
                $_SESSION['usuario'] = $username;
                $_SESSION['rol'] = $numRows;
            header('Location: validar/registro_sesion.php');

        }else{
            echo '<div class="alert alert-danger">no existes papu</div>';
        }
    }
}

if (isset($_POST['historial'])){
    if (!empty($_POST['historial'])){
          $user = new usersHistory;
          $valores = $user = $this->resultado;
            foreach($valores as $value){
                
                ?>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>id</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $value['id'] ?></td>
                        </tr>
                    </tbody>

                </table>
                <?php
            }
    }
}else{
    echo "te falta conocimiento sasuke";
}
?>