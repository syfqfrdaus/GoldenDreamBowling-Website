<?php include('Connection.php') ?>
<!DOCTYPE html>
<html>

<head>
  <title>Register</title>
  <link rel="stylesheet" type="text/css" href="LognReg.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

  <div id="login-box" style="height: 500px;">
    <div class="left">
      <img src="designimg/LogoBoling.png" alt="" style="height: 250px; width: 250px;">
    </div>
    <div class="right">
      <h1 id='status'>Register</h1>
      <input type="text" id="fullname" name="fullname" placeholder="Name" required>
      <input type="text" id="email" name="email" placeholder="E-mail" required>
      <input type="password" id="password" name="password" placeholder="Password" required>
      <form>
        <p>Please select your Gender:</p>
        <input type="radio" id="gMale" name="gender" value="Male">
        <label for="gMale">Male</label><br>
        <input type="radio" id="gFemale" name="gender" value="Female">
        <label for="gFemale">Female</label><br>
      </form>

      <input type="submit" id='signUp' name="signup_submit" value="Register" /><br><br>
      <a class="btn btn-secondary" href="index.php" role="button">Back</a>
    </div>
</body>

<script type="module">
  // Import the functions you need from the SDKs you need
  import {
    initializeApp
  } from "https://www.gstatic.com/firebasejs/9.4.0/firebase-app.js";
  import {
    getDatabase,
    set,
    ref,
    update
  } from "https://www.gstatic.com/firebasejs/9.4.0/firebase-database.js";
  import {
    getAuth,
    signInWithEmailAndPassword,
    onAuthStateChanged,
    createUserWithEmailAndPassword,
    signOut
  } from "https://www.gstatic.com/firebasejs/9.4.0/firebase-auth.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  const firebaseConfig = {
    //yout config code
    apiKey: "AIzaSyADEbWQ5o7VKwtmWinVPhUPXpHMqmGVrxw",
    authDomain: "workshop2-d8198.firebaseapp.com",
    databaseURL: "https://workshop2-d8198-default-rtdb.firebaseio.com",
    projectId: "workshop2-d8198",
    storageBucket: "workshop2-d8198.appspot.com",
    messagingSenderId: "116986843475",
    appId: "1:116986843475:web:337e55cd53a5201eaad1a6"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const database = getDatabase(app);
  const auth = getAuth();


  //Register
  signUp.addEventListener('click', (e) => {

    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var fullname = document.getElementById('fullname').value;
    var gender = document.querySelector('input[name="gender"]:checked').value;



    createUserWithEmailAndPassword(auth, email, password, gender)
      .then((userCredential) => {
        // Signed in 
        const user = userCredential.user;

        //insert data into database
        set(ref(database, 'staff/' + user.uid), {
          fullname: fullname,
          email: email,
          password: password,
          gender: gender
        }).then(() => {
          alert('Staff ID Created!');
          window.location.href = "http://localhost/Bowling/index.php";
        });
      })
      .catch((error) => {
        const errorCode = error.code;
        const errorMessage = error.message;

        alert(errorMessage);
        // ..
      });
  });
</script>

</html>