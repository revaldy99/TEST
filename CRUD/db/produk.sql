

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for produk
-- ----------------------------
DROP TABLE IF EXISTS `produk`;
CREATE TABLE `produk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_produk` varchar(50) DEFAULT NULL,
  `keterangan` text,
  `harga` varchar(50) DEFAULT NULL,
  `jumlah` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;


INSERT INTO `produk` VALUES ('1', 'anngur', 'manis ', '5000','3');
INSERT INTO `produk` VALUES ('2', 'apel', 'enak ', '9000','3');