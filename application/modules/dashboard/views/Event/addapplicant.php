<div class="container">
    <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
        <div class="flex-grow-1">
            <h4 class="fs-18 fw-semibold m-0">Add applicant</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="title">Add Applicant</h4>
                    <p class="category">(*) <?php echo $this->lang->line('dash_gpanel_mfar'); ?></p>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="<?php echo base_url(); ?>dashboard/event/registration" method="post" enctype="multipart/form-data">

                        <input type="hidden" name="registrationID" >

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group py-1 label-floating is-empty">
                                    <label class="form-label">Select Event (*)</label>
                                    <select name="eventid" class="form-control" required>
                                        <option value="">Select Event</option>
                                        <?php foreach ($events as $event) { ?>
                                            <option value="<?php echo $event->eventid; ?>"><?php echo word_limiter($event->eventtitle, 6); ?></option>
                                        <?php } ?>
                                    </select>
                                    <span class="material-input"></span></div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group py-1 label-floating is-empty">
                                    <label class="form-label">First Name (*)</label>
                                    <input type="text" name="fname" class="form-control" required>
                                    <span class="material-input"></span></div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group py-1 label-floating is-empty">
                                    <label class="form-label">Last Name (*)</label>
                                    <input type="text" name="lname" class="form-control" required>
                                    <span class="material-input"></span></div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group py-1 label-floating is-empty">
                                    <label class="form-label">Gender (*)</label>
                                    <select name="gender" class="form-control" required>
                                        <option value="">Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                    <span class="material-input"></span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group py-1 label-floating is-empty">
                                    <label class="form-label">Phone (*)</label>
                                    <input type="text" name="phone" class="form-control" required>
                                    <span class="material-input"></span></div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group py-1 label-floating is-empty">
                                    <label class="form-label">Email (*)</label>
                                    <input type="email" name="email" class="form-control" required>
                                    <span class="material-input"></span></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group py-1 label-floating is-empty">
                                    <label class="form-label">Birth Date (*)</label>
                                    <input type="text" name="birthdate" class="form-control" required>
                                    <span class="material-input"></span></div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group py-1 label-floating is-empty">
                                    <label class="form-label">Nationality (*)</label>
                                    <input type="text" name="nationality" class="form-control" required>
                                    <span class="material-input"></span></div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group py-1 label-floating is-empty">
                                    <label class="form-label">Address (*)</label>
                                    <input type="text" name="address" class="form-control" required>
                                    <span class="material-input"></span></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group py-1 label-floating is-empty">
                                    <label class="form-label">City (*)</label>
                                    <input type="text" name="city" class="form-control" required>
                                    <span class="material-input"></span></div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group py-1 label-floating is-empty">
                                    <label class="form-label">Country (*)</label>
                                    <input type="text" name="country" class="form-control" required>
                                    <span class="material-input"></span></div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group py-1 label-floating is-empty">
                                    <label class="form-label">Postal (*)</label>
                                    <input type="text" name="postal" class="form-control" required>
                                    <span class="material-input"></span></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group py-1 label-floating is-empty">
                                    <label class="form-label">Hotel</label>
                                    <input type="text" name="hotel" class="form-control" >
                                    <span class="material-input"></span></div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group py-1 label-floating is-empty">
                                    <label class="form-label">Room</label>
                                    <input type="text" name="room" class="form-control" >
                                    <span class="material-input"></span></div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group py-1 label-floating is-empty">
                                    <label class="form-label">Seat No</label>
                                    <input type="text" name="seat" class="form-control" >
                                    <span class="material-input"></span></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group py-1 label-floating is-empty">
                                    <label class="form-label">Bus</label>
                                    <input type="text" name="bus" class="form-control" >
                                    <span class="material-input"></span></div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group py-1 label-floating is-empty">
                                    <label class="form-label">Badge Number</label>
                                    <input type="text" name="badge" class="form-control" >
                                    <span class="material-input"></span></div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group py-1 label-floating is-empty">
                                    <label class="form-label">Confirmation</label>
                                    <select name="confirmation" class="form-control">
                                        <option value="">Select Confirmation Type</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                    <span class="material-input"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label for=""> Participant Type (*) </label>
                                <div class="form-group py-1">
                                    <select name="participanttype" class="form-control" required>
                                        <option value="">Select Type</option>
                                        <option value="Qulified">Qulified</option>
                                        <option value="Aids">Aids</option>
                                        <option value="Guests">Guests</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <button id="xxupdateSeminarRegSubmit" type="submit" class="btn btn-primary pull-right">Add Applicant</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>