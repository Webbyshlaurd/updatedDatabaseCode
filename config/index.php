

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Loft</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container">
        <form action="connect.php" method="post">
        <label for="username">Username:</label><br>
    <input type="text" id="username" name="username"><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email"><br><br>

    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password"><br><br>

  
    <input type="submit" value="Login">
        </form>
      <p>Already a member?<a href="member.php">Login</a></p>
    </div>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>the Loft</title>
  
    <link rel="stylesheet" href="login.css">
    
</head>
<body>
    <div class="flex-container">
        <div class="container">

            <div class="title-txt">
                
                <div class="info">
                    <h1>the Loft</h1>
                    <div class="logo">
                        <h3>by RockCO.</h3>
                    </div> 
                    <div class="info-header">
                     <h2>Employee Satisfaction is a must.</h2>
                     <h3>Book a table now.</h3>
                    </div>
                    
                </div>

            </div>
        </div>
        <div class="bookings">
            <div class="book-blk"> 
                <h1>Sign up today.</h1>
                <div class="placeholder-info"> <h3>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum quisquam aspernatur laboriosam hic tenetur natus sapiente ipsam, cupiditate dolorem commodi.</h3></div>
               
                <form action="connect.php" method="post" id="booking-container">
                  <div class="form-group">
                      <label for="name">
                          <h2>Choose your username:</h2>
                      </label>
                      <input type="text" placeholder="Enter Your Username" id="username" name="username">
                  </div>
                  <div class="form-group">
                      <label for="email" id="email">
                          <h2>Enter your Email:</h2>
                      </label>
                      <input type="text" placeholder="info@gmail.com" id="email" name="email">
                  </div>
                  <div class="form-group">
                      <label for="password">
                          <h2>Choose a password:</h2>
                      </label>
                      <input type="text" placeholder="password" id="password" name="password">
                  </div>
                  <!-- Other form fields and submit button -->
              
                  <div class="sub-btn"> 
                      <button id="book-btn" type="submit">SIGN UP</button>
                  </div>
              </form>
              
                
                <div class="brand">
                    <h1>the Loft</h1>
                    <div class="logo">
                        <h3>by RockCO.</h3>
                        <h4>5 Carlton Court, Taylors Hill | +61430065133 </h4>
                    </div> 
        </div>


        </div>
    </div>
   
</body>
</html>