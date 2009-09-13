<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
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
********************************************************************************/

$mod_strings = array (

    'LBL_ADD_MODULE' => '追加',  
    'LBL_ADDRCITY' => '市区町村',
    'LBL_ADDRCOUNTRY' => '国',
    'LBL_ADDRCOUNTRY_ID' => '国Id',
    'LBL_ADDRSTATEPROV' => '都道府県',
    'LBL_ADMINISTRATION' => 'コネクタ管理者',
    'LBL_ADMINISTRATION_MAIN' => 'コネクタ設定',    
    'LBL_AVAILABLE' => '利用可能',
    'LBL_BACK' => '< 戻る',
    'LBL_COMPANY_ID' => '会社Id',
	'LBL_CONFIRM_CONTINUE_SAVE' => 'いくつかの必須フィールドが空白のままです。変更を保存しますか？',
    'LBL_CONNECTOR' => 'コネクタ',
    'LBL_CONNECTOR_FIELDS' => 'コネクタフィールド',
    'LBL_DATA' => '日付',
    'LBL_DEFAULT' => 'デフォルト',
    'LBL_DELETE_MAPPING_ENTRY' => 'このエントリを削除しますがよろしいですか?',
    'LBL_DISABLED' => '無効',
    'LBL_DUNS' => 'DUNS(企業識別コード)',
    'LBL_EMPTY_BEANS' => '検索条件に適合するものはありません。',
    'LBL_ENABLED' => '有効',
    'LBL_FINSALES' => 'Finsales',
    'LBL_MARKET_CAP' => '時価総額',    
    'LBL_MERGE' => 'マージ',
    'LBL_MODIFY_DISPLAY_TITLE' => 'コネクタを有効化',
    'LBL_MODIFY_DISPLAY_DESC' => 'それぞれのコネクタでどのモジュールを有効化するか選択してください。',
    'LBL_MODIFY_DISPLAY_PAGE_TITLE' => 'コネクタ設定: コネクタを有効化',
    'LBL_MODULE_FIELDS' => 'モジュールフィールド',
    'LBL_MODIFY_MAPPING_TITLE' => 'コネクタフィールドを関連づけ',
    'LBL_MODIFY_MAPPING_DESC' => 'どのコネクタのデータがモジュールのレコードに対して表示・マージされるかを決めるため、コネクタフィールドとモジュールフィールドを関連付けます。',
    'LBL_MODIFY_MAPPING_PAGE_TITLE' => 'コネクタ設定: コネクタフィールドの関連付け',
    'LBL_MODIFY_PROPERTIES_TITLE' => 'コネクタプロパティの設定',
    'LBL_MODIFY_PROPERTIES_DESC' => 'それぞれのコネクタのプロパティの設定 (URLやAPIキーを含む)',
    'LBL_MODIFY_PROPERTIES_PAGE_TITLE' => 'コネクタ設定: コネクタプロパティの設定',
    'LBL_MODIFY_SEARCH_TITLE' => 'コネクタ検索の管理',
	'LBL_MODIFY_SEARCH' => '検索',
    'LBL_MODIFY_SEARCH_DESC' => 'それぞれのモジュールのデータを検索する際に利用するコネクタフィールドを選択してください。',
    'LBL_MODIFY_SEARCH_PAGE_TITLE' => 'コネクタ設定: コネクタ検索の管理',
	'LBL_MODULE_NAME' => 'コネクタ',
    'LBL_NO_PROPERTIES' => 'このコネクタに設定できるプロパティはありません。',
    'LBL_PARENT_DUNS' => '親DUNS(企業識別コード)',
    'LBL_PREVIOUS' => '< 戻る',
    'LBL_QUOTE' => '見積',
    'LBL_RECNAME' => '会社名',
    'LBL_RESET_TO_DEFAULT' => 'デフォルトへリセット',
    'LBL_RESET_TO_DEFAULT_CONFIRM' => 'デフォルト設定へリセットしますが、よろしいですか?',
    'LBL_RESET_BUTTON_TITLE' => 'リセット [Alt+R]',
	'LBL_RESULT_LIST' => 'データリスト',
    'LBL_RUN_WIZARD' => 'ウィザードの実行',
    'LBL_SAVE' => '保存',
	'LBL_SEARCHING_BUTTON_LABEL' => '検索中...',
    'LBL_SHOW_IN_LISTVIEW' => 'マージ一覧ビューに表示',
    'LBL_SMART_COPY' => 'スマートコピー',
    'LBL_SUMMARY' => '概要',
    'LBL_STEP1' => 'データの検索および閲覧',
    'LBL_STEP2' => 'レコードのマージ',
    'LBL_TEST_SOURCE' => 'コネクタのテスト',
    'LBL_TEST_SOURCE_FAILED' => 'テスト失敗',
    'LBL_TEST_SOURCE_RUNNING' => 'テスト実行中...',
    'LBL_TEST_SOURCE_SUCCESS' => 'テスト成功',
    'LBL_TITLE' => 'データマージ',
    'LBL_ULTIMATE_PARENT_DUNS' => 'ルートDUNS(企業識別コード)',
        	
    'ERROR_RECORD_NOT_SELECTED' => 'エラー: 実行前にリストからレコードを選択してください。',
    'ERROR_EMPTY_WRAPPER' => 'エラー: ソース[{$source_id}]へのラッパーインスタンスを取得できません。',
    'ERROR_EMPTY_SOURCE_ID' => 'エラー: ソースIDが指定されていないか空です。',
    'ERROR_EMPTY_RECORD_ID' => 'エラー: レコードIDが指定されていないか空です。',
    'ERROR_NO_ADDITIONAL_DETAIL' => 'エラー: このレコードへの追加の詳細が見つかりません。',
    'ERROR_NO_SEARCHDEFS_DEFINED' => 'このコネクタへモジュールが有効化されていません。コネクタを有効化ページでこのコネクタへのモジュールを選択してください。',
    'ERROR_NO_SOURCEDEFS_FILE' => 'エラー: sourcedefs.phpファイルが見つかりません。',
    'ERROR_NO_SOURCEDEFS_SPECIFIED' => 'エラー: どのデータを取得するかを指定したソースが見つかりません。',
    'ERROR_NO_CONNECTOR_DISPLAY_CONFIG_FILE' => 'エラー: このモジュールへコネクタが関連付けられていません。',
    'ERROR_NO_SEARCHDEFS_MAPPING' => 'エラー: モジュールとコネクタに一つも検索フィールドが定義されていません。システム管理者に連絡してください。',
    'ERROR_NO_FIELDS_MAPPED' => 'エラー: モジュールのそれぞれのエントリのモジュールフィールドに少なくとも一つのコネクタフィールドを関連付けなければいけません。',
    'ERROR_NO_DISPLAYABLE_MAPPED_FIELDS' => 'エラー: 結果に表示するモジュールフィールドが関連付けられていません。システム管理者に連絡してください。',
);