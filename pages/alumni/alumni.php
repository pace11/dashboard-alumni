<div class="c-subheader px-3">
    <ol class="breadcrumb border-0 m-0">
        <li class="breadcrumb-item"><a href="?page=home">Home</a></li>
        <li class="breadcrumb-item active">Alumni</li>
    </ol>
</div>
<main class="c-main">
    <div class="container-fluid">
        <div class="fade-in">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="card card-accent-primary">
                        <div class="card-header">Data Alumni</div>
                        <div class="card-body">
                            <?php if (get_user_login("username") == "admin") { ?>
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                    <a href="?page=alumniadd" class="btn btn-primary"><span class="fa fa-plus-circle"></span> Add Data Alumni</a>
                                    </div>
                                </div>
                            <?php } ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="example table table-responsive table-bordered table-striped table-sm">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>First Name</th>
                                                <th>Middle Name</th>
                                                <th>Family Name</th>
                                                <th>Phone</th>
                                                <th>Gender</th>
                                                <th>Date Of Birth</th>
                                                <th>Email</th>
                                                <th>Age</th>
                                                <th>Year Generation</th>
                                                <th>Marital Status</th>
                                                <th>Place Of Birth</th>
                                                <th>Highest Level Of Education</th>
                                                <th>Current Employment</th>
                                                <th>Address</th>
                                                <th>Religion</th>
                                                <th>Profession</th>
                                                <th>Office</th>
                                                <th>Job Desc</th>
                                                <th>Office Address</th>
                                                <?php if (get_user_login("username") == "admin") { ?>
                                                    <th>Action</th>
                                                <?php } ?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        $no = 1;
                                        $q = mysqli_query($conn, "SELECT * FROM tbl_alumni
                                                                JOIN tbl_generation ON tbl_alumni.id_generation=tbl_generation.id
                                                                WHERE tbl_alumni.deleted_at IS NULL
                                                                ORDER BY tbl_alumni.updated_at DESC");
                                        while($data=mysqli_fetch_array($q)){ ?>
                                            <tr>
                                                <td><?= $no ?></td>
                                                <td><?= !empty($data['first_name']) ? $data['first_name'] : '-' ?></td>
                                                <td><?= !empty($data['middle_name']) ? $data['middle_name'] : '-' ?></td>
                                                <td><?= !empty($data['family_name']) ? $data['family_name'] : '-' ?></td>
                                                <td><?= !empty($data['phone']) ? $data['phone'] : '-' ?></td>
                                                <td><?= !empty($data['gender']) ? $data['gender'] : '-' ?></td>
                                                <td><?= !empty($data['date_of_birth']) ? date_ind($data['date_of_birth']) : '-' ?></td>
                                                <td><?= !empty($data['email']) ? $data['email'] : '-' ?></td>
                                                <td><?= !empty($data['age']) ? $data['age'] : '-' ?></td>
                                                <td><?= !empty($data['year_generation']) ? $data['year_generation'] : '-' ?></td>
                                                <td><?= !empty($data['marital_status']) ? $data['marital_status'] : '-' ?></td>
                                                <td><?= !empty($data['place_of_birth']) ? $data['place_of_birth'] : '-' ?></td>
                                                <td><?= !empty($data['highest_level_of_education']) ? $data['highest_level_of_education'] : '-' ?></td>
                                                <td><?= !empty($data['current_employment']) ? $data['current_employment'] : '-' ?></td>
                                                <td><?= !empty($data['address']) ? $data['address'] : '-' ?></td>
                                                <td><?= !empty($data['religion']) ? $data['religion'] : '-' ?></td>
                                                <td><?= !empty($data['profession']) ? $data['profession'] : '-' ?></td>
                                                <td><?= !empty($data['office']) ? $data['office'] : '-' ?></td>
                                                <td><?= !empty($data['job_desc']) ? $data['job_desc'] : '-' ?></td>
                                                <td><?= !empty($data['office_address']) ? $data['office_address'] : '-' ?></td>
                                                <?php if (get_user_login("username") == "admin") { ?>
                                                    <td>
                                                        <a href="?page=alumniedit&id=<?= $data[0] ?>" class="btn btn-info "><i class="fa fa-edit"></i> edit</a>
                                                        <a href="?page=alumnidelete&id=<?= $data[0] ?>" class="btn btn-danger " style="width: 90px;"><i class="fa fa-trash"></i> delete</a>
                                                    </td>
                                                <?php } ?>
                                            </tr>
                                        <?php $no++; } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>