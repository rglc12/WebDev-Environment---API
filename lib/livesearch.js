/*
    This function is for the search bar at the top of feed.php.
    This function should load the php file asynchronously (without re-loading the page)
    which loads the posts from the database (table name: Question).
    When the user types any string into the search bar, the posts should filter
    the posts and show all posts with matching string.
 */

var results = document.getElementById('results');

AjaxGet('api/getPosts.php/','?SearchQuestion= ', function(data){
    results.innerHTML = data;
});

// AjaxGet function to help with loading getPosts.php

function AjaxGet(URL, data, callback) {

    var xhttp = new XMLHttpRequest();
    xhttp.open("GET", URL + data, true);
    xhttp.onreadystatechange = function() {
        if (xhttp.status == 200 && xhttp.readyState == 4) {
            callback(xhttp.responseText);
            }
        }
    xhttp.send(xhttp.responseText);
}


/*
    Uses Ajax to try and call getPosts.php and display the posts in the <div id="results">
    in feed.html
 */

function liveResults(){
    var searchBarInput = search.value;
    AjaxGet('api/getPosts.php','?SearchQuestion=' + searchBarInput, function(data){
        results.innerHTML = data;
    });
}

search.addEventListener("keyup", liveResults);