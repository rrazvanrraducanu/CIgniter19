CREATE DATABASE images;
USE images;
CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `images` (`id`, `title`, `image`) VALUES
(3, 'uaic', './images/3457251665abf79306c971.jpg'),
(4, 'uaic', './images/13569137765abf7953d2e0a.jpg'),
(5, 'kali', './images/3570945245abf79c27f9cb.jpg'),
(6, 'kali', './images/17413433175abf79da0dfc5.jpg');


ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;
