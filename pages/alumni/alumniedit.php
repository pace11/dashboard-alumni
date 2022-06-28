<?php
    $g = mysqli_query($conn, "SELECT * FROM tbl_alumni
                            JOIN tbl_generation ON tbl_alumni.id_generation=tbl_generation.id
                            WHERE tbl_alumni.id='$_GET[id]'");
    $data = mysqli_fetch_array($g);
?>

<div class="c-subheader px-3">
    <ol class="breadcrumb border-0 m-0">
        <li class="breadcrumb-item"><a href="?page=home">Home</a></li>
        <li class="breadcrumb-item active"><a href="?page=alumni">Alumni</a></li>
        <li class="breadcrumb-item active">Edit Data</li>
    </ol>
</div>
<main class="c-main">
    <div class="container-fluid">
        <div class="fade-in">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="card card-accent-primary">
                        <div class="card-header">Edit Data Alumni</div>
                        <form action="?page=alumnieditpro" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">First Name</label>
                                            <input class="form-control" type="text" placeholder="First Name ..." name="first_name" autocomplete="OFF" value="<?= $data['first_name'] ?>" required>
                                            <input class="form-control" type="hidden" name="id" value="<?= $_GET['id'] ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Middle Name</label>
                                            <input class="form-control" type="text" placeholder="Middle Name ..." name="middle_name" autocomplete="OFF" value="<?= $data['middle_name'] ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Family Name</label>
                                            <input class="form-control" type="text" placeholder="Family Name ..." name="family_name" autocomplete="OFF" value="<?= $data['family_name'] ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Email</label>
                                            <input class="form-control" type="text" placeholder="Email ..." name="email" autocomplete="OFF" value="<?= $data['email'] ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Phone</label>
                                            <input class="form-control" type="text" placeholder="Phone ..." name="phone" autocomplete="OFF" value="<?= $data['phone'] ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Gender</label>
                                            <select class="form-control" name="gender">
                                                <option value="male" <?= $data['gender'] == 'male' ? 'selected' : '' ?>>Male</option>
                                                <option value="female" <?= $data['gender'] == 'female' ? 'selected' : '' ?>>Female</option>
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
                                                while($datas = mysqli_fetch_array($sql)){ ?>
                                                    <option value="<?= $datas['id'] ?>" <?= $datas['id'] == $data['id_generation'] ? 'selected' : '' ?>><?= $datas['year_generation'] ?></option>
                                            <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Date Of Birth</label>
                                            <input class="form-control" type="date" placeholder="Date Of Birth ..." name="dob" value="<?= $data['date_of_birth'] ?>" autocomplete="OFF" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Age</label>
                                            <input class="form-control" type="number" placeholder="Age ..." name="age" autocomplete="OFF" value="<?= $data['age'] ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Marital Status</label>
                                            <select class="form-control" name="marital">
                                                <option value="single" <?= $data['marital_status'] == 'single' ? 'selected' : '' ?>>Single</option>
                                                <option value="married" <?= $data['gender'] == 'married' ? 'selected' : '' ?>>Married</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Place Of Birth</label>
                                            <input class="form-control" type="text" placeholder="Place Of Birth ..." name="pob" autocomplete="OFF" value="<?= $data['place_of_birth'] ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Highest Level Of Education</label>
                                            <input class="form-control" type="text" placeholder="Highest Level Of Education ..." name="education" autocomplete="OFF" value="<?= $data['highest_level_of_education'] ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Current Employment</label>
                                            <input class="form-control" type="text" placeholder="Current Employment ..." name="employment" autocomplete="OFF" value="<?= $data['current_employment'] ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Address</label>
                                            <textarea class="form-control" name="address" rows="3" placeholder="Address ..."><?= $data['address'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Religion</label>
                                            <select class="form-control" name="religion">
                                                <option value="Kristen Protestan" <?= $data['religion'] == 'Kristen Protestan' ? 'selected' : '' ?>>Kristen Protestan</option>
                                                <option value="Kristen Katolik" <?= $data['religion'] == 'Kristen Katolik' ? 'selected' : '' ?>>Kristen Katolik</option>
                                                <option value="Islam" <?= $data['religion'] == 'Islam' ? 'selected' : '' ?>>Islam</option>
                                                <option value="Hindu" <?= $data['religion'] == 'Hindu' ? 'selected' : '' ?>>Hindu</option>
                                                <option value="Budha" <?= $data['religion'] == 'Budha' ? 'selected' : '' ?>>Budha</option>
                                                <option value="Konghucu" <?= $data['religion'] == 'Konghucu' ? 'selected' : '' ?>>Konghucu</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Profession</label>
                                            <input class="form-control" type="text" placeholder="Current Profession ..." name="profession" value="<?= $data['profession'] ?>" autocomplete="OFF" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Office (Instansi/Yayasan/Organisasi)</label>
                                            <input class="form-control" type="text" placeholder="Office ..." name="office" value="<?= $data['office'] ?>" autocomplete="OFF" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Job Desc</label>
                                            <input class="form-control" type="text" placeholder="Job Desc ..." name="job_desc" value="<?= $data['job_desc'] ?>" autocomplete="OFF" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Office Address</label>
                                            <textarea class="form-control" name="office_address" rows="3" placeholder="Office Address ..."><?= $data['office_address'] ?></textarea>
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