$(document).ready(function(){
    $('.sidenav').sidenav();
    $('.modal').modal({
        'startingTop': "0%",
        'endingTop': "1%",
        'opacity': 0
    });
    $('.parallax').parallax();
    $('.collapsible').collapsible();
    $('#confirm_password').keyup(function(){
        validate();
    });
    $('#confirm_password').click(function(){
        validate();
    });
    $('#show_button_one').click(function(){
        $(this).toggleClass('myclass');
        $(this).toggleClass('showhidenew');
    });
    $('.dropdown-trigger').dropdown({
        "alignment": "right",
        "constrainWidth": false,
        "coverTrigger": false
    });
    $(document).on("keydown", "form", function(event) { 
    return event.key != "Enter";
});
    $('.carousel.carousel-slider').carousel({
        fullWidth: true,
        indicators: true
    });
    $(document).ready(function(){
        $('.carousel').carousel();
    });
          
});

function validate() {
 
    var a = document.getElementById("first_password").value;
    var b = document.getElementById("confirm_password").value;
    var element = document.getElementById("confirm_password");
    var size = b.length
   
    const mdpverified = false
    if (a!=b && size!=0) {
        element.classList.add("invalid");
        element.classList.remove("valid");}
    else if (size!=0) {
        element.classList.add("valid");
        element.classList.remove("invalid");
        mdpverified = true;
        return false; }}
    


function PasswordReverse() {
    const password = $("#password");
    if (password.attr("type") == "password") {
        password.attr("type", "text")
    } else {
        password.attr("type", "password")
    }
}

function confirm_singin() {
    var email = document.getElementById("email");
    var confirm = document.getElementById("forms");
    if (email.classList.contains(validate) && mdpverified == true) {
        confirm.classList.add("confirmed");
    }
}

function mdpDisableField(){

    document.getElementById("account-password-input").removeAttribute("disabled");
    document.getElementById("account-password-input").setAttribute("type","text");
    document.getElementById("mdp-btn").setAttribute("onclick","mdpEnableField()");
    
    }
    
function mdpEnableField(){
    var newValue = document.getElementById("account-password-input").value;
    document.getElementById("account-password-input").setAttribute("disabled", "");
    document.getElementById("account-password-input").setAttribute("type","password");
    document.getElementById("mdp-btn").setAttribute("onclick","mdpDisableField()");
    document.getElementById("account-password-input").setAttribute("value", newValue);

}

function mailDisableField(){

    document.getElementById("account-email").removeAttribute("disabled");
    document.getElementById("mail-btn").setAttribute("onclick","mailEnableField()");
    
    }
    
function mailEnableField(){
    var newValueMail = document.getElementById("account-email").value;
    document.getElementById("account-email").setAttribute("disabled", "");
    document.getElementById("mail-btn").setAttribute("onclick","mailDisableField()");
    document.getElementById("account-email").setAttribute("value", newValueMail);

}
function showButtonChange(actualValue,oldvalue){
    if (actualValue != oldvalue){
        document.getElementById("changeBtn").classList.add("show");
        document.getElementById("changeBtn").classList.remove("hide")
    }
}