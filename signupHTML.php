<?php require('headerHTML.php')?>
<div class="container p-2 bg-light rounded ">
      <div class="container bg-light text-dark text-center display-4">
      <h2>Already a user? <a class="btn btn-dark" href="loginHTML.php">Login</a></h2>  
      <h2>Sign Up</h2>
      </div>

      <form method="post" action="signup.php">
        <div class="form-group">
          <label>Name</label>
          <input
            type="text"
            name="name"
            class="form-control"
            placeholder="Add Name"
            required
          />
        </div>

        <div class="form-group">
          <label>Email</label>
          <input
            type="email"
            name="email"
            class="form-control"
            placeholder="Add Email"
            required
          />
        </div>

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

        <div class="form-group">
          <label>Gender</label>
          <select class="form-control" name="gender" required>
            <option value="choose">Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
          </select>
        </div>

        <button type="submit" class="btn btn-dark">Submit</button>
      </form>
    </div>
  </body>
  <?php include("footer.html")?>
</html>
