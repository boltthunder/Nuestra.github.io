<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Register Student</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body sm:flex p-4">
                <form action="config/Insert-Data/insert.php" method="post" id="student_form">
                    <div class="grid justify-normal">
                        <!-- <div class="grid justify-center">
                            
                            <img src="#" class="img-responsive">
                            <input type="file" name="" id="">
                        </div> -->
                        <div class="form-group grid sm:grid-cols-3 gap-3 ">
                            <div class="form-group">
                                <label for="fname">First Name</label>
                                <input type="text" class="form-control" name="fname" id="fname" required>
                                <span id="error"></span>
                            </div>

                            <div class="form-group">
                                <label for="mname">Middle Name</label>
                                <input type="text" class="form-control" name="mname" id="mname">
                            </div>

                            <div class="form-group">
                                <label for="lname">Last Name</label>
                                <input type="text" class="form-control" name="lname" id="lname" required>
                                <span id="error"></span>
                            </div>
                        </div>

                        <div class="form-group grid sm:grid-cols-1">
                            <div class="form-group">
                                <label for="contact">Phone no.</label>
                                <input type="text" name="contact" name="contact" id="contact" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" name="status" id="status" value="enrolled" hidden class="form-control">
                            </div>
                        </div>

                        <div class="form-group grid sm:grid-cols-3 gap-3">
                            <div class="form-group">
                                <label for="age">Age</label>
                                <input type="text" name="age" class="form-control" maxlength="3" id="age" required>
                                <span id="error"></span>
                            </div>
                            <div class="form-group">
                                <label for="birthdate">Birth Date</label>
                                <input type="date" class="form-control text-center" name="bdate" id="birthdate"
                                    required>
                                <span id="error"></span>
                            </div>
                            <div class="form-group">
                                <label for="sex">Gender</label>
                                <select name="sex" id="sex" class="form-control text-center" required>
                                    <option selected disabled>Select</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                <span id="error"></span>
                            </div>
                        </div>

                        <div class="form-group grid sm:grid-cols-3 gap-3">
                            <div class="form-group">
                                <label for="lrn">LRN No.</label>
                                <input type="text" class="form-control" maxlength="12" id="lrn" name="lrn" required>
                            </div>

                            <div class="form-group">
                                <label for="grade">Grade Level</label>
                                <select id="grade" class="form-control text-center" name="grade" required>
                                    <option disabled selected>Please Select</option>
                                    <option value="Grade-7">Grade-7</option>
                                    <option value="Grade-8">Grade-8</option>
                                    <option value="Grade-9">Grade-9</option>
                                    <option value="Grade-10">Grade-10</option>
                                    <option value="Grade-11">Grade-11</option>
                                    <option value="Grade-12">Grade-12</option>
                                </select>
                            </div>

                            <div class="form-group" id="section">
                                <label for="Section">Section</label>
                                <select id="Section" class="form-control text-center" name="section" required>
                                    <option disabled selected>Please Select</option> 
                                </select>
                            </div>
                        </div>

                        <div class="grid sm:grid-cols-2 gap-3">
                            <div class="form-group">
                                <label for="province">Province</label>
                                <select name="province" id="province" class="form-control text-center" required>
                                    <!-- <option disabled selected>Please Select</option> -->
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="city">City/Municipal</label>
                                <select name="city" id="city" class="form-control" required>
                                </select>
                            </div>

                        </div>

                        <div class="grid sm:grid-cols-3 gap-3">
                            <div class="form-group">
                                <label for="street">Street</label>
                                <input type="text" class="form-control" id="street" name="street" required>
                            </div>
                            <div class="form-group">
                                <label for="brgy">Barangay</label>
                                <select id="brgy" class="form-control" name="brgy" required>
                                    <option value="">Please Select</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="zipcode">Zip Code</label>
                                <select name="zipcode" id="zipcode" class="form-control text-center" required>
                                    <option selected disabled>Please Select</option>
                                </select>
                            </div>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <input type="submit" name="student-reg" value="Register" class="btn btn-primary">
            </div>
        </div>
    </div>
</div>

