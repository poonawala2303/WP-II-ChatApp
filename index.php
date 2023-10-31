<?php
session_start();
if (isset($_SESSION['unique_id'])) {
  header("location: users.php");
}
?>

<?php include_once "header.php"; ?>

<style>

    .wrap
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

    img
    {
      display: none;
    }

   

</style>

<body>

    <div class="preloader" id="preloader" >
      <h1>Loading .....</h1>
    </div>

  <div class="wrapper">
    <section>
      <img class="wrap" src="./php/images/7883-removebg-preview 1.png" alt="">
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
          <input type="email" name="email" placeholder="Enter your email" required>
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

  <script>
      var loader = document.getElementById('preloader');

      window.addEventListener('load',function(){
        loader.style.display = 'none';
      })
  </script>

<iframe width="560" height="315" src="https://www.youtube.com/embed/Yf5d_Zx3AaI?si=JpBXdeIzr9xfJZlc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
<iframe width="560" height="315" src="https://www.youtube.com/embed/Yf5d_Zx3AaI?si=JpBXdeIzr9xfJZlc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
<iframe width="560" height="315" src="https://www.youtube.com/embed/Yf5d_Zx3AaI?si=JpBXdeIzr9xfJZlc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
<iframe width="560" height="315" src="https://www.youtube.com/embed/Yf5d_Zx3AaI?si=JpBXdeIzr9xfJZlc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
<iframe width="560" height="315" src="https://www.youtube.com/embed/Yf5d_Zx3AaI?si=JpBXdeIzr9xfJZlc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                          

</body>

</html>