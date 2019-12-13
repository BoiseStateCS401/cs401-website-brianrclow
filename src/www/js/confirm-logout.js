
const confirmLogoutClick = document.querySelector('.logoutButton');
confirmLogoutClick.addEventListener('click', confirmLogout);

function confirmLogout() {
    var responseText;
    if (confirm("Are you sure you want to logout of your account?")) {
        // "ok" for log out
    } else {
        // "cancel" for stay logged in
    }
  }