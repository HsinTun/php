-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2021-04-12 09:10:29
-- 伺服器版本： 10.4.18-MariaDB
-- PHP 版本： 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `mytest`
--

--
-- 傾印資料表的資料 `address_book`
--

INSERT INTO `address_book` (`sid`, `name`, `email`, `mobile`, `birthday`, `address`, `created_at`) VALUES
(null, '蔡小婷', 'rklifj444@gmail.com', '0985236987', '2021-04-01', '台北市', '2021-04-07 10:32:18'),
(null, '蔡小婷', 'rklifj444@gmail.com', '0985236987', '2021-04-01', '台北市', '2021-04-07 10:32:18'),
(null, '蔡小婷3', 'rklifj444@gmail.com', '0985236987', '2021-04-01', '台北市', '2021-04-07 10:32:18'),
(null, '蔡小姐4', 'rklifj444@gmail.com', '0985236444', '2021-04-01', '台北市中和', '2021-04-07 10:58:08'),
(null, '蔡小姐4', 'rklifj444@gmail.com', '0985236917', '2021-04-01', '台北市中和', '2021-04-07 10:58:08'),
(null, '蔡小姐4', 'rklifj444@gmail.com', '0985236917', '2021-04-01', '台北市中和', '2021-04-07 10:58:08'),
(null, '蔡小姐4', 'rklifj444@gmail.com', '0985236917', '1582-04-01', '台北市中和', '2021-04-07 10:58:08'),
(null, '蔡小姐4', 'rklifj444@gmail.com', '0985236917', '1999-04-01', '台北市中和', '2021-04-07 10:58:08');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
