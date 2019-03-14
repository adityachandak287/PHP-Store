<?php require('headerHTML.php')?>

    <div class="container p-3 rounded bg-light">
      <div class="container bg-light text-dark text-center display-4">
        <h2>Login</h2>
      </div>

      <form method="post" action="login.php">
        <div class="form-group">
          <label>Username</label>
          <input
            type="text"
            name="username"
            class="form-control"
            placeholder="Add Username"
            required
          />
        </div>

        <div class="form-group">
          <label>Password</label>
          <input
            type="password"
            name="password"
            class="form-control"
            placeholder="Add Password"
            required
          />
        </div>

        <button type="submit" class="btn btn-dark">Submit</button>
      </form>
    </div>
  </body>
  <?php include("footer.html")?>
</html>
