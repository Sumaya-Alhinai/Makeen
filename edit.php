<?php
require 'db/db_Connection.php';

$id = $_GET['id'] ?? 0;

$todo = $conn->query("SELECT * FROM todos WHERE id = $id")->fetch_assoc();
$categories = $conn->query("SELECT * FROM category");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $desc = $_POST['description'];
    $category_id = $_POST['category_id'];
    $is_completed = isset($_POST['is_completed']) ? 1 : 0;

    $conn->query("UPDATE todos SET title='$title', description='$desc', category_id=$category_id, is_completed=$is_completed WHERE id = $id");
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8" />
  <title> Update ToDo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
<div class="container mt-4">
  <h2>Update </h2>
  <form method="post">
    <div class="mb-3">
      <label class="form-label">Title </label>
      <input type="text" class="form-control" name="title" value="<?= $todo['title'] ?>" required>
    </div>
    <div class="mb-3">
      <label class="form-label">Description</label>
      <textarea class="form-control" name="description"><?= $todo['description'] ?></textarea>
    </div>
    <div class="mb-3">
      <label class="form-label">Category</label>
      <select name="category_id" class="form-select">
        <?php while($cat = $categories->fetch_assoc()): ?>
          <option value="<?= $cat['id'] ?>" <?= $cat['id'] == $todo['category_id'] ? 'selected' : '' ?>>
            <?= $cat['name'] ?>
          </option>
        <?php endwhile; ?>
      </select>
    </div>
    <div class="mb-3 form-check">
      <input class="form-check-input" type="checkbox" name="is_completed" <?= $todo['is_completed'] ? 'checked' : '' ?>>
      <label class="form-check-label">Task is completed</label>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="index.php" class="btn btn-secondary">Back</a>
  </form>
</div>
</body>
</html>
