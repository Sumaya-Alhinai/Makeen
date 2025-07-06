<?php
require 'db/db_Connection.php'; // Connect to the database

$todos = []; // Array to store todo tasks

// Query to fetch todos with their associated category name, ordered by ID descending
$sql = "SELECT todos.*, category.name AS category_name
 FROM todos 
JOIN category ON todos.category_id = category.id 
 ORDER BY todos.id DESC";

$result = $conn->query($sql);

// Check if there are results
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $todos[] = $row; // Store each row into the array
    }
} else {
    // If there is an error in the query
    echo "<p class='text-danger'>Error: " . $conn->error . "</p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Code with Soma</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <style>
    .carousel-item img {
      height: 590px; /* Slider image height */
      object-fit: cover; /* Cover the container with the image */
    }
  </style>
</head>
<body>

<!-- Include navbar -->
<?php include 'include/navbar.php'; ?>

<!-- Image Slider -->
<div id="mySlider" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="3000">
      <img src="static/img/12.jpg" class="d-block w-100" alt="Image 1">
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="static/img/11.jpg" class="d-block w-100" alt="Image 2">
    </div>
  </div>

  <!-- Slider controls -->
  <button class="carousel-control-prev" type="button" data-bs-target="#mySlider" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#mySlider" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- Add ToDo button -->
<div class="container my-4">
  <a class="btn btn-success mb-3" href="create.php">➕ Add ToDo</a>
</div>

<!-- Display todos as cards -->
<div class="container my-5">
  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
    <?php if (count($todos) > 0): ?>
      <?php foreach ($todos as $item): ?>
        <div class="col">
          <div class="card h-100 shadow-sm border-primary">
            <div class="card-body">
              <h5 class="card-title"><?= htmlspecialchars($item['title']) ?></h5>
              <p class="card-text">
                <strong>Description:</strong> <?= htmlspecialchars($item['description']) ?><br>
                <strong>Status:</strong> <?= $item['is_completed'] ? '✅ Completed' : '❌ Not Completed' ?><br>
                <strong>Category:</strong> <?= htmlspecialchars($item['category_name']) ?><br>
                <strong>Created At:</strong> <?= $item['created_at'] ?>
              </p>
            </div>
            <div class="card-footer d-flex justify-content-between">
              <a href="edit.php?id=<?= $item['id'] ?>" class="btn btn-sm btn-primary">✏️ Edit</a>
              <a href="delete.php?id=<?= $item['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this task?')">🗑 Delete</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    <?php else: ?>
      <p class="text-center text-muted">No tasks available.</p>
    <?php endif; ?>
  </div>
</div>

<!-- Include footer -->
<?php include 'include/footer.php'; ?>

<!-- Bootstrap JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
