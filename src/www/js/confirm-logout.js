
const confirmLogoutClick = document.querySelector('.logoutButton');
confirmLogoutClick.addEventListener('click', confirmLogout);

function confirmLogout() {
    var responseText;
    if (confirm("Are you sure you want to logout of your account?")) {
        // so they know they are now logged out
        responseText = "You have been logged out.";
    } else {
        // do nothing becuase they are stil logged in
    }
    document.getElementById("logout-confirmation").innerHTML = responseText;
  }