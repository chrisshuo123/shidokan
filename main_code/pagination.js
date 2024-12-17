/*=======================*/
/*======= BERITA =======*/

/* Pagination */
const pages = [
    [
        { title: "Title 1", paragraph: "Lorem ipsum dolor sit amet, consectetur adipiscing elit." },
        { title: "Title 2", paragraph: "Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua." },
        { title: "Title 3", paragraph: "Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat." },
        { title: "Title 4", paragraph: "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur." },
        { title: "Title 5", paragraph: "Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." }
    ],
    [
        { title: "Title 6", paragraph: "Curabitur pretium tincidunt lacus. Nulla gravida orci a odio." },
        { title: "Title 7", paragraph: "Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris." },
        { title: "Title 8", paragraph: "Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula." },
        { title: "Title 9", paragraph: "Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam." },
        { title: "Title 10", paragraph: "Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi." }
    ],
    [
        { title: "Title 11", paragraph: "Curabitur pretium tincidunt lacus. Nulla gravida orci a odio." },
        { title: "Title 12", paragraph: "Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris." },
        { title: "Title 13", paragraph: "Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula." },
        { title: "Title 14", paragraph: "Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam." },
        { title: "Title 15", paragraph: "Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi." }
    ],
    [
        { title: "Title 16", paragraph: "Lorem ipsum dolor sit amet, consectetur adipiscing elit." },
        { title: "Title 17", paragraph: "Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua." },
        { title: "Title 18", paragraph: "Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat." },
        { title: "Title 19", paragraph: "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur." },
        { title: "Title 20", paragraph: "Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." }
    ]
];

let currentPage = 0;

function updateContent() {
    // Load the current page's content
    const contentDiv = $("#page-content");
    contentDiv.empty(); // Clear previous content

    pages[currentPage].forEach(item => {
        const container = $("<div></div>").addClass("paragraph");
        const title = $("<h3></h3>").text(item.title);
        const paragraph = $("<p></p>").text(item.paragraph);

        container.append(title, paragraph);
        contentDiv.append(container);
    });

    // Update button states
    $("#prev").prop("disabled", currentPage === 0);
    $("#next").prop("disabled", currentPage === pages.length - 1);

    // Update bullets
    const bulletsDiv = $("#bullets");
    bulletsDiv.empty(); // Clear previous bullets

    pages.forEach((_, index) => {
        const bullet = $("<div></div>")
            .addClass("bullet")
            .toggleClass("active", index === currentPage)
            .on("click", () => {
                currentPage = index;
                updateContent();
            });
        bulletsDiv.append(bullet);
    });
}

$("#prev").on("click", function() {
    if (currentPage > 0) {
        currentPage--;
        updateContent();
    }
});

$("#next").on("click", function() {
    if (currentPage < pages.length - 1) {
        currentPage++;
        updateContent();
    }
});

// Initialize the content and bullets
updateContent();