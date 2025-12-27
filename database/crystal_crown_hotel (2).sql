-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2025 at 08:06 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crystal_crown_hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`) VALUES
(1, 'Isha', '12345'),
(2, 'Devi', '12345'),
(3, 'Nidhi', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `beverages_orders`
--

CREATE TABLE `beverages_orders` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(100) DEFAULT NULL,
  `room_number` varchar(20) DEFAULT NULL,
  `item` varchar(100) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `total` decimal(10,2) DEFAULT NULL,
  `order_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `beverages_orders`
--

INSERT INTO `beverages_orders` (`id`, `customer_name`, `room_number`, `item`, `quantity`, `price`, `total`, `order_time`) VALUES
(1, 'neha', '104', 'Lassi', 1, 80.00, 80.00, '2025-08-02 10:02:36'),
(2, 'neha', '104', 'Lassi', 1, 80.00, 80.00, '2025-08-02 10:04:16'),
(3, 'Rahul Sharma', '101', 'Tea', 2, 20.00, 40.00, '2025-08-06 14:06:20'),
(4, 'Priya Mehta', '102', 'Coffee', 1, 35.00, 35.00, '2025-08-06 14:06:20'),
(5, 'Amit Patel', '103', 'Cold Coffee', 3, 45.00, 135.00, '2025-08-06 14:06:20'),
(6, 'Neha Verma', '104', 'Fresh Juice', 2, 50.00, 100.00, '2025-08-06 14:06:20'),
(7, 'Rajesh Singh', '105', 'Soft Drink', 4, 30.00, 120.00, '2025-08-06 14:06:20'),
(8, 'Anita Desai', '106', 'Milkshake', 1, 55.00, 55.00, '2025-08-06 14:06:20'),
(9, 'Vikas Gupta', '107', 'Lassi', 2, 35.00, 70.00, '2025-08-06 14:06:20'),
(10, 'Sneha Joshi', '108', 'Mocktail', 3, 70.00, 210.00, '2025-08-06 14:06:20'),
(11, 'Manish Kumar', '109', 'Tea', 1, 20.00, 20.00, '2025-08-06 14:06:20'),
(12, 'Pooja Shah', '110', 'Coffee', 2, 35.00, 70.00, '2025-08-06 14:06:20'),
(13, 'Aarav sharma', '111', 'Milkshake', 4, 120.00, 480.00, '2025-09-10 17:29:32');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `room_type` varchar(30) NOT NULL,
  `Room_category` varchar(50) DEFAULT NULL,
  `adult_count` int(3) NOT NULL,
  `children_count` int(3) NOT NULL,
  `total` int(100) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `request` varchar(100) NOT NULL,
  `payment` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `fullname`, `Address`, `email`, `phone`, `room_type`, `Room_category`, `adult_count`, `children_count`, `total`, `check_in`, `check_out`, `request`, `payment`) VALUES
