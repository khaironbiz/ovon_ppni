SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `master_bahan_bakar` (
  `id_master_bahan_bakar` int(11) NOT NULL,
  `master_bahan_bakar` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL,
  `created_by` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `has_master_bahan_bakar` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

ALTER TABLE `master_bahan_bakar`
  ADD PRIMARY KEY (`id_master_bahan_bakar`);

ALTER TABLE `master_bahan_bakar`
  MODIFY `id_master_bahan_bakar` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;