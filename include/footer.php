<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Page with Fixed Footer</title>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html, body {
      height: 100%;
      font-family: 'Cairo', sans-serif;
      display: flex;
      flex-direction: column;
    }

    main {
      flex: 1;
      padding: 20px;
      background-color: #f5f5f5;
    }

    footer {
      background-color: #0d3b66;
      color: white;
      text-align: center;
    }

    .social-btn {
      width: 45px;
      height: 45px;
      line-height: 45px;
      display: inline-block;
      text-align: center;
      border-radius: 50%;
      margin: 0 5px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .social-btn:hover {
      transform: scale(1.1);
      box-shadow: 0 0 10px rgba(255,255,255,0.3);
    }

    .footer-copyright {
      background-color: rgba(255, 255, 255, 0.1);
      padding: 10px;
      font-size: 14px;
    }

    .footer-copyright a {
      color: #ffd700;
      text-decoration: none;
    }

    .footer-copyright a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <!-- Main content -->
  <main>
    <h1> </h1>
    <p> </p>
  </main>

  <!-- Footer -->
  <footer>
    <div class="container p-4 pb-0">
      <section class="mb-4">
        <a class="btn social-btn" style="background-color: #3b5998;" href="#"><i class="fab fa-facebook-f text-white"></i></a>
        <a class="btn social-btn" style="background-color: #55acee;" href="#"><i class="fab fa-twitter text-white"></i></a>
        <a class="btn social-btn" style="background-color: #dd4b39;" href="#"><i class="fab fa-google text-white"></i></a>
        <a class="btn social-btn" style="background-color: #ac2bac;" href="#"><i class="fab fa-instagram text-white"></i></a>
        <a class="btn social-btn" style="background-color: #0082ca;" href="#"><i class="fab fa-linkedin-in text-white"></i></a>
        <a class="btn social-btn" style="background-color: #333333;" href="#"><i class="fab fa-github text-white"></i></a>
      </section>
    </div>

    <div class="footer-copyright">
      © 2025 All copyright reserved by:
      <a href="https://yourwebsite.com/">Code with Soma</a>
    </div>
  </footer>

</body>
</html>
