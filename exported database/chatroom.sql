-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2014 at 12:39 PM
-- Server version: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `chatroom`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE IF NOT EXISTS `answer` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `answer` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `topic_id` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`id`, `answer`, `user_id`, `topic_id`, `image`) VALUES
(1, 'ya how can i help u??', '2', '1', 'Chrysanthemum1.jpg'),
(2, 'ya how can i help u??', '2', '1', 'Chrysanthemum1.jpg'),
(3, 'waya kana yaro...', '3', '1', 'Koala1.jpg'),
(4, 'ma .. hahahaa', '1', '2', '10426865_1445443272371225_5465308652346150528_n.jpg'),
(5, 'fmsadflkajsdlfjasd;f madfjsdajf la lasdjf lajf;l j jflads fljfl   ;lsadflajsf   lsf;lkas j;j lsadfjlasdfn nbdnfnasfnzcxvcxzn   asdfoic  sdlkfvas  sladfoisdajfn   sdfjodjf '';djf;lajs', '1', '1', '10426865_1445443272371225_5465308652346150528_n.jpg'),
(7, 'now it''s good\r\n', '1', '1', '10426865_1445443272371225_5465308652346150528_n.jpg'),
(8, 'falkdjf aljsfl jlsadfjl ljklj9oeln vnxpo n lka jgnalskh nl ;lfsdjf las,v sf ajflk sags.mvn;al  ljalskf nflas jflkaflk jls;fj  jlfj lksflk jflk ajflnal sfm asnf;s adlfk lkfj lsafj lsfn a;lfjlk awnfl asfsn fljs asklfjl;askjflk afjsal fjlas', '1', '1', '10426865_1445443272371225_5465308652346150528_n.jpg'),
(9, 'zfg;lksaj f;lkfffffffffffffffffffffffffg    sf;las ;  lkfsdlkf fnf nlfkdj dn fmsfa lkslkfj slkfjlksj flalkjaslkfj slkfjals kflsj fklksf lksjf lksfkasfkl aslfs flksdjfl asjflkasj flasjf las flfjlksdjfla;jf lasfj lfkjsldfj ;sfj lkf lsdfj lsjfklsjf lksjfkl j', '1', '1', '10426865_1445443272371225_5465308652346150528_n.jpg'),
(12, 'let''s try this one', '1', '7', '10426865_1445443272371225_5465308652346150528_n.jpg'),
(13, 'di sir ta di gora ao cricket gatelo tha gora', '3', '2', 'Koala1.jpg'),
(14, 'now it si good\r\n', '3', '15', 'Koala1.jpg'),
(15, 'ya wot''s up', '1', '16', '10426865_1445443272371225_5465308652346150528_n.jpg'),
(16, 'za', '1', '1', '10426865_1445443272371225_5465308652346150528_n.jpg'),
(17, 'this is the fourth one', '1', '0', '10426865_1445443272371225_5465308652346150528_n.jpg'),
(18, 'this is the fourth one', '1', '0', '10426865_1445443272371225_5465308652346150528_n.jpg'),
(19, 'Allah ki shukar ha tm sunao', '1', '17', '10426865_1445443272371225_5465308652346150528_n.jpg'),
(20, 'oye khud poch kar khud jawab da raha ho', '2', '17', 'Desert2.jpg'),
(21, 'wali da plar noukar di yama si.. pa google ogora kana..', '1', '21', '10426865_1445443272371225_5465308652346150528_n.jpg'),
(22, 'how could i know', '1', '4', '10426865_1445443272371225_5465308652346150528_n.jpg'),
(23, 'aur kor jawab nahi da raha tho kiya karo....', '1', '17', '10426865_1445443272371225_5465308652346150528_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `catogories`
--

CREATE TABLE IF NOT EXISTS `catogories` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `catogories`
--

INSERT INTO `catogories` (`id`, `name`) VALUES
(1, 'sports'),
(2, 'web'),
(3, 'entertainment'),
(4, 'gernal discussion');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `s_id` int(255) NOT NULL,
  `r_id` int(255) NOT NULL,
  `ss_id` int(255) NOT NULL,
  `rr_id` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `image`, `message`, `s_id`, `r_id`, `ss_id`, `rr_id`) VALUES
