<?php
namespace app\common\exception;

use Exception;
use think\exception\Handle;
use think\exception\ValidateException;
class Http extends Handle {
	public function render(Exception $e)
	{
		if ($e instanceof ValidateException) {
			return json($e->getCode(), $e->getMessage());
		}
		// 请求异常
		if (request()->isAjax()) {
			if ($e instanceof BusinessException) {

			}
			$data = [
				'code' => $e->getCode(),
				'message' => $e->getMessage()
			];
			return response($data, 200, [], 'json');
		}

//		var_dump(111);die;
		return parent::render($e); // TODO: Change the autogenerated stub
	}

//	protected function
}