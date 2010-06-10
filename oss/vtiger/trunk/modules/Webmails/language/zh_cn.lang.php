<?php
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Public License Version 1.1.2
 * ("License"); You may not use this file except in compliance with the
 * License. You may obtain a copy of the License at http://www.sugarcrm.com/SPL
 * Software distributed under the License is distributed on an  "AS IS"  basis,
 * WITHOUT WARRANTY OF ANY KIND, either express or implied. See the License for
 * the specific language governing rights and limitations under the License.
 * The Original Code is:  SugarCRM Open Source
 * The Initial Developer of the Original Code is SugarCRM, Inc.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.;
 * All Rights Reserved.
 * Contributor(s): ______________________________________.
 ********************************************************************************/
/*********************************************************************************
 * $Header: /advent/projects/wesat/vtiger_crm/sugarcrm/modules/Emails/language/en_us.lang.php,v 1.17 2005/03/28 06:31:38 rank Exp $
 * Description:  Defines the English language pack for the Account module.
 ********************************************************************************/

$mod_strings = Array(
 'LBL_MODULE_NAME' => '电子邮件',
  'LBL_MODULE_TITLE' => '电子邮件：首页',
  'LBL_SEARCH_FORM_TITLE' => '搜寻电子邮件',
  'LBL_LIST_FORM_TITLE' => '电子邮件列表',
  'LBL_NEW_FORM_TITLE' => '追踪电子邮件',

 'LBL_LIST_SUBJECT' => '主旨',
  'LBL_LIST_CONTACT' => '联络人',
  'LBL_LIST_RELATED_TO' => '关联',
  'LBL_LIST_DATE' => '寄送日期',
  'LBL_LIST_TIME' => '寄送时间',
  'LBL_MOVE_TO' => '移动',
  'LBL_DELETE' => '删除',

  'ERR_DELETE_RECORD' => '删除客户数据必须先指定数据编号。',
'LBL_DATE_SENT' => '寄送日期：',
  'LBL_SUBJECT' => '主旨：',
  'LBL_DATE_AND_TIME' => '寄送日期与时间：',
  'LBL_DATE' => '寄送日期：',
  'LBL_TIME' => '寄送时间：',
  'LBL_BODY' => '内容：',
  'LBL_CONTACT_NAME' => '联络人：',
  'LBL_EMAIL' => '信箱：',
  'LBL_COLON' => '：',
  'LBL_TO' => '收件人：',
  'LBL_CHK_MAIL' => '检查邮件',
 'LBL_COMPOSE' => '新增邮件',
  'LBL_SETTINGS' => '设定',
  'LBL_EMAIL_FOLDERS' => '邮件数据匣',
  'LBL_INBOX' => '收件匣',
  'LBL_SENT_MAILS' => '寄件备份',
  'LBL_TRASH' => '垃圾桶',
  'LBL_JUNK_MAILS' => '废弃邮件',
  'LBL_TO_LEADS' => '转为准客户',
  'LBL_TO_CONTACTS' => '转为联络人',
  'LBL_TO_ACCOUNTS' => '转为客户',
'LBL_MY_MAILS' => '我的邮件',
  'LBL_QUAL_CONTACT' => '处理过的邮件（转为联络人）',
  'LBL_MAILS' => '邮件',
  'LBL_QUALIFY_BUTTON' => '转换',
  'LBL_REPLY_BUTTON' => '回应',
  'LBL_FORWARD_BUTTON' => '转寄',
  'LBL_DOWNLOAD_ATTCH_BUTTON' => '下载附加档案',
  'LBL_FROM' => '寄件人：',
  'LBL_CC' => '副本：',
  'LBL_REPLY_TO_SENDER' => '回复寄件人',
  'LBL_REPLY_ALL' => '全部回复',
  'LBL_SHOW_HIDDEN' => '显示隐藏',
  'LBL_EXPUNGE_MAILBOX' => '删除信件匣',

  'NTC_REMOVE_INVITEE' => '您确定要从信件中移除这个收件人？',
  'LBL_INVITEE' => '收件人',

// Added Fields
// Contacts-SubPanelViewContactsAndUsers.php
'LBL_BULK_MAILS' => '大量邮件',
  'LBL_ATTACHMENT' => '附加档案',
'LBL_UPLOAD' => '上传',
  'LBL_FILE_NAME' => '檔名',
  'LBL_SEND' => '寄送',

 'LBL_EMAIL_TEMPLATES' => '邮件样板',
  'LBL_TEMPLATE_NAME' => '样板名称',
'LBL_DESCRIPTION'=>'描述',
'LBL_EMAIL_TEMPLATES_LIST' => '邮件样板列表',
  'LBL_EMAIL_INFORMATION' => '邮件信息',




//for v4 release added
'LBL_NEW_LEAD' => '新增潜在客户',
  'LBL_LEAD_TITLE' => '潜在客户',

 'LBL_NEW_PRODUCT' => '新增商品',
  'LBL_PRODUCT_TITLE' => '商品',
  'LBL_NEW_CONTACT' => '新增联络人',
  'LBL_CONTACT_TITLE' => '联络人',
  'LBL_NEW_ACCOUNT' => '新增客户',
  'LBL_ACCOUNT_TITLE' => '客户',

// Added vtiger_fields after vtiger4 - Beta
 'LBL_USER_TITLE' => '使用者',
  'LBL_NEW_USER' => '新增使用者',

// Added for 4 GA
 'LBL_TOOL_FORM_TITLE' => '邮件工具',
//Added for 4GA
 'Date & Time Sent' => '寄送日期与时间',
  'Sales Enity Module' => '销售实体模块',
  'Activtiy Type' => '活动类型',
  'Related To' => '关联',
  'Assigned To' => '负责人',
  'Subject' => '主旨',
  'Attachment' => '附加档案',
  'Description' => '说明',
  'Time Start' => '寄送时间',
  'Created Time' => '建立时间',
  'Modified Time' => '更新时间',

'MESSAGE_CHECK_MAIL_SERVER_NAME' => '请检查邮件服务器名称',
  'MESSAGE_CHECK_MAIL_ID' => '请检查负责人的邮件编号',
  'MESSAGE_MAIL_HAS_SENT_TO_USERS' => '邮件已经寄送到下面使用者：',
  'MESSAGE_MAIL_HAS_SENT_TO_CONTACTS' => '邮件已经寄送到下面联络人：',
  'MESSAGE_MAIL_ID_IS_INCORRECT' => '邮件编号错误，请检查',
  'MESSAGE_ADD_USER_OR_CONTACT' => '请新增使用者或是联络人',
  'MESSAGE_MAIL_SENT_SUCCESSFULLY' => '邮件寄送成功！',

// Added for web mail post 4.0.1 release
 'LBL_FETCH_WEBMAIL' => '取得网页邮件',
//Added for 4.2 Release -- CustomView
 'LBL_ALL' => '全部',
  'MESSAGE_CONTACT_NOT_WANT_MAIL' => '这个联络人不希望收到邮件打扰。',
  'LBL_WEBMAILS_TITLE' => '网页邮件',
  'LBL_EMAILS_TITLE' => '电子邮件',
  'LBL_MAIL_CONNECT_ERROR_INFO' => '邮件服务器联机失败！<br> 检查我的账号->邮件服务器列表 -> 账号列表',
// Added for 5.0.3 release
'LBL_MAIL_CONNECT_ERROR'=>'无法连接到邮件服务器。请检查邮件服务器的细节',
'IN_REPLY_TO_THE_MESSAGE' => '在回答发出的信息 ',
'LBL_CLICK_HERE' => '点击这里 ',
'LBL_GOTO_EMAILS_MODULE' => ' 电子邮件模块',
'LBL_NO_EMAILS'=>'没有邮件在这个文件夹',
'LBL_MOVE_TO'=>'移除...',
'LBL_DEL'=>'删除 ',
'LABEL_FROM'=>'来自',
'LBL_INFO'=>'信息',
'LABEL_DATE'=>'日期',
'LBL_NO_IFRAMES_SUPPORTED'=>'没有隐藏支持',
'LBL_EMAIL_ATTACHMENTS'=>'邮件附件:',
'LBL_ALLMAILS'=>'邮件',
'LBL_TO_USERS'=>'至使用者',
'LBL_TO_GROUPS'=>'至用户组',
'SUBJECT' => '提交',
'BODY' => 'Body',
'TO' => 'To:',
'CC' => 'CC:',
'BCC' => 'BCC:',
'FROM' => 'From:',
'IN'=>'in',
'ADD_FOLDER' => '添加文件夹[X]',
//Added for 5.0.3
'LBL_LOADING_IMAGE' => '等待图像',
'LBL_ENABLE_IMAP_SUPPORT' => '请在PHP里开通IMAP模块',
'LBL_CONFIGURE_MAIL_SETTINGS'=>'请配置你的邮件设置',
'LBL_PLEASE'=>'请',
'LBL_HERE'=>'这',
);
?>
