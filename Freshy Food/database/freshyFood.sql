
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freshyFood`
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

-- --------------------------------------------------------

--
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
(22, 3, 1, 1, '3', 'Completed'),
(23, 3, 4, 1, '3', 'Completed'),
(24, 3, 15, 1, '3', 'Completed'),
(25, 3, 36, 1, '3', 'Completed'),
(28, 3, 8, 1, '3', 'Completed');


-- --------------------------------------------------------
--
-- Table structure for table `user_review`
--

CREATE TABLE `user_review` (
 
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `image` text NOT NULL,
  `review` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Inserting data for table `user_info`
--
INSERT INTO `user_review` (`first_name`, `last_name`, `image`, `review` ) VALUES
('Lisa', 'Rahman' ,'j1.jpg', 'Loved the service! I urgently needed some stuffs and ordered it here and they delivered in less than an hour as promised! Thanks a lot for that.'),
('Nazia', 'Haque','j2.jpg', 'Fantastic service, usually on time and prompt in responding if anything needs to be changed.'),
('Ayesha', 'Siddique','j3.jpg', 'Satisfied by their professionalism ! Got my products in time. Didnot have to pay any delivery charge. I canot believe that. Keep it up !'),
('Halima', 'Ahmed', 'j4.jpg',' I am loving this experience and Have been shopping from here and i have recommended my relatives too. They are also happy with the service. The prices are comparatively low and the products are genuine.');


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
(1, 1, 'Mango', 60, '1kg ', 'mango.jpg', 'mango'),
(2, 1, 'lychee', 500, ' 100pcs', 'lychee.jpeg', 'lychee'),
(3, 1, 'Apple', 120, ' 1kg', 'apple.jpg', 'apple'),
(4, 1, 'Banana ', 65, '12pcs ', 'banana.jpg', 'banana'),
(5, 2, 'Carrot ', 35, '1kg', 'carrot.jpg', 'carrot'),
(6, 2, 'Lemon ', 20, '4pcs', 'lemon.jpg', 'lemon '),
(7, 2, 'Aloe vera ', 30, '4pcs', 'aloe.png', 'aloe vera'),
(8, 2, 'Onion ', 40, '1kg', 'onion.jpg', 'onion'),
(9, 3, 'Mango Basket', 1200, '5kg Himsagar Mango', 'mango basket.jpg', 'mango basket'),
(10, 3, 'Fruits basket', 1000, '5 apple, 12 banana, .5kg grape', 'fruits basket.jpg', 'basket '),
(11, 3, 'Regular Fruits basket', 1600, '2 apple, 2 pineapple, .5kg grape', 'regular.png', 'basket'),
(12, 4, 'Organic ghee', 450, ' 350gm', 'ghee.jpg', 'organic ghee'),
(13, 4, 'Fresh Milk', 70, ' 1L', 'milk.jpg', 'fresh milk'),
(14, 4, 'Organic Honey', 500, ' 250gm', 'honey.jpg', 'organic honey'),
(15, 4, 'Yogurt ', 70, '500gm', 'yogurt.jpg', 'Yogurt'),
(16, 5, 'Orange Juice', 600, ' 1L', 'orange juice.jpg', 'orange juice'),
(17, 5, 'Mango juice', 1000, ' 1L', 'mango juice.jpg', 'mango juice'),
(19, 5, 'Green Coconut ', 60, '1pcs', 'coconut water.jpg', 'coconut water'),
(20, 6, 'Special offer', 1200, '25% off in 25 kg mangoes', 'offer.jpg', 'offer'),
(21, 6, 'Rajshahi Mango', 300, 'Buy 5kg mango get 1kg free', 'mango.jpg', 'mango'),
(22, 6, 'Apple', 720, 'Buy 6kg apple get 1kg free', 'apple.jpg', 'apple'),
(23, 7, 'Fruit packages', 1750, '8 Bananas, 4 apples, .5kg grape', 'fruit.jpg', 'fruit'),
(24, 7, 'Kids packages', 1850, 'black berry, green berry, grapes', 'kids.jpg', 'fruit'),
(25, 7, 'wedding packages', 1550, '5kg  Himsagar Mango', 'wedding.jpg', 'fruit'),
(26, 7, 'Birthday packages', 650, 'Fruit Bouquet', 'birthday packages.jpg', 'fruit'),
(27, 1, 'Orange ', 120, '1kg', 'orange.jpg', 'orange'),
(28, 1, 'Guava ', 60, '1kg', 'guava.jpg', 'guava'),
(29, 2, 'Tomato ', 50, '1kg', 'tomato.jpg', 'tomato'),
(30, 2, 'Potato ', 50, '1kg', 'potato.jpg', 'potato'),
(31, 2, 'Capsicum ', 80, '1kg', 'capsicum.jpg', 'capsicum'),
(32, 3, 'Vegetable Basket', 1120, 'Tomato, cucumber, carrot', 'vegetable basket.jpg', 'vegetable'),
(33, 3, 'Fruit & Vegetable', 1520, 'Capsicum, Grape, Banana', 'fruit & vegetable.jpg', 'vegetable'),
(34, 3, 'Birthday Basket', 750, 'Orange, Mango, Apple', 'birthday basket.jpg', 'basket'),
(35, 3, 'Kids Basket', 820, 'Apple, Banana, Orange', 'kids basket.jpg', 'basket'),
(36, 4, 'Egg ', 115, '12pcs', 'egg.jpg', 'egg'),
(37, 4, 'Butter ', 220, '250gm', 'butter.jpg', 'butter'),
(38, 4, 'Cheese ', 228, '250gm', 'cheese.jpg', 'cheese'),
(39, 5, 'Grape Juice ', 420, '1L', 'grape juice.jpg', 'grape juice'),
(40, 5, 'Strawberry Juice ', 690, '1L', 'strawberry juice.jpg', 'juice'),
(41, 5, 'Aloe vera drink ', 450, '1L', 'aloe drink.jpg', 'aloe vera'),
(42, 6, 'Seasonal offer', 490, '10% off', 'apple.jpg', 'offer'),
(44, 6, 'Buy 2L Juice get 250 ml free', 690, 'Buy 2L Juice get 250 ml free', 'grape juice.jpg', 'juice'),
(45, 7, 'Friend package', 520, 'Lychee, apple, orange, mango', 'friend package.jpg', 'package'),
(46, 7, 'Strawberry package', 100, '1kg boxed strawberry', 'strawberry.jpg', 'package'),
(47, 7, 'Salad packages', 290, 'Strawberry, berry, mango', 'salad.jpg', 'packages'),
(48, 3, 'Heart Shaped Basket', 820, '2kg Strawberry', 'heart.jpg', 'basket'),
(49, 4, 'Quail Egg ', 100, '12pcs', 'quail.jpg', 'egg'),
(50, 3, 'Special Basket', 550, 'Grapes, Apples, Oranges', 'special.jpg', 'basket'),
(51, 3, 'Fruit Bouquets', 820, 'Flower shaped fruit', 'flower.jpg', 'basket');




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
-- Indexes for table `supplier_info`
--
ALTER TABLE `supplier_info`
  ADD PRIMARY KEY (`supplier_id`);

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
-- AUTO_INCREMENT for table `supplier_info`
--
ALTER TABLE `supplier_info`
  MODIFY `supplier_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
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
