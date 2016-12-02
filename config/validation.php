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
    'trip' => [
        'store_base' => [
            'name' => [
                'name' => '行程名称',
                'rules' => 'required',
                'message' => ['required' => '请填写行程名称']
            ],
            'b_title' => [
                'name' => '大标题',
                'rules' => 'required',
                'message' => []
            ],
            's_title' => [
                'name' => '小标题',
                'rules' => 'required',
                'message' => []
            ],
            'subtitle' => [
                'name' => '副标题',
                'rules' => 'required',
                'message' => []
            ],
            'days_count' => [
                'name' => '游玩总天数',
                'rules' => 'required|min:1',
                'message' => ['']
            ],
            'free_days' => [
                'name' => '自由天数',
                'rules' => 'required|min:0',
                'message' => []
            ],
            'tags' => [
                'name' => '标签',
                'rules' => 'required',
                'message' => ['required' => '请选择标签']
            ]
        ],
        'update_step2' => [
//            'price' => [
//                'name' => '对外显示总价格',
//                'rules' => 'required',
//                'message' => []
//            ],
//            'insurance_price' => [
//                'name' => '保险价格',
//                'rules' => 'required',
//                'message' => []
//            ],
//            'show_travel_price' => [
//                'name' => '对外显示行程价格',
//                'rules' => 'required',
//                'message' => []
//            ],
//            'travel_price' => [
//                'name' => '成本行程价格',
//                'rules' => 'required',
//                'message' => []
//            ],
            'out_adult_normal_price' => [
                'name' => '对外成人标准报价',
                'rules' => 'required',
                'message' => []
            ],
            'in_adult_normal_price' => [
                'name' => '地接成人标准报价',
                'rules' => 'required',
                'message' => []
            ]
        ]
    ],
    'transaction_member' => [
        'store' => [
            'transact_no' => [
                'name' => '交易流水号',
                'rules' => 'required',
                'message' => []
            ],
            'payment_amount' => [
                'name' => '交易金额',
                'rules' => 'required',
                'message' => ['required' => '请输入交易金额']
            ],
            'payment_type' => [
                'name' => '交易流水号',
                'rules' => 'required',
                'message' => ['required' => '请选择交易类型']
            ],
            'img' => [
                'name' => '凭证',
                'rules' => 'required',
                'message' => ['required' => '请上传凭证']
            ],
        ]
    ],
    'transaction_supplier' => [
        'store' => [
            'supplier_id' => [
                'name' => '供应商',
                'rules' => 'required',
                'message' => ['required' => '请选择供应商']
            ],
            'transact_no' => [
                'name' => '交易流水号',
                'rules' => 'required',
                'message' => []
            ],
            'payment_amount' => [
                'name' => '交易金额',
                'rules' => 'required',
                'message' => ['required' => '请输入交易金额']
            ],
            'payment_type' => [
                'name' => '交易流水号',
                'rules' => 'required',
                'message' => ['required' => '请选择交易类型']
            ],
            'img' => [
                'name' => '凭证',
                'rules' => 'required',
                'message' => ['required' => '请上传凭证']
            ],
        ]
    ],
    'wifi' => [
        'store' => [
            'name' => [
                'name' => '产品名称',
                'rules' => 'required',
                'message' => []
            ],
            'price' => [
                'name' => '日租用单价',
                'rules' => 'required|min:0',
                'message' => []
            ],
            'deposit' => [
                'name' => '押金价格',
                'rules' => 'required|min:0',
                'message' => []
            ],
            'content' => [
                'name' => '产品描述',
                'rules' => 'required',
                'message' => ['required' => '请输入产品描述']
            ],
            'path' => [
                'name' => '国家',
                'rules' => 'required',
                'message' => ['required' => '请选择使用国家']
            ],
            'imgs' => [
                'name' => '图片',
                'rules' => 'required',
                'message' => ['required' => '请上传图片']
            ]
        ]
    ],
    'oneday' => [
        'store' => [
            'title' => [
                'name' => '产品名称',
                'rules' => 'required',
                'message' => []
            ],
            'path' => [
                'name' => '地址',
                'rules' => 'required',
                'message' => ['required' => '请选择城市']
            ],
            'spots' => [
                'name' => '景点',
                'rules' => 'required',
                'message' => ['required' => '请选择景点']
            ],
            'price' => [
                'name' => '人均价格',
                'rules' => 'required|min:1',
                'message' => []
            ],
            'description' => [
                'name' => '一日游描述',
                'rules' => 'required',
                'message' => ['required' => '请输入一日游描述']
            ],

        ]
    ],
    'country' => [
        'store' => [
            'pid' => [
                'name' => '大区',
                'rules' => 'required',
                'message' => ['required' => '请选择大区']
            ],
            'name' => [
                'name' => '国家名称',
                'rules' => 'required',
                'message' => ['required' => '请输入国家名称']
            ],
            'imgs' => [
                'name' => '国旗',
                'rules' => 'required',
                'message' => ['required' => '请上传国旗图片']
            ],
        ]
    ],
    'area' => [
        'store' => [
            'name' => [
                'name' => '大区名称',
                'rules' => 'required',
                'message' => ['required' => '请输入大区名称']
            ],
        ]
    ],
    'city' => [
        'store' => [
            'area' => [
                'name' => '大区',
                'rules' => 'required',
                'message' => ['required' => '请选择大区']
            ],
            'pid' => [
                'name' => '国家',
                'rules' => 'required',
                'message' => ['required' => '请选择国家']
            ],
            'name' => [
                'name' => '城市名称',
                'rules' => 'required',
                'message' => ['required' => '请输入城市名称']
            ],
        ]
    ],
    'hotel' => [
        'store' => [
            'parent_id' => [
                'name' => '大区',
                'rules' => 'required',
                'message' => ['required' => '请选择大区']
            ],
            'country' => [
                'name' => '国家',
                'rules' => 'required',
                'message' => ['required' => '请选择国家']
            ],
            'city' => [
                'name' => '城市',
                'rules' => 'required',
                'message' => ['required' => '请选择城市']
            ],
            'name' => [
                'name' => '酒店名称',
                'rules' => 'required',
                'message' => ['required' => '请输入酒店名称']
            ],
            'star' => [
                'name' => '星级',
                'rules' => 'required',
                'message' => ['required' => '请选择星级']
            ],
            'hotel_address' => [
                'name' => '酒店地址',
                'rules' => 'required',
                'message' => ['required' => '请输入酒店地址']
            ],
            'imgs' => [
                'name' => '酒店图片',
                'rules' => 'required',
                'message' => ['required' => '请上传酒店图片']
            ],
        ]
    ],
    'supplier' => [
        'store' => [
            'type' => [
                'name' => '所属分类',
                'rules' => 'required',
                'message' => ['required' => '请输入酒店名称']
            ],
            'title' => [
                'name' => '企业名称',
                'rules' => 'required',
                'message' => ['required' => '请输入企业名称']
            ],
            'law_name' => [
                'name' => '企业法人',
                'rules' => 'required',
                'message' => ['required' => '请输入企业法人']
            ],
            'set_up_time' => [
                'name' => '成立时间',
                'rules' => 'required',
                'message' => ['required' => '请输入成立时间']
            ],
            'register_capital' => [
                'name' => '注册资金',
                'rules' => 'required',
                'message' => ['required' => '请输入注册资金']
            ],
            'register_address' => [
                'name' => '企业注册地点',
                'rules' => 'required',
                'message' => ['required' => '请输入企业注册地点']
            ],
            'office_address' => [
                'name' => '办公地点',
                'rules' => 'required',
                'message' => ['required' => '请输入办公地点']
            ],
            'bank_address' => [
                'name' => '开户行地址',
                'rules' => 'required',
                'message' => ['required' => '请输入开户行地址']
            ],
            'bank' => [
                'name' => '开户行名称',
                'rules' => 'required',
                'message' => ['required' => '请输入开户行名称']
            ],
            'accoutn' => [
                'name' => '开户行账号',
                'rules' => 'required',
                'message' => ['required' => '请输入开户行账号']
            ],
        ]
    ]
];