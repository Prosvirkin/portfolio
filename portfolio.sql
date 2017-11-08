-- MySQL dump 10.13  Distrib 5.5.50, for Win32 (x86)
--
-- Host: localhost    Database: portfolio
-- ------------------------------------------------------
-- Server version	5.5.50

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
-- Table structure for table `Blog`
--

DROP TABLE IF EXISTS `Blog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `header` char(255) NOT NULL,
  `content` text NOT NULL,
  `image` mediumblob NOT NULL,
  `datetime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Blog`
--

LOCK TABLES `Blog` WRITE;
/*!40000 ALTER TABLE `Blog` DISABLE KEYS */;
INSERT INTO `Blog` VALUES (1,'Windows 10 Fall Creators Update защитит компьютер от вирусов-вымогателей','В Windows 10 нашли функцию защиты от вирусов-вымогателей, которую Microsoft не афишировала на презентации обновления. Теперь компания выпустила пост в блоге, где разработчики описали новые опции безопасности. Главная из них — контролированный доступ к папкам. После включения утилита в режиме реального времени работает с файлами и при обнаружении угрозы закрывает доступ к папкам для постороннего ПО. Microsoft также рассказала, как включить новую функцию в Windows 10.Нововведение доступно в центре безопасности защитника Windows. По умолчанию опция для борьбы с вымогателями функционирует только со стандартными папками: «Документы», «Изображения», «Видео» и прочими, однако пользователь может добавить места для сканирования вручную.Помимо этого, разработчики упомянули, что новую версию системы тестировали на большем количестве устройств, чтобы обеспечить максимальную совместимость ПО. Размер пакета обновлений также был уменьшен на 25%.','0_m3wsM19hE.jpg',1509174283),(2,'Samsung готовит процессор с искусственным интеллектом для Galaxy S9','Samsung инвестировала в китайский стартап DeePhi Tech, занимающийся разработками в сфере искусственного интеллекта. Компания создала уникальную архитектуру и технологию сжатия микросхем, ответственных за работу нейронных сетей, которые будут применены в следующем флагманском чипсете Samsung в качестве выделенного сопроцессора, отвечающего за выполнение задач, связанных с машинным обучением и AI.Первый мобильный процессор с выделенным блоком для машинного обучения представила компания Huawei. Чип Kirin 970 уже используется в флагманских Mate 10 и Mate 10 Pro. Следом Apple представила A11 Bionic с таким же сопроцессором, который установлен в новых iPhone 8, 8 Plus и iPhone X.\r\n\r\nДля каких функций Samsung будет использовать технологии машинного обучения — пока остаётся загадкой. По слухам, Galaxy S9 получит сканер 3D-сканирования лица, как в iPhone X. Возможно, его работа будет основана на нейронных сетях.\r\n\r\nМинувшим летом Qualcomm выпустила набор для разработчиков Snapdragon Neural Processing Engine, поэтому не исключено, что такой же блок появится и в новом Snapdragon 845.','negativespace1-21.jpg',1509174271),(3,'Оптоволокно может служить для предсказания землетрясений','Учёные Стэнфордского университета считают, что километры оптоволокна, используемого для передачи высокоскоростного интернета, в будущем способны превратиться в целую сеть по обнаружению и исследованию землетрясений. Биондо Бионди, профессор геофизики в Стэнфордской школе Земли, заявил, что таким образом можно получить недорогую обсерваторию с миллиардами датчиков. Для этого исследователи разработали технологию, которая фиксирует сейсмическую активность путём анализа смещения оптоволоконных линий.Специальные лазерные датчики следят за смещениями и отправляют информацию о силе и направлении толчков. Система способна не только выявлять различные типы сейсмических волн, определяя серьёзность угрозы, но и обнаруживать очень незначительные или локальные землетрясения, которые могли бы остаться незамеченными.\r\n\r\nОтслеживание сейсмической активности на основе оптоволокна не является чем-то совершенно новым, но ранее оно было сосредоточено вокруг акустического зондирования, требующего обёртывания кабеля в цемент и крепления к поверхности земли. Новый метод предусматривает использование существующих оптоволоконных линий, помещённых в пластиковые трубы.\r\n\r\nПравда, на пути осуществления этой идеи есть много проблем. Одной из них является ограничение распространения оптоволоконной сети — такая система может не работать в сельских районах. На данный момент исследователи запустили пробную сеть в радиусе 3 миль вокруг Стэнфордского университета. Поэтому неизвестно, как она будет работать в пределах города или целой страны. Но даже в этом случае это гораздо выгоднее установки специального оборудования.','bmw_e90_deep_concave_chernyj_vertolet_94623_1366x768.jpg',1509174251),(4,'В YouTube появилась поддержка экранов 18:9','Google добавила поддержку адаптации видео к безрамочным экранам с соотношением сторон 18:9 в приложении YouTube. Ранее намёки на новую функцию нашёл ресурс Android Police, а теперь опция стала доступна официально. На данный момент воспользоваться нововведением могут только владельцы смартфона Pixel 2 XL. Они уже показали, как выглядит новый режим воспроизведения в действии.\r\n\r\nЧтобы подогнать ролик под дисплей без рамок, нужно развести два пальца в окне воспроизведения — подобный жест используется для масштабирования фотографий. «Щипок» по экрану вернёт видео к стандартному режиму.Новая функция доступна начиная с версии 12.40. Если жест не работает после обновления приложения, следует принудительно закрыть YouTube в настройках Pixel 2 XL. О доступности опции на других гаджетах пока ничего не сообщается.','6UHHE19YG7.jpg',1509174236);
/*!40000 ALTER TABLE `Blog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `content` varchar(500) NOT NULL,
  `datetime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (1,1,'Мистер Твистер','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis dolorem doloribus esse incidunt iure maxime necessitatibus optio quas ratione velit. Accusamus culpa deserunt, dolorem impedit ipsa nisi officia porro repellat.',1509893342),(2,2,'Аноним','Пост номер 2 ',1509893392),(3,1,'Аноним',' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis dolorem doloribus esse incidunt iure maxime necessitatibus optio quas ratione velit. Accusamus culpa deserunt, dolorem impedit ipsa nisi officia porro repellat.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis dolorem doloribus esse incidunt iure maxime necessitatibus optio quas ratione velit. Accusamus culpa deserunt, dolorem impedit ipsa nisi officia porro repellat.',1509895400),(4,1,'Не аноним','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis dolorem doloribus esse incidunt iure maxime necessitatibus optio quas ratione velit. Accusamus culpa deserunt, dolorem impedit ipsa nisi officia porro repellat.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis dolorem doloribus esse incidunt iure maxime necessitatibus optio quas ratione velit. Accusamus culpa deserunt, dolorem impedit ipsa nisi officia porro repellat.Lorem ipsum dolor sit amet, consectetur adipisic',1509895512),(5,2,'Пегий дудочник','Алгоритм сжатия, позволяющий сжимать данные, в частности звук и видео, без потери качества (коэффициент сжатия Вайсмана 5,9). Продвигается Ричардом Хендриксом  и его друзьями. Реализация алгоритма приняла вид платформы, с помощью который можно было быстро работать с данными. Например, скачать фильм за считанные секунды или организовать видеотрансляцию высокого качества, которую можно смотреть даже при медленном интернет-канале. Ричарда, к сожалению, подвела чрезмерная концентрация на технической',1509901880);
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','$2y$10$C4fp3GfmgI3duTCZndtm9.HVaBAZfmY3PTBMPG9dDwxmDyxZtg0N6');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `websites`
--

DROP TABLE IF EXISTS `websites`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `websites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `reference` text,
  `image` mediumblob,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `websites`
