<?php require_once("../../config.php");
if(isset($_GET['id'])){
    $query = query("DELETE FROM report WHERE report_id = " .escape_string($_GET['id'])."");
    confirm($query);

    set_message("Report deleted");
    redirect("../../../public/admin/index.php?report");
}   else {
    redirect("../../../public/admin/index.php?report");
}














?>