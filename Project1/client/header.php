<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="./">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTsSjL7R5lglfwENuO8oWtoMBPn_5jVfZuCTA&s" height="40">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">

      <ul class="navbar-nav me-auto">

        <li class="nav-item">
          <a class="nav-link active" href="./">Home</a>
        </li>

        <?php if(!empty($_SESSION['user']['username'])) { ?>
          <li class="nav-item">
            <a class="nav-link" href="./server/requests.php?logout=true">
              Logout (<?php echo ucfirst($_SESSION['user']['username']); ?>)
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="?ask=true">Ask A Question</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="?u-id=<?php echo $_SESSION['user']['user_id']; ?>">
              My Questions
            </a>
          </li>
        <?php } ?>

        <?php if(empty($_SESSION['user']['username'])) { ?>
          <li class="nav-item">
            <a class="nav-link" href="?login=true">Login</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="?signup=true">Signup</a>
          </li>
        <?php } ?>

        <li class="nav-item">
          <a class="nav-link" href="?latest=true">Latest Questions</a>
        </li>

      </ul>

      <form class="d-flex">
        <input class="form-control me-2" type="search" name="search" placeholder="Search questions">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>

    </div>
  </div>
</nav>
