<?php
session_start();
if (isset($_SESSION['unique_id'])) {
  header("location: users.php");
}
?>

<?php include_once "header.php"; ?>

<style>

    img
    {
        display: flex;
        justify-content: center;
        width: 300px;
        height: 180px;
        margin: auto;
    }

    body
    {
      background-image: url('./php/images/chatbg.avif');
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }

</style>

<body>

  <div class="wrapper">
    <section>
      <img src="../AI BOT/team.py-sih-kjsce/Frontend/Assets/7883-removebg-preview 1.png" alt="">
    </section>
    <section class="form signup">
    <header style="text-align: center;" >Realtime Chat App</header>
      <form action="users.php" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">

          <div class="field input">
            <label>First Name</label>
            <input type="text" name="fname" placeholder="First name" required>
          </div>
          
          <div class="field input">
            <label>Last Name</label>
            <input type="text" name="lname" placeholder="Last name" required>
          </div>

        </div>

        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>

        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter new password" required>
          <i class="fas fa-eye"></i>
        </div>

        <div class="field image">
          <label>Select Image</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>

        <div class="field button">
          <input type="submit" name="submit" value="Continue to Chat">
        </div>

      </form>

      <div class="link">Already signed up? <a href="login.php">Login now</a></div>

    </section>

  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>

</html>