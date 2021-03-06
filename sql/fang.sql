-- MySQL dump 10.13  Distrib 5.6.26, for Win32 (x86)
--
-- Host: localhost    Database: fang
-- ------------------------------------------------------
-- Server version	5.6.26

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `pass` varchar(55) NOT NULL,
  `safe` varchar(55) NOT NULL,
  `stat` tinyint(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'admin','3364ad7f8dd9e20fa356b0cd0d40c8d1','',0),(2,'tpcwre','cc0b044bf6d02448f2ff41b8c422be5d','',0);
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fanginfo`
--

DROP TABLE IF EXISTS `fanginfo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fanginfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(20) NOT NULL,
  `stats` tinyint(2) NOT NULL,
  `gqgx` varchar(10) NOT NULL,
  `title` varchar(55) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `lxr` varchar(10) NOT NULL,
  `hx` varchar(20) NOT NULL,
  `mj` varchar(10) NOT NULL,
  `mjqg1` varchar(10) NOT NULL,
  `mjqg2` varchar(10) NOT NULL,
  `priceyz` varchar(10) NOT NULL,
  `priceqz1` varchar(10) NOT NULL,
  `priceqz2` varchar(10) NOT NULL,
  `priceqg1` varchar(10) NOT NULL,
  `priceqg2` varchar(10) NOT NULL,
  `priceall` varchar(10) NOT NULL,
  `price` varchar(10) NOT NULL,
  `lc` varchar(10) NOT NULL,
  `position` varchar(100) NOT NULL,
  `aname` varchar(20) NOT NULL,
  `finfo` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `time` varchar(20) NOT NULL,
  `by1` varchar(50) NOT NULL,
  `by2` varchar(100) NOT NULL,
  `by3` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=216 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fanginfo`
--

LOCK TABLES `fanginfo` WRITE;
/*!40000 ALTER TABLE `fanginfo` DISABLE KEYS */;
INSERT INTO `fanginfo` VALUES (135,'abc',0,'求租','2室以上有装修有床家电','15143530369','王女士','2室1厅1厨1卫','0','50','70','--','500','800','--','--','0','0','--/--','长青小学附近','其它小区','位置要求柳河十中附近或长青小学附近。两室以上，需要装修，有床等简单生活物品。','--','2015-05-09 10:00:30','','',''),(136,'abc',0,'出售','四小对面有楼出售','15643526508','王先生','2室1厅1厨1卫','60','50','70','--','500','800','--','--','1','167','7/7','长青小学附近','其它小区','阁楼；带家具；精装修；新楼；位置好；可面议','--','2015-05-09 10:01:37','','',''),(137,'abc',0,'出租','世纪嘉园单室出租 ','18243541585','任女士','2室1厅1厨1卫','60','50','70','1','500','800','--','--','1','167','6/7','世纪广场附近','其它小区','屋内设施齐全，拎包入住即可，离早市近离长青十中近，非常方便！','--','2015-05-09 10:03:18','','',''),(138,'abc',0,'出售','世纪嘉园楼房出售 ','18243541585','任女士','2室1厅1厨1卫','51.73','50','70','1','500','800','--','--','1','194','6/7','其它位置','世纪嘉园','屋内设施齐全，户型好，采光好，位置好，有意者电话联系！','--','2015-05-09 10:04:22','','',''),(139,'abc',0,'出售','蕴河湾小区6楼，紧邻九中','18843531234','张先生','2室1厅1厨1卫','84.72','50','70','1','500','800','--','--','25','2951','6/7','其它位置','蕴河湾','本房，地面，厨房，洗手间瓷砖已全部完成，另新换步阳防盗门，大理石窗台板，房间结构改动已完成，相当合理，由于本人个人原因，忍痛割爱','--','2015-05-09 10:06:00','','',''),(140,'abc',0,'出售','顶账房便宜出售 ','13943418699','李女士','2室1厅1厨1卫','90.8','50','70','1','500','800','--','--','1','111','2/6','柳河县镇政府后面','其它小区','小区绿化非常好，环境优美，楼房质量好，小区后面正在建柳河县八中。','--','2015-05-09 10:07:24','','',''),(141,'abc',0,'出售','顶账房便宜出售 ','13943418699','李女士','2室1厅1厨1卫','59.27','50','70','1','500','800','--','--','1','169','4/6','紫御府','紫御府','小区绿化非常好，环境优美，楼体质量好，小区后面正在建柳河县八中。','--','2015-05-09 10:08:33','','',''),(143,'abc',0,'求购','求购75—90平楼房 ','18743535553','项先生','2室1厅1厨1卫','59.27','75','90','1','500','800','10','20','1','169','4/6','其它位置','其它小区','诚心求购柳河镇内楼房，75—90平米，最好是四小或长青小学附近的学区房，不要一楼和顶楼，装修或毛坯都可以，诚心卖的带上价格联系我，谢谢','--','2015-05-09 10:12:03','','',''),(144,'abc',0,'求租','求租舒适二居室一套','15330692105','童先生','2室1厅1厨1卫','59.27','55','90','1','500','800','10','20','1','169','4/6','金达莱小区附近','其它小区','求租不超过4层，中等装修，舒适二居室一套，最好客厅明窗的','--','2015-05-09 10:12:58','','',''),(145,'abc',0,'出售','售 楼','15144588197','--','2室1厅1厨1卫','78.98','55','90','1','500','800','10','20','1','127','3/5','金达莱','金达莱','  金达莱A3栋，78.98\n平米，已装修，带家具\n家电，紧邻南环路早市。','--','2015-05-09 10:14:31','','',''),(146,'abc',0,'出售','售 楼','13694450657','--','2室1厅1厨1卫','74','55','90','1','500','800','10','20','1','136','6/7','房产对面省外贸住宅楼','其它小区','房产对面省外贸住\n宅楼，6楼，非顶楼，\n74平米，价格面议。\n电话：13694450657','--','2015-05-09 10:15:40','','',''),(147,'abc',0,'出租','世纪嘉园单室出租 ','15943556491','刘先生','2室1厅1厨1卫','45','55','90','450','500','800','10','20','1','223','6/7','世纪嘉园','世纪嘉园','屋内设施齐全，有床有家电，干净整洁，有一位老人在家，主卧出租，最好是位单身男士！','--','2015-05-09 10:16:53','','',''),(148,'abc',0,'出售','低 价 售 楼 ','15044532277','--','1室1厅1厨1卫','50','55','90','450','500','800','10','20','10','2000','6/6','清真寺对面','其它小区','清真寺对面6楼，50\n平米，三面朝阳，低\n价10万元出售。\n电话：15044532277','--','2015-05-09 10:18:05','','',''),(149,'abc',0,'出售','售房兴龙湾','13351535988','梁女士','2室1厅1厨1卫','72','55','90','450','500','800','10','20','2','278','6/6','其它位置','其它小区','价格面议','--','2015-05-09 10:19:01','','',''),(150,'abc',0,'出售','商厦后侧，和兴高层出售','13278256600','吕先生','1室1厅1厨1卫','60','0','0','--','--','--','--','--','2','334','10/11','其它位置','其它小区','米氏孕婴楼上，一室一厅，简单装修，价格面议。','--','2015-05-09 10:21:07','','',''),(151,'abc',0,'出租','世纪嘉园单室出租','18243541585','任女士','2室1厅1厨1卫','15','0','0','250','--','--','--','--','2','1334','6/7','世纪嘉园','世纪嘉园','屋内设施齐全，拎包入住即可，离早市近离长青十中近，非常方便','--','2015-05-09 10:25:05','','',''),(152,'abc',0,'出租','世纪嘉园单室出租','15943556491','刘先生','2室1厅1厨1卫','20','0','0','450','--','--','--','--','2','1000','6/7','世纪嘉园','世纪嘉园','屋内设施齐全，有床有家电，干净整洁，有一位老人在家，主卧出租，最好是位单身男士！','--','2015-05-09 10:26:35','','',''),(153,'abc',0,'求购','求购腾龙湾住宅','18743545055','周女士','--室--厅--厨--卫','20','70','90','450','--','--','10','25','2','1000','6/7','腾龙湾','腾龙湾','求购腾龙湾住宅，要求多层，2-5楼，毛坯或装修未入住，顶账房也可','--','2015-05-09 10:28:15','','',''),(154,'abc',0,'出售','柳河水岸公馆','18643557738','都先生','3室2厅1厨1卫','103','0','0','--','--','--','--','--','面议','0','5/7','柳河水岸公馆','水岸公馆','不把大山，采光好，设计合理。里边带错层。','--','2015-05-09 10:33:49','','',''),(155,'abc',0,'出售','金达菜A区阁楼出售','15114348936','--','1室1厅1厨1卫','77','0','0','--','--','--','--','--','面议','0','6/6','金达菜A区','金达菜','','--','2015-05-09 10:50:21','','',''),(156,'abc',0,'出售','和谐家园阁楼出售','18043508121','--','3室1厅1厨1卫','98','0','0','--','--','--','--','--','面议','0','6/6','和谐家园','和谐家园','精装修，带全套新家具，急用钱极低价出售','--','2015-05-09 10:51:42','','',''),(157,'abc',0,'出售','低价出售门市','13278253111','--','--室--厅--厨--卫','1','0','0','--','--','--','--','--','面议','0','1/1','其它位置','其它小区','低价出售临街门市，位置好，有钱景，面积适中','--','2015-05-09 10:53:15','','',''),(158,'abc',0,'出售','门市出售','18626556881','--','--室--厅--厨--卫','190','0','0','--','--','--','--','--','面议','0','1/1','佳兴','佳兴','老检查院对面佳兴南区9号','--','2015-05-09 10:55:10','','',''),(159,'abc',0,'出售','158平门市出售','18626556881','--','--室--厅--厨--卫','158','0','0','--','--','--','--','--','面议','0','1/1','政务大厅南','其它小区','政务大厅南侧','--','2015-05-09 10:56:03','','',''),(160,'abc',0,'出售','富奥180平门市出售','18626556881','--','--室--厅--厨--卫','180','0','0','--','--','--','--','--','面议','0','1/1','政务大厅南','其它小区','富奥大门南侧','--','2015-05-09 10:56:43','','',''),(161,'abc',0,'出售','急售顶账','18943445566','--','--室--厅--厨--卫','200','0','0','--','--','--','--','--','面议','0','1/1','一中斜对面','学苑小区','','--','2015-05-09 11:02:05','','',''),(162,'abc',0,'出租','门市出租','18626557396','--','--室--厅--厨--卫','300','0','0','1','--','--','--','--','面议','0','1/1','鑫润河建材城正门旁边','其它小区','','--','2015-05-09 11:05:25','','',''),(163,'abc',0,'出售','门市出租出售','15843550369','--','--室--厅--厨--卫','136','0','0','1','--','--','--','--','面议','0','1/1','车站华龙综合楼东','其它小区','','--','2015-05-09 11:06:26','','',''),(164,'abc',0,'出售','门市出售','15043532009','--','--室--厅--厨--卫','144','0','0','1','--','--','--','--','面议','0','1/1','其它位置','其它小区','世纪花园2号小区对面爱嘉华歌厅，144平米，价格面议','--','2015-05-09 11:08:34','','',''),(165,'abc',0,'出售','出售农发行家属楼','15043532009','--','3室2厅1厨1卫','126','0','0','1','--','--','--','--','面议','0','1/6','农发行家属楼 ','其它小区','','--','2015-05-09 11:09:36','','',''),(166,'abc',0,'出售','低价出售车库 ','15843538886','--','--室--厅--厨--卫','24.48','0','0','1','--','--','--','--','面议','0','1/6','金达菜','金达菜','金达菜二期C8-7号车库，低价出售 ','--','2015-05-09 11:11:05','','',''),(167,'abc',0,'出售','出售车库 ','13844566128','--','--室--厅--厨--卫','20','0','0','1','--','--','--','--','面议','0','1/6','金达菜','金达菜','金达菜二期有20-44平米车库10套，现低价出售。电话：13844566128  13069277788','--','2015-05-09 11:13:15','','',''),(168,'abc',0,'出售','出售车库，可办房照 ','13844550767','--','--室--厅--厨--卫','27.5','0','0','1','--','--','--','--','面议','0','1/6','雅典花园','雅典花园','','--','2015-05-09 11:14:23','','',''),(169,'qq1',0,'出售','阁楼出售','13844555135','--','1室1厅1厨1卫','60','0','0','--','--','--','--','--','面议','0','6/6','世纪嘉园','世纪嘉园','世纪嘉园二号小区2号楼阁楼60平米带房照','--','2015-05-12 19:12:11','','',''),(170,'qq1',0,'出租','门市出租','15567855990','--','1室--厅--厨--卫','144.8','0','0','100','--','--','--','--','面议','0','1/1','瓦厂蔬菜批发市场','其它小区','一二楼，价格面议！','--','2015-05-12 19:14:46','','',''),(171,'qq1',0,'出售','小门市出售','13844558663','--','1室--厅--厨--卫','30','0','0','--','--','--','--','--','面议','0','1/1','其它位置','其它小区','营业6年多的美发店，30平米，也可做其它项目，价格面议。','--','2015-05-12 19:25:16','','',''),(172,'qq1',0,'出售','领秀一方门市出售','13894508577','--','1室--厅--厨--卫','130','0','0','--','--','--','--','--','面议','0','1/1','其它位置','领秀一方','领秀一方一期门市，单层，精装修，低价出售。','--','2015-05-12 19:26:29','','',''),(173,'qq1',0,'出售','急售润泽门市','15114333838','--','1室--厅--厨--卫','120','0','0','--','--','--','--','--','面议','0','1/1','润泽花园','润泽花园','','--','2015-05-12 19:27:58','','',''),(174,'qq1',0,'出售','新天地商铺出售','15326354789','--','1室--厅--厨--卫','24.4','0','0','--','--','--','--','--','面议','0','4/4','新天地','其它小区','新天地购物广场即将开业，4 楼女装，地理位置好，24.4平米','--','2015-05-12 19:30:20','','',''),(175,'qq1',0,'出售','省外贸家属楼出售','15843552567','--','2室2厅1厨1卫','98','0','0','--','--','--','--','--','面议','0','7/7','临近长青和十中','其它小区','省外贸家属楼，临近长青，十中，学区房，7楼，98平米，带家具家电，价格面议。','--','2015-05-12 19:32:56','','',''),(176,'qq1',0,'出售','出售四小附近学区房','13674454198','--','1室1厅1厨1卫','53','0','0','--','--','--','--','--','面议','0','4/6','四小附近','其它小区','','--','2015-05-12 19:33:47','','',''),(177,'qq1',0,'出售','售楼','13179192377','--','1室1厅1厨1卫','54','0','0','--','--','--','--','--','面议','0','1/6','八中对过','其它小区','八中对过工商家属楼，1 楼，54平米，可做北京市','--','2015-05-12 19:35:19','','',''),(178,'qq1',0,'出售','售楼','18743533699','--','3室1厅1厨1卫','90','0','0','--','--','--','--','--','25','2778','5/6','其它位置','佳兴','精装修，拎包入住！','--','2015-05-12 19:36:51','','',''),(179,'qq1',0,'出售','售楼','13674455799','--','5室2厅1厨1卫','157','0','0','--','--','--','--','--','49','3122','3/4','世纪广场西','其它小区','世纪广场西侧住宅楼，越层，3-4层，157平米，还车库','--','2015-05-12 19:38:34','','',''),(180,'qq1',0,'出售','售阳光城楼房','13844554036','--','3室2厅1厨1卫','101','0','0','--','--','--','--','--','35','3466','2/6','阳光城','阳光城','阳光城A区，半越式，2楼，101平米，未入住！','--','2015-05-12 19:39:55','','',''),(181,'qq1',0,'出售','售楼','13843550775','--','2室1厅1厨1卫','73','0','0','--','--','--','--','--','18','2466','2/6','中岗前进花园','前进花园','已装修，现低价出售','--','2015-05-12 19:41:24','','',''),(182,'qq1',0,'出售','低价售金达菜楼房','15144588197','--','2室1厅1厨1卫','78.98','0','0','--','--','--','--','--','18','2280','3/6','金达菜','金达菜','金达菜A3,78.98平米，已装修，带家具家电，紧邻南环早市。','--','2015-05-12 19:43:36','','',''),(183,'qq1',0,'出售','低价售楼','13704450140','--','3室2厅2厨1卫','123','0','0','--','--','--','--','--','25','2033','4/6','学苑小区','学苑小区','学苑小区，B区，4楼，123平，毛坯楼，价格面议','--','2015-05-12 19:45:30','','',''),(184,'qq1',0,'出售','出售电梯楼','13944556285','--','2室1厅1厨1卫','78','0','0','--','--','--','--','--','17','2180','5/6','领秀一方','领秀一方','领秀一方有一顶账电梯楼，5楼，78平米，毛坯楼，现低价急售','--','2015-05-12 19:51:05','','',''),(185,'qq1',0,'出售','急售财政花园6楼','18243543639','--','3室2厅1厨1卫','120','0','0','--','--','--','--','--','29','2417','6/7','财政花园','财政花园','财政花园6楼，非顶楼，四小学区房，手续齐全，价格面议！','--','2015-05-12 19:52:36','','',''),(186,'qq1',0,'出售','售楼','15044557711','--','3室2厅1厨1卫','117.6','0','0','--','--','--','--','--','35','2977','4/6','胜利花园','胜利花园','胜利花园A栋，一单元，4楼，117.6平，带阁楼共235平米，价格面议！','--','2015-05-12 19:54:25','','',''),(187,'qq1',0,'出售','出售待拆迁平房','13756982727','--','1室--厅1厨1卫','37.5','0','0','--','--','--','--','--','10','2667','3/5','法院西侧','其它小区','柳河老军人服务社待拆迁房出售，临街3楼。价格面议','--','2015-05-12 19:56:00','','',''),(188,'qq1',0,'出售','售楼','13278259900','--','2室1厅1厨1卫','65','0','0','--','--','--','--','--','17','2616','4/5','青少年宫东毛纺家属楼','其它小区','青少年宫东毛纺家属楼，4 楼，65平','--','2015-05-12 19:57:38','','',''),(189,'qq1',0,'出售','售联建楼楼房','13644452818','--','2室1厅1厨1卫','70','0','0','--','--','--','--','--','16','2286','2/5','联建楼','联建楼','联建楼38栋，2楼，70平，地热，已装修，家具家电齐全，拎包入住，低价出售，价格面议','--','2015-05-12 19:59:32','','',''),(190,'qq1',0,'出售','售阁楼','13904455395','--','1室1厅1厨1卫','44','0','0','--','--','--','--','--','5','1137','6/6','金达菜','金达菜','金达菜A23栋，2单元阁楼，44平米，已装修，价格面议。','--','2015-05-12 20:01:10','','',''),(191,'qq1',0,'出售','出售大门市','13944568285','--','--室--厅--厨--卫','1300','0','0','--','--','--','--','--','320','2462','1/1','进化梅柳公路旁','其它小区','进化梅柳公路旁边，进化信用社南侧，有1300平米门市带房照，及150平米无房照国有土地楼房出售，有三项电，售价320万，非诚匆扰！\n电话：13944568285  13944556162','--','2015-05-12 20:04:32','','',''),(192,'qq1',0,'出售','出售金典花都楼房','18626558499','--','2室1厅1厨1卫','72','0','0','--','--','--','--','--','26','3612','6/7','金典花都','金典花都','金典花都A22栋，6楼，非顶楼，72平，精装修，家具家电齐全。','--','2015-05-12 20:20:57','','',''),(193,'qq1',0,'出售','售裕丰佳园楼房','13246746789','--','2室1厅1厨1卫','88.18','0','0','--','--','--','--','--','32','3629','4/7','裕丰佳园','裕丰佳园','县医院对过裕丰佳园，4楼，88.18平，精装修，家具家电齐全，一口价，32万，讲价匆扰。','--','2015-05-12 20:23:58','','',''),(194,'qq1',0,'出售','平房急售','13644357788','--','2室1厅1厨1卫','65','0','0','--','--','--','--','--','17','2616','1/1','采胜店','其它小区','采胜店有一平房，65平，占地2亩，前有园，后有院，一口价17万。','--','2015-05-12 20:27:32','','',''),(195,'qq1',0,'出售','出售门市','7223608','--','9室1厅1厨1卫','200','0','0','--','--','--','--','--','160','8000','1/5','西邮局对面','其它小区','西邮局对面（现老赵串店）门市出售，160万，非诚匆扰！','--','2015-05-12 20:34:25','','',''),(196,'qq1',0,'出售','急售阁楼','13843556282','--','2室1厅1厨1卫','60','0','0','--','--','--','--','--','5','834','6/6','金达菜','金达菜','金达菜电业对过阁楼，60平！','--','2015-05-12 20:36:08','','',''),(197,'qq1',0,'出售','低价售楼','15044532277','--','1室1厅1厨1卫','50','0','0','--','--','--','--','--','10','2000','6/6','清真寺对面','其它小区','清真寺对面6楼，50平，三面朝阳，10万元低价出售','--','2015-05-12 20:40:16','','',''),(198,'qq1',0,'出租','楼房出租','13614453789','--','2室1厅1厨1卫','60','0','0','800','--','--','--','--','10','1667','5/6','联建楼','联建楼','','--','2015-05-12 20:42:34','','',''),(199,'qq1',0,'出租','楼房出租','13894504877','--','2室1厅1厨1卫','60','0','0','1000','--','--','--','--','10','1667','5/6','建行对面','其它小区','建行对面，5楼，60平，家具家电齐全','--','2015-05-12 20:43:26','','',''),(200,'qq1',0,'出租','楼房出租','15143535681','--','3室1厅1厨1卫','87.5','0','0','1200','--','--','--','--','10','1143','6/6','佳兴南区','佳兴小区','佳兴南区6楼，87.5平，家具家电齐全，价格面议','--','2015-05-12 20:45:02','','',''),(201,'qq1',0,'出租','门市出租','13944557068','--','1室1厅1厨1卫','40','0','0','500','--','--','--','--','10','2500','1/1','四小附近','其它小区','四小附近，文化路西老邮政局后门斜对过，有一平房门市出租。40平米，内有暖气。全年房租，6000元。','--','2015-05-12 20:59:27','','',''),(202,'qq1',0,'出租','阁楼出租','13844550336','--','1室1厅1厨1卫','60','0','0','700','--','--','--','--','10','1667','6/6','富奥家园','富奥家园','富奥家园新装修阁楼出租，家具家电齐全，年租金8000元。','--','2015-05-12 21:01:29','','',''),(203,'qq1',0,'出售','售杰','13804455522','--','2室1厅1厨1卫','77','0','0','700','--','--','--','--','32','4156','4/6','佳兴北区','佳兴小区','简装，带部分家具','--','2015-05-12 21:13:05','','',''),(204,'tpcwre',0,'出售','售阳光城6楼','13843529553','--','2室1厅1厨1卫','65.53','0','0','--','--','--','--','--','20','3053','6/7','阳光城','阳光城','阳光城E6 ，6楼，65.53平，已装修！','--','2015-05-14 07:01:46','','',''),(205,'tpcwre',0,'出售','售楼','13843552257','--','3室2厅1厨1卫','126','0','0','--','--','--','--','--','24.5','1945','6/7','世纪花园','世纪花园','世纪花园，6楼，126平，毛坯楼，24.5万，非诚匆扰！','--','2015-05-14 07:03:37','','',''),(206,'tpcwre',0,'出售','售楼','15326354005','--','2室2厅1厨1卫','71','0','0','--','--','--','--','--','28.5','4015','2/6','一中附近','其它小区','简装，可直接过户！','--','2015-05-14 07:05:24','','',''),(207,'tpcwre',0,'出售','售楼','15326354005','--','4室2厅1厨2卫','163','0','0','--','--','--','--','--','50','3068','4/6','老盛唐茶苑','其它小区','老盛唐茶苑楼上四楼，163平，全越式，未装修，可直接过户，带仓房，位置好，地势高，交通便利！','--','2015-05-14 07:08:24','','',''),(208,'tpcwre',0,'出售','门市出售','13404533758','--','1室--厅--厨1卫','63','0','0','--','--','--','--','--','32','5080','1/1','康馨家园对面','康馨家园','','--','2015-05-14 07:12:43','','',''),(209,'tpcwre',0,'出售','售腾龙湾五楼','13243803456','--','4室2厅1厨2卫','157','0','0','--','--','--','--','--','41','2612','5/7','腾龙湾','腾龙湾','另还有城南村36平平房，前后有院，有仓房，靠道边，2013年新盖瓦房。','--','2015-05-14 07:15:44','','',''),(210,'tpcwre',0,'出售','售前进花园四楼','7223608','--','2室1厅1厨1卫','70','0','0','--','--','--','--','--','23','3286','4/6','前进花园','前进花园','前进花园3号楼，4楼70平，带仓房！','--','2015-05-14 07:19:37','','',''),(213,'tpcwre',0,'出售','售楼','13404532900','--','1室1厅1厨1卫','48','0','0','--','--','--','--','--','15','3125','3/6','四小对面','其它小区','四小对面老参茸三楼住宅，48平米，拎包入住，地热，可过户。','--','2015-05-15 19:35:00','','',''),(215,'tpcwre',0,'出售','售楼','15144536663','--','2室1厅1厨1卫','74.14','0','0','--','--','--','--','--','27','3642','5/6','绿园小区','绿园小区','家具家电齐全，采光好，拎包入住，可办按揭。','--','2015-05-17 10:03:42','','','');
/*!40000 ALTER TABLE `fanginfo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `img`
--

