<div class="c-subheader px-3">
    <ol class="breadcrumb border-0 m-0">
        <li class="breadcrumb-item">Home</li>
    </ol>
</div>
<main class="c-main">
    <div class="container-fluid">
        <div class="fade-in">
            <div class="row">
                <div class="col-md-3">
                    <a href="?page=alumni" style="text-decoration: none;">
                        <div class="card text-white bg-gradient-danger">
                            <div class="card-body">
                                <div class="text-muted text-right mb-4">
                                    <svg class="c-icon c-icon-3xl">
                                        <use xlink:href="./coreui/icons/sprites/free.svg#cil-user"></use>
                                    </svg>
                                </div>
                                <div class="text-value-lg"><?= count_table('tbl_alumni') ?></div>
                                <small class="text-muted text-uppercase font-weight-bold">Alumni</small>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>