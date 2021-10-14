

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
<html>
    <head>
        <title>Bookings</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="bookings.css">
    </head>
    <body>
        <h2>Responsive Checkout Page</h2>
        <div class="row">
            <div class="col-75">
                <div class="container">
                    <form action="index.php">
                        <div class="row">
                            <div class="col-58">
                                <h3>Billing Address</h3>
                                <label for="fname"><i class="fa fa-user"></i>Full Name</label>
                                <input type="text" id="fname" name="full_name" placeholder="Dwayne Johnson">
                                
                                <label for="email"><i class="fa fa-envelope"></i>Email</label>
                                <input type="text" id="email" name="email" placeholder="dwayne@example.com">
                                
                                <label for="spr"><i class="fa fa-icon"></i>Sport</label>
                                <input type="text" id="spr" name="sport" placeholder="football">
                                
                                <label for="accs"><i class="fa fa-kits"></i>Accessories</label>
                                <input type="text" id="city" name="accessories" placeholder="shoes">
                                
                                <div class="row">
                                    <div class="col-50">
                                        <label for="state">State</label>
                                        <input type="text" id="state" name="state" placeholder="PP">
                                    </div>
                                    <div class="col-50">
                                        <label for="state">Zip</label>
                                        <input type="text" id="zip" name="zip" placeholder="10001">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-50">
                                <h3>Payment</h3>
                                <label for="fname">Accepted Card</label>
                                <div class="icon-container">
                                    <i class="fa fa-cc-visa" style="color: blue"></i>
                                    <i class="fa fa-cc-amex" style="color: lightskyblue"></i>
                                    <i class="fa fa-cc-mastercard" style="color: red"></i>
                                    <i class="fa fa-cc-discover" style="color: orange"></i>
                                </div>
                                <label for="cname">Name on Card</label>
                                <input type="text" id="cname" name="name_on_card" placeholder="Dwayne Johnson">
                                
                                <label for="ccnum">Credit Card</label>
                                <input type="text" id="ccnum" name="credit_card" placeholder="XXXX-XXXX-XXXX-XXXX">
                                
                                <label for="expmonth">Expiry Month</label>
                                <input type="text" id="expmonth" name="expiry_month" placeholder="September">
                                <div class="row">
                                    <div class="col-50">
                                        <label for="expyear">Expiry Year</label>
                                        <input type="text" id="expyear" name="expiry_year" placeholder="2018">
                                    </div>
                                    <div class="col-50">
                                        <label for="cvv">CVV</label>
                                        <input type="text" id="cvv" name="cvv" placeholder="XXX">
                                    </div>
                                </div>
                            </div>
                            
                            <label>
                                <input type="checkbox" checked="checked" name="sameadr">Shipping address same as billing
                            </label>
                            <input type="submit" value="SUBMIT" class="btn">
                            
                        </div>
                    </form>              
                    
                    
                </div>

            
            </div>
            
            <?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $servername = "localhost";
        $username = "root";
        $password = "123";
        $dbname = "daredevil";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        $sql = "INSERT INTO bookings(full_name, email, sport, accessories, state, zip, name_on_card, credit_card, expiry_month, expiry_year, cvv)
        VALUES ('".$_POST['full_name']."', '".$_POST['email']."', '".$_POST['sport']."', '".$_POST['accessories']."', '".$_POST['state']."', '".$_POST['zip']."', '".$_POST['name_on_card']."', '".$_POST['credit_card']."', '".$_POST['expiry_month']."', '".$_POST['expiry_year']."', '".$_POST['cvv']."')";

            // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
        $conn->close();    
    }
?>
            
            <div class="col-25">
                <div class="container">
                    <h4>Card<span class="price" style="color: black"><i class="fa fa-shopping-cart"></i><b>4</b></span></h4>
                    <p><a href="#">IPHONE</a><span class="price">$1500</span></p>
                    <p><a href="#">SAMSUNG</a><span class="price">$1000</span></p>
                    <p><a href="#">OPPO</a><span class="price">$500</span></p>
                    <p><a href="#">HUAWEI</a><span class="price">$500</span></p>
                    <hr>
                    <p>Total <span class="price" style="color: black"><b>$3500</b></span></p>
                </div>
            </div>
        </div>
        
        <!-----footer----->
        <section class="footer">
        <p>For More INFO Contact us - <br>
                    0773456351 (CEO)<br>
                    0764673408 (MANAGER)<br>
                    0750747984 (Executive director)</p>
                
                <hr>
                <div class="row">
                    <div class="col-md-8">
                        <p class="copyright"> Designed with <i class="fa fa-heart"></i> by Hussain Mowlana</p>
                    </div>
                    <div class="col-md-4">
                        <div class="footer-icons">
                            <i class="fa fa-facebook"></i>
                            <i class="fa fa-instagram"></i>
                            <i class="fa fa-twitter"></i>
                            <i class="fa fa-youtube-play"></i>
                            <i class="fa fa-linkedin"></i>
                        </div>
                    </div>
                </div>
                
        </section>
    </body>
</html>

<style>
   .body
{
    font-family: Arial, Helvetice, sans-serif;
    font-size: 17px;
    padding: 8px;
}
.h2
{
    text-align: center;
}
*
{
    box-sizing: border-box;
}
.row
{
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin: 0 -10px;
}
.col-25
{
    -ms-flex: 25%;
    flex: 25%;
}
.col-50
{
    -ms-flex:50%;
    flex: 50%;
}
.col-75
{
    -ms-flex:75%;
    flex: 75%;
}
.col-25,.col-50,.col-75
{
    padding:0 16px;
}
.container
{
    background-color: lightgray;
    padding: 3px 18px 13px 18px;
    border: 1px solid lightgray;
    border-radius: 3px;
}
.input[type=text]
{
    width: 100%;
    margin-bottom: 20px;
    padding: 12px;
    border: 1px solid white;
    border-radius: 3px;
}
.label
{
    margin-bottom: 10px;
    display: block;
}
.icon-container
{
    margin-bottom: 20px;
    padding: 7px 0;
    font-size: 24px;
}
.btn
{
    background-color: lightblue;
    color: white;
    padding: 12px;
    border: none;
    width: 100%;
    border-radius: 3px;
    cursor: pointer;
    font-size: 17px;
}
.btn:hover
{
    background-color: lightgreen;
}
a
{
    border: 1px solid lightgray;
}
span.price
{
    float: right;
    color: gray;
}
@media(max-width:800px){
    .row{
        flex-direction: column-reverse;
    }
    .col-25
    {
        margin-bottom: 20px;
    }
}
/*-----footer-----*/
.footer
{
    margin-top: 150px;
    background: lightgray;
}
.footer-icons
{
    text-align: right;
}
.footer-icons .fa
{
    margin: 0 10px auto;
    font-size: 20px;
    cursor: pointer;
} 
</style>


