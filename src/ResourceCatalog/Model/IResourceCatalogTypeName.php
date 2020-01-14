<?php
namespace ResourceCatalog\Model;

interface IResourceCatalogTypeName
{
    const TYPE_NAME = array(
 		IResourceCatalog::TYPE['NULL'] => '0',
		IResourceCatalog::TYPE['XBXZCF'] => '2019行政处罚公示信息',
		IResourceCatalog::TYPE['XBXZXK'] => '2019行政许可公示信息',
		IResourceCatalog::TYPE['JGJCDXZJL'] => '价格监测的行政奖励',
		IResourceCatalog::TYPE['SJJXMXX'] => '社会事业领域中央预算内和省基建项目信息',
		IResourceCatalog::TYPE['GGXYZHPJ'] => '公共信用综合评价',
		IResourceCatalog::TYPE['XSPJXX'] => '刑事判决信息',
		IResourceCatalog::TYPE['SXBZXJGXX'] => '失信被执行机构信息',
		IResourceCatalog::TYPE['SXBZXRMD'] => '失信被执行人名单',
		IResourceCatalog::TYPE['YSCRJZJJJZGRDXX'] => '因私出入境中介机构资格认定信息（境外就业、留学除外）',
		IResourceCatalog::TYPE['JDCWFXX'] => '机动车违法信息（酒后驾车违法信息）',
		IResourceCatalog::TYPE['ZFCGDLJGXX'] => '政府采购代理机构信息',
		IResourceCatalog::TYPE['SJQYJSZXRDXX'] => '省级企业技术中心认定信息',
		IResourceCatalog::TYPE['JSZGXX'] => '教师资格信息',
		IResourceCatalog::TYPE['SJYXXS'] => '市级三好学生、市级优秀学生干部',
		IResourceCatalog::TYPE['JYJGXINXI'] => '教育机构信息',
		IResourceCatalog::TYPE['GRRYXXJYJ'] => '个人荣誉信息',
		IResourceCatalog::TYPE['JGRYXXSJYJ'] => '机构荣誉信息',
		IResourceCatalog::TYPE['SFJDJGCYRYZGXX'] => '司法鉴定机构从业人员资格信息',
		IResourceCatalog::TYPE['SFJDJGDJXX'] => '司法鉴定机构登记信息',
		IResourceCatalog::TYPE['GZJGJBXX'] => '公证机构基本信息',
		IResourceCatalog::TYPE['GZYXX'] => '公证员信息',
		IResourceCatalog::TYPE['JCFLFWSXX'] => '基层法律服务所信息',
		IResourceCatalog::TYPE['JCFLFWGZZJBXX'] => '基层法律服务工作者基本信息',
		IResourceCatalog::TYPE['LSSWSXX'] => '律师事务所信息',
		IResourceCatalog::TYPE['LSZYZGZXX'] => '律师执业资格证信息',
		IResourceCatalog::TYPE['JGRYXXSSFJ'] => '机构荣誉信息',
		IResourceCatalog::TYPE['ZYJNZSXX'] => '职业技能证书信息',
		IResourceCatalog::TYPE['YLBXXX'] => '医疗保险信息',
		IResourceCatalog::TYPE['YZTQSBXXHMD'] => '严重拖欠社保信息黑名单',
		IResourceCatalog::TYPE['SYBXXX'] => '失业保险信息',
		IResourceCatalog::TYPE['SBQYXX'] => '社保企业信息',
		IResourceCatalog::TYPE['GZRYXX'] => '公职人员信息',
		IResourceCatalog::TYPE['YZTQNMGGZHMD'] => '严重拖欠农民工工资黑名单',
		IResourceCatalog::TYPE['QSLHXJJTJL'] => '全市绿化先进集体奖励',
		IResourceCatalog::TYPE['SLYSXKZXX'] => '水路运输许可证信息',
		IResourceCatalog::TYPE['GRRYXXJTJ'] => '个人荣誉信息',
		IResourceCatalog::TYPE['CPTGLSZXCPRZMD'] => '产品通过“绿色之星”产品认证名单',
		IResourceCatalog::TYPE['ESCJDPGJGHZZS'] => '二手车鉴定评估机构核准证书',
		IResourceCatalog::TYPE['SHZZNJXX'] => '社会组织年检信息',
		IResourceCatalog::TYPE['GRRYXXMZJ'] => '个人荣誉信息',
		IResourceCatalog::TYPE['MBFQYML'] => '民办非企业名录',
		IResourceCatalog::TYPE['SHTTDJXX'] => '社会团体登记信息',
		IResourceCatalog::TYPE['YXZZDWJBGXX'] => '音像制作单位及变更信息',
		IResourceCatalog::TYPE['GRRYXXGDJ'] => '个人荣誉信息',
		IResourceCatalog::TYPE['JGRYXXSWGXJ'] => '机构荣誉信息',
		IResourceCatalog::TYPE['QYGSZXXX'] => '企业税务注销信息',
		IResourceCatalog::TYPE['AJNSRXX'] => 'A级纳税人信息',
		IResourceCatalog::TYPE['ZDSSWFAJXX'] => '重大税收违法案件信息',
		IResourceCatalog::TYPE['QYDSXZCFXX'] => '企业税务行政处罚信息',
		IResourceCatalog::TYPE['DTJXJGRXX'] => '对统计先进个人信息',
		IResourceCatalog::TYPE['TJDCDXML'] => '统计调查对象目录',
		IResourceCatalog::TYPE['QIYEJBXX'] => '企业基本信息',
		IResourceCatalog::TYPE['GTGSHXX'] => '个体工商户信息',
		IResourceCatalog::TYPE['CMQYSBXX'] => '驰名商标、企业著名商标信息',
		IResourceCatalog::TYPE['YPLSQYXX'] => '药品零售企业信息',
		IResourceCatalog::TYPE['JGRYXX'] => '机构荣誉信息',
		IResourceCatalog::TYPE['SXQYHMD'] => '失信企业黑名单',
		IResourceCatalog::TYPE['SPYPTSJBJLGR'] => '食品药品投诉举报奖励（个人）',
		IResourceCatalog::TYPE['SPYPTSJBJLDW'] => '食品药品投诉举报奖励（单位）',
		IResourceCatalog::TYPE['JXMPCPXX'] => '江西名牌产品信息',
		IResourceCatalog::TYPE['QYYCMLXX'] => '企业异常名录信息',
		IResourceCatalog::TYPE['QYZXXX'] => '企业注销信息',
		IResourceCatalog::TYPE['QYDXXX'] => '企业吊销信息',
		IResourceCatalog::TYPE['CCJCJGXX'] => '抽查检查结果信息',
		IResourceCatalog::TYPE['LSTDFWBA'] => '绿色通道服务备案',
		IResourceCatalog::TYPE['SYDWFRDJXX'] => '事业单位法人登记信息',
		IResourceCatalog::TYPE['JXSZLJDW'] => '江西省专利奖（单位）',
		IResourceCatalog::TYPE['XZXKQYXX'] => '行政许可企业信息',
		IResourceCatalog::TYPE['DZDAGZZDWGRBZJL'] => '对在档案工作中作出显著成绩的或者向国家捐赠重要、珍贵档案的单位和个人的表彰或者奖励',
		IResourceCatalog::TYPE['YXQNZYZ'] => '优秀青年志愿者',
		IResourceCatalog::TYPE['QYYH'] => '企业用户',
		IResourceCatalog::TYPE['QFGRYHXX'] => '欠费个人用户信息',
		IResourceCatalog::TYPE['QFQYYHXX'] => '欠费企业（机构）用户信息',
		IResourceCatalog::TYPE['DLYHSXHMDJG'] => '电力用户失信黑名单（机构）',
		IResourceCatalog::TYPE['DLYHSXHMDZRR'] => '电力用户失信黑名单（自然人）',
		IResourceCatalog::TYPE['TEST'] => '演示资源目录',
    );
}
