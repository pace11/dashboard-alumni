<div class="c-subheader px-3">
    <ol class="breadcrumb border-0 m-0">
        <li class="breadcrumb-item"><a href="?page=home">Home</a></li>
        <li class="breadcrumb-item active"><a href="?page=alumni">Alumni</a></li>
        <li class="breadcrumb-item active">Delete Data</li>
    </ol>
</div>
<main class="c-main">
    <div class="container-fluid">
        <div class="fade-in">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="card card-accent-primary">
                        <div class="card-header">Delete Data Alumni</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                        Sure delete this data ?
                                        <form action="?page=alumnidelete" method="post" enctype="multipart/form-data">
                                            <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
                                            <input type="submit" name="submit" class="btn btn-danger" value="Yes">
                                            <a href="?page=alumni" class="btn btn-primary">No</a>
                                        </form>
                                    </div>
                                    <?php 
                                        if (isset($_POST['submit'])){
                                            $id         = $_POST['id'];
                                            $datenow    = date('Y-m-d H:i:s');
                                            $delete     = mysqli_query($conn, "UPDATE tbl_alumni SET deleted_at = NULLIF('$datenow', '') WHERE id='$id'");
                                            if ($delete){
                                                echo    '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Success!</strong> Delete data.'.
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