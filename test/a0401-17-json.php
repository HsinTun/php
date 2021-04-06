
<?php
$persons=[
        [
             'name'=>'Bill',
            'age'=>27,
            'gender'=>'male'
        ],

        [
             'name'=>'大衛',
            'age'=>17,
            'gender'=>'male'
        ] ,
        [
             'name'=>'Marry',
            'age'=>37,
            'gender'=>'female'
        ],
        [
             'name'=>'Lisa',
            'age'=>57,
            'gender'=>'female'
        ]
];


echo json_encode($persons, JSON_UNESCAPED_UNICODE);

//JSON_UNESCAPED_UNICODE可以顯示中文,沒裝外掛也可顯示