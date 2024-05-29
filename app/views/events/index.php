<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample Event</title>
</head>
<body>
    


<?php include "../app/views/include/header.php" ?>

    <div class="redirect-main-content" style="justify-content: center; align-items:center;">
            <div>
                <div class="container mt-5">
                    <div class="d-flex justify-content-between align-items-center">
                        <h2>List of Events</h2>
                        <a href="<?= ROOT ?>/events/create" class="btn-primary btn-sm">Add New</a>
                    </div>
                    <table class="table table-striped mt-3">
                    <tr>
                        <th>Event ID</th>
                        <th>Event Title</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th></th>
                    </tr>
                    <?php foreach ($events as $row) { ?>
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
                            <img src="data:image/jpeg;base64,'.base64_encode($row->img()) .'" />
                        </td>
                        <td style="display: flex;">

                            <a href="<?= ROOT ?>/events/edit/<?= $row->id ?>" class="btn-success btn-sm" style="margin: 1%;">Edit</a>

                            <a href="<?= ROOT ?>/events/delete/<?= $row->id ?>" class="btn-danger btn-sm" style="margin: 1%;">Delete</a>
                        </td>
                        </tr>
                    <?php } ?>
                    </table>
                </div>
            </div>
    </div>
</body>