/**
 * Created by RyanLC on 10/03/2016.
 */

//Login Function -- Takes the user and then logs them in and redirects them to the charts
function onSignIn(googleUser) {
    window.location.assign("feed.html");
}
//Sign out function -- Basically redirects the user to the logout page of google then logs them out. Then they get redirected back to the hompage
function signOut() {
    window.location="https://www.google.com/accounts/Logout?continue=https://appengine.google.com/_ah/logout?continue=http://localhost/htdocs/index.html";
}