<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        select {
            border: solid 1px black;
            font-size: 12px;
            border-radius: 5px;
        }

        select:focus {
            outline: none;
        }

        input {
            width: 100px;
            height: 20px;

        }

        .myTD td {
            padding: 0 15px;
        }

        .myTD2 td {
            padding: 0 50px;
        }

        #myTable {
            margin-top: 20px;
            margin-left: 15px;
            font-size: 15px;
        }

        label {
            font-size: 12px;
        }

        .myDiv {
            margin: auto;
            border: 2px solid black;
            width: fit-content;
            padding: 10px;
            background-color: yellowgreen;
            border-radius: 10px;
        }
    </style>


    <script src="https://code.jquery.com/jquery-3.2.1.min.js">
    </script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript">
    </script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>

    <script>
        $(function () {
            $("select[name='item_name']").change(function () {
                var str = "";
                $("select[name='item_name'] option:selected").each(function () {
                    str += $(this).text() + " ";

                });

                jQuery.ajax({
                    type: "POST",
                    data: $("form#a").serialize(),

                    success: function (data) {
                        jQuery(".res").html(data);

                        $('#test').html(data);


                    }
                });
                var str = $("form").serialize();
                $(".res").text(str);
            });
        });
    </script>
</head>

<body style="margin-top: 20px;">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>



    <?php
    include('connection.php');


    if (isset($_POST['item_name'])) {

        $name2 = $_POST['item_name'];

        $query1 = "SELECT category FROM item_info where item_name='$name2'";
        $result1 = $con->query($query1) or die(mysqli_error($con));
        while ($row = mysqli_fetch_array($result1)) {
            $category = $row['category'];
            $customer_code = $row['wt'];
            /*
            
            $address = $row['address'];
            $pincode= $row['pincode'];
            $gstin=$row['gstin'];
            $state=$row['state'];
            $contact_number=$row['contact_number'];
            $email=$row['email'];
            $bank_details=$row['bank_details'];
            */
        }
    }


    ?>


    <div class="myDiv">
        <table class="myTD">

            <tr>
                <td><span>
                        <label for="table">Item Name: </label>
                        <br>
                        <select name="item_name" id="item_name">
                            <option value="0">Please Select</option>
                            <?php
                            $query = "SELECT item_name FROM item_info";
                            $result = $con->query($query);
                            while ($row = mysqli_fetch_array($result)) {
                                $item_name = $row["item_name"];
                                ?>
                                <option value="<?php if (isset($item_name))
                                    echo $item_name; ?>"><?php if (isset($item_name))
                                          echo $item_name; ?></option>
                                <?php


                            }
                            ?>
                        </select>
                    </span></td>

                <td><span>
                        <label for="table">Category: </label>
                        <br>
                        <input type="text" name="category" id="category" value="<?php if (isset($category))
                            echo $category; ?>">
                        <br>

                    </span></td>
                <td><span>
                        <label for="table">Rate: </label>
                        <br>
                        <input type="text" name="rate" id="rate">
                    </span></td>
                <td><span>
                        <label for="table">Quantity: </label>
                        <br>
                        <input type="text" name="item_name" id="item_name">
                    </span></td>
                <td><span>
                        <label for="table">Gross Weight: </label>
                        <br>
                        <input type="text" name="item_name" id="item_name">
                    </span></td>
                <td><span>
                        <label for="table">Less Weight: </label>
                        <br>
                        <input type="text" name="item_name" id="item_name">
                    </span></td>
            </tr>

            <tr>
                <td><span>
                        <label for="table">Net Weight: </label>
                        <br>
                        <input type="text" name="item_name" id="item_name">
                    </span></td>
                <td><span>
                        <label for="table">Purity: </label>
                        <br>
                        <input type="text" name="item_name" id="item_name">
                    </span></td>
                <td><span>
                        <label for="table">Pure Weight: </label>
                        <br>
                        <input type="text" name="item_name" id="item_name">
                    </span></td>
                <td><span>
                        <label for="table">Making Charges: </label>
                        <br>
                        <input type="text" name="item_name" id="item_name">
                    </span></td>
                <td><span>
                        <label for="table">Amount: </label>
                        <br>
                        <input type="text" name="item_name" id="item_name">
                    </span></td>
                <td><span>
                        <label for="table">CGST(%): </label>
                        <br>
                        <input type="text" name="item_name" id="item_name">
                    </span></td>
            </tr>
            <tr>
                <td><span>
                        <label for="table">SGST(%): </label>
                        <br>
                        <input type="text" name="item_name" id="item_name">
                    </span></td>
                <td><span>
                        <label for="table">Total Amount: </label>
                        <br>
                        <input type="text" name="item_name" id="item_name">
                    </span></td>
                <td><span>
                        <label for="table">HSN Code: </label>
                        <br>
                        <input type="text" name="item_name" id="item_name">
                    </span></td>
                <td><span>
                        <label for="table">HUID Number: </label>
                        <br>
                        <input type="text" name="item_name" id="item_name">
                    </span></td>
                <td><span>

                    </span></td>
                <td><span>
                        <br>
                        <button type="submit" style="width:70px; border-radius:5px; font-size: 15px">Add</button>
                    </span></td>
            </tr>
        </table>


        <div id="myTable">
            <textarea name="textarea" id="textarea" cols="104" rows="10"></textarea>
        </div>


        <div>
            <table class="myTD2">
                <tr>
                    <td><span>
                            <label for="table">Amount: </label>
                            <br>
                            <input type="text" name="item_name" id="item_name">
                        </span></td>
                    <td><span>
                            <label for="table">Payed By Cash: </label>
                            <br>
                            <input type="text" name="item_name" id="item_name">
                        </span></td>
                    <td><span>
                            <label for="table">Amount Payed: </label>
                            <br>
                            <input type="text" name="item_name" id="item_name">
                        </span></td>


                <tr>
                    <td><span>
                            <label for="table">Total GST Amount: </label>
                            <br>
                            <input type="text" name="item_name" id="item_name">
                        </span></td>
                    <td><span>
                            <label for="table">Payed By QR: </label>
                            <br>
                            <input type="text" name="item_name" id="item_name">
                        </span></td>
                    <td><span>
                            <label for="table">Payed By Cheque: </label>
                            <br>
                            <input type="text" name="item_name" id="item_name">
                        </span></td>
                    <td><span>
                            <br>
                            <button type="submit" style="width:70px; border-radius:5px; font-size: 15px">Submit</button>
                        </span></td>

                </tr>
                <tr>
                    <td><span>
                            <label for="table">Payable Amount: </label>
                            <br>
                            <input type="text" name="item_name" id="item_name">
                        </span></td>
                    <td><span>
                            <label for="table">Balance Amount: </label>
                            <br>
                            <input type="text" name="item_name" id="item_name">
                        </span></td>
                    <td><span>
                            <br>
                        </span></td>
                    <td><span>
                            <br>
                            <button type="submit" style="width:70px; border-radius:5px; font-size: 15px">Exit</button>
                        </span></td>


                </tr>


            </table>
        </div>

    </div>




</body>

</html>