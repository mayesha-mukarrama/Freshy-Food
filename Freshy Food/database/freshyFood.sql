-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2018 at 01:24 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freshyfood`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlog`
--

CREATE TABLE `adminlog` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `adminlog`
--

INSERT INTO `adminlog` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

-- Table structure for table `supplier_info`
--

CREATE TABLE `supplier_info` (
  `supplier_id` int(15) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `address1` varchar(250) NOT NULL,
  `address2` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Inserting data for table `supplier_info`
--

INSERT INTO `supplier_info` (`supplier_id`, `first_name`, `last_name`, `password`, `mobile`, `address1`, `address2`) VALUES
(1, 'Rafiqul', 'Islam ', '1234', '01718885698', 'Mirpur-10', 'Dhaka'),
(2, 'Shafiq', 'Rahman', '4567', '01712241178', 'Jigatola', 'dhaka');


--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(100) NOT NULL,
  `brand_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'Kazi Store'),
(2, 'Rajshahi Shop'),
(3, 'Rahman Store'),
(4, 'Fruit Store'),
(5, 'Freshfood Store');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(250) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `p_id`, `ip_add`, `user_id`, `qty`) VALUES
(19, 2, '::1', 1, 1),
(20, 1, '127.0.0.1', -1, 1),
(21, 2, '127.0.0.1', -1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `creationDate`, `updationDate`) VALUES
(1, 'Fruit', '2018-08-13 15:38:07', '2018-08-08 10:38:00'),
(2, 'Vegetable', '2018-08-20 06:38:07', '2018-08-18 03:47:00'),
(3, 'Gift Basket', '2018-06-27 04:38:07', '2018-07-10 09:43:37'),
(4, 'Dairy', '2018-07-29 13:38:07', '2018-08-04 05:43:26'),
(5, 'Baverage', '2018-08-25 08:48:45', '2018-09-02 02:41:48'),
(6, 'Offers', '2018-08-31 06:41:10', '2018-09-20 12:43:37'),
(7, 'Packages', '2018-09-27 15:38:07', '2018-08-28 15:45:35');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `trx_id` varchar(255) NOT NULL,
  `p_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `product_id`, `qty`, `trx_id`, `p_status`) VALUES
