<?php
/**
 * Copyright (C) 2006-2010 YUCHENG HU
 *
 * ---------------------------------------------
 * HA WEBSYSTEMS
 * http://www.hawebs.net
 * https://www.hawebs.org/forums/computer/
 *
 * CONTACT
 * huyuchengus@gmail.com / yuchenghu@hawebs.net
 * 
 * ---------------------------------------------
 * [A] GNU GENERAL PUBLIC LICENSE GNU/LGPL
 * [B] Apache License, Version 2.0
 *
 * ---------------------------------------------
 * NOTE
 * 1. 所有的语言配置文件请采用 UTF-8 编码 
 *
 * ---------------------------------------------
 */
$mod_strings = Array(
  'LBL_MODULE_NAME' => '发票',
  'LBL_SO_MODULE_NAME' => '发票',
  'LBL_RELATED_PRODUCTS' => '在线清单',
  'LBL_MODULE_TITLE' => '发票：首页',
  'LBL_SEARCH_FORM_TITLE' => '搜寻发票',
  'LBL_LIST_FORM_TITLE' => '发票列表',
  'LBL_LIST_SO_FORM_TITLE' => '销售列表',
  'LBL_NEW_FORM_TITLE' => '新增发票',
  'LBL_NEW_FORM_SO_TITLE' => '新增销售',
  'LBL_MEMBER_ORG_FORM_TITLE' => '会员所属单位',

'LBL_LIST_ACCOUNT_NAME' => '客户名称',
  'LBL_LIST_CITY' => '乡镇市区',
  'LBL_LIST_WEBSITE' => '网站',
  'LBL_LIST_STATE' => '市(县)',
  'LBL_LIST_PHONE' => '电话',
  'LBL_LIST_EMAIL_ADDRESS' => '电子邮件',
  'LBL_LIST_CONTACT_NAME' => '联络人名称',

//DON'T CONVERT THESE THEY ARE MAPPINGS
'db_name' => 'LBL_LIST_ACCOUNT_NAME',
'db_website' => 'LBL_LIST_WEBSITE',
'db_billing_address_city' => 'LBL_LIST_CITY',

//END DON'T CONVERT

 'LBL_ACCOUNT' => '客户：',
  'LBL_ACCOUNT_NAME' => '客户名称：',
  'LBL_PHONE' => '电话：',
  'LBL_WEBSITE' => '网站：',
  'LBL_FAX' => '传真：',
 'LBL_TICKER_SYMBOL' => '传票符号：',
  'LBL_OTHER_PHONE' => '其它电话：',
  'LBL_ANY_PHONE' => '其它电话：',
  'LBL_MEMBER_OF' => '会员：',
  'LBL_EMAIL' => '电子信箱：',
 'LBL_EMPLOYEES' => '员工数：',
  'LBL_OTHER_EMAIL_ADDRESS' => '其它电子信箱：',
  'LBL_ANY_EMAIL' => '其它电子信箱：',
  'LBL_OWNERSHIP' => '负责人：',
  'LBL_RATING' => '评分：',
'LBL_INDUSTRY' => '产业别：',
  'LBL_SIC_CODE' => '统一编号：',
  'LBL_TYPE' => '类型：',
  'LBL_ANNUAL_REVENUE' => '年收入：',
  'LBL_ADDRESS_INFORMATION' => '地址信息',
  'LBL_Quote_INFORMATION' => '客户信息',
  'LBL_CUSTOM_INFORMATION' => '自订信息',
  'LBL_BILLING_ADDRESS' => '发票地址：',
  'LBL_SHIPPING_ADDRESS' => '送货地址：',
  'LBL_ANY_ADDRESS' => '任一地址：',
 'LBL_CITY' => '乡镇市区：',
  'LBL_STATE' => '市(县)：',
  'LBL_POSTAL_CODE' => '邮政编码：',
  'LBL_COUNTRY' => '省（市/自治区）：',
 'LBL_DESCRIPTION_INFORMATION' => '细节内容',
  'LBL_DESCRIPTION' => '描述：',
  'LBL_TERMS_INFORMATION' => '限制与条件',
  'NTC_COPY_BILLING_ADDRESS' => '复制发票地址到送货地址',
  'NTC_COPY_SHIPPING_ADDRESS' => '复制送货地址到发票地址',
  'NTC_REMOVE_MEMBER_ORG_CONFIRMATION' => '您确定要移除这笔会员所属单位记录?',
  'LBL_DUPLICATE' => '潜在案件内容复制到客户',
  'MSG_DUPLICATE' => '建立这笔客户数据来自于潜在案件内容，您可以点选客户列表中的客户以复制建立新的客户，并且继承它的相关数据。',

 'LBL_INVITEE' => '联络人',
  'ERR_DELETE_RECORD' => '必须指定一笔记录编号才能够删除客户。',
  'LBL_SELECT_ACCOUNT' => '选择客户',
  'LBL_GENERAL_INFORMATION' => '一般信息',

//for v4 release added
 'LBL_NEW_POTENTIAL' => '新增潜在案件',
  'LBL_POTENTIAL_TITLE' => '潜在案件',

 'LBL_NEW_TASK' => '新增任务',
  'LBL_TASK_TITLE' => '任务',
  'LBL_NEW_CALL' => '新增电话记录',
  'LBL_CALL_TITLE' => '电话记录',
  'LBL_NEW_MEETING' => '新增会议记录',
  'LBL_MEETING_TITLE' => '会议',
  'LBL_NEW_EMAIL' => '新增电子邮件',
  'LBL_EMAIL_TITLE' => '邮件',
  'LBL_NEW_CONTACT' => '新增联络人',
  'LBL_CONTACT_TITLE' => '联络人',

//Added vtiger_fields after RC1 - Release
 'LBL_ALL' => '全部',
  'LBL_PROSPECT' => '期望',
  'LBL_INVESTOR' => '投资者',
  'LBL_RESELLER' => '转售人',
  'LBL_PARTNER' => '伙伴',

// Added for 4GA
  'LBL_TOOL_FORM_TITLE' => '客户工具',
//Added for 4GA
'Subject' => '标题',
'Quote Name' => '报价名称',
'Vendor Name' => '卖方名称',
'Invoice Terms' => '发票期限',
'Contact Name' => '联络人名称',//to include contact name vtiger_field in Invoice
'Invoice Date' => '发票日期',
'Sub Total' => '小计',
'Issued Date' => '创建日期',
'Due Date' => '应付日期',
'Carrier' => '货运商',
'Type' => '类型',
'Sales Tax' => '销售税金',
'Sales Commission' => '销售佣金',
'Excise Duty' => '营业税',
'Total' => '总计 ',
'Product Name' => '商品名称',
'Assigned To' => '负责人',
'Billing Address' => '发票地址',
'Shipping Address' => '送货地址',
'Billing City' => '[发票地址]乡镇市区',
'Billing State' => '[发票地址]市(县)',
'Billing Code' => '[发票地址]邮政编码',
'Billing Country' => '[发票地址]省（市/自治区）',
'Billing Po Box' => '[发票地址]邮政信箱',
'Shipping Po Box' => '[送货地址]邮政信箱',
'Shipping City' => '[送货地址]乡镇市区',
'Shipping State' => '[送货地址]市(县)',
'Shipping Code' => '[送货地址]邮政编码',
'Shipping Country' => '[送货地址]省（市/自治区）',
'City' => '乡镇市区',
  'State' => '市(县)',
  'Code' => '邮政编码',
  'Country' => '省（市/自治区）',
  'Created Time' => '建档时间',
  'Modified Time' => '修改时间',
  'Description' => '细节内容',
  'Potential Name' => '潜在案件名称',
  'Customer No' => '客户编号',
  'Sales Order' => '销售',
  'Notes' => '备忘录',
  'Pending' => '期间',
  'Account Name' => '客户名称',
  'Terms & Conditions' => '限制与条件',
//Quote Info
 'LBL_INVOICE_INFORMATION' => '发票信息',
  'LBL_INVOICE' => '发票：',
  'LBL_SO_INFORMATION' => '销售订单信息',
  'LBL_SO' => '销售订单：',

//Added in release 4.2
 'LBL_SUBJECT' => '主旨：',
  'LBL_SALES_ORDER' => '销售订单：',
  'Invoice Id' => '发票号码',
  'LBL_MY_TOP_INVOICE' => '自己未处理的发票',
  'LBL_INVOICE_NAME' => '发票名称：',
  'Purchase Order' => '采购订单',
  'Status' => '状态',
  'Id' => '发票编号',
  'Invoice' => '发票',

//Added for existing Picklist Entries

 'Created' => '已建立',
  'Approved' => '已审核',
  'Sent' => '已寄送',
  'Credit Invoice' => '贷方发票',
  'Paid' => '已付款',
//Added to Custom Invoice Number
'Invoice No'=>'发票号码',
'Adjustment'=>'调整',
//Added for Reports (5.0.4)
'Tax Type'=>'Tax Type',
'Discount Percent'=>'Discount Percent',
'Discount Amount'=>'Discount Amount',
'Terms & Conditions'=>'Terms & Conditions',
'No'=>'No',
'Date'=>'Date',

// Added affter 5.0.4 GA
//Added for Documents module
'Documents'=>'Documents',
);

?>
