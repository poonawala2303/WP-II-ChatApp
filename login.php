<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
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
    <section class="form login">
      <header>Realtime Chat App</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter your password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Continue to Chat">
        </div>
      </form>
      <div class="link">Not yet signed up? <a href="index.php">Signup now</a></div>
    </section>
  </div>
  
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>
</html>
