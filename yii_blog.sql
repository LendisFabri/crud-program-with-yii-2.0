CREATE TABLE IF NOT EXISTS `biodata`(
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` VARCHAR(30) NOT NULL,
  `tempat_lahir` VARCHAR(20) NOT NULL,
  `tanggal_lahir` DATE NOT NULL,
  `jenis_kelamin` VARCHAR(10) NOT NULL,
  `alamat` VARCHAR(30),
  `no_telp` VARCHAR(15),
)
