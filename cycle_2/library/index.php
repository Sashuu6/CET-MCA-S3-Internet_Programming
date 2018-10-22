<!DOCTYPE html>
<html>
   <title>LMS | Login</title>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
   <style>
      body,h1 {font-family: "Raleway", sans-serif}
      body, html {height: 100%}
      .bgimg {
      background-image: url('assets/images/back-image.jpg');
      min-height: 100%;
      background-position: center;
      background-size: cover;
      }
   </style>
   <body>
      <div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
         <div class="w3-display-topleft w3-padding-large w3-xlarge">
            Library Management System
         </div>
         <div class="w3-display-middle">
            <h1 class="w3-jumbo w3-animate-top w3-center">Login</h1>
            <hr class="w3-border-grey" style="margin:auto;width:40%">
            <form method="POST">
               <p class="w3-large w3-center"><input class="w3-input w3-border" type="text" placeholder="Username" required name="username"></p>
               <p class="w3-large w3-center"><input class="w3-input w3-border" type="password" placeholder="Password" required name="password"></p>
               <p class="w3-large w3-center"><button class="w3-button w3-green" type="submit"> Submit </button></p>
               <p class="w3-large w3-center">
                  <a class="" href="forgot_password.php">
                     Forgot password
               </p>
            </form>
         </div>
         <div class="w3-display-bottomleft w3-padding-large">
         Developed by <a href="https://sashuu6.github.io/" target="_blank">Sashwat K</a>
         </div>
      </div>
   </body>
</html>