--

LOCK TABLES `websites` WRITE;
/*!40000 ALTER TABLE `websites` DISABLE KEYS */;
INSERT INTO `websites` VALUES (1,'Hosting','Многостраничный сайт','https://xtw1st.github.io/projects/Hosting/index.html','Hosting.png'),(2,'Amazing Life','Лендинг с анимациями ','https://xtw1st.github.io/projects/Amizng/index.html','Amazing.png'),(3,'LandX','Landing Page (один из первых тренировочных сайтов)','https://xtw1st.github.io/projects/LandX/index.html','LandX.png'),(4,'lookshop',' Интернет магазин','https://xtw1st.github.io/projects/Lookshop/index.html','Lookshop.png'),(5,'Ink tattoo','Landing Page тату салона',' https://xtw1st.github.io/projects/Ink-tattoo/index.html','ink-tattoo.PNG'),(6,'O nail','Landing Page для студии ногтевого сервиса в Омске','http://nogti55.ru/','ONail.PNG'),(7,'Hairegen','Landing Page бесплатной процедуры по восстановлению волос','http://hair.best-goods.me/','hair.png'),(8,'ProMotion','Корпоративный сайт для ProMotion ','http://prmotion.ru/','ProMotion.PNG');
/*!40000 ALTER TABLE `websites` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-08 14:48:16
