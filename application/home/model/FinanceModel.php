<?php
namespace app\home\model;
use think\model;
class FinanceModel extends model
{
	protected $table = 'hotel';

	public function insert(array $data = [], $replace = false, $getLastInsID = false, $sequence = null)
	{
		return parent::insert($data, $replace, $getLastInsID, $sequence); // TODO: Change the autogenerated stub
	}
}