SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `master_dinding` (
  `id_master_dinding` int(11) NOT NULL,
  `master_dinding` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL,
  `created_by` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `has_master_dinding` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

ALTER TABLE `master_dinding`
  ADD PRIMARY KEY (`id_master_dinding`);

ALTER TABLE `master_dinding`
  MODIFY `id_master_dinding` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;