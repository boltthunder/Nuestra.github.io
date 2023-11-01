
<!-- MODAL FOR ADDING SECTION PER LEVEL -->
<div class="modal fade" id="add-section" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Section</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body sm:flex p-4">
                <form action="config/Insert-Data/insert.php" method="post">
                    <div class="grid sm:grid-cols-2 gap-3">
                        <div class="form-group">
                            <label for="YearLevel">Year Level</label>
                            <select name="grade-sec" id="YearLevel" class="form-control" required>
                                <option value="">Please Select Year Level</option>
                                <option value="Grade-7">Grade-7</option>
                                <option value="Grade-8">Grade-8</option>
                                <option value="Grade-9">Grade-9</option>
                                <option value="Grade-10">Grade-10</option>
                                <option value="Grade-11">Grade-11</option>
                                <option value="Grade-12">Grade-12</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="Section">Enter New Section</label>
                            <input type="text" id="Section" name="section" class="form-control"
                                placeholder="Enter new Section. . . ." required>
                        </div>

                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" name="add-section" value="Add"></form>
            </div>
        </div>
    </div>
</div>