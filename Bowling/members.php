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
        <!--Nav Bar Start-->
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
        <!--Nav Bar End-->
        <div class="content">
            <h2><b>Members</b></h2>
            <br><br>
            <!--Search Section Start-->
            <div class="input-group mb-3">
                <input type="text" id="SearchBar" class="form-control" placeholder="Search...." aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <select class="custom-select" id="CategorySelected">
                        <option selected value="1">By Email</option>
                        <option value="2">By Name</option>
                        <option value="3">By Status</option>
                    </select>
                    <button class="btn btn-primary" type="button" id="SearchBtn">Search</button>
                </div>
            </div>
            <!--Search Section End-->
            <h3>Current Members</h3><br>
            <!--Table Start-->
            <div class="panel-body table-responsive" style="max-height: 300px;">
                <table class="table table-bordered">
                    <thead class="table-dark">
                        <th>No</th>
                        <th>User Key</th>
                        <th>Email</th>
                        <th>Fullname</th>
                        <th>Status</th>
                        <th>Edit</th>
                    </thead>
                    <tbody class="table-info" id="tbody1"></tbody>
                </table>
            </div>
            <!--Table End-->
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
                        <input type="text" id="EmailMod"> <br>
                        <label class="label">Fullname: </label>
                        <input type="text" id="NameMod"> <br><br>
                        <p>Please select Status:</p>
                        <input type="radio" id="statusActive" name="status" value="Active">
                        <label for="statusActive">Active</label><br>
                        <input type="radio" id="statusInactive" name="status" value="Inactive">
                        <label for="statusInactive">Inactive</label><br>

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
        var firebaseConfig = {
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

            get(child(dbRef, "membership"))
                .then((snapshot) => {
                    snapshot.forEach(childSnapshot => {
                        var email = childSnapshot.val().Email;
                        var userID = childSnapshot.key; //< This fetch the user id/key
                        var fname = childSnapshot.val().FullName;
                        var status = childSnapshot.val().Status;
                        AddItemToTable(email, userID, fname, status);
                    });
                });
        }

        window.onload = Select_AllData;

        //Fill table with data
        function AddItemToTable(email, userID, fname, status) {
            var tbody1 = document.getElementById('tbody1');
            var trow = document.createElement("tr");
            var td0 = document.createElement("td");
            var td1 = document.createElement("td");
            var td2 = document.createElement("td");
            var td3 = document.createElement("td");
            var td4 = document.createElement("td");

            //Push data into list
            staffList.push([email, userID, fname, status]);

            var btn = document.createElement("button");
            btn.onclick = function() {
                FillTboxes(btn.id);
            };

            btn.id = staffno;
            btn.innerHTML = "Edit";

            td0.innerHTML = ++staffno;
            td1.innerHTML = userID;
            td2.innerHTML = email;
            td3.innerHTML = fname;
            td4.innerHTML = status;

            //set column field name for the column to use in search later
            td2.classList += "emailField";
            td3.classList += "nameField";
            td4.classList += "statusField";

            trow.appendChild(td0);
            trow.appendChild(td1);
            trow.appendChild(td2);
            trow.appendChild(td3);
            trow.appendChild(td4);

            trow.appendChild(btn);
            tbody1.appendChild(trow);

        }

        //Declare variable and get from modal
        var ModUserID = document.getElementById('useridMod');
        var ModEmail = document.getElementById('EmailMod');
        var ModName = document.getElementById('NameMod');
       
        var BtnModUpdate = document.getElementById('UpdateModBtn');
        var BtnModDelete = document.getElementById('DeleteModBtn');

        //Fill the modal boxes
        function FillTboxes(index) {
            $("#exampleModalCenter").modal('toggle');
            //data-toggle="modal" data-target="#exampleModalCenter"
            if (index == null) {
                ModUserID.value = "";
                ModEmail.value = "";
                ModName.value = "";
            } else {
                //--index;
                ModUserID.value = staffList[index][1];
                ModEmail.value = staffList[index][0];
                ModName.value = staffList[index][2];
               
            }
        }

        var btnUpdate = document.getElementById("UpdateModBtn");
        btnUpdate.onclick = function() {
            UpdateStaff();
        };

        //Update Database
        function UpdateStaff() {
            var ModStatus = document.querySelector('input[name="status"]:checked').value;
            try {
                update(child(dbRef, "membership/" + ModUserID.value), {
                    Email: ModEmail.value,
                    FullName: ModName.value,
                    Status: ModStatus
                });

                // Show an alert to confirm that the update was successful
                alert('Member successfully updated!');
                $("#exampleModalCenter").modal('hide');
                Select_AllData();
            } catch (error) {
                // Show an alert with the error message if the update fails
                alert(`Error updating Member: ${error}`);
            }
        }

        var btnDelete = document.getElementById("DeleteModBtn");
        btnDelete.onclick = function() {
            DeleteStaff();
        };

        //Delete data from database
        function DeleteStaff() {
            try {
                remove(child(dbRef, "membership/" + ModUserID.value), {

                });

                alert('Data Deleted');
                $("#exampleModalCenter").modal('hide');
                Select_AllData();
            } catch (error) {
                // Show an alert with the error message if the update fails
                alert(`Error deleting Member: ${error}`);
            }
        }

        //Declare variable for the searchbar and get its ID
        var searchBar = document.getElementById("SearchBar");
        var searchBtn = document.getElementById("SearchBtn");
        var category = document.getElementById("CategorySelected");
        var tbody = document.getElementById("tbody1");

        //Search but not exact value
        function SearchTable(Category) {
            var filter = searchBar.value.toUpperCase();
            var tr = tbody.getElementsByTagName("tr");
            var found;

            for (let i = 0; i < tr.length; i++) {

                var td = tr[i].getElementsByClassName(Category);

                for (let j = 0; j < td.length; j++) {
                    if (td[j].innerHTML.toUpperCase().indexOf(filter) > -1) {
                        found = true;
                    }
                }

                if (found) {
                    tr[i].style.display = "";
                    found = false;
                } else {
                    tr[i].style.display = "none";
                }
            }
        }

        //Search based on exact value
        function SearchTableExactValues(Category) {
            var filter = searchBar.value.toUpperCase();
            var tr = tbody.getElementsByTagName("tr");
            var found;

            for (let i = 0; i < tr.length; i++) {

                var td = tr[i].getElementsByClassName(Category);

                for (let j = 0; j < td.length; j++) {
                    if (td[j].innerHTML.toUpperCase() == filter) {
                        found = true;
                    }
                }

                if (found) {
                    tr[i].style.display = "";
                    found = false;
                } else {
                    tr[i].style.display = "none";
                }
            }
        }

        //change what type of search function to use
        //either exact value or not
        searchBtn.onclick = function() {
            if (searchBar.value == "");
            //validation so that only aphanumeric can be entered
            var pattern = /^[a-zA-Z0-9 ]*$/;
            if (!pattern.test(searchBar.value)) {
                alert("Only alphanumeric characters are allowed.");
                return;
            } else if (category.value == 1)
                SearchTable("emailField");

            else if (category.value == 2)
                SearchTable("nameField");

            else if (category.value == 3)
                SearchTableExactValues("statusField");

        }
    </script>
</body>



</html>