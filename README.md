# sym-baidu-face-laravel
基于人脸识别SDK适配laravel拓展
***
## 安装 

```php
composer require sym/sym-baidu-face-laravel dev-master
```
#### 发布配置
```
php artisan vendor:publish --tag=config
```
***
## 示例

```php

// APP_ID, API_KEY, SECRET_KEY  如果传了这三个参数会优先与配置参数
$client = new AipFace(APP_ID, API_KEY, SECRET_KEY);
$image = file_get_contents('test.jpg');

// 调用人脸检测  调用方式和官方SDK一样
// 可选参数
$options = [
'max_face_num'=>1,
'face_field' => 'age,beauty,expression,face_shape,gender,eye_status,face_type,mask,occlusion,spoofing,quality,landmark,landmark72,angle'
];
$client->detect(base64_encode(file_get_contents($image)), 'BASE64', $options);
dd($res);

```


### 相关
百度人脸识别SDK for php
百度在线文档：[https://cloud.baidu.com/doc/FACE/Face-PHP-SDK.html](https://cloud.baidu.com/doc/FACE/Face-PHP-SDK.html)  
