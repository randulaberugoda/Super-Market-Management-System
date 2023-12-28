// JavaScript for displaying date and time
function updateDateTime() {
    const datetimeElement = document.getElementById("datetime");
    const now = new Date();
    const formattedDateTime = now.toLocaleString();
    datetimeElement.textContent = formattedDateTime;
}

setInterval(updateDateTime, 1000);
updateDateTime(); // Initial update