(1, 'Aarav Sharma', '123 MG Road, Mumbai', 'aarav.sharma@example.com', '9876543210', 'Deluxe', 'AC Room', 2, 1, 7500, '2025-08-10', '2025-08-15', 'Near elevator', 'Paid'),
(2, 'Isha Verma', '45 Park Street, Kolkata', 'isha.verma@example.com', '9876543211', 'Standard', 'Non AC Room', 1, 0, 3000, '2025-08-12', '2025-08-14', 'Extra pillows', 'Pending'),
(3, 'Rohan Mehta', '89 Brigade Road, Bangalore', 'rohan.mehta@example.com', '9876543212', 'Suite', 'AC Room', 3, 2, 12000, '2025-08-20', '2025-08-25', 'High floor room', 'Paid'),
(4, 'Ananya Singh', '22 MG Road, Pune', 'ananya.singh@example.com', '9876543213', 'Standard', 'Non AC Room', 2, 0, 4000, '2025-09-01', '2025-09-05', '', 'Paid'),
(5, 'Vivaan Gupta', '78 Nehru St, Delhi', 'vivaan.gupta@example.com', '9876543214', 'Deluxe', 'AC Room', 2, 2, 6500, '2025-09-10', '2025-09-15', 'Late check-in', 'Pending'),
(6, 'Kavya Nair', '12 MG Road, Chennai', 'kavya.nair@example.com', '9876543215', 'Suite', 'AC Room', 4, 1, 15000, '2025-09-20', '2025-09-27', '', 'Paid'),
(7, 'Aditya Reddy', '56 Park Lane, Hyderabad', 'aditya.reddy@example.com', '9876543216', 'Standard', 'Non AC Room', 1, 0, 2800, '2025-10-05', '2025-10-08', 'No smoking room', 'Paid'),
(8, 'Priya Menon', '34 MG Road, Kochi', 'priya.menon@example.com', '9876543217', 'Deluxe', 'AC Room', 2, 1, 7000, '2025-10-15', '2025-10-20', '', 'Pending'),
(9, 'Yash Patel', '90 Marine Drive, Mumbai', 'yash.patel@example.com', '9876543218', 'Suite', 'AC Room', 3, 0, 13000, '2025-11-01', '2025-11-07', 'Extra towels', 'Paid'),
(10, 'Sneha Iyer', '67 Residency Road, Bangalore', 'sneha.iyer@example.com', '9876543219', 'Standard', 'Non AC Room', 1, 1, 3500, '2025-11-10', '2025-11-12', '', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `breakfast_orders`
--

CREATE TABLE `breakfast_orders` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(100) DEFAULT NULL,
  `room_number` varchar(20) DEFAULT NULL,
  `item` varchar(100) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `total` decimal(10,2) DEFAULT NULL,
  `order_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `breakfast_orders`
--

INSERT INTO `breakfast_orders` (`id`, `customer_name`, `room_number`, `item`, `quantity`, `price`, `total`, `order_time`) VALUES
(1, 'neha', '104', 'Coffee', 1, 50.00, 50.00, '2025-08-02 09:32:23'),
(2, 'neha', '104', 'Coffee', 1, 50.00, 50.00, '2025-08-02 09:39:42'),
(3, 'abc', '104', 'Tea', 1, 40.00, 40.00, '2025-08-05 02:41:53'),
(4, 'Rahul Sharma', '101', 'Pancakes', 2, 80.00, 160.00, '2025-08-06 14:09:09'),
(5, 'Priya Mehta', '102', 'Omelette', 1, 60.00, 60.00, '2025-08-06 14:09:09'),
(6, 'Amit Patel', '103', 'Coffee', 2, 35.00, 70.00, '2025-08-06 14:09:09'),
(7, 'Neha Verma', '104', 'Tea', 1, 20.00, 20.00, '2025-08-06 14:09:09'),
(8, 'Rajesh Singh', '105', 'Toast', 3, 25.00, 75.00, '2025-08-06 14:09:09'),
(9, 'Anita Desai', '106', 'Pancakes', 1, 80.00, 80.00, '2025-08-06 14:09:09'),
(10, 'Vikas Gupta', '107', 'Omelette', 2, 60.00, 120.00, '2025-08-06 14:09:09'),
(11, 'Sneha Joshi', '108', 'Coffee', 1, 35.00, 35.00, '2025-08-06 14:09:09'),
(12, 'Manish Kumar', '109', 'Tea', 2, 20.00, 40.00, '2025-08-06 14:09:09'),
(13, 'Pooja Shah', '110', 'Toast', 1, 25.00, 25.00, '2025-08-06 14:09:09'),
(14, 'abc', '104', 'Tea', 1, 40.00, 40.00, '2025-09-01 02:58:50'),
(15, 'aarav sharma', '111', 'Omelette', 1, 100.00, 100.00, '2025-09-10 17:06:02'),
(16, 'aarav sharma', '111', 'Tea', 4, 40.00, 160.00, '2025-09-10 17:08:42'),
(17, 'aarav sharma', '111', 'Tea', 4, 40.00, 160.00, '2025-09-10 17:10:47');

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`) VALUES
(1, 'Aarav Sharma', 'aarav.sharma@example.com', '9876543210', 'Room Inquiry', 'I would like to know the availability of deluxe rooms for next weekend.', '2025-08-06 14:57:26'),
(2, 'Isha Verma', 'isha.verma@example.com', '9876543211', 'Booking Confirmation', 'Please confirm my booking for 2 adults and 1 child in a standard room.', '2025-08-06 14:57:26'),
(3, 'Rohan Mehta', 'rohan.mehta@example.com', '9876543212', 'Food Services', 'Do you provide Jain food options in your restaurant?', '2025-08-06 14:57:26'),
(4, 'Ananya Singh', 'ananya.singh@example.com', '9876543213', 'Event Hall Booking', 'I want to book a banquet hall for a family event next month.', '2025-08-06 14:57:26'),
(5, 'Vivaan Gupta', 'vivaan.gupta@example.com', '9876543214', 'Spa Services', 'Could you please share details of your spa and massage services?', '2025-08-06 14:57:26');

