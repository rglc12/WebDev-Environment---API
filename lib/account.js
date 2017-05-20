var log = document.getElementById('Login');
var username = document.getElementById('LogUsername');
var password = document.getElementById('LogPassword');
var reg = document.getElementById('Reg');
var regUsername = document.getElementById('RegUsername');
var regPassword = document.getElementById('RegPassword');
var regValid = document.getElementById('regValid');


/*
    Using Ajax, the data from the input fields are sent to api/login.php.
    If the login details match a record in the database, the callback will return 'true' or 1.
    When this happens, the user is then directed to feed.php.
 */

function login(){

    var UN = username.value;
    var PW = password.value;

    AjaxGet('api/login.php/','?username=' + UN + '&password=' + PW , function(data){

        if(data == 1){
            window.location = '/../feed.php';
        } else {
            document.getElementById('logValid').style.display = "block";
            username.value = "";
            password.value = "";
        }
    });
}

//Using Ajax, the data from the input fields are sent to api/register.php and a new record is created.

function register(){

    var regUN = regUsername.value;
    var regPW = regPassword.value;

    AjaxGet('api/register.php/','?regUsername=' + regUN + '&regPassword=' + regPW , function(data){

        if(data == 1){
            regValid.innerHTML = "- YOU HAVE REGISTER! PLEASE LOGIN";
            regValid.style.display = 'block';
        } else {
            regValid.innerHTML = data;
            regValid.style.display = 'block';
        }
    });

    regUsername.value = "";
    regPassword.value = "";

}

reg.addEventListener('click', register);
log.addEventListener('click', login);
