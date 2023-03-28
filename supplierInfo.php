<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formstyle.css">
    <title>Supplier Info Page</title>
</head>

<body>
    <?php
    include('connection.php');
    $query = "SELECT * FROM supplier";

    $result = mysqli_query($con, $query);
    echo "<table border='1' id='supplier'>

<tr>

<th>Name</th>

<th>Type</th>

<th>Contact</th>

<th>Address</th>

<th>Email</th>

<th>GST</th>

</tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";

        echo "<td>" . $row['name'] . "</td>";

        echo "<td>" . $row['type'] . "</td>";

        echo "<td>" . $row['contact'] . "</td>";

        echo "<td>" . $row['address'] . "</td>";

        echo "<td>" . $row['email'] . "</td>";

        echo "<td>" . $row['gst'] . "</td>";

        echo "</tr>";

    }

    echo "</table>";

    if (isset($_POST['add'])) {
        // print_r($_POST);
        $sql = "INSERT INTO supplier(name, type, contact, address, email, gst) VALUES('" . $_POST['name'] . "', '" . $_POST['type'] . "', '" . $_POST['contact'] . "', '" . $_POST['address'] . "', '" . $_POST['email'] . "', '" . $_POST['gst'] . "')";
        //$con->query($sql);
        if ($con->query($sql)) {
            header("Location:supplierInfo.php");
            exit;
        } else {
            echo "Failed to insert";
        }
    }
    ?>
    <style>
        input[type=text],
        input[type=number],
        input[type=email] {

            border-radius: 5px;
            padding: 10px 18px;
            box-sizing: border-box;
        }

        #supplier {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 60%;
            margin-left: auto;
            margin-right: auto;
            margin-top: auto;
            margin-bottom: auto;

        }

        #supplier td,
        #supplier th {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        #supplier tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #supplier tr:hover {
            background-color: #ddd;
        }

        #supplier th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: center;
            background-color: #D2AC47;
            /* background-color: #D2AC47; */
            color: black;
        }
    </style>
    <div class="openBtn">
        <button class="openButton" onclick="openForm()"><strong>Add</strong></button>

    </div>

    <div class="loginPopup">
        <div class="formPopup" id="popupForm">
            <form method="post" action="" class="formContainer">
                <center>
                    <h2>SUPPLIER INFO</h2>
                </center>
                <div class="maincontainer">
                    <label for="name">SUPPLIER NAME:</label>
                    <input type="text" placeholder="Enter Supplier Name" name="name" required>

                    <br><br>
                    <div>
                        <label for="type">SUPPLIER TYPE:</label>
                    </div>

                    <div class="radio">
                        <input type="radio" name="type" value="Retailer" checked required><label
                            class="rad1">Retailer</label>
                        <input type="radio" name="type" value="Wholesaler" required><label
                            class="rad2">Wholesaler</label>
                    </div>

                    <br><br>

                    <label for="contact">SUPPLIER CONTACT:</label>
                    <input type="text" placeholder="Enter Supplier Contact" name="contact" required>

                    <br><br>

                    <label for="address">SUPPLIER ADDRESS:</label>
                    <input type="text" placeholder="Enter Supplier Address" name="address" required>

                    <br><br>

                    <label for="email">SUPPLIER E-MAIL:</label>
                    <input type="email" placeholder="Enter Supplier E-mail" name="email" required>

                    <br><br>

                    <label for="gst">SUPPLIER GST RATE:</label>
                    <input type="number" placeholder="Enter Supplier GST Rate" name="gst" required>


                    <div class="flex-parent jc-center">
                        <button type="submit" class="green margin-right" name="add">Insert</button>
                        <button type="button" onclick="closeForm()" class="magenta">Close</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
    </div>
    <script>
        function openForm() {
            document.getElementById("popupForm").style.display = "block";
        }
        function closeForm() {
            document.getElementById("popupForm").style.display = "none";
        }
        function locationreload() {
            location.reload();

        }
    </script>
</body>

</html>