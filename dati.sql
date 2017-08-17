/*
Navicat MySQL Data Transfer

Source Server         : 本地
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : dati

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-08-17 23:45:38
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for answers
-- ----------------------------
DROP TABLE IF EXISTS `answers`;
CREATE TABLE `answers` (
  `a_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `q_id` int(11) NOT NULL,
  `answer` varchar(255) DEFAULT NULL,
  `score` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of answers
-- ----------------------------
INSERT INTO `answers` VALUES ('1', '1', '<40岁', '0.00');
INSERT INTO `answers` VALUES ('2', '1', '>=40岁', '2.00');
INSERT INTO `answers` VALUES ('3', '2', '未婚', '0.00');
INSERT INTO `answers` VALUES ('4', '2', '已婚', '0.45');
INSERT INTO `answers` VALUES ('5', '3', '是', '15.00');
INSERT INTO `answers` VALUES ('6', '3', '否', '0.00');
INSERT INTO `answers` VALUES ('7', '4', '接触或暴露程度很高', '4.00');
INSERT INTO `answers` VALUES ('8', '4', '不接触或轻度暴露', '2.74');
INSERT INTO `answers` VALUES ('9', '5', '吸烟指数<15', '3.00');
INSERT INTO `answers` VALUES ('10', '5', '吸烟指数>=15', '7.00');
INSERT INTO `answers` VALUES ('11', '6', '远远超过这个饮酒量', '5.00');
INSERT INTO `answers` VALUES ('12', '6', '与以上标准相比不超过一倍', '1.69');
INSERT INTO `answers` VALUES ('13', '7', '<24', '0.00');
INSERT INTO `answers` VALUES ('14', '7', '>=24', '0.60');
INSERT INTO `answers` VALUES ('15', '8', '无', '0.00');
INSERT INTO `answers` VALUES ('16', '8', '有', '31.70');
INSERT INTO `answers` VALUES ('17', '9', '每天烧香或夏季必用蚊香', '0.20');
INSERT INTO `answers` VALUES ('18', '9', '过节时偶尔或不适用', '0.00');
INSERT INTO `answers` VALUES ('19', '10', '1次/每周或以下', '0.20');
INSERT INTO `answers` VALUES ('20', '10', '1次/每周或以上', '0.80');
INSERT INTO `answers` VALUES ('21', '11', '有', '3.00');
INSERT INTO `answers` VALUES ('22', '11', '没有（如果不知道，请选择没有）', '0.08');
INSERT INTO `answers` VALUES ('23', '12', '有', '3.80');
INSERT INTO `answers` VALUES ('24', '12', '没有（如果不知道，请选择没有）', '0.20');
INSERT INTO `answers` VALUES ('25', '13', '滚烫或热饮-开后立即或数分钟即饮用', '0.02');
INSERT INTO `answers` VALUES ('26', '13', '温冷-开后放置10-30分钟以上或冷藏', '0.00');
INSERT INTO `answers` VALUES ('27', '14', '管道自来水/桶装水', '0.00');
INSERT INTO `answers` VALUES ('28', '14', '非管道自来水/桶装水', '0.02');
INSERT INTO `answers` VALUES ('29', '15', '每周1次以下', '0.02');
INSERT INTO `answers` VALUES ('30', '15', '每周1次以上', '0.08');
INSERT INTO `answers` VALUES ('31', '16', '每周手掌大小的一块以上', '0.40');
INSERT INTO `answers` VALUES ('32', '16', '每周手掌大小的一块以下', '0.10');
INSERT INTO `answers` VALUES ('33', '17', '每天1斤蔬菜水果以上', '2.60');
INSERT INTO `answers` VALUES ('34', '17', '每天1斤蔬菜水果以下', '15.00');
INSERT INTO `answers` VALUES ('35', '18', '有', '0.02');
INSERT INTO `answers` VALUES ('36', '18', '无，或不知道', '0.00');
INSERT INTO `answers` VALUES ('37', '19', '我深感压力', '0.80');
INSERT INTO `answers` VALUES ('38', '19', '目前的状态可以自我调节掌控', '0.20');

-- ----------------------------
-- Table structure for questions
-- ----------------------------
DROP TABLE IF EXISTS `questions`;
CREATE TABLE `questions` (
  `q_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `question` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`q_id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of questions
-- ----------------------------
INSERT INTO `questions` VALUES ('1', '年龄');
INSERT INTO `questions` VALUES ('2', '婚姻状况');
INSERT INTO `questions` VALUES ('3', '您的是否吸烟？');
INSERT INTO `questions` VALUES ('4', '您生活环境中接触周围吸烟的人或在二手烟环境中吗？');
INSERT INTO `questions` VALUES ('5', '如果吸烟，您的吸烟指数是多少？（吸烟指数=每天吸烟支数/20支*年数）');
INSERT INTO `questions` VALUES ('6', '您主要饮酒的品类及量的大小与以下标准比较：啤酒280ml，白酒25ml，葡萄酒125ml');
INSERT INTO `questions` VALUES ('7', '您的身体质量指数？（身体质量指数=体重（千克）÷身高（米）÷身高（米））');
INSERT INTO `questions` VALUES ('8', '您是否有以下任意一类慢性感染性疾病：乙型肝炎，丙型肝炎，宫颈HPV感染，胃幽门螺旋杆菌感染，人类疱疹病毒EB感染等。\r\n您是否有以下任意一类慢性感染性疾病：乙型肝炎，丙型肝炎，宫颈HPV感染，胃幽门螺旋杆菌感染，人类疱疹病毒EB感染等。\r\n您是否有以下任意一类慢性感染性疾病：乙型肝炎，丙型肝炎，宫颈HPV感染，胃幽门螺旋杆菌感染，人类疱疹病毒EB感染等。');
INSERT INTO `questions` VALUES ('9', '您家庭是否有烧香、点燃蚊香等习惯');
INSERT INTO `questions` VALUES ('10', '您是否有下厨的习惯');
INSERT INTO `questions` VALUES ('11', '您的职业经历中是否有以下接触史：粉尘类（木尘、金属尘、纺织尘、皮革尘、石棉、水泥尘、粉笔尘、煤尘、土尘、香尘、不明物质尘埃），化学物质（杀虫剂、汽油、苯类、农药、木头防腐剂、甲醛、染料、油漆、焦油/沥青、不明化学物质），烟（汽车废气、焊接烟气、煤烟、油烟、不明物质烟气），放射性物质（电离辐射、紫外线、核辐射、不明物质辐射）');
INSERT INTO `questions` VALUES ('12', '请填写以及亲属罹患过肿瘤的家族史');
INSERT INTO `questions` VALUES ('13', '您饮用茶、咖啡、糖水等饮品时的饮品温度习惯是？');
INSERT INTO `questions` VALUES ('14', '您的饮水来源于？');
INSERT INTO `questions` VALUES ('15', '您有食用腌制咸菜、咸鱼、酱类、腊味/烟熏食物的习惯吗？');
INSERT INTO `questions` VALUES ('16', '您食用红肉（猪肉、牛肉、羊肉、驴肉等）的量有多少');
INSERT INTO `questions` VALUES ('17', '您食用新鲜果蔬的量有多少');
INSERT INTO `questions` VALUES ('18', '居住地是否有工业污染（如核设施、废烟、废水、固体废弃物等）');
INSERT INTO `questions` VALUES ('19', '您感到您的工作压力/生活紧张度状况如何？');

-- ----------------------------
-- Table structure for quiz
-- ----------------------------
DROP TABLE IF EXISTS `quiz`;
CREATE TABLE `quiz` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(100) NOT NULL,
  `answer` varchar(500) NOT NULL,
  `correct` tinyint(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of quiz
-- ----------------------------
INSERT INTO `quiz` VALUES ('1', '罗马帝国曾一度辉煌，令人神往，故有“条条大陆通罗马”一说。那么，今天你是怎样理解这一谚语的准确含义的？', 'A．入乡随俗 ###B．四通八达 ###C．殊途同归 ###D．流连忘返', '3');
INSERT INTO `quiz` VALUES ('2', '找出不同类的一项：', 'A.斑马 ###B.军马 ###C.赛马 ###D.骏马 ###E.驸马', '5');
INSERT INTO `quiz` VALUES ('3', ' 蜡烛在空气中燃烧，蜡烛质量逐渐变小。这说明', 'A.物质可以自生自灭###B.发生的不是化学变化###C.不遵守质量守恒定律###D.生成物为气体，散发到空气中了', '4');
INSERT INTO `quiz` VALUES ('4', '以下哪位歌手没有获得过《我是歌手》总冠军？', 'A.羽泉###B.韩磊###C.邓紫棋###D.韩红', '3');
INSERT INTO `quiz` VALUES ('5', '下列哪个标签不是HTML5中的新标签？', 'A.&lt;article&gt;###B.&lt;canvas&gt;###C.&lt;section&gt;###D.&lt;sub&gt;', '4');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `user_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `name` varchar(10) DEFAULT NULL,
  `sex` tinyint(1) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `birthday` varchar(20) DEFAULT NULL,
  `create_time` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
