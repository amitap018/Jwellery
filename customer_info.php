<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="formstyle.css">

    <style>
        input[type=text],
        input[type=number],
        input[type=email] {

            border-radius: 5px;
            padding: 10px 18px;
            box-sizing: border-box;
        }

        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 60%;
            margin-left: auto;
            margin-right: auto;
            margin-top: auto;
            margin-bottom: auto;

        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #D2AC47;
            color: rgb(255, 255, 255);
        }
    </style>

</head>

<body>


    <?php

    include('connection.php');
    //include('userMenu.php'); 
    

    $query = "SELECT * FROM customer_info";

    $result = mysqli_query($con, $query);
    echo "<table border='1' id='customers'>

<tr>
<th>ID</th>
<th>Name</th>

<th>Address</th>

<th>Phone</th>

<th>Email</th>

<th>Update</th>

</tr>";
    while ($row = mysqli_fetch_assoc($result)) {

        //echo $row['name'] . " " . $row['address']. $row['phone']. $row['email'];
    
        //echo "<br />";
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";

        echo "<td>" . $row['address'] . "</td>";

        echo "<td>" . $row['phone'] . "</td>";

        echo "<td>" . $row['email'] . "</td>";

        //  echo "<script> openForm(); </script>"; 
        // $id = $row['id'];
        //$cName = $row['name'];
        //  $cAddress = $row['address'];
        // $cPhone = $row['phone'];
        // $cEmail = $row['email'];
    

        echo "<td>" . " <button  onClick='updateForm()' name='update'  id='$row[id]'><strong>Update</strong></button>" . "</td>";
        //echo "<td><a href='javascript:updateForm();id='$row[id]'>Edit</a></td>";
        echo "</tr>";

    }

    echo "</table>";

    if (isset($_POST['add'])) {
        // print_r($_POST);
        $sql = "INSERT INTO customer_info(name, address, phone, email) VALUES('" . $_POST['name'] . "', '" . $_POST['address'] . "', '" . $_POST['phone'] . "', '" . $_POST['email'] . "')";
        $con->query($sql);
        mysqli_close($con);
        header("location: customer_info.php");
    }
    ?>

    <div class="openBtn">
        <button class="openButton" onclick="openForm()"><strong>Add</strong></button>

    </div>


    <div class="loginPopup">
        <div class="formPopup" id="popupForm">
            <form method="post" action="customer_info.php" class="formContainer">
                <center>
                    <h2>CUSTOMER INFO</h2>
                </center>
                <div class="maincontainer">
                    <label for="name">CUSTOMER NAME:</label>
                    <input type="text" id="cname" placeholder="Enter Customer Name" name="name" required>

                    <br><br>

                    <label for="address">CUSTOMER ADDRESS:</label>
                    <input type="text" id="caddress" placeholder="Enter Customer Address" name="address" required>

                    <br><br>

                    <label for="phno">CUSTOMER PHONE NUMBER:</label>
                    <input type="number" id="cphone" placeholder="Enter Customer Phone Number" name="phone" required>

                    <br><br>

                    <label for="email">CUSTOMER E-MAIL:</label>
                    <input type="email" id="cemail" placeholder="Enter Customer E-mail" name="email" required>

                    <div class="flex-parent jc-center">
                        <button type="submit" class="green margin-right" name="add">Insert</button>
                        <button type="button" onclick="closeForm1()" class="magenta">Close</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
    <?php




    // $var = mysqli_real_escape_string($_POST['update']);
// $sql = "SELECT Name FROM DevicesList WHERE Device='" . $var . "'";
    
    $query = "SELECT * FROM customer_info ";

    $result = mysqli_query($con, $query);

    while ($row = mysqli_fetch_array($result)) {
        $name = $row['name'];
        $address = $row['address'];
        $phone = $row['phone'];
        $email = $row['email'];
    }
    ?>

    <div class="loginPopupa">
        <div class="formPopupa" id="popupForma">
            <form method="post" action="customer_info.php" class="formContainera">
                <center>
                    <h2>CUSTOMER INFO</h2>
                </center>
                <div class="maincontainer">
                    <label for="name">CUSTOMER NAME:</label>
                    <input type="text" placeholder="Enter Customer Name" name="name1" required
                        value="<?php echo $name; ?>">

                    <br><br>

                    <label for="address">CUSTOMER ADDRESS:</label>
                    <input type="text" placeholder="Enter Customer Address" name="address1" required
                        value="<?php echo $address; ?>">

                    <br><br>

                    <label for="phno">CUSTOMER PHONE NUMBER:</label>
                    <input type="number" placeholder="Enter Customer Phone Number" name="phone1" required
                        value="<?php echo $phone; ?>">

                    <br><br>

                    <label for="email">CUSTOMER E-MAIL:</label>
                    <input type="email" placeholder="Enter Customer E-mail" name="email1" required
                        value="<?php echo $email; ?>">

                    <div class="flex-parent jc-center">
                        <button type="submit" class="green margin-right">Update</button>
                        <button type="button" onclick="closeForm2()" class="magenta">Close</button>
                    </div>

                </div>
            </form>
        </div>
    </div>



    <script type="text/JavaScript">
        function openForm() {
            document.getElementById("popupForm").style.display = "block";
        }
        function closeForm1() {
            document.getElementById("popupForm").style.display = "none";
        }

        function updateForm(){
            document.getElementById("popupForma").style.display = "block";
          //  $id = $_GET[$row['id']];
             
        }
        function closeForm2() {
            document.getElementById("popupForma").style.display = "none";
        }
        function locationreload() {
            location.reload();
        }
    </script>
</body>

</html>