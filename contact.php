<!DOCTYPE html>
<html>
  <head>
     <title>Contact us page</title>
     <link rel="stylesheet" href="contact.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   </head>
<body>
<!--**************************Header******************************-->
<header>
  <input type="checkbox" name="" id="toggler">
  <label for="toggler" class="fa fa-bars"></label>
  <a href="homepage.php" class="logo">CRYPTObase<span>.</span></a>
  <div class="boxContainer">
      <table class="elementsContainer">
        <tr>
          <td>
            <input type="text" placeholder="Search" class="search">
          </td>
          <td>
            <a href="#"><i class="fa fa-search"></i></a>
          </td>
        </tr>
      </table>
    </div>

  <nav class="navbar">
    <a href="homepage.php">Home</a>
    <a href="about.php">About</a>
    <a href="contact.php">Contact</a>
    <a href="login.php">Sign in|Login</a>
  </nav>
  
</header>
<!--**************************Contact us******************************-->
<br><br><br><br><br><br><br><br><br><br>
  <div class="container">
    <div class="contents">
      <div class="left-side">
          <div class="address details">
            <i class="fa fa-map-marker"></i>
            <div class="head">Address</div>
            <div class="text1">Road no.05,Banjara hills</div>
            <div class="text2">Hyderabad</div>
          </div>

          <div class="phone details">
             <i class="fa fa-phone"></i>
             <div class="head">Phone</div>
             <div class="text1">+1198 3567 9726</div>
             <div class="text2">+1196 3434 8790</div>
          </div>

          <div class="mail details">
             <i class="fa fa-envelope"></i>
             <div class="head">Email</div>
             <div class="text1">Crypto@gmail.com</div>
             <div class="text2">Cryptobase.co.in@gmail.com</div>
          </div>
      </div>

      <div class="right-side">
        <div class="topic">Send us a message</div>
        <br>
          <p>Any queries regarding CRYPTObase?</p>
        <form action="#">
            <div class="input-box">
               <input type="text" placeholder="Full Name">
            </div>
            <div class="input-box">
               <input type="text" placeholder="Email">
            </div>
            <div class="input-box message-box">
               <input type="text" placeholder="Type your Message">
            </div>
            <div class="button">
               <input type="button" value="Send Now" >
            </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>