<?php include template('header'); ?>

<!--main-->
<div class="midder">
<div class="mc">
<?php include template('set_menu'); ?>

<div class="utable">
<form method="POST" action="<?php echo SITE_URL;?>index.php?app=user&ac=do&ts=setbase">
<table cellpadding="0" cellspacing="0" width="100%" class="table_1">
<tr>
<th>登陆Email：</th><td><input class="txt" value="<?php echo $strUser['email'];?>" disabled="true" /></td>
</tr>
<tr><th>名 号：</th><td><input class="txt" name="username" value="<?php echo $strUser['username'];?>"  /></td></tr>

<tr><th>性 别：</th><td>

<input <?php if($strUser['sex']=='0') { ?>checked="select"<?php } ?> name="sex" type="radio" value="0" />保密 
<input <?php if($strUser['sex']=='1') { ?>checked="select"<?php } ?> name="sex" type="radio" value="1" />男 
<input <?php if($strUser['sex']=='2') { ?>checked="select"<?php } ?> name="sex" type="radio" value="2" />女

</td></tr>

<tr><th>常居地：</th>
<td>
<?php if($strArea) { ?>
<?php echo $strArea['one'][areaname];?> 
<?php echo $strArea['two'][areaname];?> 
<?php echo $strArea['three'][areaname];?> 
<?php } else { ?>
火星
<?php } ?>
</td>
</tr>

<tr><th>当前所在地：</th><td><input class="txt" name="address" value="<?php echo $strUser['address'];?>" disabled="true" /></td></tr>

<tr><th>登陆IP：</th><td><input class="txt" name="ip" value="<?php echo $strUser['ip'];?>" disabled="true" /></td></tr>

<tr><th>手 机：</th><td><input class="txt" name="phone" value="<?php echo $strUser['phone'];?>"  /></td></tr>

<tr><th>Blog地址：</th><td><input class="txt" name="blog" value="<?php echo $strUser['blog'];?>"  /></td></tr>

<tr><th>自我介绍：</th><td><textarea class="utext" name="about" style="height:70px; width:480px"><?php echo $strUser['about'];?></textarea></td></tr>

<tr><th>签 名：</th><td>
<textarea class="utext" name="signed" style="height:70px; width:480px"><?php echo t($strUser['signed']);?></textarea>
(支持url链接，只需要输入http://www.******.com即可)
</td></tr>

<tr><th></th><td><input class="submit" type="submit" value="更新个人资料"  /></td></tr>

</table>
</div>
</div>
</div>
<?php include template('footer'); ?>