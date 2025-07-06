<!-- رابط Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- رابط Google Fonts لتغيير الخط -->
<link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">

<style>
  .custom-navbar {
    background-color: #0d3b66 !important; /* أزرق داكن */
    font-family: 'Cairo', sans-serif; /* تغيير الخط */
  }

  .custom-navbar .nav-link,
  .custom-navbar .navbar-brand,
  .custom-navbar .dropdown-item {
    color: white !important;
  }

  .custom-navbar .nav-link:hover,
  .custom-navbar .dropdown-item:hover {
    color: #ffd700 !important; /* لون ذهبي عند التمرير */
  }

  .custom-navbar .dropdown-menu {
    background-color: #0d3b66;
  }

  .custom-navbar .dropdown-divider {
    border-top: 1px solid #ffffff;
  }
</style>

<nav class="navbar navbar-expand-lg custom-navbar">
  <div class="container-fluid">
    <a class="navbar-brand" >ToDo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
     
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href=" " role="button" data-bs-toggle="dropdown"
           >
            Todos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="create.php">Add new</a></li>
            <li><a class="dropdown-item" href="index.php">View all</a></li>
               </ul>
        </li>
       
     
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
