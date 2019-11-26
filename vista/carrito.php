
<?php
   session_start();     
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Carrito</title>
         <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
         <style type="text/css">

         </style>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
       
 
         <script type="text/javascript">

        function validar(i)
        {

        }

         </script>
    </head>
    <body class="bg-dark text-white">
        <?php
        // put your code here
        ?>
        <header class="container text-center">
            <div class="row">
                <div class="col-8">
                </div>
                <div class="col-4">
       
                </div>
            </div>
        </header>
        
        <div class = "container text-center">
            <div class="row">
                <div class="col-12">
                    <h3>Carrito de compras</h3>
                </div>
            </div>
            <br>
            <br>
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre del Articulo</th>
                            <th scope="col">cantidad</th>
                            <th scope="col">Vendedor</th>
                            <th scope="col">precio</th>
                        </tr>
                    </thead>
                    <tbody>


                        <?php
                        require_once('../Dao/DAOVenta.php');
                        $ventas = new DAOVenta();
                        $total =0;
                        $i=1;
                        if(isset($_SESSION['carrito'])){
                            foreach($_SESSION['carrito'] as $arti){
                                $a = $ventas->getArticulo($arti);
                                echo '<tr>';
                                echo'<th scope="row">' . $i . '</th>';
                                echo'<td>' .$a["aNombre"]. '</td>';
                                echo'<td>' ."1". '</td>';
                                echo'<td>' .$a["Usuarios_u_Id"]. '</td>';
                                echo'<td>$' .$a["a_precio"]. '</td>';
                                echo '</tr>';
                                $i++;
                                $total += $a["a_precio"];
                            }
                        }
                        echo '<tr>';
                        echo'<th scope="row"> TOTAL</th>';
                        echo'<td></td>';
                        echo'<td></td>';
                        echo'<td></td>';
                        echo'<td>$'.$total.'</td>';
                        echo '</tr>';
                        
                        ?> 
                        
                    
                    
                </tbody>
                </table>
                <div class="row">
                    <div class="col-4">
                        <form action="index.php">
                            <button type="submit" class="btn btn-primary btn-lg" name="accion">Regresar</button>
                        </form>
                    </div>

                    <div class="col-4">
                    <?php
                    if (isset($_GET['metodoPago'])&&isset($_SESSION['Usuario']){
                    echo '<button type="submit" class="btn btn-primary btn-lg" name="accion">Comprar</button>';
                    }?>
                    </div>
                    
                    <div class="col-4">
                        <!--<button type="summit">Consultar</button>-->
                        <?php
                        if(isset($_SESSION['Usuario']){
                            echo '
                            <form action="../vista/MetodosPago.php">
                            <button type="submit" class="btn btn-primary btn-lg" name="accion">Método de Pago</button>
                            </form>';
                        }else{
                            echo '
                            <form action="../vista/login.php">
                            <button type="submit" class="btn btn-primary btn-lg" name="accion">Método de Pago</button>
                            </form>';
                        }
                        ?>

                    </div>
                </div>

        </div>
        
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>