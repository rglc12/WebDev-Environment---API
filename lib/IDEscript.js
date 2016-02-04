var windowHeight = window.innerHeight;
var menuBarHeight = document.getElementById("menuBar").offsetHeight;
var codeContainerHeight = windowHeight - menuBarHeight;

document.getElementsByClassName("codeContainer").style.height = codeContainerHeight + "px";

document.getElementsByClassName("toggle").addEventListener('click', function(){

    this.classList.toggle("selected");

    var activeDiv = this.innerHTML;

    var con = document.getElementById(activeDiv + "Container");

    if(con.style.display != 'none'){

        con.style.display = 'none';

    }
    else{

        con.style.display = 'block';

    }

    var showingContainers = document.getElementsByClassName("codeContainer").filter(function(){

        return this.style.display != "none";

    }).length;

    var width = 100 / showingContainers;

    document.getElementsByClassName('codeContainer').style.width = width + "%";

});


document.getElementById('run').addEventListener('click', function(){

    document.getElementsByTagName('iframe').contentWindow.document.body.innerHTML('<style>' + document.getElementsByClassName('cssCode').valueOf() +
        '</style>' + document.getElementsByClassName('htmlCode').valueOf());

    document.getElementById("resultFrame").contentWindow.eval(document.getElementById("jsCode").valueOf());
});



/* $(".toggle").click(function(){

    $(this).toggleClass("selected");

    var activeDiv = $(this).html();

    $("#"+activeDiv+"Container").toggle();

    var showingDivs = $(".codeContainer").filter(function(){

        return($(this).css("display") != "none");

    }).length;

    var width = 100 / showingDivs;

    $(".codeContainer").width(width+"%");

});

$("#run").click(function(){

    $("iframe").contents().find("html").html('<style>' + $("#cssCode").val() + '</style>' + $("#htmlCode").val());

    document.getElementById("#resultFrame").contentWindow.eval($("#jsCode").val());

});


babel - filter
*/