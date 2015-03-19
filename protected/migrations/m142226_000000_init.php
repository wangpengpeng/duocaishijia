<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 14-12-26
 * Time: 下午4:22
 */
	class m142226_000000_init extends CDbMigration
	{
		public function up ()
		{
			$sql = <<<'SQL'
			SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `ad`
-- ----------------------------
DROP TABLE IF EXISTS `ad`;
CREATE TABLE `ad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `url` varchar(50) NOT NULL,
  `theme` varchar(50) DEFAULT 'default',
  `content` text,
  `sort_order` int(11) NOT NULL DEFAULT '255',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ad
-- ----------------------------
INSERT INTO `ad` VALUES ('13', '预约', '/upload/yuyue/yuyueceliang.jpg', 'order/measureCheckOut', 'default', null, '0');
INSERT INTO `ad` VALUES ('14', '墙面美容', '/upload/hotAd/qiangmian.jpg', 'item/61', 'default', null, '0');
INSERT INTO `ad` VALUES ('15', '家电清洗', '/upload/hotAd/jiaju.jpg', 'item/62', 'default', '', '0');
INSERT INTO `ad` VALUES ('16', '广告', '/upload/ad/20130620024422_32634.jpg', '', '3', '', '255');
INSERT INTO `ad` VALUES ('17', '选择理由', '/upload/%E8%AE%BE%E8%AE%A11.jpg', 'order/measureCheckOut', 'default', '', '255');

-- ----------------------------
-- Table structure for `address_result`
-- ----------------------------
DROP TABLE IF EXISTS `address_result`;
CREATE TABLE `address_result` (
  `contact_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '地址库ID',
  `user_id` int(10) unsigned DEFAULT NULL,
  `contact_name` varchar(45) DEFAULT NULL COMMENT '联系人姓名',
  `country` varchar(45) DEFAULT NULL,
  `state` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `district` varchar(45) DEFAULT NULL,
  `zipcode` varchar(45) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `mobile_phone` varchar(45) DEFAULT NULL,
  `memo` text COMMENT '备注',
  `is_default` tinyint(1) unsigned DEFAULT '0',
  `create_time` int(10) unsigned DEFAULT NULL,
  `update_time` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of address_result
-- ----------------------------
INSERT INTO `address_result` VALUES ('1', '1', '小明', null, '130000', '130300', '130304', '1111111', '11111', '021-877777222', '13338888899', '', '1', '1359685567', '1359685567');
INSERT INTO `address_result` VALUES ('2', '6', '小明', null, '150000', '150200', '150202', '1420', '213.21', '00000000', '13566666666', '', '0', '1388983054', '1388983054');
INSERT INTO `address_result` VALUES ('3', '10', '123', null, '110000', '110100', '110102', '123', '123', '', '13433333333', '', '0', '1419299559', '1419299559');
INSERT INTO `address_result` VALUES ('7', '11', '123', null, '120000', '120100', '120102', '100000', '123456', '', '15345512343', '', '0', '1419477488', '1419477488');
INSERT INTO `address_result` VALUES ('8', '10', '123', null, '350000', '350200', '350205', '123', '123', '', '13433333333', '', '0', '1419574019', '1419574019');
INSERT INTO `address_result` VALUES ('9', '10', '123', null, '420000', '422800', '422802', '123', '1111111', '', '13345678901', '', '0', '1419574143', '1419574143');
INSERT INTO `address_result` VALUES ('10', '10', '123', null, '120000', '120100', '120104', '1111', '111', '', '13334567890', '', '0', '1419574161', '1419574161');
INSERT INTO `address_result` VALUES ('11', '1', '小李', null, '120000', '120100', '120104', '120000', '繁华大道111号', '', '15345566651', '', '0', '1419574575', '1419574575');
INSERT INTO `address_result` VALUES ('12', '1', '小风', null, '120000', '120100', '120104', '120000', '繁华大道111号', '', '15345566651', '', '0', '1419574589', '1419574589');
INSERT INTO `address_result` VALUES ('13', '1', '小全', null, '120000', '120100', '120104', '120000', '繁华大道111号', '', '15345566651', '', '0', '1419574600', '1419574600');
INSERT INTO `address_result` VALUES ('14', '1', '小红', null, '120000', '120100', '120104', '120000', '繁华大道111号', '', '15345566651', '', '0', '1419574609', '1419574609');
INSERT INTO `address_result` VALUES ('15', '1', '小司', null, '150000', '150300', '150304', '134567', '123', '', '12345678909', '123', '0', '1419574846', '1419574846');

-- ----------------------------
-- Table structure for `admin_user`
-- ----------------------------
DROP TABLE IF EXISTS `admin_user`;
CREATE TABLE `admin_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `profile` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of admin_user
-- ----------------------------
INSERT INTO `admin_user` VALUES ('1', 'demo', '$2a$10$.ln8efv0ruje1k5DwmNNzetuHhPcJNn2N7Wgn.ktuMuw3NC4Yomv2', 'webmaster@example.com', '');
INSERT INTO `admin_user` VALUES ('2', 'admin', '$2a$10$5nUz94KR4Tt5DcE.7IkAuObfGB//HcP/x61vQBBwaJslEj8sE.LFK', 'webmaster@example.com', '');

-- ----------------------------
-- Table structure for `admin_user2`
-- ----------------------------
DROP TABLE IF EXISTS `admin_user2`;
CREATE TABLE `admin_user2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `password_strategy` varchar(50) DEFAULT NULL,
  `requires_new_password` tinyint(1) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `login_attempts` int(11) DEFAULT NULL,
  `login_time` int(11) DEFAULT NULL,
  `login_ip` varchar(32) DEFAULT NULL,
  `validation_key` varchar(255) DEFAULT NULL,
  `create_id` int(11) DEFAULT NULL,
  `create_time` int(11) DEFAULT NULL,
  `update_id` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin_user2
-- ----------------------------
INSERT INTO `admin_user2` VALUES ('6', 'demo', '$2a$14$T.y5HFok8VztysxcQtEUoedkiZZo0q6OyJi87Svt/n7O41.YVChzW', '$2a$14$T.y5HFok8VztysxcQtEUog', 'bcrypt', null, 'demo@clevertech.biz', null, null, null, null, null, null, null, null);
INSERT INTO `admin_user2` VALUES ('7', 'admin', '$2a$14$DQ1E6wAXpsqZHkC72kRd4.cJFUtXgi4F9JEv1ndcT/hBhAhg1oHIO', '$2a$14$DQ1E6wAXpsqZHkC72kRd4A', 'bcrypt', null, 'admin@clevertech.biz', '1', null, null, '27ab3ac3c487c47667f873e697dc1944', null, null, null, null);

-- ----------------------------
-- Table structure for `area`
-- ----------------------------
DROP TABLE IF EXISTS `area`;
CREATE TABLE `area` (
  `area_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) unsigned NOT NULL DEFAULT '0',
  `path` varchar(255) NOT NULL,
  `grade` int(10) unsigned NOT NULL DEFAULT '0',
  `name` varchar(45) NOT NULL,
  `language` varchar(20) NOT NULL,
  `section_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`area_id`),
  KEY `fk_area_area1_idx` (`parent_id`)
) ENGINE=InnoDB AUTO_INCREMENT=990101 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of area
-- ----------------------------
INSERT INTO `area` VALUES ('100000', '100000', '110000', '0', '中国', 'mainland', '3');
INSERT INTO `area` VALUES ('110000', '100000', ',110000', '1', '北京', 'mainland', '3');
INSERT INTO `area` VALUES ('110100', '110000', ',110000,110100', '2', '北京市', 'mainland', '3');
INSERT INTO `area` VALUES ('110101', '110100', ',110000,110100,110101', '3', '东城区', 'mainland', '3');
INSERT INTO `area` VALUES ('110102', '110100', ',110000,110100,110102', '3', '西城区', 'mainland', '3');
INSERT INTO `area` VALUES ('110103', '110100', ',110000,110100,110103', '3', '崇文区', 'mainland', '3');
INSERT INTO `area` VALUES ('110104', '110100', ',110000,110100,110104', '3', '宣武区', 'mainland', '3');
INSERT INTO `area` VALUES ('110105', '110100', ',110000,110100,110105', '3', '朝阳区', 'mainland', '3');
INSERT INTO `area` VALUES ('110106', '110100', ',110000,110100,110106', '3', '丰台区', 'mainland', '3');
INSERT INTO `area` VALUES ('110107', '110100', ',110000,110100,110107', '3', '石景山区', 'mainland', '3');
INSERT INTO `area` VALUES ('110108', '110100', ',110000,110100,110108', '3', '海淀区', 'mainland', '3');
INSERT INTO `area` VALUES ('110109', '110100', ',110000,110100,110109', '3', '门头沟区', 'mainland', '3');
INSERT INTO `area` VALUES ('110111', '110100', ',110000,110100,110111', '3', '房山区', 'mainland', '3');
INSERT INTO `area` VALUES ('110112', '110100', ',110000,110100,110112', '3', '通州区', 'mainland', '3');
INSERT INTO `area` VALUES ('110113', '110100', ',110000,110100,110113', '3', '顺义区', 'mainland', '3');
INSERT INTO `area` VALUES ('110114', '110100', ',110000,110100,110114', '3', '昌平区', 'mainland', '3');
INSERT INTO `area` VALUES ('110115', '110100', ',110000,110100,110115', '3', '大兴区', 'mainland', '3');
INSERT INTO `area` VALUES ('110116', '110100', ',110000,110100,110116', '3', '怀柔区', 'mainland', '3');
INSERT INTO `area` VALUES ('110117', '110100', ',110000,110100,110117', '3', '平谷区', 'mainland', '3');
INSERT INTO `area` VALUES ('110228', '110100', ',110000,110100,110228', '3', '密云县', 'mainland', '3');
INSERT INTO `area` VALUES ('110229', '110100', ',110000,110100,110229', '3', '延庆县', 'mainland', '3');
INSERT INTO `area` VALUES ('110230', '110100', ',110000,110100,110230', '3', '其它区', 'mainland', '3');
INSERT INTO `area` VALUES ('120000', '100000', ',120000', '1', '天津', 'mainland', '3');
INSERT INTO `area` VALUES ('120100', '120000', ',120000,120100', '2', '天津市', 'mainland', '3');
INSERT INTO `area` VALUES ('120101', '120100', ',120000,120100,120101', '3', '和平区', 'mainland', '3');
INSERT INTO `area` VALUES ('120102', '120100', ',120000,120100,120102', '3', '河东区', 'mainland', '3');
INSERT INTO `area` VALUES ('120103', '120100', ',120000,120100,120103', '3', '河西区', 'mainland', '3');
INSERT INTO `area` VALUES ('120104', '120100', ',120000,120100,120104', '3', '南开区', 'mainland', '3');
INSERT INTO `area` VALUES ('120105', '120100', ',120000,120100,120105', '3', '河北区', 'mainland', '3');
INSERT INTO `area` VALUES ('120106', '120100', ',120000,120100,120106', '3', '红桥区', 'mainland', '3');
INSERT INTO `area` VALUES ('120107', '120100', ',120000,120100,120107', '3', '塘沽区', 'mainland', '3');
INSERT INTO `area` VALUES ('120108', '120100', ',120000,120100,120108', '3', '汉沽区', 'mainland', '3');
INSERT INTO `area` VALUES ('120109', '120100', ',120000,120100,120109', '3', '大港区', 'mainland', '3');
INSERT INTO `area` VALUES ('120110', '120100', ',120000,120100,120110', '3', '东丽区', 'mainland', '3');
INSERT INTO `area` VALUES ('120111', '120100', ',120000,120100,120111', '3', '西青区', 'mainland', '3');
INSERT INTO `area` VALUES ('120112', '120100', ',120000,120100,120112', '3', '津南区', 'mainland', '3');
INSERT INTO `area` VALUES ('120113', '120100', ',120000,120100,120113', '3', '北辰区', 'mainland', '3');
INSERT INTO `area` VALUES ('120114', '120100', ',120000,120100,120114', '3', '武清区', 'mainland', '3');
INSERT INTO `area` VALUES ('120115', '120100', ',120000,120100,120115', '3', '宝坻区', 'mainland', '3');
INSERT INTO `area` VALUES ('120221', '120100', ',120000,120100,120221', '3', '宁河县', 'mainland', '3');
INSERT INTO `area` VALUES ('120223', '120100', ',120000,120100,120223', '3', '静海县', 'mainland', '3');
INSERT INTO `area` VALUES ('120225', '120100', ',120000,120100,120225', '3', '蓟县', 'mainland', '3');
INSERT INTO `area` VALUES ('120226', '120100', ',120000,120100,120226', '3', '其它区', 'mainland', '3');
INSERT INTO `area` VALUES ('130000', '100000', ',130000', '1', '河北省', 'mainland', '3');
INSERT INTO `area` VALUES ('130100', '130000', ',130000,130100', '2', '石家庄市', 'mainland', '3');
INSERT INTO `area` VALUES ('130102', '130100', ',130000,130100,130102', '3', '长安区', 'mainland', '3');
INSERT INTO `area` VALUES ('130103', '130100', ',130000,130100,130103', '3', '桥东区', 'mainland', '3');
INSERT INTO `area` VALUES ('130104', '130100', ',130000,130100,130104', '3', '桥西区', 'mainland', '3');
INSERT INTO `area` VALUES ('130105', '130100', ',130000,130100,130105', '3', '新华区', 'mainland', '3');
INSERT INTO `area` VALUES ('130107', '130100', ',130000,130100,130107', '3', '井陉矿区', 'mainland', '3');
INSERT INTO `area` VALUES ('130108', '130100', ',130000,130100,130108', '3', '裕华区', 'mainland', '3');
INSERT INTO `area` VALUES ('130121', '130100', ',130000,130100,130121', '3', '井陉县', 'mainland', '3');
INSERT INTO `area` VALUES ('130123', '130100', ',130000,130100,130123', '3', '正定县', 'mainland', '3');
INSERT INTO `area` VALUES ('130124', '130100', ',130000,130100,130124', '3', '栾城县', 'mainland', '3');
INSERT INTO `area` VALUES ('130125', '130100', ',130000,130100,130125', '3', '行唐县', 'mainland', '3');
INSERT INTO `area` VALUES ('130126', '130100', ',130000,130100,130126', '3', '灵寿县', 'mainland', '3');
INSERT INTO `area` VALUES ('130127', '130100', ',130000,130100,130127', '3', '高邑县', 'mainland', '3');
INSERT INTO `area` VALUES ('130128', '130100', ',130000,130100,130128', '3', '深泽县', 'mainland', '3');
INSERT INTO `area` VALUES ('130129', '130100', ',130000,130100,130129', '3', '赞皇县', 'mainland', '3');
INSERT INTO `area` VALUES ('130130', '130100', ',130000,130100,130130', '3', '无极县', 'mainland', '3');
INSERT INTO `area` VALUES ('130131', '130100', ',130000,130100,130131', '3', '平山县', 'mainland', '3');
INSERT INTO `area` VALUES ('130132', '130100', ',130000,130100,130132', '3', '元氏县', 'mainland', '3');
INSERT INTO `area` VALUES ('130133', '130100', ',130000,130100,130133', '3', '赵县', 'mainland', '3');
INSERT INTO `area` VALUES ('130181', '130100', ',130000,130100,130181', '3', '辛集市', 'mainland', '3');
INSERT INTO `area` VALUES ('130182', '130100', ',130000,130100,130182', '3', '藁城市', 'mainland', '3');
INSERT INTO `area` VALUES ('130183', '130100', ',130000,130100,130183', '3', '晋州市', 'mainland', '3');
INSERT INTO `area` VALUES ('130184', '130100', ',130000,130100,130184', '3', '新乐市', 'mainland', '3');
INSERT INTO `area` VALUES ('130185', '130100', ',130000,130100,130185', '3', '鹿泉市', 'mainland', '3');
INSERT INTO `area` VALUES ('130186', '130100', ',130000,130100,130186', '3', '其它区', 'mainland', '3');
INSERT INTO `area` VALUES ('130200', '130000', ',130000,130200', '2', '唐山市', 'mainland', '3');
INSERT INTO `area` VALUES ('130202', '130200', ',130000,130200,130202', '3', '路南区', 'mainland', '3');
INSERT INTO `area` VALUES ('130203', '130200', ',130000,130200,130203', '3', '路北区', 'mainland', '3');
INSERT INTO `area` VALUES ('130204', '130200', ',130000,130200,130204', '3', '古冶区', 'mainland', '3');
INSERT INTO `area` VALUES ('130205', '130200', ',130000,130200,130205', '3', '开平区', 'mainland', '3');
INSERT INTO `area` VALUES ('130207', '130200', ',130000,130200,130207', '3', '丰南区', 'mainland', '3');
INSERT INTO `area` VALUES ('130208', '130200', ',130000,130200,130208', '3', '丰润区', 'mainland', '3');
INSERT INTO `area` VALUES ('130223', '130200', ',130000,130200,130223', '3', '滦县', 'mainland', '3');
INSERT INTO `area` VALUES ('130224', '130200', ',130000,130200,130224', '3', '滦南县', 'mainland', '3');
INSERT INTO `area` VALUES ('130225', '130200', ',130000,130200,130225', '3', '乐亭县', 'mainland', '3');
INSERT INTO `area` VALUES ('130227', '130200', ',130000,130200,130227', '3', '迁西县', 'mainland', '3');
INSERT INTO `area` VALUES ('130229', '130200', ',130000,130200,130229', '3', '玉田县', 'mainland', '3');
INSERT INTO `area` VALUES ('130230', '130200', ',130000,130200,130230', '3', '唐海县', 'mainland', '3');
INSERT INTO `area` VALUES ('130281', '130200', ',130000,130200,130281', '3', '遵化市', 'mainland', '3');
INSERT INTO `area` VALUES ('130283', '130200', ',130000,130200,130283', '3', '迁安市', 'mainland', '3');
INSERT INTO `area` VALUES ('130284', '130200', ',130000,130200,130284', '3', '其它区', 'mainland', '3');
INSERT INTO `area` VALUES ('130300', '130000', ',130000,130300', '2', '秦皇岛市', 'mainland', '3');
INSERT INTO `area` VALUES ('130302', '130300', ',130000,130300,130302', '3', '海港区', 'mainland', '3');
INSERT INTO `area` VALUES ('130303', '130300', ',130000,130300,130303', '3', '山海关区', 'mainland', '3');
INSERT INTO `area` VALUES ('130304', '130300', ',130000,130300,130304', '3', '北戴河区', 'mainland', '3');
INSERT INTO `area` VALUES ('130321', '130300', ',130000,130300,130321', '3', '青龙满族自治县', 'mainland', '3');
INSERT INTO `area` VALUES ('130322', '130300', ',130000,130300,130322', '3', '昌黎县', 'mainland', '3');
INSERT INTO `area` VALUES ('130323', '130300', ',130000,130300,130323', '3', '抚宁县', 'mainland', '3');
INSERT INTO `area` VALUES ('130324', '130300', ',130000,130300,130324', '3', '卢龙县', 'mainland', '3');
INSERT INTO `area` VALUES ('130398', '130300', ',130000,130300,130398', '3', '其它区', 'mainland', '3');
INSERT INTO `area` VALUES ('130399', '130300', ',130000,130300,130399', '3', '经济技术开发区', 'mainland', '3');
INSERT INTO `area` VALUES ('130400', '130000', ',130000,130400', '2', '邯郸市', 'mainland', '3');
INSERT INTO `area` VALUES ('130402', '130400', ',130000,130400,130402', '3', '邯山区', 'mainland', '3');
INSERT INTO `area` VALUES ('130403', '130400', ',130000,130400,130403', '3', '丛台区', 'mainland', '3');
INSERT INTO `area` VALUES ('130404', '130400', ',130000,130400,130404', '3', '复兴区', 'mainland', '3');
INSERT INTO `area` VALUES ('130406', '130400', ',130000,130400,130406', '3', '峰峰矿区', 'mainland', '3');
INSERT INTO `area` VALUES ('130421', '130400', ',130000,130400,130421', '3', '邯郸县', 'mainland', '3');
INSERT INTO `area` VALUES ('130423', '130400', ',130000,130400,130423', '3', '临漳县', 'mainland', '3');
INSERT INTO `area` VALUES ('130424', '130400', ',130000,130400,130424', '3', '成安县', 'mainland', '3');
INSERT INTO `area` VALUES ('130425', '130400', ',130000,130400,130425', '3', '大名县', 'mainland', '3');
INSERT INTO `area` VALUES ('130426', '130400', ',130000,130400,130426', '3', '涉县', 'mainland', '3');
INSERT INTO `area` VALUES ('130427', '130400', ',130000,130400,130427', '3', '磁县', 'mainland', '3');
INSERT INTO `area` VALUES ('130428', '130400', ',130000,130400,130428', '3', '肥乡县', 'mainland', '3');
INSERT INTO `area` VALUES ('130429', '130400', ',130000,130400,130429', '3', '永年县', 'mainland', '3');
INSERT INTO `area` VALUES ('130430', '130400', ',130000,130400,130430', '3', '邱县', 'mainland', '3');
INSERT INTO `area` VALUES ('130431', '130400', ',130000,130400,130431', '3', '鸡泽县', 'mainland', '3');
INSERT INTO `area` VALUES ('130432', '130400', ',130000,130400,130432', '3', '广平县', 'mainland', '3');
INSERT INTO `area` VALUES ('130433', '130400', ',130000,130400,130433', '3', '馆陶县', 'mainland', '3');
INSERT INTO `area` VALUES ('130434', '130400', ',130000,130400,130434', '3', '魏县', 'mainland', '3');
INSERT INTO `area` VALUES ('130435', '130400', ',130000,130400,130435', '3', '曲周县', 'mainland', '3');
INSERT INTO `area` VALUES ('130481', '130400', ',130000,130400,130481', '3', '武安市', 'mainland', '3');
INSERT INTO `area` VALUES ('130482', '130400', ',130000,130400,130482', '3', '其它区', 'mainland', '3');
INSERT INTO `area` VALUES ('130500', '130000', ',130000,130500', '2', '邢台市', 'mainland', '3');
INSERT INTO `area` VALUES ('130502', '130500', ',130000,130500,130502', '3', '桥东区', 'mainland', '3');
INSERT INTO `area` VALUES ('130503', '130500', ',130000,130500,130503', '3', '桥西区', 'mainland', '3');
INSERT INTO `area` VALUES ('130521', '130500', ',130000,130500,130521', '3', '邢台县', 'mainland', '3');
INSERT INTO `area` VALUES ('130522', '130500', ',130000,130500,130522', '3', '临城县', 'mainland', '3');
INSERT INTO `area` VALUES ('130523', '130500', ',130000,130500,130523', '3', '内丘县', 'mainland', '3');
INSERT INTO `area` VALUES ('130524', '130500', ',130000,130500,130524', '3', '柏乡县', 'mainland', '3');
INSERT INTO `area` VALUES ('130525', '130500', ',130000,130500,130525', '3', '隆尧县', 'mainland', '3');
INSERT INTO `area` VALUES ('130526', '130500', ',130000,130500,130526', '3', '任县', 'mainland', '3');
INSERT INTO `area` VALUES ('130527', '130500', ',130000,130500,130527', '3', '南和县', 'mainland', '3');
INSERT INTO `area` VALUES ('130528', '130500', ',130000,130500,130528', '3', '宁晋县', 'mainland', '3');
INSERT INTO `area` VALUES ('130529', '130500', ',130000,130500,130529', '3', '巨鹿县', 'mainland', '3');
INSERT INTO `area` VALUES ('130530', '130500', ',130000,130500,130530', '3', '新河县', 'mainland', '3');
INSERT INTO `area` VALUES ('130531', '130500', ',130000,130500,130531', '3', '广宗县', 'mainland', '3');
INSERT INTO `area` VALUES ('130532', '130500', ',130000,130500,130532', '3', '平乡县', 'mainland', '3');
INSERT INTO `area` VALUES ('130533', '130500', ',130000,130500,130533', '3', '威县', 'mainland', '3');
INSERT INTO `area` VALUES ('130534', '130500', ',130000,130500,130534', '3', '清河县', 'mainland', '3');
INSERT INTO `area` VALUES ('130535', '130500', ',130000,130500,130535', '3', '临西县', 'mainland', '3');
INSERT INTO `area` VALUES ('130581', '130500', ',130000,130500,130581', '3', '南宫市', 'mainland', '3');
INSERT INTO `area` VALUES ('130582', '130500', ',130000,130500,130582', '3', '沙河市', 'mainland', '3');
INSERT INTO `area` VALUES ('130583', '130500', ',130000,130500,130583', '3', '其它区', 'mainland', '3');
INSERT INTO `area` VALUES ('130600', '130000', ',130000,130600', '2', '保定市', 'mainland', '3');
INSERT INTO `area` VALUES ('130602', '130600', ',130000,130600,130602', '3', '新市区', 'mainland', '3');
INSERT INTO `area` VALUES ('130603', '130600', ',130000,130600,130603', '3', '北市区', 'mainland', '3');
INSERT INTO `area` VALUES ('130604', '130600', ',130000,130600,130604', '3', '南市区', 'mainland', '3');
INSERT INTO `area` VALUES ('130621', '130600', ',130000,130600,130621', '3', '满城县', 'mainland', '3');
INSERT INTO `area` VALUES ('130622', '130600', ',130000,130600,130622', '3', '清苑县', 'mainland', '3');
INSERT INTO `area` VALUES ('130623', '130600', ',130000,130600,130623', '3', '涞水县', 'mainland', '3');
INSERT INTO `area` VALUES ('130624', '130600', ',130000,130600,130624', '3', '阜平县', 'mainland', '3');
INSERT INTO `area` VALUES ('130625', '130600', ',130000,130600,130625', '3', '徐水县', 'mainland', '3');
INSERT INTO `area` VALUES ('130626', '130600', ',130000,130600,130626', '3', '定兴县', 'mainland', '3');
INSERT INTO `area` VALUES ('130627', '130600', ',130000,130600,130627', '3', '唐县', 'mainland', '3');
INSERT INTO `area` VALUES ('130628', '130600', ',130000,130600,130628', '3', '高阳县', 'mainland', '3');
INSERT INTO `area` VALUES ('130629', '130600', ',130000,130600,130629', '3', '容城县', 'mainland', '3');
INSERT INTO `area` VALUES ('130630', '130600', ',130000,130600,130630', '3', '涞源县', 'mainland', '3');
INSERT INTO `area` VALUES ('130631', '130600', ',130000,130600,130631', '3', '望都县', 'mainland', '3');
INSERT INTO `area` VALUES ('130632', '130600', ',130000,130600,130632', '3', '安新县', 'mainland', '3');
INSERT INTO `area` VALUES ('130633', '130600', ',130000,130600,130633', '3', '易县', 'mainland', '3');
INSERT INTO `area` VALUES ('130634', '130600', ',130000,130600,130634', '3', '曲阳县', 'mainland', '3');
INSERT INTO `area` VALUES ('130635', '130600', ',130000,130600,130635', '3', '蠡县', 'mainland', '3');
INSERT INTO `area` VALUES ('130636', '130600', ',130000,130600,130636', '3', '顺平县', 'mainland', '3');
INSERT INTO `area` VALUES ('130637', '130600', ',130000,130600,130637', '3', '博野县', 'mainland', '3');
INSERT INTO `area` VALUES ('130638', '130600', ',130000,130600,130638', '3', '雄县', 'mainland', '3');
INSERT INTO `area` VALUES ('130681', '130600', ',130000,130600,130681', '3', '涿州市', 'mainland', '3');
INSERT INTO `area` VALUES ('130682', '130600', ',130000,130600,130682', '3', '定州市', 'mainland', '3');
INSERT INTO `area` VALUES ('130683', '130600', ',130000,130600,130683', '3', '安国市', 'mainland', '3');
INSERT INTO `area` VALUES ('130684', '130600', ',130000,130600,130684', '3', '高碑店市', 'mainland', '3');
INSERT INTO `area` VALUES ('130698', '130600', ',130000,130600,130698', '3', '高开区', 'mainland', '3');
INSERT INTO `area` VALUES ('130699', '130600', ',130000,130600,130699', '3', '其它区', 'mainland', '3');
INSERT INTO `area` VALUES ('130700', '130000', ',130000,130700', '2', '张家口市', 'mainland', '3');
INSERT INTO `area` VALUES ('130702', '130700', ',130000,130700,130702', '3', '桥东区', 'mainland', '3');
INSERT INTO `area` VALUES ('130703', '130700', ',130000,130700,130703', '3', '桥西区', 'mainland', '3');
INSERT INTO `area` VALUES ('130705', '130700', ',130000,130700,130705', '3', '宣化区', 'mainland', '3');
INSERT INTO `area` VALUES ('130706', '130700', ',130000,130700,130706', '3', '下花园区', 'mainland', '3');
INSERT INTO `area` VALUES ('130721', '130700', ',130000,130700,130721', '3', '宣化县', 'mainland', '3');
INSERT INTO `area` VALUES ('130722', '130700', ',130000,130700,130722', '3', '张北县', 'mainland', '3');
INSERT INTO `area` VALUES ('130723', '130700', ',130000,130700,130723', '3', '康保县', 'mainland', '3');
INSERT INTO `area` VALUES ('130724', '130700', ',130000,130700,130724', '3', '沽源县', 'mainland', '3');
INSERT INTO `area` VALUES ('130725', '130700', ',130000,130700,130725', '3', '尚义县', 'mainland', '3');
INSERT INTO `area` VALUES ('130726', '130700', ',130000,130700,130726', '3', '蔚县', 'mainland', '3');
INSERT INTO `area` VALUES ('130727', '130700', ',130000,130700,130727', '3', '阳原县', 'mainland', '3');
INSERT INTO `area` VALUES ('130728', '130700', ',130000,130700,130728', '3', '怀安县', 'mainland', '3');
INSERT INTO `area` VALUES ('130729', '130700', ',130000,130700,130729', '3', '万全县', 'mainland', '3');
INSERT INTO `area` VALUES ('130730', '130700', ',130000,130700,130730', '3', '怀来县', 'mainland', '3');
INSERT INTO `area` VALUES ('130731', '130700', ',130000,130700,130731', '3', '涿鹿县', 'mainland', '3');
INSERT INTO `area` VALUES ('130732', '130700', ',130000,130700,130732', '3', '赤城县', 'mainland', '3');
INSERT INTO `area` VALUES ('130733', '130700', ',130000,130700,130733', '3', '崇礼县', 'mainland', '3');
INSERT INTO `area` VALUES ('130734', '130700', ',130000,130700,130734', '3', '其它区', 'mainland', '3');
INSERT INTO `area` VALUES ('130800', '130000', ',130000,130800', '2', '承德市', 'mainland', '3');
INSERT INTO `area` VALUES ('130802', '130800', ',130000,130800,130802', '3', '双桥区', 'mainland', '3');
INSERT INTO `area` VALUES ('130803', '130800', ',130000,130800,130803', '3', '双滦区', 'mainland', '3');
INSERT INTO `area` VALUES ('130804', '130800', ',130000,130800,130804', '3', '鹰手营子矿区', 'mainland', '3');
INSERT INTO `area` VALUES ('130821', '130800', ',130000,130800,130821', '3', '承德县', 'mainland', '3');
INSERT INTO `area` VALUES ('130822', '130800', ',130000,130800,130822', '3', '兴隆县', 'mainland', '3');
INSERT INTO `area` VALUES ('130823', '130800', ',130000,130800,130823', '3', '平泉县', 'mainland', '3');
INSERT INTO `area` VALUES ('130824', '130800', ',130000,130800,130824', '3', '滦平县', 'mainland', '3');
INSERT INTO `area` VALUES ('130825', '130800', ',130000,130800,130825', '3', '隆化县', 'mainland', '3');
INSERT INTO `area` VALUES ('130826', '130800', ',130000,130800,130826', '3', '丰宁满族自治县', 'mainland', '3');
INSERT INTO `area` VALUES ('130827', '130800', ',130000,130800,130827', '3', '宽城满族自治县', 'mainland', '3');
INSERT INTO `area` VALUES ('130828', '130800', ',130000,130800,130828', '3', '围场满族蒙古族自治县', 'mainland', '3');
INSERT INTO `area` VALUES ('130829', '130800', ',130000,130800,130829', '3', '其它区', 'mainland', '3');
INSERT INTO `area` VALUES ('130900', '130000', ',130000,130900', '2', '沧州市', 'mainland', '3');
INSERT INTO `area` VALUES ('130902', '130900', ',130000,130900,130902', '3', '新华区', 'mainland', '3');
INSERT INTO `area` VALUES ('130903', '130900', ',130000,130900,130903', '3', '运河区', 'mainland', '3');
INSERT INTO `area` VALUES ('130921', '130900', ',130000,130900,130921', '3', '沧县', 'mainland', '3');
INSERT INTO `area` VALUES ('130922', '130900', ',130000,130900,130922', '3', '青县', 'mainland', '3');
INSERT INTO `area` VALUES ('130923', '130900', ',130000,130900,130923', '3', '东光县', 'mainland', '3');
INSERT INTO `area` VALUES ('130924', '130900', ',130000,130900,130924', '3', '海兴县', 'mainland', '3');
INSERT INTO `area` VALUES ('130925', '130900', ',130000,130900,130925', '3', '盐山县', 'mainland', '3');
INSERT INTO `area` VALUES ('130926', '130900', ',130000,130900,130926', '3', '肃宁县', 'mainland', '3');
INSERT INTO `area` VALUES ('130927', '130900', ',130000,130900,130927', '3', '南皮县', 'mainland', '3');
INSERT INTO `area` VALUES ('130928', '130900', ',130000,130900,130928', '3', '吴桥县', 'mainland', '3');
INSERT INTO `area` VALUES ('130929', '130900', ',130000,130900,130929', '3', '献县', 'mainland', '3');
INSERT INTO `area` VALUES ('130930', '130900', ',130000,130900,130930', '3', '孟村回族自治县', 'mainland', '3');
INSERT INTO `area` VALUES ('130981', '130900', ',130000,130900,130981', '3', '泊头市', 'mainland', '3');
INSERT INTO `area` VALUES ('130982', '130900', ',130000,130900,130982', '3', '任丘市', 'mainland', '3');
INSERT INTO `area` VALUES ('130983', '130900', ',130000,130900,130983', '3', '黄骅市', 'mainland', '3');
INSERT INTO `area` VALUES ('130984', '130900', ',130000,130900,130984', '3', '河间市', 'mainland', '3');
INSERT INTO `area` VALUES ('130985', '130900', ',130000,130900,130985', '3', '其它区', 'mainland', '3');
INSERT INTO `area` VALUES ('131000', '130000', ',130000,131000', '2', '廊坊市', 'mainland', '3');
INSERT INTO `area` VALUES ('131002', '131000', ',130000,131000,131002', '3', '安次区', 'mainland', '3');
INSERT INTO `area` VALUES ('131003', '131000', ',130000,131000,131003', '3', '广阳区', 'mainland', '3');
INSERT INTO `area` VALUES ('131022', '131000', ',130000,131000,131022', '3', '固安县', 'mainland', '3');
INSERT INTO `area` VALUES ('131023', '131000', ',130000,131000,131023', '3', '永清县', 'mainland', '3');
INSERT INTO `area` VALUES ('131024', '131000', ',130000,131000,131024', '3', '香河县', 'mainland', '3');
INSERT INTO `area` VALUES ('131025', '131000', ',130000,131000,131025', '3', '大城县', 'mainland', '3');
INSERT INTO `area` VALUES ('131026', '131000', ',130000,131000,131026', '3', '文安县', 'mainland', '3');
INSERT INTO `area` VALUES ('131028', '131000', ',130000,131000,131028', '3', '大厂回族自治县', 'mainland', '3');
INSERT INTO `area` VALUES ('131051', '131000', ',130000,131000,131051', '3', '开发区', 'mainland', '3');
INSERT INTO `area` VALUES ('131052', '131000', ',130000,131000,131052', '3', '燕郊经济技术开发区', 'mainland', '3');
INSERT INTO `area` VALUES ('131081', '131000', ',130000,131000,131081', '3', '霸州市', 'mainland', '3');
INSERT INTO `area` VALUES ('131082', '131000', ',130000,131000,131082', '3', '三河市', 'mainland', '3');
INSERT INTO `area` VALUES ('131083', '131000', ',130000,131000,131083', '3', '其它区', 'mainland', '3');
INSERT INTO `area` VALUES ('131100', '130000', ',130000,131100', '2', '衡水市', 'mainland', '3');
INSERT INTO `area` VALUES ('131102', '131100', ',130000,131100,131102', '3', '桃城区', 'mainland', '3');
INSERT INTO `area` VALUES ('131121', '131100', ',130000,131100,131121', '3', '枣强县', 'mainland', '3');
INSERT INTO `area` VALUES ('131122', '131100', ',130000,131100,131122', '3', '武邑县', 'mainland', '3');
INSERT INTO `area` VALUES ('131123', '131100', ',130000,131100,131123', '3', '武强县', 'mainland', '3');
INSERT INTO `area` VALUES ('131124', '131100', ',130000,131100,131124', '3', '饶阳县', 'mainland', '3');
INSERT INTO `area` VALUES ('131125', '131100', ',130000,131100,131125', '3', '安平县', 'mainland', '3');
INSERT INTO `area` VALUES ('131126', '131100', ',130000,131100,131126', '3', '故城县', 'mainland', '3');
INSERT INTO `area` VALUES ('131127', '131100', ',130000,131100,131127', '3', '景县', 'mainland', '3');
INSERT INTO `area` VALUES ('131128', '131100', ',130000,131100,131128', '3', '阜城县', 'mainland', '3');
INSERT INTO `area` VALUES ('131181', '131100', ',130000,131100,131181', '3', '冀州市', 'mainland', '3');
INSERT INTO `area` VALUES ('131182', '131100', ',130000,131100,131182', '3', '深州市', 'mainland', '3');
INSERT INTO `area` VALUES ('131183', '131100', ',130000,131100,131183', '3', '其它区', 'mainland', '3');
INSERT INTO `area` VALUES ('140000', '100000', ',140000', '1', '山西省', 'mainland', '3');
INSERT INTO `area` VALUES ('140100', '140000', ',140000,140100', '2', '太原市', 'mainland', '3');
INSERT INTO `area` VALUES ('140105', '140100', ',140000,140100,140105', '3', '小店区', 'mainland', '3');
INSERT INTO `area` VALUES ('140106', '140100', ',140000,140100,140106', '3', '迎泽区', 'mainland', '3');
INSERT INTO `area` VALUES ('140107', '140100', ',140000,140100,140107', '3', '杏花岭区', 'mainland', '3');
INSERT INTO `area` VALUES ('140108', '140100', ',140000,140100,140108', '3', '尖草坪区', 'mainland', '3');
INSERT INTO `area` VALUES ('140109', '140100', ',140000,140100,140109', '3', '万柏林区', 'mainland', '3');
INSERT INTO `area` VALUES ('140110', '140100', ',140000,140100,140110', '3', '晋源区', 'mainland', '3');
INSERT INTO `area` VALUES ('140121', '140100', ',140000,140100,140121', '3', '清徐县', 'mainland', '3');
INSERT INTO `area` VALUES ('140122', '140100', ',140000,140100,140122', '3', '阳曲县', 'mainland', '3');
INSERT INTO `area` VALUES ('140123', '140100', ',140000,140100,140123', '3', '娄烦县', 'mainland', '3');
INSERT INTO `area` VALUES ('140181', '140100', ',140000,140100,140181', '3', '古交市', 'mainland', '3');
INSERT INTO `area` VALUES ('140182', '140100', ',140000,140100,140182', '3', '其它区', 'mainland', '3');
INSERT INTO `area` VALUES ('140200', '140000', ',140000,140200', '2', '大同市', 'mainland', '3');
INSERT INTO `area` VALUES ('140202', '140200', ',140000,140200,140202', '3', '城区', 'mainland', '3');
INSERT INTO `area` VALUES ('140203', '140200', ',140000,140200,140203', '3', '矿区', 'mainland', '3');
INSERT INTO `area` VALUES ('140211', '140200', ',140000,140200,140211', '3', '南郊区', 'mainland', '3');
INSERT INTO `area` VALUES ('140212', '140200', ',140000,140200,140212', '3', '新荣区', 'mainland', '3');
INSERT INTO `area` VALUES ('140221', '140200', ',140000,140200,140221', '3', '阳高县', 'mainland', '3');
INSERT INTO `area` VALUES ('140222', '140200', ',140000,140200,140222', '3', '天镇县', 'mainland', '3');
INSERT INTO `area` VALUES ('140223', '140200', ',140000,140200,140223', '3', '广灵县', 'mainland', '3');
INSERT INTO `area` VALUES ('140224', '140200', ',140000,140200,140224', '3', '灵丘县', 'mainland', '3');
INSERT INTO `area` VALUES ('140225', '140200', ',140000,140200,140225', '3', '浑源县', 'mainland', '3');
INSERT INTO `area` VALUES ('140226', '140200', ',140000,140200,140226', '3', '左云县', 'mainland', '3');
INSERT INTO `area` VALUES ('140227', '140200', ',140000,140200,140227', '3', '大同县', 'mainland', '3');
INSERT INTO `area` VALUES ('140228', '140200', ',140000,140200,140228', '3', '其它区', 'mainland', '3');
INSERT INTO `area` VALUES ('140300', '140000', ',140000,140300', '2', '阳泉市', 'mainland', '3');
INSERT INTO `area` VALUES ('140302', '140300', ',140000,140300,140302', '3', '城区', 'mainland', '3');
INSERT INTO `area` VALUES ('140303', '140300', ',140000,140300,140303', '3', '矿区', 'mainland', '3');
INSERT INTO `area` VALUES ('140311', '140300', ',140000,140300,140311', '3', '郊区', 'mainland', '3');
INSERT INTO `area` VALUES ('140321', '140300', ',140000,140300,140321', '3', '平定县', 'mainland', '3');
INSERT INTO `area` VALUES ('140322', '140300', ',140000,140300,140322', '3', '盂县', 'mainland', '3');
INSERT INTO `area` VALUES ('140323', '140300', ',140000,140300,140323', '3', '其它区', 'mainland', '3');
INSERT INTO `area` VALUES ('140400', '140000', ',140000,140400', '2', '长治市', 'mainland', '3');
INSERT INTO `area` VALUES ('140421', '140400', ',140000,140400,140421', '3', '长治县', 'mainland', '3');
INSERT INTO `area` VALUES ('140423', '140400', ',140000,140400,140423', '3', '襄垣县', 'mainland', '3');
INSERT INTO `area` VALUES ('140424', '140400', ',140000,140400,140424', '3', '屯留县', 'mainland', '3');
INSERT INTO `area` VALUES ('140425', '140400', ',140000,140400,140425', '3', '平顺县', 'mainland', '3');
INSERT INTO `area` VALUES ('140426', '140400', ',140000,140400,140426', '3', '黎城县', 'mainland', '3');
INSERT INTO `area` VALUES ('140427', '140400', ',140000,140400,140427', '3', '壶关县', 'mainland', '3');
INSERT INTO `area` VALUES ('140428', '140400', ',140000,140400,140428', '3', '长子县', 'mainland', '3');
INSERT INTO `area` VALUES ('140429', '140400', ',140000,140400,140429', '3', '武乡县', 'mainland', '3');
INSERT INTO `area` VALUES ('140430', '140400', ',140000,140400,140430', '3', '沁县', 'mainland', '3');
INSERT INTO `area` VALUES ('140431', '140400', ',140000,140400,140431', '3', '沁源县', 'mainland', '3');
INSERT INTO `area` VALUES ('140481', '140400', ',140000,140400,140481', '3', '潞城市', 'mainland', '3');
INSERT INTO `area` VALUES ('140482', '140400', ',140000,140400,140482', '3', '城区', 'mainland', '3');
INSERT INTO `area` VALUES ('140483', '140400', ',140000,140400,140483', '3', '郊区', 'mainland', '3');
INSERT INTO `area` VALUES ('140484', '140400', ',140000,140400,140484', '3', '高新区', 'mainland', '3');
INSERT INTO `area` VALUES ('140485', '140400', ',140000,140400,140485', '3', '其它区', 'mainland', '3');
INSERT INTO `area` VALUES ('140500', '140000', ',140000,140500', '2', '晋城市', 'mainland', '3');
INSERT INTO `area` VALUES ('140502', '140500', ',140000,140500,140502', '3', '城区', 'mainland', '3');
INSERT INTO `area` VALUES ('140521', '140500', ',140000,140500,140521', '3', '沁水县', 'mainland', '3');
INSERT INTO `area` VALUES ('140522', '140500', ',140000,140500,140522', '3', '阳城县', 'mainland', '3');
INSERT INTO `area` VALUES ('140524', '140500', ',140000,140500,140524', '3', '陵川县', 'mainland', '3');
INSERT INTO `area` VALUES ('140525', '140500', ',140000,140500,140525', '3', '泽州县', 'mainland', '3');
INSERT INTO `area` VALUES ('140581', '140500', ',140000,140500,140581', '3', '高平市', 'mainland', '3');
INSERT INTO `area` VALUES ('140582', '140500', ',140000,140500,140582', '3', '其它区', 'mainland', '3');
INSERT INTO `area` VALUES ('140600', '140000', ',140000,140600', '2', '朔州市', 'mainland', '3');
INSERT INTO `area` VALUES ('140602', '140600', ',140000,140600,140602', '3', '朔城区', 'mainland', '3');
INSERT INTO `area` VALUES ('140603', '140600', ',140000,140600,140603', '3', '平鲁区', 'mainland', '3');
INSERT INTO `area` VALUES ('140621', '140600', ',140000,140600,140621', '3', '山阴县', 'mainland', '3');
INSERT INTO `area` VALUES ('140622', '140600', ',140000,140600,140622', '3', '应县', 'mainland', '3');
INSERT INTO `area` VALUES ('140623', '140600', ',140000,140600,140623', '3', '右玉县', 'mainland', '3');
INSERT INTO `area` VALUES ('140624', '140600', ',140000,140600,140624', '3', '怀仁县', 'mainland', '3');
INSERT INTO `area` VALUES ('140625', '140600', ',140000,140600,140625', '3', '其它区', 'mainland', '3');
INSERT INTO `area` VALUES ('140700', '140000', ',140000,140700', '2', '晋中市', 'mainland', '3');
INSERT INTO `area` VALUES ('140702', '140700', ',140000,140700,140702', '3', '榆次区', 'mainland', '3');
INSERT INTO `area` VALUES ('140721', '140700', ',140000,140700,140721', '3', '榆社县', 'mainland', '3');
INSERT INTO `area` VALUES ('140722', '140700', ',140000,140700,140722', '3', '左权县', 'mainland', '3');
INSERT INTO `area` VALUES ('140723', '140700', ',140000,140700,140723', '3', '和顺县', 'mainland', '3');
INSERT INTO `area` VALUES ('140724', '140700', ',140000,140700,140724', '3', '昔阳县', 'mainland', '3');
INSERT INTO `area` VALUES ('140725', '140700', ',140000,140700,140725', '3', '寿阳县', 'mainland', '3');
INSERT INTO `area` VALUES ('140726', '140700', ',140000,140700,140726', '3', '太谷县', 'mainland', '3');
INSERT INTO `area` VALUES ('140727', '140700', ',140000,140700,140727', '3', '祁县', 'mainland', '3');
INSERT INTO `area` VALUES ('140728', '140700', ',140000,140700,140728', '3', '平遥县', 'mainland', '3');
INSERT INTO `area` VALUES ('140729', '140700', ',140000,140700,140729', '3', '灵石县', 'mainland', '3');
INSERT INTO `area` VALUES ('140781', '140700', ',140000,140700,140781', '3', '介休市', 'mainland', '3');
INSERT INTO `area` VALUES ('140782', '140700', ',140000,140700,140782', '3', '其它区', 'mainland', '3');
INSERT INTO `area` VALUES ('140800', '140000', ',140000,140800', '2', '运城市', 'mainland', '3');
INSERT INTO `area` VALUES ('140802', '140800', ',140000,140800,140802', '3', '盐湖区', 'mainland', '3');
INSERT INTO `area` VALUES ('140821', '140800', ',140000,140800,140821', '3', '临猗县', 'mainland', '3');
INSERT INTO `area` VALUES ('140822', '140800', ',140000,140800,140822', '3', '万荣县', 'mainland', '3');
INSERT INTO `area` VALUES ('140823', '140800', ',140000,140800,140823', '3', '闻喜县', 'mainland', '3');
INSERT INTO `area` VALUES ('140824', '140800', ',140000,140800,140824', '3', '稷山县', 'mainland', '3');
INSERT INTO `area` VALUES ('140825', '140800', ',140000,140800,140825', '3', '新绛县', 'mainland', '3');
INSERT INTO `area` VALUES ('140826', '140800', ',140000,140800,140826', '3', '绛县', 'mainland', '3');
INSERT INTO `area` VALUES ('140827', '140800', ',140000,140800,140827', '3', '垣曲县', 'mainland', '3');
INSERT INTO `area` VALUES ('140828', '140800', ',140000,140800,140828', '3', '夏县', 'mainland', '3');
INSERT INTO `area` VALUES ('140829', '140800', ',140000,140800,140829', '3', '平陆县', 'mainland', '3');
INSERT INTO `area` VALUES ('140830', '140800', ',140000,140800,140830', '3', '芮城县', 'mainland', '3');
INSERT INTO `area` VALUES ('140881', '140800', ',140000,140800,140881', '3', '永济市', 'mainland', '3');
INSERT INTO `area` VALUES ('140882', '140800', ',140000,140800,140882', '3', '河津市', 'mainland', '3');
INSERT INTO `area` VALUES ('140883', '140800', ',140000,140800,140883', '3', '其它区', 'mainland', '3');
INSERT INTO `area` VALUES ('140900', '140000', ',140000,140900', '2', '忻州市', 'mainland', '3');
INSERT INTO `area` VALUES ('140902', '140900', ',140000,140900,140902', '3', '忻府区', 'mainland', '3');
INSERT INTO `area` VALUES ('140921', '140900', ',140000,140900,140921', '3', '定襄县', 'mainland', '3');
INSERT INTO `area` VALUES ('140922', '140900', ',140000,140900,140922', '3', '五台县', 'mainland', '3');
INSERT INTO `area` VALUES ('140923', '140900', ',140000,140900,140923', '3', '代县', 'mainland', '3');
INSERT INTO `area` VALUES ('140924', '140900', ',140000,140900,140924', '3', '繁峙县', 'mainland', '3');
INSERT INTO `area` VALUES ('140925', '140900', ',140000,140900,140925', '3', '宁武县', 'mainland', '3');
INSERT INTO `area` VALUES ('140926', '140900', ',140000,140900,140926', '3', '静乐县', 'mainland', '3');
INSERT INTO `area` VALUES ('140927', '140900', ',140000,140900,140927', '3', '神池县', 'mainland', '3');
INSERT INTO `area` VALUES ('140928', '140900', ',140000,140900,140928', '3', '五寨县', 'mainland', '3');
INSERT INTO `area` VALUES ('140929', '140900', ',140000,140900,140929', '3', '岢岚县', 'mainland', '3');
INSERT INTO `area` VALUES ('140930', '140900', ',140000,140900,140930', '3', '河曲县', 'mainland', '3');
INSERT INTO `area` VALUES ('140931', '140900', ',140000,140900,140931', '3', '保德县', 'mainland', '3');
INSERT INTO `area` VALUES ('140932', '140900', ',140000,140900,140932', '3', '偏关县', 'mainland', '3');
INSERT INTO `area` VALUES ('140981', '140900', ',140000,140900,140981', '3', '原平市', 'mainland', '3');
INSERT INTO `area` VALUES ('140982', '140900', ',140000,140900,140982', '3', '其它区', 'mainland', '3');
INSERT INTO `area` VALUES ('141000', '140000', ',140000,141000', '2', '临汾市', 'mainland', '3');
INSERT INTO `area` VALUES ('141002', '141000', ',140000,141000,141002', '3', '尧都区', 'mainland', '3');
INSERT INTO `area` VALUES ('141021', '141000', ',140000,141000,141021', '3', '曲沃县', 'mainland', '3');
INSERT INTO `area` VALUES ('141022', '141000', ',140000,141000,141022', '3', '翼城县', 'mainland', '3');
INSERT INTO `area` VALUES ('141023', '141000', ',140000,141000,141023', '3', '襄汾县', 'mainland', '3');
INSERT INTO `area` VALUES ('141024', '141000', ',140000,141000,141024', '3', '洪洞县', 'mainland', '3');
INSERT INTO `area` VALUES ('141025', '141000', ',140000,141000,141025', '3', '古县', 'mainland', '3');
INSERT INTO `area` VALUES ('141026', '141000', ',140000,141000,141026', '3', '安泽县', 'mainland', '3');
INSERT INTO `area` VALUES ('141027', '141000', ',140000,141000,141027', '3', '浮山县', 'mainland', '3');
INSERT INTO `area` VALUES ('141028', '141000', ',140000,141000,141028', '3', '吉县', 'mainland', '3');
INSERT INTO `area` VALUES ('141029', '141000', ',140000,141000,141029', '3', '乡宁县', 'mainland', '3');
INSERT INTO `area` VALUES ('141030', '141000', ',140000,141000,141030', '3', '大宁县', 'mainland', '3');
INSERT INTO `area` VALUES ('141031', '141000', ',140000,141000,141031', '3', '隰县', 'mainland', '3');
INSERT INTO `area` VALUES ('141032', '141000', ',140000,141000,141032', '3', '永和县', 'mainland', '3');
INSERT INTO `area` VALUES ('141033', '141000', ',140000,141000,141033', '3', '蒲县', 'mainland', '3');
INSERT INTO `area` VALUES ('141034', '141000', ',140000,141000,141034', '3', '汾西县', 'mainland', '3');
INSERT INTO `area` VALUES ('141081', '141000', ',140000,141000,141081', '3', '侯马市', 'mainland', '3');
INSERT INTO `area` VALUES ('141082', '141000', ',140000,141000,141082', '3', '霍州市', 'mainland', '3');
INSERT INTO `area` VALUES ('141083', '141000', ',140000,141000,141083', '3', '其它区', 'mainland', '3');
INSERT INTO `area` VALUES ('141100', '140000', ',140000,141100', '2', '吕梁市', 'mainland', '3');
INSERT INTO `area` VALUES ('141102', '141100', ',140000,141100,141102', '3', '离石区', 'mainland', '3');
INSERT INTO `area` VALUES ('141121', '141100', ',140000,141100,141121', '3', '文水县', 'mainland', '3');
INSERT INTO `area` VALUES ('141122', '141100', ',140000,141100,141122', '3', '交城县', 'mainland', '3');
INSERT INTO `area` VALUES ('141123', '141100', ',140000,141100,141123', '3', '兴县', 'mainland', '3');
INSERT INTO `area` VALUES ('141124', '141100', ',140000,141100,141124', '3', '临县', 'mainland', '3');
INSERT INTO `area` VALUES ('141125', '141100', ',140000,141100,141125', '3', '柳林县', 'mainland', '3');
INSERT INTO `area` VALUES ('141126', '141100', ',140000,141100,141126', '3', '石楼县', 'mainland', '3');
INSERT INTO `area` VALUES ('141127', '141100', ',140000,141100,141127', '3', '岚县', 'mainland', '3');
INSERT INTO `area` VALUES ('141128', '141100', ',140000,141100,141128', '3', '方山县', 'mainland', '3');
INSERT INTO `area` VALUES ('141129', '141100', ',140000,141100,141129', '3', '中阳县', 'mainland', '3');
INSERT INTO `area` VALUES ('141130', '141100', ',140000,141100,141130', '3', '交口县', 'mainland', '3');
INSERT INTO `area` VALUES ('141181', '141100', ',140000,141100,141181', '3', '孝义市', 'mainland', '3');
INSERT INTO `area` VALUES ('141182', '141100', ',140000,141100,141182', '3', '汾阳市', 'mainland', '3');
INSERT INTO `area` VALUES ('141183', '141100', ',140000,141100,141183', '3', '其它区', 'mainland', '3');
INSERT INTO `area` VALUES ('150000', '100000', ',150000', '1', '内蒙古自治区', 'mainland', '3');
INSERT INTO `area` VALUES ('150100', '150000', ',150000,150100', '2', '呼和浩特市', 'mainland', '3');
INSERT INTO `area` VALUES ('150102', '150100', ',150000,150100,150102', '3', '新城区', 'mainland', '3');
INSERT INTO `area` VALUES ('150103', '150100', ',150000,150100,150103', '3', '回民区', 'mainland', '3');
INSERT INTO `area` VALUES ('150104', '150100', ',150000,150100,150104', '3', '玉泉区', 'mainland', '3');
INSERT INTO `area` VALUES ('150105', '150100', ',150000,150100,150105', '3', '赛罕区', 'mainland', '3');
INSERT INTO `area` VALUES ('150121', '150100', ',150000,150100,150121', '3', '土默特左旗', 'mainland', '3');
INSERT INTO `area` VALUES ('150122', '150100', ',150000,150100,150122', '3', '托克托县', 'mainland', '3');
INSERT INTO `area` VALUES ('150123', '150100', ',150000,150100,150123', '3', '和林格尔县', 'mainland', '3');
INSERT INTO `area` VALUES ('150124', '150100', ',150000,150100,150124', '3', '清水河县', 'mainland', '3');
INSERT INTO `area` VALUES ('150125', '150100', ',150000,150100,150125', '3', '武川县', 'mainland', '3');
INSERT INTO `area` VALUES ('150126', '150100', ',150000,150100,150126', '3', '其它区', 'mainland', '3');
INSERT INTO `area` VALUES ('150200', '150000', ',150000,150200', '2', '包头市', 'mainland', '3');
INSERT INTO `area` VALUES ('150202', '150200', ',150000,150200,150202', '3', '东河区', 'mainland', '3');
INSERT INTO `area` VALUES ('150203', '150200', ',150000,150200,150203', '3', '昆都仑区', 'mainland', '3');
INSERT INTO `area` VALUES ('150204', '150200', ',150000,150200,150204', '3', '青山区', 'mainland', '3');
INSERT INTO `area` VALUES ('150205', '150200', ',150000,150200,150205', '3', '石拐区', 'mainland', '3');
INSERT INTO `area` VALUES ('150206', '150200', ',150000,150200,150206', '3', '白云矿区', 'mainland', '3');
INSERT INTO `area` VALUES ('150207', '150200', ',150000,150200,150207', '3', '九原区', 'mainland', '3');
INSERT INTO `area` VALUES ('150221', '150200', ',150000,150200,150221', '3', '土默特右旗', 'mainland', '3');
INSERT INTO `area` VALUES ('150222', '150200', ',150000,150200,150222', '3', '固阳县', 'mainland', '3');
INSERT INTO `area` VALUES ('150223', '150200', ',150000,150200,150223', '3', '达尔罕茂明安联合旗', 'mainland', '3');
INSERT INTO `area` VALUES ('150224', '150200', ',150000,150200,150224', '3', '其它区', 'mainland', '3');
INSERT INTO `area` VALUES ('150300', '150000', ',150000,150300', '2', '乌海市', 'mainland', '3');
INSERT INTO `area` VALUES ('150302', '150300', ',150000,150300,150302', '3', '海勃湾区', 'mainland', '3');
INSERT INTO `area` VALUES ('150303', '150300', ',150000,150300,150303', '3', '海南区', 'mainland', '3');
INSERT INTO `area` VALUES ('150304', '150300', ',150000,150300,150304', '3', '乌达区', 'mainland', '3');
INSERT INTO `area` VALUES ('150305', '150300', ',150000,150300,150305', '3', '其它区', 'mainland', '3');
INSERT INTO `area` VALUES ('150400', '150000', ',150000,150400', '2', '赤峰市', 'mainland', '3');
INSERT INTO `area` VALUES ('150402', '150400', ',150000,150400,150402', '3', '红山区', 'mainland', '3');
INSERT INTO `area` VALUES ('150403', '150400', ',150000,150400,150403', '3', '元宝山区', 'mainland', '3');
INSERT INTO `area` VALUES ('150404', '150400', ',150000,150400,150404', '3', '松山区', 'mainland', '3');
INSERT INTO `area` VALUES ('150421', '150400', ',150000,150400,150421', '3', '阿鲁科尔沁旗', 'mainland', '3');
INSERT INTO `area` VALUES ('150422', '150400', ',150000,150400,150422', '3', '巴林左旗', 'mainland', '3');
INSERT INTO `area` VALUES ('150423', '150400', ',150000,150400,150423', '3', '巴林右旗', 'mainland', '3');
INSERT INTO `area` VALUES ('150424', '150400', ',150000,150400,150424', '3', '林西县', 'mainland', '3');
INSERT INTO `area` VALUES ('150425', '150400', ',150000,150400,150425', '3', '克什克腾旗', 'mainland', '3');
INSERT INTO `area` VALUES ('150426', '150400', ',150000,150400,150426', '3', '翁牛特旗', 'mainland', '3');
INSERT INTO `area` VALUES ('150428', '150400', ',150000,150400,150428', '3', '喀喇沁旗', 'mainland', '3');
INSERT INTO `area` VALUES ('150429', '150400', ',150000,150400,150429', '3', '宁城县', 'mainland', '3');
INSERT INTO `area` VALUES ('150430', '150400', ',150000,150400,150430', '3', '敖汉旗', 'mainland', '3');
INSERT INTO `area` VALUES ('150431', '150400', ',150000,150400,150431', '3', '其它区', 'mainland', '3');
INSERT INTO `area` VALUES ('150500', '150000', ',150000,150500', '2', '通辽市', 'mainland', '3');
INSERT INTO `area` VALUES ('150502', '150500', ',150000,150500,150502', '3', '科尔沁区', 'mainland', '3');
INSERT INTO `area` VALUES ('150521', '150500', ',150000,150500,150521', '3', '科尔沁左翼中旗', 'mainland', '3');
INSERT INTO `area` VALUES ('150522', '150500', ',150000,150500,150522', '3', '科尔沁左翼后旗', 'mainland', '3');
INSERT INTO `area` VALUES ('150523', '150500', ',150000,150500,150523', '3', '开鲁县', 'mainland', '3');
INSERT INTO `area` VALUES ('150524', '150500', ',150000,150500,150524', '3', '库伦旗', 'mainland', '3');
INSERT INTO `area` VALUES ('150525', '150500', ',150000,150500,150525', '3', '奈曼旗', 'mainland', '3');
INSERT INTO `area` VALUES ('150526', '150500', ',150000,150500,150526', '3', '扎鲁特旗', 'mainland', '3');
INSERT INTO `area` VALUES ('150581', '150500', ',150000,150500,150581', '3', '霍林郭勒市', 'mainland', '3');
INSERT INTO `area` VALUES ('150582', '150500', ',150000,150500,150582', '3', '其它区', 'mainland', '3');
INSERT INTO `area` VALUES ('150600', '150000', ',150000,150600', '2', '鄂尔多斯市', 'mainland', '3');
INSERT INTO `area` VALUES ('150602', '150600', ',150000,150600,150602', '3', '东胜区', 'mainland', '3');
INSERT INTO `area` VALUES ('150621', '150600', ',150000,150600,150621', '3', '达拉特旗', 'mainland', '3');
INSERT INTO `area` VALUES ('150622', '150600', ',150000,150600,150622', '3', '准格尔旗', 'mainland', '3');
INSERT INTO `area` VALUES ('150623', '150600', ',150000,150600,150623', '3', '鄂托克前旗', 'mainland', '3');
INSERT INTO `area` VALUES ('150624', '150600', ',150000,150600,150624', '3', '鄂托克旗', 'mainland', '3');
INSERT INTO `area` VALUES ('150625', '150600', ',150000,150600,150625', '3', '杭锦旗', 'mainland', '3');
INSERT INTO `area` VALUES ('150626', '150600', ',150000,150600,150626', '3', '乌审旗', 'mainland', '3');
INSERT INTO `area` VALUES ('150627', '150600', ',150000,150600,150627', '3', '伊金霍洛旗', 'mainland', '3');
INSERT INTO `area` VALUES ('150628', '150600', ',150000,150600,150628', '3', '其它区', 'mainland', '3');
INSERT INTO `area` VALUES ('150700', '150000', ',150000,150700', '2', '呼伦贝尔市', 'mainland', '3');
INSERT INTO `area` VALUES ('150702', '150700', ',150000,150700,150702', '3', '海拉尔区', 'mainland', '3');
INSERT INTO `area` VALUES ('150721', '150700', ',150000,150700,150721', '3', '阿荣旗', 'mainland', '3');
INSERT INTO `area` VALUES ('150722', '150700', ',150000,150700,150722', '3', '莫力达瓦达斡尔族自治旗', 'mainland', '3');
INSERT INTO `area` VALUES ('150723', '150700', ',150000,150700,150723', '3', '鄂伦春自治旗', 'mainland', '3');
INSERT INTO `area` VALUES ('150724', '150700', ',150000,150700,150724', '3', '鄂温克族自治旗', 'mainland', '3');
INSERT INTO `area` VALUES ('150725', '150700', ',150000,150700,150725', '3', '陈巴尔虎旗', 'mainland', '3');
INSERT INTO `area` VALUES ('150726', '150700', ',150000,150700,150726', '3', '新巴尔虎左旗', 'mainland', '3');
INSERT INTO `area` VALUES ('150727', '150700', ',150000,150700,150727', '3', '新巴尔虎右旗', 'mainland', '3');
INSERT INTO `area` VALUES ('150781', '150700', ',150000,150700,150781', '3', '满洲里市', 'mainland', '3');
INSERT INTO `area` VALUES ('150782', '150700', ',150000,150700,150782', '3', '牙克石市', 'mainland', '3');
INSERT INTO `area` VALUES ('150783', '150700', ',150000,150700,150783', '3', '扎兰屯市', 'mainland', '3');
INSERT INTO `area` VALUES ('150784', '150700', ',150000,150700,150784', '3', '额尔古纳市', 'mainland', '3');
INSERT INTO `area` VALUES ('150785', '150700', ',150000,150700,150785', '3', '根河市', 'mainland', '3');
INSERT INTO `area` VALUES ('150786', '150700', ',150000,150700,150786', '3', '其它区', 'mainland', '3');
INSERT INTO `area` VALUES ('150800', '150000', ',150000,150800', '2', '巴彦淖尔市', 'mainland', '3');
INSERT INTO `area` VALUES ('150802', '150800', ',150000,150800,150802', '3', '临河区', 'mainland', '3');
INSERT INTO `area` VALUES ('150821', '150800', ',150000,150800,150821', '3', '五原县', 'mainland', '3');
INSERT INTO `area` VALUES ('150822', '150800', ',150000,150800,150822', '3', '磴口县', 'mainland', '3');
INSERT INTO `area` VALUES ('150823', '150800', ',150000,150800,150823', '3', '乌拉特前旗', 'mainland', '3');
INSERT INTO `area` VALUES ('150824', '150800', ',150000,150800,150824', '3', '乌拉特中旗', 'mainland', '3');
INSERT INTO `area` VALUES ('150825', '150800', ',150000,150800,150825', '3', '乌拉特后旗', 'mainland', '3');
INSERT INTO `area` VALUES ('150826', '150800', ',150000,150800,150826', '3', '杭锦后旗', 'mainland', '3');
INSERT INTO `area` VALUES ('150827', '150800', ',150000,150800,150827', '3', '其它区', 'mainland', '3');
INSERT INTO `area` VALUES ('150900', '150000', ',150000,150900', '2', '乌兰察布市', 'mainland', '3');
INSERT INTO `area` VALUES ('150902', '150900', ',150000,150900,150902', '3', '集宁区', 'mainland', '3');
INSERT INTO `area` VALUES ('150921', '150900', ',150000,150900,150921', '3', '卓资县', 'mainland', '3');
INSERT INTO `area` VALUES ('150922', '150900', ',150000,150900,150922', '3', '化德县', 'mainland', '3');
INSERT INTO `area` VALUES ('150923', '150900', ',150000,150900,150923', '3', '商都县', 'mainland', '3');
INSERT INTO `area` VALUES ('150924', '150900', ',150000,150900,150924', '3', '兴和县', 'mainland', '3');
INSERT INTO `area` VALUES ('150925', '150900', ',150000,150900,150925', '3', '凉城县', 'mainland', '3');
INSERT INTO `area` VALUES ('150926', '150900', ',150000,150900,150926', '3', '察哈尔右翼前旗', 'mainland', '3');
INSERT INTO `area` VALUES ('150927', '150900', ',150000,150900,150927', '3', '察哈尔右翼中旗', 'mainland', '3');
INSERT INTO `area` VALUES ('150928', '150900', ',150000,150900,150928', '3', '察哈尔右翼后旗', 'mainland', '3');
INSERT INTO `area` VALUES ('150929', '150900', ',150000,150900,150929', '3', '四子王旗', 'mainland', '3');
INSERT INTO `area` VALUES ('150981', '150900', ',150000,150900,150981', '3', '丰镇市', 'mainland', '3');
INSERT INTO `area` VALUES ('150982', '150900', ',150000,150900,150982', '3', '其它区', 'mainland', '3');
INSERT INTO `area` VALUES ('152200', '150000', ',150000,152200', '2', '兴安盟', 'mainland', '3');
INSERT INTO `area` VALUES ('152201', '152200', ',150000,152200,152201', '3', '乌兰浩特市', 'mainland', '3');
INSERT INTO `area` VALUES ('152202', '152200', ',150000,152200,152202', '3', '阿尔山市', 'mainland', '3');
INSERT INTO `area` VALUES ('152221', '152200', ',150000,152200,152221', '3', '科尔沁右翼前旗', 'mainland', '3');
INSERT INTO `area` VALUES ('152222', '152200', ',150000,152200,152222', '3', '科尔沁右翼中旗', 'mainland', '3');
INSERT INTO `area` VALUES ('152223', '152200', ',150000,152200,152223', '3', '扎赉特旗', 'mainland', '3');
INSERT INTO `area` VALUES ('152224', '152200', ',150000,152200,152224', '3', '突泉县', 'mainland', '3');
INSERT INTO `area` VALUES ('152225', '152200', ',150000,152200,152225', '3', '其它区', 'mainland', '3');
INSERT INTO `area` VALUES ('152500', '150000', ',150000,152500', '2', '锡林郭勒盟', 'mainland', '3');
INSERT INTO `area` VALUES ('152501', '152500', ',150000,152500,152501', '3', '二连浩特市', 'mainland', '3');
INSERT INTO `area` VALUES ('152502', '152500', ',150000,152500,152502', '3', '锡林浩特市', 'mainland', '3');
INSERT INTO `area` VALUES ('152522', '152500', ',150000,152500,152522', '3', '阿巴嘎旗', 'mainland', '3');
INSERT INTO `area` VALUES ('152523', '152500', ',150000,152500,152523', '3', '苏尼特左旗', 'mainland', '3');
INSERT INTO `area` VALUES ('152524', '152500', ',150000,152500,152524', '3', '苏尼特右旗', 'mainland', '3');
INSERT INTO `area` VALUES ('152525', '152500', ',150000,152500,152525', '3', '东乌珠穆沁旗', 'mainland', '3');
INSERT INTO `area` VALUES ('152526', '152500', ',150000,152500,152526', '3', '西乌珠穆沁旗', 'mainland', '3');
INSERT INTO `area` VALUES ('152527', '152500', ',150000,152500,152527', '3', '太仆寺旗', 'mainland', '3');
INSERT INTO `area` VALUES ('152528', '152500', ',150000,152500,152528', '3', '镶黄旗', 'mainland', '3');
INSERT INTO `area` VALUES ('152529', '152500', ',150000,152500,152529', '3', '正镶白旗', 'mainland', '3');
INSERT INTO `area` VALUES ('152530', '152500', ',150000,152500,152530', '3', '正蓝旗', 'mainland', '3');
INSERT INTO `area` VALUES ('152531', '152500', ',150000,152500,152531', '3', '多伦县', 'mainland', '3');
INSERT INTO `area` VALUES ('152532', '152500', ',150000,152500,152532', '3', '其它区', 'mainland', '3');
INSERT INTO `area` VALUES ('152900', '150000', ',150000,152900', '2', '阿拉善盟', 'mainland', '3');
INSERT INTO `area` VALUES ('152921', '152900', ',150000,152900,152921', '3', '阿拉善左旗', 'mainland', '3');
INSERT INTO `area` VALUES ('152922', '152900', ',150000,152900,152922', '3', '阿拉善右旗', 'mainland', '3');
INSERT INTO `area` VALUES ('152923', '152900', ',150000,152900,152923', '3', '额济纳旗', 'mainland', '3');
INSERT INTO `area` VALUES ('152924', '152900', ',150000,152900,152924', '3', '其它区', 'mainland', '3');
INSERT INTO `area` VALUES ('210000', '100000', ',210000', '1', '辽宁省', 'mainland', '5');
INSERT INTO `area` VALUES ('210100', '210000', ',210000,210100', '2', '沈阳市', 'mainland', '5');
INSERT INTO `area` VALUES ('210102', '210100', ',210000,210100,210102', '3', '和平区', 'mainland', '5');
INSERT INTO `area` VALUES ('210103', '210100', ',210000,210100,210103', '3', '沈河区', 'mainland', '5');
INSERT INTO `area` VALUES ('210104', '210100', ',210000,210100,210104', '3', '大东区', 'mainland', '5');
INSERT INTO `area` VALUES ('210105', '210100', ',210000,210100,210105', '3', '皇姑区', 'mainland', '5');
INSERT INTO `area` VALUES ('210106', '210100', ',210000,210100,210106', '3', '铁西区', 'mainland', '5');
INSERT INTO `area` VALUES ('210111', '210100', ',210000,210100,210111', '3', '苏家屯区', 'mainland', '5');
INSERT INTO `area` VALUES ('210112', '210100', ',210000,210100,210112', '3', '东陵区', 'mainland', '5');
INSERT INTO `area` VALUES ('210113', '210100', ',210000,210100,210113', '3', '新城子区', 'mainland', '5');
INSERT INTO `area` VALUES ('210114', '210100', ',210000,210100,210114', '3', '于洪区', 'mainland', '5');
INSERT INTO `area` VALUES ('210122', '210100', ',210000,210100,210122', '3', '辽中县', 'mainland', '5');
INSERT INTO `area` VALUES ('210123', '210100', ',210000,210100,210123', '3', '康平县', 'mainland', '5');
INSERT INTO `area` VALUES ('210124', '210100', ',210000,210100,210124', '3', '法库县', 'mainland', '5');
INSERT INTO `area` VALUES ('210181', '210100', ',210000,210100,210181', '3', '新民市', 'mainland', '5');
INSERT INTO `area` VALUES ('210182', '210100', ',210000,210100,210182', '3', '浑南新区', 'mainland', '5');
INSERT INTO `area` VALUES ('210183', '210100', ',210000,210100,210183', '3', '张士开发区', 'mainland', '5');
INSERT INTO `area` VALUES ('210184', '210100', ',210000,210100,210184', '3', '沈北新区', 'mainland', '5');
INSERT INTO `area` VALUES ('210185', '210100', ',210000,210100,210185', '3', '其它区', 'mainland', '5');
INSERT INTO `area` VALUES ('210200', '210000', ',210000,210200', '2', '大连市', 'mainland', '5');
INSERT INTO `area` VALUES ('210202', '210200', ',210000,210200,210202', '3', '中山区', 'mainland', '5');
INSERT INTO `area` VALUES ('210203', '210200', ',210000,210200,210203', '3', '西岗区', 'mainland', '5');
INSERT INTO `area` VALUES ('210204', '210200', ',210000,210200,210204', '3', '沙河口区', 'mainland', '5');
INSERT INTO `area` VALUES ('210211', '210200', ',210000,210200,210211', '3', '甘井子区', 'mainland', '5');
INSERT INTO `area` VALUES ('210212', '210200', ',210000,210200,210212', '3', '旅顺口区', 'mainland', '5');
INSERT INTO `area` VALUES ('210213', '210200', ',210000,210200,210213', '3', '金州区', 'mainland', '5');
INSERT INTO `area` VALUES ('210224', '210200', ',210000,210200,210224', '3', '长海县', 'mainland', '5');
INSERT INTO `area` VALUES ('210251', '210200', ',210000,210200,210251', '3', '开发区', 'mainland', '5');
INSERT INTO `area` VALUES ('210281', '210200', ',210000,210200,210281', '3', '瓦房店市', 'mainland', '5');
INSERT INTO `area` VALUES ('210282', '210200', ',210000,210200,210282', '3', '普兰店市', 'mainland', '5');
INSERT INTO `area` VALUES ('210283', '210200', ',210000,210200,210283', '3', '庄河市', 'mainland', '5');
INSERT INTO `area` VALUES ('210297', '210200', ',210000,210200,210297', '3', '岭前区', 'mainland', '5');
INSERT INTO `area` VALUES ('210298', '210200', ',210000,210200,210298', '3', '其它区', 'mainland', '5');
INSERT INTO `area` VALUES ('210300', '210000', ',210000,210300', '2', '鞍山市', 'mainland', '5');
INSERT INTO `area` VALUES ('210302', '210300', ',210000,210300,210302', '3', '铁东区', 'mainland', '5');
INSERT INTO `area` VALUES ('210303', '210300', ',210000,210300,210303', '3', '铁西区', 'mainland', '5');
INSERT INTO `area` VALUES ('210304', '210300', ',210000,210300,210304', '3', '立山区', 'mainland', '5');
INSERT INTO `area` VALUES ('210311', '210300', ',210000,210300,210311', '3', '千山区', 'mainland', '5');
INSERT INTO `area` VALUES ('210321', '210300', ',210000,210300,210321', '3', '台安县', 'mainland', '5');
INSERT INTO `area` VALUES ('210323', '210300', ',210000,210300,210323', '3', '岫岩满族自治县', 'mainland', '5');
INSERT INTO `area` VALUES ('210351', '210300', ',210000,210300,210351', '3', '高新区', 'mainland', '5');
INSERT INTO `area` VALUES ('210381', '210300', ',210000,210300,210381', '3', '海城市', 'mainland', '5');
INSERT INTO `area` VALUES ('210382', '210300', ',210000,210300,210382', '3', '其它区', 'mainland', '5');
INSERT INTO `area` VALUES ('210400', '210000', ',210000,210400', '2', '抚顺市', 'mainland', '5');
INSERT INTO `area` VALUES ('210402', '210400', ',210000,210400,210402', '3', '新抚区', 'mainland', '5');
INSERT INTO `area` VALUES ('210403', '210400', ',210000,210400,210403', '3', '东洲区', 'mainland', '5');
INSERT INTO `area` VALUES ('210404', '210400', ',210000,210400,210404', '3', '望花区', 'mainland', '5');
INSERT INTO `area` VALUES ('210411', '210400', ',210000,210400,210411', '3', '顺城区', 'mainland', '5');
INSERT INTO `area` VALUES ('210421', '210400', ',210000,210400,210421', '3', '抚顺县', 'mainland', '5');
INSERT INTO `area` VALUES ('210422', '210400', ',210000,210400,210422', '3', '新宾满族自治县', 'mainland', '5');
INSERT INTO `area` VALUES ('210423', '210400', ',210000,210400,210423', '3', '清原满族自治县', 'mainland', '5');
INSERT INTO `area` VALUES ('210424', '210400', ',210000,210400,210424', '3', '其它区', 'mainland', '5');
INSERT INTO `area` VALUES ('210500', '210000', ',210000,210500', '2', '本溪市', 'mainland', '5');
INSERT INTO `area` VALUES ('210502', '210500', ',210000,210500,210502', '3', '平山区', 'mainland', '5');
INSERT INTO `area` VALUES ('210503', '210500', ',210000,210500,210503', '3', '溪湖区', 'mainland', '5');
INSERT INTO `area` VALUES ('210504', '210500', ',210000,210500,210504', '3', '明山区', 'mainland', '5');
INSERT INTO `area` VALUES ('210505', '210500', ',210000,210500,210505', '3', '南芬区', 'mainland', '5');
INSERT INTO `area` VALUES ('210521', '210500', ',210000,210500,210521', '3', '本溪满族自治县', 'mainland', '5');
INSERT INTO `area` VALUES ('210522', '210500', ',210000,210500,210522', '3', '桓仁满族自治县', 'mainland', '5');
INSERT INTO `area` VALUES ('210523', '210500', ',210000,210500,210523', '3', '其它区', 'mainland', '5');
INSERT INTO `area` VALUES ('210600', '210000', ',210000,210600', '2', '丹东市', 'mainland', '5');
INSERT INTO `area` VALUES ('210602', '210600', ',210000,210600,210602', '3', '元宝区', 'mainland', '5');
INSERT INTO `area` VALUES ('210603', '210600', ',210000,210600,210603', '3', '振兴区', 'mainland', '5');
INSERT INTO `area` VALUES ('210604', '210600', ',210000,210600,210604', '3', '振安区', 'mainland', '5');
INSERT INTO `area` VALUES ('210624', '210600', ',210000,210600,210624', '3', '宽甸满族自治县', 'mainland', '5');
INSERT INTO `area` VALUES ('210681', '210600', ',210000,210600,210681', '3', '东港市', 'mainland', '5');
INSERT INTO `area` VALUES ('210682', '210600', ',210000,210600,210682', '3', '凤城市', 'mainland', '5');
INSERT INTO `area` VALUES ('210683', '210600', ',210000,210600,210683', '3', '其它区', 'mainland', '5');
INSERT INTO `area` VALUES ('210700', '210000', ',210000,210700', '2', '锦州市', 'mainland', '5');
INSERT INTO `area` VALUES ('210702', '210700', ',210000,210700,210702', '3', '古塔区', 'mainland', '5');
INSERT INTO `area` VALUES ('210703', '210700', ',210000,210700,210703', '3', '凌河区', 'mainland', '5');
INSERT INTO `area` VALUES ('210711', '210700', ',210000,210700,210711', '3', '太和区', 'mainland', '5');
INSERT INTO `area` VALUES ('210726', '210700', ',210000,210700,210726', '3', '黑山县', 'mainland', '5');
INSERT INTO `area` VALUES ('210727', '210700', ',210000,210700,210727', '3', '义县', 'mainland', '5');
INSERT INTO `area` VALUES ('210781', '210700', ',210000,210700,210781', '3', '凌海市', 'mainland', '5');
INSERT INTO `area` VALUES ('210782', '210700', ',210000,210700,210782', '3', '北镇市', 'mainland', '5');
INSERT INTO `area` VALUES ('210783', '210700', ',210000,210700,210783', '3', '其它区', 'mainland', '5');
INSERT INTO `area` VALUES ('210800', '210000', ',210000,210800', '2', '营口市', 'mainland', '5');
INSERT INTO `area` VALUES ('210802', '210800', ',210000,210800,210802', '3', '站前区', 'mainland', '5');
INSERT INTO `area` VALUES ('210803', '210800', ',210000,210800,210803', '3', '西市区', 'mainland', '5');
INSERT INTO `area` VALUES ('210804', '210800', ',210000,210800,210804', '3', '鲅鱼圈区', 'mainland', '5');
INSERT INTO `area` VALUES ('210811', '210800', ',210000,210800,210811', '3', '老边区', 'mainland', '5');
INSERT INTO `area` VALUES ('210881', '210800', ',210000,210800,210881', '3', '盖州市', 'mainland', '5');
INSERT INTO `area` VALUES ('210882', '210800', ',210000,210800,210882', '3', '大石桥市', 'mainland', '5');
INSERT INTO `area` VALUES ('210883', '210800', ',210000,210800,210883', '3', '其它区', 'mainland', '5');
INSERT INTO `area` VALUES ('210900', '210000', ',210000,210900', '2', '阜新市', 'mainland', '5');
INSERT INTO `area` VALUES ('210902', '210900', ',210000,210900,210902', '3', '海州区', 'mainland', '5');
INSERT INTO `area` VALUES ('210903', '210900', ',210000,210900,210903', '3', '新邱区', 'mainland', '5');
INSERT INTO `area` VALUES ('210904', '210900', ',210000,210900,210904', '3', '太平区', 'mainland', '5');
INSERT INTO `area` VALUES ('210905', '210900', ',210000,210900,210905', '3', '清河门区', 'mainland', '5');
INSERT INTO `area` VALUES ('210911', '210900', ',210000,210900,210911', '3', '细河区', 'mainland', '5');
INSERT INTO `area` VALUES ('210921', '210900', ',210000,210900,210921', '3', '阜新蒙古族自治县', 'mainland', '5');
INSERT INTO `area` VALUES ('210922', '210900', ',210000,210900,210922', '3', '彰武县', 'mainland', '5');
INSERT INTO `area` VALUES ('210923', '210900', ',210000,210900,210923', '3', '其它区', 'mainland', '5');
INSERT INTO `area` VALUES ('211000', '210000', ',210000,211000', '2', '辽阳市', 'mainland', '5');
INSERT INTO `area` VALUES ('211002', '211000', ',210000,211000,211002', '3', '白塔区', 'mainland', '5');
INSERT INTO `area` VALUES ('211003', '211000', ',210000,211000,211003', '3', '文圣区', 'mainland', '5');
INSERT INTO `area` VALUES ('211004', '211000', ',210000,211000,211004', '3', '宏伟区', 'mainland', '5');
INSERT INTO `area` VALUES ('211005', '211000', ',210000,211000,211005', '3', '弓长岭区', 'mainland', '5');
INSERT INTO `area` VALUES ('211011', '211000', ',210000,211000,211011', '3', '太子河区', 'mainland', '5');
INSERT INTO `area` VALUES ('211021', '211000', ',210000,211000,211021', '3', '辽阳县', 'mainland', '5');
INSERT INTO `area` VALUES ('211081', '211000', ',210000,211000,211081', '3', '灯塔市', 'mainland', '5');
INSERT INTO `area` VALUES ('211082', '211000', ',210000,211000,211082', '3', '其它区', 'mainland', '5');
INSERT INTO `area` VALUES ('211100', '210000', ',210000,211100', '2', '盘锦市', 'mainland', '5');
INSERT INTO `area` VALUES ('211102', '211100', ',210000,211100,211102', '3', '双台子区', 'mainland', '5');
INSERT INTO `area` VALUES ('211103', '211100', ',210000,211100,211103', '3', '兴隆台区', 'mainland', '5');
INSERT INTO `area` VALUES ('211121', '211100', ',210000,211100,211121', '3', '大洼县', 'mainland', '5');
INSERT INTO `area` VALUES ('211122', '211100', ',210000,211100,211122', '3', '盘山县', 'mainland', '5');
INSERT INTO `area` VALUES ('211123', '211100', ',210000,211100,211123', '3', '其它区', 'mainland', '5');
INSERT INTO `area` VALUES ('211200', '210000', ',210000,211200', '2', '铁岭市', 'mainland', '5');
INSERT INTO `area` VALUES ('211202', '211200', ',210000,211200,211202', '3', '银州区', 'mainland', '5');
INSERT INTO `area` VALUES ('211204', '211200', ',210000,211200,211204', '3', '清河区', 'mainland', '5');
INSERT INTO `area` VALUES ('211221', '211200', ',210000,211200,211221', '3', '铁岭县', 'mainland', '5');
INSERT INTO `area` VALUES ('211223', '211200', ',210000,211200,211223', '3', '西丰县', 'mainland', '5');
INSERT INTO `area` VALUES ('211224', '211200', ',210000,211200,211224', '3', '昌图县', 'mainland', '5');
INSERT INTO `area` VALUES ('211281', '211200', ',210000,211200,211281', '3', '调兵山市', 'mainland', '5');
INSERT INTO `area` VALUES ('211282', '211200', ',210000,211200,211282', '3', '开原市', 'mainland', '5');
INSERT INTO `area` VALUES ('211283', '211200', ',210000,211200,211283', '3', '其它区', 'mainland', '5');
INSERT INTO `area` VALUES ('211300', '210000', ',210000,211300', '2', '朝阳市', 'mainland', '5');
INSERT INTO `area` VALUES ('211302', '211300', ',210000,211300,211302', '3', '双塔区', 'mainland', '5');
INSERT INTO `area` VALUES ('211303', '211300', ',210000,211300,211303', '3', '龙城区', 'mainland', '5');
INSERT INTO `area` VALUES ('211321', '211300', ',210000,211300,211321', '3', '朝阳县', 'mainland', '5');
INSERT INTO `area` VALUES ('211322', '211300', ',210000,211300,211322', '3', '建平县', 'mainland', '5');
INSERT INTO `area` VALUES ('211324', '211300', ',210000,211300,211324', '3', '喀喇沁左翼蒙古族自治县', 'mainland', '5');
INSERT INTO `area` VALUES ('211381', '211300', ',210000,211300,211381', '3', '北票市', 'mainland', '5');
INSERT INTO `area` VALUES ('211382', '211300', ',210000,211300,211382', '3', '凌源市', 'mainland', '5');
INSERT INTO `area` VALUES ('211383', '211300', ',210000,211300,211383', '3', '其它区', 'mainland', '5');
INSERT INTO `area` VALUES ('211400', '210000', ',210000,211400', '2', '葫芦岛市', 'mainland', '5');
INSERT INTO `area` VALUES ('211402', '211400', ',210000,211400,211402', '3', '连山区', 'mainland', '5');
INSERT INTO `area` VALUES ('211403', '211400', ',210000,211400,211403', '3', '龙港区', 'mainland', '5');
INSERT INTO `area` VALUES ('211404', '211400', ',210000,211400,211404', '3', '南票区', 'mainland', '5');
INSERT INTO `area` VALUES ('211421', '211400', ',210000,211400,211421', '3', '绥中县', 'mainland', '5');
INSERT INTO `area` VALUES ('211422', '211400', ',210000,211400,211422', '3', '建昌县', 'mainland', '5');
INSERT INTO `area` VALUES ('211481', '211400', ',210000,211400,211481', '3', '兴城市', 'mainland', '5');
INSERT INTO `area` VALUES ('211482', '211400', ',210000,211400,211482', '3', '其它区', 'mainland', '5');
INSERT INTO `area` VALUES ('220000', '100000', ',220000', '1', '吉林省', 'mainland', '5');
INSERT INTO `area` VALUES ('220100', '220000', ',220000,220100', '2', '长春市', 'mainland', '5');
INSERT INTO `area` VALUES ('220102', '220100', ',220000,220100,220102', '3', '南关区', 'mainland', '5');
INSERT INTO `area` VALUES ('220103', '220100', ',220000,220100,220103', '3', '宽城区', 'mainland', '5');
INSERT INTO `area` VALUES ('220104', '220100', ',220000,220100,220104', '3', '朝阳区', 'mainland', '5');
INSERT INTO `area` VALUES ('220105', '220100', ',220000,220100,220105', '3', '二道区', 'mainland', '5');
INSERT INTO `area` VALUES ('220106', '220100', ',220000,220100,220106', '3', '绿园区', 'mainland', '5');
INSERT INTO `area` VALUES ('220112', '220100', ',220000,220100,220112', '3', '双阳区', 'mainland', '5');
INSERT INTO `area` VALUES ('220122', '220100', ',220000,220100,220122', '3', '农安县', 'mainland', '5');
INSERT INTO `area` VALUES ('220181', '220100', ',220000,220100,220181', '3', '九台市', 'mainland', '5');
INSERT INTO `area` VALUES ('220182', '220100', ',220000,220100,220182', '3', '榆树市', 'mainland', '5');
INSERT INTO `area` VALUES ('220183', '220100', ',220000,220100,220183', '3', '德惠市', 'mainland', '5');
INSERT INTO `area` VALUES ('220184', '220100', ',220000,220100,220184', '3', '高新技术产业开发区', 'mainland', '5');
INSERT INTO `area` VALUES ('220185', '220100', ',220000,220100,220185', '3', '汽车产业开发区', 'mainland', '5');
INSERT INTO `area` VALUES ('220186', '220100', ',220000,220100,220186', '3', '经济技术开发区', 'mainland', '5');
INSERT INTO `area` VALUES ('220187', '220100', ',220000,220100,220187', '3', '净月旅游开发区', 'mainland', '5');
INSERT INTO `area` VALUES ('220188', '220100', ',220000,220100,220188', '3', '其它区', 'mainland', '5');
INSERT INTO `area` VALUES ('220200', '220000', ',220000,220200', '2', '吉林市', 'mainland', '5');
INSERT INTO `area` VALUES ('220202', '220200', ',220000,220200,220202', '3', '昌邑区', 'mainland', '5');
INSERT INTO `area` VALUES ('220203', '220200', ',220000,220200,220203', '3', '龙潭区', 'mainland', '5');
INSERT INTO `area` VALUES ('220204', '220200', ',220000,220200,220204', '3', '船营区', 'mainland', '5');
INSERT INTO `area` VALUES ('220211', '220200', ',220000,220200,220211', '3', '丰满区', 'mainland', '5');
INSERT INTO `area` VALUES ('220221', '220200', ',220000,220200,220221', '3', '永吉县', 'mainland', '5');
INSERT INTO `area` VALUES ('220281', '220200', ',220000,220200,220281', '3', '蛟河市', 'mainland', '5');
INSERT INTO `area` VALUES ('220282', '220200', ',220000,220200,220282', '3', '桦甸市', 'mainland', '5');
INSERT INTO `area` VALUES ('220283', '220200', ',220000,220200,220283', '3', '舒兰市', 'mainland', '5');
INSERT INTO `area` VALUES ('220284', '220200', ',220000,220200,220284', '3', '磐石市', 'mainland', '5');
INSERT INTO `area` VALUES ('220285', '220200', ',220000,220200,220285', '3', '其它区', 'mainland', '5');
INSERT INTO `area` VALUES ('220300', '220000', ',220000,220300', '2', '四平市', 'mainland', '5');
INSERT INTO `area` VALUES ('220302', '220300', ',220000,220300,220302', '3', '铁西区', 'mainland', '5');
INSERT INTO `area` VALUES ('220303', '220300', ',220000,220300,220303', '3', '铁东区', 'mainland', '5');
INSERT INTO `area` VALUES ('220322', '220300', ',220000,220300,220322', '3', '梨树县', 'mainland', '5');
INSERT INTO `area` VALUES ('220323', '220300', ',220000,220300,220323', '3', '伊通满族自治县', 'mainland', '5');
INSERT INTO `area` VALUES ('220381', '220300', ',220000,220300,220381', '3', '公主岭市', 'mainland', '5');
INSERT INTO `area` VALUES ('220382', '220300', ',220000,220300,220382', '3', '双辽市', 'mainland', '5');
INSERT INTO `area` VALUES ('220383', '220300', ',220000,220300,220383', '3', '其它区', 'mainland', '5');
INSERT INTO `area` VALUES ('220400', '220000', ',220000,220400', '2', '辽源市', 'mainland', '5');
INSERT INTO `area` VALUES ('220402', '220400', ',220000,220400,220402', '3', '龙山区', 'mainland', '5');
INSERT INTO `area` VALUES ('220403', '220400', ',220000,220400,220403', '3', '西安区', 'mainland', '5');
INSERT INTO `area` VALUES ('220421', '220400', ',220000,220400,220421', '3', '东丰县', 'mainland', '5');
INSERT INTO `area` VALUES ('220422', '220400', ',220000,220400,220422', '3', '东辽县', 'mainland', '5');
INSERT INTO `area` VALUES ('220423', '220400', ',220000,220400,220423', '3', '其它区', 'mainland', '5');
INSERT INTO `area` VALUES ('220500', '220000', ',220000,220500', '2', '通化市', 'mainland', '5');
INSERT INTO `area` VALUES ('220502', '220500', ',220000,220500,220502', '3', '东昌区', 'mainland', '5');
INSERT INTO `area` VALUES ('220503', '220500', ',220000,220500,220503', '3', '二道江区', 'mainland', '5');
INSERT INTO `area` VALUES ('220521', '220500', ',220000,220500,220521', '3', '通化县', 'mainland', '5');
INSERT INTO `area` VALUES ('220523', '220500', ',220000,220500,220523', '3', '辉南县', 'mainland', '5');
INSERT INTO `area` VALUES ('220524', '220500', ',220000,220500,220524', '3', '柳河县', 'mainland', '5');
INSERT INTO `area` VALUES ('220581', '220500', ',220000,220500,220581', '3', '梅河口市', 'mainland', '5');
INSERT INTO `area` VALUES ('220582', '220500', ',220000,220500,220582', '3', '集安市', 'mainland', '5');
INSERT INTO `area` VALUES ('220583', '220500', ',220000,220500,220583', '3', '其它区', 'mainland', '5');
INSERT INTO `area` VALUES ('220600', '220000', ',220000,220600', '2', '白山市', 'mainland', '5');
INSERT INTO `area` VALUES ('220602', '220600', ',220000,220600,220602', '3', '八道江区', 'mainland', '5');
INSERT INTO `area` VALUES ('220621', '220600', ',220000,220600,220621', '3', '抚松县', 'mainland', '5');
INSERT INTO `area` VALUES ('220622', '220600', ',220000,220600,220622', '3', '靖宇县', 'mainland', '5');
INSERT INTO `area` VALUES ('220623', '220600', ',220000,220600,220623', '3', '长白朝鲜族自治县', 'mainland', '5');
INSERT INTO `area` VALUES ('220625', '220600', ',220000,220600,220625', '3', '江源县', 'mainland', '5');
INSERT INTO `area` VALUES ('220681', '220600', ',220000,220600,220681', '3', '临江市', 'mainland', '5');
INSERT INTO `area` VALUES ('220682', '220600', ',220000,220600,220682', '3', '其它区', 'mainland', '5');
INSERT INTO `area` VALUES ('220700', '220000', ',220000,220700', '2', '松原市', 'mainland', '5');
INSERT INTO `area` VALUES ('220702', '220700', ',220000,220700,220702', '3', '宁江区', 'mainland', '5');
INSERT INTO `area` VALUES ('220721', '220700', ',220000,220700,220721', '3', '前郭尔罗斯蒙古族自治县', 'mainland', '5');
INSERT INTO `area` VALUES ('220722', '220700', ',220000,220700,220722', '3', '长岭县', 'mainland', '5');
INSERT INTO `area` VALUES ('220723', '220700', ',220000,220700,220723', '3', '乾安县', 'mainland', '5');
INSERT INTO `area` VALUES ('220724', '220700', ',220000,220700,220724', '3', '扶余县', 'mainland', '5');
INSERT INTO `area` VALUES ('220725', '220700', ',220000,220700,220725', '3', '其它区', 'mainland', '5');
INSERT INTO `area` VALUES ('220800', '220000', ',220000,220800', '2', '白城市', 'mainland', '5');
INSERT INTO `area` VALUES ('220802', '220800', ',220000,220800,220802', '3', '洮北区', 'mainland', '5');
INSERT INTO `area` VALUES ('220821', '220800', ',220000,220800,220821', '3', '镇赉县', 'mainland', '5');
INSERT INTO `area` VALUES ('220822', '220800', ',220000,220800,220822', '3', '通榆县', 'mainland', '5');
INSERT INTO `area` VALUES ('220881', '220800', ',220000,220800,220881', '3', '洮南市', 'mainland', '5');
INSERT INTO `area` VALUES ('220882', '220800', ',220000,220800,220882', '3', '大安市', 'mainland', '5');
INSERT INTO `area` VALUES ('220883', '220800', ',220000,220800,220883', '3', '其它区', 'mainland', '5');
INSERT INTO `area` VALUES ('222400', '220000', ',220000,222400', '2', '延边朝鲜族自治州', 'mainland', '5');
INSERT INTO `area` VALUES ('222401', '222400', ',220000,222400,222401', '3', '延吉市', 'mainland', '5');
INSERT INTO `area` VALUES ('222402', '222400', ',220000,222400,222402', '3', '图们市', 'mainland', '5');
INSERT INTO `area` VALUES ('222403', '222400', ',220000,222400,222403', '3', '敦化市', 'mainland', '5');
INSERT INTO `area` VALUES ('222404', '222400', ',220000,222400,222404', '3', '珲春市', 'mainland', '5');
INSERT INTO `area` VALUES ('222405', '222400', ',220000,222400,222405', '3', '龙井市', 'mainland', '5');
INSERT INTO `area` VALUES ('222406', '222400', ',220000,222400,222406', '3', '和龙市', 'mainland', '5');
INSERT INTO `area` VALUES ('222424', '222400', ',220000,222400,222424', '3', '汪清县', 'mainland', '5');
INSERT INTO `area` VALUES ('222426', '222400', ',220000,222400,222426', '3', '安图县', 'mainland', '5');
INSERT INTO `area` VALUES ('222427', '222400', ',220000,222400,222427', '3', '其它区', 'mainland', '5');
INSERT INTO `area` VALUES ('230000', '100000', ',230000', '1', '黑龙江省', 'mainland', '5');
INSERT INTO `area` VALUES ('230100', '230000', ',230000,230100', '2', '哈尔滨市', 'mainland', '5');
INSERT INTO `area` VALUES ('230102', '230100', ',230000,230100,230102', '3', '道里区', 'mainland', '5');
INSERT INTO `area` VALUES ('230103', '230100', ',230000,230100,230103', '3', '南岗区', 'mainland', '5');
INSERT INTO `area` VALUES ('230104', '230100', ',230000,230100,230104', '3', '道外区', 'mainland', '5');
INSERT INTO `area` VALUES ('230106', '230100', ',230000,230100,230106', '3', '香坊区', 'mainland', '5');
INSERT INTO `area` VALUES ('230107', '230100', ',230000,230100,230107', '3', '动力区', 'mainland', '5');
INSERT INTO `area` VALUES ('230108', '230100', ',230000,230100,230108', '3', '平房区', 'mainland', '5');
INSERT INTO `area` VALUES ('230109', '230100', ',230000,230100,230109', '3', '松北区', 'mainland', '5');
INSERT INTO `area` VALUES ('230111', '230100', ',230000,230100,230111', '3', '呼兰区', 'mainland', '5');
INSERT INTO `area` VALUES ('230123', '230100', ',230000,230100,230123', '3', '依兰县', 'mainland', '5');
INSERT INTO `area` VALUES ('230124', '230100', ',230000,230100,230124', '3', '方正县', 'mainland', '5');
INSERT INTO `area` VALUES ('230125', '230100', ',230000,230100,230125', '3', '宾县', 'mainland', '5');
INSERT INTO `area` VALUES ('230126', '230100', ',230000,230100,230126', '3', '巴彦县', 'mainland', '5');
INSERT INTO `area` VALUES ('230127', '230100', ',230000,230100,230127', '3', '木兰县', 'mainland', '5');
INSERT INTO `area` VALUES ('230128', '230100', ',230000,230100,230128', '3', '通河县', 'mainland', '5');
INSERT INTO `area` VALUES ('230129', '230100', ',230000,230100,230129', '3', '延寿县', 'mainland', '5');
INSERT INTO `area` VALUES ('230181', '230100', ',230000,230100,230181', '3', '阿城市', 'mainland', '5');
INSERT INTO `area` VALUES ('230182', '230100', ',230000,230100,230182', '3', '双城市', 'mainland', '5');
INSERT INTO `area` VALUES ('230183', '230100', ',230000,230100,230183', '3', '尚志市', 'mainland', '5');
INSERT INTO `area` VALUES ('230184', '230100', ',230000,230100,230184', '3', '五常市', 'mainland', '5');
INSERT INTO `area` VALUES ('230185', '230100', ',230000,230100,230185', '3', '阿城市', 'mainland', '5');
INSERT INTO `area` VALUES ('230186', '230100', ',230000,230100,230186', '3', '其它区', 'mainland', '5');
INSERT INTO `area` VALUES ('230200', '230000', ',230000,230200', '2', '齐齐哈尔市', 'mainland', '5');
INSERT INTO `area` VALUES ('230202', '230200', ',230000,230200,230202', '3', '龙沙区', 'mainland', '5');
INSERT INTO `area` VALUES ('230203', '230200', ',230000,230200,230203', '3', '建华区', 'mainland', '5');
INSERT INTO `area` VALUES ('230204', '230200', ',230000,230200,230204', '3', '铁锋区', 'mainland', '5');
INSERT INTO `area` VALUES ('230205', '230200', ',230000,230200,230205', '3', '昂昂溪区', 'mainland', '5');
INSERT INTO `area` VALUES ('230206', '230200', ',230000,230200,230206', '3', '富拉尔基区', 'mainland', '5');
INSERT INTO `area` VALUES ('230207', '230200', ',230000,230200,230207', '3', '碾子山区', 'mainland', '5');
INSERT INTO `area` VALUES ('230208', '230200', ',230000,230200,230208', '3', '梅里斯达斡尔族区', 'mainland', '5');
INSERT INTO `area` VALUES ('230221', '230200', ',230000,230200,230221', '3', '龙江县', 'mainland', '5');
INSERT INTO `area` VALUES ('230223', '230200', ',230000,230200,230223', '3', '依安县', 'mainland', '5');
INSERT INTO `area` VALUES ('230224', '230200', ',230000,230200,230224', '3', '泰来县', 'mainland', '5');
INSERT INTO `area` VALUES ('230225', '230200', ',230000,230200,230225', '3', '甘南县', 'mainland', '5');
INSERT INTO `area` VALUES ('230227', '230200', ',230000,230200,230227', '3', '富裕县', 'mainland', '5');
INSERT INTO `area` VALUES ('230229', '230200', ',230000,230200,230229', '3', '克山县', 'mainland', '5');
INSERT INTO `area` VALUES ('230230', '230200', ',230000,230200,230230', '3', '克东县', 'mainland', '5');
INSERT INTO `area` VALUES ('230231', '230200', ',230000,230200,230231', '3', '拜泉县', 'mainland', '5');
INSERT INTO `area` VALUES ('230281', '230200', ',230000,230200,230281', '3', '讷河市', 'mainland', '5');
INSERT INTO `area` VALUES ('230282', '230200', ',230000,230200,230282', '3', '其它区', 'mainland', '5');
INSERT INTO `area` VALUES ('230300', '230000', ',230000,230300', '2', '鸡西市', 'mainland', '5');
INSERT INTO `area` VALUES ('230302', '230300', ',230000,230300,230302', '3', '鸡冠区', 'mainland', '5');
INSERT INTO `area` VALUES ('230303', '230300', ',230000,230300,230303', '3', '恒山区', 'mainland', '5');
INSERT INTO `area` VALUES ('230304', '230300', ',230000,230300,230304', '3', '滴道区', 'mainland', '5');
INSERT INTO `area` VALUES ('230305', '230300', ',230000,230300,230305', '3', '梨树区', 'mainland', '5');
INSERT INTO `area` VALUES ('230306', '230300', ',230000,230300,230306', '3', '城子河区', 'mainland', '5');
INSERT INTO `area` VALUES ('230307', '230300', ',230000,230300,230307', '3', '麻山区', 'mainland', '5');
INSERT INTO `area` VALUES ('230321', '230300', ',230000,230300,230321', '3', '鸡东县', 'mainland', '5');
INSERT INTO `area` VALUES ('230381', '230300', ',230000,230300,230381', '3', '虎林市', 'mainland', '5');
INSERT INTO `area` VALUES ('230382', '230300', ',230000,230300,230382', '3', '密山市', 'mainland', '5');
INSERT INTO `area` VALUES ('230383', '230300', ',230000,230300,230383', '3', '其它区', 'mainland', '5');
INSERT INTO `area` VALUES ('230400', '230000', ',230000,230400', '2', '鹤岗市', 'mainland', '5');
INSERT INTO `area` VALUES ('230402', '230400', ',230000,230400,230402', '3', '向阳区', 'mainland', '5');
INSERT INTO `area` VALUES ('230403', '230400', ',230000,230400,230403', '3', '工农区', 'mainland', '5');
INSERT INTO `area` VALUES ('230404', '230400', ',230000,230400,230404', '3', '南山区', 'mainland', '5');
INSERT INTO `area` VALUES ('230405', '230400', ',230000,230400,230405', '3', '兴安区', 'mainland', '5');
INSERT INTO `area` VALUES ('230406', '230400', ',230000,230400,230406', '3', '东山区', 'mainland', '5');
INSERT INTO `area` VALUES ('230407', '230400', ',230000,230400,230407', '3', '兴山区', 'mainland', '5');
INSERT INTO `area` VALUES ('230421', '230400', ',230000,230400,230421', '3', '萝北县', 'mainland', '5');
INSERT INTO `area` VALUES ('230422', '230400', ',230000,230400,230422', '3', '绥滨县', 'mainland', '5');
INSERT INTO `area` VALUES ('230423', '230400', ',230000,230400,230423', '3', '其它区', 'mainland', '5');
INSERT INTO `area` VALUES ('230500', '230000', ',230000,230500', '2', '双鸭山市', 'mainland', '5');
INSERT INTO `area` VALUES ('230502', '230500', ',230000,230500,230502', '3', '尖山区', 'mainland', '5');
INSERT INTO `area` VALUES ('230503', '230500', ',230000,230500,230503', '3', '岭东区', 'mainland', '5');
INSERT INTO `area` VALUES ('230505', '230500', ',230000,230500,230505', '3', '四方台区', 'mainland', '5');
INSERT INTO `area` VALUES ('230506', '230500', ',230000,230500,230506', '3', '宝山区', 'mainland', '5');
INSERT INTO `area` VALUES ('230521', '230500', ',230000,230500,230521', '3', '集贤县', 'mainland', '5');
INSERT INTO `area` VALUES ('230522', '230500', ',230000,230500,230522', '3', '友谊县', 'mainland', '5');
INSERT INTO `area` VALUES ('230523', '230500', ',230000,230500,230523', '3', '宝清县', 'mainland', '5');
INSERT INTO `area` VALUES ('230524', '230500', ',230000,230500,230524', '3', '饶河县', 'mainland', '5');
INSERT INTO `area` VALUES ('230525', '230500', ',230000,230500,230525', '3', '其它区', 'mainland', '5');
INSERT INTO `area` VALUES ('230600', '230000', ',230000,230600', '2', '大庆市', 'mainland', '5');
INSERT INTO `area` VALUES ('230602', '230600', ',230000,230600,230602', '3', '萨尔图区', 'mainland', '5');
INSERT INTO `area` VALUES ('230603', '230600', ',230000,230600,230603', '3', '龙凤区', 'mainland', '5');
INSERT INTO `area` VALUES ('230604', '230600', ',230000,230600,230604', '3', '让胡路区', 'mainland', '5');
INSERT INTO `area` VALUES ('230605', '230600', ',230000,230600,230605', '3', '红岗区', 'mainland', '5');
INSERT INTO `area` VALUES ('230606', '230600', ',230000,230600,230606', '3', '大同区', 'mainland', '5');
INSERT INTO `area` VALUES ('230621', '230600', ',230000,230600,230621', '3', '肇州县', 'mainland', '5');
INSERT INTO `area` VALUES ('230622', '230600', ',230000,230600,230622', '3', '肇源县', 'mainland', '5');
INSERT INTO `area` VALUES ('230623', '230600', ',230000,230600,230623', '3', '林甸县', 'mainland', '5');
INSERT INTO `area` VALUES ('230624', '230600', ',230000,230600,230624', '3', '杜尔伯特蒙古族自治县', 'mainland', '5');
INSERT INTO `area` VALUES ('230625', '230600', ',230000,230600,230625', '3', '其它区', 'mainland', '5');
INSERT INTO `area` VALUES ('230700', '230000', ',230000,230700', '2', '伊春市', 'mainland', '5');
INSERT INTO `area` VALUES ('230702', '230700', ',230000,230700,230702', '3', '伊春区', 'mainland', '5');
INSERT INTO `area` VALUES ('230703', '230700', ',230000,230700,230703', '3', '南岔区', 'mainland', '5');
INSERT INTO `area` VALUES ('230704', '230700', ',230000,230700,230704', '3', '友好区', 'mainland', '5');
INSERT INTO `area` VALUES ('230705', '230700', ',230000,230700,230705', '3', '西林区', 'mainland', '5');
INSERT INTO `area` VALUES ('230706', '230700', ',230000,230700,230706', '3', '翠峦区', 'mainland', '5');
INSERT INTO `area` VALUES ('230707', '230700', ',230000,230700,230707', '3', '新青区', 'mainland', '5');
INSERT INTO `area` VALUES ('230708', '230700', ',230000,230700,230708', '3', '美溪区', 'mainland', '5');
INSERT INTO `area` VALUES ('230709', '230700', ',230000,230700,230709', '3', '金山屯区', 'mainland', '5');
INSERT INTO `area` VALUES ('230710', '230700', ',230000,230700,230710', '3', '五营区', 'mainland', '5');
INSERT INTO `area` VALUES ('230711', '230700', ',230000,230700,230711', '3', '乌马河区', 'mainland', '5');
INSERT INTO `area` VALUES ('230712', '230700', ',230000,230700,230712', '3', '汤旺河区', 'mainland', '5');
INSERT INTO `area` VALUES ('230713', '230700', ',230000,230700,230713', '3', '带岭区', 'mainland', '5');
INSERT INTO `area` VALUES ('230714', '230700', ',230000,230700,230714', '3', '乌伊岭区', 'mainland', '5');
INSERT INTO `area` VALUES ('230715', '230700', ',230000,230700,230715', '3', '红星区', 'mainland', '5');
INSERT INTO `area` VALUES ('230716', '230700', ',230000,230700,230716', '3', '上甘岭区', 'mainland', '5');
INSERT INTO `area` VALUES ('230722', '230700', ',230000,230700,230722', '3', '嘉荫县', 'mainland', '5');
INSERT INTO `area` VALUES ('230781', '230700', ',230000,230700,230781', '3', '铁力市', 'mainland', '5');
INSERT INTO `area` VALUES ('230782', '230700', ',230000,230700,230782', '3', '其它区', 'mainland', '5');
INSERT INTO `area` VALUES ('230800', '230000', ',230000,230800', '2', '佳木斯市', 'mainland', '5');
INSERT INTO `area` VALUES ('230802', '230800', ',230000,230800,230802', '3', '永红区', 'mainland', '5');
INSERT INTO `area` VALUES ('230803', '230800', ',230000,230800,230803', '3', '向阳区', 'mainland', '5');
INSERT INTO `area` VALUES ('230804', '230800', ',230000,230800,230804', '3', '前进区', 'mainland', '5');
INSERT INTO `area` VALUES ('230805', '230800', ',230000,230800,230805', '3', '东风区', 'mainland', '5');
INSERT INTO `area` VALUES ('230811', '230800', ',230000,230800,230811', '3', '郊区', 'mainland', '5');
INSERT INTO `area` VALUES ('230822', '230800', ',230000,230800,230822', '3', '桦南县', 'mainland', '5');
INSERT INTO `area` VALUES ('230826', '230800', ',230000,230800,230826', '3', '桦川县', 'mainland', '5');
INSERT INTO `area` VALUES ('230828', '230800', ',230000,230800,230828', '3', '汤原县', 'mainland', '5');
INSERT INTO `area` VALUES ('230833', '230800', ',230000,230800,230833', '3', '抚远县', 'mainland', '5');
INSERT INTO `area` VALUES ('230881', '230800', ',230000,230800,230881', '3', '同江市', 'mainland', '5');
INSERT INTO `area` VALUES ('230882', '230800', ',230000,230800,230882', '3', '富锦市', 'mainland', '5');
INSERT INTO `area` VALUES ('230883', '230800', ',230000,230800,230883', '3', '其它区', 'mainland', '5');
INSERT INTO `area` VALUES ('230900', '230000', ',230000,230900', '2', '七台河市', 'mainland', '5');
INSERT INTO `area` VALUES ('230902', '230900', ',230000,230900,230902', '3', '新兴区', 'mainland', '5');
INSERT INTO `area` VALUES ('230903', '230900', ',230000,230900,230903', '3', '桃山区', 'mainland', '5');
INSERT INTO `area` VALUES ('230904', '230900', ',230000,230900,230904', '3', '茄子河区', 'mainland', '5');
INSERT INTO `area` VALUES ('230921', '230900', ',230000,230900,230921', '3', '勃利县', 'mainland', '5');
INSERT INTO `area` VALUES ('230922', '230900', ',230000,230900,230922', '3', '其它区', 'mainland', '5');
INSERT INTO `area` VALUES ('231000', '230000', ',230000,231000', '2', '牡丹江市', 'mainland', '5');
INSERT INTO `area` VALUES ('231002', '231000', ',230000,231000,231002', '3', '东安区', 'mainland', '5');
INSERT INTO `area` VALUES ('231003', '231000', ',230000,231000,231003', '3', '阳明区', 'mainland', '5');
INSERT INTO `area` VALUES ('231004', '231000', ',230000,231000,231004', '3', '爱民区', 'mainland', '5');
INSERT INTO `area` VALUES ('231005', '231000', ',230000,231000,231005', '3', '西安区', 'mainland', '5');
INSERT INTO `area` VALUES ('231024', '231000', ',230000,231000,231024', '3', '东宁县', 'mainland', '5');
INSERT INTO `area` VALUES ('231025', '231000', ',230000,231000,231025', '3', '林口县', 'mainland', '5');
INSERT INTO `area` VALUES ('231081', '231000', ',230000,231000,231081', '3', '绥芬河市', 'mainland', '5');
INSERT INTO `area` VALUES ('231083', '231000', ',230000,231000,231083', '3', '海林市', 'mainland', '5');
INSERT INTO `area` VALUES ('231084', '231000', ',230000,231000,231084', '3', '宁安市', 'mainland', '5');
INSERT INTO `area` VALUES ('231085', '231000', ',230000,231000,231085', '3', '穆棱市', 'mainland', '5');
INSERT INTO `area` VALUES ('231086', '231000', ',230000,231000,231086', '3', '其它区', 'mainland', '5');
INSERT INTO `area` VALUES ('231100', '230000', ',230000,231100', '2', '黑河市', 'mainland', '5');
INSERT INTO `area` VALUES ('231102', '231100', ',230000,231100,231102', '3', '爱辉区', 'mainland', '5');
INSERT INTO `area` VALUES ('231121', '231100', ',230000,231100,231121', '3', '嫩江县', 'mainland', '5');
INSERT INTO `area` VALUES ('231123', '231100', ',230000,231100,231123', '3', '逊克县', 'mainland', '5');
INSERT INTO `area` VALUES ('231124', '231100', ',230000,231100,231124', '3', '孙吴县', 'mainland', '5');
INSERT INTO `area` VALUES ('231181', '231100', ',230000,231100,231181', '3', '北安市', 'mainland', '5');
INSERT INTO `area` VALUES ('231182', '231100', ',230000,231100,231182', '3', '五大连池市', 'mainland', '5');
INSERT INTO `area` VALUES ('231183', '231100', ',230000,231100,231183', '3', '其它区', 'mainland', '5');
INSERT INTO `area` VALUES ('231200', '230000', ',230000,231200', '2', '绥化市', 'mainland', '5');
INSERT INTO `area` VALUES ('231202', '231200', ',230000,231200,231202', '3', '北林区', 'mainland', '5');
INSERT INTO `area` VALUES ('231221', '231200', ',230000,231200,231221', '3', '望奎县', 'mainland', '5');
INSERT INTO `area` VALUES ('231222', '231200', ',230000,231200,231222', '3', '兰西县', 'mainland', '5');
INSERT INTO `area` VALUES ('231223', '231200', ',230000,231200,231223', '3', '青冈县', 'mainland', '5');
INSERT INTO `area` VALUES ('231224', '231200', ',230000,231200,231224', '3', '庆安县', 'mainland', '5');
INSERT INTO `area` VALUES ('231225', '231200', ',230000,231200,231225', '3', '明水县', 'mainland', '5');
INSERT INTO `area` VALUES ('231226', '231200', ',230000,231200,231226', '3', '绥棱县', 'mainland', '5');
INSERT INTO `area` VALUES ('231281', '231200', ',230000,231200,231281', '3', '安达市', 'mainland', '5');
INSERT INTO `area` VALUES ('231282', '231200', ',230000,231200,231282', '3', '肇东市', 'mainland', '5');
INSERT INTO `area` VALUES ('231283', '231200', ',230000,231200,231283', '3', '海伦市', 'mainland', '5');
INSERT INTO `area` VALUES ('231284', '231200', ',230000,231200,231284', '3', '其它区', 'mainland', '5');
INSERT INTO `area` VALUES ('232700', '230000', ',230000,232700', '2', '大兴安岭地区', 'mainland', '5');
INSERT INTO `area` VALUES ('232721', '232700', ',230000,232700,232721', '3', '呼玛县', 'mainland', '5');
INSERT INTO `area` VALUES ('232722', '232700', ',230000,232700,232722', '3', '塔河县', 'mainland', '5');
INSERT INTO `area` VALUES ('232723', '232700', ',230000,232700,232723', '3', '漠河县', 'mainland', '5');
INSERT INTO `area` VALUES ('232724', '232700', ',230000,232700,232724', '3', '加格达奇区', 'mainland', '5');
INSERT INTO `area` VALUES ('232725', '232700', ',230000,232700,232725', '3', '其它区', 'mainland', '5');
INSERT INTO `area` VALUES ('310000', '100000', ',310000', '1', '上海', 'mainland', '1');
INSERT INTO `area` VALUES ('310100', '310000', ',310000,310100', '2', '上海市', 'mainland', '1');
INSERT INTO `area` VALUES ('310101', '310100', ',310000,310100,310101', '3', '黄浦区', 'mainland', '1');
INSERT INTO `area` VALUES ('310103', '310100', ',310000,310100,310103', '3', '卢湾区', 'mainland', '1');
INSERT INTO `area` VALUES ('310104', '310100', ',310000,310100,310104', '3', '徐汇区', 'mainland', '1');
INSERT INTO `area` VALUES ('310105', '310100', ',310000,310100,310105', '3', '长宁区', 'mainland', '1');
INSERT INTO `area` VALUES ('310106', '310100', ',310000,310100,310106', '3', '静安区', 'mainland', '1');
INSERT INTO `area` VALUES ('310107', '310100', ',310000,310100,310107', '3', '普陀区', 'mainland', '1');
INSERT INTO `area` VALUES ('310108', '310100', ',310000,310100,310108', '3', '闸北区', 'mainland', '1');
INSERT INTO `area` VALUES ('310109', '310100', ',310000,310100,310109', '3', '虹口区', 'mainland', '1');
INSERT INTO `area` VALUES ('310110', '310100', ',310000,310100,310110', '3', '杨浦区', 'mainland', '1');
INSERT INTO `area` VALUES ('310112', '310100', ',310000,310100,310112', '3', '闵行区', 'mainland', '1');
INSERT INTO `area` VALUES ('310113', '310100', ',310000,310100,310113', '3', '宝山区', 'mainland', '1');
INSERT INTO `area` VALUES ('310114', '310100', ',310000,310100,310114', '3', '嘉定区', 'mainland', '1');
INSERT INTO `area` VALUES ('310115', '310100', ',310000,310100,310115', '3', '浦东新区', 'mainland', '1');
INSERT INTO `area` VALUES ('310116', '310100', ',310000,310100,310116', '3', '金山区', 'mainland', '1');
INSERT INTO `area` VALUES ('310117', '310100', ',310000,310100,310117', '3', '松江区', 'mainland', '1');
INSERT INTO `area` VALUES ('310118', '310100', ',310000,310100,310118', '3', '青浦区', 'mainland', '1');
INSERT INTO `area` VALUES ('310119', '310100', ',310000,310100,310119', '3', '南汇区', 'mainland', '1');
INSERT INTO `area` VALUES ('310120', '310100', ',310000,310100,310120', '3', '奉贤区', 'mainland', '1');
INSERT INTO `area` VALUES ('310152', '310100', ',310000,310100,310152', '3', '川沙区', 'mainland', '1');
INSERT INTO `area` VALUES ('310230', '310100', ',310000,310100,310230', '3', '崇明县', 'mainland', '1');
INSERT INTO `area` VALUES ('310231', '310100', ',310000,310100,310231', '3', '其它区', 'mainland', '1');
INSERT INTO `area` VALUES ('320000', '100000', ',320000', '1', '江苏省', 'mainland', '1');
INSERT INTO `area` VALUES ('320100', '320000', ',320000,320100', '2', '南京市', 'mainland', '1');
INSERT INTO `area` VALUES ('320102', '320100', ',320000,320100,320102', '3', '玄武区', 'mainland', '1');
INSERT INTO `area` VALUES ('320103', '320100', ',320000,320100,320103', '3', '白下区', 'mainland', '1');
INSERT INTO `area` VALUES ('320104', '320100', ',320000,320100,320104', '3', '秦淮区', 'mainland', '1');
INSERT INTO `area` VALUES ('320105', '320100', ',320000,320100,320105', '3', '建邺区', 'mainland', '1');
INSERT INTO `area` VALUES ('320106', '320100', ',320000,320100,320106', '3', '鼓楼区', 'mainland', '1');
INSERT INTO `area` VALUES ('320107', '320100', ',320000,320100,320107', '3', '下关区', 'mainland', '1');
INSERT INTO `area` VALUES ('320111', '320100', ',320000,320100,320111', '3', '浦口区', 'mainland', '1');
INSERT INTO `area` VALUES ('320113', '320100', ',320000,320100,320113', '3', '栖霞区', 'mainland', '1');
INSERT INTO `area` VALUES ('320114', '320100', ',320000,320100,320114', '3', '雨花台区', 'mainland', '1');
INSERT INTO `area` VALUES ('320115', '320100', ',320000,320100,320115', '3', '江宁区', 'mainland', '1');
INSERT INTO `area` VALUES ('320116', '320100', ',320000,320100,320116', '3', '六合区', 'mainland', '1');
INSERT INTO `area` VALUES ('320124', '320100', ',320000,320100,320124', '3', '溧水县', 'mainland', '1');
INSERT INTO `area` VALUES ('320125', '320100', ',320000,320100,320125', '3', '高淳县', 'mainland', '1');
INSERT INTO `area` VALUES ('320126', '320100', ',320000,320100,320126', '3', '其它区', 'mainland', '1');
INSERT INTO `area` VALUES ('320200', '320000', ',320000,320200', '2', '无锡市', 'mainland', '1');
INSERT INTO `area` VALUES ('320202', '320200', ',320000,320200,320202', '3', '崇安区', 'mainland', '1');
INSERT INTO `area` VALUES ('320203', '320200', ',320000,320200,320203', '3', '南长区', 'mainland', '1');
INSERT INTO `area` VALUES ('320204', '320200', ',320000,320200,320204', '3', '北塘区', 'mainland', '1');
INSERT INTO `area` VALUES ('320205', '320200', ',320000,320200,320205', '3', '锡山区', 'mainland', '1');
INSERT INTO `area` VALUES ('320206', '320200', ',320000,320200,320206', '3', '惠山区', 'mainland', '1');
INSERT INTO `area` VALUES ('320211', '320200', ',320000,320200,320211', '3', '滨湖区', 'mainland', '1');
INSERT INTO `area` VALUES ('320281', '320200', ',320000,320200,320281', '3', '江阴市', 'mainland', '1');
INSERT INTO `area` VALUES ('320282', '320200', ',320000,320200,320282', '3', '宜兴市', 'mainland', '1');
INSERT INTO `area` VALUES ('320296', '320200', ',320000,320200,320296', '3', '新区', 'mainland', '1');
INSERT INTO `area` VALUES ('320297', '320200', ',320000,320200,320297', '3', '其它区', 'mainland', '1');
INSERT INTO `area` VALUES ('320300', '320000', ',320000,320300', '2', '徐州市', 'mainland', '1');
INSERT INTO `area` VALUES ('320302', '320300', ',320000,320300,320302', '3', '鼓楼区', 'mainland', '1');
INSERT INTO `area` VALUES ('320303', '320300', ',320000,320300,320303', '3', '云龙区', 'mainland', '1');
INSERT INTO `area` VALUES ('320304', '320300', ',320000,320300,320304', '3', '九里区', 'mainland', '1');
INSERT INTO `area` VALUES ('320305', '320300', ',320000,320300,320305', '3', '贾汪区', 'mainland', '1');
INSERT INTO `area` VALUES ('320311', '320300', ',320000,320300,320311', '3', '泉山区', 'mainland', '1');
INSERT INTO `area` VALUES ('320321', '320300', ',320000,320300,320321', '3', '丰县', 'mainland', '1');
INSERT INTO `area` VALUES ('320322', '320300', ',320000,320300,320322', '3', '沛县', 'mainland', '1');
INSERT INTO `area` VALUES ('320323', '320300', ',320000,320300,320323', '3', '铜山县', 'mainland', '1');
INSERT INTO `area` VALUES ('320324', '320300', ',320000,320300,320324', '3', '睢宁县', 'mainland', '1');
INSERT INTO `area` VALUES ('320381', '320300', ',320000,320300,320381', '3', '新沂市', 'mainland', '1');
INSERT INTO `area` VALUES ('320382', '320300', ',320000,320300,320382', '3', '邳州市', 'mainland', '1');
INSERT INTO `area` VALUES ('320383', '320300', ',320000,320300,320383', '3', '其它区', 'mainland', '1');
INSERT INTO `area` VALUES ('320400', '320000', ',320000,320400', '2', '常州市', 'mainland', '1');
INSERT INTO `area` VALUES ('320402', '320400', ',320000,320400,320402', '3', '天宁区', 'mainland', '1');
INSERT INTO `area` VALUES ('320404', '320400', ',320000,320400,320404', '3', '钟楼区', 'mainland', '1');
INSERT INTO `area` VALUES ('320405', '320400', ',320000,320400,320405', '3', '戚墅堰区', 'mainland', '1');
INSERT INTO `area` VALUES ('320411', '320400', ',320000,320400,320411', '3', '新北区', 'mainland', '1');
INSERT INTO `area` VALUES ('320412', '320400', ',320000,320400,320412', '3', '武进区', 'mainland', '1');
INSERT INTO `area` VALUES ('320481', '320400', ',320000,320400,320481', '3', '溧阳市', 'mainland', '1');
INSERT INTO `area` VALUES ('320482', '320400', ',320000,320400,320482', '3', '金坛市', 'mainland', '1');
INSERT INTO `area` VALUES ('320483', '320400', ',320000,320400,320483', '3', '其它区', 'mainland', '1');
INSERT INTO `area` VALUES ('320500', '320000', ',320000,320500', '2', '苏州市', 'mainland', '1');
INSERT INTO `area` VALUES ('320502', '320500', ',320000,320500,320502', '3', '沧浪区', 'mainland', '1');
INSERT INTO `area` VALUES ('320503', '320500', ',320000,320500,320503', '3', '平江区', 'mainland', '1');
INSERT INTO `area` VALUES ('320504', '320500', ',320000,320500,320504', '3', '金阊区', 'mainland', '1');
INSERT INTO `area` VALUES ('320505', '320500', ',320000,320500,320505', '3', '虎丘区', 'mainland', '1');
INSERT INTO `area` VALUES ('320506', '320500', ',320000,320500,320506', '3', '吴中区', 'mainland', '1');
INSERT INTO `area` VALUES ('320507', '320500', ',320000,320500,320507', '3', '相城区', 'mainland', '1');
INSERT INTO `area` VALUES ('320581', '320500', ',320000,320500,320581', '3', '常熟市', 'mainland', '1');
INSERT INTO `area` VALUES ('320582', '320500', ',320000,320500,320582', '3', '张家港市', 'mainland', '1');
INSERT INTO `area` VALUES ('320583', '320500', ',320000,320500,320583', '3', '昆山市', 'mainland', '1');
INSERT INTO `area` VALUES ('320584', '320500', ',320000,320500,320584', '3', '吴江市', 'mainland', '1');
INSERT INTO `area` VALUES ('320585', '320500', ',320000,320500,320585', '3', '太仓市', 'mainland', '1');
INSERT INTO `area` VALUES ('320594', '320500', ',320000,320500,320594', '3', '新区', 'mainland', '1');
INSERT INTO `area` VALUES ('320595', '320500', ',320000,320500,320595', '3', '园区', 'mainland', '1');
INSERT INTO `area` VALUES ('320596', '320500', ',320000,320500,320596', '3', '其它区', 'mainland', '1');
INSERT INTO `area` VALUES ('320600', '320000', ',320000,320600', '2', '南通市', 'mainland', '1');
INSERT INTO `area` VALUES ('320602', '320600', ',320000,320600,320602', '3', '崇川区', 'mainland', '1');
INSERT INTO `area` VALUES ('320611', '320600', ',320000,320600,320611', '3', '港闸区', 'mainland', '1');
INSERT INTO `area` VALUES ('320621', '320600', ',320000,320600,320621', '3', '海安县', 'mainland', '1');
INSERT INTO `area` VALUES ('320623', '320600', ',320000,320600,320623', '3', '如东县', 'mainland', '1');
INSERT INTO `area` VALUES ('320681', '320600', ',320000,320600,320681', '3', '启东市', 'mainland', '1');
INSERT INTO `area` VALUES ('320682', '320600', ',320000,320600,320682', '3', '如皋市', 'mainland', '1');
INSERT INTO `area` VALUES ('320683', '320600', ',320000,320600,320683', '3', '通州市', 'mainland', '1');
INSERT INTO `area` VALUES ('320684', '320600', ',320000,320600,320684', '3', '海门市', 'mainland', '1');
INSERT INTO `area` VALUES ('320693', '320600', ',320000,320600,320693', '3', '开发区', 'mainland', '1');
INSERT INTO `area` VALUES ('320694', '320600', ',320000,320600,320694', '3', '其它区', 'mainland', '1');
INSERT INTO `area` VALUES ('320700', '320000', ',320000,320700', '2', '连云港市', 'mainland', '1');
INSERT INTO `area` VALUES ('320703', '320700', ',320000,320700,320703', '3', '连云区', 'mainland', '1');
INSERT INTO `area` VALUES ('320705', '320700', ',320000,320700,320705', '3', '新浦区', 'mainland', '1');
INSERT INTO `area` VALUES ('320706', '320700', ',320000,320700,320706', '3', '海州区', 'mainland', '1');
INSERT INTO `area` VALUES ('320721', '320700', ',320000,320700,320721', '3', '赣榆县', 'mainland', '1');
INSERT INTO `area` VALUES ('320722', '320700', ',320000,320700,320722', '3', '东海县', 'mainland', '1');
INSERT INTO `area` VALUES ('320723', '320700', ',320000,320700,320723', '3', '灌云县', 'mainland', '1');
INSERT INTO `area` VALUES ('320724', '320700', ',320000,320700,320724', '3', '灌南县', 'mainland', '1');
INSERT INTO `area` VALUES ('320725', '320700', ',320000,320700,320725', '3', '其它区', 'mainland', '1');
INSERT INTO `area` VALUES ('320800', '320000', ',320000,320800', '2', '淮安市', 'mainland', '1');
INSERT INTO `area` VALUES ('320802', '320800', ',320000,320800,320802', '3', '清河区', 'mainland', '1');
INSERT INTO `area` VALUES ('320803', '320800', ',320000,320800,320803', '3', '楚州区', 'mainland', '1');
INSERT INTO `area` VALUES ('320804', '320800', ',320000,320800,320804', '3', '淮阴区', 'mainland', '1');
INSERT INTO `area` VALUES ('320811', '320800', ',320000,320800,320811', '3', '清浦区', 'mainland', '1');
INSERT INTO `area` VALUES ('320826', '320800', ',320000,320800,320826', '3', '涟水县', 'mainland', '1');
INSERT INTO `area` VALUES ('320829', '320800', ',320000,320800,320829', '3', '洪泽县', 'mainland', '1');
INSERT INTO `area` VALUES ('320830', '320800', ',320000,320800,320830', '3', '盱眙县', 'mainland', '1');
INSERT INTO `area` VALUES ('320831', '320800', ',320000,320800,320831', '3', '金湖县', 'mainland', '1');
INSERT INTO `area` VALUES ('320832', '320800', ',320000,320800,320832', '3', '其它区', 'mainland', '1');
INSERT INTO `area` VALUES ('320900', '320000', ',320000,320900', '2', '盐城市', 'mainland', '1');
INSERT INTO `area` VALUES ('320902', '320900', ',320000,320900,320902', '3', '亭湖区', 'mainland', '1');
INSERT INTO `area` VALUES ('320903', '320900', ',320000,320900,320903', '3', '盐都区', 'mainland', '1');
INSERT INTO `area` VALUES ('320921', '320900', ',320000,320900,320921', '3', '响水县', 'mainland', '1');
INSERT INTO `area` VALUES ('320922', '320900', ',320000,320900,320922', '3', '滨海县', 'mainland', '1');
INSERT INTO `area` VALUES ('320923', '320900', ',320000,320900,320923', '3', '阜宁县', 'mainland', '1');
INSERT INTO `area` VALUES ('320924', '320900', ',320000,320900,320924', '3', '射阳县', 'mainland', '1');
INSERT INTO `area` VALUES ('320925', '320900', ',320000,320900,320925', '3', '建湖县', 'mainland', '1');
INSERT INTO `area` VALUES ('320981', '320900', ',320000,320900,320981', '3', '东台市', 'mainland', '1');
INSERT INTO `area` VALUES ('320982', '320900', ',320000,320900,320982', '3', '大丰市', 'mainland', '1');
INSERT INTO `area` VALUES ('320983', '320900', ',320000,320900,320983', '3', '其它区', 'mainland', '1');
INSERT INTO `area` VALUES ('321000', '320000', ',320000,321000', '2', '扬州市', 'mainland', '1');
INSERT INTO `area` VALUES ('321002', '321000', ',320000,321000,321002', '3', '广陵区', 'mainland', '1');
INSERT INTO `area` VALUES ('321003', '321000', ',320000,321000,321003', '3', '邗江区', 'mainland', '1');
INSERT INTO `area` VALUES ('321011', '321000', ',320000,321000,321011', '3', '维扬区', 'mainland', '1');
INSERT INTO `area` VALUES ('321023', '321000', ',320000,321000,321023', '3', '宝应县', 'mainland', '1');
INSERT INTO `area` VALUES ('321081', '321000', ',320000,321000,321081', '3', '仪征市', 'mainland', '1');
INSERT INTO `area` VALUES ('321084', '321000', ',320000,321000,321084', '3', '高邮市', 'mainland', '1');
INSERT INTO `area` VALUES ('321088', '321000', ',320000,321000,321088', '3', '江都市', 'mainland', '1');
INSERT INTO `area` VALUES ('321092', '321000', ',320000,321000,321092', '3', '经济开发区', 'mainland', '1');
INSERT INTO `area` VALUES ('321093', '321000', ',320000,321000,321093', '3', '其它区', 'mainland', '1');
INSERT INTO `area` VALUES ('321100', '320000', ',320000,321100', '2', '镇江市', 'mainland', '1');
INSERT INTO `area` VALUES ('321102', '321100', ',320000,321100,321102', '3', '京口区', 'mainland', '1');
INSERT INTO `area` VALUES ('321111', '321100', ',320000,321100,321111', '3', '润州区', 'mainland', '1');
INSERT INTO `area` VALUES ('321112', '321100', ',320000,321100,321112', '3', '丹徒区', 'mainland', '1');
INSERT INTO `area` VALUES ('321181', '321100', ',320000,321100,321181', '3', '丹阳市', 'mainland', '1');
INSERT INTO `area` VALUES ('321182', '321100', ',320000,321100,321182', '3', '扬中市', 'mainland', '1');
INSERT INTO `area` VALUES ('321183', '321100', ',320000,321100,321183', '3', '句容市', 'mainland', '1');
INSERT INTO `area` VALUES ('321184', '321100', ',320000,321100,321184', '3', '其它区', 'mainland', '1');
INSERT INTO `area` VALUES ('321200', '320000', ',320000,321200', '2', '泰州市', 'mainland', '1');
INSERT INTO `area` VALUES ('321202', '321200', ',320000,321200,321202', '3', '海陵区', 'mainland', '1');
INSERT INTO `area` VALUES ('321203', '321200', ',320000,321200,321203', '3', '高港区', 'mainland', '1');
INSERT INTO `area` VALUES ('321281', '321200', ',320000,321200,321281', '3', '兴化市', 'mainland', '1');
INSERT INTO `area` VALUES ('321282', '321200', ',320000,321200,321282', '3', '靖江市', 'mainland', '1');
INSERT INTO `area` VALUES ('321283', '321200', ',320000,321200,321283', '3', '泰兴市', 'mainland', '1');
INSERT INTO `area` VALUES ('321284', '321200', ',320000,321200,321284', '3', '姜堰市', 'mainland', '1');
INSERT INTO `area` VALUES ('321285', '321200', ',320000,321200,321285', '3', '其它区', 'mainland', '1');
INSERT INTO `area` VALUES ('321300', '320000', ',320000,321300', '2', '宿迁市', 'mainland', '1');
INSERT INTO `area` VALUES ('321302', '321300', ',320000,321300,321302', '3', '宿城区', 'mainland', '1');
INSERT INTO `area` VALUES ('321311', '321300', ',320000,321300,321311', '3', '宿豫区', 'mainland', '1');
INSERT INTO `area` VALUES ('321322', '321300', ',320000,321300,321322', '3', '沭阳县', 'mainland', '1');
INSERT INTO `area` VALUES ('321323', '321300', ',320000,321300,321323', '3', '泗阳县', 'mainland', '1');
INSERT INTO `area` VALUES ('321324', '321300', ',320000,321300,321324', '3', '泗洪县', 'mainland', '1');
INSERT INTO `area` VALUES ('321325', '321300', ',320000,321300,321325', '3', '其它区', 'mainland', '1');
INSERT INTO `area` VALUES ('330000', '100000', ',330000', '1', '浙江省', 'mainland', '1');
INSERT INTO `area` VALUES ('330100', '330000', ',330000,330100', '2', '杭州市', 'mainland', '1');
INSERT INTO `area` VALUES ('330102', '330100', ',330000,330100,330102', '3', '上城区', 'mainland', '1');
INSERT INTO `area` VALUES ('330103', '330100', ',330000,330100,330103', '3', '下城区', 'mainland', '1');
INSERT INTO `area` VALUES ('330104', '330100', ',330000,330100,330104', '3', '江干区', 'mainland', '1');
INSERT INTO `area` VALUES ('330105', '330100', ',330000,330100,330105', '3', '拱墅区', 'mainland', '1');
INSERT INTO `area` VALUES ('330106', '330100', ',330000,330100,330106', '3', '西湖区', 'mainland', '1');
INSERT INTO `area` VALUES ('330108', '330100', ',330000,330100,330108', '3', '滨江区', 'mainland', '1');
INSERT INTO `area` VALUES ('330109', '330100', ',330000,330100,330109', '3', '萧山区', 'mainland', '1');
INSERT INTO `area` VALUES ('330110', '330100', ',330000,330100,330110', '3', '余杭区', 'mainland', '1');
INSERT INTO `area` VALUES ('330122', '330100', ',330000,330100,330122', '3', '桐庐县', 'mainland', '1');
INSERT INTO `area` VALUES ('330127', '330100', ',330000,330100,330127', '3', '淳安县', 'mainland', '1');
INSERT INTO `area` VALUES ('330182', '330100', ',330000,330100,330182', '3', '建德市', 'mainland', '1');
INSERT INTO `area` VALUES ('330183', '330100', ',330000,330100,330183', '3', '富阳市', 'mainland', '1');
INSERT INTO `area` VALUES ('330185', '330100', ',330000,330100,330185', '3', '临安市', 'mainland', '1');
INSERT INTO `area` VALUES ('330186', '330100', ',330000,330100,330186', '3', '其它区', 'mainland', '1');
INSERT INTO `area` VALUES ('330200', '330000', ',330000,330200', '2', '宁波市', 'mainland', '1');
INSERT INTO `area` VALUES ('330203', '330200', ',330000,330200,330203', '3', '海曙区', 'mainland', '1');
INSERT INTO `area` VALUES ('330204', '330200', ',330000,330200,330204', '3', '江东区', 'mainland', '1');
INSERT INTO `area` VALUES ('330205', '330200', ',330000,330200,330205', '3', '江北区', 'mainland', '1');
INSERT INTO `area` VALUES ('330206', '330200', ',330000,330200,330206', '3', '北仑区', 'mainland', '1');
INSERT INTO `area` VALUES ('330211', '330200', ',330000,330200,330211', '3', '镇海区', 'mainland', '1');
INSERT INTO `area` VALUES ('330212', '330200', ',330000,330200,330212', '3', '鄞州区', 'mainland', '1');
INSERT INTO `area` VALUES ('330225', '330200', ',330000,330200,330225', '3', '象山县', 'mainland', '1');
INSERT INTO `area` VALUES ('330226', '330200', ',330000,330200,330226', '3', '宁海县', 'mainland', '1');
INSERT INTO `area` VALUES ('330281', '330200', ',330000,330200,330281', '3', '余姚市', 'mainland', '1');
INSERT INTO `area` VALUES ('330282', '330200', ',330000,330200,330282', '3', '慈溪市', 'mainland', '1');
INSERT INTO `area` VALUES ('330283', '330200', ',330000,330200,330283', '3', '奉化市', 'mainland', '1');
INSERT INTO `area` VALUES ('330284', '330200', ',330000,330200,330284', '3', '其它区', 'mainland', '1');
INSERT INTO `area` VALUES ('330300', '330000', ',330000,330300', '2', '温州市', 'mainland', '1');
INSERT INTO `area` VALUES ('330302', '330300', ',330000,330300,330302', '3', '鹿城区', 'mainland', '1');
INSERT INTO `area` VALUES ('330303', '330300', ',330000,330300,330303', '3', '龙湾区', 'mainland', '1');
INSERT INTO `area` VALUES ('330304', '330300', ',330000,330300,330304', '3', '瓯海区', 'mainland', '1');
INSERT INTO `area` VALUES ('330322', '330300', ',330000,330300,330322', '3', '洞头县', 'mainland', '1');
INSERT INTO `area` VALUES ('330324', '330300', ',330000,330300,330324', '3', '永嘉县', 'mainland', '1');
INSERT INTO `area` VALUES ('330326', '330300', ',330000,330300,330326', '3', '平阳县', 'mainland', '1');
INSERT INTO `area` VALUES ('330327', '330300', ',330000,330300,330327', '3', '苍南县', 'mainland', '1');
INSERT INTO `area` VALUES ('330328', '330300', ',330000,330300,330328', '3', '文成县', 'mainland', '1');
INSERT INTO `area` VALUES ('330329', '330300', ',330000,330300,330329', '3', '泰顺县', 'mainland', '1');
INSERT INTO `area` VALUES ('330381', '330300', ',330000,330300,330381', '3', '瑞安市', 'mainland', '1');
INSERT INTO `area` VALUES ('330382', '330300', ',330000,330300,330382', '3', '乐清市', 'mainland', '1');
INSERT INTO `area` VALUES ('330383', '330300', ',330000,330300,330383', '3', '其它区', 'mainland', '1');
INSERT INTO `area` VALUES ('330400', '330000', ',330000,330400', '2', '嘉兴市', 'mainland', '1');
INSERT INTO `area` VALUES ('330402', '330400', ',330000,330400,330402', '3', '南湖区', 'mainland', '1');
INSERT INTO `area` VALUES ('330411', '330400', ',330000,330400,330411', '3', '秀洲区', 'mainland', '1');
INSERT INTO `area` VALUES ('330421', '330400', ',330000,330400,330421', '3', '嘉善县', 'mainland', '1');
INSERT INTO `area` VALUES ('330424', '330400', ',330000,330400,330424', '3', '海盐县', 'mainland', '1');
INSERT INTO `area` VALUES ('330481', '330400', ',330000,330400,330481', '3', '海宁市', 'mainland', '1');
INSERT INTO `area` VALUES ('330482', '330400', ',330000,330400,330482', '3', '平湖市', 'mainland', '1');
INSERT INTO `area` VALUES ('330483', '330400', ',330000,330400,330483', '3', '桐乡市', 'mainland', '1');
INSERT INTO `area` VALUES ('330484', '330400', ',330000,330400,330484', '3', '其它区', 'mainland', '1');
INSERT INTO `area` VALUES ('330500', '330000', ',330000,330500', '2', '湖州市', 'mainland', '1');
INSERT INTO `area` VALUES ('330502', '330500', ',330000,330500,330502', '3', '吴兴区', 'mainland', '1');
INSERT INTO `area` VALUES ('330503', '330500', ',330000,330500,330503', '3', '南浔区', 'mainland', '1');
INSERT INTO `area` VALUES ('330521', '330500', ',330000,330500,330521', '3', '德清县', 'mainland', '1');
INSERT INTO `area` VALUES ('330522', '330500', ',330000,330500,330522', '3', '长兴县', 'mainland', '1');
INSERT INTO `area` VALUES ('330523', '330500', ',330000,330500,330523', '3', '安吉县', 'mainland', '1');
INSERT INTO `area` VALUES ('330524', '330500', ',330000,330500,330524', '3', '其它区', 'mainland', '1');
INSERT INTO `area` VALUES ('330600', '330000', ',330000,330600', '2', '绍兴市', 'mainland', '1');
INSERT INTO `area` VALUES ('330602', '330600', ',330000,330600,330602', '3', '越城区', 'mainland', '1');
INSERT INTO `area` VALUES ('330621', '330600', ',330000,330600,330621', '3', '绍兴县', 'mainland', '1');
INSERT INTO `area` VALUES ('330624', '330600', ',330000,330600,330624', '3', '新昌县', 'mainland', '1');
INSERT INTO `area` VALUES ('330681', '330600', ',330000,330600,330681', '3', '诸暨市', 'mainland', '1');
INSERT INTO `area` VALUES ('330682', '330600', ',330000,330600,330682', '3', '上虞市', 'mainland', '1');
INSERT INTO `area` VALUES ('330683', '330600', ',330000,330600,330683', '3', '嵊州市', 'mainland', '1');
INSERT INTO `area` VALUES ('330684', '330600', ',330000,330600,330684', '3', '其它区', 'mainland', '1');
INSERT INTO `area` VALUES ('330700', '330000', ',330000,330700', '2', '金华市', 'mainland', '1');
INSERT INTO `area` VALUES ('330702', '330700', ',330000,330700,330702', '3', '婺城区', 'mainland', '1');
INSERT INTO `area` VALUES ('330703', '330700', ',330000,330700,330703', '3', '金东区', 'mainland', '1');
INSERT INTO `area` VALUES ('330723', '330700', ',330000,330700,330723', '3', '武义县', 'mainland', '1');
INSERT INTO `area` VALUES ('330726', '330700', ',330000,330700,330726', '3', '浦江县', 'mainland', '1');
INSERT INTO `area` VALUES ('330727', '330700', ',330000,330700,330727', '3', '磐安县', 'mainland', '1');
INSERT INTO `area` VALUES ('330781', '330700', ',330000,330700,330781', '3', '兰溪市', 'mainland', '1');
INSERT INTO `area` VALUES ('330782', '330700', ',330000,330700,330782', '3', '义乌市', 'mainland', '1');
INSERT INTO `area` VALUES ('330783', '330700', ',330000,330700,330783', '3', '东阳市', 'mainland', '1');
INSERT INTO `area` VALUES ('330784', '330700', ',330000,330700,330784', '3', '永康市', 'mainland', '1');
INSERT INTO `area` VALUES ('330785', '330700', ',330000,330700,330785', '3', '其它区', 'mainland', '1');
INSERT INTO `area` VALUES ('330800', '330000', ',330000,330800', '2', '衢州市', 'mainland', '1');
INSERT INTO `area` VALUES ('330802', '330800', ',330000,330800,330802', '3', '柯城区', 'mainland', '1');
INSERT INTO `area` VALUES ('330803', '330800', ',330000,330800,330803', '3', '衢江区', 'mainland', '1');
INSERT INTO `area` VALUES ('330822', '330800', ',330000,330800,330822', '3', '常山县', 'mainland', '1');
INSERT INTO `area` VALUES ('330824', '330800', ',330000,330800,330824', '3', '开化县', 'mainland', '1');
INSERT INTO `area` VALUES ('330825', '330800', ',330000,330800,330825', '3', '龙游县', 'mainland', '1');
INSERT INTO `area` VALUES ('330881', '330800', ',330000,330800,330881', '3', '江山市', 'mainland', '1');
INSERT INTO `area` VALUES ('330882', '330800', ',330000,330800,330882', '3', '其它区', 'mainland', '1');
INSERT INTO `area` VALUES ('330900', '330000', ',330000,330900', '2', '舟山市', 'mainland', '1');
INSERT INTO `area` VALUES ('330902', '330900', ',330000,330900,330902', '3', '定海区', 'mainland', '1');
INSERT INTO `area` VALUES ('330903', '330900', ',330000,330900,330903', '3', '普陀区', 'mainland', '1');
INSERT INTO `area` VALUES ('330921', '330900', ',330000,330900,330921', '3', '岱山县', 'mainland', '1');
INSERT INTO `area` VALUES ('330922', '330900', ',330000,330900,330922', '3', '嵊泗县', 'mainland', '1');
INSERT INTO `area` VALUES ('330923', '330900', ',330000,330900,330923', '3', '其它区', 'mainland', '1');
INSERT INTO `area` VALUES ('331000', '330000', ',330000,331000', '2', '台州市', 'mainland', '1');
INSERT INTO `area` VALUES ('331002', '331000', ',330000,331000,331002', '3', '椒江区', 'mainland', '1');
INSERT INTO `area` VALUES ('331003', '331000', ',330000,331000,331003', '3', '黄岩区', 'mainland', '1');
INSERT INTO `area` VALUES ('331004', '331000', ',330000,331000,331004', '3', '路桥区', 'mainland', '1');
INSERT INTO `area` VALUES ('331021', '331000', ',330000,331000,331021', '3', '玉环县', 'mainland', '1');
INSERT INTO `area` VALUES ('331022', '331000', ',330000,331000,331022', '3', '三门县', 'mainland', '1');
INSERT INTO `area` VALUES ('331023', '331000', ',330000,331000,331023', '3', '天台县', 'mainland', '1');
INSERT INTO `area` VALUES ('331024', '331000', ',330000,331000,331024', '3', '仙居县', 'mainland', '1');
INSERT INTO `area` VALUES ('331081', '331000', ',330000,331000,331081', '3', '温岭市', 'mainland', '1');
INSERT INTO `area` VALUES ('331082', '331000', ',330000,331000,331082', '3', '临海市', 'mainland', '1');
INSERT INTO `area` VALUES ('331083', '331000', ',330000,331000,331083', '3', '其它区', 'mainland', '1');
INSERT INTO `area` VALUES ('331100', '330000', ',330000,331100', '2', '丽水市', 'mainland', '1');
INSERT INTO `area` VALUES ('331102', '331100', ',330000,331100,331102', '3', '莲都区', 'mainland', '1');
INSERT INTO `area` VALUES ('331121', '331100', ',330000,331100,331121', '3', '青田县', 'mainland', '1');
INSERT INTO `area` VALUES ('331122', '331100', ',330000,331100,331122', '3', '缙云县', 'mainland', '1');
INSERT INTO `area` VALUES ('331123', '331100', ',330000,331100,331123', '3', '遂昌县', 'mainland', '1');
INSERT INTO `area` VALUES ('331124', '331100', ',330000,331100,331124', '3', '松阳县', 'mainland', '1');
INSERT INTO `area` VALUES ('331125', '331100', ',330000,331100,331125', '3', '云和县', 'mainland', '1');
INSERT INTO `area` VALUES ('331126', '331100', ',330000,331100,331126', '3', '庆元县', 'mainland', '1');
INSERT INTO `area` VALUES ('331127', '331100', ',330000,331100,331127', '3', '景宁畲族自治县', 'mainland', '1');
INSERT INTO `area` VALUES ('331181', '331100', ',330000,331100,331181', '3', '龙泉市', 'mainland', '1');
INSERT INTO `area` VALUES ('331182', '331100', ',330000,331100,331182', '3', '其它区', 'mainland', '1');
INSERT INTO `area` VALUES ('340000', '100000', ',340000', '1', '安徽省', 'mainland', '1');
INSERT INTO `area` VALUES ('340100', '340000', ',340000,340100', '2', '合肥市', 'mainland', '1');
INSERT INTO `area` VALUES ('340102', '340100', ',340000,340100,340102', '3', '瑶海区', 'mainland', '1');
INSERT INTO `area` VALUES ('340103', '340100', ',340000,340100,340103', '3', '庐阳区', 'mainland', '1');
INSERT INTO `area` VALUES ('340104', '340100', ',340000,340100,340104', '3', '蜀山区', 'mainland', '1');
INSERT INTO `area` VALUES ('340111', '340100', ',340000,340100,340111', '3', '包河区', 'mainland', '1');
INSERT INTO `area` VALUES ('340121', '340100', ',340000,340100,340121', '3', '长丰县', 'mainland', '1');
INSERT INTO `area` VALUES ('340122', '340100', ',340000,340100,340122', '3', '肥东县', 'mainland', '1');
INSERT INTO `area` VALUES ('340123', '340100', ',340000,340100,340123', '3', '肥西县', 'mainland', '1');
INSERT INTO `area` VALUES ('340151', '340100', ',340000,340100,340151', '3', '高新区', 'mainland', '1');
INSERT INTO `area` VALUES ('340191', '340100', ',340000,340100,340191', '3', '中区', 'mainland', '1');
INSERT INTO `area` VALUES ('340192', '340100', ',340000,340100,340192', '3', '其它区', 'mainland', '1');
INSERT INTO `area` VALUES ('340200', '340000', ',340000,340200', '2', '芜湖市', 'mainland', '1');
INSERT INTO `area` VALUES ('340202', '340200', ',340000,340200,340202', '3', '镜湖区', 'mainland', '1');
INSERT INTO `area` VALUES ('340203', '340200', ',340000,340200,340203', '3', '弋江区', 'mainland', '1');
INSERT INTO `area` VALUES ('340207', '340200', ',340000,340200,340207', '3', '鸠江区', 'mainland', '1');
INSERT INTO `area` VALUES ('340208', '340200', ',340000,340200,340208', '3', '三山区', 'mainland', '1');
INSERT INTO `area` VALUES ('340221', '340200', ',340000,340200,340221', '3', '芜湖县', 'mainland', '1');
INSERT INTO `area` VALUES ('340222', '340200', ',340000,340200,340222', '3', '繁昌县', 'mainland', '1');
INSERT INTO `area` VALUES ('340223', '340200', ',340000,340200,340223', '3', '南陵县', 'mainland', '1');
INSERT INTO `area` VALUES ('340224', '340200', ',340000,340200,340224', '3', '其它区', 'mainland', '1');
INSERT INTO `area` VALUES ('340300', '340000', ',340000,340300', '2', '蚌埠市', 'mainland', '1');
INSERT INTO `area` VALUES ('340302', '340300', ',340000,340300,340302', '3', '龙子湖区', 'mainland', '1');
INSERT INTO `area` VALUES ('340303', '340300', ',340000,340300,340303', '3', '蚌山区', 'mainland', '1');
INSERT INTO `area` VALUES ('340304', '340300', ',340000,340300,340304', '3', '禹会区', 'mainland', '1');
INSERT INTO `area` VALUES ('340311', '340300', ',340000,340300,340311', '3', '淮上区', 'mainland', '1');
INSERT INTO `area` VALUES ('340321', '340300', ',340000,340300,340321', '3', '怀远县', 'mainland', '1');
INSERT INTO `area` VALUES ('340322', '340300', ',340000,340300,340322', '3', '五河县', 'mainland', '1');
INSERT INTO `area` VALUES ('340323', '340300', ',340000,340300,340323', '3', '固镇县', 'mainland', '1');
INSERT INTO `area` VALUES ('340324', '340300', ',340000,340300,340324', '3', '其它区', 'mainland', '1');
INSERT INTO `area` VALUES ('340400', '340000', ',340000,340400', '2', '淮南市', 'mainland', '1');
INSERT INTO `area` VALUES ('340402', '340400', ',340000,340400,340402', '3', '大通区', 'mainland', '1');
INSERT INTO `area` VALUES ('340403', '340400', ',340000,340400,340403', '3', '田家庵区', 'mainland', '1');
INSERT INTO `area` VALUES ('340404', '340400', ',340000,340400,340404', '3', '谢家集区', 'mainland', '1');
INSERT INTO `area` VALUES ('340405', '340400', ',340000,340400,340405', '3', '八公山区', 'mainland', '1');
INSERT INTO `area` VALUES ('340406', '340400', ',340000,340400,340406', '3', '潘集区', 'mainland', '1');
INSERT INTO `area` VALUES ('340421', '340400', ',340000,340400,340421', '3', '凤台县', 'mainland', '1');
INSERT INTO `area` VALUES ('340422', '340400', ',340000,340400,340422', '3', '其它区', 'mainland', '1');
INSERT INTO `area` VALUES ('340500', '340000', ',340000,340500', '2', '马鞍山市', 'mainland', '1');
INSERT INTO `area` VALUES ('340502', '340500', ',340000,340500,340502', '3', '金家庄区', 'mainland', '1');
INSERT INTO `area` VALUES ('340503', '340500', ',340000,340500,340503', '3', '花山区', 'mainland', '1');
INSERT INTO `area` VALUES ('340504', '340500', ',340000,340500,340504', '3', '雨山区', 'mainland', '1');
INSERT INTO `area` VALUES ('340521', '340500', ',340000,340500,340521', '3', '当涂县', 'mainland', '1');
INSERT INTO `area` VALUES ('340522', '340500', ',340000,340500,340522', '3', '其它区', 'mainland', '1');
INSERT INTO `area` VALUES ('340600', '340000', ',340000,340600', '2', '淮北市', 'mainland', '1');
INSERT INTO `area` VALUES ('340602', '340600', ',340000,340600,340602', '3', '杜集区', 'mainland', '1');
INSERT INTO `area` VALUES ('340603', '340600', ',340000,340600,340603', '3', '相山区', 'mainland', '1');
INSERT INTO `area` VALUES ('340604', '340600', ',340000,340600,340604', '3', '烈山区', 'mainland', '1');
INSERT INTO `area` VALUES ('340621', '340600', ',340000,340600,340621', '3', '濉溪县', 'mainland', '1');
INSERT INTO `area` VALUES ('340622', '340600', ',340000,340600,340622', '3', '其它区', 'mainland', '1');
INSERT INTO `area` VALUES ('340700', '340000', ',340000,340700', '2', '铜陵市', 'mainland', '1');
INSERT INTO `area` VALUES ('340702', '340700', ',340000,340700,340702', '3', '铜官山区', 'mainland', '1');
INSERT INTO `area` VALUES ('340703', '340700', ',340000,340700,340703', '3', '狮子山区', 'mainland', '1');
INSERT INTO `area` VALUES ('340711', '340700', ',340000,340700,340711', '3', '郊区', 'mainland', '1');
INSERT INTO `area` VALUES ('340721', '340700', ',340000,340700,340721', '3', '铜陵县', 'mainland', '1');
INSERT INTO `area` VALUES ('340722', '340700', ',340000,340700,340722', '3', '其它区', 'mainland', '1');
INSERT INTO `area` VALUES ('340800', '340000', ',340000,340800', '2', '安庆市', 'mainland', '1');
INSERT INTO `area` VALUES ('340802', '340800', ',340000,340800,340802', '3', '迎江区', 'mainland', '1');
INSERT INTO `area` VALUES ('340803', '340800', ',340000,340800,340803', '3', '大观区', 'mainland', '1');
INSERT INTO `area` VALUES ('340811', '340800', ',340000,340800,340811', '3', '宜秀区', 'mainland', '1');
INSERT INTO `area` VALUES ('340822', '340800', ',340000,340800,340822', '3', '怀宁县', 'mainland', '1');
INSERT INTO `area` VALUES ('340823', '340800', ',340000,340800,340823', '3', '枞阳县', 'mainland', '1');
INSERT INTO `area` VALUES ('340824', '340800', ',340000,340800,340824', '3', '潜山县', 'mainland', '1');
INSERT INTO `area` VALUES ('340825', '340800', ',340000,340800,340825', '3', '太湖县', 'mainland', '1');
INSERT INTO `area` VALUES ('340826', '340800', ',340000,340800,340826', '3', '宿松县', 'mainland', '1');
INSERT INTO `area` VALUES ('340827', '340800', ',340000,340800,340827', '3', '望江县', 'mainland', '1');
INSERT INTO `area` VALUES ('340828', '340800', ',340000,340800,340828', '3', '岳西县', 'mainland', '1');
INSERT INTO `area` VALUES ('340881', '340800', ',340000,340800,340881', '3', '桐城市', 'mainland', '1');
INSERT INTO `area` VALUES ('340882', '340800', ',340000,340800,340882', '3', '其它区', 'mainland', '1');
INSERT INTO `area` VALUES ('341000', '340000', ',340000,341000', '2', '黄山市', 'mainland', '1');
INSERT INTO `area` VALUES ('341002', '341000', ',340000,341000,341002', '3', '屯溪区', 'mainland', '1');
INSERT INTO `area` VALUES ('341003', '341000', ',340000,341000,341003', '3', '黄山区', 'mainland', '1');
INSERT INTO `area` VALUES ('341004', '341000', ',340000,341000,341004', '3', '徽州区', 'mainland', '1');
INSERT INTO `area` VALUES ('341021', '341000', ',340000,341000,341021', '3', '歙县', 'mainland', '1');
INSERT INTO `area` VALUES ('341022', '341000', ',340000,341000,341022', '3', '休宁县', 'mainland', '1');
INSERT INTO `area` VALUES ('341023', '341000', ',340000,341000,341023', '3', '黟县', 'mainland', '1');
INSERT INTO `area` VALUES ('341024', '341000', ',340000,341000,341024', '3', '祁门县', 'mainland', '1');
INSERT INTO `area` VALUES ('341025', '341000', ',340000,341000,341025', '3', '其它区', 'mainland', '1');
INSERT INTO `area` VALUES ('341100', '340000', ',340000,341100', '2', '滁州市', 'mainland', '1');
INSERT INTO `area` VALUES ('341102', '341100', ',340000,341100,341102', '3', '琅琊区', 'mainland', '1');
INSERT INTO `area` VALUES ('341103', '341100', ',340000,341100,341103', '3', '南谯区', 'mainland', '1');
INSERT INTO `area` VALUES ('341122', '341100', ',340000,341100,341122', '3', '来安县', 'mainland', '1');
INSERT INTO `area` VALUES ('341124', '341100', ',340000,341100,341124', '3', '全椒县', 'mainland', '1');
INSERT INTO `area` VALUES ('341125', '341100', ',340000,341100,341125', '3', '定远县', 'mainland', '1');
INSERT INTO `area` VALUES ('341126', '341100', ',340000,341100,341126', '3', '凤阳县', 'mainland', '1');
INSERT INTO `area` VALUES ('341181', '341100', ',340000,341100,341181', '3', '天长市', 'mainland', '1');
INSERT INTO `area` VALUES ('341182', '341100', ',340000,341100,341182', '3', '明光市', 'mainland', '1');
INSERT INTO `area` VALUES ('341183', '341100', ',340000,341100,341183', '3', '其它区', 'mainland', '1');
INSERT INTO `area` VALUES ('341200', '340000', ',340000,341200', '2', '阜阳市', 'mainland', '1');
INSERT INTO `area` VALUES ('341202', '341200', ',340000,341200,341202', '3', '颍州区', 'mainland', '1');
INSERT INTO `area` VALUES ('341203', '341200', ',340000,341200,341203', '3', '颍东区', 'mainland', '1');
INSERT INTO `area` VALUES ('341204', '341200', ',340000,341200,341204', '3', '颍泉区', 'mainland', '1');
INSERT INTO `area` VALUES ('341221', '341200', ',340000,341200,341221', '3', '临泉县', 'mainland', '1');
INSERT INTO `area` VALUES ('341222', '341200', ',340000,341200,341222', '3', '太和县', 'mainland', '1');
INSERT INTO `area` VALUES ('341225', '341200', ',340000,341200,341225', '3', '阜南县', 'mainland', '1');
INSERT INTO `area` VALUES ('341226', '341200', ',340000,341200,341226', '3', '颍上县', 'mainland', '1');
INSERT INTO `area` VALUES ('341282', '341200', ',340000,341200,341282', '3', '界首市', 'mainland', '1');
INSERT INTO `area` VALUES ('341283', '341200', ',340000,341200,341283', '3', '其它区', 'mainland', '1');
INSERT INTO `area` VALUES ('341300', '340000', ',340000,341300', '2', '宿州市', 'mainland', '1');
INSERT INTO `area` VALUES ('341302', '341300', ',340000,341300,341302', '3', '埇桥区', 'mainland', '1');
INSERT INTO `area` VALUES ('341321', '341300', ',340000,341300,341321', '3', '砀山县', 'mainland', '1');
INSERT INTO `area` VALUES ('341322', '341300', ',340000,341300,341322', '3', '萧县', 'mainland', '1');
INSERT INTO `area` VALUES ('341323', '341300', ',340000,341300,341323', '3', '灵璧县', 'mainland', '1');
INSERT INTO `area` VALUES ('341324', '341300', ',340000,341300,341324', '3', '泗县', 'mainland', '1');
INSERT INTO `area` VALUES ('341325', '341300', ',340000,341300,341325', '3', '其它区', 'mainland', '1');
INSERT INTO `area` VALUES ('341400', '340000', ',340000,341400', '2', '巢湖市', 'mainland', '1');
INSERT INTO `area` VALUES ('341402', '341400', ',340000,341400,341402', '3', '居巢区', 'mainland', '1');
INSERT INTO `area` VALUES ('341421', '341400', ',340000,341400,341421', '3', '庐江县', 'mainland', '1');
INSERT INTO `area` VALUES ('341422', '341400', ',340000,341400,341422', '3', '无为县', 'mainland', '1');
INSERT INTO `area` VALUES ('341423', '341400', ',340000,341400,341423', '3', '含山县', 'mainland', '1');
INSERT INTO `area` VALUES ('341424', '341400', ',340000,341400,341424', '3', '和县', 'mainland', '1');
INSERT INTO `area` VALUES ('341425', '341400', ',340000,341400,341425', '3', '其它区', 'mainland', '1');
INSERT INTO `area` VALUES ('341500', '340000', ',340000,341500', '2', '六安市', 'mainland', '1');
INSERT INTO `area` VALUES ('341502', '341500', ',340000,341500,341502', '3', '金安区', 'mainland', '1');
INSERT INTO `area` VALUES ('341503', '341500', ',340000,341500,341503', '3', '裕安区', 'mainland', '1');
INSERT INTO `area` VALUES ('341521', '341500', ',340000,341500,341521', '3', '寿县', 'mainland', '1');
INSERT INTO `area` VALUES ('341522', '341500', ',340000,341500,341522', '3', '霍邱县', 'mainland', '1');
INSERT INTO `area` VALUES ('341523', '341500', ',340000,341500,341523', '3', '舒城县', 'mainland', '1');
INSERT INTO `area` VALUES ('341524', '341500', ',340000,341500,341524', '3', '金寨县', 'mainland', '1');
INSERT INTO `area` VALUES ('341525', '341500', ',340000,341500,341525', '3', '霍山县', 'mainland', '1');
INSERT INTO `area` VALUES ('341526', '341500', ',340000,341500,341526', '3', '其它区', 'mainland', '1');
INSERT INTO `area` VALUES ('341600', '340000', ',340000,341600', '2', '亳州市', 'mainland', '1');
INSERT INTO `area` VALUES ('341602', '341600', ',340000,341600,341602', '3', '谯城区', 'mainland', '1');
INSERT INTO `area` VALUES ('341621', '341600', ',340000,341600,341621', '3', '涡阳县', 'mainland', '1');
INSERT INTO `area` VALUES ('341622', '341600', ',340000,341600,341622', '3', '蒙城县', 'mainland', '1');
INSERT INTO `area` VALUES ('341623', '341600', ',340000,341600,341623', '3', '利辛县', 'mainland', '1');
INSERT INTO `area` VALUES ('341624', '341600', ',340000,341600,341624', '3', '其它区', 'mainland', '1');
INSERT INTO `area` VALUES ('341700', '340000', ',340000,341700', '2', '池州市', 'mainland', '1');
INSERT INTO `area` VALUES ('341702', '341700', ',340000,341700,341702', '3', '贵池区', 'mainland', '1');
INSERT INTO `area` VALUES ('341721', '341700', ',340000,341700,341721', '3', '东至县', 'mainland', '1');
INSERT INTO `area` VALUES ('341722', '341700', ',340000,341700,341722', '3', '石台县', 'mainland', '1');
INSERT INTO `area` VALUES ('341723', '341700', ',340000,341700,341723', '3', '青阳县', 'mainland', '1');
INSERT INTO `area` VALUES ('341724', '341700', ',340000,341700,341724', '3', '其它区', 'mainland', '1');
INSERT INTO `area` VALUES ('341800', '340000', ',340000,341800', '2', '宣城市', 'mainland', '1');
INSERT INTO `area` VALUES ('341802', '341800', ',340000,341800,341802', '3', '宣州区', 'mainland', '1');
INSERT INTO `area` VALUES ('341821', '341800', ',340000,341800,341821', '3', '郎溪县', 'mainland', '1');
INSERT INTO `area` VALUES ('341822', '341800', ',340000,341800,341822', '3', '广德县', 'mainland', '1');
INSERT INTO `area` VALUES ('341823', '341800', ',340000,341800,341823', '3', '泾县', 'mainland', '1');
INSERT INTO `area` VALUES ('341824', '341800', ',340000,341800,341824', '3', '绩溪县', 'mainland', '1');
INSERT INTO `area` VALUES ('341825', '341800', ',340000,341800,341825', '3', '旌德县', 'mainland', '1');
INSERT INTO `area` VALUES ('341881', '341800', ',340000,341800,341881', '3', '宁国市', 'mainland', '1');
INSERT INTO `area` VALUES ('341882', '341800', ',340000,341800,341882', '3', '其它区', 'mainland', '1');
INSERT INTO `area` VALUES ('350000', '100000', ',350000', '1', '福建省', 'mainland', '4');
INSERT INTO `area` VALUES ('350100', '350000', ',350000,350100', '2', '福州市', 'mainland', '4');
INSERT INTO `area` VALUES ('350102', '350100', ',350000,350100,350102', '3', '鼓楼区', 'mainland', '4');
INSERT INTO `area` VALUES ('350103', '350100', ',350000,350100,350103', '3', '台江区', 'mainland', '4');
INSERT INTO `area` VALUES ('350104', '350100', ',350000,350100,350104', '3', '仓山区', 'mainland', '4');
INSERT INTO `area` VALUES ('350105', '350100', ',350000,350100,350105', '3', '马尾区', 'mainland', '4');
INSERT INTO `area` VALUES ('350111', '350100', ',350000,350100,350111', '3', '晋安区', 'mainland', '4');
INSERT INTO `area` VALUES ('350121', '350100', ',350000,350100,350121', '3', '闽侯县', 'mainland', '4');
INSERT INTO `area` VALUES ('350122', '350100', ',350000,350100,350122', '3', '连江县', 'mainland', '4');
INSERT INTO `area` VALUES ('350123', '350100', ',350000,350100,350123', '3', '罗源县', 'mainland', '4');
INSERT INTO `area` VALUES ('350124', '350100', ',350000,350100,350124', '3', '闽清县', 'mainland', '4');
INSERT INTO `area` VALUES ('350125', '350100', ',350000,350100,350125', '3', '永泰县', 'mainland', '4');
INSERT INTO `area` VALUES ('350128', '350100', ',350000,350100,350128', '3', '平潭县', 'mainland', '4');
INSERT INTO `area` VALUES ('350181', '350100', ',350000,350100,350181', '3', '福清市', 'mainland', '4');
INSERT INTO `area` VALUES ('350182', '350100', ',350000,350100,350182', '3', '长乐市', 'mainland', '4');
INSERT INTO `area` VALUES ('350183', '350100', ',350000,350100,350183', '3', '其它区', 'mainland', '4');
INSERT INTO `area` VALUES ('350200', '350000', ',350000,350200', '2', '厦门市', 'mainland', '4');
INSERT INTO `area` VALUES ('350203', '350200', ',350000,350200,350203', '3', '思明区', 'mainland', '4');
INSERT INTO `area` VALUES ('350205', '350200', ',350000,350200,350205', '3', '海沧区', 'mainland', '4');
INSERT INTO `area` VALUES ('350206', '350200', ',350000,350200,350206', '3', '湖里区', 'mainland', '4');
INSERT INTO `area` VALUES ('350211', '350200', ',350000,350200,350211', '3', '集美区', 'mainland', '4');
INSERT INTO `area` VALUES ('350212', '350200', ',350000,350200,350212', '3', '同安区', 'mainland', '4');
INSERT INTO `area` VALUES ('350213', '350200', ',350000,350200,350213', '3', '翔安区', 'mainland', '4');
INSERT INTO `area` VALUES ('350214', '350200', ',350000,350200,350214', '3', '其它区', 'mainland', '4');
INSERT INTO `area` VALUES ('350300', '350000', ',350000,350300', '2', '莆田市', 'mainland', '4');
INSERT INTO `area` VALUES ('350302', '350300', ',350000,350300,350302', '3', '城厢区', 'mainland', '4');
INSERT INTO `area` VALUES ('350303', '350300', ',350000,350300,350303', '3', '涵江区', 'mainland', '4');
INSERT INTO `area` VALUES ('350304', '350300', ',350000,350300,350304', '3', '荔城区', 'mainland', '4');
INSERT INTO `area` VALUES ('350305', '350300', ',350000,350300,350305', '3', '秀屿区', 'mainland', '4');
INSERT INTO `area` VALUES ('350322', '350300', ',350000,350300,350322', '3', '仙游县', 'mainland', '4');
INSERT INTO `area` VALUES ('350323', '350300', ',350000,350300,350323', '3', '其它区', 'mainland', '4');
INSERT INTO `area` VALUES ('350400', '350000', ',350000,350400', '2', '三明市', 'mainland', '4');
INSERT INTO `area` VALUES ('350402', '350400', ',350000,350400,350402', '3', '梅列区', 'mainland', '4');
INSERT INTO `area` VALUES ('350403', '350400', ',350000,350400,350403', '3', '三元区', 'mainland', '4');
INSERT INTO `area` VALUES ('350421', '350400', ',350000,350400,350421', '3', '明溪县', 'mainland', '4');
INSERT INTO `area` VALUES ('350423', '350400', ',350000,350400,350423', '3', '清流县', 'mainland', '4');
INSERT INTO `area` VALUES ('350424', '350400', ',350000,350400,350424', '3', '宁化县', 'mainland', '4');
INSERT INTO `area` VALUES ('350425', '350400', ',350000,350400,350425', '3', '大田县', 'mainland', '4');
INSERT INTO `area` VALUES ('350426', '350400', ',350000,350400,350426', '3', '尤溪县', 'mainland', '4');
INSERT INTO `area` VALUES ('350427', '350400', ',350000,350400,350427', '3', '沙县', 'mainland', '4');
INSERT INTO `area` VALUES ('350428', '350400', ',350000,350400,350428', '3', '将乐县', 'mainland', '4');
INSERT INTO `area` VALUES ('350429', '350400', ',350000,350400,350429', '3', '泰宁县', 'mainland', '4');
INSERT INTO `area` VALUES ('350430', '350400', ',350000,350400,350430', '3', '建宁县', 'mainland', '4');
INSERT INTO `area` VALUES ('350481', '350400', ',350000,350400,350481', '3', '永安市', 'mainland', '4');
INSERT INTO `area` VALUES ('350482', '350400', ',350000,350400,350482', '3', '其它区', 'mainland', '4');
INSERT INTO `area` VALUES ('350500', '350000', ',350000,350500', '2', '泉州市', 'mainland', '4');
INSERT INTO `area` VALUES ('350502', '350500', ',350000,350500,350502', '3', '鲤城区', 'mainland', '4');
INSERT INTO `area` VALUES ('350503', '350500', ',350000,350500,350503', '3', '丰泽区', 'mainland', '4');
INSERT INTO `area` VALUES ('350504', '350500', ',350000,350500,350504', '3', '洛江区', 'mainland', '4');
INSERT INTO `area` VALUES ('350505', '350500', ',350000,350500,350505', '3', '泉港区', 'mainland', '4');
INSERT INTO `area` VALUES ('350521', '350500', ',350000,350500,350521', '3', '惠安县', 'mainland', '4');
INSERT INTO `area` VALUES ('350524', '350500', ',350000,350500,350524', '3', '安溪县', 'mainland', '4');
INSERT INTO `area` VALUES ('350525', '350500', ',350000,350500,350525', '3', '永春县', 'mainland', '4');
INSERT INTO `area` VALUES ('350526', '350500', ',350000,350500,350526', '3', '德化县', 'mainland', '4');
INSERT INTO `area` VALUES ('350527', '350500', ',350000,350500,350527', '3', '金门县', 'mainland', '4');
INSERT INTO `area` VALUES ('350581', '350500', ',350000,350500,350581', '3', '石狮市', 'mainland', '4');
INSERT INTO `area` VALUES ('350582', '350500', ',350000,350500,350582', '3', '晋江市', 'mainland', '4');
INSERT INTO `area` VALUES ('350583', '350500', ',350000,350500,350583', '3', '南安市', 'mainland', '4');
INSERT INTO `area` VALUES ('350584', '350500', ',350000,350500,350584', '3', '其它区', 'mainland', '4');
INSERT INTO `area` VALUES ('350600', '350000', ',350000,350600', '2', '漳州市', 'mainland', '4');
INSERT INTO `area` VALUES ('350602', '350600', ',350000,350600,350602', '3', '芗城区', 'mainland', '4');
INSERT INTO `area` VALUES ('350603', '350600', ',350000,350600,350603', '3', '龙文区', 'mainland', '4');
INSERT INTO `area` VALUES ('350622', '350600', ',350000,350600,350622', '3', '云霄县', 'mainland', '4');
INSERT INTO `area` VALUES ('350623', '350600', ',350000,350600,350623', '3', '漳浦县', 'mainland', '4');
INSERT INTO `area` VALUES ('350624', '350600', ',350000,350600,350624', '3', '诏安县', 'mainland', '4');
INSERT INTO `area` VALUES ('350625', '350600', ',350000,350600,350625', '3', '长泰县', 'mainland', '4');
INSERT INTO `area` VALUES ('350626', '350600', ',350000,350600,350626', '3', '东山县', 'mainland', '4');
INSERT INTO `area` VALUES ('350627', '350600', ',350000,350600,350627', '3', '南靖县', 'mainland', '4');
INSERT INTO `area` VALUES ('350628', '350600', ',350000,350600,350628', '3', '平和县', 'mainland', '4');
INSERT INTO `area` VALUES ('350629', '350600', ',350000,350600,350629', '3', '华安县', 'mainland', '4');
INSERT INTO `area` VALUES ('350681', '350600', ',350000,350600,350681', '3', '龙海市', 'mainland', '4');
INSERT INTO `area` VALUES ('350682', '350600', ',350000,350600,350682', '3', '其它区', 'mainland', '4');
INSERT INTO `area` VALUES ('350700', '350000', ',350000,350700', '2', '南平市', 'mainland', '4');
INSERT INTO `area` VALUES ('350702', '350700', ',350000,350700,350702', '3', '延平区', 'mainland', '4');
INSERT INTO `area` VALUES ('350721', '350700', ',350000,350700,350721', '3', '顺昌县', 'mainland', '4');
INSERT INTO `area` VALUES ('350722', '350700', ',350000,350700,350722', '3', '浦城县', 'mainland', '4');
INSERT INTO `area` VALUES ('350723', '350700', ',350000,350700,350723', '3', '光泽县', 'mainland', '4');
INSERT INTO `area` VALUES ('350724', '350700', ',350000,350700,350724', '3', '松溪县', 'mainland', '4');
INSERT INTO `area` VALUES ('350725', '350700', ',350000,350700,350725', '3', '政和县', 'mainland', '4');
INSERT INTO `area` VALUES ('350781', '350700', ',350000,350700,350781', '3', '邵武市', 'mainland', '4');
INSERT INTO `area` VALUES ('350782', '350700', ',350000,350700,350782', '3', '武夷山市', 'mainland', '4');
INSERT INTO `area` VALUES ('350783', '350700', ',350000,350700,350783', '3', '建瓯市', 'mainland', '4');
INSERT INTO `area` VALUES ('350784', '350700', ',350000,350700,350784', '3', '建阳市', 'mainland', '4');
INSERT INTO `area` VALUES ('350785', '350700', ',350000,350700,350785', '3', '其它区', 'mainland', '4');
INSERT INTO `area` VALUES ('350800', '350000', ',350000,350800', '2', '龙岩市', 'mainland', '4');
INSERT INTO `area` VALUES ('350802', '350800', ',350000,350800,350802', '3', '新罗区', 'mainland', '4');
INSERT INTO `area` VALUES ('350821', '350800', ',350000,350800,350821', '3', '长汀县', 'mainland', '4');
INSERT INTO `area` VALUES ('350822', '350800', ',350000,350800,350822', '3', '永定县', 'mainland', '4');
INSERT INTO `area` VALUES ('350823', '350800', ',350000,350800,350823', '3', '上杭县', 'mainland', '4');
INSERT INTO `area` VALUES ('350824', '350800', ',350000,350800,350824', '3', '武平县', 'mainland', '4');
INSERT INTO `area` VALUES ('350825', '350800', ',350000,350800,350825', '3', '连城县', 'mainland', '4');
INSERT INTO `area` VALUES ('350881', '350800', ',350000,350800,350881', '3', '漳平市', 'mainland', '4');
INSERT INTO `area` VALUES ('350882', '350800', ',350000,350800,350882', '3', '其它区', 'mainland', '4');
INSERT INTO `area` VALUES ('350900', '350000', ',350000,350900', '2', '宁德市', 'mainland', '4');
INSERT INTO `area` VALUES ('350902', '350900', ',350000,350900,350902', '3', '蕉城区', 'mainland', '4');
INSERT INTO `area` VALUES ('350921', '350900', ',350000,350900,350921', '3', '霞浦县', 'mainland', '4');
INSERT INTO `area` VALUES ('350922', '350900', ',350000,350900,350922', '3', '古田县', 'mainland', '4');
INSERT INTO `area` VALUES ('350923', '350900', ',350000,350900,350923', '3', '屏南县', 'mainland', '4');
INSERT INTO `area` VALUES ('350924', '350900', ',350000,350900,350924', '3', '寿宁县', 'mainland', '4');
INSERT INTO `area` VALUES ('350925', '350900', ',350000,350900,350925', '3', '周宁县', 'mainland', '4');
INSERT INTO `area` VALUES ('350926', '350900', ',350000,350900,350926', '3', '柘荣县', 'mainland', '4');
INSERT INTO `area` VALUES ('350981', '350900', ',350000,350900,350981', '3', '福安市', 'mainland', '4');
INSERT INTO `area` VALUES ('350982', '350900', ',350000,350900,350982', '3', '福鼎市', 'mainland', '4');
INSERT INTO `area` VALUES ('350983', '350900', ',350000,350900,350983', '3', '其它区', 'mainland', '4');
INSERT INTO `area` VALUES ('360000', '100000', ',360000', '1', '江西省', 'mainland', '2');
INSERT INTO `area` VALUES ('360100', '360000', ',360000,360100', '2', '南昌市', 'mainland', '2');
INSERT INTO `area` VALUES ('360102', '360100', ',360000,360100,360102', '3', '东湖区', 'mainland', '2');
INSERT INTO `area` VALUES ('360103', '360100', ',360000,360100,360103', '3', '西湖区', 'mainland', '2');
INSERT INTO `area` VALUES ('360104', '360100', ',360000,360100,360104', '3', '青云谱区', 'mainland', '2');
INSERT INTO `area` VALUES ('360105', '360100', ',360000,360100,360105', '3', '湾里区', 'mainland', '2');
INSERT INTO `area` VALUES ('360111', '360100', ',360000,360100,360111', '3', '青山湖区', 'mainland', '2');
INSERT INTO `area` VALUES ('360121', '360100', ',360000,360100,360121', '3', '南昌县', 'mainland', '2');
INSERT INTO `area` VALUES ('360122', '360100', ',360000,360100,360122', '3', '新建县', 'mainland', '2');
INSERT INTO `area` VALUES ('360123', '360100', ',360000,360100,360123', '3', '安义县', 'mainland', '2');
INSERT INTO `area` VALUES ('360124', '360100', ',360000,360100,360124', '3', '进贤县', 'mainland', '2');
INSERT INTO `area` VALUES ('360125', '360100', ',360000,360100,360125', '3', '红谷滩新区', 'mainland', '2');
INSERT INTO `area` VALUES ('360126', '360100', ',360000,360100,360126', '3', '经济技术开发区', 'mainland', '2');
INSERT INTO `area` VALUES ('360127', '360100', ',360000,360100,360127', '3', '昌北区', 'mainland', '2');
INSERT INTO `area` VALUES ('360128', '360100', ',360000,360100,360128', '3', '其它区', 'mainland', '2');
INSERT INTO `area` VALUES ('360200', '360000', ',360000,360200', '2', '景德镇市', 'mainland', '2');
INSERT INTO `area` VALUES ('360202', '360200', ',360000,360200,360202', '3', '昌江区', 'mainland', '2');
INSERT INTO `area` VALUES ('360203', '360200', ',360000,360200,360203', '3', '珠山区', 'mainland', '2');
INSERT INTO `area` VALUES ('360222', '360200', ',360000,360200,360222', '3', '浮梁县', 'mainland', '2');
INSERT INTO `area` VALUES ('360281', '360200', ',360000,360200,360281', '3', '乐平市', 'mainland', '2');
INSERT INTO `area` VALUES ('360282', '360200', ',360000,360200,360282', '3', '其它区', 'mainland', '2');
INSERT INTO `area` VALUES ('360300', '360000', ',360000,360300', '2', '萍乡市', 'mainland', '2');
INSERT INTO `area` VALUES ('360302', '360300', ',360000,360300,360302', '3', '安源区', 'mainland', '2');
INSERT INTO `area` VALUES ('360313', '360300', ',360000,360300,360313', '3', '湘东区', 'mainland', '2');
INSERT INTO `area` VALUES ('360321', '360300', ',360000,360300,360321', '3', '莲花县', 'mainland', '2');
INSERT INTO `area` VALUES ('360322', '360300', ',360000,360300,360322', '3', '上栗县', 'mainland', '2');
INSERT INTO `area` VALUES ('360323', '360300', ',360000,360300,360323', '3', '芦溪县', 'mainland', '2');
INSERT INTO `area` VALUES ('360324', '360300', ',360000,360300,360324', '3', '其它区', 'mainland', '2');
INSERT INTO `area` VALUES ('360400', '360000', ',360000,360400', '2', '九江市', 'mainland', '2');
INSERT INTO `area` VALUES ('360402', '360400', ',360000,360400,360402', '3', '庐山区', 'mainland', '2');
INSERT INTO `area` VALUES ('360403', '360400', ',360000,360400,360403', '3', '浔阳区', 'mainland', '2');
INSERT INTO `area` VALUES ('360421', '360400', ',360000,360400,360421', '3', '九江县', 'mainland', '2');
INSERT INTO `area` VALUES ('360423', '360400', ',360000,360400,360423', '3', '武宁县', 'mainland', '2');
INSERT INTO `area` VALUES ('360424', '360400', ',360000,360400,360424', '3', '修水县', 'mainland', '2');
INSERT INTO `area` VALUES ('360425', '360400', ',360000,360400,360425', '3', '永修县', 'mainland', '2');
INSERT INTO `area` VALUES ('360426', '360400', ',360000,360400,360426', '3', '德安县', 'mainland', '2');
INSERT INTO `area` VALUES ('360427', '360400', ',360000,360400,360427', '3', '星子县', 'mainland', '2');
INSERT INTO `area` VALUES ('360428', '360400', ',360000,360400,360428', '3', '都昌县', 'mainland', '2');
INSERT INTO `area` VALUES ('360429', '360400', ',360000,360400,360429', '3', '湖口县', 'mainland', '2');
INSERT INTO `area` VALUES ('360430', '360400', ',360000,360400,360430', '3', '彭泽县', 'mainland', '2');
INSERT INTO `area` VALUES ('360481', '360400', ',360000,360400,360481', '3', '瑞昌市', 'mainland', '2');
INSERT INTO `area` VALUES ('360482', '360400', ',360000,360400,360482', '3', '其它区', 'mainland', '2');
INSERT INTO `area` VALUES ('360500', '360000', ',360000,360500', '2', '新余市', 'mainland', '2');
INSERT INTO `area` VALUES ('360502', '360500', ',360000,360500,360502', '3', '渝水区', 'mainland', '2');
INSERT INTO `area` VALUES ('360521', '360500', ',360000,360500,360521', '3', '分宜县', 'mainland', '2');
INSERT INTO `area` VALUES ('360522', '360500', ',360000,360500,360522', '3', '其它区', 'mainland', '2');
INSERT INTO `area` VALUES ('360600', '360000', ',360000,360600', '2', '鹰潭市', 'mainland', '2');
INSERT INTO `area` VALUES ('360602', '360600', ',360000,360600,360602', '3', '月湖区', 'mainland', '2');
INSERT INTO `area` VALUES ('360622', '360600', ',360000,360600,360622', '3', '余江县', 'mainland', '2');
INSERT INTO `area` VALUES ('360681', '360600', ',360000,360600,360681', '3', '贵溪市', 'mainland', '2');
INSERT INTO `area` VALUES ('360682', '360600', ',360000,360600,360682', '3', '其它区', 'mainland', '2');
INSERT INTO `area` VALUES ('360700', '360000', ',360000,360700', '2', '赣州市', 'mainland', '2');
INSERT INTO `area` VALUES ('360702', '360700', ',360000,360700,360702', '3', '章贡区', 'mainland', '2');
INSERT INTO `area` VALUES ('360721', '360700', ',360000,360700,360721', '3', '赣县', 'mainland', '2');
INSERT INTO `area` VALUES ('360722', '360700', ',360000,360700,360722', '3', '信丰县', 'mainland', '2');
INSERT INTO `area` VALUES ('360723', '360700', ',360000,360700,360723', '3', '大余县', 'mainland', '2');
INSERT INTO `area` VALUES ('360724', '360700', ',360000,360700,360724', '3', '上犹县', 'mainland', '2');
INSERT INTO `area` VALUES ('360725', '360700', ',360000,360700,360725', '3', '崇义县', 'mainland', '2');
INSERT INTO `area` VALUES ('360726', '360700', ',360000,360700,360726', '3', '安远县', 'mainland', '2');
INSERT INTO `area` VALUES ('360727', '360700', ',360000,360700,360727', '3', '龙南县', 'mainland', '2');
INSERT INTO `area` VALUES ('360728', '360700', ',360000,360700,360728', '3', '定南县', 'mainland', '2');
INSERT INTO `area` VALUES ('360729', '360700', ',360000,360700,360729', '3', '全南县', 'mainland', '2');
INSERT INTO `area` VALUES ('360730', '360700', ',360000,360700,360730', '3', '宁都县', 'mainland', '2');
INSERT INTO `area` VALUES ('360731', '360700', ',360000,360700,360731', '3', '于都县', 'mainland', '2');
INSERT INTO `area` VALUES ('360732', '360700', ',360000,360700,360732', '3', '兴国县', 'mainland', '2');
INSERT INTO `area` VALUES ('360733', '360700', ',360000,360700,360733', '3', '会昌县', 'mainland', '2');
INSERT INTO `area` VALUES ('360734', '360700', ',360000,360700,360734', '3', '寻乌县', 'mainland', '2');
INSERT INTO `area` VALUES ('360735', '360700', ',360000,360700,360735', '3', '石城县', 'mainland', '2');
INSERT INTO `area` VALUES ('360751', '360700', ',360000,360700,360751', '3', '黄金区', 'mainland', '2');
INSERT INTO `area` VALUES ('360781', '360700', ',360000,360700,360781', '3', '瑞金市', 'mainland', '2');
INSERT INTO `area` VALUES ('360782', '360700', ',360000,360700,360782', '3', '南康市', 'mainland', '2');
INSERT INTO `area` VALUES ('360783', '360700', ',360000,360700,360783', '3', '其它区', 'mainland', '2');
INSERT INTO `area` VALUES ('360800', '360000', ',360000,360800', '2', '吉安市', 'mainland', '2');
INSERT INTO `area` VALUES ('360802', '360800', ',360000,360800,360802', '3', '吉州区', 'mainland', '2');
INSERT INTO `area` VALUES ('360803', '360800', ',360000,360800,360803', '3', '青原区', 'mainland', '2');
INSERT INTO `area` VALUES ('360821', '360800', ',360000,360800,360821', '3', '吉安县', 'mainland', '2');
INSERT INTO `area` VALUES ('360822', '360800', ',360000,360800,360822', '3', '吉水县', 'mainland', '2');
INSERT INTO `area` VALUES ('360823', '360800', ',360000,360800,360823', '3', '峡江县', 'mainland', '2');
INSERT INTO `area` VALUES ('360824', '360800', ',360000,360800,360824', '3', '新干县', 'mainland', '2');
INSERT INTO `area` VALUES ('360825', '360800', ',360000,360800,360825', '3', '永丰县', 'mainland', '2');
INSERT INTO `area` VALUES ('360826', '360800', ',360000,360800,360826', '3', '泰和县', 'mainland', '2');
INSERT INTO `area` VALUES ('360827', '360800', ',360000,360800,360827', '3', '遂川县', 'mainland', '2');
INSERT INTO `area` VALUES ('360828', '360800', ',360000,360800,360828', '3', '万安县', 'mainland', '2');
INSERT INTO `area` VALUES ('360829', '360800', ',360000,360800,360829', '3', '安福县', 'mainland', '2');
INSERT INTO `area` VALUES ('360830', '360800', ',360000,360800,360830', '3', '永新县', 'mainland', '2');
INSERT INTO `area` VALUES ('360881', '360800', ',360000,360800,360881', '3', '井冈山市', 'mainland', '2');
INSERT INTO `area` VALUES ('360882', '360800', ',360000,360800,360882', '3', '其它区', 'mainland', '2');
INSERT INTO `area` VALUES ('360900', '360000', ',360000,360900', '2', '宜春市', 'mainland', '2');
INSERT INTO `area` VALUES ('360902', '360900', ',360000,360900,360902', '3', '袁州区', 'mainland', '2');
INSERT INTO `area` VALUES ('360921', '360900', ',360000,360900,360921', '3', '奉新县', 'mainland', '2');
INSERT INTO `area` VALUES ('360922', '360900', ',360000,360900,360922', '3', '万载县', 'mainland', '2');
INSERT INTO `area` VALUES ('360923', '360900', ',360000,360900,360923', '3', '上高县', 'mainland', '2');
INSERT INTO `area` VALUES ('360924', '360900', ',360000,360900,360924', '3', '宜丰县', 'mainland', '2');
INSERT INTO `area` VALUES ('360925', '360900', ',360000,360900,360925', '3', '靖安县', 'mainland', '2');
INSERT INTO `area` VALUES ('360926', '360900', ',360000,360900,360926', '3', '铜鼓县', 'mainland', '2');
INSERT INTO `area` VALUES ('360981', '360900', ',360000,360900,360981', '3', '丰城市', 'mainland', '2');
INSERT INTO `area` VALUES ('360982', '360900', ',360000,360900,360982', '3', '樟树市', 'mainland', '2');
INSERT INTO `area` VALUES ('360983', '360900', ',360000,360900,360983', '3', '高安市', 'mainland', '2');
INSERT INTO `area` VALUES ('360984', '360900', ',360000,360900,360984', '3', '其它区', 'mainland', '2');
INSERT INTO `area` VALUES ('361000', '360000', ',360000,361000', '2', '抚州市', 'mainland', '2');
INSERT INTO `area` VALUES ('361002', '361000', ',360000,361000,361002', '3', '临川区', 'mainland', '2');
INSERT INTO `area` VALUES ('361021', '361000', ',360000,361000,361021', '3', '南城县', 'mainland', '2');
INSERT INTO `area` VALUES ('361022', '361000', ',360000,361000,361022', '3', '黎川县', 'mainland', '2');
INSERT INTO `area` VALUES ('361023', '361000', ',360000,361000,361023', '3', '南丰县', 'mainland', '2');
INSERT INTO `area` VALUES ('361024', '361000', ',360000,361000,361024', '3', '崇仁县', 'mainland', '2');
INSERT INTO `area` VALUES ('361025', '361000', ',360000,361000,361025', '3', '乐安县', 'mainland', '2');
INSERT INTO `area` VALUES ('361026', '361000', ',360000,361000,361026', '3', '宜黄县', 'mainland', '2');
INSERT INTO `area` VALUES ('361027', '361000', ',360000,361000,361027', '3', '金溪县', 'mainland', '2');
INSERT INTO `area` VALUES ('361028', '361000', ',360000,361000,361028', '3', '资溪县', 'mainland', '2');
INSERT INTO `area` VALUES ('361029', '361000', ',360000,361000,361029', '3', '东乡县', 'mainland', '2');
INSERT INTO `area` VALUES ('361030', '361000', ',360000,361000,361030', '3', '广昌县', 'mainland', '2');
INSERT INTO `area` VALUES ('361031', '361000', ',360000,361000,361031', '3', '其它区', 'mainland', '2');
INSERT INTO `area` VALUES ('361100', '360000', ',360000,361100', '2', '上饶市', 'mainland', '2');
INSERT INTO `area` VALUES ('361102', '361100', ',360000,361100,361102', '3', '信州区', 'mainland', '2');
INSERT INTO `area` VALUES ('361121', '361100', ',360000,361100,361121', '3', '上饶县', 'mainland', '2');
INSERT INTO `area` VALUES ('361122', '361100', ',360000,361100,361122', '3', '广丰县', 'mainland', '2');
INSERT INTO `area` VALUES ('361123', '361100', ',360000,361100,361123', '3', '玉山县', 'mainland', '2');
INSERT INTO `area` VALUES ('361124', '361100', ',360000,361100,361124', '3', '铅山县', 'mainland', '2');
INSERT INTO `area` VALUES ('361125', '361100', ',360000,361100,361125', '3', '横峰县', 'mainland', '2');
INSERT INTO `area` VALUES ('361126', '361100', ',360000,361100,361126', '3', '弋阳县', 'mainland', '2');
INSERT INTO `area` VALUES ('361127', '361100', ',360000,361100,361127', '3', '余干县', 'mainland', '2');
INSERT INTO `area` VALUES ('361128', '361100', ',360000,361100,361128', '3', '鄱阳县', 'mainland', '2');
INSERT INTO `area` VALUES ('361129', '361100', ',360000,361100,361129', '3', '万年县', 'mainland', '2');
INSERT INTO `area` VALUES ('361130', '361100', ',360000,361100,361130', '3', '婺源县', 'mainland', '2');
INSERT INTO `area` VALUES ('361181', '361100', ',360000,361100,361181', '3', '德兴市', 'mainland', '2');
INSERT INTO `area` VALUES ('361182', '361100', ',360000,361100,361182', '3', '其它区', 'mainland', '2');
INSERT INTO `area` VALUES ('370000', '100000', ',370000', '1', '山东省', 'mainland', '3');
INSERT INTO `area` VALUES ('370100', '370000', ',370000,370100', '2', '济南市', 'mainland', '3');
INSERT INTO `area` VALUES ('370102', '370100', ',370000,370100,370102', '3', '历下区', 'mainland', '3');
INSERT INTO `area` VALUES ('370103', '370100', ',370000,370100,370103', '3', '市中区', 'mainland', '3');
INSERT INTO `area` VALUES ('370104', '370100', ',370000,370100,370104', '3', '槐荫区', 'mainland', '3');
INSERT INTO `area` VALUES ('370105', '370100', ',370000,370100,370105', '3', '天桥区', 'mainland', '3');
INSERT INTO `area` VALUES ('370112', '370100', ',370000,370100,370112', '3', '历城区', 'mainland', '3');
INSERT INTO `area` VALUES ('370113', '370100', ',370000,370100,370113', '3', '长清区', 'mainland', '3');
INSERT INTO `area` VALUES ('370124', '370100', ',370000,370100,370124', '3', '平阴县', 'mainland', '3');
INSERT INTO `area` VALUES ('370125', '370100', ',370000,370100,370125', '3', '济阳县', 'mainland', '3');
INSERT INTO `area` VALUES ('370126', '370100', ',370000,370100,370126', '3', '商河县', 'mainland', '3');
INSERT INTO `area` VALUES ('370181', '370100', ',370000,370100,370181', '3', '章丘市', 'mainland', '3');
INSERT INTO `area` VALUES ('370182', '370100', ',370000,370100,370182', '3', '其它区', 'mainland', '3');
INSERT INTO `area` VALUES ('370200', '370000', ',370000,370200', '2', '青岛市', 'mainland', '3');
INSERT INTO `area` VALUES ('370202', '370200', ',370000,370200,370202', '3', '市南区', 'mainland', '3');
INSERT INTO `area` VALUES ('370203', '370200', ',370000,370200,370203', '3', '市北区', 'mainland', '3');
INSERT INTO `area` VALUES ('370205', '370200', ',370000,370200,370205', '3', '四方区', 'mainland', '3');
INSERT INTO `area` VALUES ('370211', '370200', ',370000,370200,370211', '3', '黄岛区', 'mainland', '3');
INSERT INTO `area` VALUES ('370212', '370200', ',370000,370200,370212', '3', '崂山区', 'mainland', '3');
INSERT INTO `area` VALUES ('370213', '370200', ',370000,370200,370213', '3', '李沧区', 'mainland', '3');
INSERT INTO `area` VALUES ('370214', '370200', ',370000,370200,370214', '3', '城阳区', 'mainland', '3');
INSERT INTO `area` VALUES ('370251', '370200', ',370000,370200,370251', '3', '开发区', 'mainland', '3');
INSERT INTO `area` VALUES ('370281', '370200', ',370000,370200,370281', '3', '胶州市', 'mainland', '3');
INSERT INTO `area` VALUES ('370282', '370200', ',370000,370200,370282', '3', '即墨市', 'mainland', '3');
INSERT INTO `area` VALUES ('370283', '370200', ',370000,370200,370283', '3', '平度市', 'mainland', '3');
INSERT INTO `area` VALUES ('370284', '370200', ',370000,370200,370284', '3', '胶南市', 'mainland', '3');
INSERT INTO `area` VALUES ('370285', '370200', ',370000,370200,370285', '3', '莱西市', 'mainland', '3');
INSERT INTO `area` VALUES ('370286', '370200', ',370000,370200,370286', '3', '其它区', 'mainland', '3');
INSERT INTO `area` VALUES ('370300', '370000', ',370000,370300', '2', '淄博市', 'mainland', '3');
INSERT INTO `area` VALUES ('370302', '370300', ',370000,370300,370302', '3', '淄川区', 'mainland', '3');
INSERT INTO `area` VALUES ('370303', '370300', ',370000,370300,370303', '3', '张店区', 'mainland', '3');
INSERT INTO `area` VALUES ('370304', '370300', ',370000,370300,370304', '3', '博山区', 'mainland', '3');
INSERT INTO `area` VALUES ('370305', '370300', ',370000,370300,370305', '3', '临淄区', 'mainland', '3');
INSERT INTO `area` VALUES ('370306', '370300', ',370000,370300,370306', '3', '周村区', 'mainland', '3');
INSERT INTO `area` VALUES ('370321', '370300', ',370000,370300,370321', '3', '桓台县', 'mainland', '3');
INSERT INTO `area` VALUES ('370322', '370300', ',370000,370300,370322', '3', '高青县', 'mainland', '3');
INSERT INTO `area` VALUES ('370323', '370300', ',370000,370300,370323', '3', '沂源县', 'mainland', '3');
INSERT INTO `area` VALUES ('370324', '370300', ',370000,370300,370324', '3', '其它区', 'mainland', '3');
INSERT INTO `area` VALUES ('370400', '370000', ',370000,370400', '2', '枣庄市', 'mainland', '3');
INSERT INTO `area` VALUES ('370402', '370400', ',370000,370400,370402', '3', '市中区', 'mainland', '3');
INSERT INTO `area` VALUES ('370403', '370400', ',370000,370400,370403', '3', '薛城区', 'mainland', '3');
INSERT INTO `area` VALUES ('370404', '370400', ',370000,370400,370404', '3', '峄城区', 'mainland', '3');
INSERT INTO `area` VALUES ('370405', '370400', ',370000,370400,370405', '3', '台儿庄区', 'mainland', '3');
INSERT INTO `area` VALUES ('370406', '370400', ',370000,370400,370406', '3', '山亭区', 'mainland', '3');
INSERT INTO `area` VALUES ('370481', '370400', ',370000,370400,370481', '3', '滕州市', 'mainland', '3');
INSERT INTO `area` VALUES ('370482', '370400', ',370000,370400,370482', '3', '其它区', 'mainland', '3');
INSERT INTO `area` VALUES ('370500', '370000', ',370000,370500', '2', '东营市', 'mainland', '3');
INSERT INTO `area` VALUES ('370502', '370500', ',370000,370500,370502', '3', '东营区', 'mainland', '3');
INSERT INTO `area` VALUES ('370503', '370500', ',370000,370500,370503', '3', '河口区', 'mainland', '3');
INSERT INTO `area` VALUES ('370521', '370500', ',370000,370500,370521', '3', '垦利县', 'mainland', '3');
INSERT INTO `area` VALUES ('370522', '370500', ',370000,370500,370522', '3', '利津县', 'mainland', '3');
INSERT INTO `area` VALUES ('370523', '370500', ',370000,370500,370523', '3', '广饶县', 'mainland', '3');
INSERT INTO `area` VALUES ('370589', '370500', ',370000,370500,370589', '3', '西城区', 'mainland', '3');
INSERT INTO `area` VALUES ('370590', '370500', ',370000,370500,370590', '3', '东城区', 'mainland', '3');
INSERT INTO `area` VALUES ('370591', '370500', ',370000,370500,370591', '3', '其它区', 'mainland', '3');
INSERT INTO `area` VALUES ('370600', '370000', ',370000,370600', '2', '烟台市', 'mainland', '3');
INSERT INTO `area` VALUES ('370602', '370600', ',370000,370600,370602', '3', '芝罘区', 'mainland', '3');
INSERT INTO `area` VALUES ('370611', '370600', ',370000,370600,370611', '3', '福山区', 'mainland', '3');
INSERT INTO `area` VALUES ('370612', '370600', ',370000,370600,370612', '3', '牟平区', 'mainland', '3');
INSERT INTO `area` VALUES ('370613', '370600', ',370000,370600,370613', '3', '莱山区', 'mainland', '3');
INSERT INTO `area` VALUES ('370634', '370600', ',370000,370600,370634', '3', '长岛县', 'mainland', '3');
INSERT INTO `area` VALUES ('370681', '370600', ',370000,370600,370681', '3', '龙口市', 'mainland', '3');
INSERT INTO `area` VALUES ('370682', '370600', ',370000,370600,370682', '3', '莱阳市', 'mainland', '3');
INSERT INTO `area` VALUES ('370683', '370600', ',370000,370600,370683', '3', '莱州市', 'mainland', '3');
INSERT INTO `area` VALUES ('370684', '370600', ',370000,370600,370684', '3', '蓬莱市', 'mainland', '3');
INSERT INTO `area` VALUES ('370685', '370600', ',370000,370600,370685', '3', '招远市', 'mainland', '3');
INSERT INTO `area` VALUES ('370686', '370600', ',370000,370600,370686', '3', '栖霞市', 'mainland', '3');
INSERT INTO `area` VALUES ('370687', '370600', ',370000,370600,370687', '3', '海阳市', 'mainland', '3');
INSERT INTO `area` VALUES ('370688', '370600', ',370000,370600,370688', '3', '其它区', 'mainland', '3');
INSERT INTO `area` VALUES ('370700', '370000', ',370000,370700', '2', '潍坊市', 'mainland', '3');
INSERT INTO `area` VALUES ('370702', '370700', ',370000,370700,370702', '3', '潍城区', 'mainland', '3');
INSERT INTO `area` VALUES ('370703', '370700', ',370000,370700,370703', '3', '寒亭区', 'mainland', '3');
INSERT INTO `area` VALUES ('370704', '370700', ',370000,370700,370704', '3', '坊子区', 'mainland', '3');
INSERT INTO `area` VALUES ('370705', '370700', ',370000,370700,370705', '3', '奎文区', 'mainland', '3');
INSERT INTO `area` VALUES ('370724', '370700', ',370000,370700,370724', '3', '临朐县', 'mainland', '3');
INSERT INTO `area` VALUES ('370725', '370700', ',370000,370700,370725', '3', '昌乐县', 'mainland', '3');
INSERT INTO `area` VALUES ('370751', '370700', ',370000,370700,370751', '3', '开发区', 'mainland', '3');
INSERT INTO `area` VALUES ('370781', '370700', ',370000,370700,370781', '3', '青州市', 'mainland', '3');
INSERT INTO `area` VALUES ('370782', '370700', ',370000,370700,370782', '3', '诸城市', 'mainland', '3');
INSERT INTO `area` VALUES ('370783', '370700', ',370000,370700,370783', '3', '寿光市', 'mainland', '3');
INSERT INTO `area` VALUES ('370784', '370700', ',370000,370700,370784', '3', '安丘市', 'mainland', '3');
INSERT INTO `area` VALUES ('370785', '370700', ',370000,370700,370785', '3', '高密市', 'mainland', '3');
INSERT INTO `area` VALUES ('370786', '370700', ',370000,370700,370786', '3', '昌邑市', 'mainland', '3');
INSERT INTO `area` VALUES ('370787', '370700', ',370000,370700,370787', '3', '其它区', 'mainland', '3');
INSERT INTO `area` VALUES ('370800', '370000', ',370000,370800', '2', '济宁市', 'mainland', '3');
INSERT INTO `area` VALUES ('370802', '370800', ',370000,370800,370802', '3', '市中区', 'mainland', '3');
INSERT INTO `area` VALUES ('370811', '370800', ',370000,370800,370811', '3', '任城区', 'mainland', '3');
INSERT INTO `area` VALUES ('370826', '370800', ',370000,370800,370826', '3', '微山县', 'mainland', '3');
INSERT INTO `area` VALUES ('370827', '370800', ',370000,370800,370827', '3', '鱼台县', 'mainland', '3');
INSERT INTO `area` VALUES ('370828', '370800', ',370000,370800,370828', '3', '金乡县', 'mainland', '3');
INSERT INTO `area` VALUES ('370829', '370800', ',370000,370800,370829', '3', '嘉祥县', 'mainland', '3');
INSERT INTO `area` VALUES ('370830', '370800', ',370000,370800,370830', '3', '汶上县', 'mainland', '3');
INSERT INTO `area` VALUES ('370831', '370800', ',370000,370800,370831', '3', '泗水县', 'mainland', '3');
INSERT INTO `area` VALUES ('370832', '370800', ',370000,370800,370832', '3', '梁山县', 'mainland', '3');
INSERT INTO `area` VALUES ('370881', '370800', ',370000,370800,370881', '3', '曲阜市', 'mainland', '3');
INSERT INTO `area` VALUES ('370882', '370800', ',370000,370800,370882', '3', '兖州市', 'mainland', '3');
INSERT INTO `area` VALUES ('370883', '370800', ',370000,370800,370883', '3', '邹城市', 'mainland', '3');
INSERT INTO `area` VALUES ('370884', '370800', ',370000,370800,370884', '3', '其它区', 'mainland', '3');
INSERT INTO `area` VALUES ('370900', '370000', ',370000,370900', '2', '泰安市', 'mainland', '3');
INSERT INTO `area` VALUES ('370902', '370900', ',370000,370900,370902', '3', '泰山区', 'mainland', '3');
INSERT INTO `area` VALUES ('370903', '370900', ',370000,370900,370903', '3', '岱岳区', 'mainland', '3');
INSERT INTO `area` VALUES ('370921', '370900', ',370000,370900,370921', '3', '宁阳县', 'mainland', '3');
INSERT INTO `area` VALUES ('370923', '370900', ',370000,370900,370923', '3', '东平县', 'mainland', '3');
INSERT INTO `area` VALUES ('370982', '370900', ',370000,370900,370982', '3', '新泰市', 'mainland', '3');
INSERT INTO `area` VALUES ('370983', '370900', ',370000,370900,370983', '3', '肥城市', 'mainland', '3');
INSERT INTO `area` VALUES ('370984', '370900', ',370000,370900,370984', '3', '其它区', 'mainland', '3');
INSERT INTO `area` VALUES ('371000', '370000', ',370000,371000', '2', '威海市', 'mainland', '3');
INSERT INTO `area` VALUES ('371002', '371000', ',370000,371000,371002', '3', '环翠区', 'mainland', '3');
INSERT INTO `area` VALUES ('371081', '371000', ',370000,371000,371081', '3', '文登市', 'mainland', '3');
INSERT INTO `area` VALUES ('371082', '371000', ',370000,371000,371082', '3', '荣成市', 'mainland', '3');
INSERT INTO `area` VALUES ('371083', '371000', ',370000,371000,371083', '3', '乳山市', 'mainland', '3');
INSERT INTO `area` VALUES ('371084', '371000', ',370000,371000,371084', '3', '其它区', 'mainland', '3');
INSERT INTO `area` VALUES ('371100', '370000', ',370000,371100', '2', '日照市', 'mainland', '3');
INSERT INTO `area` VALUES ('371102', '371100', ',370000,371100,371102', '3', '东港区', 'mainland', '3');
INSERT INTO `area` VALUES ('371103', '371100', ',370000,371100,371103', '3', '岚山区', 'mainland', '3');
INSERT INTO `area` VALUES ('371121', '371100', ',370000,371100,371121', '3', '五莲县', 'mainland', '3');
INSERT INTO `area` VALUES ('371122', '371100', ',370000,371100,371122', '3', '莒县', 'mainland', '3');
INSERT INTO `area` VALUES ('371123', '371100', ',370000,371100,371123', '3', '其它区', 'mainland', '3');
INSERT INTO `area` VALUES ('371200', '370000', ',370000,371200', '2', '莱芜市', 'mainland', '3');
INSERT INTO `area` VALUES ('371202', '371200', ',370000,371200,371202', '3', '莱城区', 'mainland', '3');
INSERT INTO `area` VALUES ('371203', '371200', ',370000,371200,371203', '3', '钢城区', 'mainland', '3');
INSERT INTO `area` VALUES ('371204', '371200', ',370000,371200,371204', '3', '其它区', 'mainland', '3');
INSERT INTO `area` VALUES ('371300', '370000', ',370000,371300', '2', '临沂市', 'mainland', '3');
INSERT INTO `area` VALUES ('371302', '371300', ',370000,371300,371302', '3', '兰山区', 'mainland', '3');
INSERT INTO `area` VALUES ('371311', '371300', ',370000,371300,371311', '3', '罗庄区', 'mainland', '3');
INSERT INTO `area` VALUES ('371312', '371300', ',370000,371300,371312', '3', '河东区', 'mainland', '3');
INSERT INTO `area` VALUES ('371321', '371300', ',370000,371300,371321', '3', '沂南县', 'mainland', '3');
INSERT INTO `area` VALUES ('371322', '371300', ',370000,371300,371322', '3', '郯城县', 'mainland', '3');
INSERT INTO `area` VALUES ('371323', '371300', ',370000,371300,371323', '3', '沂水县', 'mainland', '3');
INSERT INTO `area` VALUES ('371324', '371300', ',370000,371300,371324', '3', '苍山县', 'mainland', '3');
INSERT INTO `area` VALUES ('371325', '371300', ',370000,371300,371325', '3', '费县', 'mainland', '3');
INSERT INTO `area` VALUES ('371326', '371300', ',370000,371300,371326', '3', '平邑县', 'mainland', '3');
INSERT INTO `area` VALUES ('371327', '371300', ',370000,371300,371327', '3', '莒南县', 'mainland', '3');
INSERT INTO `area` VALUES ('371328', '371300', ',370000,371300,371328', '3', '蒙阴县', 'mainland', '3');
INSERT INTO `area` VALUES ('371329', '371300', ',370000,371300,371329', '3', '临沭县', 'mainland', '3');
INSERT INTO `area` VALUES ('371330', '371300', ',370000,371300,371330', '3', '其它区', 'mainland', '3');
INSERT INTO `area` VALUES ('371400', '370000', ',370000,371400', '2', '德州市', 'mainland', '3');
INSERT INTO `area` VALUES ('371402', '371400', ',370000,371400,371402', '3', '德城区', 'mainland', '3');
INSERT INTO `area` VALUES ('371421', '371400', ',370000,371400,371421', '3', '陵县', 'mainland', '3');
INSERT INTO `area` VALUES ('371422', '371400', ',370000,371400,371422', '3', '宁津县', 'mainland', '3');
INSERT INTO `area` VALUES ('371423', '371400', ',370000,371400,371423', '3', '庆云县', 'mainland', '3');
INSERT INTO `area` VALUES ('371424', '371400', ',370000,371400,371424', '3', '临邑县', 'mainland', '3');
INSERT INTO `area` VALUES ('371425', '371400', ',370000,371400,371425', '3', '齐河县', 'mainland', '3');
INSERT INTO `area` VALUES ('371426', '371400', ',370000,371400,371426', '3', '平原县', 'mainland', '3');
INSERT INTO `area` VALUES ('371427', '371400', ',370000,371400,371427', '3', '夏津县', 'mainland', '3');
INSERT INTO `area` VALUES ('371428', '371400', ',370000,371400,371428', '3', '武城县', 'mainland', '3');
INSERT INTO `area` VALUES ('371451', '371400', ',370000,371400,371451', '3', '开发区', 'mainland', '3');
INSERT INTO `area` VALUES ('371481', '371400', ',370000,371400,371481', '3', '乐陵市', 'mainland', '3');
INSERT INTO `area` VALUES ('371482', '371400', ',370000,371400,371482', '3', '禹城市', 'mainland', '3');
INSERT INTO `area` VALUES ('371483', '371400', ',370000,371400,371483', '3', '其它区', 'mainland', '3');
INSERT INTO `area` VALUES ('371500', '370000', ',370000,371500', '2', '聊城市', 'mainland', '3');
INSERT INTO `area` VALUES ('371502', '371500', ',370000,371500,371502', '3', '东昌府区', 'mainland', '3');
INSERT INTO `area` VALUES ('371521', '371500', ',370000,371500,371521', '3', '阳谷县', 'mainland', '3');
INSERT INTO `area` VALUES ('371522', '371500', ',370000,371500,371522', '3', '莘县', 'mainland', '3');
INSERT INTO `area` VALUES ('371523', '371500', ',370000,371500,371523', '3', '茌平县', 'mainland', '3');
INSERT INTO `area` VALUES ('371524', '371500', ',370000,371500,371524', '3', '东阿县', 'mainland', '3');
INSERT INTO `area` VALUES ('371525', '371500', ',370000,371500,371525', '3', '冠县', 'mainland', '3');
INSERT INTO `area` VALUES ('371526', '371500', ',370000,371500,371526', '3', '高唐县', 'mainland', '3');
INSERT INTO `area` VALUES ('371581', '371500', ',370000,371500,371581', '3', '临清市', 'mainland', '3');
INSERT INTO `area` VALUES ('371582', '371500', ',370000,371500,371582', '3', '其它区', 'mainland', '3');
INSERT INTO `area` VALUES ('371600', '370000', ',370000,371600', '2', '滨州市', 'mainland', '3');
INSERT INTO `area` VALUES ('371602', '371600', ',370000,371600,371602', '3', '滨城区', 'mainland', '3');
INSERT INTO `area` VALUES ('371621', '371600', ',370000,371600,371621', '3', '惠民县', 'mainland', '3');
INSERT INTO `area` VALUES ('371622', '371600', ',370000,371600,371622', '3', '阳信县', 'mainland', '3');
INSERT INTO `area` VALUES ('371623', '371600', ',370000,371600,371623', '3', '无棣县', 'mainland', '3');
INSERT INTO `area` VALUES ('371624', '371600', ',370000,371600,371624', '3', '沾化县', 'mainland', '3');
INSERT INTO `area` VALUES ('371625', '371600', ',370000,371600,371625', '3', '博兴县', 'mainland', '3');
INSERT INTO `area` VALUES ('371626', '371600', ',370000,371600,371626', '3', '邹平县', 'mainland', '3');
INSERT INTO `area` VALUES ('371627', '371600', ',370000,371600,371627', '3', '其它区', 'mainland', '3');
INSERT INTO `area` VALUES ('371700', '370000', ',370000,371700', '2', '菏泽市', 'mainland', '3');
INSERT INTO `area` VALUES ('371702', '371700', ',370000,371700,371702', '3', '牡丹区', 'mainland', '3');
INSERT INTO `area` VALUES ('371721', '371700', ',370000,371700,371721', '3', '曹县', 'mainland', '3');
INSERT INTO `area` VALUES ('371722', '371700', ',370000,371700,371722', '3', '单县', 'mainland', '3');
INSERT INTO `area` VALUES ('371723', '371700', ',370000,371700,371723', '3', '成武县', 'mainland', '3');
INSERT INTO `area` VALUES ('371724', '371700', ',370000,371700,371724', '3', '巨野县', 'mainland', '3');
INSERT INTO `area` VALUES ('371725', '371700', ',370000,371700,371725', '3', '郓城县', 'mainland', '3');
INSERT INTO `area` VALUES ('371726', '371700', ',370000,371700,371726', '3', '鄄城县', 'mainland', '3');
INSERT INTO `area` VALUES ('371727', '371700', ',370000,371700,371727', '3', '定陶县', 'mainland', '3');
INSERT INTO `area` VALUES ('371728', '371700', ',370000,371700,371728', '3', '东明县', 'mainland', '3');
INSERT INTO `area` VALUES ('371729', '371700', ',370000,371700,371729', '3', '其它区', 'mainland', '3');
INSERT INTO `area` VALUES ('410000', '100000', ',410000', '1', '河南省', 'mainland', '2');
INSERT INTO `area` VALUES ('410100', '410000', ',410000,410100', '2', '郑州市', 'mainland', '2');
INSERT INTO `area` VALUES ('410102', '410100', ',410000,410100,410102', '3', '中原区', 'mainland', '2');
INSERT INTO `area` VALUES ('410103', '410100', ',410000,410100,410103', '3', '二七区', 'mainland', '2');
INSERT INTO `area` VALUES ('410104', '410100', ',410000,410100,410104', '3', '管城回族区', 'mainland', '2');
INSERT INTO `area` VALUES ('410105', '410100', ',410000,410100,410105', '3', '金水区', 'mainland', '2');
INSERT INTO `area` VALUES ('410106', '410100', ',410000,410100,410106', '3', '上街区', 'mainland', '2');
INSERT INTO `area` VALUES ('410108', '410100', ',410000,410100,410108', '3', '惠济区', 'mainland', '2');
INSERT INTO `area` VALUES ('410122', '410100', ',410000,410100,410122', '3', '中牟县', 'mainland', '2');
INSERT INTO `area` VALUES ('410181', '410100', ',410000,410100,410181', '3', '巩义市', 'mainland', '2');
INSERT INTO `area` VALUES ('410182', '410100', ',410000,410100,410182', '3', '荥阳市', 'mainland', '2');
INSERT INTO `area` VALUES ('410183', '410100', ',410000,410100,410183', '3', '新密市', 'mainland', '2');
INSERT INTO `area` VALUES ('410184', '410100', ',410000,410100,410184', '3', '新郑市', 'mainland', '2');
INSERT INTO `area` VALUES ('410185', '410100', ',410000,410100,410185', '3', '登封市', 'mainland', '2');
INSERT INTO `area` VALUES ('410186', '410100', ',410000,410100,410186', '3', '郑东新区', 'mainland', '2');
INSERT INTO `area` VALUES ('410187', '410100', ',410000,410100,410187', '3', '高新区', 'mainland', '2');
INSERT INTO `area` VALUES ('410188', '410100', ',410000,410100,410188', '3', '其它区', 'mainland', '2');
INSERT INTO `area` VALUES ('410200', '410000', ',410000,410200', '2', '开封市', 'mainland', '2');
INSERT INTO `area` VALUES ('410202', '410200', ',410000,410200,410202', '3', '龙亭区', 'mainland', '2');
INSERT INTO `area` VALUES ('410203', '410200', ',410000,410200,410203', '3', '顺河回族区', 'mainland', '2');
INSERT INTO `area` VALUES ('410204', '410200', ',410000,410200,410204', '3', '鼓楼区', 'mainland', '2');
INSERT INTO `area` VALUES ('410205', '410200', ',410000,410200,410205', '3', '禹王台区', 'mainland', '2');
INSERT INTO `area` VALUES ('410211', '410200', ',410000,410200,410211', '3', '金明区', 'mainland', '2');
INSERT INTO `area` VALUES ('410221', '410200', ',410000,410200,410221', '3', '杞县', 'mainland', '2');
INSERT INTO `area` VALUES ('410222', '410200', ',410000,410200,410222', '3', '通许县', 'mainland', '2');
INSERT INTO `area` VALUES ('410223', '410200', ',410000,410200,410223', '3', '尉氏县', 'mainland', '2');
INSERT INTO `area` VALUES ('410224', '410200', ',410000,410200,410224', '3', '开封县', 'mainland', '2');
INSERT INTO `area` VALUES ('410225', '410200', ',410000,410200,410225', '3', '兰考县', 'mainland', '2');
INSERT INTO `area` VALUES ('410226', '410200', ',410000,410200,410226', '3', '其它区', 'mainland', '2');
INSERT INTO `area` VALUES ('410300', '410000', ',410000,410300', '2', '洛阳市', 'mainland', '2');
INSERT INTO `area` VALUES ('410302', '410300', ',410000,410300,410302', '3', '老城区', 'mainland', '2');
INSERT INTO `area` VALUES ('410303', '410300', ',410000,410300,410303', '3', '西工区', 'mainland', '2');
INSERT INTO `area` VALUES ('410304', '410300', ',410000,410300,410304', '3', '廛河回族区', 'mainland', '2');
INSERT INTO `area` VALUES ('410305', '410300', ',410000,410300,410305', '3', '涧西区', 'mainland', '2');
INSERT INTO `area` VALUES ('410306', '410300', ',410000,410300,410306', '3', '吉利区', 'mainland', '2');
INSERT INTO `area` VALUES ('410307', '410300', ',410000,410300,410307', '3', '洛龙区', 'mainland', '2');
INSERT INTO `area` VALUES ('410322', '410300', ',410000,410300,410322', '3', '孟津县', 'mainland', '2');
INSERT INTO `area` VALUES ('410323', '410300', ',410000,410300,410323', '3', '新安县', 'mainland', '2');
INSERT INTO `area` VALUES ('410324', '410300', ',410000,410300,410324', '3', '栾川县', 'mainland', '2');
INSERT INTO `area` VALUES ('410325', '410300', ',410000,410300,410325', '3', '嵩县', 'mainland', '2');
INSERT INTO `area` VALUES ('410326', '410300', ',410000,410300,410326', '3', '汝阳县', 'mainland', '2');
INSERT INTO `area` VALUES ('410327', '410300', ',410000,410300,410327', '3', '宜阳县', 'mainland', '2');
INSERT INTO `area` VALUES ('410328', '410300', ',410000,410300,410328', '3', '洛宁县', 'mainland', '2');
INSERT INTO `area` VALUES ('410329', '410300', ',410000,410300,410329', '3', '伊川县', 'mainland', '2');
INSERT INTO `area` VALUES ('410381', '410300', ',410000,410300,410381', '3', '偃师市', 'mainland', '2');
INSERT INTO `area` VALUES ('410400', '410000', ',410000,410400', '2', '平顶山市', 'mainland', '2');
INSERT INTO `area` VALUES ('410402', '410400', ',410000,410400,410402', '3', '新华区', 'mainland', '2');
INSERT INTO `area` VALUES ('410403', '410400', ',410000,410400,410403', '3', '卫东区', 'mainland', '2');
INSERT INTO `area` VALUES ('410404', '410400', ',410000,410400,410404', '3', '石龙区', 'mainland', '2');
INSERT INTO `area` VALUES ('410411', '410400', ',410000,410400,410411', '3', '湛河区', 'mainland', '2');
INSERT INTO `area` VALUES ('410421', '410400', ',410000,410400,410421', '3', '宝丰县', 'mainland', '2');
INSERT INTO `area` VALUES ('410422', '410400', ',410000,410400,410422', '3', '叶县', 'mainland', '2');
INSERT INTO `area` VALUES ('410423', '410400', ',410000,410400,410423', '3', '鲁山县', 'mainland', '2');
INSERT INTO `area` VALUES ('410425', '410400', ',410000,410400,410425', '3', '郏县', 'mainland', '2');
INSERT INTO `area` VALUES ('410481', '410400', ',410000,410400,410481', '3', '舞钢市', 'mainland', '2');
INSERT INTO `area` VALUES ('410482', '410400', ',410000,410400,410482', '3', '汝州市', 'mainland', '2');
INSERT INTO `area` VALUES ('410483', '410400', ',410000,410400,410483', '3', '其它区', 'mainland', '2');
INSERT INTO `area` VALUES ('410500', '410000', ',410000,410500', '2', '安阳市', 'mainland', '2');
INSERT INTO `area` VALUES ('410502', '410500', ',410000,410500,410502', '3', '文峰区', 'mainland', '2');
INSERT INTO `area` VALUES ('410503', '410500', ',410000,410500,410503', '3', '北关区', 'mainland', '2');
INSERT INTO `area` VALUES ('410505', '410500', ',410000,410500,410505', '3', '殷都区', 'mainland', '2');
INSERT INTO `area` VALUES ('410506', '410500', ',410000,410500,410506', '3', '龙安区', 'mainland', '2');
INSERT INTO `area` VALUES ('410522', '410500', ',410000,410500,410522', '3', '安阳县', 'mainland', '2');
INSERT INTO `area` VALUES ('410523', '410500', ',410000,410500,410523', '3', '汤阴县', 'mainland', '2');
INSERT INTO `area` VALUES ('410526', '410500', ',410000,410500,410526', '3', '滑县', 'mainland', '2');
INSERT INTO `area` VALUES ('410527', '410500', ',410000,410500,410527', '3', '内黄县', 'mainland', '2');
INSERT INTO `area` VALUES ('410581', '410500', ',410000,410500,410581', '3', '林州市', 'mainland', '2');
INSERT INTO `area` VALUES ('410582', '410500', ',410000,410500,410582', '3', '其它区', 'mainland', '2');
INSERT INTO `area` VALUES ('410600', '410000', ',410000,410600', '2', '鹤壁市', 'mainland', '2');
INSERT INTO `area` VALUES ('410602', '410600', ',410000,410600,410602', '3', '鹤山区', 'mainland', '2');
INSERT INTO `area` VALUES ('410603', '410600', ',410000,410600,410603', '3', '山城区', 'mainland', '2');
INSERT INTO `area` VALUES ('410611', '410600', ',410000,410600,410611', '3', '淇滨区', 'mainland', '2');
INSERT INTO `area` VALUES ('410621', '410600', ',410000,410600,410621', '3', '浚县', 'mainland', '2');
INSERT INTO `area` VALUES ('410622', '410600', ',410000,410600,410622', '3', '淇县', 'mainland', '2');
INSERT INTO `area` VALUES ('410623', '410600', ',410000,410600,410623', '3', '其它区', 'mainland', '2');
INSERT INTO `area` VALUES ('410700', '410000', ',410000,410700', '2', '新乡市', 'mainland', '2');
INSERT INTO `area` VALUES ('410702', '410700', ',410000,410700,410702', '3', '红旗区', 'mainland', '2');
INSERT INTO `area` VALUES ('410703', '410700', ',410000,410700,410703', '3', '卫滨区', 'mainland', '2');
INSERT INTO `area` VALUES ('410704', '410700', ',410000,410700,410704', '3', '凤泉区', 'mainland', '2');
INSERT INTO `area` VALUES ('410711', '410700', ',410000,410700,410711', '3', '牧野区', 'mainland', '2');
INSERT INTO `area` VALUES ('410721', '410700', ',410000,410700,410721', '3', '新乡县', 'mainland', '2');
INSERT INTO `area` VALUES ('410724', '410700', ',410000,410700,410724', '3', '获嘉县', 'mainland', '2');
INSERT INTO `area` VALUES ('410725', '410700', ',410000,410700,410725', '3', '原阳县', 'mainland', '2');
INSERT INTO `area` VALUES ('410726', '410700', ',410000,410700,410726', '3', '延津县', 'mainland', '2');
INSERT INTO `area` VALUES ('410727', '410700', ',410000,410700,410727', '3', '封丘县', 'mainland', '2');
INSERT INTO `area` VALUES ('410728', '410700', ',410000,410700,410728', '3', '长垣县', 'mainland', '2');
INSERT INTO `area` VALUES ('410781', '410700', ',410000,410700,410781', '3', '卫辉市', 'mainland', '2');
INSERT INTO `area` VALUES ('410782', '410700', ',410000,410700,410782', '3', '辉县市', 'mainland', '2');
INSERT INTO `area` VALUES ('410783', '410700', ',410000,410700,410783', '3', '其它区', 'mainland', '2');
INSERT INTO `area` VALUES ('410800', '410000', ',410000,410800', '2', '焦作市', 'mainland', '2');
INSERT INTO `area` VALUES ('410802', '410800', ',410000,410800,410802', '3', '解放区', 'mainland', '2');
INSERT INTO `area` VALUES ('410803', '410800', ',410000,410800,410803', '3', '中站区', 'mainland', '2');
INSERT INTO `area` VALUES ('410804', '410800', ',410000,410800,410804', '3', '马村区', 'mainland', '2');
INSERT INTO `area` VALUES ('410811', '410800', ',410000,410800,410811', '3', '山阳区', 'mainland', '2');
INSERT INTO `area` VALUES ('410821', '410800', ',410000,410800,410821', '3', '修武县', 'mainland', '2');
INSERT INTO `area` VALUES ('410822', '410800', ',410000,410800,410822', '3', '博爱县', 'mainland', '2');
INSERT INTO `area` VALUES ('410823', '410800', ',410000,410800,410823', '3', '武陟县', 'mainland', '2');
INSERT INTO `area` VALUES ('410825', '410800', ',410000,410800,410825', '3', '温县', 'mainland', '2');
INSERT INTO `area` VALUES ('410881', '410000', ',410000,410881', '3', '济源市', 'mainland', '2');
INSERT INTO `area` VALUES ('410882', '410800', ',410000,410800,410882', '3', '沁阳市', 'mainland', '2');
INSERT INTO `area` VALUES ('410883', '410800', ',410000,410800,410883', '3', '孟州市', 'mainland', '2');
INSERT INTO `area` VALUES ('410884', '410800', ',410000,410800,410884', '3', '其它区', 'mainland', '2');
INSERT INTO `area` VALUES ('410900', '410000', ',410000,410900', '2', '濮阳市', 'mainland', '2');
INSERT INTO `area` VALUES ('410902', '410900', ',410000,410900,410902', '3', '华龙区', 'mainland', '2');
INSERT INTO `area` VALUES ('410922', '410900', ',410000,410900,410922', '3', '清丰县', 'mainland', '2');
INSERT INTO `area` VALUES ('410923', '410900', ',410000,410900,410923', '3', '南乐县', 'mainland', '2');
INSERT INTO `area` VALUES ('410926', '410900', ',410000,410900,410926', '3', '范县', 'mainland', '2');
INSERT INTO `area` VALUES ('410927', '410900', ',410000,410900,410927', '3', '台前县', 'mainland', '2');
INSERT INTO `area` VALUES ('410928', '410900', ',410000,410900,410928', '3', '濮阳县', 'mainland', '2');
INSERT INTO `area` VALUES ('410929', '410900', ',410000,410900,410929', '3', '其它区', 'mainland', '2');
INSERT INTO `area` VALUES ('411000', '410000', ',410000,411000', '2', '许昌市', 'mainland', '2');
INSERT INTO `area` VALUES ('411002', '411000', ',410000,411000,411002', '3', '魏都区', 'mainland', '2');
INSERT INTO `area` VALUES ('411023', '411000', ',410000,411000,411023', '3', '许昌县', 'mainland', '2');
INSERT INTO `area` VALUES ('411024', '411000', ',410000,411000,411024', '3', '鄢陵县', 'mainland', '2');
INSERT INTO `area` VALUES ('411025', '411000', ',410000,411000,411025', '3', '襄城县', 'mainland', '2');
INSERT INTO `area` VALUES ('411081', '411000', ',410000,411000,411081', '3', '禹州市', 'mainland', '2');
INSERT INTO `area` VALUES ('411082', '411000', ',410000,411000,411082', '3', '长葛市', 'mainland', '2');
INSERT INTO `area` VALUES ('411083', '411000', ',410000,411000,411083', '3', '其它区', 'mainland', '2');
INSERT INTO `area` VALUES ('411100', '410000', ',410000,411100', '2', '漯河市', 'mainland', '2');
INSERT INTO `area` VALUES ('411102', '411100', ',410000,411100,411102', '3', '源汇区', 'mainland', '2');
INSERT INTO `area` VALUES ('411103', '411100', ',410000,411100,411103', '3', '郾城区', 'mainland', '2');
INSERT INTO `area` VALUES ('411104', '411100', ',410000,411100,411104', '3', '召陵区', 'mainland', '2');
INSERT INTO `area` VALUES ('411121', '411100', ',410000,411100,411121', '3', '舞阳县', 'mainland', '2');
INSERT INTO `area` VALUES ('411122', '411100', ',410000,411100,411122', '3', '临颍县', 'mainland', '2');
INSERT INTO `area` VALUES ('411123', '411100', ',410000,411100,411123', '3', '其它区', 'mainland', '2');
INSERT INTO `area` VALUES ('411200', '410000', ',410000,411200', '2', '三门峡市', 'mainland', '2');
INSERT INTO `area` VALUES ('411202', '411200', ',410000,411200,411202', '3', '湖滨区', 'mainland', '2');
INSERT INTO `area` VALUES ('411221', '411200', ',410000,411200,411221', '3', '渑池县', 'mainland', '2');
INSERT INTO `area` VALUES ('411222', '411200', ',410000,411200,411222', '3', '陕县', 'mainland', '2');
INSERT INTO `area` VALUES ('411224', '411200', ',410000,411200,411224', '3', '卢氏县', 'mainland', '2');
INSERT INTO `area` VALUES ('411281', '411200', ',410000,411200,411281', '3', '义马市', 'mainland', '2');
INSERT INTO `area` VALUES ('411282', '411200', ',410000,411200,411282', '3', '灵宝市', 'mainland', '2');
INSERT INTO `area` VALUES ('411283', '411200', ',410000,411200,411283', '3', '其它区', 'mainland', '2');
INSERT INTO `area` VALUES ('411300', '410000', ',410000,411300', '2', '南阳市', 'mainland', '2');
INSERT INTO `area` VALUES ('411302', '411300', ',410000,411300,411302', '3', '宛城区', 'mainland', '2');
INSERT INTO `area` VALUES ('411303', '411300', ',410000,411300,411303', '3', '卧龙区', 'mainland', '2');
INSERT INTO `area` VALUES ('411321', '411300', ',410000,411300,411321', '3', '南召县', 'mainland', '2');
INSERT INTO `area` VALUES ('411322', '411300', ',410000,411300,411322', '3', '方城县', 'mainland', '2');
INSERT INTO `area` VALUES ('411323', '411300', ',410000,411300,411323', '3', '西峡县', 'mainland', '2');
INSERT INTO `area` VALUES ('411324', '411300', ',410000,411300,411324', '3', '镇平县', 'mainland', '2');
INSERT INTO `area` VALUES ('411325', '411300', ',410000,411300,411325', '3', '内乡县', 'mainland', '2');
INSERT INTO `area` VALUES ('411326', '411300', ',410000,411300,411326', '3', '淅川县', 'mainland', '2');
INSERT INTO `area` VALUES ('411327', '411300', ',410000,411300,411327', '3', '社旗县', 'mainland', '2');
INSERT INTO `area` VALUES ('411328', '411300', ',410000,411300,411328', '3', '唐河县', 'mainland', '2');
INSERT INTO `area` VALUES ('411329', '411300', ',410000,411300,411329', '3', '新野县', 'mainland', '2');
INSERT INTO `area` VALUES ('411330', '411300', ',410000,411300,411330', '3', '桐柏县', 'mainland', '2');
INSERT INTO `area` VALUES ('411381', '411300', ',410000,411300,411381', '3', '邓州市', 'mainland', '2');
INSERT INTO `area` VALUES ('411382', '411300', ',410000,411300,411382', '3', '其它区', 'mainland', '2');
INSERT INTO `area` VALUES ('411400', '410000', ',410000,411400', '2', '商丘市', 'mainland', '2');
INSERT INTO `area` VALUES ('411402', '411400', ',410000,411400,411402', '3', '梁园区', 'mainland', '2');
INSERT INTO `area` VALUES ('411403', '411400', ',410000,411400,411403', '3', '睢阳区', 'mainland', '2');
INSERT INTO `area` VALUES ('411421', '411400', ',410000,411400,411421', '3', '民权县', 'mainland', '2');
INSERT INTO `area` VALUES ('411422', '411400', ',410000,411400,411422', '3', '睢县', 'mainland', '2');
INSERT INTO `area` VALUES ('411423', '411400', ',410000,411400,411423', '3', '宁陵县', 'mainland', '2');
INSERT INTO `area` VALUES ('411424', '411400', ',410000,411400,411424', '3', '柘城县', 'mainland', '2');
INSERT INTO `area` VALUES ('411425', '411400', ',410000,411400,411425', '3', '虞城县', 'mainland', '2');
INSERT INTO `area` VALUES ('411426', '411400', ',410000,411400,411426', '3', '夏邑县', 'mainland', '2');
INSERT INTO `area` VALUES ('411481', '411400', ',410000,411400,411481', '3', '永城市', 'mainland', '2');
INSERT INTO `area` VALUES ('411482', '411400', ',410000,411400,411482', '3', '其它区', 'mainland', '2');
INSERT INTO `area` VALUES ('411500', '410000', ',410000,411500', '2', '信阳市', 'mainland', '2');
INSERT INTO `area` VALUES ('411502', '411500', ',410000,411500,411502', '3', '浉河区', 'mainland', '2');
INSERT INTO `area` VALUES ('411503', '411500', ',410000,411500,411503', '3', '平桥区', 'mainland', '2');
INSERT INTO `area` VALUES ('411521', '411500', ',410000,411500,411521', '3', '罗山县', 'mainland', '2');
INSERT INTO `area` VALUES ('411522', '411500', ',410000,411500,411522', '3', '光山县', 'mainland', '2');
INSERT INTO `area` VALUES ('411523', '411500', ',410000,411500,411523', '3', '新县', 'mainland', '2');
INSERT INTO `area` VALUES ('411524', '411500', ',410000,411500,411524', '3', '商城县', 'mainland', '2');
INSERT INTO `area` VALUES ('411525', '411500', ',410000,411500,411525', '3', '固始县', 'mainland', '2');
INSERT INTO `area` VALUES ('411526', '411500', ',410000,411500,411526', '3', '潢川县', 'mainland', '2');
INSERT INTO `area` VALUES ('411527', '411500', ',410000,411500,411527', '3', '淮滨县', 'mainland', '2');
INSERT INTO `area` VALUES ('411528', '411500', ',410000,411500,411528', '3', '息县', 'mainland', '2');
INSERT INTO `area` VALUES ('411529', '411500', ',410000,411500,411529', '3', '其它区', 'mainland', '2');
INSERT INTO `area` VALUES ('411600', '410000', ',410000,411600', '2', '周口市', 'mainland', '2');
INSERT INTO `area` VALUES ('411602', '411600', ',410000,411600,411602', '3', '川汇区', 'mainland', '2');
INSERT INTO `area` VALUES ('411621', '411600', ',410000,411600,411621', '3', '扶沟县', 'mainland', '2');
INSERT INTO `area` VALUES ('411622', '411600', ',410000,411600,411622', '3', '西华县', 'mainland', '2');
INSERT INTO `area` VALUES ('411623', '411600', ',410000,411600,411623', '3', '商水县', 'mainland', '2');
INSERT INTO `area` VALUES ('411624', '411600', ',410000,411600,411624', '3', '沈丘县', 'mainland', '2');
INSERT INTO `area` VALUES ('411625', '411600', ',410000,411600,411625', '3', '郸城县', 'mainland', '2');
INSERT INTO `area` VALUES ('411626', '411600', ',410000,411600,411626', '3', '淮阳县', 'mainland', '2');
INSERT INTO `area` VALUES ('411627', '411600', ',410000,411600,411627', '3', '太康县', 'mainland', '2');
INSERT INTO `area` VALUES ('411628', '411600', ',410000,411600,411628', '3', '鹿邑县', 'mainland', '2');
INSERT INTO `area` VALUES ('411681', '411600', ',410000,411600,411681', '3', '项城市', 'mainland', '2');
INSERT INTO `area` VALUES ('411682', '411600', ',410000,411600,411682', '3', '其它区', 'mainland', '2');
INSERT INTO `area` VALUES ('411700', '410000', ',410000,411700', '2', '驻马店市', 'mainland', '2');
INSERT INTO `area` VALUES ('411702', '411700', ',410000,411700,411702', '3', '驿城区', 'mainland', '2');
INSERT INTO `area` VALUES ('411721', '411700', ',410000,411700,411721', '3', '西平县', 'mainland', '2');
INSERT INTO `area` VALUES ('411722', '411700', ',410000,411700,411722', '3', '上蔡县', 'mainland', '2');
INSERT INTO `area` VALUES ('411723', '411700', ',410000,411700,411723', '3', '平舆县', 'mainland', '2');
INSERT INTO `area` VALUES ('411724', '411700', ',410000,411700,411724', '3', '正阳县', 'mainland', '2');
INSERT INTO `area` VALUES ('411725', '411700', ',410000,411700,411725', '3', '确山县', 'mainland', '2');
INSERT INTO `area` VALUES ('411726', '411700', ',410000,411700,411726', '3', '泌阳县', 'mainland', '2');
INSERT INTO `area` VALUES ('411727', '411700', ',410000,411700,411727', '3', '汝南县', 'mainland', '2');
INSERT INTO `area` VALUES ('411728', '411700', ',410000,411700,411728', '3', '遂平县', 'mainland', '2');
INSERT INTO `area` VALUES ('411729', '411700', ',410000,411700,411729', '3', '新蔡县', 'mainland', '2');
INSERT INTO `area` VALUES ('411730', '411700', ',410000,411700,411730', '3', '其它区', 'mainland', '2');
INSERT INTO `area` VALUES ('420000', '100000', ',420000', '1', '湖北省', 'mainland', '2');
INSERT INTO `area` VALUES ('420100', '420000', ',420000,420100', '2', '武汉市', 'mainland', '2');
INSERT INTO `area` VALUES ('420102', '420100', ',420000,420100,420102', '3', '江岸区', 'mainland', '2');
INSERT INTO `area` VALUES ('420103', '420100', ',420000,420100,420103', '3', '江汉区', 'mainland', '2');
INSERT INTO `area` VALUES ('420104', '420100', ',420000,420100,420104', '3', '硚口区', 'mainland', '2');
INSERT INTO `area` VALUES ('420105', '420100', ',420000,420100,420105', '3', '汉阳区', 'mainland', '2');
INSERT INTO `area` VALUES ('420106', '420100', ',420000,420100,420106', '3', '武昌区', 'mainland', '2');
INSERT INTO `area` VALUES ('420107', '420100', ',420000,420100,420107', '3', '青山区', 'mainland', '2');
INSERT INTO `area` VALUES ('420111', '420100', ',420000,420100,420111', '3', '洪山区', 'mainland', '2');
INSERT INTO `area` VALUES ('420112', '420100', ',420000,420100,420112', '3', '东西湖区', 'mainland', '2');
INSERT INTO `area` VALUES ('420113', '420100', ',420000,420100,420113', '3', '汉南区', 'mainland', '2');
INSERT INTO `area` VALUES ('420114', '420100', ',420000,420100,420114', '3', '蔡甸区', 'mainland', '2');
INSERT INTO `area` VALUES ('420115', '420100', ',420000,420100,420115', '3', '江夏区', 'mainland', '2');
INSERT INTO `area` VALUES ('420116', '420100', ',420000,420100,420116', '3', '黄陂区', 'mainland', '2');
INSERT INTO `area` VALUES ('420117', '420100', ',420000,420100,420117', '3', '新洲区', 'mainland', '2');
INSERT INTO `area` VALUES ('420118', '420100', ',420000,420100,420118', '3', '其它区', 'mainland', '2');
INSERT INTO `area` VALUES ('420200', '420000', ',420000,420200', '2', '黄石市', 'mainland', '2');
INSERT INTO `area` VALUES ('420202', '420200', ',420000,420200,420202', '3', '黄石港区', 'mainland', '2');
INSERT INTO `area` VALUES ('420203', '420200', ',420000,420200,420203', '3', '西塞山区', 'mainland', '2');
INSERT INTO `area` VALUES ('420204', '420200', ',420000,420200,420204', '3', '下陆区', 'mainland', '2');
INSERT INTO `area` VALUES ('420205', '420200', ',420000,420200,420205', '3', '铁山区', 'mainland', '2');
INSERT INTO `area` VALUES ('420222', '420200', ',420000,420200,420222', '3', '阳新县', 'mainland', '2');
INSERT INTO `area` VALUES ('420281', '420200', ',420000,420200,420281', '3', '大冶市', 'mainland', '2');
INSERT INTO `area` VALUES ('420282', '420200', ',420000,420200,420282', '3', '其它区', 'mainland', '2');
INSERT INTO `area` VALUES ('420300', '420000', ',420000,420300', '2', '十堰市', 'mainland', '2');
INSERT INTO `area` VALUES ('420302', '420300', ',420000,420300,420302', '3', '茅箭区', 'mainland', '2');
INSERT INTO `area` VALUES ('420303', '420300', ',420000,420300,420303', '3', '张湾区', 'mainland', '2');
INSERT INTO `area` VALUES ('420321', '420300', ',420000,420300,420321', '3', '郧县', 'mainland', '2');
INSERT INTO `area` VALUES ('420322', '420300', ',420000,420300,420322', '3', '郧西县', 'mainland', '2');
INSERT INTO `area` VALUES ('420323', '420300', ',420000,420300,420323', '3', '竹山县', 'mainland', '2');
INSERT INTO `area` VALUES ('420324', '420300', ',420000,420300,420324', '3', '竹溪县', 'mainland', '2');
INSERT INTO `area` VALUES ('420325', '420300', ',420000,420300,420325', '3', '房县', 'mainland', '2');
INSERT INTO `area` VALUES ('420381', '420300', ',420000,420300,420381', '3', '丹江口市', 'mainland', '2');
INSERT INTO `area` VALUES ('420382', '420300', ',420000,420300,420382', '3', '城区', 'mainland', '2');
INSERT INTO `area` VALUES ('420383', '420300', ',420000,420300,420383', '3', '其它区', 'mainland', '2');
INSERT INTO `area` VALUES ('420500', '420000', ',420000,420500', '2', '宜昌市', 'mainland', '2');
INSERT INTO `area` VALUES ('420502', '420500', ',420000,420500,420502', '3', '西陵区', 'mainland', '2');
INSERT INTO `area` VALUES ('420503', '420500', ',420000,420500,420503', '3', '伍家岗区', 'mainland', '2');
INSERT INTO `area` VALUES ('420504', '420500', ',420000,420500,420504', '3', '点军区', 'mainland', '2');
INSERT INTO `area` VALUES ('420505', '420500', ',420000,420500,420505', '3', '猇亭区', 'mainland', '2');
INSERT INTO `area` VALUES ('420506', '420500', ',420000,420500,420506', '3', '夷陵区', 'mainland', '2');
INSERT INTO `area` VALUES ('420525', '420500', ',420000,420500,420525', '3', '远安县', 'mainland', '2');
INSERT INTO `area` VALUES ('420526', '420500', ',420000,420500,420526', '3', '兴山县', 'mainland', '2');
INSERT INTO `area` VALUES ('420527', '420500', ',420000,420500,420527', '3', '秭归县', 'mainland', '2');
INSERT INTO `area` VALUES ('420528', '420500', ',420000,420500,420528', '3', '长阳土家族自治县', 'mainland', '2');
INSERT INTO `area` VALUES ('420529', '420500', ',420000,420500,420529', '3', '五峰土家族自治县', 'mainland', '2');
INSERT INTO `area` VALUES ('420551', '420500', ',420000,420500,420551', '3', '葛洲坝区', 'mainland', '2');
INSERT INTO `area` VALUES ('420552', '420500', ',420000,420500,420552', '3', '开发区', 'mainland', '2');
INSERT INTO `area` VALUES ('420581', '420500', ',420000,420500,420581', '3', '宜都市', 'mainland', '2');
INSERT INTO `area` VALUES ('420582', '420500', ',420000,420500,420582', '3', '当阳市', 'mainland', '2');
INSERT INTO `area` VALUES ('420583', '420500', ',420000,420500,420583', '3', '枝江市', 'mainland', '2');
INSERT INTO `area` VALUES ('420584', '420500', ',420000,420500,420584', '3', '其它区', 'mainland', '2');
INSERT INTO `area` VALUES ('420600', '420000', ',420000,420600', '2', '襄樊市', 'mainland', '2');
INSERT INTO `area` VALUES ('420602', '420600', ',420000,420600,420602', '3', '襄城区', 'mainland', '2');
INSERT INTO `area` VALUES ('420606', '420600', ',420000,420600,420606', '3', '樊城区', 'mainland', '2');
INSERT INTO `area` VALUES ('420607', '420600', ',420000,420600,420607', '3', '襄阳区', 'mainland', '2');
INSERT INTO `area` VALUES ('420624', '420600', ',420000,420600,420624', '3', '南漳县', 'mainland', '2');
INSERT INTO `area` VALUES ('420625', '420600', ',420000,420600,420625', '3', '谷城县', 'mainland', '2');
INSERT INTO `area` VALUES ('420626', '420600', ',420000,420600,420626', '3', '保康县', 'mainland', '2');
INSERT INTO `area` VALUES ('420682', '420600', ',420000,420600,420682', '3', '老河口市', 'mainland', '2');
INSERT INTO `area` VALUES ('420683', '420600', ',420000,420600,420683', '3', '枣阳市', 'mainland', '2');
INSERT INTO `area` VALUES ('420684', '420600', ',420000,420600,420684', '3', '宜城市', 'mainland', '2');
INSERT INTO `area` VALUES ('420685', '420600', ',420000,420600,420685', '3', '其它区', 'mainland', '2');
INSERT INTO `area` VALUES ('420700', '420000', ',420000,420700', '2', '鄂州市', 'mainland', '2');
INSERT INTO `area` VALUES ('420702', '420700', ',420000,420700,420702', '3', '梁子湖区', 'mainland', '2');
INSERT INTO `area` VALUES ('420703', '420700', ',420000,420700,420703', '3', '华容区', 'mainland', '2');
INSERT INTO `area` VALUES ('420704', '420700', ',420000,420700,420704', '3', '鄂城区', 'mainland', '2');
INSERT INTO `area` VALUES ('420705', '420700', ',420000,420700,420705', '3', '其它区', 'mainland', '2');
INSERT INTO `area` VALUES ('420800', '420000', ',420000,420800', '2', '荆门市', 'mainland', '2');
INSERT INTO `area` VALUES ('420802', '420800', ',420000,420800,420802', '3', '东宝区', 'mainland', '2');
INSERT INTO `area` VALUES ('420804', '420800', ',420000,420800,420804', '3', '掇刀区', 'mainland', '2');
INSERT INTO `area` VALUES ('420821', '420800', ',420000,420800,420821', '3', '京山县', 'mainland', '2');
INSERT INTO `area` VALUES ('420822', '420800', ',420000,420800,420822', '3', '沙洋县', 'mainland', '2');
INSERT INTO `area` VALUES ('420881', '420800', ',420000,420800,420881', '3', '钟祥市', 'mainland', '2');
INSERT INTO `area` VALUES ('420882', '420800', ',420000,420800,420882', '3', '其它区', 'mainland', '2');
INSERT INTO `area` VALUES ('420900', '420000', ',420000,420900', '2', '孝感市', 'mainland', '2');
INSERT INTO `area` VALUES ('420902', '420900', ',420000,420900,420902', '3', '孝南区', 'mainland', '2');
INSERT INTO `area` VALUES ('420921', '420900', ',420000,420900,420921', '3', '孝昌县', 'mainland', '2');
INSERT INTO `area` VALUES ('420922', '420900', ',420000,420900,420922', '3', '大悟县', 'mainland', '2');
INSERT INTO `area` VALUES ('420923', '420900', ',420000,420900,420923', '3', '云梦县', 'mainland', '2');
INSERT INTO `area` VALUES ('420981', '420900', ',420000,420900,420981', '3', '应城市', 'mainland', '2');
INSERT INTO `area` VALUES ('420982', '420900', ',420000,420900,420982', '3', '安陆市', 'mainland', '2');
INSERT INTO `area` VALUES ('420984', '420900', ',420000,420900,420984', '3', '汉川市', 'mainland', '2');
INSERT INTO `area` VALUES ('420985', '420900', ',420000,420900,420985', '3', '其它区', 'mainland', '2');
INSERT INTO `area` VALUES ('421000', '420000', ',420000,421000', '2', '荆州市', 'mainland', '2');
INSERT INTO `area` VALUES ('421002', '421000', ',420000,421000,421002', '3', '沙市区', 'mainland', '2');
INSERT INTO `area` VALUES ('421003', '421000', ',420000,421000,421003', '3', '荆州区', 'mainland', '2');
INSERT INTO `area` VALUES ('421022', '421000', ',420000,421000,421022', '3', '公安县', 'mainland', '2');
INSERT INTO `area` VALUES ('421023', '421000', ',420000,421000,421023', '3', '监利县', 'mainland', '2');
INSERT INTO `area` VALUES ('421024', '421000', ',420000,421000,421024', '3', '江陵县', 'mainland', '2');
INSERT INTO `area` VALUES ('421081', '421000', ',420000,421000,421081', '3', '石首市', 'mainland', '2');
INSERT INTO `area` VALUES ('421083', '421000', ',420000,421000,421083', '3', '洪湖市', 'mainland', '2');
INSERT INTO `area` VALUES ('421087', '421000', ',420000,421000,421087', '3', '松滋市', 'mainland', '2');
INSERT INTO `area` VALUES ('421088', '421000', ',420000,421000,421088', '3', '其它区', 'mainland', '2');
INSERT INTO `area` VALUES ('421100', '420000', ',420000,421100', '2', '黄冈市', 'mainland', '2');
INSERT INTO `area` VALUES ('421102', '421100', ',420000,421100,421102', '3', '黄州区', 'mainland', '2');
INSERT INTO `area` VALUES ('421121', '421100', ',420000,421100,421121', '3', '团风县', 'mainland', '2');
INSERT INTO `area` VALUES ('421122', '421100', ',420000,421100,421122', '3', '红安县', 'mainland', '2');
INSERT INTO `area` VALUES ('421123', '421100', ',420000,421100,421123', '3', '罗田县', 'mainland', '2');
INSERT INTO `area` VALUES ('421124', '421100', ',420000,421100,421124', '3', '英山县', 'mainland', '2');
INSERT INTO `area` VALUES ('421125', '421100', ',420000,421100,421125', '3', '浠水县', 'mainland', '2');
INSERT INTO `area` VALUES ('421126', '421100', ',420000,421100,421126', '3', '蕲春县', 'mainland', '2');
INSERT INTO `area` VALUES ('421127', '421100', ',420000,421100,421127', '3', '黄梅县', 'mainland', '2');
INSERT INTO `area` VALUES ('421181', '421100', ',420000,421100,421181', '3', '麻城市', 'mainland', '2');
INSERT INTO `area` VALUES ('421182', '421100', ',420000,421100,421182', '3', '武穴市', 'mainland', '2');
INSERT INTO `area` VALUES ('421183', '421100', ',420000,421100,421183', '3', '其它区', 'mainland', '2');
INSERT INTO `area` VALUES ('421200', '420000', ',420000,421200', '2', '咸宁市', 'mainland', '2');
INSERT INTO `area` VALUES ('421202', '421200', ',420000,421200,421202', '3', '咸安区', 'mainland', '2');
INSERT INTO `area` VALUES ('421221', '421200', ',420000,421200,421221', '3', '嘉鱼县', 'mainland', '2');
INSERT INTO `area` VALUES ('421222', '421200', ',420000,421200,421222', '3', '通城县', 'mainland', '2');
INSERT INTO `area` VALUES ('421223', '421200', ',420000,421200,421223', '3', '崇阳县', 'mainland', '2');
INSERT INTO `area` VALUES ('421224', '421200', ',420000,421200,421224', '3', '通山县', 'mainland', '2');
INSERT INTO `area` VALUES ('421281', '421200', ',420000,421200,421281', '3', '赤壁市', 'mainland', '2');
INSERT INTO `area` VALUES ('421282', '421200', ',420000,421200,421282', '3', '温泉城区', 'mainland', '2');
INSERT INTO `area` VALUES ('421283', '421200', ',420000,421200,421283', '3', '其它区', 'mainland', '2');
INSERT INTO `area` VALUES ('421300', '420000', ',420000,421300', '2', '随州市', 'mainland', '2');
INSERT INTO `area` VALUES ('421302', '421300', ',420000,421300,421302', '3', '曾都区', 'mainland', '2');
INSERT INTO `area` VALUES ('421381', '421300', ',420000,421300,421381', '3', '广水市', 'mainland', '2');
INSERT INTO `area` VALUES ('421382', '421300', ',420000,421300,421382', '3', '其它区', 'mainland', '2');
INSERT INTO `area` VALUES ('422800', '420000', ',420000,422800', '2', '恩施土家族苗族自治州', 'mainland', '2');
INSERT INTO `area` VALUES ('422801', '422800', ',420000,422800,422801', '3', '恩施市', 'mainland', '2');
INSERT INTO `area` VALUES ('422802', '422800', ',420000,422800,422802', '3', '利川市', 'mainland', '2');
INSERT INTO `area` VALUES ('422822', '422800', ',420000,422800,422822', '3', '建始县', 'mainland', '2');
INSERT INTO `area` VALUES ('422823', '422800', ',420000,422800,422823', '3', '巴东县', 'mainland', '2');
INSERT INTO `area` VALUES ('422825', '422800', ',420000,422800,422825', '3', '宣恩县', 'mainland', '2');
INSERT INTO `area` VALUES ('422826', '422800', ',420000,422800,422826', '3', '咸丰县', 'mainland', '2');
INSERT INTO `area` VALUES ('422827', '422800', ',420000,422800,422827', '3', '来凤县', 'mainland', '2');
INSERT INTO `area` VALUES ('422828', '422800', ',420000,422800,422828', '3', '鹤峰县', 'mainland', '2');
INSERT INTO `area` VALUES ('422829', '422800', ',420000,422800,422829', '3', '其它区', 'mainland', '2');
INSERT INTO `area` VALUES ('429004', '420000', ',420000,429004', '3', '仙桃市', 'mainland', '2');
INSERT INTO `area` VALUES ('429005', '420000', ',420000,429005', '3', '潜江市', 'mainland', '2');
INSERT INTO `area` VALUES ('429006', '420000', ',420000,429006', '3', '天门市', 'mainland', '2');
INSERT INTO `area` VALUES ('429021', '420000', ',420000,429021', '3', '神农架林区', 'mainland', '2');
INSERT INTO `area` VALUES ('430000', '100000', ',430000', '1', '湖南省', 'mainland', '2');
INSERT INTO `area` VALUES ('430100', '430000', ',430000,430100', '2', '长沙市', 'mainland', '2');
INSERT INTO `area` VALUES ('430102', '430100', ',430000,430100,430102', '3', '芙蓉区', 'mainland', '2');
INSERT INTO `area` VALUES ('430103', '430100', ',430000,430100,430103', '3', '天心区', 'mainland', '2');
INSERT INTO `area` VALUES ('430104', '430100', ',430000,430100,430104', '3', '岳麓区', 'mainland', '2');
INSERT INTO `area` VALUES ('430105', '430100', ',430000,430100,430105', '3', '开福区', 'mainland', '2');
INSERT INTO `area` VALUES ('430111', '430100', ',430000,430100,430111', '3', '雨花区', 'mainland', '2');
INSERT INTO `area` VALUES ('430121', '430100', ',430000,430100,430121', '3', '长沙县', 'mainland', '2');
INSERT INTO `area` VALUES ('430122', '430100', ',430000,430100,430122', '3', '望城县', 'mainland', '2');
INSERT INTO `area` VALUES ('430124', '430100', ',430000,430100,430124', '3', '宁乡县', 'mainland', '2');
INSERT INTO `area` VALUES ('430181', '430100', ',430000,430100,430181', '3', '浏阳市', 'mainland', '2');
INSERT INTO `area` VALUES ('430182', '430100', ',430000,430100,430182', '3', '其它区', 'mainland', '2');
INSERT INTO `area` VALUES ('430200', '430000', ',430000,430200', '2', '株洲市', 'mainland', '2');
INSERT INTO `area` VALUES ('430202', '430200', ',430000,430200,430202', '3', '荷塘区', 'mainland', '2');
INSERT INTO `area` VALUES ('430203', '430200', ',430000,430200,430203', '3', '芦淞区', 'mainland', '2');
INSERT INTO `area` VALUES ('430204', '430200', ',430000,430200,430204', '3', '石峰区', 'mainland', '2');
INSERT INTO `area` VALUES ('430211', '430200', ',430000,430200,430211', '3', '天元区', 'mainland', '2');
INSERT INTO `area` VALUES ('430221', '430200', ',430000,430200,430221', '3', '株洲县', 'mainland', '2');
INSERT INTO `area` VALUES ('430223', '430200', ',430000,430200,430223', '3', '攸县', 'mainland', '2');
INSERT INTO `area` VALUES ('430224', '430200', ',430000,430200,430224', '3', '茶陵县', 'mainland', '2');
INSERT INTO `area` VALUES ('430225', '430200', ',430000,430200,430225', '3', '炎陵县', 'mainland', '2');
INSERT INTO `area` VALUES ('430281', '430200', ',430000,430200,430281', '3', '醴陵市', 'mainland', '2');
INSERT INTO `area` VALUES ('430282', '430200', ',430000,430200,430282', '3', '其它区', 'mainland', '2');
INSERT INTO `area` VALUES ('430300', '430000', ',430000,430300', '2', '湘潭市', 'mainland', '2');
INSERT INTO `area` VALUES ('430302', '430300', ',430000,430300,430302', '3', '雨湖区', 'mainland', '2');
INSERT INTO `area` VALUES ('430304', '430300', ',430000,430300,430304', '3', '岳塘区', 'mainland', '2');
INSERT INTO `area` VALUES ('430321', '430300', ',430000,430300,430321', '3', '湘潭县', 'mainland', '2');
INSERT INTO `area` VALUES ('430381', '430300', ',430000,430300,430381', '3', '湘乡市', 'mainland', '2');
INSERT INTO `area` VALUES ('430382', '430300', ',430000,430300,430382', '3', '韶山市', 'mainland', '2');
INSERT INTO `area` VALUES ('430383', '430300', ',430000,430300,430383', '3', '其它区', 'mainland', '2');
INSERT INTO `area` VALUES ('430400', '430000', ',430000,430400', '2', '衡阳市', 'mainland', '2');
INSERT INTO `area` VALUES ('430405', '430400', ',430000,430400,430405', '3', '珠晖区', 'mainland', '2');
INSERT INTO `area` VALUES ('430406', '430400', ',430000,430400,430406', '3', '雁峰区', 'mainland', '2');
INSERT INTO `area` VALUES ('430407', '430400', ',430000,430400,430407', '3', '石鼓区', 'mainland', '2');
INSERT INTO `area` VALUES ('430408', '430400', ',430000,430400,430408', '3', '蒸湘区', 'mainland', '2');
INSERT INTO `area` VALUES ('430412', '430400', ',430000,430400,430412', '3', '南岳区', 'mainland', '2');
INSERT INTO `area` VALUES ('430421', '430400', ',430000,430400,430421', '3', '衡阳县', 'mainland', '2');
INSERT INTO `area` VALUES ('430422', '430400', ',430000,430400,430422', '3', '衡南县', 'mainland', '2');
INSERT INTO `area` VALUES ('430423', '430400', ',430000,430400,430423', '3', '衡山县', 'mainland', '2');
INSERT INTO `area` VALUES ('430424', '430400', ',430000,430400,430424', '3', '衡东县', 'mainland', '2');
INSERT INTO `area` VALUES ('430426', '430400', ',430000,430400,430426', '3', '祁东县', 'mainland', '2');
INSERT INTO `area` VALUES ('430481', '430400', ',430000,430400,430481', '3', '耒阳市', 'mainland', '2');
INSERT INTO `area` VALUES ('430482', '430400', ',430000,430400,430482', '3', '常宁市', 'mainland', '2');
INSERT INTO `area` VALUES ('430483', '430400', ',430000,430400,430483', '3', '其它区', 'mainland', '2');
INSERT INTO `area` VALUES ('430500', '430000', ',430000,430500', '2', '邵阳市', 'mainland', '2');
INSERT INTO `area` VALUES ('430502', '430500', ',430000,430500,430502', '3', '双清区', 'mainland', '2');
INSERT INTO `area` VALUES ('430503', '430500', ',430000,430500,430503', '3', '大祥区', 'mainland', '2');
INSERT INTO `area` VALUES ('430511', '430500', ',430000,430500,430511', '3', '北塔区', 'mainland', '2');
INSERT INTO `area` VALUES ('430521', '430500', ',430000,430500,430521', '3', '邵东县', 'mainland', '2');
INSERT INTO `area` VALUES ('430522', '430500', ',430000,430500,430522', '3', '新邵县', 'mainland', '2');
INSERT INTO `area` VALUES ('430523', '430500', ',430000,430500,430523', '3', '邵阳县', 'mainland', '2');
INSERT INTO `area` VALUES ('430524', '430500', ',430000,430500,430524', '3', '隆回县', 'mainland', '2');
INSERT INTO `area` VALUES ('430525', '430500', ',430000,430500,430525', '3', '洞口县', 'mainland', '2');
INSERT INTO `area` VALUES ('430527', '430500', ',430000,430500,430527', '3', '绥宁县', 'mainland', '2');
INSERT INTO `area` VALUES ('430528', '430500', ',430000,430500,430528', '3', '新宁县', 'mainland', '2');
INSERT INTO `area` VALUES ('430529', '430500', ',430000,430500,430529', '3', '城步苗族自治县', 'mainland', '2');
INSERT INTO `area` VALUES ('430581', '430500', ',430000,430500,430581', '3', '武冈市', 'mainland', '2');
INSERT INTO `area` VALUES ('430582', '430500', ',430000,430500,430582', '3', '其它区', 'mainland', '2');
INSERT INTO `area` VALUES ('430600', '430000', ',430000,430600', '2', '岳阳市', 'mainland', '2');
INSERT INTO `area` VALUES ('430602', '430600', ',430000,430600,430602', '3', '岳阳楼区', 'mainland', '2');
INSERT INTO `area` VALUES ('430603', '430600', ',430000,430600,430603', '3', '云溪区', 'mainland', '2');
INSERT INTO `area` VALUES ('430611', '430600', ',430000,430600,430611', '3', '君山区', 'mainland', '2');
INSERT INTO `area` VALUES ('430621', '430600', ',430000,430600,430621', '3', '岳阳县', 'mainland', '2');
INSERT INTO `area` VALUES ('430623', '430600', ',430000,430600,430623', '3', '华容县', 'mainland', '2');
INSERT INTO `area` VALUES ('430624', '430600', ',430000,430600,430624', '3', '湘阴县', 'mainland', '2');
INSERT INTO `area` VALUES ('430626', '430600', ',430000,430600,430626', '3', '平江县', 'mainland', '2');
INSERT INTO `area` VALUES ('430681', '430600', ',430000,430600,430681', '3', '汨罗市', 'mainland', '2');
INSERT INTO `area` VALUES ('430682', '430600', ',430000,430600,430682', '3', '临湘市', 'mainland', '2');
INSERT INTO `area` VALUES ('430683', '430600', ',430000,430600,430683', '3', '其它区', 'mainland', '2');
INSERT INTO `area` VALUES ('430700', '430000', ',430000,430700', '2', '常德市', 'mainland', '2');
INSERT INTO `area` VALUES ('430702', '430700', ',430000,430700,430702', '3', '武陵区', 'mainland', '2');
INSERT INTO `area` VALUES ('430703', '430700', ',430000,430700,430703', '3', '鼎城区', 'mainland', '2');
INSERT INTO `area` VALUES ('430721', '430700', ',430000,430700,430721', '3', '安乡县', 'mainland', '2');
INSERT INTO `area` VALUES ('430722', '430700', ',430000,430700,430722', '3', '汉寿县', 'mainland', '2');
INSERT INTO `area` VALUES ('430723', '430700', ',430000,430700,430723', '3', '澧县', 'mainland', '2');
INSERT INTO `area` VALUES ('430724', '430700', ',430000,430700,430724', '3', '临澧县', 'mainland', '2');
INSERT INTO `area` VALUES ('430725', '430700', ',430000,430700,430725', '3', '桃源县', 'mainland', '2');
INSERT INTO `area` VALUES ('430726', '430700', ',430000,430700,430726', '3', '石门县', 'mainland', '2');
INSERT INTO `area` VALUES ('430781', '430700', ',430000,430700,430781', '3', '津市市', 'mainland', '2');
INSERT INTO `area` VALUES ('430782', '430700', ',430000,430700,430782', '3', '其它区', 'mainland', '2');
INSERT INTO `area` VALUES ('430800', '430000', ',430000,430800', '2', '张家界市', 'mainland', '2');
INSERT INTO `area` VALUES ('430802', '430800', ',430000,430800,430802', '3', '永定区', 'mainland', '2');
INSERT INTO `area` VALUES ('430811', '430800', ',430000,430800,430811', '3', '武陵源区', 'mainland', '2');
INSERT INTO `area` VALUES ('430821', '430800', ',430000,430800,430821', '3', '慈利县', 'mainland', '2');
INSERT INTO `area` VALUES ('430822', '430800', ',430000,430800,430822', '3', '桑植县', 'mainland', '2');
INSERT INTO `area` VALUES ('430823', '430800', ',430000,430800,430823', '3', '其它区', 'mainland', '2');
INSERT INTO `area` VALUES ('430900', '430000', ',430000,430900', '2', '益阳市', 'mainland', '2');
INSERT INTO `area` VALUES ('430902', '430900', ',430000,430900,430902', '3', '资阳区', 'mainland', '2');
INSERT INTO `area` VALUES ('430903', '430900', ',430000,430900,430903', '3', '赫山区', 'mainland', '2');
INSERT INTO `area` VALUES ('430921', '430900', ',430000,430900,430921', '3', '南县', 'mainland', '2');
INSERT INTO `area` VALUES ('430922', '430900', ',430000,430900,430922', '3', '桃江县', 'mainland', '2');
INSERT INTO `area` VALUES ('430923', '430900', ',430000,430900,430923', '3', '安化县', 'mainland', '2');
INSERT INTO `area` VALUES ('430981', '430900', ',430000,430900,430981', '3', '沅江市', 'mainland', '2');
INSERT INTO `area` VALUES ('430982', '430900', ',430000,430900,430982', '3', '其它区', 'mainland', '2');
INSERT INTO `area` VALUES ('431000', '430000', ',430000,431000', '2', '郴州市', 'mainland', '2');
INSERT INTO `area` VALUES ('431002', '431000', ',430000,431000,431002', '3', '北湖区', 'mainland', '2');
INSERT INTO `area` VALUES ('431003', '431000', ',430000,431000,431003', '3', '苏仙区', 'mainland', '2');
INSERT INTO `area` VALUES ('431021', '431000', ',430000,431000,431021', '3', '桂阳县', 'mainland', '2');
INSERT INTO `area` VALUES ('431022', '431000', ',430000,431000,431022', '3', '宜章县', 'mainland', '2');
INSERT INTO `area` VALUES ('431023', '431000', ',430000,431000,431023', '3', '永兴县', 'mainland', '2');
INSERT INTO `area` VALUES ('431024', '431000', ',430000,431000,431024', '3', '嘉禾县', 'mainland', '2');
INSERT INTO `area` VALUES ('431025', '431000', ',430000,431000,431025', '3', '临武县', 'mainland', '2');
INSERT INTO `area` VALUES ('431026', '431000', ',430000,431000,431026', '3', '汝城县', 'mainland', '2');
INSERT INTO `area` VALUES ('431027', '431000', ',430000,431000,431027', '3', '桂东县', 'mainland', '2');
INSERT INTO `area` VALUES ('431028', '431000', ',430000,431000,431028', '3', '安仁县', 'mainland', '2');
INSERT INTO `area` VALUES ('431081', '431000', ',430000,431000,431081', '3', '资兴市', 'mainland', '2');
INSERT INTO `area` VALUES ('431082', '431000', ',430000,431000,431082', '3', '其它区', 'mainland', '2');
INSERT INTO `area` VALUES ('431100', '430000', ',430000,431100', '2', '永州市', 'mainland', '2');
INSERT INTO `area` VALUES ('431102', '431100', ',430000,431100,431102', '3', '零陵区', 'mainland', '2');
INSERT INTO `area` VALUES ('431103', '431100', ',430000,431100,431103', '3', '冷水滩区', 'mainland', '2');
INSERT INTO `area` VALUES ('431121', '431100', ',430000,431100,431121', '3', '祁阳县', 'mainland', '2');
INSERT INTO `area` VALUES ('431122', '431100', ',430000,431100,431122', '3', '东安县', 'mainland', '2');
INSERT INTO `area` VALUES ('431123', '431100', ',430000,431100,431123', '3', '双牌县', 'mainland', '2');
INSERT INTO `area` VALUES ('431124', '431100', ',430000,431100,431124', '3', '道县', 'mainland', '2');
INSERT INTO `area` VALUES ('431125', '431100', ',430000,431100,431125', '3', '江永县', 'mainland', '2');
INSERT INTO `area` VALUES ('431126', '431100', ',430000,431100,431126', '3', '宁远县', 'mainland', '2');
INSERT INTO `area` VALUES ('431127', '431100', ',430000,431100,431127', '3', '蓝山县', 'mainland', '2');
INSERT INTO `area` VALUES ('431128', '431100', ',430000,431100,431128', '3', '新田县', 'mainland', '2');
INSERT INTO `area` VALUES ('431129', '431100', ',430000,431100,431129', '3', '江华瑶族自治县', 'mainland', '2');
INSERT INTO `area` VALUES ('431130', '431100', ',430000,431100,431130', '3', '其它区', 'mainland', '2');
INSERT INTO `area` VALUES ('431200', '430000', ',430000,431200', '2', '怀化市', 'mainland', '2');
INSERT INTO `area` VALUES ('431202', '431200', ',430000,431200,431202', '3', '鹤城区', 'mainland', '2');
INSERT INTO `area` VALUES ('431221', '431200', ',430000,431200,431221', '3', '中方县', 'mainland', '2');
INSERT INTO `area` VALUES ('431222', '431200', ',430000,431200,431222', '3', '沅陵县', 'mainland', '2');
INSERT INTO `area` VALUES ('431223', '431200', ',430000,431200,431223', '3', '辰溪县', 'mainland', '2');
INSERT INTO `area` VALUES ('431224', '431200', ',430000,431200,431224', '3', '溆浦县', 'mainland', '2');
INSERT INTO `area` VALUES ('431225', '431200', ',430000,431200,431225', '3', '会同县', 'mainland', '2');
INSERT INTO `area` VALUES ('431226', '431200', ',430000,431200,431226', '3', '麻阳苗族自治县', 'mainland', '2');
INSERT INTO `area` VALUES ('431227', '431200', ',430000,431200,431227', '3', '新晃侗族自治县', 'mainland', '2');
INSERT INTO `area` VALUES ('431228', '431200', ',430000,431200,431228', '3', '芷江侗族自治县', 'mainland', '2');
INSERT INTO `area` VALUES ('431229', '431200', ',430000,431200,431229', '3', '靖州苗族侗族自治县', 'mainland', '2');
INSERT INTO `area` VALUES ('431230', '431200', ',430000,431200,431230', '3', '通道侗族自治县', 'mainland', '2');
INSERT INTO `area` VALUES ('431281', '431200', ',430000,431200,431281', '3', '洪江市', 'mainland', '2');
INSERT INTO `area` VALUES ('431282', '431200', ',430000,431200,431282', '3', '其它区', 'mainland', '2');
INSERT INTO `area` VALUES ('431300', '430000', ',430000,431300', '2', '娄底市', 'mainland', '2');
INSERT INTO `area` VALUES ('431302', '431300', ',430000,431300,431302', '3', '娄星区', 'mainland', '2');
INSERT INTO `area` VALUES ('431321', '431300', ',430000,431300,431321', '3', '双峰县', 'mainland', '2');
INSERT INTO `area` VALUES ('431322', '431300', ',430000,431300,431322', '3', '新化县', 'mainland', '2');
INSERT INTO `area` VALUES ('431381', '431300', ',430000,431300,431381', '3', '冷水江市', 'mainland', '2');
INSERT INTO `area` VALUES ('431382', '431300', ',430000,431300,431382', '3', '涟源市', 'mainland', '2');
INSERT INTO `area` VALUES ('431383', '431300', ',430000,431300,431383', '3', '其它区', 'mainland', '2');
INSERT INTO `area` VALUES ('433100', '430000', ',430000,433100', '2', '湘西土家族苗族自治州', 'mainland', '2');
INSERT INTO `area` VALUES ('433101', '433100', ',430000,433100,433101', '3', '吉首市', 'mainland', '2');
INSERT INTO `area` VALUES ('433122', '433100', ',430000,433100,433122', '3', '泸溪县', 'mainland', '2');
INSERT INTO `area` VALUES ('433123', '433100', ',430000,433100,433123', '3', '凤凰县', 'mainland', '2');
INSERT INTO `area` VALUES ('433124', '433100', ',430000,433100,433124', '3', '花垣县', 'mainland', '2');
INSERT INTO `area` VALUES ('433125', '433100', ',430000,433100,433125', '3', '保靖县', 'mainland', '2');
INSERT INTO `area` VALUES ('433126', '433100', ',430000,433100,433126', '3', '古丈县', 'mainland', '2');
INSERT INTO `area` VALUES ('433127', '433100', ',430000,433100,433127', '3', '永顺县', 'mainland', '2');
INSERT INTO `area` VALUES ('433130', '433100', ',430000,433100,433130', '3', '龙山县', 'mainland', '2');
INSERT INTO `area` VALUES ('433131', '433100', ',430000,433100,433131', '3', '其它区', 'mainland', '2');
INSERT INTO `area` VALUES ('440000', '100000', ',440000', '1', '广东省', 'mainland', '4');
INSERT INTO `area` VALUES ('440100', '440000', ',440000,440100', '2', '广州市', 'mainland', '4');
INSERT INTO `area` VALUES ('440103', '440100', ',440000,440100,440103', '3', '荔湾区', 'mainland', '4');
INSERT INTO `area` VALUES ('440104', '440100', ',440000,440100,440104', '3', '越秀区', 'mainland', '4');
INSERT INTO `area` VALUES ('440105', '440100', ',440000,440100,440105', '3', '海珠区', 'mainland', '4');
INSERT INTO `area` VALUES ('440106', '440100', ',440000,440100,440106', '3', '天河区', 'mainland', '4');
INSERT INTO `area` VALUES ('440111', '440100', ',440000,440100,440111', '3', '白云区', 'mainland', '4');
INSERT INTO `area` VALUES ('440112', '440100', ',440000,440100,440112', '3', '黄埔区', 'mainland', '4');
INSERT INTO `area` VALUES ('440113', '440100', ',440000,440100,440113', '3', '番禺区', 'mainland', '4');
INSERT INTO `area` VALUES ('440114', '440100', ',440000,440100,440114', '3', '花都区', 'mainland', '4');
INSERT INTO `area` VALUES ('440115', '440100', ',440000,440100,440115', '3', '南沙区', 'mainland', '4');
INSERT INTO `area` VALUES ('440116', '440100', ',440000,440100,440116', '3', '萝岗区', 'mainland', '4');
INSERT INTO `area` VALUES ('440183', '440100', ',440000,440100,440183', '3', '增城市', 'mainland', '4');
INSERT INTO `area` VALUES ('440184', '440100', ',440000,440100,440184', '3', '从化市', 'mainland', '4');
INSERT INTO `area` VALUES ('440188', '440100', ',440000,440100,440188', '3', '东山区', 'mainland', '4');
INSERT INTO `area` VALUES ('440189', '440100', ',440000,440100,440189', '3', '其它区', 'mainland', '4');
INSERT INTO `area` VALUES ('440200', '440000', ',440000,440200', '2', '韶关市', 'mainland', '4');
INSERT INTO `area` VALUES ('440203', '440200', ',440000,440200,440203', '3', '武江区', 'mainland', '4');
INSERT INTO `area` VALUES ('440204', '440200', ',440000,440200,440204', '3', '浈江区', 'mainland', '4');
INSERT INTO `area` VALUES ('440205', '440200', ',440000,440200,440205', '3', '曲江区', 'mainland', '4');
INSERT INTO `area` VALUES ('440222', '440200', ',440000,440200,440222', '3', '始兴县', 'mainland', '4');
INSERT INTO `area` VALUES ('440224', '440200', ',440000,440200,440224', '3', '仁化县', 'mainland', '4');
INSERT INTO `area` VALUES ('440229', '440200', ',440000,440200,440229', '3', '翁源县', 'mainland', '4');
INSERT INTO `area` VALUES ('440232', '440200', ',440000,440200,440232', '3', '乳源瑶族自治县', 'mainland', '4');
INSERT INTO `area` VALUES ('440233', '440200', ',440000,440200,440233', '3', '新丰县', 'mainland', '4');
INSERT INTO `area` VALUES ('440281', '440200', ',440000,440200,440281', '3', '乐昌市', 'mainland', '4');
INSERT INTO `area` VALUES ('440282', '440200', ',440000,440200,440282', '3', '南雄市', 'mainland', '4');
INSERT INTO `area` VALUES ('440283', '440200', ',440000,440200,440283', '3', '其它区', 'mainland', '4');
INSERT INTO `area` VALUES ('440300', '440000', ',440000,440300', '2', '深圳市', 'mainland', '4');
INSERT INTO `area` VALUES ('440303', '440300', ',440000,440300,440303', '3', '罗湖区', 'mainland', '4');
INSERT INTO `area` VALUES ('440304', '440300', ',440000,440300,440304', '3', '福田区', 'mainland', '4');
INSERT INTO `area` VALUES ('440305', '440300', ',440000,440300,440305', '3', '南山区', 'mainland', '4');
INSERT INTO `area` VALUES ('440306', '440300', ',440000,440300,440306', '3', '宝安区', 'mainland', '4');
INSERT INTO `area` VALUES ('440307', '440300', ',440000,440300,440307', '3', '龙岗区', 'mainland', '4');
INSERT INTO `area` VALUES ('440308', '440300', ',440000,440300,440308', '3', '盐田区', 'mainland', '4');
INSERT INTO `area` VALUES ('440309', '440300', ',440000,440300,440309', '3', '其它区', 'mainland', '4');
INSERT INTO `area` VALUES ('440400', '440000', ',440000,440400', '2', '珠海市', 'mainland', '4');
INSERT INTO `area` VALUES ('440402', '440400', ',440000,440400,440402', '3', '香洲区', 'mainland', '4');
INSERT INTO `area` VALUES ('440403', '440400', ',440000,440400,440403', '3', '斗门区', 'mainland', '4');
INSERT INTO `area` VALUES ('440404', '440400', ',440000,440400,440404', '3', '金湾区', 'mainland', '4');
INSERT INTO `area` VALUES ('440486', '440400', ',440000,440400,440486', '3', '金唐区', 'mainland', '4');
INSERT INTO `area` VALUES ('440487', '440400', ',440000,440400,440487', '3', '南湾区', 'mainland', '4');
INSERT INTO `area` VALUES ('440488', '440400', ',440000,440400,440488', '3', '其它区', 'mainland', '4');
INSERT INTO `area` VALUES ('440500', '440000', ',440000,440500', '2', '汕头市', 'mainland', '4');
INSERT INTO `area` VALUES ('440507', '440500', ',440000,440500,440507', '3', '龙湖区', 'mainland', '4');
INSERT INTO `area` VALUES ('440511', '440500', ',440000,440500,440511', '3', '金平区', 'mainland', '4');
INSERT INTO `area` VALUES ('440512', '440500', ',440000,440500,440512', '3', '濠江区', 'mainland', '4');
INSERT INTO `area` VALUES ('440513', '440500', ',440000,440500,440513', '3', '潮阳区', 'mainland', '4');
INSERT INTO `area` VALUES ('440514', '440500', ',440000,440500,440514', '3', '潮南区', 'mainland', '4');
INSERT INTO `area` VALUES ('440515', '440500', ',440000,440500,440515', '3', '澄海区', 'mainland', '4');
INSERT INTO `area` VALUES ('440523', '440500', ',440000,440500,440523', '3', '南澳县', 'mainland', '4');
INSERT INTO `area` VALUES ('440524', '440500', ',440000,440500,440524', '3', '其它区', 'mainland', '4');
INSERT INTO `area` VALUES ('440600', '440000', ',440000,440600', '2', '佛山市', 'mainland', '4');
INSERT INTO `area` VALUES ('440604', '440600', ',440000,440600,440604', '3', '禅城区', 'mainland', '4');
INSERT INTO `area` VALUES ('440605', '440600', ',440000,440600,440605', '3', '南海区', 'mainland', '4');
INSERT INTO `area` VALUES ('440606', '440600', ',440000,440600,440606', '3', '顺德区', 'mainland', '4');
INSERT INTO `area` VALUES ('440607', '440600', ',440000,440600,440607', '3', '三水区', 'mainland', '4');
INSERT INTO `area` VALUES ('440608', '440600', ',440000,440600,440608', '3', '高明区', 'mainland', '4');
INSERT INTO `area` VALUES ('440609', '440600', ',440000,440600,440609', '3', '其它区', 'mainland', '4');
INSERT INTO `area` VALUES ('440700', '440000', ',440000,440700', '2', '江门市', 'mainland', '4');
INSERT INTO `area` VALUES ('440703', '440700', ',440000,440700,440703', '3', '蓬江区', 'mainland', '4');
INSERT INTO `area` VALUES ('440704', '440700', ',440000,440700,440704', '3', '江海区', 'mainland', '4');
INSERT INTO `area` VALUES ('440705', '440700', ',440000,440700,440705', '3', '新会区', 'mainland', '4');
INSERT INTO `area` VALUES ('440781', '440700', ',440000,440700,440781', '3', '台山市', 'mainland', '4');
INSERT INTO `area` VALUES ('440783', '440700', ',440000,440700,440783', '3', '开平市', 'mainland', '4');
INSERT INTO `area` VALUES ('440784', '440700', ',440000,440700,440784', '3', '鹤山市', 'mainland', '4');
INSERT INTO `area` VALUES ('440785', '440700', ',440000,440700,440785', '3', '恩平市', 'mainland', '4');
INSERT INTO `area` VALUES ('440786', '440700', ',440000,440700,440786', '3', '其它区', 'mainland', '4');
INSERT INTO `area` VALUES ('440800', '440000', ',440000,440800', '2', '湛江市', 'mainland', '4');
INSERT INTO `area` VALUES ('440802', '440800', ',440000,440800,440802', '3', '赤坎区', 'mainland', '4');
INSERT INTO `area` VALUES ('440803', '440800', ',440000,440800,440803', '3', '霞山区', 'mainland', '4');
INSERT INTO `area` VALUES ('440804', '440800', ',440000,440800,440804', '3', '坡头区', 'mainland', '4');
INSERT INTO `area` VALUES ('440811', '440800', ',440000,440800,440811', '3', '麻章区', 'mainland', '4');
INSERT INTO `area` VALUES ('440823', '440800', ',440000,440800,440823', '3', '遂溪县', 'mainland', '4');
INSERT INTO `area` VALUES ('440825', '440800', ',440000,440800,440825', '3', '徐闻县', 'mainland', '4');
INSERT INTO `area` VALUES ('440881', '440800', ',440000,440800,440881', '3', '廉江市', 'mainland', '4');
INSERT INTO `area` VALUES ('440882', '440800', ',440000,440800,440882', '3', '雷州市', 'mainland', '4');
INSERT INTO `area` VALUES ('440883', '440800', ',440000,440800,440883', '3', '吴川市', 'mainland', '4');
INSERT INTO `area` VALUES ('440884', '440800', ',440000,440800,440884', '3', '其它区', 'mainland', '4');
INSERT INTO `area` VALUES ('440900', '440000', ',440000,440900', '2', '茂名市', 'mainland', '4');
INSERT INTO `area` VALUES ('440902', '440900', ',440000,440900,440902', '3', '茂南区', 'mainland', '4');
INSERT INTO `area` VALUES ('440903', '440900', ',440000,440900,440903', '3', '茂港区', 'mainland', '4');
INSERT INTO `area` VALUES ('440923', '440900', ',440000,440900,440923', '3', '电白县', 'mainland', '4');
INSERT INTO `area` VALUES ('440981', '440900', ',440000,440900,440981', '3', '高州市', 'mainland', '4');
INSERT INTO `area` VALUES ('440982', '440900', ',440000,440900,440982', '3', '化州市', 'mainland', '4');
INSERT INTO `area` VALUES ('440983', '440900', ',440000,440900,440983', '3', '信宜市', 'mainland', '4');
INSERT INTO `area` VALUES ('440984', '440900', ',440000,440900,440984', '3', '其它区', 'mainland', '4');
INSERT INTO `area` VALUES ('441200', '440000', ',440000,441200', '2', '肇庆市', 'mainland', '4');
INSERT INTO `area` VALUES ('441202', '441200', ',440000,441200,441202', '3', '端州区', 'mainland', '4');
INSERT INTO `area` VALUES ('441203', '441200', ',440000,441200,441203', '3', '鼎湖区', 'mainland', '4');
INSERT INTO `area` VALUES ('441223', '441200', ',440000,441200,441223', '3', '广宁县', 'mainland', '4');
INSERT INTO `area` VALUES ('441224', '441200', ',440000,441200,441224', '3', '怀集县', 'mainland', '4');
INSERT INTO `area` VALUES ('441225', '441200', ',440000,441200,441225', '3', '封开县', 'mainland', '4');
INSERT INTO `area` VALUES ('441226', '441200', ',440000,441200,441226', '3', '德庆县', 'mainland', '4');
INSERT INTO `area` VALUES ('441283', '441200', ',440000,441200,441283', '3', '高要市', 'mainland', '4');
INSERT INTO `area` VALUES ('441284', '441200', ',440000,441200,441284', '3', '四会市', 'mainland', '4');
INSERT INTO `area` VALUES ('441285', '441200', ',440000,441200,441285', '3', '其它区', 'mainland', '4');
INSERT INTO `area` VALUES ('441300', '440000', ',440000,441300', '2', '惠州市', 'mainland', '4');
INSERT INTO `area` VALUES ('441302', '441300', ',440000,441300,441302', '3', '惠城区', 'mainland', '4');
INSERT INTO `area` VALUES ('441303', '441300', ',440000,441300,441303', '3', '惠阳区', 'mainland', '4');
INSERT INTO `area` VALUES ('441322', '441300', ',440000,441300,441322', '3', '博罗县', 'mainland', '4');
INSERT INTO `area` VALUES ('441323', '441300', ',440000,441300,441323', '3', '惠东县', 'mainland', '4');
INSERT INTO `area` VALUES ('441324', '441300', ',440000,441300,441324', '3', '龙门县', 'mainland', '4');
INSERT INTO `area` VALUES ('441325', '441300', ',440000,441300,441325', '3', '其它区', 'mainland', '4');
INSERT INTO `area` VALUES ('441400', '440000', ',440000,441400', '2', '梅州市', 'mainland', '4');
INSERT INTO `area` VALUES ('441402', '441400', ',440000,441400,441402', '3', '梅江区', 'mainland', '4');
INSERT INTO `area` VALUES ('441421', '441400', ',440000,441400,441421', '3', '梅县', 'mainland', '4');
INSERT INTO `area` VALUES ('441422', '441400', ',440000,441400,441422', '3', '大埔县', 'mainland', '4');
INSERT INTO `area` VALUES ('441423', '441400', ',440000,441400,441423', '3', '丰顺县', 'mainland', '4');
INSERT INTO `area` VALUES ('441424', '441400', ',440000,441400,441424', '3', '五华县', 'mainland', '4');
INSERT INTO `area` VALUES ('441426', '441400', ',440000,441400,441426', '3', '平远县', 'mainland', '4');
INSERT INTO `area` VALUES ('441427', '441400', ',440000,441400,441427', '3', '蕉岭县', 'mainland', '4');
INSERT INTO `area` VALUES ('441481', '441400', ',440000,441400,441481', '3', '兴宁市', 'mainland', '4');
INSERT INTO `area` VALUES ('441482', '441400', ',440000,441400,441482', '3', '其它区', 'mainland', '4');
INSERT INTO `area` VALUES ('441500', '440000', ',440000,441500', '2', '汕尾市', 'mainland', '4');
INSERT INTO `area` VALUES ('441502', '441500', ',440000,441500,441502', '3', '城区', 'mainland', '4');
INSERT INTO `area` VALUES ('441521', '441500', ',440000,441500,441521', '3', '海丰县', 'mainland', '4');
INSERT INTO `area` VALUES ('441523', '441500', ',440000,441500,441523', '3', '陆河县', 'mainland', '4');
INSERT INTO `area` VALUES ('441581', '441500', ',440000,441500,441581', '3', '陆丰市', 'mainland', '4');
INSERT INTO `area` VALUES ('441582', '441500', ',440000,441500,441582', '3', '其它区', 'mainland', '4');
INSERT INTO `area` VALUES ('441600', '440000', ',440000,441600', '2', '河源市', 'mainland', '4');
INSERT INTO `area` VALUES ('441602', '441600', ',440000,441600,441602', '3', '源城区', 'mainland', '4');
INSERT INTO `area` VALUES ('441621', '441600', ',440000,441600,441621', '3', '紫金县', 'mainland', '4');
INSERT INTO `area` VALUES ('441622', '441600', ',440000,441600,441622', '3', '龙川县', 'mainland', '4');
INSERT INTO `area` VALUES ('441623', '441600', ',440000,441600,441623', '3', '连平县', 'mainland', '4');
INSERT INTO `area` VALUES ('441624', '441600', ',440000,441600,441624', '3', '和平县', 'mainland', '4');
INSERT INTO `area` VALUES ('441625', '441600', ',440000,441600,441625', '3', '东源县', 'mainland', '4');
INSERT INTO `area` VALUES ('441626', '441600', ',440000,441600,441626', '3', '其它区', 'mainland', '4');
INSERT INTO `area` VALUES ('441700', '440000', ',440000,441700', '2', '阳江市', 'mainland', '4');
INSERT INTO `area` VALUES ('441702', '441700', ',440000,441700,441702', '3', '江城区', 'mainland', '4');
INSERT INTO `area` VALUES ('441721', '441700', ',440000,441700,441721', '3', '阳西县', 'mainland', '4');
INSERT INTO `area` VALUES ('441723', '441700', ',440000,441700,441723', '3', '阳东县', 'mainland', '4');
INSERT INTO `area` VALUES ('441781', '441700', ',440000,441700,441781', '3', '阳春市', 'mainland', '4');
INSERT INTO `area` VALUES ('441782', '441700', ',440000,441700,441782', '3', '其它区', 'mainland', '4');
INSERT INTO `area` VALUES ('441800', '440000', ',440000,441800', '2', '清远市', 'mainland', '4');
INSERT INTO `area` VALUES ('441802', '441800', ',440000,441800,441802', '3', '清城区', 'mainland', '4');
INSERT INTO `area` VALUES ('441821', '441800', ',440000,441800,441821', '3', '佛冈县', 'mainland', '4');
INSERT INTO `area` VALUES ('441823', '441800', ',440000,441800,441823', '3', '阳山县', 'mainland', '4');
INSERT INTO `area` VALUES ('441825', '441800', ',440000,441800,441825', '3', '连山壮族瑶族自治县', 'mainland', '4');
INSERT INTO `area` VALUES ('441826', '441800', ',440000,441800,441826', '3', '连南瑶族自治县', 'mainland', '4');
INSERT INTO `area` VALUES ('441827', '441800', ',440000,441800,441827', '3', '清新县', 'mainland', '4');
INSERT INTO `area` VALUES ('441881', '441800', ',440000,441800,441881', '3', '英德市', 'mainland', '4');
INSERT INTO `area` VALUES ('441882', '441800', ',440000,441800,441882', '3', '连州市', 'mainland', '4');
INSERT INTO `area` VALUES ('441883', '441800', ',440000,441800,441883', '3', '其它区', 'mainland', '4');
INSERT INTO `area` VALUES ('441900', '440000', ',440000,441900', '2', '东莞市', 'mainland', '4');
INSERT INTO `area` VALUES ('442000', '440000', ',440000,442000', '2', '中山市', 'mainland', '4');
INSERT INTO `area` VALUES ('445100', '440000', ',440000,445100', '2', '潮州市', 'mainland', '4');
INSERT INTO `area` VALUES ('445102', '445100', ',440000,445100,445102', '3', '湘桥区', 'mainland', '4');
INSERT INTO `area` VALUES ('445121', '445100', ',440000,445100,445121', '3', '潮安县', 'mainland', '4');
INSERT INTO `area` VALUES ('445122', '445100', ',440000,445100,445122', '3', '饶平县', 'mainland', '4');
INSERT INTO `area` VALUES ('445185', '445100', ',440000,445100,445185', '3', '枫溪区', 'mainland', '4');
INSERT INTO `area` VALUES ('445186', '445100', ',440000,445100,445186', '3', '其它区', 'mainland', '4');
INSERT INTO `area` VALUES ('445200', '440000', ',440000,445200', '2', '揭阳市', 'mainland', '4');
INSERT INTO `area` VALUES ('445202', '445200', ',440000,445200,445202', '3', '榕城区', 'mainland', '4');
INSERT INTO `area` VALUES ('445221', '445200', ',440000,445200,445221', '3', '揭东县', 'mainland', '4');
INSERT INTO `area` VALUES ('445222', '445200', ',440000,445200,445222', '3', '揭西县', 'mainland', '4');
INSERT INTO `area` VALUES ('445224', '445200', ',440000,445200,445224', '3', '惠来县', 'mainland', '4');
INSERT INTO `area` VALUES ('445281', '445200', ',440000,445200,445281', '3', '普宁市', 'mainland', '4');
INSERT INTO `area` VALUES ('445284', '445200', ',440000,445200,445284', '3', '东山区', 'mainland', '4');
INSERT INTO `area` VALUES ('445285', '445200', ',440000,445200,445285', '3', '其它区', 'mainland', '4');
INSERT INTO `area` VALUES ('445300', '440000', ',440000,445300', '2', '云浮市', 'mainland', '4');
INSERT INTO `area` VALUES ('445302', '445300', ',440000,445300,445302', '3', '云城区', 'mainland', '4');
INSERT INTO `area` VALUES ('445321', '445300', ',440000,445300,445321', '3', '新兴县', 'mainland', '4');
INSERT INTO `area` VALUES ('445322', '445300', ',440000,445300,445322', '3', '郁南县', 'mainland', '4');
INSERT INTO `area` VALUES ('445323', '445300', ',440000,445300,445323', '3', '云安县', 'mainland', '4');
INSERT INTO `area` VALUES ('445381', '445300', ',440000,445300,445381', '3', '罗定市', 'mainland', '4');
INSERT INTO `area` VALUES ('445382', '445300', ',440000,445300,445382', '3', '其它区', 'mainland', '4');
INSERT INTO `area` VALUES ('450000', '100000', ',450000', '1', '广西壮族自治区', 'mainland', '4');
INSERT INTO `area` VALUES ('450100', '450000', ',450000,450100', '2', '南宁市', 'mainland', '4');
INSERT INTO `area` VALUES ('450102', '450100', ',450000,450100,450102', '3', '兴宁区', 'mainland', '4');
INSERT INTO `area` VALUES ('450103', '450100', ',450000,450100,450103', '3', '青秀区', 'mainland', '4');
INSERT INTO `area` VALUES ('450105', '450100', ',450000,450100,450105', '3', '江南区', 'mainland', '4');
INSERT INTO `area` VALUES ('450107', '450100', ',450000,450100,450107', '3', '西乡塘区', 'mainland', '4');
INSERT INTO `area` VALUES ('450108', '450100', ',450000,450100,450108', '3', '良庆区', 'mainland', '4');
INSERT INTO `area` VALUES ('450109', '450100', ',450000,450100,450109', '3', '邕宁区', 'mainland', '4');
INSERT INTO `area` VALUES ('450122', '450100', ',450000,450100,450122', '3', '武鸣县', 'mainland', '4');
INSERT INTO `area` VALUES ('450123', '450100', ',450000,450100,450123', '3', '隆安县', 'mainland', '4');
INSERT INTO `area` VALUES ('450124', '450100', ',450000,450100,450124', '3', '马山县', 'mainland', '4');
INSERT INTO `area` VALUES ('450125', '450100', ',450000,450100,450125', '3', '上林县', 'mainland', '4');
INSERT INTO `area` VALUES ('450126', '450100', ',450000,450100,450126', '3', '宾阳县', 'mainland', '4');
INSERT INTO `area` VALUES ('450127', '450100', ',450000,450100,450127', '3', '横县', 'mainland', '4');
INSERT INTO `area` VALUES ('450128', '450100', ',450000,450100,450128', '3', '其它区', 'mainland', '4');
INSERT INTO `area` VALUES ('450200', '450000', ',450000,450200', '2', '柳州市', 'mainland', '4');
INSERT INTO `area` VALUES ('450202', '450200', ',450000,450200,450202', '3', '城中区', 'mainland', '4');
INSERT INTO `area` VALUES ('450203', '450200', ',450000,450200,450203', '3', '鱼峰区', 'mainland', '4');
INSERT INTO `area` VALUES ('450204', '450200', ',450000,450200,450204', '3', '柳南区', 'mainland', '4');
INSERT INTO `area` VALUES ('450205', '450200', ',450000,450200,450205', '3', '柳北区', 'mainland', '4');
INSERT INTO `area` VALUES ('450221', '450200', ',450000,450200,450221', '3', '柳江县', 'mainland', '4');
INSERT INTO `area` VALUES ('450222', '450200', ',450000,450200,450222', '3', '柳城县', 'mainland', '4');
INSERT INTO `area` VALUES ('450223', '450200', ',450000,450200,450223', '3', '鹿寨县', 'mainland', '4');
INSERT INTO `area` VALUES ('450224', '450200', ',450000,450200,450224', '3', '融安县', 'mainland', '4');
INSERT INTO `area` VALUES ('450225', '450200', ',450000,450200,450225', '3', '融水苗族自治县', 'mainland', '4');
INSERT INTO `area` VALUES ('450226', '450200', ',450000,450200,450226', '3', '三江侗族自治县', 'mainland', '4');
INSERT INTO `area` VALUES ('450227', '450200', ',450000,450200,450227', '3', '其它区', 'mainland', '4');
INSERT INTO `area` VALUES ('450300', '450000', ',450000,450300', '2', '桂林市', 'mainland', '4');
INSERT INTO `area` VALUES ('450302', '450300', ',450000,450300,450302', '3', '秀峰区', 'mainland', '4');
INSERT INTO `area` VALUES ('450303', '450300', ',450000,450300,450303', '3', '叠彩区', 'mainland', '4');
INSERT INTO `area` VALUES ('450304', '450300', ',450000,450300,450304', '3', '象山区', 'mainland', '4');
INSERT INTO `area` VALUES ('450305', '450300', ',450000,450300,450305', '3', '七星区', 'mainland', '4');
INSERT INTO `area` VALUES ('450311', '450300', ',450000,450300,450311', '3', '雁山区', 'mainland', '4');
INSERT INTO `area` VALUES ('450321', '450300', ',450000,450300,450321', '3', '阳朔县', 'mainland', '4');
INSERT INTO `area` VALUES ('450322', '450300', ',450000,450300,450322', '3', '临桂县', 'mainland', '4');
INSERT INTO `area` VALUES ('450323', '450300', ',450000,450300,450323', '3', '灵川县', 'mainland', '4');
INSERT INTO `area` VALUES ('450324', '450300', ',450000,450300,450324', '3', '全州县', 'mainland', '4');
INSERT INTO `area` VALUES ('450325', '450300', ',450000,450300,450325', '3', '兴安县', 'mainland', '4');
INSERT INTO `area` VALUES ('450326', '450300', ',450000,450300,450326', '3', '永福县', 'mainland', '4');
INSERT INTO `area` VALUES ('450327', '450300', ',450000,450300,450327', '3', '灌阳县', 'mainland', '4');
INSERT INTO `area` VALUES ('450328', '450300', ',450000,450300,450328', '3', '龙胜各族自治县', 'mainland', '4');
INSERT INTO `area` VALUES ('450329', '450300', ',450000,450300,450329', '3', '资源县', 'mainland', '4');
INSERT INTO `area` VALUES ('450330', '450300', ',450000,450300,450330', '3', '平乐县', 'mainland', '4');
INSERT INTO `area` VALUES ('450331', '450300', ',450000,450300,450331', '3', '荔浦县', 'mainland', '4');
INSERT INTO `area` VALUES ('450332', '450300', ',450000,450300,450332', '3', '恭城瑶族自治县', 'mainland', '4');
INSERT INTO `area` VALUES ('450333', '450300', ',450000,450300,450333', '3', '其它区', 'mainland', '4');
INSERT INTO `area` VALUES ('450400', '450000', ',450000,450400', '2', '梧州市', 'mainland', '4');
INSERT INTO `area` VALUES ('450403', '450400', ',450000,450400,450403', '3', '万秀区', 'mainland', '4');
INSERT INTO `area` VALUES ('450404', '450400', ',450000,450400,450404', '3', '蝶山区', 'mainland', '4');
INSERT INTO `area` VALUES ('450405', '450400', ',450000,450400,450405', '3', '长洲区', 'mainland', '4');
INSERT INTO `area` VALUES ('450421', '450400', ',450000,450400,450421', '3', '苍梧县', 'mainland', '4');
INSERT INTO `area` VALUES ('450422', '450400', ',450000,450400,450422', '3', '藤县', 'mainland', '4');
INSERT INTO `area` VALUES ('450423', '450400', ',450000,450400,450423', '3', '蒙山县', 'mainland', '4');
INSERT INTO `area` VALUES ('450481', '450400', ',450000,450400,450481', '3', '岑溪市', 'mainland', '4');
INSERT INTO `area` VALUES ('450482', '450400', ',450000,450400,450482', '3', '其它区', 'mainland', '4');
INSERT INTO `area` VALUES ('450500', '450000', ',450000,450500', '2', '北海市', 'mainland', '4');
INSERT INTO `area` VALUES ('450502', '450500', ',450000,450500,450502', '3', '海城区', 'mainland', '4');
INSERT INTO `area` VALUES ('450503', '450500', ',450000,450500,450503', '3', '银海区', 'mainland', '4');
INSERT INTO `area` VALUES ('450512', '450500', ',450000,450500,450512', '3', '铁山港区', 'mainland', '4');
INSERT INTO `area` VALUES ('450521', '450500', ',450000,450500,450521', '3', '合浦县', 'mainland', '4');
INSERT INTO `area` VALUES ('450522', '450500', ',450000,450500,450522', '3', '其它区', 'mainland', '4');
INSERT INTO `area` VALUES ('450600', '450000', ',450000,450600', '2', '防城港市', 'mainland', '4');
INSERT INTO `area` VALUES ('450602', '450600', ',450000,450600,450602', '3', '港口区', 'mainland', '4');
INSERT INTO `area` VALUES ('450603', '450600', ',450000,450600,450603', '3', '防城区', 'mainland', '4');
INSERT INTO `area` VALUES ('450621', '450600', ',450000,450600,450621', '3', '上思县', 'mainland', '4');
INSERT INTO `area` VALUES ('450681', '450600', ',450000,450600,450681', '3', '东兴市', 'mainland', '4');
INSERT INTO `area` VALUES ('450682', '450600', ',450000,450600,450682', '3', '其它区', 'mainland', '4');
INSERT INTO `area` VALUES ('450700', '450000', ',450000,450700', '2', '钦州市', 'mainland', '4');
INSERT INTO `area` VALUES ('450702', '450700', ',450000,450700,450702', '3', '钦南区', 'mainland', '4');
INSERT INTO `area` VALUES ('450703', '450700', ',450000,450700,450703', '3', '钦北区', 'mainland', '4');
INSERT INTO `area` VALUES ('450721', '450700', ',450000,450700,450721', '3', '灵山县', 'mainland', '4');
INSERT INTO `area` VALUES ('450722', '450700', ',450000,450700,450722', '3', '浦北县', 'mainland', '4');
INSERT INTO `area` VALUES ('450723', '450700', ',450000,450700,450723', '3', '其它区', 'mainland', '4');
INSERT INTO `area` VALUES ('450800', '450000', ',450000,450800', '2', '贵港市', 'mainland', '4');
INSERT INTO `area` VALUES ('450802', '450800', ',450000,450800,450802', '3', '港北区', 'mainland', '4');
INSERT INTO `area` VALUES ('450803', '450800', ',450000,450800,450803', '3', '港南区', 'mainland', '4');
INSERT INTO `area` VALUES ('450804', '450800', ',450000,450800,450804', '3', '覃塘区', 'mainland', '4');
INSERT INTO `area` VALUES ('450821', '450800', ',450000,450800,450821', '3', '平南县', 'mainland', '4');
INSERT INTO `area` VALUES ('450881', '450800', ',450000,450800,450881', '3', '桂平市', 'mainland', '4');
INSERT INTO `area` VALUES ('450882', '450800', ',450000,450800,450882', '3', '其它区', 'mainland', '4');
INSERT INTO `area` VALUES ('450900', '450000', ',450000,450900', '2', '玉林市', 'mainland', '4');
INSERT INTO `area` VALUES ('450902', '450900', ',450000,450900,450902', '3', '玉州区', 'mainland', '4');
INSERT INTO `area` VALUES ('450921', '450900', ',450000,450900,450921', '3', '容县', 'mainland', '4');
INSERT INTO `area` VALUES ('450922', '450900', ',450000,450900,450922', '3', '陆川县', 'mainland', '4');
INSERT INTO `area` VALUES ('450923', '450900', ',450000,450900,450923', '3', '博白县', 'mainland', '4');
INSERT INTO `area` VALUES ('450924', '450900', ',450000,450900,450924', '3', '兴业县', 'mainland', '4');
INSERT INTO `area` VALUES ('450981', '450900', ',450000,450900,450981', '3', '北流市', 'mainland', '4');
INSERT INTO `area` VALUES ('450982', '450900', ',450000,450900,450982', '3', '其它区', 'mainland', '4');
INSERT INTO `area` VALUES ('451000', '450000', ',450000,451000', '2', '百色市', 'mainland', '4');
INSERT INTO `area` VALUES ('451002', '451000', ',450000,451000,451002', '3', '右江区', 'mainland', '4');
INSERT INTO `area` VALUES ('451021', '451000', ',450000,451000,451021', '3', '田阳县', 'mainland', '4');
INSERT INTO `area` VALUES ('451022', '451000', ',450000,451000,451022', '3', '田东县', 'mainland', '4');
INSERT INTO `area` VALUES ('451023', '451000', ',450000,451000,451023', '3', '平果县', 'mainland', '4');
INSERT INTO `area` VALUES ('451024', '451000', ',450000,451000,451024', '3', '德保县', 'mainland', '4');
INSERT INTO `area` VALUES ('451025', '451000', ',450000,451000,451025', '3', '靖西县', 'mainland', '4');
INSERT INTO `area` VALUES ('451026', '451000', ',450000,451000,451026', '3', '那坡县', 'mainland', '4');
INSERT INTO `area` VALUES ('451027', '451000', ',450000,451000,451027', '3', '凌云县', 'mainland', '4');
INSERT INTO `area` VALUES ('451028', '451000', ',450000,451000,451028', '3', '乐业县', 'mainland', '4');
INSERT INTO `area` VALUES ('451029', '451000', ',450000,451000,451029', '3', '田林县', 'mainland', '4');
INSERT INTO `area` VALUES ('451030', '451000', ',450000,451000,451030', '3', '西林县', 'mainland', '4');
INSERT INTO `area` VALUES ('451031', '451000', ',450000,451000,451031', '3', '隆林各族自治县', 'mainland', '4');
INSERT INTO `area` VALUES ('451032', '451000', ',450000,451000,451032', '3', '其它区', 'mainland', '4');
INSERT INTO `area` VALUES ('451100', '450000', ',450000,451100', '2', '贺州市', 'mainland', '4');
INSERT INTO `area` VALUES ('451102', '451100', ',450000,451100,451102', '3', '八步区', 'mainland', '4');
INSERT INTO `area` VALUES ('451121', '451100', ',450000,451100,451121', '3', '昭平县', 'mainland', '4');
INSERT INTO `area` VALUES ('451122', '451100', ',450000,451100,451122', '3', '钟山县', 'mainland', '4');
INSERT INTO `area` VALUES ('451123', '451100', ',450000,451100,451123', '3', '富川瑶族自治县', 'mainland', '4');
INSERT INTO `area` VALUES ('451124', '451100', ',450000,451100,451124', '3', '其它区', 'mainland', '4');
INSERT INTO `area` VALUES ('451200', '450000', ',450000,451200', '2', '河池市', 'mainland', '4');
INSERT INTO `area` VALUES ('451202', '451200', ',450000,451200,451202', '3', '金城江区', 'mainland', '4');
INSERT INTO `area` VALUES ('451221', '451200', ',450000,451200,451221', '3', '南丹县', 'mainland', '4');
INSERT INTO `area` VALUES ('451222', '451200', ',450000,451200,451222', '3', '天峨县', 'mainland', '4');
INSERT INTO `area` VALUES ('451223', '451200', ',450000,451200,451223', '3', '凤山县', 'mainland', '4');
INSERT INTO `area` VALUES ('451224', '451200', ',450000,451200,451224', '3', '东兰县', 'mainland', '4');
INSERT INTO `area` VALUES ('451225', '451200', ',450000,451200,451225', '3', '罗城仫佬族自治县', 'mainland', '4');
INSERT INTO `area` VALUES ('451226', '451200', ',450000,451200,451226', '3', '环江毛南族自治县', 'mainland', '4');
INSERT INTO `area` VALUES ('451227', '451200', ',450000,451200,451227', '3', '巴马瑶族自治县', 'mainland', '4');
INSERT INTO `area` VALUES ('451228', '451200', ',450000,451200,451228', '3', '都安瑶族自治县', 'mainland', '4');
INSERT INTO `area` VALUES ('451229', '451200', ',450000,451200,451229', '3', '大化瑶族自治县', 'mainland', '4');
INSERT INTO `area` VALUES ('451281', '451200', ',450000,451200,451281', '3', '宜州市', 'mainland', '4');
INSERT INTO `area` VALUES ('451282', '451200', ',450000,451200,451282', '3', '其它区', 'mainland', '4');
INSERT INTO `area` VALUES ('451300', '450000', ',450000,451300', '2', '来宾市', 'mainland', '4');
INSERT INTO `area` VALUES ('451302', '451300', ',450000,451300,451302', '3', '兴宾区', 'mainland', '4');
INSERT INTO `area` VALUES ('451321', '451300', ',450000,451300,451321', '3', '忻城县', 'mainland', '4');
INSERT INTO `area` VALUES ('451322', '451300', ',450000,451300,451322', '3', '象州县', 'mainland', '4');
INSERT INTO `area` VALUES ('451323', '451300', ',450000,451300,451323', '3', '武宣县', 'mainland', '4');
INSERT INTO `area` VALUES ('451324', '451300', ',450000,451300,451324', '3', '金秀瑶族自治县', 'mainland', '4');
INSERT INTO `area` VALUES ('451381', '451300', ',450000,451300,451381', '3', '合山市', 'mainland', '4');
INSERT INTO `area` VALUES ('451382', '451300', ',450000,451300,451382', '3', '其它区', 'mainland', '4');
INSERT INTO `area` VALUES ('451400', '450000', ',450000,451400', '2', '崇左市', 'mainland', '4');
INSERT INTO `area` VALUES ('451402', '451400', ',450000,451400,451402', '3', '江州区', 'mainland', '4');
INSERT INTO `area` VALUES ('451421', '451400', ',450000,451400,451421', '3', '扶绥县', 'mainland', '4');
INSERT INTO `area` VALUES ('451422', '451400', ',450000,451400,451422', '3', '宁明县', 'mainland', '4');
INSERT INTO `area` VALUES ('451423', '451400', ',450000,451400,451423', '3', '龙州县', 'mainland', '4');
INSERT INTO `area` VALUES ('451424', '451400', ',450000,451400,451424', '3', '大新县', 'mainland', '4');
INSERT INTO `area` VALUES ('451425', '451400', ',450000,451400,451425', '3', '天等县', 'mainland', '4');
INSERT INTO `area` VALUES ('451481', '451400', ',450000,451400,451481', '3', '凭祥市', 'mainland', '4');
INSERT INTO `area` VALUES ('451482', '451400', ',450000,451400,451482', '3', '其它区', 'mainland', '4');
INSERT INTO `area` VALUES ('460000', '100000', ',460000', '1', '海南省', 'mainland', '4');
INSERT INTO `area` VALUES ('460100', '460000', ',460000,460100', '2', '海口市', 'mainland', '4');
INSERT INTO `area` VALUES ('460105', '460100', ',460000,460100,460105', '3', '秀英区', 'mainland', '4');
INSERT INTO `area` VALUES ('460106', '460100', ',460000,460100,460106', '3', '龙华区', 'mainland', '4');
INSERT INTO `area` VALUES ('460107', '460100', ',460000,460100,460107', '3', '琼山区', 'mainland', '4');
INSERT INTO `area` VALUES ('460108', '460100', ',460000,460100,460108', '3', '美兰区', 'mainland', '4');
INSERT INTO `area` VALUES ('460109', '460100', ',460000,460100,460109', '3', '其它区', 'mainland', '4');
INSERT INTO `area` VALUES ('460200', '460000', ',460000,460200', '2', '三亚市', 'mainland', '4');
INSERT INTO `area` VALUES ('469001', '460000', ',460000,469001', '3', '五指山市', 'mainland', '4');
INSERT INTO `area` VALUES ('469002', '460000', ',460000,469002', '3', '琼海市', 'mainland', '4');
INSERT INTO `area` VALUES ('469003', '460000', ',460000,469003', '3', '儋州市', 'mainland', '4');
INSERT INTO `area` VALUES ('469005', '460000', ',460000,469005', '3', '文昌市', 'mainland', '4');
INSERT INTO `area` VALUES ('469006', '460000', ',460000,469006', '3', '万宁市', 'mainland', '4');
INSERT INTO `area` VALUES ('469007', '460000', ',460000,469007', '3', '东方市', 'mainland', '4');
INSERT INTO `area` VALUES ('469025', '460000', ',460000,469025', '3', '定安县', 'mainland', '4');
INSERT INTO `area` VALUES ('469026', '460000', ',460000,469026', '3', '屯昌县', 'mainland', '4');
INSERT INTO `area` VALUES ('469027', '460000', ',460000,469027', '3', '澄迈县', 'mainland', '4');
INSERT INTO `area` VALUES ('469028', '460000', ',460000,469028', '3', '临高县', 'mainland', '4');
INSERT INTO `area` VALUES ('469030', '460000', ',460000,469030', '3', '白沙黎族自治县', 'mainland', '4');
INSERT INTO `area` VALUES ('469031', '460000', ',460000,469031', '3', '昌江黎族自治县', 'mainland', '4');
INSERT INTO `area` VALUES ('469033', '460000', ',460000,469033', '3', '乐东黎族自治县', 'mainland', '4');
INSERT INTO `area` VALUES ('469034', '460000', ',460000,469034', '3', '陵水黎族自治县', 'mainland', '4');
INSERT INTO `area` VALUES ('469035', '460000', ',460000,469035', '3', '保亭黎族苗族自治县', 'mainland', '4');
INSERT INTO `area` VALUES ('469036', '460000', ',460000,469036', '3', '琼中黎族苗族自治县', 'mainland', '4');
INSERT INTO `area` VALUES ('469037', '460000', ',460000,469037', '3', '西沙群岛', 'mainland', '4');
INSERT INTO `area` VALUES ('469038', '460000', ',460000,469038', '3', '南沙群岛', 'mainland', '4');
INSERT INTO `area` VALUES ('469039', '460000', ',460000,469039', '3', '中沙群岛的岛礁及其海域', 'mainland', '4');
INSERT INTO `area` VALUES ('471004', '410300', ',410000,410300,471004', '3', '高新区', 'mainland', '2');
INSERT INTO `area` VALUES ('471005', '410300', ',410000,410300,471005', '3', '其它区', 'mainland', '2');
INSERT INTO `area` VALUES ('500000', '100000', ',500000', '1', '重庆', 'mainland', '6');
INSERT INTO `area` VALUES ('500100', '500000', ',500000,500100', '2', '重庆市', 'mainland', '6');
INSERT INTO `area` VALUES ('500101', '500100', ',500000,500100,500101', '3', '万州区', 'mainland', '6');
INSERT INTO `area` VALUES ('500102', '500100', ',500000,500100,500102', '3', '涪陵区', 'mainland', '6');
INSERT INTO `area` VALUES ('500103', '500100', ',500000,500100,500103', '3', '渝中区', 'mainland', '6');
INSERT INTO `area` VALUES ('500104', '500100', ',500000,500100,500104', '3', '大渡口区', 'mainland', '6');
INSERT INTO `area` VALUES ('500105', '500100', ',500000,500100,500105', '3', '江北区', 'mainland', '6');
INSERT INTO `area` VALUES ('500106', '500100', ',500000,500100,500106', '3', '沙坪坝区', 'mainland', '6');
INSERT INTO `area` VALUES ('500107', '500100', ',500000,500100,500107', '3', '九龙坡区', 'mainland', '6');
INSERT INTO `area` VALUES ('500108', '500100', ',500000,500100,500108', '3', '南岸区', 'mainland', '6');
INSERT INTO `area` VALUES ('500109', '500100', ',500000,500100,500109', '3', '北碚区', 'mainland', '6');
INSERT INTO `area` VALUES ('500110', '500100', ',500000,500100,500110', '3', '万盛区', 'mainland', '6');
INSERT INTO `area` VALUES ('500111', '500100', ',500000,500100,500111', '3', '双桥区', 'mainland', '6');
INSERT INTO `area` VALUES ('500112', '500100', ',500000,500100,500112', '3', '渝北区', 'mainland', '6');
INSERT INTO `area` VALUES ('500113', '500100', ',500000,500100,500113', '3', '巴南区', 'mainland', '6');
INSERT INTO `area` VALUES ('500114', '500100', ',500000,500100,500114', '3', '黔江区', 'mainland', '6');
INSERT INTO `area` VALUES ('500115', '500100', ',500000,500100,500115', '3', '长寿区', 'mainland', '6');
INSERT INTO `area` VALUES ('500222', '500100', ',500000,500100,500222', '3', '綦江县', 'mainland', '6');
INSERT INTO `area` VALUES ('500223', '500100', ',500000,500100,500223', '3', '潼南县', 'mainland', '6');
INSERT INTO `area` VALUES ('500224', '500100', ',500000,500100,500224', '3', '铜梁县', 'mainland', '6');
INSERT INTO `area` VALUES ('500225', '500100', ',500000,500100,500225', '3', '大足县', 'mainland', '6');
INSERT INTO `area` VALUES ('500226', '500100', ',500000,500100,500226', '3', '荣昌县', 'mainland', '6');
INSERT INTO `area` VALUES ('500227', '500100', ',500000,500100,500227', '3', '璧山县', 'mainland', '6');
INSERT INTO `area` VALUES ('500228', '500100', ',500000,500100,500228', '3', '梁平县', 'mainland', '6');
INSERT INTO `area` VALUES ('500229', '500100', ',500000,500100,500229', '3', '城口县', 'mainland', '6');
INSERT INTO `area` VALUES ('500230', '500100', ',500000,500100,500230', '3', '丰都县', 'mainland', '6');
INSERT INTO `area` VALUES ('500231', '500100', ',500000,500100,500231', '3', '垫江县', 'mainland', '6');
INSERT INTO `area` VALUES ('500232', '500100', ',500000,500100,500232', '3', '武隆县', 'mainland', '6');
INSERT INTO `area` VALUES ('500233', '500100', ',500000,500100,500233', '3', '忠县', 'mainland', '6');
INSERT INTO `area` VALUES ('500234', '500100', ',500000,500100,500234', '3', '开县', 'mainland', '6');
INSERT INTO `area` VALUES ('500235', '500100', ',500000,500100,500235', '3', '云阳县', 'mainland', '6');
INSERT INTO `area` VALUES ('500236', '500100', ',500000,500100,500236', '3', '奉节县', 'mainland', '6');
INSERT INTO `area` VALUES ('500237', '500100', ',500000,500100,500237', '3', '巫山县', 'mainland', '6');
INSERT INTO `area` VALUES ('500238', '500100', ',500000,500100,500238', '3', '巫溪县', 'mainland', '6');
INSERT INTO `area` VALUES ('500240', '500100', ',500000,500100,500240', '3', '石柱土家族自治县', 'mainland', '6');
INSERT INTO `area` VALUES ('500241', '500100', ',500000,500100,500241', '3', '秀山土家族苗族自治县', 'mainland', '6');
INSERT INTO `area` VALUES ('500242', '500100', ',500000,500100,500242', '3', '酉阳土家族苗族自治县', 'mainland', '6');
INSERT INTO `area` VALUES ('500243', '500100', ',500000,500100,500243', '3', '彭水苗族土家族自治县', 'mainland', '6');
INSERT INTO `area` VALUES ('500381', '500100', ',500000,500100,500381', '3', '江津区', 'mainland', '6');
INSERT INTO `area` VALUES ('500382', '500100', ',500000,500100,500382', '3', '合川区', 'mainland', '6');
INSERT INTO `area` VALUES ('500383', '500100', ',500000,500100,500383', '3', '永川区', 'mainland', '6');
INSERT INTO `area` VALUES ('500384', '500100', ',500000,500100,500384', '3', '南川区', 'mainland', '6');
INSERT INTO `area` VALUES ('500385', '500100', ',500000,500100,500385', '3', '其它区', 'mainland', '6');
INSERT INTO `area` VALUES ('510000', '100000', ',510000', '1', '四川省', 'mainland', '6');
INSERT INTO `area` VALUES ('510100', '510000', ',510000,510100', '2', '成都市', 'mainland', '6');
INSERT INTO `area` VALUES ('510104', '510100', ',510000,510100,510104', '3', '锦江区', 'mainland', '6');
INSERT INTO `area` VALUES ('510105', '510100', ',510000,510100,510105', '3', '青羊区', 'mainland', '6');
INSERT INTO `area` VALUES ('510106', '510100', ',510000,510100,510106', '3', '金牛区', 'mainland', '6');
INSERT INTO `area` VALUES ('510107', '510100', ',510000,510100,510107', '3', '武侯区', 'mainland', '6');
INSERT INTO `area` VALUES ('510108', '510100', ',510000,510100,510108', '3', '成华区', 'mainland', '6');
INSERT INTO `area` VALUES ('510112', '510100', ',510000,510100,510112', '3', '龙泉驿区', 'mainland', '6');
INSERT INTO `area` VALUES ('510113', '510100', ',510000,510100,510113', '3', '青白江区', 'mainland', '6');
INSERT INTO `area` VALUES ('510114', '510100', ',510000,510100,510114', '3', '新都区', 'mainland', '6');
INSERT INTO `area` VALUES ('510115', '510100', ',510000,510100,510115', '3', '温江区', 'mainland', '6');
INSERT INTO `area` VALUES ('510121', '510100', ',510000,510100,510121', '3', '金堂县', 'mainland', '6');
INSERT INTO `area` VALUES ('510122', '510100', ',510000,510100,510122', '3', '双流县', 'mainland', '6');
INSERT INTO `area` VALUES ('510124', '510100', ',510000,510100,510124', '3', '郫县', 'mainland', '6');
INSERT INTO `area` VALUES ('510129', '510100', ',510000,510100,510129', '3', '大邑县', 'mainland', '6');
INSERT INTO `area` VALUES ('510131', '510100', ',510000,510100,510131', '3', '蒲江县', 'mainland', '6');
INSERT INTO `area` VALUES ('510132', '510100', ',510000,510100,510132', '3', '新津县', 'mainland', '6');
INSERT INTO `area` VALUES ('510181', '510100', ',510000,510100,510181', '3', '都江堰市', 'mainland', '6');
INSERT INTO `area` VALUES ('510182', '510100', ',510000,510100,510182', '3', '彭州市', 'mainland', '6');
INSERT INTO `area` VALUES ('510183', '510100', ',510000,510100,510183', '3', '邛崃市', 'mainland', '6');
INSERT INTO `area` VALUES ('510184', '510100', ',510000,510100,510184', '3', '崇州市', 'mainland', '6');
INSERT INTO `area` VALUES ('510185', '510100', ',510000,510100,510185', '3', '其它区', 'mainland', '6');
INSERT INTO `area` VALUES ('510300', '510000', ',510000,510300', '2', '自贡市', 'mainland', '6');
INSERT INTO `area` VALUES ('510302', '510300', ',510000,510300,510302', '3', '自流井区', 'mainland', '6');
INSERT INTO `area` VALUES ('510303', '510300', ',510000,510300,510303', '3', '贡井区', 'mainland', '6');
INSERT INTO `area` VALUES ('510304', '510300', ',510000,510300,510304', '3', '大安区', 'mainland', '6');
INSERT INTO `area` VALUES ('510311', '510300', ',510000,510300,510311', '3', '沿滩区', 'mainland', '6');
INSERT INTO `area` VALUES ('510321', '510300', ',510000,510300,510321', '3', '荣县', 'mainland', '6');
INSERT INTO `area` VALUES ('510322', '510300', ',510000,510300,510322', '3', '富顺县', 'mainland', '6');
INSERT INTO `area` VALUES ('510323', '510300', ',510000,510300,510323', '3', '其它区', 'mainland', '6');
INSERT INTO `area` VALUES ('510400', '510000', ',510000,510400', '2', '攀枝花市', 'mainland', '6');
INSERT INTO `area` VALUES ('510402', '510400', ',510000,510400,510402', '3', '东区', 'mainland', '6');
INSERT INTO `area` VALUES ('510403', '510400', ',510000,510400,510403', '3', '西区', 'mainland', '6');
INSERT INTO `area` VALUES ('510411', '510400', ',510000,510400,510411', '3', '仁和区', 'mainland', '6');
INSERT INTO `area` VALUES ('510421', '510400', ',510000,510400,510421', '3', '米易县', 'mainland', '6');
INSERT INTO `area` VALUES ('510422', '510400', ',510000,510400,510422', '3', '盐边县', 'mainland', '6');
INSERT INTO `area` VALUES ('510423', '510400', ',510000,510400,510423', '3', '其它区', 'mainland', '6');
INSERT INTO `area` VALUES ('510500', '510000', ',510000,510500', '2', '泸州市', 'mainland', '6');
INSERT INTO `area` VALUES ('510502', '510500', ',510000,510500,510502', '3', '江阳区', 'mainland', '6');
INSERT INTO `area` VALUES ('510503', '510500', ',510000,510500,510503', '3', '纳溪区', 'mainland', '6');
INSERT INTO `area` VALUES ('510504', '510500', ',510000,510500,510504', '3', '龙马潭区', 'mainland', '6');
INSERT INTO `area` VALUES ('510521', '510500', ',510000,510500,510521', '3', '泸县', 'mainland', '6');
INSERT INTO `area` VALUES ('510522', '510500', ',510000,510500,510522', '3', '合江县', 'mainland', '6');
INSERT INTO `area` VALUES ('510524', '510500', ',510000,510500,510524', '3', '叙永县', 'mainland', '6');
INSERT INTO `area` VALUES ('510525', '510500', ',510000,510500,510525', '3', '古蔺县', 'mainland', '6');
INSERT INTO `area` VALUES ('510526', '510500', ',510000,510500,510526', '3', '其它区', 'mainland', '6');
INSERT INTO `area` VALUES ('510600', '510000', ',510000,510600', '2', '德阳市', 'mainland', '6');
INSERT INTO `area` VALUES ('510603', '510600', ',510000,510600,510603', '3', '旌阳区', 'mainland', '6');
INSERT INTO `area` VALUES ('510623', '510600', ',510000,510600,510623', '3', '中江县', 'mainland', '6');
INSERT INTO `area` VALUES ('510626', '510600', ',510000,510600,510626', '3', '罗江县', 'mainland', '6');
INSERT INTO `area` VALUES ('510681', '510600', ',510000,510600,510681', '3', '广汉市', 'mainland', '6');
INSERT INTO `area` VALUES ('510682', '510600', ',510000,510600,510682', '3', '什邡市', 'mainland', '6');
INSERT INTO `area` VALUES ('510683', '510600', ',510000,510600,510683', '3', '绵竹市', 'mainland', '6');
INSERT INTO `area` VALUES ('510684', '510600', ',510000,510600,510684', '3', '其它区', 'mainland', '6');
INSERT INTO `area` VALUES ('510700', '510000', ',510000,510700', '2', '绵阳市', 'mainland', '6');
INSERT INTO `area` VALUES ('510703', '510700', ',510000,510700,510703', '3', '涪城区', 'mainland', '6');
INSERT INTO `area` VALUES ('510704', '510700', ',510000,510700,510704', '3', '游仙区', 'mainland', '6');
INSERT INTO `area` VALUES ('510722', '510700', ',510000,510700,510722', '3', '三台县', 'mainland', '6');
INSERT INTO `area` VALUES ('510723', '510700', ',510000,510700,510723', '3', '盐亭县', 'mainland', '6');
INSERT INTO `area` VALUES ('510724', '510700', ',510000,510700,510724', '3', '安县', 'mainland', '6');
INSERT INTO `area` VALUES ('510725', '510700', ',510000,510700,510725', '3', '梓潼县', 'mainland', '6');
INSERT INTO `area` VALUES ('510726', '510700', ',510000,510700,510726', '3', '北川羌族自治县', 'mainland', '6');
INSERT INTO `area` VALUES ('510727', '510700', ',510000,510700,510727', '3', '平武县', 'mainland', '6');
INSERT INTO `area` VALUES ('510751', '510700', ',510000,510700,510751', '3', '高新区', 'mainland', '6');
INSERT INTO `area` VALUES ('510781', '510700', ',510000,510700,510781', '3', '江油市', 'mainland', '6');
INSERT INTO `area` VALUES ('510782', '510700', ',510000,510700,510782', '3', '其它区', 'mainland', '6');
INSERT INTO `area` VALUES ('510800', '510000', ',510000,510800', '2', '广元市', 'mainland', '6');
INSERT INTO `area` VALUES ('510802', '510800', ',510000,510800,510802', '3', '利州区', 'mainland', '6');
INSERT INTO `area` VALUES ('510811', '510800', ',510000,510800,510811', '3', '元坝区', 'mainland', '6');
INSERT INTO `area` VALUES ('510812', '510800', ',510000,510800,510812', '3', '朝天区', 'mainland', '6');
INSERT INTO `area` VALUES ('510821', '510800', ',510000,510800,510821', '3', '旺苍县', 'mainland', '6');
INSERT INTO `area` VALUES ('510822', '510800', ',510000,510800,510822', '3', '青川县', 'mainland', '6');
INSERT INTO `area` VALUES ('510823', '510800', ',510000,510800,510823', '3', '剑阁县', 'mainland', '6');
INSERT INTO `area` VALUES ('510824', '510800', ',510000,510800,510824', '3', '苍溪县', 'mainland', '6');
INSERT INTO `area` VALUES ('510825', '510800', ',510000,510800,510825', '3', '其它区', 'mainland', '6');
INSERT INTO `area` VALUES ('510900', '510000', ',510000,510900', '2', '遂宁市', 'mainland', '6');
INSERT INTO `area` VALUES ('510903', '510900', ',510000,510900,510903', '3', '船山区', 'mainland', '6');
INSERT INTO `area` VALUES ('510904', '510900', ',510000,510900,510904', '3', '安居区', 'mainland', '6');
INSERT INTO `area` VALUES ('510921', '510900', ',510000,510900,510921', '3', '蓬溪县', 'mainland', '6');
INSERT INTO `area` VALUES ('510922', '510900', ',510000,510900,510922', '3', '射洪县', 'mainland', '6');
INSERT INTO `area` VALUES ('510923', '510900', ',510000,510900,510923', '3', '大英县', 'mainland', '6');
INSERT INTO `area` VALUES ('510924', '510900', ',510000,510900,510924', '3', '其它区', 'mainland', '6');
INSERT INTO `area` VALUES ('511000', '510000', ',510000,511000', '2', '内江市', 'mainland', '6');
INSERT INTO `area` VALUES ('511002', '511000', ',510000,511000,511002', '3', '市中区', 'mainland', '6');
INSERT INTO `area` VALUES ('511011', '511000', ',510000,511000,511011', '3', '东兴区', 'mainland', '6');
INSERT INTO `area` VALUES ('511024', '511000', ',510000,511000,511024', '3', '威远县', 'mainland', '6');
INSERT INTO `area` VALUES ('511025', '511000', ',510000,511000,511025', '3', '资中县', 'mainland', '6');
INSERT INTO `area` VALUES ('511028', '511000', ',510000,511000,511028', '3', '隆昌县', 'mainland', '6');
INSERT INTO `area` VALUES ('511029', '511000', ',510000,511000,511029', '3', '其它区', 'mainland', '6');
INSERT INTO `area` VALUES ('511100', '510000', ',510000,511100', '2', '乐山市', 'mainland', '6');
INSERT INTO `area` VALUES ('511102', '511100', ',510000,511100,511102', '3', '市中区', 'mainland', '6');
INSERT INTO `area` VALUES ('511111', '511100', ',510000,511100,511111', '3', '沙湾区', 'mainland', '6');
INSERT INTO `area` VALUES ('511112', '511100', ',510000,511100,511112', '3', '五通桥区', 'mainland', '6');
INSERT INTO `area` VALUES ('511113', '511100', ',510000,511100,511113', '3', '金口河区', 'mainland', '6');
INSERT INTO `area` VALUES ('511123', '511100', ',510000,511100,511123', '3', '犍为县', 'mainland', '6');
INSERT INTO `area` VALUES ('511124', '511100', ',510000,511100,511124', '3', '井研县', 'mainland', '6');
INSERT INTO `area` VALUES ('511126', '511100', ',510000,511100,511126', '3', '夹江县', 'mainland', '6');
INSERT INTO `area` VALUES ('511129', '511100', ',510000,511100,511129', '3', '沐川县', 'mainland', '6');
INSERT INTO `area` VALUES ('511132', '511100', ',510000,511100,511132', '3', '峨边彝族自治县', 'mainland', '6');
INSERT INTO `area` VALUES ('511133', '511100', ',510000,511100,511133', '3', '马边彝族自治县', 'mainland', '6');
INSERT INTO `area` VALUES ('511181', '511100', ',510000,511100,511181', '3', '峨眉山市', 'mainland', '6');
INSERT INTO `area` VALUES ('511182', '511100', ',510000,511100,511182', '3', '其它区', 'mainland', '6');
INSERT INTO `area` VALUES ('511300', '510000', ',510000,511300', '2', '南充市', 'mainland', '6');
INSERT INTO `area` VALUES ('511302', '511300', ',510000,511300,511302', '3', '顺庆区', 'mainland', '6');
INSERT INTO `area` VALUES ('511303', '511300', ',510000,511300,511303', '3', '高坪区', 'mainland', '6');
INSERT INTO `area` VALUES ('511304', '511300', ',510000,511300,511304', '3', '嘉陵区', 'mainland', '6');
INSERT INTO `area` VALUES ('511321', '511300', ',510000,511300,511321', '3', '南部县', 'mainland', '6');
INSERT INTO `area` VALUES ('511322', '511300', ',510000,511300,511322', '3', '营山县', 'mainland', '6');
INSERT INTO `area` VALUES ('511323', '511300', ',510000,511300,511323', '3', '蓬安县', 'mainland', '6');
INSERT INTO `area` VALUES ('511324', '511300', ',510000,511300,511324', '3', '仪陇县', 'mainland', '6');
INSERT INTO `area` VALUES ('511325', '511300', ',510000,511300,511325', '3', '西充县', 'mainland', '6');
INSERT INTO `area` VALUES ('511381', '511300', ',510000,511300,511381', '3', '阆中市', 'mainland', '6');
INSERT INTO `area` VALUES ('511382', '511300', ',510000,511300,511382', '3', '其它区', 'mainland', '6');
INSERT INTO `area` VALUES ('511400', '510000', ',510000,511400', '2', '眉山市', 'mainland', '6');
INSERT INTO `area` VALUES ('511402', '511400', ',510000,511400,511402', '3', '东坡区', 'mainland', '6');
INSERT INTO `area` VALUES ('511421', '511400', ',510000,511400,511421', '3', '仁寿县', 'mainland', '6');
INSERT INTO `area` VALUES ('511422', '511400', ',510000,511400,511422', '3', '彭山县', 'mainland', '6');
INSERT INTO `area` VALUES ('511423', '511400', ',510000,511400,511423', '3', '洪雅县', 'mainland', '6');
INSERT INTO `area` VALUES ('511424', '511400', ',510000,511400,511424', '3', '丹棱县', 'mainland', '6');
INSERT INTO `area` VALUES ('511425', '511400', ',510000,511400,511425', '3', '青神县', 'mainland', '6');
INSERT INTO `area` VALUES ('511426', '511400', ',510000,511400,511426', '3', '其它区', 'mainland', '6');
INSERT INTO `area` VALUES ('511500', '510000', ',510000,511500', '2', '宜宾市', 'mainland', '6');
INSERT INTO `area` VALUES ('511502', '511500', ',510000,511500,511502', '3', '翠屏区', 'mainland', '6');
INSERT INTO `area` VALUES ('511521', '511500', ',510000,511500,511521', '3', '宜宾县', 'mainland', '6');
INSERT INTO `area` VALUES ('511522', '511500', ',510000,511500,511522', '3', '南溪县', 'mainland', '6');
INSERT INTO `area` VALUES ('511523', '511500', ',510000,511500,511523', '3', '江安县', 'mainland', '6');
INSERT INTO `area` VALUES ('511524', '511500', ',510000,511500,511524', '3', '长宁县', 'mainland', '6');
INSERT INTO `area` VALUES ('511525', '511500', ',510000,511500,511525', '3', '高县', 'mainland', '6');
INSERT INTO `area` VALUES ('511526', '511500', ',510000,511500,511526', '3', '珙县', 'mainland', '6');
INSERT INTO `area` VALUES ('511527', '511500', ',510000,511500,511527', '3', '筠连县', 'mainland', '6');
INSERT INTO `area` VALUES ('511528', '511500', ',510000,511500,511528', '3', '兴文县', 'mainland', '6');
INSERT INTO `area` VALUES ('511529', '511500', ',510000,511500,511529', '3', '屏山县', 'mainland', '6');
INSERT INTO `area` VALUES ('511530', '511500', ',510000,511500,511530', '3', '其它区', 'mainland', '6');
INSERT INTO `area` VALUES ('511600', '510000', ',510000,511600', '2', '广安市', 'mainland', '6');
INSERT INTO `area` VALUES ('511602', '511600', ',510000,511600,511602', '3', '广安区', 'mainland', '6');
INSERT INTO `area` VALUES ('511621', '511600', ',510000,511600,511621', '3', '岳池县', 'mainland', '6');
INSERT INTO `area` VALUES ('511622', '511600', ',510000,511600,511622', '3', '武胜县', 'mainland', '6');
INSERT INTO `area` VALUES ('511623', '511600', ',510000,511600,511623', '3', '邻水县', 'mainland', '6');
INSERT INTO `area` VALUES ('511681', '511600', ',510000,511600,511681', '3', '华蓥市', 'mainland', '6');
INSERT INTO `area` VALUES ('511682', '511600', ',510000,511600,511682', '3', '市辖区', 'mainland', '6');
INSERT INTO `area` VALUES ('511683', '511600', ',510000,511600,511683', '3', '其它区', 'mainland', '6');
INSERT INTO `area` VALUES ('511700', '510000', ',510000,511700', '2', '达州市', 'mainland', '6');
INSERT INTO `area` VALUES ('511702', '511700', ',510000,511700,511702', '3', '通川区', 'mainland', '6');
INSERT INTO `area` VALUES ('511721', '511700', ',510000,511700,511721', '3', '达县', 'mainland', '6');
INSERT INTO `area` VALUES ('511722', '511700', ',510000,511700,511722', '3', '宣汉县', 'mainland', '6');
INSERT INTO `area` VALUES ('511723', '511700', ',510000,511700,511723', '3', '开江县', 'mainland', '6');
INSERT INTO `area` VALUES ('511724', '511700', ',510000,511700,511724', '3', '大竹县', 'mainland', '6');
INSERT INTO `area` VALUES ('511725', '511700', ',510000,511700,511725', '3', '渠县', 'mainland', '6');
INSERT INTO `area` VALUES ('511781', '511700', ',510000,511700,511781', '3', '万源市', 'mainland', '6');
INSERT INTO `area` VALUES ('511782', '511700', ',510000,511700,511782', '3', '其它区', 'mainland', '6');
INSERT INTO `area` VALUES ('511800', '510000', ',510000,511800', '2', '雅安市', 'mainland', '6');
INSERT INTO `area` VALUES ('511802', '511800', ',510000,511800,511802', '3', '雨城区', 'mainland', '6');
INSERT INTO `area` VALUES ('511821', '511800', ',510000,511800,511821', '3', '名山县', 'mainland', '6');
INSERT INTO `area` VALUES ('511822', '511800', ',510000,511800,511822', '3', '荥经县', 'mainland', '6');
INSERT INTO `area` VALUES ('511823', '511800', ',510000,511800,511823', '3', '汉源县', 'mainland', '6');
INSERT INTO `area` VALUES ('511824', '511800', ',510000,511800,511824', '3', '石棉县', 'mainland', '6');
INSERT INTO `area` VALUES ('511825', '511800', ',510000,511800,511825', '3', '天全县', 'mainland', '6');
INSERT INTO `area` VALUES ('511826', '511800', ',510000,511800,511826', '3', '芦山县', 'mainland', '6');
INSERT INTO `area` VALUES ('511827', '511800', ',510000,511800,511827', '3', '宝兴县', 'mainland', '6');
INSERT INTO `area` VALUES ('511828', '511800', ',510000,511800,511828', '3', '其它区', 'mainland', '6');
INSERT INTO `area` VALUES ('511900', '510000', ',510000,511900', '2', '巴中市', 'mainland', '6');
INSERT INTO `area` VALUES ('511902', '511900', ',510000,511900,511902', '3', '巴州区', 'mainland', '6');
INSERT INTO `area` VALUES ('511921', '511900', ',510000,511900,511921', '3', '通江县', 'mainland', '6');
INSERT INTO `area` VALUES ('511922', '511900', ',510000,511900,511922', '3', '南江县', 'mainland', '6');
INSERT INTO `area` VALUES ('511923', '511900', ',510000,511900,511923', '3', '平昌县', 'mainland', '6');
INSERT INTO `area` VALUES ('511924', '511900', ',510000,511900,511924', '3', '其它区', 'mainland', '6');
INSERT INTO `area` VALUES ('512000', '510000', ',510000,512000', '2', '资阳市', 'mainland', '6');
INSERT INTO `area` VALUES ('512002', '512000', ',510000,512000,512002', '3', '雁江区', 'mainland', '6');
INSERT INTO `area` VALUES ('512021', '512000', ',510000,512000,512021', '3', '安岳县', 'mainland', '6');
INSERT INTO `area` VALUES ('512022', '512000', ',510000,512000,512022', '3', '乐至县', 'mainland', '6');
INSERT INTO `area` VALUES ('512081', '512000', ',510000,512000,512081', '3', '简阳市', 'mainland', '6');
INSERT INTO `area` VALUES ('512082', '512000', ',510000,512000,512082', '3', '其它区', 'mainland', '6');
INSERT INTO `area` VALUES ('513200', '510000', ',510000,513200', '2', '阿坝藏族羌族自治州', 'mainland', '6');
INSERT INTO `area` VALUES ('513221', '513200', ',510000,513200,513221', '3', '汶川县', 'mainland', '6');
INSERT INTO `area` VALUES ('513222', '513200', ',510000,513200,513222', '3', '理县', 'mainland', '6');
INSERT INTO `area` VALUES ('513223', '513200', ',510000,513200,513223', '3', '茂县', 'mainland', '6');
INSERT INTO `area` VALUES ('513224', '513200', ',510000,513200,513224', '3', '松潘县', 'mainland', '6');
INSERT INTO `area` VALUES ('513225', '513200', ',510000,513200,513225', '3', '九寨沟县', 'mainland', '6');
INSERT INTO `area` VALUES ('513226', '513200', ',510000,513200,513226', '3', '金川县', 'mainland', '6');
INSERT INTO `area` VALUES ('513227', '513200', ',510000,513200,513227', '3', '小金县', 'mainland', '6');
INSERT INTO `area` VALUES ('513228', '513200', ',510000,513200,513228', '3', '黑水县', 'mainland', '6');
INSERT INTO `area` VALUES ('513229', '513200', ',510000,513200,513229', '3', '马尔康县', 'mainland', '6');
INSERT INTO `area` VALUES ('513230', '513200', ',510000,513200,513230', '3', '壤塘县', 'mainland', '6');
INSERT INTO `area` VALUES ('513231', '513200', ',510000,513200,513231', '3', '阿坝县', 'mainland', '6');
INSERT INTO `area` VALUES ('513232', '513200', ',510000,513200,513232', '3', '若尔盖县', 'mainland', '6');
INSERT INTO `area` VALUES ('513233', '513200', ',510000,513200,513233', '3', '红原县', 'mainland', '6');
INSERT INTO `area` VALUES ('513234', '513200', ',510000,513200,513234', '3', '其它区', 'mainland', '6');
INSERT INTO `area` VALUES ('513300', '510000', ',510000,513300', '2', '甘孜藏族自治州', 'mainland', '6');
INSERT INTO `area` VALUES ('513321', '513300', ',510000,513300,513321', '3', '康定县', 'mainland', '6');
INSERT INTO `area` VALUES ('513322', '513300', ',510000,513300,513322', '3', '泸定县', 'mainland', '6');
INSERT INTO `area` VALUES ('513323', '513300', ',510000,513300,513323', '3', '丹巴县', 'mainland', '6');
INSERT INTO `area` VALUES ('513324', '513300', ',510000,513300,513324', '3', '九龙县', 'mainland', '6');
INSERT INTO `area` VALUES ('513325', '513300', ',510000,513300,513325', '3', '雅江县', 'mainland', '6');
INSERT INTO `area` VALUES ('513326', '513300', ',510000,513300,513326', '3', '道孚县', 'mainland', '6');
INSERT INTO `area` VALUES ('513327', '513300', ',510000,513300,513327', '3', '炉霍县', 'mainland', '6');
INSERT INTO `area` VALUES ('513328', '513300', ',510000,513300,513328', '3', '甘孜县', 'mainland', '6');
INSERT INTO `area` VALUES ('513329', '513300', ',510000,513300,513329', '3', '新龙县', 'mainland', '6');
INSERT INTO `area` VALUES ('513330', '513300', ',510000,513300,513330', '3', '德格县', 'mainland', '6');
INSERT INTO `area` VALUES ('513331', '513300', ',510000,513300,513331', '3', '白玉县', 'mainland', '6');
INSERT INTO `area` VALUES ('513332', '513300', ',510000,513300,513332', '3', '石渠县', 'mainland', '6');
INSERT INTO `area` VALUES ('513333', '513300', ',510000,513300,513333', '3', '色达县', 'mainland', '6');
INSERT INTO `area` VALUES ('513334', '513300', ',510000,513300,513334', '3', '理塘县', 'mainland', '6');
INSERT INTO `area` VALUES ('513335', '513300', ',510000,513300,513335', '3', '巴塘县', 'mainland', '6');
INSERT INTO `area` VALUES ('513336', '513300', ',510000,513300,513336', '3', '乡城县', 'mainland', '6');
INSERT INTO `area` VALUES ('513337', '513300', ',510000,513300,513337', '3', '稻城县', 'mainland', '6');
INSERT INTO `area` VALUES ('513338', '513300', ',510000,513300,513338', '3', '得荣县', 'mainland', '6');
INSERT INTO `area` VALUES ('513339', '513300', ',510000,513300,513339', '3', '其它区', 'mainland', '6');
INSERT INTO `area` VALUES ('513400', '510000', ',510000,513400', '2', '凉山彝族自治州', 'mainland', '6');
INSERT INTO `area` VALUES ('513401', '513400', ',510000,513400,513401', '3', '西昌市', 'mainland', '6');
INSERT INTO `area` VALUES ('513422', '513400', ',510000,513400,513422', '3', '木里藏族自治县', 'mainland', '6');
INSERT INTO `area` VALUES ('513423', '513400', ',510000,513400,513423', '3', '盐源县', 'mainland', '6');
INSERT INTO `area` VALUES ('513424', '513400', ',510000,513400,513424', '3', '德昌县', 'mainland', '6');
INSERT INTO `area` VALUES ('513425', '513400', ',510000,513400,513425', '3', '会理县', 'mainland', '6');
INSERT INTO `area` VALUES ('513426', '513400', ',510000,513400,513426', '3', '会东县', 'mainland', '6');
INSERT INTO `area` VALUES ('513427', '513400', ',510000,513400,513427', '3', '宁南县', 'mainland', '6');
INSERT INTO `area` VALUES ('513428', '513400', ',510000,513400,513428', '3', '普格县', 'mainland', '6');
INSERT INTO `area` VALUES ('513429', '513400', ',510000,513400,513429', '3', '布拖县', 'mainland', '6');
INSERT INTO `area` VALUES ('513430', '513400', ',510000,513400,513430', '3', '金阳县', 'mainland', '6');
INSERT INTO `area` VALUES ('513431', '513400', ',510000,513400,513431', '3', '昭觉县', 'mainland', '6');
INSERT INTO `area` VALUES ('513432', '513400', ',510000,513400,513432', '3', '喜德县', 'mainland', '6');
INSERT INTO `area` VALUES ('513433', '513400', ',510000,513400,513433', '3', '冕宁县', 'mainland', '6');
INSERT INTO `area` VALUES ('513434', '513400', ',510000,513400,513434', '3', '越西县', 'mainland', '6');
INSERT INTO `area` VALUES ('513435', '513400', ',510000,513400,513435', '3', '甘洛县', 'mainland', '6');
INSERT INTO `area` VALUES ('513436', '513400', ',510000,513400,513436', '3', '美姑县', 'mainland', '6');
INSERT INTO `area` VALUES ('513437', '513400', ',510000,513400,513437', '3', '雷波县', 'mainland', '6');
INSERT INTO `area` VALUES ('513438', '513400', ',510000,513400,513438', '3', '其它区', 'mainland', '6');
INSERT INTO `area` VALUES ('520000', '100000', ',520000', '1', '贵州省', 'mainland', '6');
INSERT INTO `area` VALUES ('520100', '520000', ',520000,520100', '2', '贵阳市', 'mainland', '6');
INSERT INTO `area` VALUES ('520102', '520100', ',520000,520100,520102', '3', '南明区', 'mainland', '6');
INSERT INTO `area` VALUES ('520103', '520100', ',520000,520100,520103', '3', '云岩区', 'mainland', '6');
INSERT INTO `area` VALUES ('520111', '520100', ',520000,520100,520111', '3', '花溪区', 'mainland', '6');
INSERT INTO `area` VALUES ('520112', '520100', ',520000,520100,520112', '3', '乌当区', 'mainland', '6');
INSERT INTO `area` VALUES ('520113', '520100', ',520000,520100,520113', '3', '白云区', 'mainland', '6');
INSERT INTO `area` VALUES ('520114', '520100', ',520000,520100,520114', '3', '小河区', 'mainland', '6');
INSERT INTO `area` VALUES ('520121', '520100', ',520000,520100,520121', '3', '开阳县', 'mainland', '6');
INSERT INTO `area` VALUES ('520122', '520100', ',520000,520100,520122', '3', '息烽县', 'mainland', '6');
INSERT INTO `area` VALUES ('520123', '520100', ',520000,520100,520123', '3', '修文县', 'mainland', '6');
INSERT INTO `area` VALUES ('520151', '520100', ',520000,520100,520151', '3', '金阳开发区', 'mainland', '6');
INSERT INTO `area` VALUES ('520181', '520100', ',520000,520100,520181', '3', '清镇市', 'mainland', '6');
INSERT INTO `area` VALUES ('520182', '520100', ',520000,520100,520182', '3', '其它区', 'mainland', '6');
INSERT INTO `area` VALUES ('520200', '520000', ',520000,520200', '2', '六盘水市', 'mainland', '6');
INSERT INTO `area` VALUES ('520201', '520200', ',520000,520200,520201', '3', '钟山区', 'mainland', '6');
INSERT INTO `area` VALUES ('520203', '520200', ',520000,520200,520203', '3', '六枝特区', 'mainland', '6');
INSERT INTO `area` VALUES ('520221', '520200', ',520000,520200,520221', '3', '水城县', 'mainland', '6');
INSERT INTO `area` VALUES ('520222', '520200', ',520000,520200,520222', '3', '盘县', 'mainland', '6');
INSERT INTO `area` VALUES ('520223', '520200', ',520000,520200,520223', '3', '其它区', 'mainland', '6');
INSERT INTO `area` VALUES ('520300', '520000', ',520000,520300', '2', '遵义市', 'mainland', '6');
INSERT INTO `area` VALUES ('520302', '520300', ',520000,520300,520302', '3', '红花岗区', 'mainland', '6');
INSERT INTO `area` VALUES ('520303', '520300', ',520000,520300,520303', '3', '汇川区', 'mainland', '6');
INSERT INTO `area` VALUES ('520321', '520300', ',520000,520300,520321', '3', '遵义县', 'mainland', '6');
INSERT INTO `area` VALUES ('520322', '520300', ',520000,520300,520322', '3', '桐梓县', 'mainland', '6');
INSERT INTO `area` VALUES ('520323', '520300', ',520000,520300,520323', '3', '绥阳县', 'mainland', '6');
INSERT INTO `area` VALUES ('520324', '520300', ',520000,520300,520324', '3', '正安县', 'mainland', '6');
INSERT INTO `area` VALUES ('520325', '520300', ',520000,520300,520325', '3', '道真仡佬族苗族自治县', 'mainland', '6');
INSERT INTO `area` VALUES ('520326', '520300', ',520000,520300,520326', '3', '务川仡佬族苗族自治县', 'mainland', '6');
INSERT INTO `area` VALUES ('520327', '520300', ',520000,520300,520327', '3', '凤冈县', 'mainland', '6');
INSERT INTO `area` VALUES ('520328', '520300', ',520000,520300,520328', '3', '湄潭县', 'mainland', '6');
INSERT INTO `area` VALUES ('520329', '520300', ',520000,520300,520329', '3', '余庆县', 'mainland', '6');
INSERT INTO `area` VALUES ('520330', '520300', ',520000,520300,520330', '3', '习水县', 'mainland', '6');
INSERT INTO `area` VALUES ('520381', '520300', ',520000,520300,520381', '3', '赤水市', 'mainland', '6');
INSERT INTO `area` VALUES ('520382', '520300', ',520000,520300,520382', '3', '仁怀市', 'mainland', '6');
INSERT INTO `area` VALUES ('520383', '520300', ',520000,520300,520383', '3', '其它区', 'mainland', '6');
INSERT INTO `area` VALUES ('520400', '520000', ',520000,520400', '2', '安顺市', 'mainland', '6');
INSERT INTO `area` VALUES ('520402', '520400', ',520000,520400,520402', '3', '西秀区', 'mainland', '6');
INSERT INTO `area` VALUES ('520421', '520400', ',520000,520400,520421', '3', '平坝县', 'mainland', '6');
INSERT INTO `area` VALUES ('520422', '520400', ',520000,520400,520422', '3', '普定县', 'mainland', '6');
INSERT INTO `area` VALUES ('520423', '520400', ',520000,520400,520423', '3', '镇宁布依族苗族自治县', 'mainland', '6');
INSERT INTO `area` VALUES ('520424', '520400', ',520000,520400,520424', '3', '关岭布依族苗族自治县', 'mainland', '6');
INSERT INTO `area` VALUES ('520425', '520400', ',520000,520400,520425', '3', '紫云苗族布依族自治县', 'mainland', '6');
INSERT INTO `area` VALUES ('520426', '520400', ',520000,520400,520426', '3', '其它区', 'mainland', '6');
INSERT INTO `area` VALUES ('522200', '520000', ',520000,522200', '2', '铜仁地区', 'mainland', '6');
INSERT INTO `area` VALUES ('522201', '522200', ',520000,522200,522201', '3', '铜仁市', 'mainland', '6');
INSERT INTO `area` VALUES ('522222', '522200', ',520000,522200,522222', '3', '江口县', 'mainland', '6');
INSERT INTO `area` VALUES ('522223', '522200', ',520000,522200,522223', '3', '玉屏侗族自治县', 'mainland', '6');
INSERT INTO `area` VALUES ('522224', '522200', ',520000,522200,522224', '3', '石阡县', 'mainland', '6');
INSERT INTO `area` VALUES ('522225', '522200', ',520000,522200,522225', '3', '思南县', 'mainland', '6');
INSERT INTO `area` VALUES ('522226', '522200', ',520000,522200,522226', '3', '印江土家族苗族自治县', 'mainland', '6');
INSERT INTO `area` VALUES ('522227', '522200', ',520000,522200,522227', '3', '德江县', 'mainland', '6');
INSERT INTO `area` VALUES ('522228', '522200', ',520000,522200,522228', '3', '沿河土家族自治县', 'mainland', '6');
INSERT INTO `area` VALUES ('522229', '522200', ',520000,522200,522229', '3', '松桃苗族自治县', 'mainland', '6');
INSERT INTO `area` VALUES ('522230', '522200', ',520000,522200,522230', '3', '万山特区', 'mainland', '6');
INSERT INTO `area` VALUES ('522231', '522200', ',520000,522200,522231', '3', '其它区', 'mainland', '6');
INSERT INTO `area` VALUES ('522300', '520000', ',520000,522300', '2', '黔西南布依族苗族自治州', 'mainland', '6');
INSERT INTO `area` VALUES ('522301', '522300', ',520000,522300,522301', '3', '兴义市', 'mainland', '6');
INSERT INTO `area` VALUES ('522322', '522300', ',520000,522300,522322', '3', '兴仁县', 'mainland', '6');
INSERT INTO `area` VALUES ('522323', '522300', ',520000,522300,522323', '3', '普安县', 'mainland', '6');
INSERT INTO `area` VALUES ('522324', '522300', ',520000,522300,522324', '3', '晴隆县', 'mainland', '6');
INSERT INTO `area` VALUES ('522325', '522300', ',520000,522300,522325', '3', '贞丰县', 'mainland', '6');
INSERT INTO `area` VALUES ('522326', '522300', ',520000,522300,522326', '3', '望谟县', 'mainland', '6');
INSERT INTO `area` VALUES ('522327', '522300', ',520000,522300,522327', '3', '册亨县', 'mainland', '6');
INSERT INTO `area` VALUES ('522328', '522300', ',520000,522300,522328', '3', '安龙县', 'mainland', '6');
INSERT INTO `area` VALUES ('522329', '522300', ',520000,522300,522329', '3', '其它区', 'mainland', '6');
INSERT INTO `area` VALUES ('522400', '520000', ',520000,522400', '2', '毕节地区', 'mainland', '6');
INSERT INTO `area` VALUES ('522401', '522400', ',520000,522400,522401', '3', '毕节市', 'mainland', '6');
INSERT INTO `area` VALUES ('522422', '522400', ',520000,522400,522422', '3', '大方县', 'mainland', '6');
INSERT INTO `area` VALUES ('522423', '522400', ',520000,522400,522423', '3', '黔西县', 'mainland', '6');
INSERT INTO `area` VALUES ('522424', '522400', ',520000,522400,522424', '3', '金沙县', 'mainland', '6');
INSERT INTO `area` VALUES ('522425', '522400', ',520000,522400,522425', '3', '织金县', 'mainland', '6');
INSERT INTO `area` VALUES ('522426', '522400', ',520000,522400,522426', '3', '纳雍县', 'mainland', '6');
INSERT INTO `area` VALUES ('522427', '522400', ',520000,522400,522427', '3', '威宁彝族回族苗族自治县', 'mainland', '6');
INSERT INTO `area` VALUES ('522428', '522400', ',520000,522400,522428', '3', '赫章县', 'mainland', '6');
INSERT INTO `area` VALUES ('522429', '522400', ',520000,522400,522429', '3', '其它区', 'mainland', '6');
INSERT INTO `area` VALUES ('522600', '520000', ',520000,522600', '2', '黔东南苗族侗族自治州', 'mainland', '6');
INSERT INTO `area` VALUES ('522601', '522600', ',520000,522600,522601', '3', '凯里市', 'mainland', '6');
INSERT INTO `area` VALUES ('522622', '522600', ',520000,522600,522622', '3', '黄平县', 'mainland', '6');
INSERT INTO `area` VALUES ('522623', '522600', ',520000,522600,522623', '3', '施秉县', 'mainland', '6');
INSERT INTO `area` VALUES ('522624', '522600', ',520000,522600,522624', '3', '三穗县', 'mainland', '6');
INSERT INTO `area` VALUES ('522625', '522600', ',520000,522600,522625', '3', '镇远县', 'mainland', '6');
INSERT INTO `area` VALUES ('522626', '522600', ',520000,522600,522626', '3', '岑巩县', 'mainland', '6');
INSERT INTO `area` VALUES ('522627', '522600', ',520000,522600,522627', '3', '天柱县', 'mainland', '6');
INSERT INTO `area` VALUES ('522628', '522600', ',520000,522600,522628', '3', '锦屏县', 'mainland', '6');
INSERT INTO `area` VALUES ('522629', '522600', ',520000,522600,522629', '3', '剑河县', 'mainland', '6');
INSERT INTO `area` VALUES ('522630', '522600', ',520000,522600,522630', '3', '台江县', 'mainland', '6');
INSERT INTO `area` VALUES ('522631', '522600', ',520000,522600,522631', '3', '黎平县', 'mainland', '6');
INSERT INTO `area` VALUES ('522632', '522600', ',520000,522600,522632', '3', '榕江县', 'mainland', '6');
INSERT INTO `area` VALUES ('522633', '522600', ',520000,522600,522633', '3', '从江县', 'mainland', '6');
INSERT INTO `area` VALUES ('522634', '522600', ',520000,522600,522634', '3', '雷山县', 'mainland', '6');
INSERT INTO `area` VALUES ('522635', '522600', ',520000,522600,522635', '3', '麻江县', 'mainland', '6');
INSERT INTO `area` VALUES ('522636', '522600', ',520000,522600,522636', '3', '丹寨县', 'mainland', '6');
INSERT INTO `area` VALUES ('522637', '522600', ',520000,522600,522637', '3', '其它区', 'mainland', '6');
INSERT INTO `area` VALUES ('522700', '520000', ',520000,522700', '2', '黔南布依族苗族自治州', 'mainland', '6');
INSERT INTO `area` VALUES ('522701', '522700', ',520000,522700,522701', '3', '都匀市', 'mainland', '6');
INSERT INTO `area` VALUES ('522702', '522700', ',520000,522700,522702', '3', '福泉市', 'mainland', '6');
INSERT INTO `area` VALUES ('522722', '522700', ',520000,522700,522722', '3', '荔波县', 'mainland', '6');
INSERT INTO `area` VALUES ('522723', '522700', ',520000,522700,522723', '3', '贵定县', 'mainland', '6');
INSERT INTO `area` VALUES ('522725', '522700', ',520000,522700,522725', '3', '瓮安县', 'mainland', '6');
INSERT INTO `area` VALUES ('522726', '522700', ',520000,522700,522726', '3', '独山县', 'mainland', '6');
INSERT INTO `area` VALUES ('522727', '522700', ',520000,522700,522727', '3', '平塘县', 'mainland', '6');
INSERT INTO `area` VALUES ('522728', '522700', ',520000,522700,522728', '3', '罗甸县', 'mainland', '6');
INSERT INTO `area` VALUES ('522729', '522700', ',520000,522700,522729', '3', '长顺县', 'mainland', '6');
INSERT INTO `area` VALUES ('522730', '522700', ',520000,522700,522730', '3', '龙里县', 'mainland', '6');
INSERT INTO `area` VALUES ('522731', '522700', ',520000,522700,522731', '3', '惠水县', 'mainland', '6');
INSERT INTO `area` VALUES ('522732', '522700', ',520000,522700,522732', '3', '三都水族自治县', 'mainland', '6');
INSERT INTO `area` VALUES ('522733', '522700', ',520000,522700,522733', '3', '其它区', 'mainland', '6');
INSERT INTO `area` VALUES ('530000', '100000', ',530000', '1', '云南省', 'mainland', '6');
INSERT INTO `area` VALUES ('530100', '530000', ',530000,530100', '2', '昆明市', 'mainland', '6');
INSERT INTO `area` VALUES ('530102', '530100', ',530000,530100,530102', '3', '五华区', 'mainland', '6');
INSERT INTO `area` VALUES ('530103', '530100', ',530000,530100,530103', '3', '盘龙区', 'mainland', '6');
INSERT INTO `area` VALUES ('530111', '530100', ',530000,530100,530111', '3', '官渡区', 'mainland', '6');
INSERT INTO `area` VALUES ('530112', '530100', ',530000,530100,530112', '3', '西山区', 'mainland', '6');
INSERT INTO `area` VALUES ('530113', '530100', ',530000,530100,530113', '3', '东川区', 'mainland', '6');
INSERT INTO `area` VALUES ('530121', '530100', ',530000,530100,530121', '3', '呈贡县', 'mainland', '6');
INSERT INTO `area` VALUES ('530122', '530100', ',530000,530100,530122', '3', '晋宁县', 'mainland', '6');
INSERT INTO `area` VALUES ('530124', '530100', ',530000,530100,530124', '3', '富民县', 'mainland', '6');
INSERT INTO `area` VALUES ('530125', '530100', ',530000,530100,530125', '3', '宜良县', 'mainland', '6');
INSERT INTO `area` VALUES ('530126', '530100', ',530000,530100,530126', '3', '石林彝族自治县', 'mainland', '6');
INSERT INTO `area` VALUES ('530127', '530100', ',530000,530100,530127', '3', '嵩明县', 'mainland', '6');
INSERT INTO `area` VALUES ('530128', '530100', ',530000,530100,530128', '3', '禄劝彝族苗族自治县', 'mainland', '6');
INSERT INTO `area` VALUES ('530129', '530100', ',530000,530100,530129', '3', '寻甸回族彝族自治县', 'mainland', '6');
INSERT INTO `area` VALUES ('530181', '530100', ',530000,530100,530181', '3', '安宁市', 'mainland', '6');
INSERT INTO `area` VALUES ('530182', '530100', ',530000,530100,530182', '3', '其它区', 'mainland', '6');
INSERT INTO `area` VALUES ('530300', '530000', ',530000,530300', '2', '曲靖市', 'mainland', '6');
INSERT INTO `area` VALUES ('530302', '530300', ',530000,530300,530302', '3', '麒麟区', 'mainland', '6');
INSERT INTO `area` VALUES ('530321', '530300', ',530000,530300,530321', '3', '马龙县', 'mainland', '6');
INSERT INTO `area` VALUES ('530322', '530300', ',530000,530300,530322', '3', '陆良县', 'mainland', '6');
INSERT INTO `area` VALUES ('530323', '530300', ',530000,530300,530323', '3', '师宗县', 'mainland', '6');
INSERT INTO `area` VALUES ('530324', '530300', ',530000,530300,530324', '3', '罗平县', 'mainland', '6');
INSERT INTO `area` VALUES ('530325', '530300', ',530000,530300,530325', '3', '富源县', 'mainland', '6');
INSERT INTO `area` VALUES ('530326', '530300', ',530000,530300,530326', '3', '会泽县', 'mainland', '6');
INSERT INTO `area` VALUES ('530328', '530300', ',530000,530300,530328', '3', '沾益县', 'mainland', '6');
INSERT INTO `area` VALUES ('530381', '530300', ',530000,530300,530381', '3', '宣威市', 'mainland', '6');
INSERT INTO `area` VALUES ('530382', '530300', ',530000,530300,530382', '3', '其它区', 'mainland', '6');
INSERT INTO `area` VALUES ('530400', '530000', ',530000,530400', '2', '玉溪市', 'mainland', '6');
INSERT INTO `area` VALUES ('530402', '530400', ',530000,530400,530402', '3', '红塔区', 'mainland', '6');
INSERT INTO `area` VALUES ('530421', '530400', ',530000,530400,530421', '3', '江川县', 'mainland', '6');
INSERT INTO `area` VALUES ('530422', '530400', ',530000,530400,530422', '3', '澄江县', 'mainland', '6');
INSERT INTO `area` VALUES ('530423', '530400', ',530000,530400,530423', '3', '通海县', 'mainland', '6');
INSERT INTO `area` VALUES ('530424', '530400', ',530000,530400,530424', '3', '华宁县', 'mainland', '6');
INSERT INTO `area` VALUES ('530425', '530400', ',530000,530400,530425', '3', '易门县', 'mainland', '6');
INSERT INTO `area` VALUES ('530426', '530400', ',530000,530400,530426', '3', '峨山彝族自治县', 'mainland', '6');
INSERT INTO `area` VALUES ('530427', '530400', ',530000,530400,530427', '3', '新平彝族傣族自治县', 'mainland', '6');
INSERT INTO `area` VALUES ('530428', '530400', ',530000,530400,530428', '3', '元江哈尼族彝族傣族自治县', 'mainland', '6');
INSERT INTO `area` VALUES ('530429', '530400', ',530000,530400,530429', '3', '其它区', 'mainland', '6');
INSERT INTO `area` VALUES ('530500', '530000', ',530000,530500', '2', '保山市', 'mainland', '6');
INSERT INTO `area` VALUES ('530502', '530500', ',530000,530500,530502', '3', '隆阳区', 'mainland', '6');
INSERT INTO `area` VALUES ('530521', '530500', ',530000,530500,530521', '3', '施甸县', 'mainland', '6');
INSERT INTO `area` VALUES ('530522', '530500', ',530000,530500,530522', '3', '腾冲县', 'mainland', '6');
INSERT INTO `area` VALUES ('530523', '530500', ',530000,530500,530523', '3', '龙陵县', 'mainland', '6');
INSERT INTO `area` VALUES ('530524', '530500', ',530000,530500,530524', '3', '昌宁县', 'mainland', '6');
INSERT INTO `area` VALUES ('530525', '530500', ',530000,530500,530525', '3', '其它区', 'mainland', '6');
INSERT INTO `area` VALUES ('530600', '530000', ',530000,530600', '2', '昭通市', 'mainland', '6');
INSERT INTO `area` VALUES ('530602', '530600', ',530000,530600,530602', '3', '昭阳区', 'mainland', '6');
INSERT INTO `area` VALUES ('530621', '530600', ',530000,530600,530621', '3', '鲁甸县', 'mainland', '6');
INSERT INTO `area` VALUES ('530622', '530600', ',530000,530600,530622', '3', '巧家县', 'mainland', '6');
INSERT INTO `area` VALUES ('530623', '530600', ',530000,530600,530623', '3', '盐津县', 'mainland', '6');
INSERT INTO `area` VALUES ('530624', '530600', ',530000,530600,530624', '3', '大关县', 'mainland', '6');
INSERT INTO `area` VALUES ('530625', '530600', ',530000,530600,530625', '3', '永善县', 'mainland', '6');
INSERT INTO `area` VALUES ('530626', '530600', ',530000,530600,530626', '3', '绥江县', 'mainland', '6');
INSERT INTO `area` VALUES ('530627', '530600', ',530000,530600,530627', '3', '镇雄县', 'mainland', '6');
INSERT INTO `area` VALUES ('530628', '530600', ',530000,530600,530628', '3', '彝良县', 'mainland', '6');
INSERT INTO `area` VALUES ('530629', '530600', ',530000,530600,530629', '3', '威信县', 'mainland', '6');
INSERT INTO `area` VALUES ('530630', '530600', ',530000,530600,530630', '3', '水富县', 'mainland', '6');
INSERT INTO `area` VALUES ('530631', '530600', ',530000,530600,530631', '3', '其它区', 'mainland', '6');
INSERT INTO `area` VALUES ('530700', '530000', ',530000,530700', '2', '丽江市', 'mainland', '6');
INSERT INTO `area` VALUES ('530702', '530700', ',530000,530700,530702', '3', '古城区', 'mainland', '6');
INSERT INTO `area` VALUES ('530721', '530700', ',530000,530700,530721', '3', '玉龙纳西族自治县', 'mainland', '6');
INSERT INTO `area` VALUES ('530722', '530700', ',530000,530700,530722', '3', '永胜县', 'mainland', '6');
INSERT INTO `area` VALUES ('530723', '530700', ',530000,530700,530723', '3', '华坪县', 'mainland', '6');
INSERT INTO `area` VALUES ('530724', '530700', ',530000,530700,530724', '3', '宁蒗彝族自治县', 'mainland', '6');
INSERT INTO `area` VALUES ('530725', '530700', ',530000,530700,530725', '3', '其它区', 'mainland', '6');
INSERT INTO `area` VALUES ('530800', '530000', ',530000,530800', '2', '普洱市', 'mainland', '6');
INSERT INTO `area` VALUES ('530802', '530800', ',530000,530800,530802', '3', '思茅区', 'mainland', '6');
INSERT INTO `area` VALUES ('530821', '530800', ',530000,530800,530821', '3', '宁洱哈尼族彝族自治县', 'mainland', '6');
INSERT INTO `area` VALUES ('530822', '530800', ',530000,530800,530822', '3', '墨江哈尼族自治县', 'mainland', '6');
INSERT INTO `area` VALUES ('530823', '530800', ',530000,530800,530823', '3', '景东彝族自治县', 'mainland', '6');
INSERT INTO `area` VALUES ('530824', '530800', ',530000,530800,530824', '3', '景谷傣族彝族自治县', 'mainland', '6');
INSERT INTO `area` VALUES ('530825', '530800', ',530000,530800,530825', '3', '镇沅彝族哈尼族拉祜族自治县', 'mainland', '6');
INSERT INTO `area` VALUES ('530826', '530800', ',530000,530800,530826', '3', '江城哈尼族彝族自治县', 'mainland', '6');
INSERT INTO `area` VALUES ('530827', '530800', ',530000,530800,530827', '3', '孟连傣族拉祜族佤族自治县', 'mainland', '6');
INSERT INTO `area` VALUES ('530828', '530800', ',530000,530800,530828', '3', '澜沧拉祜族自治县', 'mainland', '6');
INSERT INTO `area` VALUES ('530829', '530800', ',530000,530800,530829', '3', '西盟佤族自治县', 'mainland', '6');
INSERT INTO `area` VALUES ('530830', '530800', ',530000,530800,530830', '3', '其它区', 'mainland', '6');
INSERT INTO `area` VALUES ('530900', '530000', ',530000,530900', '2', '临沧市', 'mainland', '6');
INSERT INTO `area` VALUES ('530902', '530900', ',530000,530900,530902', '3', '临翔区', 'mainland', '6');
INSERT INTO `area` VALUES ('530921', '530900', ',530000,530900,530921', '3', '凤庆县', 'mainland', '6');
INSERT INTO `area` VALUES ('530922', '530900', ',530000,530900,530922', '3', '云县', 'mainland', '6');
INSERT INTO `area` VALUES ('530923', '530900', ',530000,530900,530923', '3', '永德县', 'mainland', '6');
INSERT INTO `area` VALUES ('530924', '530900', ',530000,530900,530924', '3', '镇康县', 'mainland', '6');
INSERT INTO `area` VALUES ('530925', '530900', ',530000,530900,530925', '3', '双江拉祜族佤族布朗族傣族自治县', 'mainland', '6');
INSERT INTO `area` VALUES ('530926', '530900', ',530000,530900,530926', '3', '耿马傣族佤族自治县', 'mainland', '6');
INSERT INTO `area` VALUES ('530927', '530900', ',530000,530900,530927', '3', '沧源佤族自治县', 'mainland', '6');
INSERT INTO `area` VALUES ('530928', '530900', ',530000,530900,530928', '3', '其它区', 'mainland', '6');
INSERT INTO `area` VALUES ('532300', '530000', ',530000,532300', '2', '楚雄彝族自治州', 'mainland', '6');
INSERT INTO `area` VALUES ('532301', '532300', ',530000,532300,532301', '3', '楚雄市', 'mainland', '6');
INSERT INTO `area` VALUES ('532322', '532300', ',530000,532300,532322', '3', '双柏县', 'mainland', '6');
INSERT INTO `area` VALUES ('532323', '532300', ',530000,532300,532323', '3', '牟定县', 'mainland', '6');
INSERT INTO `area` VALUES ('532324', '532300', ',530000,532300,532324', '3', '南华县', 'mainland', '6');
INSERT INTO `area` VALUES ('532325', '532300', ',530000,532300,532325', '3', '姚安县', 'mainland', '6');
INSERT INTO `area` VALUES ('532326', '532300', ',530000,532300,532326', '3', '大姚县', 'mainland', '6');
INSERT INTO `area` VALUES ('532327', '532300', ',530000,532300,532327', '3', '永仁县', 'mainland', '6');
INSERT INTO `area` VALUES ('532328', '532300', ',530000,532300,532328', '3', '元谋县', 'mainland', '6');
INSERT INTO `area` VALUES ('532329', '532300', ',530000,532300,532329', '3', '武定县', 'mainland', '6');
INSERT INTO `area` VALUES ('532331', '532300', ',530000,532300,532331', '3', '禄丰县', 'mainland', '6');
INSERT INTO `area` VALUES ('532332', '532300', ',530000,532300,532332', '3', '其它区', 'mainland', '6');
INSERT INTO `area` VALUES ('532500', '530000', ',530000,532500', '2', '红河哈尼族彝族自治州', 'mainland', '6');
INSERT INTO `area` VALUES ('532501', '532500', ',530000,532500,532501', '3', '个旧市', 'mainland', '6');
INSERT INTO `area` VALUES ('532502', '532500', ',530000,532500,532502', '3', '开远市', 'mainland', '6');
INSERT INTO `area` VALUES ('532522', '532500', ',530000,532500,532522', '3', '蒙自县', 'mainland', '6');
INSERT INTO `area` VALUES ('532523', '532500', ',530000,532500,532523', '3', '屏边苗族自治县', 'mainland', '6');
INSERT INTO `area` VALUES ('532524', '532500', ',530000,532500,532524', '3', '建水县', 'mainland', '6');
INSERT INTO `area` VALUES ('532525', '532500', ',530000,532500,532525', '3', '石屏县', 'mainland', '6');
INSERT INTO `area` VALUES ('532526', '532500', ',530000,532500,532526', '3', '弥勒县', 'mainland', '6');
INSERT INTO `area` VALUES ('532527', '532500', ',530000,532500,532527', '3', '泸西县', 'mainland', '6');
INSERT INTO `area` VALUES ('532528', '532500', ',530000,532500,532528', '3', '元阳县', 'mainland', '6');
INSERT INTO `area` VALUES ('532529', '532500', ',530000,532500,532529', '3', '红河县', 'mainland', '6');
INSERT INTO `area` VALUES ('532530', '532500', ',530000,532500,532530', '3', '金平苗族瑶族傣族自治县', 'mainland', '6');
INSERT INTO `area` VALUES ('532531', '532500', ',530000,532500,532531', '3', '绿春县', 'mainland', '6');
INSERT INTO `area` VALUES ('532532', '532500', ',530000,532500,532532', '3', '河口瑶族自治县', 'mainland', '6');
INSERT INTO `area` VALUES ('532533', '532500', ',530000,532500,532533', '3', '其它区', 'mainland', '6');
INSERT INTO `area` VALUES ('532600', '530000', ',530000,532600', '2', '文山壮族苗族自治州', 'mainland', '6');
INSERT INTO `area` VALUES ('532621', '532600', ',530000,532600,532621', '3', '文山县', 'mainland', '6');
INSERT INTO `area` VALUES ('532622', '532600', ',530000,532600,532622', '3', '砚山县', 'mainland', '6');
INSERT INTO `area` VALUES ('532623', '532600', ',530000,532600,532623', '3', '西畴县', 'mainland', '6');
INSERT INTO `area` VALUES ('532624', '532600', ',530000,532600,532624', '3', '麻栗坡县', 'mainland', '6');
INSERT INTO `area` VALUES ('532625', '532600', ',530000,532600,532625', '3', '马关县', 'mainland', '6');
INSERT INTO `area` VALUES ('532626', '532600', ',530000,532600,532626', '3', '丘北县', 'mainland', '6');
INSERT INTO `area` VALUES ('532627', '532600', ',530000,532600,532627', '3', '广南县', 'mainland', '6');
INSERT INTO `area` VALUES ('532628', '532600', ',530000,532600,532628', '3', '富宁县', 'mainland', '6');
INSERT INTO `area` VALUES ('532629', '532600', ',530000,532600,532629', '3', '其它区', 'mainland', '6');
INSERT INTO `area` VALUES ('532800', '530000', ',530000,532800', '2', '西双版纳傣族自治州', 'mainland', '6');
INSERT INTO `area` VALUES ('532801', '532800', ',530000,532800,532801', '3', '景洪市', 'mainland', '6');
INSERT INTO `area` VALUES ('532822', '532800', ',530000,532800,532822', '3', '勐海县', 'mainland', '6');
INSERT INTO `area` VALUES ('532823', '532800', ',530000,532800,532823', '3', '勐腊县', 'mainland', '6');
INSERT INTO `area` VALUES ('532824', '532800', ',530000,532800,532824', '3', '其它区', 'mainland', '6');
INSERT INTO `area` VALUES ('532900', '530000', ',530000,532900', '2', '大理白族自治州', 'mainland', '6');
INSERT INTO `area` VALUES ('532901', '532900', ',530000,532900,532901', '3', '大理市', 'mainland', '6');
INSERT INTO `area` VALUES ('532922', '532900', ',530000,532900,532922', '3', '漾濞彝族自治县', 'mainland', '6');
INSERT INTO `area` VALUES ('532923', '532900', ',530000,532900,532923', '3', '祥云县', 'mainland', '6');
INSERT INTO `area` VALUES ('532924', '532900', ',530000,532900,532924', '3', '宾川县', 'mainland', '6');
INSERT INTO `area` VALUES ('532925', '532900', ',530000,532900,532925', '3', '弥渡县', 'mainland', '6');
INSERT INTO `area` VALUES ('532926', '532900', ',530000,532900,532926', '3', '南涧彝族自治县', 'mainland', '6');
INSERT INTO `area` VALUES ('532927', '532900', ',530000,532900,532927', '3', '巍山彝族回族自治县', 'mainland', '6');
INSERT INTO `area` VALUES ('532928', '532900', ',530000,532900,532928', '3', '永平县', 'mainland', '6');
INSERT INTO `area` VALUES ('532929', '532900', ',530000,532900,532929', '3', '云龙县', 'mainland', '6');
INSERT INTO `area` VALUES ('532930', '532900', ',530000,532900,532930', '3', '洱源县', 'mainland', '6');
INSERT INTO `area` VALUES ('532931', '532900', ',530000,532900,532931', '3', '剑川县', 'mainland', '6');
INSERT INTO `area` VALUES ('532932', '532900', ',530000,532900,532932', '3', '鹤庆县', 'mainland', '6');
INSERT INTO `area` VALUES ('532933', '532900', ',530000,532900,532933', '3', '其它区', 'mainland', '6');
INSERT INTO `area` VALUES ('533100', '530000', ',530000,533100', '2', '德宏傣族景颇族自治州', 'mainland', '6');
INSERT INTO `area` VALUES ('533102', '533100', ',530000,533100,533102', '3', '瑞丽市', 'mainland', '6');
INSERT INTO `area` VALUES ('533103', '533100', ',530000,533100,533103', '3', '潞西市', 'mainland', '6');
INSERT INTO `area` VALUES ('533122', '533100', ',530000,533100,533122', '3', '梁河县', 'mainland', '6');
INSERT INTO `area` VALUES ('533123', '533100', ',530000,533100,533123', '3', '盈江县', 'mainland', '6');
INSERT INTO `area` VALUES ('533124', '533100', ',530000,533100,533124', '3', '陇川县', 'mainland', '6');
INSERT INTO `area` VALUES ('533125', '533100', ',530000,533100,533125', '3', '其它区', 'mainland', '6');
INSERT INTO `area` VALUES ('533300', '530000', ',530000,533300', '2', '怒江傈僳族自治州', 'mainland', '6');
INSERT INTO `area` VALUES ('533321', '533300', ',530000,533300,533321', '3', '泸水县', 'mainland', '6');
INSERT INTO `area` VALUES ('533323', '533300', ',530000,533300,533323', '3', '福贡县', 'mainland', '6');
INSERT INTO `area` VALUES ('533324', '533300', ',530000,533300,533324', '3', '贡山独龙族怒族自治县', 'mainland', '6');
INSERT INTO `area` VALUES ('533325', '533300', ',530000,533300,533325', '3', '兰坪白族普米族自治县', 'mainland', '6');
INSERT INTO `area` VALUES ('533326', '533300', ',530000,533300,533326', '3', '其它区', 'mainland', '6');
INSERT INTO `area` VALUES ('533400', '530000', ',530000,533400', '2', '迪庆藏族自治州', 'mainland', '6');
INSERT INTO `area` VALUES ('533421', '533400', ',530000,533400,533421', '3', '香格里拉县', 'mainland', '6');
INSERT INTO `area` VALUES ('533422', '533400', ',530000,533400,533422', '3', '德钦县', 'mainland', '6');
INSERT INTO `area` VALUES ('533423', '533400', ',530000,533400,533423', '3', '维西傈僳族自治县', 'mainland', '6');
INSERT INTO `area` VALUES ('533424', '533400', ',530000,533400,533424', '3', '其它区', 'mainland', '6');
INSERT INTO `area` VALUES ('540000', '100000', ',540000', '1', '西藏自治区', 'mainland', '6');
INSERT INTO `area` VALUES ('540100', '540000', ',540000,540100', '2', '拉萨市', 'mainland', '6');
INSERT INTO `area` VALUES ('540102', '540100', ',540000,540100,540102', '3', '城关区', 'mainland', '6');
INSERT INTO `area` VALUES ('540121', '540100', ',540000,540100,540121', '3', '林周县', 'mainland', '6');
INSERT INTO `area` VALUES ('540122', '540100', ',540000,540100,540122', '3', '当雄县', 'mainland', '6');
INSERT INTO `area` VALUES ('540123', '540100', ',540000,540100,540123', '3', '尼木县', 'mainland', '6');
INSERT INTO `area` VALUES ('540124', '540100', ',540000,540100,540124', '3', '曲水县', 'mainland', '6');
INSERT INTO `area` VALUES ('540125', '540100', ',540000,540100,540125', '3', '堆龙德庆县', 'mainland', '6');
INSERT INTO `area` VALUES ('540126', '540100', ',540000,540100,540126', '3', '达孜县', 'mainland', '6');
INSERT INTO `area` VALUES ('540127', '540100', ',540000,540100,540127', '3', '墨竹工卡县', 'mainland', '6');
INSERT INTO `area` VALUES ('540128', '540100', ',540000,540100,540128', '3', '其它区', 'mainland', '6');
INSERT INTO `area` VALUES ('542100', '540000', ',540000,542100', '2', '昌都地区', 'mainland', '6');
INSERT INTO `area` VALUES ('542121', '542100', ',540000,542100,542121', '3', '昌都县', 'mainland', '6');
INSERT INTO `area` VALUES ('542122', '542100', ',540000,542100,542122', '3', '江达县', 'mainland', '6');
INSERT INTO `area` VALUES ('542123', '542100', ',540000,542100,542123', '3', '贡觉县', 'mainland', '6');
INSERT INTO `area` VALUES ('542124', '542100', ',540000,542100,542124', '3', '类乌齐县', 'mainland', '6');
INSERT INTO `area` VALUES ('542125', '542100', ',540000,542100,542125', '3', '丁青县', 'mainland', '6');
INSERT INTO `area` VALUES ('542126', '542100', ',540000,542100,542126', '3', '察雅县', 'mainland', '6');
INSERT INTO `area` VALUES ('542127', '542100', ',540000,542100,542127', '3', '八宿县', 'mainland', '6');
INSERT INTO `area` VALUES ('542128', '542100', ',540000,542100,542128', '3', '左贡县', 'mainland', '6');
INSERT INTO `area` VALUES ('542129', '542100', ',540000,542100,542129', '3', '芒康县', 'mainland', '6');
INSERT INTO `area` VALUES ('542132', '542100', ',540000,542100,542132', '3', '洛隆县', 'mainland', '6');
INSERT INTO `area` VALUES ('542133', '542100', ',540000,542100,542133', '3', '边坝县', 'mainland', '6');
INSERT INTO `area` VALUES ('542134', '542100', ',540000,542100,542134', '3', '其它区', 'mainland', '6');
INSERT INTO `area` VALUES ('542200', '540000', ',540000,542200', '2', '山南地区', 'mainland', '6');
INSERT INTO `area` VALUES ('542221', '542200', ',540000,542200,542221', '3', '乃东县', 'mainland', '6');
INSERT INTO `area` VALUES ('542222', '542200', ',540000,542200,542222', '3', '扎囊县', 'mainland', '6');
INSERT INTO `area` VALUES ('542223', '542200', ',540000,542200,542223', '3', '贡嘎县', 'mainland', '6');
INSERT INTO `area` VALUES ('542224', '542200', ',540000,542200,542224', '3', '桑日县', 'mainland', '6');
INSERT INTO `area` VALUES ('542225', '542200', ',540000,542200,542225', '3', '琼结县', 'mainland', '6');
INSERT INTO `area` VALUES ('542226', '542200', ',540000,542200,542226', '3', '曲松县', 'mainland', '6');
INSERT INTO `area` VALUES ('542227', '542200', ',540000,542200,542227', '3', '措美县', 'mainland', '6');
INSERT INTO `area` VALUES ('542228', '542200', ',540000,542200,542228', '3', '洛扎县', 'mainland', '6');
INSERT INTO `area` VALUES ('542229', '542200', ',540000,542200,542229', '3', '加查县', 'mainland', '6');
INSERT INTO `area` VALUES ('542231', '542200', ',540000,542200,542231', '3', '隆子县', 'mainland', '6');
INSERT INTO `area` VALUES ('542232', '542200', ',540000,542200,542232', '3', '错那县', 'mainland', '6');
INSERT INTO `area` VALUES ('542233', '542200', ',540000,542200,542233', '3', '浪卡子县', 'mainland', '6');
INSERT INTO `area` VALUES ('542234', '542200', ',540000,542200,542234', '3', '其它区', 'mainland', '6');
INSERT INTO `area` VALUES ('542300', '540000', ',540000,542300', '2', '日喀则地区', 'mainland', '6');
INSERT INTO `area` VALUES ('542301', '542300', ',540000,542300,542301', '3', '日喀则市', 'mainland', '6');
INSERT INTO `area` VALUES ('542322', '542300', ',540000,542300,542322', '3', '南木林县', 'mainland', '6');
INSERT INTO `area` VALUES ('542323', '542300', ',540000,542300,542323', '3', '江孜县', 'mainland', '6');
INSERT INTO `area` VALUES ('542324', '542300', ',540000,542300,542324', '3', '定日县', 'mainland', '6');
INSERT INTO `area` VALUES ('542325', '542300', ',540000,542300,542325', '3', '萨迦县', 'mainland', '6');
INSERT INTO `area` VALUES ('542326', '542300', ',540000,542300,542326', '3', '拉孜县', 'mainland', '6');
INSERT INTO `area` VALUES ('542327', '542300', ',540000,542300,542327', '3', '昂仁县', 'mainland', '6');
INSERT INTO `area` VALUES ('542328', '542300', ',540000,542300,542328', '3', '谢通门县', 'mainland', '6');
INSERT INTO `area` VALUES ('542329', '542300', ',540000,542300,542329', '3', '白朗县', 'mainland', '6');
INSERT INTO `area` VALUES ('542330', '542300', ',540000,542300,542330', '3', '仁布县', 'mainland', '6');
INSERT INTO `area` VALUES ('542331', '542300', ',540000,542300,542331', '3', '康马县', 'mainland', '6');
INSERT INTO `area` VALUES ('542332', '542300', ',540000,542300,542332', '3', '定结县', 'mainland', '6');
INSERT INTO `area` VALUES ('542333', '542300', ',540000,542300,542333', '3', '仲巴县', 'mainland', '6');
INSERT INTO `area` VALUES ('542334', '542300', ',540000,542300,542334', '3', '亚东县', 'mainland', '6');
INSERT INTO `area` VALUES ('542335', '542300', ',540000,542300,542335', '3', '吉隆县', 'mainland', '6');
INSERT INTO `area` VALUES ('542336', '542300', ',540000,542300,542336', '3', '聂拉木县', 'mainland', '6');
INSERT INTO `area` VALUES ('542337', '542300', ',540000,542300,542337', '3', '萨嘎县', 'mainland', '6');
INSERT INTO `area` VALUES ('542338', '542300', ',540000,542300,542338', '3', '岗巴县', 'mainland', '6');
INSERT INTO `area` VALUES ('542339', '542300', ',540000,542300,542339', '3', '其它区', 'mainland', '6');
INSERT INTO `area` VALUES ('542400', '540000', ',540000,542400', '2', '那曲地区', 'mainland', '6');
INSERT INTO `area` VALUES ('542421', '542400', ',540000,542400,542421', '3', '那曲县', 'mainland', '6');
INSERT INTO `area` VALUES ('542422', '542400', ',540000,542400,542422', '3', '嘉黎县', 'mainland', '6');
INSERT INTO `area` VALUES ('542423', '542400', ',540000,542400,542423', '3', '比如县', 'mainland', '6');
INSERT INTO `area` VALUES ('542424', '542400', ',540000,542400,542424', '3', '聂荣县', 'mainland', '6');
INSERT INTO `area` VALUES ('542425', '542400', ',540000,542400,542425', '3', '安多县', 'mainland', '6');
INSERT INTO `area` VALUES ('542426', '542400', ',540000,542400,542426', '3', '申扎县', 'mainland', '6');
INSERT INTO `area` VALUES ('542427', '542400', ',540000,542400,542427', '3', '索县', 'mainland', '6');
INSERT INTO `area` VALUES ('542428', '542400', ',540000,542400,542428', '3', '班戈县', 'mainland', '6');
INSERT INTO `area` VALUES ('542429', '542400', ',540000,542400,542429', '3', '巴青县', 'mainland', '6');
INSERT INTO `area` VALUES ('542430', '542400', ',540000,542400,542430', '3', '尼玛县', 'mainland', '6');
INSERT INTO `area` VALUES ('542431', '542400', ',540000,542400,542431', '3', '其它区', 'mainland', '6');
INSERT INTO `area` VALUES ('542500', '540000', ',540000,542500', '2', '阿里地区', 'mainland', '6');
INSERT INTO `area` VALUES ('542521', '542500', ',540000,542500,542521', '3', '普兰县', 'mainland', '6');
INSERT INTO `area` VALUES ('542522', '542500', ',540000,542500,542522', '3', '札达县', 'mainland', '6');
INSERT INTO `area` VALUES ('542523', '542500', ',540000,542500,542523', '3', '噶尔县', 'mainland', '6');
INSERT INTO `area` VALUES ('542524', '542500', ',540000,542500,542524', '3', '日土县', 'mainland', '6');
INSERT INTO `area` VALUES ('542525', '542500', ',540000,542500,542525', '3', '革吉县', 'mainland', '6');
INSERT INTO `area` VALUES ('542526', '542500', ',540000,542500,542526', '3', '改则县', 'mainland', '6');
INSERT INTO `area` VALUES ('542527', '542500', ',540000,542500,542527', '3', '措勤县', 'mainland', '6');
INSERT INTO `area` VALUES ('542528', '542500', ',540000,542500,542528', '3', '其它区', 'mainland', '6');
INSERT INTO `area` VALUES ('542600', '540000', ',540000,542600', '2', '林芝地区', 'mainland', '6');
INSERT INTO `area` VALUES ('542621', '542600', ',540000,542600,542621', '3', '林芝县', 'mainland', '6');
INSERT INTO `area` VALUES ('542622', '542600', ',540000,542600,542622', '3', '工布江达县', 'mainland', '6');
INSERT INTO `area` VALUES ('542623', '542600', ',540000,542600,542623', '3', '米林县', 'mainland', '6');
INSERT INTO `area` VALUES ('542624', '542600', ',540000,542600,542624', '3', '墨脱县', 'mainland', '6');
INSERT INTO `area` VALUES ('542625', '542600', ',540000,542600,542625', '3', '波密县', 'mainland', '6');
INSERT INTO `area` VALUES ('542626', '542600', ',540000,542600,542626', '3', '察隅县', 'mainland', '6');
INSERT INTO `area` VALUES ('542627', '542600', ',540000,542600,542627', '3', '朗县', 'mainland', '6');
INSERT INTO `area` VALUES ('542628', '542600', ',540000,542600,542628', '3', '其它区', 'mainland', '6');
INSERT INTO `area` VALUES ('610000', '100000', ',610000', '1', '陕西省', 'mainland', '7');
INSERT INTO `area` VALUES ('610100', '610000', ',610000,610100', '2', '西安市', 'mainland', '7');
INSERT INTO `area` VALUES ('610102', '610100', ',610000,610100,610102', '3', '新城区', 'mainland', '7');
INSERT INTO `area` VALUES ('610103', '610100', ',610000,610100,610103', '3', '碑林区', 'mainland', '7');
INSERT INTO `area` VALUES ('610104', '610100', ',610000,610100,610104', '3', '莲湖区', 'mainland', '7');
INSERT INTO `area` VALUES ('610111', '610100', ',610000,610100,610111', '3', '灞桥区', 'mainland', '7');
INSERT INTO `area` VALUES ('610112', '610100', ',610000,610100,610112', '3', '未央区', 'mainland', '7');
INSERT INTO `area` VALUES ('610113', '610100', ',610000,610100,610113', '3', '雁塔区', 'mainland', '7');
INSERT INTO `area` VALUES ('610114', '610100', ',610000,610100,610114', '3', '阎良区', 'mainland', '7');
INSERT INTO `area` VALUES ('610115', '610100', ',610000,610100,610115', '3', '临潼区', 'mainland', '7');
INSERT INTO `area` VALUES ('610116', '610100', ',610000,610100,610116', '3', '长安区', 'mainland', '7');
INSERT INTO `area` VALUES ('610122', '610100', ',610000,610100,610122', '3', '蓝田县', 'mainland', '7');
INSERT INTO `area` VALUES ('610124', '610100', ',610000,610100,610124', '3', '周至县', 'mainland', '7');
INSERT INTO `area` VALUES ('610125', '610100', ',610000,610100,610125', '3', '户县', 'mainland', '7');
INSERT INTO `area` VALUES ('610126', '610100', ',610000,610100,610126', '3', '高陵县', 'mainland', '7');
INSERT INTO `area` VALUES ('610127', '610100', ',610000,610100,610127', '3', '其它区', 'mainland', '7');
INSERT INTO `area` VALUES ('610200', '610000', ',610000,610200', '2', '铜川市', 'mainland', '7');
INSERT INTO `area` VALUES ('610202', '610200', ',610000,610200,610202', '3', '王益区', 'mainland', '7');
INSERT INTO `area` VALUES ('610203', '610200', ',610000,610200,610203', '3', '印台区', 'mainland', '7');
INSERT INTO `area` VALUES ('610204', '610200', ',610000,610200,610204', '3', '耀州区', 'mainland', '7');
INSERT INTO `area` VALUES ('610222', '610200', ',610000,610200,610222', '3', '宜君县', 'mainland', '7');
INSERT INTO `area` VALUES ('610223', '610200', ',610000,610200,610223', '3', '其它区', 'mainland', '7');
INSERT INTO `area` VALUES ('610300', '610000', ',610000,610300', '2', '宝鸡市', 'mainland', '7');
INSERT INTO `area` VALUES ('610302', '610300', ',610000,610300,610302', '3', '渭滨区', 'mainland', '7');
INSERT INTO `area` VALUES ('610303', '610300', ',610000,610300,610303', '3', '金台区', 'mainland', '7');
INSERT INTO `area` VALUES ('610304', '610300', ',610000,610300,610304', '3', '陈仓区', 'mainland', '7');
INSERT INTO `area` VALUES ('610322', '610300', ',610000,610300,610322', '3', '凤翔县', 'mainland', '7');
INSERT INTO `area` VALUES ('610323', '610300', ',610000,610300,610323', '3', '岐山县', 'mainland', '7');
INSERT INTO `area` VALUES ('610324', '610300', ',610000,610300,610324', '3', '扶风县', 'mainland', '7');
INSERT INTO `area` VALUES ('610326', '610300', ',610000,610300,610326', '3', '眉县', 'mainland', '7');
INSERT INTO `area` VALUES ('610327', '610300', ',610000,610300,610327', '3', '陇县', 'mainland', '7');
INSERT INTO `area` VALUES ('610328', '610300', ',610000,610300,610328', '3', '千阳县', 'mainland', '7');
INSERT INTO `area` VALUES ('610329', '610300', ',610000,610300,610329', '3', '麟游县', 'mainland', '7');
INSERT INTO `area` VALUES ('610330', '610300', ',610000,610300,610330', '3', '凤县', 'mainland', '7');
INSERT INTO `area` VALUES ('610331', '610300', ',610000,610300,610331', '3', '太白县', 'mainland', '7');
INSERT INTO `area` VALUES ('610332', '610300', ',610000,610300,610332', '3', '其它区', 'mainland', '7');
INSERT INTO `area` VALUES ('610400', '610000', ',610000,610400', '2', '咸阳市', 'mainland', '7');
INSERT INTO `area` VALUES ('610402', '610400', ',610000,610400,610402', '3', '秦都区', 'mainland', '7');
INSERT INTO `area` VALUES ('610403', '610400', ',610000,610400,610403', '3', '杨凌区', 'mainland', '7');
INSERT INTO `area` VALUES ('610404', '610400', ',610000,610400,610404', '3', '渭城区', 'mainland', '7');
INSERT INTO `area` VALUES ('610422', '610400', ',610000,610400,610422', '3', '三原县', 'mainland', '7');
INSERT INTO `area` VALUES ('610423', '610400', ',610000,610400,610423', '3', '泾阳县', 'mainland', '7');
INSERT INTO `area` VALUES ('610424', '610400', ',610000,610400,610424', '3', '乾县', 'mainland', '7');
INSERT INTO `area` VALUES ('610425', '610400', ',610000,610400,610425', '3', '礼泉县', 'mainland', '7');
INSERT INTO `area` VALUES ('610426', '610400', ',610000,610400,610426', '3', '永寿县', 'mainland', '7');
INSERT INTO `area` VALUES ('610427', '610400', ',610000,610400,610427', '3', '彬县', 'mainland', '7');
INSERT INTO `area` VALUES ('610428', '610400', ',610000,610400,610428', '3', '长武县', 'mainland', '7');
INSERT INTO `area` VALUES ('610429', '610400', ',610000,610400,610429', '3', '旬邑县', 'mainland', '7');
INSERT INTO `area` VALUES ('610430', '610400', ',610000,610400,610430', '3', '淳化县', 'mainland', '7');
INSERT INTO `area` VALUES ('610431', '610400', ',610000,610400,610431', '3', '武功县', 'mainland', '7');
INSERT INTO `area` VALUES ('610481', '610400', ',610000,610400,610481', '3', '兴平市', 'mainland', '7');
INSERT INTO `area` VALUES ('610482', '610400', ',610000,610400,610482', '3', '其它区', 'mainland', '7');
INSERT INTO `area` VALUES ('610500', '610000', ',610000,610500', '2', '渭南市', 'mainland', '7');
INSERT INTO `area` VALUES ('610502', '610500', ',610000,610500,610502', '3', '临渭区', 'mainland', '7');
INSERT INTO `area` VALUES ('610521', '610500', ',610000,610500,610521', '3', '华县', 'mainland', '7');
INSERT INTO `area` VALUES ('610522', '610500', ',610000,610500,610522', '3', '潼关县', 'mainland', '7');
INSERT INTO `area` VALUES ('610523', '610500', ',610000,610500,610523', '3', '大荔县', 'mainland', '7');
INSERT INTO `area` VALUES ('610524', '610500', ',610000,610500,610524', '3', '合阳县', 'mainland', '7');
INSERT INTO `area` VALUES ('610525', '610500', ',610000,610500,610525', '3', '澄城县', 'mainland', '7');
INSERT INTO `area` VALUES ('610526', '610500', ',610000,610500,610526', '3', '蒲城县', 'mainland', '7');
INSERT INTO `area` VALUES ('610527', '610500', ',610000,610500,610527', '3', '白水县', 'mainland', '7');
INSERT INTO `area` VALUES ('610528', '610500', ',610000,610500,610528', '3', '富平县', 'mainland', '7');
INSERT INTO `area` VALUES ('610581', '610500', ',610000,610500,610581', '3', '韩城市', 'mainland', '7');
INSERT INTO `area` VALUES ('610582', '610500', ',610000,610500,610582', '3', '华阴市', 'mainland', '7');
INSERT INTO `area` VALUES ('610583', '610500', ',610000,610500,610583', '3', '其它区', 'mainland', '7');
INSERT INTO `area` VALUES ('610600', '610000', ',610000,610600', '2', '延安市', 'mainland', '7');
INSERT INTO `area` VALUES ('610602', '610600', ',610000,610600,610602', '3', '宝塔区', 'mainland', '7');
INSERT INTO `area` VALUES ('610621', '610600', ',610000,610600,610621', '3', '延长县', 'mainland', '7');
INSERT INTO `area` VALUES ('610622', '610600', ',610000,610600,610622', '3', '延川县', 'mainland', '7');
INSERT INTO `area` VALUES ('610623', '610600', ',610000,610600,610623', '3', '子长县', 'mainland', '7');
INSERT INTO `area` VALUES ('610624', '610600', ',610000,610600,610624', '3', '安塞县', 'mainland', '7');
INSERT INTO `area` VALUES ('610625', '610600', ',610000,610600,610625', '3', '志丹县', 'mainland', '7');
INSERT INTO `area` VALUES ('610626', '610600', ',610000,610600,610626', '3', '吴起县', 'mainland', '7');
INSERT INTO `area` VALUES ('610627', '610600', ',610000,610600,610627', '3', '甘泉县', 'mainland', '7');
INSERT INTO `area` VALUES ('610628', '610600', ',610000,610600,610628', '3', '富县', 'mainland', '7');
INSERT INTO `area` VALUES ('610629', '610600', ',610000,610600,610629', '3', '洛川县', 'mainland', '7');
INSERT INTO `area` VALUES ('610630', '610600', ',610000,610600,610630', '3', '宜川县', 'mainland', '7');
INSERT INTO `area` VALUES ('610631', '610600', ',610000,610600,610631', '3', '黄龙县', 'mainland', '7');
INSERT INTO `area` VALUES ('610632', '610600', ',610000,610600,610632', '3', '黄陵县', 'mainland', '7');
INSERT INTO `area` VALUES ('610633', '610600', ',610000,610600,610633', '3', '其它区', 'mainland', '7');
INSERT INTO `area` VALUES ('610700', '610000', ',610000,610700', '2', '汉中市', 'mainland', '7');
INSERT INTO `area` VALUES ('610702', '610700', ',610000,610700,610702', '3', '汉台区', 'mainland', '7');
INSERT INTO `area` VALUES ('610721', '610700', ',610000,610700,610721', '3', '南郑县', 'mainland', '7');
INSERT INTO `area` VALUES ('610722', '610700', ',610000,610700,610722', '3', '城固县', 'mainland', '7');
INSERT INTO `area` VALUES ('610723', '610700', ',610000,610700,610723', '3', '洋县', 'mainland', '7');
INSERT INTO `area` VALUES ('610724', '610700', ',610000,610700,610724', '3', '西乡县', 'mainland', '7');
INSERT INTO `area` VALUES ('610725', '610700', ',610000,610700,610725', '3', '勉县', 'mainland', '7');
INSERT INTO `area` VALUES ('610726', '610700', ',610000,610700,610726', '3', '宁强县', 'mainland', '7');
INSERT INTO `area` VALUES ('610727', '610700', ',610000,610700,610727', '3', '略阳县', 'mainland', '7');
INSERT INTO `area` VALUES ('610728', '610700', ',610000,610700,610728', '3', '镇巴县', 'mainland', '7');
INSERT INTO `area` VALUES ('610729', '610700', ',610000,610700,610729', '3', '留坝县', 'mainland', '7');
INSERT INTO `area` VALUES ('610730', '610700', ',610000,610700,610730', '3', '佛坪县', 'mainland', '7');
INSERT INTO `area` VALUES ('610731', '610700', ',610000,610700,610731', '3', '其它区', 'mainland', '7');
INSERT INTO `area` VALUES ('610800', '610000', ',610000,610800', '2', '榆林市', 'mainland', '7');
INSERT INTO `area` VALUES ('610802', '610800', ',610000,610800,610802', '3', '榆阳区', 'mainland', '7');
INSERT INTO `area` VALUES ('610821', '610800', ',610000,610800,610821', '3', '神木县', 'mainland', '7');
INSERT INTO `area` VALUES ('610822', '610800', ',610000,610800,610822', '3', '府谷县', 'mainland', '7');
INSERT INTO `area` VALUES ('610823', '610800', ',610000,610800,610823', '3', '横山县', 'mainland', '7');
INSERT INTO `area` VALUES ('610824', '610800', ',610000,610800,610824', '3', '靖边县', 'mainland', '7');
INSERT INTO `area` VALUES ('610825', '610800', ',610000,610800,610825', '3', '定边县', 'mainland', '7');
INSERT INTO `area` VALUES ('610826', '610800', ',610000,610800,610826', '3', '绥德县', 'mainland', '7');
INSERT INTO `area` VALUES ('610827', '610800', ',610000,610800,610827', '3', '米脂县', 'mainland', '7');
INSERT INTO `area` VALUES ('610828', '610800', ',610000,610800,610828', '3', '佳县', 'mainland', '7');
INSERT INTO `area` VALUES ('610829', '610800', ',610000,610800,610829', '3', '吴堡县', 'mainland', '7');
INSERT INTO `area` VALUES ('610830', '610800', ',610000,610800,610830', '3', '清涧县', 'mainland', '7');
INSERT INTO `area` VALUES ('610831', '610800', ',610000,610800,610831', '3', '子洲县', 'mainland', '7');
INSERT INTO `area` VALUES ('610832', '610800', ',610000,610800,610832', '3', '其它区', 'mainland', '7');
INSERT INTO `area` VALUES ('610900', '610000', ',610000,610900', '2', '安康市', 'mainland', '7');
INSERT INTO `area` VALUES ('610902', '610900', ',610000,610900,610902', '3', '汉滨区', 'mainland', '7');
INSERT INTO `area` VALUES ('610921', '610900', ',610000,610900,610921', '3', '汉阴县', 'mainland', '7');
INSERT INTO `area` VALUES ('610922', '610900', ',610000,610900,610922', '3', '石泉县', 'mainland', '7');
INSERT INTO `area` VALUES ('610923', '610900', ',610000,610900,610923', '3', '宁陕县', 'mainland', '7');
INSERT INTO `area` VALUES ('610924', '610900', ',610000,610900,610924', '3', '紫阳县', 'mainland', '7');
INSERT INTO `area` VALUES ('610925', '610900', ',610000,610900,610925', '3', '岚皋县', 'mainland', '7');
INSERT INTO `area` VALUES ('610926', '610900', ',610000,610900,610926', '3', '平利县', 'mainland', '7');
INSERT INTO `area` VALUES ('610927', '610900', ',610000,610900,610927', '3', '镇坪县', 'mainland', '7');
INSERT INTO `area` VALUES ('610928', '610900', ',610000,610900,610928', '3', '旬阳县', 'mainland', '7');
INSERT INTO `area` VALUES ('610929', '610900', ',610000,610900,610929', '3', '白河县', 'mainland', '7');
INSERT INTO `area` VALUES ('610930', '610900', ',610000,610900,610930', '3', '其它区', 'mainland', '7');
INSERT INTO `area` VALUES ('611000', '610000', ',610000,611000', '2', '商洛市', 'mainland', '7');
INSERT INTO `area` VALUES ('611002', '611000', ',610000,611000,611002', '3', '商州区', 'mainland', '7');
INSERT INTO `area` VALUES ('611021', '611000', ',610000,611000,611021', '3', '洛南县', 'mainland', '7');
INSERT INTO `area` VALUES ('611022', '611000', ',610000,611000,611022', '3', '丹凤县', 'mainland', '7');
INSERT INTO `area` VALUES ('611023', '611000', ',610000,611000,611023', '3', '商南县', 'mainland', '7');
INSERT INTO `area` VALUES ('611024', '611000', ',610000,611000,611024', '3', '山阳县', 'mainland', '7');
INSERT INTO `area` VALUES ('611025', '611000', ',610000,611000,611025', '3', '镇安县', 'mainland', '7');
INSERT INTO `area` VALUES ('611026', '611000', ',610000,611000,611026', '3', '柞水县', 'mainland', '7');
INSERT INTO `area` VALUES ('611027', '611000', ',610000,611000,611027', '3', '其它区', 'mainland', '7');
INSERT INTO `area` VALUES ('620000', '100000', ',620000', '1', '甘肃省', 'mainland', '7');
INSERT INTO `area` VALUES ('620100', '620000', ',620000,620100', '2', '兰州市', 'mainland', '7');
INSERT INTO `area` VALUES ('620102', '620100', ',620000,620100,620102', '3', '城关区', 'mainland', '7');
INSERT INTO `area` VALUES ('620103', '620100', ',620000,620100,620103', '3', '七里河区', 'mainland', '7');
INSERT INTO `area` VALUES ('620104', '620100', ',620000,620100,620104', '3', '西固区', 'mainland', '7');
INSERT INTO `area` VALUES ('620105', '620100', ',620000,620100,620105', '3', '安宁区', 'mainland', '7');
INSERT INTO `area` VALUES ('620111', '620100', ',620000,620100,620111', '3', '红古区', 'mainland', '7');
INSERT INTO `area` VALUES ('620121', '620100', ',620000,620100,620121', '3', '永登县', 'mainland', '7');
INSERT INTO `area` VALUES ('620122', '620100', ',620000,620100,620122', '3', '皋兰县', 'mainland', '7');
INSERT INTO `area` VALUES ('620123', '620100', ',620000,620100,620123', '3', '榆中县', 'mainland', '7');
INSERT INTO `area` VALUES ('620124', '620100', ',620000,620100,620124', '3', '其它区', 'mainland', '7');
INSERT INTO `area` VALUES ('620200', '620000', ',620000,620200', '2', '嘉峪关市', 'mainland', '7');
INSERT INTO `area` VALUES ('620300', '620000', ',620000,620300', '2', '金昌市', 'mainland', '7');
INSERT INTO `area` VALUES ('620302', '620300', ',620000,620300,620302', '3', '金川区', 'mainland', '7');
INSERT INTO `area` VALUES ('620321', '620300', ',620000,620300,620321', '3', '永昌县', 'mainland', '7');
INSERT INTO `area` VALUES ('620322', '620300', ',620000,620300,620322', '3', '其它区', 'mainland', '7');
INSERT INTO `area` VALUES ('620400', '620000', ',620000,620400', '2', '白银市', 'mainland', '7');
INSERT INTO `area` VALUES ('620402', '620400', ',620000,620400,620402', '3', '白银区', 'mainland', '7');
INSERT INTO `area` VALUES ('620403', '620400', ',620000,620400,620403', '3', '平川区', 'mainland', '7');
INSERT INTO `area` VALUES ('620421', '620400', ',620000,620400,620421', '3', '靖远县', 'mainland', '7');
INSERT INTO `area` VALUES ('620422', '620400', ',620000,620400,620422', '3', '会宁县', 'mainland', '7');
INSERT INTO `area` VALUES ('620423', '620400', ',620000,620400,620423', '3', '景泰县', 'mainland', '7');
INSERT INTO `area` VALUES ('620424', '620400', ',620000,620400,620424', '3', '其它区', 'mainland', '7');
INSERT INTO `area` VALUES ('620500', '620000', ',620000,620500', '2', '天水市', 'mainland', '7');
INSERT INTO `area` VALUES ('620502', '620500', ',620000,620500,620502', '3', '秦州区', 'mainland', '7');
INSERT INTO `area` VALUES ('620503', '620500', ',620000,620500,620503', '3', '麦积区', 'mainland', '7');
INSERT INTO `area` VALUES ('620521', '620500', ',620000,620500,620521', '3', '清水县', 'mainland', '7');
INSERT INTO `area` VALUES ('620522', '620500', ',620000,620500,620522', '3', '秦安县', 'mainland', '7');
INSERT INTO `area` VALUES ('620523', '620500', ',620000,620500,620523', '3', '甘谷县', 'mainland', '7');
INSERT INTO `area` VALUES ('620524', '620500', ',620000,620500,620524', '3', '武山县', 'mainland', '7');
INSERT INTO `area` VALUES ('620525', '620500', ',620000,620500,620525', '3', '张家川回族自治县', 'mainland', '7');
INSERT INTO `area` VALUES ('620526', '620500', ',620000,620500,620526', '3', '其它区', 'mainland', '7');
INSERT INTO `area` VALUES ('620600', '620000', ',620000,620600', '2', '武威市', 'mainland', '7');
INSERT INTO `area` VALUES ('620602', '620600', ',620000,620600,620602', '3', '凉州区', 'mainland', '7');
INSERT INTO `area` VALUES ('620621', '620600', ',620000,620600,620621', '3', '民勤县', 'mainland', '7');
INSERT INTO `area` VALUES ('620622', '620600', ',620000,620600,620622', '3', '古浪县', 'mainland', '7');
INSERT INTO `area` VALUES ('620623', '620600', ',620000,620600,620623', '3', '天祝藏族自治县', 'mainland', '7');
INSERT INTO `area` VALUES ('620624', '620600', ',620000,620600,620624', '3', '其它区', 'mainland', '7');
INSERT INTO `area` VALUES ('620700', '620000', ',620000,620700', '2', '张掖市', 'mainland', '7');
INSERT INTO `area` VALUES ('620702', '620700', ',620000,620700,620702', '3', '甘州区', 'mainland', '7');
INSERT INTO `area` VALUES ('620721', '620700', ',620000,620700,620721', '3', '肃南裕固族自治县', 'mainland', '7');
INSERT INTO `area` VALUES ('620722', '620700', ',620000,620700,620722', '3', '民乐县', 'mainland', '7');
INSERT INTO `area` VALUES ('620723', '620700', ',620000,620700,620723', '3', '临泽县', 'mainland', '7');
INSERT INTO `area` VALUES ('620724', '620700', ',620000,620700,620724', '3', '高台县', 'mainland', '7');
INSERT INTO `area` VALUES ('620725', '620700', ',620000,620700,620725', '3', '山丹县', 'mainland', '7');
INSERT INTO `area` VALUES ('620726', '620700', ',620000,620700,620726', '3', '其它区', 'mainland', '7');
INSERT INTO `area` VALUES ('620800', '620000', ',620000,620800', '2', '平凉市', 'mainland', '7');
INSERT INTO `area` VALUES ('620802', '620800', ',620000,620800,620802', '3', '崆峒区', 'mainland', '7');
INSERT INTO `area` VALUES ('620821', '620800', ',620000,620800,620821', '3', '泾川县', 'mainland', '7');
INSERT INTO `area` VALUES ('620822', '620800', ',620000,620800,620822', '3', '灵台县', 'mainland', '7');
INSERT INTO `area` VALUES ('620823', '620800', ',620000,620800,620823', '3', '崇信县', 'mainland', '7');
INSERT INTO `area` VALUES ('620824', '620800', ',620000,620800,620824', '3', '华亭县', 'mainland', '7');
INSERT INTO `area` VALUES ('620825', '620800', ',620000,620800,620825', '3', '庄浪县', 'mainland', '7');
INSERT INTO `area` VALUES ('620826', '620800', ',620000,620800,620826', '3', '静宁县', 'mainland', '7');
INSERT INTO `area` VALUES ('620827', '620800', ',620000,620800,620827', '3', '其它区', 'mainland', '7');
INSERT INTO `area` VALUES ('620900', '620000', ',620000,620900', '2', '酒泉市', 'mainland', '7');
INSERT INTO `area` VALUES ('620902', '620900', ',620000,620900,620902', '3', '肃州区', 'mainland', '7');
INSERT INTO `area` VALUES ('620921', '620900', ',620000,620900,620921', '3', '金塔县', 'mainland', '7');
INSERT INTO `area` VALUES ('620922', '620900', ',620000,620900,620922', '3', '安西县', 'mainland', '7');
INSERT INTO `area` VALUES ('620923', '620900', ',620000,620900,620923', '3', '肃北蒙古族自治县', 'mainland', '7');
INSERT INTO `area` VALUES ('620924', '620900', ',620000,620900,620924', '3', '阿克塞哈萨克族自治县', 'mainland', '7');
INSERT INTO `area` VALUES ('620981', '620900', ',620000,620900,620981', '3', '玉门市', 'mainland', '7');
INSERT INTO `area` VALUES ('620982', '620900', ',620000,620900,620982', '3', '敦煌市', 'mainland', '7');
INSERT INTO `area` VALUES ('620983', '620900', ',620000,620900,620983', '3', '其它区', 'mainland', '7');
INSERT INTO `area` VALUES ('621000', '620000', ',620000,621000', '2', '庆阳市', 'mainland', '7');
INSERT INTO `area` VALUES ('621002', '621000', ',620000,621000,621002', '3', '西峰区', 'mainland', '7');
INSERT INTO `area` VALUES ('621021', '621000', ',620000,621000,621021', '3', '庆城县', 'mainland', '7');
INSERT INTO `area` VALUES ('621022', '621000', ',620000,621000,621022', '3', '环县', 'mainland', '7');
INSERT INTO `area` VALUES ('621023', '621000', ',620000,621000,621023', '3', '华池县', 'mainland', '7');
INSERT INTO `area` VALUES ('621024', '621000', ',620000,621000,621024', '3', '合水县', 'mainland', '7');
INSERT INTO `area` VALUES ('621025', '621000', ',620000,621000,621025', '3', '正宁县', 'mainland', '7');
INSERT INTO `area` VALUES ('621026', '621000', ',620000,621000,621026', '3', '宁县', 'mainland', '7');
INSERT INTO `area` VALUES ('621027', '621000', ',620000,621000,621027', '3', '镇原县', 'mainland', '7');
INSERT INTO `area` VALUES ('621028', '621000', ',620000,621000,621028', '3', '其它区', 'mainland', '7');
INSERT INTO `area` VALUES ('621100', '620000', ',620000,621100', '2', '定西市', 'mainland', '7');
INSERT INTO `area` VALUES ('621102', '621100', ',620000,621100,621102', '3', '安定区', 'mainland', '7');
INSERT INTO `area` VALUES ('621121', '621100', ',620000,621100,621121', '3', '通渭县', 'mainland', '7');
INSERT INTO `area` VALUES ('621122', '621100', ',620000,621100,621122', '3', '陇西县', 'mainland', '7');
INSERT INTO `area` VALUES ('621123', '621100', ',620000,621100,621123', '3', '渭源县', 'mainland', '7');
INSERT INTO `area` VALUES ('621124', '621100', ',620000,621100,621124', '3', '临洮县', 'mainland', '7');
INSERT INTO `area` VALUES ('621125', '621100', ',620000,621100,621125', '3', '漳县', 'mainland', '7');
INSERT INTO `area` VALUES ('621126', '621100', ',620000,621100,621126', '3', '岷县', 'mainland', '7');
INSERT INTO `area` VALUES ('621127', '621100', ',620000,621100,621127', '3', '其它区', 'mainland', '7');
INSERT INTO `area` VALUES ('621200', '620000', ',620000,621200', '2', '陇南市', 'mainland', '7');
INSERT INTO `area` VALUES ('621202', '621200', ',620000,621200,621202', '3', '武都区', 'mainland', '7');
INSERT INTO `area` VALUES ('621221', '621200', ',620000,621200,621221', '3', '成县', 'mainland', '7');
INSERT INTO `area` VALUES ('621222', '621200', ',620000,621200,621222', '3', '文县', 'mainland', '7');
INSERT INTO `area` VALUES ('621223', '621200', ',620000,621200,621223', '3', '宕昌县', 'mainland', '7');
INSERT INTO `area` VALUES ('621224', '621200', ',620000,621200,621224', '3', '康县', 'mainland', '7');
INSERT INTO `area` VALUES ('621225', '621200', ',620000,621200,621225', '3', '西和县', 'mainland', '7');
INSERT INTO `area` VALUES ('621226', '621200', ',620000,621200,621226', '3', '礼县', 'mainland', '7');
INSERT INTO `area` VALUES ('621227', '621200', ',620000,621200,621227', '3', '徽县', 'mainland', '7');
INSERT INTO `area` VALUES ('621228', '621200', ',620000,621200,621228', '3', '两当县', 'mainland', '7');
INSERT INTO `area` VALUES ('621229', '621200', ',620000,621200,621229', '3', '其它区', 'mainland', '7');
INSERT INTO `area` VALUES ('622900', '620000', ',620000,622900', '2', '临夏回族自治州', 'mainland', '7');
INSERT INTO `area` VALUES ('622901', '622900', ',620000,622900,622901', '3', '临夏市', 'mainland', '7');
INSERT INTO `area` VALUES ('622921', '622900', ',620000,622900,622921', '3', '临夏县', 'mainland', '7');
INSERT INTO `area` VALUES ('622922', '622900', ',620000,622900,622922', '3', '康乐县', 'mainland', '7');
INSERT INTO `area` VALUES ('622923', '622900', ',620000,622900,622923', '3', '永靖县', 'mainland', '7');
INSERT INTO `area` VALUES ('622924', '622900', ',620000,622900,622924', '3', '广河县', 'mainland', '7');
INSERT INTO `area` VALUES ('622925', '622900', ',620000,622900,622925', '3', '和政县', 'mainland', '7');
INSERT INTO `area` VALUES ('622926', '622900', ',620000,622900,622926', '3', '东乡族自治县', 'mainland', '7');
INSERT INTO `area` VALUES ('622927', '622900', ',620000,622900,622927', '3', '积石山保安族东乡族撒拉族自治县', 'mainland', '7');
INSERT INTO `area` VALUES ('622928', '622900', ',620000,622900,622928', '3', '其它区', 'mainland', '7');
INSERT INTO `area` VALUES ('623000', '620000', ',620000,623000', '2', '甘南藏族自治州', 'mainland', '7');
INSERT INTO `area` VALUES ('623001', '623000', ',620000,623000,623001', '3', '合作市', 'mainland', '7');
INSERT INTO `area` VALUES ('623021', '623000', ',620000,623000,623021', '3', '临潭县', 'mainland', '7');
INSERT INTO `area` VALUES ('623022', '623000', ',620000,623000,623022', '3', '卓尼县', 'mainland', '7');
INSERT INTO `area` VALUES ('623023', '623000', ',620000,623000,623023', '3', '舟曲县', 'mainland', '7');
INSERT INTO `area` VALUES ('623024', '623000', ',620000,623000,623024', '3', '迭部县', 'mainland', '7');
INSERT INTO `area` VALUES ('623025', '623000', ',620000,623000,623025', '3', '玛曲县', 'mainland', '7');
INSERT INTO `area` VALUES ('623026', '623000', ',620000,623000,623026', '3', '碌曲县', 'mainland', '7');
INSERT INTO `area` VALUES ('623027', '623000', ',620000,623000,623027', '3', '夏河县', 'mainland', '7');
INSERT INTO `area` VALUES ('623028', '623000', ',620000,623000,623028', '3', '其它区', 'mainland', '7');
INSERT INTO `area` VALUES ('630000', '100000', ',630000', '1', '青海省', 'mainland', '7');
INSERT INTO `area` VALUES ('630100', '630000', ',630000,630100', '2', '西宁市', 'mainland', '7');
INSERT INTO `area` VALUES ('630102', '630100', ',630000,630100,630102', '3', '城东区', 'mainland', '7');
INSERT INTO `area` VALUES ('630103', '630100', ',630000,630100,630103', '3', '城中区', 'mainland', '7');
INSERT INTO `area` VALUES ('630104', '630100', ',630000,630100,630104', '3', '城西区', 'mainland', '7');
INSERT INTO `area` VALUES ('630105', '630100', ',630000,630100,630105', '3', '城北区', 'mainland', '7');
INSERT INTO `area` VALUES ('630121', '630100', ',630000,630100,630121', '3', '大通回族土族自治县', 'mainland', '7');
INSERT INTO `area` VALUES ('630122', '630100', ',630000,630100,630122', '3', '湟中县', 'mainland', '7');
INSERT INTO `area` VALUES ('630123', '630100', ',630000,630100,630123', '3', '湟源县', 'mainland', '7');
INSERT INTO `area` VALUES ('630124', '630100', ',630000,630100,630124', '3', '其它区', 'mainland', '7');
INSERT INTO `area` VALUES ('632100', '630000', ',630000,632100', '2', '海东地区', 'mainland', '7');
INSERT INTO `area` VALUES ('632121', '632100', ',630000,632100,632121', '3', '平安县', 'mainland', '7');
INSERT INTO `area` VALUES ('632122', '632100', ',630000,632100,632122', '3', '民和回族土族自治县', 'mainland', '7');
INSERT INTO `area` VALUES ('632123', '632100', ',630000,632100,632123', '3', '乐都县', 'mainland', '7');
INSERT INTO `area` VALUES ('632126', '632100', ',630000,632100,632126', '3', '互助土族自治县', 'mainland', '7');
INSERT INTO `area` VALUES ('632127', '632100', ',630000,632100,632127', '3', '化隆回族自治县', 'mainland', '7');
INSERT INTO `area` VALUES ('632128', '632100', ',630000,632100,632128', '3', '循化撒拉族自治县', 'mainland', '7');
INSERT INTO `area` VALUES ('632129', '632100', ',630000,632100,632129', '3', '其它区', 'mainland', '7');
INSERT INTO `area` VALUES ('632200', '630000', ',630000,632200', '2', '海北藏族自治州', 'mainland', '7');
INSERT INTO `area` VALUES ('632221', '632200', ',630000,632200,632221', '3', '门源回族自治县', 'mainland', '7');
INSERT INTO `area` VALUES ('632222', '632200', ',630000,632200,632222', '3', '祁连县', 'mainland', '7');
INSERT INTO `area` VALUES ('632223', '632200', ',630000,632200,632223', '3', '海晏县', 'mainland', '7');
INSERT INTO `area` VALUES ('632224', '632200', ',630000,632200,632224', '3', '刚察县', 'mainland', '7');
INSERT INTO `area` VALUES ('632225', '632200', ',630000,632200,632225', '3', '其它区', 'mainland', '7');
INSERT INTO `area` VALUES ('632300', '630000', ',630000,632300', '2', '黄南藏族自治州', 'mainland', '7');
INSERT INTO `area` VALUES ('632321', '632300', ',630000,632300,632321', '3', '同仁县', 'mainland', '7');
INSERT INTO `area` VALUES ('632322', '632300', ',630000,632300,632322', '3', '尖扎县', 'mainland', '7');
INSERT INTO `area` VALUES ('632323', '632300', ',630000,632300,632323', '3', '泽库县', 'mainland', '7');
INSERT INTO `area` VALUES ('632324', '632300', ',630000,632300,632324', '3', '河南蒙古族自治县', 'mainland', '7');
INSERT INTO `area` VALUES ('632325', '632300', ',630000,632300,632325', '3', '其它区', 'mainland', '7');
INSERT INTO `area` VALUES ('632500', '630000', ',630000,632500', '2', '海南藏族自治州', 'mainland', '7');
INSERT INTO `area` VALUES ('632521', '632500', ',630000,632500,632521', '3', '共和县', 'mainland', '7');
INSERT INTO `area` VALUES ('632522', '632500', ',630000,632500,632522', '3', '同德县', 'mainland', '7');
INSERT INTO `area` VALUES ('632523', '632500', ',630000,632500,632523', '3', '贵德县', 'mainland', '7');
INSERT INTO `area` VALUES ('632524', '632500', ',630000,632500,632524', '3', '兴海县', 'mainland', '7');
INSERT INTO `area` VALUES ('632525', '632500', ',630000,632500,632525', '3', '贵南县', 'mainland', '7');
INSERT INTO `area` VALUES ('632526', '632500', ',630000,632500,632526', '3', '其它区', 'mainland', '7');
INSERT INTO `area` VALUES ('632600', '630000', ',630000,632600', '2', '果洛藏族自治州', 'mainland', '7');
INSERT INTO `area` VALUES ('632621', '632600', ',630000,632600,632621', '3', '玛沁县', 'mainland', '7');
INSERT INTO `area` VALUES ('632622', '632600', ',630000,632600,632622', '3', '班玛县', 'mainland', '7');
INSERT INTO `area` VALUES ('632623', '632600', ',630000,632600,632623', '3', '甘德县', 'mainland', '7');
INSERT INTO `area` VALUES ('632624', '632600', ',630000,632600,632624', '3', '达日县', 'mainland', '7');
INSERT INTO `area` VALUES ('632625', '632600', ',630000,632600,632625', '3', '久治县', 'mainland', '7');
INSERT INTO `area` VALUES ('632626', '632600', ',630000,632600,632626', '3', '玛多县', 'mainland', '7');
INSERT INTO `area` VALUES ('632627', '632600', ',630000,632600,632627', '3', '其它区', 'mainland', '7');
INSERT INTO `area` VALUES ('632700', '630000', ',630000,632700', '2', '玉树藏族自治州', 'mainland', '7');
INSERT INTO `area` VALUES ('632721', '632700', ',630000,632700,632721', '3', '玉树县', 'mainland', '7');
INSERT INTO `area` VALUES ('632722', '632700', ',630000,632700,632722', '3', '杂多县', 'mainland', '7');
INSERT INTO `area` VALUES ('632723', '632700', ',630000,632700,632723', '3', '称多县', 'mainland', '7');
INSERT INTO `area` VALUES ('632724', '632700', ',630000,632700,632724', '3', '治多县', 'mainland', '7');
INSERT INTO `area` VALUES ('632725', '632700', ',630000,632700,632725', '3', '囊谦县', 'mainland', '7');
INSERT INTO `area` VALUES ('632726', '632700', ',630000,632700,632726', '3', '曲麻莱县', 'mainland', '7');
INSERT INTO `area` VALUES ('632727', '632700', ',630000,632700,632727', '3', '其它区', 'mainland', '7');
INSERT INTO `area` VALUES ('632800', '630000', ',630000,632800', '2', '海西蒙古族藏族自治州', 'mainland', '7');
INSERT INTO `area` VALUES ('632801', '632800', ',630000,632800,632801', '3', '格尔木市', 'mainland', '7');
INSERT INTO `area` VALUES ('632802', '632800', ',630000,632800,632802', '3', '德令哈市', 'mainland', '7');
INSERT INTO `area` VALUES ('632821', '632800', ',630000,632800,632821', '3', '乌兰县', 'mainland', '7');
INSERT INTO `area` VALUES ('632822', '632800', ',630000,632800,632822', '3', '都兰县', 'mainland', '7');
INSERT INTO `area` VALUES ('632823', '632800', ',630000,632800,632823', '3', '天峻县', 'mainland', '7');
INSERT INTO `area` VALUES ('632824', '632800', ',630000,632800,632824', '3', '其它区', 'mainland', '7');
INSERT INTO `area` VALUES ('640000', '100000', ',640000', '1', '宁夏回族自治区', 'mainland', '7');
INSERT INTO `area` VALUES ('640100', '640000', ',640000,640100', '2', '银川市', 'mainland', '7');
INSERT INTO `area` VALUES ('640104', '640100', ',640000,640100,640104', '3', '兴庆区', 'mainland', '7');
INSERT INTO `area` VALUES ('640105', '640100', ',640000,640100,640105', '3', '西夏区', 'mainland', '7');
INSERT INTO `area` VALUES ('640106', '640100', ',640000,640100,640106', '3', '金凤区', 'mainland', '7');
INSERT INTO `area` VALUES ('640121', '640100', ',640000,640100,640121', '3', '永宁县', 'mainland', '7');
INSERT INTO `area` VALUES ('640122', '640100', ',640000,640100,640122', '3', '贺兰县', 'mainland', '7');
INSERT INTO `area` VALUES ('640181', '640100', ',640000,640100,640181', '3', '灵武市', 'mainland', '7');
INSERT INTO `area` VALUES ('640182', '640100', ',640000,640100,640182', '3', '其它区', 'mainland', '7');
INSERT INTO `area` VALUES ('640200', '640000', ',640000,640200', '2', '石嘴山市', 'mainland', '7');
INSERT INTO `area` VALUES ('640202', '640200', ',640000,640200,640202', '3', '大武口区', 'mainland', '7');
INSERT INTO `area` VALUES ('640205', '640200', ',640000,640200,640205', '3', '惠农区', 'mainland', '7');
INSERT INTO `area` VALUES ('640221', '640200', ',640000,640200,640221', '3', '平罗县', 'mainland', '7');
INSERT INTO `area` VALUES ('640222', '640200', ',640000,640200,640222', '3', '其它区', 'mainland', '7');
INSERT INTO `area` VALUES ('640300', '640000', ',640000,640300', '2', '吴忠市', 'mainland', '7');
INSERT INTO `area` VALUES ('640302', '640300', ',640000,640300,640302', '3', '利通区', 'mainland', '7');
INSERT INTO `area` VALUES ('640323', '640300', ',640000,640300,640323', '3', '盐池县', 'mainland', '7');
INSERT INTO `area` VALUES ('640324', '640300', ',640000,640300,640324', '3', '同心县', 'mainland', '7');
INSERT INTO `area` VALUES ('640381', '640300', ',640000,640300,640381', '3', '青铜峡市', 'mainland', '7');
INSERT INTO `area` VALUES ('640382', '640300', ',640000,640300,640382', '3', '其它区', 'mainland', '7');
INSERT INTO `area` VALUES ('640400', '640000', ',640000,640400', '2', '固原市', 'mainland', '7');
INSERT INTO `area` VALUES ('640402', '640400', ',640000,640400,640402', '3', '原州区', 'mainland', '7');
INSERT INTO `area` VALUES ('640422', '640400', ',640000,640400,640422', '3', '西吉县', 'mainland', '7');
INSERT INTO `area` VALUES ('640423', '640400', ',640000,640400,640423', '3', '隆德县', 'mainland', '7');
INSERT INTO `area` VALUES ('640424', '640400', ',640000,640400,640424', '3', '泾源县', 'mainland', '7');
INSERT INTO `area` VALUES ('640425', '640400', ',640000,640400,640425', '3', '彭阳县', 'mainland', '7');
INSERT INTO `area` VALUES ('640426', '640400', ',640000,640400,640426', '3', '其它区', 'mainland', '7');
INSERT INTO `area` VALUES ('640500', '640000', ',640000,640500', '2', '中卫市', 'mainland', '7');
INSERT INTO `area` VALUES ('640502', '640500', ',640000,640500,640502', '3', '沙坡头区', 'mainland', '7');
INSERT INTO `area` VALUES ('640521', '640500', ',640000,640500,640521', '3', '中宁县', 'mainland', '7');
INSERT INTO `area` VALUES ('640522', '640500', ',640000,640500,640522', '3', '海原县', 'mainland', '7');
INSERT INTO `area` VALUES ('640523', '640500', ',640000,640500,640523', '3', '其它区', 'mainland', '7');
INSERT INTO `area` VALUES ('650000', '100000', ',650000', '1', '新疆维吾尔自治区', 'mainland', '7');
INSERT INTO `area` VALUES ('650100', '650000', ',650000,650100', '2', '乌鲁木齐市', 'mainland', '7');
INSERT INTO `area` VALUES ('650102', '650100', ',650000,650100,650102', '3', '天山区', 'mainland', '7');
INSERT INTO `area` VALUES ('650103', '650100', ',650000,650100,650103', '3', '沙依巴克区', 'mainland', '7');
INSERT INTO `area` VALUES ('650104', '650100', ',650000,650100,650104', '3', '新市区', 'mainland', '7');
INSERT INTO `area` VALUES ('650105', '650100', ',650000,650100,650105', '3', '水磨沟区', 'mainland', '7');
INSERT INTO `area` VALUES ('650106', '650100', ',650000,650100,650106', '3', '头屯河区', 'mainland', '7');
INSERT INTO `area` VALUES ('650107', '650100', ',650000,650100,650107', '3', '达坂城区', 'mainland', '7');
INSERT INTO `area` VALUES ('650108', '650100', ',650000,650100,650108', '3', '东山区', 'mainland', '7');
INSERT INTO `area` VALUES ('650109', '650100', ',650000,650100,650109', '3', '米东区', 'mainland', '7');
INSERT INTO `area` VALUES ('650121', '650100', ',650000,650100,650121', '3', '乌鲁木齐县', 'mainland', '7');
INSERT INTO `area` VALUES ('650122', '650100', ',650000,650100,650122', '3', '其它区', 'mainland', '7');
INSERT INTO `area` VALUES ('650200', '650000', ',650000,650200', '2', '克拉玛依市', 'mainland', '7');
INSERT INTO `area` VALUES ('650202', '650200', ',650000,650200,650202', '3', '独山子区', 'mainland', '7');
INSERT INTO `area` VALUES ('650203', '650200', ',650000,650200,650203', '3', '克拉玛依区', 'mainland', '7');
INSERT INTO `area` VALUES ('650204', '650200', ',650000,650200,650204', '3', '白碱滩区', 'mainland', '7');
INSERT INTO `area` VALUES ('650205', '650200', ',650000,650200,650205', '3', '乌尔禾区', 'mainland', '7');
INSERT INTO `area` VALUES ('650206', '650200', ',650000,650200,650206', '3', '其它区', 'mainland', '7');
INSERT INTO `area` VALUES ('652100', '650000', ',650000,652100', '2', '吐鲁番地区', 'mainland', '7');
INSERT INTO `area` VALUES ('652101', '652100', ',650000,652100,652101', '3', '吐鲁番市', 'mainland', '7');
INSERT INTO `area` VALUES ('652122', '652100', ',650000,652100,652122', '3', '鄯善县', 'mainland', '7');
INSERT INTO `area` VALUES ('652123', '652100', ',650000,652100,652123', '3', '托克逊县', 'mainland', '7');
INSERT INTO `area` VALUES ('652124', '652100', ',650000,652100,652124', '3', '其它区', 'mainland', '7');
INSERT INTO `area` VALUES ('652200', '650000', ',650000,652200', '2', '哈密地区', 'mainland', '7');
INSERT INTO `area` VALUES ('652201', '652200', ',650000,652200,652201', '3', '哈密市', 'mainland', '7');
INSERT INTO `area` VALUES ('652222', '652200', ',650000,652200,652222', '3', '巴里坤哈萨克自治县', 'mainland', '7');
INSERT INTO `area` VALUES ('652223', '652200', ',650000,652200,652223', '3', '伊吾县', 'mainland', '7');
INSERT INTO `area` VALUES ('652224', '652200', ',650000,652200,652224', '3', '其它区', 'mainland', '7');
INSERT INTO `area` VALUES ('652300', '650000', ',650000,652300', '2', '昌吉回族自治州', 'mainland', '7');
INSERT INTO `area` VALUES ('652301', '652300', ',650000,652300,652301', '3', '昌吉市', 'mainland', '7');
INSERT INTO `area` VALUES ('652302', '652300', ',650000,652300,652302', '3', '阜康市', 'mainland', '7');
INSERT INTO `area` VALUES ('652303', '652300', ',650000,652300,652303', '3', '米泉市', 'mainland', '7');
INSERT INTO `area` VALUES ('652323', '652300', ',650000,652300,652323', '3', '呼图壁县', 'mainland', '7');
INSERT INTO `area` VALUES ('652324', '652300', ',650000,652300,652324', '3', '玛纳斯县', 'mainland', '7');
INSERT INTO `area` VALUES ('652325', '652300', ',650000,652300,652325', '3', '奇台县', 'mainland', '7');
INSERT INTO `area` VALUES ('652327', '652300', ',650000,652300,652327', '3', '吉木萨尔县', 'mainland', '7');
INSERT INTO `area` VALUES ('652328', '652300', ',650000,652300,652328', '3', '木垒哈萨克自治县', 'mainland', '7');
INSERT INTO `area` VALUES ('652329', '652300', ',650000,652300,652329', '3', '其它区', 'mainland', '7');
INSERT INTO `area` VALUES ('652700', '650000', ',650000,652700', '2', '博尔塔拉蒙古自治州', 'mainland', '7');
INSERT INTO `area` VALUES ('652701', '652700', ',650000,652700,652701', '3', '博乐市', 'mainland', '7');
INSERT INTO `area` VALUES ('652722', '652700', ',650000,652700,652722', '3', '精河县', 'mainland', '7');
INSERT INTO `area` VALUES ('652723', '652700', ',650000,652700,652723', '3', '温泉县', 'mainland', '7');
INSERT INTO `area` VALUES ('652724', '652700', ',650000,652700,652724', '3', '其它区', 'mainland', '7');
INSERT INTO `area` VALUES ('652800', '650000', ',650000,652800', '2', '巴音郭楞蒙古自治州', 'mainland', '7');
INSERT INTO `area` VALUES ('652801', '652800', ',650000,652800,652801', '3', '库尔勒市', 'mainland', '7');
INSERT INTO `area` VALUES ('652822', '652800', ',650000,652800,652822', '3', '轮台县', 'mainland', '7');
INSERT INTO `area` VALUES ('652823', '652800', ',650000,652800,652823', '3', '尉犁县', 'mainland', '7');
INSERT INTO `area` VALUES ('652824', '652800', ',650000,652800,652824', '3', '若羌县', 'mainland', '7');
INSERT INTO `area` VALUES ('652825', '652800', ',650000,652800,652825', '3', '且末县', 'mainland', '7');
INSERT INTO `area` VALUES ('652826', '652800', ',650000,652800,652826', '3', '焉耆回族自治县', 'mainland', '7');
INSERT INTO `area` VALUES ('652827', '652800', ',650000,652800,652827', '3', '和静县', 'mainland', '7');
INSERT INTO `area` VALUES ('652828', '652800', ',650000,652800,652828', '3', '和硕县', 'mainland', '7');
INSERT INTO `area` VALUES ('652829', '652800', ',650000,652800,652829', '3', '博湖县', 'mainland', '7');
INSERT INTO `area` VALUES ('652830', '652800', ',650000,652800,652830', '3', '其它区', 'mainland', '7');
INSERT INTO `area` VALUES ('652900', '650000', ',650000,652900', '2', '阿克苏地区', 'mainland', '7');
INSERT INTO `area` VALUES ('652901', '652900', ',650000,652900,652901', '3', '阿克苏市', 'mainland', '7');
INSERT INTO `area` VALUES ('652922', '652900', ',650000,652900,652922', '3', '温宿县', 'mainland', '7');
INSERT INTO `area` VALUES ('652923', '652900', ',650000,652900,652923', '3', '库车县', 'mainland', '7');
INSERT INTO `area` VALUES ('652924', '652900', ',650000,652900,652924', '3', '沙雅县', 'mainland', '7');
INSERT INTO `area` VALUES ('652925', '652900', ',650000,652900,652925', '3', '新和县', 'mainland', '7');
INSERT INTO `area` VALUES ('652926', '652900', ',650000,652900,652926', '3', '拜城县', 'mainland', '7');
INSERT INTO `area` VALUES ('652927', '652900', ',650000,652900,652927', '3', '乌什县', 'mainland', '7');
INSERT INTO `area` VALUES ('652928', '652900', ',650000,652900,652928', '3', '阿瓦提县', 'mainland', '7');
INSERT INTO `area` VALUES ('652929', '652900', ',650000,652900,652929', '3', '柯坪县', 'mainland', '7');
INSERT INTO `area` VALUES ('652930', '652900', ',650000,652900,652930', '3', '其它区', 'mainland', '7');
INSERT INTO `area` VALUES ('653000', '650000', ',650000,653000', '2', '克孜勒苏柯尔克孜自治州', 'mainland', '7');
INSERT INTO `area` VALUES ('653001', '653000', ',650000,653000,653001', '3', '阿图什市', 'mainland', '7');
INSERT INTO `area` VALUES ('653022', '653000', ',650000,653000,653022', '3', '阿克陶县', 'mainland', '7');
INSERT INTO `area` VALUES ('653023', '653000', ',650000,653000,653023', '3', '阿合奇县', 'mainland', '7');
INSERT INTO `area` VALUES ('653024', '653000', ',650000,653000,653024', '3', '乌恰县', 'mainland', '7');
INSERT INTO `area` VALUES ('653025', '653000', ',650000,653000,653025', '3', '其它区', 'mainland', '7');
INSERT INTO `area` VALUES ('653100', '650000', ',650000,653100', '2', '喀什地区', 'mainland', '7');
INSERT INTO `area` VALUES ('653101', '653100', ',650000,653100,653101', '3', '喀什市', 'mainland', '7');
INSERT INTO `area` VALUES ('653121', '653100', ',650000,653100,653121', '3', '疏附县', 'mainland', '7');
INSERT INTO `area` VALUES ('653122', '653100', ',650000,653100,653122', '3', '疏勒县', 'mainland', '7');
INSERT INTO `area` VALUES ('653123', '653100', ',650000,653100,653123', '3', '英吉沙县', 'mainland', '7');
INSERT INTO `area` VALUES ('653124', '653100', ',650000,653100,653124', '3', '泽普县', 'mainland', '7');
INSERT INTO `area` VALUES ('653125', '653100', ',650000,653100,653125', '3', '莎车县', 'mainland', '7');
INSERT INTO `area` VALUES ('653126', '653100', ',650000,653100,653126', '3', '叶城县', 'mainland', '7');
INSERT INTO `area` VALUES ('653127', '653100', ',650000,653100,653127', '3', '麦盖提县', 'mainland', '7');
INSERT INTO `area` VALUES ('653128', '653100', ',650000,653100,653128', '3', '岳普湖县', 'mainland', '7');
INSERT INTO `area` VALUES ('653129', '653100', ',650000,653100,653129', '3', '伽师县', 'mainland', '7');
INSERT INTO `area` VALUES ('653130', '653100', ',650000,653100,653130', '3', '巴楚县', 'mainland', '7');
INSERT INTO `area` VALUES ('653131', '653100', ',650000,653100,653131', '3', '塔什库尔干塔吉克自治县', 'mainland', '7');
INSERT INTO `area` VALUES ('653132', '653100', ',650000,653100,653132', '3', '其它区', 'mainland', '7');
INSERT INTO `area` VALUES ('653200', '650000', ',650000,653200', '2', '和田地区', 'mainland', '7');
INSERT INTO `area` VALUES ('653201', '653200', ',650000,653200,653201', '3', '和田市', 'mainland', '7');
INSERT INTO `area` VALUES ('653221', '653200', ',650000,653200,653221', '3', '和田县', 'mainland', '7');
INSERT INTO `area` VALUES ('653222', '653200', ',650000,653200,653222', '3', '墨玉县', 'mainland', '7');
INSERT INTO `area` VALUES ('653223', '653200', ',650000,653200,653223', '3', '皮山县', 'mainland', '7');
INSERT INTO `area` VALUES ('653224', '653200', ',650000,653200,653224', '3', '洛浦县', 'mainland', '7');
INSERT INTO `area` VALUES ('653225', '653200', ',650000,653200,653225', '3', '策勒县', 'mainland', '7');
INSERT INTO `area` VALUES ('653226', '653200', ',650000,653200,653226', '3', '于田县', 'mainland', '7');
INSERT INTO `area` VALUES ('653227', '653200', ',650000,653200,653227', '3', '民丰县', 'mainland', '7');
INSERT INTO `area` VALUES ('653228', '653200', ',650000,653200,653228', '3', '其它区', 'mainland', '7');
INSERT INTO `area` VALUES ('654000', '650000', ',650000,654000', '2', '伊犁哈萨克自治州', 'mainland', '7');
INSERT INTO `area` VALUES ('654002', '654000', ',650000,654000,654002', '3', '伊宁市', 'mainland', '7');
INSERT INTO `area` VALUES ('654003', '654000', ',650000,654000,654003', '3', '奎屯市', 'mainland', '7');
INSERT INTO `area` VALUES ('654021', '654000', ',650000,654000,654021', '3', '伊宁县', 'mainland', '7');
INSERT INTO `area` VALUES ('654022', '654000', ',650000,654000,654022', '3', '察布查尔锡伯自治县', 'mainland', '7');
INSERT INTO `area` VALUES ('654023', '654000', ',650000,654000,654023', '3', '霍城县', 'mainland', '7');
INSERT INTO `area` VALUES ('654024', '654000', ',650000,654000,654024', '3', '巩留县', 'mainland', '7');
INSERT INTO `area` VALUES ('654025', '654000', ',650000,654000,654025', '3', '新源县', 'mainland', '7');
INSERT INTO `area` VALUES ('654026', '654000', ',650000,654000,654026', '3', '昭苏县', 'mainland', '7');
INSERT INTO `area` VALUES ('654027', '654000', ',650000,654000,654027', '3', '特克斯县', 'mainland', '7');
INSERT INTO `area` VALUES ('654028', '654000', ',650000,654000,654028', '3', '尼勒克县', 'mainland', '7');
INSERT INTO `area` VALUES ('654029', '654000', ',650000,654000,654029', '3', '其它区', 'mainland', '7');
INSERT INTO `area` VALUES ('654200', '650000', ',650000,654200', '2', '塔城地区', 'mainland', '7');
INSERT INTO `area` VALUES ('654201', '654200', ',650000,654200,654201', '3', '塔城市', 'mainland', '7');
INSERT INTO `area` VALUES ('654202', '654200', ',650000,654200,654202', '3', '乌苏市', 'mainland', '7');
INSERT INTO `area` VALUES ('654221', '654200', ',650000,654200,654221', '3', '额敏县', 'mainland', '7');
INSERT INTO `area` VALUES ('654223', '654200', ',650000,654200,654223', '3', '沙湾县', 'mainland', '7');
INSERT INTO `area` VALUES ('654224', '654200', ',650000,654200,654224', '3', '托里县', 'mainland', '7');
INSERT INTO `area` VALUES ('654225', '654200', ',650000,654200,654225', '3', '裕民县', 'mainland', '7');
INSERT INTO `area` VALUES ('654226', '654200', ',650000,654200,654226', '3', '和布克赛尔蒙古自治县', 'mainland', '7');
INSERT INTO `area` VALUES ('654227', '654200', ',650000,654200,654227', '3', '其它区', 'mainland', '7');
INSERT INTO `area` VALUES ('654300', '650000', ',650000,654300', '2', '阿勒泰地区', 'mainland', '7');
INSERT INTO `area` VALUES ('654301', '654300', ',650000,654300,654301', '3', '阿勒泰市', 'mainland', '7');
INSERT INTO `area` VALUES ('654321', '654300', ',650000,654300,654321', '3', '布尔津县', 'mainland', '7');
INSERT INTO `area` VALUES ('654322', '654300', ',650000,654300,654322', '3', '富蕴县', 'mainland', '7');
INSERT INTO `area` VALUES ('654323', '654300', ',650000,654300,654323', '3', '福海县', 'mainland', '7');
INSERT INTO `area` VALUES ('654324', '654300', ',650000,654300,654324', '3', '哈巴河县', 'mainland', '7');
INSERT INTO `area` VALUES ('654325', '654300', ',650000,654300,654325', '3', '青河县', 'mainland', '7');
INSERT INTO `area` VALUES ('654326', '654300', ',650000,654300,654326', '3', '吉木乃县', 'mainland', '7');
INSERT INTO `area` VALUES ('654327', '654300', ',650000,654300,654327', '3', '其它区', 'mainland', '7');
INSERT INTO `area` VALUES ('659001', '650000', ',650000,659001', '3', '石河子市', 'mainland', '7');
INSERT INTO `area` VALUES ('659002', '650000', ',650000,659002', '3', '阿拉尔市', 'mainland', '7');
INSERT INTO `area` VALUES ('659003', '650000', ',650000,659003', '3', '图木舒克市', 'mainland', '7');
INSERT INTO `area` VALUES ('659004', '650000', ',650000,659004', '3', '五家渠市', 'mainland', '7');
INSERT INTO `area` VALUES ('710000', '100000', ',710000', '1', '台湾省', 'mainland', '0');
INSERT INTO `area` VALUES ('710100', '710000', ',710000,710100', '2', '台北市', 'mainland', '0');
INSERT INTO `area` VALUES ('710101', '710100', ',710000,710100,710101', '3', '中正区', 'mainland', '0');
INSERT INTO `area` VALUES ('710102', '710100', ',710000,710100,710102', '3', '大同区', 'mainland', '0');
INSERT INTO `area` VALUES ('710103', '710100', ',710000,710100,710103', '3', '中山区', 'mainland', '0');
INSERT INTO `area` VALUES ('710104', '710100', ',710000,710100,710104', '3', '松山区', 'mainland', '0');
INSERT INTO `area` VALUES ('710105', '710100', ',710000,710100,710105', '3', '大安区', 'mainland', '0');
INSERT INTO `area` VALUES ('710106', '710100', ',710000,710100,710106', '3', '万华区', 'mainland', '0');
INSERT INTO `area` VALUES ('710107', '710100', ',710000,710100,710107', '3', '信义区', 'mainland', '0');
INSERT INTO `area` VALUES ('710108', '710100', ',710000,710100,710108', '3', '士林区', 'mainland', '0');
INSERT INTO `area` VALUES ('710109', '710100', ',710000,710100,710109', '3', '北投区', 'mainland', '0');
INSERT INTO `area` VALUES ('710110', '710100', ',710000,710100,710110', '3', '内湖区', 'mainland', '0');
INSERT INTO `area` VALUES ('710111', '710100', ',710000,710100,710111', '3', '南港区', 'mainland', '0');
INSERT INTO `area` VALUES ('710112', '710100', ',710000,710100,710112', '3', '文山区', 'mainland', '0');
INSERT INTO `area` VALUES ('710113', '710100', ',710000,710100,710113', '3', '其它区', 'mainland', '0');
INSERT INTO `area` VALUES ('710200', '710000', ',710000,710200', '2', '高雄市', 'mainland', '0');
INSERT INTO `area` VALUES ('710201', '710200', ',710000,710200,710201', '3', '新兴区', 'mainland', '0');
INSERT INTO `area` VALUES ('710202', '710200', ',710000,710200,710202', '3', '前金区', 'mainland', '0');
INSERT INTO `area` VALUES ('710203', '710200', ',710000,710200,710203', '3', '芩雅区', 'mainland', '0');
INSERT INTO `area` VALUES ('710204', '710200', ',710000,710200,710204', '3', '盐埕区', 'mainland', '0');
INSERT INTO `area` VALUES ('710205', '710200', ',710000,710200,710205', '3', '鼓山区', 'mainland', '0');
INSERT INTO `area` VALUES ('710206', '710200', ',710000,710200,710206', '3', '旗津区', 'mainland', '0');
INSERT INTO `area` VALUES ('710207', '710200', ',710000,710200,710207', '3', '前镇区', 'mainland', '0');
INSERT INTO `area` VALUES ('710208', '710200', ',710000,710200,710208', '3', '三民区', 'mainland', '0');
INSERT INTO `area` VALUES ('710209', '710200', ',710000,710200,710209', '3', '左营区', 'mainland', '0');
INSERT INTO `area` VALUES ('710210', '710200', ',710000,710200,710210', '3', '楠梓区', 'mainland', '0');
INSERT INTO `area` VALUES ('710211', '710200', ',710000,710200,710211', '3', '小港区', 'mainland', '0');
INSERT INTO `area` VALUES ('710212', '710200', ',710000,710200,710212', '3', '其它区', 'mainland', '0');
INSERT INTO `area` VALUES ('710300', '710000', ',710000,710300', '2', '台南市', 'mainland', '0');
INSERT INTO `area` VALUES ('710301', '710300', ',710000,710300,710301', '3', '中西区', 'mainland', '0');
INSERT INTO `area` VALUES ('710302', '710300', ',710000,710300,710302', '3', '东区', 'mainland', '0');
INSERT INTO `area` VALUES ('710303', '710300', ',710000,710300,710303', '3', '南区', 'mainland', '0');
INSERT INTO `area` VALUES ('710304', '710300', ',710000,710300,710304', '3', '北区', 'mainland', '0');
INSERT INTO `area` VALUES ('710305', '710300', ',710000,710300,710305', '3', '安平区', 'mainland', '0');
INSERT INTO `area` VALUES ('710306', '710300', ',710000,710300,710306', '3', '安南区', 'mainland', '0');
INSERT INTO `area` VALUES ('710307', '710300', ',710000,710300,710307', '3', '其它区', 'mainland', '0');
INSERT INTO `area` VALUES ('710400', '710000', ',710000,710400', '2', '台中市', 'mainland', '0');
INSERT INTO `area` VALUES ('710401', '710400', ',710000,710400,710401', '3', '中区', 'mainland', '0');
INSERT INTO `area` VALUES ('710402', '710400', ',710000,710400,710402', '3', '东区', 'mainland', '0');
INSERT INTO `area` VALUES ('710403', '710400', ',710000,710400,710403', '3', '南区', 'mainland', '0');
INSERT INTO `area` VALUES ('710404', '710400', ',710000,710400,710404', '3', '西区', 'mainland', '0');
INSERT INTO `area` VALUES ('710405', '710400', ',710000,710400,710405', '3', '北区', 'mainland', '0');
INSERT INTO `area` VALUES ('710406', '710400', ',710000,710400,710406', '3', '北屯区', 'mainland', '0');
INSERT INTO `area` VALUES ('710407', '710400', ',710000,710400,710407', '3', '西屯区', 'mainland', '0');
INSERT INTO `area` VALUES ('710408', '710400', ',710000,710400,710408', '3', '南屯区', 'mainland', '0');
INSERT INTO `area` VALUES ('710409', '710400', ',710000,710400,710409', '3', '其它区', 'mainland', '0');
INSERT INTO `area` VALUES ('710500', '710000', ',710000,710500', '2', '金门县', 'mainland', '0');
INSERT INTO `area` VALUES ('710600', '710000', ',710000,710600', '2', '南投县', 'mainland', '0');
INSERT INTO `area` VALUES ('710700', '710000', ',710000,710700', '2', '基隆市', 'mainland', '0');
INSERT INTO `area` VALUES ('710701', '710700', ',710000,710700,710701', '3', '仁爱区', 'mainland', '0');
INSERT INTO `area` VALUES ('710702', '710700', ',710000,710700,710702', '3', '信义区', 'mainland', '0');
INSERT INTO `area` VALUES ('710703', '710700', ',710000,710700,710703', '3', '中正区', 'mainland', '0');
INSERT INTO `area` VALUES ('710704', '710700', ',710000,710700,710704', '3', '中山区', 'mainland', '0');
INSERT INTO `area` VALUES ('710705', '710700', ',710000,710700,710705', '3', '安乐区', 'mainland', '0');
INSERT INTO `area` VALUES ('710706', '710700', ',710000,710700,710706', '3', '暖暖区', 'mainland', '0');
INSERT INTO `area` VALUES ('710707', '710700', ',710000,710700,710707', '3', '七堵区', 'mainland', '0');
INSERT INTO `area` VALUES ('710708', '710700', ',710000,710700,710708', '3', '其它区', 'mainland', '0');
INSERT INTO `area` VALUES ('710800', '710000', ',710000,710800', '2', '新竹市', 'mainland', '0');
INSERT INTO `area` VALUES ('710801', '710800', ',710000,710800,710801', '3', '东区', 'mainland', '0');
INSERT INTO `area` VALUES ('710802', '710800', ',710000,710800,710802', '3', '北区', 'mainland', '0');
INSERT INTO `area` VALUES ('710803', '710800', ',710000,710800,710803', '3', '香山区', 'mainland', '0');
INSERT INTO `area` VALUES ('710804', '710800', ',710000,710800,710804', '3', '其它区', 'mainland', '0');
INSERT INTO `area` VALUES ('710900', '710000', ',710000,710900', '2', '嘉义市', 'mainland', '0');
INSERT INTO `area` VALUES ('710901', '710900', ',710000,710900,710901', '3', '东区', 'mainland', '0');
INSERT INTO `area` VALUES ('710902', '710900', ',710000,710900,710902', '3', '西区', 'mainland', '0');
INSERT INTO `area` VALUES ('710903', '710900', ',710000,710900,710903', '3', '其它区', 'mainland', '0');
INSERT INTO `area` VALUES ('711100', '710000', ',710000,711100', '3', '台北县', 'mainland', '0');
INSERT INTO `area` VALUES ('711200', '710000', ',710000,711200', '3', '宜兰县', 'mainland', '0');
INSERT INTO `area` VALUES ('711300', '710000', ',710000,711300', '3', '新竹县', 'mainland', '0');
INSERT INTO `area` VALUES ('711400', '710000', ',710000,711400', '3', '桃园县', 'mainland', '0');
INSERT INTO `area` VALUES ('711500', '710000', ',710000,711500', '3', '苗栗县', 'mainland', '0');
INSERT INTO `area` VALUES ('711600', '710000', ',710000,711600', '3', '台中县', 'mainland', '0');
INSERT INTO `area` VALUES ('711700', '710000', ',710000,711700', '3', '彰化县', 'mainland', '0');
INSERT INTO `area` VALUES ('711900', '710000', ',710000,711900', '3', '嘉义县', 'mainland', '0');
INSERT INTO `area` VALUES ('712100', '710000', ',710000,712100', '3', '云林县', 'mainland', '0');
INSERT INTO `area` VALUES ('712200', '710000', ',710000,712200', '3', '台南县', 'mainland', '0');
INSERT INTO `area` VALUES ('712300', '710000', ',710000,712300', '3', '高雄县', 'mainland', '0');
INSERT INTO `area` VALUES ('712400', '710000', ',710000,712400', '3', '屏东县', 'mainland', '0');
INSERT INTO `area` VALUES ('712500', '710000', ',710000,712500', '3', '台东县', 'mainland', '0');
INSERT INTO `area` VALUES ('712600', '710000', ',710000,712600', '3', '花莲县', 'mainland', '0');
INSERT INTO `area` VALUES ('712700', '710000', ',710000,712700', '3', '澎湖县', 'mainland', '0');
INSERT INTO `area` VALUES ('810000', '100000', ',810000', '1', '香港特别行政区', 'mainland', '0');
INSERT INTO `area` VALUES ('810100', '810000', ',810000,810100', '2', '香港岛', 'mainland', '0');
INSERT INTO `area` VALUES ('810200', '810000', ',810000,810200', '2', '九龙', 'mainland', '0');
INSERT INTO `area` VALUES ('810300', '810000', ',810000,810300', '2', '新界', 'mainland', '0');
INSERT INTO `area` VALUES ('820000', '100000', ',820000', '1', '澳门特别行政区', 'mainland', '0');
INSERT INTO `area` VALUES ('820100', '820000', ',820000,820100', '2', '澳门半岛', 'mainland', '0');
INSERT INTO `area` VALUES ('820200', '820000', ',820000,820200', '2', '离岛', 'mainland', '0');
INSERT INTO `area` VALUES ('990000', '100000', ',990000', '1', '海外', 'mainland', '0');
INSERT INTO `area` VALUES ('990100', '990000', ',990000,990100', '2', '海外', 'mainland', '0');

-- ----------------------------
-- Table structure for `article`
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `article_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `url` varchar(100) NOT NULL,
  `pic_url` varchar(150) NOT NULL,
  `from` varchar(200) NOT NULL,
  `summary` text NOT NULL,
  `content` longtext NOT NULL,
  `views` int(11) NOT NULL,
  `create_time` int(11) NOT NULL,
  `update_time` int(11) NOT NULL,
  `language` varchar(45) NOT NULL,
  PRIMARY KEY (`article_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of article
-- ----------------------------
INSERT INTO `article` VALUES ('1', '11', '2', ' Sample blog post lorem ipsum dolor consectetuer ', '', '/yincart/basic/upload/article/image/20130515/20130515062329_92655.jpg', '本站', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. ', '<div class=\"article-body clearfix\">\r\n	<div id=\"article-content\">\r\n		<p>\r\n			<img src=\"http://cdn.shopify.com/s/files/1/0153/0849/files/slider4.jpg?799\" /> \r\n		</p>\r\n		<p>\r\n			Pellentesque habitant morbi tristique senectus et netus et malesuada \r\nfames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, \r\nultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam \r\negestas semper.&nbsp;\r\n		</p>\r\n		<p>\r\n			Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque \r\nsit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, \r\ncondimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum,\r\n elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis \r\ntempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. \r\nUt felis. Praesent dapibus, neque id cursus faucibus, tortor neque \r\negestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. \r\nNam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.\r\n		</p>\r\n		<ul>\r\n			<li>\r\n				Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, \r\neuismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.\r\n			</li>\r\n			<li>\r\n				Praesent dapibus, neque id cursus faucibus, tortor neque egestas \r\naugue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui \r\nmi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.\r\n			</li>\r\n			<li>\r\n				Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec \r\nconsectetuer ligula vulputate sem tristique cursus. Nam nulla quam, \r\ngravida non, commodo a, sodales sit amet, nisi.\r\n			</li>\r\n			<li>\r\n				Pellentesque fermentum dolor. Aliquam quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.\r\n			</li>\r\n		</ul>\r\n		<p>\r\n			Pellentesque habitant morbi tristique senectus et netus et malesuada \r\nfames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, \r\nultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam \r\negestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend \r\nleo.\r\n		</p>\r\n	</div>\r\n</div>', '0', '1370711049', '1389763317', 'en_us');
INSERT INTO `article` VALUES ('2', '11', '2', 'Open Day at Dianshan Lake', '', '', '本站', 'Open Day at Dianshan Lake', 'Open Day at Dianshan Lake', '0', '1370867424', '1370867424', 'en_us');
INSERT INTO `article` VALUES ('3', '11', '2', 'Open Day at Dianshan Lake', '', '', '本站', 'Open Day at Dianshan Lake', 'Open Day at Dianshan Lake', '0', '1370867434', '1370867434', 'en_us');
INSERT INTO `article` VALUES ('4', '11', '2', 'Open Day at Dianshan Lake', '', '', '本站', 'Open Day at Dianshan Lake', 'Open Day at Dianshan Lake', '0', '1370867442', '1370867442', 'en_us');
INSERT INTO `article` VALUES ('5', '11', '2', 'Open Day at Dianshan Lake', '', '', '本站', 'Open Day at Dianshan Lake', 'Open Day at Dianshan Lake', '0', '1370867451', '1370867451', 'en_us');
INSERT INTO `article` VALUES ('6', '11', '2', 'Open Day at Dianshan Lake', '', '', '本站', 'Open Day at Dianshan Lake', 'Open Day at Dianshan Lake', '0', '1370867458', '1370867458', 'en_us');
INSERT INTO `article` VALUES ('7', '11', '2', '啊啊啊啊', '', '/yincart/basic/upload/ad/20130429/bild15398.jpg', '本站', '啊啊啊啊', '啊啊啊啊', '0', '1371202526', '1389776524', 'en_us');
INSERT INTO `article` VALUES ('8', '11', '2', '为什么大家都要疯狂吐槽iOS 7的扁平化设计？', '', '', '本站', '所谓爱之深，责之切。苹果iOS 7的扁平设计一出现，就引爆了人们对它的疯狂吐槽。有人说它山寨Android，有人说它抄袭MIUI。没有了乔布斯的苹果，难道真要走上抄袭之路？', '<p style=\"color:#333333;font-family:Helvetica, Tahoma, Arial, sans-serif;font-size:14px;background-color:#FFFFFF;\">\r\n	由Jonathan Ive带领苹果公司市场部、公关部以及应用设计团队打造的iOS 7系统问世后，无论国内还是国外，“扁平化设计”一词瞬间火爆。而苹果此套UI设计，目前得到的评价可以说是“斥责多于赞扬”。\r\n</p>\r\n<p style=\"color:#333333;font-family:Helvetica, Tahoma, Arial, sans-serif;font-size:14px;background-color:#FFFFFF;text-align:center;\">\r\n	<a href=\"http://cms.csdnimg.cn/article/201306/14/51bb22c7945c5.jpg\" target=\"_blank\"><img src=\"http://cms.csdnimg.cn/article/201306/14/51bb22c7945c5.jpg\" border=\"0\" /></a> \r\n</p>\r\n<p style=\"color:#333333;font-family:Helvetica, Tahoma, Arial, sans-serif;font-size:14px;background-color:#FFFFFF;text-align:center;\">\r\n	苹果公司设计部资深副总裁 Jonathan Ive\r\n</p>\r\n<p style=\"color:#333333;font-family:Helvetica, Tahoma, Arial, sans-serif;font-size:14px;background-color:#FFFFFF;text-align:center;\">\r\n	<a href=\"http://cms.csdnimg.cn/article/201306/13/51b98109f1bef.jpg\" target=\"_blank\"><img src=\"http://cms.csdnimg.cn/article/201306/13/51b98109f1bef_middle.jpg\" border=\"0\" /></a> \r\n</p>\r\n<p style=\"color:#333333;font-family:Helvetica, Tahoma, Arial, sans-serif;font-size:14px;background-color:#FFFFFF;text-align:center;\">\r\n	iOS 7界面截图\r\n</p>\r\n<p style=\"color:#333333;font-family:Helvetica, Tahoma, Arial, sans-serif;font-size:14px;background-color:#FFFFFF;\">\r\n	<b>先来看看一些网友的吐槽：</b> \r\n</p>\r\n<p style=\"color:#333333;font-family:Helvetica, Tahoma, Arial, sans-serif;font-size:14px;background-color:#FFFFFF;\">\r\n	- “这两年苹果干的事就是缩小了iPad，拉长了iPhone，最后砸扁了icon。”\r\n</p>\r\n<p style=\"color:#333333;font-family:Helvetica, Tahoma, Arial, sans-serif;font-size:14px;background-color:#FFFFFF;\">\r\n	- “据说这次iOS 7扁平化是为了iPhone 6做准备的，iPhone6厚度将只有1毫米，如果iOS不扁平化，手机里的图标就装不下了。”\r\n</p>\r\n<p style=\"color:#333333;font-family:Helvetica, Tahoma, Arial, sans-serif;font-size:14px;background-color:#FFFFFF;\">\r\n	- “苹果iOS 7的那些功能Android早就有了。”\r\n</p>\r\n<p style=\"color:#333333;font-family:Helvetica, Tahoma, Arial, sans-serif;font-size:14px;background-color:#FFFFFF;\">\r\n	- 小米手机的粉丝认为，iOS 7的界面则彻底抄袭了MIUI。小米官方微博解答团还在微博上晒出iOS 7和MIUI界面的对比照。\r\n</p>\r\n<p style=\"color:#333333;font-family:Helvetica, Tahoma, Arial, sans-serif;font-size:14px;background-color:#FFFFFF;text-align:center;\">\r\n	<a href=\"http://cms.csdnimg.cn/article/201306/13/51b985d6dff2b.jpg\" target=\"_blank\"><img src=\"http://cms.csdnimg.cn/article/201306/13/51b985d6dff2b.jpg\" border=\"0\" /></a> \r\n</p>\r\n<p style=\"color:#333333;font-family:Helvetica, Tahoma, Arial, sans-serif;font-size:14px;background-color:#FFFFFF;text-align:center;\">\r\n	左：iOS 7、右：MIUI某主题\r\n</p>\r\n<p style=\"color:#333333;font-family:Helvetica, Tahoma, Arial, sans-serif;font-size:14px;background-color:#FFFFFF;\">\r\n	<b>扁平化设计的精髓：文字与信息阅读</b> \r\n</p>\r\n<p style=\"color:#333333;font-family:Helvetica, Tahoma, Arial, sans-serif;font-size:14px;background-color:#FFFFFF;\">\r\n	欲了解扁平化设计的精髓，先看看扁平化设计（Flat Design）的基本概念：<b>所谓“扁平化设计”指的是抛弃渐变、阴影、高光等拟物视觉效果，从而打造出一种看上去更“平”的界面。</b> \r\n</p>\r\n<p style=\"color:#333333;font-family:Helvetica, Tahoma, Arial, sans-serif;font-size:14px;background-color:#FFFFFF;\">\r\n	也就是说，扁平化设计是与拟物化（Skeuomorphism）设计相对的一个设计理念。扁平化设计最好的理解是“极简”，即强调运用最轻量、简单的设计来传递核心信息，强调通过对视觉焦点的引导来让用户快速地完成操作。\r\n</p>\r\n<p style=\"color:#333333;font-family:Helvetica, Tahoma, Arial, sans-serif;font-size:14px;background-color:#FFFFFF;\">\r\n	往简单了说，扁平化设计就是为了方便人们阅读。\r\n</p>\r\n<p style=\"color:#333333;font-family:Helvetica, Tahoma, Arial, sans-serif;font-size:14px;background-color:#FFFFFF;\">\r\n	作为扁平化设计的代表，<a href=\"http://www.csdn.net/article/2012-02-01/310896\" target=\"_blank\">微软Metro UI的设计灵感来自于机场和地铁指示牌</a>。正如这些交通指示牌的功能一样，Metro UI的设计风格旨在<b>帮助人们在短时间内快速找到需要的信息。</b> \r\n</p>\r\n<p style=\"color:#333333;font-family:Helvetica, Tahoma, Arial, sans-serif;font-size:14px;background-color:#FFFFFF;text-align:center;\">\r\n	<a href=\"http://cms.csdnimg.cn/article/201306/13/51b9865c4b459.jpg\" target=\"_blank\"><img src=\"http://cms.csdnimg.cn/article/201306/13/51b9865c4b459.jpg\" border=\"0\" /></a> \r\n</p>\r\n<p style=\"color:#333333;font-family:Helvetica, Tahoma, Arial, sans-serif;font-size:14px;background-color:#FFFFFF;text-align:center;\">\r\n	Metro UI设计灵感来源：金县都会交通局（King County METRO）站牌\r\n</p>\r\n<p style=\"color:#333333;font-family:Helvetica, Tahoma, Arial, sans-serif;font-size:14px;background-color:#FFFFFF;\">\r\n	与苹果大相径庭之处在于，微软的办公系列产品更受企业用户的青睐。企业用户对于电子邮件、通讯录、通话、短信、提醒、备忘等信息更为关注。面向企业用户的产品在这些方面也投入了更高的专注度。电邮、短信、通讯录等功能大多基于文字、数字等文本信息，视频、音频、图像或其他格式化数据出现的情况相对较少。Metro UI以较为简洁、较为平面化的设计风格突出显示这些文本信息，便于企业用户快速翻看、查找与阅读。\r\n</p>\r\n<p style=\"color:#333333;font-family:Helvetica, Tahoma, Arial, sans-serif;font-size:14px;background-color:#FFFFFF;\">\r\n	国内著名的文艺小清新网站豆瓣采用扁平化设计理念，以白色为主背景色，重点突出文字信息。使得用户更容易将注意力集中在书评、影评、乐评等以文字为主的层面之上。以文艺评论为核心的豆瓣运营理念是基于内容的，在这些方面活跃的豆瓣用户是在豆瓣学习和交流思想的，所以文字阅读是豆瓣产品的关键。这也是有用户升级了iOS 7后，发现豆瓣的移动App是最贴近此次苹果的扁平化设计风格的。\r\n</p>\r\n<p style=\"color:#333333;font-family:Helvetica, Tahoma, Arial, sans-serif;font-size:14px;background-color:#FFFFFF;text-align:center;\">\r\n	<a href=\"http://cms.csdnimg.cn/article/201306/13/51b988751d998.jpg\" target=\"_blank\"><img src=\"http://cms.csdnimg.cn/article/201306/13/51b988751d998_middle.jpg\" border=\"0\" /></a> \r\n</p>\r\n<p style=\"color:#333333;font-family:Helvetica, Tahoma, Arial, sans-serif;font-size:14px;background-color:#FFFFFF;text-align:center;\">\r\n	“豆瓣阅读”的扁平化设计\r\n</p>\r\n<p style=\"color:#333333;font-family:Helvetica, Tahoma, Arial, sans-serif;font-size:14px;background-color:#FFFFFF;text-align:center;\">\r\n	<p style=\"text-align:left;color:#333333;font-family:Helvetica, Tahoma, Arial, sans-serif;font-size:14px;background-color:#FFFFFF;\">\r\n		<b>苹果丢失了华丽视觉？</b>\r\n	</p>\r\n	<p style=\"text-align:left;color:#333333;font-family:Helvetica, Tahoma, Arial, sans-serif;font-size:14px;background-color:#FFFFFF;\">\r\n		苹果产品成功的因素多得不胜枚举，在产品开发层面，笔者认为主要有以下几点：\r\n	</p>\r\n	<p style=\"text-align:left;color:#333333;font-family:Helvetica, Tahoma, Arial, sans-serif;font-size:14px;background-color:#FFFFFF;\">\r\n		1. 操作系统严密的逻辑结构\r\n	</p>\r\n	<p style=\"text-align:left;color:#333333;font-family:Helvetica, Tahoma, Arial, sans-serif;font-size:14px;background-color:#FFFFFF;\">\r\n		2. 人性化、多样化的功能设计\r\n	</p>\r\n	<p style=\"text-align:left;color:#333333;font-family:Helvetica, Tahoma, Arial, sans-serif;font-size:14px;background-color:#FFFFFF;\">\r\n		3. 华丽的视觉效果和操作体验\r\n	</p>\r\n	<p style=\"text-align:left;color:#333333;font-family:Helvetica, Tahoma, Arial, sans-serif;font-size:14px;background-color:#FFFFFF;\">\r\n		4. 堪称完美的软硬件整合\r\n	</p>\r\n	<p style=\"text-align:left;color:#333333;font-family:Helvetica, Tahoma, Arial, sans-serif;font-size:14px;background-color:#FFFFFF;\">\r\n		5. 广泛吸引开发者拓展生态系统\r\n	</p>\r\n	<p style=\"text-align:left;color:#333333;font-family:Helvetica, Tahoma, Arial, sans-serif;font-size:14px;background-color:#FFFFFF;\">\r\n		不得不说，拟物化设计是“华丽的视觉效果”的一个重要组成部分。拟物化设计不仅满足了一大批果粉对于华丽审美的需求，也培养了一大批逐渐对华丽审美产生需求的粉丝。此外，拟物化设计更多满足了用户的娱乐需求而非办公需求，这就不难解释为何仍然有许多企业用户希望用微软的移动设备办公而非iPad了。\r\n	</p>\r\n	<p style=\"text-align:left;color:#333333;font-family:Helvetica, Tahoma, Arial, sans-serif;font-size:14px;background-color:#FFFFFF;\">\r\n		然而现在苹果自己改了，那么用户、开发者都得跟着改变。曾有用户发起了“没有了乔布斯的苹果究竟还能撑几年”的问答，现在看来这个问题的答案已经不那么重要了——苹果不再向从前一样，它的设计开始令人失望，它的产品越来越受争议，它的价值观也越来越被人们质疑。\r\n	</p>\r\n	<p style=\"text-align:center;color:#333333;font-family:Helvetica, Tahoma, Arial, sans-serif;font-size:14px;background-color:#FFFFFF;\">\r\n		<a href=\"http://cms.csdnimg.cn/article/201306/13/51b98a2d70482.jpg\" target=\"_blank\"><img src=\"http://cms.csdnimg.cn/article/201306/13/51b98a2d70482.jpg\" border=\"0\" /></a>\r\n	</p>\r\n	<p style=\"text-align:center;color:#333333;font-family:Helvetica, Tahoma, Arial, sans-serif;font-size:14px;background-color:#FFFFFF;\">\r\n		<a href=\"http://cms.csdnimg.cn/article/201306/13/51b98abf4e10e.jpg\" target=\"_blank\"><img src=\"http://cms.csdnimg.cn/article/201306/13/51b98abf4e10e.jpg\" border=\"0\" style=\"width:414.86486486486484px;height:614px;\" /></a>\r\n	</p>\r\n	<p style=\"text-align:center;color:#333333;font-family:Helvetica, Tahoma, Arial, sans-serif;font-size:14px;background-color:#FFFFFF;\">\r\n		<a href=\"http://cms.csdnimg.cn/article/201306/13/51b99595ec1fe.jpg\" target=\"_blank\"><img src=\"http://cms.csdnimg.cn/article/201306/13/51b99595ec1fe.jpg\" border=\"0\" /></a>\r\n	</p>\r\n	<p style=\"text-align:left;color:#333333;font-family:Helvetica, Tahoma, Arial, sans-serif;font-size:14px;background-color:#FFFFFF;\">\r\n		<a href=\"http://jonyiveredesignsthings.tumblr.com/\" target=\"_blank\">被网友恶搞的iOS扁平化设计</a>\r\n	</p>\r\n	<p style=\"text-align:left;color:#333333;font-family:Helvetica, Tahoma, Arial, sans-serif;font-size:14px;background-color:#FFFFFF;\">\r\n		无论是底层逻辑架构还是贴近用户的UI界面，苹果之所以是苹果，因为它走在行业前列。乔布斯所想是他人所未想，这样才会引来大批支持者、追随者和模仿者。现在苹果居然开始模仿别人了，它开始落后了？所谓爱之深，责之切。大家多多少少都还有点拟物情结，希望苹果的“华丽视觉”不要在此停止。（文/杨依帆 责编/张宁）\r\n	</p>\r\n	<div style=\"text-align:left;\">\r\n		<span style=\"line-height:1.5;\"></span>\r\n	</div>\r\n</p>', '0', '1371237583', '1371238309', 'en_us');
INSERT INTO `article` VALUES ('9', '11', '2', 'wucangzhou', '', '/yincart/basic/upload/article/image/20130515/20130515062329_50594.jpg', '本站', '2153646453132', '1324kjhkgbhjv cfg d gfc', '0', '1389763447', '1389763447', 'en_us');
INSERT INTO `article` VALUES ('10', '11', '2', '他说他', '', '/yincart/basic/upload/ad/20130429/bild15396.jpg', '本站', '大神大神大神大神的', '按时打算的撒的操作现场则速度非常萨芬长沙自行车', '0', '1389770101', '1389770101', 'zh_cn');

-- ----------------------------
-- Table structure for `authassignment`
-- ----------------------------
DROP TABLE IF EXISTS `authassignment`;
CREATE TABLE `authassignment` (
  `itemname` varchar(64) NOT NULL,
  `userid` varchar(64) NOT NULL,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`itemname`,`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of authassignment
-- ----------------------------

-- ----------------------------
-- Table structure for `authitem`
-- ----------------------------
DROP TABLE IF EXISTS `authitem`;
CREATE TABLE `authitem` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of authitem
-- ----------------------------

-- ----------------------------
-- Table structure for `authitemchild`
-- ----------------------------
DROP TABLE IF EXISTS `authitemchild`;
CREATE TABLE `authitemchild` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of authitemchild
-- ----------------------------

-- ----------------------------
-- Table structure for `brand`
-- ----------------------------
DROP TABLE IF EXISTS `brand`;
CREATE TABLE `brand` (
  `value_id` int(10) unsigned NOT NULL DEFAULT '0',
  `value_name` varchar(45) DEFAULT NULL COMMENT 'vid的值',
  `prop_id` int(10) unsigned NOT NULL,
  `prop_name` varchar(45) DEFAULT NULL COMMENT '品牌的属性名',
  PRIMARY KEY (`value_id`),
  KEY `fk_brand_prop_value1` (`value_id`),
  KEY `fk_brand_item_prop1` (`prop_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of brand
-- ----------------------------

-- ----------------------------
-- Table structure for `cache`
-- ----------------------------
DROP TABLE IF EXISTS `cache`;
CREATE TABLE `cache` (
  `id` char(128) NOT NULL,
  `expire` int(11) DEFAULT NULL,
  `value` longblob,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cache
-- ----------------------------

-- ----------------------------
-- Table structure for `category`
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `category_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `left` int(10) unsigned NOT NULL,
  `right` int(10) unsigned NOT NULL,
  `root` int(10) unsigned NOT NULL,
  `level` int(10) unsigned NOT NULL,
  `name` varchar(200) NOT NULL COMMENT '分类名',
  `label` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `url` varchar(200) NOT NULL COMMENT '分类的url显示',
  `pic` varchar(255) NOT NULL COMMENT '分类图片',
  `is_show` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '是否显示',
  `desc` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=139 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('1', '1', '32', '1', '1', '内容分类', '0', '', '', '1', null);
INSERT INTO `category` VALUES ('3', '1', '20', '3', '1', '商品分类', '0', '', '', '1', null);
INSERT INTO `category` VALUES ('4', '2', '15', '1', '2', '单页分类', '0', '', '', '1', null);
INSERT INTO `category` VALUES ('5', '16', '19', '1', '2', '文章分类', '0', '', '', '1', null);
INSERT INTO `category` VALUES ('11', '17', '18', '1', '3', '最新公告', '0', '', '', '1', null);
INSERT INTO `category` VALUES ('13', '3', '12', '1', '3', '帮助中心', '0', '', '', '0', null);
INSERT INTO `category` VALUES ('32', '4', '5', '1', '4', '新手上路', '0', '', '', '0', null);
INSERT INTO `category` VALUES ('33', '6', '7', '1', '4', '购物指南', '0', '', '', '0', null);
INSERT INTO `category` VALUES ('34', '8', '9', '1', '4', '支付/配送方式', '0', '', '', '0', null);
INSERT INTO `category` VALUES ('35', '10', '11', '1', '4', '购物条款', '0', '', '', '0', null);
INSERT INTO `category` VALUES ('40', '1', '2', '40', '1', '商品类型', '0', '', '', '1', null);
INSERT INTO `category` VALUES ('104', '20', '25', '1', '2', '客服分类', '0', '', '', '0', null);
INSERT INTO `category` VALUES ('105', '21', '22', '1', '3', '售前咨询', '0', '', '', '0', null);
INSERT INTO `category` VALUES ('106', '23', '24', '1', '3', '售后咨询', '0', '', '', '0', null);
INSERT INTO `category` VALUES ('107', '26', '31', '1', '2', '友情链接', '0', '', '', '0', null);
INSERT INTO `category` VALUES ('108', '27', '28', '1', '3', '国内站', '0', '', '', '0', null);
INSERT INTO `category` VALUES ('109', '29', '30', '1', '3', '国际站', '0', '', '', '0', null);
INSERT INTO `category` VALUES ('129', '2', '3', '3', '2', '墙面美容', '2', '', '/upload/item/p1.png', '1', null);
INSERT INTO `category` VALUES ('130', '18', '19', '3', '2', '快捷刷新', '0', '', '/upload/item/p1.png', '1', '');
INSERT INTO `category` VALUES ('131', '4', '5', '3', '2', '家电清洗', '2', '', '/upload/item/p1.png', '1', '');
INSERT INTO `category` VALUES ('132', '13', '14', '1', '3', '售后服务', '0', '', '', '1', null);
INSERT INTO `category` VALUES ('133', '16', '17', '3', '2', '壁纸', '1', '', '/upload/item/p1.png', '1', '123');
INSERT INTO `category` VALUES ('134', '6', '15', '3', '2', '艺术涂料', '1', '', '/upload/item/p1.png', '1', null);
INSERT INTO `category` VALUES ('135', '7', '8', '3', '3', '简约风格', '0', '', '', '1', null);
INSERT INTO `category` VALUES ('136', '9', '10', '3', '3', '现代风格', '0', '', '', '1', null);
INSERT INTO `category` VALUES ('137', '11', '12', '3', '3', '混搭风格', '0', '', '', '1', null);
INSERT INTO `category` VALUES ('138', '13', '14', '3', '3', '欧式风格', '0', '', '', '1', null);

-- ----------------------------
-- Table structure for `comment`
-- ----------------------------
DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `create_time` int(11) DEFAULT NULL,
  `author` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `post_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_comment_post` (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of comment
-- ----------------------------

-- ----------------------------
-- Table structure for `currency`
-- ----------------------------
DROP TABLE IF EXISTS `currency`;
CREATE TABLE `currency` (
  `currency_id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(8) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `sign` varchar(5) DEFAULT NULL,
  `rate` decimal(10,4) DEFAULT NULL,
  `is_default` tinyint(1) DEFAULT '0',
  `enabled` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`currency_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of currency
-- ----------------------------

-- ----------------------------
-- Table structure for `customer_service`
-- ----------------------------
DROP TABLE IF EXISTS `customer_service`;
CREATE TABLE `customer_service` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(10) unsigned NOT NULL,
  `type` tinyint(1) NOT NULL,
  `nick_name` varchar(50) NOT NULL,
  `account` varchar(100) NOT NULL,
  `is_show` tinyint(1) NOT NULL DEFAULT '1',
  `sort_order` int(11) NOT NULL DEFAULT '255',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of customer_service
-- ----------------------------
INSERT INTO `customer_service` VALUES ('1', '105', '1', '客服', '123456', '1', '5');
INSERT INTO `customer_service` VALUES ('8', '105', '1', '客服', '123456', '1', '255');
INSERT INTO `customer_service` VALUES ('9', '105', '2', '客服', '123456', '1', '255');
INSERT INTO `customer_service` VALUES ('10', '106', '1', '客服', '123456', '1', '255');
INSERT INTO `customer_service` VALUES ('11', '106', '1', '客服', '123456', '1', '255');
INSERT INTO `customer_service` VALUES ('12', '106', '2', '客服', '123456', '1', '255');

-- ----------------------------
-- Table structure for `dc_store`
-- ----------------------------
DROP TABLE IF EXISTS `dc_store`;
CREATE TABLE `dc_store` (
  `store_id` int(11) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `store_name` varchar(50) NOT NULL,
  `state` varchar(25) DEFAULT NULL,
  `city` varchar(25) DEFAULT NULL,
  `district` varchar(25) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `address` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL DEFAULT '0',
  `pic` varchar(255) DEFAULT NULL,
  `detailImg` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`store_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dc_store
-- ----------------------------
INSERT INTO `dc_store` VALUES ('00000000001', '北京一店', '110000', '110100', '110101', '2014-12-10 14:52:54', '和平路111号', '010-12345678', '/upload/store/002.jpg', '/upload/store/002-001.jpg');
INSERT INTO `dc_store` VALUES ('00000000003', '天津一点', '120000', '120100', '120101', '2014-12-10 14:52:57', '和平路11号', '010-12345678', '/upload/store/003.jpg', '/upload/store/003-001.jpg');
INSERT INTO `dc_store` VALUES ('00000000004', '合肥一店', '340000', '340100', '340104', '2014-12-10 14:53:01', '长江西路345号', '0551-65329876', '/upload/store/004.jpg', '/upload/store/004-001.jpg');
INSERT INTO `dc_store` VALUES ('00000000005', '北京二店', '110000', '110100', '110102', '2014-12-10 14:52:23', '和平路1234号', '010-87654321', '/upload/store/001.jpg', '/upload/store/001-001.jpg');

-- ----------------------------
-- Table structure for `eavattr`
-- ----------------------------
DROP TABLE IF EXISTS `eavattr`;
CREATE TABLE `eavattr` (
  `entity` bigint(20) unsigned NOT NULL,
  `attribute` varchar(250) NOT NULL,
  `value` text NOT NULL,
  KEY `ikEntity` (`entity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of eavattr
-- ----------------------------
INSERT INTO `eavattr` VALUES ('1', 'keywords', 'yincart,yii,opensource11111');
INSERT INTO `eavattr` VALUES ('2', 'keywords', '222');
INSERT INTO `eavattr` VALUES ('1', 'keywords', 'yincart,yii,opensource11111');
INSERT INTO `eavattr` VALUES ('2', 'keywords', '222');
INSERT INTO `eavattr` VALUES ('26', 'keywords', '');
INSERT INTO `eavattr` VALUES ('25', 'keywords', 'test111');

-- ----------------------------
-- Table structure for `feedback`
-- ----------------------------
DROP TABLE IF EXISTS `feedback`;
CREATE TABLE `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `tel` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `reply` text NOT NULL,
  `create_time` int(11) NOT NULL,
  `update_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of feedback
-- ----------------------------

-- ----------------------------
-- Table structure for `friend_link`
-- ----------------------------
DROP TABLE IF EXISTS `friend_link`;
CREATE TABLE `friend_link` (
  `link_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(100) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `url` varchar(200) NOT NULL,
  `memo` text NOT NULL,
  `sort_order` int(11) NOT NULL DEFAULT '255',
  `language` varchar(45) NOT NULL,
  `create_time` int(11) NOT NULL,
  `update_time` int(11) NOT NULL,
  PRIMARY KEY (`link_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of friend_link
-- ----------------------------
INSERT INTO `friend_link` VALUES ('1', '108', '京东', '', 'http://jd.com', '', '255', 'zh_cn', '1373474052', '1373474052');
INSERT INTO `friend_link` VALUES ('2', '108', '凡客', '', 'http://vancl.com', '', '255', 'zh_cn', '1373474071', '1373474071');
INSERT INTO `friend_link` VALUES ('3', '109', '兰亭集势', '', 'http://lightinthebox.com', '', '255', 'zh_cn', '1373474102', '1373474102');

-- ----------------------------
-- Table structure for `groupon`
-- ----------------------------
DROP TABLE IF EXISTS `groupon`;
CREATE TABLE `groupon` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '长标题',
  `short_title` varchar(18) CHARACTER SET utf8 NOT NULL COMMENT '短信标题',
  `sms_title` varchar(10) CHARACTER SET utf8 NOT NULL COMMENT '手机短信标题',
  `image` varchar(128) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '主图',
  `cate_1_id` int(10) unsigned NOT NULL COMMENT '一级分类',
  `cate_2_id` int(10) unsigned NOT NULL COMMENT '二级分类',
  `cate_3_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '三级分类',
  `biz_id` int(10) unsigned NOT NULL COMMENT '商家id',
  `contract_id` int(10) unsigned NOT NULL COMMENT '合同id',
  `price` double(10,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '团购价',
  `market_price` double(10,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '市场价',
  `cost` double(10,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '成本价',
  `begin_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '开始时间',
  `end_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '结束时间',
  `expire_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '过期时间',
  `per_number` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '每人限购',
  `once_number` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '每单限购',
  `begin_number` int(10) unsigned NOT NULL DEFAULT '1' COMMENT '起购数量',
  `now_number` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '目前销量',
  `pre_number` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '加水量',
  `max_number` int(11) NOT NULL DEFAULT '-1' COMMENT '库存',
  `display` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '是否显示1显示0不显示',
  `sort` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '站内排序值',
  `is_copy` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '是否为复制项目',
  `examine_status` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '1=草稿 2=提交审核3=销售审核通过等待编辑4=销售审核失败 5=编辑完成等待审核 6=编辑审核失败7=编辑审核成功等待上线',
  `examine_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '审核人id',
  `examine_reason` varchar(128) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '审核原因',
  `create_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '项目创建者id',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`),
  KEY `cate_1_id` (`cate_1_id`,`cate_2_id`,`cate_3_id`,`biz_id`,`contract_id`,`price`,`begin_time`,`end_time`,`display`,`sort`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='团购项目主表';

-- ----------------------------
-- Records of groupon
-- ----------------------------

-- ----------------------------
-- Table structure for `groupon_attach`
-- ----------------------------
DROP TABLE IF EXISTS `groupon_attach`;
CREATE TABLE `groupon_attach` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `relation_id` int(10) unsigned NOT NULL COMMENT '关联表id',
  `relation_type` enum('contract','biz','groupon') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'contract' COMMENT '关联类型 默认合同',
  `file_name` varchar(128) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '文件名',
  `file_path` varchar(128) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '文件路径',
  `title` varchar(128) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '图片标题',
  `create_time` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `relation_id` (`relation_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='合同等附件表';

-- ----------------------------
-- Records of groupon_attach
-- ----------------------------

-- ----------------------------
-- Table structure for `groupon_attr`
-- ----------------------------
DROP TABLE IF EXISTS `groupon_attr`;
CREATE TABLE `groupon_attr` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `groupon_id` int(10) unsigned NOT NULL COMMENT '团购id',
  `note` text CHARACTER SET utf8 NOT NULL COMMENT '温馨提示',
  `detail` text CHARACTER SET utf8 NOT NULL COMMENT '商品详情（表格）',
  `info` text CHARACTER SET utf8 NOT NULL COMMENT '图文介绍',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `groupon_id` (`groupon_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='团购属性表';

-- ----------------------------
-- Records of groupon_attr
-- ----------------------------

-- ----------------------------
-- Table structure for `groupon_biz`
-- ----------------------------
DROP TABLE IF EXISTS `groupon_biz`;
CREATE TABLE `groupon_biz` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(32) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '用户名',
  `password` varchar(32) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '密码',
  `title` varchar(128) CHARACTER SET utf8 NOT NULL COMMENT '商家名称',
  `license_photo` varchar(128) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '营业执照',
  `contact` varchar(32) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '联系人',
  `phone` varchar(18) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '联系电话',
  `mobile` char(11) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '手机号',
  `bank_user` varchar(18) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '开户名',
  `bank_name` varchar(128) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '开户行',
  `bank_child` varchar(128) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '支行信息',
  `bank_no` varchar(32) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '银行账号',
  `create_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建者id',
  `examine_status` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '1=草稿状态 2=审核提交 3=审核通过 4=审核驳回',
  `examine_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '审核人id',
  `examine_reason` varchar(128) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '审核原因',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  `display` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '是否显示1显示0不显示',
  PRIMARY KEY (`id`),
  KEY `examine_status` (`examine_status`,`display`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='团购商家主表';

-- ----------------------------
-- Records of groupon_biz
-- ----------------------------
INSERT INTO `groupon_biz` VALUES ('1', '久久', '123456', 'test', '', '张久龙', '', '13910799432', '张三', '北京银行', '中关村支行', '6222020256788654', '0', '1', '0', '', '0', '0', '1');
INSERT INTO `groupon_biz` VALUES ('2', '张三', '123456', 'test', '', '张久龙', '', '13910799432', '张三', '北京银行', '中关村支行', '6222020256788654', '2', '1', '0', '', '1376201258', '1376201258', '1');
INSERT INTO `groupon_biz` VALUES ('3', '张三', '123456', 'test', '', '张久龙', '', '13910799432', '张三', '北京银行', '中关村支行', '6222020256788654', '2', '1', '0', '', '1376201985', '1376201985', '1');
INSERT INTO `groupon_biz` VALUES ('4', '张三', '123456', 'test', '', '张久龙', '', '13910799432', '张三', '北京银行', '中关村支行', '6222020256788654', '2', '1', '0', '', '1376202047', '1376202047', '1');
INSERT INTO `groupon_biz` VALUES ('5', '张三', '123456', 'dsadasfa', 'upload/groupon/2013/08/137620660866313.png', '张三', '', '13910799432', '张三', '北京银行', '中关村支行', '6222020256788654', '2', '1', '0', '', '1376206608', '1376207594', '1');
INSERT INTO `groupon_biz` VALUES ('6', '张三', '123456', 'dadsfadfa', 'upload/groupon/2013/08/137620999324820.png', '张久龙', '', '13910799432', '张三', '北京银行', '中关村支行', '6222020256788654', '2', '1', '0', '', '1376209993', '1376209993', '1');
INSERT INTO `groupon_biz` VALUES ('7', '撒范德萨发', '32432432', '阿萨德发的', '', '爱的色放', '', '13910799432', '张三', '北京银行', '中关村支行', '42345467678568578568', '0', '1', '0', '', '1376573243', '1376573243', '1');

-- ----------------------------
-- Table structure for `groupon_biz_shop`
-- ----------------------------
DROP TABLE IF EXISTS `groupon_biz_shop`;
CREATE TABLE `groupon_biz_shop` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `biz_id` int(10) unsigned NOT NULL COMMENT '商家id',
  `name` varchar(128) CHARACTER SET utf8 NOT NULL COMMENT '分店名',
  `service_tel` varchar(128) CHARACTER SET utf8 NOT NULL COMMENT '预约电话',
  `address` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '分店地址',
  `travel_info` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '公交信息',
  `open_time` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '营业时间',
  `province_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '省份id',
  `city_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '城市id',
  `area_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '区域id',
  `cbd_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '商圈id',
  `lnglat` varchar(64) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '经纬度',
  `is_reservation` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '是否需要预约1需要0不需要',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`),
  KEY `biz_id` (`biz_id`,`city_id`,`area_id`,`cbd_id`,`is_reservation`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='商家分店';

-- ----------------------------
-- Records of groupon_biz_shop
-- ----------------------------

-- ----------------------------
-- Table structure for `groupon_cates`
-- ----------------------------
DROP TABLE IF EXISTS `groupon_cates`;
CREATE TABLE `groupon_cates` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) CHARACTER SET utf8 NOT NULL COMMENT '分类名',
  `ename` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '分类别名',
  `pid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '父级id',
  `level` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '等级',
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '分类路径',
  `is_hot` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '是否热门0不热 1热',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ename` (`ename`),
  KEY `pid` (`pid`,`level`,`path`,`is_hot`)
) ENGINE=InnoDB AUTO_INCREMENT=181 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='团购分类表';

-- ----------------------------
-- Records of groupon_cates
-- ----------------------------
INSERT INTO `groupon_cates` VALUES ('1', '餐饮美食', 'canyinmeishi', '0', '1', '0,', '0');
INSERT INTO `groupon_cates` VALUES ('2', '休闲娱乐', 'xiuxianyule', '0', '1', '0,', '0');
INSERT INTO `groupon_cates` VALUES ('3', '旅游住宿', 'lvyouzhusu', '0', '1', '0,', '0');
INSERT INTO `groupon_cates` VALUES ('4', '生活服务', 'shenghuofuwu', '0', '1', '0,', '0');
INSERT INTO `groupon_cates` VALUES ('5', '丽人', 'liren', '0', '1', '0,', '0');
INSERT INTO `groupon_cates` VALUES ('6', '网上购物', 'wangshanggouwu', '0', '1', '0,', '0');
INSERT INTO `groupon_cates` VALUES ('7', '火锅', 'huoguo', '1', '2', '0,1,', '0');
INSERT INTO `groupon_cates` VALUES ('8', '烧烤', 'shaokao', '1', '2', '0,1,', '0');
INSERT INTO `groupon_cates` VALUES ('9', '西餐', 'xican', '1', '2', '0,1,', '0');
INSERT INTO `groupon_cates` VALUES ('10', '海鲜', 'haixian', '1', '2', '0,1,', '0');
INSERT INTO `groupon_cates` VALUES ('11', '地方菜', 'difangcai', '1', '2', '0,1,', '0');
INSERT INTO `groupon_cates` VALUES ('12', '烤鱼', 'kaoyu', '1', '2', '0,1,', '0');
INSERT INTO `groupon_cates` VALUES ('13', '麻辣香锅', 'malaxiangguo', '1', '2', '0,1,', '0');
INSERT INTO `groupon_cates` VALUES ('14', '日韩料理', 'rihanliaoli', '1', '2', '0,1,', '0');
INSERT INTO `groupon_cates` VALUES ('15', '东南亚菜', 'dongnanyacai', '1', '2', '0,1,', '0');
INSERT INTO `groupon_cates` VALUES ('16', '快餐', 'kuaican', '1', '2', '0,1,', '0');
INSERT INTO `groupon_cates` VALUES ('17', '咖啡', 'kafei', '1', '2', '0,1,', '0');
INSERT INTO `groupon_cates` VALUES ('18', '下午茶', 'xiawucha', '1', '2', '0,1,', '0');
INSERT INTO `groupon_cates` VALUES ('19', '蛋糕', 'dangao', '1', '2', '0,1,', '0');
INSERT INTO `groupon_cates` VALUES ('20', '其他', 'qitacanyin', '1', '2', '0,1,', '0');
INSERT INTO `groupon_cates` VALUES ('21', '电影', 'dianying', '2', '2', '0,2,', '0');
INSERT INTO `groupon_cates` VALUES ('22', 'KTV', 'ktv', '2', '2', '0,2,', '0');
INSERT INTO `groupon_cates` VALUES ('23', '运动健身', 'yundongjianshen', '2', '2', '0,2,', '0');
INSERT INTO `groupon_cates` VALUES ('24', '游乐电玩', 'youledianwan', '2', '2', '0,2,', '0');
INSERT INTO `groupon_cates` VALUES ('25', '展览演出', 'zhanlanyanchu', '2', '2', '0,2,', '0');
INSERT INTO `groupon_cates` VALUES ('26', '足疗按摩', 'zhuliaoanmo', '2', '2', '0,2,', '0');
INSERT INTO `groupon_cates` VALUES ('27', '洗浴', 'xiyu', '2', '2', '0,2,', '0');
INSERT INTO `groupon_cates` VALUES ('28', '采摘', 'caizhai', '2', '2', '0,2,', '0');
INSERT INTO `groupon_cates` VALUES ('29', '滑雪', 'huaxue', '2', '2', '0,2,', '0');
INSERT INTO `groupon_cates` VALUES ('30', '温泉', 'wenquan', '2', '2', '0,2,', '0');
INSERT INTO `groupon_cates` VALUES ('31', '其他', 'qitaxiuxian', '2', '2', '0,2,', '0');
INSERT INTO `groupon_cates` VALUES ('32', '酒店', 'jiudian', '3', '2', '0,3,', '0');
INSERT INTO `groupon_cates` VALUES ('33', '旅游', 'lvyou', '3', '2', '0,3,', '0');
INSERT INTO `groupon_cates` VALUES ('34', '景点公园', 'jingdiangongyuan', '3', '2', '0,3,', '0');
INSERT INTO `groupon_cates` VALUES ('35', '其他', 'qitalvyou', '3', '2', '0,3,', '0');
INSERT INTO `groupon_cates` VALUES ('36', '写真', 'xiezhen', '4', '2', '0,4,', '0');
INSERT INTO `groupon_cates` VALUES ('37', '婚纱摄影', 'hunshasheying', '4', '2', '0,4,', '0');
INSERT INTO `groupon_cates` VALUES ('38', '儿童摄影', 'ertongsheying', '4', '2', '0,4,', '0');
INSERT INTO `groupon_cates` VALUES ('39', '汽车养护', 'qicheyanghu', '4', '2', '0,4,', '0');
INSERT INTO `groupon_cates` VALUES ('40', '教育培训', 'jiaoyupeixun', '4', '2', '0,4,', '0');
INSERT INTO `groupon_cates` VALUES ('41', '体检', 'tijian', '4', '2', '0,4,', '0');
INSERT INTO `groupon_cates` VALUES ('42', '配镜', 'peijing', '4', '2', '0,4,', '0');
INSERT INTO `groupon_cates` VALUES ('43', '口腔', 'kouqiang', '4', '2', '0,4,', '0');
INSERT INTO `groupon_cates` VALUES ('44', '鲜花配送', 'xianhuapeisong', '4', '2', '0,4,', '0');
INSERT INTO `groupon_cates` VALUES ('45', '婚庆策划', 'hunqingcehua', '4', '2', '0,4,', '0');
INSERT INTO `groupon_cates` VALUES ('46', '其他', 'qitashenghuo', '4', '2', '0,4,', '0');
INSERT INTO `groupon_cates` VALUES ('47', '美发', 'meifa', '5', '2', '0,5,', '0');
INSERT INTO `groupon_cates` VALUES ('48', '美甲', 'meijia', '5', '2', '0,5,', '0');
INSERT INTO `groupon_cates` VALUES ('49', '美容美体', 'meirongmeiti', '5', '2', '0,5,', '0');
INSERT INTO `groupon_cates` VALUES ('50', '其他', 'qitaliren', '5', '2', '0,5,', '0');
INSERT INTO `groupon_cates` VALUES ('51', '服装', 'fuzhuang', '6', '2', '0,6,', '0');
INSERT INTO `groupon_cates` VALUES ('52', '生活家居', 'shenghuojiaju', '6', '2', '0,6,', '0');
INSERT INTO `groupon_cates` VALUES ('53', '食品饮料', 'shipinyinliao', '6', '2', '0,6,', '0');
INSERT INTO `groupon_cates` VALUES ('54', '化妆品', 'huazhuangpin', '6', '2', '0,6,', '0');
INSERT INTO `groupon_cates` VALUES ('55', '箱包', 'xiangbao', '6', '2', '0,6,', '0');
INSERT INTO `groupon_cates` VALUES ('56', '家用电器', 'jiayongdianqi', '6', '2', '0,6,', '0');
INSERT INTO `groupon_cates` VALUES ('57', '手机数码', 'shoujishuma', '6', '2', '0,6,', '0');
INSERT INTO `groupon_cates` VALUES ('58', '鞋靴', 'xiexue', '6', '2', '0,6,', '0');
INSERT INTO `groupon_cates` VALUES ('59', '饰品', 'shipin', '6', '2', '0,6,', '0');
INSERT INTO `groupon_cates` VALUES ('60', '手表', 'shoubiao', '6', '2', '0,6,', '0');
INSERT INTO `groupon_cates` VALUES ('61', '母婴用品', 'muyinyongpin', '6', '2', '0,6,', '0');
INSERT INTO `groupon_cates` VALUES ('62', '玩具', 'wanju', '6', '2', '0,6,', '0');
INSERT INTO `groupon_cates` VALUES ('63', '礼品', 'lipin', '6', '2', '0,6,', '0');
INSERT INTO `groupon_cates` VALUES ('64', '其他', 'qitagouwu', '6', '2', '0,6,', '0');
INSERT INTO `groupon_cates` VALUES ('65', '羊肉涮锅', 'yangroushuanguo', '7', '3', '0,1,7,', '0');
INSERT INTO `groupon_cates` VALUES ('66', '羊蝎子', 'yangxiezi', '7', '3', '0,1,7,', '0');
INSERT INTO `groupon_cates` VALUES ('67', '豆捞', 'doulao', '7', '3', '0,1,7,', '0');
INSERT INTO `groupon_cates` VALUES ('68', '川味火锅', 'chuanweihuoguo', '7', '3', '0,1,7,', '0');
INSERT INTO `groupon_cates` VALUES ('69', '鱼火锅', 'yuhuoguo', '7', '3', '0,1,7,', '0');
INSERT INTO `groupon_cates` VALUES ('70', '肥牛火锅', 'feiniuhuoguo', '7', '3', '0,1,7,', '0');
INSERT INTO `groupon_cates` VALUES ('71', '其他', 'qitahuoguo', '7', '3', '0,1,7,', '0');
INSERT INTO `groupon_cates` VALUES ('72', '烤羊腿', 'kaoyangtui', '8', '3', '0,1,8,', '0');
INSERT INTO `groupon_cates` VALUES ('73', '韩式烧烤', 'hanshisaokao', '8', '3', '0,1,8,', '0');
INSERT INTO `groupon_cates` VALUES ('74', '铁板烧', 'tiebansao', '8', '3', '0,1,8,', '0');
INSERT INTO `groupon_cates` VALUES ('75', '其他', 'qitasaokao', '8', '3', '0,1,8,', '0');
INSERT INTO `groupon_cates` VALUES ('76', '川菜', 'chuancai', '11', '3', '0,1,11,', '0');
INSERT INTO `groupon_cates` VALUES ('77', '湘菜', 'xiangcai', '11', '3', '0,1,11,', '0');
INSERT INTO `groupon_cates` VALUES ('78', '东北菜', 'dongbeicai', '11', '3', '0,1,11,', '0');
INSERT INTO `groupon_cates` VALUES ('79', '江浙菜', 'jiangzhecai', '11', '3', '0,1,11,', '0');
INSERT INTO `groupon_cates` VALUES ('80', '粤菜', 'yuecai', '11', '3', '0,1,11,', '0');
INSERT INTO `groupon_cates` VALUES ('81', '西北菜', 'xibeicai', '11', '3', '0,1,11,', '0');
INSERT INTO `groupon_cates` VALUES ('82', '鲁菜', 'lucai', '11', '3', '0,1,11,', '0');
INSERT INTO `groupon_cates` VALUES ('83', '新疆清真', 'xinjiangqingzhen', '11', '3', '0,1,11,', '0');
INSERT INTO `groupon_cates` VALUES ('84', '云贵菜', 'yunguicai', '11', '3', '0,1,11,', '0');
INSERT INTO `groupon_cates` VALUES ('85', '家常菜', 'jiachangcai', '11', '3', '0,1,11,', '0');
INSERT INTO `groupon_cates` VALUES ('86', '其他', 'qitadifangcai', '11', '3', '0,1,11,', '0');
INSERT INTO `groupon_cates` VALUES ('87', '日本菜', 'ribencai', '14', '3', '0,1,14,', '0');
INSERT INTO `groupon_cates` VALUES ('88', '韩国料理', 'hanguoliaoli', '14', '3', '0,1,14,', '0');
INSERT INTO `groupon_cates` VALUES ('89', '其他', 'qitarihanliaoli', '14', '3', '0,1,14,', '0');
INSERT INTO `groupon_cates` VALUES ('90', '披萨', 'pisa', '16', '3', '0,1,16,', '0');
INSERT INTO `groupon_cates` VALUES ('91', '小吃', 'xiaochi', '16', '3', '0,1,16,', '0');
INSERT INTO `groupon_cates` VALUES ('92', '其他', 'qitakuaican', '16', '3', '0,1,16,', '0');
INSERT INTO `groupon_cates` VALUES ('93', '游泳', 'youyong', '23', '3', '0,2,23,', '0');
INSERT INTO `groupon_cates` VALUES ('94', '羽毛球', 'yumaoqiu', '23', '3', '0,2,23,', '0');
INSERT INTO `groupon_cates` VALUES ('95', '台球', 'taiqiu', '23', '3', '0,2,23,', '0');
INSERT INTO `groupon_cates` VALUES ('96', '保龄球', 'baolingqiu', '23', '3', '0,2,23,', '0');
INSERT INTO `groupon_cates` VALUES ('97', '瑜伽', 'yujia', '23', '3', '0,2,23,', '0');
INSERT INTO `groupon_cates` VALUES ('98', '舞蹈', 'wudao', '23', '3', '0,2,23,', '0');
INSERT INTO `groupon_cates` VALUES ('99', '健身中心', 'jianshenzhongxin', '23', '3', '0,2,23,', '0');
INSERT INTO `groupon_cates` VALUES ('100', '滑雪滑冰', 'huaxuehuabing', '23', '3', '0,2,23,', '0');
INSERT INTO `groupon_cates` VALUES ('101', '其他', 'qitayundongjianshen', '23', '3', '0,2,23,', '0');
INSERT INTO `groupon_cates` VALUES ('102', '桌游', 'zhuoyou', '24', '3', '0,2,24,', '0');
INSERT INTO `groupon_cates` VALUES ('103', '电玩', 'dianwan', '24', '3', '0,2,24,', '0');
INSERT INTO `groupon_cates` VALUES ('104', '密室逃生', 'mishitaosheng', '24', '3', '0,2,24,', '0');
INSERT INTO `groupon_cates` VALUES ('105', '真人cs', 'zhenrencs', '24', '3', '0,2,24,', '0');
INSERT INTO `groupon_cates` VALUES ('106', '游乐园', 'youleyuan', '24', '3', '0,2,24,', '0');
INSERT INTO `groupon_cates` VALUES ('107', '其他', 'qitayoule', '24', '3', '0,2,24,', '0');
INSERT INTO `groupon_cates` VALUES ('108', '话剧', 'huaju', '25', '3', '0,2,25,', '0');
INSERT INTO `groupon_cates` VALUES ('109', '相声', 'xiangsheng', '25', '3', '0,2,25,', '0');
INSERT INTO `groupon_cates` VALUES ('110', '演唱会', 'yanchanghui', '25', '3', '0,2,25,', '0');
INSERT INTO `groupon_cates` VALUES ('111', '其他', 'qitazhanlanyanchu', '25', '3', '0,2,25,', '0');
INSERT INTO `groupon_cates` VALUES ('112', '快捷酒店', 'kuaijiejiudian', '32', '3', '0,3,32,', '0');
INSERT INTO `groupon_cates` VALUES ('113', '度假村', 'dujiacun', '32', '3', '0,3,32,', '0');
INSERT INTO `groupon_cates` VALUES ('114', '五星级', 'wuxingji', '32', '3', '0,3,32,', '0');
INSERT INTO `groupon_cates` VALUES ('115', '四星级', 'sixingji', '32', '3', '0,3,32,', '0');
INSERT INTO `groupon_cates` VALUES ('116', '三星级', 'sanxingji', '32', '3', '0,3,32,', '0');
INSERT INTO `groupon_cates` VALUES ('117', '青年旅社', 'qingnianlvshe', '32', '3', '0,3,32,', '0');
INSERT INTO `groupon_cates` VALUES ('118', '其他', 'qitajiudian', '32', '3', '0,3,32,', '0');
INSERT INTO `groupon_cates` VALUES ('119', '周边游', 'zhoubianyou', '33', '3', '0,3,33,', '0');
INSERT INTO `groupon_cates` VALUES ('120', '自由行', 'ziyouxing', '33', '3', '0,3,33,', '0');
INSERT INTO `groupon_cates` VALUES ('121', '跟团游', 'gentuanyou', '33', '3', '0,3,33,', '0');
INSERT INTO `groupon_cates` VALUES ('122', '其他', 'qitayou', '33', '3', '0,3,33,', '0');
INSERT INTO `groupon_cates` VALUES ('123', '女装', 'nvzhuang', '51', '3', '0,6,51,', '0');
INSERT INTO `groupon_cates` VALUES ('124', '男装', 'nanzhuang', '51', '3', '0,6,51,', '0');
INSERT INTO `groupon_cates` VALUES ('125', '童装', 'tongzhuang', '51', '3', '0,6,51,', '0');
INSERT INTO `groupon_cates` VALUES ('126', '内衣', 'neiyi', '51', '3', '0,6,51,', '0');
INSERT INTO `groupon_cates` VALUES ('127', '袜子', 'wazi', '51', '3', '0,6,51,', '0');
INSERT INTO `groupon_cates` VALUES ('128', '其他', 'qitafuzhuang', '51', '3', '0,6,51,', '0');
INSERT INTO `groupon_cates` VALUES ('129', '床上用品', 'chuangshangyongpin', '52', '3', '0,6,52,', '0');
INSERT INTO `groupon_cates` VALUES ('130', '生活日用', 'shenghuoriyong', '52', '3', '0,6,52,', '0');
INSERT INTO `groupon_cates` VALUES ('131', '清洁用品', 'qingjieyongpin', '52', '3', '0,6,52,', '0');
INSERT INTO `groupon_cates` VALUES ('132', '厨具', 'chuju', '52', '3', '0,6,52,', '0');
INSERT INTO `groupon_cates` VALUES ('133', '成人用品', 'chengrenyongpin', '52', '3', '0,6,52,', '0');
INSERT INTO `groupon_cates` VALUES ('134', '其他', 'qitashenghuojiaju', '52', '3', '0,6,52,', '0');
INSERT INTO `groupon_cates` VALUES ('135', '零食', 'lingshi', '53', '3', '0,6,53,', '0');
INSERT INTO `groupon_cates` VALUES ('136', '茶酒饮料', 'chajiuyinliao', '53', '3', '0,6,53,', '0');
INSERT INTO `groupon_cates` VALUES ('137', '保健品', 'baojianpin', '53', '3', '0,6,53,', '0');
INSERT INTO `groupon_cates` VALUES ('138', '粮油蔬果', 'liangyoushuguo', '53', '3', '0,6,53,', '0');
INSERT INTO `groupon_cates` VALUES ('139', '其他', 'qitashipinyinliao', '53', '3', '0,6,53,', '0');
INSERT INTO `groupon_cates` VALUES ('140', '面部保养', 'mianbubaoyang', '54', '3', '0,6,54,', '0');
INSERT INTO `groupon_cates` VALUES ('141', '眼唇保养', 'yanchunbaoyang', '54', '3', '0,6,54,', '0');
INSERT INTO `groupon_cates` VALUES ('142', '身体护理', 'shentihuli', '54', '3', '0,6,54,', '0');
INSERT INTO `groupon_cates` VALUES ('143', '彩妆', 'caizhuang', '54', '3', '0,6,54,', '0');
INSERT INTO `groupon_cates` VALUES ('144', '香水', 'xiangshui', '54', '3', '0,6,54,', '0');
INSERT INTO `groupon_cates` VALUES ('145', '美容工具', 'meironggongju', '54', '3', '0,6,54,', '0');
INSERT INTO `groupon_cates` VALUES ('146', '其他', 'qitahuazhuangpin', '54', '3', '0,6,54,', '0');
INSERT INTO `groupon_cates` VALUES ('147', '女包-单肩', 'nvbaodanjian', '55', '3', '0,6,55,', '0');
INSERT INTO `groupon_cates` VALUES ('148', '女包-手提', 'nvbaoshouti', '55', '3', '0,6,55,', '0');
INSERT INTO `groupon_cates` VALUES ('149', '女包-斜挎', 'nvbaoxiekua', '55', '3', '0,6,55,', '0');
INSERT INTO `groupon_cates` VALUES ('150', '女包-钱包', 'nvbaoqianbao', '55', '3', '0,6,55,', '0');
INSERT INTO `groupon_cates` VALUES ('151', '男包-单肩', 'nanbaodanjian', '55', '3', '0,6,55,', '0');
INSERT INTO `groupon_cates` VALUES ('152', '男包-手提', 'nanbaoshouti', '55', '3', '0,6,55,', '0');
INSERT INTO `groupon_cates` VALUES ('153', '男包-钱包', 'nanbaoqianbao', '55', '3', '0,6,55,', '0');
INSERT INTO `groupon_cates` VALUES ('154', '功能箱包', 'nanbaogongnengbao', '55', '3', '0,6,55,', '0');
INSERT INTO `groupon_cates` VALUES ('155', '运动包', 'yundongbao', '55', '3', '0,6,55,', '0');
INSERT INTO `groupon_cates` VALUES ('156', '其他', 'qitaxiangbao', '55', '3', '0,6,55,', '0');
INSERT INTO `groupon_cates` VALUES ('157', '生活电器', 'shenghuodianqi', '56', '3', '0,6,56,', '0');
INSERT INTO `groupon_cates` VALUES ('158', '厨房电器', 'chufangdianqi', '56', '3', '0,6,56,', '0');
INSERT INTO `groupon_cates` VALUES ('159', '个人护理', 'gerenhuli', '56', '3', '0,6,56,', '0');
INSERT INTO `groupon_cates` VALUES ('160', '健康电器', 'jiankangdianqi', '56', '3', '0,6,56,', '0');
INSERT INTO `groupon_cates` VALUES ('161', '其他', 'qitajiayongdianqi', '56', '3', '0,6,56,', '0');
INSERT INTO `groupon_cates` VALUES ('162', '手机', 'shouji', '57', '3', '0,6,57,', '0');
INSERT INTO `groupon_cates` VALUES ('163', '手机配件', 'shoujipeijian', '57', '3', '0,6,57,', '0');
INSERT INTO `groupon_cates` VALUES ('164', '摄影摄像', 'sheyingshexiang', '57', '3', '0,6,57,', '0');
INSERT INTO `groupon_cates` VALUES ('165', '电脑数码', 'diannaoshuma', '57', '3', '0,6,57,', '0');
INSERT INTO `groupon_cates` VALUES ('166', '时尚影音', 'shishangyingyin', '57', '3', '0,6,57,', '0');
INSERT INTO `groupon_cates` VALUES ('167', '其他', 'qitashoujishuma', '57', '3', '0,6,57,', '0');
INSERT INTO `groupon_cates` VALUES ('168', '女鞋', 'nvxie', '58', '3', '0,6,58,', '0');
INSERT INTO `groupon_cates` VALUES ('169', '男鞋', 'nanxie', '58', '3', '0,6,58,', '0');
INSERT INTO `groupon_cates` VALUES ('170', '运动鞋', 'yundongxie', '58', '3', '0,6,58,', '0');
INSERT INTO `groupon_cates` VALUES ('171', '童鞋', 'tongxie', '58', '3', '0,6,58,', '0');
INSERT INTO `groupon_cates` VALUES ('172', '其他', 'qitaxiexue', '58', '3', '0,6,58,', '0');
INSERT INTO `groupon_cates` VALUES ('173', '眼镜', 'yanjing', '59', '3', '0,6,59,', '0');
INSERT INTO `groupon_cates` VALUES ('174', '围巾', 'weijin', '59', '3', '0,6,59,', '0');
INSERT INTO `groupon_cates` VALUES ('175', '皮带', 'pidai', '59', '3', '0,6,59,', '0');
INSERT INTO `groupon_cates` VALUES ('176', '首饰', 'shoushi', '59', '3', '0,6,59,', '0');
INSERT INTO `groupon_cates` VALUES ('177', '其他', 'qitashiping', '59', '3', '0,6,59,', '0');
INSERT INTO `groupon_cates` VALUES ('178', '妈妈用品', 'mamayongpin', '61', '3', '0,6,61,', '0');
INSERT INTO `groupon_cates` VALUES ('179', '宝宝用品', 'baobaoyongpin', '61', '3', '0,6,61,', '0');
INSERT INTO `groupon_cates` VALUES ('180', '其他', 'qitamyyingyongpin', '61', '3', '0,6,61,', '0');

-- ----------------------------
-- Table structure for `groupon_contract`
-- ----------------------------
DROP TABLE IF EXISTS `groupon_contract`;
CREATE TABLE `groupon_contract` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '合同名称',
  `biz_id` int(10) unsigned NOT NULL COMMENT '商家id',
  `sign_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '合同签订时间',
  `online_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '预计上线时间',
  `end_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '团购结束时间',
  `create_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '签约人',
  `if_billing` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '是否开发票 0=不开发票 1=需要开具发票',
  `examine_status` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '合同状态1=待提交2=待审核3=审核通过4=驳回5=废除',
  `examine_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '审核人id',
  `examine_reason` varchar(128) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '审核原因',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`),
  KEY `biz_id` (`biz_id`,`examine_status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='团购商家合同';

-- ----------------------------
-- Records of groupon_contract
-- ----------------------------

-- ----------------------------
-- Table structure for `groupon_coupon`
-- ----------------------------
DROP TABLE IF EXISTS `groupon_coupon`;
CREATE TABLE `groupon_coupon` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(16) CHARACTER SET utf8 NOT NULL COMMENT '券号',
  `pass` char(6) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '券密码',
  `groupon_id` int(10) unsigned NOT NULL COMMENT '团购id',
  `biz_id` int(10) unsigned NOT NULL COMMENT '商家id',
  `order_id` bigint(20) unsigned NOT NULL COMMENT '订单id',
  `user_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '用户id',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '1未消费2已消费3已退款4已过期',
  `sms` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '短信发送次数',
  `consume_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '消费时间',
  `ref_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '退款时间',
  `expire_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '过期时间',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `seller_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '销售员id',
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`),
  KEY `groupon_id` (`groupon_id`,`biz_id`,`order_id`,`pass`,`status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='团购券表';

-- ----------------------------
-- Records of groupon_coupon
-- ----------------------------

-- ----------------------------
-- Table structure for `groupon_shop`
-- ----------------------------
DROP TABLE IF EXISTS `groupon_shop`;
CREATE TABLE `groupon_shop` (
  `groupon_id` int(10) unsigned NOT NULL COMMENT '团购id',
  `shop_id` int(10) unsigned NOT NULL COMMENT '分店id',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`groupon_id`,`shop_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='团购项目和分店关系表';

-- ----------------------------
-- Records of groupon_shop
-- ----------------------------

-- ----------------------------
-- Table structure for `item`
-- ----------------------------
DROP TABLE IF EXISTS `item`;
CREATE TABLE `item` (
  `item_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Item ID',
  `category_id` int(10) unsigned NOT NULL COMMENT 'Category ID',
  `outer_id` varchar(45) DEFAULT NULL,
  `title` varchar(255) NOT NULL COMMENT '名称',
  `stock` int(10) NOT NULL DEFAULT '999999999',
  `min_number` int(10) unsigned NOT NULL DEFAULT '1' COMMENT '最少订货量',
  `price` decimal(10,2) unsigned NOT NULL COMMENT '价格',
  `currency` varchar(20) NOT NULL COMMENT '币种',
  `props` longtext NOT NULL COMMENT '商品属性 格式：pid:vid;pid:vid',
  `props_name` longtext NOT NULL COMMENT '商品属性名称。标识着props内容里面的pid和vid所对应的名称。格式为：pid1:vid1:pid_name1:vid_name1;pid2:vid2:pid_name2:vid_name2……(注：属性名称中的冒号":"被转换为："#cln#"; 分号";"被转换为："#scln#" )',
  `desc` longtext NOT NULL COMMENT '描述',
  `shipping_fee` decimal(10,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '运费',
  `is_show` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否显示',
  `is_promote` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否促销',
  `is_new` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否新品',
  `is_hot` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否热销',
  `is_best` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否精品',
  `click_count` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '点击量',
  `wish_count` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '收藏数',
  `review_count` int(10) NOT NULL DEFAULT '0' COMMENT '浏览数',
  `deal_count` int(10) NOT NULL DEFAULT '0' COMMENT '购买数',
  `create_time` int(10) unsigned NOT NULL COMMENT '创建时间',
  `update_time` int(10) unsigned NOT NULL COMMENT '更新时间',
  `language` varchar(45) NOT NULL,
  `country` int(10) unsigned NOT NULL,
  `state` int(10) unsigned NOT NULL,
  `city` int(10) unsigned NOT NULL,
  PRIMARY KEY (`item_id`),
  KEY `fk_item_category1_idx` (`category_id`),
  KEY `fk_item_area1_idx` (`country`),
  KEY `fk_item_area2_idx` (`state`),
  KEY `fk_item_area3_idx` (`city`),
  CONSTRAINT `fk_item_category1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of item
-- ----------------------------
INSERT INTO `item` VALUES ('61', '129', '', '墙面美容', '999999999', '1', '100.00', '㎡', '{\"13\":[\"13:43\",\"13:44\",\"13:45\",\"13:46\"],\"14\":[\"14:47\",\"14:48\",\"14:49\"]}', '{\"\\u670d\\u52a1\":[\"\\u670d\\u52a1:\\u8f6f\\u5305     \",\"\\u670d\\u52a1:\\u5730\\u677f     \",\"\\u670d\\u52a1:\\u74f7\\u7816     \",\"\\u670d\\u52a1:\\u9632\\u6c34     \"],\"\\u989c\\u8272\":[\"\\u989c\\u8272:\\u6d45\\u7070\\u8272 \",\"\\u989c\\u8272:\\u5929\\u84dd\\u8272 \",\"\\u989c\\u8272:\\u9ec4\\u8272 \"]}', '<p>asdasd</p>\r\n', '0.00', '1', '1', '1', '1', '0', '271', '0', '0', '2', '1417754585', '1419582487', 'zh_cn', '100000', '340000', '340100');
INSERT INTO `item` VALUES ('62', '131', '', '家电清洗', '999999999', '1', '3490.00', '次', '{\"12\":[\"12:32\",\"12:33\",\"12:34\",\"12:217\",\"12:218\",\"12:219\",\"12:220\",\"12:221\"]}', '{\"\\u670d\\u52a1\":[\"\\u670d\\u52a1:\\u6cb9\\u70df\\u673a\\u6e05\\u6d17 \",\"\\u670d\\u52a1:\\u7a7a\\u8c03\\u6e05\\u6d17 \",\"\\u670d\\u52a1:\\u51b0\\u7bb1\\u6e05\\u6d17 \",\"\\u670d\\u52a1:\\u7a97\\u5e18\",\"\\u670d\\u52a1:\\u7eb1\\u7a97\\u95e8\",\"\\u670d\\u52a1:\\u6c99\\u53d1\\u6e05\\u6d17\\/\\u62a4\\u7406\",\"\\u670d\\u52a1:\\u827a\\u672f\\u88c5\\u9970\",\"\\u670d\\u52a1:\\u706f\\u5149\"]}', '<p>asdasd</p>\r\n\r\n<p><iframe frameborder=\"0\" height=\"498\" src=\"http://player.youku.com/embed/XMzQ0MjQyNDcy\" width=\"510\"></iframe></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><iframe frameborder=\"0\" height=\"498\" src=\"http://player.youku.com/embed/XNDIxMDUwMTYw\" width=\"510\"></iframe></p>\r\n', '0.00', '1', '1', '1', '1', '0', '283', '0', '0', '3', '1417754585', '1419582496', 'zh_cn', '100000', '340000', '340100');
INSERT INTO `item` VALUES ('66', '135', '', '简约风格-展示产品', '999999999', '1', '123.00', '㎡', '{\"17\":[\"17:147\",\"17:148\",\"17:149\",\"17:150\",\"17:151\",\"17:152\",\"17:153\",\"17:154\",\"17:155\",\"17:156\",\"17:157\",\"17:158\",\"17:159\"],\"21\":[\"21:106\",\"21:107\",\"21:108\",\"21:109\",\"21:110\",\"21:111\"]}', '{\"\\u623f\\u95f4\":[\"\\u623f\\u95f4:\\u5168\\u90e8\\u623f\\u95f4\",\"\\u623f\\u95f4:\\u5ba2\\u5385\",\"\\u623f\\u95f4:\\u9910\\u5385\",\"\\u623f\\u95f4:\\u53a8\\u623f\",\"\\u623f\\u95f4:\\u4e3b\\u5367\",\"\\u623f\\u95f4:\\u6b21\\u5367\",\"\\u623f\\u95f4:\\u6b21\\u5367 1\",\"\\u623f\\u95f4:\\u6b21\\u5367 2\",\"\\u623f\\u95f4:\\u513f\\u7ae5\\u623f\",\"\\u623f\\u95f4:\\u50a8\\u7269\\u95f4\",\"\\u623f\\u95f4:\\u8863\\u5e3d\\u95f4\",\"\\u623f\\u95f4:\\u536b\\u751f\\u95f4\",\"\\u623f\\u95f4:\\u9633\\u53f0\"],\"\\u989c\\u8272\":[\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\",\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\",\"\\u989c\\u8272:\\u9ec4\\u8272\",\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\",\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\",\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\"]}', '<p>qweqeqeqweqweqw</p>\r\n', '0.00', '1', '1', '1', '1', '1', '19', '0', '0', '0', '1418187591', '1419579117', 'zh_cn', '100000', '340000', '340100');
INSERT INTO `item` VALUES ('67', '136', '', '现代风格-产品展示', '999999999', '1', '123.00', '㎡', '{\"18\":[\"18:171\",\"18:172\",\"18:173\",\"18:174\",\"18:175\",\"18:176\",\"18:177\",\"18:178\",\"18:179\",\"18:180\",\"18:181\",\"18:182\",\"18:183\"],\"22\":[\"22:112\",\"22:113\",\"22:114\",\"22:115\",\"22:116\",\"22:117\"]}', '{\"\\u623f\\u95f4\":[\"\\u623f\\u95f4:\\u5168\\u90e8\\u623f\\u95f4\",\"\\u623f\\u95f4:\\u5ba2\\u5385\",\"\\u623f\\u95f4:\\u9910\\u5385\",\"\\u623f\\u95f4:\\u53a8\\u623f\",\"\\u623f\\u95f4:\\u4e3b\\u5367\",\"\\u623f\\u95f4:\\u6b21\\u5367\",\"\\u623f\\u95f4:\\u6b21\\u5367 1\",\"\\u623f\\u95f4:\\u6b21\\u5367 2\",\"\\u623f\\u95f4:\\u513f\\u7ae5\\u623f\",\"\\u623f\\u95f4:\\u50a8\\u7269\\u95f4\",\"\\u623f\\u95f4:\\u8863\\u5e3d\\u95f4\",\"\\u623f\\u95f4:\\u536b\\u751f\\u95f4\",\"\\u623f\\u95f4:\\u9633\\u53f0\"],\"\\u989c\\u8272\":[\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\",\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\",\"\\u989c\\u8272:\\u9ec4\\u8272\",\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\",\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\",\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\"]}', '<p>weqeqweqweqw</p>\r\n', '0.00', '1', '1', '1', '1', '1', '22', '0', '0', '0', '1418188179', '1419581513', 'zh_cn', '100000', '340000', '340100');
INSERT INTO `item` VALUES ('68', '137', '', '混搭风格-产品展示', '999999999', '1', '123.00', '㎡', '{\"19\":[\"19:184\",\"19:185\",\"19:186\",\"19:187\",\"19:188\",\"19:189\",\"19:190\",\"19:191\",\"19:192\",\"19:193\",\"19:194\",\"19:195\",\"19:196\"],\"23\":[\"23:118\",\"23:119\",\"23:120\",\"23:121\",\"23:122\",\"23:123\"]}', '{\"\\u623f\\u95f4\":[\"\\u623f\\u95f4:\\u5168\\u90e8\\u623f\\u95f4\",\"\\u623f\\u95f4:\\u5ba2\\u5385\",\"\\u623f\\u95f4:\\u9910\\u5385\",\"\\u623f\\u95f4:\\u53a8\\u623f\",\"\\u623f\\u95f4:\\u4e3b\\u5367\",\"\\u623f\\u95f4:\\u6b21\\u5367\",\"\\u623f\\u95f4:\\u6b21\\u5367 1\",\"\\u623f\\u95f4:\\u6b21\\u5367 2\",\"\\u623f\\u95f4:\\u513f\\u7ae5\\u623f\",\"\\u623f\\u95f4:\\u50a8\\u7269\\u95f4\",\"\\u623f\\u95f4:\\u8863\\u5e3d\\u95f4\",\"\\u623f\\u95f4:\\u536b\\u751f\\u95f4\",\"\\u623f\\u95f4:\\u9633\\u53f0\"],\"\\u989c\\u8272\":[\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\",\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\",\"\\u989c\\u8272:\\u9ec4\\u8272\",\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\",\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\",\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\"]}', '<p>eqweqweqwe</p>\r\n', '0.00', '1', '1', '1', '1', '1', '9', '0', '0', '1', '1418190970', '1419576294', 'zh_cn', '100000', '340000', '340100');
INSERT INTO `item` VALUES ('69', '138', '', '欧式风格-产品展示', '999999999', '1', '123.00', '㎡', '{\"20\":[\"20:197\",\"20:198\",\"20:199\",\"20:200\",\"20:201\",\"20:202\",\"20:203\",\"20:204\",\"20:205\",\"20:206\",\"20:207\",\"20:208\",\"20:209\"],\"24\":[\"24:124\",\"24:125\",\"24:126\",\"24:127\",\"24:128\",\"24:129\"]}', '{\"\\u623f\\u95f4\":[\"\\u623f\\u95f4:\\u5168\\u90e8\\u623f\\u95f4\",\"\\u623f\\u95f4:\\u5ba2\\u5385\",\"\\u623f\\u95f4:\\u9910\\u5385\",\"\\u623f\\u95f4:\\u53a8\\u623f\",\"\\u623f\\u95f4:\\u4e3b\\u5367\",\"\\u623f\\u95f4:\\u6b21\\u5367\",\"\\u623f\\u95f4:\\u6b21\\u5367 1\",\"\\u623f\\u95f4:\\u6b21\\u5367 2\",\"\\u623f\\u95f4:\\u513f\\u7ae5\\u623f\",\"\\u623f\\u95f4:\\u50a8\\u7269\\u95f4\",\"\\u623f\\u95f4:\\u8863\\u5e3d\\u95f4\",\"\\u623f\\u95f4:\\u536b\\u751f\\u95f4\",\"\\u623f\\u95f4:\\u9633\\u53f0\"],\"\\u989c\\u8272\":[\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\",\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\",\"\\u989c\\u8272:\\u9ec4\\u8272\",\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\",\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\",\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\"]}', '<p>fasfasfadsf</p>\r\n', '0.00', '1', '1', '1', '1', '1', '0', '0', '0', '0', '1418191191', '1419492406', 'zh_cn', '100000', '340000', '340100');
INSERT INTO `item` VALUES ('76', '133', '', '壁纸展示', '999999999', '1', '150.00', '㎡', '{\"26\":[\"26:132\",\"26:133\",\"26:134\"]}', '{\"\\u989c\\u8272\":[\"\\u989c\\u8272:\\u7eff\\u8272\",\"\\u989c\\u8272:\\u9ec4\\u8272\",\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\"]}', '<p>赞</p>\r\n', '0.00', '1', '1', '1', '1', '1', '16', '0', '0', '1', '1419474547', '1419579783', 'zh_cn', '100000', '110000', '110100');
INSERT INTO `item` VALUES ('77', '133', '', '壁纸展示', '999999999', '1', '120.00', '㎡', '{\"26\":[\"26:132\",\"26:133\",\"26:134\"]}', '{\"\\u989c\\u8272\":[\"\\u989c\\u8272:\\u7eff\\u8272\",\"\\u989c\\u8272:\\u9ec4\\u8272\",\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\"]}', '<p>欧式风</p>\r\n', '0.00', '1', '1', '1', '1', '1', '1', '0', '0', '0', '1419474719', '1419558505', 'zh_cn', '100000', '120000', '120100');
INSERT INTO `item` VALUES ('78', '133', '', '壁纸展示', '999999999', '1', '130.00', '㎡', '{\"26\":[\"26:132\",\"26:133\",\"26:134\"]}', '{\"\\u989c\\u8272\":[\"\\u989c\\u8272:\\u7eff\\u8272\",\"\\u989c\\u8272:\\u9ec4\\u8272\",\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\"]}', '<p>田园风</p>\r\n', '0.00', '1', '1', '1', '1', '1', '0', '0', '0', '0', '1419474816', '1419558518', 'zh_cn', '100000', '130000', '130100');
INSERT INTO `item` VALUES ('79', '133', '', '壁纸展示', '999999999', '1', '125.00', '㎡', '{\"26\":[\"26:132\",\"26:133\",\"26:134\"]}', '{\"\\u989c\\u8272\":[\"\\u989c\\u8272:\\u7eff\\u8272\",\"\\u989c\\u8272:\\u9ec4\\u8272\",\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\"]}', '<p>壁纸</p>\r\n', '0.00', '1', '1', '1', '1', '1', '0', '0', '0', '0', '1419474934', '1419558532', 'zh_cn', '100000', '140000', '140100');
INSERT INTO `item` VALUES ('82', '130', '', '快捷刷新（涂料） ', '999999999', '1', '100.00', '㎡', '{\"31\":[\"31:211\",\"31:212\",\"31:213\",\"31:214\",\"31:215\",\"31:216\"],\"32\":[\"32:222\",\"32:223\",\"32:224\",\"32:225\"]}', '{\"\\u989c\\u8272\":[\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\",\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\",\"\\u989c\\u8272:\\u9ec4\\u8272\",\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\",\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\",\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\"],\"\\u5957\\u9910\\u7c7b\\u578b\":[\"\\u5957\\u9910\\u7c7b\\u578b:\\u7ecf\\u6d4e\\u578b \",\"\\u5957\\u9910\\u7c7b\\u578b:\\u8d85\\u503c\\u578b \",\"\\u5957\\u9910\\u7c7b\\u578b:\\u4f18\\u9009\\u578b \",\"\\u5957\\u9910\\u7c7b\\u578b:\\u5c0a\\u4eab\\u578b \"]}', '<p>123</p>\r\n', '0.00', '1', '1', '1', '1', '1', '33', '0', '0', '0', '1419495114', '1419582500', 'zh_cn', '100000', '110000', '110100');

-- ----------------------------
-- Table structure for `item_img`
-- ----------------------------
DROP TABLE IF EXISTS `item_img`;
CREATE TABLE `item_img` (
  `item_img_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Item Img ID',
  `item_id` int(10) unsigned NOT NULL COMMENT 'Item ID',
  `pic` varchar(255) NOT NULL COMMENT '图片url',
  `position` tinyint(3) unsigned NOT NULL COMMENT '图片位置',
  `create_time` int(10) unsigned NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`item_img_id`),
  KEY `fk_item_img_item1_idx` (`item_id`),
  CONSTRAINT `fk_item_img_item1` FOREIGN KEY (`item_id`) REFERENCES `item` (`item_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=133 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of item_img
-- ----------------------------
INSERT INTO `item_img` VALUES ('107', '66', '/upload/item/01.jpg', '0', '1419489741');
INSERT INTO `item_img` VALUES ('108', '67', '/upload/item/02.jpg', '0', '1419491504');
INSERT INTO `item_img` VALUES ('109', '68', '/upload/item/03.jpg', '0', '1419492011');
INSERT INTO `item_img` VALUES ('110', '69', '/upload/item/04.jpg', '0', '1419492406');
INSERT INTO `item_img` VALUES ('111', '61', '/upload/jianyipingtu/10000.jpg', '0', '1419579761');
INSERT INTO `item_img` VALUES ('112', '61', '/upload/jianyipingtu/10001.jpg', '1', '1419579761');
INSERT INTO `item_img` VALUES ('113', '62', '/upload/jianyipingtu/10002.jpg', '0', '1419580097');
INSERT INTO `item_img` VALUES ('114', '62', '/upload/jianyipingtu/10003.jpg', '1', '1419580097');
INSERT INTO `item_img` VALUES ('123', '76', '/upload/jianyipingtu/wfwper2.jpg', '0', '1419558475');
INSERT INTO `item_img` VALUES ('124', '77', '/upload/jianyipingtu/10000.jpg', '0', '1419558505');
INSERT INTO `item_img` VALUES ('125', '78', '/upload/jianyipingtu/10001.jpg', '0', '1419558518');
INSERT INTO `item_img` VALUES ('126', '79', '/upload/jianyipingtu/wfwper3.jpg', '0', '1419558532');
INSERT INTO `item_img` VALUES ('130', '82', '/upload/kuaijieshuxin/kuaijieshuaxin1.jpg', '0', '1419582488');
INSERT INTO `item_img` VALUES ('131', '82', '/upload/kuaijieshuxin/kuaijieshuaxin2.jpg', '1', '1419582488');
INSERT INTO `item_img` VALUES ('132', '82', '/upload/kuaijieshuxin/kuaijieshuaxin3.jpg', '2', '1419582488');

-- ----------------------------
-- Table structure for `item_prop`
-- ----------------------------
DROP TABLE IF EXISTS `item_prop`;
CREATE TABLE `item_prop` (
  `item_prop_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '属性 ID 例：品牌的PID=20000',
  `category_id` int(10) unsigned NOT NULL,
  `parent_prop_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '上级属性ID',
  `parent_value_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '上级属性值ID',
  `prop_name` varchar(100) NOT NULL,
  `prop_alias` varchar(100) DEFAULT NULL,
  `type` tinyint(1) unsigned NOT NULL COMMENT '属性值类型。可选值：input(输入)、optional（枚举）multiCheck （多选）',
  `is_key_prop` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否关键属性。可选值:1(是),0(否),搜索属性',
  `is_sale_prop` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否销售属性。可选值:1(是),0(否)',
  `is_color_prop` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否颜色属性。可选值:1(是),0(否)',
  `must` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '发布产品或商品时是否为必选属性。可选值:1(是),0(否)',
  `multi` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '发布产品或商品时是否可以多选。可选值:1(是),0(否)',
  `status` tinyint(1) DEFAULT NULL COMMENT '状态。可选值:normal(正常),deleted(删除)',
  `sort_order` tinyint(3) unsigned DEFAULT '255',
  `item_propcol` varchar(45) DEFAULT NULL,
  `is_combo_prop` tinyint(1) unsigned DEFAULT '0',
  PRIMARY KEY (`item_prop_id`),
  KEY `fk_item_prop_category1_idx` (`category_id`),
  CONSTRAINT `fk_item_prop_category1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of item_prop
-- ----------------------------
INSERT INTO `item_prop` VALUES ('12', '131', '0', '0', '服务', '', '2', '1', '1', '0', '0', '0', '1', '255', null, '0');
INSERT INTO `item_prop` VALUES ('13', '129', '0', '0', '服务', '', '2', '1', '1', '0', '1', '1', '1', '255', null, '0');
INSERT INTO `item_prop` VALUES ('14', '129', '0', '0', '颜色', '', '2', '1', '1', '1', '1', '1', '1', '255', null, '0');
INSERT INTO `item_prop` VALUES ('17', '135', '0', '0', '房间', '', '2', '1', '1', '0', '1', '1', '1', '255', null, '0');
INSERT INTO `item_prop` VALUES ('18', '136', '0', '0', '房间', '', '2', '1', '1', '0', '1', '1', '1', '255', null, '0');
INSERT INTO `item_prop` VALUES ('19', '137', '0', '0', '房间', '', '2', '1', '1', '0', '1', '1', '1', '255', null, '0');
INSERT INTO `item_prop` VALUES ('20', '138', '0', '0', '房间', '', '2', '1', '1', '0', '0', '1', '1', '255', null, '0');
INSERT INTO `item_prop` VALUES ('21', '135', '0', '0', '颜色', '', '2', '1', '1', '1', '1', '1', '1', '255', null, '0');
INSERT INTO `item_prop` VALUES ('22', '136', '0', '0', '颜色', '', '2', '1', '1', '1', '1', '1', '1', '255', null, '0');
INSERT INTO `item_prop` VALUES ('23', '137', '0', '0', '颜色', '', '2', '1', '1', '1', '1', '1', '1', '255', null, '0');
INSERT INTO `item_prop` VALUES ('24', '138', '0', '0', '颜色', '', '2', '1', '1', '1', '1', '1', '1', '255', null, '0');
INSERT INTO `item_prop` VALUES ('26', '133', '0', '0', '颜色', '', '2', '1', '1', '1', '1', '1', '1', '255', null, '0');
INSERT INTO `item_prop` VALUES ('31', '130', '0', '0', '颜色', '', '2', '1', '1', '1', '1', '1', '1', '255', null, '0');
INSERT INTO `item_prop` VALUES ('32', '130', '0', '0', '套餐类型', '', '2', '1', '1', '0', '1', '0', '1', '255', null, '1');

-- ----------------------------
-- Table structure for `language`
-- ----------------------------
DROP TABLE IF EXISTS `language`;
CREATE TABLE `language` (
  `language_id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(10) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`language_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of language
-- ----------------------------
INSERT INTO `language` VALUES ('1', 'zh-cn', 'Chinese');
INSERT INTO `language` VALUES ('2', 'en', 'English');
INSERT INTO `language` VALUES ('3', 'de', 'German');
INSERT INTO `language` VALUES ('4', 'ru', 'Russian');
INSERT INTO `language` VALUES ('5', 'it', 'Italian');

-- ----------------------------
-- Table structure for `location`
-- ----------------------------
DROP TABLE IF EXISTS `location`;
CREATE TABLE `location` (
  `location_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `country` varchar(45) NOT NULL COMMENT '国家',
  `state` varchar(45) NOT NULL COMMENT '省份',
  `city` varchar(45) NOT NULL COMMENT '城市',
  `district` varchar(45) NOT NULL COMMENT '县、区',
  `address` varchar(255) NOT NULL COMMENT '详细地址',
  `zip` varchar(45) NOT NULL COMMENT '邮编',
  PRIMARY KEY (`location_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of location
-- ----------------------------

-- ----------------------------
-- Table structure for `lookup`
-- ----------------------------
DROP TABLE IF EXISTS `lookup`;
CREATE TABLE `lookup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `code` int(11) NOT NULL,
  `type` varchar(128) NOT NULL,
  `position` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lookup
-- ----------------------------
INSERT INTO `lookup` VALUES ('1', 'Draft', '1', 'PostStatus', '1');
INSERT INTO `lookup` VALUES ('2', 'Published', '2', 'PostStatus', '2');
INSERT INTO `lookup` VALUES ('3', 'Archived', '3', 'PostStatus', '3');
INSERT INTO `lookup` VALUES ('4', 'Pending Approval', '1', 'CommentStatus', '1');
INSERT INTO `lookup` VALUES ('5', 'Approved', '2', 'CommentStatus', '2');

-- ----------------------------
-- Table structure for `menu`
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `root` int(10) unsigned DEFAULT NULL,
  `lft` int(10) unsigned NOT NULL,
  `rgt` int(10) unsigned NOT NULL,
  `level` smallint(5) unsigned NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `position` varchar(45) DEFAULT NULL,
  `if_show` tinyint(1) DEFAULT NULL,
  `memo` text,
  PRIMARY KEY (`id`),
  KEY `root` (`root`),
  KEY `lft` (`lft`),
  KEY `rgt` (`rgt`),
  KEY `level` (`level`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES ('1', '1', '1', '40', '1', '前台菜单', '', '', '', '1', '');
INSERT INTO `menu` VALUES ('2', '2', '1', '2', '1', '后台菜单', '', '', '', '1', '');
INSERT INTO `menu` VALUES ('3', '1', '2', '3', '2', '顶部导航', '', '', '', '1', '');
INSERT INTO `menu` VALUES ('4', '1', '20', '39', '2', '主目录菜单', '', '', '', '1', '');
INSERT INTO `menu` VALUES ('5', '1', '4', '19', '2', '底部导航', '', '', '', '1', '');
INSERT INTO `menu` VALUES ('6', '1', '21', '22', '3', '首页', 'index.php', '/upload/menu/menu1.png', '', '1', '');
INSERT INTO `menu` VALUES ('7', '1', '23', '24', '3', '墙面换新', 'item/61', '/upload/menu/menu2.png', '', '1', '');
INSERT INTO `menu` VALUES ('8', '1', '25', '26', '3', '清洗服务', 'item/62', '/upload/menu/menu3.png', null, '1', '');
INSERT INTO `menu` VALUES ('9', '1', '27', '28', '3', '服务流程', 'site/serverProcess', '/upload/menu/menu4.png', null, '1', '');
INSERT INTO `menu` VALUES ('10', '1', '29', '30', '3', '服务优势', 'site/serverAdvantage', '/upload/menu/menu5.png', null, '1', '');
INSERT INTO `menu` VALUES ('12', '1', '31', '32', '3', '服务店查询', 'storeSearch/index', '/upload/menu/menu6.png', null, '1', '');
INSERT INTO `menu` VALUES ('15', '1', '5', '6', '3', '关于我们', 'page/about', null, null, '1', '');
INSERT INTO `menu` VALUES ('16', '1', '7', '8', '3', '批发政策', 'page/wholesale', null, null, '1', '');
INSERT INTO `menu` VALUES ('17', '1', '9', '10', '3', '品质保证', 'page/qualityAssurance', null, null, '1', '');
INSERT INTO `menu` VALUES ('18', '1', '11', '12', '3', '业务合作', 'page/coop', null, null, '1', '');
INSERT INTO `menu` VALUES ('19', '1', '13', '14', '3', '隐私声明', 'page/privacy', null, null, '1', '');
INSERT INTO `menu` VALUES ('20', '1', '15', '16', '3', '加入我们', 'page/join', null, null, '1', '');
INSERT INTO `menu` VALUES ('21', '1', '17', '18', '3', '联系我们', 'page/contact', null, null, '1', '');

-- ----------------------------
-- Table structure for `message`
-- ----------------------------
DROP TABLE IF EXISTS `message`;
CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `language` varchar(16) NOT NULL,
  `translation` text,
  PRIMARY KEY (`id`,`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of message
-- ----------------------------
INSERT INTO `message` VALUES ('1', 'zh_cn', '注册');
INSERT INTO `message` VALUES ('2', 'zh_cn', '注册');
INSERT INTO `message` VALUES ('3', 'zh_cn', '带有星号 * 的是必须的。');
INSERT INTO `message` VALUES ('4', 'zh_cn', '带有星号 * 的是必须的。');
INSERT INTO `message` VALUES ('5', 'zh_cn', '不正确的会员名（长度3至20个字符）.');
INSERT INTO `message` VALUES ('7', 'zh_cn', '不正确的密码（最小长度为4个字符）。');
INSERT INTO `message` VALUES ('8', 'zh_cn', '不正确的密码（最小长度为4个字符）.');
INSERT INTO `message` VALUES ('9', 'zh_cn', '会员名已经存在。');
INSERT INTO `message` VALUES ('10', 'zh_cn', '会员名已经存在。');
INSERT INTO `message` VALUES ('11', 'zh_cn', 'Email地址已经存在.');
INSERT INTO `message` VALUES ('13', 'zh_cn', '不正确的符号。（A - Z0- 9）');
INSERT INTO `message` VALUES ('14', 'zh_cn', '不正确的符号。（A - Z0- 9）');
INSERT INTO `message` VALUES ('15', 'zh_cn', '重复密码不正确。');
INSERT INTO `message` VALUES ('16', 'zh_cn', '重复密码不正确。');
INSERT INTO `message` VALUES ('17', 'zh_cn', 'Id');
INSERT INTO `message` VALUES ('18', 'zh_cn', 'Id');
INSERT INTO `message` VALUES ('19', 'zh_cn', '会员名');
INSERT INTO `message` VALUES ('20', 'zh_cn', '会员名');
INSERT INTO `message` VALUES ('21', 'zh_cn', '密码');
INSERT INTO `message` VALUES ('22', 'zh_cn', '密码');
INSERT INTO `message` VALUES ('23', 'zh_cn', '重复密码');
INSERT INTO `message` VALUES ('25', 'zh_cn', 'E-mail');
INSERT INTO `message` VALUES ('26', 'zh_cn', 'E-mail');
INSERT INTO `message` VALUES ('27', 'zh_cn', '验证码');
INSERT INTO `message` VALUES ('28', 'zh_cn', '验证码');
INSERT INTO `message` VALUES ('29', 'zh_cn', '激活码');
INSERT INTO `message` VALUES ('31', 'zh_cn', '注册日期');
INSERT INTO `message` VALUES ('32', 'zh_cn', '注册日期');
INSERT INTO `message` VALUES ('33', 'zh_cn', '上次访问');
INSERT INTO `message` VALUES ('34', 'zh_cn', '上次访问');
INSERT INTO `message` VALUES ('35', 'zh_cn', '超级会员');
INSERT INTO `message` VALUES ('37', 'zh_cn', '状态');
INSERT INTO `message` VALUES ('38', 'zh_cn', '状态');
INSERT INTO `message` VALUES ('39', 'zh_cn', '最小密码长度为4的符号。');
INSERT INTO `message` VALUES ('40', 'zh_cn', '最小密码长度为4的符号。');
INSERT INTO `message` VALUES ('43', 'zh_cn', '会员ID');
INSERT INTO `message` VALUES ('44', 'zh_cn', '会员ID');
INSERT INTO `message` VALUES ('47', 'zh_cn', '请输入上图所显示的字母。');
INSERT INTO `message` VALUES ('49', 'zh_cn', '字母不区分大小写。');
INSERT INTO `message` VALUES ('50', 'zh_cn', '字母不区分大小写。');
INSERT INTO `message` VALUES ('51', 'zh_cn', '注册');
INSERT INTO `message` VALUES ('52', 'zh_cn', '注册');
INSERT INTO `message` VALUES ('71', 'zh_cn', '登录');
INSERT INTO `message` VALUES ('72', 'zh_cn', '登录');
INSERT INTO `message` VALUES ('73', 'zh_cn', '请填写您的登录凭据，格式如下：');
INSERT INTO `message` VALUES ('74', 'zh_cn', '请填写您的登录凭据，格式如下：');
INSERT INTO `message` VALUES ('75', 'zh_cn', '下次记住我');
INSERT INTO `message` VALUES ('76', 'zh_cn', '下次记住我');
INSERT INTO `message` VALUES ('77', 'zh_cn', '会员名或邮箱');
INSERT INTO `message` VALUES ('78', 'zh_cn', '会员名或邮箱');
INSERT INTO `message` VALUES ('79', 'zh_cn', '忘记密码？');
INSERT INTO `message` VALUES ('80', 'zh_cn', ' 忘记密码？');
INSERT INTO `message` VALUES ('84', 'zh_cn', '恢复');
INSERT INTO `message` VALUES ('85', 'zh_cn', '恢复');
INSERT INTO `message` VALUES ('86', 'zh_cn', '请输入您的账号或电子邮件地址。');
INSERT INTO `message` VALUES ('87', 'zh_cn', '请输入您的账号或电子邮件地址。');
INSERT INTO `message` VALUES ('94', 'zh_cn', '修改密码');
INSERT INTO `message` VALUES ('95', 'zh_cn', '修改密码');
INSERT INTO `message` VALUES ('96', 'zh_cn', '旧密码');
INSERT INTO `message` VALUES ('97', 'zh_cn', '旧密码');
INSERT INTO `message` VALUES ('98', 'zh_cn', '保存');
INSERT INTO `message` VALUES ('99', 'zh_cn', '保存');

-- ----------------------------
-- Table structure for `newsletter_subscriber`
-- ----------------------------
DROP TABLE IF EXISTS `newsletter_subscriber`;
CREATE TABLE `newsletter_subscriber` (
  `subscriber_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(10) unsigned NOT NULL DEFAULT '0',
  `email` varchar(150) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `confirm_code` varchar(32) DEFAULT NULL,
  `change_status_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`subscriber_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of newsletter_subscriber
-- ----------------------------
INSERT INTO `newsletter_subscriber` VALUES ('1', '0', '11@11.com', '0', 'a9043891fe9a5bf5da14eadc35abb89d', '2013-06-09 10:08:14');
INSERT INTO `newsletter_subscriber` VALUES ('2', '0', '22@11.com', '0', '7f3de267eff024b6328f1c9006ef811d', '2013-06-09 10:10:14');
INSERT INTO `newsletter_subscriber` VALUES ('3', '0', '11@11.com', '0', 'c1ba2ab1d899888625257d292cd3abb4', '2013-06-09 10:11:46');
INSERT INTO `newsletter_subscriber` VALUES ('4', '0', '11@11.com', '0', 'e7a9dd1ad87a3c3c181ddfce4da1274e', '2013-06-09 10:13:10');
INSERT INTO `newsletter_subscriber` VALUES ('5', '0', '11@11.com', '0', '2e9a2a03303065b1f6d546f615f9af41', '2013-06-09 10:18:56');
INSERT INTO `newsletter_subscriber` VALUES ('6', '0', '11@11.com', '0', 'e4f459d8ded3422488ecf55feb6b4463', '2013-06-09 10:19:06');
INSERT INTO `newsletter_subscriber` VALUES ('7', '0', '11@11.com', '0', '8cd35842e2a6e673ed8c3dd254b9ea76', '2013-06-09 10:20:16');
INSERT INTO `newsletter_subscriber` VALUES ('8', '0', '11@11.com', '0', '643649c31aeb5901fb21160e236ab078', '2013-06-09 10:21:08');
INSERT INTO `newsletter_subscriber` VALUES ('9', '0', '11@11.com', '0', '1faf6f146886982c4caaa86c1b38d7c8', '2013-06-09 10:21:11');
INSERT INTO `newsletter_subscriber` VALUES ('10', '0', '11@11.com', '0', '915b594147435625fb635480a12cfb70', '2013-06-09 10:21:30');
INSERT INTO `newsletter_subscriber` VALUES ('11', '0', '11@11.com', '0', 'a804f736564f03db410a51338fb72125', '2013-06-09 10:22:37');
INSERT INTO `newsletter_subscriber` VALUES ('12', '0', '11@11.com', '0', '14c65f64110cbd85a8eb5eb8d8196e45', '2013-06-09 10:23:58');
INSERT INTO `newsletter_subscriber` VALUES ('13', '0', '11@11.com', '0', 'f7daf57aa3b58f3f5e39451398ed615d', '2013-06-09 10:24:20');
INSERT INTO `newsletter_subscriber` VALUES ('14', '0', '11@11.com', '0', '8958a6d6b9b2849af5d47936d8ee4692', '2013-06-09 10:24:22');
INSERT INTO `newsletter_subscriber` VALUES ('15', '0', '11@11.com', '0', 'c6dd61ab4b2d6f8d511c308261d3ac24', '2013-06-09 10:24:37');
INSERT INTO `newsletter_subscriber` VALUES ('16', '0', '11@11.com', '0', '89176a6270d5de8c684369d5a9f2e904', '2013-06-09 10:24:47');
INSERT INTO `newsletter_subscriber` VALUES ('17', '0', '11@11.com', '0', 'd291fb3ff2df332f3b4d7aadc7499d31', '2013-06-09 10:25:21');
INSERT INTO `newsletter_subscriber` VALUES ('18', '0', '11@11.com', '0', 'bf7fae15f4e9ac8eadf122d19cbbc14e', '2013-06-09 10:25:26');
INSERT INTO `newsletter_subscriber` VALUES ('19', '0', '11@11.com', '0', 'e692899abcf5c96bb6526daf36831d4a', '2013-06-09 10:27:15');
INSERT INTO `newsletter_subscriber` VALUES ('20', '0', '11@11.com', '0', '9f4aea5779a66d08a00456a0879fc801', '2013-06-09 10:28:51');
INSERT INTO `newsletter_subscriber` VALUES ('21', '0', '11@111.com', '0', '8c77d30d4adea9a6991542a24a4b3840', '2013-06-09 10:39:28');

-- ----------------------------
-- Table structure for `order`
-- ----------------------------
DROP TABLE IF EXISTS `order`;
CREATE TABLE `order` (
  `order_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT NULL,
  `status` tinyint(1) unsigned DEFAULT '1' COMMENT '1. �Ѵ��� 2. ��ȷ�� 3. ���ɵ� 4. �Ѳ��� 5. ʩ���� 6. ʩ����� 7.������ 8. �������',
  `pay_status` tinyint(1) unsigned DEFAULT '0' COMMENT '0. δ���� 1. ���ֽ��� 2. �ѽ���',
  `refund_status` tinyint(1) unsigned DEFAULT '0',
  `comment_status` tinyint(1) unsigned DEFAULT '0',
  `total_fee` decimal(10,2) unsigned DEFAULT '0.00' COMMENT '商品金额（商品价格乘以数量的总金额）。精确到2位小数;单位:元。如:200.07，表示:200元7分',
  `discount` decimal(2,2) DEFAULT NULL,
  `real_fee` decimal(10,2) DEFAULT NULL,
  `pay_fee` decimal(10,2) unsigned DEFAULT '0.00',
  `receiver_name` varchar(45) DEFAULT NULL COMMENT '收货人的姓名',
  `receiver_country` varchar(45) DEFAULT NULL,
  `receiver_state` varchar(45) DEFAULT NULL COMMENT '收货人的所在省份',
  `receiver_city` varchar(45) DEFAULT NULL COMMENT '收货人的所在城市',
  `receiver_district` varchar(45) DEFAULT NULL COMMENT '收货人的所在地区',
  `receiver_address` varchar(255) DEFAULT NULL COMMENT '收货人的详细地址',
  `receiver_zip` varchar(45) DEFAULT NULL COMMENT '收货人的邮编',
  `receiver_mobile` varchar(45) DEFAULT NULL COMMENT '收货人的手机号码',
  `receiver_phone` varchar(45) DEFAULT NULL COMMENT '收货人的电话号码',
  `memo` text COMMENT '备注',
  `pay_time` int(10) unsigned DEFAULT NULL,
  `create_time` int(10) unsigned DEFAULT NULL,
  `update_time` int(10) unsigned DEFAULT NULL,
  `order_source_type` char(1) DEFAULT 'L' COMMENT 'L: local  S: duocai store T: thirty party, such as jd, taobao ',
  `order_source` varchar(20) DEFAULT NULL,
  `measure_id` int(10) unsigned zerofill DEFAULT NULL,
  `store_id` int(11) unsigned DEFAULT NULL,
  `pay_first` decimal(10,2) DEFAULT NULL,
  `pay_method_id` int(10) DEFAULT NULL,
  `is_pay_first` tinyint(1) unsigned DEFAULT '0',
  PRIMARY KEY (`order_id`),
  KEY `fk_order_measure_id` (`measure_id`),
  KEY `fk_store_id` (`store_id`),
  CONSTRAINT `fk_order_measure_id` FOREIGN KEY (`measure_id`) REFERENCES `order_measure` (`measure_id`),
  CONSTRAINT `fk_store_id` FOREIGN KEY (`store_id`) REFERENCES `dc_store` (`store_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20141226412522 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of order
-- ----------------------------
INSERT INTO `order` VALUES ('20141223400827', '10', '1', '0', '0', '0', '500.00', null, null, '0.00', '123', null, '110000', '110100', '110102', '123', '123', '13433333333', '', '', null, '1419299564', null, 'L', null, null, null, '0.00', '1', '0');
INSERT INTO `order` VALUES ('20141225773775', '11', '1', '0', '0', '0', '150.00', null, null, '0.00', '123', null, '120000', '120100', '120102', '123456', '100000', '15345512343', '', ' 预约上门时间：12/25/2014 11:18 AM', null, '1419477518', null, 'L', null, null, null, '16.00', '1', '1');
INSERT INTO `order` VALUES ('20141226040329', '1', '1', '0', '0', '0', '24170.00', null, null, '0.00', '小风', null, '120000', '120100', '120104', '繁华大道111号', '120000', '15345566651', '', '123 预约上门时间：12/26/2014 4:13 PM', null, '1419581652', null, 'L', null, null, null, '2418.00', '1', '1');
INSERT INTO `order` VALUES ('20141226100789', '1', '1', '0', '0', '0', '123.00', null, null, '0.00', '小明', null, '130000', '130300', '130304', '11111', '1111111', '13338888899', '021-877777222', '', null, '1419573374', null, 'L', null, null, null, '12.30', '1', '1');
INSERT INTO `order` VALUES ('20141226412521', '10', '1', '0', '0', '0', '120.00', null, null, '0.00', '123', null, '350000', '350200', '350205', '123', '123', '13433333333', '', '', null, '1419575453', null, 'L', null, null, null, '12.00', '1', '1');

-- ----------------------------
-- Table structure for `order_item`
-- ----------------------------
DROP TABLE IF EXISTS `order_item`;
CREATE TABLE `order_item` (
  `order_item_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` bigint(20) unsigned NOT NULL,
  `item_id` int(10) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `desc` longtext NOT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `props_name` longtext NOT NULL,
  `price` decimal(10,2) unsigned NOT NULL,
  `area` decimal(10,2) unsigned DEFAULT NULL,
  `total_price` decimal(10,2) unsigned NOT NULL,
  PRIMARY KEY (`order_item_id`),
  KEY `fk_order_item_order1_idx` (`order_id`),
  KEY `fk_order_item_item1_idx` (`item_id`),
  CONSTRAINT `fk_order_item_order1` FOREIGN KEY (`order_id`) REFERENCES `order` (`order_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of order_item
-- ----------------------------
INSERT INTO `order_item` VALUES ('66', '20141223400827', '62', '家居SPA', '<p>asdasd</p>\r\n\r\n<p><iframe frameborder=\"0\" height=\"498\" src=\"http://player.youku.com/embed/XMzQ0MjQyNDcy\" width=\"510\"></iframe></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><iframe frameborder=\"0\" height=\"498\" src=\"http://player.youku.com/embed/XNDIxMDUwMTYw\" width=\"510\"></iframe></p>\r\n', '/upload/jianyipingtu/10002.jpg', '{\"\\u670d\\u52a1\":\"\\u670d\\u52a1:\\u7a7a\\u8c03\\u6e05\\u6d17\"}', '500.00', '1.00', '500.00');
INSERT INTO `order_item` VALUES ('67', '20141225773775', '76', '壁纸展示', '<p>赞</p>\r\n', '/upload/jianyipingtu/wfwper2.jpg', '{\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u7eff\\u8272\",\"\\u5957\\u9910\\u7c7b\\u578b\":\"\\u5957\\u9910\\u7c7b\\u578b:\\u7ecf\\u6d4e\\u578b\"}', '150.00', '1.00', '150.00');
INSERT INTO `order_item` VALUES ('68', '20141226100789', '68', '混搭风格-产品展示', '<p>eqweqweqwe</p>\r\n', '/upload/item/03.jpg', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u9910\\u5385\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\"}', '123.00', '1.00', '123.00');
INSERT INTO `order_item` VALUES ('69', '20141226412521', '61', '墙面美容', '<p>asdasd</p>\r\n', '/upload/jianyipingtu/10000.jpg', '{\"\\u670d\\u52a1\":\"\\u670d\\u52a1:\\u8f6f\\u5305   \",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272 \"}', '120.00', '1.00', '120.00');
INSERT INTO `order_item` VALUES ('70', '20141226040329', '62', '家电清洗', '<p>asdasd</p>\r\n\r\n<p><iframe frameborder=\"0\" height=\"498\" src=\"http://player.youku.com/embed/XMzQ0MjQyNDcy\" width=\"510\"></iframe></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><iframe frameborder=\"0\" height=\"498\" src=\"http://player.youku.com/embed/XNDIxMDUwMTYw\" width=\"510\"></iframe></p>\r\n', '/upload/jianyipingtu/10002.jpg', '{\"\\u670d\\u52a1\":\"\\u670d\\u52a1:\\u6cb9\\u70df\\u673a\\u6e05\\u6d17 \"}', '1490.00', '12.00', '17880.00');
INSERT INTO `order_item` VALUES ('71', '20141226040329', '62', '家电清洗', '<p>asdasd</p>\r\n\r\n<p><iframe frameborder=\"0\" height=\"498\" src=\"http://player.youku.com/embed/XMzQ0MjQyNDcy\" width=\"510\"></iframe></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><iframe frameborder=\"0\" height=\"498\" src=\"http://player.youku.com/embed/XNDIxMDUwMTYw\" width=\"510\"></iframe></p>\r\n', '/upload/jianyipingtu/10002.jpg', '{\"\\u670d\\u52a1\":\"\\u670d\\u52a1:\\u7a97\\u5e18\"}', '550.00', '11.00', '6050.00');
INSERT INTO `order_item` VALUES ('72', '20141226040329', '61', '墙面美容', '<p>asdasd</p>\r\n', '/upload/jianyipingtu/10000.jpg', '{\"\\u670d\\u52a1\":\"\\u670d\\u52a1:\\u9632\\u6c34     \",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272 \"}', '30.00', '8.00', '240.00');

-- ----------------------------
-- Table structure for `order_log`
-- ----------------------------
DROP TABLE IF EXISTS `order_log`;
CREATE TABLE `order_log` (
  `log_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` bigint(20) DEFAULT NULL,
  `op_name` varchar(45) DEFAULT NULL,
  `log_text` longtext,
  `action_time` timestamp NULL DEFAULT NULL,
  `user_id` int(10) DEFAULT NULL COMMENT 'ERP: 9999',
  `result` enum('success','failure') DEFAULT NULL,
  `origin_body` longtext,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=110 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of order_log
-- ----------------------------
INSERT INTO `order_log` VALUES ('35', '2147483647', 'update', 'O:5:\"Order\":11:{s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:26:{s:8:\"order_id\";s:14:\"20140117977926\";s:7:\"user_id\";s:1:\"7\";s:6:\"status\";s:1:\"0\";s:10:\"pay_status\";s:1:\"0\";s:11:\"ship_status\";s:1:\"0\";s:13:\"refund_status\";s:1:\"0\";s:14:\"comment_status\";s:1:\"0\";s:9:\"total_fee\";s:4:\"0.00\";s:8:\"ship_fee\";s:4:\"0.00\";s:7:\"pay_fee\";s:4:\"0.00\";s:17:\"payment_method_id\";s:1:\"0\";s:18:\"shipping_method_id\";s:1:\"2\";s:13:\"receiver_name\";s:6:\"dASDFs\";s:16:\"receiver_country\";N;s:14:\"receiver_state\";s:6:\"130000\";s:13:\"receiver_city\";s:6:\"130400\";s:17:\"receiver_district\";s:6:\"130402\";s:16:\"receiver_address\";s:4:\"Dasd\";s:12:\"receiver_zip\";s:4:\"dSDF\";s:15:\"receiver_mobile\";s:0:\"\";s:14:\"receiver_phone\";s:0:\"\";s:4:\"memo\";s:0:\"\";s:8:\"pay_time\";N;s:9:\"ship_time\";N;s:11:\"create_time\";s:10:\"1389942407\";s:11:\"update_time\";s:10:\"1390190317\";}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:14:\"20140117977926\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}', null, '2', 'success', null);
INSERT INTO `order_log` VALUES ('36', '2147483647', 'update', 'O:5:\"Order\":11:{s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:26:{s:8:\"order_id\";s:14:\"20140120300906\";s:7:\"user_id\";s:1:\"7\";s:6:\"status\";s:1:\"0\";s:10:\"pay_status\";s:1:\"0\";s:11:\"ship_status\";s:1:\"0\";s:13:\"refund_status\";s:1:\"0\";s:14:\"comment_status\";s:1:\"0\";s:9:\"total_fee\";s:4:\"0.00\";s:8:\"ship_fee\";s:4:\"0.00\";s:7:\"pay_fee\";s:4:\"0.00\";s:17:\"payment_method_id\";s:1:\"2\";s:18:\"shipping_method_id\";s:1:\"1\";s:13:\"receiver_name\";s:6:\"姚明\";s:16:\"receiver_country\";N;s:14:\"receiver_state\";s:6:\"130000\";s:13:\"receiver_city\";s:6:\"130400\";s:17:\"receiver_district\";s:6:\"130426\";s:16:\"receiver_address\";s:6:\"浙大\";s:12:\"receiver_zip\";s:6:\"310000\";s:15:\"receiver_mobile\";s:11:\"18777777777\";s:14:\"receiver_phone\";s:8:\"88888888\";s:4:\"memo\";s:0:\"\";s:8:\"pay_time\";N;s:9:\"ship_time\";N;s:11:\"create_time\";s:10:\"1390190039\";s:11:\"update_time\";s:10:\"1390190067\";}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:14:\"20140120300906\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}', null, '2', 'success', null);
INSERT INTO `order_log` VALUES ('48', null, 'create', 'O:5:\"Order\":11:{s:19:\"\0CActiveRecord\0_new\";b:1;s:26:\"\0CActiveRecord\0_attributes\";a:22:{s:6:\"status\";i:0;s:10:\"pay_status\";s:1:\"0\";s:11:\"ship_status\";i:0;s:13:\"refund_status\";i:0;s:14:\"comment_status\";i:0;s:9:\"total_fee\";s:4:\"0.00\";s:8:\"ship_fee\";s:4:\"0.00\";s:7:\"pay_fee\";s:4:\"0.00\";s:17:\"payment_method_id\";s:1:\"0\";s:18:\"shipping_method_id\";s:1:\"1\";s:7:\"user_id\";s:1:\"7\";s:13:\"receiver_name\";s:3:\"asd\";s:14:\"receiver_state\";s:6:\"110000\";s:13:\"receiver_city\";s:6:\"110100\";s:17:\"receiver_district\";s:6:\"110101\";s:12:\"receiver_zip\";s:4:\"dasd\";s:16:\"receiver_address\";s:5:\"asdas\";s:15:\"receiver_mobile\";s:0:\"\";s:14:\"receiver_phone\";s:0:\"\";s:4:\"memo\";s:0:\"\";s:8:\"order_id\";s:14:\"20140122022687\";s:11:\"create_time\";i:1390382118;}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";N;s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";O:5:\"CList\":5:{s:9:\"\0CList\0_d\";a:7:{i:0;O:18:\"CRequiredValidator\":12:{s:13:\"requiredValue\";N;s:6:\"strict\";b:0;s:4:\"trim\";b:1;s:10:\"attributes\";a:6:{i:0;s:13:\"receiver_name\";i:1;s:14:\"receiver_state\";i:2;s:13:\"receiver_city\";i:3;s:17:\"receiver_district\";i:4;s:12:\"receiver_zip\";i:5;s:16:\"receiver_address\";}s:7:\"message\";N;s:11:\"skipOnError\";b:0;s:2:\"on\";a:0:{}s:6:\"except\";a:0:{}s:4:\"safe\";b:1;s:22:\"enableClientValidation\";b:1;s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:1;O:16:\"CNumberValidator\":17:{s:11:\"integerOnly\";b:1;s:10:\"allowEmpty\";b:1;s:3:\"max\";N;s:3:\"min\";N;s:6:\"tooBig\";N;s:8:\"tooSmall\";N;s:14:\"integerPattern\";s:18:\"/^\\s*[+-]?\\d+\\s*$/\";s:13:\"numberPattern\";s:48:\"/^\\s*[-+]?[0-9]*\\.?[0-9]+([eE][-+]?[0-9]+)?\\s*$/\";s:10:\"attributes\";a:6:{i:0;s:18:\"shipping_method_id\";i:1;s:6:\"status\";i:2;s:10:\"pay_status\";i:3;s:11:\"ship_status\";i:4;s:13:\"refund_status\";i:5;s:14:\"comment_status\";}s:7:\"message\";N;s:11:\"skipOnError\";b:0;s:2:\"on\";a:0:{}s:6:\"except\";a:0:{}s:4:\"safe\";b:1;s:22:\"enableClientValidation\";b:1;s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:2;O:16:\"CStringValidator\":16:{s:3:\"max\";i:10;s:3:\"min\";N;s:2:\"is\";N;s:8:\"tooShort\";N;s:7:\"tooLong\";N;s:10:\"allowEmpty\";b:1;s:8:\"encoding\";N;s:10:\"attributes\";a:10:{i:0;s:7:\"user_id\";i:1;s:9:\"total_fee\";i:2;s:8:\"ship_fee\";i:3;s:7:\"pay_fee\";i:4;s:17:\"payment_method_id\";i:5;s:18:\"shipping_method_id\";i:6;s:8:\"pay_time\";i:7;s:9:\"ship_time\";i:8;s:11:\"create_time\";i:9;s:11:\"update_time\";}s:7:\"message\";N;s:11:\"skipOnError\";b:0;s:2:\"on\";a:0:{}s:6:\"except\";a:0:{}s:4:\"safe\";b:1;s:22:\"enableClientValidation\";b:1;s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:3;O:16:\"CStringValidator\":16:{s:3:\"max\";i:45;s:3:\"min\";N;s:2:\"is\";N;s:8:\"tooShort\";N;s:7:\"tooLong\";N;s:10:\"allowEmpty\";b:1;s:8:\"encoding\";N;s:10:\"attributes\";a:8:{i:0;s:13:\"receiver_name\";i:1;s:16:\"receiver_country\";i:2;s:14:\"receiver_state\";i:3;s:13:\"receiver_city\";i:4;s:17:\"receiver_district\";i:5;s:12:\"receiver_zip\";i:6;s:15:\"receiver_mobile\";i:7;s:14:\"receiver_phone\";}s:7:\"message\";N;s:11:\"skipOnError\";b:0;s:2:\"on\";a:0:{}s:6:\"except\";a:0:{}s:4:\"safe\";b:1;s:22:\"enableClientValidation\";b:1;s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:4;O:16:\"CStringValidator\":16:{s:3:\"max\";i:255;s:3:\"min\";N;s:2:\"is\";N;s:8:\"tooShort\";N;s:7:\"tooLong\";N;s:10:\"allowEmpty\";b:1;s:8:\"encoding\";N;s:10:\"attributes\";a:1:{i:0;s:16:\"receiver_address\";}s:7:\"message\";N;s:11:\"skipOnError\";b:0;s:2:\"on\";a:0:{}s:6:\"except\";a:0:{}s:4:\"safe\";b:1;s:22:\"enableClientValidation\";b:1;s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:5;O:14:\"CSafeValidator\":9:{s:10:\"attributes\";a:1:{i:0;s:4:\"memo\";}s:7:\"message\";N;s:11:\"skipOnError\";b:0;s:2:\"on\";a:0:{}s:6:\"except\";a:0:{}s:4:\"safe\";b:1;s:22:\"enableClientValidation\";b:1;s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:6;O:14:\"CSafeValidator\":9:{s:10:\"attributes\";a:26:{i:0;s:8:\"order_id\";i:1;s:7:\"user_id\";i:2;s:6:\"status\";i:3;s:10:\"pay_status\";i:4;s:11:\"ship_status\";i:5;s:13:\"refund_status\";i:6;s:14:\"comment_status\";i:7;s:9:\"total_fee\";i:8;s:8:\"ship_fee\";i:9;s:7:\"pay_fee\";i:10;s:17:\"payment_method_id\";i:11;s:18:\"shipping_method_id\";i:12;s:13:\"receiver_name\";i:13;s:16:\"receiver_country\";i:14;s:14:\"receiver_state\";i:15;s:13:\"receiver_city\";i:16;s:17:\"receiver_district\";i:17;s:16:\"receiver_address\";i:18;s:12:\"receiver_zip\";i:19;s:15:\"receiver_mobile\";i:20;s:14:\"receiver_phone\";i:21;s:4:\"memo\";i:22;s:8:\"pay_time\";i:23;s:9:\"ship_time\";i:24;s:11:\"create_time\";i:25;s:11:\"update_time\";}s:7:\"message\";N;s:11:\"skipOnError\";b:0;s:2:\"on\";a:1:{s:6:\"search\";s:6:\"search\";}s:6:\"except\";a:0:{}s:4:\"safe\";b:1;s:22:\"enableClientValidation\";b:1;s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}}s:9:\"\0CList\0_c\";i:7;s:9:\"\0CList\0_r\";b:0;s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}s:17:\"\0CModel\0_scenario\";s:6:\"insert\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}', null, '2', 'success', null);
INSERT INTO `order_log` VALUES ('50', null, 'create', 'O:5:\"Order\":11:{s:19:\"\0CActiveRecord\0_new\";b:1;s:26:\"\0CActiveRecord\0_attributes\";a:23:{s:6:\"status\";i:0;s:10:\"pay_status\";i:0;s:11:\"ship_status\";i:0;s:13:\"refund_status\";i:0;s:14:\"comment_status\";i:0;s:9:\"total_fee\";d:123;s:8:\"ship_fee\";s:4:\"0.00\";s:7:\"pay_fee\";s:4:\"0.00\";s:17:\"payment_method_id\";s:1:\"1\";s:18:\"shipping_method_id\";i:0;s:4:\"memo\";s:0:\"\";s:7:\"user_id\";s:1:\"6\";s:11:\"create_time\";i:1390382181;s:8:\"order_id\";s:14:\"20140122945806\";s:13:\"receiver_name\";s:6:\"小明\";s:16:\"receiver_country\";N;s:14:\"receiver_state\";s:6:\"150000\";s:13:\"receiver_city\";s:6:\"150200\";s:17:\"receiver_district\";s:6:\"150202\";s:16:\"receiver_address\";s:6:\"213.21\";s:12:\"receiver_zip\";s:4:\"1420\";s:15:\"receiver_mobile\";s:11:\"13566666666\";s:14:\"receiver_phone\";s:8:\"00000000\";}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";N;s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";O:5:\"CList\":5:{s:9:\"\0CList\0_d\";a:7:{i:0;O:18:\"CRequiredValidator\":12:{s:13:\"requiredValue\";N;s:6:\"strict\";b:0;s:4:\"trim\";b:1;s:10:\"attributes\";a:6:{i:0;s:13:\"receiver_name\";i:1;s:14:\"receiver_state\";i:2;s:13:\"receiver_city\";i:3;s:17:\"receiver_district\";i:4;s:12:\"receiver_zip\";i:5;s:16:\"receiver_address\";}s:7:\"message\";N;s:11:\"skipOnError\";b:0;s:2:\"on\";a:0:{}s:6:\"except\";a:0:{}s:4:\"safe\";b:1;s:22:\"enableClientValidation\";b:1;s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:1;O:16:\"CNumberValidator\":17:{s:11:\"integerOnly\";b:1;s:10:\"allowEmpty\";b:1;s:3:\"max\";N;s:3:\"min\";N;s:6:\"tooBig\";N;s:8:\"tooSmall\";N;s:14:\"integerPattern\";s:18:\"/^\\s*[+-]?\\d+\\s*$/\";s:13:\"numberPattern\";s:48:\"/^\\s*[-+]?[0-9]*\\.?[0-9]+([eE][-+]?[0-9]+)?\\s*$/\";s:10:\"attributes\";a:6:{i:0;s:18:\"shipping_method_id\";i:1;s:6:\"status\";i:2;s:10:\"pay_status\";i:3;s:11:\"ship_status\";i:4;s:13:\"refund_status\";i:5;s:14:\"comment_status\";}s:7:\"message\";N;s:11:\"skipOnError\";b:0;s:2:\"on\";a:0:{}s:6:\"except\";a:0:{}s:4:\"safe\";b:1;s:22:\"enableClientValidation\";b:1;s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:2;O:16:\"CStringValidator\":16:{s:3:\"max\";i:10;s:3:\"min\";N;s:2:\"is\";N;s:8:\"tooShort\";N;s:7:\"tooLong\";N;s:10:\"allowEmpty\";b:1;s:8:\"encoding\";N;s:10:\"attributes\";a:10:{i:0;s:7:\"user_id\";i:1;s:9:\"total_fee\";i:2;s:8:\"ship_fee\";i:3;s:7:\"pay_fee\";i:4;s:17:\"payment_method_id\";i:5;s:18:\"shipping_method_id\";i:6;s:8:\"pay_time\";i:7;s:9:\"ship_time\";i:8;s:11:\"create_time\";i:9;s:11:\"update_time\";}s:7:\"message\";N;s:11:\"skipOnError\";b:0;s:2:\"on\";a:0:{}s:6:\"except\";a:0:{}s:4:\"safe\";b:1;s:22:\"enableClientValidation\";b:1;s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:3;O:16:\"CStringValidator\":16:{s:3:\"max\";i:45;s:3:\"min\";N;s:2:\"is\";N;s:8:\"tooShort\";N;s:7:\"tooLong\";N;s:10:\"allowEmpty\";b:1;s:8:\"encoding\";N;s:10:\"attributes\";a:8:{i:0;s:13:\"receiver_name\";i:1;s:16:\"receiver_country\";i:2;s:14:\"receiver_state\";i:3;s:13:\"receiver_city\";i:4;s:17:\"receiver_district\";i:5;s:12:\"receiver_zip\";i:6;s:15:\"receiver_mobile\";i:7;s:14:\"receiver_phone\";}s:7:\"message\";N;s:11:\"skipOnError\";b:0;s:2:\"on\";a:0:{}s:6:\"except\";a:0:{}s:4:\"safe\";b:1;s:22:\"enableClientValidation\";b:1;s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:4;O:16:\"CStringValidator\":16:{s:3:\"max\";i:255;s:3:\"min\";N;s:2:\"is\";N;s:8:\"tooShort\";N;s:7:\"tooLong\";N;s:10:\"allowEmpty\";b:1;s:8:\"encoding\";N;s:10:\"attributes\";a:1:{i:0;s:16:\"receiver_address\";}s:7:\"message\";N;s:11:\"skipOnError\";b:0;s:2:\"on\";a:0:{}s:6:\"except\";a:0:{}s:4:\"safe\";b:1;s:22:\"enableClientValidation\";b:1;s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:5;O:14:\"CSafeValidator\":9:{s:10:\"attributes\";a:1:{i:0;s:4:\"memo\";}s:7:\"message\";N;s:11:\"skipOnError\";b:0;s:2:\"on\";a:0:{}s:6:\"except\";a:0:{}s:4:\"safe\";b:1;s:22:\"enableClientValidation\";b:1;s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:6;O:14:\"CSafeValidator\":9:{s:10:\"attributes\";a:26:{i:0;s:8:\"order_id\";i:1;s:7:\"user_id\";i:2;s:6:\"status\";i:3;s:10:\"pay_status\";i:4;s:11:\"ship_status\";i:5;s:13:\"refund_status\";i:6;s:14:\"comment_status\";i:7;s:9:\"total_fee\";i:8;s:8:\"ship_fee\";i:9;s:7:\"pay_fee\";i:10;s:17:\"payment_method_id\";i:11;s:18:\"shipping_method_id\";i:12;s:13:\"receiver_name\";i:13;s:16:\"receiver_country\";i:14;s:14:\"receiver_state\";i:15;s:13:\"receiver_city\";i:16;s:17:\"receiver_district\";i:17;s:16:\"receiver_address\";i:18;s:12:\"receiver_zip\";i:19;s:15:\"receiver_mobile\";i:20;s:14:\"receiver_phone\";i:21;s:4:\"memo\";i:22;s:8:\"pay_time\";i:23;s:9:\"ship_time\";i:24;s:11:\"create_time\";i:25;s:11:\"update_time\";}s:7:\"message\";N;s:11:\"skipOnError\";b:0;s:2:\"on\";a:1:{s:6:\"search\";s:6:\"search\";}s:6:\"except\";a:0:{}s:4:\"safe\";b:1;s:22:\"enableClientValidation\";b:1;s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}}s:9:\"\0CList\0_c\";i:7;s:9:\"\0CList\0_r\";b:0;s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}s:17:\"\0CModel\0_scenario\";s:6:\"insert\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}', null, '6', 'success', null);
INSERT INTO `order_log` VALUES ('51', null, 'create', 'O:5:\"Order\":11:{s:19:\"\0CActiveRecord\0_new\";b:1;s:26:\"\0CActiveRecord\0_attributes\";a:23:{s:6:\"status\";i:0;s:10:\"pay_status\";i:0;s:11:\"ship_status\";i:0;s:13:\"refund_status\";i:0;s:14:\"comment_status\";i:0;s:9:\"total_fee\";d:233;s:8:\"ship_fee\";s:4:\"0.00\";s:7:\"pay_fee\";s:4:\"0.00\";s:17:\"payment_method_id\";s:1:\"1\";s:18:\"shipping_method_id\";i:0;s:4:\"memo\";s:0:\"\";s:7:\"user_id\";s:1:\"6\";s:11:\"create_time\";i:1390382426;s:8:\"order_id\";s:14:\"20140122461421\";s:13:\"receiver_name\";s:6:\"小明\";s:16:\"receiver_country\";N;s:14:\"receiver_state\";s:6:\"150000\";s:13:\"receiver_city\";s:6:\"150200\";s:17:\"receiver_district\";s:6:\"150202\";s:16:\"receiver_address\";s:6:\"213.21\";s:12:\"receiver_zip\";s:4:\"1420\";s:15:\"receiver_mobile\";s:11:\"13566666666\";s:14:\"receiver_phone\";s:8:\"00000000\";}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";N;s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";O:5:\"CList\":5:{s:9:\"\0CList\0_d\";a:7:{i:0;O:18:\"CRequiredValidator\":12:{s:13:\"requiredValue\";N;s:6:\"strict\";b:0;s:4:\"trim\";b:1;s:10:\"attributes\";a:6:{i:0;s:13:\"receiver_name\";i:1;s:14:\"receiver_state\";i:2;s:13:\"receiver_city\";i:3;s:17:\"receiver_district\";i:4;s:12:\"receiver_zip\";i:5;s:16:\"receiver_address\";}s:7:\"message\";N;s:11:\"skipOnError\";b:0;s:2:\"on\";a:0:{}s:6:\"except\";a:0:{}s:4:\"safe\";b:1;s:22:\"enableClientValidation\";b:1;s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:1;O:16:\"CNumberValidator\":17:{s:11:\"integerOnly\";b:1;s:10:\"allowEmpty\";b:1;s:3:\"max\";N;s:3:\"min\";N;s:6:\"tooBig\";N;s:8:\"tooSmall\";N;s:14:\"integerPattern\";s:18:\"/^\\s*[+-]?\\d+\\s*$/\";s:13:\"numberPattern\";s:48:\"/^\\s*[-+]?[0-9]*\\.?[0-9]+([eE][-+]?[0-9]+)?\\s*$/\";s:10:\"attributes\";a:6:{i:0;s:18:\"shipping_method_id\";i:1;s:6:\"status\";i:2;s:10:\"pay_status\";i:3;s:11:\"ship_status\";i:4;s:13:\"refund_status\";i:5;s:14:\"comment_status\";}s:7:\"message\";N;s:11:\"skipOnError\";b:0;s:2:\"on\";a:0:{}s:6:\"except\";a:0:{}s:4:\"safe\";b:1;s:22:\"enableClientValidation\";b:1;s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:2;O:16:\"CStringValidator\":16:{s:3:\"max\";i:10;s:3:\"min\";N;s:2:\"is\";N;s:8:\"tooShort\";N;s:7:\"tooLong\";N;s:10:\"allowEmpty\";b:1;s:8:\"encoding\";N;s:10:\"attributes\";a:10:{i:0;s:7:\"user_id\";i:1;s:9:\"total_fee\";i:2;s:8:\"ship_fee\";i:3;s:7:\"pay_fee\";i:4;s:17:\"payment_method_id\";i:5;s:18:\"shipping_method_id\";i:6;s:8:\"pay_time\";i:7;s:9:\"ship_time\";i:8;s:11:\"create_time\";i:9;s:11:\"update_time\";}s:7:\"message\";N;s:11:\"skipOnError\";b:0;s:2:\"on\";a:0:{}s:6:\"except\";a:0:{}s:4:\"safe\";b:1;s:22:\"enableClientValidation\";b:1;s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:3;O:16:\"CStringValidator\":16:{s:3:\"max\";i:45;s:3:\"min\";N;s:2:\"is\";N;s:8:\"tooShort\";N;s:7:\"tooLong\";N;s:10:\"allowEmpty\";b:1;s:8:\"encoding\";N;s:10:\"attributes\";a:8:{i:0;s:13:\"receiver_name\";i:1;s:16:\"receiver_country\";i:2;s:14:\"receiver_state\";i:3;s:13:\"receiver_city\";i:4;s:17:\"receiver_district\";i:5;s:12:\"receiver_zip\";i:6;s:15:\"receiver_mobile\";i:7;s:14:\"receiver_phone\";}s:7:\"message\";N;s:11:\"skipOnError\";b:0;s:2:\"on\";a:0:{}s:6:\"except\";a:0:{}s:4:\"safe\";b:1;s:22:\"enableClientValidation\";b:1;s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:4;O:16:\"CStringValidator\":16:{s:3:\"max\";i:255;s:3:\"min\";N;s:2:\"is\";N;s:8:\"tooShort\";N;s:7:\"tooLong\";N;s:10:\"allowEmpty\";b:1;s:8:\"encoding\";N;s:10:\"attributes\";a:1:{i:0;s:16:\"receiver_address\";}s:7:\"message\";N;s:11:\"skipOnError\";b:0;s:2:\"on\";a:0:{}s:6:\"except\";a:0:{}s:4:\"safe\";b:1;s:22:\"enableClientValidation\";b:1;s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:5;O:14:\"CSafeValidator\":9:{s:10:\"attributes\";a:1:{i:0;s:4:\"memo\";}s:7:\"message\";N;s:11:\"skipOnError\";b:0;s:2:\"on\";a:0:{}s:6:\"except\";a:0:{}s:4:\"safe\";b:1;s:22:\"enableClientValidation\";b:1;s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:6;O:14:\"CSafeValidator\":9:{s:10:\"attributes\";a:26:{i:0;s:8:\"order_id\";i:1;s:7:\"user_id\";i:2;s:6:\"status\";i:3;s:10:\"pay_status\";i:4;s:11:\"ship_status\";i:5;s:13:\"refund_status\";i:6;s:14:\"comment_status\";i:7;s:9:\"total_fee\";i:8;s:8:\"ship_fee\";i:9;s:7:\"pay_fee\";i:10;s:17:\"payment_method_id\";i:11;s:18:\"shipping_method_id\";i:12;s:13:\"receiver_name\";i:13;s:16:\"receiver_country\";i:14;s:14:\"receiver_state\";i:15;s:13:\"receiver_city\";i:16;s:17:\"receiver_district\";i:17;s:16:\"receiver_address\";i:18;s:12:\"receiver_zip\";i:19;s:15:\"receiver_mobile\";i:20;s:14:\"receiver_phone\";i:21;s:4:\"memo\";i:22;s:8:\"pay_time\";i:23;s:9:\"ship_time\";i:24;s:11:\"create_time\";i:25;s:11:\"update_time\";}s:7:\"message\";N;s:11:\"skipOnError\";b:0;s:2:\"on\";a:1:{s:6:\"search\";s:6:\"search\";}s:6:\"except\";a:0:{}s:4:\"safe\";b:1;s:22:\"enableClientValidation\";b:1;s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}}s:9:\"\0CList\0_c\";i:7;s:9:\"\0CList\0_r\";b:0;s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}s:17:\"\0CModel\0_scenario\";s:6:\"insert\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}', null, '6', 'success', null);
INSERT INTO `order_log` VALUES ('52', '2147483647', 'create', 'O:5:\"Order\":11:{s:19:\"\0CActiveRecord\0_new\";b:1;s:26:\"\0CActiveRecord\0_attributes\";a:23:{s:6:\"status\";i:0;s:10:\"pay_status\";i:0;s:11:\"ship_status\";i:0;s:13:\"refund_status\";i:0;s:14:\"comment_status\";i:0;s:9:\"total_fee\";d:1299;s:8:\"ship_fee\";s:4:\"0.00\";s:7:\"pay_fee\";s:4:\"0.00\";s:17:\"payment_method_id\";s:1:\"1\";s:18:\"shipping_method_id\";i:0;s:4:\"memo\";s:0:\"\";s:7:\"user_id\";s:1:\"1\";s:11:\"create_time\";i:1391749153;s:8:\"order_id\";s:14:\"20140207642329\";s:13:\"receiver_name\";s:6:\"小明\";s:16:\"receiver_country\";N;s:14:\"receiver_state\";s:6:\"130000\";s:13:\"receiver_city\";s:6:\"130300\";s:17:\"receiver_district\";s:6:\"130304\";s:16:\"receiver_address\";s:5:\"11111\";s:12:\"receiver_zip\";s:7:\"1111111\";s:15:\"receiver_mobile\";s:11:\"13338888899\";s:14:\"receiver_phone\";s:13:\"021-877777222\";}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";N;s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";O:5:\"CList\":5:{s:9:\"\0CList\0_d\";a:7:{i:0;O:18:\"CRequiredValidator\":12:{s:13:\"requiredValue\";N;s:6:\"strict\";b:0;s:4:\"trim\";b:1;s:10:\"attributes\";a:6:{i:0;s:13:\"receiver_name\";i:1;s:14:\"receiver_state\";i:2;s:13:\"receiver_city\";i:3;s:17:\"receiver_district\";i:4;s:12:\"receiver_zip\";i:5;s:16:\"receiver_address\";}s:7:\"message\";N;s:11:\"skipOnError\";b:0;s:2:\"on\";a:0:{}s:6:\"except\";a:0:{}s:4:\"safe\";b:1;s:22:\"enableClientValidation\";b:1;s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:1;O:16:\"CNumberValidator\":17:{s:11:\"integerOnly\";b:1;s:10:\"allowEmpty\";b:1;s:3:\"max\";N;s:3:\"min\";N;s:6:\"tooBig\";N;s:8:\"tooSmall\";N;s:14:\"integerPattern\";s:18:\"/^\\s*[+-]?\\d+\\s*$/\";s:13:\"numberPattern\";s:48:\"/^\\s*[-+]?[0-9]*\\.?[0-9]+([eE][-+]?[0-9]+)?\\s*$/\";s:10:\"attributes\";a:6:{i:0;s:18:\"shipping_method_id\";i:1;s:6:\"status\";i:2;s:10:\"pay_status\";i:3;s:11:\"ship_status\";i:4;s:13:\"refund_status\";i:5;s:14:\"comment_status\";}s:7:\"message\";N;s:11:\"skipOnError\";b:0;s:2:\"on\";a:0:{}s:6:\"except\";a:0:{}s:4:\"safe\";b:1;s:22:\"enableClientValidation\";b:1;s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:2;O:16:\"CStringValidator\":16:{s:3:\"max\";i:10;s:3:\"min\";N;s:2:\"is\";N;s:8:\"tooShort\";N;s:7:\"tooLong\";N;s:10:\"allowEmpty\";b:1;s:8:\"encoding\";N;s:10:\"attributes\";a:10:{i:0;s:7:\"user_id\";i:1;s:9:\"total_fee\";i:2;s:8:\"ship_fee\";i:3;s:7:\"pay_fee\";i:4;s:17:\"payment_method_id\";i:5;s:18:\"shipping_method_id\";i:6;s:8:\"pay_time\";i:7;s:9:\"ship_time\";i:8;s:11:\"create_time\";i:9;s:11:\"update_time\";}s:7:\"message\";N;s:11:\"skipOnError\";b:0;s:2:\"on\";a:0:{}s:6:\"except\";a:0:{}s:4:\"safe\";b:1;s:22:\"enableClientValidation\";b:1;s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:3;O:16:\"CStringValidator\":16:{s:3:\"max\";i:45;s:3:\"min\";N;s:2:\"is\";N;s:8:\"tooShort\";N;s:7:\"tooLong\";N;s:10:\"allowEmpty\";b:1;s:8:\"encoding\";N;s:10:\"attributes\";a:8:{i:0;s:13:\"receiver_name\";i:1;s:16:\"receiver_country\";i:2;s:14:\"receiver_state\";i:3;s:13:\"receiver_city\";i:4;s:17:\"receiver_district\";i:5;s:12:\"receiver_zip\";i:6;s:15:\"receiver_mobile\";i:7;s:14:\"receiver_phone\";}s:7:\"message\";N;s:11:\"skipOnError\";b:0;s:2:\"on\";a:0:{}s:6:\"except\";a:0:{}s:4:\"safe\";b:1;s:22:\"enableClientValidation\";b:1;s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:4;O:16:\"CStringValidator\":16:{s:3:\"max\";i:255;s:3:\"min\";N;s:2:\"is\";N;s:8:\"tooShort\";N;s:7:\"tooLong\";N;s:10:\"allowEmpty\";b:1;s:8:\"encoding\";N;s:10:\"attributes\";a:1:{i:0;s:16:\"receiver_address\";}s:7:\"message\";N;s:11:\"skipOnError\";b:0;s:2:\"on\";a:0:{}s:6:\"except\";a:0:{}s:4:\"safe\";b:1;s:22:\"enableClientValidation\";b:1;s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:5;O:14:\"CSafeValidator\":9:{s:10:\"attributes\";a:1:{i:0;s:4:\"memo\";}s:7:\"message\";N;s:11:\"skipOnError\";b:0;s:2:\"on\";a:0:{}s:6:\"except\";a:0:{}s:4:\"safe\";b:1;s:22:\"enableClientValidation\";b:1;s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:6;O:14:\"CSafeValidator\":9:{s:10:\"attributes\";a:26:{i:0;s:8:\"order_id\";i:1;s:7:\"user_id\";i:2;s:6:\"status\";i:3;s:10:\"pay_status\";i:4;s:11:\"ship_status\";i:5;s:13:\"refund_status\";i:6;s:14:\"comment_status\";i:7;s:9:\"total_fee\";i:8;s:8:\"ship_fee\";i:9;s:7:\"pay_fee\";i:10;s:17:\"payment_method_id\";i:11;s:18:\"shipping_method_id\";i:12;s:13:\"receiver_name\";i:13;s:16:\"receiver_country\";i:14;s:14:\"receiver_state\";i:15;s:13:\"receiver_city\";i:16;s:17:\"receiver_district\";i:17;s:16:\"receiver_address\";i:18;s:12:\"receiver_zip\";i:19;s:15:\"receiver_mobile\";i:20;s:14:\"receiver_phone\";i:21;s:4:\"memo\";i:22;s:8:\"pay_time\";i:23;s:9:\"ship_time\";i:24;s:11:\"create_time\";i:25;s:11:\"update_time\";}s:7:\"message\";N;s:11:\"skipOnError\";b:0;s:2:\"on\";a:1:{s:6:\"search\";s:6:\"search\";}s:6:\"except\";a:0:{}s:4:\"safe\";b:1;s:22:\"enableClientValidation\";b:1;s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}}s:9:\"\0CList\0_c\";i:7;s:9:\"\0CList\0_r\";b:0;s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}s:17:\"\0CModel\0_scenario\";s:6:\"insert\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}', null, '1', 'success', null);
INSERT INTO `order_log` VALUES ('53', '2147483647', 'create', 'O:5:\"Order\":11:{s:19:\"\0CActiveRecord\0_new\";b:1;s:26:\"\0CActiveRecord\0_attributes\";a:23:{s:6:\"status\";i:0;s:10:\"pay_status\";i:0;s:11:\"ship_status\";i:0;s:13:\"refund_status\";i:0;s:14:\"comment_status\";i:0;s:9:\"total_fee\";d:1299;s:8:\"ship_fee\";s:4:\"0.00\";s:7:\"pay_fee\";s:4:\"0.00\";s:17:\"payment_method_id\";s:1:\"1\";s:18:\"shipping_method_id\";i:0;s:4:\"memo\";s:0:\"\";s:7:\"user_id\";s:1:\"1\";s:11:\"create_time\";i:1392190289;s:8:\"order_id\";s:14:\"20140212007840\";s:13:\"receiver_name\";s:6:\"小明\";s:16:\"receiver_country\";N;s:14:\"receiver_state\";s:6:\"130000\";s:13:\"receiver_city\";s:6:\"130300\";s:17:\"receiver_district\";s:6:\"130304\";s:16:\"receiver_address\";s:5:\"11111\";s:12:\"receiver_zip\";s:7:\"1111111\";s:15:\"receiver_mobile\";s:11:\"13338888899\";s:14:\"receiver_phone\";s:13:\"021-877777222\";}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";N;s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";O:5:\"CList\":5:{s:9:\"\0CList\0_d\";a:7:{i:0;O:18:\"CRequiredValidator\":12:{s:13:\"requiredValue\";N;s:6:\"strict\";b:0;s:4:\"trim\";b:1;s:10:\"attributes\";a:6:{i:0;s:13:\"receiver_name\";i:1;s:14:\"receiver_state\";i:2;s:13:\"receiver_city\";i:3;s:17:\"receiver_district\";i:4;s:12:\"receiver_zip\";i:5;s:16:\"receiver_address\";}s:7:\"message\";N;s:11:\"skipOnError\";b:0;s:2:\"on\";a:0:{}s:6:\"except\";a:0:{}s:4:\"safe\";b:1;s:22:\"enableClientValidation\";b:1;s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:1;O:16:\"CNumberValidator\":17:{s:11:\"integerOnly\";b:1;s:10:\"allowEmpty\";b:1;s:3:\"max\";N;s:3:\"min\";N;s:6:\"tooBig\";N;s:8:\"tooSmall\";N;s:14:\"integerPattern\";s:18:\"/^\\s*[+-]?\\d+\\s*$/\";s:13:\"numberPattern\";s:48:\"/^\\s*[-+]?[0-9]*\\.?[0-9]+([eE][-+]?[0-9]+)?\\s*$/\";s:10:\"attributes\";a:6:{i:0;s:18:\"shipping_method_id\";i:1;s:6:\"status\";i:2;s:10:\"pay_status\";i:3;s:11:\"ship_status\";i:4;s:13:\"refund_status\";i:5;s:14:\"comment_status\";}s:7:\"message\";N;s:11:\"skipOnError\";b:0;s:2:\"on\";a:0:{}s:6:\"except\";a:0:{}s:4:\"safe\";b:1;s:22:\"enableClientValidation\";b:1;s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:2;O:16:\"CStringValidator\":16:{s:3:\"max\";i:10;s:3:\"min\";N;s:2:\"is\";N;s:8:\"tooShort\";N;s:7:\"tooLong\";N;s:10:\"allowEmpty\";b:1;s:8:\"encoding\";N;s:10:\"attributes\";a:10:{i:0;s:7:\"user_id\";i:1;s:9:\"total_fee\";i:2;s:8:\"ship_fee\";i:3;s:7:\"pay_fee\";i:4;s:17:\"payment_method_id\";i:5;s:18:\"shipping_method_id\";i:6;s:8:\"pay_time\";i:7;s:9:\"ship_time\";i:8;s:11:\"create_time\";i:9;s:11:\"update_time\";}s:7:\"message\";N;s:11:\"skipOnError\";b:0;s:2:\"on\";a:0:{}s:6:\"except\";a:0:{}s:4:\"safe\";b:1;s:22:\"enableClientValidation\";b:1;s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:3;O:16:\"CStringValidator\":16:{s:3:\"max\";i:45;s:3:\"min\";N;s:2:\"is\";N;s:8:\"tooShort\";N;s:7:\"tooLong\";N;s:10:\"allowEmpty\";b:1;s:8:\"encoding\";N;s:10:\"attributes\";a:8:{i:0;s:13:\"receiver_name\";i:1;s:16:\"receiver_country\";i:2;s:14:\"receiver_state\";i:3;s:13:\"receiver_city\";i:4;s:17:\"receiver_district\";i:5;s:12:\"receiver_zip\";i:6;s:15:\"receiver_mobile\";i:7;s:14:\"receiver_phone\";}s:7:\"message\";N;s:11:\"skipOnError\";b:0;s:2:\"on\";a:0:{}s:6:\"except\";a:0:{}s:4:\"safe\";b:1;s:22:\"enableClientValidation\";b:1;s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:4;O:16:\"CStringValidator\":16:{s:3:\"max\";i:255;s:3:\"min\";N;s:2:\"is\";N;s:8:\"tooShort\";N;s:7:\"tooLong\";N;s:10:\"allowEmpty\";b:1;s:8:\"encoding\";N;s:10:\"attributes\";a:1:{i:0;s:16:\"receiver_address\";}s:7:\"message\";N;s:11:\"skipOnError\";b:0;s:2:\"on\";a:0:{}s:6:\"except\";a:0:{}s:4:\"safe\";b:1;s:22:\"enableClientValidation\";b:1;s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:5;O:14:\"CSafeValidator\":9:{s:10:\"attributes\";a:1:{i:0;s:4:\"memo\";}s:7:\"message\";N;s:11:\"skipOnError\";b:0;s:2:\"on\";a:0:{}s:6:\"except\";a:0:{}s:4:\"safe\";b:1;s:22:\"enableClientValidation\";b:1;s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:6;O:14:\"CSafeValidator\":9:{s:10:\"attributes\";a:26:{i:0;s:8:\"order_id\";i:1;s:7:\"user_id\";i:2;s:6:\"status\";i:3;s:10:\"pay_status\";i:4;s:11:\"ship_status\";i:5;s:13:\"refund_status\";i:6;s:14:\"comment_status\";i:7;s:9:\"total_fee\";i:8;s:8:\"ship_fee\";i:9;s:7:\"pay_fee\";i:10;s:17:\"payment_method_id\";i:11;s:18:\"shipping_method_id\";i:12;s:13:\"receiver_name\";i:13;s:16:\"receiver_country\";i:14;s:14:\"receiver_state\";i:15;s:13:\"receiver_city\";i:16;s:17:\"receiver_district\";i:17;s:16:\"receiver_address\";i:18;s:12:\"receiver_zip\";i:19;s:15:\"receiver_mobile\";i:20;s:14:\"receiver_phone\";i:21;s:4:\"memo\";i:22;s:8:\"pay_time\";i:23;s:9:\"ship_time\";i:24;s:11:\"create_time\";i:25;s:11:\"update_time\";}s:7:\"message\";N;s:11:\"skipOnError\";b:0;s:2:\"on\";a:1:{s:6:\"search\";s:6:\"search\";}s:6:\"except\";a:0:{}s:4:\"safe\";b:1;s:22:\"enableClientValidation\";b:1;s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}}s:9:\"\0CList\0_c\";i:7;s:9:\"\0CList\0_r\";b:0;s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}s:17:\"\0CModel\0_scenario\";s:6:\"insert\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}', null, '1', 'success', null);
INSERT INTO `order_log` VALUES ('55', '20140331181068', 'create', 'a:27:{s:6:\"status\";i:0;s:10:\"pay_status\";i:0;s:11:\"ship_status\";i:0;s:13:\"refund_status\";i:0;s:14:\"comment_status\";i:0;s:9:\"total_fee\";d:1299;s:8:\"ship_fee\";s:4:\"0.00\";s:7:\"pay_fee\";s:4:\"0.00\";s:17:\"payment_method_id\";s:1:\"0\";s:18:\"shipping_method_id\";i:0;s:4:\"memo\";s:0:\"\";s:7:\"user_id\";s:1:\"6\";s:16:\"receiver_country\";N;s:13:\"receiver_name\";s:6:\"小明\";s:14:\"receiver_state\";s:6:\"150000\";s:13:\"receiver_city\";s:6:\"150200\";s:17:\"receiver_district\";s:6:\"150202\";s:16:\"receiver_address\";s:6:\"213.21\";s:12:\"receiver_zip\";s:4:\"1420\";s:15:\"receiver_mobile\";s:11:\"13566666666\";s:14:\"receiver_phone\";s:8:\"00000000\";s:11:\"create_time\";i:1396234475;s:8:\"order_id\";s:14:\"20140331181068\";s:8:\"pay_time\";N;s:9:\"ship_time\";N;s:11:\"update_time\";N;s:13:\"order_ship_id\";N;}', null, '6', 'success', null);
INSERT INTO `order_log` VALUES ('58', '20140122750469', 'update', 'O:5:\"Order\":12:{s:2:\"id\";N;s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:27:{s:8:\"order_id\";s:14:\"20140122750469\";s:7:\"user_id\";s:1:\"7\";s:6:\"status\";s:1:\"0\";s:10:\"pay_status\";s:1:\"0\";s:11:\"ship_status\";s:1:\"0\";s:13:\"refund_status\";s:1:\"0\";s:14:\"comment_status\";s:1:\"0\";s:9:\"total_fee\";s:4:\"0.00\";s:8:\"ship_fee\";s:4:\"0.00\";s:7:\"pay_fee\";s:4:\"0.00\";s:17:\"payment_method_id\";s:1:\"0\";s:18:\"shipping_method_id\";s:1:\"1\";s:13:\"receiver_name\";s:3:\"asd\";s:16:\"receiver_country\";N;s:14:\"receiver_state\";s:6:\"210000\";s:13:\"receiver_city\";s:6:\"210400\";s:17:\"receiver_district\";s:6:\"210402\";s:16:\"receiver_address\";s:5:\"asdas\";s:12:\"receiver_zip\";s:4:\"dasd\";s:15:\"receiver_mobile\";s:0:\"\";s:14:\"receiver_phone\";s:0:\"\";s:4:\"memo\";s:0:\"\";s:8:\"pay_time\";N;s:9:\"ship_time\";N;s:11:\"create_time\";s:10:\"1390381520\";s:11:\"update_time\";N;s:13:\"order_ship_id\";N;}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:14:\"20140122750469\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}', null, '2', 'success', null);
INSERT INTO `order_log` VALUES ('63', '20140122750469', 'update', 'O:5:\"Order\":12:{s:2:\"id\";N;s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:27:{s:8:\"order_id\";s:14:\"20140122750469\";s:7:\"user_id\";s:1:\"7\";s:6:\"status\";s:1:\"0\";s:10:\"pay_status\";s:1:\"0\";s:11:\"ship_status\";s:1:\"0\";s:13:\"refund_status\";s:1:\"0\";s:14:\"comment_status\";s:1:\"0\";s:9:\"total_fee\";s:4:\"0.00\";s:8:\"ship_fee\";s:4:\"0.00\";s:7:\"pay_fee\";s:4:\"0.00\";s:17:\"payment_method_id\";s:1:\"0\";s:18:\"shipping_method_id\";s:1:\"1\";s:13:\"receiver_name\";s:3:\"asd\";s:16:\"receiver_country\";N;s:14:\"receiver_state\";s:6:\"210000\";s:13:\"receiver_city\";s:6:\"210400\";s:17:\"receiver_district\";s:6:\"210402\";s:16:\"receiver_address\";s:5:\"asdas\";s:12:\"receiver_zip\";s:4:\"dasd\";s:15:\"receiver_mobile\";s:0:\"\";s:14:\"receiver_phone\";s:0:\"\";s:4:\"memo\";s:0:\"\";s:8:\"pay_time\";N;s:9:\"ship_time\";N;s:11:\"create_time\";s:10:\"1390381520\";s:11:\"update_time\";s:10:\"1396234712\";s:13:\"order_ship_id\";N;}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:14:\"20140122750469\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}', null, '2', 'success', null);
INSERT INTO `order_log` VALUES ('64', '20140122738254', 'update', 'O:5:\"Order\":12:{s:2:\"id\";N;s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:27:{s:8:\"order_id\";s:14:\"20140122738254\";s:7:\"user_id\";s:1:\"7\";s:6:\"status\";s:1:\"0\";s:10:\"pay_status\";s:1:\"0\";s:11:\"ship_status\";s:1:\"0\";s:13:\"refund_status\";s:1:\"0\";s:14:\"comment_status\";s:1:\"0\";s:9:\"total_fee\";s:4:\"0.00\";s:8:\"ship_fee\";s:4:\"0.00\";s:7:\"pay_fee\";s:4:\"0.00\";s:17:\"payment_method_id\";s:1:\"0\";s:18:\"shipping_method_id\";s:1:\"1\";s:13:\"receiver_name\";s:3:\"asd\";s:16:\"receiver_country\";N;s:14:\"receiver_state\";s:6:\"230000\";s:13:\"receiver_city\";s:6:\"230400\";s:17:\"receiver_district\";s:6:\"230402\";s:16:\"receiver_address\";s:5:\"asdas\";s:12:\"receiver_zip\";s:4:\"dasd\";s:15:\"receiver_mobile\";s:0:\"\";s:14:\"receiver_phone\";s:0:\"\";s:4:\"memo\";s:0:\"\";s:8:\"pay_time\";N;s:9:\"ship_time\";N;s:11:\"create_time\";s:10:\"1390381960\";s:11:\"update_time\";N;s:13:\"order_ship_id\";N;}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:14:\"20140122738254\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}', null, '2', 'success', null);
INSERT INTO `order_log` VALUES ('65', '20140331116183', 'create', 'a:27:{s:6:\"status\";i:0;s:10:\"pay_status\";i:0;s:11:\"ship_status\";i:0;s:13:\"refund_status\";i:0;s:14:\"comment_status\";i:0;s:9:\"total_fee\";d:1299;s:8:\"ship_fee\";s:4:\"0.00\";s:7:\"pay_fee\";s:4:\"0.00\";s:17:\"payment_method_id\";s:1:\"0\";s:18:\"shipping_method_id\";i:0;s:4:\"memo\";s:0:\"\";s:7:\"user_id\";s:1:\"6\";s:16:\"receiver_country\";N;s:13:\"receiver_name\";s:6:\"小明\";s:14:\"receiver_state\";s:6:\"150000\";s:13:\"receiver_city\";s:6:\"150200\";s:17:\"receiver_district\";s:6:\"150202\";s:16:\"receiver_address\";s:6:\"213.21\";s:12:\"receiver_zip\";s:4:\"1420\";s:15:\"receiver_mobile\";s:11:\"13566666666\";s:14:\"receiver_phone\";s:8:\"00000000\";s:11:\"create_time\";i:1396247766;s:8:\"order_id\";s:14:\"20140331116183\";s:8:\"pay_time\";N;s:9:\"ship_time\";N;s:11:\"update_time\";N;s:13:\"order_ship_id\";N;}', null, '6', 'success', null);
INSERT INTO `order_log` VALUES ('67', '20140331567036', 'create', 'a:27:{s:6:\"status\";i:0;s:10:\"pay_status\";i:0;s:11:\"ship_status\";i:0;s:13:\"refund_status\";i:0;s:14:\"comment_status\";i:0;s:9:\"total_fee\";d:1299;s:8:\"ship_fee\";s:4:\"0.00\";s:7:\"pay_fee\";s:4:\"0.00\";s:17:\"payment_method_id\";s:1:\"0\";s:18:\"shipping_method_id\";i:0;s:4:\"memo\";s:0:\"\";s:7:\"user_id\";s:1:\"6\";s:16:\"receiver_country\";N;s:13:\"receiver_name\";s:6:\"小明\";s:14:\"receiver_state\";s:6:\"150000\";s:13:\"receiver_city\";s:6:\"150200\";s:17:\"receiver_district\";s:6:\"150202\";s:16:\"receiver_address\";s:6:\"213.21\";s:12:\"receiver_zip\";s:4:\"1420\";s:15:\"receiver_mobile\";s:11:\"13566666666\";s:14:\"receiver_phone\";s:8:\"00000000\";s:11:\"create_time\";i:1396248246;s:8:\"order_id\";s:14:\"20140331567036\";s:8:\"pay_time\";N;s:9:\"ship_time\";N;s:11:\"update_time\";N;s:13:\"order_ship_id\";N;}', null, '6', 'success', null);
INSERT INTO `order_log` VALUES ('68', '20140331116183', 'delete', 'O:5:\"Order\":12:{s:2:\"id\";N;s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:27:{s:8:\"order_id\";s:14:\"20140331116183\";s:7:\"user_id\";s:1:\"6\";s:6:\"status\";s:1:\"0\";s:10:\"pay_status\";s:1:\"0\";s:11:\"ship_status\";s:1:\"0\";s:13:\"refund_status\";s:1:\"0\";s:14:\"comment_status\";s:1:\"0\";s:9:\"total_fee\";s:7:\"1299.00\";s:8:\"ship_fee\";s:4:\"0.00\";s:7:\"pay_fee\";s:4:\"0.00\";s:17:\"payment_method_id\";s:1:\"0\";s:18:\"shipping_method_id\";s:1:\"0\";s:13:\"receiver_name\";s:6:\"小明\";s:16:\"receiver_country\";N;s:14:\"receiver_state\";s:6:\"150000\";s:13:\"receiver_city\";s:6:\"150200\";s:17:\"receiver_district\";s:6:\"150202\";s:16:\"receiver_address\";s:6:\"213.21\";s:12:\"receiver_zip\";s:4:\"1420\";s:15:\"receiver_mobile\";s:11:\"13566666666\";s:14:\"receiver_phone\";s:8:\"00000000\";s:4:\"memo\";s:0:\"\";s:8:\"pay_time\";N;s:9:\"ship_time\";N;s:11:\"create_time\";s:10:\"1396247766\";s:11:\"update_time\";N;s:13:\"order_ship_id\";N;}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:14:\"20140331116183\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}', null, '2', 'success', null);
INSERT INTO `order_log` VALUES ('69', '20140331181068', 'delete', 'O:5:\"Order\":12:{s:2:\"id\";N;s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:27:{s:8:\"order_id\";s:14:\"20140331181068\";s:7:\"user_id\";s:1:\"6\";s:6:\"status\";s:1:\"0\";s:10:\"pay_status\";s:1:\"0\";s:11:\"ship_status\";s:1:\"0\";s:13:\"refund_status\";s:1:\"0\";s:14:\"comment_status\";s:1:\"0\";s:9:\"total_fee\";s:7:\"1299.00\";s:8:\"ship_fee\";s:4:\"0.00\";s:7:\"pay_fee\";s:4:\"0.00\";s:17:\"payment_method_id\";s:1:\"0\";s:18:\"shipping_method_id\";s:1:\"0\";s:13:\"receiver_name\";s:6:\"小明\";s:16:\"receiver_country\";N;s:14:\"receiver_state\";s:6:\"150000\";s:13:\"receiver_city\";s:6:\"150200\";s:17:\"receiver_district\";s:6:\"150202\";s:16:\"receiver_address\";s:6:\"213.21\";s:12:\"receiver_zip\";s:4:\"1420\";s:15:\"receiver_mobile\";s:11:\"13566666666\";s:14:\"receiver_phone\";s:8:\"00000000\";s:4:\"memo\";s:0:\"\";s:8:\"pay_time\";N;s:9:\"ship_time\";N;s:11:\"create_time\";s:10:\"1396234475\";s:11:\"update_time\";N;s:13:\"order_ship_id\";N;}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:14:\"20140331181068\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}', null, '2', 'success', null);
INSERT INTO `order_log` VALUES ('70', '20140331567036', 'delete', 'O:5:\"Order\":12:{s:2:\"id\";N;s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:27:{s:8:\"order_id\";s:14:\"20140331567036\";s:7:\"user_id\";s:1:\"6\";s:6:\"status\";s:1:\"0\";s:10:\"pay_status\";s:1:\"0\";s:11:\"ship_status\";s:1:\"0\";s:13:\"refund_status\";s:1:\"0\";s:14:\"comment_status\";s:1:\"0\";s:9:\"total_fee\";s:7:\"1299.00\";s:8:\"ship_fee\";s:4:\"0.00\";s:7:\"pay_fee\";s:4:\"0.00\";s:17:\"payment_method_id\";s:1:\"0\";s:18:\"shipping_method_id\";s:1:\"0\";s:13:\"receiver_name\";s:6:\"小明\";s:16:\"receiver_country\";N;s:14:\"receiver_state\";s:6:\"150000\";s:13:\"receiver_city\";s:6:\"150200\";s:17:\"receiver_district\";s:6:\"150202\";s:16:\"receiver_address\";s:6:\"213.21\";s:12:\"receiver_zip\";s:4:\"1420\";s:15:\"receiver_mobile\";s:11:\"13566666666\";s:14:\"receiver_phone\";s:8:\"00000000\";s:4:\"memo\";s:0:\"\";s:8:\"pay_time\";N;s:9:\"ship_time\";N;s:11:\"create_time\";s:10:\"1396248246\";s:11:\"update_time\";N;s:13:\"order_ship_id\";N;}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:14:\"20140331567036\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}', null, '2', 'success', null);
INSERT INTO `order_log` VALUES ('76', '20140331469955', 'create', 'a:27:{s:6:\"status\";i:0;s:10:\"pay_status\";i:0;s:11:\"ship_status\";i:0;s:13:\"refund_status\";i:0;s:14:\"comment_status\";i:0;s:9:\"total_fee\";d:1123;s:8:\"ship_fee\";s:4:\"0.00\";s:7:\"pay_fee\";s:4:\"0.00\";s:17:\"payment_method_id\";s:1:\"0\";s:18:\"shipping_method_id\";i:0;s:4:\"memo\";s:0:\"\";s:7:\"user_id\";s:1:\"6\";s:16:\"receiver_country\";N;s:13:\"receiver_name\";s:6:\"小明\";s:14:\"receiver_state\";s:6:\"150000\";s:13:\"receiver_city\";s:6:\"150200\";s:17:\"receiver_district\";s:6:\"150202\";s:16:\"receiver_address\";s:6:\"213.21\";s:12:\"receiver_zip\";s:4:\"1420\";s:15:\"receiver_mobile\";s:11:\"13566666666\";s:14:\"receiver_phone\";s:8:\"00000000\";s:11:\"create_time\";i:1396253272;s:8:\"order_id\";s:14:\"20140331469955\";s:8:\"pay_time\";N;s:9:\"ship_time\";N;s:11:\"update_time\";N;s:13:\"order_ship_id\";N;}', null, '6', 'success', null);
INSERT INTO `order_log` VALUES ('77', '20140331469955', 'delete', 'O:5:\"Order\":12:{s:2:\"id\";N;s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:27:{s:8:\"order_id\";s:14:\"20140331469955\";s:7:\"user_id\";s:1:\"6\";s:6:\"status\";s:1:\"0\";s:10:\"pay_status\";s:1:\"0\";s:11:\"ship_status\";s:1:\"0\";s:13:\"refund_status\";s:1:\"0\";s:14:\"comment_status\";s:1:\"0\";s:9:\"total_fee\";s:7:\"1123.00\";s:8:\"ship_fee\";s:4:\"0.00\";s:7:\"pay_fee\";s:4:\"0.00\";s:17:\"payment_method_id\";s:1:\"0\";s:18:\"shipping_method_id\";s:1:\"0\";s:13:\"receiver_name\";s:6:\"小明\";s:16:\"receiver_country\";N;s:14:\"receiver_state\";s:6:\"150000\";s:13:\"receiver_city\";s:6:\"150200\";s:17:\"receiver_district\";s:6:\"150202\";s:16:\"receiver_address\";s:6:\"213.21\";s:12:\"receiver_zip\";s:4:\"1420\";s:15:\"receiver_mobile\";s:11:\"13566666666\";s:14:\"receiver_phone\";s:8:\"00000000\";s:4:\"memo\";s:0:\"\";s:8:\"pay_time\";N;s:9:\"ship_time\";N;s:11:\"create_time\";s:10:\"1396253272\";s:11:\"update_time\";N;s:13:\"order_ship_id\";N;}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:14:\"20140331469955\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}', null, '2', 'success', null);
INSERT INTO `order_log` VALUES ('78', '20140331729177', 'create', 'a:27:{s:6:\"status\";i:0;s:10:\"pay_status\";i:0;s:11:\"ship_status\";i:0;s:13:\"refund_status\";i:0;s:14:\"comment_status\";i:0;s:9:\"total_fee\";d:1299;s:8:\"ship_fee\";s:4:\"0.00\";s:7:\"pay_fee\";s:4:\"0.00\";s:17:\"payment_method_id\";s:1:\"0\";s:18:\"shipping_method_id\";i:0;s:4:\"memo\";s:0:\"\";s:7:\"user_id\";s:1:\"6\";s:16:\"receiver_country\";N;s:13:\"receiver_name\";s:6:\"小明\";s:14:\"receiver_state\";s:6:\"150000\";s:13:\"receiver_city\";s:6:\"150200\";s:17:\"receiver_district\";s:6:\"150202\";s:16:\"receiver_address\";s:6:\"213.21\";s:12:\"receiver_zip\";s:4:\"1420\";s:15:\"receiver_mobile\";s:11:\"13566666666\";s:14:\"receiver_phone\";s:8:\"00000000\";s:11:\"create_time\";i:1396254007;s:8:\"order_id\";s:14:\"20140331729177\";s:8:\"pay_time\";N;s:9:\"ship_time\";N;s:11:\"update_time\";N;s:13:\"order_ship_id\";N;}', null, '6', 'success', null);
INSERT INTO `order_log` VALUES ('79', '20140331729177', 'delete', 'O:5:\"Order\":12:{s:2:\"id\";N;s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:27:{s:8:\"order_id\";s:14:\"20140331729177\";s:7:\"user_id\";s:1:\"6\";s:6:\"status\";s:1:\"0\";s:10:\"pay_status\";s:1:\"0\";s:11:\"ship_status\";s:1:\"0\";s:13:\"refund_status\";s:1:\"0\";s:14:\"comment_status\";s:1:\"0\";s:9:\"total_fee\";s:7:\"1299.00\";s:8:\"ship_fee\";s:4:\"0.00\";s:7:\"pay_fee\";s:4:\"0.00\";s:17:\"payment_method_id\";s:1:\"0\";s:18:\"shipping_method_id\";s:1:\"0\";s:13:\"receiver_name\";s:6:\"小明\";s:16:\"receiver_country\";N;s:14:\"receiver_state\";s:6:\"150000\";s:13:\"receiver_city\";s:6:\"150200\";s:17:\"receiver_district\";s:6:\"150202\";s:16:\"receiver_address\";s:6:\"213.21\";s:12:\"receiver_zip\";s:4:\"1420\";s:15:\"receiver_mobile\";s:11:\"13566666666\";s:14:\"receiver_phone\";s:8:\"00000000\";s:4:\"memo\";s:0:\"\";s:8:\"pay_time\";N;s:9:\"ship_time\";N;s:11:\"create_time\";s:10:\"1396254007\";s:11:\"update_time\";N;s:13:\"order_ship_id\";N;}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:14:\"20140331729177\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}', null, '2', 'success', null);
INSERT INTO `order_log` VALUES ('80', '20140331083757', 'create', 'a:27:{s:6:\"status\";i:0;s:10:\"pay_status\";i:0;s:11:\"ship_status\";i:0;s:13:\"refund_status\";i:0;s:14:\"comment_status\";i:0;s:9:\"total_fee\";d:1299;s:8:\"ship_fee\";s:4:\"0.00\";s:7:\"pay_fee\";s:4:\"0.00\";s:17:\"payment_method_id\";s:1:\"0\";s:18:\"shipping_method_id\";i:0;s:4:\"memo\";s:0:\"\";s:7:\"user_id\";s:1:\"6\";s:16:\"receiver_country\";N;s:13:\"receiver_name\";s:6:\"小明\";s:14:\"receiver_state\";s:6:\"150000\";s:13:\"receiver_city\";s:6:\"150200\";s:17:\"receiver_district\";s:6:\"150202\";s:16:\"receiver_address\";s:6:\"213.21\";s:12:\"receiver_zip\";s:4:\"1420\";s:15:\"receiver_mobile\";s:11:\"13566666666\";s:14:\"receiver_phone\";s:8:\"00000000\";s:11:\"create_time\";i:1396254117;s:8:\"order_id\";s:14:\"20140331083757\";s:8:\"pay_time\";N;s:9:\"ship_time\";N;s:11:\"update_time\";N;s:13:\"order_ship_id\";N;}', null, '6', 'success', null);
INSERT INTO `order_log` VALUES ('81', '20140331083757', 'delete', 'O:5:\"Order\":12:{s:2:\"id\";N;s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:27:{s:8:\"order_id\";s:14:\"20140331083757\";s:7:\"user_id\";s:1:\"6\";s:6:\"status\";s:1:\"0\";s:10:\"pay_status\";s:1:\"0\";s:11:\"ship_status\";s:1:\"0\";s:13:\"refund_status\";s:1:\"0\";s:14:\"comment_status\";s:1:\"0\";s:9:\"total_fee\";s:7:\"1299.00\";s:8:\"ship_fee\";s:4:\"0.00\";s:7:\"pay_fee\";s:4:\"0.00\";s:17:\"payment_method_id\";s:1:\"0\";s:18:\"shipping_method_id\";s:1:\"0\";s:13:\"receiver_name\";s:6:\"小明\";s:16:\"receiver_country\";N;s:14:\"receiver_state\";s:6:\"150000\";s:13:\"receiver_city\";s:6:\"150200\";s:17:\"receiver_district\";s:6:\"150202\";s:16:\"receiver_address\";s:6:\"213.21\";s:12:\"receiver_zip\";s:4:\"1420\";s:15:\"receiver_mobile\";s:11:\"13566666666\";s:14:\"receiver_phone\";s:8:\"00000000\";s:4:\"memo\";s:0:\"\";s:8:\"pay_time\";N;s:9:\"ship_time\";N;s:11:\"create_time\";s:10:\"1396254117\";s:11:\"update_time\";N;s:13:\"order_ship_id\";N;}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:14:\"20140331083757\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}', null, '2', 'success', null);
INSERT INTO `order_log` VALUES ('82', '20140331722299', 'create', 'a:27:{s:6:\"status\";i:0;s:10:\"pay_status\";i:0;s:11:\"ship_status\";i:0;s:13:\"refund_status\";i:0;s:14:\"comment_status\";i:0;s:9:\"total_fee\";d:1123;s:8:\"ship_fee\";s:4:\"0.00\";s:7:\"pay_fee\";s:4:\"0.00\";s:17:\"payment_method_id\";s:1:\"0\";s:18:\"shipping_method_id\";i:0;s:4:\"memo\";s:0:\"\";s:7:\"user_id\";s:1:\"6\";s:16:\"receiver_country\";N;s:13:\"receiver_name\";s:6:\"小明\";s:14:\"receiver_state\";s:6:\"150000\";s:13:\"receiver_city\";s:6:\"150200\";s:17:\"receiver_district\";s:6:\"150202\";s:16:\"receiver_address\";s:6:\"213.21\";s:12:\"receiver_zip\";s:4:\"1420\";s:15:\"receiver_mobile\";s:11:\"13566666666\";s:14:\"receiver_phone\";s:8:\"00000000\";s:11:\"create_time\";i:1396254138;s:8:\"order_id\";s:14:\"20140331722299\";s:8:\"pay_time\";N;s:9:\"ship_time\";N;s:11:\"update_time\";N;s:13:\"order_ship_id\";N;}', null, '6', 'success', null);
INSERT INTO `order_log` VALUES ('83', '20140331722299', 'delete', 'O:5:\"Order\":12:{s:2:\"id\";N;s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:27:{s:8:\"order_id\";s:14:\"20140331722299\";s:7:\"user_id\";s:1:\"6\";s:6:\"status\";s:1:\"0\";s:10:\"pay_status\";s:1:\"0\";s:11:\"ship_status\";s:1:\"0\";s:13:\"refund_status\";s:1:\"0\";s:14:\"comment_status\";s:1:\"0\";s:9:\"total_fee\";s:7:\"1123.00\";s:8:\"ship_fee\";s:4:\"0.00\";s:7:\"pay_fee\";s:4:\"0.00\";s:17:\"payment_method_id\";s:1:\"0\";s:18:\"shipping_method_id\";s:1:\"0\";s:13:\"receiver_name\";s:6:\"小明\";s:16:\"receiver_country\";N;s:14:\"receiver_state\";s:6:\"150000\";s:13:\"receiver_city\";s:6:\"150200\";s:17:\"receiver_district\";s:6:\"150202\";s:16:\"receiver_address\";s:6:\"213.21\";s:12:\"receiver_zip\";s:4:\"1420\";s:15:\"receiver_mobile\";s:11:\"13566666666\";s:14:\"receiver_phone\";s:8:\"00000000\";s:4:\"memo\";s:0:\"\";s:8:\"pay_time\";N;s:9:\"ship_time\";N;s:11:\"create_time\";s:10:\"1396254138\";s:11:\"update_time\";N;s:13:\"order_ship_id\";N;}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:14:\"20140331722299\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}', null, '2', 'success', null);
INSERT INTO `order_log` VALUES ('84', '20140331322232', 'create', 'a:27:{s:6:\"status\";i:0;s:10:\"pay_status\";i:0;s:11:\"ship_status\";i:0;s:13:\"refund_status\";i:0;s:14:\"comment_status\";i:0;s:9:\"total_fee\";d:1123;s:8:\"ship_fee\";s:4:\"0.00\";s:7:\"pay_fee\";s:4:\"0.00\";s:17:\"payment_method_id\";s:1:\"0\";s:18:\"shipping_method_id\";i:0;s:4:\"memo\";s:0:\"\";s:7:\"user_id\";s:1:\"6\";s:16:\"receiver_country\";N;s:13:\"receiver_name\";s:6:\"小明\";s:14:\"receiver_state\";s:6:\"150000\";s:13:\"receiver_city\";s:6:\"150200\";s:17:\"receiver_district\";s:6:\"150202\";s:16:\"receiver_address\";s:6:\"213.21\";s:12:\"receiver_zip\";s:4:\"1420\";s:15:\"receiver_mobile\";s:11:\"13566666666\";s:14:\"receiver_phone\";s:8:\"00000000\";s:11:\"create_time\";i:1396254538;s:8:\"order_id\";s:14:\"20140331322232\";s:8:\"pay_time\";N;s:9:\"ship_time\";N;s:11:\"update_time\";N;s:13:\"order_ship_id\";N;}', null, '6', 'success', null);
INSERT INTO `order_log` VALUES ('85', '20140331322232', 'delete', 'O:5:\"Order\":12:{s:2:\"id\";N;s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:27:{s:8:\"order_id\";s:14:\"20140331322232\";s:7:\"user_id\";s:1:\"6\";s:6:\"status\";s:1:\"0\";s:10:\"pay_status\";s:1:\"0\";s:11:\"ship_status\";s:1:\"0\";s:13:\"refund_status\";s:1:\"0\";s:14:\"comment_status\";s:1:\"0\";s:9:\"total_fee\";s:7:\"1123.00\";s:8:\"ship_fee\";s:4:\"0.00\";s:7:\"pay_fee\";s:4:\"0.00\";s:17:\"payment_method_id\";s:1:\"0\";s:18:\"shipping_method_id\";s:1:\"0\";s:13:\"receiver_name\";s:6:\"小明\";s:16:\"receiver_country\";N;s:14:\"receiver_state\";s:6:\"150000\";s:13:\"receiver_city\";s:6:\"150200\";s:17:\"receiver_district\";s:6:\"150202\";s:16:\"receiver_address\";s:6:\"213.21\";s:12:\"receiver_zip\";s:4:\"1420\";s:15:\"receiver_mobile\";s:11:\"13566666666\";s:14:\"receiver_phone\";s:8:\"00000000\";s:4:\"memo\";s:0:\"\";s:8:\"pay_time\";N;s:9:\"ship_time\";N;s:11:\"create_time\";s:10:\"1396254538\";s:11:\"update_time\";N;s:13:\"order_ship_id\";N;}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:14:\"20140331322232\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}', null, '2', 'success', null);
INSERT INTO `order_log` VALUES ('86', '20140331767291', 'create', 'a:27:{s:6:\"status\";i:0;s:10:\"pay_status\";i:0;s:11:\"ship_status\";i:0;s:13:\"refund_status\";i:0;s:14:\"comment_status\";i:0;s:9:\"total_fee\";d:1299;s:8:\"ship_fee\";s:4:\"0.00\";s:7:\"pay_fee\";s:4:\"0.00\";s:17:\"payment_method_id\";s:1:\"0\";s:18:\"shipping_method_id\";i:0;s:4:\"memo\";s:0:\"\";s:7:\"user_id\";s:1:\"6\";s:16:\"receiver_country\";N;s:13:\"receiver_name\";s:6:\"小明\";s:14:\"receiver_state\";s:6:\"150000\";s:13:\"receiver_city\";s:6:\"150200\";s:17:\"receiver_district\";s:6:\"150202\";s:16:\"receiver_address\";s:6:\"213.21\";s:12:\"receiver_zip\";s:4:\"1420\";s:15:\"receiver_mobile\";s:11:\"13566666666\";s:14:\"receiver_phone\";s:8:\"00000000\";s:11:\"create_time\";i:1396254747;s:8:\"order_id\";s:14:\"20140331767291\";s:8:\"pay_time\";N;s:9:\"ship_time\";N;s:11:\"update_time\";N;s:13:\"order_ship_id\";N;}', null, '6', 'success', null);
INSERT INTO `order_log` VALUES ('87', '20140331800399', 'create', 'a:27:{s:6:\"status\";i:0;s:10:\"pay_status\";i:0;s:11:\"ship_status\";i:0;s:13:\"refund_status\";i:0;s:14:\"comment_status\";i:0;s:9:\"total_fee\";d:1299;s:8:\"ship_fee\";s:4:\"0.00\";s:7:\"pay_fee\";s:4:\"0.00\";s:17:\"payment_method_id\";s:1:\"0\";s:18:\"shipping_method_id\";i:0;s:4:\"memo\";s:0:\"\";s:7:\"user_id\";s:1:\"6\";s:16:\"receiver_country\";N;s:13:\"receiver_name\";s:6:\"小明\";s:14:\"receiver_state\";s:6:\"150000\";s:13:\"receiver_city\";s:6:\"150200\";s:17:\"receiver_district\";s:6:\"150202\";s:16:\"receiver_address\";s:6:\"213.21\";s:12:\"receiver_zip\";s:4:\"1420\";s:15:\"receiver_mobile\";s:11:\"13566666666\";s:14:\"receiver_phone\";s:8:\"00000000\";s:11:\"create_time\";i:1396255311;s:8:\"order_id\";s:14:\"20140331800399\";s:8:\"pay_time\";N;s:9:\"ship_time\";N;s:11:\"update_time\";N;s:13:\"order_ship_id\";N;}', null, '6', 'success', null);
INSERT INTO `order_log` VALUES ('88', '20140331767291', 'delete', 'O:5:\"Order\":12:{s:2:\"id\";N;s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:27:{s:8:\"order_id\";s:14:\"20140331767291\";s:7:\"user_id\";s:1:\"6\";s:6:\"status\";s:1:\"0\";s:10:\"pay_status\";s:1:\"0\";s:11:\"ship_status\";s:1:\"0\";s:13:\"refund_status\";s:1:\"0\";s:14:\"comment_status\";s:1:\"0\";s:9:\"total_fee\";s:7:\"1299.00\";s:8:\"ship_fee\";s:4:\"0.00\";s:7:\"pay_fee\";s:4:\"0.00\";s:17:\"payment_method_id\";s:1:\"0\";s:18:\"shipping_method_id\";s:1:\"0\";s:13:\"receiver_name\";s:6:\"小明\";s:16:\"receiver_country\";N;s:14:\"receiver_state\";s:6:\"150000\";s:13:\"receiver_city\";s:6:\"150200\";s:17:\"receiver_district\";s:6:\"150202\";s:16:\"receiver_address\";s:6:\"213.21\";s:12:\"receiver_zip\";s:4:\"1420\";s:15:\"receiver_mobile\";s:11:\"13566666666\";s:14:\"receiver_phone\";s:8:\"00000000\";s:4:\"memo\";s:0:\"\";s:8:\"pay_time\";N;s:9:\"ship_time\";N;s:11:\"create_time\";s:10:\"1396254747\";s:11:\"update_time\";N;s:13:\"order_ship_id\";N;}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:14:\"20140331767291\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}', null, '2', 'success', null);
INSERT INTO `order_log` VALUES ('89', '20140401890419', 'create', 'a:27:{s:6:\"status\";i:0;s:10:\"pay_status\";i:0;s:11:\"ship_status\";i:0;s:13:\"refund_status\";i:0;s:14:\"comment_status\";i:0;s:9:\"total_fee\";d:1299;s:8:\"ship_fee\";s:4:\"0.00\";s:7:\"pay_fee\";s:4:\"0.00\";s:17:\"payment_method_id\";s:1:\"0\";s:18:\"shipping_method_id\";i:0;s:4:\"memo\";s:0:\"\";s:7:\"user_id\";s:1:\"6\";s:16:\"receiver_country\";N;s:13:\"receiver_name\";s:6:\"小明\";s:14:\"receiver_state\";s:6:\"150000\";s:13:\"receiver_city\";s:6:\"150200\";s:17:\"receiver_district\";s:6:\"150202\";s:16:\"receiver_address\";s:6:\"213.21\";s:12:\"receiver_zip\";s:4:\"1420\";s:15:\"receiver_mobile\";s:11:\"13566666666\";s:14:\"receiver_phone\";s:8:\"00000000\";s:11:\"create_time\";i:1396313511;s:8:\"order_id\";s:14:\"20140401890419\";s:8:\"pay_time\";N;s:9:\"ship_time\";N;s:11:\"update_time\";N;s:13:\"order_ship_id\";N;}', null, '6', 'success', null);
INSERT INTO `order_log` VALUES ('90', '20140331800399', 'delete', 'O:5:\"Order\":12:{s:2:\"id\";N;s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:27:{s:8:\"order_id\";s:14:\"20140331800399\";s:7:\"user_id\";s:1:\"6\";s:6:\"status\";s:1:\"0\";s:10:\"pay_status\";s:1:\"0\";s:11:\"ship_status\";s:1:\"0\";s:13:\"refund_status\";s:1:\"0\";s:14:\"comment_status\";s:1:\"0\";s:9:\"total_fee\";s:7:\"1299.00\";s:8:\"ship_fee\";s:4:\"0.00\";s:7:\"pay_fee\";s:4:\"0.00\";s:17:\"payment_method_id\";s:1:\"0\";s:18:\"shipping_method_id\";s:1:\"0\";s:13:\"receiver_name\";s:6:\"小明\";s:16:\"receiver_country\";N;s:14:\"receiver_state\";s:6:\"150000\";s:13:\"receiver_city\";s:6:\"150200\";s:17:\"receiver_district\";s:6:\"150202\";s:16:\"receiver_address\";s:6:\"213.21\";s:12:\"receiver_zip\";s:4:\"1420\";s:15:\"receiver_mobile\";s:11:\"13566666666\";s:14:\"receiver_phone\";s:8:\"00000000\";s:4:\"memo\";s:0:\"\";s:8:\"pay_time\";N;s:9:\"ship_time\";N;s:11:\"create_time\";s:10:\"1396255311\";s:11:\"update_time\";N;s:13:\"order_ship_id\";N;}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:14:\"20140331800399\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}', null, '2', 'success', null);
INSERT INTO `order_log` VALUES ('91', '20140401890419', 'delete', 'O:5:\"Order\":12:{s:2:\"id\";N;s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:27:{s:8:\"order_id\";s:14:\"20140401890419\";s:7:\"user_id\";s:1:\"6\";s:6:\"status\";s:1:\"0\";s:10:\"pay_status\";s:1:\"0\";s:11:\"ship_status\";s:1:\"0\";s:13:\"refund_status\";s:1:\"0\";s:14:\"comment_status\";s:1:\"0\";s:9:\"total_fee\";s:7:\"1299.00\";s:8:\"ship_fee\";s:4:\"0.00\";s:7:\"pay_fee\";s:4:\"0.00\";s:17:\"payment_method_id\";s:1:\"0\";s:18:\"shipping_method_id\";s:1:\"0\";s:13:\"receiver_name\";s:6:\"小明\";s:16:\"receiver_country\";N;s:14:\"receiver_state\";s:6:\"150000\";s:13:\"receiver_city\";s:6:\"150200\";s:17:\"receiver_district\";s:6:\"150202\";s:16:\"receiver_address\";s:6:\"213.21\";s:12:\"receiver_zip\";s:4:\"1420\";s:15:\"receiver_mobile\";s:11:\"13566666666\";s:14:\"receiver_phone\";s:8:\"00000000\";s:4:\"memo\";s:0:\"\";s:8:\"pay_time\";N;s:9:\"ship_time\";N;s:11:\"create_time\";s:10:\"1396313511\";s:11:\"update_time\";N;s:13:\"order_ship_id\";N;}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:14:\"20140401890419\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}', null, '2', 'success', null);
INSERT INTO `order_log` VALUES ('92', '20140401532535', 'create', 'a:27:{s:6:\"status\";i:0;s:10:\"pay_status\";i:0;s:11:\"ship_status\";i:0;s:13:\"refund_status\";i:0;s:14:\"comment_status\";i:0;s:9:\"total_fee\";d:1299;s:8:\"ship_fee\";s:4:\"0.00\";s:7:\"pay_fee\";s:4:\"0.00\";s:17:\"payment_method_id\";s:1:\"0\";s:18:\"shipping_method_id\";i:0;s:4:\"memo\";s:0:\"\";s:7:\"user_id\";s:1:\"6\";s:16:\"receiver_country\";N;s:13:\"receiver_name\";s:6:\"小明\";s:14:\"receiver_state\";s:6:\"150000\";s:13:\"receiver_city\";s:6:\"150200\";s:17:\"receiver_district\";s:6:\"150202\";s:16:\"receiver_address\";s:6:\"213.21\";s:12:\"receiver_zip\";s:4:\"1420\";s:15:\"receiver_mobile\";s:11:\"13566666666\";s:14:\"receiver_phone\";s:8:\"00000000\";s:11:\"create_time\";i:1396330481;s:8:\"order_id\";s:14:\"20140401532535\";s:8:\"pay_time\";N;s:9:\"ship_time\";N;s:11:\"update_time\";N;s:13:\"order_ship_id\";N;}', null, '6', 'success', null);
INSERT INTO `order_log` VALUES ('93', '20140401729944', 'create', 'a:27:{s:6:\"status\";i:0;s:10:\"pay_status\";i:0;s:11:\"ship_status\";i:0;s:13:\"refund_status\";i:0;s:14:\"comment_status\";i:0;s:9:\"total_fee\";d:1299;s:8:\"ship_fee\";s:4:\"0.00\";s:7:\"pay_fee\";s:4:\"0.00\";s:17:\"payment_method_id\";s:1:\"0\";s:18:\"shipping_method_id\";i:0;s:4:\"memo\";s:0:\"\";s:7:\"user_id\";s:1:\"6\";s:16:\"receiver_country\";N;s:13:\"receiver_name\";s:6:\"小明\";s:14:\"receiver_state\";s:6:\"150000\";s:13:\"receiver_city\";s:6:\"150200\";s:17:\"receiver_district\";s:6:\"150202\";s:16:\"receiver_address\";s:6:\"213.21\";s:12:\"receiver_zip\";s:4:\"1420\";s:15:\"receiver_mobile\";s:11:\"13566666666\";s:14:\"receiver_phone\";s:8:\"00000000\";s:11:\"create_time\";i:1396335812;s:8:\"order_id\";s:14:\"20140401729944\";s:8:\"pay_time\";N;s:9:\"ship_time\";N;s:11:\"update_time\";N;s:13:\"order_ship_id\";N;}', null, '6', 'success', null);
INSERT INTO `order_log` VALUES ('94', '20140212007840', 'delete', 'O:5:\"Order\":12:{s:2:\"id\";N;s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:27:{s:8:\"order_id\";s:14:\"20140212007840\";s:7:\"user_id\";s:1:\"1\";s:6:\"status\";s:1:\"0\";s:10:\"pay_status\";s:1:\"0\";s:11:\"ship_status\";s:1:\"0\";s:13:\"refund_status\";s:1:\"0\";s:14:\"comment_status\";s:1:\"0\";s:9:\"total_fee\";s:7:\"1299.00\";s:8:\"ship_fee\";s:4:\"0.00\";s:7:\"pay_fee\";s:4:\"0.00\";s:17:\"payment_method_id\";s:1:\"1\";s:18:\"shipping_method_id\";s:1:\"0\";s:13:\"receiver_name\";s:6:\"小明\";s:16:\"receiver_country\";N;s:14:\"receiver_state\";s:6:\"130000\";s:13:\"receiver_city\";s:6:\"130300\";s:17:\"receiver_district\";s:6:\"130304\";s:16:\"receiver_address\";s:5:\"11111\";s:12:\"receiver_zip\";s:7:\"1111111\";s:15:\"receiver_mobile\";s:11:\"13338888899\";s:14:\"receiver_phone\";s:13:\"021-877777222\";s:4:\"memo\";s:0:\"\";s:8:\"pay_time\";N;s:9:\"ship_time\";N;s:11:\"create_time\";s:10:\"1392190289\";s:11:\"update_time\";N;s:13:\"order_ship_id\";N;}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:14:\"20140212007840\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}', null, '2', 'success', null);
INSERT INTO `order_log` VALUES ('95', '20140207642329', 'delete', 'O:5:\"Order\":12:{s:2:\"id\";N;s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:27:{s:8:\"order_id\";s:14:\"20140207642329\";s:7:\"user_id\";s:1:\"1\";s:6:\"status\";s:1:\"0\";s:10:\"pay_status\";s:1:\"0\";s:11:\"ship_status\";s:1:\"0\";s:13:\"refund_status\";s:1:\"0\";s:14:\"comment_status\";s:1:\"0\";s:9:\"total_fee\";s:7:\"1299.00\";s:8:\"ship_fee\";s:4:\"0.00\";s:7:\"pay_fee\";s:4:\"0.00\";s:17:\"payment_method_id\";s:1:\"1\";s:18:\"shipping_method_id\";s:1:\"0\";s:13:\"receiver_name\";s:6:\"小明\";s:16:\"receiver_country\";N;s:14:\"receiver_state\";s:6:\"130000\";s:13:\"receiver_city\";s:6:\"130300\";s:17:\"receiver_district\";s:6:\"130304\";s:16:\"receiver_address\";s:5:\"11111\";s:12:\"receiver_zip\";s:7:\"1111111\";s:15:\"receiver_mobile\";s:11:\"13338888899\";s:14:\"receiver_phone\";s:13:\"021-877777222\";s:4:\"memo\";s:0:\"\";s:8:\"pay_time\";N;s:9:\"ship_time\";N;s:11:\"create_time\";s:10:\"1391749153\";s:11:\"update_time\";N;s:13:\"order_ship_id\";N;}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:14:\"20140207642329\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}', null, '2', 'success', null);
INSERT INTO `order_log` VALUES ('96', '20140122461421', 'delete', 'O:5:\"Order\":12:{s:2:\"id\";N;s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:27:{s:8:\"order_id\";s:14:\"20140122461421\";s:7:\"user_id\";s:1:\"6\";s:6:\"status\";s:1:\"0\";s:10:\"pay_status\";s:1:\"0\";s:11:\"ship_status\";s:1:\"0\";s:13:\"refund_status\";s:1:\"0\";s:14:\"comment_status\";s:1:\"0\";s:9:\"total_fee\";s:6:\"233.00\";s:8:\"ship_fee\";s:4:\"0.00\";s:7:\"pay_fee\";s:4:\"0.00\";s:17:\"payment_method_id\";s:1:\"1\";s:18:\"shipping_method_id\";s:1:\"0\";s:13:\"receiver_name\";s:6:\"小明\";s:16:\"receiver_country\";N;s:14:\"receiver_state\";s:6:\"150000\";s:13:\"receiver_city\";s:6:\"150200\";s:17:\"receiver_district\";s:6:\"150202\";s:16:\"receiver_address\";s:6:\"213.21\";s:12:\"receiver_zip\";s:4:\"1420\";s:15:\"receiver_mobile\";s:11:\"13566666666\";s:14:\"receiver_phone\";s:8:\"00000000\";s:4:\"memo\";s:0:\"\";s:8:\"pay_time\";N;s:9:\"ship_time\";N;s:11:\"create_time\";s:10:\"1390382426\";s:11:\"update_time\";N;s:13:\"order_ship_id\";N;}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:14:\"20140122461421\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}', null, '2', 'success', null);
INSERT INTO `order_log` VALUES ('97', '68', 'delete', 'O:5:\"Order\":12:{s:2:\"id\";N;s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:27:{s:8:\"order_id\";s:2:\"68\";s:7:\"user_id\";s:1:\"6\";s:6:\"status\";s:1:\"0\";s:10:\"pay_status\";s:1:\"0\";s:11:\"ship_status\";s:1:\"0\";s:13:\"refund_status\";s:1:\"0\";s:14:\"comment_status\";s:1:\"0\";s:9:\"total_fee\";s:6:\"123.00\";s:8:\"ship_fee\";s:4:\"0.00\";s:7:\"pay_fee\";s:4:\"0.00\";s:17:\"payment_method_id\";s:1:\"1\";s:18:\"shipping_method_id\";s:1:\"0\";s:13:\"receiver_name\";s:6:\"小明\";s:16:\"receiver_country\";N;s:14:\"receiver_state\";s:6:\"150000\";s:13:\"receiver_city\";s:6:\"150200\";s:17:\"receiver_district\";s:6:\"150202\";s:16:\"receiver_address\";s:6:\"213.21\";s:12:\"receiver_zip\";s:4:\"1420\";s:15:\"receiver_mobile\";s:11:\"13566666666\";s:14:\"receiver_phone\";s:8:\"00000000\";s:4:\"memo\";s:0:\"\";s:8:\"pay_time\";N;s:9:\"ship_time\";N;s:11:\"create_time\";s:10:\"1389147860\";s:11:\"update_time\";N;s:13:\"order_ship_id\";N;}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:2:\"68\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}', null, '2', 'success', null);
INSERT INTO `order_log` VALUES ('98', '67', 'delete', 'O:5:\"Order\":12:{s:2:\"id\";N;s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:27:{s:8:\"order_id\";s:2:\"67\";s:7:\"user_id\";s:1:\"6\";s:6:\"status\";s:1:\"0\";s:10:\"pay_status\";s:1:\"0\";s:11:\"ship_status\";s:1:\"0\";s:13:\"refund_status\";s:1:\"0\";s:14:\"comment_status\";s:1:\"0\";s:9:\"total_fee\";s:6:\"123.00\";s:8:\"ship_fee\";s:4:\"0.00\";s:7:\"pay_fee\";s:4:\"0.00\";s:17:\"payment_method_id\";s:1:\"0\";s:18:\"shipping_method_id\";s:1:\"0\";s:13:\"receiver_name\";s:6:\"小明\";s:16:\"receiver_country\";N;s:14:\"receiver_state\";s:6:\"150000\";s:13:\"receiver_city\";s:6:\"150200\";s:17:\"receiver_district\";s:6:\"150202\";s:16:\"receiver_address\";s:6:\"213.21\";s:12:\"receiver_zip\";s:4:\"1420\";s:15:\"receiver_mobile\";s:11:\"13566666666\";s:14:\"receiver_phone\";s:8:\"00000000\";s:4:\"memo\";s:0:\"\";s:8:\"pay_time\";N;s:9:\"ship_time\";N;s:11:\"create_time\";s:10:\"1389146901\";s:11:\"update_time\";N;s:13:\"order_ship_id\";N;}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:2:\"67\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}', null, '2', 'success', null);
INSERT INTO `order_log` VALUES ('99', '20140122945806', 'delete', 'O:5:\"Order\":12:{s:2:\"id\";N;s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:27:{s:8:\"order_id\";s:14:\"20140122945806\";s:7:\"user_id\";s:1:\"6\";s:6:\"status\";s:1:\"0\";s:10:\"pay_status\";s:1:\"0\";s:11:\"ship_status\";s:1:\"0\";s:13:\"refund_status\";s:1:\"0\";s:14:\"comment_status\";s:1:\"0\";s:9:\"total_fee\";s:6:\"123.00\";s:8:\"ship_fee\";s:4:\"0.00\";s:7:\"pay_fee\";s:4:\"0.00\";s:17:\"payment_method_id\";s:1:\"1\";s:18:\"shipping_method_id\";s:1:\"0\";s:13:\"receiver_name\";s:6:\"小明\";s:16:\"receiver_country\";N;s:14:\"receiver_state\";s:6:\"150000\";s:13:\"receiver_city\";s:6:\"150200\";s:17:\"receiver_district\";s:6:\"150202\";s:16:\"receiver_address\";s:6:\"213.21\";s:12:\"receiver_zip\";s:4:\"1420\";s:15:\"receiver_mobile\";s:11:\"13566666666\";s:14:\"receiver_phone\";s:8:\"00000000\";s:4:\"memo\";s:0:\"\";s:8:\"pay_time\";N;s:9:\"ship_time\";N;s:11:\"create_time\";s:10:\"1390382181\";s:11:\"update_time\";N;s:13:\"order_ship_id\";N;}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:14:\"20140122945806\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}', null, '2', 'success', null);
INSERT INTO `order_log` VALUES ('100', '20140401052808', 'create', 'a:27:{s:6:\"status\";i:0;s:10:\"pay_status\";i:0;s:11:\"ship_status\";i:0;s:13:\"refund_status\";i:0;s:14:\"comment_status\";i:0;s:9:\"total_fee\";d:1299;s:8:\"ship_fee\";s:4:\"0.00\";s:7:\"pay_fee\";s:4:\"0.00\";s:17:\"payment_method_id\";s:1:\"0\";s:18:\"shipping_method_id\";i:0;s:4:\"memo\";s:0:\"\";s:7:\"user_id\";s:1:\"6\";s:16:\"receiver_country\";N;s:13:\"receiver_name\";s:6:\"小明\";s:14:\"receiver_state\";s:6:\"150000\";s:13:\"receiver_city\";s:6:\"150200\";s:17:\"receiver_district\";s:6:\"150202\";s:16:\"receiver_address\";s:6:\"213.21\";s:12:\"receiver_zip\";s:4:\"1420\";s:15:\"receiver_mobile\";s:11:\"13566666666\";s:14:\"receiver_phone\";s:8:\"00000000\";s:11:\"create_time\";i:1396337165;s:8:\"order_id\";s:14:\"20140401052808\";s:8:\"pay_time\";N;s:9:\"ship_time\";N;s:11:\"update_time\";N;s:13:\"order_ship_id\";N;}', null, '6', 'success', null);
INSERT INTO `order_log` VALUES ('101', '20140401652993', 'create', 'a:27:{s:6:\"status\";i:0;s:10:\"pay_status\";i:0;s:11:\"ship_status\";i:0;s:13:\"refund_status\";i:0;s:14:\"comment_status\";i:0;s:9:\"total_fee\";d:110;s:8:\"ship_fee\";s:4:\"0.00\";s:7:\"pay_fee\";s:4:\"0.00\";s:17:\"payment_method_id\";s:1:\"0\";s:18:\"shipping_method_id\";i:0;s:4:\"memo\";s:0:\"\";s:7:\"user_id\";s:1:\"6\";s:16:\"receiver_country\";N;s:13:\"receiver_name\";s:6:\"小明\";s:14:\"receiver_state\";s:6:\"150000\";s:13:\"receiver_city\";s:6:\"150200\";s:17:\"receiver_district\";s:6:\"150202\";s:16:\"receiver_address\";s:6:\"213.21\";s:12:\"receiver_zip\";s:4:\"1420\";s:15:\"receiver_mobile\";s:11:\"13566666666\";s:14:\"receiver_phone\";s:8:\"00000000\";s:11:\"create_time\";i:1396337176;s:8:\"order_id\";s:14:\"20140401652993\";s:8:\"pay_time\";N;s:9:\"ship_time\";N;s:11:\"update_time\";N;s:13:\"order_ship_id\";N;}', null, '6', 'success', null);
INSERT INTO `order_log` VALUES ('102', '20140401942291', 'create', 'a:27:{s:6:\"status\";i:0;s:10:\"pay_status\";i:0;s:11:\"ship_status\";i:0;s:13:\"refund_status\";i:0;s:14:\"comment_status\";i:0;s:9:\"total_fee\";d:1299;s:8:\"ship_fee\";s:4:\"0.00\";s:7:\"pay_fee\";s:4:\"0.00\";s:17:\"payment_method_id\";s:1:\"0\";s:18:\"shipping_method_id\";i:0;s:4:\"memo\";s:0:\"\";s:7:\"user_id\";s:1:\"6\";s:16:\"receiver_country\";N;s:13:\"receiver_name\";s:6:\"小明\";s:14:\"receiver_state\";s:6:\"150000\";s:13:\"receiver_city\";s:6:\"150200\";s:17:\"receiver_district\";s:6:\"150202\";s:16:\"receiver_address\";s:6:\"213.21\";s:12:\"receiver_zip\";s:4:\"1420\";s:15:\"receiver_mobile\";s:11:\"13566666666\";s:14:\"receiver_phone\";s:8:\"00000000\";s:11:\"create_time\";i:1396337188;s:8:\"order_id\";s:14:\"20140401942291\";s:8:\"pay_time\";N;s:9:\"ship_time\";N;s:11:\"update_time\";N;s:13:\"order_ship_id\";N;}', null, '6', 'success', null);
INSERT INTO `order_log` VALUES ('103', '20140401525130', 'create', 'a:27:{s:6:\"status\";i:0;s:10:\"pay_status\";i:0;s:11:\"ship_status\";i:0;s:13:\"refund_status\";i:0;s:14:\"comment_status\";i:0;s:9:\"total_fee\";d:243;s:8:\"ship_fee\";s:4:\"0.00\";s:7:\"pay_fee\";s:4:\"0.00\";s:17:\"payment_method_id\";s:1:\"0\";s:18:\"shipping_method_id\";i:0;s:4:\"memo\";s:0:\"\";s:7:\"user_id\";s:1:\"6\";s:16:\"receiver_country\";N;s:13:\"receiver_name\";s:6:\"小明\";s:14:\"receiver_state\";s:6:\"150000\";s:13:\"receiver_city\";s:6:\"150200\";s:17:\"receiver_district\";s:6:\"150202\";s:16:\"receiver_address\";s:6:\"213.21\";s:12:\"receiver_zip\";s:4:\"1420\";s:15:\"receiver_mobile\";s:11:\"13566666666\";s:14:\"receiver_phone\";s:8:\"00000000\";s:11:\"create_time\";i:1396337211;s:8:\"order_id\";s:14:\"20140401525130\";s:8:\"pay_time\";N;s:9:\"ship_time\";N;s:11:\"update_time\";N;s:13:\"order_ship_id\";N;}', null, '6', 'success', null);
INSERT INTO `order_log` VALUES ('104', '20140401364028', 'create', 'a:27:{s:6:\"status\";i:0;s:10:\"pay_status\";i:0;s:11:\"ship_status\";i:0;s:13:\"refund_status\";i:0;s:14:\"comment_status\";i:0;s:9:\"total_fee\";d:243;s:8:\"ship_fee\";s:4:\"0.00\";s:7:\"pay_fee\";s:4:\"0.00\";s:17:\"payment_method_id\";s:1:\"0\";s:18:\"shipping_method_id\";i:0;s:4:\"memo\";s:0:\"\";s:7:\"user_id\";s:1:\"6\";s:16:\"receiver_country\";N;s:13:\"receiver_name\";s:6:\"小明\";s:14:\"receiver_state\";s:6:\"150000\";s:13:\"receiver_city\";s:6:\"150200\";s:17:\"receiver_district\";s:6:\"150202\";s:16:\"receiver_address\";s:6:\"213.21\";s:12:\"receiver_zip\";s:4:\"1420\";s:15:\"receiver_mobile\";s:11:\"13566666666\";s:14:\"receiver_phone\";s:8:\"00000000\";s:11:\"create_time\";i:1396337224;s:8:\"order_id\";s:14:\"20140401364028\";s:8:\"pay_time\";N;s:9:\"ship_time\";N;s:11:\"update_time\";N;s:13:\"order_ship_id\";N;}', null, '6', 'success', null);
INSERT INTO `order_log` VALUES ('105', '20140401404335', 'create', 'a:27:{s:6:\"status\";i:0;s:10:\"pay_status\";i:0;s:11:\"ship_status\";i:0;s:13:\"refund_status\";i:0;s:14:\"comment_status\";i:0;s:9:\"total_fee\";d:1299;s:8:\"ship_fee\";s:4:\"0.00\";s:7:\"pay_fee\";s:4:\"0.00\";s:17:\"payment_method_id\";s:1:\"0\";s:18:\"shipping_method_id\";i:0;s:4:\"memo\";s:0:\"\";s:7:\"user_id\";s:1:\"6\";s:16:\"receiver_country\";N;s:13:\"receiver_name\";s:6:\"小明\";s:14:\"receiver_state\";s:6:\"150000\";s:13:\"receiver_city\";s:6:\"150200\";s:17:\"receiver_district\";s:6:\"150202\";s:16:\"receiver_address\";s:6:\"213.21\";s:12:\"receiver_zip\";s:4:\"1420\";s:15:\"receiver_mobile\";s:11:\"13566666666\";s:14:\"receiver_phone\";s:8:\"00000000\";s:11:\"create_time\";i:1396337242;s:8:\"order_id\";s:14:\"20140401404335\";s:8:\"pay_time\";N;s:9:\"ship_time\";N;s:11:\"update_time\";N;s:13:\"order_ship_id\";N;}', null, '6', 'success', null);
INSERT INTO `order_log` VALUES ('106', '2147483647', 'update', 'O:5:\"Order\":13:{s:15:\"\0Order\0orderLog\";N;s:2:\"id\";N;s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:27:{s:8:\"order_id\";s:14:\"20140401942291\";s:7:\"user_id\";s:1:\"6\";s:6:\"status\";s:1:\"0\";s:10:\"pay_status\";s:1:\"0\";s:11:\"ship_status\";s:1:\"0\";s:13:\"refund_status\";s:1:\"0\";s:14:\"comment_status\";s:1:\"0\";s:9:\"total_fee\";s:7:\"1299.00\";s:8:\"ship_fee\";s:4:\"0.00\";s:7:\"pay_fee\";s:4:\"0.00\";s:17:\"payment_method_id\";s:1:\"0\";s:18:\"shipping_method_id\";s:1:\"0\";s:13:\"receiver_name\";s:6:\"小明\";s:16:\"receiver_country\";N;s:14:\"receiver_state\";s:6:\"150000\";s:13:\"receiver_city\";s:6:\"150200\";s:17:\"receiver_district\";s:6:\"150202\";s:16:\"receiver_address\";s:6:\"213.21\";s:12:\"receiver_zip\";s:4:\"1420\";s:15:\"receiver_mobile\";s:11:\"13566666666\";s:14:\"receiver_phone\";s:8:\"00000000\";s:4:\"memo\";s:0:\"\";s:8:\"pay_time\";N;s:9:\"ship_time\";N;s:11:\"create_time\";s:10:\"1396337188\";s:11:\"update_time\";N;s:13:\"order_ship_id\";N;}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:14:\"20140401942291\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}', null, null, 'success', null);
INSERT INTO `order_log` VALUES ('107', '1', 'create', '创建预约单', '2014-12-24 16:40:24', null, 'success', 'undefined=129&client_mobile=15345512343&client_name=%E5%BC%A0%E4%B8%89&client_zip=100000&client_address=%E5%8C%97%E4%BA%AC%E5%B8%82%E6%B5%B7%E6%B7%80%E5%8C%BA%E5%BD%A9%E5%92%8C%E5%9D%8A%E8%B7%AF11%E5%8F%B715%E5%B1%82&client_phone=15345512343&client_button=%E7%A1%AE%E5%AE%9A&client_state=110000&client_city=110100&client_district=110101&client_memo=%E8%B0%A2%E8%B0%A2%EF%BC%81%3B+%E6%9C%8D%E5%8A%A1%E6%97%B6%E9%97%B4%EF%BC%9A+12%2F24%2F2014+4%3A39+PM&rst_area%5B%5D=1200&rst_memo%5B%5D=&category_item_ids%5B%5D=129');
INSERT INTO `order_log` VALUES ('108', '2', 'create', '创建预约单', '2014-12-25 17:17:16', null, 'success', 'undefined=129&client_mobile=15345512343&client_name=123&client_zip=100000&client_address=%E5%8C%97%E4%BA%AC%E5%B8%82%E6%B5%B7%E6%B7%80%E5%8C%BA%E5%BD%A9%E5%92%8C%E5%9D%8A%E8%B7%AF11%E5%8F%B715%E5%B1%82&client_phone=15345512343&client_button=%E7%A1%AE%E5%AE%9A&client_state=110000&client_city=110100&client_district=110101&client_memo=&rst_area%5B%5D=100&rst_memo%5B%5D=&category_item_ids%5B%5D=129');
INSERT INTO `order_log` VALUES ('109', '3', 'create', '创建预约单', '2014-12-26 10:04:17', null, 'success', 'undefined=129&client_mobile=15300978905&client_name=%E5%BC%A0%E4%B8%89&client_zip=100000&client_address=%E5%BD%A9%E5%92%8C%E5%9D%8A%E8%B7%AF11%E5%8F%B7&client_phone=&client_button=%E7%A1%AE%E5%AE%9A&client_state=110000&client_city=110100&client_district=110101&client_memo=123%3B+%E6%9C%8D%E5%8A%A1%E6%97%B6%E9%97%B4%EF%BC%9A+12%2F26%2F2014+10%3A03+AM&rst_area%5B%5D=100&rst_memo%5B%5D=&category_item_ids%5B%5D=129');

-- ----------------------------
-- Table structure for `order_measure`
-- ----------------------------
DROP TABLE IF EXISTS `order_measure`;
CREATE TABLE `order_measure` (
  `measure_id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `client_name` varchar(45) DEFAULT NULL,
  `client_state` varchar(45) DEFAULT NULL,
  `client_district` varchar(45) DEFAULT NULL,
  `client_address` varchar(255) DEFAULT NULL,
  `client_zip` varchar(45) DEFAULT NULL,
  `client_mobile` varchar(20) DEFAULT NULL,
  `client_phone` varchar(20) DEFAULT NULL,
  `client_memo` varchar(255) DEFAULT NULL,
  `status` char(1) NOT NULL DEFAULT '0' COMMENT '0：未测量  1： 测量中 2：已测量',
  `create_time` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `client_city` varchar(45) NOT NULL DEFAULT '0',
  `update_time` timestamp NULL DEFAULT NULL,
  `memo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`measure_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of order_measure
-- ----------------------------
INSERT INTO `order_measure` VALUES ('0000000001', '11', '张三', '110000', '110101', '北京市海淀区彩和坊路11号15层', '100000', '15345512343', '15345512343', '谢谢！; 服务时间： 12/24/2014 4:39 PM', '0', '0000-00-00 00:00:00', '110100', null, null);
INSERT INTO `order_measure` VALUES ('0000000002', '11', '123', '110000', '110101', '北京市海淀区彩和坊路11号15层', '100000', '15345512343', '15345512343', '', '0', '0000-00-00 00:00:00', '110100', null, null);
INSERT INTO `order_measure` VALUES ('0000000003', '11', '张三', '110000', '110108', '彩和坊路11号', '100000', '15300978905', '12345', '123; 服务时间： 12/26/2014 10:03 AM', '0', '2014-12-26 10:06:14', '110100', null, '12345');

-- ----------------------------
-- Table structure for `order_measure_item`
-- ----------------------------
DROP TABLE IF EXISTS `order_measure_item`;
CREATE TABLE `order_measure_item` (
  `measure_id` int(10) unsigned zerofill NOT NULL DEFAULT '0000000000',
  `category_item_id` int(10) NOT NULL DEFAULT '0',
  `rst_area` decimal(6,2) DEFAULT NULL,
  `rst_memo` varchar(255) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `update_time` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`measure_id`,`category_item_id`),
  CONSTRAINT `fk_order_measure_item_id` FOREIGN KEY (`measure_id`) REFERENCES `order_measure` (`measure_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of order_measure_item
-- ----------------------------
INSERT INTO `order_measure_item` VALUES ('0000000001', '129', '1200.00', '', '0000-00-00 00:00:00', null);
INSERT INTO `order_measure_item` VALUES ('0000000002', '129', '100.00', '', '0000-00-00 00:00:00', null);
INSERT INTO `order_measure_item` VALUES ('0000000003', '129', '9999.99', null, '2014-12-26 10:04:51', null);

-- ----------------------------
-- Table structure for `page`
-- ----------------------------
DROP TABLE IF EXISTS `page`;
CREATE TABLE `page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `store_id` int(10) unsigned NOT NULL,
  `category_id` int(11) NOT NULL DEFAULT '0',
  `key` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` longtext NOT NULL,
  `language` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of page
-- ----------------------------
INSERT INTO `page` VALUES ('1', '0', '32', 'notice', '顾客必读', '<h4>\r\n	如何订购商品？\r\n</h4>\r\n您可以首先浏览我们的网站了解商品。看到您满意的商品您可以直接在我们的网站上实现订购。您也可以和我们网站的客服人员联系订购。\r\n<h4>\r\n	我通过网站看到你们的商品后觉得不错，但是我不是经常上网，你可以寄一些商品的图片和介绍给我吗？\r\n</h4>\r\n答：我们的网站会不定期地为会员发送商品信息资料的电子邮件。如果您目前还没有成为我们的会员，您可以直接在我们的网站上注册，非常方便。\r\n<h4>\r\n	请告诉我在这里购物的理由好吗？\r\n</h4>\r\n<ol>\r\n	<li>\r\n		我们是一家拥有长期经营零售业务经验的网站；\r\n	</li>\r\n	<li>\r\n		我们将给您带来优质的商品及更优惠的价格；\r\n	</li>\r\n	<li>\r\n		多种付款方式以及快速的全国配送；\r\n	</li>\r\n	<li>\r\n		人性化的退换货事宜；\r\n	</li>\r\n	<li>\r\n		体贴入微的会员积分计划；\r\n	</li>\r\n	<li>\r\n		所有产品为原厂正规包装；\r\n	</li>\r\n</ol>\r\n<h4>\r\n	你们的商品我都非常喜欢，已经购买了很多，但是有些怎么一直没货？会不会订不到？\r\n</h4>\r\n由于网站顾客购买量比较大，商品随时可能断货，您可以通过网站上的“到货通知”按钮预定商品或直接联系我们的网站客服进行预约订购。\r\n<h4>\r\n	所有的产品都能够在网站上购买?\r\n</h4>\r\n答：目前网站查找的都是可以订购的，但是必须是仓库中有库存的产品我们才可以与您确认。部分热销产品也可以通过我们的网站做一个预约，等到货品到后，我们会立即通过电话或者电子邮件的方式通知您来订购。\r\n<h4>\r\n	为什么要注册会员？\r\n</h4>\r\n<ol>\r\n	<li>\r\n		只有注册用户才可以在网上进行订购，享受优惠的价格。\r\n	</li>\r\n	<li>\r\n		只有注册用户才可以登录\"会员中心\"，使用更多的会员购物功能,管理自己的资料。\r\n	</li>\r\n	<li>\r\n		只有注册用户才可以在网上给其他注册的朋友留言。\r\n	</li>\r\n	<li>\r\n		只有注册用户才有可能获取我们赠送的礼品。\r\n	</li>\r\n</ol>\r\n<h4>\r\n	忘记了密码怎么办？\r\n</h4>\r\n为了保护客户利益，我们无法看到您的密码。当您忘记密码时，请登录注册页面，点击\"忘记密码\"，系统会自动将您的密码通过email告诉您，您可以登录\"会员中心\"去更改密码，以确保您的利益。\r\n<h4>\r\n	积分是怎么回事？有什么作用？\r\n</h4>\r\n积分的高低只反映您对我们的关注和支持程度。我们的积分是通过订购商品产生的。对于高积分的客户我们会有一定的奖励，如积分兑换商品、积分抵扣价格、赠送商品,更优惠的价格购买商品等，以此回馈广大顾客。', 'zh_cn');
INSERT INTO `page` VALUES ('2', '0', '32', 'memberrank', '会员等级折扣', '我们的会员等级系统是动态的，按照会员积分的多少划分不同的等级，等级越高享受的商品折扣越大。 针对会员的促销活动和优惠政策会运用到每一个优惠活动中。如：“捆绑销售”、“积分换购”等等。', 'zh_cn');
INSERT INTO `page` VALUES ('3', '0', '32', 'orderstatus', '订单的几种状态', '<table class=\"liststyle data ke-zeroborder\" border=\"0\" cellpadding=\"0\" cellspacing=\"2\">\r\n	<tbody>\r\n		<tr>\r\n			<th>\r\n				状态名称\r\n			</th>\r\n			<th>\r\n				状态释义\r\n			</th>\r\n			<th>\r\n				定义\r\n			</th>\r\n			<th>\r\n				反馈信息\r\n			</th>\r\n		</tr>\r\n	</tbody>\r\n	<tbody>\r\n		<tr>\r\n			<th>\r\n				确认\r\n			</th>\r\n			<td>\r\n				未确认\r\n			</td>\r\n			<td>\r\n				未审核确认订单\r\n			</td>\r\n			<td>\r\n				&nbsp;\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>\r\n				已确认\r\n			</th>\r\n			<td>\r\n				货到付款订单已经审核确认\r\n			</td>\r\n			<td>\r\n				为您发送订单已确认信件\r\n			</td>\r\n			<td>\r\n				&nbsp;\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>\r\n				付款\r\n			</th>\r\n			<td>\r\n				&nbsp;\r\n			</td>\r\n			<td>\r\n				&nbsp;\r\n			</td>\r\n			<td>\r\n				&nbsp;\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>\r\n				部分付款\r\n			</th>\r\n			<td>\r\n				只收到部分订单货款\r\n			</td>\r\n			<td>\r\n				为您发送订单收款信件\r\n			</td>\r\n			<td>\r\n				&nbsp;\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>\r\n				已付款\r\n			</th>\r\n			<td>\r\n				货款全部收到\r\n			</td>\r\n			<td>\r\n				为您发送订单收款信件\r\n			</td>\r\n			<td>\r\n				&nbsp;\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>\r\n				取消\r\n			</th>\r\n			<td>\r\n				客户要求取消\r\n			</td>\r\n			<td>\r\n				客户自行取消的订单\r\n			</td>\r\n			<td>\r\n				为您发送订单取消信件\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>\r\n				超送货范围取消\r\n			</th>\r\n			<td>\r\n				超出送货范围的订单\r\n			</td>\r\n			<td>\r\n				为您发送订单取消信件\r\n			</td>\r\n			<td>\r\n				&nbsp;\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>\r\n				重复订单取消\r\n			</th>\r\n			<td>\r\n				同一日重复定购同样商品的订单\r\n			</td>\r\n			<td>\r\n				为您发送订单取消信件\r\n			</td>\r\n			<td>\r\n				&nbsp;\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>\r\n				地址不详取消\r\n			</th>\r\n			<td>\r\n				客户所留地址不够详细，或只留信箱，无法上门送货的订单\r\n			</td>\r\n			<td>\r\n				为您发送订单取消信件\r\n			</td>\r\n			<td>\r\n				&nbsp;\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>\r\n				货款逾期未收到\r\n			</th>\r\n			<td>\r\n				自订单日期后7日内仍然没有收到全部货款\r\n			</td>\r\n			<td>\r\n				为您发送订单取消信件\r\n			</td>\r\n			<td>\r\n				&nbsp;\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>\r\n				货款不足取消\r\n			</th>\r\n			<td>\r\n				部分到款后7日内余款未付\r\n			</td>\r\n			<td>\r\n				为您发送订单取消信件\r\n			</td>\r\n			<td>\r\n				&nbsp;\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>\r\n				发货\r\n			</th>\r\n			<td>\r\n				部分发货\r\n			</td>\r\n			<td>\r\n				由于订单中部分商品缺货，先将有库存的商品发货\r\n			</td>\r\n			<td>\r\n				&nbsp;为您发送全部发货信件\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>\r\n				已发货\r\n			</th>\r\n			<td>\r\n				全部发货\r\n			</td>\r\n			<td>\r\n				为您发送部分发货信件\r\n			</td>\r\n			<td>\r\n				&nbsp;\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>\r\n				退款\r\n			</th>\r\n			<td>\r\n				&nbsp;\r\n			</td>\r\n			<td>\r\n				&nbsp;\r\n			</td>\r\n			<td>\r\n				&nbsp;\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>\r\n				部分退款\r\n			</th>\r\n			<td>\r\n				退回您的部分购物款项\r\n			</td>\r\n			<td>\r\n				&nbsp;\r\n			</td>\r\n			<td>\r\n				&nbsp;\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>\r\n				全额退款\r\n			</th>\r\n			<td>\r\n				退回您的全部购物款项\r\n			</td>\r\n			<td>\r\n				&nbsp;\r\n			</td>\r\n			<td>\r\n				&nbsp;\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>\r\n				退货\r\n			</th>\r\n			<td>\r\n				部分退货\r\n			</td>\r\n			<td>\r\n				收到了您退回订单中的部分商品\r\n			</td>\r\n			<td>\r\n				&nbsp;\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>\r\n				全部退货\r\n			</th>\r\n			<td>\r\n				收到了您退回订单中的全部商品\r\n			</td>\r\n			<td>\r\n				&nbsp;\r\n			</td>\r\n			<td>\r\n				&nbsp;\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>\r\n				归档\r\n			</th>\r\n			<td>\r\n				已归档\r\n			</td>\r\n			<td>\r\n				订单已经全部处理结束，归档保存\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'zh_cn');
INSERT INTO `page` VALUES ('4', '0', '32', 'scoreplan', '积分奖励计划 ', '<h4>\r\n	积分增加\r\n</h4>\r\n按照订单中商品金额或者商品可得积分，订单状态为已发货后可获得相应的积分 。\r\n<h4>\r\n	积分查询\r\n</h4>\r\n会员可进入会员中心－会员信息中查看自己的积分情况。\r\n<h4>\r\n	积分有效期\r\n</h4>\r\n积分长期有效。除非本网站取消积分奖励计划。如果取消积分奖励计划我们会提前通知广大用户。\r\n<h4>\r\n	积分说明\r\n</h4>\r\n本积分奖励计划由本网站制定并保留所有的解释权和修改权。修改以网站公布为准，不做另行通知。', 'zh_cn');
INSERT INTO `page` VALUES ('5', '0', '32', 'returngood', '商品退货保障', '<h4>\r\n	符合以下条件，可以要求换货\r\n</h4>\r\n<ol>\r\n	<li>\r\n		客户在收到货物时当面在送货员面前拆包检查，发现货物有质量问题的；\r\n	</li>\r\n	<li>\r\n		实际收到货物与网站上描述的有很大的出入的。\r\n	</li>\r\n</ol>\r\n<strong>换货流程</strong>：客户当面要求送货人员退回货物，然后与我们联系。我们会为您重新发货，货物到达时间顺延。\r\n<h4>\r\n	符合以下条件，可以要求退货\r\n</h4>\r\n<ol>\r\n	<li>\r\n		客户收到货物后两天之内，发现商品有明显的制造缺陷的；\r\n	</li>\r\n	<li>\r\n		货物经过一次换货但仍然存在质量问题的；\r\n	</li>\r\n	<li>\r\n		由于人为原因造成超过我们承诺到货之日5天还没收到货物的。\r\n	</li>\r\n</ol>\r\n<strong>退货流程：</strong>客户在收到货物后两天内与我们联系，我们会在三个工作日内通过银行汇款把您的货款退回。\r\n<h4>\r\n	在以下情况我们有权拒绝客户的退换货要求\r\n</h4>\r\n<ol>\r\n	<li>\r\n		货物出现破损，但没有在收货时当场要求送货人员换货的；\r\n	</li>\r\n	<li>\r\n		超过退换货期限的退换货要求；\r\n	</li>\r\n	<li>\r\n		退换货物不全或者外观受损 ；\r\n	</li>\r\n	<li>\r\n		客户发货单据丢失或者不全；\r\n	</li>\r\n	<li>\r\n		产品并非我们提供；\r\n	</li>\r\n	<li>\r\n		货物本身不存在质量问题的 。\r\n	</li>\r\n</ol>', 'zh_cn');
INSERT INTO `page` VALUES ('6', '0', '33', 'nonmember', '非会员购物通道', '<ol>\r\n	<li>\r\n		我们提供非会员购物功能，在购物车下一步的时候，进入非会员购物通道即可使用此功能。\r\n	</li>\r\n	<li>\r\n		但是由于非会员无法享受购物积分、无法查询订单等，所以我们建议您花一分钟时间注册成为会员，这样就能享受整个网站强大的会员功能和多种优惠措施。\r\n	</li>\r\n</ol>', 'zh_cn');
INSERT INTO `page` VALUES ('7', '0', '33', 'service', '体贴的售后服务', '本网站所售产品均实行三包政策，请顾客保存好有效凭证，以确保我们为您更好服务。本公司的客户除享受国家规定“三包”。您可以更放心地在这里购物。<br />\r\n<br />\r\n<h3>\r\n	保修细则\r\n</h3>\r\n<h4>\r\n	一、在本网站购买的商品，自购买日起(以到货登记为准)7日内出现性能故障，您可以选择退货、换货或修理。\r\n</h4>\r\n<ol>\r\n	<li>\r\n		在接到您的产品后，我公司将问题商品送厂商特约维修中心检测；\r\n	</li>\r\n	<li>\r\n		检测报出来后，如非人为损坏的，是产品本身质量问题，我公司会及时按您的要求予以退款、换可或维修。\r\n	</li>\r\n	<li>\r\n		如果检测结果是无故障或是人为因素造成的故障，我公司会及时通知您，并咨询您的处理意见。\r\n	</li>\r\n</ol>\r\n<h4>\r\n	二、在本公司购买的商品，自购日起(以到货登记为准)15日内出现性能故障，您可以选择换货或修理。(享受15天退换货无需理由的商品，按《15天退换货无需理由细则》办理)\r\n</h4>\r\n<ol>\r\n	<li>\r\n		在接到您的产品后，我公司将问题商品送厂商特约维修中心检测；\r\n	</li>\r\n	<li>\r\n		检测报出来后，如非人为损坏的，是产品本身质量问题，我公司会及时按您的要求予以退款、换可或维修。\r\n	</li>\r\n	<li>\r\n		如果检测结果是无故障或是人为因素造成的故障，我公司会及时通知您，并咨询您的处理意见。\r\n	</li>\r\n</ol>\r\n<h4>\r\n	三、在本公司购买的商品，自购日起(以到货登记为准)一年之内出现非人为损坏的质量问题，本公司承诺免费保修。\r\n</h4>\r\n<ol>\r\n	<li>\r\n		在接到您的产品后，我公司将问题商品送厂商特约维修中心检测；\r\n	</li>\r\n	<li>\r\n		检测报出来后，如非人为损坏的，是产品本身质量问题，我公司会及时按您的要求予以退款、换可或维修。\r\n	</li>\r\n	<li>\r\n		如果检测结果是无故障或是人为因素造成的故障，我公司会及时通知您，并咨询您的处理意见。\r\n	</li>\r\n</ol>\r\n<h3>\r\n	收费维修：\r\n</h3>\r\n<h4>\r\n	一、对于人为造成的故障，本公司将采取收费维修，包括：\r\n</h4>\r\n<ol>\r\n	<li>\r\n		产品内部被私自拆开或其中任何部分被更替；\r\n	</li>\r\n	<li>\r\n		商品里面的条码不清楚，无法成功判断；\r\n	</li>\r\n	<li>\r\n		有入水、碎裂、损毁或有腐蚀等现象；\r\n	</li>\r\n	<li>\r\n		过了保修期的商品。\r\n	</li>\r\n</ol>\r\n<h4>\r\n	二、符合以下条件，可以要求换货：\r\n</h4>\r\n<ol>\r\n	<li>\r\n		客户在收到货物时当面在送货员面前拆包检查，发现货物有质量问题的\r\n	</li>\r\n	<li>\r\n		实际收到货物与网站上描述的有很大的出入的\r\n	</li>\r\n	<li>\r\n		换货流程：客户当面要求送货人员退回货物，然后与我们联系。我们会在一个工作日内为您重新发货，货物到达时间顺延。\r\n	</li>\r\n</ol>\r\n<h4>\r\n	三、符合以下条件，可以要求退货：\r\n</h4>\r\n客户收到货物后两天之内，\r\n<ol>\r\n	<li>\r\n		发现商品有明显的制造缺陷的\r\n	</li>\r\n	<li>\r\n		货物经过一次换货但仍然存在质量问题的\r\n	</li>\r\n	<li>\r\n		由于人为原因造成超过我们承诺到货之日三天还没收到货物的\r\n	</li>\r\n</ol>\r\n退货流程：客户在收到货物后两天内与我们联系，我们会在两个工作日内通过银行汇款把您的货款退回。\r\n<h4>\r\n	在以下情况我们有权拒绝客户的退换货要求：\r\n</h4>\r\n<ol>\r\n	<li>\r\n		货物出现破损，但没有在收货时当场要求送货人员换货的\r\n	</li>\r\n	<li>\r\n		超过退换货期限的退换货要求\r\n	</li>\r\n	<li>\r\n		退换货物不全或者外观受损\r\n	</li>\r\n	<li>\r\n		客户发货单据丢失或者不全\r\n	</li>\r\n	<li>\r\n		产品并非我们提供\r\n	</li>\r\n	<li>\r\n		货物本身不存在质量问题的\r\n	</li>\r\n</ol>', 'zh_cn');
INSERT INTO `page` VALUES ('8', '0', '33', 'terms', '网站使用条款', '如果您在本网站访问或购物，您便接受了以下条件。\r\n<h4>\r\n	版权\r\n</h4>\r\n本网站上的所有内容诸如文字、图表、标识、按钮图标、图像、声音文件片段、数字下载、数据编辑和软件都是本网站提供者的财产，受中国和国际版权法的保护。\r\n本网站上所有内容的汇编是本网站的排他财产，受中国和国际版权法的保护。本网站上所使用的所有软件都是本网站或其关联公司或其软件供应商的财产，受中国和\r\n国际版权法的保护。\r\n<h4>\r\n	许可和网站进入\r\n</h4>\r\n本网站授予您有限的许可进入和个人使用本网站，未经本网站的明确书面同意不许下载（除了页面缓存）或修改网站或其任何部分。这一许可不包括对本网站或其内\r\n容的转售或商业利用、任何收集和利用产品目录、说明和价格、任何对本网站或其内容的衍生利用、任何为其他商业利益而下载或拷贝账户信息或使用任何数据采\r\n集、 \r\nrobots或类似的数据收集和摘录工具。未经本网站的书面许可，严禁对本网站的内容进行系统获取以直接或间接创建或编辑文集、汇编、数据库或人名地址录\r\n（无论是否通过robots、spiders、自动仪器或手工操作）。另外，严禁为任何未经本使用条件明确允许的目的而使用本网站上的内容和材料。 \r\n未经本网站明确书面同意，不得以任何商业目的对本网站或其任何部分进行复制、复印、仿造、出售、转售、访问、或以其他方式加以利用。未经本网站明确书面同\r\n意，您不得用设计或运用设计技巧把本网站或其关联公司的商标、标识或其他专有信息（包括图像、文字、网页设计或形式）据为己有。未经本网站明确书面同意，\r\n您不可以meta \r\ntags或任何其他“隐藏文本”方式使用本网站的名字和商标。任何未经授权的使用都会终止本网站所授予的允许或许可。您被授予有限的、可撤销的和非独家的\r\n权利建立链接到本网站主页的超链接，只要这个链接不以虚假、误导、贬毁或其他侵犯性方式描写本网站、其关联公司或它们的产品和服务。\r\n<h4>\r\n	评论、意见、消息和其他内容\r\n</h4>\r\n访问者可以张贴评论、意见及其他内容，以及提出建议、主意、意见、问题或其他信息，只要内容不是非法、淫秽、威胁、诽谤、侵犯隐私、侵犯知识产权或以其他\r\n形式对第三者构成伤害或侵犯或令公众讨厌，也不包含软件病毒、政治宣传、商业招揽、连锁信、大宗邮件或任何形式的“垃圾邮件”。您不可以使用虚假的电子邮\r\n件地址、冒充任何他人或实体或以其它方式对卡片或其他内容的来源进行误导。本网站保留清除或编辑这些内容的权利（但非义务），但不对所张贴的内容进行经常\r\n性的审查。如果您确实张贴了内容或提交了材料，除非我们有相反指示，您授予本网站及其关联公司非排他的、免费的、永久的、不可撤销的和完全的再许可权而在\r\n全世界范围内任何媒体上使用、复制、修改、改写、出版、翻译、创作衍生作品、分发和展示这样的内容。您授予本网站及其关联公司和被转许可人使用您所提交的\r\n与这些内容有关的名字的权利，如果他们选择这样做的话。您声明并担保您拥有或以其它方式控制您所张贴内容的权利，内容是准确的，对您所提供内容的使用不违\r\n反本政策并不会对任何人和实体造成伤害。您声明并保证对于因您所提供的内容引起的对本网站或其关联公司损害进行赔偿。本网站有权监控和编辑或清除任何活动\r\n或内容。本网站对您或任何第三方所张贴的内容不承担责任。\r\n<h4>\r\n	产品说明\r\n</h4>\r\n本网站及其关联公司努力使产品说明尽可能准确。不过，由于实际条件限制，本网站并不保证产品说明或本网站上的其他内容是准确的、完整的、可靠的、最新的或无任何错误的。\r\n<h4>\r\n	电子通讯\r\n</h4>\r\n当您访问本网站或给我们发送电子邮件时，您与我们用电子方式进行联系。您同意以电子方式接受我们的信息。我们将用电子邮件或通过在本网站上发布通知的方式\r\n与您进行联系。您同意我们用电子方式提供给您的所有协议、通知、披露和其他信息是符合此类通讯必须是书面形式的法定要求的。如果并且当本网站能够证明以电\r\n子形式的信息已经发送给您或者在本网站张贴这样的通知，将被视为您已收到所有协议、声明、披露和其他信息。', 'zh_cn');
INSERT INTO `page` VALUES ('9', '0', '33', 'disclaimer', '免责条款', '<h4>\r\n	免责声明\r\n</h4>\r\n如因不可抗力或其他无法控制的原因造成网站销售系统崩溃或无法正常使用，从而导致网上交易无法完成或丢失有关的信息、记录等，网站将不承担责任。但是我们将会尽合理的可能协助处理善后事宜，并努力使客户减少可能遭受的经济损失。<br />\r\n本\r\n店可以按买方的要求代办相关运输手续，但我们的责任义务仅限于按时发货，遇到物流（邮政）意外时协助买方查询，不承担任何物流（邮政）提供给顾客之外的赔\r\n偿，一切查询索赔事宜均按照物流（邮政）的规定办理。在物流（邮政）全程查询期限未满之前，买方不得要求赔偿。提醒买方一定核实好收货详细地址和收货人电\r\n话，以免耽误投递。凡在本店购物，均视为如同意此声明。<br />\r\n<h4>\r\n	客户监督\r\n</h4>\r\n我们希望通过不懈努力，为客户提供最佳服务，我们在给客户提供服务的全程中接受客户的监督。\r\n<h4>\r\n	争议处理\r\n</h4>\r\n如果客户与网站之间发生任何争议，可依据当时双方所认定的协议或相关法律来解决。', 'zh_cn');
INSERT INTO `page` VALUES ('10', '0', '33', 'process', '简单的购物流程', '<h4>\r\n	怎样注册？\r\n</h4>\r\n<p>\r\n	答：您可以直接点击\"会员注册\"进行注册。注册很简单，您只需按注册向导的要求输入一些基本信息即可。为了准确地为您服务，请务必在注册时填写您的真实信息，我们会为您保密。输入的帐号要4-10位，仅可使用英文字母、数字\"-\"。\r\n</p>\r\n<h4>\r\n	怎样成为会员?\r\n</h4>\r\n<p>\r\n	答：您可以直接点击\"会员登录与注册\"进行注册。注册很简单，您只需根据系统提示输入相关资料即可，请您填写完毕时，务必核对填写内容的准确性，并谨记您的会员账号和密码，以便您查询订单或是希望网站提供予您更多的服务时用以核对您的身份。\r\n</p>\r\n<h4>\r\n	如何在网上下单购买，怎么一个操作流程呢？\r\n</h4>\r\n<p>\r\n	答：这种方式和您逛商场的方式十分相似，您只要按照我们的商品分类页面或进入\"钻石珠宝\"、\"个性定制\"等逐页按照链接指明的路径浏览就可以了。 \r\n一旦看中了您喜欢的商品，您可以随时点击\"放入购物篮\"按钮将它放入\"购物篮\"。随后，您可以按\"去收银台\"。我们的商品十分丰富，不过您别担心，我们在\r\n每一页中都设立了详细明白的导航条，您是不会迷路的。\r\n</p>', 'zh_cn');
INSERT INTO `page` VALUES ('11', '0', '34', 'payment', '支付方式', '<table class=\"liststyle data ke-zeroborder\" border=\"0\" cellpadding=\"0\" cellspacing=\"2\">\r\n	<tbody>\r\n		<tr>\r\n			<th width=\"123\">\r\n				支付方式\r\n			</th>\r\n			<th width=\"198\">\r\n				银行\r\n			</th>\r\n			<th width=\"518\">\r\n				卡号\r\n			</th>\r\n			<th width=\"309\">\r\n				户名\r\n			</th>\r\n		</tr>\r\n	</tbody>\r\n	<tbody>\r\n		<tr>\r\n			<th>\r\n				<span>预存款支付</span>\r\n			</th>\r\n			<td>\r\n				&nbsp;\r\n			</td>\r\n			<td colspan=\"2\">\r\n				使用本商店会员预存款余额进行支付。如果余额不足，可进入会员中心在线充值。\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>\r\n				<span> </span><br />\r\n			</th>\r\n			<td>\r\n				<img src=\"http://pic.shopex.cn/pictures/newsimg/1169028039.gif\" />\r\n			</td>\r\n			<td>\r\n				一卡通卡号：\r\n			</td>\r\n			<td rowspan=\"2\">\r\n				刘小恪\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>\r\n				&nbsp;\r\n			</th>\r\n			<td>\r\n				<strong>招商</strong>银行上海分行\r\n			</td>\r\n			<td>\r\n				&nbsp;\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>\r\n				&nbsp;\r\n			</th>\r\n			<td>\r\n				<span style=\"font-size:small;\"><strong><img src=\"http://pic.shopex.cn/pictures/newsimg/1169028056.gif\" /></strong></span>\r\n			</td>\r\n			<td>\r\n				灵通卡号：\r\n			</td>\r\n			<td rowspan=\"2\">\r\n				刘小恪\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>\r\n				&nbsp;\r\n			</th>\r\n			<td>\r\n				<span style=\"font-size:small;\"><strong>工商</strong></span>银行上海分行昌宁支行\r\n			</td>\r\n			<td>\r\n				<span style=\"color:#0080c0;\">9558</span>8010<span style=\"color:#0080c0;\">0×××8</span>9<span style=\"color:#0080c0;\">×××</span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>\r\n				&nbsp;\r\n			</th>\r\n			<td>\r\n				<strong><span style=\"font-size:small;\"><img src=\"http://pic.shopex.cn/pictures/newsimg/1169028068.gif\" /></span></strong>\r\n			</td>\r\n			<td>\r\n				金穗卡号：\r\n			</td>\r\n			<td rowspan=\"2\">\r\n				刘小恪\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>\r\n				&nbsp;\r\n			</th>\r\n			<td>\r\n				<strong><span style=\"font-size:small;\">农业</span></strong>银行上海分行共和支行\r\n			</td>\r\n			<td>\r\n				<span style=\"color:#0080c0;\">622848×××8</span>9<span style=\"color:#0080c0;\">×××</span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>\r\n				&nbsp;\r\n			</th>\r\n			<td>\r\n				<span style=\"font-size:small;\"><strong><img src=\"http://pic.shopex.cn/pictures/newsimg/1169028078.gif\" /></strong></span>\r\n			</td>\r\n			<td>\r\n				龙卡号：\r\n			</td>\r\n			<td rowspan=\"2\">\r\n				刘小恪\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>\r\n				&nbsp;\r\n			</th>\r\n			<td>\r\n				<span style=\"font-size:small;\"><strong>建设</strong></span>银行上海分行\r\n			</td>\r\n			<td>\r\n				<span style=\"color:#0080c0;\">4367</span>4212<span style=\"color:#0080c0;\">1×××8<span style=\"color:#000000;\">9</span><span style=\"color:#0080c0;\">×××</span></span>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>\r\n				支付宝\r\n			</th>\r\n			<td>\r\n				<img alt=\"\" src=\"http://pic.shopex.cn/pictures/newsimg/1169028139.jpg\" />\r\n			</td>\r\n			<td colspan=\"2\">\r\n				支付宝（<a href=\"http://www.alipay.com/\"><span style=\"color:#0328c1;\">www.alipay.com</span></a>）致力于为中国电子商务提供各种安全、方便、个性化的在线支付解决方案。支付宝从2003年10月在淘宝网推出，短短几年时间内迅速成为使用极其广泛的网上安全支付工具，深受用户喜爱。截止2006年6月，使用支付宝的用户已经超过2000万，日支付宝日交易总额超过４000万元人民币，日交易笔数超过25万笔。\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>\r\n				<span> paypal贝宝</span>\r\n			</th>\r\n			<td>\r\n				<img src=\"http://pic.shopex.cn/pictures/newsimg/1169028114.jpg\" />\r\n			</td>\r\n			<td colspan=\"2\">\r\n				paypal 贝宝（<a href=\"http://www.paypal.com.cn/\"><span style=\"color:#000000;\">www.paypal.com.cn</span></a>）公司是世界领先的网络支付公司paypal 公司为中国市场度身定做的网络支付服务，可以用e-mail地址，透过信用卡及银行帐户，安全地支付及存入网上各类帐项。paypal公司利用现有的银行系统和信用卡系统，通过先进的网络技术和网络安全防范技术，在全球 103 个国家为超过 1 亿个人以及网上商户提供安全便利的网上支付服务。\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'zh_cn');
INSERT INTO `page` VALUES ('12', '0', '34', 'shipping', '配送方式', '<table class=\"liststyle data ke-zeroborder\" border=\"0\" cellpadding=\"0\" cellspacing=\"2\">\r\n	<tbody>\r\n		<tr>\r\n			<th width=\"79\">\r\n				快递公司\r\n			</th>\r\n			<th width=\"120\">\r\n				送货范围\r\n			</th>\r\n			<th width=\"117\">\r\n				送达时间\r\n			</th>\r\n			<th width=\"815\">\r\n				详细介绍\r\n			</th>\r\n		</tr>\r\n	</tbody>\r\n	<tbody>\r\n		<tr>\r\n			<th>\r\n				<span>顺丰快递(+￥20.00)<br />\r\n</span>\r\n			</th>\r\n			<td colspan=\"3\">\r\n				<img src=\"http://pic.shopex.cn/pictures/newsimg/1169028571.jpg\" />\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>\r\n				&nbsp;\r\n			</th>\r\n			<td>\r\n				全国\r\n			</td>\r\n			<td>\r\n				2-4个工作日\r\n			</td>\r\n			<td>\r\n				顺丰快递（<a href=\"http://www.sf-express.com/\"><span style=\"color:#0328c1;\">www.sf-express.com</span></a>）可能是国内最好的快递公司。假如你希望快递公司的服务质量比较好，请选择顺丰。从速度到人员素质乃至安全性，顺丰都是国内数一数二的。配送过程中可以进入顺风网站查询和跟踪商品运输情况。\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>\r\n				ems快递(+￥25.00)<br />\r\n			</th>\r\n			<td colspan=\"3\">\r\n				<img src=\"http://pic.shopex.cn/pictures/newsimg/1169028716.jpg\" />\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>\r\n				&nbsp;\r\n			</th>\r\n			<td>\r\n				全国\r\n			</td>\r\n			<td>\r\n				2-5个工作日\r\n			</td>\r\n			<td>\r\n				国家邮政特快专递，门对门服务，一般在2-5天内到达。由快递公司中转，所以速度反而会比一般的快递慢。主要用于一般快递无法到达地区。\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>\r\n				fedex联邦快递(+￥30.00)<br />\r\n			</th>\r\n			<td colspan=\"3\">\r\n				<img src=\"http://pic.shopex.cn/pictures/newsimg/1169028674.jpg\" />\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>\r\n				&nbsp;\r\n			</th>\r\n			<td>\r\n				全国\r\n			</td>\r\n			<td>\r\n				1-2工作日\r\n			</td>\r\n			<td>\r\n				联邦快递是全球最具规模的快递运输公司，为全球超过220个国家及地区提供快捷、可靠的快递服务。联邦快递设有环球航空及陆运网络，通常只需一至两个工作日，就能迅速运送时限紧迫的货件，而且确保准时送达。\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'zh_cn');
INSERT INTO `page` VALUES ('13', '0', '34', 'orderinfo', '订单何时出库？', '订单的出库时间要以您订单的配货情况而定。请您随时登录“会员中心”查看订单状态。如果订单显示“已发货”，说明订单已经出库，请您耐心等待收货。', 'zh_cn');
INSERT INTO `page` VALUES ('14', '0', '34', 'onlinepayment', '网上支付小贴士', '<h4>\r\n	1、银行卡网上支付的开通手续\r\n</h4>\r\n因各地银行政策不同，建议您在网上支付前拨打所在地银行电话，咨询该行可供网上支付的银行卡种类及开通手续。\r\n<table class=\"liststyle data ke-zeroborder\" border=\"0\" cellpadding=\"0\" cellspacing=\"2\">\r\n	<tbody>\r\n		<tr>\r\n			<th width=\"174\">\r\n				<strong>银行名称</strong>\r\n			</th>\r\n			<th width=\"153\">\r\n				<strong>服务热线</strong>\r\n			</th>\r\n			<th width=\"195\">\r\n				<strong>银行名称</strong>\r\n			</th>\r\n			<th width=\"184\">\r\n				<strong>服务热线</strong>\r\n			</th>\r\n			<th width=\"195\">\r\n				银行名称\r\n			</th>\r\n			<th width=\"243\">\r\n				服务热线\r\n			</th>\r\n		</tr>\r\n	</tbody>\r\n	<tbody>\r\n		<tr>\r\n			<th>\r\n				招商银行\r\n			</th>\r\n			<td>\r\n				95555\r\n			</td>\r\n			<th>\r\n				中国银行\r\n			</th>\r\n			<td>\r\n				95566\r\n			</td>\r\n			<th>\r\n				交通银行\r\n			</th>\r\n			<td>\r\n				95559\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>\r\n				中国工商银行\r\n			</th>\r\n			<td>\r\n				95588\r\n			</td>\r\n			<th>\r\n				北京银行\r\n			</th>\r\n			<td>\r\n				010-96169\r\n			</td>\r\n			<th>\r\n				光大银行\r\n			</th>\r\n			<td>\r\n				95595\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>\r\n				中国建设银行\r\n			</th>\r\n			<td>\r\n				95533\r\n			</td>\r\n			<th>\r\n				中国农业银行\r\n			</th>\r\n			<td>\r\n				95599\r\n			</td>\r\n			<th>\r\n				深圳发展银行\r\n			</th>\r\n			<td>\r\n				95501\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>\r\n				上海浦东发展银行\r\n			</th>\r\n			<td>\r\n				95528\r\n			</td>\r\n			<th>\r\n				广东发展银行\r\n			</th>\r\n			<td>\r\n				95508\r\n			</td>\r\n			<th>\r\n				中国邮政\r\n			</th>\r\n			<td>\r\n				11185\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th>\r\n				民生银行\r\n			</th>\r\n			<td>\r\n				95568\r\n			</td>\r\n			<th>\r\n				华夏银行\r\n			</th>\r\n			<td>\r\n				95577\r\n			</td>\r\n			<th>\r\n				中信银行\r\n			</th>\r\n			<td>\r\n				86668888\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<h4>\r\n	2、支付金额上限\r\n</h4>\r\n目前各银行对于网上支付均有一定金额的限制，由于各银行政策不同，建议您在申请网上支付功能时向银行咨询相关事宜。\r\n<h4>\r\n	3、怎样判断网上支付是否成功？\r\n</h4>\r\n<ol>\r\n	<li>\r\n		当您完成网上在线支付过程后，系统应提示支付成功；如果系统没有提示支付失败或成功，您可通过电话、atm 、柜台或登录网上银行等各种方式查询银行卡余额，如果款项已被扣除，网上支付交易应该是成功的，请您耐心等待。\r\n	</li>\r\n	<li>\r\n		如果出现信用卡超额透支、存折余额不足、意外断线等导致支付不成功，请您登录会员中心，找到该张未支付成功的订单，重新完成支付。\r\n	</li>\r\n</ol>\r\n<span style=\"color:#ff0000;\">小贴士：请您在48小时之内完成支付，否则我们将不会保留您的订单。</span> \r\n<h4>\r\n	4、造成“支付被拒绝”的原因有哪些？\r\n</h4>\r\n<ol>\r\n	<li>\r\n		所持银行卡尚未开通网上在线支付功能\r\n	</li>\r\n	<li>\r\n		所持银行卡已过期、作废、挂失；\r\n	</li>\r\n	<li>\r\n		所持银行卡内余额不足；\r\n	</li>\r\n	<li>\r\n		输入银行卡卡号或密码不符；\r\n	</li>\r\n	<li>\r\n		输入证件号不符；\r\n	</li>\r\n	<li>\r\n		银行系统数据传输出现异常；\r\n	</li>\r\n	<li>\r\n		网络中断。\r\n	</li>\r\n</ol>', 'zh_cn');
INSERT INTO `page` VALUES ('15', '0', '34', 'shippinginfo', '关于送货和验货', '<h2>\r\n	签收商品时需要注意哪些问题？\r\n</h2>\r\n<p>\r\n	1、送货上门、货到付款订单：快递员送货上门时，请您务必当面对照发货单核对商品，如果出现商品数量缺少、商品破损，请您当场办理整单商品的退货。若订单中含有赠品，请一并退回。一旦您确认签字，我们将无法为您办理退换或补发。\r\n</p>\r\n<ol>\r\n	<strong>特别提示：</strong>\r\n	<li>\r\n		如果您的订单使用帐户余额或礼券支付，只有退货商品的金额小于实际应付款金额时才可办理。\r\n	</li>\r\n	<li>\r\n		如果您的订单中含有赠品，将无法提供此项服务；如果是成套商品，您只能整套退货。如果是捆绑商品，您在退主商品的同时需要将赠品一起退回。\r\n	</li>\r\n</ol>\r\n2、\r\n邮局邮寄订单：请您在领取包裹时务必检查外包装，如果发现包裹破损，请您不要签收，随后请及时将包裹单原件邮寄给我们，您的包裹单原件将作为我们为您办理\r\n补发或退款的唯一证明。收到包裹单后，我们将为您办理相关手续。如您未拆开外包装箱，也可以当场全部退货。平邮订单，在收到包裹时，如发现包裹破损，请您\r\n要求邮局出具包裹破损证明。<span style=\"color:#ff0000;\">注：敬请您在验货签收时仔细核对发票，如果出现发票开错或漏开，请您及时联系我们，注明订单号、邮寄地址和收信人姓名，我们接到您的信息后会尽快为您开具，并邮寄给您。</span>', 'zh_cn');
INSERT INTO `page` VALUES ('16', '0', '35', 'license', '注册服务条款', '<p>\r\n	尊敬的用户，欢迎您注册成为本网站用户。在注册前请您仔细阅读如下服务条款：<br />\r\n本服务协议双方为本网站与本网站用户，本服务协议具有合同效力。<br />\r\n您确认本服务协议后，本服务协议即在您和本网站之间产生法律效力。请您务必在注册之前认真阅读全部服务协议内容，如有任何疑问，可向本网站咨询。<br />\r\n无论您事实上是否在注册之前认真阅读了本服务协议，只要您点击协议正本下方的\"注册\"按钮并按照本网站注册程序成功注册为用户，您的行为仍然表示您同意并签署了本服务协议。\r\n</p>\r\n<h4>\r\n	1．本网站服务条款的确认和接纳\r\n</h4>\r\n本网站各项服务的所有权和运作权归本网站拥有。\r\n<h4>\r\n	2．用户必须：\r\n</h4>\r\n(1)自行配备上网的所需设备， 包括个人电脑、调制解调器或其他必备上网装置。<br />\r\n(2)自行负担个人上网所支付的与此服务有关的电话费用、 网络费用。\r\n<h4>\r\n	3．用户在本网站上交易平台上不得发布下列违法信息：\r\n</h4>\r\n(1)反对宪法所确定的基本原则的；<br />\r\n(2).危害国家安全，泄露国家秘密，颠覆国家政权，破坏国家统一的；<br />\r\n(3).损害国家荣誉和利益的；<br />\r\n(4).煽动民族仇恨、民族歧视，破坏民族团结的；<br />\r\n(5).破坏国家宗教政策，宣扬邪教和封建迷信的；<br />\r\n(6).散布谣言，扰乱社会秩序，破坏社会稳定的；<br />\r\n(7).散布淫秽、色情、赌博、暴力、凶杀、恐怖或者教唆犯罪的；<br />\r\n(8).侮辱或者诽谤他人，侵害他人合法权益的；<br />\r\n(9).含有法律、行政法规禁止的其他内容的。\r\n<h4>\r\n	4． 有关个人资料\r\n</h4>\r\n用户同意：<br />\r\n(1) 提供及时、详尽及准确的个人资料。<br />\r\n(2).同意接收来自本网站的信息。<br />\r\n(3) 不断更新注册资料，符合及时、详尽准确的要求。所有原始键入的资料将引用为注册资料。<br />\r\n(4)本网站不公开用户的姓名、地址、电子邮箱和笔名，以下情况除外：<br />\r\n（a）用户授权本网站透露这些信息。<br />\r\n（b）相应的法律及程序要求本网站提供用户的个人资料。如果用户提供的资料包含有不正确的信息，本网站保留结束用户使用本网站信息服务资格的权利。\r\n<h4>\r\n	5.\r\n用户在注册时应当选择稳定性及安全性相对较好的电子邮箱，并且同意接受并阅读本网站发往用户的各类电子邮件。如用户未及时从自己的电子邮箱接受电子邮件或\r\n因用户电子邮箱或用户电子邮件接收及阅读程序本身的问题使电子邮件无法正常接收或阅读的，只要本网站成功发送了电子邮件，应当视为用户已经接收到相关的电\r\n子邮件。电子邮件在发信服务器上所记录的发出时间视为送达时间。\r\n</h4>\r\n<h4>\r\n	6． 服务条款的修改\r\n</h4>\r\n本网站有权在必要时修改服务条款，本\r\n网站服务条款一旦发生变动，将会在重要页面上提示修改内容。如果不同意所改动的内容，用户可以主动取消获得的本网站信息服务。如果用户继续享用本网站信息\r\n服务，则视为接受服务条款的变动。本网站保留随时修改或中断服务而不需通知用户的权利。本网站行使修改或中断服务的权利，不需对用户或第三方负责。\r\n<h4>\r\n	7． 用户隐私制度\r\n</h4>\r\n尊重用户个人隐私是本网站的一项基本政策。所以，本网站一定不会在未经合法用户授权时公开、编辑或透露其注册资料及保存在本网站中的非公开内容，除非有法律许可要求或本网站在诚信的基础上认为透露这些信息在以下四种情况是必要的：<br />\r\n(1) 遵守有关法律规定，遵从本网站合法服务程序。<br />\r\n(2) 保持维护本网站的商标所有权。<br />\r\n(3) 在紧急情况下竭力维护用户个人和社会大众的隐私安全。<br />\r\n(4)符合其他相关的要求。<br />\r\n本网站保留发布会员人口分析资询的权利。\r\n<h4>\r\n	8．用户的帐号、密码和安全性\r\n</h4>\r\n你\r\n一旦注册成功成为用户，你将得到一个密码和帐号。如果你不保管好自己的帐号和密码安全，将负全部责任。另外，每个用户都要对其帐户中的所有活动和事件负全\r\n责。你可随时根据指示改变你的密码，也可以结束旧的帐户重开一个新帐户。用户同意若发现任何非法使用用户帐号或安全漏洞的情况，请立即通告本网站。\r\n<h4>\r\n	9． 拒绝提供担保\r\n</h4>\r\n用户明确同意信息服务的使用由用户个人承担风险。 本网站不担保服务不会受中断，对服务的及时性，安全性，出错发生都不作担保，但会在能力范围内，避免出错。\r\n<h4>\r\n	10．有限责任\r\n</h4>\r\n本网站对任何直接、间接、偶然、特殊及继起的损害不负责任，这些损害来自：不正当使用本网站服务，或用户传送的信息不符合规定等。这些行为都有可能导致本网站形象受损，所以本网站事先提出这种损害的可能性，同时会尽量避免这种损害的发生。\r\n<h4>\r\n	11．信息的储存及限制\r\n</h4>\r\n本网站有判定用户的行为是否符合本网站服务条款的要求和精神的权利，如果用户违背本网站服务条款的规定，本网站有权中断其服务的帐号。\r\n<h4>\r\n	12．用户管理\r\n</h4>\r\n<strong>用户必须遵循</strong>：<br />\r\n(1) 使用信息服务不作非法用途。<br />\r\n(2) 不干扰或混乱网络服务。<br />\r\n(3) 遵守所有使用服务的网络协议、规定、程序和惯例。用户的行为准则是以因特网法规，政策、程序和惯例为根据的。\r\n<h4>\r\n	13．保障\r\n</h4>\r\n用户同意保障和维护本网站全体成员的利益，负责支付由用户使用超出服务范围引起的律师费用，违反服务条款的损害补偿费用，其它人使用用户的电脑、帐号和其它知识产权的追索费。\r\n<h4>\r\n	14．结束服务\r\n</h4>\r\n用户或本网站可随时根据实际情况中断一项或多项服务。本网站不需对任何个人或第三方负责而随时中断服务。用户若反对任何服务条款的建议或对后来的条款修改有异议，或对本网站服务不满，用户可以行使如下权利：<br />\r\n(1) 不再使用本网站信息服务。<br />\r\n(2) 通知本网站停止对该用户的服务。<br />\r\n结束用户服务后，用户使用本网站服务的权利马上中止。从那时起，用户没有权利，本网站也没有义务传送任何未处理的信息或未完成的服务给用户或第三方。\r\n<h4>\r\n	15．通告\r\n</h4>\r\n所有发给用户的通告都可通过重要页面的公告或电子邮件或常规的信件传送。服务条款的修改、服务变更、或其它重要事件的通告都会以此形式进行。\r\n<h4>\r\n	16．信息内容的所有权\r\n</h4>\r\n本\r\n网站定义的信息内容包括：文字、软件、声音、相片、录象、图表；在广告中全部内容；本网站为用户提供的其它信息。所有这些内容受版权、商标、标签和其它财\r\n产所有权法律的保护。所以，用户只能在本网站和广告商授权下才能使用这些内容，而不能擅自复制、再造这些内容、或创造与内容有关的派生产品。\r\n<h4>\r\n	17．法律\r\n</h4>\r\n本网站信息服务条款要与中华人民共和国的法律解释一致。用户和本网站一致同意服从本网站所在地有管辖权的法院管辖。如发生本网站服务条款与中华人民共和国法律相抵触时，则这些条款将完全按法律规定重新解释，而其它条款则依旧保持对用户的约束力。', 'zh_cn');
INSERT INTO `page` VALUES ('17', '0', '35', 'privacy', '隐私保护政策', '<h4>\r\n	个人信息\r\n</h4>\r\n一般情况下，您无须提供您的姓名或其它个人信息即可访问我们的站点。但有时我们可能需要您提供一些信息，例如为了处理订单、与您联系、提供预订服务或处理工作应聘。我们可能需要这些信息完成以上事务的处理或提供更好的服务。\r\n<h4>\r\n	用途\r\n</h4>\r\n<ol>\r\n	<li>\r\n		供我们网站交易和沟通等相关方使用，以满足您的订单等购物服务；\r\n	</li>\r\n	<li>\r\n		用于与您保持联系，以开展客户满意度调查、市场研究或某些事务的处理；\r\n	</li>\r\n	<li>\r\n		用于不记名的数据分析（例如点击流量数据）；\r\n	</li>\r\n	<li>\r\n		帮助发展我们的业务关系（如果您是我们网站的业务合作伙伴或批发商）；\r\n	</li>\r\n</ol>', 'zh_cn');
INSERT INTO `page` VALUES ('18', '0', '13', 'helpcenter', '帮助中心', '<div>\r\n <img src=\"http://pic.shopex.cn/shop48/welcome.gif\" height=\"130\" width=\"684\" /> </div>\r\n <h4>简单的购物流程：</h4>\r\n <img src=\"http://pic.shopex.cn/shop48/003.png\" height=\"51\" width=\"467\" /> <h4>如果您需要和我们联系，可以通过以下方式：</h4>\r\n \r\n\r\n <div class=\"span-2 textcenter\">\r\n <img src=\"http://pic.shopex.cn/shop48/icon_ser.gif\" /> </div>\r\n <div class=\"span-7\">\r\n <h5>在线客服</h5>\r\n点击首页在线客服链接，向客服专员提问。 </div>\r\n <div class=\"span-2 textcenter\">\r\n <img src=\"http://pic.shopex.cn/shop48/icon_mail.gif\" /> </div>\r\n <div class=\"span-7\">\r\n <h5>电子邮件</h5>\r\n您也可以通过电子邮件和我们联系。 </div>\r\n <div class=\"clear\">\r\n <br />\r\n</div>', 'zh_cn');
INSERT INTO `page` VALUES ('19', '0', '13', 'about', '公司简介', 'Just say something about your company ...', 'zh_cn');
INSERT INTO `page` VALUES ('20', '0', '13', 'contact', '联系客服', '<p>客服QQ：</p>\r\n<p>客服旺旺：</p>\r\n<p>客服电话：</p>\r\n<p>公司传真：</p>\r\n<p>公司地址：</p>', 'zh_cn');
INSERT INTO `page` VALUES ('21', '0', '13', 'join', '加入我们', '真诚欢迎您加入我们的团队，如果您有兴趣，请联系我们的人事部们。<br />', 'zh_cn');
INSERT INTO `page` VALUES ('22', '0', '13', 'wholesale', '批发政策', '本站的批发政策如下<br />', 'zh_cn');
INSERT INTO `page` VALUES ('23', '0', '13', 'qualityAssurance', '品质保证', '10年的行业经验，专注的品质<br />', 'zh_cn');
INSERT INTO `page` VALUES ('24', '0', '13', 'coop', '业务合作', '如果你想和我们有业务合作，请联系我们的客服<br />', 'zh_cn');
INSERT INTO `page` VALUES ('25', '0', '13', 'partner', '合作伙伴', '<div>\r\n	<img src=\"/basic/upload/page/image/20140318/20140318015645_74671.jpg\" alt=\"\" /><br />\r\n</div>', 'zh_cn');
INSERT INTO `page` VALUES ('26', '0', '13', 'information', '热卖信息', '<div class=\"d-c-left-age mt-20 \">\r\n	<div id=\"companyName\">\r\n		<a class=\"comp-name\" target=\"_blank\" href=\"http://www.ganji.com/gongsi/21732650/\"> 苏州禾孚泰服饰有限公司 </a> <span class=\"ico-bang-new mr-10\">1</span> \r\n		<div class=\"dis-ibsty\">\r\n			<span class=\"fc-green w85 fl\">执照已验证</span> \r\n			<div class=\"fl\">\r\n				<span class=\"fl d-xstar-text\">诚信等级：</span> \r\n				<div class=\"z-ind2 d-xstar-1\">\r\n					<div class=\"js-yuanfang d-y-tan\">\r\n					</div>\r\n				</div>\r\n			</div>\r\n		</div>\r\n	</div>\r\n	<div class=\"fc70 mt-20 f14\">\r\n		<span>公司行业：<i class=\"fc4b\"><a href=\"http://wh.ganji.com/zpnaiyongxiaofeipin/\" class=\"nolink\" target=\"_blank\">耐用消费品(服装服饰/纺织/皮革/家具/家电)</a></i></span> <span class=\"ml-40\">公司性质：<i class=\"fc4b\">民营</i></span> <span class=\"ml-40\">公司规模：<i class=\"fc4b\">20-99人</i></span> \r\n	</div>\r\n	<ul class=\"clearfix pos-relat\">\r\n		<li class=\"f14 fb fc4b mb-5\">\r\n			<p>\r\n				职位信息\r\n			</p>\r\n		</li>\r\n		<li class=\"fl\">\r\n			职位名称：<em><a href=\"http://wh.ganji.com/zpxiaoshoudaibiao/\" class=\"nolink\" target=\"_blank\">销售代表/客户经理</a><span>（全职）</span></em> \r\n		</li>\r\n		<li class=\"fl\">\r\n			薪资待遇：<em>2000-3000元\r\n                  &nbsp;（<a target=\"_blank\" href=\"http://www.ganji.com/gongjuxiang/detail.php?type=geshui\">税后薪资估算</a>） </em> \r\n		</li>\r\n		<li class=\"fl\">\r\n			最低学历：<em>初中</em> \r\n		</li>\r\n		<li class=\"fl\">\r\n			招聘人数：<em>20人</em> \r\n		</li>\r\n		<li class=\"fl\">\r\n			工作经验：<em>不限</em> \r\n		</li>\r\n		<li class=\"fl\">\r\n			工作地点：<em><a href=\"http://wh.ganji.com/zpxiaoshoudaibiao/\" class=\"nolink\" target=\"_blank\">武汉</a>/<a href=\"http://wh.ganji.com/zpxiaoshoudaibiao/jiangan/\" class=\"nolink\" target=\"_blank\">江岸</a></em> （<a target=\"_blank\" href=\"http://wh.ganji.com/fang1/jiangan/?company=%E8%8B%8F%E5%B7%9E%E7%A6%BE%E5%AD%9A%E6%B3%B0%E6%9C%8D%E9%A5%B0%E6%9C%89%E9%99%90%E5%85%AC%E5%8F%B8\">周边租房信息</a>）\r\n		</li>\r\n		<li class=\"fl\">\r\n			年　　龄：<em>不限</em> \r\n		</li>\r\n	</ul>\r\n	<p>\r\n		<br />\r\n	</p>\r\n	<div class=\"col-cont title-box\">\r\n		<h1 class=\"title-name\">\r\n			热卖全新 环保双人床单人床、环保衣柜、沙发、床垫、上下床包送 - 220元\r\n		</h1>\r\n		<div class=\"title-info clearfix\">\r\n			<ul class=\"title-info-r\">\r\n				<li class=\"sendmsg\">\r\n					<span class=\"bg-span\"><a href=\"http://bj.ganji.com/jiaju/584333176x.htm#\">短信发送</a></span> \r\n				</li>\r\n				<li>\r\n					<span class=\"bg-span\"><a href=\"http://bj.ganji.com/jiaju/584333176x.htm#\">收藏</a></span> \r\n				</li>\r\n				<li>\r\n					<span class=\"bg-span\"><a id=\"jubao_btn\" href=\"http://bj.ganji.com/jiaju/584333176x.htm#\">举报</a></span> \r\n				</li>\r\n				<li>\r\n					<span class=\"bg-span\"><a href=\"http://bj.ganji.com/jiaju/584333176x.htm#\">帖子管理</a></span> \r\n				</li>\r\n				<li>\r\n					<span id=\"bdshare\" class=\"bg-span bdshare_b\"><a href=\"http://bj.ganji.com/jiaju/584333176x.htm#\">分享</a></span> \r\n				</li>\r\n			</ul>\r\n			<ul class=\"title-info-l clearfix\">\r\n				<li>\r\n					<i class=\"pr-5\"> </i><br />\r\n				</li>\r\n				<li>\r\n					<i class=\" pl-5\" id=\"pageviews\">浏览 1105 次</i> \r\n				</li>\r\n			</ul>\r\n		</div>\r\n	</div>\r\n	<ul class=\"det-infor\">\r\n		<li>\r\n			<span> <a href=\"http://bj.ganji.com/huiyizhuo/\" target=\"_blank\">会议桌</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|          \r\n          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class=\"condition\">全新</i> &nbsp;&nbsp;&nbsp;<b class=\"f22 fc-orange f-type\">220</b>元 </span> \r\n		</li>\r\n		<li>\r\n			交易地点：&nbsp;<a href=\"http://bj.ganji.com/jiaju/\" target=\"_blank\"> 北京</a> - <a href=\"http://bj.ganji.com/jiaju/chaoyang/\" target=\"_blank\">朝阳</a> - <a href=\"http://bj.ganji.com/jiaju/chaoyanggongyuan/\" target=\"_blank\">朝阳公园</a> \r\n		</li>\r\n		<li>\r\n			联系人：&nbsp;&nbsp;王先生 <span class=\"fc-orange\">[商家]</span> <span class=\"f_c_b\"> <span id=\"imjs-embed-user-207104987\" class=\"talkBtn imjs-embed-user webim-embed-user-offline\"> <span class=\"imjs-user-offline\"> <span class=\"webim-detail-offline\"></span> </span> </span> </span> &nbsp;&nbsp;&nbsp;&nbsp;<a href=\"http://guazi.ganji.com/?r=19\" target=\"_blank\">向邻居求购二手物品</a> \r\n		</li>\r\n		<li>\r\n			电　　话：<span class=\"phoneNum-style\"> 136 9117 7530 </span> <span class=\"f12 p-type\">( <a href=\"http://bjyfjj.bj.ganji.com\" target=\"_blank\">进入店铺</a> &nbsp;|&nbsp;<a href=\"http://bj.ganji.com/jiaju/584333176x.htm#\" target=\"_blank\" class=\"f12\">免费短信咨询</a> ) </span> \r\n		</li>\r\n		<li>\r\n			QQ　 号：<span class=\"phoneNum-style\"> 2675761253 <span id=\"Zoom0\"><span>　瓷砖类——<br />\r\n　　罗马，罗马瓷砖五套墙地砖５折销售，四套新品抛光砖８折销售。长谷，上海长谷瓷砖砂岩全场８·５折。亚细亚，亚细亚部分瓷砖９折酬宾。<br />\r\n　　地板类——<br />\r\n　圣象，购物每满１０００元，返还现金１００元。柏高，柏高地板几款特价板，快想１＋１滑动门９折。哈博，哈博地板全场７·８折，四款超低价销售。松下，\r\n松下地板７·５折起，５０平方以上赠浴霸。彩蝶，彩蝶地板全场８折。普乐，普乐地板７·５折起，２０平方以上有赠品。菲林格尔，９·５折，８０平米以上送\r\n地垫。帝森，帝森实木地板９折起。<br />\r\n　　卫浴类——<br />\r\n　　科勒，科勒浴缸压克力材质Ｋ—１５１０Ｃ—Ｏ，原价１３８０元，现价１０３６元；Ｋ\r\n—１１２０１—Ｗ０２，原价２０８０元，现价１５６０元；科勒铸铁浴缸Ｋ—９４１，特价１９４８元。美标，联体节水座厕ＣＰ—２０９２，原价３０２５元，\r\n现价１５００元；联体六升节水座厕ＣＰ—２０８９，原价２７０７元，现价１５００元；分体六升节水座厕ＣＰ—２８３８，原价１２３９元，现价６５０元。宝\r\n路，全场８折，３０００元以上赠送小礼品，免费安装送货，赠送配件。丽莎，全场８·８折，免费上门测量设计，免费送货安装。英皇，全场８折，样品进价销\r\n售。法恩沙，全场７·５折。菲尔顿，菲尔顿洁具全场８折起。<br />\r\n　　门类——<br />\r\n　　史丹利，购物满５０００元送史丹利合页一副或抽屉滑轨，满１００００元送合页三副或抽屉滑轨。维卡，维卡提升推拉门８·５折，７３系列推拉门９折。东维利，木门全场８·８折。德仕，德仕推拉门８·５折销售，柜体９折销售</span></span></span> \r\n		</li>\r\n	</ul>\r\n	<p>\r\n		<br />\r\n	</p>\r\n</div>', 'zh_cn');
INSERT INTO `page` VALUES ('27', '0', '131', 'aftermarket', '售后政策', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<th>\r\n				<span id=\"jingdongAfsTh\">Yincart自营商品售后服务</span>\r\n			</th>\r\n			<th>\r\n				<span id=\"buAfsTh\">第三方卖家自主售后服务</span>\r\n			</th>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<a target=\"_blank\" href=\"http://help.jd.com/help/question-99.html\">价格保护</a>\r\n			</td>\r\n			<td>\r\n				<a target=\"_blank\" href=\"http://help.jd.com/help/question-880.html\">运费险</a>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<a target=\"_blank\" href=\"http://help.jd.com/help/question-149.html#help422\">售后特色服务</a>\r\n			</td>\r\n			<td>\r\n				<a target=\"_blank\" href=\"http://help.jd.com/help/question-167.html#help447\">卖家自主售后</a>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<a target=\"_blank\" href=\"http://help.jd.com/help/question-149.html#help1709\">售后服务总则</a>\r\n			</td>\r\n			<td>\r\n				<a target=\"_blank\" href=\"http://help.jd.com/help/question-167.html#help1714\">售后服务总则</a>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<a target=\"_blank\" href=\"http://help.jd.com/help/question-149.html#help1710\">售后服务细则</a>\r\n			</td>\r\n			<td>\r\n				<a target=\"_blank\" href=\"http://help.jd.com/help/question-167.html#help1715\">售后服务细则</a>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<a target=\"_blank\" href=\"http://help.jd.com/help/question-149.html#help1712\">服务承诺</a>\r\n			</td>\r\n			<td>\r\n				<a target=\"_blank\" href=\"http://help.jd.com/help/question-749.html\">服务流程</a>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<a target=\"_blank\" href=\"http://help.jd.com/help/question-98.html\">服务流程</a>\r\n			</td>\r\n			<td>\r\n				<br />\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'zh_cn');
INSERT INTO `page` VALUES ('28', '0', '131', 'priceprotection', '价格保护', '京东的商品价格随市场价格的波动每日都会有价格变化，下单后订单中某种商品很可能出现降价行为，京东出于消费者利益考虑，<strong>特针对自营商品</strong>推出价格保护服务。<br />\r\n<h4>\r\n	一、家用电器价保规则\r\n</h4>\r\n<p>\r\n	您可在订单签收前或订单签收后30天内申请价格保护，申请成功，如未付款的可按照提交申请时商城售价支付，如已经付款将通过余额形式返还差价。\r\n</p>\r\n<table style=\"margin:10px 0pt;\" class=\"tablecss                            ke-zeroborder\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" width=\"100%\">\r\n	<tbody>\r\n		<tr>\r\n			<th width=\"20%\">\r\n				订单类型\r\n			</th>\r\n			<th width=\"25%\">\r\n				什么时候申请？\r\n			</th>\r\n			<th width=\"30%\">\r\n				怎么申请？\r\n			</th>\r\n			<th width=\"25%\">\r\n				怎么返还，什么时候？\r\n			</th>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"2\">\r\n				全部\r\n			</td>\r\n			<td>\r\n				订单付款签收之前，可以申请\r\n			</td>\r\n			<td rowspan=\"2\">\r\n				<p align=\"left\">\r\n					1、网页申请：我的京东-&gt;价格保护<br />\r\n2、电话申请：致电京东客服热线400-656-1000<br />\r\n<span class=\"Red\">空调、烟灶套机等如符合申请条件却不能提交申请，请即刻与京东家电服务热线联系。</span>\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					申请成功后，如未付款的按申请售价支付\r\n				</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				订单签收后，自收货之日起30内，可以申请\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					申请成功，如已经付款将在订单完成后，差价以余额形式返还京东账户\r\n				</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<h4>\r\n	二、其他品类价保规则\r\n</h4>\r\n<p>\r\n	您可在订单签收前申请价格保护，申请成功，如未付款的订单，您可按照提交申请时京东售价支付，如已付款的订单，京东将通过余额形式返还差价。\r\n</p>\r\n<table style=\"margin:10px 0pt;\" class=\"tablecss                            ke-zeroborder\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" width=\"100%\">\r\n	<tbody>\r\n		<tr>\r\n			<th width=\"20%\">\r\n				订单类型\r\n			</th>\r\n			<th width=\"25%\">\r\n				什么时候申请？\r\n			</th>\r\n			<th width=\"30%\">\r\n				怎么申请？\r\n			</th>\r\n			<th width=\"25%\">\r\n				怎么返还，什么时候？\r\n			</th>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				货到付款\r\n			</td>\r\n			<td rowspan=\"2\">\r\n				订单付款签收之前都可以申请<br />\r\n（配送人员离开，客户离开柜台将不享受价保）\r\n			</td>\r\n			<td rowspan=\"4\">\r\n				<p align=\"left\">\r\n					1、网页申请：我的京东-&gt;价格保护<br />\r\n2、电话申请：致电京东客服热线<br />\r\n<span class=\"Red\">若符合申请条件却不能提交申请，请即刻与京东客服联系。</span>\r\n				</p>\r\n			</td>\r\n			<td rowspan=\"2\">\r\n				<p align=\"left\">\r\n					申请成功后，如未付款的按申请售价支付\r\n				</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				上门自提\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				先款后货，京东物流送货上门\r\n			</td>\r\n			<td rowspan=\"2\">\r\n				订单所购商品到达当地城市之前都可以申请\r\n			</td>\r\n			<td rowspan=\"2\">\r\n				<p align=\"left\">\r\n					申请成功，如已经付款将在订单完成后，差价以余额形式返还京东账户\r\n				</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				先款后货，第三方快递送货上门\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<div class=\"help_zybox\">\r\n	<div class=\"tit\">\r\n		不享受价保申明：\r\n	</div>\r\n	<ul>\r\n		<li>\r\n			<strong>1.</strong> 套装、分期付款、购买时包含赠品的商品不享受价格保护；\r\n		</li>\r\n		<li>\r\n			<strong>2.</strong> 购买后商品进行限时、限量、秒杀等抢购活动的商品不参与价格保护；\r\n		</li>\r\n		<li>\r\n			<strong>3.</strong> 参与满赠满返活动的商品不享受价格保护；\r\n		</li>\r\n		<li>\r\n			<strong>4.</strong> 团购/机票/彩票/充值/点卡/合约计划/厂商直送/海外订购/第三方卖家商品不享受价格保护；\r\n		</li>\r\n		<li>\r\n			<strong>5.</strong> 使用限品类东券购买的商品不享受价格保护。\r\n		</li>\r\n	</ul>\r\n</div>', 'zh_cn');
INSERT INTO `page` VALUES ('29', '0', '131', 'refund', '退款说明', '<table class=\"tablecss                                                           ke-zeroborder\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" width=\"99%\">\r\n	<tbody>\r\n		<tr>\r\n			<th rowspan=\"2\" colspan=\"2\" height=\"35\" width=\"30%\">\r\n				支付方式\r\n			</th>\r\n			<th rowspan=\"2\" width=\"30%\">\r\n				退款方式\r\n			</th>\r\n			<th colspan=\"2\" width=\"45%\">\r\n				退款说明\r\n			</th>\r\n		</tr>\r\n		<tr>\r\n			<th width=\"15%\">\r\n				京东退款处理周期\r\n			</th>\r\n			<th width=\"15%\">\r\n				银行退款处理周期\r\n			</th>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"2\">\r\n				<p align=\"left\">\r\n					在线支付\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					储蓄卡\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					退回原支付卡\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"center\">\r\n					1个工作日\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"center\">\r\n					1-7个工作日\r\n				</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<p align=\"left\">\r\n					信用卡\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					退回原支付卡\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"center\">\r\n					1个工作日\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"center\">\r\n					1-15个工作日\r\n				</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"3\">\r\n				<p align=\"left\">\r\n					在线支付--手机支付平台\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					银行卡\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					退回原支付卡\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"center\">\r\n					1个工作日\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"center\">\r\n					1-15个工作日\r\n				</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"2\">\r\n				<p align=\"left\">\r\n					银行卡+电子券\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					银行卡支付款项退回手机支付平台账户余额\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"center\">\r\n					1个工作日\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"center\">\r\n					1-2个工作日\r\n				</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<p align=\"left\">\r\n					电子券自动原返至手机支付平台账户\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"center\">\r\n					1个工作日\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"center\">\r\n					1-2个工作日\r\n				</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<p align=\"left\">\r\n					在线支付-直连银行支付\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					建行、招行、邮储\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					退回原支付卡\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"center\">\r\n					1个工作日\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"center\">\r\n					1-2个工作日\r\n				</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"4\">\r\n				<p align=\"left\">\r\n					货到付款/自提支付\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					POS机刷卡\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					退回原支付卡\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"center\">\r\n					1个工作日\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"center\">\r\n					1-15个工作日\r\n				</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<p align=\"left\">\r\n					支票支付\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					退回原支付卡\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"center\">\r\n					1个工作日\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"center\">\r\n					1-3个工作日\r\n				</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"2\">\r\n				<p align=\"left\">\r\n					现金支付\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					个人储蓄卡（工、建、农、招）\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"center\">\r\n					1个工作日\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"center\">\r\n					1-2个工作日\r\n				</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<p align=\"left\">\r\n					其他个人储蓄卡\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"center\">\r\n					1个工作日\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"center\">\r\n					2-5个工作日\r\n				</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<p align=\"left\">\r\n					分期付款\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					在线分期\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					原支付卡（1、按银行期数，一次性返还；2、分期手续费返还请咨询发卡行）\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"center\">\r\n					1个工作日\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"center\">\r\n					2-15个工作日\r\n				</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\">\r\n				<p align=\"center\">\r\n					公司转账\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					原支付公司账户\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"center\">\r\n					1个工作日\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"center\">\r\n					1-3个工作日\r\n				</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\">\r\n				<p align=\"center\">\r\n					邮局汇款\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					个人储蓄卡\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"center\">\r\n					1个工作日\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"center\">\r\n					1-5个工作日\r\n				</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	<strong>温馨提示：退款周期仅供您参考，具体退款周期可能会受银行、支付机构等相关因素影响。</strong>\r\n</p>\r\n<ul class=\"List_Letter\">\r\n	<li>\r\n		京东在线支付及POS机刷卡支付订单退款，如涉及到银行信息京东会依据银行及相关机构已经建立的条例处理退款，为了保证客户账户金额的安全，我们均会安排原卡原退。\r\n	</li>\r\n	<li>\r\n		由于快捷支付的款项来源为信用卡支付，所以快捷支付的订单只支持原路退款，不支持返还至余额。\r\n	</li>\r\n	<li>\r\n		公司转账或支票支付的订单，需与客服人员确认公司相关信息后进行公司转账,目前京东只支持原路退回至客户原支付的公司账户中，给您带来的不便请您谅解。\r\n	</li>\r\n	<li>\r\n		京东卡支付退款无法直接兑换成现金，会在1个工作日左右返还至您支付的京东卡内。\r\n	</li>\r\n	<li>\r\n		退款金额在1000元及以下可选择退京东余额，退款时效即时到账。\r\n	</li>\r\n	<li>\r\n		因银行系统升级，退银行卡服务不支持信用卡退款。\r\n	</li>\r\n</ul>', 'zh_cn');
INSERT INTO `page` VALUES ('30', '0', '131', 'rework_returns', '返修/退换货', '<div class=\"s-desc-bd\">\r\n	<h2>\r\n		破损补寄\r\n	</h2>\r\n	<p>\r\n		卖家自主承诺向买家提供的特色服务之一。卖家就该商品签收状态作出承诺，自商品签收之日起至卖家承诺保障时间内，如发现商品在运输\r\n途中出现破损，买家可申请破损部分商品补寄；卖家承诺提供1次补寄服务，补寄物流费由约定承担方承担；若补寄后的商品仍出现破损，卖家将提供退货退款服\r\n务。\r\n	</p>\r\n	<p>\r\n		<br />\r\n	</p>\r\n	<p>\r\n		<strong><span style=\"font-size:18px;\">如买家有进行中的交易需要退货退款,操作流程如下:</span></strong> \r\n	</p>\r\n	<p>\r\n		&nbsp;\r\n	</p>\r\n	<p>\r\n		1、<a href=\"http://service.taobao.com/support/knowledge-1119776.htm?spm=1.6659421.774527085.2.QgywLP#1\">申请退款，填写退款信息</a> \r\n	</p>\r\n	<p>\r\n		2、<a href=\"http://service.taobao.com/support/knowledge-1119776.htm?spm=1.6659421.774527085.2.QgywLP#2\">提交退款，等待卖家处理</a> \r\n	</p>\r\n	<p>\r\n		3、<a href=\"http://service.taobao.com/support/knowledge-1119776.htm?spm=1.6659421.774527085.2.QgywLP#3\">卖家同意退款，退货给卖家</a> \r\n	</p>\r\n	<p>\r\n		4、<a href=\"http://service.taobao.com/support/knowledge-1119776.htm?spm=1.6659421.774527085.2.QgywLP#4\">等待卖家确认收货，退款成功</a> \r\n	</p>\r\n	<p>\r\n		<br />\r\n	</p>\r\n</div>', 'zh_cn');
INSERT INTO `page` VALUES ('31', '0', '131', 'cancelorder', '取消订单', '<div class=\"help_box\">\r\n	<div>\r\n		<img alt=\"\" src=\"http://img30.360buyimg.com/pophelp/g14/M02/15/0A/rBEhVVJbv7EIAAAAAACbFQGvRU0AAEKrALH7OAAAJst271.jpg\" />\r\n	</div>\r\n在购物过程中，若您想取消已提交过的订单，可试用京东为您提供的取消订单功能。\r\n	<p>\r\n		<strong>操作步骤：</strong>\r\n	</p>\r\n	<ul class=\"List_Number\">\r\n		<li>\r\n			进入“我的京东- <a href=\"http://order.jd.com/center/list.action\" target=\"_blank\">我的订单</a>”页面，找到要取消的订单，点击“取消订单”按钮。\r\n			<div>\r\n				<img alt=\"\" src=\"http://img30.360buyimg.com/pophelp/g13/M02/10/05/rBEhU1JY2-MIAAAAAABQRfN_ucIAAEDQQG5XsEAAFBd882.png\" width=\"710\" />\r\n			</div>\r\n		</li>\r\n		<li>\r\n			选择订单取消原因后，提交申请。<br />\r\nA：在线支付订单取消示意图\r\n			<div>\r\n				<img alt=\"\" src=\"http://img30.360buyimg.com/pophelp/g14/M02/14/1E/rBEhV1JY2_cIAAAAAACzKWzVABQAAEF4QAbA9QAALNB070.png\" width=\"610\" />\r\n			</div>\r\nB：货到付款订单取消示意图\r\n			<div>\r\n				<img alt=\"\" src=\"http://img30.360buyimg.com/pophelp/g13/M03/10/05/rBEhUlJY3AwIAAAAAAB2wmV_2rIAAEDQgD4MZgAAHba759.jpg\" width=\"410\" />\r\n			</div>\r\n		</li>\r\n		<li>\r\n			您还可在“我的京东- <a href=\"http://mymoney.jd.com/refund/refundList\" target=\"_blank\">取消订单记录</a>”中查看取消订单进度。取消订单时如有任何问题，可随时与京东在线客服联系。\r\n			<div>\r\n				<img alt=\"\" src=\"http://img30.360buyimg.com/pophelp/g13/M03/10/05/rBEhUlJY3BsIAAAAAADn-PK0f-4AAEDQgJyCAkAAOgQ825.png\" width=\"710\" />\r\n			</div>\r\n		</li>\r\n	</ul>\r\n</div>\r\n<a name=\"help2170\"></a> \r\n<h3 class=\"help_tit\">\r\n	<strong>取消订单说明</strong>\r\n</h3>\r\n<div class=\"help_box\">\r\n	<ul class=\"List_Number\">\r\n		<li>\r\n			订单提交成功后，您可取消京东自营商品订单及部分第三方卖家出售的商品订单。<br />\r\n<strong>注：订单取消申请一旦提交成功，将无法进行任何修改或恢复，请您谨慎操作。</strong>\r\n		</li>\r\n		<li>\r\n			提交订单取消申请后，系统会确认包裹位置，拦截成功之后会为您办理退款。若订单取消失败，订单会继续为您配送，您可根据需要签收或<a href=\"http://help.jd.com/help/question-67.html#jushou\" target=\"_blank\">拒收</a>。\r\n		</li>\r\n		<li>\r\n			订单包含赠品时，若主商品订单取消，赠品也将取消。\r\n		</li>\r\n	</ul>\r\n</div>\r\n<a name=\"help2171\"></a> \r\n<h3 class=\"help_tit\">\r\n	<strong>款项返回方式</strong>\r\n</h3>\r\n<table class=\"tablecss                                                                                   ke-zeroborder\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" width=\"99%\">\r\n	<tbody>\r\n		<tr>\r\n			<th rowspan=\"2\" colspan=\"2\" height=\"35\" width=\"30%\">\r\n				支付方式\r\n			</th>\r\n			<th rowspan=\"2\" width=\"30%\">\r\n				退款方式\r\n			</th>\r\n			<th colspan=\"2\" width=\"45%\">\r\n				退款说明\r\n			</th>\r\n		</tr>\r\n		<tr>\r\n			<th width=\"15%\">\r\n				京东退款处理周期\r\n			</th>\r\n			<th width=\"15%\">\r\n				银行退款处理周期\r\n			</th>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"2\">\r\n				<p align=\"left\">\r\n					在线支付\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					储蓄卡\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					退回原支付卡\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					1个工作日\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					1-7个工作日\r\n				</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<p align=\"left\">\r\n					信用卡\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					退回原支付卡\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					1个工作日\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					1-15个工作日\r\n				</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"3\">\r\n				<p align=\"left\">\r\n					在线支付--手机支付平台\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					银行卡\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					退回原支付卡\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					1个工作日\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					1-15个工作日\r\n				</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"2\">\r\n				<p align=\"left\">\r\n					银行卡+电子券\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					银行卡支付款项退回手机支付平台账户余额\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					1个工作日\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					1-2个工作日\r\n				</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<p align=\"left\">\r\n					电子券自动原返至手机支付平台账户\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					1个工作日\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					1-2个工作日\r\n				</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<p align=\"left\">\r\n					在线支付-直连银行支付\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					建行、招行、邮储\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					退回原支付卡\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					1个工作日\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					1-2个工作日\r\n				</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"4\">\r\n				<p align=\"left\">\r\n					货到付款/自提支付\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					POS机刷卡\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					退回原支付卡\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					1个工作日\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					1-15个工作日\r\n				</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<p align=\"left\">\r\n					支票支付\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					退回原支付卡\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					1个工作日\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					1-3个工作日\r\n				</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"2\">\r\n				<p align=\"left\">\r\n					现金支付\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					个人储蓄卡（工、建、农、招）\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					1个工作日\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					1-2个工作日\r\n				</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<p align=\"left\">\r\n					其他个人储蓄卡\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					1个工作日\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					2-5个工作日\r\n				</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<p align=\"left\">\r\n					分期付款\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					在线分期\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					原支付卡（1、按银行期数，一次性返还；2、分期手续费返还请咨询发卡行）\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					1个工作日\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					2-15个工作日\r\n				</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\">\r\n				<p align=\"center\">\r\n					公司转账\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					原支付公司账户\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					1个工作日\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					1-3个工作日\r\n				</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\">\r\n				<p align=\"center\">\r\n					邮局汇款\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					个人储蓄卡\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					1个工作日\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					1-5个工作日\r\n				</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\">\r\n				<p align=\"center\">\r\n					京东账户余额\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					退至京东账户\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					订单取消成功后24小时内返还\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					由系统自动返还到京东账户\r\n				</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\">\r\n				<p align=\"center\">\r\n					京东卡\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					退至京东账户\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					订单取消成功后24小时内返还\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					由系统自动返还到京东账户\r\n				</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\">\r\n				<p align=\"center\">\r\n					积分或京豆\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					退至京东账户\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					订单取消成功后24小时内返还\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					由系统自动返还到京东账户\r\n				</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\">\r\n				<p align=\"center\">\r\n					东券\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					退至京东账户\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					订单取消成功后24小时内返还\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					由系统自动返还到京东账户。注：订单发生拆分时，不予返还\r\n				</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\">\r\n				<p align=\"center\">\r\n					京券\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					退至京东账户\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					订单取消成功后24小时内返还\r\n				</p>\r\n			</td>\r\n			<td>\r\n				<p align=\"left\">\r\n					由系统自动返还到京东账户。注：订单发生拆分时，限品类京券、店铺京券不予返还；<br />\r\n全品类京券将由系统判定，返还原券或返还等值京豆；\r\n				</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'zh_cn');

-- ----------------------------
-- Table structure for `payment`
-- ----------------------------
DROP TABLE IF EXISTS `payment`;
CREATE TABLE `payment` (
  `payment_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` bigint(20) unsigned NOT NULL,
  `payment_sn` varchar(45) NOT NULL,
  `money` decimal(10,2) unsigned NOT NULL,
  `currency` varchar(20) DEFAULT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `account` varchar(45) NOT NULL,
  `bank` varchar(45) DEFAULT NULL,
  `pay_account` varchar(45) NOT NULL,
  `status` tinyint(1) unsigned NOT NULL,
  `create_time` int(10) unsigned NOT NULL,
  PRIMARY KEY (`payment_id`),
  KEY `fk_payment_order1_idx` (`order_id`),
  CONSTRAINT `fk_payment_order` FOREIGN KEY (`order_id`) REFERENCES `order` (`order_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of payment
-- ----------------------------

-- ----------------------------
-- Table structure for `payment_method`
-- ----------------------------
DROP TABLE IF EXISTS `payment_method`;
CREATE TABLE `payment_method` (
  `payment_method_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(45) NOT NULL,
  `name` varchar(120) NOT NULL,
  `desc` text NOT NULL,
  `config` text NOT NULL,
  `enabled` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_cod` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_online` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `sort_order` tinyint(3) unsigned NOT NULL DEFAULT '255',
  PRIMARY KEY (`payment_method_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of payment_method
-- ----------------------------
INSERT INTO `payment_method` VALUES ('1', '', '支付宝', '', '', '1', '0', '0', '255');

-- ----------------------------
-- Table structure for `plugins`
-- ----------------------------
DROP TABLE IF EXISTS `plugins`;
CREATE TABLE `plugins` (
  `plugin_id` int(11) NOT NULL AUTO_INCREMENT,
  `identify` varchar(45) NOT NULL,
  `path` varchar(255) NOT NULL,
  `hooks` text NOT NULL,
  `enable` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`plugin_id`),
  UNIQUE KEY `identify_UNIQUE` (`identify`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of plugins
-- ----------------------------
INSERT INTO `plugins` VALUES ('1', 'OAuth', 'E:\\wamp\\www\\yincart\\basic\\protected\\plugin\\OAuth', 'a:1:{s:10:\"Hook_Login\";s:9:\"showMedia\";}', '0');

-- ----------------------------
-- Table structure for `plugins_setting`
-- ----------------------------
DROP TABLE IF EXISTS `plugins_setting`;
CREATE TABLE `plugins_setting` (
  `plugin` varchar(45) NOT NULL,
  `key` varchar(45) NOT NULL,
  `value` text,
  PRIMARY KEY (`plugin`,`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of plugins_setting
-- ----------------------------

-- ----------------------------
-- Table structure for `post`
-- ----------------------------
DROP TABLE IF EXISTS `post`;
CREATE TABLE `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `store_id` int(10) unsigned NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(100) DEFAULT NULL,
  `source` varchar(50) DEFAULT NULL,
  `summary` text,
  `content` text NOT NULL,
  `tags` text,
  `status` int(11) DEFAULT NULL,
  `views` int(11) DEFAULT '0',
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  `author` varchar(32) DEFAULT NULL,
  `user_id` int(11) DEFAULT '0',
  `language` varchar(45) DEFAULT NULL,
  `pic_url` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_post_author` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of post
-- ----------------------------
INSERT INTO `post` VALUES ('1', '0', '0', 'test', null, null, null, 'sssss', 'test, demo', '2', '0', '1393317486', '1393317486', null, '1', null, null);
INSERT INTO `post` VALUES ('2', '0', '0', 'demo', null, null, null, 'demo', 'demo', '2', '0', '1393318093', '1393318093', null, '1', null, null);

-- ----------------------------
-- Table structure for `profiles`
-- ----------------------------
DROP TABLE IF EXISTS `profiles`;
CREATE TABLE `profiles` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `truename` varchar(45) DEFAULT NULL,
  `nickname` varchar(45) DEFAULT NULL,
  `phone` varchar(20) NOT NULL DEFAULT '',
  `cart` text,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of profiles
-- ----------------------------
INSERT INTO `profiles` VALUES ('1', null, null, '', '', '15858443363', 'a:1:{s:5:\"Sku94\";O:8:\"CartItem\":13:{s:9:\"cartProps\";a:1:{i:0;s:5:\"12:32\";}s:3:\"sku\";a:2:{i:0;O:3:\"Sku\":11:{s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:8:{s:6:\"sku_id\";s:2:\"94\";s:7:\"item_id\";s:2:\"62\";s:5:\"props\";s:14:\"{\"12\":\"12:32\"}\";s:10:\"props_name\";s:63:\"{\"\\u670d\\u52a1\":\"\\u670d\\u52a1:\\u6cb9\\u70df\\u673a\\u6e05\\u6d17 \"}\";s:5:\"stock\";s:9:\"999999999\";s:5:\"price\";s:7:\"1490.00\";s:8:\"outer_id\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:2:\"94\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:1;r:6;}s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:27:{s:7:\"item_id\";s:2:\"62\";s:11:\"category_id\";s:3:\"131\";s:8:\"outer_id\";s:0:\"\";s:5:\"title\";s:12:\"家电清洗\";s:5:\"stock\";s:9:\"999999999\";s:10:\"min_number\";s:1:\"1\";s:5:\"price\";s:7:\"3490.00\";s:8:\"currency\";s:3:\"次\";s:5:\"props\";s:77:\"{\"12\":[\"12:32\",\"12:33\",\"12:34\",\"12:217\",\"12:218\",\"12:219\",\"12:220\",\"12:221\"]}\";s:10:\"props_name\";s:331:\"{\"\\u670d\\u52a1\":[\"\\u670d\\u52a1:\\u6cb9\\u70df\\u673a\\u6e05\\u6d17 \",\"\\u670d\\u52a1:\\u7a7a\\u8c03\\u6e05\\u6d17 \",\"\\u670d\\u52a1:\\u51b0\\u7bb1\\u6e05\\u6d17 \",\"\\u670d\\u52a1:\\u7a97\\u5e18\",\"\\u670d\\u52a1:\\u7eb1\\u7a97\\u95e8\",\"\\u670d\\u52a1:\\u6c99\\u53d1\\u6e05\\u6d17\\/\\u62a4\\u7406\",\"\\u670d\\u52a1:\\u827a\\u672f\\u88c5\\u9970\",\"\\u670d\\u52a1:\\u706f\\u5149\"]}\";s:4:\"desc\";s:287:\"<p>asdasd</p>\r\n\r\n<p><iframe frameborder=\"0\" height=\"498\" src=\"http://player.youku.com/embed/XMzQ0MjQyNDcy\" width=\"510\"></iframe></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><iframe frameborder=\"0\" height=\"498\" src=\"http://player.youku.com/embed/XNDIxMDUwMTYw\" width=\"510\"></iframe></p>\r\n\";s:12:\"shipping_fee\";s:4:\"0.00\";s:7:\"is_show\";s:1:\"1\";s:10:\"is_promote\";s:1:\"1\";s:6:\"is_new\";s:1:\"1\";s:6:\"is_hot\";s:1:\"1\";s:7:\"is_best\";s:1:\"0\";s:11:\"click_count\";s:3:\"280\";s:10:\"wish_count\";s:1:\"0\";s:12:\"review_count\";s:1:\"0\";s:10:\"deal_count\";s:1:\"3\";s:11:\"create_time\";s:10:\"1417754585\";s:11:\"update_time\";s:10:\"1419581655\";s:8:\"language\";s:5:\"zh_cn\";s:7:\"country\";s:6:\"100000\";s:5:\"state\";s:6:\"340000\";s:4:\"city\";s:6:\"340100\";}s:23:\"\0CActiveRecord\0_related\";a:1:{s:4:\"skus\";a:8:{i:0;r:6;i:1;O:3:\"Sku\":11:{s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:8:{s:6:\"sku_id\";s:2:\"95\";s:7:\"item_id\";s:2:\"62\";s:5:\"props\";s:14:\"{\"12\":\"12:33\"}\";s:10:\"props_name\";s:57:\"{\"\\u670d\\u52a1\":\"\\u670d\\u52a1:\\u7a7a\\u8c03\\u6e05\\u6d17 \"}\";s:5:\"stock\";s:9:\"999999999\";s:5:\"price\";s:6:\"500.00\";s:8:\"outer_id\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:2:\"95\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:2;O:3:\"Sku\":11:{s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:8:{s:6:\"sku_id\";s:2:\"96\";s:7:\"item_id\";s:2:\"62\";s:5:\"props\";s:14:\"{\"12\":\"12:34\"}\";s:10:\"props_name\";s:57:\"{\"\\u670d\\u52a1\":\"\\u670d\\u52a1:\\u51b0\\u7bb1\\u6e05\\u6d17 \"}\";s:5:\"stock\";s:9:\"999999999\";s:5:\"price\";s:6:\"240.00\";s:8:\"outer_id\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:2:\"96\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:3;O:3:\"Sku\":11:{s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:8:{s:6:\"sku_id\";s:4:\"1081\";s:7:\"item_id\";s:2:\"62\";s:5:\"props\";s:15:\"{\"12\":\"12:217\"}\";s:10:\"props_name\";s:44:\"{\"\\u670d\\u52a1\":\"\\u670d\\u52a1:\\u7a97\\u5e18\"}\";s:5:\"stock\";s:9:\"999999999\";s:5:\"price\";s:6:\"550.00\";s:8:\"outer_id\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:4:\"1081\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:4;O:3:\"Sku\":11:{s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:8:{s:6:\"sku_id\";s:4:\"1082\";s:7:\"item_id\";s:2:\"62\";s:5:\"props\";s:15:\"{\"12\":\"12:218\"}\";s:10:\"props_name\";s:50:\"{\"\\u670d\\u52a1\":\"\\u670d\\u52a1:\\u7eb1\\u7a97\\u95e8\"}\";s:5:\"stock\";s:9:\"999999999\";s:5:\"price\";s:6:\"467.00\";s:8:\"outer_id\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:4:\"1082\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:5;O:3:\"Sku\":11:{s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:8:{s:6:\"sku_id\";s:4:\"1083\";s:7:\"item_id\";s:2:\"62\";s:5:\"props\";s:15:\"{\"12\":\"12:219\"}\";s:10:\"props_name\";s:70:\"{\"\\u670d\\u52a1\":\"\\u670d\\u52a1:\\u6c99\\u53d1\\u6e05\\u6d17\\/\\u62a4\\u7406\"}\";s:5:\"stock\";s:9:\"999999999\";s:5:\"price\";s:6:\"345.00\";s:8:\"outer_id\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:4:\"1083\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:6;O:3:\"Sku\":11:{s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:8:{s:6:\"sku_id\";s:4:\"1084\";s:7:\"item_id\";s:2:\"62\";s:5:\"props\";s:15:\"{\"12\":\"12:220\"}\";s:10:\"props_name\";s:56:\"{\"\\u670d\\u52a1\":\"\\u670d\\u52a1:\\u827a\\u672f\\u88c5\\u9970\"}\";s:5:\"stock\";s:9:\"999999999\";s:5:\"price\";s:6:\"567.00\";s:8:\"outer_id\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:4:\"1084\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:7;O:3:\"Sku\":11:{s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:8:{s:6:\"sku_id\";s:4:\"1085\";s:7:\"item_id\";s:2:\"62\";s:5:\"props\";s:15:\"{\"12\":\"12:221\"}\";s:10:\"props_name\";s:44:\"{\"\\u670d\\u52a1\":\"\\u670d\\u52a1:\\u706f\\u5149\"}\";s:5:\"stock\";s:9:\"999999999\";s:5:\"price\";s:6:\"120.00\";s:8:\"outer_id\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:4:\"1085\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}}}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:2:\"62\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";a:1:{s:12:\"CartPosition\";O:22:\"ECartPositionBehaviour\":7:{s:32:\"\0ECartPositionBehaviour\0quantity\";a:1:{s:5:\"Sku94\";s:1:\"1\";}s:31:\"\0ECartPositionBehaviour\0refresh\";b:1;s:37:\"\0ECartPositionBehaviour\0discountPrice\";d:0;s:19:\"\0CBehavior\0_enabled\";b:1;s:17:\"\0CBehavior\0_owner\";r:2;s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}}}}');
INSERT INTO `profiles` VALUES ('6', null, null, '', '', '', 'a:0:{}');
INSERT INTO `profiles` VALUES ('7', null, null, '', '', '', '');
INSERT INTO `profiles` VALUES ('9', null, null, '', '', '', '');
INSERT INTO `profiles` VALUES ('10', null, null, null, null, '', 'a:1:{s:7:\"Sku1086\";O:8:\"CartItem\":13:{s:9:\"cartProps\";a:2:{i:0;s:6:\"32:222\";i:1;s:13:\"31:211;32:222\";}s:3:\"sku\";a:2:{i:0;O:3:\"Sku\":11:{s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:8:{s:6:\"sku_id\";s:4:\"1086\";s:7:\"item_id\";s:2:\"82\";s:5:\"props\";s:29:\"{\"31\":\"31:211\",\"32\":\"32:222\"}\";s:10:\"props_name\";s:124:\"{\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\",\"\\u5957\\u9910\\u7c7b\\u578b\":\"\\u5957\\u9910\\u7c7b\\u578b:\\u7ecf\\u6d4e\\u578b \"}\";s:5:\"stock\";s:9:\"999999999\";s:5:\"price\";s:6:\"100.00\";s:8:\"outer_id\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:4:\"1086\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:1;r:7;}s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:27:{s:7:\"item_id\";s:2:\"82\";s:11:\"category_id\";s:3:\"130\";s:8:\"outer_id\";s:0:\"\";s:5:\"title\";s:25:\"快捷刷新（涂料） \";s:5:\"stock\";s:9:\"999999999\";s:10:\"min_number\";s:1:\"1\";s:5:\"price\";s:6:\"100.00\";s:8:\"currency\";s:3:\"㎡\";s:5:\"props\";s:105:\"{\"31\":[\"31:211\",\"31:212\",\"31:213\",\"31:214\",\"31:215\",\"31:216\"],\"32\":[\"32:222\",\"32:223\",\"32:224\",\"32:225\"]}\";s:10:\"props_name\";s:433:\"{\"\\u989c\\u8272\":[\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\",\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\",\"\\u989c\\u8272:\\u9ec4\\u8272\",\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\",\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\",\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\"],\"\\u5957\\u9910\\u7c7b\\u578b\":[\"\\u5957\\u9910\\u7c7b\\u578b:\\u7ecf\\u6d4e\\u578b \",\"\\u5957\\u9910\\u7c7b\\u578b:\\u8d85\\u503c\\u578b \",\"\\u5957\\u9910\\u7c7b\\u578b:\\u4f18\\u9009\\u578b \",\"\\u5957\\u9910\\u7c7b\\u578b:\\u5c0a\\u4eab\\u578b \"]}\";s:4:\"desc\";s:12:\"<p>123</p>\r\n\";s:12:\"shipping_fee\";s:4:\"0.00\";s:7:\"is_show\";s:1:\"1\";s:10:\"is_promote\";s:1:\"1\";s:6:\"is_new\";s:1:\"1\";s:6:\"is_hot\";s:1:\"1\";s:7:\"is_best\";s:1:\"1\";s:11:\"click_count\";s:2:\"30\";s:10:\"wish_count\";s:1:\"0\";s:12:\"review_count\";s:1:\"0\";s:10:\"deal_count\";s:1:\"0\";s:11:\"create_time\";s:10:\"1419495114\";s:11:\"update_time\";s:10:\"1419582423\";s:8:\"language\";s:5:\"zh_cn\";s:7:\"country\";s:6:\"100000\";s:5:\"state\";s:6:\"110000\";s:4:\"city\";s:6:\"110100\";}s:23:\"\0CActiveRecord\0_related\";a:1:{s:4:\"skus\";a:24:{i:0;r:7;i:1;O:3:\"Sku\":11:{s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:8:{s:6:\"sku_id\";s:4:\"1087\";s:7:\"item_id\";s:2:\"82\";s:5:\"props\";s:29:\"{\"31\":\"31:211\",\"32\":\"32:223\"}\";s:10:\"props_name\";s:124:\"{\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\",\"\\u5957\\u9910\\u7c7b\\u578b\":\"\\u5957\\u9910\\u7c7b\\u578b:\\u8d85\\u503c\\u578b \"}\";s:5:\"stock\";s:9:\"999999999\";s:5:\"price\";s:6:\"120.00\";s:8:\"outer_id\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:4:\"1087\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:2;O:3:\"Sku\":11:{s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:8:{s:6:\"sku_id\";s:4:\"1088\";s:7:\"item_id\";s:2:\"82\";s:5:\"props\";s:29:\"{\"31\":\"31:211\",\"32\":\"32:224\"}\";s:10:\"props_name\";s:124:\"{\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\",\"\\u5957\\u9910\\u7c7b\\u578b\":\"\\u5957\\u9910\\u7c7b\\u578b:\\u4f18\\u9009\\u578b \"}\";s:5:\"stock\";s:9:\"999999999\";s:5:\"price\";s:6:\"140.00\";s:8:\"outer_id\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:4:\"1088\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:3;O:3:\"Sku\":11:{s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:8:{s:6:\"sku_id\";s:4:\"1089\";s:7:\"item_id\";s:2:\"82\";s:5:\"props\";s:29:\"{\"31\":\"31:211\",\"32\":\"32:225\"}\";s:10:\"props_name\";s:124:\"{\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\",\"\\u5957\\u9910\\u7c7b\\u578b\":\"\\u5957\\u9910\\u7c7b\\u578b:\\u5c0a\\u4eab\\u578b \"}\";s:5:\"stock\";s:9:\"999999999\";s:5:\"price\";s:6:\"160.00\";s:8:\"outer_id\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:4:\"1089\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:4;O:3:\"Sku\":11:{s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:8:{s:6:\"sku_id\";s:4:\"1090\";s:7:\"item_id\";s:2:\"82\";s:5:\"props\";s:29:\"{\"31\":\"31:212\",\"32\":\"32:222\"}\";s:10:\"props_name\";s:124:\"{\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\",\"\\u5957\\u9910\\u7c7b\\u578b\":\"\\u5957\\u9910\\u7c7b\\u578b:\\u7ecf\\u6d4e\\u578b \"}\";s:5:\"stock\";s:9:\"999999999\";s:5:\"price\";s:6:\"100.00\";s:8:\"outer_id\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:4:\"1090\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:5;O:3:\"Sku\":11:{s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:8:{s:6:\"sku_id\";s:4:\"1091\";s:7:\"item_id\";s:2:\"82\";s:5:\"props\";s:29:\"{\"31\":\"31:212\",\"32\":\"32:223\"}\";s:10:\"props_name\";s:124:\"{\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\",\"\\u5957\\u9910\\u7c7b\\u578b\":\"\\u5957\\u9910\\u7c7b\\u578b:\\u8d85\\u503c\\u578b \"}\";s:5:\"stock\";s:9:\"999999999\";s:5:\"price\";s:6:\"120.00\";s:8:\"outer_id\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:4:\"1091\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:6;O:3:\"Sku\":11:{s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:8:{s:6:\"sku_id\";s:4:\"1092\";s:7:\"item_id\";s:2:\"82\";s:5:\"props\";s:29:\"{\"31\":\"31:212\",\"32\":\"32:224\"}\";s:10:\"props_name\";s:124:\"{\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\",\"\\u5957\\u9910\\u7c7b\\u578b\":\"\\u5957\\u9910\\u7c7b\\u578b:\\u4f18\\u9009\\u578b \"}\";s:5:\"stock\";s:9:\"999999999\";s:5:\"price\";s:6:\"140.00\";s:8:\"outer_id\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:4:\"1092\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:7;O:3:\"Sku\":11:{s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:8:{s:6:\"sku_id\";s:4:\"1093\";s:7:\"item_id\";s:2:\"82\";s:5:\"props\";s:29:\"{\"31\":\"31:212\",\"32\":\"32:225\"}\";s:10:\"props_name\";s:124:\"{\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\",\"\\u5957\\u9910\\u7c7b\\u578b\":\"\\u5957\\u9910\\u7c7b\\u578b:\\u5c0a\\u4eab\\u578b \"}\";s:5:\"stock\";s:9:\"999999999\";s:5:\"price\";s:6:\"160.00\";s:8:\"outer_id\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:4:\"1093\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:8;O:3:\"Sku\":11:{s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:8:{s:6:\"sku_id\";s:4:\"1094\";s:7:\"item_id\";s:2:\"82\";s:5:\"props\";s:29:\"{\"31\":\"31:213\",\"32\":\"32:222\"}\";s:10:\"props_name\";s:118:\"{\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272\",\"\\u5957\\u9910\\u7c7b\\u578b\":\"\\u5957\\u9910\\u7c7b\\u578b:\\u7ecf\\u6d4e\\u578b \"}\";s:5:\"stock\";s:9:\"999999999\";s:5:\"price\";s:6:\"100.00\";s:8:\"outer_id\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:4:\"1094\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:9;O:3:\"Sku\":11:{s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:8:{s:6:\"sku_id\";s:4:\"1095\";s:7:\"item_id\";s:2:\"82\";s:5:\"props\";s:29:\"{\"31\":\"31:213\",\"32\":\"32:223\"}\";s:10:\"props_name\";s:118:\"{\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272\",\"\\u5957\\u9910\\u7c7b\\u578b\":\"\\u5957\\u9910\\u7c7b\\u578b:\\u8d85\\u503c\\u578b \"}\";s:5:\"stock\";s:9:\"999999999\";s:5:\"price\";s:6:\"120.00\";s:8:\"outer_id\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:4:\"1095\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:10;O:3:\"Sku\":11:{s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:8:{s:6:\"sku_id\";s:4:\"1096\";s:7:\"item_id\";s:2:\"82\";s:5:\"props\";s:29:\"{\"31\":\"31:213\",\"32\":\"32:224\"}\";s:10:\"props_name\";s:118:\"{\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272\",\"\\u5957\\u9910\\u7c7b\\u578b\":\"\\u5957\\u9910\\u7c7b\\u578b:\\u4f18\\u9009\\u578b \"}\";s:5:\"stock\";s:9:\"999999999\";s:5:\"price\";s:6:\"140.00\";s:8:\"outer_id\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:4:\"1096\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:11;O:3:\"Sku\":11:{s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:8:{s:6:\"sku_id\";s:4:\"1097\";s:7:\"item_id\";s:2:\"82\";s:5:\"props\";s:29:\"{\"31\":\"31:213\",\"32\":\"32:225\"}\";s:10:\"props_name\";s:118:\"{\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272\",\"\\u5957\\u9910\\u7c7b\\u578b\":\"\\u5957\\u9910\\u7c7b\\u578b:\\u5c0a\\u4eab\\u578b \"}\";s:5:\"stock\";s:9:\"999999999\";s:5:\"price\";s:6:\"160.00\";s:8:\"outer_id\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:4:\"1097\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:12;O:3:\"Sku\":11:{s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:8:{s:6:\"sku_id\";s:4:\"1098\";s:7:\"item_id\";s:2:\"82\";s:5:\"props\";s:29:\"{\"31\":\"31:214\",\"32\":\"32:222\"}\";s:10:\"props_name\";s:124:\"{\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\",\"\\u5957\\u9910\\u7c7b\\u578b\":\"\\u5957\\u9910\\u7c7b\\u578b:\\u7ecf\\u6d4e\\u578b \"}\";s:5:\"stock\";s:9:\"999999999\";s:5:\"price\";s:6:\"100.00\";s:8:\"outer_id\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:4:\"1098\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:13;O:3:\"Sku\":11:{s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:8:{s:6:\"sku_id\";s:4:\"1099\";s:7:\"item_id\";s:2:\"82\";s:5:\"props\";s:29:\"{\"31\":\"31:214\",\"32\":\"32:223\"}\";s:10:\"props_name\";s:124:\"{\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\",\"\\u5957\\u9910\\u7c7b\\u578b\":\"\\u5957\\u9910\\u7c7b\\u578b:\\u8d85\\u503c\\u578b \"}\";s:5:\"stock\";s:9:\"999999999\";s:5:\"price\";s:6:\"120.00\";s:8:\"outer_id\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:4:\"1099\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:14;O:3:\"Sku\":11:{s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:8:{s:6:\"sku_id\";s:4:\"1100\";s:7:\"item_id\";s:2:\"82\";s:5:\"props\";s:29:\"{\"31\":\"31:214\",\"32\":\"32:224\"}\";s:10:\"props_name\";s:124:\"{\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\",\"\\u5957\\u9910\\u7c7b\\u578b\":\"\\u5957\\u9910\\u7c7b\\u578b:\\u4f18\\u9009\\u578b \"}\";s:5:\"stock\";s:9:\"999999999\";s:5:\"price\";s:6:\"140.00\";s:8:\"outer_id\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:4:\"1100\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:15;O:3:\"Sku\":11:{s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:8:{s:6:\"sku_id\";s:4:\"1101\";s:7:\"item_id\";s:2:\"82\";s:5:\"props\";s:29:\"{\"31\":\"31:214\",\"32\":\"32:225\"}\";s:10:\"props_name\";s:124:\"{\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\",\"\\u5957\\u9910\\u7c7b\\u578b\":\"\\u5957\\u9910\\u7c7b\\u578b:\\u5c0a\\u4eab\\u578b \"}\";s:5:\"stock\";s:9:\"999999999\";s:5:\"price\";s:6:\"160.00\";s:8:\"outer_id\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:4:\"1101\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:16;O:3:\"Sku\":11:{s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:8:{s:6:\"sku_id\";s:4:\"1102\";s:7:\"item_id\";s:2:\"82\";s:5:\"props\";s:29:\"{\"31\":\"31:215\",\"32\":\"32:222\"}\";s:10:\"props_name\";s:124:\"{\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\",\"\\u5957\\u9910\\u7c7b\\u578b\":\"\\u5957\\u9910\\u7c7b\\u578b:\\u7ecf\\u6d4e\\u578b \"}\";s:5:\"stock\";s:9:\"999999999\";s:5:\"price\";s:6:\"100.00\";s:8:\"outer_id\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:4:\"1102\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:17;O:3:\"Sku\":11:{s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:8:{s:6:\"sku_id\";s:4:\"1103\";s:7:\"item_id\";s:2:\"82\";s:5:\"props\";s:29:\"{\"31\":\"31:215\",\"32\":\"32:223\"}\";s:10:\"props_name\";s:124:\"{\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\",\"\\u5957\\u9910\\u7c7b\\u578b\":\"\\u5957\\u9910\\u7c7b\\u578b:\\u8d85\\u503c\\u578b \"}\";s:5:\"stock\";s:9:\"999999999\";s:5:\"price\";s:6:\"120.00\";s:8:\"outer_id\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:4:\"1103\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:18;O:3:\"Sku\":11:{s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:8:{s:6:\"sku_id\";s:4:\"1104\";s:7:\"item_id\";s:2:\"82\";s:5:\"props\";s:29:\"{\"31\":\"31:215\",\"32\":\"32:224\"}\";s:10:\"props_name\";s:124:\"{\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\",\"\\u5957\\u9910\\u7c7b\\u578b\":\"\\u5957\\u9910\\u7c7b\\u578b:\\u4f18\\u9009\\u578b \"}\";s:5:\"stock\";s:9:\"999999999\";s:5:\"price\";s:6:\"140.00\";s:8:\"outer_id\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:4:\"1104\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:19;O:3:\"Sku\":11:{s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:8:{s:6:\"sku_id\";s:4:\"1105\";s:7:\"item_id\";s:2:\"82\";s:5:\"props\";s:29:\"{\"31\":\"31:215\",\"32\":\"32:225\"}\";s:10:\"props_name\";s:124:\"{\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\",\"\\u5957\\u9910\\u7c7b\\u578b\":\"\\u5957\\u9910\\u7c7b\\u578b:\\u5c0a\\u4eab\\u578b \"}\";s:5:\"stock\";s:9:\"999999999\";s:5:\"price\";s:6:\"160.00\";s:8:\"outer_id\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:4:\"1105\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:20;O:3:\"Sku\":11:{s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:8:{s:6:\"sku_id\";s:4:\"1106\";s:7:\"item_id\";s:2:\"82\";s:5:\"props\";s:29:\"{\"31\":\"31:216\",\"32\":\"32:222\"}\";s:10:\"props_name\";s:124:\"{\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\",\"\\u5957\\u9910\\u7c7b\\u578b\":\"\\u5957\\u9910\\u7c7b\\u578b:\\u7ecf\\u6d4e\\u578b \"}\";s:5:\"stock\";s:9:\"999999999\";s:5:\"price\";s:6:\"100.00\";s:8:\"outer_id\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:4:\"1106\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:21;O:3:\"Sku\":11:{s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:8:{s:6:\"sku_id\";s:4:\"1107\";s:7:\"item_id\";s:2:\"82\";s:5:\"props\";s:29:\"{\"31\":\"31:216\",\"32\":\"32:223\"}\";s:10:\"props_name\";s:124:\"{\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\",\"\\u5957\\u9910\\u7c7b\\u578b\":\"\\u5957\\u9910\\u7c7b\\u578b:\\u8d85\\u503c\\u578b \"}\";s:5:\"stock\";s:9:\"999999999\";s:5:\"price\";s:6:\"120.00\";s:8:\"outer_id\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:4:\"1107\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:22;O:3:\"Sku\":11:{s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:8:{s:6:\"sku_id\";s:4:\"1108\";s:7:\"item_id\";s:2:\"82\";s:5:\"props\";s:29:\"{\"31\":\"31:216\",\"32\":\"32:224\"}\";s:10:\"props_name\";s:124:\"{\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\",\"\\u5957\\u9910\\u7c7b\\u578b\":\"\\u5957\\u9910\\u7c7b\\u578b:\\u4f18\\u9009\\u578b \"}\";s:5:\"stock\";s:9:\"999999999\";s:5:\"price\";s:6:\"140.00\";s:8:\"outer_id\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:4:\"1108\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:23;O:3:\"Sku\":11:{s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:8:{s:6:\"sku_id\";s:4:\"1109\";s:7:\"item_id\";s:2:\"82\";s:5:\"props\";s:29:\"{\"31\":\"31:216\",\"32\":\"32:225\"}\";s:10:\"props_name\";s:124:\"{\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\",\"\\u5957\\u9910\\u7c7b\\u578b\":\"\\u5957\\u9910\\u7c7b\\u578b:\\u5c0a\\u4eab\\u578b \"}\";s:5:\"stock\";s:9:\"999999999\";s:5:\"price\";s:6:\"160.00\";s:8:\"outer_id\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:4:\"1109\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}}}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:2:\"82\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";a:1:{s:12:\"CartPosition\";O:22:\"ECartPositionBehaviour\":7:{s:32:\"\0ECartPositionBehaviour\0quantity\";a:1:{s:7:\"Sku1086\";s:1:\"1\";}s:31:\"\0ECartPositionBehaviour\0refresh\";b:1;s:37:\"\0ECartPositionBehaviour\0discountPrice\";d:0;s:19:\"\0CBehavior\0_enabled\";b:1;s:17:\"\0CBehavior\0_owner\";r:2;s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}}}}');
INSERT INTO `profiles` VALUES ('11', null, null, null, null, '', 'a:4:{s:7:\"Sku1054\";O:8:\"CartItem\":13:{s:9:\"cartProps\";a:1:{i:0;s:13:\"28:139;31:211\";}s:3:\"sku\";a:1:{i:0;O:3:\"Sku\":11:{s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:8:{s:6:\"sku_id\";s:4:\"1054\";s:7:\"item_id\";s:2:\"82\";s:5:\"props\";s:29:\"{\"28\":\"28:139\",\"31\":\"31:211\"}\";s:10:\"props_name\";s:128:\"{\"\\u5957\\u9910\\u7c7b\\u578b\":\"\\u5957\\u9910\\u7c7b\\u578b:\\u7ecf\\u6d4e\\u578b     \",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\"}\";s:5:\"stock\";s:9:\"999999999\";s:5:\"price\";s:6:\"100.00\";s:8:\"outer_id\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:4:\"1054\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}}s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:27:{s:7:\"item_id\";s:2:\"82\";s:11:\"category_id\";s:3:\"130\";s:8:\"outer_id\";s:0:\"\";s:5:\"title\";s:25:\"快捷刷新（涂料） \";s:5:\"stock\";s:9:\"999999999\";s:10:\"min_number\";s:1:\"1\";s:5:\"price\";s:6:\"100.00\";s:8:\"currency\";s:3:\"㎡\";s:5:\"props\";s:105:\"{\"28\":[\"28:139\",\"28:140\",\"28:141\",\"28:142\"],\"31\":[\"31:211\",\"31:212\",\"31:213\",\"31:214\",\"31:215\",\"31:216\"]}\";s:10:\"props_name\";s:449:\"{\"\\u5957\\u9910\\u7c7b\\u578b\":[\"\\u5957\\u9910\\u7c7b\\u578b:\\u7ecf\\u6d4e\\u578b     \",\"\\u5957\\u9910\\u7c7b\\u578b:\\u8d85\\u503c\\u578b     \",\"\\u5957\\u9910\\u7c7b\\u578b:\\u4f18\\u9009\\u578b     \",\"\\u5957\\u9910\\u7c7b\\u578b:\\u5c0a\\u4eab\\u578b     \"],\"\\u989c\\u8272\":[\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\",\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\",\"\\u989c\\u8272:\\u9ec4\\u8272\",\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\",\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\",\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\"]}\";s:4:\"desc\";s:12:\"<p>123</p>\r\n\";s:12:\"shipping_fee\";s:4:\"0.00\";s:7:\"is_show\";s:1:\"1\";s:10:\"is_promote\";s:1:\"1\";s:6:\"is_new\";s:1:\"1\";s:6:\"is_hot\";s:1:\"1\";s:7:\"is_best\";s:1:\"1\";s:11:\"click_count\";s:2:\"22\";s:10:\"wish_count\";s:1:\"0\";s:12:\"review_count\";s:1:\"0\";s:10:\"deal_count\";s:1:\"0\";s:11:\"create_time\";s:10:\"1419495114\";s:11:\"update_time\";s:10:\"1419573682\";s:8:\"language\";s:5:\"zh_cn\";s:7:\"country\";s:6:\"100000\";s:5:\"state\";s:6:\"110000\";s:4:\"city\";s:6:\"110100\";}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:2:\"82\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";a:1:{s:12:\"CartPosition\";O:22:\"ECartPositionBehaviour\":7:{s:32:\"\0ECartPositionBehaviour\0quantity\";a:1:{s:7:\"Sku1054\";s:2:\"11\";}s:31:\"\0ECartPositionBehaviour\0refresh\";b:1;s:37:\"\0ECartPositionBehaviour\0discountPrice\";d:0;s:19:\"\0CBehavior\0_enabled\";b:1;s:17:\"\0CBehavior\0_owner\";r:2;s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}}}s:7:\"Sku1039\";O:8:\"CartItem\":13:{s:9:\"cartProps\";a:1:{i:0;s:11:\"13:42;14:47\";}s:3:\"sku\";a:2:{i:0;O:3:\"Sku\":11:{s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:8:{s:6:\"sku_id\";s:4:\"1039\";s:7:\"item_id\";s:2:\"61\";s:5:\"props\";s:27:\"{\"13\":\"13:42\",\"14\":\"14:47\"}\";s:10:\"props_name\";s:97:\"{\"\\u670d\\u52a1\":\"\\u670d\\u52a1:\\u58c1\\u7eb8   \",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272 \"}\";s:5:\"stock\";s:9:\"999999999\";s:5:\"price\";s:5:\"80.00\";s:8:\"outer_id\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:4:\"1039\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:1;r:77;}s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:27:{s:7:\"item_id\";s:2:\"61\";s:11:\"category_id\";s:3:\"129\";s:8:\"outer_id\";s:0:\"\";s:5:\"title\";s:12:\"墙面美容\";s:5:\"stock\";s:9:\"999999999\";s:10:\"min_number\";s:1:\"1\";s:5:\"price\";s:6:\"100.00\";s:8:\"currency\";s:3:\"㎡\";s:5:\"props\";s:79:\"{\"13\":[\"13:42\",\"13:43\",\"13:44\",\"13:45\",\"13:46\"],\"14\":[\"14:47\",\"14:48\",\"14:49\"]}\";s:10:\"props_name\";s:289:\"{\"\\u670d\\u52a1\":[\"\\u670d\\u52a1:\\u58c1\\u7eb8   \",\"\\u670d\\u52a1:\\u8f6f\\u5305   \",\"\\u670d\\u52a1:\\u5730\\u677f   \",\"\\u670d\\u52a1:\\u74f7\\u7816   \",\"\\u670d\\u52a1:\\u9632\\u6c34   \"],\"\\u989c\\u8272\":[\"\\u989c\\u8272:\\u6d45\\u7070\\u8272 \",\"\\u989c\\u8272:\\u5929\\u84dd\\u8272 \",\"\\u989c\\u8272:\\u9ec4\\u8272 \"]}\";s:4:\"desc\";s:15:\"<p>asdasd</p>\r\n\";s:12:\"shipping_fee\";s:4:\"0.00\";s:7:\"is_show\";s:1:\"1\";s:10:\"is_promote\";s:1:\"1\";s:6:\"is_new\";s:1:\"1\";s:6:\"is_hot\";s:1:\"1\";s:7:\"is_best\";s:1:\"0\";s:11:\"click_count\";s:3:\"235\";s:10:\"wish_count\";s:1:\"0\";s:12:\"review_count\";s:1:\"0\";s:10:\"deal_count\";s:1:\"1\";s:11:\"create_time\";s:10:\"1417754585\";s:11:\"update_time\";s:10:\"1419575937\";s:8:\"language\";s:5:\"zh_cn\";s:7:\"country\";s:6:\"100000\";s:5:\"state\";s:6:\"340000\";s:4:\"city\";s:6:\"340100\";}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:2:\"61\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";a:1:{s:12:\"CartPosition\";O:22:\"ECartPositionBehaviour\":7:{s:32:\"\0ECartPositionBehaviour\0quantity\";a:1:{s:7:\"Sku1039\";s:1:\"1\";}s:31:\"\0ECartPositionBehaviour\0refresh\";b:1;s:37:\"\0ECartPositionBehaviour\0discountPrice\";d:0;s:19:\"\0CBehavior\0_enabled\";b:1;s:17:\"\0CBehavior\0_owner\";r:73;s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}}}s:7:\"Sku1042\";O:8:\"CartItem\":13:{s:9:\"cartProps\";a:1:{i:0;s:11:\"13:43;14:47\";}s:3:\"sku\";a:2:{i:0;O:3:\"Sku\":11:{s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:8:{s:6:\"sku_id\";s:4:\"1042\";s:7:\"item_id\";s:2:\"61\";s:5:\"props\";s:27:\"{\"13\":\"13:43\",\"14\":\"14:47\"}\";s:10:\"props_name\";s:97:\"{\"\\u670d\\u52a1\":\"\\u670d\\u52a1:\\u8f6f\\u5305   \",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272 \"}\";s:5:\"stock\";s:9:\"999999999\";s:5:\"price\";s:6:\"120.00\";s:8:\"outer_id\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:4:\"1042\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:1;r:149;}s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:27:{s:7:\"item_id\";s:2:\"61\";s:11:\"category_id\";s:3:\"129\";s:8:\"outer_id\";s:0:\"\";s:5:\"title\";s:12:\"墙面美容\";s:5:\"stock\";s:9:\"999999999\";s:10:\"min_number\";s:1:\"1\";s:5:\"price\";s:6:\"100.00\";s:8:\"currency\";s:3:\"㎡\";s:5:\"props\";s:79:\"{\"13\":[\"13:42\",\"13:43\",\"13:44\",\"13:45\",\"13:46\"],\"14\":[\"14:47\",\"14:48\",\"14:49\"]}\";s:10:\"props_name\";s:289:\"{\"\\u670d\\u52a1\":[\"\\u670d\\u52a1:\\u58c1\\u7eb8   \",\"\\u670d\\u52a1:\\u8f6f\\u5305   \",\"\\u670d\\u52a1:\\u5730\\u677f   \",\"\\u670d\\u52a1:\\u74f7\\u7816   \",\"\\u670d\\u52a1:\\u9632\\u6c34   \"],\"\\u989c\\u8272\":[\"\\u989c\\u8272:\\u6d45\\u7070\\u8272 \",\"\\u989c\\u8272:\\u5929\\u84dd\\u8272 \",\"\\u989c\\u8272:\\u9ec4\\u8272 \"]}\";s:4:\"desc\";s:15:\"<p>asdasd</p>\r\n\";s:12:\"shipping_fee\";s:4:\"0.00\";s:7:\"is_show\";s:1:\"1\";s:10:\"is_promote\";s:1:\"1\";s:6:\"is_new\";s:1:\"1\";s:6:\"is_hot\";s:1:\"1\";s:7:\"is_best\";s:1:\"0\";s:11:\"click_count\";s:3:\"235\";s:10:\"wish_count\";s:1:\"0\";s:12:\"review_count\";s:1:\"0\";s:10:\"deal_count\";s:1:\"1\";s:11:\"create_time\";s:10:\"1417754585\";s:11:\"update_time\";s:10:\"1419575937\";s:8:\"language\";s:5:\"zh_cn\";s:7:\"country\";s:6:\"100000\";s:5:\"state\";s:6:\"340000\";s:4:\"city\";s:6:\"340100\";}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:2:\"61\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";a:1:{s:12:\"CartPosition\";O:22:\"ECartPositionBehaviour\":7:{s:32:\"\0ECartPositionBehaviour\0quantity\";a:1:{s:7:\"Sku1042\";s:1:\"1\";}s:31:\"\0ECartPositionBehaviour\0refresh\";b:1;s:37:\"\0ECartPositionBehaviour\0discountPrice\";d:0;s:19:\"\0CBehavior\0_enabled\";b:1;s:17:\"\0CBehavior\0_owner\";r:145;s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}}}s:7:\"Sku1040\";O:8:\"CartItem\":13:{s:9:\"cartProps\";a:1:{i:0;s:11:\"13:42;14:48\";}s:3:\"sku\";a:2:{i:0;O:3:\"Sku\":11:{s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:8:{s:6:\"sku_id\";s:4:\"1040\";s:7:\"item_id\";s:2:\"61\";s:5:\"props\";s:27:\"{\"13\":\"13:42\",\"14\":\"14:48\"}\";s:10:\"props_name\";s:97:\"{\"\\u670d\\u52a1\":\"\\u670d\\u52a1:\\u58c1\\u7eb8   \",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272 \"}\";s:5:\"stock\";s:9:\"999999999\";s:5:\"price\";s:5:\"80.00\";s:8:\"outer_id\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:4:\"1040\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:1;r:221;}s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:27:{s:7:\"item_id\";s:2:\"61\";s:11:\"category_id\";s:3:\"129\";s:8:\"outer_id\";s:0:\"\";s:5:\"title\";s:12:\"墙面美容\";s:5:\"stock\";s:9:\"999999999\";s:10:\"min_number\";s:1:\"1\";s:5:\"price\";s:6:\"100.00\";s:8:\"currency\";s:3:\"㎡\";s:5:\"props\";s:79:\"{\"13\":[\"13:42\",\"13:43\",\"13:44\",\"13:45\",\"13:46\"],\"14\":[\"14:47\",\"14:48\",\"14:49\"]}\";s:10:\"props_name\";s:289:\"{\"\\u670d\\u52a1\":[\"\\u670d\\u52a1:\\u58c1\\u7eb8   \",\"\\u670d\\u52a1:\\u8f6f\\u5305   \",\"\\u670d\\u52a1:\\u5730\\u677f   \",\"\\u670d\\u52a1:\\u74f7\\u7816   \",\"\\u670d\\u52a1:\\u9632\\u6c34   \"],\"\\u989c\\u8272\":[\"\\u989c\\u8272:\\u6d45\\u7070\\u8272 \",\"\\u989c\\u8272:\\u5929\\u84dd\\u8272 \",\"\\u989c\\u8272:\\u9ec4\\u8272 \"]}\";s:4:\"desc\";s:15:\"<p>asdasd</p>\r\n\";s:12:\"shipping_fee\";s:4:\"0.00\";s:7:\"is_show\";s:1:\"1\";s:10:\"is_promote\";s:1:\"1\";s:6:\"is_new\";s:1:\"1\";s:6:\"is_hot\";s:1:\"1\";s:7:\"is_best\";s:1:\"0\";s:11:\"click_count\";s:3:\"235\";s:10:\"wish_count\";s:1:\"0\";s:12:\"review_count\";s:1:\"0\";s:10:\"deal_count\";s:1:\"1\";s:11:\"create_time\";s:10:\"1417754585\";s:11:\"update_time\";s:10:\"1419575937\";s:8:\"language\";s:5:\"zh_cn\";s:7:\"country\";s:6:\"100000\";s:5:\"state\";s:6:\"340000\";s:4:\"city\";s:6:\"340100\";}s:23:\"\0CActiveRecord\0_related\";a:1:{s:4:\"skus\";a:15:{i:0;O:3:\"Sku\":11:{s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:8:{s:6:\"sku_id\";s:4:\"1039\";s:7:\"item_id\";s:2:\"61\";s:5:\"props\";s:27:\"{\"13\":\"13:42\",\"14\":\"14:47\"}\";s:10:\"props_name\";s:97:\"{\"\\u670d\\u52a1\":\"\\u670d\\u52a1:\\u58c1\\u7eb8   \",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272 \"}\";s:5:\"stock\";s:9:\"999999999\";s:5:\"price\";s:5:\"80.00\";s:8:\"outer_id\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:4:\"1039\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:1;r:221;i:2;O:3:\"Sku\":11:{s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:8:{s:6:\"sku_id\";s:4:\"1041\";s:7:\"item_id\";s:2:\"61\";s:5:\"props\";s:27:\"{\"13\":\"13:42\",\"14\":\"14:49\"}\";s:10:\"props_name\";s:91:\"{\"\\u670d\\u52a1\":\"\\u670d\\u52a1:\\u58c1\\u7eb8   \",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272 \"}\";s:5:\"stock\";s:9:\"999999999\";s:5:\"price\";s:5:\"80.00\";s:8:\"outer_id\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:4:\"1041\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:3;O:3:\"Sku\":11:{s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:8:{s:6:\"sku_id\";s:4:\"1042\";s:7:\"item_id\";s:2:\"61\";s:5:\"props\";s:27:\"{\"13\":\"13:43\",\"14\":\"14:47\"}\";s:10:\"props_name\";s:97:\"{\"\\u670d\\u52a1\":\"\\u670d\\u52a1:\\u8f6f\\u5305   \",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272 \"}\";s:5:\"stock\";s:9:\"999999999\";s:5:\"price\";s:6:\"120.00\";s:8:\"outer_id\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:4:\"1042\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:4;O:3:\"Sku\":11:{s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:8:{s:6:\"sku_id\";s:4:\"1043\";s:7:\"item_id\";s:2:\"61\";s:5:\"props\";s:27:\"{\"13\":\"13:43\",\"14\":\"14:48\"}\";s:10:\"props_name\";s:97:\"{\"\\u670d\\u52a1\":\"\\u670d\\u52a1:\\u8f6f\\u5305   \",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272 \"}\";s:5:\"stock\";s:9:\"999999999\";s:5:\"price\";s:6:\"120.00\";s:8:\"outer_id\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:4:\"1043\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:5;O:3:\"Sku\":11:{s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:8:{s:6:\"sku_id\";s:4:\"1044\";s:7:\"item_id\";s:2:\"61\";s:5:\"props\";s:27:\"{\"13\":\"13:43\",\"14\":\"14:49\"}\";s:10:\"props_name\";s:91:\"{\"\\u670d\\u52a1\":\"\\u670d\\u52a1:\\u8f6f\\u5305   \",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272 \"}\";s:5:\"stock\";s:9:\"999999999\";s:5:\"price\";s:6:\"120.00\";s:8:\"outer_id\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:4:\"1044\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:6;O:3:\"Sku\":11:{s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:8:{s:6:\"sku_id\";s:4:\"1045\";s:7:\"item_id\";s:2:\"61\";s:5:\"props\";s:27:\"{\"13\":\"13:44\",\"14\":\"14:47\"}\";s:10:\"props_name\";s:97:\"{\"\\u670d\\u52a1\":\"\\u670d\\u52a1:\\u5730\\u677f   \",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272 \"}\";s:5:\"stock\";s:9:\"999999999\";s:5:\"price\";s:5:\"70.00\";s:8:\"outer_id\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:4:\"1045\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:7;O:3:\"Sku\":11:{s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:8:{s:6:\"sku_id\";s:4:\"1046\";s:7:\"item_id\";s:2:\"61\";s:5:\"props\";s:27:\"{\"13\":\"13:44\",\"14\":\"14:48\"}\";s:10:\"props_name\";s:97:\"{\"\\u670d\\u52a1\":\"\\u670d\\u52a1:\\u5730\\u677f   \",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272 \"}\";s:5:\"stock\";s:9:\"999999999\";s:5:\"price\";s:5:\"70.00\";s:8:\"outer_id\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:4:\"1046\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:8;O:3:\"Sku\":11:{s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:8:{s:6:\"sku_id\";s:4:\"1047\";s:7:\"item_id\";s:2:\"61\";s:5:\"props\";s:27:\"{\"13\":\"13:44\",\"14\":\"14:49\"}\";s:10:\"props_name\";s:91:\"{\"\\u670d\\u52a1\":\"\\u670d\\u52a1:\\u5730\\u677f   \",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272 \"}\";s:5:\"stock\";s:9:\"999999999\";s:5:\"price\";s:5:\"70.00\";s:8:\"outer_id\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:4:\"1047\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:9;O:3:\"Sku\":11:{s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:8:{s:6:\"sku_id\";s:4:\"1048\";s:7:\"item_id\";s:2:\"61\";s:5:\"props\";s:27:\"{\"13\":\"13:45\",\"14\":\"14:47\"}\";s:10:\"props_name\";s:97:\"{\"\\u670d\\u52a1\":\"\\u670d\\u52a1:\\u74f7\\u7816   \",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272 \"}\";s:5:\"stock\";s:9:\"999999999\";s:5:\"price\";s:5:\"40.00\";s:8:\"outer_id\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:4:\"1048\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:10;O:3:\"Sku\":11:{s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:8:{s:6:\"sku_id\";s:4:\"1049\";s:7:\"item_id\";s:2:\"61\";s:5:\"props\";s:27:\"{\"13\":\"13:45\",\"14\":\"14:48\"}\";s:10:\"props_name\";s:97:\"{\"\\u670d\\u52a1\":\"\\u670d\\u52a1:\\u74f7\\u7816   \",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272 \"}\";s:5:\"stock\";s:9:\"999999999\";s:5:\"price\";s:5:\"40.00\";s:8:\"outer_id\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:4:\"1049\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:11;O:3:\"Sku\":11:{s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:8:{s:6:\"sku_id\";s:4:\"1050\";s:7:\"item_id\";s:2:\"61\";s:5:\"props\";s:27:\"{\"13\":\"13:45\",\"14\":\"14:49\"}\";s:10:\"props_name\";s:91:\"{\"\\u670d\\u52a1\":\"\\u670d\\u52a1:\\u74f7\\u7816   \",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272 \"}\";s:5:\"stock\";s:9:\"999999999\";s:5:\"price\";s:5:\"40.00\";s:8:\"outer_id\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:4:\"1050\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:12;O:3:\"Sku\":11:{s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:8:{s:6:\"sku_id\";s:4:\"1051\";s:7:\"item_id\";s:2:\"61\";s:5:\"props\";s:27:\"{\"13\":\"13:46\",\"14\":\"14:47\"}\";s:10:\"props_name\";s:97:\"{\"\\u670d\\u52a1\":\"\\u670d\\u52a1:\\u9632\\u6c34   \",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272 \"}\";s:5:\"stock\";s:9:\"999999999\";s:5:\"price\";s:5:\"30.00\";s:8:\"outer_id\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:4:\"1051\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:13;O:3:\"Sku\":11:{s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:8:{s:6:\"sku_id\";s:4:\"1052\";s:7:\"item_id\";s:2:\"61\";s:5:\"props\";s:27:\"{\"13\":\"13:46\",\"14\":\"14:48\"}\";s:10:\"props_name\";s:97:\"{\"\\u670d\\u52a1\":\"\\u670d\\u52a1:\\u9632\\u6c34   \",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272 \"}\";s:5:\"stock\";s:9:\"999999999\";s:5:\"price\";s:5:\"30.00\";s:8:\"outer_id\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:4:\"1052\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:14;O:3:\"Sku\":11:{s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:8:{s:6:\"sku_id\";s:4:\"1053\";s:7:\"item_id\";s:2:\"61\";s:5:\"props\";s:27:\"{\"13\":\"13:46\",\"14\":\"14:49\"}\";s:10:\"props_name\";s:91:\"{\"\\u670d\\u52a1\":\"\\u670d\\u52a1:\\u9632\\u6c34   \",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272 \"}\";s:5:\"stock\";s:9:\"999999999\";s:5:\"price\";s:5:\"30.00\";s:8:\"outer_id\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:4:\"1053\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}}}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:2:\"61\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";a:1:{s:12:\"CartPosition\";O:22:\"ECartPositionBehaviour\":7:{s:32:\"\0ECartPositionBehaviour\0quantity\";a:1:{s:7:\"Sku1040\";s:1:\"1\";}s:31:\"\0ECartPositionBehaviour\0refresh\";b:1;s:37:\"\0ECartPositionBehaviour\0discountPrice\";d:0;s:19:\"\0CBehavior\0_enabled\";b:1;s:17:\"\0CBehavior\0_owner\";r:217;s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}}}}');
INSERT INTO `profiles` VALUES ('12', null, null, null, null, '', 'a:2:{s:6:\"Sku113\";O:8:\"CartItem\":13:{s:9:\"cartProps\";a:1:{i:0;s:11:\"13:40;14:47\";}s:3:\"sku\";a:2:{i:0;O:3:\"Sku\":11:{s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:8:{s:6:\"sku_id\";s:3:\"113\";s:7:\"item_id\";s:2:\"61\";s:5:\"props\";s:27:\"{\"13\":\"13:40\",\"14\":\"14:47\"}\";s:10:\"props_name\";s:123:\"{\"\\u670d\\u52a1\":\"\\u670d\\u52a1:\\u5feb\\u6377\\u5237\\u65b0\\uff08\\u6d82\\u6599\\uff09\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u7ea2\\u8272\"}\";s:5:\"stock\";s:9:\"999999999\";s:5:\"price\";s:6:\"123.00\";s:8:\"outer_id\";s:3:\"123\";s:6:\"status\";s:1:\"1\";}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:3:\"113\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:1;r:6;}s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:27:{s:7:\"item_id\";s:2:\"61\";s:11:\"category_id\";s:3:\"129\";s:8:\"outer_id\";s:0:\"\";s:5:\"title\";s:12:\"墙面美容\";s:5:\"stock\";s:9:\"999999999\";s:10:\"min_number\";s:1:\"1\";s:5:\"price\";s:6:\"150.00\";s:8:\"currency\";s:3:\"㎡\";s:5:\"props\";s:95:\"{\"13\":[\"13:40\",\"13:41\",\"13:42\",\"13:43\",\"13:44\",\"13:45\",\"13:46\"],\"14\":[\"14:47\",\"14:48\",\"14:49\"]}\";s:10:\"props_name\";s:387:\"{\"\\u670d\\u52a1\":[\"\\u670d\\u52a1:\\u5feb\\u6377\\u5237\\u65b0\\uff08\\u6d82\\u6599\\uff09\",\"\\u670d\\u52a1:\\u827a\\u672f\\u6d82\\u6599\\uff08\\u5b9a\\u5236\\uff09\",\"\\u670d\\u52a1:\\u58c1\\u7eb8\",\"\\u670d\\u52a1:\\u8f6f\\u5305\",\"\\u670d\\u52a1:\\u5730\\u677f\",\"\\u670d\\u52a1:\\u74f7\\u7816\",\"\\u670d\\u52a1:\\u9632\\u6c34\"],\"\\u989c\\u8272\":[\"\\u989c\\u8272:\\u7ea2\\u8272\",\"\\u989c\\u8272:\\u84dd\\u8272\",\"\\u989c\\u8272:\\u7eff\\u8272\"]}\";s:4:\"desc\";s:15:\"<p>asdasd</p>\r\n\";s:12:\"shipping_fee\";s:4:\"0.00\";s:7:\"is_show\";s:1:\"1\";s:10:\"is_promote\";s:1:\"1\";s:6:\"is_new\";s:1:\"1\";s:6:\"is_hot\";s:1:\"1\";s:7:\"is_best\";s:1:\"0\";s:11:\"click_count\";s:2:\"61\";s:10:\"wish_count\";s:1:\"0\";s:12:\"review_count\";s:1:\"0\";s:10:\"deal_count\";s:1:\"0\";s:11:\"create_time\";s:10:\"1417754585\";s:11:\"update_time\";s:10:\"1419388144\";s:8:\"language\";s:5:\"zh_cn\";s:7:\"country\";s:6:\"100000\";s:5:\"state\";s:6:\"340000\";s:4:\"city\";s:6:\"340100\";}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:2:\"61\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";a:1:{s:12:\"CartPosition\";O:22:\"ECartPositionBehaviour\":7:{s:32:\"\0ECartPositionBehaviour\0quantity\";a:1:{s:6:\"Sku113\";s:1:\"1\";}s:31:\"\0ECartPositionBehaviour\0refresh\";b:1;s:37:\"\0ECartPositionBehaviour\0discountPrice\";d:0;s:19:\"\0CBehavior\0_enabled\";b:1;s:17:\"\0CBehavior\0_owner\";r:2;s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}}}s:6:\"Sku116\";O:8:\"CartItem\":13:{s:9:\"cartProps\";a:1:{i:0;s:11:\"13:41;14:47\";}s:3:\"sku\";a:3:{i:0;O:3:\"Sku\":11:{s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:8:{s:6:\"sku_id\";s:3:\"116\";s:7:\"item_id\";s:2:\"61\";s:5:\"props\";s:27:\"{\"13\":\"13:41\",\"14\":\"14:47\"}\";s:10:\"props_name\";s:123:\"{\"\\u670d\\u52a1\":\"\\u670d\\u52a1:\\u827a\\u672f\\u6d82\\u6599\\uff08\\u5b9a\\u5236\\uff09\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u7ea2\\u8272\"}\";s:5:\"stock\";s:9:\"999999999\";s:5:\"price\";s:6:\"123.00\";s:8:\"outer_id\";s:3:\"123\";s:6:\"status\";s:1:\"1\";}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:3:\"116\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}i:1;r:78;i:2;O:3:\"Sku\":11:{s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:8:{s:6:\"sku_id\";s:3:\"116\";s:7:\"item_id\";s:2:\"61\";s:5:\"props\";s:27:\"{\"13\":\"13:41\",\"14\":\"14:47\"}\";s:10:\"props_name\";s:123:\"{\"\\u670d\\u52a1\":\"\\u670d\\u52a1:\\u827a\\u672f\\u6d82\\u6599\\uff08\\u5b9a\\u5236\\uff09\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u7ea2\\u8272\"}\";s:5:\"stock\";s:9:\"999999999\";s:5:\"price\";s:6:\"123.00\";s:8:\"outer_id\";s:3:\"123\";s:6:\"status\";s:1:\"1\";}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:3:\"116\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}}s:19:\"\0CActiveRecord\0_new\";b:0;s:26:\"\0CActiveRecord\0_attributes\";a:27:{s:7:\"item_id\";s:2:\"61\";s:11:\"category_id\";s:3:\"129\";s:8:\"outer_id\";s:0:\"\";s:5:\"title\";s:12:\"墙面美容\";s:5:\"stock\";s:9:\"999999999\";s:10:\"min_number\";s:1:\"1\";s:5:\"price\";s:6:\"150.00\";s:8:\"currency\";s:3:\"㎡\";s:5:\"props\";s:95:\"{\"13\":[\"13:40\",\"13:41\",\"13:42\",\"13:43\",\"13:44\",\"13:45\",\"13:46\"],\"14\":[\"14:47\",\"14:48\",\"14:49\"]}\";s:10:\"props_name\";s:387:\"{\"\\u670d\\u52a1\":[\"\\u670d\\u52a1:\\u5feb\\u6377\\u5237\\u65b0\\uff08\\u6d82\\u6599\\uff09\",\"\\u670d\\u52a1:\\u827a\\u672f\\u6d82\\u6599\\uff08\\u5b9a\\u5236\\uff09\",\"\\u670d\\u52a1:\\u58c1\\u7eb8\",\"\\u670d\\u52a1:\\u8f6f\\u5305\",\"\\u670d\\u52a1:\\u5730\\u677f\",\"\\u670d\\u52a1:\\u74f7\\u7816\",\"\\u670d\\u52a1:\\u9632\\u6c34\"],\"\\u989c\\u8272\":[\"\\u989c\\u8272:\\u7ea2\\u8272\",\"\\u989c\\u8272:\\u84dd\\u8272\",\"\\u989c\\u8272:\\u7eff\\u8272\"]}\";s:4:\"desc\";s:15:\"<p>asdasd</p>\r\n\";s:12:\"shipping_fee\";s:4:\"0.00\";s:7:\"is_show\";s:1:\"1\";s:10:\"is_promote\";s:1:\"1\";s:6:\"is_new\";s:1:\"1\";s:6:\"is_hot\";s:1:\"1\";s:7:\"is_best\";s:1:\"0\";s:11:\"click_count\";s:2:\"61\";s:10:\"wish_count\";s:1:\"0\";s:12:\"review_count\";s:1:\"0\";s:10:\"deal_count\";s:1:\"0\";s:11:\"create_time\";s:10:\"1417754585\";s:11:\"update_time\";s:10:\"1419388144\";s:8:\"language\";s:5:\"zh_cn\";s:7:\"country\";s:6:\"100000\";s:5:\"state\";s:6:\"340000\";s:4:\"city\";s:6:\"340100\";}s:23:\"\0CActiveRecord\0_related\";a:0:{}s:17:\"\0CActiveRecord\0_c\";N;s:18:\"\0CActiveRecord\0_pk\";s:2:\"61\";s:21:\"\0CActiveRecord\0_alias\";s:1:\"t\";s:15:\"\0CModel\0_errors\";a:0:{}s:19:\"\0CModel\0_validators\";N;s:17:\"\0CModel\0_scenario\";s:6:\"update\";s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";a:1:{s:12:\"CartPosition\";O:22:\"ECartPositionBehaviour\":7:{s:32:\"\0ECartPositionBehaviour\0quantity\";a:1:{s:6:\"Sku116\";i:1;}s:31:\"\0ECartPositionBehaviour\0refresh\";b:1;s:37:\"\0ECartPositionBehaviour\0discountPrice\";d:0;s:19:\"\0CBehavior\0_enabled\";b:1;s:17:\"\0CBehavior\0_owner\";r:74;s:14:\"\0CComponent\0_e\";N;s:14:\"\0CComponent\0_m\";N;}}}}');
INSERT INTO `profiles` VALUES ('13', null, null, null, null, '', 'a:0:{}');

-- ----------------------------
-- Table structure for `profiles_fields`
-- ----------------------------
DROP TABLE IF EXISTS `profiles_fields`;
CREATE TABLE `profiles_fields` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `varname` varchar(50) NOT NULL DEFAULT '',
  `title` varchar(255) NOT NULL DEFAULT '',
  `field_type` varchar(50) NOT NULL DEFAULT '',
  `field_size` int(3) NOT NULL DEFAULT '0',
  `field_size_min` int(3) NOT NULL DEFAULT '0',
  `required` int(1) NOT NULL DEFAULT '0',
  `match` varchar(255) NOT NULL DEFAULT '',
  `range` varchar(255) NOT NULL DEFAULT '',
  `error_message` varchar(255) NOT NULL DEFAULT '',
  `other_validator` text,
  `default` varchar(255) NOT NULL DEFAULT '',
  `widget` varchar(255) NOT NULL DEFAULT '',
  `widgetparams` text,
  `position` int(3) NOT NULL DEFAULT '0',
  `visible` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of profiles_fields
-- ----------------------------
INSERT INTO `profiles_fields` VALUES ('1', 'first_name', 'First Name', 'VARCHAR', '255', '0', '0', '', '', 'Incorrect First Name (length between 3 and 50 characters).', '', '', '', '', '1', '0');
INSERT INTO `profiles_fields` VALUES ('2', 'last_name', 'Last Name', 'VARCHAR', '255', '0', '0', '', '', 'Incorrect Last Name (length between 3 and 50 characters).', '', '', '', '', '2', '0');
INSERT INTO `profiles_fields` VALUES ('3', 'truename', '真实姓名', 'VARCHAR', '45', '2', '0', '', '', '', '', '', '', '', '0', '1');
INSERT INTO `profiles_fields` VALUES ('4', 'nickname', '昵称', 'VARCHAR', '45', '0', '0', '', '', '', '', '', '', '', '0', '3');
INSERT INTO `profiles_fields` VALUES ('5', 'phone', '手机号码', 'VARCHAR', '45', '11', '0', '/^0{0,1}(13[0-9]|14[0-9]|15[0-9]|18[0-9])[0-9]{8}$/', '', '手机号码不正确', '', '', '', '', '0', '3');
INSERT INTO `profiles_fields` VALUES ('6', 'cart', 'cart', 'TEXT', '0', '0', '0', '', '', '', '', '', '', '', '0', '0');

-- ----------------------------
-- Table structure for `prop_category`
-- ----------------------------
DROP TABLE IF EXISTS `prop_category`;
CREATE TABLE `prop_category` (
  `prop_id` int(10) unsigned NOT NULL,
  `category_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`prop_id`,`category_id`),
  KEY `fk_prop_category_item_prop1` (`prop_id`),
  KEY `fk_prop_category_category1` (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of prop_category
-- ----------------------------
INSERT INTO `prop_category` VALUES ('1', '1');
INSERT INTO `prop_category` VALUES ('2', '1');

-- ----------------------------
-- Table structure for `prop_img`
-- ----------------------------
DROP TABLE IF EXISTS `prop_img`;
CREATE TABLE `prop_img` (
  `prop_img_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Prop Img ID',
  `item_id` int(10) unsigned NOT NULL COMMENT 'Item ID',
  `item_prop_value` varchar(255) NOT NULL COMMENT '图片所对应的属性组合的字符串',
  `pic` varchar(255) DEFAULT NULL COMMENT '图片url',
  `create_time` int(10) unsigned NOT NULL COMMENT '创建时间',
  `prop_value_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`prop_img_id`),
  KEY `fk_prop_img_item1_idx` (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of prop_img
-- ----------------------------
INSERT INTO `prop_img` VALUES ('1', '61', '浅灰色', '/upload/itemColor/light-grey.jpg', '1419218284', null);
INSERT INTO `prop_img` VALUES ('2', '61', '天蓝色', '/upload/itemColor/sky-blue.jpg', '1419218284', null);
INSERT INTO `prop_img` VALUES ('3', '61', '黄色', '/upload/itemColor/yellow.jpg', '1419218284', null);
INSERT INTO `prop_img` VALUES ('4', '61', '浅棕色', '/upload/itemColor/light-brown.jpg', '1419218284', null);
INSERT INTO `prop_img` VALUES ('5', '61', '浅黄色', '/upload/itemColor/light-yellow.jpg', '1419218284', null);
INSERT INTO `prop_img` VALUES ('6', '61', '浅绿色', '/upload/itemColor/light-green.jpg', '1419218284', null);
INSERT INTO `prop_img` VALUES ('7', '66', '浅灰色', '/upload/itemColor/light-grey.jpg', '1419218284', null);
INSERT INTO `prop_img` VALUES ('8', '66', '天蓝色', '/upload/itemColor/sky-blue.jpg', '1419218284', null);
INSERT INTO `prop_img` VALUES ('9', '66', '黄色', '/upload/itemColor/yellow.jpg', '1419218284', null);
INSERT INTO `prop_img` VALUES ('10', '66', '浅棕色', '/upload/itemColor/light-brown.jpg', '1419218284', null);
INSERT INTO `prop_img` VALUES ('11', '66', '浅黄色', '/upload/itemColor/light-yellow.jpg', '1419218284', null);
INSERT INTO `prop_img` VALUES ('12', '66', '浅绿色', '/upload/itemColor/light-green.jpg', '1419218284', null);
INSERT INTO `prop_img` VALUES ('13', '67', '浅灰色', '/upload/itemColor/light-grey.jpg', '1419218284', null);
INSERT INTO `prop_img` VALUES ('14', '67', '天蓝色', '/upload/itemColor/sky-blue.jpg', '1419218284', null);
INSERT INTO `prop_img` VALUES ('15', '67', '黄色', '/upload/itemColor/yellow.jpg', '1419218284', null);
INSERT INTO `prop_img` VALUES ('16', '67', '浅棕色', '/upload/itemColor/light-brown.jpg', '1419218284', null);
INSERT INTO `prop_img` VALUES ('17', '67', '浅黄色', '/upload/itemColor/light-yellow.jpg', '1419218284', null);
INSERT INTO `prop_img` VALUES ('18', '67', '浅绿色', '/upload/itemColor/light-green.jpg', '1419218284', null);
INSERT INTO `prop_img` VALUES ('19', '68', '浅灰色', '/upload/itemColor/light-grey.jpg', '1419218284', null);
INSERT INTO `prop_img` VALUES ('20', '68', '天蓝色', '/upload/itemColor/sky-blue.jpg', '1419218284', null);
INSERT INTO `prop_img` VALUES ('21', '68', '黄色', '/upload/itemColor/yellow.jpg', '1419218284', null);
INSERT INTO `prop_img` VALUES ('22', '68', '浅棕色', '/upload/itemColor/light-brown.jpg', '1419218284', null);
INSERT INTO `prop_img` VALUES ('23', '68', '浅黄色', '/upload/itemColor/light-yellow.jpg', '1419218284', null);
INSERT INTO `prop_img` VALUES ('24', '68', '浅绿色', '/upload/itemColor/light-green.jpg', '1419218284', null);
INSERT INTO `prop_img` VALUES ('25', '69', '浅灰色', '/upload/itemColor/light-grey.jpg', '1419218284', null);
INSERT INTO `prop_img` VALUES ('26', '69', '天蓝色', '/upload/itemColor/sky-blue.jpg', '1419218284', null);
INSERT INTO `prop_img` VALUES ('27', '69', '黄色', '/upload/itemColor/yellow.jpg', '1419218284', null);
INSERT INTO `prop_img` VALUES ('28', '69', '浅棕色', '/upload/itemColor/light-brown.jpg', '1419218284', null);
INSERT INTO `prop_img` VALUES ('29', '69', '浅黄色', '/upload/itemColor/light-yellow.jpg', '1419218284', null);
INSERT INTO `prop_img` VALUES ('30', '69', '浅绿色', '/upload/itemColor/light-green.jpg', '1419218284', null);
INSERT INTO `prop_img` VALUES ('31', '73', '绿色', '/upload/itemColor/light-green.jpg', '1419411995', '130');
INSERT INTO `prop_img` VALUES ('32', '74', '绿色', '/upload/itemColor/light-green.jpg', '1419472540', '132');
INSERT INTO `prop_img` VALUES ('33', '75', '绿色', '/upload/itemColor/light-green.jpg', '1419473693', '132');
INSERT INTO `prop_img` VALUES ('34', '76', '绿色', '/upload/itemColor/light-green.jpg', '1419474547', '132');
INSERT INTO `prop_img` VALUES ('35', '76', '黄色', '/upload/itemColor/yellow.jpg', '1419474547', '133');
INSERT INTO `prop_img` VALUES ('36', '76', '天蓝色', '/upload/itemColor/sky-blue.jpg', '1419474547', '134');
INSERT INTO `prop_img` VALUES ('37', '77', '绿色', '/upload/itemColor/light-green.jpg', '1419474719', '132');
INSERT INTO `prop_img` VALUES ('38', '77', '黄色', '/upload/itemColor/yellow.jpg', '1419474719', '133');
INSERT INTO `prop_img` VALUES ('39', '77', '天蓝色', '/upload/itemColor/sky-blue.jpg', '1419474719', '134');
INSERT INTO `prop_img` VALUES ('40', '78', '绿色', '/upload/itemColor/light-green.jpg', '1419474816', '132');
INSERT INTO `prop_img` VALUES ('41', '78', '黄色', '/upload/itemColor/yellow.jpg', '1419474816', '133');
INSERT INTO `prop_img` VALUES ('42', '78', '天蓝色', '/upload/itemColor/sky-blue.jpg', '1419474816', '134');
INSERT INTO `prop_img` VALUES ('43', '79', '绿色', '/upload/itemColor/light-green.jpg', '1419474934', '132');
INSERT INTO `prop_img` VALUES ('44', '79', '黄色', '/upload/itemColor/yellow.jpg', '1419474934', '133');
INSERT INTO `prop_img` VALUES ('45', '79', '天蓝色', '/upload/itemColor/sky-blue.jpg', '1419474934', '134');
INSERT INTO `prop_img` VALUES ('46', '82', '浅灰色 ', '/upload/itemColor/light-grey.jpg', '1419495114', '47');
INSERT INTO `prop_img` VALUES ('47', '82', '天蓝色 ', '/upload/itemColor/sky-blue.jpg', '1419495114', '48');
INSERT INTO `prop_img` VALUES ('48', '82', '黄色 ', '/upload/itemColor/yellow.jpg', '1419495114', '49');

-- ----------------------------
-- Table structure for `prop_value`
-- ----------------------------
DROP TABLE IF EXISTS `prop_value`;
CREATE TABLE `prop_value` (
  `prop_value_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '属性值ID',
  `item_prop_id` int(10) unsigned NOT NULL,
  `value_name` varchar(255) NOT NULL COMMENT '属性值',
  `value_alias` varchar(255) NOT NULL COMMENT '属性值别名',
  `status` tinyint(1) unsigned NOT NULL COMMENT '状态。可选值:normal(正常),deleted(删除)',
  `sort_order` tinyint(3) unsigned NOT NULL DEFAULT '255' COMMENT '排列序号。取值范围:大于零的整数',
  `pic` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`prop_value_id`),
  KEY `fk_prop_value_item_prop1_idx` (`item_prop_id`),
  CONSTRAINT `fk_prop_value_item_prop1` FOREIGN KEY (`item_prop_id`) REFERENCES `item_prop` (`item_prop_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=226 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of prop_value
-- ----------------------------
INSERT INTO `prop_value` VALUES ('32', '12', '油烟机清洗 ', '油烟机清洗 ', '1', '0', null);
INSERT INTO `prop_value` VALUES ('33', '12', '空调清洗 ', '空调清洗 ', '1', '1', null);
INSERT INTO `prop_value` VALUES ('34', '12', '冰箱清洗 ', '冰箱清洗 ', '1', '2', null);
INSERT INTO `prop_value` VALUES ('43', '13', '软包     ', '软包     ', '1', '0', null);
INSERT INTO `prop_value` VALUES ('44', '13', '地板     ', '地板     ', '1', '1', null);
INSERT INTO `prop_value` VALUES ('45', '13', '瓷砖     ', '瓷砖     ', '1', '2', null);
INSERT INTO `prop_value` VALUES ('46', '13', '防水     ', '防水     ', '1', '3', null);
INSERT INTO `prop_value` VALUES ('47', '14', '浅灰色 ', '浅灰色 ', '1', '0', '/upload/itemColor/light-grey.jpg');
INSERT INTO `prop_value` VALUES ('48', '14', '天蓝色 ', '天蓝色 ', '1', '1', '/upload/itemColor/sky-blue.jpg');
INSERT INTO `prop_value` VALUES ('49', '14', '黄色 ', '黄色 ', '1', '2', '/upload/itemColor/yellow.jpg');
INSERT INTO `prop_value` VALUES ('106', '21', '浅灰色', '浅灰色', '1', '0', null);
INSERT INTO `prop_value` VALUES ('107', '21', '天蓝色', '天蓝色', '1', '1', null);
INSERT INTO `prop_value` VALUES ('108', '21', '黄色', '黄色', '1', '2', null);
INSERT INTO `prop_value` VALUES ('109', '21', '浅黄色', '浅黄色', '1', '4', null);
INSERT INTO `prop_value` VALUES ('110', '21', '浅棕色', '浅棕色', '1', '3', null);
INSERT INTO `prop_value` VALUES ('111', '21', '浅绿色', '浅绿色', '1', '5', null);
INSERT INTO `prop_value` VALUES ('112', '22', '浅灰色', '浅灰色', '1', '0', null);
INSERT INTO `prop_value` VALUES ('113', '22', '天蓝色', '天蓝色', '1', '1', null);
INSERT INTO `prop_value` VALUES ('114', '22', '黄色', '黄色', '1', '2', null);
INSERT INTO `prop_value` VALUES ('115', '22', '浅棕色', '浅棕色', '1', '3', null);
INSERT INTO `prop_value` VALUES ('116', '22', '浅黄色', '浅黄色', '1', '4', null);
INSERT INTO `prop_value` VALUES ('117', '22', '浅绿色', '浅绿色', '1', '5', null);
INSERT INTO `prop_value` VALUES ('118', '23', '浅灰色', '浅灰色', '1', '0', null);
INSERT INTO `prop_value` VALUES ('119', '23', '天蓝色', '天蓝色', '1', '1', null);
INSERT INTO `prop_value` VALUES ('120', '23', '黄色', '黄色', '1', '2', null);
INSERT INTO `prop_value` VALUES ('121', '23', '浅棕色', '浅棕色', '1', '3', null);
INSERT INTO `prop_value` VALUES ('122', '23', '浅黄色', '浅黄色', '1', '4', null);
INSERT INTO `prop_value` VALUES ('123', '23', '浅绿色', '浅绿色', '1', '5', null);
INSERT INTO `prop_value` VALUES ('124', '24', '浅灰色', '浅灰色', '1', '0', null);
INSERT INTO `prop_value` VALUES ('125', '24', '天蓝色', '天蓝色', '1', '1', null);
INSERT INTO `prop_value` VALUES ('126', '24', '黄色', '黄色', '1', '2', null);
INSERT INTO `prop_value` VALUES ('127', '24', '浅棕色', '浅棕色', '1', '3', null);
INSERT INTO `prop_value` VALUES ('128', '24', '浅黄色', '浅黄色', '1', '4', null);
INSERT INTO `prop_value` VALUES ('129', '24', '浅绿色', '浅绿色', '1', '5', null);
INSERT INTO `prop_value` VALUES ('132', '26', '绿色', '绿色', '1', '0', '/upload/itemColor/light-green.jpg');
INSERT INTO `prop_value` VALUES ('133', '26', '黄色', '黄色', '1', '1', '/upload/itemColor/yellow.jpg');
INSERT INTO `prop_value` VALUES ('134', '26', '天蓝色', '天蓝色', '1', '2', '/upload/itemColor/sky-blue.jpg');
INSERT INTO `prop_value` VALUES ('147', '17', '全部房间 ', '全部房间 ', '1', '0', null);
INSERT INTO `prop_value` VALUES ('148', '17', '客厅 ', '客厅 ', '1', '1', null);
INSERT INTO `prop_value` VALUES ('149', '17', '餐厅 ', '餐厅 ', '1', '2', null);
INSERT INTO `prop_value` VALUES ('150', '17', '厨房 ', '厨房 ', '1', '3', null);
INSERT INTO `prop_value` VALUES ('151', '17', '主卧 ', '主卧 ', '1', '4', null);
INSERT INTO `prop_value` VALUES ('152', '17', '次卧 ', '次卧 ', '1', '5', null);
INSERT INTO `prop_value` VALUES ('153', '17', '次卧 1 ', '次卧 1 ', '1', '6', null);
INSERT INTO `prop_value` VALUES ('154', '17', '次卧 2 ', '次卧 2 ', '1', '7', null);
INSERT INTO `prop_value` VALUES ('155', '17', '儿童房 ', '儿童房 ', '1', '8', null);
INSERT INTO `prop_value` VALUES ('156', '17', '储物间 ', '储物间 ', '1', '9', null);
INSERT INTO `prop_value` VALUES ('157', '17', '衣帽间 ', '衣帽间 ', '1', '10', null);
INSERT INTO `prop_value` VALUES ('158', '17', '卫生间 ', '卫生间 ', '1', '11', null);
INSERT INTO `prop_value` VALUES ('159', '17', '阳台 ', '阳台 ', '1', '12', null);
INSERT INTO `prop_value` VALUES ('171', '18', '全部房间', '全部房间', '1', '0', null);
INSERT INTO `prop_value` VALUES ('172', '18', '客厅', '客厅', '1', '1', null);
INSERT INTO `prop_value` VALUES ('173', '18', '餐厅', '餐厅', '1', '2', null);
INSERT INTO `prop_value` VALUES ('174', '18', '厨房', '厨房', '1', '3', null);
INSERT INTO `prop_value` VALUES ('175', '18', '主卧', '主卧', '1', '4', null);
INSERT INTO `prop_value` VALUES ('176', '18', '次卧', '次卧', '1', '5', null);
INSERT INTO `prop_value` VALUES ('177', '18', '次卧 1', '次卧 1', '1', '6', null);
INSERT INTO `prop_value` VALUES ('178', '18', '次卧 2', '次卧 2', '1', '7', null);
INSERT INTO `prop_value` VALUES ('179', '18', '儿童房', '儿童房', '1', '8', null);
INSERT INTO `prop_value` VALUES ('180', '18', '储物间', '储物间', '1', '9', null);
INSERT INTO `prop_value` VALUES ('181', '18', '衣帽间', '衣帽间', '1', '10', null);
INSERT INTO `prop_value` VALUES ('182', '18', '卫生间', '卫生间', '1', '11', null);
INSERT INTO `prop_value` VALUES ('183', '18', '阳台', '阳台', '1', '12', null);
INSERT INTO `prop_value` VALUES ('184', '19', '全部房间', '全部房间', '1', '0', null);
INSERT INTO `prop_value` VALUES ('185', '19', '客厅', '客厅', '1', '1', null);
INSERT INTO `prop_value` VALUES ('186', '19', '餐厅', '餐厅', '1', '2', null);
INSERT INTO `prop_value` VALUES ('187', '19', '厨房', '厨房', '1', '3', null);
INSERT INTO `prop_value` VALUES ('188', '19', '主卧', '主卧', '1', '4', null);
INSERT INTO `prop_value` VALUES ('189', '19', '次卧', '次卧', '1', '5', null);
INSERT INTO `prop_value` VALUES ('190', '19', '次卧 1', '次卧 1', '1', '6', null);
INSERT INTO `prop_value` VALUES ('191', '19', '次卧 2', '次卧 2', '1', '7', null);
INSERT INTO `prop_value` VALUES ('192', '19', '儿童房', '儿童房', '1', '8', null);
INSERT INTO `prop_value` VALUES ('193', '19', '储物间', '储物间', '1', '9', null);
INSERT INTO `prop_value` VALUES ('194', '19', '衣帽间', '衣帽间', '1', '10', null);
INSERT INTO `prop_value` VALUES ('195', '19', '卫生间', '卫生间', '1', '11', null);
INSERT INTO `prop_value` VALUES ('196', '19', '阳台', '阳台', '1', '12', null);
INSERT INTO `prop_value` VALUES ('197', '20', '全部房间', '全部房间', '1', '0', null);
INSERT INTO `prop_value` VALUES ('198', '20', '客厅', '客厅', '1', '1', null);
INSERT INTO `prop_value` VALUES ('199', '20', '餐厅', '餐厅', '1', '2', null);
INSERT INTO `prop_value` VALUES ('200', '20', '厨房', '厨房', '1', '3', null);
INSERT INTO `prop_value` VALUES ('201', '20', '主卧', '主卧', '1', '4', null);
INSERT INTO `prop_value` VALUES ('202', '20', '次卧', '次卧', '1', '5', null);
INSERT INTO `prop_value` VALUES ('203', '20', '次卧 1', '次卧 1', '1', '6', null);
INSERT INTO `prop_value` VALUES ('204', '20', '次卧 2', '次卧 2', '1', '7', null);
INSERT INTO `prop_value` VALUES ('205', '20', '儿童房', '儿童房', '1', '8', null);
INSERT INTO `prop_value` VALUES ('206', '20', '储物间', '储物间', '1', '9', null);
INSERT INTO `prop_value` VALUES ('207', '20', '衣帽间', '衣帽间', '1', '10', null);
INSERT INTO `prop_value` VALUES ('208', '20', '卫生间', '卫生间', '1', '11', null);
INSERT INTO `prop_value` VALUES ('209', '20', '阳台', '阳台', '1', '12', null);
INSERT INTO `prop_value` VALUES ('211', '31', '浅灰色', '浅灰色', '1', '0', '/upload/itemColor/light-grey.jpg');
INSERT INTO `prop_value` VALUES ('212', '31', '天蓝色', '天蓝色', '1', '1', '/upload/itemColor/sky-blue.jpg');
INSERT INTO `prop_value` VALUES ('213', '31', '黄色', '黄色', '1', '2', '/upload/itemColor/yellow.jpg');
INSERT INTO `prop_value` VALUES ('214', '31', '浅棕色', '浅棕色', '1', '3', '/upload/itemColor/light-brown.jpg');
INSERT INTO `prop_value` VALUES ('215', '31', '浅黄色', '浅黄色', '1', '4', '/upload/itemColor/light-yellow.jpg');
INSERT INTO `prop_value` VALUES ('216', '31', '浅绿色', '浅绿色', '1', '5', '/upload/itemColor/light-green.jpg');
INSERT INTO `prop_value` VALUES ('217', '12', '窗帘', '窗帘', '1', '3', null);
INSERT INTO `prop_value` VALUES ('218', '12', '纱窗门', '纱窗门', '1', '4', null);
INSERT INTO `prop_value` VALUES ('219', '12', '沙发清洗/护理', '沙发清洗/护理', '1', '5', null);
INSERT INTO `prop_value` VALUES ('220', '12', '艺术装饰', '艺术装饰', '1', '6', null);
INSERT INTO `prop_value` VALUES ('221', '12', '灯光', '灯光', '1', '7', null);
INSERT INTO `prop_value` VALUES ('222', '32', '经济型 ', '经济型 ', '1', '0', null);
INSERT INTO `prop_value` VALUES ('223', '32', '超值型 ', '超值型 ', '1', '1', null);
INSERT INTO `prop_value` VALUES ('224', '32', '优选型 ', '优选型 ', '1', '2', null);
INSERT INTO `prop_value` VALUES ('225', '32', '尊享型 ', '尊享型 ', '1', '3', null);

-- ----------------------------
-- Table structure for `refund`
-- ----------------------------
DROP TABLE IF EXISTS `refund`;
CREATE TABLE `refund` (
  `refund_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` bigint(20) unsigned NOT NULL,
  `refund_sn` varchar(45) NOT NULL,
  `money` decimal(20,2) NOT NULL,
  `currency` varchar(20) NOT NULL,
  `pay_method` varchar(45) NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `account` varchar(45) NOT NULL,
  `bank` varchar(45) NOT NULL,
  `refund_account` varchar(45) NOT NULL,
  `status` tinyint(1) unsigned NOT NULL,
  `create_time` int(10) unsigned NOT NULL,
  PRIMARY KEY (`refund_id`,`create_time`,`status`),
  KEY `fk_refund_order1_idx` (`order_id`),
  CONSTRAINT `fk_refund_order1` FOREIGN KEY (`order_id`) REFERENCES `order` (`order_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of refund
-- ----------------------------

-- ----------------------------
-- Table structure for `review`
-- ----------------------------
DROP TABLE IF EXISTS `review`;
CREATE TABLE `review` (
  `review_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `create_at` int(10) DEFAULT NULL,
  `content` text,
  `customer_id` int(10) DEFAULT NULL,
  `entity_id` smallint(5) DEFAULT NULL,
  `entity_pk_value` int(10) DEFAULT NULL,
  `rating` tinyint(1) DEFAULT NULL,
  `photos_exit` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`review_id`)
) ENGINE=InnoDB AUTO_INCREMENT=141 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of review
-- ----------------------------
INSERT INTO `review` VALUES ('1', '1231312', '似懂非懂', '7', '1', '28', '2', '0');
INSERT INTO `review` VALUES ('2', '1231312', '士大夫似的', '7', '1', '28', '2', '0');
INSERT INTO `review` VALUES ('3', '2435252', 'dfgdfgdfgdg', '7', '1', '28', '1', '0');
INSERT INTO `review` VALUES ('4', '12313123', 'xcvxcvscfbgdfbaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaxcvxcvscfbgdfbaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaxcvxcvscfbgdfbaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaxcvxcvscfbgdfbaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaxcvxcvscfbgdfbaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaxcvxcvscfbgdfbaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaxcvxcvscfbgdfbaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaxcvxcvscfbgdfbaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaxcvxcvscfbgdfbaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaxcvxcvscfbgdfbaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaxcvxcvscfbgdfbaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaxcvxcvscfbgdfbaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaxcvxcvscfbgdfbaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaxcvxcvscfbgdfbaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaxcvxcvscfbgdfbaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaxcvxcvscfbgdfbaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaxcvxcvscfbgdfbaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaxcvxcvscfbgdfbaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaxcvxcvscfbgdfbaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaxcvxcvscfbgdfbaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaxcvxcvscfbgdfbaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaxcvxcvscfbgdfbaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaxcvxcvscfbgdfbaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaxcvxcvscfbgdfbaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaxcvxcvscfbgdfbaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaxcvxcvscfbgdfbaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaxcvxcvscfbgdfbaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaxcvxcvscfbgdfbaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaxcvxcvscfbgdfbaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaxcvxcvscfbgdfbaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaxcvxcvscfbgdfbaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaxcvxcvscfbgdfbaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaxcvxcvscfbgdfbaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaxcvxcvscfbgdfbaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaxcvxcvscfbgdfbaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaxcvxcvscfbgdfbaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaxcvxcvscfbgdfbaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaxcvxcvscfbgdfbaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaxcvxcvscfbgdfbaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaxcvxcvscfbgdfbaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaxcvxcvscfbgdfbaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaxcvxcvscfbgdfbaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '7', '1', '28', '1', '0');
INSERT INTO `review` VALUES ('5', '2435252', 'dfgdfgdfgdg', '7', '1', '28', '3', '0');
INSERT INTO `review` VALUES ('7', '12341234', '爱上大声地', '8', '2', '1', null, '0');
INSERT INTO `review` VALUES ('9', '1387356848', 'asdasdad', '1', '2', '8', null, '0');
INSERT INTO `review` VALUES ('10', '1387357007', 'sdfsdf', '8', '2', '1', null, '0');
INSERT INTO `review` VALUES ('11', '1387357018', 'dfgdfgdfg', '8', '2', '2', null, '0');
INSERT INTO `review` VALUES ('12', '1387357077', 'sdfsdfsdf', '8', '2', '1', null, '0');
INSERT INTO `review` VALUES ('13', '1387429491', 'niaho', '0', '2', '1', null, '0');
INSERT INTO `review` VALUES ('14', '1387429513', 'asdxsa', '0', '2', '1', null, '0');
INSERT INTO `review` VALUES ('15', '1387429521', 'asxa', '0', '2', '1', null, '0');
INSERT INTO `review` VALUES ('16', '1387430678', 'sdfsdf', '0', '2', '6', null, '0');
INSERT INTO `review` VALUES ('17', '1387431468', 'sdfsdf', '0', '2', '1', null, '0');
INSERT INTO `review` VALUES ('18', '1387431787', 'sdvcx ', '8', '2', '2', null, '0');
INSERT INTO `review` VALUES ('19', '1387431996', 'sdfsdf', '8', '2', '2', null, '0');
INSERT INTO `review` VALUES ('20', '1387432480', 'sdf', '8', '2', '5', null, '0');
INSERT INTO `review` VALUES ('21', '1387432671', 'asdasd', '8', '2', '5', null, '0');
INSERT INTO `review` VALUES ('22', '1387432704', 'sdfsc', '8', '2', '5', null, '0');
INSERT INTO `review` VALUES ('23', '1387432774', 'sdfc', '8', '2', '5', null, '0');
INSERT INTO `review` VALUES ('24', '1387432794', 'dfgvcb', '8', '2', '5', null, '0');
INSERT INTO `review` VALUES ('25', '1387432833', 'sczxcs', '8', '2', '4', null, '0');
INSERT INTO `review` VALUES ('26', '1387432852', 'aszxczxc', '8', '2', '4', null, '0');
INSERT INTO `review` VALUES ('27', '1387432897', 'axz潇洒', '8', '2', '2', null, '0');
INSERT INTO `review` VALUES ('28', '1387433013', '安神定志', '8', '2', '3', null, '0');
INSERT INTO `review` VALUES ('29', '1387433240', '啊山地自行车', '8', '2', '3', null, '0');
INSERT INTO `review` VALUES ('30', '1387433321', '在现场咨询', '8', '2', '3', null, '0');
INSERT INTO `review` VALUES ('31', '1387433558', '现场v型吃', '8', '2', '1', null, '0');
INSERT INTO `review` VALUES ('32', '1387439332', '爱上大声地', '8', '2', '1', null, '0');
INSERT INTO `review` VALUES ('33', '1387439332', '爱上大声地', '8', '2', '1', null, '0');
INSERT INTO `review` VALUES ('34', '1387439332', '爱上大声地', '8', '2', '1', null, '0');
INSERT INTO `review` VALUES ('35', '1387439332', '爱上大声地', '8', '2', '1', null, '0');
INSERT INTO `review` VALUES ('36', '1387439332', '爱上大声地', '8', '2', '1', null, '0');
INSERT INTO `review` VALUES ('37', '1387439332', '爱上大声地', '8', '2', '1', null, '0');
INSERT INTO `review` VALUES ('38', '1387439333', '爱上大声地', '8', '2', '1', null, '0');
INSERT INTO `review` VALUES ('39', '1387439333', '爱上大声地', '8', '2', '1', null, '0');
INSERT INTO `review` VALUES ('40', '1387439333', '爱上大声地', '8', '2', '1', null, '0');
INSERT INTO `review` VALUES ('41', '1387439333', '爱上大声地', '8', '2', '1', null, '0');
INSERT INTO `review` VALUES ('42', '1387439333', '爱上大声地', '8', '2', '1', null, '0');
INSERT INTO `review` VALUES ('43', '1387439333', '爱上大声地', '8', '2', '1', null, '0');
INSERT INTO `review` VALUES ('44', '1387439333', '爱上大声地', '8', '2', '1', null, '0');
INSERT INTO `review` VALUES ('45', '1387439333', '爱上大声地', '8', '2', '1', null, '0');
INSERT INTO `review` VALUES ('46', '1387439333', '爱上大声地', '8', '2', '1', null, '0');
INSERT INTO `review` VALUES ('47', '1387439333', '爱上大声地', '8', '2', '1', null, '0');
INSERT INTO `review` VALUES ('48', '1387439333', '爱上大声地', '8', '2', '1', null, '0');
INSERT INTO `review` VALUES ('49', '1387439333', '爱上大声地', '8', '2', '1', null, '0');
INSERT INTO `review` VALUES ('50', '1387439333', '爱上大声地', '8', '2', '1', null, '0');
INSERT INTO `review` VALUES ('51', '1387439533', '阿什顿', '8', '2', '1', null, '0');
INSERT INTO `review` VALUES ('52', '1387441279', '阿什顿', '8', '2', '4', null, '0');
INSERT INTO `review` VALUES ('53', '1387441314', '大三', '8', '2', '4', null, '0');
INSERT INTO `review` VALUES ('54', '1387441357', '大三', '8', '2', '4', null, '0');
INSERT INTO `review` VALUES ('55', '1387441516', '第三方', '8', '2', '4', null, '0');
INSERT INTO `review` VALUES ('56', '1387441572', '丰盛的', '8', '2', '6', null, '0');
INSERT INTO `review` VALUES ('57', '1387441649', '房顶上', '8', '2', '6', null, '0');
INSERT INTO `review` VALUES ('58', '1387441671', 'v刹下', '8', '2', '3', null, '0');
INSERT INTO `review` VALUES ('59', '1387441793', '许昌', '8', '2', '4', null, '0');
INSERT INTO `review` VALUES ('60', '1387441873', '丰盛的', '8', '2', '4', null, '0');
INSERT INTO `review` VALUES ('61', '1387441932', '张东旭', '8', '2', '4', null, '0');
INSERT INTO `review` VALUES ('62', '1387442297', 'zxczx ', '8', '2', '6', null, '0');
INSERT INTO `review` VALUES ('63', '1387442314', 'xcv ', '8', '2', '6', null, '0');
INSERT INTO `review` VALUES ('64', '1387442733', 'das', '8', '2', '4', null, '0');
INSERT INTO `review` VALUES ('65', '1387442847', 'asdasdasd', '8', '2', '4', null, '0');
INSERT INTO `review` VALUES ('66', '1387443833', 'fds ', '8', '2', '4', null, '0');
INSERT INTO `review` VALUES ('67', '1387443882', 'fsdf', '8', '2', '4', null, '0');
INSERT INTO `review` VALUES ('68', '1387444025', 'dasd', '8', '2', '4', null, '0');
INSERT INTO `review` VALUES ('69', '1387444271', 'xcxczcxzxc', '8', '2', '4', null, '0');
INSERT INTO `review` VALUES ('70', '1387444429', 'heello', '8', '2', '4', null, '0');
INSERT INTO `review` VALUES ('71', '1387444657', 'asdasasda', '8', '2', '4', null, '0');
INSERT INTO `review` VALUES ('72', '1387444701', 'test', '8', '2', '4', null, '0');
INSERT INTO `review` VALUES ('73', '1387444719', 'sadasdasd', '8', '2', '4', null, '0');
INSERT INTO `review` VALUES ('74', '1387444864', 'hello', '8', '2', '6', null, '0');
INSERT INTO `review` VALUES ('75', '1387499701', 'asdawwwwwwwwwwwwwwwwwwwwwww', '8', '2', '4', null, '0');
INSERT INTO `review` VALUES ('76', '1387502201', 'v cx ', '8', '2', '4', null, '0');
INSERT INTO `review` VALUES ('77', '1387504050', 'dfhdfh', '8', '2', '4', null, '0');
INSERT INTO `review` VALUES ('78', '1387508467', 'dfghdfhdfh', '8', '2', null, null, '0');
INSERT INTO `review` VALUES ('79', '1387508500', 'ghjkhjk', '8', '2', null, null, '0');
INSERT INTO `review` VALUES ('80', '1387508519', 'dhdfhdh', '8', '2', null, null, '0');
INSERT INTO `review` VALUES ('81', '1387508558', 'xvbcxbcx', '8', '2', '4', null, '0');
INSERT INTO `review` VALUES ('82', '1387508579', 'fcgnbhvcnb ', '8', '2', '4', null, '0');
INSERT INTO `review` VALUES ('83', '1387508598', 'cx cx cx vcx', '8', '2', null, null, '0');
INSERT INTO `review` VALUES ('84', '1387509088', 'kjli', '8', '2', null, null, '0');
INSERT INTO `review` VALUES ('85', '1387509102', ';\'l;\'k;\'', '8', '2', null, null, '0');
INSERT INTO `review` VALUES ('86', '1387509113', ' nb,bn,bn,,bhj', '8', '2', null, null, '0');
INSERT INTO `review` VALUES ('87', '1387509188', 'sdfwef', '8', '2', null, null, '0');
INSERT INTO `review` VALUES ('88', '1387509198', 'ghkhk', '8', '2', null, null, '0');
INSERT INTO `review` VALUES ('89', '1387509234', 'sdfsdf', '8', '2', '4', null, '0');
INSERT INTO `review` VALUES ('90', '1387509239', 'dsfsdf', '8', '2', '4', null, '0');
INSERT INTO `review` VALUES ('91', '1387509419', 'sadasdas', '8', '2', null, null, '0');
INSERT INTO `review` VALUES ('92', '1387510650', 'cvbvcbcv', '8', '2', '4', null, '0');
INSERT INTO `review` VALUES ('93', '1387510680', 'sdfsd', '8', '2', '4', null, '0');
INSERT INTO `review` VALUES ('94', '1387529949', 'v刹女包', '8', '2', '4', null, '0');
INSERT INTO `review` VALUES ('95', '1387529952', 'vbnvb', '8', '2', '4', null, '0');
INSERT INTO `review` VALUES ('96', '1387529955', 'v刹冰女成本', '8', '2', '6', null, '0');
INSERT INTO `review` VALUES ('97', '1387529959', 'vbn', '8', '2', '4', null, '0');
INSERT INTO `review` VALUES ('98', '1387529961', 'vbnvb', '8', '2', '4', null, '0');
INSERT INTO `review` VALUES ('99', '1387529961', '', '8', '2', '4', null, '0');
INSERT INTO `review` VALUES ('100', '1387529963', 'v被你', '8', '2', '4', null, '0');
INSERT INTO `review` VALUES ('101', '1387529964', 'vbnb', '8', '2', '4', null, '0');
INSERT INTO `review` VALUES ('102', '1387529966', 'vbnvb吧', '8', '2', '4', null, '0');
INSERT INTO `review` VALUES ('103', '1387529968', 'vbnfg', '8', '2', '4', null, '0');
INSERT INTO `review` VALUES ('104', '1387529970', 'vbngfn ', '8', '2', '4', null, '0');
INSERT INTO `review` VALUES ('105', '1387529972', 'vbng', '8', '2', '4', null, '0');
INSERT INTO `review` VALUES ('106', '1387529974', 'vgnfg', '8', '2', '4', null, '0');
INSERT INTO `review` VALUES ('107', '1387530236', 'v刹', '8', '2', '4', null, '0');
INSERT INTO `review` VALUES ('108', '1387530242', '速度非常单纯', '8', '2', '6', null, '0');
INSERT INTO `review` VALUES ('109', '1387530247', '蓄电池v', '8', '2', '3', null, '0');
INSERT INTO `review` VALUES ('110', '1387530254', '许昌', '8', '2', '3', null, '0');
INSERT INTO `review` VALUES ('111', '1388364843', '', '8', '2', '4', null, '0');
INSERT INTO `review` VALUES ('112', '1388367739', 'ghnmgh', '8', '2', '4', null, '0');
INSERT INTO `review` VALUES ('113', '1388368843', 'dfg', '8', '2', '5', null, '0');
INSERT INTO `review` VALUES ('114', '1388372117', 'dfgd', '8', '2', '4', null, '0');
INSERT INTO `review` VALUES ('115', '1388372181', 'hfghfg', '8', '2', '6', null, '0');
INSERT INTO `review` VALUES ('116', '1388372250', 'dergdfg', '8', '2', '4', null, '0');
INSERT INTO `review` VALUES ('117', '1388372255', 'gdfg', '8', '2', '6', null, '0');
INSERT INTO `review` VALUES ('118', '1388372260', 'gdfvcbyhj', '8', '2', '3', null, '0');
INSERT INTO `review` VALUES ('119', '1388393961', 'sdsdf', '8', '2', '4', null, '0');
INSERT INTO `review` VALUES ('120', '1388393965', 'fsdfsdf', '8', '2', '4', null, '0');
INSERT INTO `review` VALUES ('121', '1388394013', 'm', '8', '2', '4', null, '0');
INSERT INTO `review` VALUES ('122', '1388394026', 'jmnmbnmbmbnmbnmbnmbmbnmbnm', '8', '2', '4', null, '0');
INSERT INTO `review` VALUES ('123', '1388394366', 'fsdfsd', '8', '2', '4', null, '0');
INSERT INTO `review` VALUES ('124', '1388394369', 'cvbcv', '8', '2', '4', null, '0');
INSERT INTO `review` VALUES ('125', '1388458934', '54684765', '8', '2', '4', null, '0');
INSERT INTO `review` VALUES ('126', '1389664570', '12', '6', '2', '4', null, '0');
INSERT INTO `review` VALUES ('127', '1389664577', '46', '6', '2', '3', null, '0');
INSERT INTO `review` VALUES ('128', '1389949440', 'dszfsadf', '1', '2', '3', null, '0');
INSERT INTO `review` VALUES ('129', '1389949485', 'dvsffds', '1', '2', '3', null, '0');
INSERT INTO `review` VALUES ('130', '1389949489', 'hfg', '1', '2', '3', null, '0');
INSERT INTO `review` VALUES ('131', '1389950182', 'hjkhjk', '1', '2', '3', null, '0');
INSERT INTO `review` VALUES ('132', '1389950629', 'gdfgdf', '1', '2', '5', null, '0');
INSERT INTO `review` VALUES ('133', '1389950731', null, '1', '2', '5', null, '0');
INSERT INTO `review` VALUES ('134', '1389950807', null, '1', '2', '5', null, '0');
INSERT INTO `review` VALUES ('135', '1389950868', null, '1', '2', '5', null, '0');
INSERT INTO `review` VALUES ('136', '1389950889', null, '1', '2', '5', null, '0');
INSERT INTO `review` VALUES ('137', '1389950904', null, '1', '2', '5', null, '0');
INSERT INTO `review` VALUES ('138', '1389951321', null, '1', '2', '5', null, '0');
INSERT INTO `review` VALUES ('139', '1389951337', null, '1', '2', '5', null, '0');
INSERT INTO `review` VALUES ('140', '1389951509', null, '1', '2', '5', null, '0');

-- ----------------------------
-- Table structure for `review_entity`
-- ----------------------------
DROP TABLE IF EXISTS `review_entity`;
CREATE TABLE `review_entity` (
  `entiy_id` smallint(5) NOT NULL AUTO_INCREMENT,
  `entiy_code` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`entiy_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of review_entity
-- ----------------------------
INSERT INTO `review_entity` VALUES ('1', 'product');
INSERT INTO `review_entity` VALUES ('2', 'review');

-- ----------------------------
-- Table structure for `review_photos`
-- ----------------------------
DROP TABLE IF EXISTS `review_photos`;
CREATE TABLE `review_photos` (
  `image_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `path` varchar(45) DEFAULT NULL,
  `review_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`image_id`),
  KEY `fk_review_image_review1_idx` (`review_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of review_photos
-- ----------------------------

-- ----------------------------
-- Table structure for `section`
-- ----------------------------
DROP TABLE IF EXISTS `section`;
CREATE TABLE `section` (
  `section_id` int(10) NOT NULL AUTO_INCREMENT,
  `section` varchar(255) CHARACTER SET gb2312 NOT NULL,
  PRIMARY KEY (`section_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of section
-- ----------------------------
INSERT INTO `section` VALUES ('1', '华东');
INSERT INTO `section` VALUES ('2', '华中');
INSERT INTO `section` VALUES ('3', '华北');
INSERT INTO `section` VALUES ('4', '华南');
INSERT INTO `section` VALUES ('5', '东北');
INSERT INTO `section` VALUES ('6', '西南');
INSERT INTO `section` VALUES ('7', '西北');

-- ----------------------------
-- Table structure for `settings`
-- ----------------------------
DROP TABLE IF EXISTS `settings`;
CREATE TABLE `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(64) NOT NULL DEFAULT 'system',
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_key` (`category`,`key`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of settings
-- ----------------------------
INSERT INTO `settings` VALUES ('1', 'site', 'name', 's:17:\"Yincart demo site\";');
INSERT INTO `settings` VALUES ('2', 'site', 'domain', 's:0:\"\";');
INSERT INTO `settings` VALUES ('3', 'site', 'googleAPIKey', 's:0:\"\";');
INSERT INTO `settings` VALUES ('4', 'site', 'numSearchResults', 's:0:\"\";');
INSERT INTO `settings` VALUES ('5', 'site', 'defaultLanguage', 's:0:\"\";');
INSERT INTO `settings` VALUES ('6', 'site', 'defaultCurrency', 's:0:\"\";');
INSERT INTO `settings` VALUES ('7', 'site', 'about', 's:0:\"\";');
INSERT INTO `settings` VALUES ('8', 'site', 'statistics', 's:0:\"\";');
INSERT INTO `settings` VALUES ('9', 'seo', 'mainTitle', 's:17:\"Yincart Demo Site\";');
INSERT INTO `settings` VALUES ('10', 'seo', 'mainKwrds', 's:38:\"yincart,cart,shop,mall,b2c,b2b,b2m,c2c\";');
INSERT INTO `settings` VALUES ('11', 'seo', 'mainDescr', 's:53:\"Yincart is a new online shop driven by Yii framework.\";');
INSERT INTO `settings` VALUES ('12', 'mail', 'adminEmail', 's:24:\"xuechaozhang0206@163.com\";');
INSERT INTO `settings` VALUES ('13', 'mail', 'fromReply', 's:1:\"1\";');
INSERT INTO `settings` VALUES ('14', 'mail', 'fromNoReply', 's:1:\"2\";');
INSERT INTO `settings` VALUES ('15', 'mail', 'server', 's:12:\"smtp.163.com\";');
INSERT INTO `settings` VALUES ('16', 'mail', 'port', 's:3:\"994\";');
INSERT INTO `settings` VALUES ('17', 'mail', 'user', 's:16:\"xuechaozhang0206\";');
INSERT INTO `settings` VALUES ('18', 'mail', 'password', 's:9:\"475990465\";');
INSERT INTO `settings` VALUES ('19', 'mail', 'ssl', 's:1:\"1\";');
INSERT INTO `settings` VALUES ('20', 'filter', 'priceLower', 's:0:\"\";');
INSERT INTO `settings` VALUES ('21', 'filter', 'priceUpper', 's:0:\"\";');
INSERT INTO `settings` VALUES ('22', 'site', 'frontDomain', 's:12:\"frontend.com\";');
INSERT INTO `settings` VALUES ('23', 'site', 'backDomain', 's:11:\"backend.com\";');
INSERT INTO `settings` VALUES ('24', 'site', 'shopDomain', 's:11:\"shopend.com\";');
INSERT INTO `settings` VALUES ('25', 'site', 'imageDomain', 's:9:\"image.com\";');
INSERT INTO `settings` VALUES ('26', 'site', 'apiDomain', 's:10:\"apiend.com\";');
INSERT INTO `settings` VALUES ('27', 'maintain', 'maintain', 's:0:\"\";');
INSERT INTO `settings` VALUES ('28', 'site', 'logo', 's:59:\"/basic/upload/item/image/20130620/20130620044053_33312.jpeg\";');

-- ----------------------------
-- Table structure for `shipping`
-- ----------------------------
DROP TABLE IF EXISTS `shipping`;
CREATE TABLE `shipping` (
  `ship_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` bigint(20) unsigned NOT NULL,
  `ship_sn` varchar(45) DEFAULT NULL,
  `type` enum('return','delivery') DEFAULT NULL,
  `ship_method` varchar(45) DEFAULT NULL,
  `ship_fee` decimal(10,2) DEFAULT NULL,
  `op_name` varchar(45) DEFAULT NULL,
  `status` tinyint(1) unsigned DEFAULT NULL,
  `receiver_name` varchar(45) DEFAULT NULL,
  `receiver_phone` varchar(45) DEFAULT NULL,
  `receiver_mobile` varchar(45) DEFAULT NULL,
  `location` text,
  `create_time` int(10) unsigned DEFAULT NULL,
  `update_time` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`ship_id`),
  KEY `fk_shipping_order1_idx` (`order_id`),
  CONSTRAINT `fk_shipping_order1` FOREIGN KEY (`order_id`) REFERENCES `order` (`order_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='物流数据结构 ';

-- ----------------------------
-- Records of shipping
-- ----------------------------

-- ----------------------------
-- Table structure for `shipping_item`
-- ----------------------------
DROP TABLE IF EXISTS `shipping_item`;
CREATE TABLE `shipping_item` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ship_id` int(10) unsigned NOT NULL,
  `item_id` int(10) unsigned DEFAULT NULL,
  `item_sn` varchar(45) DEFAULT NULL,
  `item_title` varchar(255) DEFAULT NULL,
  `num` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_delivery_item_delivery1_idx` (`ship_id`),
  CONSTRAINT `fk_delivery_item_delivery1` FOREIGN KEY (`ship_id`) REFERENCES `shipping` (`ship_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of shipping_item
-- ----------------------------

-- ----------------------------
-- Table structure for `shipping_method`
-- ----------------------------
DROP TABLE IF EXISTS `shipping_method`;
CREATE TABLE `shipping_method` (
  `shipping_method_id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(45) DEFAULT NULL,
  `name` varchar(120) DEFAULT NULL,
  `desc` text,
  `enabled` tinyint(1) unsigned DEFAULT '0',
  `is_cod` tinyint(1) unsigned DEFAULT '0',
  `sort_order` tinyint(3) unsigned DEFAULT '255',
  PRIMARY KEY (`shipping_method_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of shipping_method
-- ----------------------------

-- ----------------------------
-- Table structure for `sku`
-- ----------------------------
DROP TABLE IF EXISTS `sku`;
CREATE TABLE `sku` (
  `sku_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'SKU ID',
  `item_id` int(10) unsigned NOT NULL COMMENT 'Item ID',
  `props` longtext NOT NULL COMMENT 'sku的销售属性组合字符串（颜色，大小，等等，可通过类目API获取某类目下的销售属性）,格式是p1:v1;p2:v2',
  `props_name` longtext NOT NULL COMMENT 'sku所对应的销售属性的中文名字串，格式如：pid1:vid1:pid_name1:vid_name1;pid2:vid2:pid_name2:vid_name2……',
  `stock` int(10) NOT NULL DEFAULT '999999999',
  `price` decimal(10,2) unsigned NOT NULL COMMENT 'sku的商品价格',
  `outer_id` varchar(45) NOT NULL COMMENT '商家设置的外部id',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT 'sku状态。 normal:正常 ；delete:删除',
  PRIMARY KEY (`sku_id`),
  KEY `fk_sku_item1_idx` (`item_id`),
  CONSTRAINT `fk_sku_item1` FOREIGN KEY (`item_id`) REFERENCES `item` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=1110 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sku
-- ----------------------------
INSERT INTO `sku` VALUES ('94', '62', '{\"12\":\"12:32\"}', '{\"\\u670d\\u52a1\":\"\\u670d\\u52a1:\\u6cb9\\u70df\\u673a\\u6e05\\u6d17 \"}', '999999999', '1490.00', '1', '1');
INSERT INTO `sku` VALUES ('95', '62', '{\"12\":\"12:33\"}', '{\"\\u670d\\u52a1\":\"\\u670d\\u52a1:\\u7a7a\\u8c03\\u6e05\\u6d17 \"}', '999999999', '500.00', '1', '1');
INSERT INTO `sku` VALUES ('96', '62', '{\"12\":\"12:34\"}', '{\"\\u670d\\u52a1\":\"\\u670d\\u52a1:\\u51b0\\u7bb1\\u6e05\\u6d17 \"}', '999999999', '240.00', '1', '1');
INSERT INTO `sku` VALUES ('451', '77', '{\"26\":\"26:132\"}', '{\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u7eff\\u8272\"}', '999999999', '120.00', '123', '1');
INSERT INTO `sku` VALUES ('452', '77', '{\"26\":\"26:133\"}', '{\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272\"}', '999999999', '125.00', '123', '1');
INSERT INTO `sku` VALUES ('453', '77', '{\"26\":\"26:134\"}', '{\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\"}', '999999999', '130.00', '123', '1');
INSERT INTO `sku` VALUES ('454', '78', '{\"26\":\"26:132\"}', '{\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u7eff\\u8272\"}', '999999999', '130.00', '123', '1');
INSERT INTO `sku` VALUES ('455', '78', '{\"26\":\"26:133\"}', '{\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272\"}', '999999999', '135.00', '123', '1');
INSERT INTO `sku` VALUES ('456', '78', '{\"26\":\"26:134\"}', '{\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\"}', '999999999', '140.00', '123', '1');
INSERT INTO `sku` VALUES ('457', '79', '{\"26\":\"26:132\"}', '{\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u7eff\\u8272\"}', '999999999', '135.00', '123', '1');
INSERT INTO `sku` VALUES ('458', '79', '{\"26\":\"26:133\"}', '{\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272\"}', '999999999', '141.00', '123', '1');
INSERT INTO `sku` VALUES ('459', '79', '{\"26\":\"26:134\"}', '{\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\"}', '999999999', '142.00', '123', '1');
INSERT INTO `sku` VALUES ('652', '66', '{\"17\":\"17:147\",\"21\":\"21:106\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u5168\\u90e8\\u623f\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\"}', '999999999', '100.00', '1', '1');
INSERT INTO `sku` VALUES ('653', '66', '{\"17\":\"17:147\",\"21\":\"21:107\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u5168\\u90e8\\u623f\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\"}', '999999999', '100.00', '1', '1');
INSERT INTO `sku` VALUES ('654', '66', '{\"17\":\"17:147\",\"21\":\"21:108\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u5168\\u90e8\\u623f\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272\"}', '999999999', '100.00', '1', '1');
INSERT INTO `sku` VALUES ('655', '66', '{\"17\":\"17:147\",\"21\":\"21:109\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u5168\\u90e8\\u623f\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\"}', '999999999', '100.00', '1', '1');
INSERT INTO `sku` VALUES ('656', '66', '{\"17\":\"17:147\",\"21\":\"21:110\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u5168\\u90e8\\u623f\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\"}', '999999999', '100.00', '1', '1');
INSERT INTO `sku` VALUES ('657', '66', '{\"17\":\"17:147\",\"21\":\"21:111\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u5168\\u90e8\\u623f\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\"}', '999999999', '100.00', '1', '1');
INSERT INTO `sku` VALUES ('658', '66', '{\"17\":\"17:148\",\"21\":\"21:106\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u5ba2\\u5385\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\"}', '999999999', '110.00', '1', '1');
INSERT INTO `sku` VALUES ('659', '66', '{\"17\":\"17:148\",\"21\":\"21:107\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u5ba2\\u5385\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\"}', '999999999', '110.00', '1', '1');
INSERT INTO `sku` VALUES ('660', '66', '{\"17\":\"17:148\",\"21\":\"21:108\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u5ba2\\u5385\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272\"}', '999999999', '110.00', '1', '1');
INSERT INTO `sku` VALUES ('661', '66', '{\"17\":\"17:148\",\"21\":\"21:109\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u5ba2\\u5385\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\"}', '999999999', '110.00', '1', '1');
INSERT INTO `sku` VALUES ('662', '66', '{\"17\":\"17:148\",\"21\":\"21:110\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u5ba2\\u5385\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\"}', '999999999', '110.00', '1', '1');
INSERT INTO `sku` VALUES ('663', '66', '{\"17\":\"17:148\",\"21\":\"21:111\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u5ba2\\u5385\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\"}', '999999999', '110.00', '1', '1');
INSERT INTO `sku` VALUES ('664', '66', '{\"17\":\"17:149\",\"21\":\"21:106\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u9910\\u5385\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\"}', '999999999', '112.00', '1', '1');
INSERT INTO `sku` VALUES ('665', '66', '{\"17\":\"17:149\",\"21\":\"21:107\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u9910\\u5385\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\"}', '999999999', '112.00', '1', '1');
INSERT INTO `sku` VALUES ('666', '66', '{\"17\":\"17:149\",\"21\":\"21:108\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u9910\\u5385\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272\"}', '999999999', '112.00', '1', '1');
INSERT INTO `sku` VALUES ('667', '66', '{\"17\":\"17:149\",\"21\":\"21:109\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u9910\\u5385\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\"}', '999999999', '112.00', '1', '1');
INSERT INTO `sku` VALUES ('668', '66', '{\"17\":\"17:149\",\"21\":\"21:110\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u9910\\u5385\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\"}', '999999999', '112.00', '1', '1');
INSERT INTO `sku` VALUES ('669', '66', '{\"17\":\"17:149\",\"21\":\"21:111\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u9910\\u5385\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\"}', '999999999', '112.00', '1', '1');
INSERT INTO `sku` VALUES ('670', '66', '{\"17\":\"17:150\",\"21\":\"21:106\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u53a8\\u623f\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\"}', '999999999', '114.00', '1', '1');
INSERT INTO `sku` VALUES ('671', '66', '{\"17\":\"17:150\",\"21\":\"21:107\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u53a8\\u623f\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\"}', '999999999', '114.00', '1', '1');
INSERT INTO `sku` VALUES ('672', '66', '{\"17\":\"17:150\",\"21\":\"21:108\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u53a8\\u623f\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272\"}', '999999999', '114.00', '1', '1');
INSERT INTO `sku` VALUES ('673', '66', '{\"17\":\"17:150\",\"21\":\"21:109\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u53a8\\u623f\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\"}', '999999999', '114.00', '1', '1');
INSERT INTO `sku` VALUES ('674', '66', '{\"17\":\"17:150\",\"21\":\"21:110\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u53a8\\u623f\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\"}', '999999999', '114.00', '1', '1');
INSERT INTO `sku` VALUES ('675', '66', '{\"17\":\"17:150\",\"21\":\"21:111\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u53a8\\u623f\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\"}', '999999999', '114.00', '1', '1');
INSERT INTO `sku` VALUES ('676', '66', '{\"17\":\"17:151\",\"21\":\"21:106\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u4e3b\\u5367\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\"}', '999999999', '116.00', '1', '1');
INSERT INTO `sku` VALUES ('677', '66', '{\"17\":\"17:151\",\"21\":\"21:107\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u4e3b\\u5367\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\"}', '999999999', '116.00', '1', '1');
INSERT INTO `sku` VALUES ('678', '66', '{\"17\":\"17:151\",\"21\":\"21:108\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u4e3b\\u5367\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272\"}', '999999999', '116.00', '1', '1');
INSERT INTO `sku` VALUES ('679', '66', '{\"17\":\"17:151\",\"21\":\"21:109\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u4e3b\\u5367\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\"}', '999999999', '116.00', '1', '1');
INSERT INTO `sku` VALUES ('680', '66', '{\"17\":\"17:151\",\"21\":\"21:110\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u4e3b\\u5367\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\"}', '999999999', '116.00', '1', '1');
INSERT INTO `sku` VALUES ('681', '66', '{\"17\":\"17:151\",\"21\":\"21:111\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u4e3b\\u5367\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\"}', '999999999', '116.00', '1', '1');
INSERT INTO `sku` VALUES ('682', '66', '{\"17\":\"17:152\",\"21\":\"21:106\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\"}', '999999999', '118.00', '1', '1');
INSERT INTO `sku` VALUES ('683', '66', '{\"17\":\"17:152\",\"21\":\"21:107\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\"}', '999999999', '118.00', '1', '1');
INSERT INTO `sku` VALUES ('684', '66', '{\"17\":\"17:152\",\"21\":\"21:108\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272\"}', '999999999', '118.00', '1', '1');
INSERT INTO `sku` VALUES ('685', '66', '{\"17\":\"17:152\",\"21\":\"21:109\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\"}', '999999999', '118.00', '1', '1');
INSERT INTO `sku` VALUES ('686', '66', '{\"17\":\"17:152\",\"21\":\"21:110\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\"}', '999999999', '118.00', '1', '1');
INSERT INTO `sku` VALUES ('687', '66', '{\"17\":\"17:152\",\"21\":\"21:111\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\"}', '999999999', '118.00', '1', '1');
INSERT INTO `sku` VALUES ('688', '66', '{\"17\":\"17:153\",\"21\":\"21:106\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367 1\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\"}', '999999999', '120.00', '1', '1');
INSERT INTO `sku` VALUES ('689', '66', '{\"17\":\"17:153\",\"21\":\"21:107\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367 1\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\"}', '999999999', '120.00', '1', '1');
INSERT INTO `sku` VALUES ('690', '66', '{\"17\":\"17:153\",\"21\":\"21:108\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367 1\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272\"}', '999999999', '120.00', '1', '1');
INSERT INTO `sku` VALUES ('691', '66', '{\"17\":\"17:153\",\"21\":\"21:109\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367 1\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\"}', '999999999', '120.00', '1', '1');
INSERT INTO `sku` VALUES ('692', '66', '{\"17\":\"17:153\",\"21\":\"21:110\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367 1\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\"}', '999999999', '120.00', '1', '1');
INSERT INTO `sku` VALUES ('693', '66', '{\"17\":\"17:153\",\"21\":\"21:111\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367 1\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\"}', '999999999', '120.00', '1', '1');
INSERT INTO `sku` VALUES ('694', '66', '{\"17\":\"17:154\",\"21\":\"21:106\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367 2\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\"}', '999999999', '122.00', '1', '1');
INSERT INTO `sku` VALUES ('695', '66', '{\"17\":\"17:154\",\"21\":\"21:107\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367 2\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\"}', '999999999', '122.00', '1', '1');
INSERT INTO `sku` VALUES ('696', '66', '{\"17\":\"17:154\",\"21\":\"21:108\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367 2\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272\"}', '999999999', '122.00', '1', '1');
INSERT INTO `sku` VALUES ('697', '66', '{\"17\":\"17:154\",\"21\":\"21:109\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367 2\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\"}', '999999999', '122.00', '1', '1');
INSERT INTO `sku` VALUES ('698', '66', '{\"17\":\"17:154\",\"21\":\"21:110\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367 2\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\"}', '999999999', '122.00', '1', '1');
INSERT INTO `sku` VALUES ('699', '66', '{\"17\":\"17:154\",\"21\":\"21:111\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367 2\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\"}', '999999999', '122.00', '1', '1');
INSERT INTO `sku` VALUES ('700', '66', '{\"17\":\"17:155\",\"21\":\"21:106\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u513f\\u7ae5\\u623f\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\"}', '999999999', '124.00', '1', '1');
INSERT INTO `sku` VALUES ('701', '66', '{\"17\":\"17:155\",\"21\":\"21:107\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u513f\\u7ae5\\u623f\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\"}', '999999999', '124.00', '1', '1');
INSERT INTO `sku` VALUES ('702', '66', '{\"17\":\"17:155\",\"21\":\"21:108\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u513f\\u7ae5\\u623f\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272\"}', '999999999', '124.00', '1', '1');
INSERT INTO `sku` VALUES ('703', '66', '{\"17\":\"17:155\",\"21\":\"21:109\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u513f\\u7ae5\\u623f\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\"}', '999999999', '124.00', '1', '1');
INSERT INTO `sku` VALUES ('704', '66', '{\"17\":\"17:155\",\"21\":\"21:110\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u513f\\u7ae5\\u623f\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\"}', '999999999', '124.00', '1', '1');
INSERT INTO `sku` VALUES ('705', '66', '{\"17\":\"17:155\",\"21\":\"21:111\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u513f\\u7ae5\\u623f\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\"}', '999999999', '124.00', '1', '1');
INSERT INTO `sku` VALUES ('706', '66', '{\"17\":\"17:156\",\"21\":\"21:106\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u50a8\\u7269\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\"}', '999999999', '128.00', '1', '1');
INSERT INTO `sku` VALUES ('707', '66', '{\"17\":\"17:156\",\"21\":\"21:107\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u50a8\\u7269\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\"}', '999999999', '128.00', '1', '1');
INSERT INTO `sku` VALUES ('708', '66', '{\"17\":\"17:156\",\"21\":\"21:108\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u50a8\\u7269\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272\"}', '999999999', '128.00', '1', '1');
INSERT INTO `sku` VALUES ('709', '66', '{\"17\":\"17:156\",\"21\":\"21:109\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u50a8\\u7269\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\"}', '999999999', '128.00', '1', '1');
INSERT INTO `sku` VALUES ('710', '66', '{\"17\":\"17:156\",\"21\":\"21:110\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u50a8\\u7269\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\"}', '999999999', '128.00', '1', '1');
INSERT INTO `sku` VALUES ('711', '66', '{\"17\":\"17:156\",\"21\":\"21:111\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u50a8\\u7269\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\"}', '999999999', '128.00', '1', '1');
INSERT INTO `sku` VALUES ('712', '66', '{\"17\":\"17:157\",\"21\":\"21:106\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u8863\\u5e3d\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\"}', '999999999', '130.00', '1', '1');
INSERT INTO `sku` VALUES ('713', '66', '{\"17\":\"17:157\",\"21\":\"21:107\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u8863\\u5e3d\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\"}', '999999999', '130.00', '1', '1');
INSERT INTO `sku` VALUES ('714', '66', '{\"17\":\"17:157\",\"21\":\"21:108\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u8863\\u5e3d\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272\"}', '999999999', '130.00', '1', '1');
INSERT INTO `sku` VALUES ('715', '66', '{\"17\":\"17:157\",\"21\":\"21:109\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u8863\\u5e3d\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\"}', '999999999', '130.00', '1', '1');
INSERT INTO `sku` VALUES ('716', '66', '{\"17\":\"17:157\",\"21\":\"21:110\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u8863\\u5e3d\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\"}', '999999999', '130.00', '1', '1');
INSERT INTO `sku` VALUES ('717', '66', '{\"17\":\"17:157\",\"21\":\"21:111\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u8863\\u5e3d\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\"}', '999999999', '130.00', '1', '1');
INSERT INTO `sku` VALUES ('718', '66', '{\"17\":\"17:158\",\"21\":\"21:106\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u536b\\u751f\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\"}', '999999999', '132.00', '1', '1');
INSERT INTO `sku` VALUES ('719', '66', '{\"17\":\"17:158\",\"21\":\"21:107\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u536b\\u751f\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\"}', '999999999', '132.00', '1', '1');
INSERT INTO `sku` VALUES ('720', '66', '{\"17\":\"17:158\",\"21\":\"21:108\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u536b\\u751f\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272\"}', '999999999', '132.00', '1', '1');
INSERT INTO `sku` VALUES ('721', '66', '{\"17\":\"17:158\",\"21\":\"21:109\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u536b\\u751f\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\"}', '999999999', '132.00', '1', '1');
INSERT INTO `sku` VALUES ('722', '66', '{\"17\":\"17:158\",\"21\":\"21:110\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u536b\\u751f\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\"}', '999999999', '132.00', '1', '1');
INSERT INTO `sku` VALUES ('723', '66', '{\"17\":\"17:158\",\"21\":\"21:111\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u536b\\u751f\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\"}', '999999999', '132.00', '1', '1');
INSERT INTO `sku` VALUES ('724', '66', '{\"17\":\"17:159\",\"21\":\"21:106\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u9633\\u53f0\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\"}', '999999999', '134.00', '1', '1');
INSERT INTO `sku` VALUES ('725', '66', '{\"17\":\"17:159\",\"21\":\"21:107\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u9633\\u53f0\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\"}', '999999999', '134.00', '1', '1');
INSERT INTO `sku` VALUES ('726', '66', '{\"17\":\"17:159\",\"21\":\"21:108\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u9633\\u53f0\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272\"}', '999999999', '134.00', '1', '1');
INSERT INTO `sku` VALUES ('727', '66', '{\"17\":\"17:159\",\"21\":\"21:109\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u9633\\u53f0\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\"}', '999999999', '134.00', '1', '1');
INSERT INTO `sku` VALUES ('728', '66', '{\"17\":\"17:159\",\"21\":\"21:110\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u9633\\u53f0\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\"}', '999999999', '134.00', '1', '1');
INSERT INTO `sku` VALUES ('729', '66', '{\"17\":\"17:159\",\"21\":\"21:111\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u9633\\u53f0\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\"}', '999999999', '134.00', '1', '1');
INSERT INTO `sku` VALUES ('748', '67', '{\"18\":\"18:171\",\"22\":\"22:112\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u5168\\u90e8\\u623f\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('749', '67', '{\"18\":\"18:171\",\"22\":\"22:113\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u5168\\u90e8\\u623f\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('750', '67', '{\"18\":\"18:171\",\"22\":\"22:114\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u5168\\u90e8\\u623f\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('751', '67', '{\"18\":\"18:171\",\"22\":\"22:115\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u5168\\u90e8\\u623f\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('752', '67', '{\"18\":\"18:171\",\"22\":\"22:116\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u5168\\u90e8\\u623f\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('753', '67', '{\"18\":\"18:171\",\"22\":\"22:117\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u5168\\u90e8\\u623f\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('754', '67', '{\"18\":\"18:172\",\"22\":\"22:112\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u5ba2\\u5385\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('755', '67', '{\"18\":\"18:172\",\"22\":\"22:113\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u5ba2\\u5385\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('756', '67', '{\"18\":\"18:172\",\"22\":\"22:114\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u5ba2\\u5385\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('757', '67', '{\"18\":\"18:172\",\"22\":\"22:115\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u5ba2\\u5385\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('758', '67', '{\"18\":\"18:172\",\"22\":\"22:116\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u5ba2\\u5385\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('759', '67', '{\"18\":\"18:172\",\"22\":\"22:117\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u5ba2\\u5385\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('760', '67', '{\"18\":\"18:173\",\"22\":\"22:112\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u9910\\u5385\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('761', '67', '{\"18\":\"18:173\",\"22\":\"22:113\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u9910\\u5385\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('762', '67', '{\"18\":\"18:173\",\"22\":\"22:114\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u9910\\u5385\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('763', '67', '{\"18\":\"18:173\",\"22\":\"22:115\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u9910\\u5385\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('764', '67', '{\"18\":\"18:173\",\"22\":\"22:116\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u9910\\u5385\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('765', '67', '{\"18\":\"18:173\",\"22\":\"22:117\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u9910\\u5385\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('766', '67', '{\"18\":\"18:174\",\"22\":\"22:112\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u53a8\\u623f\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('767', '67', '{\"18\":\"18:174\",\"22\":\"22:113\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u53a8\\u623f\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('768', '67', '{\"18\":\"18:174\",\"22\":\"22:114\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u53a8\\u623f\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('769', '67', '{\"18\":\"18:174\",\"22\":\"22:115\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u53a8\\u623f\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('770', '67', '{\"18\":\"18:174\",\"22\":\"22:116\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u53a8\\u623f\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('771', '67', '{\"18\":\"18:174\",\"22\":\"22:117\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u53a8\\u623f\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('772', '67', '{\"18\":\"18:175\",\"22\":\"22:112\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u4e3b\\u5367\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('773', '67', '{\"18\":\"18:175\",\"22\":\"22:113\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u4e3b\\u5367\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('774', '67', '{\"18\":\"18:175\",\"22\":\"22:114\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u4e3b\\u5367\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('775', '67', '{\"18\":\"18:175\",\"22\":\"22:115\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u4e3b\\u5367\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('776', '67', '{\"18\":\"18:175\",\"22\":\"22:116\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u4e3b\\u5367\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('777', '67', '{\"18\":\"18:175\",\"22\":\"22:117\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u4e3b\\u5367\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('778', '67', '{\"18\":\"18:176\",\"22\":\"22:112\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('779', '67', '{\"18\":\"18:176\",\"22\":\"22:113\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('780', '67', '{\"18\":\"18:176\",\"22\":\"22:114\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('781', '67', '{\"18\":\"18:176\",\"22\":\"22:115\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('782', '67', '{\"18\":\"18:176\",\"22\":\"22:116\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('783', '67', '{\"18\":\"18:176\",\"22\":\"22:117\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('784', '67', '{\"18\":\"18:177\",\"22\":\"22:112\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367 1\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('785', '67', '{\"18\":\"18:177\",\"22\":\"22:113\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367 1\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('786', '67', '{\"18\":\"18:177\",\"22\":\"22:114\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367 1\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('787', '67', '{\"18\":\"18:177\",\"22\":\"22:115\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367 1\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('788', '67', '{\"18\":\"18:177\",\"22\":\"22:116\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367 1\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('789', '67', '{\"18\":\"18:177\",\"22\":\"22:117\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367 1\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('790', '67', '{\"18\":\"18:178\",\"22\":\"22:112\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367 2\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('791', '67', '{\"18\":\"18:178\",\"22\":\"22:113\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367 2\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('792', '67', '{\"18\":\"18:178\",\"22\":\"22:114\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367 2\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('793', '67', '{\"18\":\"18:178\",\"22\":\"22:115\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367 2\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('794', '67', '{\"18\":\"18:178\",\"22\":\"22:116\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367 2\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('795', '67', '{\"18\":\"18:178\",\"22\":\"22:117\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367 2\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('796', '67', '{\"18\":\"18:179\",\"22\":\"22:112\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u513f\\u7ae5\\u623f\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('797', '67', '{\"18\":\"18:179\",\"22\":\"22:113\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u513f\\u7ae5\\u623f\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('798', '67', '{\"18\":\"18:179\",\"22\":\"22:114\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u513f\\u7ae5\\u623f\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('799', '67', '{\"18\":\"18:179\",\"22\":\"22:115\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u513f\\u7ae5\\u623f\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('800', '67', '{\"18\":\"18:179\",\"22\":\"22:116\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u513f\\u7ae5\\u623f\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('801', '67', '{\"18\":\"18:179\",\"22\":\"22:117\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u513f\\u7ae5\\u623f\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('802', '67', '{\"18\":\"18:180\",\"22\":\"22:112\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u50a8\\u7269\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('803', '67', '{\"18\":\"18:180\",\"22\":\"22:113\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u50a8\\u7269\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('804', '67', '{\"18\":\"18:180\",\"22\":\"22:114\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u50a8\\u7269\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('805', '67', '{\"18\":\"18:180\",\"22\":\"22:115\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u50a8\\u7269\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('806', '67', '{\"18\":\"18:180\",\"22\":\"22:116\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u50a8\\u7269\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('807', '67', '{\"18\":\"18:180\",\"22\":\"22:117\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u50a8\\u7269\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('808', '67', '{\"18\":\"18:181\",\"22\":\"22:112\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u8863\\u5e3d\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('809', '67', '{\"18\":\"18:181\",\"22\":\"22:113\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u8863\\u5e3d\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('810', '67', '{\"18\":\"18:181\",\"22\":\"22:114\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u8863\\u5e3d\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('811', '67', '{\"18\":\"18:181\",\"22\":\"22:115\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u8863\\u5e3d\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('812', '67', '{\"18\":\"18:181\",\"22\":\"22:116\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u8863\\u5e3d\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('813', '67', '{\"18\":\"18:181\",\"22\":\"22:117\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u8863\\u5e3d\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('814', '67', '{\"18\":\"18:182\",\"22\":\"22:112\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u536b\\u751f\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('815', '67', '{\"18\":\"18:182\",\"22\":\"22:113\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u536b\\u751f\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('816', '67', '{\"18\":\"18:182\",\"22\":\"22:114\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u536b\\u751f\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('817', '67', '{\"18\":\"18:182\",\"22\":\"22:115\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u536b\\u751f\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('818', '67', '{\"18\":\"18:182\",\"22\":\"22:116\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u536b\\u751f\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('819', '67', '{\"18\":\"18:182\",\"22\":\"22:117\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u536b\\u751f\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('820', '67', '{\"18\":\"18:183\",\"22\":\"22:112\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u9633\\u53f0\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('821', '67', '{\"18\":\"18:183\",\"22\":\"22:113\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u9633\\u53f0\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('822', '67', '{\"18\":\"18:183\",\"22\":\"22:114\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u9633\\u53f0\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('823', '67', '{\"18\":\"18:183\",\"22\":\"22:115\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u9633\\u53f0\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('824', '67', '{\"18\":\"18:183\",\"22\":\"22:116\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u9633\\u53f0\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('825', '67', '{\"18\":\"18:183\",\"22\":\"22:117\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u9633\\u53f0\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('826', '68', '{\"19\":\"19:184\",\"23\":\"23:118\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u5168\\u90e8\\u623f\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('827', '68', '{\"19\":\"19:184\",\"23\":\"23:119\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u5168\\u90e8\\u623f\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('828', '68', '{\"19\":\"19:184\",\"23\":\"23:120\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u5168\\u90e8\\u623f\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('829', '68', '{\"19\":\"19:184\",\"23\":\"23:121\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u5168\\u90e8\\u623f\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('830', '68', '{\"19\":\"19:184\",\"23\":\"23:122\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u5168\\u90e8\\u623f\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('831', '68', '{\"19\":\"19:184\",\"23\":\"23:123\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u5168\\u90e8\\u623f\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('832', '68', '{\"19\":\"19:185\",\"23\":\"23:118\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u5ba2\\u5385\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('833', '68', '{\"19\":\"19:185\",\"23\":\"23:119\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u5ba2\\u5385\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('834', '68', '{\"19\":\"19:185\",\"23\":\"23:120\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u5ba2\\u5385\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('835', '68', '{\"19\":\"19:185\",\"23\":\"23:121\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u5ba2\\u5385\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('836', '68', '{\"19\":\"19:185\",\"23\":\"23:122\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u5ba2\\u5385\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('837', '68', '{\"19\":\"19:185\",\"23\":\"23:123\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u5ba2\\u5385\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('838', '68', '{\"19\":\"19:186\",\"23\":\"23:118\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u9910\\u5385\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('839', '68', '{\"19\":\"19:186\",\"23\":\"23:119\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u9910\\u5385\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('840', '68', '{\"19\":\"19:186\",\"23\":\"23:120\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u9910\\u5385\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('841', '68', '{\"19\":\"19:186\",\"23\":\"23:121\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u9910\\u5385\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('842', '68', '{\"19\":\"19:186\",\"23\":\"23:122\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u9910\\u5385\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('843', '68', '{\"19\":\"19:186\",\"23\":\"23:123\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u9910\\u5385\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('844', '68', '{\"19\":\"19:187\",\"23\":\"23:118\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u53a8\\u623f\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('845', '68', '{\"19\":\"19:187\",\"23\":\"23:119\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u53a8\\u623f\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('846', '68', '{\"19\":\"19:187\",\"23\":\"23:120\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u53a8\\u623f\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('847', '68', '{\"19\":\"19:187\",\"23\":\"23:121\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u53a8\\u623f\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('848', '68', '{\"19\":\"19:187\",\"23\":\"23:122\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u53a8\\u623f\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('849', '68', '{\"19\":\"19:187\",\"23\":\"23:123\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u53a8\\u623f\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('850', '68', '{\"19\":\"19:188\",\"23\":\"23:118\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u4e3b\\u5367\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('851', '68', '{\"19\":\"19:188\",\"23\":\"23:119\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u4e3b\\u5367\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('852', '68', '{\"19\":\"19:188\",\"23\":\"23:120\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u4e3b\\u5367\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('853', '68', '{\"19\":\"19:188\",\"23\":\"23:121\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u4e3b\\u5367\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('854', '68', '{\"19\":\"19:188\",\"23\":\"23:122\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u4e3b\\u5367\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('855', '68', '{\"19\":\"19:188\",\"23\":\"23:123\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u4e3b\\u5367\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('856', '68', '{\"19\":\"19:189\",\"23\":\"23:118\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('857', '68', '{\"19\":\"19:189\",\"23\":\"23:119\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('858', '68', '{\"19\":\"19:189\",\"23\":\"23:120\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('859', '68', '{\"19\":\"19:189\",\"23\":\"23:121\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('860', '68', '{\"19\":\"19:189\",\"23\":\"23:122\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('861', '68', '{\"19\":\"19:189\",\"23\":\"23:123\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('862', '68', '{\"19\":\"19:190\",\"23\":\"23:118\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367 1\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('863', '68', '{\"19\":\"19:190\",\"23\":\"23:119\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367 1\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('864', '68', '{\"19\":\"19:190\",\"23\":\"23:120\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367 1\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('865', '68', '{\"19\":\"19:190\",\"23\":\"23:121\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367 1\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('866', '68', '{\"19\":\"19:190\",\"23\":\"23:122\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367 1\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('867', '68', '{\"19\":\"19:190\",\"23\":\"23:123\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367 1\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('868', '68', '{\"19\":\"19:191\",\"23\":\"23:118\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367 2\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('869', '68', '{\"19\":\"19:191\",\"23\":\"23:119\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367 2\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('870', '68', '{\"19\":\"19:191\",\"23\":\"23:120\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367 2\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('871', '68', '{\"19\":\"19:191\",\"23\":\"23:121\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367 2\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('872', '68', '{\"19\":\"19:191\",\"23\":\"23:122\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367 2\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('873', '68', '{\"19\":\"19:191\",\"23\":\"23:123\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367 2\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('874', '68', '{\"19\":\"19:192\",\"23\":\"23:118\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u513f\\u7ae5\\u623f\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('875', '68', '{\"19\":\"19:192\",\"23\":\"23:119\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u513f\\u7ae5\\u623f\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('876', '68', '{\"19\":\"19:192\",\"23\":\"23:120\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u513f\\u7ae5\\u623f\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('877', '68', '{\"19\":\"19:192\",\"23\":\"23:121\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u513f\\u7ae5\\u623f\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('878', '68', '{\"19\":\"19:192\",\"23\":\"23:122\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u513f\\u7ae5\\u623f\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('879', '68', '{\"19\":\"19:192\",\"23\":\"23:123\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u513f\\u7ae5\\u623f\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('880', '68', '{\"19\":\"19:193\",\"23\":\"23:118\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u50a8\\u7269\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('881', '68', '{\"19\":\"19:193\",\"23\":\"23:119\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u50a8\\u7269\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('882', '68', '{\"19\":\"19:193\",\"23\":\"23:120\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u50a8\\u7269\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('883', '68', '{\"19\":\"19:193\",\"23\":\"23:121\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u50a8\\u7269\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('884', '68', '{\"19\":\"19:193\",\"23\":\"23:122\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u50a8\\u7269\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('885', '68', '{\"19\":\"19:193\",\"23\":\"23:123\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u50a8\\u7269\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('886', '68', '{\"19\":\"19:194\",\"23\":\"23:118\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u8863\\u5e3d\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('887', '68', '{\"19\":\"19:194\",\"23\":\"23:119\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u8863\\u5e3d\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('888', '68', '{\"19\":\"19:194\",\"23\":\"23:120\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u8863\\u5e3d\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('889', '68', '{\"19\":\"19:194\",\"23\":\"23:121\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u8863\\u5e3d\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('890', '68', '{\"19\":\"19:194\",\"23\":\"23:122\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u8863\\u5e3d\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('891', '68', '{\"19\":\"19:194\",\"23\":\"23:123\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u8863\\u5e3d\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('892', '68', '{\"19\":\"19:195\",\"23\":\"23:118\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u536b\\u751f\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('893', '68', '{\"19\":\"19:195\",\"23\":\"23:119\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u536b\\u751f\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('894', '68', '{\"19\":\"19:195\",\"23\":\"23:120\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u536b\\u751f\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('895', '68', '{\"19\":\"19:195\",\"23\":\"23:121\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u536b\\u751f\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('896', '68', '{\"19\":\"19:195\",\"23\":\"23:122\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u536b\\u751f\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('897', '68', '{\"19\":\"19:195\",\"23\":\"23:123\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u536b\\u751f\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('898', '68', '{\"19\":\"19:196\",\"23\":\"23:118\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u9633\\u53f0\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('899', '68', '{\"19\":\"19:196\",\"23\":\"23:119\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u9633\\u53f0\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('900', '68', '{\"19\":\"19:196\",\"23\":\"23:120\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u9633\\u53f0\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('901', '68', '{\"19\":\"19:196\",\"23\":\"23:121\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u9633\\u53f0\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('902', '68', '{\"19\":\"19:196\",\"23\":\"23:122\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u9633\\u53f0\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('903', '68', '{\"19\":\"19:196\",\"23\":\"23:123\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u9633\\u53f0\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('904', '69', '{\"20\":\"20:197\",\"24\":\"24:124\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u5168\\u90e8\\u623f\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('905', '69', '{\"20\":\"20:197\",\"24\":\"24:125\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u5168\\u90e8\\u623f\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('906', '69', '{\"20\":\"20:197\",\"24\":\"24:126\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u5168\\u90e8\\u623f\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('907', '69', '{\"20\":\"20:197\",\"24\":\"24:127\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u5168\\u90e8\\u623f\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('908', '69', '{\"20\":\"20:197\",\"24\":\"24:128\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u5168\\u90e8\\u623f\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('909', '69', '{\"20\":\"20:197\",\"24\":\"24:129\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u5168\\u90e8\\u623f\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('910', '69', '{\"20\":\"20:198\",\"24\":\"24:124\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u5ba2\\u5385\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('911', '69', '{\"20\":\"20:198\",\"24\":\"24:125\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u5ba2\\u5385\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('912', '69', '{\"20\":\"20:198\",\"24\":\"24:126\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u5ba2\\u5385\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('913', '69', '{\"20\":\"20:198\",\"24\":\"24:127\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u5ba2\\u5385\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('914', '69', '{\"20\":\"20:198\",\"24\":\"24:128\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u5ba2\\u5385\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('915', '69', '{\"20\":\"20:198\",\"24\":\"24:129\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u5ba2\\u5385\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('916', '69', '{\"20\":\"20:199\",\"24\":\"24:124\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u9910\\u5385\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('917', '69', '{\"20\":\"20:199\",\"24\":\"24:125\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u9910\\u5385\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('918', '69', '{\"20\":\"20:199\",\"24\":\"24:126\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u9910\\u5385\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('919', '69', '{\"20\":\"20:199\",\"24\":\"24:127\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u9910\\u5385\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('920', '69', '{\"20\":\"20:199\",\"24\":\"24:128\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u9910\\u5385\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('921', '69', '{\"20\":\"20:199\",\"24\":\"24:129\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u9910\\u5385\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('922', '69', '{\"20\":\"20:200\",\"24\":\"24:124\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u53a8\\u623f\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('923', '69', '{\"20\":\"20:200\",\"24\":\"24:125\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u53a8\\u623f\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('924', '69', '{\"20\":\"20:200\",\"24\":\"24:126\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u53a8\\u623f\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('925', '69', '{\"20\":\"20:200\",\"24\":\"24:127\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u53a8\\u623f\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('926', '69', '{\"20\":\"20:200\",\"24\":\"24:128\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u53a8\\u623f\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('927', '69', '{\"20\":\"20:200\",\"24\":\"24:129\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u53a8\\u623f\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('928', '69', '{\"20\":\"20:201\",\"24\":\"24:124\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u4e3b\\u5367\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('929', '69', '{\"20\":\"20:201\",\"24\":\"24:125\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u4e3b\\u5367\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('930', '69', '{\"20\":\"20:201\",\"24\":\"24:126\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u4e3b\\u5367\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('931', '69', '{\"20\":\"20:201\",\"24\":\"24:127\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u4e3b\\u5367\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('932', '69', '{\"20\":\"20:201\",\"24\":\"24:128\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u4e3b\\u5367\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('933', '69', '{\"20\":\"20:201\",\"24\":\"24:129\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u4e3b\\u5367\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('934', '69', '{\"20\":\"20:202\",\"24\":\"24:124\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('935', '69', '{\"20\":\"20:202\",\"24\":\"24:125\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('936', '69', '{\"20\":\"20:202\",\"24\":\"24:126\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('937', '69', '{\"20\":\"20:202\",\"24\":\"24:127\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('938', '69', '{\"20\":\"20:202\",\"24\":\"24:128\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('939', '69', '{\"20\":\"20:202\",\"24\":\"24:129\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('940', '69', '{\"20\":\"20:203\",\"24\":\"24:124\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367 1\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('941', '69', '{\"20\":\"20:203\",\"24\":\"24:125\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367 1\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('942', '69', '{\"20\":\"20:203\",\"24\":\"24:126\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367 1\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('943', '69', '{\"20\":\"20:203\",\"24\":\"24:127\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367 1\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('944', '69', '{\"20\":\"20:203\",\"24\":\"24:128\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367 1\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('945', '69', '{\"20\":\"20:203\",\"24\":\"24:129\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367 1\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('946', '69', '{\"20\":\"20:204\",\"24\":\"24:124\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367 2\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('947', '69', '{\"20\":\"20:204\",\"24\":\"24:125\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367 2\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('948', '69', '{\"20\":\"20:204\",\"24\":\"24:126\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367 2\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('949', '69', '{\"20\":\"20:204\",\"24\":\"24:127\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367 2\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('950', '69', '{\"20\":\"20:204\",\"24\":\"24:128\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367 2\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('951', '69', '{\"20\":\"20:204\",\"24\":\"24:129\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u6b21\\u5367 2\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('952', '69', '{\"20\":\"20:205\",\"24\":\"24:124\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u513f\\u7ae5\\u623f\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('953', '69', '{\"20\":\"20:205\",\"24\":\"24:125\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u513f\\u7ae5\\u623f\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('954', '69', '{\"20\":\"20:205\",\"24\":\"24:126\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u513f\\u7ae5\\u623f\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('955', '69', '{\"20\":\"20:205\",\"24\":\"24:127\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u513f\\u7ae5\\u623f\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('956', '69', '{\"20\":\"20:205\",\"24\":\"24:128\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u513f\\u7ae5\\u623f\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('957', '69', '{\"20\":\"20:205\",\"24\":\"24:129\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u513f\\u7ae5\\u623f\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('958', '69', '{\"20\":\"20:206\",\"24\":\"24:124\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u50a8\\u7269\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('959', '69', '{\"20\":\"20:206\",\"24\":\"24:125\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u50a8\\u7269\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('960', '69', '{\"20\":\"20:206\",\"24\":\"24:126\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u50a8\\u7269\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('961', '69', '{\"20\":\"20:206\",\"24\":\"24:127\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u50a8\\u7269\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('962', '69', '{\"20\":\"20:206\",\"24\":\"24:128\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u50a8\\u7269\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('963', '69', '{\"20\":\"20:206\",\"24\":\"24:129\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u50a8\\u7269\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('964', '69', '{\"20\":\"20:207\",\"24\":\"24:124\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u8863\\u5e3d\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('965', '69', '{\"20\":\"20:207\",\"24\":\"24:125\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u8863\\u5e3d\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('966', '69', '{\"20\":\"20:207\",\"24\":\"24:126\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u8863\\u5e3d\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('967', '69', '{\"20\":\"20:207\",\"24\":\"24:127\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u8863\\u5e3d\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('968', '69', '{\"20\":\"20:207\",\"24\":\"24:128\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u8863\\u5e3d\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('969', '69', '{\"20\":\"20:207\",\"24\":\"24:129\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u8863\\u5e3d\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('970', '69', '{\"20\":\"20:208\",\"24\":\"24:124\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u536b\\u751f\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('971', '69', '{\"20\":\"20:208\",\"24\":\"24:125\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u536b\\u751f\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('972', '69', '{\"20\":\"20:208\",\"24\":\"24:126\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u536b\\u751f\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('973', '69', '{\"20\":\"20:208\",\"24\":\"24:127\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u536b\\u751f\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('974', '69', '{\"20\":\"20:208\",\"24\":\"24:128\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u536b\\u751f\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('975', '69', '{\"20\":\"20:208\",\"24\":\"24:129\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u536b\\u751f\\u95f4\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('976', '69', '{\"20\":\"20:209\",\"24\":\"24:124\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u9633\\u53f0\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('977', '69', '{\"20\":\"20:209\",\"24\":\"24:125\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u9633\\u53f0\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('978', '69', '{\"20\":\"20:209\",\"24\":\"24:126\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u9633\\u53f0\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('979', '69', '{\"20\":\"20:209\",\"24\":\"24:127\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u9633\\u53f0\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('980', '69', '{\"20\":\"20:209\",\"24\":\"24:128\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u9633\\u53f0\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('981', '69', '{\"20\":\"20:209\",\"24\":\"24:129\"}', '{\"\\u623f\\u95f4\":\"\\u623f\\u95f4:\\u9633\\u53f0\",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\"}', '999999999', '123.00', '1', '1');
INSERT INTO `sku` VALUES ('1042', '61', '{\"13\":\"13:43\",\"14\":\"14:47\"}', '{\"\\u670d\\u52a1\":\"\\u670d\\u52a1:\\u8f6f\\u5305     \",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272 \"}', '999999999', '120.00', '1', '1');
INSERT INTO `sku` VALUES ('1043', '61', '{\"13\":\"13:43\",\"14\":\"14:48\"}', '{\"\\u670d\\u52a1\":\"\\u670d\\u52a1:\\u8f6f\\u5305     \",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272 \"}', '999999999', '120.00', '1', '1');
INSERT INTO `sku` VALUES ('1044', '61', '{\"13\":\"13:43\",\"14\":\"14:49\"}', '{\"\\u670d\\u52a1\":\"\\u670d\\u52a1:\\u8f6f\\u5305     \",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272 \"}', '999999999', '120.00', '1', '1');
INSERT INTO `sku` VALUES ('1045', '61', '{\"13\":\"13:44\",\"14\":\"14:47\"}', '{\"\\u670d\\u52a1\":\"\\u670d\\u52a1:\\u5730\\u677f     \",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272 \"}', '999999999', '70.00', '1', '1');
INSERT INTO `sku` VALUES ('1046', '61', '{\"13\":\"13:44\",\"14\":\"14:48\"}', '{\"\\u670d\\u52a1\":\"\\u670d\\u52a1:\\u5730\\u677f     \",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272 \"}', '999999999', '70.00', '1', '1');
INSERT INTO `sku` VALUES ('1047', '61', '{\"13\":\"13:44\",\"14\":\"14:49\"}', '{\"\\u670d\\u52a1\":\"\\u670d\\u52a1:\\u5730\\u677f     \",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272 \"}', '999999999', '70.00', '1', '1');
INSERT INTO `sku` VALUES ('1048', '61', '{\"13\":\"13:45\",\"14\":\"14:47\"}', '{\"\\u670d\\u52a1\":\"\\u670d\\u52a1:\\u74f7\\u7816     \",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272 \"}', '999999999', '40.00', '1', '1');
INSERT INTO `sku` VALUES ('1049', '61', '{\"13\":\"13:45\",\"14\":\"14:48\"}', '{\"\\u670d\\u52a1\":\"\\u670d\\u52a1:\\u74f7\\u7816     \",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272 \"}', '999999999', '40.00', '1', '1');
INSERT INTO `sku` VALUES ('1050', '61', '{\"13\":\"13:45\",\"14\":\"14:49\"}', '{\"\\u670d\\u52a1\":\"\\u670d\\u52a1:\\u74f7\\u7816     \",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272 \"}', '999999999', '40.00', '1', '1');
INSERT INTO `sku` VALUES ('1051', '61', '{\"13\":\"13:46\",\"14\":\"14:47\"}', '{\"\\u670d\\u52a1\":\"\\u670d\\u52a1:\\u9632\\u6c34     \",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272 \"}', '999999999', '30.00', '1', '1');
INSERT INTO `sku` VALUES ('1052', '61', '{\"13\":\"13:46\",\"14\":\"14:48\"}', '{\"\\u670d\\u52a1\":\"\\u670d\\u52a1:\\u9632\\u6c34     \",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272 \"}', '999999999', '30.00', '1', '1');
INSERT INTO `sku` VALUES ('1053', '61', '{\"13\":\"13:46\",\"14\":\"14:49\"}', '{\"\\u670d\\u52a1\":\"\\u670d\\u52a1:\\u9632\\u6c34     \",\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272 \"}', '999999999', '30.00', '1', '1');
INSERT INTO `sku` VALUES ('1078', '76', '{\"26\":\"26:132\"}', '{\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u7eff\\u8272\"}', '999999999', '100.00', '1', '1');
INSERT INTO `sku` VALUES ('1079', '76', '{\"26\":\"26:133\"}', '{\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272\"}', '999999999', '100.00', '1', '1');
INSERT INTO `sku` VALUES ('1080', '76', '{\"26\":\"26:134\"}', '{\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\"}', '999999999', '100.00', '1', '1');
INSERT INTO `sku` VALUES ('1081', '62', '{\"12\":\"12:217\"}', '{\"\\u670d\\u52a1\":\"\\u670d\\u52a1:\\u7a97\\u5e18\"}', '999999999', '550.00', '1', '1');
INSERT INTO `sku` VALUES ('1082', '62', '{\"12\":\"12:218\"}', '{\"\\u670d\\u52a1\":\"\\u670d\\u52a1:\\u7eb1\\u7a97\\u95e8\"}', '999999999', '467.00', '1', '1');
INSERT INTO `sku` VALUES ('1083', '62', '{\"12\":\"12:219\"}', '{\"\\u670d\\u52a1\":\"\\u670d\\u52a1:\\u6c99\\u53d1\\u6e05\\u6d17\\/\\u62a4\\u7406\"}', '999999999', '345.00', '1', '1');
INSERT INTO `sku` VALUES ('1084', '62', '{\"12\":\"12:220\"}', '{\"\\u670d\\u52a1\":\"\\u670d\\u52a1:\\u827a\\u672f\\u88c5\\u9970\"}', '999999999', '567.00', '1', '1');
INSERT INTO `sku` VALUES ('1085', '62', '{\"12\":\"12:221\"}', '{\"\\u670d\\u52a1\":\"\\u670d\\u52a1:\\u706f\\u5149\"}', '999999999', '120.00', '1', '1');
INSERT INTO `sku` VALUES ('1086', '82', '{\"31\":\"31:211\",\"32\":\"32:222\"}', '{\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\",\"\\u5957\\u9910\\u7c7b\\u578b\":\"\\u5957\\u9910\\u7c7b\\u578b:\\u7ecf\\u6d4e\\u578b \"}', '999999999', '100.00', '1', '1');
INSERT INTO `sku` VALUES ('1087', '82', '{\"31\":\"31:211\",\"32\":\"32:223\"}', '{\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\",\"\\u5957\\u9910\\u7c7b\\u578b\":\"\\u5957\\u9910\\u7c7b\\u578b:\\u8d85\\u503c\\u578b \"}', '999999999', '120.00', '1', '1');
INSERT INTO `sku` VALUES ('1088', '82', '{\"31\":\"31:211\",\"32\":\"32:224\"}', '{\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\",\"\\u5957\\u9910\\u7c7b\\u578b\":\"\\u5957\\u9910\\u7c7b\\u578b:\\u4f18\\u9009\\u578b \"}', '999999999', '140.00', '1', '1');
INSERT INTO `sku` VALUES ('1089', '82', '{\"31\":\"31:211\",\"32\":\"32:225\"}', '{\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7070\\u8272\",\"\\u5957\\u9910\\u7c7b\\u578b\":\"\\u5957\\u9910\\u7c7b\\u578b:\\u5c0a\\u4eab\\u578b \"}', '999999999', '160.00', '1', '1');
INSERT INTO `sku` VALUES ('1090', '82', '{\"31\":\"31:212\",\"32\":\"32:222\"}', '{\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\",\"\\u5957\\u9910\\u7c7b\\u578b\":\"\\u5957\\u9910\\u7c7b\\u578b:\\u7ecf\\u6d4e\\u578b \"}', '999999999', '100.00', '1', '1');
INSERT INTO `sku` VALUES ('1091', '82', '{\"31\":\"31:212\",\"32\":\"32:223\"}', '{\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\",\"\\u5957\\u9910\\u7c7b\\u578b\":\"\\u5957\\u9910\\u7c7b\\u578b:\\u8d85\\u503c\\u578b \"}', '999999999', '120.00', '1', '1');
INSERT INTO `sku` VALUES ('1092', '82', '{\"31\":\"31:212\",\"32\":\"32:224\"}', '{\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\",\"\\u5957\\u9910\\u7c7b\\u578b\":\"\\u5957\\u9910\\u7c7b\\u578b:\\u4f18\\u9009\\u578b \"}', '999999999', '140.00', '1', '1');
INSERT INTO `sku` VALUES ('1093', '82', '{\"31\":\"31:212\",\"32\":\"32:225\"}', '{\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u5929\\u84dd\\u8272\",\"\\u5957\\u9910\\u7c7b\\u578b\":\"\\u5957\\u9910\\u7c7b\\u578b:\\u5c0a\\u4eab\\u578b \"}', '999999999', '160.00', '1', '1');
INSERT INTO `sku` VALUES ('1094', '82', '{\"31\":\"31:213\",\"32\":\"32:222\"}', '{\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272\",\"\\u5957\\u9910\\u7c7b\\u578b\":\"\\u5957\\u9910\\u7c7b\\u578b:\\u7ecf\\u6d4e\\u578b \"}', '999999999', '100.00', '1', '1');
INSERT INTO `sku` VALUES ('1095', '82', '{\"31\":\"31:213\",\"32\":\"32:223\"}', '{\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272\",\"\\u5957\\u9910\\u7c7b\\u578b\":\"\\u5957\\u9910\\u7c7b\\u578b:\\u8d85\\u503c\\u578b \"}', '999999999', '120.00', '1', '1');
INSERT INTO `sku` VALUES ('1096', '82', '{\"31\":\"31:213\",\"32\":\"32:224\"}', '{\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272\",\"\\u5957\\u9910\\u7c7b\\u578b\":\"\\u5957\\u9910\\u7c7b\\u578b:\\u4f18\\u9009\\u578b \"}', '999999999', '140.00', '1', '1');
INSERT INTO `sku` VALUES ('1097', '82', '{\"31\":\"31:213\",\"32\":\"32:225\"}', '{\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u9ec4\\u8272\",\"\\u5957\\u9910\\u7c7b\\u578b\":\"\\u5957\\u9910\\u7c7b\\u578b:\\u5c0a\\u4eab\\u578b \"}', '999999999', '160.00', '1', '1');
INSERT INTO `sku` VALUES ('1098', '82', '{\"31\":\"31:214\",\"32\":\"32:222\"}', '{\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\",\"\\u5957\\u9910\\u7c7b\\u578b\":\"\\u5957\\u9910\\u7c7b\\u578b:\\u7ecf\\u6d4e\\u578b \"}', '999999999', '100.00', '1', '1');
INSERT INTO `sku` VALUES ('1099', '82', '{\"31\":\"31:214\",\"32\":\"32:223\"}', '{\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\",\"\\u5957\\u9910\\u7c7b\\u578b\":\"\\u5957\\u9910\\u7c7b\\u578b:\\u8d85\\u503c\\u578b \"}', '999999999', '120.00', '1', '1');
INSERT INTO `sku` VALUES ('1100', '82', '{\"31\":\"31:214\",\"32\":\"32:224\"}', '{\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\",\"\\u5957\\u9910\\u7c7b\\u578b\":\"\\u5957\\u9910\\u7c7b\\u578b:\\u4f18\\u9009\\u578b \"}', '999999999', '140.00', '1', '1');
INSERT INTO `sku` VALUES ('1101', '82', '{\"31\":\"31:214\",\"32\":\"32:225\"}', '{\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u68d5\\u8272\",\"\\u5957\\u9910\\u7c7b\\u578b\":\"\\u5957\\u9910\\u7c7b\\u578b:\\u5c0a\\u4eab\\u578b \"}', '999999999', '160.00', '1', '1');
INSERT INTO `sku` VALUES ('1102', '82', '{\"31\":\"31:215\",\"32\":\"32:222\"}', '{\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\",\"\\u5957\\u9910\\u7c7b\\u578b\":\"\\u5957\\u9910\\u7c7b\\u578b:\\u7ecf\\u6d4e\\u578b \"}', '999999999', '100.00', '1', '1');
INSERT INTO `sku` VALUES ('1103', '82', '{\"31\":\"31:215\",\"32\":\"32:223\"}', '{\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\",\"\\u5957\\u9910\\u7c7b\\u578b\":\"\\u5957\\u9910\\u7c7b\\u578b:\\u8d85\\u503c\\u578b \"}', '999999999', '120.00', '1', '1');
INSERT INTO `sku` VALUES ('1104', '82', '{\"31\":\"31:215\",\"32\":\"32:224\"}', '{\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\",\"\\u5957\\u9910\\u7c7b\\u578b\":\"\\u5957\\u9910\\u7c7b\\u578b:\\u4f18\\u9009\\u578b \"}', '999999999', '140.00', '1', '1');
INSERT INTO `sku` VALUES ('1105', '82', '{\"31\":\"31:215\",\"32\":\"32:225\"}', '{\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u9ec4\\u8272\",\"\\u5957\\u9910\\u7c7b\\u578b\":\"\\u5957\\u9910\\u7c7b\\u578b:\\u5c0a\\u4eab\\u578b \"}', '999999999', '160.00', '1', '1');
INSERT INTO `sku` VALUES ('1106', '82', '{\"31\":\"31:216\",\"32\":\"32:222\"}', '{\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\",\"\\u5957\\u9910\\u7c7b\\u578b\":\"\\u5957\\u9910\\u7c7b\\u578b:\\u7ecf\\u6d4e\\u578b \"}', '999999999', '100.00', '1', '1');
INSERT INTO `sku` VALUES ('1107', '82', '{\"31\":\"31:216\",\"32\":\"32:223\"}', '{\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\",\"\\u5957\\u9910\\u7c7b\\u578b\":\"\\u5957\\u9910\\u7c7b\\u578b:\\u8d85\\u503c\\u578b \"}', '999999999', '120.00', '1', '1');
INSERT INTO `sku` VALUES ('1108', '82', '{\"31\":\"31:216\",\"32\":\"32:224\"}', '{\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\",\"\\u5957\\u9910\\u7c7b\\u578b\":\"\\u5957\\u9910\\u7c7b\\u578b:\\u4f18\\u9009\\u578b \"}', '999999999', '140.00', '1', '1');
INSERT INTO `sku` VALUES ('1109', '82', '{\"31\":\"31:216\",\"32\":\"32:225\"}', '{\"\\u989c\\u8272\":\"\\u989c\\u8272:\\u6d45\\u7eff\\u8272\",\"\\u5957\\u9910\\u7c7b\\u578b\":\"\\u5957\\u9910\\u7c7b\\u578b:\\u5c0a\\u4eab\\u578b \"}', '999999999', '160.00', '1', '1');

-- ----------------------------
-- Table structure for `source_message`
-- ----------------------------
DROP TABLE IF EXISTS `source_message`;
CREATE TABLE `source_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(32) NOT NULL,
  `message` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=202 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of source_message
-- ----------------------------
INSERT INTO `source_message` VALUES ('1', 'UserModule', 'Registration');
INSERT INTO `source_message` VALUES ('2', 'UserModule.user', 'Registration');
INSERT INTO `source_message` VALUES ('3', 'UserModule', 'Fields with <span class=\"required\">*</span> are required.');
INSERT INTO `source_message` VALUES ('4', 'UserModule.user', 'Fields with <span class=\"required\">*</span> are required.');
INSERT INTO `source_message` VALUES ('5', 'UserModule', 'Incorrect username (length between 3 and 20 characters).');
INSERT INTO `source_message` VALUES ('6', 'UserModule.user', 'Incorrect username (length between 3 and 20 characters).');
INSERT INTO `source_message` VALUES ('7', 'UserModule', 'Incorrect password (minimal length 4 symbols).');
INSERT INTO `source_message` VALUES ('8', 'UserModule.user', 'Incorrect password (minimal length 4 symbols).');
INSERT INTO `source_message` VALUES ('9', 'UserModule', 'This user\'s name already exists.');
INSERT INTO `source_message` VALUES ('10', 'UserModule.user', 'This user\'s name already exists.');
INSERT INTO `source_message` VALUES ('11', 'UserModule', 'This user\'s email address already exists.');
INSERT INTO `source_message` VALUES ('12', 'UserModule.user', 'This user\'s email address already exists.');
INSERT INTO `source_message` VALUES ('13', 'UserModule', 'Incorrect symbols (A-z0-9).');
INSERT INTO `source_message` VALUES ('14', 'UserModule.user', 'Incorrect symbols (A-z0-9).');
INSERT INTO `source_message` VALUES ('15', 'UserModule', 'Retype Password is incorrect.');
INSERT INTO `source_message` VALUES ('16', 'UserModule.user', 'Retype Password is incorrect.');
INSERT INTO `source_message` VALUES ('17', 'UserModule', 'Id');
INSERT INTO `source_message` VALUES ('18', 'UserModule.user', 'Id');
INSERT INTO `source_message` VALUES ('19', 'UserModule', 'username');
INSERT INTO `source_message` VALUES ('20', 'UserModule.user', 'username');
INSERT INTO `source_message` VALUES ('21', 'UserModule', 'password');
INSERT INTO `source_message` VALUES ('22', 'UserModule.user', 'password');
INSERT INTO `source_message` VALUES ('23', 'UserModule', 'Retype Password');
INSERT INTO `source_message` VALUES ('24', 'UserModule.user', 'Retype Password');
INSERT INTO `source_message` VALUES ('25', 'UserModule', 'E-mail');
INSERT INTO `source_message` VALUES ('26', 'UserModule.user', 'E-mail');
INSERT INTO `source_message` VALUES ('27', 'UserModule', 'Verification Code');
INSERT INTO `source_message` VALUES ('28', 'UserModule.user', 'Verification Code');
INSERT INTO `source_message` VALUES ('29', 'UserModule', 'activation key');
INSERT INTO `source_message` VALUES ('30', 'UserModule.user', 'activation key');
INSERT INTO `source_message` VALUES ('31', 'UserModule', 'Registration date');
INSERT INTO `source_message` VALUES ('32', 'UserModule.user', 'Registration date');
INSERT INTO `source_message` VALUES ('33', 'UserModule', 'Last visit');
INSERT INTO `source_message` VALUES ('34', 'UserModule.user', 'Last visit');
INSERT INTO `source_message` VALUES ('35', 'UserModule', 'Superuser');
INSERT INTO `source_message` VALUES ('36', 'UserModule.user', 'Superuser');
INSERT INTO `source_message` VALUES ('37', 'UserModule', 'Status');
INSERT INTO `source_message` VALUES ('38', 'UserModule.user', 'Status');
INSERT INTO `source_message` VALUES ('39', 'UserModule', 'Minimal password length 4 symbols.');
INSERT INTO `source_message` VALUES ('40', 'UserModule.user', 'Minimal password length 4 symbols.');
INSERT INTO `source_message` VALUES ('41', 'UserModule', '手机号码不正确');
INSERT INTO `source_message` VALUES ('42', 'UserModule.user', '手机号码不正确');
INSERT INTO `source_message` VALUES ('43', 'UserModule', 'User ID');
INSERT INTO `source_message` VALUES ('44', 'UserModule.user', 'User ID');
INSERT INTO `source_message` VALUES ('45', 'UserModule', '手机号码');
INSERT INTO `source_message` VALUES ('46', 'UserModule.user', '手机号码');
INSERT INTO `source_message` VALUES ('47', 'UserModule', 'Please enter the letters as they are shown in the image above.');
INSERT INTO `source_message` VALUES ('48', 'UserModule.user', 'Please enter the letters as they are shown in the image above.');
INSERT INTO `source_message` VALUES ('49', 'UserModule', 'Letters are not case-sensitive.');
INSERT INTO `source_message` VALUES ('50', 'UserModule.user', 'Letters are not case-sensitive.');
INSERT INTO `source_message` VALUES ('51', 'UserModule', 'Register');
INSERT INTO `source_message` VALUES ('52', 'UserModule.user', 'Register');
INSERT INTO `source_message` VALUES ('53', 'frontend', '首页');
INSERT INTO `source_message` VALUES ('54', 'frontend', 'Women');
INSERT INTO `source_message` VALUES ('55', 'frontend', 'Fashion');
INSERT INTO `source_message` VALUES ('56', 'frontend', 'Electronics');
INSERT INTO `source_message` VALUES ('57', 'frontend', 'Digital');
INSERT INTO `source_message` VALUES ('58', 'frontend', '公司简介');
INSERT INTO `source_message` VALUES ('59', 'frontend', '购物帮助');
INSERT INTO `source_message` VALUES ('60', 'frontend', '联系客服');
INSERT INTO `source_message` VALUES ('61', 'translate', 'Create');
INSERT INTO `source_message` VALUES ('62', 'translate', 'Create Message');
INSERT INTO `source_message` VALUES ('63', 'translate', 'ID');
INSERT INTO `source_message` VALUES ('64', 'translate', 'Language');
INSERT INTO `source_message` VALUES ('65', 'translate', 'Translation');
INSERT INTO `source_message` VALUES ('66', 'translate', 'Category');
INSERT INTO `source_message` VALUES ('67', 'translate', 'Message');
INSERT INTO `source_message` VALUES ('68', 'translate', 'Close');
INSERT INTO `source_message` VALUES ('69', 'translate', '{action} translation');
INSERT INTO `source_message` VALUES ('70', 'translate', 'Message successfully saved');
INSERT INTO `source_message` VALUES ('71', 'UserModule', 'Login');
INSERT INTO `source_message` VALUES ('72', 'UserModule.user', 'Login');
INSERT INTO `source_message` VALUES ('73', 'UserModule', 'Please fill out the following form with your login credentials:');
INSERT INTO `source_message` VALUES ('74', 'UserModule.user', 'Please fill out the following form with your login credentials:');
INSERT INTO `source_message` VALUES ('75', 'UserModule', 'Remember me next time');
INSERT INTO `source_message` VALUES ('76', 'UserModule.user', 'Remember me next time');
INSERT INTO `source_message` VALUES ('77', 'UserModule', 'username or email');
INSERT INTO `source_message` VALUES ('78', 'UserModule.user', 'username or email');
INSERT INTO `source_message` VALUES ('79', 'UserModule', 'Lost Password?');
INSERT INTO `source_message` VALUES ('80', 'UserModule.user', 'Lost Password?');
INSERT INTO `source_message` VALUES ('81', 'translate', 'Update');
INSERT INTO `source_message` VALUES ('82', 'translate', 'Update Message');
INSERT INTO `source_message` VALUES ('83', 'translate', 'Message successfully updated');
INSERT INTO `source_message` VALUES ('84', 'UserModule', 'Restore');
INSERT INTO `source_message` VALUES ('85', 'UserModule.user', 'Restore');
INSERT INTO `source_message` VALUES ('86', 'UserModule', 'Please enter your login or email addres.');
INSERT INTO `source_message` VALUES ('87', 'UserModule.user', 'Please enter your login or email addres.');
INSERT INTO `source_message` VALUES ('88', 'UserModule', 'You have requested the password recovery site {site_name}');
INSERT INTO `source_message` VALUES ('89', 'UserModule.user', 'You have requested the password recovery site {site_name}');
INSERT INTO `source_message` VALUES ('90', 'UserModule', 'You have requested the password recovery site {site_name}. To receive a new password, go to {activation_url}.');
INSERT INTO `source_message` VALUES ('91', 'UserModule.user', 'You have requested the password recovery site {site_name}. To receive a new password, go to {activation_url}.');
INSERT INTO `source_message` VALUES ('92', 'UserModule', 'Please check your email. An instructions was sent to your email address.');
INSERT INTO `source_message` VALUES ('93', 'UserModule.user', 'Please check your email. An instructions was sent to your email address.');
INSERT INTO `source_message` VALUES ('94', 'UserModule', 'Change password');
INSERT INTO `source_message` VALUES ('95', 'UserModule.user', 'Change password');
INSERT INTO `source_message` VALUES ('96', 'UserModule', 'Old Password');
INSERT INTO `source_message` VALUES ('97', 'UserModule.user', 'Old Password');
INSERT INTO `source_message` VALUES ('98', 'UserModule', 'Save');
INSERT INTO `source_message` VALUES ('99', 'UserModule.user', 'Save');
INSERT INTO `source_message` VALUES ('100', 'UserModule', 'Incorrect recovery link.');
INSERT INTO `source_message` VALUES ('101', 'UserModule.user', 'Incorrect recovery link.');
INSERT INTO `source_message` VALUES ('102', 'frontend', '俱乐部会员活动');
INSERT INTO `source_message` VALUES ('103', 'frontend', '游艇介绍');
INSERT INTO `source_message` VALUES ('104', 'frontend', '俱乐部介绍');
INSERT INTO `source_message` VALUES ('105', 'frontend', '俱乐部风景');
INSERT INTO `source_message` VALUES ('106', 'frontend', '莱悦新闻');
INSERT INTO `source_message` VALUES ('107', 'frontend', '为什么大家都要疯狂吐槽iOS 7的扁平化设计？');
INSERT INTO `source_message` VALUES ('108', 'frontend', '啊啊啊啊');
INSERT INTO `source_message` VALUES ('109', 'frontend', 'Open Day at Dianshan Lake');
INSERT INTO `source_message` VALUES ('110', 'frontend', '关于我们');
INSERT INTO `source_message` VALUES ('111', 'Ei18n', 'Message  could not be added to messageSource table');
INSERT INTO `source_message` VALUES ('112', 'frontend', '在线预订');
INSERT INTO `source_message` VALUES ('113', 'frontend', 'Yincart Inc');
INSERT INTO `source_message` VALUES ('114', 'frontend', '联系我们');
INSERT INTO `source_message` VALUES ('115', 'frontend', '登录');
INSERT INTO `source_message` VALUES ('116', 'frontend', '友情链接：');
INSERT INTO `source_message` VALUES ('117', 'frontend', '财付通');
INSERT INTO `source_message` VALUES ('118', 'frontend', 'ebay');
INSERT INTO `source_message` VALUES ('119', 'frontend', '易宝支付');
INSERT INTO `source_message` VALUES ('120', 'frontend', '招商银行');
INSERT INTO `source_message` VALUES ('121', 'frontend', '中国工商银行');
INSERT INTO `source_message` VALUES ('122', 'frontend', '贝宝');
INSERT INTO `source_message` VALUES ('123', 'frontend', '支付宝');
INSERT INTO `source_message` VALUES ('124', 'UserModule', 'Users');
INSERT INTO `source_message` VALUES ('125', 'UserModule.user', 'Users');
INSERT INTO `source_message` VALUES ('126', 'UserModule', 'List User');
INSERT INTO `source_message` VALUES ('127', 'UserModule.user', 'List User');
INSERT INTO `source_message` VALUES ('128', 'UserModule', 'Password is incorrect.');
INSERT INTO `source_message` VALUES ('129', 'UserModule.user', 'Password is incorrect.');
INSERT INTO `source_message` VALUES ('130', 'UserModule', 'You registered from {site_name}');
INSERT INTO `source_message` VALUES ('131', 'UserModule.user', 'You registered from {site_name}');
INSERT INTO `source_message` VALUES ('132', 'UserModule', 'Please activate you account go to {activation_url}');
INSERT INTO `source_message` VALUES ('133', 'UserModule.user', 'Please activate you account go to {activation_url}');
INSERT INTO `source_message` VALUES ('134', 'UserModule', 'Thank you for your registration. Please check your email.');
INSERT INTO `source_message` VALUES ('135', 'UserModule.user', 'Thank you for your registration. Please check your email.');
INSERT INTO `source_message` VALUES ('136', 'UserModule', 'User activation');
INSERT INTO `source_message` VALUES ('137', 'UserModule.user', 'User activation');
INSERT INTO `source_message` VALUES ('138', 'UserModule', 'You account is active.');
INSERT INTO `source_message` VALUES ('139', 'UserModule.user', 'You account is active.');
INSERT INTO `source_message` VALUES ('140', 'UserModule', 'Profile');
INSERT INTO `source_message` VALUES ('141', 'UserModule.user', 'Profile');
INSERT INTO `source_message` VALUES ('142', 'UserModule', 'Edit');
INSERT INTO `source_message` VALUES ('143', 'UserModule.user', 'Edit');
INSERT INTO `source_message` VALUES ('144', 'UserModule', 'Logout');
INSERT INTO `source_message` VALUES ('145', 'UserModule.user', 'Logout');
INSERT INTO `source_message` VALUES ('146', 'UserModule', 'Your profile');
INSERT INTO `source_message` VALUES ('147', 'UserModule.user', 'Your profile');
INSERT INTO `source_message` VALUES ('148', 'UserModule', '真实姓名');
INSERT INTO `source_message` VALUES ('149', 'UserModule.user', '真实姓名');
INSERT INTO `source_message` VALUES ('150', 'UserModule', '昵称');
INSERT INTO `source_message` VALUES ('151', 'UserModule.user', '昵称');
INSERT INTO `source_message` VALUES ('152', 'UserModule', 'Not active');
INSERT INTO `source_message` VALUES ('153', 'UserModule.user', 'Not active');
INSERT INTO `source_message` VALUES ('154', 'UserModule', 'Active');
INSERT INTO `source_message` VALUES ('155', 'UserModule.user', 'Active');
INSERT INTO `source_message` VALUES ('156', 'UserModule', 'Banned');
INSERT INTO `source_message` VALUES ('157', 'UserModule.user', 'Banned');
INSERT INTO `source_message` VALUES ('158', 'UserModule', 'No');
INSERT INTO `source_message` VALUES ('159', 'UserModule.user', 'No');
INSERT INTO `source_message` VALUES ('160', 'UserModule', 'Yes');
INSERT INTO `source_message` VALUES ('161', 'UserModule.user', 'Yes');
INSERT INTO `source_message` VALUES ('162', 'labels', 'Username or e-mail');
INSERT INTO `source_message` VALUES ('163', 'labels', 'Remember me next time');
INSERT INTO `source_message` VALUES ('164', 'xupload.widget', 'File is too big');
INSERT INTO `source_message` VALUES ('165', 'xupload.widget', 'File is too small');
INSERT INTO `source_message` VALUES ('166', 'xupload.widget', 'Filetype not allowed');
INSERT INTO `source_message` VALUES ('167', 'xupload.widget', 'Max number of files exceeded');
INSERT INTO `source_message` VALUES ('168', 'xupload.widget', 'Uploaded bytes exceed file size');
INSERT INTO `source_message` VALUES ('169', 'xupload.widget', 'Empty file upload result');
INSERT INTO `source_message` VALUES ('170', 'xupload.widget', 'Error');
INSERT INTO `source_message` VALUES ('171', 'xupload.widget', 'Start');
INSERT INTO `source_message` VALUES ('172', 'xupload.widget', 'Cancel');
INSERT INTO `source_message` VALUES ('173', 'xupload.widget', 'Delete');
INSERT INTO `source_message` VALUES ('174', 'xupload.widget', '1#Add files|0#Choose file');
INSERT INTO `source_message` VALUES ('175', 'UserModule', 'Manage User');
INSERT INTO `source_message` VALUES ('176', 'UserModule.user', 'Manage User');
INSERT INTO `source_message` VALUES ('177', 'UserModule', 'Manage Profile Field');
INSERT INTO `source_message` VALUES ('178', 'UserModule.user', 'Manage Profile Field');
INSERT INTO `source_message` VALUES ('179', 'UserModule', 'Create Profile Field');
INSERT INTO `source_message` VALUES ('180', 'UserModule.user', 'Create Profile Field');
INSERT INTO `source_message` VALUES ('181', 'UserModule', 'View User');
INSERT INTO `source_message` VALUES ('182', 'UserModule.user', 'View User');
INSERT INTO `source_message` VALUES ('183', 'frontend', '床上用品');
INSERT INTO `source_message` VALUES ('184', 'frontend', 'Login');
INSERT INTO `source_message` VALUES ('185', 'frontend', 'Please fill out the following form with your login credentials:');
INSERT INTO `source_message` VALUES ('186', 'frontend', 'Fields with <span class=\"required\">*</span> are required.');
INSERT INTO `source_message` VALUES ('187', 'frontend', 'Remember me next time');
INSERT INTO `source_message` VALUES ('188', 'frontend', 'username or email');
INSERT INTO `source_message` VALUES ('189', 'frontend', 'password');
INSERT INTO `source_message` VALUES ('190', 'frontend', 'Register');
INSERT INTO `source_message` VALUES ('191', 'frontend', 'Lost Password?');
INSERT INTO `source_message` VALUES ('192', 'UserModule', 'Manage Users');
INSERT INTO `source_message` VALUES ('193', 'UserModule.user', 'Manage Users');
INSERT INTO `source_message` VALUES ('194', 'frontend', 'Username is incorrect.');
INSERT INTO `source_message` VALUES ('195', 'frontend', 'Password is incorrect.');
INSERT INTO `source_message` VALUES ('196', 'UserModule', 'You account is activated.');
INSERT INTO `source_message` VALUES ('197', 'UserModule.user', 'You account is activated.');
INSERT INTO `source_message` VALUES ('198', 'frontend', 'You account is not administrator.');
INSERT INTO `source_message` VALUES ('199', 'frontend', 'You account is not this store owner.');
INSERT INTO `source_message` VALUES ('200', 'UserModule', 'Username is incorrect.');
INSERT INTO `source_message` VALUES ('201', 'UserModule.user', 'Username is incorrect.');

-- ----------------------------
-- Table structure for `store`
-- ----------------------------
DROP TABLE IF EXISTS `store`;
CREATE TABLE `store` (
  `store_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '店铺表',
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `domain` varchar(200) DEFAULT NULL,
  `type` tinyint(1) DEFAULT NULL,
  `years` int(11) DEFAULT NULL,
  `theme` varchar(50) DEFAULT NULL,
  `start_time` int(11) DEFAULT NULL,
  `end_time` int(11) DEFAULT NULL,
  `introduction` text,
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`store_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of store
-- ----------------------------
INSERT INTO `store` VALUES ('1', '1', 'demo', '7895056@qq.com', 'demo123', 'shoptest.com', '0', null, 'default', '1378950468', null, '', '1378950468', '1378951323');

-- ----------------------------
-- Table structure for `store_category`
-- ----------------------------
DROP TABLE IF EXISTS `store_category`;
CREATE TABLE `store_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `store_id` int(10) unsigned NOT NULL,
  `root` int(10) unsigned DEFAULT NULL,
  `lft` int(10) unsigned NOT NULL,
  `rgt` int(10) unsigned NOT NULL,
  `level` smallint(5) unsigned NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `label` tinyint(1) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `position` varchar(45) DEFAULT NULL,
  `if_show` tinyint(1) DEFAULT NULL,
  `memo` text,
  PRIMARY KEY (`id`),
  KEY `root` (`root`),
  KEY `lft` (`lft`),
  KEY `rgt` (`rgt`),
  KEY `level` (`level`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of store_category
-- ----------------------------
INSERT INTO `store_category` VALUES ('1', '1', '1', '1', '10', '1', '内容分类', null, '', '', '', '1', '');
INSERT INTO `store_category` VALUES ('2', '1', '2', '1', '10', '1', '商品分类', null, '', '', '', '1', '');
INSERT INTO `store_category` VALUES ('3', '1', '2', '4', '5', '2', '男装', null, '', '', '', '1', '');
INSERT INTO `store_category` VALUES ('4', '1', '2', '6', '7', '2', '家纺', null, '', null, '', '1', '');
INSERT INTO `store_category` VALUES ('5', '1', '2', '2', '3', '2', '羽绒服', null, '', null, '', '1', '');
INSERT INTO `store_category` VALUES ('6', '1', '2', '8', '9', '2', '打火机', null, '', null, null, null, null);
INSERT INTO `store_category` VALUES ('7', '1', '1', '2', '3', '2', '单页分类', null, '', null, null, null, null);
INSERT INTO `store_category` VALUES ('8', '1', '1', '4', '9', '2', '文章分类', null, '', null, null, null, null);
INSERT INTO `store_category` VALUES ('9', '1', '1', '5', '6', '3', '新闻', null, '', null, null, null, null);
INSERT INTO `store_category` VALUES ('10', '1', '1', '7', '8', '3', '视频', null, '', null, null, null, null);

-- ----------------------------
-- Table structure for `store_menu`
-- ----------------------------
DROP TABLE IF EXISTS `store_menu`;
CREATE TABLE `store_menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `store_id` int(10) unsigned NOT NULL,
  `root` int(10) unsigned DEFAULT NULL,
  `lft` int(10) unsigned NOT NULL,
  `rgt` int(10) unsigned NOT NULL,
  `level` smallint(5) unsigned NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `position` varchar(45) DEFAULT NULL,
  `if_show` tinyint(1) DEFAULT NULL,
  `memo` text,
  PRIMARY KEY (`id`),
  KEY `root` (`root`),
  KEY `lft` (`lft`),
  KEY `rgt` (`rgt`),
  KEY `level` (`level`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of store_menu
-- ----------------------------

-- ----------------------------
-- Table structure for `store_product_category`
-- ----------------------------
DROP TABLE IF EXISTS `store_product_category`;
CREATE TABLE `store_product_category` (
  `con_store_product_category_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `con_store_product_category_productid` int(10) unsigned DEFAULT NULL COMMENT 'product id',
  `con_store_product_category_categoryid` int(10) unsigned DEFAULT NULL COMMENT 'category id',
  PRIMARY KEY (`con_store_product_category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of store_product_category
-- ----------------------------

-- ----------------------------
-- Table structure for `tag`
-- ----------------------------
DROP TABLE IF EXISTS `tag`;
CREATE TABLE `tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `frequency` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tag
-- ----------------------------
INSERT INTO `tag` VALUES ('1', 'yii', '2');
INSERT INTO `tag` VALUES ('2', 'blog', '1');
INSERT INTO `tag` VALUES ('3', 'test', '2');
INSERT INTO `tag` VALUES ('4', 'video', '1');
INSERT INTO `tag` VALUES ('5', 'demo', '2');

-- ----------------------------
-- Table structure for `tbl_migration`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_migration`;
CREATE TABLE `tbl_migration` (
  `version` varchar(255) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_migration
-- ----------------------------
INSERT INTO `tbl_migration` VALUES ('m141111_000000_init', '1419218284');
INSERT INTO `tbl_migration` VALUES ('m141211_034244_add_top_meau_url', '1419218284');
INSERT INTO `tbl_migration` VALUES ('m141211_044900_add_prop_color_picture', '1419218284');
INSERT INTO `tbl_migration` VALUES ('m141218_170610_add_pic_column', '1419218284');
INSERT INTO `tbl_migration` VALUES ('m141219_000000_add_order_column', '1419218284');
INSERT INTO `tbl_migration` VALUES ('m141224_172001_add_itemprop_column', '1419475902');
INSERT INTO `tbl_migration` VALUES ('m141225_000000_add_area_section_column', '1419475902');
INSERT INTO `tbl_migration` VALUES ('m141225_000001_add_area_section_column', '1419477771');
INSERT INTO `tbl_migration` VALUES ('m141225_154500_area_init', '1419495921');
INSERT INTO `tbl_migration` VALUES ('m141225_161001_section_init', '1419495921');

-- ----------------------------
-- Table structure for `themes`
-- ----------------------------
DROP TABLE IF EXISTS `themes`;
CREATE TABLE `themes` (
  `theme_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `theme` varchar(50) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `author` varchar(45) DEFAULT NULL,
  `site` varchar(100) DEFAULT NULL,
  `update_url` varchar(100) DEFAULT NULL,
  `desc` text,
  `config` longtext,
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`theme_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of themes
-- ----------------------------
INSERT INTO `themes` VALUES ('1', '3', 'pidiao', 'pidiao', 'http://localhost/yincart/basic/', 'http://localhost/yincart/basic/', 'http://localhost/yincart/basic/', null, null, null);
INSERT INTO `themes` VALUES ('2', 'default', '默认', 'Yincart', 'http://yincart.com', 'http://yincart.com/themes', '', '', '1371681498', '1371681498');
INSERT INTO `themes` VALUES ('3', 'pidiao', 'pidiao', 'pidiao', 'http://localhost/yincart/basic/', 'http://localhost/yincart/basic/', 'http://localhost/yincart/basic/', null, null, null);
INSERT INTO `themes` VALUES ('4', 'ultimo', 'Ultimo', '', 'http://ultimo.infortis-themes.com', '', '', '', '1371681800', '1371681800');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(128) NOT NULL DEFAULT '',
  `email` varchar(128) DEFAULT NULL,
  `activkey` varchar(128) NOT NULL DEFAULT '',
  `superuser` int(1) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '0',
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastvisit_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `mobile` varchar(25) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_username` (`username`),
  UNIQUE KEY `user_email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'demo', '62cc2d8b4bf2d8728120d052163a77df', '7895056@qq.com', '9d8bcf670b341743ea695e51990d8474', '1', '1', '2013-05-09 21:01:24', '2014-04-10 09:18:20', '0');
INSERT INTO `users` VALUES ('6', 'admin', '62cc2d8b4bf2d8728120d052163a77df', 'yhxxlm@foxmail.com', '41d49ef4be915e62d342f44d7aae11bc', '1', '1', '2013-07-06 15:40:06', '2014-04-01 13:28:23', '0');
INSERT INTO `users` VALUES ('7', 'demo123', '62cc2d8b4bf2d8728120d052163a77df', 'yhxxlm@gmail.com', 'a8b97c089d22a73cc872a1b91e864229', '0', '1', '2013-10-10 10:42:38', '2013-10-10 02:45:40', '0');
INSERT INTO `users` VALUES ('8', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '52bed61670d9ff077c4cf8b1b8c2fdd4', '0', '0', '2014-03-12 15:13:15', '0000-00-00 00:00:00', '0');
INSERT INTO `users` VALUES ('9', 'rodgexue', 'b59c67bf196a4758191e42f76670ceba', '475990465@qq.com', '6529f06d59a87ba6966eeffefe0aa544', '0', '1', '2014-03-20 16:28:57', '2014-03-20 16:30:20', '0');
INSERT INTO `users` VALUES ('10', 'jiang', '81dc9bdb52d04dc20036dbd8313ed055', '974886602@qq.com', 'f4a2edb590156d1a0f2ea43281bf7854', '0', '1', '2014-12-22 11:27:24', '0000-00-00 00:00:00', '0');
INSERT INTO `users` VALUES ('11', 'chuyaling12', 'eabc26129d4072883cb36ab91312db72', '1509429993@qq.com', 'b3cd5e1bc2c395409b5f6a05b1703416', '0', '1', '2014-12-22 17:26:12', '0000-00-00 00:00:00', '0');
INSERT INTO `users` VALUES ('12', 'wangtongxu', 'dadd7aa0b76636275d6864068a760540', 'wangtongxu618@hotmail.com', '30b24f0b9d21bafc5fd1ad7a7524af57', '0', '1', '2014-12-24 09:42:46', '0000-00-00 00:00:00', '0');
INSERT INTO `users` VALUES ('13', 'wpp', '784ed4c17cb1b2476a4b733e99db4875', '1215303889@qq.com', '6b2c64613e55e55c7f4387aeb1d1c7c0', '0', '1', '2014-12-24 17:44:23', '0000-00-00 00:00:00', '0');

-- ----------------------------
-- Table structure for `wishlist`
-- ----------------------------
DROP TABLE IF EXISTS `wishlist`;
CREATE TABLE `wishlist` (
  `wishlist_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT NULL,
  `item_id` int(10) unsigned DEFAULT NULL,
  `desc` text,
  `create_time` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`wishlist_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wishlist
-- ----------------------------
INSERT INTO `wishlist` VALUES ('8', '1', '35', null, '1392169481');
INSERT INTO `wishlist` VALUES ('9', '6', '38', null, '1394158000');
INSERT INTO `wishlist` VALUES ('10', '6', '37', null, '1394169064');
INSERT INTO `wishlist` VALUES ('11', '6', '39', null, '1395632587');

SQL;
			$this->execute($sql);

		}

		public function down ()
		{
			echo "m141111_000000_init does not support migration down.\n";

			return false;
		}

	}