// Deletes post by it's ID in the database

function deletePost(id){

    AjaxGet('api/deletePost.php/','?id=' + id, function(data){
        results.innerHTML = data;
    });

}

