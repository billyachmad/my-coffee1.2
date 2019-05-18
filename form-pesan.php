<!DOCTYPE html>
<html>
<head>
  
    <title>Mari Pesan Bersama Kami!</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

   
    <header>
        <h1>My Coffee 1.1</h1>
    </header>

    <form action="proses-pemesanan.php" method="POST">
    
    <div class="kotak_login">
		<p class="tulisan_login">Kindly place your order :)</p>
        <input type="hidden" name="queue_number"/>
        <fieldset>

        <p>
            <label for="coffee_type">Coffee Type : </label>
            <input type="text" name="coffee_type" class="form_login" placeholder="What kind of coffee?" required/>
        </p>
        <p>
            <label for="methods">How do you like it?</label>
                <br>
                <label class="container"><input type="radio" name="methods" value="hot" required><span class="checkmark"></span>Hot</label>
                <br>
                <label class="container"><input type="radio" name="methods" value="iced" required><span class="checkmark"></span>Iced</label>
                <br>
                <label class="container"><input type="radio" name="methods" value="iced (blended)" required><span class="checkmark"></span>Iced (Blended)</label>
        </p>
        <p>
            <label for="size">What size do you want?</label>
                <br>
                <label class="container"><input type="radio" name="size" value="tall" required><span class="checkmark"></span>Tall (12 ounces)</label>
                <br>
                <label class="container"><input type="radio" name="size" value="grande" required><span class="checkmark"></span>Grande (16 ounces)</label>
                <br>
                <label class="container"><input type="radio" name="size" value="venti" required><span class="checkmark"></span>Venti (20 ounces)</label>
        </p>
        <p>
        <label for="details">Extra Details:</label>
            <input type="text" name="details" class="form_login" placeholder="Is there anything else?" required />
        </p>
        <p>
        <label for="payment_methods">How do you like to pay?</label>
                <br>
                <label class="container"><input type="radio" name="payment_methods" value="Cash" required><span class="checkmark"></span>Cash</label>
                <br>
                <label class="container"><input type="radio" name="payment_methods" value="Debit" required><span class="checkmark"></span>Debit</label>
                <br>
                <label class="container"><input type="radio" name="payment_methods" value="Gopay" required><span class="checkmark"></span>Go-pay</label>
        </p>
        <p>
           
            <center><button class="tombol">Order Please!</button>
	
        </p>

        </fieldset>

    </form>

    </body>
</html>