(47, '10426865_1445443272371225_5465308652346150528_n.jpg', 'cheeeeeeeeeeeckkkkkkkking', 1, 3, 3, 1),
(48, '10426865_1445443272371225_5465308652346150528_n.jpg', 'singa ye', 1, 2, 2, 1),
(49, 'Desert2.jpg', 'khi yma', 2, 1, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rpassword` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL,
  `college` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `username`, `email`, `country`, `password`, `rpassword`, `gender`, `image`, `school`, `college`, `profession`) VALUES
(1, 'sahibzada', 'abdul', 'sahibzada_abdul@yahoo.com', 'Pakistan', '1234', '1234', 'Male', '10426865_1445443272371225_5465308652346150528_n1.jpg', 'fazaia', 'GC peshawar', 'still a student at uet peshawar.... '),
(2, 'aqeel', 'aqeel', 'sahibzada.aqeel@yahoo.com', 'pakistan', '1234', '1234', 'Male', 'Desert2.jpg', 'fazaia inter college', 'GCT', 'shift engineer'),
(3, 'sahibzada ashraf', 'ashraf', 'sahibzadaashraf.ali@facebook.com', 'Pakistan', '1234', '1234', 'Male', 'Jellyfish2.jpg', 'junior cambarage ', 'GCMS', 'in pharmautical company');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE IF NOT EXISTS `topics` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `cat_id` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `name`, `user_id`, `cat_id`, `image`, `username`) VALUES
(1, 'any football fans in here???', '1', '1', '10426865_1445443272371225_5465308652346150528_n.jpg', ''),
(2, 'alaka cricket cha ogatelo???', '3', '1', 'Koala1.jpg', ''),
(4, 'which is best editor for php??', '1', '2', '10426865_1445443272371225_5465308652346150528_n.jpg', ''),
(7, 'da la singa chal di ... arho poe dma pi na... da la si tension di .... chi us di sare si okama', '1', '1', '10426865_1445443272371225_5465308652346150528_n.jpg', ''),
(8, 'ya check karta hu ka ab kiya hoga', '3', '1', 'Koala1.jpg', ''),
(9, 'now checking for the name and image.. ?', '3', '1', 'Koala1.jpg', '0'),
(10, 'it''s not working', '3', '1', 'Koala1.jpg', '0'),
(11, 'another try', '3', '1', 'Koala1.jpg', '0'),
(12, 'hope so this time it will work', '3', '1', 'Koala1.jpg', '0'),
(13, 'ufffffffffffffffffffff', '3', '1', 'Koala1.jpg', '0'),
(14, 'jsladfjldsaf', '3', '1', 'Koala1.jpg', '0'),
(15, 'goog morinihn', '3', '2', 'Koala1.jpg', '0'),
(16, 'any php users over here', '1', '2', '10426865_1445443272371225_5465308652346150528_n.jpg', 'abdul'),
(17, 'kiya hal ha dosto', '1', '4', '10426865_1445443272371225_5465308652346150528_n.jpg', 'abdul'),
(18, 'lkj', '1', '3', '10426865_1445443272371225_5465308652346150528_n.jpg', 'abdul'),
(19, 'jlkj;kl', '1', '3', '10426865_1445443272371225_5465308652346150528_n.jpg', 'abdul'),
(20, '    kjhi', '1', '3', '10426865_1445443272371225_5465308652346150528_n.jpg', 'abdul'),
(21, 'oye kick na kitni bussiness kiya ha????????????', '1', '3', '10426865_1445443272371225_5465308652346150528_n.jpg', 'abdul');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
