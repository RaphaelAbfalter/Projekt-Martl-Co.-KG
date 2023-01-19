const dialogButton = document.getElementById("dialogButton");
const dialog = document.querySelector("dialog");

dialogButton.addEventListener("click", function (e) {
    if (dialog) {
        dialog.showModal();
    }
    dialog.addEventListener("click", function (event) {
        var rect = dialog.getBoundingClientRect();
        var isInDialog =
        rect.top <= event.clientY &&
        event.clientY <= rect.top + rect.height &&
        rect.left <= event.clientX &&
        event.clientX <= rect.left + rect.width;
        if (!isInDialog) {
            dialog.close();
        }
    });
});
