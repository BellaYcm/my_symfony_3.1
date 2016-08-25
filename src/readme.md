 php bin/console generate:bundle                                自己一步一步输入
 Bundle namespace: SunKe\TestBundle
 Bundle name [SunKeTestBundle]: SkTestBundle  []为推荐命名

 php bin/console doctrine:database:create           创建数据库
 
 php bin/console doctrine:generate:entity
 The Entity shortcut name: SkTestBundle:SkTestBundle:table_blog
 
 php bin/console doctrine:generate:crud
 
 CREATE TABLE `table_blog` (
 `id`  int NULL ,
 `title`  varchar(255) NULL 
 )
 ;
INSERT INTO `table_blog` (`id`, `title`) VALUES ('1', '2')




