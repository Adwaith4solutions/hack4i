
-- --------------------------------------------------------

--
-- Table structure for table `submitted_articles`
--

CREATE TABLE `submitted_articles` (
  `id` int(11) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `abstract` varchar(200) NOT NULL,
  `descrip` text NOT NULL,
  `images` varchar(100) DEFAULT NULL,
  `videos` varchar(100) DEFAULT NULL,
  `type` char(1) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submitted_articles`
--

INSERT INTO `submitted_articles` (`id`, `topic`, `abstract`, `descrip`, `images`, `videos`, `type`, `userid`) VALUES
(1, 'test1', 'test123', 'askksakskkdkkkkdkskds', NULL, NULL, '', 0),
(2, 'test1', 'test123', 'askksakskkdkkkkdkskds', NULL, NULL, '', 0),
(3, 'akskkskskdk', 'xkklzxlklcx', 'xcxzzxzxczcxx', NULL, NULL, 't', 0);
