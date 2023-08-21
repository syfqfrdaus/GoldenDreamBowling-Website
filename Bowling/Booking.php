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
    <section style="color: #000000; width: 1200px; margin-right:auto; margin-left:auto;">
        <div style="text-align: center;">
            <img src="designimg/Logo1.png" alt="" style="padding: 10px; width: 550px; height: 180px; margin-left:auto; margin-right:auto;">
        </div>
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
        <div class="content">
            <h2><b>Booking</b></h2>
            <!--Search Section Start-->
            <div class="input-group mb-3">
                <input type="text" id="SearchBar" class="form-control" placeholder="Search...." aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <select class="custom-select" id="CategorySelected">
                        <option selected value="1">By Date</option>
                        <option value="2">By Name</option>
                        <option value="3">By Lane No</option>
                    </select>
                    <button class="btn btn-primary" type="button" id="SearchBtn">Search</button>
                </div>
            </div>
            <!--Search Section End-->
            <div class="panel-body table-responsive" style="max-height: 300px;">
                <table class="table table-bordered">
                    <thead class="table-dark">
                        <th>No</th>
                        <th>Booking ID</th>
                        <th>UID</th>
                        <th>Date</th>
                        <th>Fullname</th>
                        <th>Time</th>
                        <th>Lane No</th>
                        <th>No of Game</th>
                        <th>No of Player</th>
                        <th>No of Shoes</th>
                        <th>Price</th>
                        <th>Edit</th>
                    </thead>
                    <tbody class="table-info" id="tbody1"></tbody>
                </table>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Alert</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <label class="label">User Key: </label>
                        <input type="text" id="useridMod" disabled> <br>
                        <label class="label">No ID: </label>
                        <input type="text" id="noidMod" disabled> <br>
                        <label class="label">Date: </label>
                        <input type="text" id="dateMod" disabled> <br>
                        <label class="label">Time: </label>
                        <input type="text" id="timeMod" disabled> <br>
                        <label class="label">Lane: </label>
                        <input type="text" id="laneMod" disabled> <br>
                        <br><br><b>
                            <p>ARE YOU SURE YOU WANT TO DELETE THIS BOOKING?</p>
                        </b>

                    </div>
                    <div class="modal-footer">
                        <button type="button" id="DeleteModBtn" class="btn btn-danger" onclick="DeleteStaff()">Delete</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal End -->
    </section>

    <script src="https://www.gstatic.com/firebasejs/7.21.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.21.1/firebase-database.js"></script>

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
        firebase.initializeApp(firebaseConfig);
        var app = initializeApp(firebaseConfig);
        var db = getDatabase();
        var dbRef = ref(db);

        var staffno;
        var staffList = [];

        // Fetch Data from Firebase
        function Select_AllData() {
            document.getElementById('tbody1').innerHTML = "";
            staffno = 0;

            var rootRef = firebase.database().ref("Booking/");
            rootRef.once("value")
                .then(function(snapshot) {
                    snapshot.forEach(function(childSnapshot) {
                        var bookingID = childSnapshot.key;
                        var bookingDetails = childSnapshot.val();
                        Object.keys(bookingDetails).forEach(function(bookingDetail) {
                            var detail = bookingDetails[bookingDetail];
                            var BDate = detail.Date;
                            var email = detail.Email;
                            var fname = detail.FullName;
                            var ngame = detail.NumberGame;
                            var nplayer = detail.NumberPlayer;
                            var nshoes = detail.NumberShoes;
                            var payID = detail.PaymentID;
                            var time = detail.Time;
                            var tprice = detail.TotalPrice;
                            var lane = detail.Lane;
                            AddItemToTable(bookingID, bookingDetail, BDate, fname, time, lane, ngame, nplayer, nshoes, tprice);
                        });
                    });
                });
        }

        window.onload = Select_AllData;

        //Fill table with data

        function AddItemToTable(bookingID, bookingDetail, BDate, fname, time, lane, ngame, nplayer, nshoes, tprice) {
            var tbody1 = document.getElementById('tbody1');
            var trow = document.createElement("tr");
            var td0 = document.createElement("td");
            var td1 = document.createElement("td");
            var td2 = document.createElement("td");
            var td3 = document.createElement("td");
            var td4 = document.createElement("td");
            var td5 = document.createElement("td");
            var td6 = document.createElement("td");
            var td7 = document.createElement("td");
            var td8 = document.createElement("td");
            var td9 = document.createElement("td");
            var td10 = document.createElement("td");

            staffList.push([bookingID, bookingDetail, BDate, fname, time, lane, ngame, nplayer, nshoes, tprice]);

            var btn = document.createElement("button");
            btn.onclick = function() {
                FillTboxes(btn.id);
            };

            btn.id = staffno;

            btn.innerHTML = "Delete";

            td0.innerHTML = ++staffno;
            td1.innerHTML = bookingID;
            td2.innerHTML = bookingDetail;
            td3.innerHTML = BDate;
            td4.innerHTML = fname;
            td5.innerHTML = time;
            td6.innerHTML = lane;
            td7.innerHTML = ngame;
            td8.innerHTML = nplayer;
            td9.innerHTML = nshoes;
            td10.innerHTML = tprice;

            td3.classList += "dateField";
            td4.classList += "nameField";
            td6.classList += "laneField";

            trow.appendChild(td0);
            trow.appendChild(td1);
            trow.appendChild(td2);
            trow.appendChild(td3);
            trow.appendChild(td4);
            trow.appendChild(td5);
            trow.appendChild(td6);
            trow.appendChild(td7);
            trow.appendChild(td8);
            trow.appendChild(td9);
            trow.appendChild(td10);

            trow.appendChild(btn);
            tbody1.appendChild(trow);

        }

        var ModUserID = document.getElementById('useridMod');
        var ModNoID = document.getElementById('noidMod');
        var ModDate = document.getElementById('dateMod');
        var ModTime = document.getElementById('timeMod');
        var ModLane = document.getElementById('laneMod');

        var BtnModUpdate = document.getElementById('UpdateModBtn');
        var BtnModDelete = document.getElementById('DeleteModBtn');

        function FillTboxes(index) {
            $("#exampleModalCenter").modal('toggle');
            //data-toggle="modal" data-target="#exampleModalCenter"
            if (index == null) {
                ModUserID.value = "";
                ModNoID.value = "";
                ModDate.value = "";
                ModTime.value = "";
                ModLane.value = "";

            } else {
                //--index;
                ModUserID.value = staffList[index][0];
                ModNoID.value = staffList[index][1];
                ModDate.value = staffList[index][2];
                ModTime.value = staffList[index][4];
                ModLane.value = staffList[index][5];
            }
        }

        var btnDelete = document.getElementById("DeleteModBtn");
        btnDelete.onclick = function() {
            DeleteStaff();
        };

        //Delete data from database
        function DeleteStaff() {
            try {
                remove(child(dbRef, "Booking/" + ModUserID.value + "/" + ModNoID.value), {

                });

                alert('Data Deleted');
                $("#exampleModalCenter").modal('hide');
                Select_AllData();
            } catch (error) {
                // Show an alert with the error message if the update fails
                alert(`Error deleting staff member: ${error}`);
            }
        }

        var searchBar = document.getElementById("SearchBar");
        var searchBtn = document.getElementById("SearchBtn");
        var category = document.getElementById("CategorySelected");
        var tbody = document.getElementById("tbody1");

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
                SearchTable("dateField");

            else if (category.value == 2)
                SearchTable("nameField");

            else if (category.value == 3)
                SearchTable("laneField");

        }
    </script>

</body>

</html>