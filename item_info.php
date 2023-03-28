<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="formstyle.css">
</head>

<body>

    <style>
        input[type=text],
        input[type=radio],
        input[type=number],
        input[type=number] {

            border-radius: 5px;
            padding: 10px 18px;
            box-sizing: border-box;
        }

        #Item_Info {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 60%;
            margin-left: auto;
            margin-right: auto;
            margin-top: auto;
            margin-bottom: auto;

        }

        #Item_Info td,
        #Item_Info th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #Item_Info tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #Item_Info tr:hover {
            background-color: #ddd;
        }

        #Item_Info th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #D2AC47;
            color: rgb(255, 255, 255);
        }
    </style>
    <?php

    include('connection.php');
    //include('userMenu.php'); 
    

    $query = "SELECT * FROM item_info";

    $result = mysqli_query($con, $query);
    echo "<table border='1' id='Item_Info'>

<tr>

<th>Item Name</th>

<th>Category</th>

<th>Total Weight</th>

<th>Quantity</th>

</tr>";
    while ($row = mysqli_fetch_assoc($result)) {

        //echo $row['name'] . " " . $row['address']. $row['phone']. $row['email'];
    
        //echo "<br />";
        echo "<tr>";

        echo "<td>" . $row['item_name'] . "</td>";

        echo "<td>" . $row['category'] . "</td>";

        echo "<td>" . $row['wt'] . "</td>";

        echo "<td>" . $row['qnty'] . "</td>";

        echo "</tr>";

    }

    echo "</table>";

    if (isset($_POST['add'])) {
        // print_r($_POST);
        $sql = "INSERT INTO item_info(item_name, category, wt, qnty) VALUES('" . $_POST['item_name'] . "', '" . $_POST['category'] . "', '" . $_POST['wt'] . "', '" . $_POST['qnty'] . "')";
        $con->query($sql);
        mysqli_close($con);
        header("location: item_info.php");
    }
    ?>
    <div class="openBtn">
        <button class="openButton" onclick="openForm()"><strong>Add</strong></button>

    </div>

    <div class="loginPopup">
        <div class="formPopup" id="popupForm">
            <form method="post" action="" class="formContainer">
                <center>
                    <h2>ITEM INFO</h2>
                </center>
                <div class="maincontainer">
                    <label for="item_name">ITEM NAME:</label>
                    <input type="text" placeholder="Enter Item Name" name="item_name" required>

                    <br><br>

                    <label for="category">ITEM CATEGORY:</label>
                    <br>

                    <select name="category" id="category" required>
                        <option value="Gold" name="gold">Gold</option>
                        <option value="Silver" name="silver">Silver</option>

                    </select>



                    <br><br>

                    <label for="wt">TOTAL WEIGHT:</label>
                    <input type="number" step=".100" placeholder="Grams" name="wt" required>

                    <br><br>

                    <label for="qnty">QUANTITY:</label>
                    <input type="number" placeholder="0" name="qnty" required>

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