DROP TABLE IF EXISTS `img`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `img` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(55) NOT NULL,
  `path` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `img`
--

LOCK TABLES `img` WRITE;
/*!40000 ALTER TABLE `img` DISABLE KEYS */;
INSERT INTO `img` VALUES (13,'sz_1','http://qianxing.b0.upaiyun.com/fang/1472478510.png'),(14,'sz_2','http://qianxing.b0.upaiyun.com/fang/1472478517.jpg'),(9,'sy_3','http://qianxing.b0.upaiyun.com/fang/1472512654.jpg'),(10,'sy_4','http://qianxing.b0.upaiyun.com/fang/1472512656.jpg'),(7,'sy_1','http://qianxing.b0.upaiyun.com/fang/1472512647.PNG'),(8,'sy_2','http://qianxing.b0.upaiyun.com/fang/1472512652.jpg'),(11,'sy_5','http://qianxing.b0.upaiyun.com/fang/1472512657.jpg'),(12,'sy_6','http://qianxing.b0.upaiyun.com/fang/1472512659.PNG'),(15,'fabu_1','http://qianxing.b0.upaiyun.com/fang/1472478527.jpg'),(16,'fabu_2','http://qianxing.b0.upaiyun.com/fang/1472478535.jpg'),(17,'info_1','http://qianxing.b0.upaiyun.com/fang/1472478544.jpg'),(18,'info_2','http://qianxing.b0.upaiyun.com/fang/1472478551.jpg'),(19,'info_3','http://qianxing.b0.upaiyun.com/fang/1472478558.jpg'),(20,'header_1','http://qianxing.b0.upaiyun.com/fang/1472478240.jpg'),(21,'header_2','http://qianxing.b0.upaiyun.com/fang/1472477544.jpg'),(22,'header_3','http://qianxing.b0.upaiyun.com/fang/1472477550.jpg');
/*!40000 ALTER TABLE `img` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ly`
--

DROP TABLE IF EXISTS `ly`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ly` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(255) NOT NULL,
  `time` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ly`
--

LOCK TABLES `ly` WRITE;
/*!40000 ALTER TABLE `ly` DISABLE KEYS */;
INSERT INTO `ly` VALUES (13,'aaaaaaaaaaaa','2015-05-30 07:13:28'),(15,'sgfsaaaaaaaaaaaaaaaaaaa','2016-08-30 06:34:12');
/*!40000 ALTER TABLE `ly` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(55) NOT NULL,
  `pass` varchar(55) NOT NULL,
  `safe` varchar(55) NOT NULL,
  `by` varchar(55) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (17,'tpcwre','0b4e7a0e5fe84ad35fb5f95b9ceeac79','0b4e7a0e5fe84ad35fb5f95b9ceeac79',''),(20,'zjlzjl','fc52cd90aa1be4a83e403a6586006d6c','f1771d86c9db2176af478be1c97a9555',''),(21,'tpcwre1','47bce5c74f589f4867dbd57e9ca9f808','594f803b380a41396ed63dca39503542',''),(22,'tpcwre2','47bce5c74f589f4867dbd57e9ca9f808','',''),(23,'tpcwre3','0b4e7a0e5fe84ad35fb5f95b9ceeac79','594f803b380a41396ed63dca39503542',''),(24,'tpcwre5','47bce5c74f589f4867dbd57e9ca9f808','',''),(25,'刘丽丽','594f803b380a41396ed63dca39503542','',''),(26,'tpcwre7','594f803b380a41396ed63dca39503542','594f803b380a41396ed63dca39503542',''),(27,'aaaaa','594f803b380a41396ed63dca39503542','','');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-08-30  7:23:57