(22, 3, 1, 1, '3', 'Completed'),
(23, 3, 4, 1, '3', 'Completed'),
(24, 3, 15, 1, '3', 'Completed'),
(25, 3, 56, 1, '3', 'Completed'),
(26, 3, 51, 1, '3', 'Completed'),
(27, 3, 69, 1, '3', 'Completed'),
(28, 3, 8, 1, '3', 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES
(1, 1, 4, 'Mango 1kg', 60, 'Mango ', 'mango.jpg', 'mango'),
(2, 1, 5, 'lychee 100pcs', 500, 'Lychee', 'lychee.jpeg', 'lychee'),
(3, 1, 3, 'Apple 1kg', 120, 'Apple', 'apple.jpg', 'apple'),
(4, 1, 2, 'Banana 12pcs', 65, 'Banana ', 'banana.jpg', 'banana'),
(5, 2, 1, 'Carrot 1kg', 35, 'Carrot', 'carrot.jpg', 'carrot'),
(6, 2, 3, 'Lemon 4pcs', 20, 'Lemon', 'lemon.jpg', 'lemon '),
(7, 2, 4, 'Aloe vera 4pcs', 30, 'Aloe vera', 'aloe.png', 'aloe vera'),
(8, 2, 1, 'Onion 1kg', 40, 'Onion', 'onion.jpg', 'onion'),
(9, 3, 2, 'Mango Basket', 1200, 'Mango Basket', 'mango basket.jpg', 'mango basket'),
(10, 3, 5, 'Fruits basket', 1000, 'Fruits basket', 'fruits basket.jpg', 'basket '),
(11, 3, 4, 'Regular Fruits basket', 1600, 'Regular Fruits basket', 'regular.png', 'basket'),
(12, 4, 1, 'Organic ghee 350gm', 450, 'Organic ghee', 'ghee.jpg', 'organic ghee'),
(13, 4, 2, 'Fresh Milk 1L', 70, 'Fresh Milk', 'milk.jpg', 'fresh milk'),
(14, 4, 3, 'Organic Honey 250gm', 500, 'Organic Honey', 'honey.jpg', 'organic honey'),
(15, 4, 1, 'Yogurt 500gm', 70, 'Yogurt', 'yogurt.jpg', 'Yogurt'),
(16, 5, 4, 'Orange Juice 1L', 600, 'Orange Juice', 'orange juice.jpg', 'orange juice'),
(17, 5, 2, 'Mango juice 1L', 1000, 'Mango juice', 'mango juice.jpg', 'mango juice'),
(19, 5, 5, 'Green Coconut 1pcs', 60, 'Green Coconut', 'coconut water.jpg', 'coconut water'),
(20, 6, 2, 'Special offer', 1600, 'Special offer', 'offer.jpg', 'offer'),
(21, 6, 5, 'Buy 5kg mango get 1kg free', 300, 'Buy 5kg mango get 1kg free', 'mango.jpg', 'mango'),
(22, 6, 4, 'Buy 6kg apple get 1kg free ', 720, 'Buy 6kg apple get 1kg free', 'apple.jpg', 'apple'),
(23, 7, 5, 'Fruit packages', 1750, 'Fruit packages', 'fruit.jpg', 'fruit'),
(24, 7, 1, 'Kids packages', 1850, 'Kids packages', 'kids.jpg', 'fruit'),
(25, 7, 2, 'wedding packages', 1550, 'wedding packages', 'wedding.jpg', 'fruit'),
(26, 7, 3, 'Birthday packages', 650, 'Birthday packages', 'birthday packages.jpg', 'fruit'),
(27, 1, 3, 'Orange 1kg', 120, 'Orange', 'orange.jpg', 'orange'),
(28, 1, 2, 'Guava 1kg', 60, 'Guava', 'guava.jpg', 'guava'),
(29, 2, 2, 'Tomato 1kg', 50, 'Tomato', 'tomato.jpg', 'tomato'),
(30, 2, 2, 'Potato 1kg', 50, 'Potato', 'potato.jpg', 'potato'),
(31, 2, 2, 'Capsicum 1kg', 80, 'Capsicum', 'capsicum.jpg', 'capsicum'),
(32, 3, 1, 'Vegetable Basket', 1120, 'vegetable Basket', 'vegetable basket.jpg', 'vegetable'),
(33, 3, 4, 'Fruit & Vegetable', 1520, 'Fruit & Vegetable', 'fruit & vegetable.jpg', 'vegetable'),
(34, 3, 3, 'Birthday Basket', 750, 'Birthday Basket', 'birthday basket.jpg', 'basket'),
(35, 3, 5, 'Kids Basket', 820, 'Kids Basket', 'kids basket.jpg', 'basket'),
(36, 4, 1, 'Egg 12pcs', 115, 'Egg', 'egg.jpg', 'egg'),
(37, 4, 1, 'Butter 250gm', 220, 'Butter', 'butter.jpg', 'butter'),
(38, 4, 2, 'Cheese 250gm', 228, 'Cheese', 'cheese.jpg', 'cheese'),
(39, 5, 4, 'Grape Juice 1L', 420, 'Grape Juice', 'grape juice.jpg', 'grape juice'),
(40, 5, 5, 'Strawberry Juice 1L', 690, 'strawberry juice', 'strawberry juice.jpg', 'juice'),
(41, 5, 3, 'Aloe vera drink 1L', 450, 'Aloe vera drink', 'aloe drink.jpg', 'aloe vera'),
(42, 6, 2, 'Seasonal offer', 490, 'seasonal offer', 'seasonal.jpg', 'offer'),
(44, 6, 5, 'Buy 2L Grape Juice get 250 ml free', 690, 'Buy 2L Grape Juice get 250 ml free', 'grape juice.jpg', 'juice'),
(45, 7, 3, 'Friend package', 520, 'Friend package', 'friend package.jpg', 'package'),
(46, 7, 4, 'Strawberry package', 100, 'stawberry package', 'strawberry.jpg', 'package'),
(47, 7, 2, 'Salad packages', 290, 'Salad packages', 'salad.jpg', 'packages'),
(48, 3, 5, 'Heart Shaped Basket', 820, 'Heart Shaped Basket', 'heart.jpg', 'basket'),
(49, 4, 1, 'Quail Egg 12pcs', 100, 'Quail Egg', 'quail.jpg', 'egg'),
(50, 3, 2, 'Special Basket', 550, 'Special Basket', 'special.jpg', 'basket'),
(51, 3, 5, 'Fruit Bouquets', 820, 'Fruit Bouquets', 'flower.jpg', 'basket');

-- --------------------------------------------------------

--
-- Table structure for table `sellerlog`
--

CREATE TABLE `sellerlog` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`) VALUES
(3, 'Harry', 'Potter ', 'harry@harry.com', '09814fbde59286ba051615745bac613a', '0123456789', 'Mirpur-1', 'Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `user_review`
--

CREATE TABLE `user_review` (
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `image` text NOT NULL,
  `review` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_review`
--

INSERT INTO `user_review` (`first_name`, `last_name`, `image`, `review`) VALUES
('Lisa', 'Rahman', 'j1.jpg', 'Loved the service! I urgently needed some stuffs and ordered it here and they delivered it.'),
('Nazia', 'Haque', 'j2.jpg', 'Fantastic service, usually on time and prompt in responding if anything needs to be changed.'),
('Ayesha', 'Siddique', 'j3.jpg', 'Satisfied by their professionalism ! Got my products in time. Did not have to pay any delivery charge.'),
('Halima', 'Ahmed', 'j4.jpg', ' I am loving this experience and Have been shopping from here and i have recommended my relatives too.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `user_info`

 AUTO_INCREMENT for table `supplier_info`
--
ALTER TABLE `supplier_info`
  MODIFY `supplier_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
