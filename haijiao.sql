-- phpMyAdmin SQL Dump
-- version 2.6.4-pl4
-- http://www.phpmyadmin.net
-- 
-- 主机: 114.80.211.26
-- 生成日期: 2014 年 09 月 21 日 17:06
-- 服务器版本: 5.0.95
-- PHP 版本: 5.2.6
-- 
-- 数据库: `sq_haijiao789`
-- 

-- --------------------------------------------------------

-- 
-- 表的结构 `demand`
-- 

DROP TABLE IF EXISTS `demand`;
CREATE TABLE IF NOT EXISTS `demand` (
  `id_demand` int(11) NOT NULL auto_increment,
  `description` varchar(1000) NOT NULL,
  `sex` varchar(16) default NULL,
  `addr` varchar(200) default NULL,
  `name` varchar(45) NOT NULL,
  `subject` varchar(45) NOT NULL,
  `phone` varchar(45) NOT NULL,
  `grade` varchar(45) NOT NULL,
  `user_id_user` int(11) NOT NULL,
  `time` date NOT NULL,
  PRIMARY KEY  (`id_demand`),
  UNIQUE KEY `id_demand_UNIQUE` (`id_demand`),
  KEY `fk_demand_user1_idx` (`user_id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

-- 
-- 导出表中的数据 `demand`
-- 

INSERT INTO `demand` VALUES (1, '鍝堝搱', 'buxian', '111', '浼嶇叇', '璇枃', '杩樺彨鏁欒偛', 'buxian', 1, '2014-08-15');
INSERT INTO `demand` VALUES (2, '鎯虫彁楂樿嚜宸辩殑鏁板鎴愮哗銆�', '鐢�', '涓婃捣甯傞椀琛屽尯', '鍚翠紭', '鏁板', '12345678900', '浜屽勾绾�', 4, '2014-09-02');
INSERT INTO `demand` VALUES (3, '涓婂皬瀛﹁鏂囪', '鐢�', '涓嶉檺', '楦ｄ汉', '璇枃', '13501887871', '鍏勾绾�', 12, '2014-09-18');
INSERT INTO `demand` VALUES (4, '涓婃暟瀛﹁', '鐢�', '涓婃捣闂佃', '浣愬姪', '鏁板', '13501887872', '浜屽勾绾�', 13, '2014-09-18');
INSERT INTO `demand` VALUES (5, '鎯冲紑蹇冨湴瀛︽暟瀛�', '鐢�', '铏瑰彛', '瀛欐檽搴�', '鏁板', '14501888419', '鍏勾绾�', 50, '2014-09-18');
INSERT INTO `demand` VALUES (6, '鎯冲紑蹇冨湴瀛︽暟瀛�', '鐢�', '铏瑰彛', '瀛欐檽搴�', '鏁板', '14501888419', '鍏勾绾�', 50, '2014-09-18');
INSERT INTO `demand` VALUES (7, 's', 'buxian', 's', 's', 's', 's', 'buxian', 66, '2014-09-18');
INSERT INTO `demand` VALUES (8, '鎵捐€佸笀涓婅嫳璇�', '鐢�', '涓婃捣甯傚崲婀惧尯', '鍒樻槗鍐�', '鑻辫', '10581889735', '鍏勾绾�', 98, '2014-09-18');
INSERT INTO `demand` VALUES (9, '鑻辫', '鐢�', '闀垮畞鍖�', '鏂囨€濋槼', '鑻辫', '12961888936', '鍏勾绾�', 99, '2014-09-18');
INSERT INTO `demand` VALUES (10, '鎵捐€佸笀涓婂寲瀛﹁', '鐢�', '涓婃捣甯傞噾灞�', '钁ｉ敠', '鍖栧', '14221888513', '鍏勾绾�', 100, '2014-09-18');
INSERT INTO `demand` VALUES (11, '鎵捐€佸笀涓婂寲瀛�', '鐢�', '涓婃捣甯傞椀琛�', '榄忔柦姊�', '鍖栧', '11981889265', '鍏勾绾�', 131, '2014-09-18');
INSERT INTO `demand` VALUES (12, '鑳戒笉鑳戒笂鍖栧', '鐢�', '鏉炬睙鍖�', '鏈卞厓鐠�', '鍖栧', '10581889735', '鍏勾绾�', 133, '2014-09-18');
INSERT INTO `demand` VALUES (13, '姹備竴涓潬璋辩殑鑰佸笀涓婃暟瀛�', '鐢�', '涓婃捣甯傞潤瀹夊尯', '鏈辨柊瀹�', '鏁板', '13799410252', '鍏勾绾�', 136, '2014-09-18');
INSERT INTO `demand` VALUES (14, '鎵捐嫳璇€佸笀', '鐢�', '姹熻嫃', 'blackhole', '楂樹竴鑻辫', '鐣欒█鏉�', 'buxian', 138, '2014-09-20');

-- --------------------------------------------------------

-- 
-- 表的结构 `dream`
-- 

DROP TABLE IF EXISTS `dream`;
CREATE TABLE IF NOT EXISTS `dream` (
  `id_dream` int(11) NOT NULL auto_increment,
  `description` varchar(1000) NOT NULL,
  `name` varchar(45) NOT NULL,
  `addr` varchar(80) NOT NULL,
  `story` varchar(2000) NOT NULL,
  `state` int(11) NOT NULL default '1',
  `time` date NOT NULL,
  `phone` varchar(45) NOT NULL,
  `dream_helper_name` varchar(45) default NULL,
  `dream_helper_addr` varchar(80) default NULL,
  `dream_helper_phone` varchar(45) default NULL,
  `dream_helper_time` date default NULL,
  `user_id_user` int(11) NOT NULL default '1',
  PRIMARY KEY  (`id_dream`),
  KEY `fk_dream_user1_idx` (`user_id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- 
-- 导出表中的数据 `dream`
-- 

INSERT INTO `dream` VALUES (1, '娴嬭瘯', '娴嬭瘯', '娴嬭瘯', '娴嬭瘯', 0, '2014-08-15', '娴嬭瘯', 'sjtu', '鍖椾含', '110', '2014-08-15', 1);
INSERT INTO `dream` VALUES (2, '娴嬭瘯1', '娴嬭瘯1', '娴嬭瘯1', '娴嬭瘯1', 0, '2014-08-15', '娴嬭瘯1', '浼嶇叇', '涓婂搱浜ゅぇ', '18817867832', '2014-09-16', 1);
INSERT INTO `dream` VALUES (3, '甯屾湜鑳藉緱鍒颁竴鏈啺蹇冨ザ濂剁殑涔︺€�', '浼嶅皬鐓�', '涓婃捣甯備笢宸濊矾800鍙�', '鍠滄闃呰銆�', 0, '2014-09-02', '12345678900', '浼嶇叇', '涓婃捣浜ら€氬ぇ瀛�', '18817867832', '2014-09-03', 4);

-- --------------------------------------------------------

-- 
-- 表的结构 `dream_helper`
-- 

DROP TABLE IF EXISTS `dream_helper`;
CREATE TABLE IF NOT EXISTS `dream_helper` (
  `id_dream_helper` int(11) NOT NULL auto_increment,
  `name` varchar(45) NOT NULL,
  `phone` varchar(45) NOT NULL,
  `addr` varchar(80) NOT NULL,
  `time` date NOT NULL,
  PRIMARY KEY  (`id_dream_helper`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- 导出表中的数据 `dream_helper`
-- 


-- --------------------------------------------------------

-- 
-- 表的结构 `lesson`
-- 

DROP TABLE IF EXISTS `lesson`;
CREATE TABLE IF NOT EXISTS `lesson` (
  `id_lesson` int(11) NOT NULL auto_increment,
  `grade` varchar(45) default NULL,
  `name` varchar(45) NOT NULL,
  `user_id_user` int(11) NOT NULL,
  `is_del` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id_lesson`),
  KEY `fk_lesson_user1_idx` (`user_id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

-- 
-- 导出表中的数据 `lesson`
-- 

INSERT INTO `lesson` VALUES (1, '23', '23', 1, 0);
INSERT INTO `lesson` VALUES (2, '23', '23', 1, 0);
INSERT INTO `lesson` VALUES (3, '涓冨勾绾т互涓�', '鑻辫', 6, 0);
INSERT INTO `lesson` VALUES (4, '灏忓锛屽垵銆侀珮涓�', '鏁板', 4, 0);
INSERT INTO `lesson` VALUES (5, '23', '23', 5, 0);
INSERT INTO `lesson` VALUES (6, '灏忓涓夊勾绾�', '鑷劧绉戝', 7, 0);
INSERT INTO `lesson` VALUES (7, '鍒濅腑銆侀珮涓�', '鎴戠殑澶у', 2, 0);
INSERT INTO `lesson` VALUES (8, '灏忓鍒濅腑', '鏁板', 103, 0);
INSERT INTO `lesson` VALUES (9, '灏忓', '鏁板', 104, 0);
INSERT INTO `lesson` VALUES (10, '鍒濅腑', '璇枃', 109, 0);
INSERT INTO `lesson` VALUES (11, '鍒濅腑', '璇枃', 111, 0);
INSERT INTO `lesson` VALUES (12, '灏忓', '璇枃', 113, 0);
INSERT INTO `lesson` VALUES (13, '楂樹腑', '鑻辫', 115, 0);
INSERT INTO `lesson` VALUES (14, '楂樹腑', '鑻辫', 116, 0);
INSERT INTO `lesson` VALUES (15, '楂樹腑', '鑻辫', 117, 0);
INSERT INTO `lesson` VALUES (16, '鍒濅腑楂樹腑', '鑻辫', 120, 0);
INSERT INTO `lesson` VALUES (17, '鍒濅腑', '鐗╃悊', 122, 0);
INSERT INTO `lesson` VALUES (18, '楂樹腑', '鐗╃悊', 123, 0);
INSERT INTO `lesson` VALUES (19, '鍒濅腑', '鐗╃悊', 124, 0);
INSERT INTO `lesson` VALUES (20, '鍒濅腑', '鍖栧', 127, 0);
INSERT INTO `lesson` VALUES (21, ' 楂樹腑', '鍖栧', 128, 0);
INSERT INTO `lesson` VALUES (22, '楂樹腑', '鐗╃悊锛屽寲瀛�', 129, 0);
INSERT INTO `lesson` VALUES (23, '楂樹腑', '鍖栧', 130, 0);
INSERT INTO `lesson` VALUES (24, '楂樹腑', '鍦扮悊', 132, 0);
INSERT INTO `lesson` VALUES (25, '楂樹竴', '鑻辫', 139, 0);

-- --------------------------------------------------------

-- 
-- 表的结构 `message`
-- 

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id_message` int(11) NOT NULL auto_increment,
  `content` varchar(1000) default NULL,
  `user_id_from` int(11) NOT NULL,
  `user_id_to` int(11) NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY  (`id_message`),
  KEY `fk_message_user_idx` (`user_id_from`),
  KEY `fk_message_user1_idx` (`user_id_to`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- 
-- 导出表中的数据 `message`
-- 

INSERT INTO `message` VALUES (1, '濂藉ソ瀛︿範鍝�', 4, 1, '2014-09-02 01:14:46');
INSERT INTO `message` VALUES (2, '鏈塨ug?', 1, 4, '2014-09-03 01:27:31');
INSERT INTO `message` VALUES (3, '鍟﹀暒鍟�', 7, 4, '2014-09-16 04:57:40');
INSERT INTO `message` VALUES (4, '鍟﹀暒鍟�', 7, 1, '2014-09-16 04:58:36');
INSERT INTO `message` VALUES (5, '鍛ㄤ竴涓嬪崍4锛�30鑷�5锛�30', 139, 138, '2014-09-20 10:59:55');

-- --------------------------------------------------------

-- 
-- 表的结构 `news`
-- 

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id_news` int(11) NOT NULL auto_increment,
  `title` varchar(45) NOT NULL,
  `content` varchar(10000) NOT NULL,
  PRIMARY KEY  (`id_news`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- 导出表中的数据 `news`
-- 


-- --------------------------------------------------------

-- 
-- 表的结构 `resource`
-- 

DROP TABLE IF EXISTS `resource`;
CREATE TABLE IF NOT EXISTS `resource` (
  `id_resource` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `time` datetime NOT NULL,
  `count` int(11) NOT NULL default '0',
  `user_id_user` int(11) NOT NULL,
  `type` varchar(45) NOT NULL,
  `file_type` varchar(45) NOT NULL,
  `is_del` int(11) NOT NULL default '0',
  `size` int(11) NOT NULL,
  PRIMARY KEY  (`id_resource`),
  KEY `fk_resource_user1_idx` (`user_id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- 
-- 导出表中的数据 `resource`
-- 

INSERT INTO `resource` VALUES (1, 'Lighthouse.jpg', '2014-08-15 05:00:04', 0, 1, 'jpg', '鍏朵粬', 0, 561276);
INSERT INTO `resource` VALUES (2, '棣栭〉 - 鍓湰.jpg', '2014-09-02 07:56:02', 0, 5, 'jpg', '璇枃', 0, 35160);
INSERT INTO `resource` VALUES (3, '鍩轰簬Web 3D鎶€鏈垚鏋滄帰绌舵梾娓镐骇涓氱數瀛愬晢鍔℃柊鏂瑰悜_鏀�.docx', '2014-09-16 04:59:06', 14, 7, 'docx', '璇枃', 0, 42064);
INSERT INTO `resource` VALUES (4, '楂樹竴璇枃蹇呬慨1绗洓鍗曞厓娴嬭瘯棰�.doc', '2014-09-18 09:55:28', 2, 2, 'doc', '璇枃', 0, 185344);

-- --------------------------------------------------------

-- 
-- 表的结构 `user`
-- 

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL auto_increment,
  `name` varchar(45) NOT NULL,
  `passwd` varchar(45) NOT NULL,
  `type` varchar(10) NOT NULL default 'student',
  `school` varchar(45) default NULL,
  `sex` varchar(10) default 'male',
  `score` float NOT NULL default '5',
  `score_count` int(11) NOT NULL default '1',
  `time_for_lesson` int(11) NOT NULL default '0',
  `register_time` date NOT NULL,
  `job` varchar(45) default NULL,
  `addr` varchar(45) default NULL,
  `has_pic` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id_user`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  UNIQUE KEY `id_UNIQUE` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=140 DEFAULT CHARSET=latin1 AUTO_INCREMENT=140 ;

-- 
-- 导出表中的数据 `user`
-- 

INSERT INTO `user` VALUES (1, 'liangpig', '356a192b7913b04c54574d18c28d46e6395428ab', 'teacher', '浜ゅぇ', 'male', 5, 2, 0, '2014-08-15', NULL, NULL, 1);
INSERT INTO `user` VALUES (2, '鍒樻偊', 'be3a6ea874b11f223a75fc1d59eca15450cfbd29', 'teacher', '涓婃捣浜ら€氬ぇ瀛�', 'buxian', 5, 1, 0, '2014-09-02', '', '', 1);
INSERT INTO `user` VALUES (3, 'wuyou2006@163.com', '9105bf69269e28ae4de9565d063cc079524c6773', 'teacher', '涓婃捣浜ら€氬ぇ瀛�', 'male', 5, 1, 0, '2014-09-02', '纭曞＋鐮旂┒鐢�', '涓婃捣甯備笢宸濊矾800鍙�', 0);
INSERT INTO `user` VALUES (4, '鍚翠紭', '9105bf69269e28ae4de9565d063cc079524c6773', 'teacher', '涓婃捣浜ら€氬ぇ瀛�', 'buxian', 5, 1, 0, '2014-09-02', '纭曞＋鐮旂┒鐢�', '涓婃捣甯備笢宸濊矾800鍙�', 1);
INSERT INTO `user` VALUES (5, '娴嬭瘯', '356a192b7913b04c54574d18c28d46e6395428ab', 'teacher', '浜ゅぇ', 'male', 3.5, 2, 0, '2014-09-02', NULL, NULL, 1);
INSERT INTO `user` VALUES (6, '琚佽妸', '5ee57ebc576453dd1ba8a8d32c5b61dcf1d537b9', 'teacher', '涓婃捣浜ら€氬ぇ瀛�', 'female', 5, 1, 0, '2014-09-02', '瀛︾敓', '涓婃捣甯備笢宸濊矾800鍙�', 1);
INSERT INTO `user` VALUES (7, '浼嶇叇', '99bf774e844068ec9cdd6438280b7d452d773233', 'teacher', '涓婃捣浜ら€氬ぇ瀛�', 'buxian', 5, 1, 0, '2014-09-03', '', '', 1);
INSERT INTO `user` VALUES (8, 'qqq', 'a056c8d05ae9ac6ca180bc991b93b7ffe37563e0', 'student', '', 'male', 5, 1, 0, '2014-09-04', NULL, NULL, 0);
INSERT INTO `user` VALUES (9, 'lww', 'c9b47f6960d972774c0e88c07edb334afeaff1fe', 'teacher', '涓婃捣浜ら€氬ぇ瀛�', 'buxian', 5, 1, 0, '2014-09-05', '', '', 1);
INSERT INTO `user` VALUES (10, '鏉庡垰', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'student', '涓婃捣浜ゅぇ', 'buxian', 5, 1, 0, '2014-09-16', '', '', 0);
INSERT INTO `user` VALUES (11, '鎴戠埍缃�', 'fa6977c99b809db68e1c56888ec38bd004719b39', 'student', '', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (12, '楦ｄ汉', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 1);
INSERT INTO `user` VALUES (13, '浣愬姪', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '澶╁北涓€灏�', 'buxian', 5, 1, 0, '2014-09-18', '', '', 1);
INSERT INTO `user` VALUES (14, '鐜嬫槑', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (15, '鐢颁附', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '瀹濆北鍖鸿檸鏋楄矾灏忓', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (16, '鍒樼懚', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '涓婃捣甯傛暀绉戦櫌瀹為獙灏忓', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (17, '闄堥湶', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '鏇瑰厜褰皬瀛�', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (18, '鑲栫宄�', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '涓婃捣甯傚叚涓€灏忓', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (19, '鑻熼洦', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '涓婃捣甯堣寖澶у绗竴闄勫睘灏忓', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (20, '榄忓叞', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '姹囧笀灏忓', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (21, '鐧�', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (22, '绫冲皬闆�', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '涓滃畨璺浜屽皬瀛�', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (23, '鐜嬬帀娲�', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '涓北鍖楄矾绗竴灏忓', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (24, '鐜嬫檹濮�', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '娴︿笢鏂板尯涓滄柟灏忓', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (25, '鐜嬬ゥ绂�  ', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '澶嶆棪绉戞妧鍥皬瀛�', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (26, '寮犺秴', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '闂稿寳鍖哄疄楠屽皬瀛�', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (27, '鏉紙灏忥級鑹�', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '闈欏畨鍖烘暀鑲插闄㈤檮灞炲鏍�', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (28, '榛勯儊', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '涓婃捣灏忓', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (29, '寮犻潤', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '涓婃捣甯傝櫣鍙ｅ尯鏇查槼绗洓灏忓', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (30, '鏉庨潤', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '鐖辫強灏忓', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (31, '璐鸿壋鐞�', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '姹熸ˉ灏忓', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (32, '鍛ㄩ挵闆�', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '澶嶆棪绉戞妧鍥皬瀛�', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (33, '鐢戞鑹�', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '娴︿笢鏂板尯涓滄柟灏忓', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (34, '寰愮孩姊�', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '鍚戦槼灏忓', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (35, '缃楅槼', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '鍚戦槼灏忓', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (36, '楂樹箰', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '闂佃鍖哄钩鍗楀皬瀛�', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (37, '闊╄繍瓒�', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '姘翠赴璺皬瀛�', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (38, '绋嬪嚖', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '涓婃捣澶栧浗璇ぇ瀛﹂檮灞炲鍥借灏忓', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (39, '寮犲厓鍏�', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '涓滄柟闃舵鍙岃瀛︽牎', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (40, '鍐僵浣�', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '涓婃捣甯傞粍娴﹀尯澶嶅叴涓滆矾绗笁灏忓', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (41, '鐜嬮挮', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '涓婃捣澶栧浗璇ぇ瀛﹂檮灞炲鍥借灏忓', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (42, '浣曞畨鐞�', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '鎺ф睙浜屾潙灏忓', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (43, '鏉ㄩ噾骞�', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '鍑ゅ煄鏂版潙灏忓', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (44, '鏉庣繝钀�', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '鍗㈡咕鍖虹浜屼腑蹇冨皬瀛�', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (45, '姊佷匠浼�', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '涓婃捣甯傚疂灞卞尯鏉ㄦ嘲灏忓', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (46, '鍗㈠皬鐟�', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '钄疯枃灏忓', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (47, '鐜嬩簯 ', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '绂忓北澶栧浗璇皬瀛︾灞辨牎鍖�', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (48, '鍒樺簲闇�?', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '铏瑰彛鍖虹鍥涗腑蹇冨皬瀛�', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (49, 'q', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', 'qqqq', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (50, '瀛欐檽搴�', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '闀垮畞瀹為獙灏忓', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (51, '鏉庡啺', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '涓婃捣澶栧浗璇ぇ瀛﹂檮灞炲鍥借灏忓', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (52, '寤栫拹鐠�', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '鍗㈡咕鍖虹涓€涓績灏忓', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (53, '鍐ⅱ', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '瀹濆北瀹為獙瀛︽牎', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (54, '楂樺皻濞�', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '鑸崕绗竴灏忓', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (55, '鐜嬬€氭嫳', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '瀹濆北绗竴涓績灏忓', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (56, '闊╃', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '涓婃捣甯堣寖涓撶瀛︽牎闄勫睘灏忓', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (57, '鏉庣浖鐩�', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '姘翠赴璺皬瀛�', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (58, '鍞愮拹', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '鍗楃繑灏忓', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (59, '鏉滃阀', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '姘翠赴璺皬瀛�', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (60, '榛勬儫澶�', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '涓婃捣甯傚疄楠屽鏍�', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (61, '鏅枃鐏�', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '闂佃鍖哄疄楠屽皬瀛�', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (62, '渚穬浣�', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '涓婃捣甯堣寖澶у绗竴闄勫睘灏忓', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (63, '寮犲嚖', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '瀹濆北鍖哄拰琛峰皬瀛�', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (64, '寮犳収鏃�', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '闂佃鍖哄疄楠屽皬瀛�(鏄ュ煄鏍″尯', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (65, '鐒︿簯鐞�', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '瀹濆北骞胯偛灏忓', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (66, 's', 'a0f1490a20d0211c997b44bc357e1972deab8ae3', 'student', 's', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (67, '璧垫槑', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '闈欏畨鍖烘暀鑲插闄㈤檮灞炲鏍�', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (68, '寮犺繘', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '澶嶆棪绉戞妧鍥皬瀛�', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (69, '鏉庣娉�', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '姘翠赴璺皬瀛�', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (70, '寮犵帀閼�', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '姘翠赴璺皬瀛�', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (71, '鑻熸収鏁�', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '姹傜煡灏忓', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (72, '闆烽洩鑾�    ', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '涓北鍖楄矾绗竴灏忓', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (73, '寮犳稕', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '涓婃捣甯傛暀绉戦櫌瀹為獙灏忓', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (74, '鐜嬪┓濠�', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '姘翠赴璺皬瀛�', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (75, '鐜嬮湶', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '闂佃鍖哄钩鍗楀皬瀛�', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (76, '鏉ㄥ織寮�', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '鍖楄敗闀囦腑蹇冨皬瀛�', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (77, '琚佽搐蹇�', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '瀹濆北鍖哄拰琛峰皬瀛�', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (78, 'g', '54fd1711209fb1c0781092374132c66e79e2241b', 'student', 'g', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (79, '璋㈣弫', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '闀垮畞瀹為獙灏忓', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (80, '鍙跺皬绾�', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '涓婃捣甯傞潤瀹夊尯绗竴涓績灏忓', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (81, '鐜嬪浗閿�', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '瀹濆北鍖虹孩鏄熷皬瀛�', 'buxian', 5, 1, 0, '2014-09-18', '', '', 0);
INSERT INTO `user` VALUES (82, '浠绘柦闆�', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '寤洪潚灏忓', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (83, '榫氭絿', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '瀹濆北瀹為獙瀛︽牎', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (84, '璋', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '涓婃捣甯堣寖澶у闄勫睘鍗㈡咕瀹為獙灏忓', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (85, '鐜嬭瘧', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '鍚戦槼灏忓', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (86, '瀹嬮洦钖�?', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '铏瑰彛鍖虹涓変腑蹇冨皬瀛�', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (87, '鑳¤澏', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '涓滃畨璺浜屽皬瀛�', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (88, '钁ｆ辰鍙�', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '瀹濆北鍖虹孩鏄熷皬瀛�', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (89, '璧甸檲鏋�', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '瀹濆北骞胯偛灏忓', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (90, 'ab', '3d4f2bf07dc1be38b20cd6e46949a1071f9d0e3d', 'teacher', '鍖椾含鐞嗗伐澶у', 'female', 5, 1, 0, '2014-09-18', NULL, NULL, 1);
INSERT INTO `user` VALUES (91, 'qiankun', '3d4f2bf07dc1be38b20cd6e46949a1071f9d0e3d', 'teacher', '鍖椾含澶у', 'buxian', 5, 1, 0, '2014-09-18', '', '', 1);
INSERT INTO `user` VALUES (92, 'qiany', '3d4f2bf07dc1be38b20cd6e46949a1071f9d0e3d', 'teacher', '鍖椾含澶у', 'buxian', 5, 1, 0, '2014-09-18', '', '', 1);
INSERT INTO `user` VALUES (93, 'yufei', '3d4f2bf07dc1be38b20cd6e46949a1071f9d0e3d', 'teacher', '娓呭崕澶у', 'buxian', 5, 1, 0, '2014-09-18', '', '', 1);
INSERT INTO `user` VALUES (94, '娴嬭瘯1', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '娴嬭瘯', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (95, '娴嬭瘯2', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '娴嬭瘯', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (96, '娴嬭瘯3', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '娴嬭瘯', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (97, '娴嬭瘯4', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '娴嬭瘯', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (98, '鍒樻槗鍐�', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '澶嶆棪澶у闄勫睘灏忓', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (99, '鏂囨€濋槼', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '涓婃捣鍚屾祹澶у鍢夊畾榛勬浮灏忓', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (100, '钁ｉ敠', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '铏瑰彛鍖虹涓変腑蹇冨皬瀛�', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (101, '鍗″崱瑗�', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '蹇嶈€�', 'buxian', 5, 1, 0, '2014-09-18', '', '', 1);
INSERT INTO `user` VALUES (102, 'pengj', '3d4f2bf07dc1be38b20cd6e46949a1071f9d0e3d', 'teacher', '娓呭崕澶у', 'buxian', 5, 1, 0, '2014-09-18', '', '', 1);
INSERT INTO `user` VALUES (103, 'wux', '3d4f2bf07dc1be38b20cd6e46949a1071f9d0e3d', 'teacher', '涓浗浜烘皯澶у', 'female', 5, 1, 0, '2014-09-18', NULL, NULL, 1);
INSERT INTO `user` VALUES (104, 'yanp', '3d4f2bf07dc1be38b20cd6e46949a1071f9d0e3d', 'teacher', '涓浗浜烘皯澶у', 'female', 5, 1, 0, '2014-09-18', NULL, NULL, 1);
INSERT INTO `user` VALUES (105, '閭变紵', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '涓滄柟闃舵鍙岃瀛︽牎', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 0);
INSERT INTO `user` VALUES (106, '姊侀潚闈�', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '涓婃捣涓栫晫澶栧浗璇皬瀛�', 'buxian', 5, 1, 0, '2014-09-18', '', '', 0);
INSERT INTO `user` VALUES (107, '鑳″己', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '瀹濆北骞胯偛灏忓', 'buxian', 5, 1, 0, '2014-09-18', '', '', 1);
INSERT INTO `user` VALUES (108, '閮戞€濅匠', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '涓婃捣甯傛暀绉戦櫌瀹為獙灏忓', 'buxian', 5, 1, 0, '2014-09-18', '', '', 1);
INSERT INTO `user` VALUES (109, 'wangy', '3d4f2bf07dc1be38b20cd6e46949a1071f9d0e3d', 'teacher', '瀵瑰缁忚锤澶у', 'female', 5, 1, 0, '2014-09-18', NULL, NULL, 1);
INSERT INTO `user` VALUES (110, '姹熸枃姝�', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '姘翠赴璺皬瀛�', 'buxian', 5, 1, 0, '2014-09-18', '', '', 1);
INSERT INTO `user` VALUES (111, 'wangt', '3d4f2bf07dc1be38b20cd6e46949a1071f9d0e3d', 'teacher', '瀵瑰缁忚锤澶у', 'female', 5, 1, 0, '2014-09-18', NULL, NULL, 1);
INSERT INTO `user` VALUES (112, '閮戝浗瀵�', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '榻愰綈鍝堝皵璺涓€灏忓', 'buxian', 5, 1, 0, '2014-09-18', '', '', 1);
INSERT INTO `user` VALUES (113, 'wangz', '3d4f2bf07dc1be38b20cd6e46949a1071f9d0e3d', 'teacher', '鍖椾含鐞嗗伐澶у', 'female', 5, 1, 0, '2014-09-18', NULL, NULL, 1);
INSERT INTO `user` VALUES (114, '璧电帀璐�', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '閫稿か灏忓', 'buxian', 5, 1, 0, '2014-09-18', '', '', 1);
INSERT INTO `user` VALUES (115, 'tianz', '3d4f2bf07dc1be38b20cd6e46949a1071f9d0e3d', 'teacher', '澶嶆棪澶у', 'female', 5, 1, 0, '2014-09-18', NULL, NULL, 1);
INSERT INTO `user` VALUES (116, 'wangg', '3d4f2bf07dc1be38b20cd6e46949a1071f9d0e3d', 'teacher', '涓婃捣浜ら€氬ぇ瀛�', 'female', 5, 1, 0, '2014-09-18', NULL, NULL, 1);
INSERT INTO `user` VALUES (117, 'gaoy', '3d4f2bf07dc1be38b20cd6e46949a1071f9d0e3d', 'teacher', '涓婃捣浜ら€氬ぇ瀛�', 'female', 5, 1, 0, '2014-09-18', NULL, NULL, 1);
INSERT INTO `user` VALUES (118, '濮氳繙 ', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '寤洪潚灏忓', 'buxian', 5, 1, 0, '2014-09-18', '', '', 1);
INSERT INTO `user` VALUES (119, '鐜嬭寳宄�', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '闀垮畞瀹為獙灏忓', 'buxian', 5, 1, 0, '2014-09-18', '', '', 1);
INSERT INTO `user` VALUES (120, 'gaoyz', '3d4f2bf07dc1be38b20cd6e46949a1071f9d0e3d', 'teacher', '涓婃捣浜ら€氬ぇ瀛�', 'female', 5, 1, 0, '2014-09-18', NULL, NULL, 1);
INSERT INTO `user` VALUES (121, '鏉庣幉', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '浜旇鍦哄皬瀛�', 'buxian', 5, 1, 0, '2014-09-18', '', '', 1);
INSERT INTO `user` VALUES (122, 'gaoz', '3d4f2bf07dc1be38b20cd6e46949a1071f9d0e3d', 'teacher', '涓婃捣浜ら€氬ぇ瀛�', 'female', 5, 1, 0, '2014-09-18', NULL, NULL, 1);
INSERT INTO `user` VALUES (123, 'baoq', '3d4f2bf07dc1be38b20cd6e46949a1071f9d0e3d', 'teacher', '涓婃捣浜ら€氬ぇ瀛�', 'female', 5, 1, 0, '2014-09-18', NULL, NULL, 1);
INSERT INTO `user` VALUES (124, 'yina', '3d4f2bf07dc1be38b20cd6e46949a1071f9d0e3d', 'teacher', '澶嶆棪澶у', 'female', 5, 1, 0, '2014-09-18', NULL, NULL, 1);
INSERT INTO `user` VALUES (125, '钁涗害浜�', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'student', '瀛樺織涓', 'buxian', 5, 1, 0, '2014-09-18', '', '', 0);
INSERT INTO `user` VALUES (126, '鏂硅嫢鍗�', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '鍚戦槼灏忓', 'buxian', 5, 1, 0, '2014-09-18', '', '', 1);
INSERT INTO `user` VALUES (127, 'rid', '3d4f2bf07dc1be38b20cd6e46949a1071f9d0e3d', 'teacher', '姝︽眽澶у', 'female', 5, 1, 0, '2014-09-18', NULL, NULL, 1);
INSERT INTO `user` VALUES (128, 'gaokeji', '3d4f2bf07dc1be38b20cd6e46949a1071f9d0e3d', 'teacher', '涓滃寳璐㈢粡澶у', 'female', 5, 1, 0, '2014-09-18', NULL, NULL, 1);
INSERT INTO `user` VALUES (129, 'kaih', '3d4f2bf07dc1be38b20cd6e46949a1071f9d0e3d', 'teacher', '杈藉畞澶у', 'female', 5, 1, 0, '2014-09-18', NULL, NULL, 1);
INSERT INTO `user` VALUES (130, 'huak', '3d4f2bf07dc1be38b20cd6e46949a1071f9d0e3d', 'teacher', '鍝堝皵婊ㄥ伐涓氬ぇ瀛�', 'female', 5, 1, 0, '2014-09-18', NULL, NULL, 1);
INSERT INTO `user` VALUES (131, '榄忚瘲姊�', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '涓婃捣甯傚疄楠屽鏍�', 'buxian', 5, 1, 0, '2014-09-18', '', '', 1);
INSERT INTO `user` VALUES (132, 'kait', '3d4f2bf07dc1be38b20cd6e46949a1071f9d0e3d', 'teacher', '鍚夋灄澶у', 'female', 5, 1, 0, '2014-09-18', NULL, NULL, 1);
INSERT INTO `user` VALUES (133, '鏈卞厓鐠�', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '瀹濆北鍖哄拰琛峰皬瀛�', 'buxian', 5, 1, 0, '2014-09-18', '', '', 1);
INSERT INTO `user` VALUES (134, '璧电彛', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '浜旇鍦哄皬瀛�', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 1);
INSERT INTO `user` VALUES (135, '璧靛畫闆彛', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '澶嶆棪绉戞妧鍥皬瀛�', 'male', 5, 1, 0, '2014-09-18', NULL, NULL, 1);
INSERT INTO `user` VALUES (136, '绁濇槦闆�', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 'student', '榛勬郸鍖虹涓€涓績灏忓', 'buxian', 5, 1, 0, '2014-09-18', '', '', 1);
INSERT INTO `user` VALUES (137, 'Jennifer', '002afd586c6e292a3947faf55843bec72e6b1d8a', 'teacher', '涓婃捣澶栧浗璇ぇ瀛�', 'buxian', 5, 1, 0, '2014-09-18', '', '', 0);
INSERT INTO `user` VALUES (138, 'blackhole', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'student', '浜旂埍灏忓', 'buxian', 5, 1, 0, '2014-09-19', '', '', 0);
INSERT INTO `user` VALUES (139, '椋庡崕', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'teacher', '涓婃捣浜ら€氬ぇ瀛�', 'buxian', 4.25, 4, 0, '2014-09-19', '', '', 0);

-- 
-- 限制导出的表
-- 

-- 
-- 限制表 `demand`
-- 
ALTER TABLE `demand`
  ADD CONSTRAINT `fk_demand_user1` FOREIGN KEY (`user_id_user`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

-- 
-- 限制表 `dream`
-- 
ALTER TABLE `dream`
  ADD CONSTRAINT `fk_dream_user1` FOREIGN KEY (`user_id_user`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

-- 
-- 限制表 `lesson`
-- 
ALTER TABLE `lesson`
  ADD CONSTRAINT `fk_lesson_user1` FOREIGN KEY (`user_id_user`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

-- 
-- 限制表 `message`
-- 
ALTER TABLE `message`
  ADD CONSTRAINT `fk_message_user` FOREIGN KEY (`user_id_from`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_message_user1` FOREIGN KEY (`user_id_to`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

-- 
-- 限制表 `resource`
-- 
ALTER TABLE `resource`
  ADD CONSTRAINT `fk_resource_user1` FOREIGN KEY (`user_id_user`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;
