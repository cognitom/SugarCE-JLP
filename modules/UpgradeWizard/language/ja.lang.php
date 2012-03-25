<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2012 SugarCRM Inc.
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

/*********************************************************************************

 * Description:
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc. All Rights
 * Reserved. Contributor(s): ______________________________________..
 * *******************************************************************************/

$mod_strings = array(
	'DESC_MODULES_INSTALLED'=>'以下のモジュールがインストール済みです:',
	'DESC_MODULES_QUEUED'=>'以下のモジュールがインストール待ちです:',
	
	'ERR_UW_CANNOT_DETERMINE_GROUP'=>'グループが特定できません。',
	'ERR_UW_CANNOT_DETERMINE_USER'=>'オーナーが特定できません。',
	'ERR_UW_CONFIG_WRITE'=>'新たなバージョン情報でconfig.phpを更新中にエラー。',
	'ERR_UW_CONFIG'=>'config.phpを書き込み可能にしてページを再ロードしてください。',
	'ERR_UW_DIR_NOT_WRITABLE'=>'ディレクトリが書き込み可能ではありません。',
	'ERR_UW_FILE_NOT_COPIED'=>'ファイルがコピーされませんでした。',
	'ERR_UW_FILE_NOT_DELETED'=>'パッケージの削除中に問題がありました。 ',
	'ERR_UW_FILE_NOT_READABLE'=>'ファイルが読み込めません。',
	'ERR_UW_FILE_NOT_WRITABLE'=>'ファイルが移動または書き込みできません: ',
	'ERR_UW_FLAVOR_2'=>'アップグレードフレーバー: ',
	'ERR_UW_FLAVOR'=>'SugarCRMシステムフレーバー: ',
	'ERR_UW_LOG_FILE_UNWRITABLE'=>'./upgradeWizard.logが作成（書き込み）出来ませんでした。SugarCRMインストールディレクトリのパーミッションを確認してください。',
	'ERR_UW_MBSTRING_FUNC_OVERLOAD'=>'php.iniファイルのmbstring.func_overloadの値を1以上に設定して、Webサーバを再起動してください。',
	'ERR_UW_MYSQL_VERSION'=>'SugarCRMにはMySQL4.1.2以上が必要です。: ',
	'ERR_UW_NO_FILE_UPLOADED'=>'ファイルを指定して再度実行してください。',
	'ERR_UW_NO_FILES'=>'エラーが発生しました。チェックすべきファイルは見つかりませんでした。',
	'ERR_UW_NO_MANIFEST'=>'ZIPファイルにmanifest.phpファイルが含まれていません。次に進めません。',
	'ERR_UW_NO_VIEW'=>'不正なビューが指定されました。',
	'ERR_UW_NO_VIEW2'=>'ビューが定義されていません。管理メニューに移り、このページを指定してください。',
	'ERR_UW_NOT_VALID_UPLOAD'=>'不正なアップロードです。',
	'ERR_UW_NO_CREATE_TMP_DIR'=>'一時ディレクトリを作成できません。ディレクトリの権限を確認してください。',
	'ERR_UW_ONLY_PATCHES'=>'このページではパッチのみをアップロードできます。',
	'ERR_UW_PREFLIGHT_ERRORS'=>'事前チェック中にエラーが見つかりました。',
	'ERR_UW_UPLOAD_ERR'=>'ファイルのアップロード中にエラーが見つかりました。',
	'ERR_UW_VERSION'=>'SugarCRMシステムバージョン: ',
	'ERR_UW_WRONG_TYPE'=>'このページは実行用ではありません。 ',
	'ERR_UW_PHP_FILE_ERRORS'=>array(
		'1'=>'ファイルはphp.iniのupload_max_filesizeで指定されたサイズを超えています。',
		'2'=>'ファイルは、HTMLのMAX_FILE_SIZEで指定されたサイズを超えています。',
		'3'=>'ファイルは部分的にアップロードされました。',
		'4'=>'ファイルはアップロードされませんでした。',
		'5'=>'不明なエラー',
		'6'=>'一時フォルダが見つかりません。',
		'7'=>'ディスクに書き込みが出来ません。',
		'8'=>'拡張子が不適切なためアップロードが中止しました。',
	),
	'LBL_BUTTON_BACK'=>'戻る',
	'LBL_BUTTON_CANCEL'=>'キャンセル',
	'LBL_BUTTON_DELETE'=>'パッケージの削除',
	'LBL_BUTTON_DONE'=>'完了',
	'LBL_BUTTON_EXIT'=>'Exit',
	'LBL_BUTTON_INSTALL'=>'事前アップグレード',
	'LBL_BUTTON_NEXT'=>'次へ',
	'LBL_BUTTON_RECHECK'=>'再チェック',
	'LBL_BUTTON_RESTART'=>'Restart',
	
	'LBL_UPLOAD_UPGRADE'=>'アップグレードファイルのアップロード: ',
	'LBL_UPLOAD_FILE_NOT_FOUND'=>'アップロードファイルが見つかりません',
	'LBL_UW_BACKUP_FILES_EXIST_TITLE'=>'ファイルバックアップ',
	'LBL_UW_BACKUP_FILES_EXIST'=>'このアップグレードによるバックアップファイルの格納場所: ',
	'LBL_UW_BACKUP'=>'ファイルのバックアップ',
	'LBL_UW_CANCEL_DESC'=>'アップグレードウィザードは中止されました。  すべての一時ファイルとアップロードされたzipファイルは削除されます。<br><br>「完了」ボタンを押してアップグレードウィザードを再度実行して下さい。',
	'LBL_UW_CHARSET_SCHEMA_CHANGE'=>'キャラクターセットスキーマの変更',
	'LBL_UW_CHECK_ALL'=>'すべてチェック',
	'LBL_UW_CHECKLIST'=>'アップグレードステップ',
	'LBL_UW_COMMIT_ADD_TASK_DESC_1'=>'上書きされるファイルのバックアップは以下のディレクトリにあります。',
	'LBL_UW_COMMIT_ADD_TASK_DESC_2'=>'以下のファイルは手作業でマージしてください:',
	'LBL_UW_COMMIT_ADD_TASK_NAME'=>'アップグレードプロセス: 手作業でファイルをマージ',
	'LBL_UW_COMMIT_ADD_TASK_OVERVIEW'=>'最適な差分ツールを用いて、これらのファイルをマージしてください。この作業が完了するまで、このSugarCRMインスタンスは不安定な状態になり、アップグレードが完了しません。',
	'LBL_UW_COMPLETE'=>'完了',
	'LBL_UW_CONTINUE_CONFIRMATION'=>'この新しいバージョンのSugarは新しいライセンス許諾書を含んでいます。続けますか?',
	'LBL_UW_COMPLIANCE_ALL_OK'=>'設定に問題はありません。',
	'LBL_UW_COMPLIANCE_CALLTIME'=>'PHP設定: 実行時間',
	'LBL_UW_COMPLIANCE_CURL'=>'cURLモジュール',
	'LBL_UW_COMPLIANCE_IMAP'=>'IMAPモジュール',
	'LBL_UW_COMPLIANCE_MBSTRING'=>'mbstringモジュール',
	'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD'=>'MBStringsのmbstring.func_overloadパラメータ',
	'LBL_UW_COMPLIANCE_MEMORY'=>'PHP設定: メモリリミット',
	'LBL_UW_COMPLIANCE_MSSQL_MAGIC_QUOTES'=>'Microsoft SQL ServerとPHPのMagic Quotes GPC',
	'LBL_UW_COMPLIANCE_MYSQL'=>'必要最低MySQLバージョン',
	'LBL_UW_COMPLIANCE_PHP_INI'=>'php.iniの場所',
	'LBL_UW_COMPLIANCE_PHP_VERSION'=>'必要最低PHPバージョン',
	'LBL_UW_COMPLIANCE_SAFEMODE'=>'PHP設定: セーフモード',
	'LBL_UW_COMPLIANCE_TITLE'=>'サーバの設定',
	'LBL_UW_COMPLIANCE_TITLE2'=>'検出された問題',
	'LBL_UW_COMPLIANCE_XML'=>'XMLのパース',
	
	'LBL_UW_COPIED_FILES_TITLE'=>'ファイルのコピーが成功しました。',
	'LBL_UW_CUSTOM_TABLE_SCHEMA_CHANGE'=>'カスタムテーブルのスキーマの変更',
	
	'LBL_UW_DB_CHOICE1'=>'アップグレードウィザードがSQLを実行',
	'LBL_UW_DB_CHOICE2'=>'マニュアルでSQLをで実行',
	'LBL_UW_DB_INSERT_FAILED'=>'INSERTの失敗ー比較した結果が異なります。',
	'LBL_UW_DB_ISSUES_PERMS'=>'データベースに対する権限',
	'LBL_UW_DB_ISSUES'=>'データベースの問題',
	'LBL_UW_DB_METHOD'=>'データベースの更新方法',
	'LBL_UW_DB_NO_ADD_COLUMN'=>'ALTER TABLE [table] ADD COLUMN [column]',
	'LBL_UW_DB_NO_CHANGE_COLUMN'=>'ALTER TABLE [table] CHANGE COLUMN [column]',
	'LBL_UW_DB_NO_CREATE'=>'CREATE TABLE [table]',
	'LBL_UW_DB_NO_DELETE'=>'DELETE FROM [table]',
	'LBL_UW_DB_NO_DROP_COLUMN'=>'ALTER TABLE [table] DROP COLUMN [column]',
	'LBL_UW_DB_NO_DROP_TABLE'=>'DROP TABLE [table]',
	'LBL_UW_DB_NO_ERRORS'=>'不足している権限はありません。',
	'LBL_UW_DB_NO_INSERT'=>'INSERT INTO [table]',
	'LBL_UW_DB_NO_SELECT'=>'SELECT [x] FROM [table]',
	'LBL_UW_DB_NO_UPDATE'=>'UPDATE [table]',
	'LBL_UW_DB_PERMS'=>'必要な権限',
	'LBL_UW_DESC_MODULES_INSTALLED'=>'以下のアップグレードがインストール済みです:',
	'LBL_UW_END_DESC'=>'おめでとうございます。システムはアップグレードされました。',
	'LBL_UW_END_DESC2'=>'ファイルのマージやSQLの実行で手作業を選択した場合、ここで実行して下さい。このステップが完了するまではシステムは不安定な状態になります。',
	'LBL_UW_END_LOGOUT_PRE'=>'The upgrade is complete.',
	'LBL_UW_END_LOGOUT_PRE2'=>'Click Done to exit the Upgrade Wizard.',
	'LBL_UW_END_LOGOUT'=>'パッチ/アップグレードの適用をさらに続ける場合は、一度ログアウトしてください。',
	'LBL_UW_END_LOGOUT2'=>'ログアウト',
	'LBL_UW_REPAIR_INDEX'=>'データベースのパフォーマンスを向上させるためには、<a href=\"index.php?module=Administration&action=RepairIndex\" target=\"_blank\">インデックスのリペア</a>のスクリプトを実行してください。',
	
	'LBL_UW_FILE_DELETED'=>' 削除されました。<br>',
	'LBL_UW_FILE_GROUP'=>'グループ',
	'LBL_UW_FILE_ISSUES_PERMS'=>'ファイルパーミッション',
	'LBL_UW_FILE_ISSUES'=>'ファイルの問題',
	'LBL_UW_FILE_NEEDS_DIFF'=>'ファイルはマニュアルでの差分チェックが必要',
	'LBL_UW_FILE_NO_ERRORS'=>'<b>すべてのファイルは書き込み可能です。</b>',
	'LBL_UW_FILE_OWNER'=>'オーナー',
	'LBL_UW_FILE_PERMS'=>'パーミッション',
	'LBL_UW_FILE_UPLOADED'=>' がアップロードされました。',
	'LBL_UW_FILE'=>'ファイル名',
	'LBL_UW_FILES_QUEUED'=>'以下のアップグレードがインストール待ちです:',
	'LBL_UW_FILES_REMOVED'=>'以下のファイルはシステムから削除されます：<br>',
	'LBL_UW_NEXT_TO_UPLOAD'=>'<b>Click Next to upload upgrade packages.</b>',
	'LBL_UW_FROZEN'=>'処理を継続する前に以下のステップを完了する必要があります。',
	'LBL_UW_HIDE_DETAILS'=>'詳細を非表示',
	'LBL_UW_IN_PROGRESS'=>'進行中',
	'LBL_UW_INCLUDING'=>'次を含む: ',
	'LBL_UW_INCOMPLETE'=>'未完了',
	'LBL_UW_INSTALL'=>'ファイルインストール',
	'LBL_UW_MANUAL_MERGE'=>'ファイルマージ',
	'LBL_UW_MODULE_READY_UNINSTALL'=>'アンインストールの準備ができました。\"実行\"ボタンをクリックして処理を続行してください。<br>',
	'LBL_UW_MODULE_READY'=>'インストールの準備ができました。\"実行\"ボタンをクリックして処理を続行してください。',
	'LBL_UW_NO_INSTALLED_UPGRADES'=>'アップグレードは行われていません。',
	'LBL_UW_NONE'=>'なし',
	'LBL_UW_NOT_AVAILABLE'=>'有効ではありません。',
	'LBL_UW_OVERWRITE_DESC'=>'あなたが作成したカスタマイズしたコードやテンプレートを含むすべての変更したファイルは上書きされました。続行してよろしいですか？',
	'LBL_UW_OVERWRITE_FILES_CHOICE1'=>'すべてのファイルを上書き',
	'LBL_UW_OVERWRITE_FILES_CHOICE2'=>'マニュアルでマージ －すべてを維持',
	'LBL_UW_OVERWRITE_FILES'=>'マージの方法',
	'LBL_UW_PATCH_READY'=>'パッチを実行する準備が出来ました。実行（Commit）ボタンを押すとアップグレードが開始されます。',
	'LBL_UW_PATCH_READY2'=>'<h2>注意: カスタマイズされたレイアウトが見つかりました。</h2><br />以下のファイルはスタジオによって追加されたフィールドもしくはレイアウトを持っています。インストールをしようとしているパッチはこれらのファイルに対する更新を含みます。<u>それぞれのファイル</u>に 対し、次を選択できます。<br><ul><li>[<b>デフォルト</b>] チェックボックスをブランクのままにすると、カスタマイズされた更新を保持します。パッチの修正は無視されます。</li>もしくは<li>チェックボックスに印を入れるとパッチによる更新を適用します。カスタマイズした内容は再度スタジオなどで適用する必要があります。</li></ul>',

	'LBL_UW_PREFLIGHT_ADD_TASK'=>'手作業でのマージのためにタスクを作成しますか？',
	'LBL_UW_PREFLIGHT_COMPLETE'=>'事前チェック',
	'LBL_UW_PREFLIGHT_DIFF'=>'異なります。 ',
	'LBL_UW_PREFLIGHT_EMAIL_REMINDER'=>'手作業でのマージのために自身にリマインダーのメールを送信しますか？',
	'LBL_UW_PREFLIGHT_FILES_DESC'=>'下記のファイルが更新されています。手作業でのマージが必要なものはチェックをはずしてください。<i>レイアウトが変更されているものは自動的にチェックがはずれています。上書きしても良いものは再度チェックを入れて下さい。',
	'LBL_UW_PREFLIGHT_NO_DIFFS'=>'手作業でのマージが必要なものはありません。',
	'LBL_UW_PREFLIGHT_NOT_NEEDED'=>'必要ではありません。',
	'LBL_UW_PREFLIGHT_PRESERVE_FILES'=>'自動的に保存されたファイル:',
	'LBL_UW_PREFLIGHT_TESTS_PASSED'=>'すべての事前チェックが完了しました。',
	'LBL_UW_PREFLIGHT_TESTS_PASSED2'=>'Click Next to copy the upgraded files to the system.',
	'LBL_UW_PREFLIGHT_TESTS_PASSED3'=>'<b>Note: </b> The rest of the upgrade process is mandatory, and clicking Next will require you to complete the process. If you do not wish to proceed, click the Cancel button.',
	'LBL_UW_PREFLIGHT_TOGGLE_ALL'=>'全ファイルの選択・非選択',
	
	'LBL_UW_REBUILD_TITLE'=>'結果の再構築',
	'LBL_UW_SCHEMA_CHANGE'=>'スキーマの変更',
	
	'LBL_UW_SHOW_COMPLIANCE'=>'検出された設定の表示',
	'LBL_UW_SHOW_DB_PERMS'=>'不足するデータベースパーミッションを表示',
	'LBL_UW_SHOW_DETAILS'=>'詳細表示',
	'LBL_UW_SHOW_DIFFS'=>'マニュアルでのマージを必要とするファイルの表示',
	'LBL_UW_SHOW_NW_FILES'=>'不正なパーミッションを持つファイルの表示',
	'LBL_UW_SHOW_SCHEMA'=>'スキーマを変更するスクリプトの表示',
	'LBL_UW_SHOW_SQL_ERRORS'=>'不正なクエリの表示',
	'LBL_UW_SHOW'=>'表示',

	'LBL_UW_SKIPPED_FILES_TITLE'=>'スキップされたファイル',
	'LBL_UW_SKIPPING_FILE_OVERWRITE'=>'ファイルの上書きをスキップします。手作業でのマージが選択されました。',
	'LBL_UW_SQL_RUN'=>'SQLが手動で実行された場合をチェック',
	'LBL_UW_START_DESC'=>'SugarCRMアップグレードウィザードへようこそ。このウィザードは管理者の方がSugarCRMインスタンスをアップグレードする作業を支援します。これから提示する手順に注意してしたがってください。',
	'LBL_UW_START_DESC2'=>'アップグレードパッチはまず最初に本稼動サーバを複製したテストサーバにあてられることを推奨します。作業を実行する前に、すべてのデータベースとファイルのバックアップを取得してください。',
	'LBL_UW_START_DESC3'=>'Click Next to perform a check on your system to make sure that the system is ready for the upgrade. The check includes file permissions, database privileges and server settings.',
	'LBL_UW_START_UPGRADED_UW_DESC'=>'新アップグレードウィザードはアップグレード処理を再開します。アップグレードを継続してください。',
	'LBL_UW_START_UPGRADED_UW_TITLE'=>'新アップグレードウィザードへようこそ。',
	
	'LBL_UW_SYSTEM_CHECK_CHECKING'=>'チェック中です。しばらくお待ちください。この処理は３０秒ほどかかります。',
	'LBL_UW_SYSTEM_CHECK_FILE_CHECK_START'=>'チェックすべき適切なファイルを検出しています。',
	'LBL_UW_SYSTEM_CHECK_FILES'=>'ファイル',
	'LBL_UW_SYSTEM_CHECK_FOUND'=>'検出',
	
	'LBL_UW_TITLE_CANCEL'=>'キャンセル',
	'LBL_UW_TITLE_COMMIT'=>'アップグレードの適用',
	'LBL_UW_TITLE_END'=>'結果のチェック',
	'LBL_UW_TITLE_PREFLIGHT'=>'事前チェック',
	'LBL_UW_TITLE_START'=>'開始',
	'LBL_UW_TITLE_SYSTEM_CHECK'=>'システムチェック',
	'LBL_UW_TITLE_UPLOAD'=>'アップグレードファイルのアップロード',
	'LBL_UW_TITLE'=>'アップグレードウィザード',
	'LBL_UW_UNINSTALL'=>'アンインストール',
	//500 upgrade labels
	'LBL_UW_ACCEPT_THE_LICENSE'=>'ライセンスを受諾',
	'LBL_UW_CONVERT_THE_LICENSE'=>'ライセンスをコンバート',
	'LBL_UW_CUSTOMIZED_OR_UPGRADED_MODULES'=>'アップグレード済/カスタマイズ済モジュール',
	'LBL_UW_FOLLOWING_MODULES_CUSTOMIZED'=>'以下のモジュールはカスタマイズされているので保存されました。',
	'LBL_UW_FOLLOWING_MODULES_UPGRADED'=>'以下のモジュールはスタジオでカスタマイズされたものなのでアップグレードされました。',

	'LBL_UW_SUGAR_COMMUNITY_EDITION_LICENSE'=>'Sugar Community Edition 5.0は、GNU General Public License Version 3を使用しています。このアップグレードは、既存のライセンスを以下に表示された新しいライセンスに置き換えます。',
	
	'LBL_START_UPGRADE_IN_PROGRESS'=>'開始中です',
	'LBL_SYSTEM_CHECKS_IN_PROGRESS'=>'システムチェック中です',
	'LBL_LICENSE_CHECK_IN_PROGRESS'=>'ライセンスチェック中です',
	'LBL_PREFLIGHT_CHECK_IN_PROGRESS'=>'事前チェック中です',
	'LBL_PREFLIGHT_FILE_COPYING_PROGRESS'=>'File Copying in Progress',
	'LBL_COMMIT_UPGRADE_IN_PROGRESS'=>'アップグレードのコミット中です',
	'LBL_UW_COMMIT_DESC'=>'Click Next to run additional upgrade scripts.',
	'LBL_UPGRADE_SCRIPTS_IN_PROGRESS'=>'Upgrade Scripts in Progress',
	'LBL_UPGRADE_SUMMARY_IN_PROGRESS'=>'アップグレードサマリの処理中です',
	'LBL_UPGRADE_IN_PROGRESS'=>'処理中 ',
	'LBL_UPGRADE_TIME_ELAPSED'=>'経過時間',
	'LBL_UPGRADE_CANCEL_IN_PROGRESS'=>'アップグレードのキャンセルとロールバック',
	'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE'=>'アップグレードには時間がかかる場合があります。',
	'LBL_UPLOADE_UPGRADE_IN_PROGRESS'=>'アップロードのチェック中...',
	'LBL_UPLOADING_UPGRADE_PACKAGE'=>'アップグレードパッケージをアップロード中... ',
	'LBL_UW_DORP_THE_OLD_SCHMEA'=>'古い4.5.1のスキーマを削除しても良いですか？',
	'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD'=>'アップグレードウィザードが旧4.5.1のスキーマを削除',
	'LBL_UW_DROP_SCHEMA_MANUAL'=>'アップグレード後に手作業で旧スキーマを削除',
	'LBL_UW_DROP_SCHEMA_METHOD'=>'旧スキーマの削除方法',
	'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP'=>'ドロップ可能なキュスキーマを表示',
	'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST'=>'スキップされたクエリー',
	'LBL_INCOMPATIBLE_PHP_VERSION'=>'PHPのバージョンは5以上である必要があります。',
	'ERR_CHECKSYS_PHP_INVALID_VER'=>'Sugarは、ご利用のPHPのバージョンをサポートしていません。Sugarアプリケーションに準拠したバージョンをインストールする必要があります。リリースノートの互換性マトリックスでサポートするPHPのバージョンをご確認ください。ご利用のバージョン ',
	'LBL_BACKWARD_COMPATIBILITY_ON'=>'PHP下位互換モードが有効になっています。先に進めるためにzend.ze1_compatibility_modeをOffにセットしてください。',
	'LBL_ML_ACTION'=>'アクション',
	'LBL_ML_CANCEL'=>'キャンセル',
	'LBL_ML_COMMIT'=>'実行',
	'LBL_ML_DESCRIPTION'=>'詳細',
	'LBL_ML_INSTALLED'=>'インストール日',
	'LBL_ML_NAME'=>'名前',
	'LBL_ML_PUBLISHED'=>'発行日',
	'LBL_ML_TYPE'=>'タイプ',
	'LBL_ML_UNINSTALLABLE'=>'インストール不可',
	'LBL_ML_VERSION'=>'バージョン',
	'LBL_ML_INSTALL'=>'インストール',
	//adding the string used in tracker. copying from homepage
	'LBL_HOME_PAGE_4_NAME'=>'トラッカー',
	'LBL_CURRENT_PHP_VERSION'=>'(Your current php version is ',
	'LBL_RECOMMENDED_PHP_VERSION'=>'. Recommended php version is 5.2.1 or above)',
	'LBL_MODULE_NAME'=>'UpgradeWizard',
	'LBL_UPLOAD_SUCCESS'=>'Upgrade package successfully uploaded. Click Next to perform a final check.',
	'LBL_UW_TITLE_LAYOUTS'=>'Confirm Layouts',
	'LBL_LAYOUT_MODULE_TITLE'=>'Layouts',
	'LBL_LAYOUT_MERGE_DESC'=>'There are new fields available which have been added as part of this upgrade and can be automatically appended to your existing module layouts.  To learn more about the new fields, please refer to the Release Notes for the version to which you are upgrading.<br><br>If you do not wish to append the new fields, please uncheck the module, and your custom layouts will remain unchanged. The fields will be available in Studio after the upgrade. <br><br>',
	'LBL_LAYOUT_MERGE_TITLE'=>'Click Next to confirm changes and to finish the upgrade.',
	'LBL_LAYOUT_MERGE_TITLE2'=>'Click Next to complete the upgrade.',
	'LBL_UW_CONFIRM_LAYOUTS'=>'Confirm Layouts',
	'LBL_UW_CONFIRM_LAYOUT_RESULTS'=>'Confirm Layout Results',
	'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC'=>'The following layouts were merged successfully:',
	'LBL_SELECT_FILE'=>'Select File:',
	'LBL_LANGPACKS' => 'Language Packs' /*for 508 compliance fix*/,
	'LBL_MODULELOADER' => 'Module Loader' /*for 508 compliance fix*/,
	'LBL_PATCHUPGRADES' => 'Patch Upgrades' /*for 508 compliance fix*/,
	'LBL_THEMES' => 'Themes' /*for 508 compliance fix*/,
	'LBL_WORKFLOW' => 'Workflow' /*for 508 compliance fix*/,
	'LBL_UPGRADE' => 'Upgrade' /*for 508 compliance fix*/,
	'LBL_PROCESSING' => 'Processing' /*for 508 compliance fix*/,
);