<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $customers = $this->get('customer');
        
        foreach($customers as $customer)  :
?>
  <div> 
        <p> Прізвище: <?php echo $customer['last_name']?></p>
        <p> Ім'я: <?php echo $customer['first_name']?></p>
        <p> Номер телефону: <?php echo $customer['telephone']?></p>
        <p> E-mail: <?php echo $customer['email']?></p>
        <p> Місто: <?php echo $customer['city']?></p> <br>
  </div>
<?php endforeach; ?>
       
    </body>
</html>
