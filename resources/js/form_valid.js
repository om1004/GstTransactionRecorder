document.addEventListener('DOMContentLoaded',function(){
    console.log('step1: complete js mapped successfully');


    var formOb = document.getElementById('transaction_form');
    const gstinRegex = /^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]{1}[1-9A-Z]{1}Z[0-9A-Z]{1}$/;
    const dateregex = /^\d{4}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01])$/;
    
    

    formOb.addEventListener('submit', function(e){
        e.preventDefault();
        var gstin = document.getElementById('gstin').value;
        var date = document.getElementById('date').value;
        var flag = false;
        // if(!gstinRegex.test(gstin))
            console.log(date);
        

    });
});