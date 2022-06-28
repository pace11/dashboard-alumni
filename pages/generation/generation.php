<div class="c-subheader px-3">
    <ol class="breadcrumb border-0 m-0">
        <li class="breadcrumb-item"><a href="?page=home">Home</a></li>
        <li class="breadcrumb-item active">Generation</li>
    </ol>
</div>
<main class="c-main">
    <div class="container-fluid">
        <div class="fade-in">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="card card-accent-primary">
                        <div class="card-header">Data Generation</div>
                        <div class="card-body">
                            <?php if (get_user_login("username") == "admin") { ?>
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <a href="?page=generationadd" class="btn btn-primary"><span class="fa fa-plus-circle"></span> Add Data Generation</a>
                                    </div>
                                </div>
                            <?php } ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="example table table-bordered table-striped table-sm">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Year Generation</th>
                                                <th>Description</th>
                                                <?php if (get_user_login("username") == "admin") { ?>
                                                    <th>Action</th>
                                                <?php } ?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        $no = 1;
                                        $q = mysqli_query($conn, "SELECT * FROM tbl_generation WHERE deleted_at IS NULL ORDER BY updated_at DESC");
                                        while($data=mysqli_fetch_array($q)){ ?>
                                            <tr>
                                                <td><?= $no ?></td>
                                                <td><?= !empty($data['year_generation']) ? $data['year_generation'] : '-' ?></td>
                                                <td><?= get_count_already_working($data['id']) ?></td>
                                                <?php if (get_user_login("username") == "admin") { ?>
                                                    <td>
                                                        <a href="?page=generationedit&id=<?= $data["id"] ?>" class="btn btn-info"><i class="fa fa-edit"></i> edit</a>
                                                        <a href="?page=generationdelete&id=<?= $data["id"] ?>" class="btn btn-danger"><i class="fa fa-trash"></i> delete</a>
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