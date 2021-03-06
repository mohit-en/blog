-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2021 at 07:55 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_from` varchar(200) NOT NULL,
  `date_to` varchar(200) NOT NULL,
  `color` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `user_id`, `date_from`, `date_to`, `color`) VALUES
(17, 'Work on UI design', 1, 'Tue Feb 09 2021 00:00:00 GMT+0530 (India Standard Time)', 'Thu Feb 11 2021 00:00:00 GMT+0530 (India Standard Time)', ''),
(18, 'Go home', 1, 'Tue Feb 02 2021 00:00:00 GMT+0530 (India Standard Time)', 'Tue Feb 02 2021 00:00:00 GMT+0530 (India Standard Time)', 'rgb(255, 193, 7)'),
(22, 'uuu', 1, 'Tue Feb 23 2021 00:00:00 GMT+0530 (India Standard Time)', 'Tue Feb 23 2021 00:00:00 GMT+0530 (India Standard Time)', '#f56954');

-- --------------------------------------------------------

--
-- Table structure for table `total_posts`
--

CREATE TABLE `total_posts` (
  `post_id` int(15) NOT NULL,
  `article_title` varchar(150) NOT NULL,
  `short_description` varchar(200) NOT NULL,
  `img_path` varchar(200) NOT NULL,
  `article` longtext NOT NULL,
  `creater` varchar(150) NOT NULL,
  `date` date NOT NULL,
  `access` varchar(1) NOT NULL DEFAULT '1',
  `user_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `total_posts`
--

INSERT INTO `total_posts` (`post_id`, `article_title`, `short_description`, `img_path`, `article`, `creater`, `date`, `access`, `user_id`) VALUES
(1, 'The nuclier bomb', '', '', 'This is a biggest invetion in the world. Thank you so much for lisning to me have a nice day. ', 'Nikita', '2021-01-27', '1', 8),
(2, 'The Hottest Hairstyle at Fashion Week Is Not on the Runways', 'Remember, a Jedi can feel the Force flowing through him. I can’t get involved! I’ve got work to do! It’s not that I like the Empire, I hate it, but there’s nothing I can do about it right now. It’s su', 'uploads\\posts\\2267-9682-73913506.jpg', '<p><p align=\"center\">\r\n                        <img style=\"width: 50%;\" src=\"https://flutterblog.crumet.com/wp-content/uploads/2020/02/14-696x477.jpg\"></p><p style=\"\">All right. Well, take care yourself. I guess that’s what you’re best,\r\n presence old master? A tremor in the Force. The last time felt it was \r\nin the presence of my old master. I have traced the Rebel spies to her.</p>\r\n<p>Remember, a Jedi can feel the Force flowing through him. I can’t get \r\ninvolved! I’ve got work to do! It’s not that I like the Empire, I hate \r\nit, but there’s nothing I can do about it right now.</p>\r\nDesign is not just what it looks like and feels like. Design is how it works.<p style=\"\">\r\n</p><p style=\"\">The plans you refer to will soon be back in our hands. The plans you \r\nrefer to will soon be back in our hands. Leave that to me. Send a \r\ndistress signal, and inform the Senate that all on board were killed. \r\nRed Five standing by.</p><p align=\"center\"><iframe src=\"//www.youtube.com/embed/de8bcDU0sjs\" class=\"note-video-clip\" width=\"640\" height=\"360\" frameborder=\"0\"></iframe></p><p>I find your lack of faith disturbing. A tremor in the Force. The last\r\n time I felt it was in the presence of my old master. Hey, Luke! May the\r\n Force be with you. Red Five standing by. Red Five standing by. Your \r\neyes can deceive you. Don’t trust them.</p>\r\n<p>Hokey religions and ancient weapons are no match for a good blaster \r\nat your side, kid. I find your lack of faith disturbing. The more you \r\ntighten your grip, Tarkin, the more star systems will slip through your \r\nfingers. As you wish.</p>\r\n<p>\r\n</p><p>Thanks for looking at our theme</p><p>I need your help, Luke. She needs your help. I’m getting too old for \r\nthis sort of thing. Oh God, my uncle. How am I ever gonna explain this? \r\nAs you wish. Escape is not his plan. I must face him, alone. You mean it\r\n controls your actions?</p>\r\n<p>Remember, a Jedi can feel the Force flowing through him. The plans \r\nyou refer to will soon be back in our hands. Ye-ha! The plans you refer \r\nto will soon be back in our hands.</p><p><img style=\"width: 191.368px; float: right; height: 287.5px;\" src=\"https://flutterblog.crumet.com/wp-content/uploads/2020/02/p2.jpg\" class=\"note-float-right\"><br></p><p>Hokey religions and ancient weapons are no match for a good blaster at your side, kid. I find your lack of faith disturbing.</p>\r\n<p>The more you tighten your grip, Tarkin, the more star systems will slip through your fingers. As you wish.</p>\r\n<p>Remember, a Jedi can feel the Force flowing through him. The plans \r\nyou refer to will soon be back in our hands. Ye-ha! The plans you refer \r\nto will soon be back in our hands.</p>\r\n<p>The more you tighten your grip, Tarkin, the more star systems will \r\nslip through your fingers. In my experience, there is no such thing as \r\nluck. Red Five standing by.</p><p><br></p><p>A tremor in the Force. The last time I felt it was in the presence of\r\n my old master. I have traced the Rebel spies to her. Now she is my only\r\n link to finding their secret base. Remember, a Jedi can feel the Force \r\nflowing through him.</p>\r\n<p>I need your help, Luke. She needs your help. I’m getting too old for \r\nthis sort of thing. Red Five standing by. Don’t be too proud of this \r\ntechnological terror you’ve constructed. The ability to destroy a planet\r\n is insignificant next to the power of the Force. The plans you refer to\r\n will soon be back in our hands. The plans you refer to will soon be \r\nback in our hands.</p><p align=\"center\"><img style=\"width: 50%;\" src=\"https://flutterblog.crumet.com/wp-content/uploads/2020/02/p3.jpg\"></p><p>All right. Well, take care of yourself, Han. I guess that’s what \r\nyou’re best at, ain’t it? A tremor in the Force. The last time I felt it\r\n was in the presence of my old master. I have traced the Rebel spies to \r\nher.</p>\r\n<p>Remember, a Jedi can feel the Force flowing through him. I can’t get involved! I’ve got work to do! It’s not that I like the <a href=\"http://flutterblog.crumet.com/2020/02/13/gigabyte-geforce-gtx-950-review-pricing-is-everything/\">Empire</a>, I hate it, but there’s nothing I can do about it right now. It’s such a long way from here. I call it luck.</p>\r\n<p>The more you tighten your grip, Tarkin, the more star systems will \r\nslip through your fingers. In my experience, there is no such thing as \r\nluck. Red Five standing by.</p><p align=\"center\"><img style=\"width: 50%;\" src=\"https://flutterblog.crumet.com/wp-content/uploads/2020/02/p4.jpg\"></p><p>You are a part of the Rebel Alliance and a traitor! Take her away! \r\nRed Five standing by. All right. Well, take care of yourself, Han. I \r\nguess that’s what you’re best at, ain’t it? Alderaan? I’m not going to \r\nAlderaan. I’ve got to go home. It’s late, I’m in for it as it is.</p>\r\n<p dir=\"ltr\" lang=\"en\">Oh God, my uncle. How am I ever gonna explain this? Hey, Luke! May the Force be with you. I find your lack of faith disturbing.</p><p dir=\"ltr\" lang=\"en\">I wish I could read your mind to know what you really think of me.</p><p dir=\"ltr\" lang=\"en\">— Amazing Facts (@FactSoup)</p></p><p>\r\n\r\n\r\n\r\n</p><p><p></p><p></p><p></p><p></p></p>', 'Mohit', '2021-03-06', '1', 11);

