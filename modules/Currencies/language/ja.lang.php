<?php
/*********************************************************************************
 * SugarCRM is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2010 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/

$mod_strings = array(
	'LBL_MODULE_NAME'=>'通貨',
	'LBL_LIST_FORM_TITLE'=>'通貨',
	'LBL_CURRENCY'=>'通貨名',
	'LBL_ADD'=>'追加',
	'LBL_MERGE'=>'通貨統合',
	'LBL_MERGE_TXT'=>'選択された通貨にマップしたい通貨を選んでください。これによってチェックマークのついた通貨は削除され、それらに連動していたデータは選択された通貨に連動されます。',
	'LBL_US_DOLLAR'=>'USドル',
	'LBL_DELETE'=>'削除',
	'LBL_LIST_SYMBOL'=>'通貨シンボル',
	'LBL_LIST_NAME'=>'通貨名',
	'LBL_LIST_ISO4217'=>'ISO 4217コード',
	'LBL_LIST_ISO4217_HELP'=>'Enter a three-letter ISO 4217 code that defines the currency name and currency symbol.',
	'LBL_UPDATE'=>'更新',
	'LBL_LIST_RATE'=>'換算レート',
	'LBL_LIST_RATE_HELP'=>'デフォルト通貨が日本円で1USドル = 100円の時、USドルの換算レートは0.01(= 1/100)となります。',
	'LBL_LIST_STATUS'=>'ステータス',
	'LNK_NEW_CONTACT'=>'取引先担当者作成',
	'LNK_NEW_ACCOUNT'=>'取引先作成',
	'LNK_NEW_OPPORTUNITY'=>'商談作成',
	'LNK_NEW_CASE'=>'ケース作成',
	'LNK_NEW_NOTE'=>'ノート作成',
	'LNK_NEW_CALL'=>'コール作成',
	'LNK_NEW_EMAIL'=>'電子メール作成',
	'LNK_NEW_MEETING'=>'ミーティング作成',
	'LNK_NEW_TASK'=>'タスク作成',
	'NTC_DELETE_CONFIRMATION'=>'このレコードを削除しても良いですか？ この通貨を用いていたデータはシステムデフォルトの通貨に変換されます。ステータスを非アクティブにする方法を推奨します。',
	'LBL_BELOW_MIN'=>'Conversion rate has to be above 0',
	'currency_status_dom'=>array(
		'Active'=>'アクティブ',
		'Inactive'=>'非アクティブ',
	),
);