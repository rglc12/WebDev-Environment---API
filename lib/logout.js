// Calls the logout function

function logout(){

    AjaxGet('api/logout.php/',"", function(data){

        window.location = '/../index.php';

    });

}