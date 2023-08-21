<?php include('Connection.php') ?>
<!DOCTYPE html>
<html>

<head>
    <title>Menu</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto:500,900,100,300,700,400' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <section style="color: #000000; width: 1150px; margin-right:auto; margin-left:auto;">
        <div style="text-align: center;">
            <img src="designimg/Logo1.png" alt="" style="padding: 10px; width: 550px; height: 180px; margin-left:auto; margin-right:auto;">
        </div>
        <!-- NavBr Start -->
        <nav class="stroke">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="members.php">Members</a></li>
                <li><a href="promotion.php">Promotion</a></li>
                <li><a href="Announcement.php">Announcement</a></li>
                <li><a href="Booking.php">Booking</a></li>
                <li><a href="report.php">Report</a></li>
                <li><a href="About.php">About Us</a></li>
                <li><a id="logout" href="">Log Out</a></li>
            </ul>
        </nav>
        <!-- NavBar End -->
        <div class="content">
            <h2><b>Announcement</b></h2>
            <button onclick="alertFunction()">Add Announcement</button>
            <br><br>
            <div class="AnnounContent">
                <!-- Table Start -->
                <div class="panel-body table-responsive" style="max-height: 500px;">
                    <table class="table table-bordered">
                        <thead class="table-dark">
                            <th>No</th>
                            <th>ID</th>
                            <th>Publisher</th>
                            <th>Message</th>
                            <th>Edit</th>
                        </thead>
                        <tbody class="table-info" id="tbody1"></tbody>
                    </table>
                </div>
                <!-- Table End -->
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <label class="label">User Key: </label>
                        <input type="text" id="useridMod" disabled> <br>
                        <label class="label">Email: </label>
                        <input type="email" id="EmailMod"> <br>
                        <label class="label">Message: </label>
                        <textarea name="" id="NameMod" cols="30" rows="10"></textarea>

                    </div>
                    <div class="modal-footer">
                        <button type="button" id="UpdateModBtn" class="btn btn-primary" onclick="UpdateStaff()">Update</button>
                        <button type="button" id="DeleteModBtn" class="btn btn-danger" onclick="DeleteStaff()">Delete</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal End -->
    </section>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script type="module">
        // Import the functions you need from the SDKs you need
        import {
            initializeApp
        } from "https://www.gstatic.com/firebasejs/9.4.0/firebase-app.js";
        import {
            getDatabase,
            ref,
            child,
            onValue,
            get,
            update,
            remove
        } from "https://www.gstatic.com/firebasejs/9.4.0/firebase-database.js";

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
        var app = initializeApp(firebaseConfig);
        var db = getDatabase();
        var dbRef = ref(db);

        var staffno;
        var staffList = [];

        // Fetch Data from Firebase
        function Select_AllData() {
            document.getElementById('tbody1').innerHTML = "";
            staffno = 0;

            get(child(dbRef, "Announcement"))
                .then((snapshot) => {
                    snapshot.forEach(childSnapshot => {
                        var announID = childSnapshot.key; //< This fetch the user id/key
                        var email = childSnapshot.val().email;
                        var announC = childSnapshot.val().message;
                        AddItemToTable(announID, email, announC);
                    });
                });
        }

        window.onload = Select_AllData;

        //Fill table with data
        function AddItemToTable(announID, email, announC) {
            var tbody1 = document.getElementById('tbody1');
            var trow = document.createElement("tr");
            var td0 = document.createElement("td");
            var td1 = document.createElement("td");
            var td2 = document.createElement("td");
            var td3 = document.createElement("td");

            //Push data into list
            staffList.push([announID, email, announC]);

            var btn = document.createElement("button");
            btn.onclick = function() {
                FillTboxes(btn.id);
            };

            btn.id = staffno;
            btn.innerHTML = "Edit";

            td0.innerHTML = ++staffno;
            td1.innerHTML = announID;
            td2.innerHTML = email;
            td3.innerHTML = announC;

            trow.appendChild(td0);
            trow.appendChild(td1);
            trow.appendChild(td2);
            trow.appendChild(td3);

            trow.appendChild(btn);
            tbody1.appendChild(trow);

        }

        //Declare Var to get data from modal
        var ModUserID = document.getElementById('useridMod');
        var ModEmail = document.getElementById('EmailMod');
        var ModName = document.getElementById('NameMod');
        var BtnModUpdate = document.getElementById('UpdateModBtn');
        var BtnModDelete = document.getElementById('DeleteModBtn');

        //fill modal box
        function FillTboxes(index) {
            $("#exampleModalCenter").modal('toggle');
            if (index == null) {
                ModUserID.value = "";
                ModEmail.value = "";
                ModName.value = "";
            } else {
                //--index;
                ModUserID.value = staffList[index][0];
                ModEmail.value = staffList[index][1];
                ModName.value = staffList[index][2];
            }
        }

        var btnUpdate = document.getElementById("UpdateModBtn");
        btnUpdate.onclick = function() {
            UpdateStaff();
        };

        //Update Database
        function UpdateStaff() {
            try {
                update(child(dbRef, "Announcement/" + ModUserID.value), {
                    email: ModEmail.value,
                    message: ModName.value
                });

                // Show an alert to confirm that the update was successful
                alert('Staff member successfully updated!');
                $("#exampleModalCenter").modal('hide');
                Select_AllData();
            } catch (error) {
                // Show an alert with the error message if the update fails
                alert(`Error updating : ${error}`);
            }
        }

        var btnDelete = document.getElementById("DeleteModBtn");
        btnDelete.onclick = function() {
            DeleteStaff();
        };

        //Delete data from database
        function DeleteStaff() {
            try {
                remove(child(dbRef, "Announcement/" + ModUserID.value), {

                });

                alert('Data Deleted');
                $("#exampleModalCenter").modal('hide');
                Select_AllData();
            } catch (error) {
                // Show an alert with the error message if the update fails
                alert(`Error deleting: ${error}`);
            }
        }
    </script>
</body>

<script src="https://www.gstatic.com/firebasejs/7.22.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.22.0/firebase-database.js"></script>

<!-- Include the SweetAlert2 library -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    function alertFunction() {
        // Initialize Firebase and reference the location where you want to insert the data
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
        firebase.initializeApp(firebaseConfig);
        const database = firebase.database();
        const folderRef = database.ref("Announcement");

        // Use the SweetAlert2 API to create the prompt dialog
        Swal.fire({
            title: "Enter your email and message",
            html: `
      <input type="email" id="email" placeholder="Email" class="swal2-input">
      <textarea id="message" placeholder="Message" class="swal2-input"></textarea>
    `,
            showCancelButton: true,
            confirmButtonText: "Save",
            preConfirm: () => {
                // Use the preConfirm option to get the values of the email and message inputs
                const email = document.getElementById("email").value;
                const message = document.getElementById("message").value;
                return {
                    email,
                    message
                };
            },
        }).then((result) => {
            if (result.value) {
                // If the user entered a value and clicked the Save button, insert the data into the folder
                const newItem = folderRef.push();
                newItem.set({
                    email: result.value.email,
                    message: result.value.message
                });
                window.location.href = "http://localhost/Bowling/announcement.php";
            }
        });
    }
</script>

</html>