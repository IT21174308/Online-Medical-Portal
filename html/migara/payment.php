<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - CheckOut Page</title>
  <link rel="stylesheet" href="../../css/migara/payment.css">
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Roboto:wght@300;400&display=swap');
    </style>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@300&family=Roboto:wght@300;400&display=swap');
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="../Js/app.js"></script>

</head>
<body>
  <header>
    <nav class="navbar">
        <ul>
            <li>Customer Care</li>
            <li>Doctors</li>
            <li>Advertise</li>
            <li>Facilities</li>
            <li>Offers</li>
            <li>Emergency</li>
            <li>Home</li>
        </ul>
    </nav>
    <div class="logo"></div>   
</header>
<!-- partial:index.partial.html -->
<div class="mainscreen">
    <!-- <img src=""  class="bgimg " alt="">--> 
      <div class="card">
        <div class="leftside">
          <img
            src=""
            class=""
            alt=""
          />
        </div>
        <div class="rightside">
          <form action="save.php" method="post">
            <h1>CheckOut</h1>
            <h2>Payment Information</h2>
            <p>Cardholder Name</p>
            <input type="text" class="inputbox" name="name" placeholder="" required />
            <p>Card Number</p>
            <input type="number" class="inputbox" name="card_number" id="card_number" required />

            <p>Card Type</p>
            <select class="inputbox" name="card_type" id="card_type" required>
              <option value="">--Select a Card Type--</option>
              <option value="Visa">Visa</option>
              <option value="RuPay">RuPay</option>
              <option value="MasterCard">MasterCard</option>
            </select>
<div class="expcvv">

            <p class="expcvv_text">Expiry</p>
            <input type="date" class="inputbox" name="exp_date" id="exp_date" required />

            <p class="expcvv_text2">CVV</p>
            <input type="password" class="inputbox" name="cvv" id="cvv" required />

            <p>
              <p>Amount</p>
            <input type="text" class="inputbox" name="price" required />
            </p>
        </div>
        <p>
          <input type="hidden" name="aid" value="<?=$_GET['a_id']; ?>">
        </p>
            
            <button type="submit" class="button" > CheckOut</button>
          </form>
        </div>
      </div>
    </div>
<!-- partial -->
  
</body>
</html>
