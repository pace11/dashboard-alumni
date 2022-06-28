<?php
    $g = mysqli_query($conn, "SELECT * FROM tbl_generation WHERE id='$_GET[id]'");
    $data = mysqli_fetch_array($g);
?>

<div class="c-subheader px-3">
    <ol class="breadcrumb border-0 m-0">
        <li class="breadcrumb-item"><a href="?page=home">Home</a></li>
        <li class="breadcrumb-item active"><a href="?page=generation">Generation</a></li>
        <li class="breadcrumb-item active">Edit Data Generation</li>
    </ol>
</div>
<main class="c-main">
    <div class="container-fluid">
        <div class="fade-in">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="card card-accent-primary">
                        <div class="card-header">Edit Data Generation</div>
                        <form action="?page=generationeditpro" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="name">Year Generation</label>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input class="form-control" type="text" placeholder="Year generation ex: 2019-2020" name="year" autocomplete="OFF" value="<?= $data['year_generation'] ?>" required>
                                                    <input type="hidden" name="id" value="<?= $data['id'] ?>" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <input type="submit" name="submit" class="btn btn-primary" value="Save">
                                <a href="?page=generation" class="btn btn-secondary">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>