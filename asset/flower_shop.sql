-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2023 at 05:10 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flower shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `c_name`) VALUES
(1, 'birthdays'),
(2, 'congradulations'),
(3, 'love and romance');

-- --------------------------------------------------------

--
-- Table structure for table `flower category`
--

CREATE TABLE `flower category` (
  `flower_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flower category`
--

INSERT INTO `flower category` (`flower_id`, `c_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 3),
(10, 3),
(11, 3),
(12, 3),
(13, 3),
(14, 3),
(15, 3),
(16, 3),
(17, 2),
(18, 2),
(19, 2),
(20, 2),
(21, 2);

-- --------------------------------------------------------

--
-- Table structure for table `flowers`
--

CREATE TABLE `flowers` (
  `flower_id` int(11) NOT NULL,
  `flower_name` varchar(100) NOT NULL,
  `price` double NOT NULL,
  `freshness garanteed` varchar(20) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `image_path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flowers`
--

INSERT INTO `flowers` (`flower_id`, `flower_name`, `price`, `freshness garanteed`, `description`, `image_path`) VALUES
(1, 'MAJESTIC FLORAL', 2890, '07 to 10days', 'Embrace the purity of love with our exquisite gift of White Asiatic Lilies and vibrant Yellow Chrysanthemums. Symbolizing devotion and joy, this stunning combination is a heartfelt expression of affection, perfect for gifting your loved ones on any occasion.', 'asset\\products\\majestic floral.jpeg'),
(2, 'PINK MEMORY', 12590, '07 to 10 days', 'Indulge in the beauty of this abundant flower bunch, a harmonious blend of captivating shades. Each bloom tells a tale of elegance, whispering celebration. A gift that paints occasions with joy, its vibrant hues creating a lasting memory. Embrace the moment with nature\'s masterpiece.', 'asset\\products\\pink memory.jpeg'),
(3, 'IN YOUR HEART', 2960, '07 to 10 days', 'Gift someone special with an adorable and lovely bunch of fragrant pink lilies and white chrysanthemums. The sweet fragrance of the pink lilies combined with the purity of the white chrysanthemums creates a captivating bouquet. This thoughtful gift expresses affection and admiration, bringing joy and beauty to their day.', 'asset\\products\\in your heart.jpeg'),
(4, 'ENCHANTED BLOOMS', 7500, '03 to 05 days', 'A beautiful bouquet of flowers, showcasing a stunning array of deep, dark blooms. Their velvety, rich colors create an enchanting contrast with the world. Each petal is a masterpiece of nature, radiating an alluring elegance. This lovely flower bunch is a wonderful gift, a reminder of the beauty that graces our world.', 'asset\\products\\enchanted blooms.jpeg'),
(5, 'BEAUTY OF HEARTS', 7470, '05 to 07 days', 'Celebrate the happiness of birth and convey warm birthday greetings with this heavenly bouquet. Featuring fragrant rose lilies and gorgeous chrysanthemums, it exudes beauty and joy. The delicate aroma of the rose lilies complements the vibrant chrysanthemums, making it a truly special gift to mark the occasion and make their birthday unforgettable.', 'asset\\products\\beauty of hearts.jpeg'),
(6, 'SENSUOUS BLUE ROMANCE', 5890, '07 to 10 days', 'Wrapped in a rustic embrace of purple paper, this magnificent bouquet is a symphony of nature\'s splendor. The flowers are carefully selected to represent the unique qualities that make her so special. With each petal oozing an aura of mystique and allure, this floral masterpiece is a testament to the untamed beauty of the natural world. Own this exquisite creation today and let its captivating aura take your breath away.  ', 'asset\\products\\sensous blue romance.jpeg'),
(7, 'WHITE & BRIGHT BUNCH', 7890, '07 to 10days', 'Make someone\'s birthday extra special with this lovely and stunning bunch of chrysanthemums. Bursting with vibrant colors and charming blooms, this bouquet radiates joy and happiness. It\'s a wonderful greeting that conveys warm birthday wishes and adds a touch of beauty to their celebration, making it truly memorable.', 'asset\\products\\white and bright bunch.jpeg'),
(8, 'FRENCH QUARTER', 22890, '03 to 05 days', 'This lovely flower bunch boasts an array of delicate blooms, creating a beautiful and harmonious blend of colors and textures. Featuring white and pink roses, chrysanthemums, snapdragons, carnations, golden rods, hydrangea, gerbera, and lush foliage, this bouquet is a true celebration of nature\'s beauty.', 'asset\\products\\french quaters.jpeg'),
(9, 'AFFAIRS OF HEARTS', 7590, '01 to 02 days', 'Express the heartiest love on your anniversary with this enchanting bouquet. A bunch of red roses signifies deep passion and love, while the white roses symbolize purity and devotion. Together, they create a harmonious and romantic arrangement, making it the perfect gift to celebrate your love and cherish precious memories.', 'asset\\products\\affairs of hearts.jpg'),
(10, 'BE HAPPY YOU\'RE MINE', 9790, '01 to 02 days', 'Enhance your love for your better half with an adorable and stunning bunch of red roses. Each velvety bloom represents deep passion and romance. This captivating arrangement serves as a beautiful gesture, expressing the intensity of your love and creating a lasting impression of affection and adoration.', 'asset\\products\\be happy you are mine.jpg'),
(11, 'GLORY OF LOVE', 8990, '07 to 10days', 'Celebrate in full bloom with this lavish bunch of charming pink and purple chrysanthemums. Their soft hues intertwine like stories of happiness, creating a captivating masterpiece. A generous gift that paints occasions with elegance, whispering tales of joy and making memories unforgettable.', 'asset\\products\\glory of love.jpg'),
(12, 'AURA OF AFFECTION', 7290, '01 to 02 days', 'This beautiful flower bunch is a vibrant symphony of colorful blooms, like a kaleidoscope of nature\'s best. Each petal adds its unique touch, creating a dazzling bouquet that radiates joy and charm. A heartfelt gift that infuses spaces with life and beauty, perfect for brightening any moment or occasion.', 'asset\\products\\aura of affection.jpg'),
(13, 'SINCERE EMBRACE', 12490, '03 to 05 days', 'A charming bunch of flowers, displaying a delightful assortment of lovely blooms. Their vibrant colors and graceful shapes capture the essence of nature\'s beauty. These blossoms are a sweet reminder of the world\'s simple joys, each petal a testament to life\'s delicate wonders. This bouquet is a heartwarming gift, a symbol of affection, and a source of happiness.', 'asset\\products\\sincere embrace.jpg'),
(14, 'SYMBOL OF LOVE', 5890, '01 to 02 days', 'Celebrate the love for your soulmate in a stunning and lovely way with a bunch of white and red roses. These timeless blooms symbolize pure love, passion, and devotion. Their captivating beauty and elegant combination create a romantic gesture, expressing the depth of your love and honoring your precious connection.', 'asset\\products\\symbol of love.jpg'),
(15, 'ROSE’S TOUCH', 7590, '03 to 05 days', 'Celebrate your anniversary with this stunning flower bunch filled with lovely red roses. Each radiant bloom represents passion and deep love, symbolizing the journey you\'ve shared together. This bouquet is a wonderful gift to commemorate your special day, expressing your enduring affection and creating a romantic atmosphere that sparks cherished memories.', 'asset\\products\\roses touch.jpg'),
(16, 'PASSIONATE PEACHES', 7500, '07 to 10 days', 'Celebrate your anniversary with a lovely and precious pink rose bunch. Each delicate bloom represents love, gratitude, and admiration. This enchanting arrangement serves as a beautiful gift, expressing your affection and appreciation, and creating a romantic ambiance that adds a touch of beauty and charm to your special milestone.', 'asset\\products\\passionate peaches.jpg'),
(17, 'TO MY SUNSHINE', 2890, '03 to 05 days', 'This lovely bouquet features bright yellow lilies, like rays of sunshine. Their cheerful petals exude warmth and happiness, creating an inviting and uplifting atmosphere. It\'s a heartwarming gift that radiates joy and simple, natural beauty, perfect for brightening someone\'s day with its vibrant and delightful charm.', 'asset\\products\\to my sunshine.jpg'),
(18, 'RAYS OF YELLOW', 4990, '07 to 10 days', 'This captivating flower bunch is a radiant burst of vibrant yellow blooms, like a sunlit meadow in full bloom. Each petal exudes warmth and cheer, creating an enchanting bouquet that brightens any space. A heartfelt gift that radiates joy and natural beauty, perfect for adding a sunny touch to any occasion.', 'asset\\products\\rays of yellow.jpg'),
(19, 'CHEERFUL CELEBRATION', 11990, '01 to 02 days', 'Cherish your loved one with this beautiful bunch of fragrant White Roses, and pretty purple shades of Chrysanthemums surrounded in Baby\'s Breath, grown and picked fresh from our own farms, guaranteed to last for up to 5 days!\r\n', 'asset\\products\\cheerful celebration.jpg'),
(20, 'HAPPIER THAN EVER', 22890, '03 to 05 days', 'This stunning flower bunch is a vibrant tapestry of colorful blooms, like a joyful celebration of nature\'s palette. Each petal is a brushstroke of charm, coming together to create a living masterpiece that radiates happiness and warmth. A heartfelt gift that adds color and beauty to any moment or setting.', 'asset\\products\\happier than ever.jpg'),
(21, 'HAPPY DAYS', 7590, '07 to 10days', 'Bring the blessings with this calm arrangement by expressing your wishes of a speedy recovery. The combination of fresh blooms and vibrant colors exudes a sense of hope and optimism, providing comfort and encouragement during a difficult time. This gift is a reminder that you are thinking of the recipient and sending positive energy and prayers their way, with the hope that they will soon be on the path to recovery.', 'asset\\products\\happy days.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `user_id` int(11) NOT NULL,
  `flower_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `flower category`
--
ALTER TABLE `flower category`
  ADD KEY `to flowers table` (`flower_id`),
  ADD KEY `to category table` (`c_id`);

--
-- Indexes for table `flowers`
--
ALTER TABLE `flowers`
  ADD PRIMARY KEY (`flower_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD KEY `to user table` (`user_id`),
  ADD KEY `flower_id` (`flower_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `flowers`
--
ALTER TABLE `flowers`
  MODIFY `flower_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `flower category`
--
ALTER TABLE `flower category`
  ADD CONSTRAINT `to category table` FOREIGN KEY (`c_id`) REFERENCES `category` (`c_id`),
  ADD CONSTRAINT `to flowers table` FOREIGN KEY (`flower_id`) REFERENCES `flowers` (`flower_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`flower_id`) REFERENCES `flowers` (`flower_id`),
  ADD CONSTRAINT `to user table` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