-- --------------------------------------------------------

--
-- Table structure for table `desserts_orders`
--

CREATE TABLE `desserts_orders` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(100) DEFAULT NULL,
  `room_number` varchar(20) DEFAULT NULL,
  `item` varchar(100) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `total` decimal(10,2) DEFAULT NULL,
  `order_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `desserts_orders`
--

INSERT INTO `desserts_orders` (`id`, `customer_name`, `room_number`, `item`, `quantity`, `price`, `total`, `order_time`) VALUES
(1, 'neha', '104', 'Ice Cream (Single Scoop)', 1, 70.00, 70.00, '2025-08-02 10:10:14'),
(2, 'Rahul Sharma', '101', 'Gulab Jamun (2 pcs)', 2, 40.00, 80.00, '2025-08-06 14:12:22'),
(3, 'Priya Mehta', '102', 'Rasgulla (2 pcs)', 1, 35.00, 35.00, '2025-08-06 14:12:22'),
(4, 'Amit Patel', '103', 'Ice Cream (Single Scoop)', 3, 30.00, 90.00, '2025-08-06 14:12:22'),
(5, 'Neha Verma', '104', 'Chocolate Brownie', 2, 60.00, 120.00, '2025-08-06 14:12:22'),
(6, 'Rajesh Singh', '105', 'Cheesecake', 1, 90.00, 90.00, '2025-08-06 14:12:22'),
(7, 'Anita Desai', '106', 'Fruit Salad', 2, 50.00, 100.00, '2025-08-06 14:12:22'),
(8, 'Vikas Gupta', '107', 'Gulab Jamun (2 pcs)', 1, 40.00, 40.00, '2025-08-06 14:12:22'),
(9, 'Sneha Joshi', '108', 'Ice Cream (Single Scoop)', 2, 30.00, 60.00, '2025-08-06 14:12:22'),
(10, 'Manish Kumar', '109', 'Rasgulla (2 pcs)', 3, 35.00, 105.00, '2025-08-06 14:12:22'),
(11, 'Pooja Shah', '110', 'Chocolate Brownie', 1, 60.00, 60.00, '2025-08-06 14:12:22'),
(12, 'Aarav sharma', '111', 'Chocolate Brownie', 4, 120.00, 480.00, '2025-09-10 17:31:10');

-- --------------------------------------------------------

--
-- Table structure for table `dinner_orders`
--

CREATE TABLE `dinner_orders` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(100) DEFAULT NULL,
  `room_number` varchar(20) DEFAULT NULL,
  `item` varchar(100) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `total` decimal(10,2) DEFAULT NULL,
  `order_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `dinner_orders`
--

