function checkPass()
{
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('pass1');
    var pass2 = document.getElementById('pass2');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    //Compare the values in the password field 
    //and the confirmation field
    if(pass1.value == pass2.value){
        //The passwords match. 
        //Set the color to the good color and inform
        //the user that they have entered the correct password 
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match"
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Passwords Do Not Match!"
    }
} 

function validatephone(phone) 
{
    var maintainplus = '';
    var numval = phone.value
    if ( numval.charAt(0)=='+' )
    {
        var maintainplus = '';
    }
    curphonevar = numval.replace(/[\\A-Za-z!"£$%^&\,*+_={};:'@#~,.Š\/<>?|`¬\]\[]/g,'');
    phone.value = maintainplus + curphonevar;
    var maintainplus = '';
    phone.focus;
}

// validates text only
function Validate(txt) {
    txt.value = txt.value.replace();
}

// validate email
function email_validate(email)
{
var regMail = /^([_a-zA-Z0-9-]+)(\.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+([a-zA-Z]{2,3})$/;

    if(regMail.test(email) == false)
    {
    document.getElementById("status").innerHTML    = "<span class='warning'>Email address is not valid yet.</span>";
    }
    else
    {
    document.getElementById("status").innerHTML	= "<span class='valid'>Thanks, you have entered a valid Email address!</span>";	
    }
}

// validates postcode
function validatepostcode(postcode) 
{
    var maintainplus = '';
    var numval = postcode.value
    if ( numval.charAt(0)=='+' )
    {
        var maintainplus = '';
    }
    curpostcodevar = numval.replace(/[\\A-Za-z!"£$%^&\,*+_={};:'@#~,.Š\/<>?|`¬\]\[]/g,'');
    postcode.value = maintainplus + curpostcodevar;
    var maintainplus = '';
    postcode.focus;
}

// validate date of birth
function dob_validate(dob)
{
var regDOB = /^(\d{1,2})[-\/](\d{1,2})[-\/](\d{4})$/;

    if(regDOB.test(dob) == false)
    {
    document.getElementById("statusDOB").innerHTML	= "<span class='warning'>DOB is only used to verify your age.</span>";
    }
    else
    {
    document.getElementById("statusDOB").innerHTML	= "<span class='valid'>Thanks, you have entered a valid DOB!</span>";	
    }
}

// validate address
function add_validate(address)
{
var regAdd = /^(?=.*\d)[a-zA-Z\s\d\/]+$/;
  
    if(regAdd.test(address) == false)
    {
    document.getElementById("statusAdd").innerHTML	= "<span class='warning'>Address is not valid yet.</span>";
    }
    else
    {
    document.getElementById("statusAdd").innerHTML	= "<span class='valid'>Thanks, Address looks valid!</span>";	
    }
}


// //check radio button
// function fncSubmit()
//     {
//         if(document.form1.fullmarathonRadio.checked == true && document.form1.halfmarathonRadio.checked == true && document.form1.minimarathonRadio.checked == true && document.form1.funrunRadio.checked == true)
//         {
//             alert('Please Select one Radio Option ');
//             return false;
//         }	
//         document.form1.submit();
//     }