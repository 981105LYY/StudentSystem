-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-12-09 16:29:15
-- 服务器版本： 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ok`
--
CREATE DATABASE IF NOT EXISTS `ok` DEFAULT CHARACTER SET gbk COLLATE gbk_chinese_ci;
USE `ok`;

-- --------------------------------------------------------

--
-- 表的结构 `paper`
--

CREATE TABLE `paper` (
  `id` int(10) UNSIGNED NOT NULL COMMENT '主键',
  `name` varchar(100) NOT NULL COMMENT '试卷名',
  `subject` varchar(50) NOT NULL COMMENT '科目',
  `total` int(11) NOT NULL COMMENT '总题量',
  `content` text NOT NULL COMMENT '内容',
  `memo` varchar(50) DEFAULT NULL COMMENT '备注'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `paper`
--

INSERT INTO `paper` (`id`, `name`, `subject`, `total`, `content`, `memo`) VALUES
(20, '2016-2017-2 php期末考试卷', 'php', 2, '12,13', '');

-- --------------------------------------------------------

--
-- 表的结构 `score`
--

CREATE TABLE `score` (
  `id` int(10) UNSIGNED NOT NULL,
  `studentId` varchar(8) CHARACTER SET utf8 NOT NULL,
  `test_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `subject` varchar(20) CHARACTER SET utf8 NOT NULL,
  `paper_id` int(10) UNSIGNED NOT NULL COMMENT '试卷id',
  `mark` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=gbk;

--
-- 转存表中的数据 `score`
--

INSERT INTO `score` (`id`, `studentId`, `test_name`, `subject`, `paper_id`, `mark`) VALUES
(1, '7160603', '2016-2017-2 php期末考试卷', 'php', 20, 88),
(2, '222', '2016-2017-2 php期末考试卷\r\n', 'php', 20, 33),
(15, '07160694', '2016-2017-2 php期末考试卷', 'php', 20, 88),
(16, '07160801', '2016-2017-2 php期末考试卷', 'sql', 20, 88);

-- --------------------------------------------------------

--
-- 表的结构 `student`
--

CREATE TABLE `student` (
  `id` int(10) UNSIGNED NOT NULL,
  `studentId` varchar(8) NOT NULL,
  `name` varchar(20) NOT NULL,
  `className` varchar(20) NOT NULL,
  `birthday` date NOT NULL,
  `sex` char(1) NOT NULL DEFAULT '男',
  `nation` varchar(10) NOT NULL,
  `password` varchar(40) DEFAULT NULL COMMENT '密码'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `student`
--

INSERT INTO `student` (`id`, `studentId`, `name`, `className`, `birthday`, `sex`, `nation`, `password`) VALUES
(1, '07160801', '张三', '软件1608', '2000-01-01', '女', '汉族', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8'),
(3, '07160803', '无奇不有', '软件班', '2013-04-22', '男', '汉族', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8'),
(7, '07160699', '张张张张', '软件1606', '1999-09-09', '男', '汉', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8'),
(8, '07160698', '出现了', '软件1606', '1998-09-09', '女', '回', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8'),
(10, '07160696', '于在古', '软件1606', '1666-06-06', '男', '汉', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8'),
(11, '07160695', '逻辑思维', '软件1606', '1999-09-09', '女', '汉', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8'),
(12, '07160694', '丌苦', '软件1606', '1999-09-09', '女', '汉', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8'),
(14, '222', 'hiohh', '111', '2014-09-09', '男', 'ojjo', NULL),
(15, '7160603', 'cjh', 'ruanjian', '1997-09-14', '女', '汉', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(48) NOT NULL,
  `status` tinyint(4) NOT NULL COMMENT '状态'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `status`) VALUES
(1, 'a', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', 0),
(2, 'rrr', '8578173555a47d4ea49e697badfda270dee0858f', 1),
(3, 'dd', '388ad1c312a488ee9e12998fe097f2258fa8d5ee', 1),
(4, 'e', '1f444844b1ca616009c2b0e3564fecc065872b5b', 1),
(5, 'A', '801c34269f74ed383fc97de33604b8a905adb635', 1),
(6, 'ss', 'bf9661defa3daecacfde5bde0214c4a439351d4d', 1),
(7, 'bbb', '5cb138284d431abd6a053a56625ec088bfb88912', 1),
(8, 'admin', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1),
(9, 'aa', '70c881d4a26984ddce795f6f71817c9cf4480e79', 1),
(10, 'cc', 'bdb480de655aa6ec75ca058c849c4faf3c0f75b1', 1),
(11, 'ddd', '9c969ddf454079e3d439973bbab63ea6233e4087', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `paper`
--
ALTER TABLE `paper`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index3_student_id` (`studentId`),
  ADD KEY `index4_paper_id` (`paper_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `INDEX_STUDENT_ID` (`studentId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `paper`
--
ALTER TABLE `paper`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键', AUTO_INCREMENT=21;
--
-- 使用表AUTO_INCREMENT `score`
--
ALTER TABLE `score`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- 使用表AUTO_INCREMENT `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- 限制导出的表
--

--
-- 限制表 `score`
--
ALTER TABLE `score`
  ADD CONSTRAINT `score_ibfk_1` FOREIGN KEY (`studentId`) REFERENCES `student` (`studentId`),
  ADD CONSTRAINT `score_ibfk_2` FOREIGN KEY (`paper_id`) REFERENCES `paper` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