INSERT INTO `dinner_orders` (`id`, `customer_name`, `room_number`, `item`, `quantity`, `price`, `total`, `order_time`) VALUES
(1, 'neha', '104', 'Butter Naan (2 pcs)', 1, 40.00, 40.00, '2025-08-02 10:00:01'),
(2, 'Rahul Sharma', '101', 'Butter Naan (2 pcs)', 2, 40.00, 80.00, '2025-08-06 14:14:42'),
(3, 'Priya Mehta', '102', 'Paneer Tikka Masala', 1, 180.00, 180.00, '2025-08-06 14:14:42'),
(4, 'Amit Patel', '103', 'Chicken Biryani', 2, 220.00, 440.00, '2025-08-06 14:14:42'),
(5, 'Neha Verma', '104', 'Mutton Curry', 1, 250.00, 250.00, '2025-08-06 14:14:42'),
(6, 'Rajesh Singh', '105', 'Fish Fry', 2, 200.00, 400.00, '2025-08-06 14:14:42'),
(7, 'Anita Desai', '106', 'Vegetable Pulao', 1, 150.00, 150.00, '2025-08-06 14:14:42'),
(8, 'Vikas Gupta', '107', 'Butter Naan (2 pcs)', 3, 40.00, 120.00, '2025-08-06 14:14:42'),
(9, 'Sneha Joshi', '108', 'Paneer Tikka Masala', 2, 180.00, 360.00, '2025-08-06 14:14:42'),
(10, 'Manish Kumar', '109', 'Chicken Biryani', 1, 220.00, 220.00, '2025-08-06 14:14:42'),
(11, 'Pooja Shah', '110', 'Vegetable Pulao', 2, 150.00, 300.00, '2025-08-06 14:14:42'),
(12, 'Aarav sharma', '111', 'Vegetable Pulao', 3, 150.00, 450.00, '2025-09-10 17:24:56');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `title`, `description`, `image`) VALUES
(1, 'Swimming Pool', 'Enjoy our luxurious outdoor pool with sun loungers and refreshments.', 'pool.jpg'),
(2, 'Spa & Wellness', 'Relax with massages, sauna, steam and a complete wellness experience.', 'spa.jpg'),
(3, 'Fitness Center', 'Modern gym with cardio, weights and personal trainers available.', 'gym.jpg'),
(4, 'Business Center', 'Workspaces, high-speed internet, and printing services for business guests.', 'bus.jpg'),
(5, 'Airport Shuttle', 'Comfortable pick-up and drop-off services from the airport.', 'shuttle.jpg'),
(6, '24/7 Room Service', 'Delicious food and beverages served to your room anytime.', 'room247.jpg'),
(7, 'Parking Facility', 'Spacious and secure parking for hotel guests.', 'parking.jpg'),
(8, 'Bar & Lounge', 'Exclusive bar serving cocktails, wines and premium spirits.', 'bar.jpg'),
(9, 'Kids Play Area', 'Fun and safe play zone designed especially for kids.', 'kid.jpg'),
(10, 'Conference Rooms', 'State-of-the-art conference rooms for meetings and events.', 'conference.jpg'),
(11, 'Garden & Outdoor Seating', 'Beautiful landscaped gardens for evening walks and relaxation.', 'garden.jpg'),
(13, 'Laundry Service', 'Fast and reliable laundry and dry-cleaning service.', 'laundry.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feed_id` int(11) NOT NULL,
  `Full_name` text NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile_no` int(10) NOT NULL,
  `Room_no` varchar(10) NOT NULL,
  `Rating` enum('Excellent','Good','Average','Poor') NOT NULL,
  `Feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feed_id`, `Full_name`, `Email`, `Mobile_no`, `Room_no`, `Rating`, `Feedback`) VALUES
(1, 'Neelam Kumar', 'neelam.kumar@example.com', 2147483647, '201', 'Excellent', 'Exceptional service and very clean rooms.'),
(2, 'Ravi Sharma', 'ravi.sharma@example.com', 2147483647, '202', 'Good', 'Friendly staff but breakfast options were limited.'),
(3, 'Deepa Singh', 'deepa.singh@example.com', 2147483647, '203', 'Average', 'Room was okay, but bathroom needs maintenance.'),
(4, 'Manoj Patel', 'manoj.patel@example.com', 2147483647, '204', 'Excellent', 'Loved the ambiance and the quick check-in process.'),
(5, 'Sunita Jain', 'sunita.jain@example.com', 2147483647, '205', 'Poor', 'Noisy surroundings disturbed our sleep.'),
(6, 'Anil Verma', 'anil.verma@example.com', 2147483647, '206', 'Good', 'Good location and helpful front desk staff.'),
(7, 'Kiran Ram', 'kiran.ram@example.com', 2147483647, '207', 'Excellent', 'Everything was perfect from start to finish.'),
(8, 'Sonal Das', 'sonal.das@example.com', 2147483647, '208', 'Average', 'Food was mediocre but rooms were clean.'),
(9, 'Ajay Khan', 'ajay.khan@example.com', 2147483647, '209', 'Good', 'Comfortable stay but Wi-Fi was inconsistent.'),
(10, 'Ritika Mehta', 'ritika.mehta@example.com', 2147483647, '210', 'Excellent', 'Amazing hospitality, highly recommend this hotel.');

-- --------------------------------------------------------

--
-- Table structure for table `lunch_orders`
--

CREATE TABLE `lunch_orders` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(100) DEFAULT NULL,
  `room_number` varchar(20) DEFAULT NULL,
  `item` varchar(100) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `total` decimal(10,2) DEFAULT NULL,
  `order_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `lunch_orders`
--

INSERT INTO `lunch_orders` (`id`, `customer_name`, `room_number`, `item`, `quantity`, `price`, `total`, `order_time`) VALUES
(1, 'Rahul Sharma', '101', 'Veg Thali', 1, 180.00, 180.00, '2025-08-06 14:17:29'),
(2, 'Priya Mehta', '102', 'Paneer Butter Masala', 1, 160.00, 160.00, '2025-08-06 14:17:29'),
(3, 'Amit Patel', '103', 'Chicken Curry', 2, 200.00, 400.00, '2025-08-06 14:17:29'),
(4, 'Neha Verma', '104', 'Dal Fry', 1, 120.00, 120.00, '2025-08-06 14:17:29'),
(5, 'Rajesh Singh', '105', 'Roti (2 pcs)', 3, 25.00, 75.00, '2025-08-06 14:17:29'),
(6, 'Anita Desai', '106', 'Rice Plate', 1, 100.00, 100.00, '2025-08-06 14:17:29'),
(7, 'Vikas Gupta', '107', 'Veg Thali', 2, 180.00, 360.00, '2025-08-06 14:17:29'),
(8, 'Sneha Joshi', '108', 'Paneer Butter Masala', 2, 160.00, 320.00, '2025-08-06 14:17:29'),
(9, 'Manish Kumar', '109', 'Chicken Curry', 1, 200.00, 200.00, '2025-08-06 14:17:29'),
(10, 'Pooja Shah', '110', 'Dal Fry', 2, 120.00, 240.00, '2025-08-06 14:17:29'),
(11, 'Aarav sharma', '111', 'Veg Thali', 4, 150.00, 600.00, '2025-09-10 17:21:58');

-- --------------------------------------------------------

--
-- Table structure for table `room_manage`
--

CREATE TABLE `room_manage` (
  `room_id` int(20) NOT NULL,
  `Room_type` text NOT NULL,
  `Room_category` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `status` text NOT NULL,
  `image` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `room_manage`
--

INSERT INTO `room_manage` (`room_id`, `Room_type`, `Room_category`, `description`, `price`, `status`, `image`) VALUES
(1, 'Deluxe', 'Ac_room', 'Comfort Meets Elegance', 2000, 'Available', 'deluxe2.jpg'),
(2, 'Luxery', 'Non_Ac_room', 'A royal experience for the refined soul', 1000, 'Available', 'deluxe.jpg'),
(3, 'Suite\r\n', 'Ac room', 'An incredible experience of grandeur and peace', 3000, 'Available', 'suit.jpg'),
(5, 'Luxery', 'Ac room', 'Experience Comfort and Elegance', 1000, 'Available', 'lux3.jpg'),
(6, 'Standard ', 'Ac room', 'A comfortable room with essential amenities for a pleasant stay', 1000, 'Available', 'std1.jpg'),
(7, 'Standard ', 'Non Ac-room', 'A perfect blend of simplicity, style, and comfort', 1000, 'Available', 'std2.jpg'),
(8, 'Standard ', 'Ac room', 'Relax in our well-appointed rooms with all basic amenities.', 2000, 'Available', 'std3.jpg'),
(9, 'Deluxe', 'Ac room', 'A clean, comfortable room with a large bed, private bathroom, and modern amenities.', 2000, 'Available', 'deluxe1.jpg'),
(10, 'Deluxe', 'Non Ac-room', 'Enjoy a cozy room with extra space, a flat-screen TV, free Wi-Fi, and air conditioning.', 2000, 'Available', 'deluxe3.jpg'),
(11, 'Luxery', 'Ac room', 'Luxury rooms with elegant design, premium comfort, and top-tier amenities.\r\n', 2000, 'Available', 'lux2.jpg'),
(12, 'Suite', 'Ac room', 'Spacious suite rooms with elegant interiors, premium amenities, and ultimate comfort for a luxurious stay.\r\n', 2000, 'Available', 'suit1.jpg'),
(13, 'Suite', 'Non Ac-room', 'Indulge in our stylish suites, offering separate living spaces and upscale comfort for a truly elevated stay.', 1000, 'Available', 'suit3.jpg'),
(14, 'Single room ', 'Ac room', 'Cozy single rooms designed for comfort and convenience, perfect for solo travelers.', 1000, 'Available', 'lux1.jpg'),
(15, 'Single room ', 'Non Ac-room', 'Comfortable single rooms with all essential amenities for a restful stay.', 1000, 'Available', 'single2.jpg'),
(16, 'Single room ', 'Ac room', 'Smartly appointed single rooms offering a peaceful retreat for individual guests.', 2000, 'Available', 'singl1.jpg'),
(17, 'Family room ', 'Ac room', 'Spacious family rooms designed to keep everyone comfortable and connected', 5000, 'Available', 'fam1.jpg'),
(18, 'Family room ', 'Non Ac-room', 'Family-friendly rooms with ample space and thoughtful amenities for all ages', 3000, 'Available', 'fam2.jpg'),
(19, 'Family room ', 'Ac room', 'Comfortable and roomy family suites perfect for memorable stays together.', 4000, 'Available', 'fam3.jpg'),
(20, 'Suite', 'Ac room', 'An incredible experience of grandeur and peace', 3000, 'Available', 'suit.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `registaration_id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile_no` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `confirm_password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`registaration_id`, `fullname`, `email`, `mobile_no`, `username`, `password`, `confirm_password`) VALUES
(1, 'Aarav Sharma', 'aarav.sharma@example.com', 2147483647, 'aaravsharma', 'pass123', 'pass123'),
(2, 'Isha Verma', 'isha.verma@example.com', 2147483647, 'ishaverma', 'pass123', 'pass123'),
(3, 'Rohan Mehta', 'rohan.mehta@example.com', 2147483647, 'rohanmehta', 'pass123', 'pass123'),
(4, 'Ananya Singh', 'ananya.singh@example.com', 2147483647, 'ananyasingh', 'pass123', 'pass123'),
(5, 'Vivaan Gupta', 'vivaan.gupta@example.com', 2147483647, 'vivaangupta', 'pass123', 'pass123'),
(6, 'Kavya Nair', 'kavya.nair@example.com', 2147483647, 'kavyanair', 'pass123', 'pass123'),
(7, 'Aditya Reddy', 'aditya.reddy@example.com', 2147483647, 'adityareddy', 'pass123', 'pass123'),
(8, 'Priya Menon', 'priya.menon@example.com', 2147483647, 'priyamenon', 'pass123', 'pass123'),
(9, 'Yash Patel', 'yash.patel@example.com', 2147483647, 'yashpatel', 'pass123', 'pass123'),
(10, 'Sneha Iyer', 'sneha.iyer@example.com', 2147483647, 'snehaiyer', 'pass123', 'pass123');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `department` varchar(50) NOT NULL,
  `salary` decimal(10,0) NOT NULL,
  `position` varchar(50) NOT NULL,
  `join_date` date NOT NULL,
  `shift` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `first_name`, `email`, `phone`, `department`, `salary`, `position`, `join_date`, `shift`, `status`) VALUES
(1, 'Neelam', 'neelam.kumar@example.com', '9876500010', 'Housekeeping', 24000, 'Cleaner', '2023-01-10', 'Morning', 'Active'),
(2, 'Ravi', 'ravi.sharma@example.com', '9876500011', 'Reception', 36000, 'Receptionist', '2022-03-15', 'Evening', 'Active'),
(3, 'Deepa', 'deepa.singh@example.com', '9876500012', 'Kitchen', 31000, 'Chef', '2021-05-20', 'Morning', 'Active'),
(4, 'Manoj', 'manoj.patel@example.com', '9876500013', 'Maintenance', 28000, 'Technician', '2020-07-25', 'Night', 'Active'),
(5, 'Sunita', 'sunita.jain@example.com', '9876500014', 'Security', 27000, 'Security Guard', '2019-09-30', 'Night', 'Active'),
(6, 'Anil', 'anil.verma@example.com', '9876500015', 'Management', 50000, 'Manager', '2018-11-05', 'Morning', 'Active'),
(7, 'Kiran', 'kiran.ram@example.com', '9876500016', 'Housekeeping', 25000, 'Supervisor', '2023-02-12', 'Evening', 'Active'),
(8, 'Sonal', 'sonal.das@example.com', '9876500017', 'Reception', 35000, 'Receptionist', '2022-04-18', 'Morning', 'Active'),
(9, 'Ajay', 'ajay.khan@example.com', '9876500018', 'Kitchen', 30000, 'Sous Chef', '2021-06-22', 'Morning', 'Active'),
(10, 'Ritika', 'ritika.mehta@example.com', '9876500019', 'Maintenance', 27500, 'Technician', '2020-08-28', 'Night', 'Active'),
(11, 'Vikram', 'vikram.gupta@example.com', '9876500020', 'Security', 26500, 'Security Guard', '2019-10-31', 'Night', 'Active'),
(12, 'Pooja', 'pooja.nair@example.com', '9876500021', 'Management', 52000, 'Assistant Manager', '2018-12-07', 'Morning', 'Active'),
(13, 'Ramesh', 'ramesh.singh@example.com', '9876500022', 'Housekeeping', 24000, 'Cleaner', '2023-03-15', 'Morning', 'Active'),
(14, 'Meena', 'meena.joshi@example.com', '9876500023', 'Reception', 34000, 'Receptionist', '2022-05-20', 'Evening', 'Active'),
(15, 'Suresh', 'suresh.patel@example.com', '9876500024', 'Kitchen', 31000, 'Chef', '2021-07-25', 'Morning', 'Active'),
(16, 'Rekha', 'rekha.kumar@example.com', '9876500025', 'Maintenance', 28000, 'Supervisor', '2020-09-30', 'Night', 'Active'),
(17, 'Ajita', 'ajita.sharma@example.com', '9876500026', 'Security', 27000, 'Security Guard', '2019-11-05', 'Night', 'Active'),
(18, 'Nitin', 'nitin.verma@example.com', '9876500027', 'Management', 51000, 'Manager', '2018-01-10', 'Morning', 'Active'),
(19, 'Sita', 'sita.ram@example.com', '9876500028', 'Housekeeping', 25000, 'Cleaner', '2023-04-18', 'Evening', 'Active'),
(20, 'Vishal', 'vishal.das@example.com', '9876500029', 'Reception', 36000, 'Receptionist', '2022-06-22', 'Morning', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beverages_orders`
--
ALTER TABLE `beverages_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `breakfast_orders`
--
ALTER TABLE `breakfast_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `desserts_orders`
--
ALTER TABLE `desserts_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dinner_orders`
--
ALTER TABLE `dinner_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feed_id`);

--
-- Indexes for table `lunch_orders`
--
ALTER TABLE `lunch_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_manage`
--
ALTER TABLE `room_manage`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`registaration_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `beverages_orders`
--
ALTER TABLE `beverages_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `breakfast_orders`
--
ALTER TABLE `breakfast_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `desserts_orders`
--
ALTER TABLE `desserts_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `dinner_orders`
--
ALTER TABLE `dinner_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feed_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `lunch_orders`
--
ALTER TABLE `lunch_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `room_manage`
--
ALTER TABLE `room_manage`
  MODIFY `room_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `registaration_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
