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


    // Log Out
    logout.addEventListener('click', (e) => {
        signOut(auth).then(() => {
            // Sign-out successful.
            alert('user loged out');
            window.location.href = "http://localhost/Bowling/login.php";
        }).catch((error) => {
            // An error happened.
            const errorCode = error.code;
            const errorMessage = error.message;
            alert(errorMessage);
        });

    });
</script>