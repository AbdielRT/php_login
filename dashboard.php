<?php
if (!isset($_GET['status'])){
    header('Location:./index.php');
} else {
    $status = $_GET['status'];

    require_once 'parts/header.php';

    if($status == 'success'){ ?>
        <div class="alert alert-dismissible alert-success">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <strong>Welcome back !</strong> You're logged in.
        </div>
<?php    }
} ?>

<div class="container">
    <button type="button" class="btn btn-danger">
        <a href="http://localhost:3000/index.php">Log Out</a>
    </button>
</div>

<?php
require_once 'parts/footer.php';
?>
