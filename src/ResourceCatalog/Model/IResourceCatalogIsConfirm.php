<?php
namespace ResourceCatalog\Model;

interface IResourceCatalogIsConfirm
{
    const TYPE_RESOURECATALOG_CONFIRM = array(
        IResourceCatalog::TYPE['NULL'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['XBXZCF'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['XBXZXK'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['JGJCDXZJL'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['SJJXMXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['GGXYZHPJ'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['XSPJXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['SXBZXJGXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['SXBZXRMD'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['YSCRJZJJJZGRDXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['JDCWFXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['ZFCGDLJGXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['SJQYJSZXRDXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['JSZGXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['SJYXXS'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['JYJGXINXI'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['GRRYXXJYJ'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['JGRYXXSJYJ'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['SFJDJGCYRYZGXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['SFJDJGDJXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['GZJGJBXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['GZYXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['JCFLFWSXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['JCFLFWGZZJBXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['LSSWSXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['LSZYZGZXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['JGRYXXSSFJ'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['ZYJNZSXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['YLBXXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['YZTQSBXXHMD'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['SYBXXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['SBQYXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['GZRYXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['YZTQNMGGZHMD'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['QSLHXJJTJL'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['SLYSXKZXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['GRRYXXJTJ'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['CPTGLSZXCPRZMD'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['ESCJDPGJGHZZS'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['SHZZNJXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['GRRYXXMZJ'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['MBFQYML'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['SHTTDJXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['YXZZDWJBGXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['GRRYXXGDJ'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['JGRYXXSWGXJ'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['QYGSZXXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['AJNSRXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['ZDSSWFAJXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['QYDSXZCFXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['DTJXJGRXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['TJDCDXML'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['QIYEJBXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['GTGSHXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['CMQYSBXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['YPLSQYXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['JGRYXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['SXQYHMD'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['SPYPTSJBJLGR'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['SPYPTSJBJLDW'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['JXMPCPXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['QYYCMLXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['QYZXXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['QYDXXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['CCJCJGXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['LSTDFWBA'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['SYDWFRDJXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['JXSZLJDW'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['XZXKQYXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['DZDAGZZDWGRBZJL'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['YXQNZYZ'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['QYYH'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['QFGRYHXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['QFQYYHXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['DLYHSXHMDJG'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['DLYHSXHMDZRR'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
		IResourceCatalog::TYPE['TEST'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
    );
}