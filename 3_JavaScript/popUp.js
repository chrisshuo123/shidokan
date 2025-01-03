// popUp.js

// 1 - Shidokan International
$(document).ready(function () {
    // Array to store pop-up data
    const popups = [
        {id: "popup1", image: "../img/2-face/1-dongoz.png" , nama: "Yoshiji Soeno", posisi:"Founder Shidokan Int'll", biografi: "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda iusto accusamus soluta. Accusamus hic sit minus fugit deserunt molestias esse libero maiores. Quibusdam numquam dolores libero eos molestiae consequatur. Sunt."},
        {id: "popup2", image: "../img/2-face/instruktur-foto-1.jpg", nama: "Wakil Pengurus 1", posisi:"Vice Leader 1", biografi: "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda iusto accusamus soluta. Accusamus hic sit minus fugit deserunt molestias esse libero maiores. Quibusdam numquam dolores libero eos molestiae consequatur. Sunt."},
        {id: "popup3", image: "../img/2-face/instruktur-foto-2.jpg", nama: "Wakil Pengurus 2", posisi:"Vice Leader 2", biografi: "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda iusto accusamus soluta. Accusamus hic sit minus fugit deserunt molestias esse libero maiores. Quibusdam numquam dolores libero eos molestiae consequatur. Sunt."},
    ];
                

    // Dynamically creates pop-up
    popups.forEach((popup) => {
        const popupHTML = `
        <div id="${popup.id}" class="popup hidden">
            <div class="popup-content" style="color:black; text-align:center;">
                <div id="" class="close-btn" data-link="#${popup.id}">&times;</div>
                <img src="${popup.image}">
                <h2>${popup.nama}</h2>
                <p style="font-size:1.1rem;">${popup.posisi}</p>
                <p>${popup.biografi}</p>
            </div>
        </div>`;
        $("body").append(popupHTML);
    });
    

    // Open pop-up
    $(".action-btn").on("click", function () {
        const target = $(this).data("link");
        $(target).removeClass("hidden");
    });

    // Close pop-up
    $(document).on("click", ".close-btn", function () {
        const target = $(this).data("link");
        $(target).addClass("hidden");
    });

    // Close pop-up when clicking outside the content area
    $(document).on("click", ".popup", function (e) {
        if ($(e.target).hasClass("popup")) {
            $(this).addClass("hidden");
        }
    });
});

// 2 - Shidokan National
$(document).ready(function () {
    // Array to store pop-up data
    const popups = [
        {id: "popup4", image: "../img/2-face/1-dongoz.png" , nama: "Eric Danurahardja", posisi:"Head Branch Shidokan Indonesia", biografi: "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda iusto accusamus soluta. Accusamus hic sit minus fugit deserunt molestias esse libero maiores. Quibusdam numquam dolores libero eos molestiae consequatur. Sunt."},
        {id: "popup5", image: "../img/2-face/instruktur-foto-1.jpg", nama: "Jemima Diovani", posisi:"Shidokan Indonesia Assistant", biografi: "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda iusto accusamus soluta. Accusamus hic sit minus fugit deserunt molestias esse libero maiores. Quibusdam numquam dolores libero eos molestiae consequatur. Sunt."},
        {id: "popup6", image: "../img/2-face/instruktur-foto-2.jpg", nama: "Johan Nangin", posisi:"Head Shidokan Bali", biografi: "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda iusto accusamus soluta. Accusamus hic sit minus fugit deserunt molestias esse libero maiores. Quibusdam numquam dolores libero eos molestiae consequatur. Sunt."},
    ];
                

    // Dynamically creates pop-up
    popups.forEach((popup) => {
        const popupHTML = `
        <div id="${popup.id}" class="popup hidden">
            <div class="popup-content" style="color:black; text-align:center;">
                <div id="" class="close-btn" data-link="#${popup.id}">&times;</div>
                <img src="${popup.image}">
                <h2>${popup.nama}</h2>
                <p style="font-size:1.1rem;">${popup.posisi}</p>
                <p>${popup.biografi}</p>
            </div>
        </div>`;
        $("body").append(popupHTML);
    });
    

    // Open pop-up
    $(".action-btn").on("click", function () {
        const target = $(this).data("link");
        $(target).removeClass("hidden");
    });

    // Close pop-up
    $(document).on("click", ".close-btn", function () {
        const target = $(this).data("link");
        $(target).addClass("hidden");
    });

    // Close pop-up when clicking outside the content area
    $(document).on("click", ".popup", function (e) {
        if ($(e.target).hasClass("popup")) {
            $(this).addClass("hidden");
        }
    });
});