document.addEventListener('DOMContentLoaded',function(){
    console.log('step1: complete js mapped successfully');


    var formOb = document.getElementById('transaction_form');
    const gstinRegex = /^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]{1}[1-9A-Z]{1}Z[0-9A-Z]{1}$/;
    const dateregex = /^\d{4}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01])$/;
    
    

    formOb.addEventListener('submit', function(e){
        e.preventDefault();
        var gstin = document.getElementById('gstin').value;
        var date = document.getElementById('date').value;
        var invoice = document.getElementById('invoice').value;
        var product = document.getElementById('product').value;
        var amt = document.getElementById('amt').value;
        var tax_slab = document.getElementById('tax_slab');
        
        var tax_slabs = Array.from(tax_slab.selectedOptions).map(option => option.value);


        var flag = false;
        if(!gstinRegex.test(gstin)){
            flag = true;
        }
        var obj = {
            "gstin" : gstin,
            "date" : date,
            "invoice" : invoice,
            "product" : product,
            "amt" : amt,
            "tax_slab" : tax_slabs
        }
            console.log(obj);
        

    });
});