var results = document.getElementById('results');

AjaxGet('api/getMyPosts.php/','?SearchQuestion= ', function(data){
    results.innerHTML = data;
});

/*
 Uses Ajax to try and call getPosts.php and display the posts in the <div id="results">
 in feed.html
 */

function liveResults(){
    var searchBarInput = search.value;
    AjaxGet('api/getMyPosts.php','?SearchQuestion=' + searchBarInput, function(data){
        results.innerHTML = data;
    });
}

search.addEventListener("keyup", liveResults);
