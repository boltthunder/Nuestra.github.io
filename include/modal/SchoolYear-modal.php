<div class="modal fade" id="add-academicYear" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add School Yearn</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body sm:flex justify-center p-4">
                <form action="config/Insert-Data/insert.php" method="post">
                    <div class="grid sm:grid-cols-2 gap-3">
                        <div class="form-group">
                            <label for="startDate">Date of Opening</label>
                            <input type="date" id="startDate" class="form-control" name="from_date" required>
                        </div>

                        <div class="form-group">
                            <label for="ClosingDate">Date of Closing</label>
                            <input type="date" id="ClosingDate" class="form-control" name="to_date" required>
                        </div>
                        <input type="text" value="Inactive" class="form-control" name="status" hidden>

                    </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="sub-SchoolYear" class="btn btn-primary">Submit</button></form>
            </div>
        </div>
    </div>
</div>