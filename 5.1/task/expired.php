<?php
/*****************************************************************************************
	文件： task/expired.php
	备注： 自动删除过期
	版本： 4.x
	网站： www.phpok.com
	作者： qinggan <qinggan@188.com>
	时间： 2015年11月17日 09时38分
*****************************************************************************************/
if(!defined("PHPOK_SET")){exit("<h1>Access Denied</h1>");}
$this->cache->expired();
return true;
?>