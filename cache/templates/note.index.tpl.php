<?php include template('header'); ?>
<div class="midder">
<div class="mc">
	<h1><?php echo $title;?></h1>
    
<div class="cleft">
	
    
   <div class="note_list">
   	
       <?php if($arrNote) { ?>
       <?php foreach((array)$arrNote as $key=>$item) {?>
        <dl>
            <dt><a href="<?php echo SITE_URL;?><?php echo tsurl('note','show',array('noteid'=>$item['noteid']))?>" title="<?php echo $item['title'];?>"><?php echo $item['title'];?></a><span class="open"><a href="javascript:;">开关</a></span></dt>
            <dd class="addtime"><a href="<?php echo SITE_URL;?><?php echo tsurl('user','space',array('id'=>$item['user'][userid]))?>"><?php echo $item['user'][username];?></a> 发表于 <?php echo date('Y-m-d H:i:s',$item['addtime'])?></dd>
            <dd class="note_des"><?php echo $item['content'];?></dd>
            
            <dd class="action">
             <?php echo $item['count_view'];?> 人浏览  &nbsp;&nbsp;<a href="<?php echo SITE_URL;?><?php echo tsurl('note','show',array('noteid'=>$item['noteid']))?>#comments" title="回应"><?php echo $item['count_comment'];?> 条回应</a>
             <?php if($item['userid'] == $IK_USER['user'][userid]) { ?>
            &gt; <a href="<?php echo SITE_URL;?><?php echo tsurl('note','do',array('ts'=>'edit', 'noteid'=>$item['noteid']))?>" title="">修改</a> &gt; <a href="<?php echo SITE_URL;?><?php echo tsurl('note','do',array('ts'=>'del', 'noteid'=>$item['noteid']))?>" title="">删除</a>
            <?php } ?>
            </dd>
        </dl>
	  <?php }?>
	  <?php } else { ?>
      <p class="pl">你可以在这里记录您日记了，马上就 <a href="<?php echo SITE_URL;?><?php echo tsurl('note','add')?>">开始</a> 写吧。</p>
      <?php } ?>
   </div>
   <div class="page"><?php echo $pageUrl;?></div>   
     
</div>

    <div class="cright">
 		    <?php if($userid == $IK_USER['user'][userid] ) { ?>
            <p class="pl2">&gt; <a href="<?php echo SITE_URL;?><?php echo tsurl('note','add')?>">写 日 志</a></p>
            <p class="pl2">&gt; <a href="<?php echo SITE_URL;?><?php echo tsurl('note','cate',array('ts'=>'edit'))?>">日志分类管理</a></p>
            <?php } ?>
            
            <h2><?php echo $userCateName;?></h2>

            
            <div class="cate">
            <ul>
            <?php foreach((array)$arrCate as $key=>$item) {?>
            <li  <?php if($item['cateid']==$cateid) { ?> class="select" <?php } ?>  ><a  href="<?php echo SITE_URL;?><?php echo tsurl('note','cate',array('ts'=>'list','userid'=>$item['userid'], 'cateid'=>$item['cateid']))?>"><?php echo $item['catename'];?></a></li>
            <?php }?>
            </ul>
            </div>
            
    </div>
    
</div>
</div>
<?php include template('footer'); ?>