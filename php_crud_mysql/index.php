<?php
include("db.php");
include("includes/header.php");

?>
<div class="row">
    <div class="col-md-4">
        <?php if(isset($_SESSION['message'])){
        ?>
        <div class="alert alert-<?=$_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
            <strong><?=$_SESSION['message'] ?></strong> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php  
        session_unset()  ;
        }?>
        <div class="card card-body">
            <form action="save_task.php" method="POST">
                <div class="form-group">
                    <input type="text" name="title" id="" class="form-control"
                    placeholder="Task Title">
                    
                </div>
                <div class="form-group">
                    <textarea name="description" id="" rows="2" 
                    class="form-control"
                    placeholder="Task descripcion"></textarea>
                    
                </div>
                <div class="form-group">
                <input type="submit" 
                    class="btn btn-success btn-block" name="save_task" value="Save Task">
                </div>
                
            </form>
        </div>
    </div>
    <div class="col-md-6">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Descripcion</th>
                    <th>Created</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $query = "select * from task";
                $result_tasks = mysqli_query($conn,$query);
                while($row = mysqli_fetch_array($result_tasks)){
            ?>
                <tr>
                    <td><?php echo $row['title']?></td>
                    <td><?php echo $row['description']?></td>
                    <td><?php echo $row['created']?></td>
                    <td>
                        <a class="btn btn-warning" href="edite.php?id=<?php echo $row['id']   ?>">
                            Edit
                        </a>
                        <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']   ?>">
                            Delete
                        </a>
                    </td>
                </tr>    
                <?php }?>
            </tbody>
        </table>
    </div>
</div>
<?php
include("includes/footer.php"); 
?>