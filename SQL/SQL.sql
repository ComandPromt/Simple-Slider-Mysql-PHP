
DROP DATABASE slider;
CREATE DATABASE slider;
USE slider;

CREATE TABLE `slider` (
`id` int(11) NOT NULL,
`image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
`description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
`created` datetime NOT NULL,
`modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8

INSERT INTO `slider` (`id`, `image`, `description`, `created`, `modified`) VALUES
(1, 'nature1.jpg', 'Nature1 images', '2017-07-29 00:00:00', '2017-07-29 00:00:00'),
(2, 'nature2.jpg', 'nature 2 images', '2017-07-29 00:00:00', '2017-07-29 00:00:00'),
(3, 'nature3.jpg', 'nature3 images', '2017-07-29 00:00:00', '2017-07-29 00:00:00'),
(4, 'nature4.jpg', 'nature4 images', '2017-07-29 00:00:00', '2017-07-29 00:00:00');
