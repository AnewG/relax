# Relax

![logo](leona.jpg "Logo")

## Architecture

| Layer | Core |    
| - | - |
| Back-End | [Codeigniter](https://github.com/bcit-ci/CodeIgniter) |
| Front-End | [Ace Admin](http://ace.jeka.by/) & [WeUI](https://weui.io/) |
| Deploy | [Docker](https://github.com/moby/moby) |

## Roadmap

* Import third library
  * [x] [JWT](https://github.com/firebase/php-jwt)
  * [x] [Faker](https://github.com/fzaninotto/Faker)
  * [x] [Carbon](https://github.com/briannesbitt/Carbon)
  * [x] [Goutte](https://github.com/FriendsOfPHP/Goutte)
  * [x] [guzzle](https://github.com/guzzle/guzzle)
  * [ ] [Mobile-Detect](https://github.com/serbanghita/Mobile-Detect/)
* Encapsulate components
  * [ ] Register/Login, Include Oauth(wechat,qq,weibo,phone), Table see [here](https://codeigniter.com/user_guide/general/compatibility_functions.html)
  * [ ] RBAC, With Ace Admin and other admin_ table
  * [ ] Wechat SDK
  * [ ] Wxpay, Alipay callback
* Deploy
  * [ ] Docker
        