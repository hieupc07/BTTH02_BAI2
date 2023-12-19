<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2>Course List</h2>
    <ul class="list-group">
        <?php foreach ($courses as $course): ?>
            <li class="list-group-item">
                <div class="d-flex justify-content-between align-items-center">
                    <h5><?= $course['title']; ?></h5>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#viewCourseModal<?= $course['id']; ?>">
                        View
                    </button>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="viewCourseModal<?= $course['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="viewCourseModalLabel<?= $course['id']; ?>" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="viewCourseModalLabel<?= $course['id']; ?>">Course Details - <?= $course['title']; ?></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p><strong>Description:</strong> <?= $course['description']; ?></p>
                                <!-- Add more details if needed -->
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
