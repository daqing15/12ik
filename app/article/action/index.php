<?php
defined ( 'IN_IK' ) or die ( 'Access Denied.' );
switch ($ts) {
	case "" :
		//分页
		$page = isset($_GET['page']) ? $_GET['page'] : '1';
		$url = SITE_URL.tsUrl('article','list',array('cateid'=>'0','page'=>''));
		$lstart = $page*15-15;
		$arrArticles = aac('article')->findAll('article_spaceitems',null,'dateline desc',null,$lstart.',15');
		foreach($arrArticles as $key=>$item)
		{
			$arrArticle[] = $item;
			$arrArticle[$key]['news'] = aac('article')->find('article_spacenews',array('itemid'=>$item['itemid']));
			if($item['haveattach']==1)
			{
				$arrArticle[$key]['attach'] = aac('article')->find('attachments',array('itemid'=>$item['itemid']));
			}
		}

		$artNum =  aac('article')->findCount('article_spacenews');
		$pageUrl = pagination($artNum, 15, $page, $url);
		
		//获取分类
		$arrCate = aac('article')->findAll('article_categories');
		$title = '最新文章';
		include template ( 'index' );
		break;
	
}

 
