<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>
<body>
<?php
        // code php here
        $n = 13;
        $product = [
            "name"=>"Iphone 15",
            "price"=>1000,
            "description"=>"San pham dang hot"
        ];        
    ?>
    <h1>Hello world!</h1>
    <h2>Số người đang có trên lớp: <?php echo $n;?></h2>
    <div class="card" style="width: 18rem;">
         <img src="images/iphone15.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title"><?php echo $product["name"]?></h5>
            <p class="card-text"><?php echo $product["description"]?></p>
            <p class="card-text"><?php echo $product["price"]."$"?></p>
         <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
    
</div>
</body>
</html>