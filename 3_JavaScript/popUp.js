// script.js
document.addEventListener("DOMContentLoaded", () => {
    const openPopupBtn = document.getElementById("openPopup");
    const closePopupBtn = document.getElementById("closePopup");
    const popupForm = document.getElementById("popupForm");

    openPopupBtn.addEventListener("click", () => {
        popupForm.classList.remove("hidden");
    });

    closePopupBtn.addEventListener("click", () => {
        popupForm.classList.add("hidden");
    });

    // Close pop-up when clicking outside the form
    popupForm.addEventListener("click", (e) => {
        if (e.target === popupForm) {
            popupForm.classList.add("hidden");
        }
    });
});
