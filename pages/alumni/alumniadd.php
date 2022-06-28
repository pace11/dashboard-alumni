<div class="c-subheader px-3">
    <ol class="breadcrumb border-0 m-0">
        <li class="breadcrumb-item"><a href="?page=home">Home</a></li>
        <li class="breadcrumb-item active"><a href="?page=alumni">Alumni</a></li>
        <li class="breadcrumb-item active">Add Data</li>
    </ol>
</div>
<main class="c-main">
    <div class="container-fluid">
        <div class="fade-in">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="card card-accent-primary">
                        <div class="card-header">Add Data Alumni</div>
                        <form action="?page=alumniaddpro" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">First Name</label>
                                            <input class="form-control" type="text" placeholder="First Name ..." name="first_name" autocomplete="OFF" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Middle Name</label>
                                            <input class="form-control" type="text" placeholder="Middle Name ..." name="middle_name" autocomplete="OFF" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Family Name</label>
                                            <input class="form-control" type="text" placeholder="Family Name ..." name="family_name" autocomplete="OFF" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Email</label>
                                            <input class="form-control" type="text" placeholder="Email ..." name="email" autocomplete="OFF" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Phone</label>
                                            <input class="form-control" type="text" placeholder="Phone ..." name="phone" autocomplete="OFF" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Gender</label>
                                            <select class="form-control" name="gender">
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Year Generation</label>
                                            <select class="form-control" name="generation">
                                            <?php 
                                                $sql = mysqli_query($conn, "SELECT * FROM tbl_generation WHERE deleted_at IS NULL");
                                                while($datas = mysqli_fetch_array($sql)){
                                                    echo '<option value="'.$datas['id'].'">'.$datas['year_generation'].'</option>';
                                                }
                                            ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Date Of Birth</label>
                                            <input class="form-control" type="date" placeholder="Date Of Birth ..." name="dob" autocomplete="OFF">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Age</label>
                                            <input class="form-control" type="number" placeholder="Age ..." name="age" autocomplete="OFF" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Marital Status</label>
                                            <select class="form-control" name="marital">
                                                <option value="single">Single</option>
                                                <option value="married">Married</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Place Of Birth</label>
                                            <input class="form-control" type="text" placeholder="Place Of Birth ..." name="pob" autocomplete="OFF" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Highest Level Of Education</label>
                                            <input class="form-control" type="text" placeholder="Highest Level Of Education ..." name="education" autocomplete="OFF" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Current Employment</label>
                                            <input class="form-control" type="text" placeholder="Current Employment ..." name="employment" autocomplete="OFF" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Address</label>
                                            <textarea class="form-control" name="address" rows="3" placeholder="Address ..."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Religion</label>
                                            <select class="form-control" name="religion">
                                                <option value="Kristen Protestan">Kristen Protestan</option>
                                                <option value="Kristen Katolik">Kristen Katolik</option>
                                                <option value="Islam">Islam</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Budha">Budha</option>
                                                <option value="Konghucu">Konghucu</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Profession</label>
                                            <input class="form-control" type="text" placeholder="Current Profession ..." name="profession" autocomplete="OFF" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Office (Instansi/Yayasan/Organisasi)</label>
                                            <input class="form-control" type="text" placeholder="Office ..." name="office" autocomplete="OFF" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Job Desc</label>
                                            <input class="form-control" type="text" placeholder="Job Desc ..." name="job_desc" autocomplete="OFF" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Office Address</label>
                                            <textarea class="form-control" name="office_address" rows="3" placeholder="Office Address ..."></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <input type="submit" name="submit" class="btn btn-primary" value="Save">
                                <a href="?page=alumni" class="btn btn-secondary">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>