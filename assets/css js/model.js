document.querySelectorAll(".modal").forEach(function(modal) {
    modal.addEventListener("show.bs.modal", function() {
        var easeIn = modal.getAttribute("data-easein");
        var modalDialog = modal.querySelector(".modal-dialog");

        switch (easeIn) {
            case "shake":
            case "pulse":
            case "tada":
            case "flash":
            case "bounce":
            case "swing":
                modalDialog.velocity("callout." + easeIn);
                break;
            default:
                modalDialog.velocity("transition." + easeIn);
                break;
        }
    });
});
