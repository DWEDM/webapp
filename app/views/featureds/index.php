<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample Featured</title>
</head>
<body>
    


<?php include "../app/views/include/header.php" ?>

    <div class="redirect-main-content" style="justify-content: center; align-items:center;">
            <div>
                <div class="container mt-5">
                    <div class="d-flex justify-content-between align-items-center">
                        <h2>Featured Artworks Table</h2>
                        <a href="<?= ROOT ?>/featureds/create" class="btn-primary">Add New</a>
                    </div>
                    <table class="table table-striped mt-3">
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Toggle</th>
                        <th>Image</th>
                    </tr>
                    <?php foreach ($featureds as $row) { ?>
                        <tr>
                        <td>
                            <?= $row->id ?>
                        </td>
                        <td>
                            <?= $row->title ?>
                        </td>
                        <td>
                            <?= $row->description ?>
                        </td>
                        <td>
                          <?= $row->toggle ?>
                        </td>
                        <td>
                            <img src="data:image/jpeg;base64,'.base64_encode($row->img()) .'" />
                        </td>
                        <td>
                            <a href="<?= ROOT ?>/featureds/edit/<?= $row->id ?>" class="btn-success btn-sm" style="margin: auto;">Edit</a>
                            <a href="<?= ROOT ?>/featureds/delete/<?= $row->id ?>" class="btn-danger btn-sm" style="margin: auto;">Delete</a>
                        </td>
                        </tr>
                    <?php } ?>
                    </table>
                </div>
            </div>
    </div>
</body>