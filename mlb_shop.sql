-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2022-05-26 14:04:23
-- 服务器版本： 5.7.26
-- PHP 版本： 5.6.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `mlb_shop`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE `admin` (
  `id` int(4) NOT NULL,
  `admin_name` varchar(25) CHARACTER SET utf8 DEFAULT NULL,
  `admin_pwd` varchar(50) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=gb2312;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `admin_pwd`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- 表的结构 `dingdan`
--

CREATE TABLE `dingdan` (
  `id` int(4) NOT NULL,
  `dingdanhao` varchar(125) DEFAULT NULL,
  `spc` varchar(125) DEFAULT NULL,
  `slc` varchar(125) DEFAULT NULL,
  `shouhuoren` varchar(25) DEFAULT NULL,
  `sex` varchar(2) DEFAULT NULL,
  `dizhi` varchar(125) DEFAULT NULL,
  `tel` varchar(25) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `zfff` varchar(25) DEFAULT NULL,
  `leaveword` mediumtext,
  `xiadanren` varchar(25) DEFAULT NULL,
  `zt` varchar(50) DEFAULT NULL,
  `th` int(2) NOT NULL DEFAULT '0',
  `total` varchar(25) DEFAULT NULL,
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `kuaidi` varchar(50) DEFAULT NULL,
  `bianhao` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=gb2312;

--
-- 转存表中的数据 `dingdan`
--

INSERT INTO `dingdan` (`id`, `dingdanhao`, `spc`, `slc`, `shouhuoren`, `sex`, `dizhi`, `tel`, `email`, `zfff`, `leaveword`, `xiadanren`, `zt`, `th`, `total`, `time`, `kuaidi`, `bianhao`) VALUES
(9, '2022052614014610', '39@', '1@', '张三', '男', '上海', '13322341122', '123@qq.com', '支付宝', '123', 'test123', '已收款已收货', 0, '1599', '2022-05-26 06:01:46', '京东快递', '123');

-- --------------------------------------------------------

--
-- 表的结构 `fenlei`
--

CREATE TABLE `fenlei` (
  `id` int(4) NOT NULL,
  `fenleiname` varchar(16) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `fenlei`
--

INSERT INTO `fenlei` (`id`, `fenleiname`) VALUES
(51, 'T恤/连衣裙'),
(50, '卫衣'),
(49, '外套'),
(48, '鞋类'),
(47, '帽子');

-- --------------------------------------------------------

--
-- 表的结构 `news`
--

CREATE TABLE `news` (
  `id` int(4) NOT NULL,
  `title` varchar(67) DEFAULT NULL,
  `content` text,
  `addtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `addtime`) VALUES
(37, 'MLB在线商城上线啦！', '<p>MLB在线商城上线啦！</p><p><img src=\"https://gimg2.baidu.com/image_search/src=http%3A%2F%2Fnimg.ws.126.net%2F%3Furl%3Dhttp%253A%252F%252Fdingyue.ws.126.net%252F2022%252F0518%252F0e6d9469j00rc2zd1000uc000hs00hsg.jpg%26thumbnail%3D660x2147483647%26quality%3D80%26type%3Djpg&refer=http%3A%2F%2Fnimg.ws.126.net&app=2002&size=f9999,10000&q=a80&n=0&g=0n&fmt=auto?sec=1656136653&t=4f75b29ac662526091cbc8dacacb157a\" width=\"147\" height=\"109\"/></p>', '2022-05-26 05:57:48');

-- --------------------------------------------------------

--
-- 表的结构 `pinglun`
--

CREATE TABLE `pinglun` (
  `id` int(4) NOT NULL,
  `userid` int(4) DEFAULT NULL,
  `spid` int(4) DEFAULT NULL,
  `content` text,
  `addtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `pinglun`
--

INSERT INTO `pinglun` (`id`, `userid`, `spid`, `content`, `addtime`) VALUES
(35, 10, 39, '棒棒哒', '2022-05-26 06:02:56');

-- --------------------------------------------------------

--
-- 表的结构 `shangpin`
--

CREATE TABLE `shangpin` (
  `id` int(4) NOT NULL,
  `mingcheng` varchar(25) DEFAULT NULL,
  `jianjie` mediumtext,
  `xinghao` varchar(25) DEFAULT NULL,
  `tupian` varchar(200) DEFAULT NULL,
  `shuliang` int(4) DEFAULT NULL,
  `cishu` int(4) DEFAULT NULL,
  `tuijian` int(4) DEFAULT NULL,
  `typeid` int(4) DEFAULT NULL,
  `huiyuanjia` decimal(11,0) DEFAULT NULL,
  `shichangjia` decimal(11,0) DEFAULT NULL,
  `dianji` int(11) NOT NULL DEFAULT '0',
  `size` varchar(20) NOT NULL,
  `color` varchar(20) NOT NULL,
  `addtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=gb2312;

--
-- 转存表中的数据 `shangpin`
--

INSERT INTO `shangpin` (`id`, `mingcheng`, `jianjie`, `xinghao`, `tupian`, `shuliang`, `cishu`, `tuijian`, `typeid`, `huiyuanjia`, `shichangjia`, `dianji`, `size`, `color`, `addtime`) VALUES
(40, '增高轻便运动鞋', '<p>增高轻便运动鞋</p>', '6', '3969190.png', 100, 0, 0, 48, '599', '699', 1, '41', '白棕', '2022-05-25 16:00:00'),
(39, '牛仔复古老花外套', '<p>牛仔复古老花外套</p>', '5', '2209278.png', 100, 0, 0, 49, '1599', '1999', 7, 'L', '深蓝', '2022-05-25 16:00:00'),
(38, '复古老花宽松卫衣', '<p>复古老花宽松卫衣</p>', '4', '9917797.png', 100, 0, 0, 50, '700', '769', 0, 'L', '白棕', '2022-05-25 16:00:00'),
(37, '腰果花LOGO短袖', '<p>腰果花LOGO短袖</p>', '3', '5895642.png', 100, 0, 1, 51, '400', '439', 0, 'L', '深蓝', '2022-05-25 16:00:00'),
(36, '经典纯色短袖', '<p>经典纯色短袖</p>', '2', '8759033.png', 100, 0, 1, 51, '220', '269', 0, 'L', '黑白', '2022-05-25 16:00:00'),
(35, '老花短袖T恤', '<p>老花短袖T恤</p>', '1', '4491851.png', 100, 0, 1, 51, '480', '499', 0, 'L', '白', '2022-05-25 16:00:00'),
(41, '软顶棒球帽', '<p>软顶棒球帽</p>', '7', '53414.png', 100, 0, 0, 47, '200', '269', 0, '中', '黑', '2022-05-25 16:00:00');

-- --------------------------------------------------------

--
-- 表的结构 `usermember`
--

CREATE TABLE `usermember` (
  `id` int(4) NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `pwd` varchar(50) DEFAULT NULL,
  `dongjie` int(4) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `tel` varchar(25) DEFAULT NULL,
  `dizhi` varchar(100) DEFAULT NULL,
  `truename` varchar(25) DEFAULT NULL,
  `regtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=gb2312;

--
-- 转存表中的数据 `usermember`
--

INSERT INTO `usermember` (`id`, `name`, `pwd`, `dongjie`, `email`, `tel`, `dizhi`, `truename`, `regtime`) VALUES
(10, 'test123', 'e08a7c49d96c2b475656cc8fe18cee8e', 0, '123@qq.com', '13322341122', '上海', '张三', '2022-05-26 06:01:35');

--
-- 转储表的索引
--

--
-- 表的索引 `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `dingdan`
--
ALTER TABLE `dingdan`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `fenlei`
--
ALTER TABLE `fenlei`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `pinglun`
--
ALTER TABLE `pinglun`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `shangpin`
--
ALTER TABLE `shangpin`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `usermember`
--
ALTER TABLE `usermember`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用表AUTO_INCREMENT `dingdan`
--
ALTER TABLE `dingdan`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用表AUTO_INCREMENT `fenlei`
--
ALTER TABLE `fenlei`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- 使用表AUTO_INCREMENT `news`
--
ALTER TABLE `news`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- 使用表AUTO_INCREMENT `pinglun`
--
ALTER TABLE `pinglun`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- 使用表AUTO_INCREMENT `shangpin`
--
ALTER TABLE `shangpin`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- 使用表AUTO_INCREMENT `usermember`
--
ALTER TABLE `usermember`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
