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

        .newDiv {
            margin-top: 20px;
            margin-left: 20px;
            background-color: white;
            width: 760px;
            min-height: 50px;
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

        .newDivTD td {
            padding: 0 3px;
        }

        #myTable {
            margin-top: 20px;
            margin-left: 15px;
            font-size: 15px;
        }

        #myTable1 {
            margin-top: 20px;
            margin-left: 15px;

        }

        label {
            font-size: 12px;
        }

        .myDiv {
            margin-top: auto;
            border: 2px solid black;
            width: fit-content;
            padding: 10px;
            background-color: #3424;
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


</head>

<body style="margin-top: 20px;">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>



    <?php
    include('connection.php');


    /* if (isset($_POST['item_name'])) {
    $name2 = $_POST['item_name'];
    $query1 = "SELECT category FROM item_info where item_name='$name2'";
    $result1 = $con->query($query1) or die(mysqli_error($con));
    while ($row = mysqli_fetch_array($result1)) {
    $category = $row['category'];
    $customer_code = $row['wt'];*/
    /*
    
    $address = $row['address'];
    $pincode= $row['pincode'];
    $gstin=$row['gstin'];
    $state=$row['state'];
    $contact_number=$row['contact_number'];
    $email=$row['email'];
    $bank_details=$row['bank_details'];
    */
    //   }
    // }
    

    ?>


    <div class="myDiv">
        <table class="myTD">

            <tr>
                <td><span>
                        <label for="table">Item Name: </label>
                        <br>
                        <select name="item_name1" id="item_name1" required>
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
                        <input type="text" name="category" id="category" required disabled>
                        <br>

                    </span></td>
                <td><span>
                        <label for="table">Rate: </label>
                        <br>
                        <input type="text" name="rate" id="rate" required disabled>
                    </span></td>
                <td><span>
                        <label for="table">Quantity: </label>
                        <br>
                        <input type="number" name="quantity" id="quantity" required>
                    </span></td>
                <td><span>
                        <label for="table">Gross Weight: </label>
                        <br>
                        <input type="number" name="gross_wt" id="gross_wt" required>
                    </span></td>
                <td><span>
                        <label for="table">Less Weight: </label>
                        <br>
                        <input type="number" name="less_wt" id="less_wt" required>
                    </span></td>
            </tr>

            <tr>
                <td><span>
                        <label for="table">Net Weight: </label>
                        <br>
                        <input type="number" name="net_wt" id="net_wt" required disabled>
                    </span></td>
                <td><span>
                        <label for="table">Purity: </label>
                        <br>
                        <input type="number" name="purity" id="purity" required>
                    </span></td>
                <td><span>
                        <label for="table">Pure Weight: </label>
                        <br>
                        <input type="number" name="pure_wt" id="pure_wt" required disabled>
                    </span></td>
                <td><span>
                        <label for="table">Making Charges: </label>
                        <br>
                        <input type="number" name="making_charges" id="making_charges" required>
                    </span></td>
                <td><span>
                        <label for="table">Amount: </label>
                        <br>
                        <input type="number" name="amount" id="amount" required disabled>
                    </span></td>
                <td><span>
                        <label for="table">CGST(%): </label>
                        <br>
                        <input type="number" name="cgst" id="cgst" required>
                    </span></td>
            </tr>
            <tr>
                <td><span>
                        <label for="table">SGST(%): </label>
                        <br>
                        <input type="number" name="sgst" id="sgst" required>
                    </span></td>
                <td><span>
                        <label for="table">Total Amount: </label>
                        <br>
                        <input type="number" name="total" id="total" required disabled>
                    </span></td>
                <td><span>
                        <label for="table">HSN Code: </label>
                        <br>
                        <input type="text" name="hsn" id="hsn" required>
                    </span></td>
                <td><span>
                        <label for="table">HUID Number: </label>
                        <br>
                        <input type="text" name="huid" id="huid" required>
                    </span></td>
                <td><span>
                        <br>
                        <button id="add" onclick="addStudent()"
                            style="width:70px; border-radius:5px; font-size: 15px">Add</button>
                    </span></td>
                <td><span>
                        <br>
                        <button id="clear" onclick="clearTextArea()"
                            style="width:70px; border-radius:5px; font-size: 15px">Clear</button>
                    </span></td>
            </tr>
        </table>

<!--
        <div id="myTable1">
            <textarea class="textarea" name="textarea1" id="textarea1" cols="148" rows="15"
                style="font-size:10px; "></textarea>
        </div>
         -->
        <div class="newDiv">
            <table style=" font-size:8px; width: 100%;" id="tbl" class="newDivTD">
                <thead>
                    <th>Item Name</th>
                    <th>Category</th>
                    <th>Rate</th>
                    <th>Quantity</th>
                    <th>Gross Weight</th>
                    <th>Less Weight</th>
                    <th>Net Weight</th>
                    <th>Purity</th>
                    <th>Pure Weight</th>
                    <th>Making Charges</th>
                    <th>Amount</th>
                    <th>CGST(%)</th>
                    <th>SGST(%)</th>
                    <th>Total Amount</th>
                    <th>HSN No.</th>
                    <th>HUID No.</th>

                </thead>

                <tbody>

                </tbody>
            </table>
        </div>


        <div>
            <table class="myTD2">
                <tr>
                    <td><span>
                            <label for="table">Amount: </label>
                            <br>
                            <input type="text" name="amount2" id="amount2" disabled>
                        </span></td>
                    <td><span>
                            <label for="table">Payed By Cash: </label>
                            <br>
                            <input type="text" name="payed_cash" id="payed_cash">
                        </span></td>
                    <td><span>
                            <label for="table">Amount Payed: </label>
                            <br>
                            <input type="text" name="amount_payed" id="amount_payed">
                        </span></td>


                <tr>
                    <td><span>
                            <label for="table">Total GST Amount: </label>
                            <br>
                            <input type="text" name="total_gst" id="total_gst" disabled>
                        </span></td>
                    <td><span>
                            <label for="table">Payed By QR: </label>
                            <br>
                            <input type="text" name="payed_qr" id="payed_qr">
                        </span></td>
                    <td><span>
                            <label for="table">Balance Amount: </label>
                            <br>
                            <input type="text" name="balance" id="balance">


                        </span></td>
                    <td><span>
                            <br>
                            <button style="width:70px; border-radius:5px; font-size: 15px">Submit</button>
                        </span></td>

                </tr>
                <tr>
                    <td><span>
                            <label for="table">Payable Amount: </label>
                            <br>
                            <input type="text" name="payable_amount" id="payable_amount" disabled>
                        </span></td>
                    <td><span>
                            <label for="table">Payed By Cheque: </label>
                            <br>
                            <input type="text" name="payed_ch" id="payed_ch">
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




    <script type="text/javascript">
        $(document).ready(function () {
            $('#item_name1').on('change', function () {
                var item_name = this.value;
                //console.log(item_name);

                $.ajax({
                    url: 'purchaseajax.php',
                    type: "POST",
                    data: {
                        item_name: item_name
                    },
                    success: function (response) {
                        var ans = $.parseJSON(response);
                        //  const ans = response;
                        let a = ans[0];
                        let rate = ans[1];
                        if (a == "111") {
                            a = "Gold";
                        }
                        else if (a == "222") {
                            a = "Silver";
                        }
                        $('#category').val(a);
                        $('#rate').val(rate);
                        // $('#category').html(response);

                        // console.log(a);
                        // console.log(rate);
                    }
                });


            });

            $('#less_wt').on('change', function () {
                var less_wt = this.value;
                var gross_wt = document.getElementById("gross_wt").value;
                var net_wt = gross_wt - less_wt;
                $('#net_wt').val(net_wt);
            });


            $('#purity').on('change', function () {
                var purity = this.value;
                var net_wt = document.getElementById("net_wt").value;
                var pure_wt = (purity / 100) * net_wt;
                $('#pure_wt').val(pure_wt);
            });

            $('#making_charges').on('change', function () {
                // var making_charges = this.value;
                var making_charges = document.getElementById("making_charges").value;
                var quantity = document.getElementById("quantity").value;
                var pure_wt = document.getElementById("pure_wt").value;
                var rate = document.getElementById("rate").value;
                var amount = (pure_wt * rate * quantity + parseInt(making_charges));
                $('#amount').val(amount);
            });


            $('#sgst').on('change', function () {
                //  let sgdt = this.value;
                let sgst = document.getElementById("sgst").value;
                let cgst = document.getElementById("cgst").value;
                //  console.log(sgst);
                // console.log(cgst);
                let amount = document.getElementById("amount").value;
                let total_amount = ((cgst / 100) * amount) + ((sgst / 100) * amount) + parseInt(amount);
                $('#total').val(total_amount);
            });
            $('#payed_ch').on('change', function () {
                var cash = document.getElementById("payed_cash").value;
                var qr = document.getElementById("payed_qr").value;
                var ch = document.getElementById("payed_ch").value;
                var total_amount = document.getElementById("payable_amount").value;
                var amount_payed = parseInt(cash) + parseInt(qr) + parseInt(ch);
                var balance_amount = parseInt(total_amount) - parseInt(amount_payed);
                $('#amount_payed').val(amount_payed);
                $('#balance').val(balance_amount);
            });

        });

        function addStudent() {
            // var rollno=document.sample.rollno.value; 
            //var name=document.sample.name.value; 

            var tr = document.createElement('tr');

            var td1 = tr.appendChild(document.createElement('td'));
            var td2 = tr.appendChild(document.createElement('td'));
            var td3 = tr.appendChild(document.createElement('td'));
            var td4 = tr.appendChild(document.createElement('td'));
            var td5 = tr.appendChild(document.createElement('td'));
            var td6 = tr.appendChild(document.createElement('td'));
            var td7 = tr.appendChild(document.createElement('td'));
            var td8 = tr.appendChild(document.createElement('td'));
            var td9 = tr.appendChild(document.createElement('td'));
            var td10 = tr.appendChild(document.createElement('td'));
            var td11 = tr.appendChild(document.createElement('td'));
            var td12 = tr.appendChild(document.createElement('td'));
            var td13 = tr.appendChild(document.createElement('td'));
            var td14 = tr.appendChild(document.createElement('td'));
            var td15 = tr.appendChild(document.createElement('td'));
            var td16 = tr.appendChild(document.createElement('td'));



            var item_name = document.getElementById("item_name1").value;
            var category = document.getElementById("category").value;
            var rate = document.getElementById("rate").value;
            var quantity = document.getElementById("quantity").value;
            var gross_wt = document.getElementById("gross_wt").value;
            var less_wt = document.getElementById("less_wt").value;
            var net_wt = document.getElementById("net_wt").value;
            var purity = document.getElementById("purity").value;
            var pure_wt = document.getElementById("pure_wt").value;
            var making_charges = document.getElementById("making_charges").value;
            var amount = document.getElementById("amount").value;
            var cgst = document.getElementById("cgst").value;
            var sgst = document.getElementById("sgst").value;
            var total_amount = document.getElementById("total").value;
            var hsn = document.getElementById("hsn").value;
            var huid = document.getElementById("huid").value;

            if (item_name == "") {
                alert("Item name is required");
            } else if (quantity == "") {
                alert("Quantity is required");
            } else if (gross_wt == "") {
                alert("Gross is required");
            } else if (less_wt == "") {
                alert("Less is required");
            } else if (purity == "") {
                alert("Purity is required");
            } else if (making_charges == "") {
                alert("Making  is required");
            } else if (cgst == "") {
                alert("CGST is required");
            } else if (sgst == "") {
                alert("SGST is required");
            } else if (hsn == "") {
                alert("HSN is required");
            } else if (huid == "") {
                alert("HUID is required");
            } else {



                td1.innerHTML = item_name;
                td2.innerHTML = category;
                td3.innerHTML = rate;
                td4.innerHTML = quantity;
                td5.innerHTML = gross_wt;
                td6.innerHTML = less_wt;
                td7.innerHTML = net_wt;
                td8.innerHTML = purity;
                td9.innerHTML = pure_wt;
                td10.innerHTML = making_charges;
                td11.innerHTML = amount;
                td12.innerHTML = cgst;
                td13.innerHTML = sgst;
                td14.innerHTML = total_amount;
                td15.innerHTML = hsn;
                td16.innerHTML = huid;

                document.getElementById("tbl").appendChild(tr);



                var am = document.getElementById('amount').value;
                var cgst1 = document.getElementById("cgst").value;
                var sgst1 = document.getElementById("sgst").value;
                var total_amount1 = document.getElementById("total").value;

                var total_gst1 = ((cgst1 / 100) * am) + ((sgst1 / 100) * am);

                document.getElementById('amount2').value = am;
                document.getElementById('total_gst').value = total_gst1;
                document.getElementById('payable_amount').value = total_amount1;


                //document.getElementById('textarea1').value = "";
                document.getElementById("item_name1").value = "";
                document.getElementById("category").value = "";
                document.getElementById("rate").value = "";
                document.getElementById("quantity").value = "";
                document.getElementById("gross_wt").value = "";
                document.getElementById("less_wt").value = "";
                document.getElementById("net_wt").value = "";
                document.getElementById("purity").value = "";
                document.getElementById("pure_wt").value = "";
                document.getElementById("making_charges").value = "";
                document.getElementById("amount").value = "";
                document.getElementById("cgst").value = "";
                document.getElementById("sgst").value = "";
                document.getElementById("total").value = "";
                document.getElementById("hsn").value = "";
                document.getElementById("huid").value = "";
            }
        }


        function textArea() {
            // document.getElementById("textarea1").value = "";
            var item_name = document.getElementById("item_name1").value;
            var category = document.getElementById("category").value;
            var rate = document.getElementById("rate").value;
            var quantity = document.getElementById("quantity").value;
            var gross_wt = document.getElementById("gross_wt").value;
            var less_wt = document.getElementById("less_wt").value;
            var net_wt = document.getElementById("net_wt").value;
            var purity = document.getElementById("purity").value;
            var pure_wt = document.getElementById("pure_wt").value;
            var making_charges = document.getElementById("making_charges").value;
            var amount = document.getElementById("amount").value;
            var cgst = document.getElementById("cgst").value;
            var sgst = document.getElementById("sgst").value;
            var total_amount = document.getElementById("total").value;
            var hsn = document.getElementById("hsn").value;
            var huid = document.getElementById("huid").value;

            if (item_name == "") {
                alert("Item name is required");
            } else if (quantity == "") {
                alert("Quantity is required");
            } else if (gross_wt == "") {
                alert("Gross is required");
            } else if (less_wt == "") {
                alert("Less is required");
            } else if (purity == "") {
                alert("Purity is required");
            } else if (making_charges == "") {
                alert("Making  is required");
            } else if (cgst == "") {
                alert("CGST is required");
            } else if (sgst == "") {
                alert("SGST is required");
            } else if (hsn == "") {
                alert("HSN is required");
            } else if (huid == "") {
                alert("HUID is required");
            } else {

                document.getElementById("textarea1").value += "Item Name:   " + "\t" + "\t" + "\t";
                document.getElementById("textarea1").value += "Category:   " + "\t" + "\t" + "\t";
                document.getElementById("textarea1").value += "Rate:   " + "\t" + "\t" + "\t";
                document.getElementById("textarea1").value += "Quantity:   " + "\t" + "\t" + "\t";
                document.getElementById("textarea1").value += "Gross Weight:   " + "\t" + "\t" + "\t";
                document.getElementById("textarea1").value += "Less Weight:   " + "\t" + "\t" + "\t";
                document.getElementById("textarea1").value += "Net Weight:   " + "\t" + "\t" + "\t";
                document.getElementById("textarea1").value += "Purity:   " + "\t" + "\t" + "\t";
                document.getElementById("textarea1").value += "Pure Weight:   " + "\t" + "\t" + "\t";
                document.getElementById("textarea1").value += "Making Charges:   " + "\t" + "\t" + "\t";
                document.getElementById("textarea1").value += "Amount:   " + "\t" + "\t" + "\t";
                document.getElementById("textarea1").value += "CGST:   " + "\t" + "\t" + "\t";
                document.getElementById("textarea1").value += "SGST:   " + "\t" + "\t";
                document.getElementById("textarea1").value += "Total Amount:   " + "\t" + "\t" + "\t";
                document.getElementById("textarea1").value += "HSN No.:   " + "\t" + "\t" + "\t";
                document.getElementById("textarea1").value += "HUID No.:   " + "\t" + "\t" + "\t";
                document.getElementById("textarea1").value += "\n";




                document.getElementById("textarea1").value += item_name + "\t" + "\t" + "\t" + "\t";
                document.getElementById("textarea1").value += category + "\t" + "\t" + "\t" + "\t";
                document.getElementById("textarea1").value += rate + "\t" + "\t" + "\t" + "\t";
                document.getElementById("textarea1").value += quantity + "\t" + "\t" + "\t" + "\t" + "\t" + "\t";
                document.getElementById("textarea1").value += gross_wt + "\t" + "\t" + "\t" + "\t";
                document.getElementById("textarea1").value += less_wt + "\t" + "\t" + "\t" + "\t";
                document.getElementById("textarea1").value += net_wt + "\t" + "\t" + "\t" + "\t";
                document.getElementById("textarea1").value += purity + "\t" + "\t" + "\t" + "\t";
                document.getElementById("textarea1").value += pure_wt + "\t" + "\t" + "\t" + "\t";
                document.getElementById("textarea1").value += making_charges + "\t" + "\t" + "\t" + "\t";
                document.getElementById("textarea1").value += amount + "\t" + "\t" + "\t" + "\t";
                document.getElementById("textarea1").value += cgst + "%" + "\t" + "\t" + "\t" + "\t" + "\t" + "\t";
                document.getElementById("textarea1").value += sgst + "%" + "\t" + "\t" + "\t" + "\t" + "\t" + "\t";
                document.getElementById("textarea1").value += total_amount + "\t" + "\t" + "\t" + "\t";
                document.getElementById("textarea1").value += hsn + "\t" + "\t" + "\t" + "\t";
                document.getElementById("textarea1").value += huid + "\t" + "\t" + "\t" + "\t";
                document.getElementById("textarea1").value += "\n";
                document.getElementById("textarea1").value += "\n";








                var am = document.getElementById('amount').value;
                var cgst1 = document.getElementById("cgst").value;
                var sgst1 = document.getElementById("sgst").value;
                var total_amount1 = document.getElementById("total").value;

                var total_gst1 = ((cgst1 / 100) * am) + ((sgst1 / 100) * am);

                document.getElementById('amount2').value = am;
                document.getElementById('total_gst').value = total_gst1;
                document.getElementById('payable_amount').value = total_amount1;


                //document.getElementById('textarea1').value = "";
                document.getElementById("item_name1").value = "";
                document.getElementById("category").value = "";
                document.getElementById("rate").value = "";
                document.getElementById("quantity").value = "";
                document.getElementById("gross_wt").value = "";
                document.getElementById("less_wt").value = "";
                document.getElementById("net_wt").value = "";
                document.getElementById("purity").value = "";
                document.getElementById("pure_wt").value = "";
                document.getElementById("making_charges").value = "";
                document.getElementById("amount").value = "";
                document.getElementById("cgst").value = "";
                document.getElementById("sgst").value = "";
                document.getElementById("total").value = "";
                document.getElementById("hsn").value = "";
                document.getElementById("huid").value = "";

            }
        }

        function clearTextArea() {
            document.getElementById('textarea1').value = "";
            document.getElementById("item_name1").value = "";
            document.getElementById("category").value = "";
            document.getElementById("rate").value = "";
            document.getElementById("quantity").value = "";
            document.getElementById("gross_wt").value = "";
            document.getElementById("less_wt").value = "";
            document.getElementById("net_wt").value = "";
            document.getElementById("purity").value = "";
            document.getElementById("pure_wt").value = "";
            document.getElementById("making_charges").value = "";
            document.getElementById("amount").value = "";
            document.getElementById("cgst").value = "";
            document.getElementById("sgst").value = "";
            document.getElementById("total").value = "";
            document.getElementById("hsn").value = "";
            document.getElementById("huid").value = "";
        }



    </script>



</body>


</html>