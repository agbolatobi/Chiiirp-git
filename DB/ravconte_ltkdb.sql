-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 14, 2017 at 02:05 PM
-- Server version: 5.6.35
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ravconte_ltkdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `audios`
--

CREATE TABLE `audios` (
  `Audio_id` int(255) NOT NULL,
  `Post_id` int(255) NOT NULL,
  `Audio_title` varchar(255) NOT NULL,
  `Audio_link` text NOT NULL,
  `Audio_type` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `audios`
--

INSERT INTO `audios` (`Audio_id`, `Post_id`, `Audio_title`, `Audio_link`, `Audio_type`) VALUES
(1, 44, '05-bryson_tiller-dont.mp3', 'Audios/44_05-bryson_tiller-dont.mp3', 'audio/mpeg'),
(2, 45, '05-bryson_tiller-dont.mp3', 'audios/45_05-bryson_tiller-dont.mp3', 'audio/mpeg'),
(3, 46, '', 'audios/46_', ''),
(4, 127, 'Starboy', 'audios/127_THE-WEEKND-FT-DAFT-PUNKâ€“STARBOY(www.naijaway.com)music.mp3', 'audio/mp3');

-- --------------------------------------------------------

--
-- Table structure for table `discussion`
--

CREATE TABLE `discussion` (
  `Discussion_id` int(255) NOT NULL,
  `Post_id` int(255) NOT NULL,
  `Author_id` int(255) NOT NULL,
  `input_time` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discussion`
--

INSERT INTO `discussion` (`Discussion_id`, `Post_id`, `Author_id`, `input_time`) VALUES
(1, 4, 0, '2016-08-23 15:19:03'),
(2, 4, 0, '2016-08-23 20:37:08'),
(3, 3, 0, '2016-08-23 20:43:37'),
(4, 2, 0, '2016-08-23 21:02:42'),
(5, 9, 2, '2016-08-23 21:31:11'),
(6, 9, 3, '2016-08-23 21:43:26'),
(7, 11, 0, '2016-08-23 22:31:04'),
(8, 1, 2, '2016-08-23 23:06:58'),
(9, 1, 1, '2016-08-23 23:20:33'),
(10, 11, 4, '2016-08-23 23:31:49'),
(11, 12, 4, '2016-08-24 00:07:43'),
(12, 12, 2, '2016-08-24 00:14:42'),
(13, 12, 4, '2016-08-24 00:27:17'),
(14, 12, 4, '2016-08-24 00:29:49'),
(15, 12, 1, '2016-08-24 00:32:10'),
(16, 12, 1, '2016-08-24 00:34:18'),
(17, 12, 1, '2016-08-24 00:36:28'),
(18, 12, 1, '2016-08-24 00:37:44'),
(19, 12, 4, '2016-08-24 00:43:43'),
(20, 15, 2, '2016-08-27 19:49:30'),
(21, 15, 2, '2016-08-27 19:49:31'),
(22, 15, 2, '2016-08-27 19:49:40'),
(23, 15, 2, '2016-08-27 19:49:58'),
(24, 47, 1, '2016-09-19 12:32:02'),
(25, 54, 1, '2016-09-21 19:00:48'),
(26, 43, 2, '2016-09-23 21:56:04'),
(27, 43, 2, '2016-09-23 21:56:08'),
(28, 54, 2, '2016-09-23 21:57:57'),
(29, 55, 1, '2016-09-23 22:30:13'),
(30, 59, 2, '2016-10-05 19:42:33'),
(31, 75, 10, '2016-10-13 22:41:27'),
(32, 79, 1, '2016-10-17 00:53:28'),
(33, 79, 1, '2016-10-17 17:22:32'),
(34, 81, 1, '2016-10-19 19:40:24'),
(35, 77, 1, '2016-10-20 17:56:07'),
(36, 78, 1, '2016-10-20 18:25:31'),
(37, 77, 1, '2016-10-20 23:09:50'),
(38, 77, 1, '2016-10-22 23:09:43'),
(39, 82, 2, '2016-10-27 13:15:15'),
(40, 82, 1, '2016-10-27 13:30:03'),
(41, 82, 2, '2016-10-27 13:32:27'),
(42, 11, 2, '2016-10-27 13:35:54'),
(43, 83, 2, '2016-10-30 23:46:32'),
(44, 87, 1, '2016-11-10 00:47:56'),
(45, 87, 2, '2016-11-10 19:16:12'),
(46, 88, 1, '2016-11-10 19:17:16'),
(47, 97, 1, '2016-11-10 19:53:17'),
(48, 97, 1, '2016-11-10 19:54:06'),
(49, 87, 1, '2016-11-10 20:11:47'),
(50, 87, 1, '2016-11-10 20:12:05'),
(51, 96, 2, '2016-11-11 17:58:55'),
(52, 103, 1, '2016-11-11 18:11:39'),
(53, 96, 1, '2016-11-11 18:12:13'),
(54, 103, 2, '2016-11-11 19:27:29'),
(55, 96, 1, '2016-11-12 00:47:12'),
(56, 96, 1, '2016-11-12 00:52:36'),
(57, 96, 1, '2016-11-12 00:54:45'),
(58, 96, 1, '2016-11-12 00:58:07'),
(59, 97, 1, '2016-11-12 01:08:24'),
(60, 96, 2, '2016-11-12 10:29:39'),
(61, 113, 1, '2016-11-13 13:13:02'),
(62, 112, 1, '2016-11-13 13:13:35'),
(63, 82, 1, '2016-11-13 13:21:12'),
(64, 82, 1, '2016-11-13 14:20:57'),
(65, 82, 1, '2016-11-13 14:25:59'),
(66, 82, 1, '2016-11-13 14:27:10'),
(67, 82, 9, '2016-11-13 15:44:43'),
(68, 82, 9, '2016-11-13 15:44:44'),
(69, 82, 9, '2016-11-13 15:44:44'),
(70, 82, 9, '2016-11-13 15:44:45'),
(71, 82, 9, '2016-11-13 15:44:45'),
(72, 82, 9, '2016-11-13 15:46:27'),
(73, 87, 1, '2016-11-13 20:22:57'),
(74, 87, 1, '2016-11-13 20:23:37'),
(75, 87, 1, '2016-11-13 20:23:37'),
(76, 87, 1, '2016-11-13 20:23:37'),
(77, 87, 1, '2016-11-13 20:33:56'),
(78, 87, 1, '2016-11-13 20:34:01'),
(79, 87, 1, '2016-11-13 20:34:07'),
(80, 87, 1, '2016-11-13 21:08:36'),
(81, 87, 1, '2016-11-13 21:08:45'),
(82, 115, 2, '2016-11-14 16:08:09'),
(83, 115, 2, '2016-11-14 16:08:27'),
(84, 115, 1, '2016-11-14 19:05:43'),
(85, 82, 2, '2016-11-16 08:47:51'),
(86, 116, 1, '2016-11-16 09:39:52'),
(87, 110, 4, '2016-11-17 13:13:48'),
(88, 122, 2, '2016-11-17 19:11:01'),
(89, 122, 12, '2016-11-18 09:25:45'),
(90, 111, 9, '2016-11-18 10:38:57'),
(91, 125, 2, '2016-11-23 07:24:35'),
(92, 129, 12, '2016-11-23 10:37:42'),
(93, 129, 2, '2016-11-23 13:45:13'),
(94, 131, 2, '2016-11-23 13:58:35'),
(95, 131, 12, '2016-11-23 14:11:27'),
(96, 125, 1, '2016-11-24 19:50:39'),
(97, 133, 2, '2016-11-28 17:25:58'),
(98, 133, 12, '2016-11-28 22:18:13'),
(99, 135, 2, '2016-11-29 07:44:41'),
(100, 135, 12, '2016-11-30 12:23:49'),
(101, 135, 12, '2016-11-30 12:24:19'),
(102, 131, 1, '2016-11-30 21:36:02'),
(103, 131, 1, '2016-11-30 21:36:32'),
(104, 131, 12, '2016-11-30 21:36:47'),
(105, 131, 12, '2016-11-30 21:39:06'),
(106, 131, 12, '2016-11-30 21:44:01'),
(107, 131, 2, '2016-11-30 22:37:22'),
(108, 137, 12, '2016-12-01 19:33:47'),
(109, 139, 1, '2016-12-03 23:00:03'),
(110, 139, 12, '2016-12-03 23:11:42'),
(111, 131, 12, '2016-12-04 14:37:39'),
(112, 140, 2, '2016-12-06 15:56:01'),
(113, 138, 4, '2016-12-08 10:08:51'),
(114, 138, 1, '2016-12-11 23:10:30'),
(115, 131, 2, '2016-12-11 23:30:20'),
(116, 138, 1, '2016-12-12 00:05:54');

-- --------------------------------------------------------

--
-- Table structure for table `discussion_message`
--

CREATE TABLE `discussion_message` (
  `message_id` int(255) NOT NULL,
  `discussion_id` int(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discussion_message`
--

INSERT INTO `discussion_message` (`message_id`, `discussion_id`, `content`) VALUES
(1, 1, 'Jballs'),
(2, 3, 'sdfsdfdsfsd'),
(3, 4, 'jides comment is fine'),
(4, 5, 'This guy made me lol in real life!'),
(5, 6, 'ode'),
(6, 7, 'that just killed me'),
(7, 8, 'I disagree!\nXNTPS do have Fe so...\n'),
(8, 9, 'so what ode'),
(9, 10, 'Your fada!! :O '),
(10, 12, 'lmao!'),
(11, 14, 'I wish i could edit my post '),
(12, 17, 'too many empty posts here \''),
(13, 18, 'i wish we could edit posts too tho \'\''),
(14, 19, 'so wildcards can post now? :o'),
(15, 20, 'Aaaand I just realized I can\'t delete my posts ;c'),
(16, 21, ' '),
(17, 22, ' '),
(18, 23, ' Empty posts are a thing too :o\n'),
(19, 24, 'i really like this soong'),
(20, 25, 'Looool it is so true'),
(21, 26, 'lol so legit #thumbsup #timmyturner'),
(22, 27, ' '),
(23, 28, 'lmao! '),
(24, 29, 'Jesus'),
(25, 30, 'Really?'),
(26, 31, 'ðŸ˜¢ðŸ˜¢ðŸ˜¢ðŸ˜­ðŸ˜­ðŸ˜­'),
(27, 32, 'nice mark picture '),
(28, 33, 'loooool'),
(29, 34, 'wow wow wow'),
(30, 35, 'regards to your momsi'),
(31, 36, 'our brand '),
(32, 37, 'i need a one dance'),
(33, 38, 'regards to your pops'),
(34, 39, 'Chiiirp*\nIs all about life :D'),
(35, 40, 'Loooool wtf happened '),
(36, 41, 'I downvoted that post so badly xD\n'),
(37, 42, 'lmao'),
(38, 43, 'Congrats to the newly wed.\nThe reception was turnt too *thumbs up*'),
(39, 44, 'LOOOOL at Diego'),
(40, 45, 'eff klause!!!'),
(41, 46, 'shut up there'),
(42, 47, 'ðŸ˜‚ðŸ˜‚ðŸ˜‚ðŸ˜‚ðŸ˜‚ðŸ˜‚ðŸ˜‚ðŸ˜‚ðŸ˜‚ðŸ˜‚ðŸ˜‚ðŸ˜‚ðŸ˜‚ðŸ˜‚ðŸ˜‚ðŸ˜‚'),
(43, 48, ' yal are cruel'),
(44, 49, 'diego man so stupid'),
(45, 50, ' you should beg for messi\n'),
(46, 51, 'Reported.\nTotally inappropriate >:o\n'),
(47, 52, 'ðŸ˜‚ðŸ˜‚ðŸ˜‚ðŸ˜‚ðŸ˜‚ðŸ˜‚ðŸ˜‚ðŸ˜‚ the funniest part is chuck norris can swim though land ðŸ˜‚ðŸ˜‚ðŸ˜‚ðŸ˜‚ðŸ˜‚ðŸ˜‚ðŸ˜‚'),
(48, 53, 'ðŸ˜’ðŸ˜’ðŸ˜’ðŸ˜’ðŸ˜’ Shut up'),
(49, 54, 'He counted to infinity yo xD\nTwice!'),
(50, 55, ''),
(51, 56, ''),
(52, 57, ''),
(53, 58, 'wow'),
(54, 59, 'loooool'),
(55, 60, 'I was going to report your comment but that\'s not even possible yet :)'),
(56, 61, 'emm stop forming deep abeg'),
(57, 62, 'that cat tho'),
(58, 63, 'check'),
(59, 64, 'Phone check '),
(60, 65, 'Ajax check '),
(61, 66, 'Ajax check 2 '),
(62, 67, 'It\'s working now'),
(63, 68, 'It\'s working now'),
(64, 68, 'It\'s working now'),
(65, 70, 'It\'s working now'),
(66, 70, 'It\'s working now'),
(67, 72, 'There should be loader to show post is processing.  Also during that time, it should not accept input. I dont know if im making sense'),
(68, 73, ''),
(69, 74, 'testing'),
(70, 74, 'testing'),
(71, 74, 'testing'),
(72, 77, ' k lnlkn'),
(73, 78, ' kj k jlkl'),
(74, 79, ' messi'),
(75, 80, 'test loader'),
(76, 81, ' test loader 2'),
(77, 82, 'His worth actually do carry some weight. I feel like if I was a white american, I would see Trump as the worthy candidate. '),
(78, 83, '*words\n'),
(79, 84, 'exactly lets see where he will lead the world\n'),
(80, 85, 'You are. That would take care of the double posting issue. There should also be a kind of post validation to check for empty posts.'),
(81, 86, 'ðŸ˜‚ðŸ˜‚ðŸ˜‚ðŸ˜‚ðŸ˜‚'),
(82, 87, 'Dayyum!!'),
(83, 88, 'Jhinx <3'),
(84, 89, 'loooool\n'),
(85, 90, 'Lol nice'),
(86, 91, 'Why do you think so? :o'),
(87, 92, 'how is this anonymous poster '),
(88, 93, 'I\'m pretty sure this anonymous poster can\'t make a comment as anonymous lol'),
(89, 94, 'Lmao xD\nWhere the hell was he/she looking? \n'),
(90, 95, 'she mehn most likely female\n'),
(91, 96, 'read the article ode '),
(92, 97, 'Baba\'s life flashed in front of his eyes xD'),
(93, 98, 'looooool i swear'),
(94, 99, 'lmao she has a point though xD'),
(95, 100, 'i pray oooooo\n'),
(96, 101, ' i have enable notifications for post replies '),
(97, 102, 'test'),
(98, 103, ' test'),
(99, 104, 'test'),
(100, 105, ' try repeat'),
(101, 106, ' test 2'),
(102, 107, 'test 0\n'),
(103, 108, 'Ode am sure I will soon take over '),
(104, 109, 'take a screenshot please maybe it is different on my phone. i have tried to fix most of the responsivity things i have seen\n '),
(105, 110, 'and for number 2 do the same thing '),
(106, 111, 'test'),
(107, 112, 'Lorem ipsumLorem o.o'),
(108, 113, 'Lmao xD'),
(109, 114, 'ðŸ˜‚ðŸ˜‚ðŸ˜‚ðŸ˜‚ your so stupid'),
(110, 115, 'ðŸ˜‚ðŸ˜‚ðŸ˜‚ '),
(111, 116, 'ðŸ’©');

-- --------------------------------------------------------

--
-- Table structure for table `email_reg`
--

CREATE TABLE `email_reg` (
  `email_reg_id` int(255) NOT NULL,
  `temp_id` varchar(255) NOT NULL,
  `email` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(255) NOT NULL,
  `author_id` int(255) NOT NULL,
  `author_type` text NOT NULL,
  `content` varchar(255) NOT NULL,
  `send_time` datetime NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `author_id`, `author_type`, `content`, `send_time`, `status`) VALUES
(1, 2, 'user', 'Testing', '2016-08-23 23:07:22', 'waiting'),
(2, 0, 'unregistered', '', '2016-09-19 13:07:54', 'waiting'),
(3, 1, 'user', 'you should give us a platform to socialize with other developers', '2016-12-12 00:04:07', 'waiting');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `Image_id` int(255) NOT NULL,
  `Post_id` int(255) NOT NULL,
  `Image_title` varchar(255) NOT NULL,
  `Image_link` varchar(255) NOT NULL,
  `Image_width` int(255) NOT NULL,
  `Image_length` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`Image_id`, `Post_id`, `Image_title`, `Image_link`, `Image_width`, `Image_length`) VALUES
(1, 1, 'this is so true', 'image/1_909f4fd110231f91adc43b559ca079d2.jpg', 736, 588),
(2, 9, 'Screenshot_769.png', 'image/9_Screenshot_769.png', 422, 375),
(3, 11, 'Looks a lot like Daniel just waking up.', 'image/11_Koala.jpg', 1024, 768),
(4, 12, 'How i feel ', 'image/12_tumblr_nwf2xcjgTR1uuwnwbo1_250.gif', 245, 175),
(5, 15, 'tumblr_nw1gdojZCL1rjc5vwo1_1280.jpg', 'image/15_tumblr_nw1gdojZCL1rjc5vwo1_1280.jpg', 1080, 1080),
(6, 18, 'Impossible is nothing ', 'image/18_shot_2016-08-20_17-58-51.png', 1080, 1920),
(7, 37, 'Screenshot_2016-09-14-12-07-44.png', 'image/37_Screenshot_2016-09-14-12-07-44.png', 1068, 1298),
(8, 38, ':-D buhari\'s daughter', 'image/38_Screenshot_2016-09-14-11-38-41.png', 1080, 1920),
(9, 39, 'Screenshot_2016-09-09-08-48-41.png', 'image/39_Screenshot_2016-09-09-08-48-41.png', 1080, 1920),
(10, 40, 'tiimmy turner', 'image/40_c1677075dc5a4d067d3edebcbb21c8e2.jpg', 0, 0),
(11, 41, 'tiimmy turner', 'image/41_c1677075dc5a4d067d3edebcbb21c8e2.jpg', 0, 0),
(19, 59, 'cami v karoline :|)', 'imagestore/59_tumblr_o6irlxWi7X1tqgy8to1_500.jpg', 500, 551),
(13, 43, 'tiimmy turner', 'image/43_c1677075dc5a4d067d3edebcbb21c8e2.jpg', 500, 463),
(14, 48, 'a loader', 'image/48_.jpg', 188, 200),
(15, 49, 'Epic', 'image/49_portgas_d__ace_by_aura_blade4-d8a60ym.png', 300, 500),
(16, 50, 'jay and bae lol', 'imagestore/50_tumblr_n50ldgUj7V1r75vuso1_r1_500.png', 500, 594),
(17, 51, 'describe this in one word', 'imagestore/51_Capturemessi.PNG', 393, 446),
(18, 56, 'Somebodies Father', 'imagestore/56_Capturelol.PNG', 366, 478),
(20, 63, 'new season new messi', 'imagestore/63_messi-on-why-he-dyed-his-hair-blonde-i-made-3629247.png', 500, 566),
(21, 65, 'Chinese guy be like ', 'imagestore/65_aVe5qMn_460s_v1.jpg', 460, 460),
(22, 69, 'Oops ', 'imagestore/69_20160605_143800.jpg', 2592, 1944),
(23, 71, 'Chiiirp', 'imagestore/71_chiiirpbanner.png', 500, 382),
(24, 73, 'origin', 'imagestore/73_bird-clipart-image-funny-looking-little-cartoon-bird-with-a-big-4w2y3I-clipart.png', 1738, 2213),
(25, 74, 'variation', 'imagestore/74_bird2st.fw.png', 400, 400),
(26, 75, 'papa tunda\'s blade', 'imagestore/75_tumblr_n0i8xtQwtr1sfcg94o4_250.gif', 245, 150),
(27, 76, ' ', 'imagestore/76_Capturerihanna.PNG', 484, 601),
(28, 78, 'Chiiirp!', 'imagestore/78_chiirp1.png', 700, 500),
(29, 79, '57c95c8652689.560c10b752db8.png', 'imagestore/79_57c95c8652689.560c10b752db8.png', 540, 450),
(30, 80, 'The First Chiiirp splash-screen demo yet!', 'imagestore/80_Chiiirpsplashscreen1.png', 500, 500),
(31, 81, 'Today\'s 19th of October, 2016... The day Chiirp got its spots(background) :P', 'imagestore/81_background.png', 270, 661),
(32, 83, 'B bolly gets married ', 'imagestore/83_IMG_0226.JPG', 959, 1280),
(33, 84, 'Cheetah\'s Balance', 'imagestore/84_anigif_enhanced-buzz-22061-1398274515-171.gif', 340, 200),
(34, 85, 'big ass tongue', 'imagestore/85_man-used-funny-way-to-eat-gif.gif', 320, 223),
(35, 86, 'Coming soon', 'imagestore/86_Chiirp-Coming-soon1.png', 1530, 782),
(36, 88, 'Always believe in yourself...', 'imagestore/88_avnX3Bn_460s.jpg', 460, 460),
(37, 89, 'Riri', 'imagestore/89_IMG_0311.PNG', 640, 1136),
(38, 90, 'I get big cassava', 'imagestore/90_IMG_0306.PNG', 640, 1136),
(39, 91, 'Tweet of the day ðŸ˜‚ðŸ˜‚ðŸ˜‚ðŸ˜‚', 'imagestore/91_IMG_0328.PNG', 564, 220),
(40, 92, 'when u don\'t trust your wife', 'imagestore/92_4donald.jpg', 572, 390),
(41, 94, 'Kanye for 2020', 'imagestore/94_IMG_0366.PNG', 640, 1136),
(42, 95, 'I can bet igbo', 'imagestore/95_IMG_0359.PNG', 640, 1136),
(50, 119, 'F***ing Introverts xD', 'imagestore/119_aVD0rG8_460s.jpg', 460, 460),
(44, 97, 'A must read ðŸ˜‚ðŸ˜‚ðŸ˜‚ðŸ˜‚', 'imagestore/97_IMG_0376.JPG', 460, 2200),
(45, 103, '10 things you prolly didn\'t know about Chuck Norris ', 'imagestore/103_Screenshot_1409.png', 519, 524),
(46, 105, 'Fav icon Blue ', 'imagestore/105_fav2blubg.png', 300, 300),
(47, 106, 'Fav icon White', 'imagestore/106_fav2whtbg.png', 300, 300),
(48, 107, 'is this real ðŸ˜‚', 'imagestore/107_silicone-baby-avatar-babyclon-coverimage.jpg', 700, 700),
(49, 111, 'Post apocalyptic world', 'imagestore/111_IMG_0408.JPG', 700, 2911),
(51, 120, 'Creepy', 'imagestore/120_IMG_0511.JPG', 700, 689),
(52, 121, 'ðŸ˜‚ðŸ˜‚ðŸ˜‚ðŸ˜‚', 'imagestore/121_IMG_0522.PNG', 640, 1136),
(53, 122, 'Harley jink ðŸ˜‰', 'imagestore/122_IMG_0428.JPG', 700, 1052),
(54, 126, '???????', 'imagestore/126_hd-anonymous-wallpaper_123835849_275.jpg', 1920, 1080),
(55, 130, 'rate this piece of art', 'imagestore/130_klaus_mikaelson_by_meduzza13-d9g6ibi.jpg', 600, 886),
(56, 132, 'Bruce Lee- There are no limits', 'imagestore/132_2012-04-11-bruce-lee-2.jpg', 980, 6059),
(57, 133, 'ðŸ˜‚ðŸ˜‚ðŸ˜‚ðŸ˜‚ some friends tho ', 'imagestore/133_IMG_0668.GIF', 380, 380),
(58, 134, 'Disobedience was manâ€™s Original Virtue', 'imagestore/134_Screenshot_1416.png', 849, 409),
(59, 135, 'Friends hell no ðŸ˜‚ðŸ˜‚ðŸ˜‚ðŸ˜‚', 'imagestore/135_IMG_0678.JPG', 588, 2106),
(60, 136, 'Consequences be damed ', 'imagestore/136_IMG_0320.PNG', 200, 300),
(61, 137, 'Aw yeah! Finally made it to the post of the week!!', 'imagestore/137_Screenshot_1418.png', 404, 143),
(62, 138, 'When Ada is ready for you ðŸ˜‚ðŸ˜‚ðŸ˜‚ðŸ˜‚', 'imagestore/138_IMG_0726.PNG', 640, 631),
(63, 145, 'Thought for the Day', 'imagestore/145_Screenshot_10.png', 445, 580),
(65, 151, 'MEEE', 'imagestore/151_WhatsApp Image 2017-03-01 at 8.57.19 PM.jpeg', 1600, 1388),
(66, 153, 'Naruto', 'imagestore/153_5da08d24bc4c7d2847ee5dfa1604b114.jpg', 736, 862),
(67, 154, 'eren ', 'imagestore/154_1d5db9102ddadce1b9e5444843a777c3.jpg', 346, 615);

-- --------------------------------------------------------

--
-- Table structure for table `image_embed`
--

CREATE TABLE `image_embed` (
  `image_embed_id` int(255) NOT NULL,
  `Post_id` int(255) NOT NULL,
  `image_title` varchar(255) NOT NULL,
  `link` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `link`
--

CREATE TABLE `link` (
  `Link_id` int(255) NOT NULL,
  `Post_id` int(255) NOT NULL,
  `Link_title` varchar(255) NOT NULL,
  `Link_url` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `link`
--

INSERT INTO `link` (`Link_id`, `Post_id`, `Link_title`, `Link_url`) VALUES
(1, 13, 'Be wise guys', 'http://startingdotneprogramming.blogspot.com.ng/2013/04/i-knew-programmer-that-went-completely.html?m=1'),
(2, 19, 'The us elections takes a turn', 'https://www.washingtonpost.com/politics/clinton-falls-ill-during-911-memorial-service-in-new-york/2016/09/11/a52e09c2-7855-11e6-ac8e-cf8e0dd91dc7_story.html'),
(3, 20, 'this lady has game', 'http://www.lindaikejisblog.com/2016/09/this-lady-sent-dm-to-man-she-liked-on.html'),
(4, 21, 'kanu loses his mother', 'http://www.lindaikejisblog.com/2016/09/kanu-nwankwo-loses-his-mother.html'),
(5, 22, 'kanu loses his mom', 'http://www.lindaikejisblog.com/2016/09/kanu-nwankwo-loses-his-mother.html'),
(6, 23, 'Crash Course ', 'https://www.youtube.com/watch?v=qMXqg2PKJZU'),
(7, 24, 'whatsapp web', 'https://web.whatsapp.com/'),
(8, 26, 'hilary may drop out', 'http://www.lindaikejisblog.com/2016/09/hillary-clinton-may-drop-out-of.html'),
(9, 27, 'manchester is blue', 'http://www.football365.com/news/man-united-1-2-man-city-manchester-is-blue'),
(10, 28, 'mouriniho lost', 'http://www.football365.com/news/man-united-1-2-man-city-manchester-is-blue'),
(11, 29, 'Zabaleta is a troll', 'http://www.caughtoffside.com/2016/09/12/photo-zabaleta-trolls-man-utd-fans-with-manchester-is-blue-tweet/'),
(12, 30, 'anti corrupting in nigeria', 'http://www.lindaikejisblog.com/2016/09/anti-corruption-war-built-on-fairness.html'),
(13, 31, 'anti corrupting in nigeria', 'http://www.lindaikejisblog.com/2016/09/anti-corruption-war-built-on-fairness.html'),
(14, 32, 'mcheww donald trump', 'http://www.lindaikejisblog.com/2016/09/listen-after-911-donald-trump-bragged.html'),
(15, 33, 'Our first lady', 'http://www.lindaikejisblog.com/2016/09/mrs-aisha-buhari-pictured-praying-at.html'),
(16, 34, 'how our government should be run', 'http://www.lindaikejisblog.com/2016/09/ebonyi-state-lawmaker-maria-ude-nwachi.html'),
(17, 35, 'this nigerian herds men tho', 'http://www.lindaikejisblog.com/2016/09/herdsmen-who-go-about-armed-with-guns.html'),
(18, 52, '#MCM? Or #WCW lol ', 'https://instagram.com/p/BKlXBJuAF-v/'),
(19, 53, 'Putin handles corruption like a boss', 'https://www.youtube.com/watch?v=co8s0egftsc'),
(20, 54, 'Is it not true ?ðŸ˜¹', 'https://instagram.com/p/BKm78zaAwLL/'),
(21, 55, 'R.I.P', 'http://9gag.com/gag/aGD6z9n'),
(22, 62, 'Elijahs top performances ', 'https://www.youtube.com/watch?v=37VIrdC1DY4'),
(23, 70, 'How and When to Dribble', 'https://www.youtube.com/watch?v=d4PA0M7XzXk'),
(24, 115, 'Omo a must watch maybe we should be open minded on Donald trump', 'https://www.youtube.com/watch?v=OCabT_O0YSM'),
(25, 117, 'That moment when you know you\'re screwed', 'http://zikoko.com/list/different-ways-know-youre-trouble-nigerian-home/'),
(26, 125, 'Being anonymous is a Good thing ', 'http://www.webpronews.com/being-anonymous-on-the-internet-is-a-good-thing-2012-05/');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `notification_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `notification_content` varchar(255) NOT NULL,
  `notification_status` varchar(255) NOT NULL,
  `notification_type` varchar(255) NOT NULL,
  `notification_element_id` int(255) NOT NULL,
  `notification_time` datetime NOT NULL,
  `notification_link` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `Post_id` int(255) NOT NULL,
  `User_id` int(255) NOT NULL,
  `Post_type` varchar(255) NOT NULL,
  `Post_Visibility` varchar(255) NOT NULL,
  `Post_time` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`Post_id`, `User_id`, `Post_type`, `Post_Visibility`, `Post_time`) VALUES
(1, 1, 'image', '', '2016-08-23 13:43:04'),
(2, 1, 'video', '', '2016-08-23 13:50:30'),
(3, 1, 'text', '', '2016-08-23 13:58:41'),
(4, 0, 'text', '', '2016-08-23 14:51:03'),
(5, 2, 'text', '', '2016-08-23 21:18:58'),
(6, 2, 'text', '', '2016-08-23 21:24:13'),
(7, 2, 'text', '', '2016-08-23 21:24:24'),
(8, 2, 'text', '', '2016-08-23 21:25:16'),
(9, 2, 'image', '', '2016-08-23 21:30:44'),
(10, 3, 'text', '', '2016-08-23 21:45:07'),
(11, 3, 'image', '', '2016-08-23 21:47:43'),
(12, 4, 'image', '', '2016-08-24 00:06:41'),
(13, 1, 'link', '', '2016-08-24 18:41:34'),
(14, 4, 'text', '', '2016-08-25 23:09:31'),
(15, 2, 'image', '', '2016-08-27 19:48:01'),
(16, 1, 'video', '', '2016-09-06 03:34:32'),
(17, 1, 'video', '', '2016-09-06 03:38:04'),
(18, 1, 'image', '', '2016-09-06 03:39:32'),
(19, 1, 'link', '', '2016-09-12 12:10:09'),
(20, 1, 'link', '', '2016-09-12 12:14:02'),
(21, 1, 'link', '', '2016-09-12 12:19:09'),
(22, 1, 'link', '', '2016-09-12 12:21:43'),
(23, 1, 'link', '', '2016-09-12 12:51:45'),
(24, 1, 'link', '', '2016-09-12 12:53:21'),
(25, 1, 'link', '', '2016-09-12 12:54:53'),
(26, 1, 'link', '', '2016-09-12 13:01:34'),
(27, 1, 'link', '', '2016-09-12 13:05:10'),
(28, 1, 'link', '', '2016-09-12 13:07:48'),
(29, 1, 'link', '', '2016-09-12 13:09:48'),
(30, 1, 'link', '', '2016-09-12 21:50:20'),
(31, 1, 'link', '', '2016-09-12 21:50:27'),
(32, 1, 'link', '', '2016-09-12 21:52:28'),
(33, 1, 'link', '', '2016-09-12 21:56:14'),
(34, 1, 'link', '', '2016-09-12 21:59:56'),
(35, 1, 'link', '', '2016-09-12 22:03:09'),
(36, 1, 'text', '', '2016-09-14 21:36:18'),
(60, 1, 'image', '', '2016-10-02 21:10:12'),
(38, 1, 'image', '', '2016-09-15 08:39:31'),
(39, 1, 'image', '', '2016-09-15 08:40:44'),
(40, 1, 'image', '', '2016-09-17 23:58:37'),
(41, 1, 'image', '', '2016-09-18 00:16:07'),
(59, 1, 'image', '', '2016-10-02 01:25:54'),
(43, 1, 'image', '', '2016-09-18 08:10:01'),
(44, 1, 'audio', '', '2016-09-18 08:11:22'),
(45, 1, 'audio', '', '2016-09-18 08:16:59'),
(46, 1, 'audio', '', '2016-09-18 08:19:46'),
(47, 1, 'video', '', '2016-09-18 08:21:47'),
(48, 1, 'image', '', '2016-09-19 12:29:03'),
(49, 4, 'image', '', '2016-09-19 16:34:28'),
(50, 1, 'image', '', '2016-09-20 15:33:00'),
(61, 1, 'image', '', '2016-10-02 21:10:17'),
(52, 7, 'link', '', '2016-09-20 23:47:21'),
(53, 1, 'link', '', '2016-09-21 09:48:15'),
(54, 7, 'link', '', '2016-09-21 13:59:23'),
(55, 2, 'link', '', '2016-09-23 22:28:32'),
(56, 1, 'image', '', '2016-09-24 21:30:49'),
(58, 1, 'text', '', '2016-10-01 13:58:05'),
(62, 1, 'link', '', '2016-10-02 22:35:56'),
(63, 1, 'image', '', '2016-10-04 10:14:57'),
(64, 4, 'video', '', '2016-10-04 13:50:14'),
(65, 4, 'image', '', '2016-10-04 14:01:23'),
(66, 4, 'image', '', '2016-10-05 08:03:01'),
(67, 4, 'image', '', '2016-10-05 08:06:21'),
(68, 4, 'video', '', '2016-10-05 08:07:00'),
(69, 4, 'image', '', '2016-10-05 11:18:19'),
(70, 1, 'link', '', '2016-10-07 21:55:13'),
(71, 1, 'image', '', '2016-10-12 22:32:32'),
(72, 1, 'video', '', '2016-10-12 22:57:14'),
(73, 1, 'image', '', '2016-10-13 12:11:47'),
(74, 1, 'image', '', '2016-10-13 12:14:46'),
(75, 1, 'image', '', '2016-10-13 22:31:09'),
(76, 1, 'image', '', '2016-10-16 14:53:56'),
(77, 1, 'video', '', '2016-10-16 14:57:56'),
(78, 4, 'image', '', '2016-10-16 22:17:02'),
(79, 1, 'image', '', '2016-10-16 22:26:35'),
(80, 2, 'image', '', '2016-10-19 14:50:43'),
(81, 2, 'image', '', '2016-10-19 19:06:50'),
(82, 9, 'text', '', '2016-10-25 23:50:12'),
(83, 1, 'image', '', '2016-10-29 12:13:15'),
(84, 4, 'image', '', '2016-10-31 16:20:55'),
(85, 1, 'image', '', '2016-10-31 16:31:04'),
(86, 2, 'image', '', '2016-11-02 10:07:19'),
(87, 1, 'video', '', '2016-11-07 00:36:45'),
(88, 2, 'image', '', '2016-11-07 08:11:05'),
(89, 1, 'image', '', '2016-11-07 11:25:18'),
(90, 1, 'image', '', '2016-11-07 11:42:12'),
(91, 1, 'image', '', '2016-11-07 23:28:32'),
(92, 1, 'image', '', '2016-11-08 21:50:16'),
(93, 1, 'video', '', '2016-11-08 22:46:00'),
(94, 1, 'image', '', '2016-11-10 01:06:13'),
(95, 1, 'image', '', '2016-11-10 14:35:33'),
(116, 2, 'video', '', '2016-11-15 12:42:34'),
(97, 1, 'image', '', '2016-11-10 16:45:00'),
(98, 1, 'image', '', '2016-11-11 13:31:27'),
(99, 1, 'image', '', '2016-11-11 13:31:45'),
(100, 1, 'image', '', '2016-11-11 13:33:19'),
(103, 2, 'image', '', '2016-11-11 17:41:22'),
(104, 2, 'text', '', '2016-11-11 19:31:01'),
(105, 2, 'image', '', '2016-11-11 21:46:02'),
(106, 2, 'image', '', '2016-11-11 21:47:07'),
(107, 1, 'image', '', '2016-11-12 01:29:20'),
(108, 1, 'image', '', '2016-11-12 01:30:06'),
(109, 1, 'image', '', '2016-11-12 01:33:49'),
(110, 1, 'video', '', '2016-11-12 01:58:14'),
(111, 1, 'image', '', '2016-11-12 18:40:55'),
(112, 1, 'video', '', '2016-11-12 23:04:30'),
(113, 2, 'text', '', '2016-11-13 08:03:11'),
(114, 1, 'video', '', '2016-11-13 17:37:06'),
(115, 1, 'link', '', '2016-11-13 17:45:20'),
(117, 4, 'link', '', '2016-11-16 19:10:41'),
(118, 12, 'video', '', '2016-11-16 23:55:57'),
(119, 4, 'image', '', '2016-11-17 10:14:39'),
(120, 12, 'image', '', '2016-11-17 14:26:03'),
(121, 12, 'image', '', '2016-11-17 14:28:48'),
(122, 12, 'image', '', '2016-11-17 14:42:59'),
(123, 12, 'video', '', '2016-11-19 02:20:42'),
(124, 1, 'text', 'Anonymous', '2016-11-21 16:28:40'),
(125, 1, 'link', 'Anonymous', '2016-11-21 16:37:34'),
(126, 1, 'image', 'Anonymous', '2016-11-21 16:39:34'),
(127, 1, 'audio', 'Anonymous', '2016-11-21 16:41:39'),
(128, 1, 'video', '', '2016-11-21 16:50:02'),
(129, 2, 'text', 'Anonymous', '2016-11-22 19:30:37'),
(130, 12, 'image', 'Normal', '2016-11-23 10:38:34'),
(131, 12, 'video', 'Normal', '2016-11-23 13:52:53'),
(132, 2, 'image', 'Normal', '2016-11-25 19:59:50'),
(133, 1, 'image', 'Normal', '2016-11-27 14:50:44'),
(134, 2, 'image', 'Normal', '2016-11-28 20:48:59'),
(135, 12, 'image', 'Normal', '2016-11-28 21:06:11'),
(136, 12, 'image', 'Normal', '2016-11-30 09:34:27'),
(137, 2, 'image', 'Normal', '2016-11-30 21:40:17'),
(138, 12, 'image', 'Normal', '2016-12-01 16:52:50'),
(139, 9, 'text', 'Normal', '2016-12-03 22:46:46'),
(140, 9, 'text', 'Normal', '2016-12-06 11:23:21'),
(141, 2, 'text', 'Normal', '2016-12-10 21:21:54'),
(142, 2, 'text', 'Normal', '2016-12-10 21:22:14'),
(143, 1, 'text', 'Anonymous', '2016-12-10 22:12:23'),
(144, 1, 'text', 'Anonymous', '2016-12-14 14:09:26'),
(145, 2, 'image', 'Normal', '2016-12-15 20:41:22'),
(146, 12, 'text', 'Anonymous', '2016-12-16 02:14:37'),
(147, 12, 'text', 'Anonymous', '2016-12-16 16:53:12'),
(149, 8, 'text', 'Normal', '2017-01-14 21:00:17'),
(150, 14, 'text', 'Normal', '2017-01-20 10:24:04'),
(151, 12, 'image', 'Anonymous', '2017-03-15 18:19:53'),
(152, 12, 'text', 'Normal', '2017-05-18 12:21:28'),
(153, 8, 'image', 'Normal', '2017-06-02 23:46:58'),
(154, 12, 'image', 'Normal', '2017-07-05 11:28:30');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `report_id` int(255) NOT NULL,
  `author_id` int(255) NOT NULL,
  `post_id` int(255) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `report_content` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `report_time` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`report_id`, `author_id`, `post_id`, `post_type`, `report_content`, `status`, `report_time`) VALUES
(1, 4, 59, 'image', 'dsfghjkl;', 'waiting', '2016-10-08 16:07:09'),
(2, 1, 59, 'image', 'i just hate it\r\n', 'waiting', '2016-10-08 16:11:35'),
(3, 2, 81, 'image', 'Because I felt like.', 'waiting', '2016-10-26 12:46:39'),
(4, 2, 96, 'image', 'Inappropriate.', 'waiting', '2016-11-10 21:51:42'),
(5, 14, 151, 'image', '', 'waiting', '2017-03-22 08:54:50');

-- --------------------------------------------------------

--
-- Table structure for table `text`
--

CREATE TABLE `text` (
  `Text_id` int(255) NOT NULL,
  `Post_id` int(255) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `text`
--

INSERT INTO `text` (`Text_id`, `Post_id`, `Title`, `Description`) VALUES
(1, 3, 'a new post', ''),
(2, 4, 'Fhcxv', 'Chg'),
(3, 10, 'who knows why life is soo good?', 'Question of life'),
(4, 14, 'Finally got time for Hunger Games Marathon ', ''),
(5, 36, 'Game of thrones is really far away', ':('),
(7, 58, 'test', 'test2'),
(8, 82, 'What\'s Chirp about?', 'Lorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit amet'),
(11, 104, 'A quote by Dr. Martin Luther King Jr.', 'â€œIf a man is called to be a street sweeper, he should sweep streets even as Michelangelo painted, or Beethoven composed music, or Shakespeare wrote poetry. He should sweep streets so well that all the hosts of heaven and earth will pause to say, here lived a great street sweeper who did his job well.â€'),
(12, 113, 'Food for thought...', 'A lot of people want to make it big, make plenty money, travel the world, give billions to charity and fund projects to better society.\r\nA lot of people didn\'t do doing anything this week to make that happen.\r\nA lot of people won\'t do anything this weekend to make that happen.\r\nA lot of people won\'t do anything next week to make that happen.\r\nA lot of people want to make it big, make plenty money, travel the world, give billions to charity and fund projects to better society.\r\nA lot of people will remain where they are and never achieve any of it.'),
(13, 124, 'Quote Of the Day', 'HE WITH THE COURAGE TO FAIL WILL LIVE FOREVER '),
(14, 129, 'The funny thing about me is...', 'I am an emotional piece of work. '),
(15, 139, 'Things to note in Chiirp', 'Here are some things you should look into\r\n1) DOB: You cant have a user sign up with DOB of 2016, haba...lol\r\n2) Fullname: Leave it as Firstname Lastname   instead of Lastname Firstname\r\n3) Responsivity:  Still a problem. It\'s not fully responsive'),
(16, 140, 'Happy day', 'Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum'),
(17, 142, 'Testing', '<b>This</b> microphone is not limited to just testing.It\'s other functions include;\r\n1.) Making reviews\r\n2.) Dropping comments\r\n'),
(18, 143, 'messi', 'messimessimessimessimessimessimessimessimessimessimessi messimessimessimessimessimessimessimessimessimessimess imessimessimessimessimessimessimessimessimessimessimessi messimessimessimessimessimessimessimessi messimessimessimessimessimessimessimessimessimessi messimessimessimessimessimessimessimessimessimessimessi messimessimessimessimessimessimessimessimessimessimessi messimessimessimessimessimessimessimessimessimessimessi messimessimessimessimessimessimessimessimessimessimessi messimessimessimessimessimessimessimessimessimessimessimessimessi'),
(19, 144, 'zella day hypnotic', ''),
(20, 146, '%', ''),
(21, 147, '100%', ''),
(22, 149, ' BORED!!!', ''),
(23, 150, 'Test', 'Another test post'),
(24, 152, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_id` int(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Firstname` varchar(255) NOT NULL,
  `Lastname` varchar(255) NOT NULL,
  `Profile_pic_link` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Date_Of_Birth` date NOT NULL,
  `Sex` varchar(255) NOT NULL,
  `Phone_Number` bigint(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `Facebook_id` bigint(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_id`, `Username`, `Firstname`, `Lastname`, `Profile_pic_link`, `Email`, `Date_Of_Birth`, `Sex`, `Phone_Number`, `Password`, `Description`, `Status`, `Facebook_id`) VALUES
(1, 'thelonewolf', 'tobi', 'agbola', 'profile/1_5e835a5a8dafa47968812aaa9637b945.jpg', 'tobiagbola@gmail.com', '0000-00-00', 'Male', 8077550567, '06a70f557ec0115f3d04695d386713bd', '', 'unverified', 0),
(2, 'Derrq', 'Derrick', 'O.N', 'profile/2_11.png', 'uka.onyeani@gmail.com', '1995-06-19', 'Male', 8129279417, '5b4dbc0c6715740ef6205d9fb2d28a1d', 'Personality type: INTP-A\r\nZodiac Affiliation: Gemini-Cancer Cuspian\r\nAmbitions: A world class inventor, A world class entrepreneur,  A world class philanthropist, among other things *winks*', 'unverified', 0),
(3, 'Ronnie', 'Babajide', 'Sosan', '', 'sosanbabajide@gmail.com', '1995-03-20', 'Male', 7088122707, 'a7ccfc874f3d1e3295ba36b8756931ac', '', 'unverified', 0),
(4, 'Driaque', 'Daniel', 'ON', 'profile/4_M07IPB6.png', 'dan.onyeani@gmail.com', '0000-00-00', 'Male', 8129279416, 'aa47f8215c6f30a0dcdb2a36a9f4168e', '', 'unverified', 0),
(5, 'P.oke', 'Philip ', 'Oke', '', 'Ok_Philip@live.com', '1993-01-01', 'Sex', 9056785497, 'f50483f9bfc7c18330f8a57a037299b4', '', 'unverified', 0),
(6, 'Seyi.fash', 'Jesuseyi', 'Fasuyi', '', 'jessefash@gmail.com', '1995-01-01', 'Male', 8136875401, 'bfbfe663b4556a8bb5a6ceb242658bf6', '', 'unverified', 0),
(7, 'Timi', 'Timilehin', 'Areola', '', 'timiareola@outlook.com', '2016-09-27', 'Female', 5857195124, '2e0eca7e2277422b1163123a6883c79a', '', 'unverified', 0),
(8, 'utaka', 'daniel', 'ofodan', '', 'ofodan20@gmail.com', '1996-01-05', 'Male', 9039150858, '2a04d346e563a323843571880966eef3', '', 'unverified', 0),
(9, '/', '', '/', '', '/', '0000-00-00', 'Male', 8135378661, '4124bc0a9335c27f086f24ba207a4912', '', 'unverified', 0),
(10, 'ola', 'ola', 'laniyan', '', 'oluwafunsholaniyan@gmail.com', '1995-01-01', 'Female', 8140676804, 'b5767b55a495f4f3e3338f72d6487750', '', 'unverified', 0),
(12, 'Tobby', 'pending', 'pending', 'profile/12_samurai-009.jpg', 'tobea22@yahoo.com', '0000-00-00', 'Female', 8077550567, '8c261c4a088393cc8f5ff78c956f60b8', '', 'facebook', 10153877004895064),
(13, 'clinton', 'Clinton', 'Jethro', '', 'clintjethro@gmail.com', '2016-01-01', 'Male', 8135378661, '14b13c8dfec3420156262ecea203332b', '', 'unverified', 0),
(14, 'ceejaiy', 'Clinton', 'Jethro', '', 'clintonnwadiukor@gmail.com', '2017-01-01', 'Male', 8135378661, '9ca47a442196349ffda0cf640b18d558', '', 'unverified', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_notifications`
--

CREATE TABLE `user_notifications` (
  `User_notifications_id` int(255) NOT NULL,
  `User_id` int(255) NOT NULL,
  `notification_type` text NOT NULL,
  `Content` text NOT NULL,
  `link` text NOT NULL,
  `notification_time` datetime NOT NULL,
  `status` varchar(255) NOT NULL,
  `event_time` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_notifications`
--

INSERT INTO `user_notifications` (`User_notifications_id`, `User_id`, `notification_type`, `Content`, `link`, `notification_time`, `status`, `event_time`) VALUES
(189, 9, 'discussion', 'thelonewolf Commented on Your Post', 'comment.php?id=82&type=text', '2016-11-13 14:10:42', 'sent', '2016-11-13 13:21:12'),
(188, 9, 'discussion', ' 3 Comments were made on Your Post', 'comment.php?id=82&type=text', '2016-11-13 08:55:29', 'sent', '2016-10-27 13:15:15'),
(187, 1, 'discussion', 'Derrq Commented on Your Post', 'comment.php?id=96&type=image', '2016-11-12 18:39:53', 'viewed', '2016-11-12 10:29:39'),
(186, 1, 'discussion', 'thelonewolf Commented on Your Post', 'comment.php?id=96&type=image', '2016-11-12 01:01:23', 'viewed', '2016-11-12 00:58:07'),
(185, 1, 'discussion', 'thelonewolf Commented on Your Post', 'comment.php?id=96&type=image', '2016-11-12 00:58:03', 'viewed', '2016-11-12 00:54:45'),
(184, 1, 'discussion', 'thelonewolf Commented on Your Post', 'comment.php?id=96&type=image', '2016-11-12 00:54:43', 'viewed', '2016-11-12 00:52:36'),
(183, 1, 'discussion', 'thelonewolf Commented on Your Post', 'comment.php?id=96&type=image', '2016-11-12 00:48:03', 'viewed', '2016-11-12 00:47:12'),
(182, 0, 'discussion', ' 2 Comments were made on Your Post', 'comment.php?id=4&type=text', '2016-11-11 23:42:25', 'sent', '2016-08-23 15:19:03'),
(181, 1, 'discussion', 'thelonewolf Commented on Your Post', 'comment.php?id=96&type=image', '2016-11-11 20:16:32', 'viewed', '2016-11-11 18:12:13'),
(180, 2, 'discussion', 'Derrq Commented on Your Post', 'comment.php?id=103&type=image', '2016-11-11 19:34:23', 'viewed', '2016-11-11 19:27:29'),
(179, 2, 'discussion', 'thelonewolf Commented on Your Post', 'comment.php?id=103&type=image', '2016-11-11 18:11:49', 'viewed', '2016-11-11 18:11:39'),
(178, 1, 'discussion', 'Derrq Commented on Your Post', 'comment.php?id=96&type=image', '2016-11-11 18:11:09', 'viewed', '2016-11-11 17:58:55'),
(177, 1, 'discussion', 'thelonewolf Commented on Your Post', 'comment.php?id=87&type=video', '2016-11-10 20:12:15', 'viewed', '2016-11-10 20:12:05'),
(176, 1, 'discussion', 'thelonewolf Commented on Your Post', 'comment.php?id=87&type=video', '2016-11-10 20:11:49', 'viewed', '2016-11-10 20:11:47'),
(175, 1, 'discussion', 'thelonewolf Commented on Your Post', 'comment.php?id=97&type=image', '2016-11-10 19:54:08', 'viewed', '2016-11-10 19:54:06'),
(174, 1, 'discussion', 'thelonewolf Commented on Your Post', 'comment.php?id=97&type=image', '2016-11-10 19:53:17', 'viewed', '2016-11-10 19:53:17'),
(173, 2, 'discussion', 'thelonewolf Commented on Your Post', 'comment.php?id=88&type=image', '2016-11-10 19:17:18', 'viewed', '2016-11-10 19:17:16'),
(172, 1, 'discussion', 'Derrq Commented on Your Post', 'comment.php?id=87&type=video', '2016-11-10 19:16:15', 'viewed', '2016-11-10 19:16:12'),
(171, 2, 'discussion', 'thelonewolf Commented on Your Post', 'comment.php?id=81&type=image', '2016-11-10 19:06:09', 'viewed', '2016-10-19 19:40:24'),
(170, 2, 'discussion', 'thelonewolf Commented on Your Post', 'comment.php?id=55&type=link', '2016-11-10 19:06:09', 'viewed', '2016-09-23 22:30:13'),
(169, 2, 'discussion', ' 4 Comments were made on Your Post', 'comment.php?id=15&type=image', '2016-11-10 19:06:09', 'viewed', '2016-08-27 19:49:30'),
(168, 2, 'discussion', ' 2 Comments were made on Your Post', 'comment.php?id=9&type=image', '2016-11-10 19:06:09', 'viewed', '2016-08-23 21:31:11'),
(166, 1, 'discussion', 'Derrq Commented on Your Post', 'comment.php?id=83&type=image', '2016-11-09 22:46:51', 'viewed', '2016-10-30 23:46:32'),
(165, 1, 'discussion', ' 2 Comments were made on Your Post', 'comment.php?id=79&type=image', '2016-11-09 22:46:51', 'viewed', '2016-10-17 00:53:28'),
(164, 1, 'discussion', ' 3 Comments were made on Your Post', 'comment.php?id=77&type=video', '2016-11-09 22:46:51', 'viewed', '2016-10-20 17:56:07'),
(163, 1, 'discussion', 'ola Commented on Your Post', 'comment.php?id=75&type=image', '2016-11-09 22:46:51', 'viewed', '2016-10-13 22:41:27'),
(162, 1, 'discussion', 'thelonewolf Commented on Your Post', 'comment.php?id=47&type=video', '2016-11-09 22:46:51', 'viewed', '2016-09-19 12:32:02'),
(161, 1, 'discussion', ' 2 Comments were made on Your Post', 'comment.php?id=43&type=image', '2016-11-09 22:46:51', 'viewed', '2016-09-23 21:56:04'),
(160, 1, 'discussion', 'Derrq Commented on Your Post', 'comment.php?id=59&type=image', '2016-11-09 22:46:51', 'viewed', '2016-10-05 19:42:33'),
(159, 1, 'discussion', ' Commented on Your Post', 'comment.php?id=3&type=text', '2016-11-09 22:46:51', 'viewed', '2016-08-23 20:43:37'),
(167, 1, 'discussion', 'thelonewolf Commented on Your Post', 'comment.php?id=87&type=video', '2016-11-10 00:48:00', 'viewed', '2016-11-10 00:47:56'),
(158, 1, 'discussion', ' Commented on Your Post', 'comment.php?id=2&type=video', '2016-11-09 22:46:51', 'viewed', '2016-08-23 21:02:42'),
(157, 1, 'discussion', ' 2 Comments were made on Your Post', 'comment.php?id=1&type=image', '2016-11-09 22:46:51', 'viewed', '2016-08-23 23:06:58'),
(190, 9, 'discussion', 'thelonewolf Commented on Your Post', 'comment.php?id=82&type=text', '2016-11-13 14:21:33', 'sent', '2016-11-13 14:20:57'),
(191, 9, 'discussion', ' 2 Comments were made on Your Post', 'comment.php?id=82&type=text', '2016-11-13 14:34:01', 'sent', '2016-11-13 14:25:59'),
(192, 2, 'discussion', 'thelonewolf Commented on Your Post', 'comment.php?id=113&type=text', '2016-11-13 15:03:44', 'viewed', '2016-11-13 13:13:02'),
(193, 9, 'discussion', ' 6 Comments were made on Your Post', 'comment.php?id=82&type=text', '2016-11-13 15:47:41', 'sent', '2016-11-13 15:44:43'),
(194, 1, 'discussion', ' 4 Comments were made on Your Post', 'comment.php?id=87&type=video', '2016-11-13 20:26:40', 'viewed', '2016-11-13 20:22:57'),
(195, 1, 'discussion', ' 3 Comments were made on Your Post', 'comment.php?id=87&type=video', '2016-11-13 20:37:08', 'viewed', '2016-11-13 20:33:56'),
(196, 1, 'discussion', ' 2 Comments were made on Your Post', 'comment.php?id=87&type=video', '2016-11-13 21:12:13', 'viewed', '2016-11-13 21:08:36'),
(197, 1, 'discussion', ' 2 Comments were made on Your Post', 'comment.php?id=115&type=link', '2016-11-14 19:04:10', 'viewed', '2016-11-14 16:08:09'),
(198, 2, 'discussion', 'thelonewolf Commented on Your Post', 'comment.php?id=116&type=video', '2016-11-16 09:41:32', 'viewed', '2016-11-16 09:39:52'),
(199, 4, 'discussion', ' 9 Comments were made on Your Post', 'comment.php?id=12&type=image', '2016-11-16 19:08:50', 'sent', '2016-08-24 00:07:43'),
(200, 4, 'discussion', 'thelonewolf Commented on Your Post', 'comment.php?id=78&type=image', '2016-11-16 19:08:50', 'sent', '2016-10-20 18:25:31'),
(201, 12, 'discussion', 'Derrq Commented on Your Post', 'comment.php?id=122&type=image', '2016-11-18 09:25:19', 'viewed', '2016-11-17 19:11:01'),
(202, 9, 'discussion', 'Derrq Commented on Your Post', 'comment.php?id=82&type=text', '2016-11-18 10:37:35', 'sent', '2016-11-16 08:47:51'),
(203, 1, 'discussion', 'Driaque Commented on Your Post', 'comment.php?id=110&type=video', '2016-11-20 00:02:49', 'viewed', '2016-11-17 13:13:48'),
(204, 1, 'discussion', 'ceejaiy Commented on Your Post', 'comment.php?id=111&type=image', '2016-11-20 00:02:49', 'viewed', '2016-11-18 10:38:57'),
(205, 2, 'discussion', 'Tobby Agbola Commented on Your Post', 'comment.php?id=129&type=text', '2016-11-23 10:38:31', 'viewed', '2016-11-23 10:37:42'),
(206, 12, 'discussion', 'Derrq Commented on Your Post', 'comment.php?id=131&type=video', '2016-11-23 13:59:14', 'viewed', '2016-11-23 13:58:35'),
(207, 1, 'discussion', 'Derrq Commented on Your Post', 'comment.php?id=125&type=link', '2016-11-24 19:50:06', 'viewed', '2016-11-23 07:24:35'),
(208, 1, 'discussion', ' 2 Comments were made on Your Post', 'comment.php?id=133&type=image', '2016-11-28 22:41:20', 'viewed', '2016-11-28 17:25:58'),
(209, 12, 'discussion', 'Derrq Commented on Your Post', 'comment.php?id=135&type=image', '2016-11-30 10:09:26', 'viewed', '2016-11-29 07:44:41'),
(210, 12, 'discussion', ' 2 Comments were made on Your Post', 'comment.php?id=135&type=image', '2016-11-30 12:29:59', 'viewed', '2016-11-30 12:23:49'),
(211, 12, 'discussion', ' 3 Comments were made on Your Post', 'comment.php?id=131&type=video', '2016-11-30 21:37:34', 'viewed', '2016-11-30 21:36:02'),
(212, 1, 'discussion', ' 3 Users Commented on a post', 'comment.php?id=131&type=video', '2016-11-30 21:38:15', 'viewed', '2016-11-30 21:36:02'),
(213, 2, 'discussion', 'thelonewolfCommented on a post', 'comment.php?id=125&type=link', '2016-11-30 21:43:41', 'viewed', '2016-11-24 19:50:39'),
(214, 2, 'discussion', ' 6 Users Commented on a post', 'comment.php?id=131&type=video', '2016-11-30 21:43:41', 'viewed', '2016-11-23 13:58:35'),
(215, 2, 'discussion', ' 2 Users Commented on a post', 'comment.php?id=133&type=image', '2016-11-30 21:43:41', 'viewed', '2016-11-28 17:25:58'),
(216, 2, 'discussion', ' 3 Users Commented on a post', 'comment.php?id=135&type=image', '2016-11-30 21:43:41', 'viewed', '2016-11-29 07:44:41'),
(217, 12, 'discussion', ' 2 Comments were made on Your Post', 'comment.php?id=131&type=video', '2016-11-30 21:44:05', 'viewed', '2016-11-30 21:39:06'),
(218, 1, 'discussion', ' 2 Users Commented on a post', 'comment.php?id=131&type=video', '2016-11-30 21:46:59', 'viewed', '2016-11-30 21:39:06'),
(219, 2, 'discussion', 'Tobby AgbolaCommented on a post', 'comment.php?id=131&type=video', '2016-11-30 21:47:01', 'viewed', '2016-11-30 21:44:01'),
(220, 12, 'discussion', 'Derrq Commented on Your Post', 'comment.php?id=131&type=video', '2016-11-30 23:49:20', 'viewed', '2016-11-30 22:37:22'),
(221, 2, 'discussion', 'Tobby Agbola Commented on Your Post', 'comment.php?id=137&type=image', '2016-12-01 19:34:25', 'viewed', '2016-12-01 19:33:47'),
(222, 1, 'discussion', 'DerrqCommented on a post', 'comment.php?id=131&type=video', '2016-12-02 12:11:56', 'viewed', '2016-11-30 22:37:22'),
(223, 12, 'discussion', ' 2 Users Commented on a post', 'comment.php?id=139&type=text', '2016-12-03 23:20:09', 'viewed', '2016-12-03 23:00:03'),
(224, 1, 'discussion', ' 2 Users Commented on a post', 'comment.php?id=139&type=text', '2016-12-03 23:26:06', 'viewed', '2016-12-03 23:00:03'),
(225, 2, 'discussion', 'Tobby AgbolaCommented on a post', 'comment.php?id=131&type=video', '2016-12-04 14:39:54', 'viewed', '2016-12-04 14:37:39'),
(226, 1, 'discussion', 'Tobby AgbolaCommented on a post', 'comment?id=131&type=video', '2016-12-04 15:11:38', 'viewed', '2016-12-04 14:37:39'),
(227, 9, 'discussion', ' 2 Comments were made on Your Post', 'comment?id=139&type=text', '2016-12-05 12:18:04', 'sent', '2016-12-03 23:00:03'),
(228, 12, 'discussion', 'Driaque Commented on Your Post', 'comment?id=138&type=image', '2016-12-08 10:55:33', 'viewed', '2016-12-08 10:08:51'),
(229, 1, 'discussion', ' 2 Users Commented on a post', 'comment?id=138&type=image', '2016-12-11 23:13:56', 'viewed', '2016-12-08 10:08:51'),
(230, 1, 'discussion', 'DerrqCommented on a post', 'comment?id=131&type=video', '2016-12-11 23:33:47', 'viewed', '2016-12-11 23:30:20'),
(231, 12, 'discussion', 'Derrq Commented on Your Post', 'comment?id=131&type=video', '2016-12-11 23:37:41', 'viewed', '2016-12-11 23:30:20'),
(232, 12, 'discussion', 'thelonewolf Commented on Your Post', 'comment?id=138&type=image', '2016-12-11 23:37:41', 'viewed', '2016-12-11 23:10:30'),
(233, 9, 'discussion', 'Derrq Commented on Your Post', 'comment?id=140&type=text', '2016-12-13 15:05:59', 'sent', '2016-12-06 15:56:01'),
(234, 12, 'discussion', 'thelonewolf Commented on Your Post', 'comment?id=138&type=image', '2016-12-13 18:47:13', 'viewed', '2016-12-12 00:05:54'),
(235, 4, 'discussion', ' 3 Users Commented on a post', 'comment?id=138&type=image', '2016-12-20 14:15:07', 'sent', '2016-12-08 10:08:51'),
(236, 7, 'discussion', ' 2 Comments were made on Your Post', 'comment?id=54&type=link', '2016-12-23 00:38:00', 'viewed', '2016-09-21 19:00:48');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `video_id` int(255) NOT NULL,
  `Post_id` int(255) NOT NULL,
  `video_title` varchar(255) NOT NULL,
  `video_type` varchar(255) NOT NULL,
  `video_link` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`video_id`, `Post_id`, `video_title`, `video_type`, `video_link`) VALUES
(1, 2, 'i really like this song', 'video/mp4', 'video/2_Frou Frou - Let Go.mp4'),
(2, 16, 'When bae checks your phone', 'video/mp4', 'video/16_13880651_1094321940641883_1952745950_s.mp4'),
(3, 17, 'This Is kinda sad in a funny way', 'video/mp4', 'video/17_12298674_1524477054542521_1873215317_n.mp4'),
(4, 47, ' Tiimmy Turner ', 'video/mp4', 'video/47_Desiigner - Tiimmy Turner (Official Audio).mp4'),
(5, 64, 'Look at that', 'video/mp4', 'video/64_aRepQKy_460sv.mp4'),
(6, 68, 'Is this even possible?', 'video/mp4', 'video/68_a0j3Ypd_460sv.mp4'),
(7, 72, 'girl kung fu kicks big fat guys ass.mp4', 'video/mp4', 'video/72_girl kung fu kicks big fat guys ass.mp4'),
(8, 77, 'Falz - Regards To Your Mumsi (Official Audio) ft. Ajebutter22, Fresh L.mp4', 'video/mp4', 'video/77_Falz - Regards To Your Mumsi (Official Audio) ft. Ajebutter22, Fresh L.mp4'),
(9, 87, 'Don\'t Fuck With Klaus', 'video/mp4', 'video/87_The Vampire Diaries 4x20 Klaus, Diego _ Marcel.mp4'),
(10, 93, '(GoT) Battle of the Bastards __ KINGS.mp4', 'video/mp4', 'video/93_(GoT) Battle of the Bastards __ KINGS.mp4'),
(11, 110, 'that has to hurt', 'video/mp4', 'video/110_aQMeYow_460svfootball.mp4'),
(12, 112, 'Mannequin Challenge Cat - LOOK at Kitty! ORIGINAL.mp4', 'video/mp4', 'video/112_Mannequin Challenge Cat - LOOK at Kitty! ORIGINAL.mp4'),
(13, 114, 'DONALD TRUMP buys 2 kids.mp4', 'video/mp4', 'video/114_DONALD TRUMP buys 2 kids.mp4'),
(14, 116, 'Trump Wall gonna be like...', 'video/mp4', 'video/116_ab6Y8d8_460sv.mp4'),
(15, 118, 'Trumps Wall', 'video/mp4', 'video/118_aXAq1wb_460sv.mp4'),
(16, 128, 'Pieces - Red - Lyrics.mp4', 'video/mp4', 'video/128_Pieces - Red - Lyrics.mp4'),
(17, 131, 'Share with someone who can do this ', 'video/mp4', 'video/131_anygQKz_460sv.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `video_embed`
--

CREATE TABLE `video_embed` (
  `videm_id` int(255) NOT NULL,
  `Post_id` int(255) NOT NULL,
  `video_title` varchar(255) NOT NULL,
  `frame_link` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE `vote` (
  `Vote_id` int(255) NOT NULL,
  `Post_id` int(255) NOT NULL,
  `upvotes` int(255) NOT NULL,
  `downvotes` int(255) NOT NULL,
  `popu_score` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vote`
--

INSERT INTO `vote` (`Vote_id`, `Post_id`, `upvotes`, `downvotes`, `popu_score`) VALUES
(1, 1, 3, 2, 6),
(2, 2, 2, 5, 2),
(3, 3, 2, 0, 4),
(4, 4, 4, 157, -148),
(5, 9, 3, 1, 5),
(6, 10, 1, 6, -4),
(7, 11, 7, 4, 12),
(8, 12, 4, 1, 8),
(9, 13, 1, 1, 2),
(10, 14, 5, 22, -13),
(11, 15, 10, 3, 20),
(12, 16, 3, 2, 5),
(13, 17, 0, 1, 1),
(14, 18, -4, 5, -4),
(15, 19, 0, 0, 0),
(16, 20, 0, 0, 0),
(17, 21, 0, 0, 0),
(18, 22, 2, 9, -5),
(19, 23, 0, 0, 0),
(20, 24, 0, 0, 0),
(21, 26, 0, 0, 0),
(22, 27, 0, 0, 0),
(23, 28, 0, 0, 0),
(24, 29, 0, 0, 0),
(25, 30, 0, 0, 0),
(26, 31, 1, 0, 2),
(27, 32, 0, 0, 0),
(28, 33, 0, 0, 0),
(29, 34, 0, 0, 0),
(30, 35, 1, 0, 2),
(31, 36, 2, 0, 4),
(32, 37, 0, 0, 0),
(33, 38, 2, 0, 4),
(34, 39, 2, 0, 4),
(35, 40, 0, 0, 0),
(36, 41, 0, 0, 0),
(37, 42, 0, 0, 0),
(38, 43, 2, 0, 4),
(39, 44, 1, 0, 2),
(40, 45, 1, 0, 2),
(41, 46, 0, 1, -1),
(42, 47, 1, 0, 2),
(43, 48, 0, 0, 0),
(44, 49, 2, 0, 4),
(45, 50, 0, 0, 0),
(46, 51, 1, 0, 3),
(47, 52, 0, 0, 0),
(48, 53, 0, 0, 0),
(49, 54, 2, 0, 4),
(50, 55, 4, 0, 12),
(51, 56, 1, 0, 2),
(52, 57, 0, 0, 0),
(53, 58, 9, 16, 2),
(54, 59, 2, 1, 3),
(55, 62, 0, 0, 0),
(56, 63, 2, 0, 4),
(57, 64, 1, 0, 2),
(58, 65, 3, 1, 5),
(59, 68, 3, 0, 5),
(60, 69, 1, 0, 1),
(61, 70, 0, 0, 0),
(62, 71, 1, 0, 2),
(63, 72, 2, 0, 4),
(64, 73, 0, 0, 0),
(65, 74, 1, 0, 2),
(66, 75, 1, 0, 2),
(67, 76, 1, 0, 2),
(68, 77, 0, 1, 0),
(69, 78, 2, 1, 4),
(70, 79, 2, 2, 4),
(71, 80, 2, 0, 4),
(72, 81, 0, 3, 0),
(73, 82, 2, 201, -190),
(74, 83, 4, 0, 7),
(75, 84, 4, 0, 9),
(76, 85, 0, 1, -1),
(77, 86, 2, 0, 4),
(78, 87, 3, 0, 8),
(79, 88, 2, 0, 2),
(80, 89, 1, 0, 1),
(81, 90, 1, 0, 1),
(82, 91, 1, 0, 1),
(83, 92, 1, 0, 1),
(84, 93, 1, 0, 1),
(85, 94, 2, 0, 2),
(86, 95, 1, 0, 1),
(87, 96, 1, 1, 0),
(88, 97, 0, 0, 0),
(89, 101, 0, 0, 0),
(90, 102, 0, 0, 0),
(91, 103, 1, 0, 1),
(92, 104, 2, 0, 2),
(93, 105, 1, 0, 1),
(94, 106, 1, 0, 1),
(95, 107, 0, 0, 0),
(96, 110, 1, 0, 1),
(97, 111, 3, 0, 3),
(98, 112, 2, 1, 1),
(99, 113, 1, 0, 1),
(100, 114, 0, 1, -1),
(101, 115, 1, 0, 1),
(102, 116, 1, 0, 1),
(103, 117, 1, 0, 1),
(104, 118, 0, 0, 0),
(105, 119, 1, 0, 1),
(106, 120, 0, 0, 0),
(107, 121, 0, 0, 0),
(108, 122, 2, 0, 2),
(109, 124, 0, 0, 0),
(110, 125, 1, 0, 1),
(111, 126, 2, 0, 2),
(112, 127, 0, 0, 0),
(113, 128, 0, 0, 0),
(114, 129, 0, 0, 0),
(115, 130, 0, 0, 0),
(116, 131, 3, 0, 3),
(117, 132, 2, 0, 2),
(118, 133, 1, 0, 1),
(119, 134, 2, 0, 2),
(120, 135, 2, 0, 2),
(121, 136, 1, 0, 1),
(122, 137, 0, 0, 0),
(123, 138, 3, 0, 3),
(124, 139, 0, 0, 0),
(125, 140, 0, 0, 0),
(126, 142, 0, 15, -15),
(127, 143, 0, 96, -96),
(128, 144, 1, 0, 1),
(129, 145, 0, 0, 0),
(130, 146, 0, 0, 0),
(131, 147, 0, 0, 0),
(132, 148, 0, 0, 0),
(133, 149, 1, 2, 1),
(134, 150, 3, 8, -3),
(135, 151, 1, 0, 1),
(136, 152, 0, 0, 0),
(137, 153, 0, 0, 0),
(138, 154, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `vote_log1`
--

CREATE TABLE `vote_log1` (
  `vote_log_id` int(255) NOT NULL,
  `Post_id` int(255) NOT NULL,
  `Voter_id` int(255) NOT NULL,
  `Vote_type` varchar(255) NOT NULL,
  `Vote_time` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vote_log1`
--

INSERT INTO `vote_log1` (`vote_log_id`, `Post_id`, `Voter_id`, `Vote_type`, `Vote_time`) VALUES
(1, 4, 0, '0', '2016-08-23 14:51:34'),
(2, 4, 0, '0', '2016-08-23 15:18:02'),
(3, 1, 1, '0', '2016-08-23 19:32:26'),
(4, 2, 1, '0', '2016-08-23 19:32:32'),
(5, 3, 1, '0', '2016-08-23 19:32:39'),
(6, 4, 1, '0', '2016-08-23 19:32:44'),
(7, 9, 3, '0', '2016-08-23 21:42:49'),
(8, 4, 3, '0', '2016-08-23 21:43:04'),
(9, 4, 3, '0', '2016-08-23 21:43:05'),
(10, 11, 3, '0', '2016-08-23 21:48:40'),
(11, 2, 3, '0', '2016-08-23 21:48:49'),
(12, 11, 1, 'downvote', '2016-10-16 22:36:38'),
(13, 11, 2, '0', '2016-08-23 22:37:26'),
(14, 9, 2, '0', '2016-08-23 22:37:31'),
(15, 1, 2, '0', '2016-08-23 23:06:29'),
(16, 11, 4, '0', '2016-09-04 17:44:27'),
(17, 9, 4, '0', '2016-08-23 23:36:46'),
(18, 4, 2, '0', '2016-08-24 00:14:14'),
(19, 12, 2, '0', '2016-08-24 00:16:04'),
(20, 12, 4, '0', '2016-08-24 00:29:11'),
(21, 4, 4, '0', '2016-09-04 17:42:34'),
(22, 14, 2, '0', '2016-08-27 19:48:42'),
(23, 15, 4, '0', '2016-09-04 17:46:32'),
(24, 15, 1, '0', '2016-09-04 17:30:45'),
(25, 13, 4, '0', '2016-09-04 17:36:32'),
(26, 1, 4, '0', '2016-09-04 17:46:28'),
(27, 4, 4, '0', '2016-09-04 17:42:34'),
(28, 4, 4, '0', '2016-09-04 17:42:34'),
(29, 4, 4, '0', '2016-09-04 17:42:34'),
(30, 4, 4, '0', '2016-09-04 17:42:34'),
(31, 4, 4, '0', '2016-09-04 17:42:34'),
(32, 4, 4, '0', '2016-09-04 17:42:34'),
(33, 11, 4, '0', '2016-09-04 17:44:27'),
(34, 4, 4, '0', '2016-09-04 17:42:34'),
(35, 4, 4, '0', '2016-09-04 17:42:34'),
(36, 4, 4, '0', '2016-09-04 17:42:34'),
(37, 4, 4, '0', '2016-09-04 17:42:34'),
(38, 4, 4, '0', '2016-09-04 17:42:34'),
(39, 4, 4, '0', '2016-09-04 17:42:34'),
(40, 4, 4, '0', '2016-09-04 17:42:34'),
(41, 4, 4, '0', '2016-09-04 17:42:34'),
(42, 4, 4, '0', '2016-09-04 17:42:34'),
(43, 4, 4, '0', '2016-09-04 17:42:34'),
(44, 4, 4, '0', '2016-09-04 17:42:34'),
(45, 4, 4, '0', '2016-09-04 17:42:34'),
(46, 4, 4, '0', '2016-09-04 17:42:34'),
(47, 4, 4, '0', '2016-09-04 17:42:34'),
(48, 4, 4, '0', '2016-09-04 17:42:34'),
(49, 4, 4, '0', '2016-09-04 17:42:34'),
(50, 4, 4, '0', '2016-09-04 17:42:34'),
(51, 4, 4, '0', '2016-09-04 17:42:34'),
(52, 4, 4, '0', '2016-09-04 17:42:34'),
(53, 4, 4, '0', '2016-09-04 17:42:34'),
(54, 4, 4, '0', '2016-09-04 17:42:34'),
(55, 4, 4, '0', '2016-09-04 17:42:34'),
(56, 4, 4, '0', '2016-09-04 17:42:34'),
(57, 4, 4, '0', '2016-09-04 17:42:34'),
(58, 4, 4, '0', '2016-09-04 17:42:34'),
(59, 4, 4, '0', '2016-09-04 17:42:34'),
(60, 4, 4, '0', '2016-09-04 17:42:34'),
(61, 4, 4, '0', '2016-09-04 17:42:34'),
(62, 4, 4, '0', '2016-09-04 17:42:34'),
(63, 4, 4, '0', '2016-09-04 17:42:34'),
(64, 4, 4, '0', '2016-09-04 17:42:34'),
(65, 4, 4, '0', '2016-09-04 17:42:34'),
(66, 4, 4, '0', '2016-09-04 17:42:34'),
(67, 4, 4, '0', '2016-09-04 17:42:34'),
(68, 4, 4, '0', '2016-09-04 17:42:34'),
(69, 4, 4, '0', '2016-09-04 17:42:34'),
(70, 4, 4, '0', '2016-09-04 17:42:34'),
(71, 4, 4, '0', '2016-09-04 17:42:34'),
(72, 4, 4, '0', '2016-09-04 17:42:34'),
(73, 4, 4, '0', '2016-09-04 17:42:34'),
(74, 4, 4, '0', '2016-09-04 17:42:34'),
(75, 4, 4, '0', '2016-09-04 17:42:34'),
(76, 4, 4, '0', '2016-09-04 17:42:34'),
(77, 4, 4, '0', '2016-09-04 17:42:34'),
(78, 4, 4, '0', '2016-09-04 17:42:34'),
(79, 4, 4, '0', '2016-09-04 17:42:34'),
(80, 4, 4, '0', '2016-09-04 17:42:34'),
(81, 4, 4, '0', '2016-09-04 17:42:34'),
(82, 4, 4, '0', '2016-09-04 17:42:34'),
(83, 4, 4, '0', '2016-09-04 17:42:34'),
(84, 4, 4, '0', '2016-09-04 17:42:34'),
(85, 4, 4, '0', '2016-09-04 17:42:34'),
(86, 4, 4, '0', '2016-09-04 17:42:34'),
(87, 4, 4, '0', '2016-09-04 17:42:34'),
(88, 4, 4, '0', '2016-09-04 17:42:34'),
(89, 4, 4, '0', '2016-09-04 17:42:34'),
(90, 4, 4, '0', '2016-09-04 17:42:34'),
(91, 4, 4, '0', '2016-09-04 17:42:34'),
(92, 4, 4, '0', '2016-09-04 17:42:34'),
(93, 4, 4, '0', '2016-09-04 17:42:34'),
(94, 4, 4, '0', '2016-09-04 17:42:34'),
(95, 4, 4, '0', '2016-09-04 17:42:34'),
(96, 4, 4, '0', '2016-09-04 17:42:34'),
(97, 4, 4, '0', '2016-09-04 17:42:34'),
(98, 4, 4, '0', '2016-09-04 17:42:34'),
(99, 4, 4, '0', '2016-09-04 17:42:34'),
(100, 4, 4, '0', '2016-09-04 17:42:34'),
(101, 4, 4, '0', '2016-09-04 17:42:34'),
(102, 4, 4, '0', '2016-09-04 17:42:34'),
(103, 4, 4, '0', '2016-09-04 17:42:34'),
(104, 4, 4, '0', '2016-09-04 17:42:34'),
(105, 4, 4, '0', '2016-09-04 17:42:34'),
(106, 4, 4, '0', '2016-09-04 17:42:34'),
(107, 4, 4, '0', '2016-09-04 17:42:34'),
(108, 4, 4, '0', '2016-09-04 17:42:34'),
(109, 4, 4, '0', '2016-09-04 17:42:34'),
(110, 4, 4, '0', '2016-09-04 17:42:34'),
(111, 4, 4, '0', '2016-09-04 17:42:34'),
(112, 4, 4, '0', '2016-09-04 17:42:34'),
(113, 4, 4, '0', '2016-09-04 17:42:34'),
(114, 4, 4, '0', '2016-09-04 17:42:34'),
(115, 4, 4, '0', '2016-09-04 17:42:34'),
(116, 4, 4, '0', '2016-09-04 17:42:34'),
(117, 4, 4, '0', '2016-09-04 17:42:34'),
(118, 4, 4, '0', '2016-09-04 17:42:34'),
(119, 4, 4, '0', '2016-09-04 17:42:34'),
(120, 4, 4, '0', '2016-09-04 17:42:34'),
(121, 4, 4, '0', '2016-09-04 17:42:34'),
(122, 4, 4, '0', '2016-09-04 17:42:34'),
(123, 4, 4, '0', '2016-09-04 17:42:34'),
(124, 4, 4, '0', '2016-09-04 17:42:34'),
(125, 4, 4, '0', '2016-09-04 17:42:34'),
(126, 4, 4, '0', '2016-09-04 17:42:34'),
(127, 4, 4, '0', '2016-09-04 17:42:34'),
(128, 4, 4, '0', '2016-09-04 17:42:34'),
(129, 4, 4, '0', '2016-09-04 17:42:34'),
(130, 4, 4, '0', '2016-09-04 17:42:34'),
(131, 4, 4, '0', '2016-09-04 17:42:34'),
(132, 4, 4, '0', '2016-09-04 17:42:34'),
(133, 4, 4, '0', '2016-09-04 17:42:34'),
(134, 4, 4, '0', '2016-09-04 17:42:34'),
(135, 4, 4, '0', '2016-09-04 17:42:34'),
(136, 4, 4, '0', '2016-09-04 17:42:34'),
(137, 4, 4, '0', '2016-09-04 17:42:34'),
(138, 4, 4, '0', '2016-09-04 17:42:34'),
(139, 4, 4, '0', '2016-09-04 17:42:34'),
(140, 4, 4, '0', '2016-09-04 17:42:34'),
(141, 4, 4, '0', '2016-09-04 17:42:34'),
(142, 4, 4, '0', '2016-09-04 17:42:34'),
(143, 4, 4, '0', '2016-09-04 17:42:34'),
(144, 4, 4, '0', '2016-09-04 17:42:34'),
(145, 4, 4, '0', '2016-09-04 17:42:34'),
(146, 4, 4, '0', '2016-09-04 17:42:34'),
(147, 4, 4, '0', '2016-09-04 17:42:34'),
(148, 4, 4, '0', '2016-09-04 17:42:34'),
(149, 4, 4, '0', '2016-09-04 17:42:34'),
(150, 4, 4, '0', '2016-09-04 17:42:34'),
(151, 4, 4, '0', '2016-09-04 17:42:34'),
(152, 4, 4, '0', '2016-09-04 17:42:34'),
(153, 4, 4, '0', '2016-09-04 17:42:34'),
(154, 4, 4, '0', '2016-09-04 17:42:34'),
(155, 4, 4, '0', '2016-09-04 17:42:34'),
(156, 4, 4, '0', '2016-09-04 17:42:34'),
(157, 4, 4, '0', '2016-09-04 17:42:34'),
(158, 4, 4, '0', '2016-09-04 17:42:34'),
(159, 4, 4, '0', '2016-09-04 17:42:34'),
(160, 4, 4, '0', '2016-09-04 17:42:34'),
(161, 4, 4, '0', '2016-09-04 17:42:34'),
(162, 4, 4, '0', '2016-09-04 17:42:34'),
(163, 4, 4, '0', '2016-09-04 17:42:34'),
(164, 4, 4, '0', '2016-09-04 17:42:34'),
(165, 15, 1, '0', '2016-09-04 17:41:54'),
(166, 3, 4, '0', '2016-09-04 17:42:09'),
(167, 4, 4, '0', '2016-09-04 17:42:34'),
(168, 4, 4, '0', '2016-09-04 17:42:34'),
(169, 4, 4, '0', '2016-09-04 17:42:34'),
(170, 13, 1, '0', '2016-09-04 17:42:31'),
(171, 4, 4, '0', '2016-09-04 17:42:34'),
(172, 4, 4, '0', '2016-09-04 17:42:34'),
(173, 11, 4, '0', '2016-09-04 17:44:27'),
(174, 2, 4, '0', '2016-09-04 17:46:22'),
(175, 14, 4, '0', '2016-09-04 17:44:13'),
(176, 14, 4, '0', '2016-09-04 17:44:14'),
(177, 14, 4, '0', '2016-09-04 17:44:16'),
(178, 14, 4, '0', '2016-09-04 17:44:17'),
(179, 14, 4, '0', '2016-09-04 17:44:18'),
(180, 14, 4, '0', '2016-09-04 17:44:18'),
(181, 14, 4, '0', '2016-09-04 17:44:19'),
(182, 14, 4, '0', '2016-09-04 17:44:19'),
(183, 14, 4, '0', '2016-09-04 17:44:19'),
(184, 14, 4, '0', '2016-09-04 17:44:19'),
(185, 14, 4, '0', '2016-09-04 17:44:19'),
(186, 14, 4, '0', '2016-09-04 17:44:19'),
(187, 14, 4, '0', '2016-09-04 17:44:19'),
(188, 11, 4, '0', '2016-09-04 17:44:27'),
(189, 11, 4, '0', '2016-09-04 17:44:27'),
(190, 14, 4, '0', '2016-09-04 17:44:25'),
(191, 14, 4, '0', '2016-09-04 17:44:34'),
(192, 14, 4, '0', '2016-09-04 17:44:34'),
(193, 14, 4, '0', '2016-09-04 17:44:34'),
(194, 14, 4, '0', '2016-09-04 17:44:34'),
(195, 14, 4, '0', '2016-09-04 17:44:34'),
(196, 14, 4, '0', '2016-09-04 17:44:34'),
(197, 14, 4, '0', '2016-09-04 17:44:34'),
(198, 14, 4, '0', '2016-09-04 17:44:35'),
(199, 14, 4, '0', '2016-09-04 17:44:35'),
(200, 10, 4, '0', '2016-09-04 17:46:08'),
(201, 10, 4, '0', '2016-09-04 17:46:12'),
(202, 10, 4, '0', '2016-09-04 17:46:16'),
(203, 10, 4, '0', '2016-09-04 17:46:17'),
(204, 10, 4, '0', '2016-09-04 17:46:18'),
(205, 10, 4, '0', '2016-09-04 17:46:18'),
(206, 10, 4, '0', '2016-09-04 17:46:18'),
(207, 2, 4, '0', '2016-09-04 17:46:22'),
(208, 1, 4, '0', '2016-09-04 17:46:28'),
(209, 15, 4, '0', '2016-09-04 17:46:32'),
(210, 12, 4, '0', '2016-09-04 17:46:34'),
(211, 14, 4, '0', '2016-09-04 17:46:39'),
(212, 4, 4, '0', '2016-09-04 17:46:43'),
(213, 1, 1, '0', '2016-09-05 08:56:14'),
(214, 15, 1, 'upvote', '2016-09-05 09:06:43'),
(215, 15, 1, 'upvote', '2016-09-05 09:07:01'),
(216, 15, 1, 'upvote', '2016-09-05 09:07:12'),
(217, 15, 1, 'upvote', '2016-09-05 09:16:36'),
(218, 15, 1, 'upvote', '2016-09-05 09:17:30'),
(219, 15, 1, 'upvote', '2016-09-05 09:26:33'),
(220, 15, 1, 'upvote', '2016-09-05 09:27:16'),
(221, 16, 0, 'upvote', '2016-09-07 16:16:00'),
(222, 16, 0, 'upvote', '2016-09-07 16:19:42'),
(223, 16, 1, 'downvote', '2016-09-07 22:17:14'),
(224, 17, 1, 'downvote', '2016-09-07 22:23:11'),
(225, 18, 1, 'downvote', '2016-11-10 14:19:15'),
(278, 79, 1, 'upvote', '2016-10-23 11:54:51'),
(226, 2, 1, 'upvote', '2016-09-12 22:47:23'),
(227, 14, 1, 'upvote', '2016-09-12 22:55:31'),
(228, 2, 1, 'downvote', '2016-09-12 22:57:19'),
(229, 35, 1, 'upvote', '2016-09-12 22:59:52'),
(230, 2, 1, 'upvote', '2016-09-12 23:00:30'),
(231, 47, 1, 'upvote', '2016-09-18 08:33:36'),
(232, 15, 6, 'upvote', '2016-09-18 21:11:00'),
(233, 11, 6, 'upvote', '2016-09-18 21:11:12'),
(234, 12, 6, 'upvote', '2016-09-18 21:11:26'),
(235, 51, 1, 'upvote', '2016-09-20 22:17:36'),
(236, 54, 1, 'upvote', '2016-09-21 19:00:19'),
(237, 43, 2, 'upvote', '2016-09-23 21:55:27'),
(238, 54, 2, 'upvote', '2016-09-23 21:57:40'),
(239, 55, 1, 'upvote', '2016-09-23 22:30:01'),
(240, 59, 1, 'upvote', '2016-10-02 01:26:23'),
(241, 49, 1, 'upvote', '2016-10-02 19:29:24'),
(242, 59, 2, 'upvote', '2016-10-05 19:41:10'),
(243, 59, 4, 'downvote', '2016-10-05 22:39:23'),
(244, 55, 4, 'upvote', '2016-10-05 22:39:31'),
(245, 68, 1, 'upvote', '2016-10-08 13:28:20'),
(246, 68, 2, 'upvote', '2016-10-08 22:21:53'),
(247, 63, 2, 'upvote', '2016-10-08 22:22:26'),
(248, 65, 2, 'upvote', '2016-10-08 22:22:47'),
(249, 71, 1, 'upvote', '2016-10-12 22:49:45'),
(250, 75, 1, 'upvote', '2016-10-15 23:58:46'),
(251, 74, 1, 'upvote', '2016-10-15 23:58:57'),
(252, 77, 1, 'downvote', '2016-10-27 13:37:44'),
(253, 65, 4, 'upvote', '2016-10-16 22:07:11'),
(254, 64, 4, 'upvote', '2016-10-16 22:07:22'),
(255, 72, 4, 'upvote', '2016-10-16 22:07:27'),
(256, 78, 1, 'downvote', '2016-10-21 22:05:28'),
(257, 78, 4, 'upvote', '2016-10-16 22:24:09'),
(258, 11, 1, 'downvote', '2016-10-16 22:36:38'),
(259, 65, 1, 'upvote', '2016-10-16 22:38:27'),
(260, 63, 1, 'upvote', '2016-10-16 22:40:24'),
(261, 81, 1, 'downvote', '2016-10-22 17:10:03'),
(262, 76, 1, 'upvote', '2016-10-21 22:05:40'),
(263, 80, 1, 'upvote', '2016-10-21 22:05:47'),
(264, 56, 1, 'upvote', '2016-10-22 16:09:57'),
(265, 72, 1, 'upvote', '2016-10-22 20:42:59'),
(266, 43, 1, 'upvote', '2016-10-23 11:30:53'),
(267, 22, 1, 'downvote', '2016-10-23 11:53:52'),
(268, 22, 1, 'downvote', '2016-10-23 11:53:53'),
(269, 22, 1, 'downvote', '2016-10-23 11:53:56'),
(270, 22, 1, 'downvote', '2016-10-23 11:53:56'),
(271, 22, 1, 'downvote', '2016-10-23 11:53:57'),
(272, 22, 1, 'downvote', '2016-10-23 11:53:57'),
(273, 22, 1, 'downvote', '2016-10-23 11:53:58'),
(274, 22, 1, 'downvote', '2016-10-23 11:53:58'),
(275, 22, 1, 'upvote', '2016-10-23 11:53:59'),
(276, 22, 1, 'upvote', '2016-10-23 11:54:00'),
(277, 22, 1, 'downvote', '2016-10-23 11:54:09'),
(279, 46, 1, 'downvote', '2016-10-23 11:55:03'),
(280, 45, 1, 'upvote', '2016-10-23 11:55:07'),
(281, 44, 1, 'upvote', '2016-10-23 11:55:09'),
(282, 36, 1, 'upvote', '2016-10-23 11:55:21'),
(283, 31, 1, 'upvote', '2016-10-23 12:28:28'),
(284, 39, 1, 'upvote', '2016-10-23 12:28:41'),
(285, 39, 1, 'upvote', '2016-10-23 12:28:41'),
(286, 38, 1, 'upvote', '2016-10-23 12:28:41'),
(287, 38, 1, 'upvote', '2016-10-23 12:28:44'),
(288, 36, 1, 'upvote', '2016-10-23 12:29:11'),
(289, 81, 8, 'upvote', '2016-10-24 23:20:14'),
(290, 79, 9, 'upvote', '2016-10-25 19:44:34'),
(291, 79, 4, 'downvote', '2016-10-26 10:53:31'),
(292, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(293, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(294, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(295, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(296, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(297, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(298, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(299, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(300, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(301, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(302, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(303, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(304, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(305, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(306, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(307, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(308, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(309, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(310, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(311, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(312, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(313, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(314, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(315, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(316, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(317, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(318, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(319, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(320, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(321, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(322, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(323, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(324, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(325, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(326, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(327, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(328, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(329, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(330, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(331, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(332, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(333, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(334, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(335, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(336, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(337, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(338, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(339, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(340, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(341, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(342, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(343, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(344, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(345, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(346, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(347, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(348, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(349, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(350, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(351, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(352, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(353, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(354, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(355, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(356, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(357, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(358, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(359, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(360, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(361, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(362, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(363, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(364, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(365, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(366, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(367, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(368, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(369, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(370, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(371, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(372, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(373, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(374, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(375, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(376, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(377, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(378, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(379, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(380, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(381, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(382, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(383, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(384, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(385, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(386, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(387, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(388, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(389, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(390, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(391, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(392, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(393, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(394, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(395, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(396, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(397, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(398, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(399, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(400, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(401, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(402, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(403, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(404, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(405, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(406, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(407, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(408, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(409, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(410, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(411, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(412, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(413, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(414, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(415, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(416, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(417, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(418, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(419, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(420, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(421, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(422, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(423, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(424, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(425, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(426, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(427, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(428, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(429, 82, 2, 'downvote', '2016-10-28 22:15:46'),
(430, 15, 2, 'upvote', '2016-10-27 13:34:28'),
(431, 11, 2, 'upvote', '2016-10-27 13:35:37'),
(432, 82, 1, 'downvote', '2016-10-30 23:35:42'),
(433, 83, 4, 'upvote', '2016-10-30 15:54:56'),
(434, 82, 4, 'downvote', '2016-10-30 15:55:27'),
(435, 82, 4, 'downvote', '2016-10-30 15:55:28'),
(436, 82, 4, 'downvote', '2016-10-30 15:55:29'),
(437, 82, 4, 'downvote', '2016-10-30 15:55:30'),
(438, 82, 4, 'downvote', '2016-10-30 15:55:31'),
(439, 82, 4, 'downvote', '2016-10-30 15:55:31'),
(440, 82, 4, 'downvote', '2016-10-30 15:55:31'),
(441, 82, 4, 'downvote', '2016-10-30 15:55:31'),
(442, 82, 4, 'downvote', '2016-10-30 15:55:32'),
(443, 82, 4, 'downvote', '2016-10-30 15:55:32'),
(444, 82, 4, 'downvote', '2016-10-30 15:55:32'),
(445, 82, 4, 'downvote', '2016-10-30 15:55:32'),
(446, 82, 4, 'downvote', '2016-10-30 15:55:33'),
(447, 82, 4, 'downvote', '2016-10-30 15:55:33'),
(448, 82, 4, 'downvote', '2016-10-30 15:55:33'),
(449, 82, 4, 'downvote', '2016-10-30 15:55:34'),
(450, 82, 4, 'downvote', '2016-10-30 15:55:34'),
(451, 82, 4, 'downvote', '2016-10-30 15:55:34'),
(452, 82, 4, 'downvote', '2016-10-30 15:55:36'),
(453, 82, 4, 'downvote', '2016-10-30 15:55:36'),
(454, 82, 4, 'downvote', '2016-10-30 15:55:36'),
(455, 82, 4, 'downvote', '2016-10-30 15:55:36'),
(456, 82, 4, 'downvote', '2016-10-30 15:55:37'),
(457, 82, 4, 'downvote', '2016-10-30 15:55:37'),
(458, 82, 4, 'downvote', '2016-10-30 15:55:37'),
(459, 82, 4, 'downvote', '2016-10-30 15:55:37'),
(460, 82, 4, 'downvote', '2016-10-30 15:55:38'),
(461, 82, 4, 'downvote', '2016-10-30 15:55:38'),
(462, 82, 4, 'downvote', '2016-10-30 15:55:38'),
(463, 82, 4, 'downvote', '2016-10-30 15:55:38'),
(464, 82, 4, 'downvote', '2016-10-30 15:55:38'),
(465, 82, 4, 'downvote', '2016-10-30 15:55:39'),
(466, 82, 4, 'downvote', '2016-10-30 15:55:39'),
(467, 82, 4, 'downvote', '2016-10-30 15:55:39'),
(468, 82, 4, 'downvote', '2016-10-30 15:55:39'),
(469, 82, 4, 'downvote', '2016-10-30 15:55:40'),
(470, 82, 4, 'downvote', '2016-10-30 15:55:40'),
(471, 82, 4, 'downvote', '2016-10-30 15:55:40'),
(472, 82, 4, 'downvote', '2016-10-30 15:55:40'),
(473, 82, 4, 'downvote', '2016-10-30 15:55:40'),
(474, 82, 4, 'downvote', '2016-10-30 15:55:41'),
(475, 82, 4, 'downvote', '2016-10-30 15:55:41'),
(476, 82, 4, 'downvote', '2016-10-30 15:55:41'),
(477, 82, 4, 'downvote', '2016-10-30 15:55:41'),
(478, 82, 4, 'downvote', '2016-10-30 15:55:42'),
(479, 82, 4, 'downvote', '2016-10-30 15:55:42'),
(480, 82, 4, 'downvote', '2016-10-30 15:55:42'),
(481, 82, 4, 'downvote', '2016-10-30 15:55:42'),
(482, 82, 4, 'downvote', '2016-10-30 15:55:43'),
(483, 82, 4, 'downvote', '2016-10-30 15:55:43'),
(484, 82, 4, 'downvote', '2016-10-30 15:55:43'),
(485, 82, 4, 'downvote', '2016-10-30 15:55:43'),
(486, 82, 4, 'downvote', '2016-10-30 15:55:43'),
(487, 82, 4, 'downvote', '2016-10-30 15:55:44'),
(488, 82, 4, 'downvote', '2016-10-30 15:55:44'),
(489, 82, 4, 'downvote', '2016-10-30 15:55:44'),
(490, 82, 4, 'downvote', '2016-10-30 15:55:45'),
(491, 82, 4, 'downvote', '2016-10-30 15:55:45'),
(492, 82, 4, 'downvote', '2016-10-30 15:55:45'),
(493, 82, 4, 'downvote', '2016-10-30 15:55:45'),
(494, 82, 4, 'downvote', '2016-10-30 15:55:45'),
(495, 82, 4, 'downvote', '2016-10-30 15:55:46'),
(496, 82, 4, 'downvote', '2016-10-30 15:55:46'),
(497, 4, 4, 'downvote', '2016-10-30 15:56:17'),
(498, 4, 4, 'downvote', '2016-10-30 15:56:17'),
(499, 4, 4, 'downvote', '2016-10-30 15:56:17'),
(500, 4, 4, 'downvote', '2016-10-30 15:56:18'),
(501, 4, 4, 'downvote', '2016-10-30 15:56:18'),
(502, 4, 4, 'downvote', '2016-10-30 15:56:18'),
(503, 4, 4, 'downvote', '2016-10-30 15:56:18'),
(504, 4, 4, 'downvote', '2016-10-30 15:56:18'),
(505, 4, 4, 'downvote', '2016-10-30 15:56:19'),
(506, 4, 4, 'downvote', '2016-10-30 15:56:19'),
(507, 4, 4, 'downvote', '2016-10-30 15:56:19'),
(508, 58, 4, 'upvote', '2016-10-30 15:56:42'),
(509, 58, 4, 'upvote', '2016-10-30 15:56:42'),
(510, 58, 4, 'upvote', '2016-10-30 15:56:42'),
(511, 58, 4, 'upvote', '2016-10-30 15:56:42'),
(512, 58, 4, 'upvote', '2016-10-30 15:56:42'),
(513, 58, 4, 'upvote', '2016-10-30 15:56:42'),
(514, 58, 4, 'upvote', '2016-10-30 15:56:42'),
(515, 58, 4, 'upvote', '2016-10-30 15:56:42'),
(516, 58, 4, 'upvote', '2016-10-30 15:56:42'),
(517, 58, 4, 'upvote', '2016-10-30 15:56:42'),
(518, 58, 4, 'upvote', '2016-10-30 15:56:42'),
(519, 58, 4, 'upvote', '2016-10-30 15:56:42'),
(520, 58, 4, 'upvote', '2016-10-30 15:56:42'),
(521, 58, 4, 'upvote', '2016-10-30 15:56:42'),
(522, 58, 4, 'upvote', '2016-10-30 15:56:42'),
(523, 58, 4, 'upvote', '2016-10-30 15:56:42'),
(524, 58, 4, 'upvote', '2016-10-30 15:56:42'),
(525, 58, 4, 'upvote', '2016-10-30 15:56:42'),
(526, 58, 4, 'upvote', '2016-10-30 15:56:42'),
(527, 58, 4, 'upvote', '2016-10-30 15:56:42'),
(528, 58, 4, 'downvote', '2016-10-30 15:56:43'),
(529, 58, 4, 'downvote', '2016-10-30 15:56:50'),
(530, 58, 4, 'downvote', '2016-10-30 15:56:51'),
(531, 58, 4, 'downvote', '2016-10-30 15:56:52'),
(532, 58, 4, 'downvote', '2016-10-30 15:56:52'),
(533, 16, 4, 'upvote', '2016-10-30 15:57:58'),
(534, 49, 4, 'upvote', '2016-10-30 15:58:20'),
(535, 83, 2, 'upvote', '2016-10-30 23:44:57'),
(536, 81, 2, 'downvote', '2016-10-31 11:35:04'),
(537, 80, 2, 'upvote', '2016-10-31 11:35:21'),
(538, 79, 2, 'downvote', '2016-10-31 11:35:28'),
(539, 78, 2, 'upvote', '2016-10-31 11:35:34'),
(540, 84, 2, 'upvote', '2016-10-31 16:27:09'),
(541, 84, 4, 'upvote', '2016-11-01 10:23:01'),
(542, 86, 2, 'upvote', '2016-11-02 10:07:45'),
(543, 86, 1, 'upvote', '2016-11-02 10:10:27'),
(544, 55, 2, 'upvote', '2016-11-04 18:22:28'),
(545, 85, 2, 'downvote', '2016-11-04 18:25:58'),
(546, 87, 1, 'upvote', '2016-11-07 01:11:10'),
(549, 88, 2, 'upvote', '2016-11-07 08:11:23'),
(547, 84, 1, 'upvote', '2016-11-07 01:02:09'),
(548, 83, 1, 'upvote', '2016-11-07 01:04:11'),
(550, 88, 1, 'upvote', '2016-11-07 11:22:53'),
(551, 90, 1, 'upvote', '2016-11-07 13:37:02'),
(552, 92, 1, 'upvote', '2016-11-08 21:50:43'),
(553, 93, 2, 'upvote', '2016-11-09 07:45:43'),
(554, 91, 2, 'upvote', '2016-11-09 07:45:51'),
(555, 89, 2, 'upvote', '2016-11-09 07:45:56'),
(556, 94, 1, 'upvote', '2016-11-10 20:18:01'),
(557, 95, 1, 'upvote', '2016-11-10 20:18:07'),
(558, 96, 1, 'upvote', '2016-11-10 20:18:12'),
(559, 96, 2, 'downvote', '2016-11-11 17:58:27'),
(560, 104, 1, 'upvote', '2016-11-11 20:09:09'),
(561, 104, 2, 'upvote', '2016-11-11 21:28:17'),
(562, 105, 1, 'upvote', '2016-11-11 23:47:30'),
(563, 106, 1, 'upvote', '2016-11-11 23:47:39'),
(564, 111, 2, 'upvote', '2016-11-12 19:24:52'),
(565, 112, 2, 'upvote', '2016-11-13 08:04:42'),
(566, 82, 9, 'upvote', '2016-11-18 10:40:26'),
(567, 111, 1, 'upvote', '2016-11-13 19:59:32'),
(568, 112, 1, 'upvote', '2016-11-13 19:59:49'),
(569, 115, 2, 'upvote', '2016-11-14 12:20:52'),
(570, 113, 2, 'upvote', '2016-11-14 12:21:13'),
(571, 114, 2, 'downvote', '2016-11-14 12:21:17'),
(572, 116, 1, 'upvote', '2016-11-16 09:39:42'),
(573, 112, 4, 'downvote', '2016-11-16 19:09:11'),
(574, 69, 4, 'upvote', '2016-11-16 19:12:58'),
(575, 68, 4, 'upvote', '2016-11-16 19:13:02'),
(576, 14, 4, 'upvote', '2016-11-16 19:13:08'),
(577, 103, 4, 'upvote', '2016-11-17 11:03:08'),
(578, 110, 4, 'upvote', '2016-11-17 13:13:33'),
(579, 122, 2, 'upvote', '2016-11-17 19:10:44'),
(580, 87, 9, 'upvote', '2016-11-18 10:37:40'),
(581, 111, 9, 'upvote', '2016-11-18 10:38:44'),
(582, 122, 9, 'upvote', '2016-11-18 10:41:50'),
(583, 94, 9, 'upvote', '2016-11-18 10:42:58'),
(584, 119, 4, 'upvote', '2016-11-21 06:58:10'),
(585, 117, 4, 'upvote', '2016-11-21 06:58:16'),
(586, 126, 12, 'upvote', '2016-11-22 13:31:28'),
(587, 126, 2, 'upvote', '2016-11-23 07:24:10'),
(588, 125, 2, 'upvote', '2016-11-23 07:24:18'),
(589, 131, 2, 'upvote', '2016-11-23 21:58:31'),
(590, 131, 12, 'upvote', '2016-11-24 10:04:48'),
(591, 132, 1, 'upvote', '2016-11-26 17:44:44'),
(592, 131, 1, 'upvote', '2016-11-26 17:44:51'),
(593, 133, 2, 'upvote', '2016-11-28 14:29:03'),
(594, 132, 2, 'upvote', '2016-11-28 14:29:20'),
(595, 134, 1, 'upvote', '2016-11-28 22:42:08'),
(596, 135, 2, 'upvote', '2016-11-29 07:44:25'),
(597, 134, 2, 'upvote', '2016-11-29 07:48:45'),
(598, 136, 12, 'upvote', '2016-11-30 19:47:30'),
(599, 138, 12, 'upvote', '2016-12-01 19:33:13'),
(600, 138, 1, 'upvote', '2016-12-02 12:07:49'),
(601, 87, 12, 'upvote', '2016-12-04 20:58:43'),
(602, 83, 12, 'upvote', '2016-12-04 20:59:00'),
(603, 135, 9, 'upvote', '2016-12-06 11:24:40'),
(604, 138, 4, 'upvote', '2016-12-08 09:27:39'),
(605, 144, 2, 'upvote', '2016-12-15 20:37:09'),
(606, 16, 13, 'downvote', '2016-12-19 14:31:29'),
(607, 55, 13, 'upvote', '2016-12-19 14:34:11'),
(608, 65, 13, 'downvote', '2016-12-19 14:34:18'),
(609, 84, 13, 'upvote', '2016-12-19 14:34:35'),
(610, 12, 13, 'downvote', '2016-12-19 14:34:45'),
(611, 143, 4, 'downvote', '2016-12-20 14:08:44'),
(612, 143, 4, 'downvote', '2016-12-20 14:08:46'),
(613, 143, 4, 'downvote', '2016-12-20 14:08:48'),
(614, 143, 4, 'downvote', '2016-12-20 14:08:50'),
(615, 143, 4, 'downvote', '2016-12-20 14:08:52'),
(616, 143, 4, 'downvote', '2016-12-20 14:08:53'),
(617, 143, 4, 'downvote', '2016-12-20 14:08:55'),
(618, 142, 4, 'downvote', '2016-12-20 14:08:57'),
(619, 142, 4, 'downvote', '2016-12-20 14:08:59'),
(620, 142, 4, 'downvote', '2016-12-20 14:09:01'),
(621, 142, 4, 'downvote', '2016-12-20 14:09:02'),
(622, 142, 4, 'downvote', '2016-12-20 14:09:03'),
(623, 142, 4, 'downvote', '2016-12-20 14:09:03'),
(624, 142, 4, 'downvote', '2016-12-20 14:09:03'),
(625, 142, 4, 'downvote', '2016-12-20 14:09:03'),
(626, 142, 4, 'downvote', '2016-12-20 14:09:04'),
(627, 142, 4, 'downvote', '2016-12-20 14:09:04'),
(628, 142, 4, 'downvote', '2016-12-20 14:09:04'),
(629, 142, 4, 'downvote', '2016-12-20 14:09:05'),
(630, 142, 4, 'downvote', '2016-12-20 14:09:05'),
(631, 142, 4, 'downvote', '2016-12-20 14:09:05'),
(632, 142, 4, 'downvote', '2016-12-20 14:09:06'),
(633, 143, 4, 'downvote', '2016-12-20 14:09:13'),
(634, 143, 4, 'downvote', '2016-12-20 14:09:14'),
(635, 143, 4, 'downvote', '2016-12-20 14:09:14'),
(636, 143, 4, 'downvote', '2016-12-20 14:09:15'),
(637, 143, 4, 'downvote', '2016-12-20 14:09:16'),
(638, 143, 4, 'downvote', '2016-12-20 14:09:16'),
(639, 143, 4, 'downvote', '2016-12-20 14:09:17'),
(640, 143, 4, 'downvote', '2016-12-20 14:09:17'),
(641, 143, 4, 'downvote', '2016-12-20 14:09:18'),
(642, 143, 4, 'downvote', '2016-12-20 14:09:18'),
(643, 143, 4, 'downvote', '2016-12-20 14:09:18'),
(644, 143, 4, 'downvote', '2016-12-20 14:09:19'),
(645, 143, 4, 'downvote', '2016-12-20 14:09:20'),
(646, 143, 4, 'downvote', '2016-12-20 14:09:20'),
(647, 143, 4, 'downvote', '2016-12-20 14:09:21'),
(648, 143, 4, 'downvote', '2016-12-20 14:09:21'),
(649, 143, 4, 'downvote', '2016-12-20 14:09:21'),
(650, 143, 4, 'downvote', '2016-12-20 14:09:22'),
(651, 143, 4, 'downvote', '2016-12-20 14:09:22'),
(652, 143, 4, 'downvote', '2016-12-20 14:09:23'),
(653, 143, 4, 'downvote', '2016-12-20 14:09:23'),
(654, 143, 4, 'downvote', '2016-12-20 14:09:24'),
(655, 143, 4, 'downvote', '2016-12-20 14:09:24'),
(656, 143, 4, 'downvote', '2016-12-20 14:09:25'),
(657, 143, 4, 'downvote', '2016-12-20 14:09:25'),
(658, 143, 4, 'downvote', '2016-12-20 14:09:26'),
(659, 143, 4, 'downvote', '2016-12-20 14:09:26'),
(660, 143, 4, 'downvote', '2016-12-20 14:09:27'),
(661, 143, 4, 'downvote', '2016-12-20 14:09:27'),
(662, 143, 4, 'downvote', '2016-12-20 14:09:27'),
(663, 143, 4, 'downvote', '2016-12-20 14:09:28'),
(664, 143, 4, 'downvote', '2016-12-20 14:09:28'),
(665, 143, 4, 'downvote', '2016-12-20 14:09:29'),
(666, 143, 4, 'downvote', '2016-12-20 14:09:29'),
(667, 143, 4, 'downvote', '2016-12-20 14:09:30'),
(668, 143, 4, 'downvote', '2016-12-20 14:09:30'),
(669, 143, 4, 'downvote', '2016-12-20 14:09:31'),
(670, 143, 4, 'downvote', '2016-12-20 14:09:32'),
(671, 143, 4, 'downvote', '2016-12-20 14:09:33'),
(672, 143, 4, 'downvote', '2016-12-20 14:09:34'),
(673, 143, 4, 'downvote', '2016-12-20 14:09:34'),
(674, 143, 4, 'downvote', '2016-12-20 14:09:35'),
(675, 143, 4, 'downvote', '2016-12-20 14:09:36'),
(676, 143, 4, 'downvote', '2016-12-20 14:09:37'),
(677, 143, 4, 'downvote', '2016-12-20 14:09:38'),
(678, 143, 4, 'downvote', '2016-12-20 14:09:38'),
(679, 143, 4, 'downvote', '2016-12-20 14:09:39'),
(680, 143, 4, 'downvote', '2016-12-20 14:09:39'),
(681, 143, 4, 'downvote', '2016-12-20 14:09:42'),
(682, 143, 4, 'downvote', '2016-12-20 14:09:42'),
(683, 143, 4, 'downvote', '2016-12-20 14:09:42'),
(684, 143, 4, 'downvote', '2016-12-20 14:09:43'),
(685, 143, 4, 'downvote', '2016-12-20 14:09:44'),
(686, 143, 4, 'downvote', '2016-12-20 14:09:46'),
(687, 143, 4, 'downvote', '2016-12-20 14:09:49'),
(688, 143, 4, 'downvote', '2016-12-20 14:09:51'),
(689, 143, 4, 'downvote', '2016-12-20 14:09:52'),
(690, 143, 4, 'downvote', '2016-12-20 14:09:52'),
(691, 143, 4, 'downvote', '2016-12-20 14:09:57'),
(692, 143, 4, 'downvote', '2016-12-20 14:09:57'),
(693, 143, 4, 'downvote', '2016-12-20 14:09:57'),
(694, 143, 4, 'downvote', '2016-12-20 14:10:12'),
(695, 143, 4, 'downvote', '2016-12-20 14:10:12'),
(696, 143, 4, 'downvote', '2016-12-20 14:10:12'),
(697, 143, 4, 'downvote', '2016-12-20 14:10:12'),
(698, 143, 4, 'downvote', '2016-12-20 14:10:27'),
(699, 143, 4, 'downvote', '2016-12-20 14:10:27'),
(700, 143, 4, 'downvote', '2016-12-20 14:10:29'),
(701, 143, 4, 'downvote', '2016-12-20 14:10:30'),
(702, 143, 4, 'downvote', '2016-12-20 14:10:31'),
(703, 143, 4, 'downvote', '2016-12-20 14:10:31'),
(704, 143, 4, 'downvote', '2016-12-20 14:10:33'),
(705, 143, 4, 'downvote', '2016-12-20 14:10:33'),
(706, 143, 4, 'downvote', '2016-12-20 14:10:35'),
(707, 143, 4, 'downvote', '2016-12-20 14:10:35'),
(708, 143, 4, 'downvote', '2016-12-20 14:10:35'),
(709, 143, 4, 'downvote', '2016-12-20 14:10:37'),
(710, 143, 4, 'downvote', '2016-12-20 14:10:38'),
(711, 143, 4, 'downvote', '2016-12-20 14:10:41'),
(712, 143, 4, 'downvote', '2016-12-20 14:10:41'),
(713, 143, 4, 'downvote', '2016-12-20 14:10:43'),
(714, 143, 4, 'downvote', '2016-12-20 14:10:44'),
(715, 143, 4, 'downvote', '2016-12-20 14:10:45'),
(716, 143, 4, 'downvote', '2016-12-20 14:10:48'),
(717, 143, 4, 'downvote', '2016-12-20 14:10:49'),
(718, 143, 4, 'downvote', '2016-12-20 14:10:50'),
(719, 143, 4, 'downvote', '2016-12-20 14:10:52'),
(720, 143, 4, 'downvote', '2016-12-20 14:10:53'),
(721, 143, 4, 'downvote', '2016-12-20 14:10:54'),
(722, 150, 14, 'upvote', '2017-01-20 10:32:19'),
(723, 150, 14, 'upvote', '2017-01-20 10:32:19'),
(724, 150, 14, 'upvote', '2017-01-20 10:32:19'),
(725, 150, 14, 'upvote', '2017-01-20 10:32:19'),
(726, 150, 14, 'upvote', '2017-01-20 10:32:19'),
(727, 150, 14, 'upvote', '2017-01-20 10:32:19'),
(728, 150, 14, 'upvote', '2017-01-20 10:32:19'),
(729, 150, 14, 'upvote', '2017-01-20 10:32:19'),
(730, 150, 14, 'upvote', '2017-01-20 10:32:19'),
(731, 150, 14, 'upvote', '2017-01-20 10:32:19'),
(732, 149, 14, 'upvote', '2017-01-20 14:19:14'),
(733, 149, 14, 'upvote', '2017-01-20 14:19:14'),
(734, 149, 14, 'upvote', '2017-01-20 14:19:14'),
(735, 9, 2, 'upvote', '2017-02-01 18:42:44'),
(736, 151, 14, 'upvote', '2017-03-22 08:54:40'),
(737, 150, 8, 'upvote', '2017-06-24 21:34:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `audios`
--
ALTER TABLE `audios`
  ADD PRIMARY KEY (`Audio_id`);

--
-- Indexes for table `discussion`
--
ALTER TABLE `discussion`
  ADD PRIMARY KEY (`Discussion_id`);

--
-- Indexes for table `discussion_message`
--
ALTER TABLE `discussion_message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `email_reg`
--
ALTER TABLE `email_reg`
  ADD PRIMARY KEY (`email_reg_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`Image_id`);

--
-- Indexes for table `image_embed`
--
ALTER TABLE `image_embed`
  ADD PRIMARY KEY (`image_embed_id`);

--
-- Indexes for table `link`
--
ALTER TABLE `link`
  ADD PRIMARY KEY (`Link_id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`notification_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`Post_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `text`
--
ALTER TABLE `text`
  ADD PRIMARY KEY (`Text_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_id`);

--
-- Indexes for table `user_notifications`
--
ALTER TABLE `user_notifications`
  ADD PRIMARY KEY (`User_notifications_id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`video_id`);

--
-- Indexes for table `video_embed`
--
ALTER TABLE `video_embed`
  ADD PRIMARY KEY (`videm_id`);

--
-- Indexes for table `vote`
--
ALTER TABLE `vote`
  ADD PRIMARY KEY (`Vote_id`);

--
-- Indexes for table `vote_log1`
--
ALTER TABLE `vote_log1`
  ADD PRIMARY KEY (`vote_log_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `audios`
--
ALTER TABLE `audios`
  MODIFY `Audio_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `discussion`
--
ALTER TABLE `discussion`
  MODIFY `Discussion_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;
--
-- AUTO_INCREMENT for table `discussion_message`
--
ALTER TABLE `discussion_message`
  MODIFY `message_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
--
-- AUTO_INCREMENT for table `email_reg`
--
ALTER TABLE `email_reg`
  MODIFY `email_reg_id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `Image_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT for table `image_embed`
--
ALTER TABLE `image_embed`
  MODIFY `image_embed_id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `link`
--
ALTER TABLE `link`
  MODIFY `Link_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `notification_id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `Post_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;
--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `report_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `text`
--
ALTER TABLE `text`
  MODIFY `Text_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `user_notifications`
--
ALTER TABLE `user_notifications`
  MODIFY `User_notifications_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=237;
--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `video_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `video_embed`
--
ALTER TABLE `video_embed`
  MODIFY `videm_id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vote`
--
ALTER TABLE `vote`
  MODIFY `Vote_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;
--
-- AUTO_INCREMENT for table `vote_log1`
--
ALTER TABLE `vote_log1`
  MODIFY `vote_log_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=738;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
