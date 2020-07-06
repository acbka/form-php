<body>
<header class="px-1 px-xl-5">
   <nav class="navbar navbar-expand-lg px-0 px-xl-4 py-1 py-xl-2 main-menu">
      <a class="navbar-brand big_logo" href="index.php"><img class="logo-dark" src="img/logo-dark.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
         aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"><i data-feather="menu"></i></span>
      </button>
      <a class="navbar-brand small_logo" href="index.php"><img src="img/logo-icon.png" width="58"></a>
      <div class="collapse navbar-collapse" id="navbarNav">
         <ul class="navbar-nav">
            <li class="nav-item">
               <a class="nav-link" href="https://demo.createx.studio/around/index.html">Demos <span
                  class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="https://demo.createx.studio/around/demo-mobile-app.html">Templates</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="https://demo.createx.studio/around/contacts-v1.html">Original</a>
            </li>
            <li class="nav-item">
               <a <?php echo ($page == 'form') ? "class='nav-link active'" : ""; ?>  class="nav-link" href="form.php">Form</a>
            </li>
         </ul>
      </div>
      <div class="login d-flex align-items-center mr-1 ml-lg-auto">
         <a class="btn btn-primary main-btn go-form" href="form.php">Form</a>
      </div>
   </nav>
</header>