<?php

if (isset($_FILES['avatar'])) {
    echo json_encode($_FILES['avatar']);
}



// {
//     "name": "49fe7a5a-f00e-4c2b-a5a2-5519efaf05be.jpg",
//     "type": "image/jpeg",
//     "tmp_name": "C:\\xampp\\tmp\\phpEFBD.tmp",
//     "error": 0,
//     "size": 79480
// }
