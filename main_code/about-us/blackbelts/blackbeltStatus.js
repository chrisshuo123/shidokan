/**===== BLACKBELT LIST "STATUS" ===== */

// Ensure the script runs after the DOM is fully loaded
document.addEventListener('DOMContentLoaded', () => {
    // Target all <td> elements with the "data-label" attribute set to "Status"
    const statusCells = document.querySelectorAll('td[data-label="Status"]');

    // Loop through the selected elements and apply styles based on their context
    statusCells.forEach(td => {
        const status = td.textContent.trim(); // Get the trimmed text content

        if(status === 'AKTIF') {
            td.style.backgroundColor = 'green';
            td.style.color = 'white';
        } else if (status === 'MENINGGAL DUNIA') {
            td.style.backgroundColor = 'orange';
            td.style.color = 'white';
        } else if (status === 'MENGUNDURKAN DIRI') {
            td.style.backgroundColor = 'yellow';
            td.style.color = 'black';
        } else if (status === 'DICABUT') {
            td.style.backgroundColor = 'red';
            td.style.color = 'white';
        }
    });
});