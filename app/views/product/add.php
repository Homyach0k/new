<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
       <h1 style="text-align:center; margin: 10px 10px 10px 10px ">Додавання товарів до магазину:</h1>
       <h4> Код товару: </h4> <input <?php echo filter_input(INPUT_POST, 'sku')?> placeholder="txxxxx"> 
       <h4> Назва товару: </h4> <input <?php echo filter_input(INPUT_POST, 'name')?> placeholder="Повна назва товару">
       <h4> Ціна: </h4> <input <?php echo filter_input(INPUT_POST, 'price')?> placeholder="Ціна товару в гривнях">
       <h4> Кількість: </h4> <input <?php echo filter_input(INPUT_POST, 'qty')?> type="number" placeholder="Кількість наявних одиниць">
       <h4> Опис: </h4> </h4> <textarea <?php echo filter_input(INPUT_POST, 'description')?> size="medium"> </textarea>
       <br> <br>
       <button type="submit">Додати товар</button>
       </form>
    </body>
</html>
