<!-- Modal for Adding Room -->
<div class="modal fade" id="addRoomModal" tabindex="-1" aria-labelledby="addRoomModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-3">
            <div class="modal-header border-0">
                <h5 class="modal-title" id="addRoomModalLabel">Add New Room</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addRoomForm">
                    <div class="mb-3">
                        <label for="roomNumber" class="form-label">Room Number</label>
                        <input type="text" class="form-control" id="roomNumber" placeholder="Enter room number" required>
                    </div>
                    <div class="mb-3">
                        <label for="roomType" class="form-label">Room Type</label>
                        <select class="form-select" id="roomType" required>
                            <option value="">Select Room Type</option>
                            <option value="single">Single</option>
                            <option value="double">Double</option>
                            <option value="suite">Suite</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="roomCapacity" class="form-label">Capacity</label>
                        <input type="number" class="form-control" id="roomCapacity" placeholder="Enter room capacity" required>
                    </div>
                    <div class="mb-3">
                        <label for="roomStatus" class="form-label">Status</label>
                        <select class="form-select" id="roomStatus" required>
                            <option value="available">Available</option>
                            <option value="occupied">Occupied</option>
                            <option value="under_maintenance">Under Maintenance</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary" form="addRoomForm">Save</button>
            </div>
        </div>
    </div>
</div>