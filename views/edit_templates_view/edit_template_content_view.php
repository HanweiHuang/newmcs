<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title>Example: Basic - jWYSIWYG</title>
<!--<link rel="stylesheet" type="text/css" href="../jwysiwyg-master/lib/blueprint/screen.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="../jwysiwyg-master/lib/blueprint/print.css" media="print" />-->
<link rel="stylesheet" href="../../plugs/jwysiwyg-master/jquery.wysiwyg.css" type="text/css"/>
<script type="text/javascript" src="../../plugs/jwysiwyg-master/lib/jquery1.5.js"></script>
<script type="text/javascript" src="../../plugs/jwysiwyg-master/jquery.wysiwyg.js"></script>
<script type="text/javascript" src="../../plugs/jwysiwyg-master/controls/wysiwyg.image.js"></script>
<script type="text/javascript" src="../../plugs/jwysiwyg-master/controls/wysiwyg.link.js"></script>
<script type="text/javascript" src="../../plugs/jwysiwyg-master/controls/wysiwyg.table.js"></script>
<script type="text/javascript">
    (function($) {
	$(document).ready(function() {
		$('#wysiwyg').wysiwyg();
	});
})(jQuery);
</script>
<body>
<div class="container">
<form method="post" action="save_edit_template.php">
    <div>template:<?=$name ?></div>
    <div>
    <textarea id="wysiwyg" rows="15" cols="60" name="wysiwyg"><?php echo $content?></textarea>
    </div>
    <div>
        <input name="filename" type="hidden" value="<?=$name?>"/>
        <input name="" type="submit" value="save"/>
    </div>
</div>
</form>

</body>
</html>