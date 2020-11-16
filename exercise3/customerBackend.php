<html language="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php
  $uName = $_POST["email"];
  $passWord = $_POST["password"];
  $numComputer = $_POST["numComputer"];
  $numPhone = $_POST["numPhone"];
  $numPS5 = $_POST["numPS5"];
  $Computercost = $numComputer*2000;
  $Phonecost = $numPhone*1000;
  $PS5cost = $numPS5*500;
  $shipping = $_POST["shippingType"];
  if($shipping == "overnight") {
    $shipping = 50;
  }
  elseif($shipping == "3Day") {
    $shipping = 5;
  }
  else {
    $shipping = 0;
  }
  echo "Password is: ", $passWord;
  echo "<h4>Thank You for your Purchase, ", $uName , "!<h4>";
  ?>
  <table>
      <tr>
        <th>Item</th>
        <th>Quantity</th>
        <th>Subtotal</th>
      </tr>
      <tr>
        <td>Computer</td>
        <td><?php echo $numComputer; ?></td>
        <td><?php echo "$", $Computercost; ?></td>
      </tr>
      <tr>
        <td>Phone</td>
        <td><?php echo $numPhone; ?></td>
        <td><?php echo "$", $Phonecost; ?></td>
      </tr>
      <tr>
        <td>PS5</td>
        <td><?php echo $numPS5; ?></td>
        <td><?php echo "$", $PS5cost; ?></td>
      </tr>
      <tr>
        <td>Shipping</td>
        <td><?php echo "$", $shipping; ?></td>
      </tr>
    </table>
    Total Cost: <?php echo "$", $Computercost+$Phonecost+$PS5cost+$shipping; ?>
</body>

</html>
