<?php 

class BaseController
{
	const VIEW_FOLDER_NAME = 'Views';
	const MODEL_FOLDER_NAME = 'Models';
	const CONTROLLER_FOLDER_NAME = 'Controller';
	/**
	 * Desctription:
	 * + path name: folderName.fileName
	 * + lấy từ sau thư mục Views
	 */

	protected function view($path, array $data = [])
	{	
		foreach($data as $key => $value) {
			$$key = $value;
		}

		return require (self::VIEW_FOLDER_NAME . '/' . str_replace('.', '/', $path) . '.php');
	}


	protected function loadModel($modelPath)
	{
		return require (self::MODEL_FOLDER_NAME . '/' . $modelPath . '.php');
	}
}