-- --------------------------------------------------------

--
-- Table structure for table `user_list`
--

CREATE TABLE `user_list` (
  `user_id` int(15) NOT NULL,
  `user_name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `total_post` int(12) NOT NULL DEFAULT 0,
  `type` varchar(15) NOT NULL DEFAULT 'co_admin',
  `password` varchar(40) NOT NULL,
  `reg_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_list`
--

INSERT INTO `user_list` (`user_id`, `user_name`, `email`, `total_post`, `type`, `password`, `reg_id`) VALUES
(5, 'Haresh', 'harsu@g.com', 0, 'admin', '123', 2),
(6, 'kamlesh', 'kamubhai@g.co', 0, 'co_admin', 'asdf', 6),
(8, 'Nikita', 'naike@g.com', 0, 'co_admin', '1234', 4),
(11, 'Mohit', 'mohit@g.co', 1, 'co_admin', '123', 1),
(14, 'temp123', 'temp@temp.com', 0, 'co_admin', '123', 13);

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE `user_register` (
  `reg_id` int(15) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `access` tinyint(1) NOT NULL DEFAULT 0,
  `country` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`reg_id`, `name`, `email`, `password`, `access`, `country`) VALUES
(1, 'Mohit', 'mohit@g.co', '123', 1, 'India'),
(2, 'Haresh', 'harsu@g.com', '123', 1, 'India'),
(3, 'Prashant', 'parsu@g.com', '123', 0, 'UK'),
(4, 'Nikita', 'naike@g.com', '1234', 1, 'Japan'),
(5, 'parin', 'parin@g.co', '123456', 0, 'Koria'),
(6, 'kamlesh', 'kamubhai@g.co', 'asdf', 1, 'iran'),
(9, 'Munna', 'munna@g.co', '12345678', 0, 'India'),
(13, 'temp123', 'temp@temp.com', '123', 1, 'India');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `total_posts`
--
ALTER TABLE `total_posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `user_list`
--
ALTER TABLE `user_list`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_register`
--
ALTER TABLE `user_register`
  ADD PRIMARY KEY (`reg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `total_posts`
--
ALTER TABLE `total_posts`
  MODIFY `post_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_list`
--
ALTER TABLE `user_list`
  MODIFY `user_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_register`
--
ALTER TABLE `user_register`
  MODIFY `reg_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
