<html>
    <head>
        <title>Buynow</title>
    <style>
        .buy{
            font-family: 'Open Sans Condensed', arial, sans;
            width: 500px;
            padding: 30px;
            background: #FFFFAB;
            margin: 50px auto;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
            -moz-box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
            -webkit-box-shadow:  0px 0px 15px rgba(0, 0, 0, 0.22);
        }
        .buy input[type="text"] {
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            outline: none;
            display: block;
            width: 100%;
            padding: 7px;
            border: none;
            border-bottom: 1px solid #FFFFAB;
            background: transparent;
            margin-bottom: 10px;
            font: 16px Arial, Helvetica, sans-serif;
            height: 45px;
            transition-duration: 0.9s;
            }
        .buy input[type="text"]:focus{
            border-bottom: 2px solid green;
        }
        .buy input[type="submit"]{
            -moz-box-shadow: inset 0px 1px 0px 0px #45D6D6;
            -webkit-box-shadow: inset 0px 1px 0px 0px #45D6D6;
            box-shadow: inset 0px 1px 0px 0px #45D6D6;
            background-color: #2CBBBB;
            border: 1px solid #27A0A0;
            display: inline-block;
            cursor: pointer;
            color: #FFFFFF;
            font-family: 'Open Sans Condensed', sans-serif;
            font-size: 14px;
            padding: 8px 18px;            
        }
        
        </style>
    </head>
    <body>
        <div class="buy">
            <?php echo form_open('Buy/delivery'); ?>
            <input type="text" name="Name" placeholder="Name" required><br>
            <input type="text" name="Address_1" placeholder="Address 1" required><br>
            <input type="text" name="Address_2" placeholder="Address 2" required><br>
            <input type="text" name="Dist" placeholder="Dist" required><br>
            <input type="text" name="State" placeholder="State" required><br>
            <input type="text" name="Pin" placeholder="Pin" required><br>
            <input type="text" name="Mobile_Number" placeholder="Mobile Number"><br>
            <input style="margin-left:200px;" type="submit" value="Submit">
            <?php echo form_close(); ?>
        </div>
    </body>
</html>