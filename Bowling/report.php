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
        <!-- Nav Bar Start -->
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
        <!-- Nav Bar End -->
        <div class="content">
            <h2><b>Sales Report</b></h2><br>
            <h3>Total Sales</h3>
            <!-- Card Start -->
            <div class="container-lg">
                <div class="row my-5 align-items-center justify-content-center">
                    <!-- Card Total Sales Month Start -->
                    <div class="col-8 col-lg-4 col-xl-3">
                        <div class="card" style="height: 180px;">
                            <div class="card-body text-center py-4">
                                <h5 class="card-title">Monthly Sales</h5>
                                <label for="month-select">Choose month:</label>
                                <select id="month-select">
                                    <option value="1">January</option>
                                    <option value="2">February</option>
                                    <option value="3">March</option>
                                    <option value="4">April</option>
                                    <option value="5">May</option>
                                    <option value="6">June</option>
                                    <option value="7">July</option>
                                    <option value="8">August</option>
                                    <option value="9">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                                <h5>Total Sales : RM <span id="month-price">0</span></h5>
                                <br>
                            </div>
                        </div>
                    </div>
                    <!-- Card Total Sales Month End -->
                    <!-- Card Total Sales All Start -->
                    <div class="col-9 col-lg-4 col-xl-3">
                        <div class="card" style="height: 180px;">
                            <div class="card-body text-center py-4">
                                <h5 class="card-title">Total Sales</h5><br>
                                <h5>Total Sales : RM <span id="total-price">0</span></h5>
                            </div>
                        </div>
                    </div>
                    <!-- Card Total Sales End -->
                </div>
            </div>
            <h3>Booking Sales</h3>
            <div class="container-lg">
                <div class="row my-5 align-items-center justify-content-center">
                    <!-- Card Booking Sales Month Start -->
                    <div class="col-8 col-lg-4 col-xl-3">
                        <div class="card" style="height: 180px;">
                            <div class="card-body text-center py-4">
                                <h5 class="card-title">Monthly Sales</h5>
                                <label for="month-select">Choose month:</label>
                                <select id="bookmonth-select">
                                    <option value="1">January</option>
                                    <option value="2">February</option>
                                    <option value="3">March</option>
                                    <option value="4">April</option>
                                    <option value="5">May</option>
                                    <option value="6">June</option>
                                    <option value="7">July</option>
                                    <option value="8">August</option>
                                    <option value="9">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                                <h5>Total Sales : RM <span id="bookmonth-price">0</span></h5>
                                <br>
                            </div>
                        </div>
                    </div>
                    <!-- Card Total Booking Sales Month End -->
                    <!-- Card Total Booking Sales Start -->
                    <div class="col-9 col-lg-4 col-xl-3">
                        <div class="card" style="height: 180px;">
                            <div class="card-body text-center py-4">
                                <h5 class="card-title">Total Sales</h5><br>
                                <h5>Total Sales : RM <span id="booktotal-price">0</span></h5>
                            </div>
                        </div>
                    </div>
                    <!-- Card Total Booking Sales End -->
                </div>
            </div>
            <h3>Merchandise Sales</h3>
            <div class="container-lg">
                <div class="row my-5 align-items-center justify-content-center">
                    <!-- Card Monthly Sales Mechandise Start -->
                    <div class="col-8 col-lg-4 col-xl-3">
                        <div class="card" style="height: 180px;">
                            <div class="card-body text-center py-4">
                                <h5 class="card-title">Monthly Sales</h5>
                                <label for="month-select">Choose month:</label>
                                <select id="merchmonth-select">
                                    <option value="1">January</option>
                                    <option value="2">February</option>
                                    <option value="3">March</option>
                                    <option value="4">April</option>
                                    <option value="5">May</option>
                                    <option value="6">June</option>
                                    <option value="7">July</option>
                                    <option value="8">August</option>
                                    <option value="9">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                                <h5>Total Sales : RM <span id="merchmonth-price">0</span></h5>
                                <br>
                            </div>
                        </div>
                    </div>
                    <!-- Card Monthly Merchandise End -->
                    <!-- Card Total Merchandise Start -->
                    <div class="col-9 col-lg-4 col-xl-3">
                        <div class="card" style="height: 180px;">
                            <div class="card-body text-center py-4">
                                <h5 class="card-title">Total Sales</h5><br>
                                <h5>Total Sales : RM <span id="merchtotal-price">0</span></h5>
                            </div>
                        </div>
                    </div>
                    <!-- Card Total Merchandise End -->
                </div>
            </div>

            <h4>Booking Sales Table</h4>
            <!--Search Section Start-->
            <div class="input-group mb-3">
                <input type="text" id="SearchBar" class="form-control" placeholder="Search...." aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <select class="custom-select" id="CategorySelected">
                        <option selected value="1">By Date</option>
                        <option value="2">By Email</option>
                        <option value="3">By PaymentID</option>
                        <option value="4">By Payment Method</option>
                    </select>
                    <button class="btn btn-primary" type="button" id="SearchBtn">Search</button>
                </div>
            </div>
            <!--Search Section End-->
            <!-- Table Booking Start -->
            <div class="panel-body table-responsive" style="max-height: 300px;">
                <table class="table table-bordered">
                    <thead class="table-dark">
                        <th>No</th>
                        <th>Key ID</th>
                        <th>ID</th>
                        <th>Date</th>
                        <th>Email</th>
                        <th>Payment ID</th>
                        <th>Payment Method</th>
                        <th>Price</th>
                    </thead>
                    <tbody class="table-info" id="tbody1"></tbody>
                </table>
            </div>
            <!-- Table Booking End -->
            <br><br>
            <h4>Merchandise Sales Table</h4>
            <!--Search Section Start-->
            <div class="input-group mb-3">
                <input type="text" id="SearchBar1" class="form-control" placeholder="Search...." aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <select class="custom-select" id="CategorySelected1">
                        <option selected value="1">By Date</option>
                        <option value="2">By PaymentID</option>
                        <option value="3">By Payment Method</option>
                        <option value="4">By Purchased Item</option>
                    </select>
                    <button class="btn btn-primary" type="button" id="SearchBtn1">Search</button>
                </div>
            </div>
            <!--Search Section End-->
            <!-- Table Mechandise Start -->
            <div class="panel-body table-responsive" style="max-height: 300px;">
                <table class="table table-bordered">
                    <thead class="table-dark">
                        <th>No</th>
                        <th>Key ID</th>
                        <th>Date</th>
                        <th>Payment ID</th>
                        <th>Payment Type</th>
                        <th>Purchased Item</th>
                        <th>Total Price</th>
                    </thead>
                    <tbody class="table-info" id="tbody2"></tbody>
                </table>
            </div>
            <!-- Table Merchandise End -->
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
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
            var staffno2;
            var staffList1 = [];
            var staffList2 = [];
            window.addEventListener("load", Select_AllData1);
            window.addEventListener("load", Select_AllData2);

            // Fetch Data from Firebase for Payment Main Branch
            function Select_AllData1() {
                document.getElementById('tbody1').innerHTML = "";
                staffno = 0;

                var rootRef = firebase.database().ref("Payment/");
                rootRef.once("value")
                    .then(function(snapshot) {
                        snapshot.forEach(function(childSnapshot) {
                            var bookingID = childSnapshot.key;
                            var bookingDetails = childSnapshot.val();
                            Object.keys(bookingDetails).forEach(function(bookingDetail) {
                                var detail = bookingDetails[bookingDetail];
                                var BDate = detail.Date;
                                var email = detail.Email;
                                var payID = detail.PaymentID;
                                var method = detail.PaymentMethod;
                                var tprice = detail.TotalPrice;
                                AddItemToTable1(bookingID, bookingDetail, BDate, email, payID, method, tprice);
                            });
                        });
                    });
            }

            //Fill Table Booking with data
            function AddItemToTable1(bookingID, bookingDetail, BDate, email, payID, method, tprice) {
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

                staffList1.push([bookingID, bookingDetail, BDate, email, payID, method, tprice]);

                td0.innerHTML = ++staffno;
                td1.innerHTML = bookingID;
                td2.innerHTML = bookingDetail;
                td3.innerHTML = BDate;
                td4.innerHTML = email;
                td5.innerHTML = payID;
                td6.innerHTML = method;
                td7.innerHTML = tprice;

                td3.classList += "dateField";
                td4.classList += "emailField";
                td5.classList += "paymentIDField";
                td6.classList += "methodField";


                trow.appendChild(td0);
                trow.appendChild(td1);
                trow.appendChild(td2);
                trow.appendChild(td3);
                trow.appendChild(td4);
                trow.appendChild(td5);
                trow.appendChild(td6);
                trow.appendChild(td7);

                tbody1.appendChild(trow);
            }

            // Fetch Data from Firebase for MerchPayment Branch
            function Select_AllData2() {
                document.getElementById('tbody2').innerHTML = "";
                staffno2 = 0;

                get(child(dbRef, "MerchPayment/"))
                    .then((snapshot) => {
                        snapshot.forEach(childSnapshot => {
                            var userID = childSnapshot.key; //< This fetch the user id/key
                            var payment = childSnapshot.val().Payment;
                            var paymentID = payment.PaymentID;
                            var mDate = payment.Date;
                            var paymentMethod = payment.PaymentMethod;
                            var totalPrice = payment.TotalPrice;
                            var productBuy = childSnapshot.val().productBuy;
                            let productNames = [];
                            for (var product in productBuy) {
                                var name = productBuy[product].Name;
                                productNames.push(name);
                                var price = productBuy[product].Price;
                            }
                            let allProductNames = productNames.join(", ");
                            AddItemToTable2(userID, mDate, paymentID, paymentMethod, allProductNames, totalPrice);
                        });
                    });

            }


            //Fill table2 with data
            function AddItemToTable2(userID, mDate, paymentID, paymentMethod, allProductNames, totalPrice) {
                var tbody2 = document.getElementById('tbody2');
                var trow = document.createElement("tr");
                var td0 = document.createElement("td");
                var td1 = document.createElement("td");
                var td2 = document.createElement("td");
                var td3 = document.createElement("td");
                var td4 = document.createElement("td");
                var td5 = document.createElement("td");
                var td6 = document.createElement("td");

                staffList2.push([userID, mDate, paymentID, paymentMethod, allProductNames, totalPrice]);

                td0.innerHTML = ++staffno2;
                td1.innerHTML = userID;
                td2.innerHTML = mDate;
                td3.innerHTML = paymentID;
                td4.innerHTML = paymentMethod;
                td5.innerHTML = allProductNames;
                td6.innerHTML = totalPrice;

                td2.classList += "dateField1";
                td3.classList += "paymentIDField1";
                td4.classList += "methodField1";
                td5.classList += "allproductField1";

                trow.appendChild(td0);
                trow.appendChild(td1);
                trow.appendChild(td2);
                trow.appendChild(td3);
                trow.appendChild(td4);
                trow.appendChild(td5);
                trow.appendChild(td6);

                tbody2.appendChild(trow);

            }

            //Get Month(Value) from Select from Card Total Sales Month
            document.getElementById("month-select").addEventListener("change", function(event) {
                // Get the selected month value
                var selectedMonth = event.target.value;

                // Call the calculateTotalSalesByMonth function with the selected month
                calculateTotalSalesByMonth(selectedMonth);
            });

            //Get Month(Value) from Select from Card Booking Sales Month
            document.getElementById("bookmonth-select").addEventListener("change", function(event) {
                // Get the selected month value
                var selectedMonth = event.target.value;

                // Call the calculateTotalSalesByMonth function with the selected month
                calculateTotalSalesByMonthBook(selectedMonth);
            });

            //Get Month(Value) from Select from Card Merchandise Sales Month
            document.getElementById("merchmonth-select").addEventListener("change", function(event) {
                // Get the selected month value
                var selectedMonth = event.target.value;

                // Call the calculateTotalSalesByMonth function with the selected month
                calculateTotalSalesByMonthMerch(selectedMonth);
            });

            //Retrieve the value from above and calculate the Total Sales for selected month
            function calculateTotalSalesByMonth(month) {
                // Get a reference to the "Payment" and "MerchPayment" node in the database
                var paymentRef = firebase.database().ref("Payment");
                var merchPaymentRef = firebase.database().ref("MerchPayment");
                var total = 0;
                var sum = 0;
                // Attach a listener to the "Payment" node that will be triggered every time the data changes
                paymentRef.on("value", function(snapshot) {
                    snapshot.forEach(function(childSnapshot) {
                        // Loop through the children of each child node
                        childSnapshot.forEach(function(grandChildSnapshot) {
                            var payment = grandChildSnapshot.val();
                            var paymentMonth = payment.Date.split("-")[1]; // Get the month from the Date property
                            if (paymentMonth === month) {
                                total += parseFloat(payment.TotalPrice);
                            }
                        });
                    });
                });

                // Attach a listener to the "MerchPayment" node that will be triggered every time the data changes
                merchPaymentRef.on("value", function(snapshot) {
                    snapshot.forEach(function(childSnapshot) {
                        // Loop through the children of each child node

                        var payment = childSnapshot.val().Payment;
                        var paymentMonth = payment.Date.split("-")[1]; // Get the month from the Date property
                        if (paymentMonth === month) {
                            total += parseFloat(payment.TotalPrice);
                            sum = total.toFixed(2)
                        }

                    });
                });

                // Display the total in an HTML element
                document.getElementById("month-price").innerHTML = sum;
            }

            //Retrieve the value from above and calculate the Booking Sales for selected month
            function calculateTotalSalesByMonthBook(month) {
                // Get a reference to the "Payment" and "MerchPayment" node in the database
                var paymentRef = firebase.database().ref("Payment");
                var total = 0;
                var sum = 0;
                // Attach a listener to the "Payment" node that will be triggered every time the data changes
                paymentRef.on("value", function(snapshot) {
                    snapshot.forEach(function(childSnapshot) {
                        // Loop through the children of each child node
                        childSnapshot.forEach(function(grandChildSnapshot) {
                            var payment = grandChildSnapshot.val();
                            var paymentMonth = payment.Date.split("-")[1]; // Get the month from the Date property
                            if (paymentMonth === month) {
                                total += parseFloat(payment.TotalPrice);
                                sum = total.toFixed(2)
                            }
                        });
                    });
                });
                // Display the total in an HTML element
                document.getElementById("bookmonth-price").innerHTML = sum;
            }

            //Retrieve the value from above and calculate the Merchandise Sales for selected month
            function calculateTotalSalesByMonthMerch(month) {
                // Get a reference to the "Payment" and "MerchPayment" node in the database
                var merchPaymentRef = firebase.database().ref("MerchPayment");
                var total = 0;
                var sum = 0;
                // Attach a listener to the "MerchPayment" node that will be triggered every time the data changes
                merchPaymentRef.on("value", function(snapshot) {
                    snapshot.forEach(function(childSnapshot) {
                        // Loop through the children of each child node

                        var payment = childSnapshot.val().Payment;
                        var paymentMonth = payment.Date.split("-")[1]; // Get the month from the Date property
                        if (paymentMonth === month) {
                            total += parseFloat(payment.TotalPrice);
                            sum = total.toFixed(2)
                        }

                    });
                });
                // Display the total in an HTML element
                document.getElementById("merchmonth-price").innerHTML = sum;
            }

            
            //Calculate the total sales from Payment and MerchPayment Branch
            function calculateTotalPrice() {
                var total = 0;
                var sum = 0;
                // Get a reference to the "Payment" node in the database
                var paymentRef = firebase.database().ref("Payment");
                var merchPaymentRef = firebase.database().ref("MerchPayment")

                paymentRef.on("value", function(snapshot) {
                    snapshot.forEach(function(childSnapshot) {
                        childSnapshot.forEach(function(grandChildSnapshot) {
                            if (!isNaN(parseFloat(grandChildSnapshot.val().TotalPrice))) {
                                total += parseFloat(grandChildSnapshot.val().TotalPrice);
                            }

                        });
                    });
                });
                merchPaymentRef.on("value", function(snapshot) {
                    snapshot.forEach(function(childSnapshot) {
                        childSnapshot.forEach(function(grandChildSnapshot) {
                            if (!isNaN(parseFloat(grandChildSnapshot.val().TotalPrice))) {
                                total += parseFloat(grandChildSnapshot.val().TotalPrice);
                                sum = total.toFixed(2)
                            }

                        });
                    });
                    document.getElementById("total-price").innerHTML = sum;
                });
            }
            calculateTotalPrice();

            //Calculate the Total Sales for the Payment Branch
            function calculateTotalPriceBook() {
                var total = 0;
                var sum = 0;
                // Get a reference to the "Payment" node in the database
                var paymentRef = firebase.database().ref("Payment");

                // Attach a listener to the "Payment" node that will be triggered every time the data changes
                paymentRef.on("value", function(snapshot) {
                    snapshot.forEach(function(childSnapshot) {
                        childSnapshot.forEach(function(grandChildSnapshot) {
                            if (!isNaN(parseFloat(grandChildSnapshot.val().TotalPrice))) {
                                total += parseFloat(grandChildSnapshot.val().TotalPrice);
                                sum = total.toFixed(2)
                            }

                        });
                    });
                    document.getElementById("booktotal-price").innerHTML = sum;
                });

            }
            calculateTotalPriceBook();

            //Calculate the Total Sales for the MerchPayment Branch
            function calculateTotalPriceMerch() {
                var total = 0;
                var sum = 0;
                // Get a reference to the "Payment" node in the database
                var paymentRef = firebase.database().ref("MerchPayment");

                // Attach a listener to the "Payment" node that will be triggered every time the data changes
                paymentRef.on("value", function(snapshot) {
                    snapshot.forEach(function(childSnapshot) {
                        childSnapshot.forEach(function(grandChildSnapshot) {
                            if (!isNaN(parseFloat(grandChildSnapshot.val().TotalPrice))) {
                                total += parseFloat(grandChildSnapshot.val().TotalPrice);
                                sum = total.toFixed(2)
                            }

                        });
                    });
                    document.getElementById("merchtotal-price").innerHTML = sum;
                });

            }
            calculateTotalPriceMerch();


            var searchBar = document.getElementById("SearchBar");
            var searchBtn = document.getElementById("SearchBtn");
            var category = document.getElementById("CategorySelected");
            var tbody1 = document.getElementById("tbody1");

            function SearchTable(Category) {
                var filter = searchBar.value.toUpperCase();
                var tr = tbody1.getElementsByTagName("tr");
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
                var tr = tbody1.getElementsByTagName("tr");
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
                    SearchTable("emailField");

                else if (category.value == 3)
                    SearchTable("paymentIDField");

                else if (category.value == 4)
                    SearchTableExactValues("methodField");
            }

            var searchBar1 = document.getElementById("SearchBar1");
            var searchBtn1 = document.getElementById("SearchBtn1");
            var category1 = document.getElementById("CategorySelected1");
            var tbody2 = document.getElementById("tbody2");

            function SearchTable1(Category1) {
                var filter = searchBar1.value.toUpperCase();
                var tr = tbody2.getElementsByTagName("tr");
                var found;

                for (let i = 0; i < tr.length; i++) {

                    var td = tr[i].getElementsByClassName(Category1);

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
            function SearchTableExactValues1(Category1) {
                var filter = searchBar1.value.toUpperCase();
                var tr = tbody2.getElementsByTagName("tr");
                var found;

                for (let i = 0; i < tr.length; i++) {

                    var td = tr[i].getElementsByClassName(Category1);

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
            searchBtn1.onclick = function() {
                if (searchBar1.value == "");
                //validation so that only aphanumeric can be entered
                var pattern = /^[a-zA-Z0-9 ]*$/;
                if (!pattern.test(searchBar1.value)) {
                    alert("Only alphanumeric characters are allowed.");
                    return;
                } else if (category1.value == 1)
                    SearchTable1("dateField1");

                else if (category1.value == 2)
                    SearchTable1("paymentIDField1");

                else if (category1.value == 3)
                    SearchTableExactValues1("methodField1");

                else if (category1.value == 4)
                    SearchTable1("allproductField1");
            }
        </script>
    </section>
</body>

</html>