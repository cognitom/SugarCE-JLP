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
	'LBL_MODULE_NAME'=>'商談',
	'LBL_MODULE_TITLE'=>'商談: ホーム',
	'LBL_SEARCH_FORM_TITLE'=>'商談検索',
	'LBL_VIEW_FORM_TITLE'=>'商談ビュー',
	'LBL_LIST_FORM_TITLE'=>'商談一覧',
	'LBL_SALE_NAME'=>'商談名:',
	'LBL_SALE'=>'商談名:',
	'LBL_NAME'=>'商談名',
	'LBL_LIST_SALE_NAME'=>'名前',
	'LBL_LIST_ACCOUNT_NAME'=>'取引先',
	'LBL_LIST_AMOUNT'=>'金額',
	'LBL_LIST_DATE_CLOSED'=>'完了',
	'LBL_LIST_SALE_STAGE'=>'商談ステージ',
	'LBL_ACCOUNT_ID'=>'取引先ID',
	'LBL_CURRENCY_ID'=>'通貨ID',
	'db_sales_stage'=>'LBL_LIST_SALES_STAGE',
	'db_name'=>'LBL_NAME',
	'db_amount'=>'LBL_LIST_AMOUNT',
	'db_date_closed'=>'LBL_LIST_DATE_CLOSED',
	'UPDATE'=>'商談の通貨更新',
	'UPDATE_DOLLARAMOUNTS'=>'USドルの金額を更新',
	'UPDATE_VERIFY'=>'金額を検証',
	'UPDATE_VERIFY_TXT'=>'商談の金額が数字（0-9）と小数点（.）で正しく入力されているかどうかを検証します。',
	'UPDATE_FIX'=>'金額を修正',
	'UPDATE_FIX_TXT'=>'現在の金額から正しい区切り文字を使って不正な金額を修正します。修正された金額のバックアップはデータベースのamount_backupフィールドに保存されます。これを実行して問題が発生した場合、バックアップから以前の値を戻してください。さもないと、再度実行すると不正な値でバックアップ値が上書きされます。',
	'UPDATE_DOLLARAMOUNTS_TXT'=>'商談のUSドルの更新は設定されている通貨レートに基づきます。グラフとリストビューでの金額の値に反映されます。',
	'UPDATE_CREATE_CURRENCY'=>'通貨作成:',
	'UPDATE_VERIFY_FAIL'=>'確認に失敗しました:',
	'UPDATE_VERIFY_CURAMOUNT'=>'現在の金額:',
	'UPDATE_VERIFY_FIX'=>'修正は',
	'UPDATE_INCLUDE_CLOSE'=>'完了したレコードを含む',
	'UPDATE_VERIFY_NEWAMOUNT'=>'金額作成:',
	'UPDATE_VERIFY_NEWCURRENCY'=>'通貨作成:',
	'UPDATE_DONE'=>'完了',
	'UPDATE_BUG_COUNT'=>'実行時に不具合が見つかりました:',
	'UPDATE_BUGFOUND_COUNT'=>'不具合が見つかりました:',
	'UPDATE_COUNT'=>'レコードが更新されました:',
	'UPDATE_RESTORE_COUNT'=>'金額がリストアされました:',
	'UPDATE_RESTORE'=>'金額をリストア',
	'UPDATE_RESTORE_TXT'=>'修復中にバックアップした内容をリストア',
	'UPDATE_FAIL'=>'更新できません -',
	'UPDATE_NULL_VALUE'=>'金額は空です。0に設定されました。  -',
	'UPDATE_MERGE'=>'通貨を統合',
	'UPDATE_MERGE_TXT'=>'複数の通貨を一つにまとめます。同じ通貨のレコードが複数ある場合、それらを一つにします。これは他のモジュールの通貨も統合します。',
	'LBL_ACCOUNT_NAME'=>'取引先:',
	'LBL_AMOUNT'=>'金額:',
	'LBL_AMOUNT_USDOLLAR'=>'金額USD:',
	'LBL_CURRENCY'=>'通貨:',
	'LBL_DATE_CLOSED'=>'受注予定日:',
	'LBL_TYPE'=>'タイプ:',
	'LBL_CAMPAIGN'=>'キャンペーン:',
	'LBL_LEADS_SUBPANEL_TITLE'=>'リード',
	'LBL_PROJECTS_SUBPANEL_TITLE'=>'プロジェクト',
	'LBL_NEXT_STEP'=>'次ステップ:',
	'LBL_LEAD_SOURCE'=>'リードソース:',
	'LBL_SALES_STAGE'=>'商談ステージ:',
	'LBL_PROBABILITY'=>'確度 (%):',
	'LBL_DESCRIPTION'=>'詳細:',
	'LBL_DUPLICATE'=>'重複の可能性がある商談',
	'MSG_DUPLICATE'=>'あなたが作成しようとしている商談は既存の商談と重複する可能性があります。類似の商談は下記に表示されています。保存をクリックすると新たに商談を作成します。キャンセルをクリックすると商談を作成せずにモジュールに戻ります。',
	'LBL_NEW_FORM_TITLE'=>'商談作成',
	'LNK_NEW_SALE'=>'商談作成',
	'LNK_SALE_LIST'=>'商談',
	'ERR_DELETE_RECORD'=>'商談を削除するにはレコード番号を指定する必要があります。',
	'LBL_TOP_SALES'=>'私の商談ランキング',
	'NTC_REMOVE_OPP_CONFIRMATION'=>'商談からこの取引先担当者を削除しても良いですか？',
	'SALE_REMOVE_PROJECT_CONFIRM'=>'プロジェクトからこの商談を削除しても良いですか？',
	'LBL_DEFAULT_SUBPANEL_TITLE'=>'商談',
	'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'活動',
	'LBL_HISTORY_SUBPANEL_TITLE'=>'履歴',
	'LBL_RAW_AMOUNT'=>'金額',
	'LBL_CONTACTS_SUBPANEL_TITLE'=>'取引先担当者',
	'LBL_ASSIGNED_TO_NAME'=>'アサイン先:',
	'LBL_LIST_ASSIGNED_TO_NAME'=>'アサイン先ユーザ',
	'LBL_MY_CLOSED_SALES'=>'私のクローズ済み商談',
	'LBL_TOTAL_SALES'=>'商談総額',
	'LBL_CLOSED_WON_SALES'=>'受注済み商談',
	'LBL_ASSIGNED_TO_ID'=>'アサイン先',
	'LBL_CREATED_ID'=>'作成者ID',
	'LBL_MODIFIED_ID'=>'更新者ID',
	'LBL_MODIFIED_NAME'=>'更新者',
	'LBL_SALE_INFORMATION'=>'商談情報',
	'LBL_CURRENCY_NAME'=>'Currency Name',
	'LBL_CURRENCY_SYMBOL'=>'Currency Symbol',
);