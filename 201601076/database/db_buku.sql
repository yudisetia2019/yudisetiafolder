/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100137
 Source Host           : localhost:3306
 Source Schema         : db_buku

 Target Server Type    : MySQL
 Target Server Version : 100137
 File Encoding         : 65001

 Date: 16/05/2019 21:30:22
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tb_buku
-- ----------------------------
DROP TABLE IF EXISTS `tb_buku`;
CREATE TABLE `tb_buku`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pengarang` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `penerbit` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tb_buku
-- ----------------------------
INSERT INTO `tb_buku` VALUES (1, 'Tutorial Photoshop', 'Bayu', 'Terbitin Sendiri');
INSERT INTO `tb_buku` VALUES (2, 'Tutorial PHP Codeigniter', 'Agus Suparno', 'ANDI');
INSERT INTO `tb_buku` VALUES (3, 'Tutorial Android Xamarin', 'Purwono', 'Lokomedia');
INSERT INTO `tb_buku` VALUES (4, 'Menghitung Angka', 'Tri Stiyo Famuji', 'ANDI');
INSERT INTO `tb_buku` VALUES (5, 'Belajar PHP  Dasar', 'Tri Stiyo Famuji', 'ANDI');
INSERT INTO `tb_buku` VALUES (6, 'Belajar C#', 'STIKOM YOS SUDARSO PURWOKERTO', 'ANDI');

SET FOREIGN_KEY_CHECKS = 1;
