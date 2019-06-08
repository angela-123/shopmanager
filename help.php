<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            p{
                font-size: 1.5em;
                color: darkred;
            }
        </style>
                           <link rel="stylesheet" href="css/bootstrap.min.css">
‪<!-- Optional Bootstrap theme -->
‪<link rel="stylesheet" href="css/bootstrap-theme.css">
<script src="libs/jquery-1.11.2.min.js"></script>
       
‪<script src="js/bootstrap.min.js"></script>
       
       
        <link rel="stylesheet" href="libs/jquery-ui-1.10.0.custom.css">
        
        <script src="libs/jquery-ui-1.10.0.custom.js"></script>
        
    </head>
    <div class="container-fluid">
        <div class="row">
            
            
            <div class="col-sm-5 col-md-6 col-lg-6" style="border: 1px #985f0d solid;background: #c0c0c0">
                <p>INTRODUCTION</p>
                This application is designed to help you manage all your customers and suppliers, from one user's
                interface.So from <b>Point</b> Of Sales you can sell to a customer,delete sales,preview the customers ledger.
                Same applies to your suppliers, from <b>Purchases</b>, you can enter purchases,delete purchases, and preview suppliers
                ledger.
                You can also view sales and purchases reports, you view stand alone customers and suppliers ledger,
                you can track your sales daily, monthly and yearly
                
            </div>
        </div>
            
            
            
            
        <div class="row">
            
            <div class="col-sm-5 col-md-6 col-lg-6" style="border: 1px #985f0d solid;background: #c0c0c0">
                <p>Create Departments</p>
                Your departments represent the different categories of steel you see.
                For example round pipes,square pipes,etc.
                To create a department, click <b>Start</b>, then click <b>Create Departments</b>
                Fill in the details as specified in the form, click <b>Update</b> to save
                
            </div>
            
            
        </div>
        <div class="row">
            
            <div class="col-sm-5 col-md-6 col-lg-6" style="border: 1px #c0c0c0 solid;background:  #c0a16b">
                <p>Customers</p>
                To register your customers, click <b>Start</b>,then <b>Customers</b>
                Fill the form as specified and click <b>Update</b> to save
                
            </div>
        </div>
        
        <div class="row">
            
            <div class="col-sm-5 col-md-6 col-lg-6" style="border: 1px #c0c0c0 solid;background:  #c0a16b">
                <p>Suppliers</p>
                To register your suppliers, click <b>Start</b>,then <b>Suppliers</b>
                Fill the form as specified and click <b>Update</b> to save
                
            </div>
        </div>
        
        <div class="row">
            
            <div class="col-sm-5 col-md-6 col-lg-6" style="border: 1px #c0c0c0 solid;background:  #c0a16b">
                <p>Opening Stock</p>
                To register your items,what you sell, click <b>Start</b>,then <b>Initialize Stock</b>
                Fill the form as specified and click <b>Update</b> to save
                
            </div>
        </div>
        
        <div class="row">
            
            <div class="col-sm-5 col-md-6 col-lg-6" style="border: 1px #c0c0c0 solid;background:  #c0a16b">
                <p>Point Of Sales</p>
                This is the point that you record sales to your customers,it manages sales,previews customers ledgers
                and allows you to delete wrong entries or returned products.
                It consists of the following fields:
                <b>Date</b> from the system date, you can change it as appropriate.
                <b>Sales Type</b>
                cash,credit,pos,cheque,bank transfer,etcetera
                <b>Customername</b>
                Type the first two or three letters of the product you want to sell, the rest jumps out for you.
                <b>Productname</b>
                The product you want to sell, type the first two or three letters, the rest will jump out for you,select it.
                <b>Qty</b>
                the quantity you want to sell.
                <b>Unitprice</b>
                The unitprice of the item.
                Thats all, click <a>Save</a>, and the invoice and the customer summary jumps out for you.
                To view customer ledger, click <b>Preview Ledger</b>
                <p>Customer Payments</p>
                To enter customer payments, select customer name, in the productname field, type payment,
                then in the <a>Paid</a> field, enter the amount, then click <a>Save</a>, see what happens, the customers records are updated,
                realtime, click <b>Preview Ledger to Preview Ledger</b>
                
                <p>To Delete Entry</p>
                Select the date the entry was made, enter the customername, productname,qty, then click <b>Delete</b>
                Thats all that particular transaction is removed from your records.
                
                
            </div>
        </div>
        
        
        <div class="row">
            
            <div class="col-sm-5 col-md-6 col-lg-6" style="border: 1px #c0c0c0 solid;background:  #c0a16b">
                <p>Purchases</p>
                This is the point that you record sales to your suppliers,it manages purchases,preview  suppliers ledgers
                and allows you to delete wrong entries or returned products.
                It consists of the following fields:
                <b>Date</b> from the system date, you can change it as appropriate.
                
                <b>Suppliername</b>
                Type the first two or three letters of the product you want to sell, the rest jumps out for you.
                <b>Productname</b>
                The product you want to sell, type the first two or three letters, the rest will jump out for you,select it.
                <b>Qty</b>
                the quantity you want to sell.
                <b>Unicost</b>
                The unitcost of the item.
                Thats all, click <a>Save</a>, and the invoice and the customer summary jumps out for you.
                To view customer ledger, click <b>Preview Ledger</b>
                <p>Payments</p>
                To enter supplier payments, select suppliername, in the productname field, type <b>payment</b>,
                then in the <a>Paid</a> field, enter the amount, then click <a>Save</a>, see what happens, the customers records are updated,
                realtime, click <b>Preview Ledger to Preview Ledger</b>
                
                <p>To Delete Entry</p>
                Select the date the entry was made, enter the suppliername, productname, then click <b>Delete</b>
                Thats all that particular transaction is removed from your records.
                
                
            </div>
        </div>
        
        
        
        
        
    </div>
    <body>
        <?php
        
        ?>
        
        
    </body>
</html>
