<?php 
function notification($x)
{
  ?>
    <div class="alert mt-2 mx-auto w-50" role="alert" id="notify" style="background-color:#f5dfbb;">
    <h6 class="text-dark d-inline"><?php echo $x?></h6>
    <button class="btn btn-outline-dark ms-1 d-inline" onclick="document.getElementById('notify').style.display = 'none';">ok</button>
    </div>
  <?php
}
?>
