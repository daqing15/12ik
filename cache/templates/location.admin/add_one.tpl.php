<?php include template("admin/header");?>
<!--main-->
<div class="midder">
<?php include template("admin/menu");?>
<form method="POST" action="<?php echo SITE_URL;?>index.php?app=location&ac=admin&mg=add&ts=one_do">
<table  cellpadding="0" cellspacing="0">
<tr><td width="100">顶级区域名称：</td><td><input name="areaname" value="" /></td></tr>
<tr><td></td><td>
<input type="submit" value="添加" />
</td></tr>
</table>
</form>
</div>
<?php include template("admin/footer");?>