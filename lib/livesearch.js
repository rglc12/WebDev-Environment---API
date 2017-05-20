var results = document.getElementById('results');

// By default, show all posts
AjaxGet('api/getPosts.php/','?SearchQuestion= ', function(data){
    results.innerHTML = data;
});

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

