 php bin/console generate:bundle                                自己一步一步输入
 Bundle namespace: SunKe\TestBundle
 Bundle name [SunKeTestBundle]: SkTestBundle  []为推荐命名

 php bin/console doctrine:database:create           创建数据库
 
 php bin/console doctrine:generate:entity
 The Entity shortcut name: SkTestBundle:Demo/Table_blog_msg    先建entity 再crud 目录也会加上在controll

 
 php bin/console doctrine:generate:crud
 
 
 
DROP TABLE IF EXISTS `talbe_blog_news`;

DROP TABLE IF EXISTS `table_blog_news`;
CREATE TABLE `table_blog_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of table_blog_news
-- ----------------------------
INSERT INTO `table_blog_news` VALUES ('1', 'title')






