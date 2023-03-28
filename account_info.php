<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Info</title>
    <link rel="stylesheet" href="formstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        input[type=text],
        input[type=number],
        input[type=email] {

            border-radius: 5px;
            padding: 10px 18px;
            box-sizing: border-box;
        }

        #account {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 60%;
            margin-left: auto;
            margin-right: auto;
            margin-top: auto;
            margin-bottom: auto;

        }

        #account td,
        #account th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #account tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #account tr:hover {
            background-color: #ddd;
        }

        #account th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #D2AC47;
            color: rgb(255, 255, 255);
        }
    </style>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>


    <?php
    include('connection.php');
    //include('userMenu.php'); 
    

    $query = "SELECT * FROM account_info";

    $result = mysqli_query($con, $query);
    echo "<table border='1' id='account'>

<tr>

<th>Type</th>

<th>Id</th>

<th>Name</th>


</tr>";
    while ($row = mysqli_fetch_assoc($result)) {

        //echo $row['name'] . " " . $row['address']. $row['phone']. $row['email'];
    
        //echo "<br />";
        echo "<tr>";

        echo "<td>" . $row['acc_type'] . "</td>";

        echo "<td>" . $row['acc_id'] . "</td>";

        echo "<td>" . $row['acc_name'] . "</td>";


        echo "</tr>";

    }

    echo "</table>";

    if (isset($_POST['add'])) {
        // print_r($_POST);
    
        if ($_POST['acc_type'] == 'Income') {
            $ans = autoincIncome();
            $sql = "INSERT INTO account_info(acc_type, acc_id, acc_name) VALUES('" . $_POST['acc_type'] . "', '" . $ans . "', '" . $_POST['acc_name'] . "')";

            $con->query($sql);
            mysqli_close($con);
            header("location: account_info.php");
        }
        // if($_GET["expense"]=="Expense")
        else {
            $ans2 = autoincExpense();
            $sql = "INSERT INTO account_info(acc_type, acc_id, acc_name) VALUES('" . $_POST['acc_type'] . "', '" . $ans2 . "', '" . $_POST['acc_name'] . "')";

            $con->query($sql);
            mysqli_close($con);
            header("location: account_info.php");
        }
    }





    function autoincIncome()
    {
        include('connection.php');
        global $value2;
        $query = "SELECT acc_id from account_info where acc_type='Income' order by acc_id desc LIMIT 1";
        $stmt = mysqli_query($con, $query);
        //  $stmt->execute();
        $rowcount = mysqli_num_rows($stmt);

        if ($rowcount > 0) {
            //  $result = $stmt->get_result();
            $row = mysqli_fetch_assoc($stmt);
            $value2 = $row['acc_id'];
            // $value2 = substr($value2, 3, 5);
            $value2 = (int) $value2 + 1;
            //   $value2 = 100 . sprintf('%04d', $value2);
            $value = $value2;
            return $value;
        } else {
            $value2 = 201001;
            $value = $value2;
            return $value;
        }
    }


    function autoincExpense()
    {
        include('connection.php');
        global $value2;
        $query = "SELECT acc_id from account_info where acc_type='Expense' order by acc_id desc LIMIT 1";
        $stmt = mysqli_query($con, $query);
        //  $stmt->execute();
        $rowcount = mysqli_num_rows($stmt);

        if ($rowcount > 0) {
            //  $result = $stmt->get_result();
            $row = mysqli_fetch_assoc($stmt);
            $value2 = $row['acc_id'];
            // $value2 = substr($value2, 3, 5);
            $value2 = (int) $value2 + 1;
            //   $value2 = 100 . sprintf('%04d', $value2);
            $value = $value2;
            return $value;
        } else {
            $value2 = 101001;
            $value = $value2;
            return $value;
        }
    }

    ?>
    <div class="openBtn">
        <button class="openButton" onclick="openForm()"><strong>Add</strong></button>

    </div>

    <div class="loginPopup">
        <div class="formPopup" id="popupForm">
            <form method="post" action="" class="formContainer">
                <center>
                    <h2>ACCOUNT INFO</h2>
                </center>
                <div class="maincontainer">
                    <label for="cars">Account Type:</label>
                    <select name="acc_type" id="type" required>
                        <option value="Income" name="income">Income</option>
                        <option value="Expense" name="expense">Expense</option>

                    </select>
                    <br><br>

                    <!--
                    <label for="address">Account ID:</label>
                    <input type="number" placeholder="ID" name="acc_id" required disabled >

                    <br><br>
-->
                    <label for="phno">Account Name</label>
                    <input type="text" placeholder="Account Name" name="acc_name" required>

                    <br><br>



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