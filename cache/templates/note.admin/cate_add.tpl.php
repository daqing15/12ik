<?php include template("admin/header");?>

<!--main-->
<div class="midder">

<?php include template("admin/menu");?>


<form method="POST" action="<?php echo SITE_URL;?>index.php?app=article&ac=admin&mg=cate&ts=add_do">
<table>
<tr>
<td width="100">分类名称：</td><td><input name="catename" /></td>
</tr>

<tr><td></td><td><input type="submit" value="添加" /></td></tr>

</table>
</form>

</div>

<?php include template("admin/footer");?>