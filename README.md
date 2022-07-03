前端

啟動專案:使用XAMPP將檔案放置C:\xampp\htdocs目錄下，開啟Apache和MySQL後，開啟server.php更改sql使用者帳號密碼以及修改新增讀取修改刪除檔案中的資料庫名稱，即可開啟index.html執行

使用jquery和ajax分別去介接GET、POST、PUT、DELETE的api

讀取:使用GET去抓取read.php回傳的json檔並依次輸出日期、標題、內容

新增:使用POST傳送日期、標題、內容，並透過create.php新增置資料庫

刪除:使用DELETE傳送id到delete.php，並刪除該id的全部資料

修改:使用PUT輸入要更改的id以及標題和內容，並更改該id的標題和內容


後端

取得資料
Api Url:/read.php

Api呼叫方式:GET

![image]([![2](https://user-images.githubusercontent.com/102342658/177029505-b2b84264-886a-4dff-8c6d-32192958f567.jpg](https://github.com/erroreo/php-billboard/blob/master/2.jpg))
)
| 表頭1 | 表頭2 | 表頭3 |
|-------|:-----:|------:|
| 左1   |  中1  |   右1 |
| 左2   |  中2  |   右2 |
| 左3   |  中3  |   右3 |
