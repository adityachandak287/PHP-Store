<?php 
require("headerHTML.php");
if(!isset($_COOKIE["username"]))  {
  require("userLoginHTML.php");    
  die();
}

$conn = mysqli_connect('localhost','root','123456','ospda');

if(mysqli_connect_errno())  {
    echo "Connection failed";
}
else    {

    $query = "select * from products";
    $result = mysqli_query($conn, $query);
    $users = mysqli_fetch_all($result,MYSQLI_ASSOC);

    mysqli_free_result($result);
    mysqli_close($conn);
}
?>
<div class="container">
  <div class="float-left">  
    <h1 class="text-center display-4"><b>Products</b></h1>
  </div>
  <div class="float-right">  
    <h1><a id="logout" class="btn btn-lg btn-success" href="addProductHTML.php">Add Product</a></h1>
  </div>
</div>
<div class="container">
  <table class="table mytable-fixed mb-0">
    <thead>
      <tr  class="thead thead-dark">
        <th scope="col">Product ID</th>
        <th scope="col">Product Name</th>
        <th scope="col">Product Price</th>
        <th scope="col">Seller</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($users as $user) {?>
      <tr>
        <td><?php echo $user["id"]; ?></td>
        <td><?php echo $user["name"]; ?></td>
        <td>Rs.<?php echo $user["price"]; ?></td>
        <td><?php echo $user["seller"]; ?></td>
      </tr>
    <?php }?>
    </tbody>
  </table>
</div>
</body>
</html>