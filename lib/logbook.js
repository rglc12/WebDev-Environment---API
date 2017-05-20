var logbook = document.getElementById('logbook');

// retrieve the logbook (if it exists)
function getLogbook(){

    AjaxGet('api/getLogbook.php/',"", function(data){
        logbook.value = data;
    });

}

// updates the logbook based on the data in the textarea
function update(){

    var updatedLogbook = logbook.value;
    AjaxGet('api/updateLogbook.php/','?logbook=' + updatedLogbook, function(data){});

}

logbook.addEventListener("keyup", update);
window.onload = getLogbook;