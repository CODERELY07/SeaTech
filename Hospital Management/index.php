<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Medic Tech</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css<?php echo '?'.mt_rand(); ?>" />
    <script src="js/script.js<?php echo '?'.mt_rand(); ?>" defer></script>
  </head>
  <body>
    <div class="body">
      <div class="s">
        <div class="intro">
          <div class="logo">
            <img src="img/sign.png" alt="" width="70px" />
            <h2 class="text-white">Medic <span class="light">Medic</span></h2>
          </div>
        </div>
      </div>
    </div>

    <div class="container main mb-5">
      <ul class="tabs">
        <li class="active tab text-secondary" data-tab-target="#signup">SIGN UP</li>
        <li class="tab text-secondary" data-tab-target="#signin">SIGN IN</li>
      </ul>
      <div class="card py-3 px-4 bg-white tab-content">
        <form action="" id="signup" data-tab-content class="active">

          <div class="nextActive" id="userInfo" data-next-content>
            <div class="inputField">
              <label for="username">Username</label>
              <input type="text" name="username" id="username" />
            </div>
            <div class="inputField">
              <label for="email">Email</label>
              <input type="email" name="email" id="email" />
            </div>
            <div class="inputField">
              <label for="phone">Phone No.</label>
              <input type="tel" name="phone" id="phone" />
            </div>
            <div class="inputField">
              <label for="password">Password</label>
              <input type="password" name="password" id="password" />
            </div>
            <div class="inputField">
              <label for="confirmPass">Confirm Password</label>
              <input type="password" name="confirmPass" id="confirmPass" />
            </div>
            <input type="button" data-next-target="#position" value="Next" class="btn">
          </div>

          <div id="position" data-next-content>
              <i class="fa-solid fa-arrow-left pointer arrowLeft" data-next-target="#userInfo"></i>
              <div class="mx-5 d-inline-block">
                <h5 class="mt-2">Choose Your Position</h5 class="mt-2">
                <p class="font-lighter">Who you are?</p>
              </div>
              <label for="doctor" class="d-block">
                <div class="card pointer box">
                    <i class="fa-solid fa-user-doctor icons" ></i>
                    <h4>DOCTOR</h4>
                    <input type="radio" name="doctor" class="radio" id="doctor" value="Doctor">
                </div>
              </label>
              <label for="patient"  class="d-block">
                <div class="card pointer box">
                   <i class="fa-solid fa-hospital-user icons"></i>
                    <h4>PATIENT</h4>
                    <input type="radio" name="doctor" class="radio" id="patient" value="Patient">
                </div>
              </label>
              <label for="admin"  class="d-block">
                <div class="card pointer box">
                   <i class="fa-solid fa-user-tie icons"></i></i>
                    <h4>ADMIN</h4>
                    <input type="radio" name="doctor" class="radio" id="admin" value="Admin">
                </div>
              </label>
            <input type="submit" value="Save" class="btn">
          </div>
        </form>
        
        <form action="" id="signin" data-tab-content>
          <div class="inputField">
            <label for="emailLogin">Email</label>
            <input type="email" name="emailLogin" id="emailLogin" />
          </div>
          <div class="inputField">
            <label for="passwordLogin">Password</label>
            <input type="password" name="passwordLogin" id="passwordLogin" />
          </div>
          <input type="submit" value="Next" class="btn">
        </form>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  </body>
</html>
