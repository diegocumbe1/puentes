<?php include("db.php") ?>
<?php include("includes/header.php")?>

    
    
        <div class=" inicio">

            <?php if(isset($_SESSION['message'])){?>
                <div class="alert alert-<?= $_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['message']?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                
            <?php session_unset(); }?>

            <div  class="card card-body">
                
        
                <h1 class="titulo">Puentes urbanos de la ciudad de Neiva</h1>
                <p>aquí s epodra encontrar esta mierda de trabajo( Y Ximena es FEA)</p>
             <a href="listado.php" class="btn btn-primary btn-lg active btn-block " > abir listado general</a>
                </form>
            </div>
            
        </div>
    
    
</div>


<?php include("includes/footer.php")?>