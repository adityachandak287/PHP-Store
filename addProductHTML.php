<?php 
require('headerHTML.php');

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
<div class="container p-3 rounded bg-light">
      <div class="container bg-light text-dark text-center display-4">
      <h2>Add a product</h2>  
      </div>
      <hr>

      <form method="post" action="addProduct.php">
        <div class="form-group">
          <label>Product Name</label>
          <input
            type="text"
            name="name"
            class="form-control"
            placeholder="Add Name"
            required
          />
        </div>

        <div class="form-group">
          <label>Product Price</label>
          <input
            type="text"
            name="price"
            class="form-control"
            placeholder="Add Price"
            required
          />
        </div>
        <div class="form-group text-center">
            <button type="submit" class="btn btn-dark">Add Product</button>
        </div>
      </form>
    </div>
  </body>
  <?php include("footer.html")?>
</html>
