<?php namespace App\Http\Controllers;

use EndaEditor;

class UploadController extends Controller {

    public function upload()
    {
        // path 为 public 下面目录，比如我的图片上传到 public/uploads 那么这个参数你传uploads 就行了

        $path = 'uploads/'.date('Ymd');

        $data = EndaEditor::uploadImgFile($path);

        return json_encode($data);
    }
}