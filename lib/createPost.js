var post = document.getElementById('post');
var question = document.getElementById('question');
var details = document.getElementById('details');

function addPost(){

    var Q = question.value;
    var D = details.value;

    AjaxGet('api/addPosts.php/','?question=' + Q + '&details=' + D, function(data){
        results.innerHTML = data;
    });
    
    question.value = "";
    details.value = "";
}

post.addEventListener('click', addPost);