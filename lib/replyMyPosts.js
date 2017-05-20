function reply(id) {
    
    //creates a prompt to post a reply
    var reply = window.prompt("Post your reply: ", "");
    if(reply != null) { //parse values if they're not null

        AjaxGet('api/replyMyPosts.php/','?questionID=' + id + '&reply=' + reply, function(data){
            results.innerHTML = data;
        });

    }
}
