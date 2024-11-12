document.addEventListener('DOMContentLoaded', function () {
    // Initialize Bootstrap Popovers with focus trigger
    const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]');

    popoverTriggerList.forEach(function (popoverTriggerEl) {
        new bootstrap.Popover(popoverTriggerEl, {
            html: true,  // Enable HTML content in popover
            sanitize: false,  // Allow custom HTML (buttons in the popover)
            placement: 'bottom',  // Popover placement
            trigger: 'focus',  // Trigger popover on focus (instead of click)
            dismissible: true  // Make the popover dismissable
        });
    });

    // Initialize DataTables for the table with pagination and search features
    /* const roomsTable = document.getElementById("roomsTable");
    if (roomsTable) {
        // Initialize DataTable
        $(roomsTable).DataTable({
            paging: true,           // Enable pagination
            searching: true,        // Enable search box
            lengthChange: true,     // Allow user to change the number of rows per page
            pageLength: 10,          // Default number of rows per page
            responsive: true,       // Make the table responsive
            language: {
                search: "_INPUT_",  // Placeholder for the search input box
                searchPlaceholder: "Rechercher..." // Placeholder text
            }
        });
    } */


    // Handle form submission (for demonstration purposes)
    const addRoomForm = document.getElementById('addRoomForm');
    addRoomForm.addEventListener('submit', function (event) {
        event.preventDefault();

        const roomNumber = document.getElementById('roomNumber').value;
        const roomType = document.getElementById('roomType').value;
        const roomCapacity = document.getElementById('roomCapacity').value;
        const roomStatus = document.getElementById('roomStatus').value;

        // Logic to save the room data (could be sending to server, or adding to table)
        console.log('Room Added:', { roomNumber, roomType, roomCapacity, roomStatus });

        // Close modal after saving
        const modal = bootstrap.Modal.getInstance(document.getElementById('addRoomModal'));
        modal.hide();
    });

    // Handle "Update" button click to open Add Room Modal
    document.querySelectorAll('#updateRoomBtn').forEach(button => {
        button.addEventListener('click', function () {
            const addRoomModal = new bootstrap.Modal(document.getElementById('addRoomModal'));
            addRoomModal.show();
        });
    });

    // Handle "Delete" button click to open Delete Room Modal
    document.querySelectorAll('#deleteRoomBtn').forEach(button => {
        button.addEventListener('click', function () {
            const deleteRoomModal = bootstrap.Modal.getInstance(document.getElementById('deleteRoomModal'));
            deleteRoomModal.show();
        });
    });

    // Handle confirmation of room deletion
    document.getElementById('confirmDeleteBtn').addEventListener('click', function () {
        // Logic to delete the room, such as making a request to delete the room from the database
        console.log("Room deleted");

        // Close the modal after confirmation
        const deleteRoomModal = new bootstrap.Modal(document.getElementById('deleteRoomModal'));
        deleteRoomModal.hide();
    });

});
