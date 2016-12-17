<?php

return [
    'tag' => [
        'store' => [
            'title' => [
                'name' => '名称',
                'rules' => 'required',
                'message' => []
            ],
            'mark' => [
                'name' => '标签',
                'rules' => 'required',
                'message' => []
            ],

        ]
    ],
    'article' => [
        'store' => [
            'title' => [
                'name' => '标题',
                'rules' => 'required',
                'message' => []
            ],
            'author' => [
                'name' => '作者名称',
                'rules' => 'required',
                'message' => []
            ],
            'is_recommend' => [
                'name' => '是否推荐',
                'rules' => 'required',
                'message' => ['required' => '请选择是否推荐']
            ],
            'type' => [
                'name' => '文章类型',
                'rules' => 'required',
                'message' => ['required' => '请选择文章类型']
            ],
            'tags' => [
                'name' => '标签',
                'rules' => 'required',
                'message' => ['required' => '请选择标签']
            ],
            'content' => [
                'name' => '内容',
                'rules' => 'required',
                'message' => ['required' => '请填写文章内容']
            ],

        ]
    ],

];