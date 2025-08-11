<?php ?>
<html>
    <head>
        @vite('resources/js/app.js')
        <meta name="csrf-token" content="{{ csrf_token() }}">

    </head>
    <body>
        <div>
            <form id="transaction_form">
            <input type="text" name="gstin" id="gstin" placeholder="Enter your gstin">
            <input type="date" name="date" id="date" placeholder="Enter date of transaction">
            <input type="text" name="invoice" id="invoice" placeholder="Enter invoice number">
            <input type="text" name="product" id="product" placeholder="Enter Product Name">
            <input type="number" name="amt5" id="amt5" placeholder="Enter Amount for 5%">
            <input type="number" name="amt12" id="amt12" placeholder="Enter Amount for 12%">
            <input type="number" name="amt18" id="amt18" placeholder="Enter Amount for 18%">
            <input type="number" name="amt24" id="amt24" placeholder="Enter Amount for 24%">
<!--             
            <select name="tax_slab" id="tax_slab" multiple>
                <option value="5">5%</option>
                <option value="12">12%</option>
                <option value="18">18%</option>
                <option value="24">24%</option>
            </select> -->
            <button type="submit" id="submit">Submit</button>
            </form>
        </div>
    </body>
</html>

