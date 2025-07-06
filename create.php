<?php
require 'db/db_Connection.php';

// إذا تم إرسال الفورم
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $desc = $_POST['description'];
    $category_id = $_POST['category_id'];

    $sql = "INSERT INTO todos (title, description, category_id) VALUES ('$title', '$desc', $category_id)";
    $conn->query($sql);

    header('Location: index.php'); // بعد الإضافة يرجع للصفحة الرئيسية
}

// جلب الفئات من قاعدة البيانات
$categories = $conn->query("SELECT * FROM category");
?>

<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8" />
  <title>Add ToDo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"/>

</head>
<body>
    <!-- Include navbar -->
<?php include 'include/navbar.php'; ?>
<div class="container mt-4">
  <h2>➕ Add New ToDo</h2>
  <form method="post">
    <div class="mb-3">
      <label class="form-label">Title of ToDo</label>
      <input type="text" class="form-control" name="title" required>
    </div>
    <div class="mb-3">
      <label class="form-label">Description</label>
      <textarea class="form-control" name="description"></textarea>
    </div>
    <div class="mb-3">
      <label class="form-label">Category</label>
      <select name="category_id" class="form-select" required>
        <?php while($cat = $categories->fetch_assoc()): ?>
          <option value="<?= $cat['id'] ?>"><?= $cat['name'] ?></option>
        <?php endwhile; ?>
      </select>
    </div>
    <button type="submit" class="btn btn-success">Add</button>
    <a href="index.php" class="btn btn-secondary">Back</a>
  </form>
</div>
<?php include 'include/footer.php'; ?>
</body>
</html>
