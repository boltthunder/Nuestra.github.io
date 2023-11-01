<div class="modal fade" id="subject" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" style="width:fit-content">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add School Yearn</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body grid justify-center p-4">
                <form action="config/Insert-Data/insert.php" method="post">
                    <div class="">
                        <div class="form-group">
                            <label for="sub">Subject</label>
                            <input type="text" id="sub" name="subject-reg" class="form-control" placeholder="Enter Subject. . . . ." required>
                        </div>
                    </div>
                </div>
            <div class="modal-footer grid grid-cols-2">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <input type="submit" name="add-subject" class="btn btn-primary" value="Submit"></form>
            </div>
        </div>
    </div>
</div>