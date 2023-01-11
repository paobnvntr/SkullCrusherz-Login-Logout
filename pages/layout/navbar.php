<nav class="navbar navbar-expand-lg bg-light " id="navbar">
  <div class="container-fluid">
    <a class="navbar-brand nav-text" href="#">SkullCrusherz</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div>
      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation" href="#home">
          <button class="nav-link nav-text" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true" onclick="location.href='#home'">Home</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link nav-text" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Products</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link nav-text" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">About</button>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link nav-text dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
            <?php echo $_SESSION['logged-user']; ?>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item nav-text" href="#">Profile</a></li>
            <li><a class="dropdown-item nav-text" href="#">Settings</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item nav-text" href="../pages/logout.php">Log Out</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>