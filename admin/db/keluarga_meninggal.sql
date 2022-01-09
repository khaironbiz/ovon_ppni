
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `keluarga_meninggal` (
  `id_keluarga_meninggal` int(11) NOT NULL,
  `key_keluarga` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sebab_kematian` int(11) NOT NULL,
  `tgl_kematian` date NOT NULL,
  `has_keluarga_meninggal` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

ALTER TABLE `keluarga_meninggal`
  ADD PRIMARY KEY (`id_keluarga_meninggal`);

ALTER TABLE `keluarga_meninggal`
  MODIFY `id_keluarga_meninggal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;
