<?php
$access_token = 'qeOrtmZ1md3TlDQrdOGfZVcXta+7/Y2AEDm+KFIbz93CDtQ0gYVye6QjKQw6uy0CRYVXblI0OeYj6SGrANImV8sk+ft781svCF/DL8ucPFBKsRJrjPzJ7f8celt4zMk5QxPaWzehri/RjoZXNzFMUwdB04t89/1O/w1cDnyilFU=';

// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
{
  "events": [
      {
        "replyToken": "nHuyWiB7yP5Zw52FIkcQobQuGDXCTA",
        "type": "message",
        "timestamp": 1462629479859,
        "source": {
             "type": "user",
             "userId": "U206d25c2ea6bd87c17655609a1c37cb8"
         },
         "message": {
             "id": "325708",
             "type": "text",
             "text": "Hello, world"
          }
      }
  ]
}
echo "OK";
