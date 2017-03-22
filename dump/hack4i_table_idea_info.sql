
-- --------------------------------------------------------

--
-- Table structure for table `idea_info`
--

CREATE TABLE `idea_info` (
  `id` int(11) NOT NULL,
  `topic` varchar(50) NOT NULL,
  `abstract` varchar(200) NOT NULL,
  `descrip` text NOT NULL,
  `images` varchar(100) NOT NULL,
  `likes` int(11) NOT NULL,
  `views` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
