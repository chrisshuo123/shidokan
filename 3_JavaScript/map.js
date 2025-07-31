function initMap() {
    // Map Options
    const options = {
        zoom: 12,
        center: { lat: 40.7128, lng: -74.0060 } // New York Coordinates
    };

    // New Map
    const map = new google.maps.map(document.getElementById('map'), options);

    // Add Marker
    const marker = new google.maps.marker({
        position: { lat: 40.7128, lng: -74.0060 },
        map: map,
        title: 'New York City'
    });
}