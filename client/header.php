<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
        <img class="w-50" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTsSjL7R5lglfwENuO8oWtoMBPn_5jVfZuCTA&s"/>
    </a>
    
    <div class="collapse navbar-collapse" id="navbarNav ">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="./">Home</a>
        </li>
        <?php
        if(!empty($_SESSION['user']['username']) && $_SESSION['user']['username'] ){ ?>
           <li class="nav-item">
          <a class="nav-link" href="./server/requests.php?logout=true">Logout</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="?ask=true">Ask  A Question</a>
        </li>
        <?php } ?>

           <?php
        if(empty($_SESSION['user']['username']) ){ ?>
          <li class="nav-item">
          <a class="nav-link" href="?login=true">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?signup=true">Signup</a>
        </li>
        <?php } ?>
        
        <li class="nav-item">
          <a class="nav-link" href="#">Category</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Latest Questions</a>
        </li>
      </ul>
    </div>
  </div>
</nav>