************************************************
</div>
<div class="cards">
    <?php
        $conn = mysqli_connect('localhost', 'root') or die(mysqli_error());
        $select_db = mysqli_select_db($conn, 'ecomerse')  or die(mysqli_error());

        $sql = "select *from products";

        $result = mysqli_query($conn, $sql) or die(mysqli_error());
        $row = mysqli_fetch_assoc($result);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>

    <div class="card">
        **************************************************************************************************************
        <img src="images/<?php echo $row['img']; ?>" alt="img" style="width:100%">
        <h1><?php echo $row['title']; ?></h1><br>
        <h2><?php echo $row['price']; ?></h2><br>
        <h2><?php echo $row['brand']; ?></h2><br>
        <h2><?php echo $row['description']; ?></h2><br>
        <h2><?php echo $row['features']; ?></h2>
    </div>

    <?php

        } ?>
</div>



<img src="images/<?php echo $row['img']; ?>" alt="img">

<form action="add.php" method="post" enctype="multipart/form-data">
    <input type="text" name="title" placeholder="title">name</input>
    <br>
    <input type="text" name="price" placeholder="price">price</input>
    <br>
    <input type="text" name="brand" placeholder="brand">brand</input>
    <br>
    <input type="text" name="description" placeholder="description">description</input>
    <br>
    <input type="file" name="file" placeholder="file">namefile</input>
    <br>
    <button>submmit</button>
</form>


<div class='chat'>
    <a href="/html/default.asp">HTML tutorial</a>

</div>
</body>

</html>