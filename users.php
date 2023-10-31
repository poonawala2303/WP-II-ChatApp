<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>
<?php include_once "header.php"; ?>

<style>

    body
    {
      background-image: url('./php/images/chatbg.avif');
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }

</style>

<body>

<div class="preloader" id="preloader" >
      <h1>Loading .....</h1>
    </div>

  <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          <img src="php/images/<?php echo $row['img']; ?>" alt="">
          <div class="details">
            <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
            <p><?php echo $row['status']; ?></p>
          </div>
        </div>
        <a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Logout</a>
      </header>
      <div class="search">
        <span class="text">Select an user to start chat</span>
        <input type="text" placeholder="Enter name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
  
      </div>
    </section>
  </div>

  <script src="javascript/users.js"></script>
  <script>
      var loader = document.getElementById('preloader');

      window.addEventListener('load',function(){
        loader.style.display = 'none';
      })
  </script>

<iframe width="560" height="315" src="https://www.youtube.com/embed/Yf5d_Zx3AaI?si=JpBXdeIzr9xfJZlc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

</body>
</html>
