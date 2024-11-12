<?= $this->extend('layouts/app_layout') ?>

<?= $this->section('content') ?>

<!-- Table with CRUD actions -->
<div class="d-flex justify-content-between mb-3">
    <h4>Rooms List</h4>
    <!-- Add Room Button -->
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addRoomModal">
        <i class="bi bi-plus-circle"></i> Add Room
    </button>
</div>

<table id="roomsTable" class="table table-hover border rounded">
    <thead>
        <tr>
            <th>Room Number</th>
            <th>Type</th>
            <th>Capacity</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>101</td>
            <td>Single</td>
            <td>1</td>
            <td>Available</td>
            <td>
                <button type="button" class="btn btn-link p-0" data-bs-toggle="popover" data-bs-html="true" data-bs-content="
                            <button data-bs-toggle='modal' data-bs-target='#addRoomModal' id='updateRoomBtn' class='btn btn-outline-warning btn-sm w-100 mb-2'>
                                <i class='bi bi-pencil'></i> Update Room
                            </button>
                            <button id='deleteRoomBtn' data-bs-toggle='modal' data-bs-target='#deleteRoomModal' class='btn btn-outline-danger btn-sm w-100'>
                                <i class='bi bi-trash'></i> Delete Room
                            </button>">
                    <i class="bi bi-three-dots"></i> <!-- Vertical Ellipsis Icon -->
                </button>
            </td>
        </tr>
        <tr>
            <td>102</td>
            <td>Double</td>
            <td>2</td>
            <td>Occupied</td>
            <td>
                <button type="button" class="btn btn-link p-0" data-bs-toggle="popover" data-bs-html="true" data-bs-content="
                            <button id='updateRoomBtn' class='btn btn-outline-warning btn-sm w-100 mb-2'>
                                <i class='bi bi-pencil'></i> Update Room
                            </button>
                            <button data-bs-toggle='modal' data-bs-target='#deleteRoomModal' class='btn btn-outline-danger btn-sm w-100'>
                                <i class='bi bi-trash'></i> Delete Room
                            </button>">
                    <i class="bi bi-three-dots"></i>
                </button>
            </td>
        </tr>
    </tbody>
</table>



<?= $this->include('sites/create.php') ?>
<?= $this->include('sites/delete.php') ?>
<?= $this->endSection() ?>