<html>
    <head>
        @vite('resources/js/app.js')
    </head>
    <body>
        <div>
            <form id="transaction_form">
            <input type="text" name="gstin" id="gstin" placeholder="Enter your gstin">
            <input type="date" name="date" id="date" placeholder="Enter date of transaction">
            <input type="text" name="invoice" id="invoice" placeholder="Enter invoice number">
            <input type="text" name="product" id="product" placeholder="Enter Product Name">
            <input type="number" name="amt" id="amt" placeholder="Enter Amount">
            <select name="tax_slab" id="tax_slab" multiple>
                <option value="5">5%</option>
                <option value="12">12%</option>
                <option value="18">18%</option>
                <option value="24">24%</option>
            </select>
            <button type="submit" id="submit">Submit</button>
            </form>
        </div>
    </body>
</html>

