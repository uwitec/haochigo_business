<?php

/*
	收藏的菜单
	表结构：(id, uidd, shop_id, uptime)
 */
class Collectshop extends Eloquent{

	public $timestamps = false;

	protected $table = 'collect_shop';


}