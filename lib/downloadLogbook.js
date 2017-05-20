/*
    Code extracted from (Reference) -> http://code.runnable.com/U5HC9xtufQpsu5aj/use-javascript-to-save-textarea-as-a-txt-file.
 */

function downloadLogbook() {

    var logbook = document.getElementById('logbook').value;
    var logbookBlob = new Blob([logbook], {type:'text/plain'});
    var filename = 'logbook.txt';

    // Create clickable link
    var downloadLink = document.createElement("a");

    // Identify filename
    downloadLink.download = filename;

    // Provide body for the link
    downloadLink.innerHTML = "My Hidden Link";

    /* Allow our code to work in webkit & Gecko based browsers
     without the need for a if / else block */
    window.URL = window.URL || window.webkitURL;

    // Create the link Object.
    downloadLink.href = window.URL.createObjectURL(logbookBlob);

    // Destroy link
    downloadLink.onclick = destroyLink;

    // Hides link.
    downloadLink.style.display = "none";

    // Add the link to the DOM
    document.body.appendChild(downloadLink);

    // Click the new link
    downloadLink.click();
}

function destroyLink(event)
{
    // Remove the link from the DOM
    document.body.removeChild(event.target);
}
