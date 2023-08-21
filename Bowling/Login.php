<?php include('Connection.php') ?>
<!DOCTYPE html>
<html>

<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="LognReg.css">
</head>

<body>
  <div id="login-box">
    <div class="left">
      <img src="designimg/LogoBoling.png" alt="" style="height: 250px; width: 250px;">
    </div>
    <div class="right">
      <h1 id='status'>Login</h1>
      <input type="text" id="email" name="email" placeholder="E-mail" />
      <input type="password" id="password" name="password" placeholder="Password" />

      <input type="submit" id='login' name="login" value="Login" />

    </div>

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

  login.addEventListener('click', (e) => {
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;

    signInWithEmailAndPassword(auth, email, password)
      .then((userCredential) => {
        // Signed in 
        const user = userCredential.user;

        const dt = new Date();
        update(ref(database, 'staff/' + user.uid), {
          last_login: dt,
        })

        alert('User loged in!');
        // ...
      })
      .catch((error) => {
        const errorCode = error.code;
        const errorMessage = error.message;

        alert(errorMessage);
      });

  });

  const user = auth.currentUser;
  onAuthStateChanged(auth, (user) => {
    if (user) {
      // User is signed in, see docs for a list of available properties
      // https://firebase.google.com/docs/reference/js/firebase.User
      const uid = user.uid;
      //bla bla bla
      // ...
      //header('location: index.php');
      //window.location.replace("http://localhost/test/index.php");
      window.location.href = "http://localhost/Bowling/index.php";
    } else {
      // User is signed out
      // ...
      //bla bla bla
    }
  });
</script>

</html>