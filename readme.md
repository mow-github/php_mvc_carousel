# About: PHP MV(C) with a BS3 carousel (cover the entire screen)
#### Purpose: Learn
##### Technologies: HTML5, CSS3, Javascript, JQuery, Bootstrap, PHP, MySQL

###### Installation example:
<pre>git clone https://github.com/mow-github/php_mvc_carousel.git</pre>

###### Instructions:
1. Edit php/model/db_connect.php (connection data to your database)
2. Start app with URL: (.../php_mvc_test/index.php)
3. (Check controller.php and/or ParentController.php.. one may change the "getImages from Model.php" to a MOCK call..read: 4.)
4. $obj = $this->model->getImagesMOCK(); (comment the "real" method call)

###### Notes:
1. JS detects if the images should load a small or large pic.. (depends on the current screen width)

> _"Failure is just a symptom for success"_
* [link to my homepage - bviking.se ](https://www.bviking.se)
* [link to my LinkedIn profile ](https://www.linkedin.com/in/mats-wikmar)