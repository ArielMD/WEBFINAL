<?php
session_start();
include 'navBar.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Métodos de pago</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        
    </head>
    <body class="bg-dark text-white mt-3">

        <div class="container">
            <h2>Aceptamos Tarjetas de Crédito, Débito y Prepago</h2>
            <br><br><br>
            <form action="carrito.php" method="get">
            <section class="main row">
                <div class="col-sm-12 col-md-4">
                    <center>
                    <h2>Crédito</h2>
                    <br><br>
                    <p>Puedes pagar con tus tarjetas de crédito Visa, Mastercard y American Express</p>
                    <br><br>
                    <input type='radio' name='metodoPago' onclick='this.form.submit()' value='visa'>
                    <img class="img-fluid" src="https://cdn.discordapp.com/attachments/648283644674310144/648291499095621652/Visa.png" width="90" height="90"/>
                    <br><br><br>
                    <input type='radio' name='metodoPago' onclick='this.form.submit()' value='masterCard'>
                    <img class="img-fluid" src="https://cdn.discordapp.com/attachments/648283644674310144/648291493982765059/MC2.png" width="90" height="90"/>
                    <br><br>
                    <input type='radio' name='metodoPago' onclick='this.form.submit()' value='amex'>
                    <img class="img-fluid" src="https://cdn.discordapp.com/attachments/648283644674310144/648283751268220929/americanexpress.png" width="90" height="90"/>
                    <br><br>
                    </center>
                </div>
                
                <div class="col-sm-12 col-md-4">
                    <center>
                    <h2>Débito</h2>
                    <br><br>
                    <p>Puedes pagar con tus tarjetas de Débito Visa y Mastercard: Bancomer, Banamex, Banorte, Santander, HSBC</p>
                    <br><br>
                    <input type='radio' name='metodoPago' onclick='this.form.submit()' value='bbva'>
                    <img class="img-fluid" src="https://cdn.discordapp.com/attachments/648283644674310144/648291488354140165/BBVA.png" width="90" height="90"/>
                    <br><br><br>
                    <input type='radio' name='metodoPago' onclick='this.form.submit()' value='hsbc'>
                    <img class="img-fluid" src="https://cdn.discordapp.com/attachments/648283644674310144/648291490652487680/HSBC.png" width="90" height="90"/>
                    <br><br><br>
                    <input type='radio' name='metodoPago' onclick='this.form.submit()' value='banamex'/>
                    <img class="img-fluid" src="https://cdn.discordapp.com/attachments/648283644674310144/648635532204834829/Banamex.png"  width="160"/>
                    </center>
                </div>
                
                <div class="col-sm-12 col-md-4">
                    <center>
                    <h2>Prepago</h2>
                    <br><br>
                    <p>También puedes pagar la tienda de conveniencia de tu preferencia.</p>
                    <br><br>
                    <input type='radio' name='metodoPago' onclick='this.form.submit()' value='oxxo'>
                    <img class="img-fluid" src="https://cdn.discordapp.com/attachments/648283644674310144/648291495501365248/Oxxo.png" width="90" height="90"/>
                    <br><br>
                    <input type='radio' name='metodoPago' onclick='this.form.submit()' value='7eleven'>
                    <img class="img-fluid" src="https://cdn.discordapp.com/attachments/648283644674310144/648634200710447124/7eleven.png" width="90" height="90"/>
                    </center>
                </div>
            </section>
            </form>
        </div>
    </body>
</html>
<?php
include 'footer.html';