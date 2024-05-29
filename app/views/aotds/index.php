<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample AOTD</title>
</head>
<body>
    


<?php include "../app/views/include/header.php" ?>

    <div class="redirect-main-content" style="justify-content: center; align-items:center;">
            <div>
                <div class="container mt-5">
                    <div class="d-flex justify-content-between align-items-center">
                        <h2>Artwork of the Day Table</h2>
                        <a href="<?= ROOT ?>/aotds/create" class="btn-primary btn-sm">Add New</a>
                    </div>
                    <table class="table table-striped mt-3">
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Toggle</th>
                        <th>Image</th>
                    </tr>
                    <?php foreach ($aotds as $row) { ?>
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
                            <a href="<?= ROOT ?>/aotds/edit/<?= $row->id ?>" class="btn-success btn-sm">Edit</a>
                            <a href="<?= ROOT ?>/aotds/delete/<?= $row->id ?>" class="btn-danger btn-sm">Delete</a>
                        </td>
                        </tr>
                    <?php } ?>
                    </table>
                </div>
            </div>
    </div>
</body>