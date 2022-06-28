<div class="c-subheader px-3">
    <ol class="breadcrumb border-0 m-0">
        <li class="breadcrumb-item"><a href="?page=home">Home</a></li>
        <li class="breadcrumb-item active"><a href="?page=generation">Generation</a></li>
        <li class="breadcrumb-item active">Add Data</li>
    </ol>
</div>
<main class="c-main">
    <div class="container-fluid">
        <div class="fade-in">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="card card-accent-primary">
                        <div class="card-header">Add Data Generation</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <?php 
                                        if (isset($_POST['submit'])){
                                            $id             = $uuid4->toString();
                                            $year           = $_POST['year'];
                                            $datenow        = date('Y-m-d H:i:s');
                    
                                            $insert = mysqli_query($conn, "INSERT INTO tbl_generation SET
                                                                        id                 = '$id',
                                                                        year_generation    = NULLIF('$year', ''),
                                                                        created_at         = '$datenow',
                                                                        updated_at         = '$datenow'") or die (mysqli_error($conn));
                                            
                                            if ($insert) {
                                                echo    '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Success!</strong> Add data success.'.
                                                            '<button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>'.
                                                        '</div>';
                                                echo "<meta http-equiv='refresh' content='2;
                                                url=?page=generation'>";
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