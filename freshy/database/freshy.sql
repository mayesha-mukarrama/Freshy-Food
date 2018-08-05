
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freshy - Online Fresh Food Ordering System`
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
-- Inserting data for table `adminlog`
--

INSERT INTO `adminlog` (`username`, `password`) VALUES
('admin', 'admin');

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
-- Inserting data for table `cart`
--

INSERT INTO `cart` (`id`, `p_id`, `ip_add`, `user_id`, `qty`) VALUES
(18, 1, '::1', 1, 1),
(19, 2, '::1', 1, 1),
(20, 1, '127.0.0.1', 1, 1);


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
-- Inserting data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `creationDate`, `updationDate`) VALUES
(1, 'Fruit', '2018-07-24 15:38:07', '0000-00-00 00:00:00'),
(2, 'Vegetable', '2018-07-24 15:38:07', '0000-00-00 00:00:00'),
(3, 'Gift Basket', '2018-07-24 15:38:07', '0000-00-00 00:00:00'),
(4, 'Dairy', '2018-07-24 15:38:07', '0000-00-00 00:00:00'),
(5, 'Baverage', '2018-07-24 15:38:07', '0000-00-00 00:00:00'),
(6, 'Offers', '2018-07-24 15:38:07', '0000-00-00 00:00:00'),
(7, 'Packages', '2018-07-24 15:38:07', '0000-00-00 00:00:00');

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
-- Inserting data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `product_id`, `qty`, `trx_id`, `p_status`) VALUES
(2, 3, 1, 1, '3', 'Completed'),
(3, 3, 4, 1, '3', 'Completed'),
(4, 3, 15, 1, '3', 'Completed'),
(5, 3, 32, 1, '3', 'Completed'),
(6, 3, 8, 1, '3', 'Completed');


-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Inserting data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES
(1, 1, 'Mango 1kg', 60, 'Mango ', 'mango.jpg', 'mango'),
(2, 1, 'lychee 100pcs', 500, 'Lychee', 'lychee.jpeg', 'lychee'),
(3, 1, 'Apple 1kg', 120, 'Apple', 'apple.jpg', 'apple'),
(4, 1, 'Banana 12pcs', 65, 'Banana ', 'banana.jpg', 'banana'),
(5, 2, 'Carrot 1kg', 35, 'Carrot', 'carrot.jpg', 'carrot'),
(6, 2, 'Lemon 4pcs', 20, 'Lemon', 'lemon.jpg', 'lemon '),
(7, 2, 'Aloe vera 4pcs', 30, 'Aloe vera', 'aloe.png', 'aloe vera'),
(8, 2, 'Onion 1kg', 40, 'Onion', 'onion.jpg', 'onion'),
(9, 3, 'Mango Basket', 1200, 'Mango Basket', 'mango basket.jpg', 'mango basket'),
(10, 3, 'Fruits basket', 1000, 'Fruits basket', 'fruits basket.jpg', 'basket '),
(11, 3, 'Regular Fruits basket', 1600, 'Regular Fruits basket', 'regular.png', 'basket'),
(12, 4, 'Organic ghee 350gm', 450, 'Organic ghee', 'ghee.jpg', 'organic ghee'),
(13, 4, 'Fresh Milk 1L', 70, 'Fresh Milk', 'milk.jpg', 'fresh milk'),
(14, 4, 'Organic Honey 250gm', 500, 'Organic Honey', 'honey.jpg', 'organic honey'),
(15, 4, 'Yogurt 500gm', 70, 'Yogurt', 'yogurt.jpg', 'Yogurt'),
(16, 5, 'Orange Juice 1L', 600, 'Orange Juice', 'orange juice.jpg', 'orange juice'),
(17, 5, 'Mango juice 1L', 1000, 'Mango juice', 'mango juice.jpg', 'mango juice'),
(19, 5, 'Green Coconut 1pcs', 60, 'Green Coconut', 'coconut water.jpg', 'coconut water'),
(20, 6, 'Special offer', 1600, 'Special offer', 'offer.jpg', 'offer'),
(21, 6, 'Buy 5kg mango get 1kg free', 300, 'Buy 5kg mango get 1kg free', 'mango.jpg', 'mango'),
(22, 6, 'Buy 6kg apple get 1kg free ', 720, 'Buy 6kg apple get 1kg free', 'apple.jpg', 'apple'),
(23, 7, 'Fruit packages', 1750, 'Fruit packages', 'fruit.jpg', 'fruit'),
(24, 7, 'Kids packages', 1850, 'Kids packages', 'kids.jpg', 'fruit'),
(25, 7, 'wedding packages', 1550, 'wedding packages', 'wedding.jpg', 'fruit'),
(26, 7, 'Birthday packages', 650, 'Birthday packages', 'birthday packages.jpg', 'fruit'),
(27, 1, 'Orange 1kg', 120, 'Orange', 'orange.jpg', 'orange'),
(28, 1, 'Guava 1kg', 60, 'Guava', 'guava.jpg', 'guava'),
(29, 2, 'Tomato 1kg', 50, 'Tomato', 'tomato.jpg', 'tomato'),
(30, 2, 'Potato 1kg', 50, 'Potato', 'potato.jpg', 'potato'),
(31, 2, 'Capsicum 1kg', 80, 'Capsicum', 'capsicum.jpg', 'capsicum'),
(32, 3, 'Vegetable Basket', 1120, 'vegetable Basket', 'vegetable basket.jpg', 'vegetable'),
(33, 3, 'Fruit & Vegetable', 1520, 'Fruit & Vegetable', 'fruit & vegetable.jpg', 'vegetable'),
(34, 3, 'Birthday Basket', 750, 'Birthday Basket', 'birthday basket.jpg', 'basket'),
(35, 3, 'Kids Basket', 820, 'Kids Basket', 'kids basket.jpg', 'basket'),
(36, 4, 'Egg 12pcs', 115, 'Egg', 'egg.jpg', 'egg'),
(37, 4, 'Butter 250gm', 220, 'Butter', 'butter.jpg', 'butter'),
(38, 4, 'Cheese 250gm', 228, 'Cheese', 'cheese.jpg', 'cheese'),
(39, 5, 'Grape Juice 1L', 420, 'Grape Juice', 'grape juice.jpg', 'grape juice'),
(40, 5, 'Strawberry Juice 1L', 690, 'strawberry juice', 'strawberry juice.jpg', 'juice'),
(41, 5, 'Aloe vera drink 1L', 450, 'Aloe vera drink', 'aloe drink.jpg', 'aloe vera'),
(42, 6, 'Seasonal offer', 490, 'seasonal offer', 'seasonal.jpg', 'offer'),
(44, 6, 'Buy 2L Grape Juice get 250 ml free', 690, 'Buy 2L Grape Juice get 250 ml free', 'grape juice.jpg', 'juice'),
(45, 7, 'Friend package', 520, 'Friend package', 'friend package.jpg', 'package'),
(46, 7, 'Strawberry package', 100, 'stawberry package', 'strawberry.jpg', 'package'),
(47, 7, 'Salad packages', 290, 'Salad packages', 'salad.jpg', 'packages'),
(48, 3, 'Heart Shaped Basket', 820, 'Heart Shaped Basket', 'heart.jpg', 'basket'),
(49, 4, 'Quail Egg 12pcs', 100, 'Quail Egg', 'quail.jpg', 'egg'),
(50, 3, 'Special Basket', 550, 'Special Basket', 'special.jpg', 'basket'),
(51, 3, 'Fruit Bouquets', 820, 'Fruit Bouquets', 'flower.jpg', 'basket');




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
-- Inserting data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`) VALUES
(3, 'Harry', 'Potter ', 'harry@harry.com', '098765', '0123456789', 'Mirpur-1', 'Dhaka'),
(2, 'm', 'mm', 'mayesha@gmail.com', '123456', '1234567890', 'dhaka', 'dhaka');

--
-- Primary Key Indexes for tables
--

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
-- AUTO_INCREMENT for tables
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
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
