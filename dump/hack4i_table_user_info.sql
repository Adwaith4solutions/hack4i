
-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `gender` char(1) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `contact` bigint(12) NOT NULL,
  `category` char(1) NOT NULL,
  `password` varchar(100) NOT NULL,
  `organization` varchar(100) NOT NULL,
  `dept_id` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='this table contains details about users';

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `gender`, `email_id`, `contact`, `category`, `password`, `organization`, `dept_id`) VALUES
(2, 'asksakskaksa', 'asasddsdsa', '', '', 0, '', '', '', '0'),
(16, 'Abhijith', 'S', 'M', 'abhijith22@gmail.com', 77223322, 'S', 'abhijith', 'College of Engineering Aranmula', '1'),
(11, 'Anantha', 'Krishnan M', 'M', 'akcreations100@gmail.com', 2147483647, 'A', 'CEA', 'sdsdadsdssda', '0'),
(18, 'Akshay', 'Kumar', 'M', 'akshay22@gmail.com', 2147483647, 'S', 'sha512$ebcdca$c418f6fe0e2c8bd4cf1e1a64f2c9f2e53c55b4b0711eb7284a7aa2c019a39ef6a6af8d7446c1a78321dabe', 'College of Engineering Aranmula', '2'),
(12, 'Abhay', 'Krishna', 'M', 'daredevil@gmail.com', 12233223, 's', 'CEA', 'sajjsaddaklsklsak', '0'),
(30, 'George', 'unni', 'M', 'george123@gmail.com', 9494994949, 'S', 'sha512$1ac33d$d98ed320a5df66620fe73ffe4f25e6d4d93f7882b1163ad8920bab5e82121bafcf93da8fba647ed035523a', 'College of Engineering Aranmula', 'H4i01'),
(20, 'Gopi ', 'Krishnan', 'M', 'gopi12@gmail.com', 2147483647, 'S', 'sha512$bbfba6$0189c5b8c0c5dd3c9dd5a0889d767bf8dee2e767549211edb7d32815c804ee383c560dc46bd9e644ca83ad', 'College of Engineering Aranmula', '3'),
(24, 'hello', 'ak', 'M', 'kriisisidisidsi!@gmail.com', 9897843894, 'E', 'sha512$15cdbd$b43cc23e637794bdb2f52944f738b24591d3d00bb9a0c0d590230eb4b4fed5e4aa864504fe8f2c365decce', 'College of Engineering Aranmula', '0'),
(13, 'Nidhin', 'Tom', 'M', 'nidhintom@gmail.com', 2147483647, 'S', 'College of Engineering Aranmula', 'random', '0'),
(15, 'Riyazmon', 'M S', 'M', 'riyaz6@gmail.com', 727737271, 'S', 'riyazmon', 'College of Engineering Aranmula', '1'),
(1, 'Roffin', 'Varghese', 'M', 'roffin123@gmail.com', 848484841, 's', 'veenas', 'College of engineering,Aranmula', '1'),
(28, 'sjsjjsjs', 'saddsadsa', 'M', 'saddsadsa@gaiul.com', 9383838438, 'E', 'sha512$b53e62$33860b6b38c5fc1c8408ac7612da02bde83c416fe0bd67439c469e6088b4feb67f819a285145b71230d8b4', 'College of Enginekdkdkdskdskering Aranmula', 'H4i03'),
(26, 'sjsjjsjs', 'saddsadsa', 'M', 'saddsadsa@gmaiul.com', 9897843894, 'E', 'sha512$784e5a$bc2552cce1c094422d17572d2c385679c423a3f9cc01836c7ee16a25ae4adf5308a7933958dd3451e2febb', 'College of Engineering Aranmula', '0'),
(10, 'xkaklslkasls', 'dsadsadsa', 'M', 'sadsadsadsa@hsjhsjaa.coco', 123223, 's', 'wqweqew', 'qweqwqeweqwe', '0'),
(25, 'kksksaks', 'sddsdsadsa', 'M', 'sssdadsa@fddfsdd', 9309092393, 'S', 'sha512$3ee6b7$6ed7c08ba9521190c92ad051ab700842b0c5c459b31fff9b081e991d7cf70a6096692bdd9b6dfeedf0e150', 'Coslsldsds', '1'),
(22, 'Anantha', 'Krishnan', 'M', 'test123@gmail.com', 9404233233, 'S', 'sha512$948d50$75e8caf86a95aa61eadb9cb567a70956e3f11261f97a624ae7caa3de077cc3f2087feda15a7050d8e1d9b4', 'College of Engineering Aranmula', '1'),
(23, 'test1', 'user', 'M', 'test1@gmai.com', 9111111111, 'E', 'sha512$72d6df$9ecd26e29312bc0e660bf0189194983559ec96c7a9600de2343cbd1cd06ccfe254e62e1df94cfb004da30a', 'College of Engineering Aranmula', '3'),
(21, 'test', 'user', 'M', 'testuser1@gmail.com', 2147483647, 'S', 'sha512$f644e1$a4bbebca35a6fe875b15c381f008937669c4ff0da39c457678380b9990759c39a67ba6abc67ad909b18b1a', 'test', '1'),
(14, 'Veena', 'Subramanion', 'M', 'veenasubramanion96@gmail.com', 2147483647, 'S', 'ksaksksakkdskskds', 'College of Engineering Aranmula', '1');
