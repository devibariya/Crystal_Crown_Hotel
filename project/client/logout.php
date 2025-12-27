<?php
session_start();
if(!isset($_SESSION['username']))
{
?>
<script type="text/javascript">
alert("You Must Login First");
window.location.href="login.html";

</script>
<?php
}
else
{
session_destroy();
?>
<script type="text/javascript">
window.location.href="login.html";

</script>
<?php
}
?>