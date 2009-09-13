<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/******************************************************************************
 * SugarCRM Japanese Language Pack is developed by OpenSourceCRM Inc.
 * Copyright (C) 2007 - 2009 OpenSourceCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License version 3 as published by the
 * Free Software Foundation.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
*****************************************************************************/

$mod_strings = array (
	//module
	'LBL_MODULE_NAME' => 'ドキュメント',
	'LBL_MODULE_TITLE' => 'ドキュメント: ホーム',
	'LNK_NEW_DOCUMENT' => 'ドキュメント作成',
	'LNK_DOCUMENT_LIST'=> 'ドキュメント',
	'LBL_DOC_REV_HEADER' => 'ドキュメント版数',
	'LBL_SEARCH_FORM_TITLE'=> 'ドキュメント検索',
	//vardef labels
	'LBL_DOCUMENT_ID' => 'ドキュメントID',
	'LBL_NAME' => 'ドキュメント名',
	'LBL_DESCRIPTION' => '詳細',
	'LBL_CATEGORY' => 'カテゴリ',
	'LBL_SUBCATEGORY' => 'サブカテゴリ',
	'LBL_STATUS' => 'ステータス',
	'LBL_CREATED_BY'=> '作成者',
	'LBL_DATE_ENTERED'=> '入力日',
	'LBL_DATE_MODIFIED'=> '更新日',
	'LBL_DELETED' => '削除済み',
	'LBL_MODIFIED'=> '更新者ID',
	'LBL_MODIFIED_USER' => '更新者',
	'LBL_CREATED'=> '作成者',
	'LBL_REVISIONS'=>'リビジョン',
	'LBL_RELATED_DOCUMENT_ID'=>'関連ドキュメントID',
	'LBL_RELATED_DOCUMENT_REVISION_ID'=>'関連ドキュメント版数ID',
	'LBL_IS_TEMPLATE'=>'テンプレート',
	'LBL_TEMPLATE_TYPE'=>'ドキュメントタイプ',
	'LBL_ASSIGNED_TO_NAME'=>'アサイン先:',
	'LBL_REVISION_NAME' => '版数番号',
	'LBL_MIME' => 'Mimeタイプ',
	'LBL_REVISION' => '版数',
	'LBL_DOCUMENT' => '関連ドキュメント',
	'LBL_LATEST_REVISION' => '最新版数',
	'LBL_CHANGE_LOG'=> '履歴: ',
	'LBL_ACTIVE_DATE'=> '発行日',
	'LBL_EXPIRATION_DATE' => '有効期限',
	'LBL_FILE_EXTENSION'  => 'ファイル拡張子',

	'LBL_CAT_OR_SUBCAT_UNSPEC'=>'未指定',
	//quick search
	'LBL_NEW_FORM_TITLE' => 'ドキュメント作成',
	//document edit and detail view
	'LBL_DOC_NAME' => 'ドキュメント名:',
	'LBL_FILENAME' => 'ファイル名:',
	'LBL_DOC_VERSION' => '版数:',
	'LBL_CATEGORY_VALUE' => 'カテゴリ:',
	'LBL_SUBCATEGORY_VALUE'=> 'サブカテゴリ:',
	'LBL_DOC_STATUS'=> 'ステータス:',
	'LBL_LAST_REV_CREATOR' => '版数作成者:',
	'LBL_LAST_REV_DATE' => '改版日:',
	'LBL_DOWNNLOAD_FILE'=> 'ファイルダウンロード:',
	'LBL_DET_RELATED_DOCUMENT'=>'関連ドキュメント:',
	'LBL_DET_RELATED_DOCUMENT_VERSION'=>"関連ドキュメントのリビジョン:",
	'LBL_DET_IS_TEMPLATE'=>'テンプレート？ :',
	'LBL_DET_TEMPLATE_TYPE'=>'ドキュメントタイプ:',



	'LBL_DOC_DESCRIPTION'=>'詳細:',
	'LBL_DOC_ACTIVE_DATE'=> '発行日:',
	'LBL_DOC_EXP_DATE'=> '有効期限:',

	//document list view.
	'LBL_LIST_FORM_TITLE' => 'ドキュメント一覧',
	'LBL_LIST_DOCUMENT' => 'ドキュメント',
	'LBL_LIST_CATEGORY' => 'カテゴリ',
	'LBL_LIST_SUBCATEGORY' => 'サブカテゴリ',
	'LBL_LIST_REVISION' => '版数',
	'LBL_LIST_LAST_REV_CREATOR' => '発行者',
	'LBL_LIST_LAST_REV_DATE' => '改版日',
	'LBL_LIST_VIEW_DOCUMENT'=>'閲覧',
    'LBL_LIST_DOWNLOAD'=> 'ダウンロード',
	'LBL_LIST_ACTIVE_DATE' => '発行日',
	'LBL_LIST_EXP_DATE' => '有効期限',
	'LBL_LIST_STATUS'=>'ステータス',

	//document search form.
	'LBL_SF_DOCUMENT' => 'ドキュメント名:',
	'LBL_SF_CATEGORY' => 'カテゴリ:',
	'LBL_SF_SUBCATEGORY'=> 'サブカテゴリ:',
	'LBL_SF_ACTIVE_DATE' => '発行日:',
	'LBL_SF_EXP_DATE'=> '有効期限:',

	'DEF_CREATE_LOG' => 'ドキュメント作成日',

	//error messages
	'ERR_DOC_NAME'=>'ドキュメント名',
	'ERR_DOC_ACTIVE_DATE'=>'発行日',
	'ERR_DOC_EXP_DATE'=> '有効期限',
	'ERR_FILENAME'=> 'ファイル名',
	'ERR_DOC_VERSION'=> '版数',
	'ERR_DELETE_CONFIRM'=> 'この版を削除して良いですか？',
	'ERR_DELETE_LATEST_VERSION'=> '最新版を削除することを許可されていません。',
	'LNK_NEW_MAIL_MERGE' => 'メールマージ',
	'LBL_MAIL_MERGE_DOCUMENT' => 'メールマージテンプレート:',

	'LBL_TREE_TITLE' => 'ドキュメント',
	//sub-panel vardefs.
	'LBL_LIST_DOCUMENT_NAME'=>'ドキュメント名',
	'LBL_CONTRACT_NAME'=>'契約名:',
	'LBL_LIST_IS_TEMPLATE'=>'テンプレート？',
	'LBL_LIST_TEMPLATE_TYPE'=>'ドキュメントタイプ',
	'LBL_LIST_SELECTED_REVISION'=>'選択された版数',
	'LBL_LIST_LATEST_REVISION'=>'最新版数',
	'LBL_CONTRACTS_SUBPANEL_TITLE'=>'関連契約',
	'LBL_LAST_REV_CREATE_DATE'=>'最終リビジョンの作成日',
    //'LNK_DOCUMENT_CAT'=>'Document Categories',
    'LBL_CONTRACTS' => '契約',
    'LBL_CREATED_USER' => '作成者',
);