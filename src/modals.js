// Modal Sucursales
document.addEventListener("DOMContentLoaded", function () {
    const locationModal = document.getElementById("locationModal");
    const mapFrame = document.getElementById("mapFrame");
    const modalTitle = document.getElementById("locationModalLabel");

    locationModal.addEventListener("show.bs.modal", function (event) {
        // Botón que triggeró el modal
        const button = event.relatedTarget;

        // Obtener datos del botón
        const mapSrc = button.getAttribute("data-map-src");
        const locationName = button.getAttribute("data-location-name");

        // Actualizar título del modal
        modalTitle.textContent = locationName;

        // Actualizar src del iframe
        mapFrame.src = mapSrc;
    });

    // Limpiar iframe cuando se cierra el modal
    locationModal.addEventListener("hidden.bs.modal", function () {
        mapFrame.src = "";
    });
});
