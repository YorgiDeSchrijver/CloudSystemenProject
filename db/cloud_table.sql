SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `cloud_table` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `data_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `cloud_table` (`id`, `title`, `body`, `data_created`) VALUES
(1, 'First title', 'first message body', '2024-06-01'),
(2, 'second post', 'second post body', '2024-04-18');

ALTER TABLE `cloud_table`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `cloud_table`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;
