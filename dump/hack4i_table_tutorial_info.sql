
-- --------------------------------------------------------

--
-- Table structure for table `tutorial_info`
--

CREATE TABLE `tutorial_info` (
  `id` int(11) NOT NULL,
  `topic` varchar(50) NOT NULL,
  `abstract` varchar(200) NOT NULL,
  `descrip` text NOT NULL,
  `images` varchar(100) NOT NULL,
  `likes` int(11) NOT NULL,
  `views` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tutorial_info`
--

INSERT INTO `tutorial_info` (`id`, `topic`, `abstract`, `descrip`, `images`, `likes`, `views`, `user_id`) VALUES
(1, 'Introduction to Ethical Hacking', 'Ethical hacking is key to strengthening network security, and it\'s one of the most desired stills for any IT security professional.', '<p>What is ethical hacking? When it comes to cybersecurity, hacking comes in many colors: white, grey, black, and shades in between. White hat hackers use their skills for good. They practice ethical hacking: involved testing to see if an organization\'s network is vulnerable to outside attacks.</p><p> Ethical hacking is key to strengthening network security, and it\'s one of the most desired stills for any IT security professional. If you\'re interested in becoming an ethical hacker, or getting started securing your own network, this introduction is for you.</p>', 'images/tutorials/1.jpg', 109, 164, 1),
(2, 'Protect your App', 'Most companies focuses on security issues\r\nwhat all steps you should take?', '', 'images/tutorials/2.png', 10, 27, 2),
(3, 'Augmented Reality', 'Change the perspective how you view the world! Lets make an Augmented reality App', '', 'images/tutorials/3.jpg', 1, 8, 3);
