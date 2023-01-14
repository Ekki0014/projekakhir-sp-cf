/*
 Navicat Premium Data Transfer

 Source Server         : LOCAL
 Source Server Type    : MySQL
 Source Server Version : 100422
 Source Host           : localhost:3306
 Source Schema         : spk_lambung

 Target Server Type    : MySQL
 Target Server Version : 100422
 File Encoding         : 65001

 Date: 18/12/2022 16:07:09
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tgejala
-- ----------------------------
DROP TABLE IF EXISTS `tgejala`;
CREATE TABLE `tgejala`  (
  `kode_gejala` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama_gejala` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `bobot` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`kode_gejala`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tgejala
-- ----------------------------
INSERT INTO `tgejala` VALUES ('G01', 'Rasa tidak enak didaerah perut', '0,8');
INSERT INTO `tgejala` VALUES ('G02', 'Perut Terasa Penuh', '0,3');
INSERT INTO `tgejala` VALUES ('G03', 'Perut terasa kembung', '0,4');
INSERT INTO `tgejala` VALUES ('G04', 'Berkurangnya nafsu makan', '0,7');
INSERT INTO `tgejala` VALUES ('G05', 'Rasa mual diperut', '0,8');
INSERT INTO `tgejala` VALUES ('G06', 'Rasa Ingin Muntah', '0,3');
INSERT INTO `tgejala` VALUES ('G07', 'Nyeri pada ulu hati', '0,15');
INSERT INTO `tgejala` VALUES ('G08', 'Rasa Sakit saat menelan makanan', '0,15');
INSERT INTO `tgejala` VALUES ('G09', 'Cepat Kenyang Saat makan', '0,3');
INSERT INTO `tgejala` VALUES ('G10', 'Nyeri dibelakang tulang dada', '0,4');
INSERT INTO `tgejala` VALUES ('G11', 'Perasaan panas dibagian dada dan perut', '0,9');
INSERT INTO `tgejala` VALUES ('G12', 'Reguritas', '0,8');
INSERT INTO `tgejala` VALUES ('G13', 'Rasa nyeri terbakar dibelakang tulang dada', '0,15');
INSERT INTO `tgejala` VALUES ('G14', 'Leher terasa sakit', '0,8');
INSERT INTO `tgejala` VALUES ('G15', 'Mulut terasa asam', '0,4');
INSERT INTO `tgejala` VALUES ('G16', 'Tubuh terasa lemas', '0,3');
INSERT INTO `tgejala` VALUES ('G17', 'Turunnya nafsu makan', '0,4');
INSERT INTO `tgejala` VALUES ('G18', 'Mulut terasa pahit', '0,4');
INSERT INTO `tgejala` VALUES ('G19', 'Mual dan muntah cairan kuning', '0,15');
INSERT INTO `tgejala` VALUES ('G20', 'Suhu badan naik', '0,4');
INSERT INTO `tgejala` VALUES ('G21', 'Tenggorokan terasa sakit', '0,8');
INSERT INTO `tgejala` VALUES ('G22', 'Nyeri perut pada bagian atas', '0,8');
INSERT INTO `tgejala` VALUES ('G23', 'Perut terasa mulas ', '0,4');
INSERT INTO `tgejala` VALUES ('G24', 'Penurunan berat badan ', '0,5');
INSERT INTO `tgejala` VALUES ('G25', 'Kulit berubah warna menjadi kuning', '0,9');
INSERT INTO `tgejala` VALUES ('G26', 'Terdapat darah pada tinja', '0,15');
INSERT INTO `tgejala` VALUES ('G27', 'Sesak nafas', '0,15');

-- ----------------------------
-- Table structure for tkeputusan
-- ----------------------------
DROP TABLE IF EXISTS `tkeputusan`;
CREATE TABLE `tkeputusan`  (
  `kd_konsultasi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `skor_perhitungan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kode_penyakit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tkeputusan
-- ----------------------------
INSERT INTO `tkeputusan` VALUES ('SOLH-0001', '12.75', 'P03');
INSERT INTO `tkeputusan` VALUES ('SOLH-0002', '60', 'P01');
INSERT INTO `tkeputusan` VALUES ('SOLH-0003', '60', 'P01');
INSERT INTO `tkeputusan` VALUES ('SOLH-0004', '69', 'P01');
INSERT INTO `tkeputusan` VALUES ('SOLH-0005', '69', 'P01');
INSERT INTO `tkeputusan` VALUES ('SOLH-0006', '66', 'P01');
INSERT INTO `tkeputusan` VALUES ('SOLH-0007', '69', 'P01');
INSERT INTO `tkeputusan` VALUES ('SOLH-0008', '69', 'P01');
INSERT INTO `tkeputusan` VALUES ('SOLH-0009', '60', 'P01');
INSERT INTO `tkeputusan` VALUES ('SOLH-0010', '60', 'P01');
INSERT INTO `tkeputusan` VALUES ('SOLH-0011', '60', 'P01');
INSERT INTO `tkeputusan` VALUES ('SOLH-0012', '60', 'P01');
INSERT INTO `tkeputusan` VALUES ('SOLH-0013', '72', 'P01');
INSERT INTO `tkeputusan` VALUES ('SOLH-0013', '34', 'P02');
INSERT INTO `tkeputusan` VALUES ('SOLH-0013', '24', 'P03');
INSERT INTO `tkeputusan` VALUES ('SOLH-0014', '72', 'P01');
INSERT INTO `tkeputusan` VALUES ('SOLH-0014', '34', 'P02');
INSERT INTO `tkeputusan` VALUES ('SOLH-0014', '24', 'P03');
INSERT INTO `tkeputusan` VALUES ('SOLH-0015', '72', 'P01');
INSERT INTO `tkeputusan` VALUES ('SOLH-0015', '12', 'P02');
INSERT INTO `tkeputusan` VALUES ('SOLH-0015', '12.75', 'P03');
INSERT INTO `tkeputusan` VALUES ('SOLH-0016', '72', 'P01');
INSERT INTO `tkeputusan` VALUES ('SOLH-0016', '21', 'P02');
INSERT INTO `tkeputusan` VALUES ('SOLH-0016', '24', 'P03');
INSERT INTO `tkeputusan` VALUES ('SOLH-0017', '72', 'P01');
INSERT INTO `tkeputusan` VALUES ('SOLH-0017', '21', 'P02');
INSERT INTO `tkeputusan` VALUES ('SOLH-0017', '24', 'P03');
INSERT INTO `tkeputusan` VALUES ('SOLH-0018', '64', 'P01');
INSERT INTO `tkeputusan` VALUES ('SOLH-0018', '40', 'P02');
INSERT INTO `tkeputusan` VALUES ('SOLH-0018', '114.75', 'P03');
INSERT INTO `tkeputusan` VALUES ('SOLH-0019', '64', 'P01');
INSERT INTO `tkeputusan` VALUES ('SOLH-0019', '40', 'P02');
INSERT INTO `tkeputusan` VALUES ('SOLH-0019', '114.75', 'P03');
INSERT INTO `tkeputusan` VALUES ('SOLH-0020', '64', 'P01');
INSERT INTO `tkeputusan` VALUES ('SOLH-0020', '40', 'P02');
INSERT INTO `tkeputusan` VALUES ('SOLH-0020', '114.75', 'P03');
INSERT INTO `tkeputusan` VALUES ('SOLH-0021', '64', 'P01');
INSERT INTO `tkeputusan` VALUES ('SOLH-0021', '40', 'P02');
INSERT INTO `tkeputusan` VALUES ('SOLH-0021', '114.75', 'P03');
INSERT INTO `tkeputusan` VALUES ('SOLH-0022', '72', 'P01');
INSERT INTO `tkeputusan` VALUES ('SOLH-0022', '21', 'P02');
INSERT INTO `tkeputusan` VALUES ('SOLH-0023', '72', 'P01');
INSERT INTO `tkeputusan` VALUES ('SOLH-0023', '40', 'P02');
INSERT INTO `tkeputusan` VALUES ('SOLH-0023', '12.75', 'P03');
INSERT INTO `tkeputusan` VALUES ('SOLH-0024', '72', 'P01');
INSERT INTO `tkeputusan` VALUES ('SOLH-0025', '72', 'P01');
INSERT INTO `tkeputusan` VALUES ('SOLH-0025', '24', 'P03');
INSERT INTO `tkeputusan` VALUES ('SOLH-0026', '196', 'P01');
INSERT INTO `tkeputusan` VALUES ('SOLH-0026', '12', 'P02');
INSERT INTO `tkeputusan` VALUES ('SOLH-0027', '195.5', 'P03');
INSERT INTO `tkeputusan` VALUES ('SOLH-0028', '58', 'P01');
INSERT INTO `tkeputusan` VALUES ('SOLH-0028', '40', 'P02');
INSERT INTO `tkeputusan` VALUES ('SOLH-0029', '72', 'P01');
INSERT INTO `tkeputusan` VALUES ('SOLH-0029', '9', 'P02');
INSERT INTO `tkeputusan` VALUES ('SOLH-0030', '58', 'P01');
INSERT INTO `tkeputusan` VALUES ('SOLH-0030', '21', 'P02');
INSERT INTO `tkeputusan` VALUES ('SOLH-0031', '63', 'P01');
INSERT INTO `tkeputusan` VALUES ('SOLH-0032', '60', 'P01');
INSERT INTO `tkeputusan` VALUES ('SOLH-0032', '22', 'P009');
INSERT INTO `tkeputusan` VALUES ('SOLH-0033', '60', 'P01');
INSERT INTO `tkeputusan` VALUES ('SOLH-0033', '22', 'P009');
INSERT INTO `tkeputusan` VALUES ('SOLH-0034', '60', 'P01');
INSERT INTO `tkeputusan` VALUES ('SOLH-0034', '22', 'P009');
INSERT INTO `tkeputusan` VALUES ('SOLH-0035', '60', 'P01');
INSERT INTO `tkeputusan` VALUES ('SOLH-0035', '22', 'P009');
INSERT INTO `tkeputusan` VALUES ('SOLH-0036', '60', 'P01');
INSERT INTO `tkeputusan` VALUES ('SOLH-0036', '22', 'P009');
INSERT INTO `tkeputusan` VALUES ('SOLH-0037', '60', 'P01');
INSERT INTO `tkeputusan` VALUES ('SOLH-0037', '22', 'P009');
INSERT INTO `tkeputusan` VALUES ('SOLH-0038', '60', 'P01');
INSERT INTO `tkeputusan` VALUES ('SOLH-0038', '22', 'P009');
INSERT INTO `tkeputusan` VALUES ('SOLH-0039', '60', 'P01');
INSERT INTO `tkeputusan` VALUES ('SOLH-0039', '22', 'P009');
INSERT INTO `tkeputusan` VALUES ('SOLH-0040', '60', 'P01');
INSERT INTO `tkeputusan` VALUES ('SOLH-0040', '22', 'P009');
INSERT INTO `tkeputusan` VALUES ('SOLH-0041', '60', 'P01');
INSERT INTO `tkeputusan` VALUES ('SOLH-0041', '22', 'P009');
INSERT INTO `tkeputusan` VALUES ('SOLH-0042', '60', 'P01');
INSERT INTO `tkeputusan` VALUES ('SOLH-0042', '22', 'P009');
INSERT INTO `tkeputusan` VALUES ('SOLH-0043', '60', 'P01');
INSERT INTO `tkeputusan` VALUES ('SOLH-0043', '22', 'P009');
INSERT INTO `tkeputusan` VALUES ('SOLH-0044', '72', 'P01');
INSERT INTO `tkeputusan` VALUES ('SOLH-0044', '22', 'P009');
INSERT INTO `tkeputusan` VALUES ('SOLH-0045', '66', 'P01');
INSERT INTO `tkeputusan` VALUES ('SOLH-0045', '21', 'P02');
INSERT INTO `tkeputusan` VALUES ('SOLH-0045', '22', 'P009');
INSERT INTO `tkeputusan` VALUES ('SOLH-0046', '72', 'P01');
INSERT INTO `tkeputusan` VALUES ('SOLH-0046', '21', 'P02');
INSERT INTO `tkeputusan` VALUES ('SOLH-0046', '22', 'P009');
INSERT INTO `tkeputusan` VALUES ('SOLH-0047', '72', 'P01');
INSERT INTO `tkeputusan` VALUES ('SOLH-0047', '22', 'P009');
INSERT INTO `tkeputusan` VALUES ('SOLH-0048', '72', 'P01');
INSERT INTO `tkeputusan` VALUES ('SOLH-0048', '21', 'P02');
INSERT INTO `tkeputusan` VALUES ('SOLH-0048', '22', 'P009');
INSERT INTO `tkeputusan` VALUES ('SOLH-0049', '72', 'P01');
INSERT INTO `tkeputusan` VALUES ('SOLH-0049', '21', 'P02');
INSERT INTO `tkeputusan` VALUES ('SOLH-0049', '22', 'P009');
INSERT INTO `tkeputusan` VALUES ('SOLH-0050', '66', 'P01');
INSERT INTO `tkeputusan` VALUES ('SOLH-0050', '22', 'P009');
INSERT INTO `tkeputusan` VALUES ('SOLH-0051', '66', 'P01');
INSERT INTO `tkeputusan` VALUES ('SOLH-0051', '22', 'P02');
INSERT INTO `tkeputusan` VALUES ('SOLH-0051', '24', 'P03');
INSERT INTO `tkeputusan` VALUES ('SOLH-0051', '22', 'P009');
INSERT INTO `tkeputusan` VALUES ('SOLH-0052', '72', 'P01');
INSERT INTO `tkeputusan` VALUES ('SOLH-0052', '40', 'P02');
INSERT INTO `tkeputusan` VALUES ('SOLH-0052', '12.75', 'P03');
INSERT INTO `tkeputusan` VALUES ('SOLH-0052', '22', 'P009');
INSERT INTO `tkeputusan` VALUES ('SOLH-0053', '58.5', 'P01');
INSERT INTO `tkeputusan` VALUES ('SOLH-0053', '9', 'P02');

-- ----------------------------
-- Table structure for tkonsul_d
-- ----------------------------
DROP TABLE IF EXISTS `tkonsul_d`;
CREATE TABLE `tkonsul_d`  (
  `kd_konsul_d` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kd_konsul_h` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kd_gejala` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`kd_konsul_d`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tkonsul_d
-- ----------------------------
INSERT INTO `tkonsul_d` VALUES ('SOLD-0001', 'SOLH-0001', 'G13');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0002', 'SOLH-0001', 'G22');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0003', 'SOLH-0001', 'G23');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0004', 'SOLH-0001', 'G24');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0005', 'SOLH-0002', 'G01');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0006', 'SOLH-0002', 'G02');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0007', 'SOLH-0002', 'G03');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0008', 'SOLH-0002', 'G04');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0009', 'SOLH-0002', 'G05');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0010', 'SOLH-0003', 'G01');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0011', 'SOLH-0003', 'G02');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0012', 'SOLH-0003', 'G03');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0013', 'SOLH-0003', 'G04');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0014', 'SOLH-0003', 'G05');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0015', 'SOLH-0004', 'G01');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0016', 'SOLH-0004', 'G02');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0017', 'SOLH-0004', 'G03');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0018', 'SOLH-0004', 'G04');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0019', 'SOLH-0004', 'G05');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0020', 'SOLH-0004', 'G06');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0021', 'SOLH-0004', 'G08');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0022', 'SOLH-0005', 'G01');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0023', 'SOLH-0005', 'G02');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0024', 'SOLH-0005', 'G03');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0025', 'SOLH-0005', 'G04');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0026', 'SOLH-0005', 'G05');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0027', 'SOLH-0005', 'G06');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0028', 'SOLH-0005', 'G08');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0029', 'SOLH-0006', 'G01');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0030', 'SOLH-0006', 'G02');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0031', 'SOLH-0006', 'G03');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0032', 'SOLH-0006', 'G04');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0033', 'SOLH-0006', 'G05');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0034', 'SOLH-0006', 'G06');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0035', 'SOLH-0007', 'G01');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0036', 'SOLH-0007', 'G02');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0037', 'SOLH-0007', 'G03');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0038', 'SOLH-0007', 'G04');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0039', 'SOLH-0007', 'G05');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0040', 'SOLH-0007', 'G06');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0041', 'SOLH-0007', 'G08');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0042', 'SOLH-0008', 'G01');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0043', 'SOLH-0008', 'G02');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0044', 'SOLH-0008', 'G03');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0045', 'SOLH-0008', 'G04');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0046', 'SOLH-0008', 'G05');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0047', 'SOLH-0008', 'G06');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0048', 'SOLH-0008', 'G07');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0049', 'SOLH-0009', 'G01');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0050', 'SOLH-0009', 'G02');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0051', 'SOLH-0009', 'G03');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0052', 'SOLH-0009', 'G04');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0053', 'SOLH-0009', 'G05');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0054', 'SOLH-0010', 'G01');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0055', 'SOLH-0010', 'G02');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0056', 'SOLH-0010', 'G03');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0057', 'SOLH-0010', 'G04');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0058', 'SOLH-0010', 'G05');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0059', 'SOLH-0011', 'G01');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0060', 'SOLH-0011', 'G02');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0061', 'SOLH-0011', 'G03');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0062', 'SOLH-0011', 'G04');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0063', 'SOLH-0011', 'G05');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0064', 'SOLH-0012', 'G01');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0065', 'SOLH-0012', 'G02');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0066', 'SOLH-0012', 'G03');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0067', 'SOLH-0012', 'G04');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0068', 'SOLH-0012', 'G05');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0069', 'SOLH-0013', 'G01');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0070', 'SOLH-0013', 'G02');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0071', 'SOLH-0013', 'G03');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0072', 'SOLH-0013', 'G04');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0073', 'SOLH-0013', 'G05');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0074', 'SOLH-0013', 'G06');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0075', 'SOLH-0013', 'G07');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0076', 'SOLH-0013', 'G08');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0077', 'SOLH-0013', 'G10');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0078', 'SOLH-0013', 'G11');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0079', 'SOLH-0013', 'G12');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0080', 'SOLH-0013', 'G14');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0081', 'SOLH-0013', 'G15');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0082', 'SOLH-0014', 'G01');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0083', 'SOLH-0014', 'G02');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0084', 'SOLH-0014', 'G03');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0085', 'SOLH-0014', 'G04');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0086', 'SOLH-0014', 'G05');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0087', 'SOLH-0014', 'G06');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0088', 'SOLH-0014', 'G07');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0089', 'SOLH-0014', 'G08');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0090', 'SOLH-0014', 'G10');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0091', 'SOLH-0014', 'G11');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0092', 'SOLH-0014', 'G12');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0093', 'SOLH-0014', 'G14');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0094', 'SOLH-0014', 'G15');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0095', 'SOLH-0015', 'G01');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0096', 'SOLH-0015', 'G02');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0097', 'SOLH-0015', 'G03');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0098', 'SOLH-0015', 'G04');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0099', 'SOLH-0015', 'G05');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0100', 'SOLH-0015', 'G06');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0101', 'SOLH-0015', 'G07');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0102', 'SOLH-0015', 'G08');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0103', 'SOLH-0015', 'G09');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0104', 'SOLH-0015', 'G11');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0105', 'SOLH-0015', 'G13');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0106', 'SOLH-0015', 'G14');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0107', 'SOLH-0016', 'G01');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0108', 'SOLH-0016', 'G02');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0109', 'SOLH-0016', 'G03');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0110', 'SOLH-0016', 'G04');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0111', 'SOLH-0016', 'G05');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0112', 'SOLH-0016', 'G06');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0113', 'SOLH-0016', 'G07');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0114', 'SOLH-0016', 'G08');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0115', 'SOLH-0016', 'G09');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0116', 'SOLH-0016', 'G10');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0117', 'SOLH-0016', 'G14');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0118', 'SOLH-0016', 'G15');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0119', 'SOLH-0016', 'G16');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0120', 'SOLH-0017', 'G01');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0121', 'SOLH-0017', 'G02');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0122', 'SOLH-0017', 'G03');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0123', 'SOLH-0017', 'G04');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0124', 'SOLH-0017', 'G05');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0125', 'SOLH-0017', 'G06');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0126', 'SOLH-0017', 'G07');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0127', 'SOLH-0017', 'G08');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0128', 'SOLH-0017', 'G09');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0129', 'SOLH-0017', 'G14');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0130', 'SOLH-0017', 'G16');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0131', 'SOLH-0017', 'G17');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0132', 'SOLH-0018', 'G01');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0133', 'SOLH-0018', 'G02');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0134', 'SOLH-0018', 'G04');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0135', 'SOLH-0018', 'G05');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0136', 'SOLH-0018', 'G06');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0137', 'SOLH-0018', 'G07');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0138', 'SOLH-0018', 'G08');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0139', 'SOLH-0018', 'G09');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0140', 'SOLH-0018', 'G10');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0141', 'SOLH-0018', 'G11');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0142', 'SOLH-0018', 'G12');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0143', 'SOLH-0018', 'G13');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0144', 'SOLH-0018', 'G14');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0145', 'SOLH-0018', 'G15');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0146', 'SOLH-0018', 'G16');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0147', 'SOLH-0018', 'G17');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0148', 'SOLH-0018', 'G18');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0149', 'SOLH-0019', 'G01');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0150', 'SOLH-0019', 'G02');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0151', 'SOLH-0019', 'G04');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0152', 'SOLH-0019', 'G05');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0153', 'SOLH-0019', 'G06');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0154', 'SOLH-0019', 'G07');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0155', 'SOLH-0019', 'G08');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0156', 'SOLH-0019', 'G09');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0157', 'SOLH-0019', 'G10');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0158', 'SOLH-0019', 'G11');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0159', 'SOLH-0019', 'G12');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0160', 'SOLH-0019', 'G13');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0161', 'SOLH-0019', 'G14');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0162', 'SOLH-0019', 'G15');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0163', 'SOLH-0019', 'G16');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0164', 'SOLH-0019', 'G17');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0165', 'SOLH-0019', 'G18');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0166', 'SOLH-0020', 'G01');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0167', 'SOLH-0020', 'G02');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0168', 'SOLH-0020', 'G04');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0169', 'SOLH-0020', 'G05');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0170', 'SOLH-0020', 'G06');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0171', 'SOLH-0020', 'G07');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0172', 'SOLH-0020', 'G08');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0173', 'SOLH-0020', 'G09');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0174', 'SOLH-0020', 'G10');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0175', 'SOLH-0020', 'G11');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0176', 'SOLH-0020', 'G12');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0177', 'SOLH-0020', 'G13');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0178', 'SOLH-0020', 'G14');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0179', 'SOLH-0020', 'G15');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0180', 'SOLH-0020', 'G16');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0181', 'SOLH-0020', 'G17');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0182', 'SOLH-0020', 'G18');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0183', 'SOLH-0021', 'G01');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0184', 'SOLH-0021', 'G02');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0185', 'SOLH-0021', 'G04');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0186', 'SOLH-0021', 'G05');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0187', 'SOLH-0021', 'G06');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0188', 'SOLH-0021', 'G07');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0189', 'SOLH-0021', 'G08');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0190', 'SOLH-0021', 'G09');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0191', 'SOLH-0021', 'G10');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0192', 'SOLH-0021', 'G11');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0193', 'SOLH-0021', 'G12');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0194', 'SOLH-0021', 'G13');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0195', 'SOLH-0021', 'G14');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0196', 'SOLH-0021', 'G15');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0197', 'SOLH-0021', 'G16');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0198', 'SOLH-0021', 'G17');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0199', 'SOLH-0021', 'G18');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0200', 'SOLH-0022', 'G01');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0201', 'SOLH-0022', 'G02');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0202', 'SOLH-0022', 'G03');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0203', 'SOLH-0022', 'G04');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0204', 'SOLH-0022', 'G05');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0205', 'SOLH-0022', 'G06');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0206', 'SOLH-0022', 'G07');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0207', 'SOLH-0022', 'G08');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0208', 'SOLH-0022', 'G09');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0209', 'SOLH-0022', 'G22');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0210', 'SOLH-0022', 'G26');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0211', 'SOLH-0023', 'G01');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0212', 'SOLH-0023', 'G02');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0213', 'SOLH-0023', 'G03');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0214', 'SOLH-0023', 'G04');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0215', 'SOLH-0023', 'G05');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0216', 'SOLH-0023', 'G06');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0217', 'SOLH-0023', 'G07');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0218', 'SOLH-0023', 'G08');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0219', 'SOLH-0023', 'G09');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0220', 'SOLH-0023', 'G11');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0221', 'SOLH-0023', 'G12');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0222', 'SOLH-0023', 'G16');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0223', 'SOLH-0023', 'G19');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0224', 'SOLH-0024', 'G01');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0225', 'SOLH-0024', 'G02');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0226', 'SOLH-0024', 'G03');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0227', 'SOLH-0024', 'G04');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0228', 'SOLH-0024', 'G05');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0229', 'SOLH-0024', 'G06');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0230', 'SOLH-0024', 'G07');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0231', 'SOLH-0024', 'G08');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0232', 'SOLH-0024', 'G24');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0233', 'SOLH-0025', 'G01');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0234', 'SOLH-0025', 'G02');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0235', 'SOLH-0025', 'G03');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0236', 'SOLH-0025', 'G04');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0237', 'SOLH-0025', 'G05');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0238', 'SOLH-0025', 'G06');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0239', 'SOLH-0025', 'G07');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0240', 'SOLH-0025', 'G08');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0241', 'SOLH-0025', 'G20');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0242', 'SOLH-0026', 'G02');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0243', 'SOLH-0026', 'G03');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0244', 'SOLH-0026', 'G04');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0245', 'SOLH-0026', 'G05');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0246', 'SOLH-0026', 'G06');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0247', 'SOLH-0026', 'G07');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0248', 'SOLH-0026', 'G08');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0249', 'SOLH-0026', 'G09');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0250', 'SOLH-0026', 'G11');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0251', 'SOLH-0027', 'G13');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0252', 'SOLH-0027', 'G16');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0253', 'SOLH-0027', 'G17');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0254', 'SOLH-0027', 'G18');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0255', 'SOLH-0027', 'G19');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0256', 'SOLH-0027', 'G20');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0257', 'SOLH-0027', 'G21');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0258', 'SOLH-0027', 'G22');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0259', 'SOLH-0027', 'G23');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0260', 'SOLH-0028', 'G01');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0261', 'SOLH-0028', 'G04');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0262', 'SOLH-0028', 'G05');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0263', 'SOLH-0028', 'G06');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0264', 'SOLH-0028', 'G07');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0265', 'SOLH-0028', 'G08');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0266', 'SOLH-0028', 'G09');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0267', 'SOLH-0028', 'G10');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0268', 'SOLH-0028', 'G11');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0269', 'SOLH-0028', 'G12');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0270', 'SOLH-0029', 'G01');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0271', 'SOLH-0029', 'G02');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0272', 'SOLH-0029', 'G03');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0273', 'SOLH-0029', 'G04');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0274', 'SOLH-0029', 'G05');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0275', 'SOLH-0029', 'G06');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0276', 'SOLH-0029', 'G07');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0277', 'SOLH-0029', 'G08');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0278', 'SOLH-0029', 'G11');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0279', 'SOLH-0030', 'G01');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0280', 'SOLH-0030', 'G02');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0281', 'SOLH-0030', 'G04');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0282', 'SOLH-0030', 'G05');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0283', 'SOLH-0030', 'G06');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0284', 'SOLH-0030', 'G09');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0285', 'SOLH-0031', 'G01');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0286', 'SOLH-0031', 'G02');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0287', 'SOLH-0031', 'G03');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0288', 'SOLH-0031', 'G04');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0289', 'SOLH-0031', 'G05');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0290', 'SOLH-0031', 'G07');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0291', 'SOLH-0032', 'G01');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0292', 'SOLH-0032', 'G02');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0293', 'SOLH-0032', 'G03');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0294', 'SOLH-0032', 'G04');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0295', 'SOLH-0032', 'G05');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0296', 'SOLH-0033', 'G01');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0297', 'SOLH-0033', 'G02');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0298', 'SOLH-0033', 'G03');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0299', 'SOLH-0033', 'G04');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0300', 'SOLH-0033', 'G05');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0301', 'SOLH-0034', 'G01');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0302', 'SOLH-0034', 'G02');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0303', 'SOLH-0034', 'G03');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0304', 'SOLH-0034', 'G04');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0305', 'SOLH-0034', 'G05');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0306', 'SOLH-0035', 'G01');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0307', 'SOLH-0035', 'G02');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0308', 'SOLH-0035', 'G03');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0309', 'SOLH-0035', 'G04');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0310', 'SOLH-0035', 'G05');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0311', 'SOLH-0036', 'G01');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0312', 'SOLH-0036', 'G02');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0313', 'SOLH-0036', 'G03');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0314', 'SOLH-0036', 'G04');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0315', 'SOLH-0036', 'G05');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0316', 'SOLH-0037', 'G01');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0317', 'SOLH-0037', 'G02');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0318', 'SOLH-0037', 'G03');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0319', 'SOLH-0037', 'G04');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0320', 'SOLH-0037', 'G05');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0321', 'SOLH-0038', 'G01');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0322', 'SOLH-0038', 'G02');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0323', 'SOLH-0038', 'G03');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0324', 'SOLH-0038', 'G04');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0325', 'SOLH-0038', 'G05');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0326', 'SOLH-0039', 'G01');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0327', 'SOLH-0039', 'G02');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0328', 'SOLH-0039', 'G03');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0329', 'SOLH-0039', 'G04');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0330', 'SOLH-0039', 'G05');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0331', 'SOLH-0040', 'G01');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0332', 'SOLH-0040', 'G02');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0333', 'SOLH-0040', 'G03');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0334', 'SOLH-0040', 'G04');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0335', 'SOLH-0040', 'G05');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0336', 'SOLH-0041', 'G01');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0337', 'SOLH-0041', 'G02');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0338', 'SOLH-0041', 'G03');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0339', 'SOLH-0041', 'G04');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0340', 'SOLH-0041', 'G05');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0341', 'SOLH-0042', 'G01');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0342', 'SOLH-0042', 'G02');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0343', 'SOLH-0042', 'G03');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0344', 'SOLH-0042', 'G04');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0345', 'SOLH-0042', 'G05');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0346', 'SOLH-0043', 'G01');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0347', 'SOLH-0043', 'G02');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0348', 'SOLH-0043', 'G03');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0349', 'SOLH-0043', 'G04');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0350', 'SOLH-0043', 'G05');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0351', 'SOLH-0044', 'G01');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0352', 'SOLH-0044', 'G02');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0353', 'SOLH-0044', 'G03');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0354', 'SOLH-0044', 'G04');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0355', 'SOLH-0044', 'G05');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0356', 'SOLH-0044', 'G06');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0357', 'SOLH-0044', 'G07');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0358', 'SOLH-0044', 'G08');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0359', 'SOLH-0045', 'G01');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0360', 'SOLH-0045', 'G02');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0361', 'SOLH-0045', 'G03');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0362', 'SOLH-0045', 'G04');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0363', 'SOLH-0045', 'G05');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0364', 'SOLH-0045', 'G07');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0365', 'SOLH-0045', 'G08');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0366', 'SOLH-0045', 'G09');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0367', 'SOLH-0046', 'G01');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0368', 'SOLH-0046', 'G02');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0369', 'SOLH-0046', 'G03');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0370', 'SOLH-0046', 'G04');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0371', 'SOLH-0046', 'G05');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0372', 'SOLH-0046', 'G06');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0373', 'SOLH-0046', 'G07');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0374', 'SOLH-0046', 'G08');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0375', 'SOLH-0046', 'G09');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0376', 'SOLH-0047', 'G01');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0377', 'SOLH-0047', 'G02');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0378', 'SOLH-0047', 'G03');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0379', 'SOLH-0047', 'G04');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0380', 'SOLH-0047', 'G05');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0381', 'SOLH-0047', 'G06');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0382', 'SOLH-0047', 'G07');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0383', 'SOLH-0047', 'G08');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0384', 'SOLH-0048', 'G01');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0385', 'SOLH-0048', 'G02');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0386', 'SOLH-0048', 'G03');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0387', 'SOLH-0048', 'G04');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0388', 'SOLH-0048', 'G05');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0389', 'SOLH-0048', 'G06');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0390', 'SOLH-0048', 'G07');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0391', 'SOLH-0048', 'G08');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0392', 'SOLH-0048', 'G09');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0393', 'SOLH-0049', 'G01');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0394', 'SOLH-0049', 'G02');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0395', 'SOLH-0049', 'G03');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0396', 'SOLH-0049', 'G04');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0397', 'SOLH-0049', 'G05');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0398', 'SOLH-0049', 'G06');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0399', 'SOLH-0049', 'G07');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0400', 'SOLH-0049', 'G08');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0401', 'SOLH-0049', 'G09');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0402', 'SOLH-0050', 'G01');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0403', 'SOLH-0050', 'G02');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0404', 'SOLH-0050', 'G03');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0405', 'SOLH-0050', 'G04');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0406', 'SOLH-0050', 'G05');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0407', 'SOLH-0050', 'G06');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0408', 'SOLH-0051', 'G01');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0409', 'SOLH-0051', 'G02');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0410', 'SOLH-0051', 'G03');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0411', 'SOLH-0051', 'G04');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0412', 'SOLH-0051', 'G05');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0413', 'SOLH-0051', 'G06');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0414', 'SOLH-0051', 'G09');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0415', 'SOLH-0051', 'G12');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0416', 'SOLH-0051', 'G15');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0417', 'SOLH-0052', 'G01');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0418', 'SOLH-0052', 'G02');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0419', 'SOLH-0052', 'G03');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0420', 'SOLH-0052', 'G04');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0421', 'SOLH-0052', 'G05');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0422', 'SOLH-0052', 'G06');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0423', 'SOLH-0052', 'G07');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0424', 'SOLH-0052', 'G08');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0425', 'SOLH-0052', 'G09');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0426', 'SOLH-0052', 'G10');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0427', 'SOLH-0052', 'G11');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0428', 'SOLH-0052', 'G12');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0429', 'SOLH-0052', 'G13');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0430', 'SOLH-0052', 'G14');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0431', 'SOLH-0053', 'G04');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0432', 'SOLH-0053', 'G05');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0433', 'SOLH-0053', 'G06');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0434', 'SOLH-0053', 'G08');
INSERT INTO `tkonsul_d` VALUES ('SOLD-0435', 'SOLH-0053', 'G11');

-- ----------------------------
-- Table structure for tkonsultasi_h
-- ----------------------------
DROP TABLE IF EXISTS `tkonsultasi_h`;
CREATE TABLE `tkonsultasi_h`  (
  `kd_konsultasi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nik` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_pasien` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `alamat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `tgl_lahir` date NULL DEFAULT NULL,
  `no_hp` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tgl_input` date NULL DEFAULT NULL,
  `usia` int NULL DEFAULT NULL,
  `jenis_kelamin` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`kd_konsultasi`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tkonsultasi_h
-- ----------------------------
INSERT INTO `tkonsultasi_h` VALUES ('SOLH-0001', NULL, 'adasd', 'asd', '2022-11-18', '0800', '2022-11-08', NULL, NULL);
INSERT INTO `tkonsultasi_h` VALUES ('SOLH-0002', NULL, 'sadsad', 'asdasd', '2022-11-16', '123213', '2022-11-08', NULL, NULL);
INSERT INTO `tkonsultasi_h` VALUES ('SOLH-0003', NULL, 'sadsad', 'asdasd', '2022-11-16', '123213', '2022-11-08', NULL, NULL);
INSERT INTO `tkonsultasi_h` VALUES ('SOLH-0004', NULL, 'asdsa', 'wdasd', '2022-12-31', '23213', '2022-11-08', NULL, NULL);
INSERT INTO `tkonsultasi_h` VALUES ('SOLH-0005', NULL, 'asdsa', 'wdasd', '2022-12-31', '23213', '2022-11-08', NULL, NULL);
INSERT INTO `tkonsultasi_h` VALUES ('SOLH-0006', NULL, 'dasd', 'sdsad', '2022-12-30', '23213', '2022-11-08', NULL, NULL);
INSERT INTO `tkonsultasi_h` VALUES ('SOLH-0007', NULL, 'asdsad', 'dsad', '2022-12-31', '123213213', '2022-11-08', NULL, NULL);
INSERT INTO `tkonsultasi_h` VALUES ('SOLH-0008', NULL, 'adsad', 'sadasd', '2022-12-31', '123213', '2022-11-08', NULL, NULL);
INSERT INTO `tkonsultasi_h` VALUES ('SOLH-0009', NULL, 'asdsad', 'asdasdasd', '2022-12-31', '21323', '2022-11-08', NULL, NULL);
INSERT INTO `tkonsultasi_h` VALUES ('SOLH-0010', NULL, 'asdsad', 'asdsad', '2022-12-31', '213213', '2022-11-08', NULL, NULL);
INSERT INTO `tkonsultasi_h` VALUES ('SOLH-0011', NULL, 'asdsad', 'asdsad', '2022-12-31', '213213', '2022-11-08', NULL, NULL);
INSERT INTO `tkonsultasi_h` VALUES ('SOLH-0012', NULL, 'afasfas', 'dsad', '2022-12-31', '123123', '2022-11-08', NULL, NULL);
INSERT INTO `tkonsultasi_h` VALUES ('SOLH-0013', NULL, '', '', '2022-12-31', '', '2022-11-08', NULL, NULL);
INSERT INTO `tkonsultasi_h` VALUES ('SOLH-0014', NULL, '', '', '2022-12-31', '', '2022-11-08', NULL, NULL);
INSERT INTO `tkonsultasi_h` VALUES ('SOLH-0015', NULL, 'adsd', 'asdasd', '2022-12-31', '13123', '2022-11-08', NULL, NULL);
INSERT INTO `tkonsultasi_h` VALUES ('SOLH-0016', NULL, 'asdsad', 'sadasd', '2022-11-15', '12321321', '2022-11-08', NULL, NULL);
INSERT INTO `tkonsultasi_h` VALUES ('SOLH-0017', NULL, '', '', '2022-11-17', '', '2022-11-08', NULL, NULL);
INSERT INTO `tkonsultasi_h` VALUES ('SOLH-0018', NULL, 'asdsad', 'asdsa', '2022-11-17', '213213213', '2022-11-08', NULL, NULL);
INSERT INTO `tkonsultasi_h` VALUES ('SOLH-0019', NULL, 'asdsad', 'asdsa', '2022-11-17', '213213213', '2022-11-08', NULL, NULL);
INSERT INTO `tkonsultasi_h` VALUES ('SOLH-0020', NULL, 'asdsad', 'asdsa', '2022-11-17', '213213213', '2022-11-08', NULL, NULL);
INSERT INTO `tkonsultasi_h` VALUES ('SOLH-0021', NULL, 'asdsad', 'asdsa', '2022-11-17', '213213213', '2022-11-08', NULL, NULL);
INSERT INTO `tkonsultasi_h` VALUES ('SOLH-0022', NULL, 'adsadsadsa', 'adsad', '2022-11-16', '3123213', '2022-11-08', NULL, NULL);
INSERT INTO `tkonsultasi_h` VALUES ('SOLH-0023', NULL, 'dasdsad', 'dsad', '2022-11-15', '1232131', '2022-11-08', NULL, NULL);
INSERT INTO `tkonsultasi_h` VALUES ('SOLH-0024', NULL, 'coba', 'asdasd', '2022-12-31', '321321', '2022-11-10', NULL, NULL);
INSERT INTO `tkonsultasi_h` VALUES ('SOLH-0025', NULL, 'sadsad', 'asdsa', '2022-11-17', '132213', '2022-11-10', NULL, NULL);
INSERT INTO `tkonsultasi_h` VALUES ('SOLH-0026', NULL, 'CEK', 'sdasd', '2022-12-31', '3123213', '2022-11-11', NULL, NULL);
INSERT INTO `tkonsultasi_h` VALUES ('SOLH-0027', NULL, 'uyuy', 'dfsf', '2022-12-31', '3123213', '2022-11-14', NULL, NULL);
INSERT INTO `tkonsultasi_h` VALUES ('SOLH-0028', NULL, 'hai', 'hai', '2022-12-31', '013902193021', '2022-11-15', NULL, NULL);
INSERT INTO `tkonsultasi_h` VALUES ('SOLH-0029', NULL, 'aa', 'adas', '2022-12-31', '13213213', '2022-12-03', NULL, NULL);
INSERT INTO `tkonsultasi_h` VALUES ('SOLH-0030', NULL, 'COBA', 'aadsad', '2022-12-31', '123123213', '2022-12-11', NULL, NULL);
INSERT INTO `tkonsultasi_h` VALUES ('SOLH-0031', NULL, 'oke', 'ooke', '2022-12-11', '0000122', '2022-12-12', NULL, NULL);
INSERT INTO `tkonsultasi_h` VALUES ('SOLH-0032', '344141241232', 'adasdasd', 'sadsadad', '2022-12-31', '12312321323', '2022-12-16', NULL, NULL);
INSERT INTO `tkonsultasi_h` VALUES ('SOLH-0033', '344141241232', 'adasdasd', 'sadsadad', '2022-12-31', '12312321323', '2022-12-16', NULL, NULL);
INSERT INTO `tkonsultasi_h` VALUES ('SOLH-0034', '344141241232', 'adasdasd', 'sadsadad', '2022-12-31', '12312321323', '2022-12-16', NULL, NULL);
INSERT INTO `tkonsultasi_h` VALUES ('SOLH-0035', '344141241232', 'adasdasd', 'sadsadad', '2022-12-31', '12312321323', '2022-12-16', NULL, NULL);
INSERT INTO `tkonsultasi_h` VALUES ('SOLH-0036', '344141241232', 'adasdasd', 'sadsadad', '2022-12-31', '12312321323', '2022-12-16', NULL, NULL);
INSERT INTO `tkonsultasi_h` VALUES ('SOLH-0037', '344141241232', 'adasdasd', 'sadsadad', '2022-12-31', '12312321323', '2022-12-16', NULL, NULL);
INSERT INTO `tkonsultasi_h` VALUES ('SOLH-0038', '344141241232', 'adasdasd', 'sadsadad', '2022-12-31', '12312321323', '2022-12-16', NULL, NULL);
INSERT INTO `tkonsultasi_h` VALUES ('SOLH-0039', '344141241232', 'adasdasd', 'sadsadad', '2022-12-31', '12312321323', '2022-12-16', NULL, NULL);
INSERT INTO `tkonsultasi_h` VALUES ('SOLH-0040', '344141241232', 'adasdasd', 'sadsadad', '2022-12-31', '12312321323', '2022-12-16', NULL, NULL);
INSERT INTO `tkonsultasi_h` VALUES ('SOLH-0041', '344141241232', 'adasdasd', 'sadsadad', '2022-12-31', '12312321323', '2022-12-16', NULL, NULL);
INSERT INTO `tkonsultasi_h` VALUES ('SOLH-0042', '344141241232', 'adasdasd', 'sadsadad', '2022-12-31', '12312321323', '2022-12-16', NULL, NULL);
INSERT INTO `tkonsultasi_h` VALUES ('SOLH-0043', '344141241232', 'adasdasd', 'sadsadad', '2022-12-31', '12312321323', '2022-12-16', NULL, NULL);
INSERT INTO `tkonsultasi_h` VALUES ('SOLH-0044', '312362136263', 'adsadsa', 'asdasd', '2022-12-31', '123123213', '2022-12-16', NULL, NULL);
INSERT INTO `tkonsultasi_h` VALUES ('SOLH-0045', '41736172376132', 'fsfsdf', 'adaad', '2022-12-31', '122312323', '2022-12-18', 0, NULL);
INSERT INTO `tkonsultasi_h` VALUES ('SOLH-0046', '31287318238712387', 'asdasd', 'asdasd', '2016-12-31', '123213', '2022-12-18', 5, NULL);
INSERT INTO `tkonsultasi_h` VALUES ('SOLH-0047', NULL, 'oke', 'ooke', '2016-12-11', '0000122', '2022-12-18', 6, NULL);
INSERT INTO `tkonsultasi_h` VALUES ('SOLH-0048', '17387123', 'ahdjsahdj', 'asdasd', '2001-12-01', '23213', '2022-12-18', 21, NULL);
INSERT INTO `tkonsultasi_h` VALUES ('SOLH-0049', '4732848324723', 'fhsdfkhs', 'fdsf', '2015-12-31', '123213', '2022-12-18', 6, NULL);
INSERT INTO `tkonsultasi_h` VALUES ('SOLH-0050', '213123213', 'dadsad', 'sdfdsf', '2011-12-31', '123123213', '2022-12-18', 10, 'laki-laki');
INSERT INTO `tkonsultasi_h` VALUES ('SOLH-0051', '213123213', 'dadsad', 'sdfdsf', '2011-12-31', '123123213', '2022-12-18', 10, 'laki-laki');
INSERT INTO `tkonsultasi_h` VALUES ('SOLH-0052', '123213123', 'dasdasd', 'ddas', '2016-12-31', '2324', '2022-12-18', 5, 'perempuan');
INSERT INTO `tkonsultasi_h` VALUES ('SOLH-0053', NULL, 'oke', 'ooke', '2022-12-11', '0000122', '2022-12-18', 0, 'laki-laki');

-- ----------------------------
-- Table structure for tpengguna
-- ----------------------------
DROP TABLE IF EXISTS `tpengguna`;
CREATE TABLE `tpengguna`  (
  `kdpengguna` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama_lengkap` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `alamat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `tgl_lahir` date NULL DEFAULT NULL,
  `no_hp` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `akses` varchar(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `username` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `status` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT 'aktif',
  `jenis_kelamin` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nik` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`kdpengguna`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tpengguna
-- ----------------------------
INSERT INTO `tpengguna` VALUES ('PG-0001', 'admin', 'admin', '2022-11-16', '012312832193', 'adm', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'aktif', NULL, NULL);
INSERT INTO `tpengguna` VALUES ('PG-0002', 'coba', 'coba', '2022-11-19', '8888', 'psn', 'coba', '36e9498fa38e8a7e6e61709935904ef3', 'aktif', NULL, NULL);
INSERT INTO `tpengguna` VALUES ('PG-0003', 'adsadjk', 'asdasd', '2022-12-31', 'adm', 'adm', 'asdsd', 'f6fffd40e090f564a33749d66b95fa87', 'aktif', NULL, NULL);
INSERT INTO `tpengguna` VALUES ('PG-0004', 'hai', 'hai', '2022-12-31', '013902193021', 'psn', 'hai', '42810cb02db3bb2cbb428af0d8b0376e', 'tidak_aktif', NULL, NULL);
INSERT INTO `tpengguna` VALUES ('PG-0005', 'oke', 'ooke', '2022-12-11', '0000122', 'psn', 'oke', '0079fcb602361af76c4fd616d60f9414', 'aktif', 'perempuan', '434324324');
INSERT INTO `tpengguna` VALUES ('PG-0006', 'okeoke', 'oke', '2022-12-31', '0101020', 'psn', 'okeoke', '90c672b95f63c0e7a10893084f8184af', 'aktif', NULL, NULL);
INSERT INTO `tpengguna` VALUES ('PG-0007', 'itu', 'itu', '2022-12-31', '0000', 'psn', 'itu', '6b79a69eb7d09788acb81710c0ac5ac7', 'tidak_aktif', 'laki-laki', '474474744747');

-- ----------------------------
-- Table structure for tpenyakit
-- ----------------------------
DROP TABLE IF EXISTS `tpenyakit`;
CREATE TABLE `tpenyakit`  (
  `kode_penyakit` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama_penyakit` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`kode_penyakit`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tpenyakit
-- ----------------------------
INSERT INTO `tpenyakit` VALUES ('P009', 'COBA', NULL);
INSERT INTO `tpenyakit` VALUES ('P01', 'Maag (Gastritis)', NULL);
INSERT INTO `tpenyakit` VALUES ('P02', 'Dispepsia', NULL);
INSERT INTO `tpenyakit` VALUES ('P03', 'Gastroesofagus Refluks Disease (GERD)', NULL);

-- ----------------------------
-- Table structure for tsetting_d
-- ----------------------------
DROP TABLE IF EXISTS `tsetting_d`;
CREATE TABLE `tsetting_d`  (
  `kode_set_d` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kode_setting` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kode_gejala` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`kode_set_d`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tsetting_d
-- ----------------------------
INSERT INTO `tsetting_d` VALUES ('SETD-0001', '', 'G01');
INSERT INTO `tsetting_d` VALUES ('SETD-0002', 'SET-0001', 'G01');
INSERT INTO `tsetting_d` VALUES ('SETD-0003', 'SET-0001', 'G02');
INSERT INTO `tsetting_d` VALUES ('SETD-0004', 'SET-0001', 'G03');
INSERT INTO `tsetting_d` VALUES ('SETD-0005', 'SET-0001', 'G04');
INSERT INTO `tsetting_d` VALUES ('SETD-0006', 'SET-0001', 'G05');
INSERT INTO `tsetting_d` VALUES ('SETD-0007', 'SET-0001', 'G06');
INSERT INTO `tsetting_d` VALUES ('SETD-0008', 'SET-0001', 'G07');
INSERT INTO `tsetting_d` VALUES ('SETD-0009', 'SET-0001', 'G08');
INSERT INTO `tsetting_d` VALUES ('SETD-0010', 'SET-0002', 'G12');
INSERT INTO `tsetting_d` VALUES ('SETD-0011', 'SET-0002', 'G11');
INSERT INTO `tsetting_d` VALUES ('SETD-0012', 'SET-0002', 'G09');
INSERT INTO `tsetting_d` VALUES ('SETD-0013', 'SET-0003', 'G13');
INSERT INTO `tsetting_d` VALUES ('SETD-0014', 'SET-0003', 'G15');
INSERT INTO `tsetting_d` VALUES ('SETD-0015', 'SET-0003', 'G17');
INSERT INTO `tsetting_d` VALUES ('SETD-0016', 'SET-0003', 'G18');
INSERT INTO `tsetting_d` VALUES ('SETD-0017', 'SET-0003', 'G19');
INSERT INTO `tsetting_d` VALUES ('SETD-0018', 'SET-0003', 'G20');
INSERT INTO `tsetting_d` VALUES ('SETD-0019', 'SET-0003', 'G21');
INSERT INTO `tsetting_d` VALUES ('SETD-0020', 'SET-0004', 'G01');
INSERT INTO `tsetting_d` VALUES ('SETD-0021', 'SET-0004', 'G02');

-- ----------------------------
-- Table structure for tsetting_h
-- ----------------------------
DROP TABLE IF EXISTS `tsetting_h`;
CREATE TABLE `tsetting_h`  (
  `kode_setting` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kode_penyakit` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kode_solusi` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`kode_setting`, `kode_penyakit`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tsetting_h
-- ----------------------------
INSERT INTO `tsetting_h` VALUES ('SET-0001', 'P01', 'S01');
INSERT INTO `tsetting_h` VALUES ('SET-0002', 'P02', 'S01');
INSERT INTO `tsetting_h` VALUES ('SET-0003', 'P03', 'S01');
INSERT INTO `tsetting_h` VALUES ('SET-0004', 'P009', 'S01');

-- ----------------------------
-- Table structure for tsolusi
-- ----------------------------
DROP TABLE IF EXISTS `tsolusi`;
CREATE TABLE `tsolusi`  (
  `kode_solusi` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `solusi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`kode_solusi`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tsolusi
-- ----------------------------
INSERT INTO `tsolusi` VALUES ('S01', 'Segera dibawa kerumah sakit untuk segera ditangani oleh dokter.', NULL);

SET FOREIGN_KEY_CHECKS = 1;
