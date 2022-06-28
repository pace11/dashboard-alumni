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
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="card card-accent-primary">
                        <div class="card-header">Add Data Alumni</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <?php 
                                        if (isset($_POST['submit'])){
                                            $id             = $uuid4->toString();
                                            $first_name     = $_POST['first_name'];
                                            $middle_name    = $_POST['middle_name'];
                                            $family_name    = $_POST['family_name'];
                                            $email          = $_POST['email'];
                                            $phone          = $_POST['phone'];
                                            $gender         = $_POST['gender'];
                                            $generation     = $_POST['generation'];
                                            $dob            = $_POST['dob'];
                                            $age            = $_POST['age'];
                                            $marital        = $_POST['marital'];
                                            $pob            = $_POST['pob'];
                                            $education      = $_POST['education'];
                                            $employment     = $_POST['employment'];
                                            $address        = $_POST['address'];
                                            $religion       = $_POST['religion'];
                                            $profession     = $_POST['profession'];
                                            $office         = $_POST['office'];
                                            $job_desc       = $_POST['job_desc'];
                                            $office_address = $_POST['office_address'];
                                            $datenow        = date('Y-m-d H:i:s');
                    
                                            $insert = mysqli_query($conn, "INSERT INTO tbl_alumni SET
                                                                        id                           = '$id',
                                                                        id_generation                = NULLIF('$generation', ''),
                                                                        first_name                   = NULLIF('$first_name', ''),
                                                                        middle_name                  = NULLIF('$middle_name', ''),
                                                                        family_name                  = NULLIF('$family_name', ''),
                                                                        phone                        = NULLIF('$phone', ''),
                                                                        gender                       = NULLIF('$gender', ''),
                                                                        date_of_birth                = NULLIF('$dob', ''),
                                                                        age                          = NULLIF('$age', ''),
                                                                        marital_status               = NULLIF('$marital', ''),
                                                                        place_of_birth               = NULLIF('$pob', ''),
                                                                        highest_level_of_education   = NULLIF('$education', ''),
                                                                        current_employment           = NULLIF('$employment', ''),
                                                                        email                        = NULLIF('$email', ''),
                                                                        address                      = NULLIF('$address', ''),
                                                                        religion                     = NULLIF('$religion', ''),
                                                                        profession                   = NULLIF('$profession', ''),
                                                                        office                       = NULLIF('$office', ''),
                                                                        job_desc                     = NULLIF('$job_desc', ''),
                                                                        office_address               = NULLIF('$office_address', ''),
                                                                        created_at                   = '$datenow',
                                                                        updated_at                   = '$datenow'") or die (mysqli_error($conn));
                                            
                                            if ($insert) {
                                                echo    '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Success!</strong> Add data.'.
                                                            '<button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>'.
                                                        '</div>';
                                                echo "<meta http-equiv='refresh' content='2;
                                                url=?page=alumni'>";
                                            }
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>