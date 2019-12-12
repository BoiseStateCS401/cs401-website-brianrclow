
const confirmChangesClick = document.querySelector('.confirmChangesButton');
confirmChangesClick.addEventListener('click', confirmChanges);

function confirmChanges() {
    var responseText;
    if (confirm("Are you sure you want to save this information?")) {
        changeUserUsername();
        responseText = "Your changes have been saved.";
    } else {
        responseText = "Your changes have been discarded.";
    }
    document.getElementById("edit-account-info").innerHTML = responseText;
  }