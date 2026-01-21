<div class="container">
<div class="row">
<div class="col-8">
    <h1 class="heading">Question</h1>

<?php
include("./common/db.php");
$uid    = null;
$cid    = null;
$search = null;
if(isset($_GET['u-id'])){
    $uid = $_GET['u-id'];
}
if(isset($_GET['c-id'])){
    $cid = $_GET['c-id'];
}
if(isset($_GET['search'])){
    $search = $_GET['search'];
}
if($cid !== null){
    $query = "SELECT * FROM questions WHERE category_id = $cid";
}else if($uid !== null){
    $query = "SELECT * FROM questions WHERE user_id = $uid";
}else if(isset($_GET['latest'])){
    $query = "SELECT * FROM questions ORDER BY id DESC";
}else if($search !== null){
    $query = "SELECT * FROM questions WHERE title LIKE '%$search%'";
}else{
    $query = "SELECT * FROM questions";
}
$result = $conn->query($query);
foreach($result as $row){
    $title = $row['title'];
    $id    = $row['id'];

    echo "<div class='row question-list'>
            <h4 class='my-questions'>
              <a href='?q-id=$id'>$title</a>";
    if($uid !== null){
        echo "<a href='./server/requests.php?delete=$id'>Delete</a>";
    }

    echo "</h4></div>";
}
?>

</div>

<div class="col-4">
<?php include("categorylist.php"); ?>
</div>

</div>
</div>
