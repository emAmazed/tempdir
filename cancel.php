<html>
<body>
<form>
<input type='submit' value='submit'>
<input type='button' value='cancel' onclick="window.history.back();">
<input type='button' value='cancel' onclick="history.go(-1);">
<input type='hidden' value='hidden=cancel'>

<input type='submit' value='Cancel'></input>
<input type='hidden' value='CANCEL' onclick="window.history.back();" name='cancel'></input>

<?php
#header('location:javascript://history.go(-1)');
header('location:'.$_SERVER['HTTP_REFERER']);
#header('location:http://www.google.com');
?>
</form>
</body>
</html>
