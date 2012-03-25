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

$mod_strings = array (
	'LBL_BASIC_SEARCH'=>'Basic Search',
	'LBL_ADVANCED_SEARCH'=>'Advanced Search',
	'LBL_BASIC_TYPE'=>'Basic Type',
	'LBL_ADVANCED_TYPE'=>'Advanced Type',
	'LBL_SYSOPTS_1' => '以下のシステム設定オプションから選択してください。' ,
	'LBL_SYSOPTS_2' => 'Sugarインスタンスで使用するデータベースの種類を指定してください。' ,
	'LBL_SYSOPTS_CONFIG' => 'システム設定' ,
	'LBL_SYSOPTS_DB_TYPE' => '' ,
	'LBL_SYSOPTS_DB' => 'データベースタイプの指定' ,
	'LBL_SYSOPTS_DB_TITLE' => 'データベースタイプ' ,
	'LBL_SYSOPTS_ERRS_TITLE' => '次へ進む前に以下のエラーを修正してください:' ,
	'LBL_MAKE_DIRECTORY_WRITABLE'=>'Please make the following directory writable:',
	
	'ERR_DB_VERSION_FAILURE'=>'Unable to check database version.',
	
	'DEFAULT_CHARSET' => 'UTF-8' ,
	'ERR_ADMIN_PASS_BLANK' => 'SugarCRM管理者のパスワードを入力してください。 ' ,
	'ERR_CHECKSYS' => '整合性チェックの際にエラーが検出されました。SugarCRMを正常に動作させるため、以下にリストされた問題を解決し、再チェックボタンを押下するか、インストールをやり直してください。' ,

	//'ERR_CHECKSYS_CALL_TIME' => 'Allow Call Time Pass ReferenceがOnになっています（php.iniでOffに設定してください）' ,
	'ERR_CHECKSYS'=>'Errors have been detected during compatibility check.  In order for your SugarCRM Installation to function properly, please take the proper steps to address the issues listed below and either press the recheck button, or try installing again.',
	'ERR_CHECKSYS_CALL_TIME'=>'Allow Call Time Pass Reference is On (this should be set to Off in php.ini)',
	'ERR_CHECKSYS_CURL' => '見つかりません: Sugarスケジューラの機能は制限付きで動作します。' ,
	'ERR_CHECKSYS_FASTCGI_LOGGING'=>'For optimal experience using IIS/FastCGI sapi, set fastcgi.logging to 0 in your php.ini file.',
	'ERR_CHECKSYS_IMAP' => '見つかりません: インバウンド電子メールとキャンペーン電子メールを利用するためにはIMAPライブラリが必要です。この２つは動作しません。' ,
	'ERR_CHECKSYS_MSSQL_MQGPC' => 'SQL Serverを使用する場合はMagic Quotes GPCをOnにできません。' ,
	'ERR_CHECKSYS_MEM_LIMIT_0' => '注意: ' ,
	'ERR_CHECKSYS_MEM_LIMIT_1' => '警告:  $memory_limit （php.iniで' ,
	'ERR_CHECKSYS_MEM_LIMIT_2' => 'M以上に設定してください。) ' ,
	'ERR_CHECKSYS_MYSQL_VERSION' => 'バージョン4.1.2以上 - 見つかりました: ' ,
	'ERR_CHECKSYS_NO_SESSIONS' => 'セッション変数の読み込みと書き込みに失敗しました。インストールを続けることができません。' ,
	'ERR_CHECKSYS_NOT_VALID_DIR' => '正しいディレクトリではありません' ,
	'ERR_CHECKSYS_NOT_WRITABLE' => '警告: 書き込み不可' ,
	'ERR_CHECKSYS_PHP_INVALID_VER' => 'このPHPバージョンはサポートされません。SugarCRMがサポートするバージョンをインストールしてください。リリースノートなどのサポートプラットフォーム一覧を参照ください。このPHPバージョンは ' ,
	'ERR_CHECKSYS_IIS_INVALID_VER'=>'Your version of IIS is not supported by Sugar.  You will need to install a version that is compatible with the Sugar application.  Please consult the Compatibility Matrix in the Release Notes for supported IIS Versions. Your version is ',
	'ERR_CHECKSYS_FASTCGI'=>'We detect that you are not using a FastCGI handler mapping for PHP. You will need to install/configure a version that is compatible with the Sugar application.  Please consult the Compatibility Matrix in the Release Notes for supported Versions. Please see <a href="http://www.iis.net/php/" target="_blank">http://www.iis.net/php/</a> for details ',
	'ERR_CHECKSYS_FASTCGI_LOGGING'=>'For optimal experience using IIS/FastCGI sapi, set fastcgi.logging to 0 in your php.ini file.',
	'ERR_CHECKSYS_PHP_UNSUPPORTED' => 'このPHPのバージョンはサポート外です:  ( ver' ,
	'LBL_DB_UNAVAILABLE' => 'データベースが利用不可能です。' ,
	'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => 'データベースのサポートレイヤが見つかりません。MySQL、MS SQL Server、Oracleなどのデータベースのドライバが適切にインストールされていることを確認してください。お使いのPHPのバージョンによっては、php.iniファイルの当該エクステンションの行のコメントをはずすか、PHPをコンパイルし直す必要があります。データベースをサポートする詳しい方法についてはPHPのマニュアルを参照ください。' ,
	'LBL_CHECKSYS_XML_NOT_AVAILABLE' => 'XMLパーサライブラリに関連する機能が見つかりません。お使いのPHPのバージョンによっては、php.iniファイルの当該エクステンションの行のコメントをはずすか、PHPをコンパイルし直す必要があります。データベースをサポートする詳しい方法についてはPHPのマニュアルを参照ください。' ,
	'ERR_CHECKSYS_MBSTRING' => 'マルチバイトストリングをサポートするエクステンション（mbstring）が見つかりません。エクステンションがインストールされていないか、PHPがコンパイルされる際にmbstringモジュールが有効になっていない可能性があります。mbstringを有効にする方法についてはPHPのマニュアルを参照ください。' ,
	'ERR_CHECKSYS_SESSION_SAVE_PATH_NOT_SET'       => 'PHPの設定ファイル(php.ini)にsession.save_pathが設定されていないか、設定されたディレクトリが存在しません。session.save_pathに正しいディレクトリを指定してください。',
	'ERR_CHECKSYS_SESSION_SAVE_PATH_NOT_WRITABLE'  => 'PHPの設定ファイル(php.ini)のsession.save_pathに設定されたディレクトリに書き込みできません。ディレクトリに書き込み権限を与えてください。<br>権限の設定方法はシステムに依存します。対象ディレクトリにchmod 766を実行するか、右クリックのプロパティから読み込み専用属性をはずしてください。',
	'ERR_CHECKSYS_CONFIG_NOT_WRITABLE' => 'configファイルが存在しますが、書き込みができません。書き込みが可能になるように処理をしてください。OSに拠りますが、chmod 766などのパーミッションを変更するコマンドを実行したり、当該ファイルのプロパティで読み取り専用のチェックをはずす必要があります。' ,
	'ERR_CHECKSYS_CONFIG_OVERRIDE_NOT_WRITABLE'=>'The config override file exists but is not writeable.  Please take the necessary steps to make the file writeable.  Depending on your Operating system, this might require you to change the permissions by running chmod 766, or to right click on the filename to access the properties and uncheck the read only option.',
	'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE' => 'customディレクトリが存在しますが、書き込みができません。書き込みが可能になるように処理をしてください。OSに拠りますが、chmod 766などのパーミッションを変更するコマンドを実行したり、当該ファイルのプロパティで読み取り専用のチェックをはずす必要があります。' ,
	'ERR_CHECKSYS_FILES_NOT_WRITABLE' => '以下にリストされたディレクトリまたはファイルは書き込みができません。書き込みが可能になるように処理をしてください。OSに拠りますが、chmod 766などのパーミッションを変更するコマンドを実行したり、当該ファイルのプロパティで読み取り専用のチェックをはずす必要があります。' ,
	//'ERR_CHECKSYS_SAFE_MODE' => 'Safe ModeがOnになっています（php.iniでOffに設定することができます）' ,
	'ERR_CHECKSYS_ZLIB' => '見つかりません: zlib圧縮はSugarCRMのパフォーマンスを大きく向上させます。' ,
	'ERR_DB_ADMIN' => '入力されたデータベースの管理者ユーザ名またはパスワードが不正なため、データベースとの接続を確立できません。正しいユーザ名とパスワードを入力してください。（エラー: ' ,
	'ERR_DB_ADMIN_MSSQL' => '入力されたデータベースの管理者ユーザ名またはパスワードが不正なため、データベースとの接続を確立できません。正しいユーザ名とパスワードを入力してください。' ,
	'ERR_DB_EXISTS_NOT' => '指定されたデータベースは存在しません。' ,
	'ERR_DB_EXISTS_WITH_CONFIG' => 'データベースの設定は既にコンフィグデータに存在します。指定したデータベースでインストールする場合は再度インストーラを実行させ、「既存のSugarテーブルを削除して新しく作成しなおしますか?」にチェックを入れてください。アップグレードする場合は管理コンソールのアップグレードウィザードをご利用ください。アップグレードのドキュメントは <a href="http://docs.sugarforum.jp/" target="_new">こちら</a>を参照してください。' ,
	'ERR_DB_EXISTS' => '指定されたデータベース名は既に存在します。同一名称で同じデータベースは作成できません。' ,
	'ERR_DB_EXISTS_PROCEED' => '指定されたデータベース名は既に存在します。1. キャンセルボタンを押下してデータベースを新規に作成を選択するか、2. 許可を押下してこのまま進み、データベースを削除するか、のどちらかを選択できます。<strong>後者の場合、すべてのテーブルとデータが削除されます。</strong>' ,
	'ERR_DB_HOSTNAME' => 'ホスト名は空欄にできません。' ,
	'ERR_DB_INVALID' => '不正なデータベースタイプが選択されています。' ,
	'ERR_DB_LOGIN_FAILURE_MYSQL' => '入力されたデータベースのユーザ名もしくはパスワードが不正なため、データベースへの接続が確立できませんでした。正しいユーザ名とパスワードを入力してください。' ,
	'ERR_DB_LOGIN_FAILURE_MSSQL' => '入力されたデータベースのユーザ名もしくはパスワードが不正なため、データベースへの接続が確立できませんでした。正しいユーザ名とパスワードを入力してください。' ,
	'ERR_DB_MYSQL_VERSION1' => 'このMySQLのバージョン（' ,
	'ERR_DB_MYSQL_VERSION2' => '）はサポートされていません。サポートされているバージョンをインストールする必要があります。サポート対象のMySQLバージョンについては、リリースノートなどのサポートプラットフォーム一覧を参照ください。' ,
	'ERR_DB_NAME' => 'データベース名は空欄にできません。' ,
	'ERR_DB_NAME2' => '「\」、「/」、「.」を含むデータベース名を使用することはできません。' ,
	'ERR_DB_PASSWORD' => 'データベース管理者のパスワードが一致しません。再度入力してください。' ,
	'ERR_DB_PRIV_USER' => 'データベース管理者のユーザ名を入力してください。初期の接続時にユーザを利用します。' ,
	'ERR_DB_USER_EXISTS' => 'SugarCRMデータベースのユーザは既に存在します。同一名称でユーザを作成できません。新しいユーザ名を入力してください。' ,
	'ERR_DB_USER' => 'SugarCRMデータベースの管理者ユーザを入力してください。' ,
	'ERR_DBCONF_VALIDATION' => '次へ進む前に以下のエラーを修正してください:' ,
	'ERR_DBCONF_PASSWORD_MISMATCH' => 'データベースユーザのパスワードが一致しません。再度入力してください。' ,
	'ERR_ERROR_GENERAL' => '以下のエラーが見つかりました:' ,
	'ERR_LANG_CANNOT_DELETE_FILE' => 'ファイルを削除できません: ' ,
	'ERR_LANG_MISSING_FILE' => 'ファイルが見つかりません: ' ,
	'ERR_LANG_NO_LANG_FILE' => 'include/language内に言語パックが見つかりません: ' ,
	'ERR_LANG_UPLOAD_1' => 'アップロードに問題がありました。再度実行してください。' ,
	'ERR_LANG_UPLOAD_2' => '言語パックはZIPファイルである必要があります。' ,
	'ERR_LANG_UPLOAD_3' => 'PHPは仮ファイルをupgradeディレクトリへ移動できませんでした。' ,
	'ERR_LICENSE_MISSING' => '必須項目が入力されていません。' ,
	'ERR_LICENSE_NOT_FOUND' => 'ライセンスファイルが見つかりません！' ,
	'ERR_LOG_DIRECTORY_NOT_EXISTS' => '指定されたログディレクトリは正しくありません。' ,
	'ERR_LOG_DIRECTORY_NOT_WRITABLE' => '指定されたログディレクトリは書き込み不可です。' ,
	'ERR_LOG_DIRECTORY_REQUIRED' => 'カスタムログディレクトリを使用したい場合はディレクトリパスの指定が必要です。' ,
	'ERR_NO_DIRECT_SCRIPT' => '直接スクリプトを実行できません。' ,
	'ERR_NO_SINGLE_QUOTE' => 'シングルクォーテーションマークは使用できません: ' ,
	'ERR_PASSWORD_MISMATCH' => 'SugarCRM管理者のパスワードが一致しません。再度入力してください。' ,
	'ERR_PERFORM_CONFIG_PHP_1' => '<span class=stop>config.php</span>ファイルに書き込みできません。' ,
	'ERR_PERFORM_CONFIG_PHP_2' => '以下に表示されている設定情報を記述したconfig.phpを手動で作成することでインストールを続行できますが、<strong>次のステップに進む前にconfig.phpを作成する</strong>必要があります。' ,
	'ERR_PERFORM_CONFIG_PHP_3' => 'config.phpファイルは作成済みですか?' ,
	'ERR_PERFORM_CONFIG_PHP_4' => '警告: config.phpファイルに書き込みできませんでした。config.phpがあるかどうか確認してください。' ,
	'ERR_PERFORM_HTACCESS_1' => '' ,
	'ERR_PERFORM_HTACCESS_2' => 'ファイルに書き込みできません。' ,
	'ERR_PERFORM_HTACCESS_3' => 'ログファイルをブラウザからのアクセスからセキュアな状態にしたい場合は、以下のコードを記述した .htaccessファイルをログディレクトリ内に作成してください:' ,
	'ERR_PERFORM_NO_TCPIP' => '<b>インターネットの接続が検出できませんでした。</b>インターネットに接続されている場合は、<a href="http://www.sugarcrm.com/home/index.php?option=com_extended_registration&task=register\>http://www.sugarcrm.com/home/index.php?option=com_extended_registration&task=register</a>にアクセスして登録を行ってください。SugarCRMの用途などをお知らせいただくことによって、今後ご要望に沿ったプロダクトを提供するための参考とさせていただきます。' ,
	'ERR_SESSION_DIRECTORY_NOT_EXISTS' => '指定されたセッションディレクトリは正しくありません。' ,
	'ERR_SESSION_DIRECTORY' => '指定されたセッションディレクトリは書き込み不可です。' ,
	'ERR_SESSION_PATH' => 'カスタムセッションディレクトリを使用したい場合は、ディレクトリの指定が必要です。' ,
	'ERR_SI_NO_CONFIG' => 'config_si.phpがドキュメントルートにないか、config.php内で$sugar_config_siが設定されていません。' ,
	'ERR_SITE_GUID' => 'カスタムアプリケーションIDを使用したい場合はIDを指定する必要があります。' ,
	'ERR_UPLOAD_MAX_FILESIZE' => '警告: PHPの設定を、最低でも20MBのファイルのアップロードを許可するように変更する必要があります。' ,
	'LBL_UPLOAD_MAX_FILESIZE_TITLE' => 'アップロードファイルサイズ' ,
	'ERR_URL_BLANK' => 'SugarインスタンスのURLを入力してください。' ,
	'ERR_UW_NO_UPDATE_RECORD' => 'インストール情報が確認できません: ' ,
	'ERROR_FLAVOR_INCOMPATIBLE' => 'アップロードされたファイルはこのSugarのエディション (Community Edition、Professional Edition、またはEnterprise Edition) と互換性がありません。' ,
	'ERROR_LICENSE_EXPIRED' => 'エラー: ライセンスは' ,
	'ERROR_LICENSE_EXPIRED2' => ' 日前に切れています。管理メニューの<a href=\'index.php?action=LicenseSettings&module=Administration\'>ライセンス管理</a>に進み、新しいライセンスキーを入力してください。ライセンスが切れてから30日以内に新たなライセンスキーを入力しない場合、アプリケーションにログインできなくなります。' ,
	'ERROR_MANIFEST_TYPE' => 'マニフェストファイルはパッケージタイプを指定する必要があります。' ,
	'ERROR_PACKAGE_TYPE' => 'マニフェストファイルは不明のパッケージタイプを指定しています。' ,
	'ERROR_VALIDATION_EXPIRED' => 'エラー: 認証キーは' ,
	'ERROR_VALIDATION_EXPIRED2' => ' 日前に切れています。管理メニューの<a href=\'index.php?action=LicenseSettings&module=Administration\'>ライセンス管理</a>に進み、新しい認証キーを入力してください。認証が切れてから30日以内に新たな認証キーを入力しない場合、アプリケーションにログインできなくなります。' ,
	'ERROR_VERSION_INCOMPATIBLE' => 'アップロードされたファイルはこのSugarのバージョンと互換性がありません。' ,
	'LBL_BACK' => '戻る' ,
	'LBL_CANCEL' => 'キャンセル' ,
	'LBL_ACCEPT' => '許可' ,
	'LBL_CHECKSYS_1' => '正しくSugarCRMをインストールするために以下のチェック項目がすべて緑になっているかどうかを確認してください。赤い項目がある場合は設定を修正してください。' ,
	'LBL_CHECKSYS_CACHE' => 'Cacheサブディレクトリへの書き込み' ,
	'LBL_DROP_DB_CONFIRM' => '指定されたデータベース名は既に存在します。1. キャンセルボタンを押下してデータベースを新規に作成を選択するか、2. 許可を押下してこのまま進み、データベースを削除するか、のどちらかを選択できます。<strong>後者の場合、すべてのテーブルとデータが削除されます。</strong>' ,
	'LBL_CHECKSYS_CALL_TIME' => 'PHPのAllow Call Time Pass ReferenceをOffに設定' ,
	'LBL_CHECKSYS_COMPONENT' => 'コンポーネント' ,
	'LBL_CHECKSYS_COMPONENT_OPTIONAL' => 'オプショナルコンポーネント' ,
	'LBL_CHECKSYS_CONFIG' => 'Sugar設定ファイル (config.php) への書き込み' ,
	'LBL_CHECKSYS_CURL' => 'cURLモジュール' ,
	'LBL_CHECKSYS_SESSION_SAVE_PATH' => 'セッションディレクトリの設定',
	'LBL_CHECKSYS_CUSTOM' => 'カスタムディレクトリへの書き込み' ,
	'LBL_CHECKSYS_DATA' => 'Dataサブディレクトリへの書き込み' ,
	'LBL_CHECKSYS_IMAP' => 'IMAPモジュール' ,
	'LBL_CHECKSYS_MQGPC' => 'Magic Quotes GPC' ,
	'LBL_CHECKSYS_MBSTRING' => 'MB Stringsモジュール' ,
	'LBL_CHECKSYS_MEM_OK' => 'OK (無制限) ' ,
	'LBL_CHECKSYS_MEM_UNLIMITED' => 'OK (無制限) ' ,
	'LBL_CHECKSYS_MEM' => 'PHP Memory Limit >= ' ,
	'LBL_CHECKSYS_MODULE' => 'Modulesサブディレクトリ、ファイルへの書き込み' ,
	'LBL_CHECKSYS_MYSQL_VERSION' => 'MySQLバージョン' ,
	'LBL_CHECKSYS_NOT_AVAILABLE' => '問題あり' ,
	'LBL_CHECKSYS_OK' => 'OK' ,
	'LBL_CHECKSYS_PHP_INI' => '<b>備考: </b> PHP設定ファイル (php.ini) は以下の場所にあります:' ,
	'LBL_CHECKSYS_PHP_OK' => 'OK (ver ' ,
	'LBL_CHECKSYS_PHPVER' => 'PHPバージョン' ,
	'LBL_CHECKSYS_IISVER'=>'IIS Version',
	'LBL_CHECKSYS_FASTCGI'=>'FastCGI',
	'LBL_CHECKSYS_RECHECK' => '再チェック' ,
	'LBL_CHECKSYS_SAFE_MODE' => 'PHPのSafe ModeをOffに設定' ,
	'LBL_CHECKSYS_SESSION' => 'セッションディレクトリへの書き込み (' ,
	'LBL_CHECKSYS_STATUS' => 'ステータス' ,
	'LBL_CHECKSYS_TITLE' => 'システムチェック' ,
	'LBL_CHECKSYS_VER' => '見つかりました: ( ver ' ,
	'LBL_CHECKSYS_XML' => 'XML Parsing' ,
	'LBL_CHECKSYS_ZLIB' => 'ZLIB圧縮モジュール' ,
	'LBL_CHECKSYS_ZIP'=>'ZIP Handling Module',
	'LBL_CHECKSYS_FIX_FILES' => '進める前に以下のファイルやディレクトリを確定してください:' ,
	'LBL_CHECKSYS_FIX_MODULE_FILES' => '処理を進める前に、以下のモジュール内のディレクトリとファイルの問題を修正してください。:' ,
	'LBL_CHECKSYS_UPLOAD'=>'Writable Upload Directory',
	'LBL_CLOSE' => '完了' ,
	'LBL_THREE' => '3' ,
	'LBL_CONFIRM_BE_CREATED' => '作成' ,
	'LBL_CONFIRM_DB_TYPE' => 'データベースタイプ' ,
	'LBL_CONFIRM_DIRECTIONS' => '以下の設定を確認してください。設定を変更したい場合は「戻る」をクリックしてください。「次へ」をクリックしますとインストールが開始されます。' ,
	'LBL_CONFIRM_LICENSE_TITLE' => 'ライセンス情報' ,
	'LBL_CONFIRM_NOT' => '未' ,
	'LBL_CONFIRM_TITLE' => '設定の確認' ,
	'LBL_CONFIRM_WILL' => 'を' ,
	'LBL_DBCONF_CREATE_DB' => 'データベースを作成' ,
	'LBL_DBCONF_CREATE_USER' => 'ユーザを作成' ,
	'LBL_DBCONF_DB_DROP_CREATE_WARN' => '警告(重要): ここをチェックするとすべてのSugarデータが削除されます。' ,
	'LBL_DBCONF_DB_DROP_CREATE' => '既存のSugarテーブルを削除して新しく作成しなおしますか?' ,
	'LBL_DBCONF_DB_DROP' => 'テーブルの削除' ,
	'LBL_DBCONF_DB_NAME' => 'データベース名' ,
	'LBL_DBCONF_DB_PASSWORD' => 'Sugarデータベースのユーザパスワード' ,
	'LBL_DBCONF_DB_PASSWORD2' => 'Sugarデータベースのユーザパスワードの再入力' ,
	'LBL_DBCONF_DB_USER' => 'Sugarデータベースの管理者ユーザ名' ,
	'LBL_DBCONF_SUGAR_DB_USER' => 'Sugarデータベースの管理者ユーザ名' ,
	'LBL_DBCONF_DB_ADMIN_USER' => 'データベース管理者のユーザ名' ,
	'LBL_DBCONF_DB_ADMIN_PASSWORD' => 'データベース管理者のパスワード' ,
	'LBL_DBCONF_DEMO_DATA' => 'データベースにデモデータを追加しますか?' ,
	'LBL_DBCONF_DEMO_DATA_TITLE' => 'デモデータの選択' ,
	'LBL_DBCONF_HOST_NAME' => 'ホスト名' ,
	'LBL_DBCONF_HOST_NAME_MSSQL' => 'ホスト名 \ ホストインスタンス' ,
	'LBL_DBCONF_INSTRUCTIONS' => 'データベース設定を以下に入力してください。よくわからない場合はデフォルト値の使用を推奨します。' ,
	'LBL_DBCONF_MB_DEMO_DATA' => 'デモデータにマルチバイトを使用?' ,
	'LBL_DBCONFIG_MSG2' => 'データベースが存在するWebサーバ名もしくはマシン（ホスト）名:' ,
	'LBL_DBCONFIG_MSG3' => 'Sugarインスタンスのデータを保持するデータベースの名前:' ,
	'LBL_DBCONFIG_B_MSG1' => 'SugarCRMデータベースをセットアップするには、データベーステーブルとユーザを作成でき、データベースへの書き込みができる管理者ユーザのユーザ名とパスワードが必要です。' ,
	'LBL_DBCONFIG_SECURITY' => 'セキュリティ確保のため、Sugarデータベースにのみ接続する専用のユーザを指定することができます。このユーザはSugarデータベースへの書き込み、更新と読み込みができる必要があります。' ,
	'LBL_DBCONFIG_AUTO_DD' => '任せる' ,
	'LBL_DBCONFIG_PROVIDE_DD' => '既存ユーザを指定' ,
	'LBL_DBCONFIG_CREATE_DD' => '作成するためにユーザを定義' ,
	'LBL_DBCONFIG_SAME_DD' => '管理者ユーザと同じ' ,
	//'LBL_DBCONF_I18NFIX'=>'Apply database column expansion for varchar and char types (up to 255) for multi-byte data?',
	'LBL_FTS' => '全文検索' ,
	'LBL_FTS_INSTALLED' => 'インストール済み' ,
	'LBL_FTS_INSTALLED_ERR1' => '全文検索機能はインストールされていません。' ,
	'LBL_FTS_INSTALLED_ERR2' => 'このままインストールは続けられますが、全文検索機能を持つSQL Serverを再インストールしない限り、全文検索機能を使うことはできません。SQLサーバのインストールガイドを参照するか、管理者に連絡をしてください。' ,
	'LBL_DBCONF_PRIV_PASS' => '特権ユーザのパスワード' ,
	'LBL_DBCONF_PRIV_USER_2' => '上記のデータベースアカウントは特権ユーザですか?' ,
	'LBL_DBCONF_PRIV_USER_DIRECTIONS' => 'このユーザはデータベースを作成・削除し、他のユーザを作成する権限を持った特権ユーザである必要があります。このユーザの情報は、インストール時においてこのステップのみでしか使用されません。権限を持ったユーザであれば、上記で指定したユーザと同じユーザを使用してもかまいません。' ,
	'LBL_DBCONF_PRIV_USER' => '特権ユーザ名' ,
	'LBL_DBCONF_TITLE' => 'データベース設定' ,
	'LBL_DBCONF_TITLE_NAME' => 'データベース名の入力' ,
	'LBL_DBCONF_TITLE_USER_INFO' => 'データベースユーザの情報' ,
	'LBL_DISABLED_DESCRIPTION_2' => '変更後、インストールを開始するには「開始」をクリックしてください。<i>インストール完了後は「installer_locked」を「true」にする必要があります。</i>' ,
	'LBL_DISABLED_DESCRIPTION' => 'インストーラは実行済みです。セキュリティ上の理由から再インストールの実行を無効にしています。再インストールしたい場合はconfig.phpファイル内の「installer_locked」を以下のように「false」に変更してください:' ,
	'LBL_DISABLED_HELP_1' => 'SugarCRMインストールのヘルプは、SugarCRM' ,
	'LBL_DISABLED_HELP_LNK' => 'http://forum.sugarforum.jp/' ,
	'LBL_DISABLED_HELP_2' => 'サポートフォーラムでご覧いただけます。' ,
	'LBL_DISABLED_TITLE_2' => 'SugarCRMはインストール不可に設定されています' ,
	'LBL_DISABLED_TITLE' => 'SugarCRMはインストール不可です' ,
	'LBL_EMAIL_CHARSET_DESC' => 'このロケールで最も一般的なキャラクタセット' ,
	'LBL_EMAIL_CHARSET_TITLE' => 'アウトバウンドメール設定' ,
	'LBL_EMAIL_CHARSET_CONF' => 'アウトバウンドメールのキャラクタセット ' ,
	'LBL_HELP' => 'ヘルプ' ,
	'LBL_INSTALL' => 'インストール' ,
	'LBL_INSTALL_TYPE_TITLE' => 'インストールオプション' ,
	'LBL_INSTALL_TYPE_SUBTITLE' => 'インストールタイプの選択' ,
	'LBL_INSTALL_TYPE_TYPICAL' => ' <b>通常インストール</b>' ,
	'LBL_INSTALL_TYPE_CUSTOM' => ' <b>カスタムインストール</b>' ,
	'LBL_INSTALL_TYPE_MSG1' => 'アプリケーションの機能一般を動作させるにはキーの入力が必要ですが、必ずしもインストール時に入力する必要はありません。ただし、インストール後に入力する必要があります。' ,
	'LBL_INSTALL_TYPE_MSG2' => 'インストールのための最小限の情報を入力します。初めてインストールするユーザ向けです。' ,
	'LBL_INSTALL_TYPE_MSG3' => 'インストールのためのその他のオプションを入力してください。ほとんどの設定はインストール後に管理メニューから指定することも可能です。インストール経験のあるユーザ向けです。' ,
	'LBL_LANG_1' => 'SugarCRMでデフォルトの言語（米国英語）以外を用いる場合、ここで言語パックをアップロードしてインストールすることができます。後でSugarCRM管理メニューからインストールすることも可能です。' ,
	'LBL_LANG_BUTTON_COMMIT' => 'インストール' ,
	'LBL_LANG_BUTTON_REMOVE' => '削除' ,
	'LBL_LANG_BUTTON_UNINSTALL' => 'アンインストール' ,
	'LBL_LANG_BUTTON_UPLOAD' => 'アップロード' ,
	'LBL_LANG_NO_PACKS' => 'なし' ,
	'LBL_LANG_PACK_INSTALLED' => '以下の言語パックがインストール済みです: ' ,
	'LBL_LANG_PACK_READY' => '以下の言語パックがインストール待ちです: ' ,
	'LBL_LANG_SUCCESS' => '言語パックは正しくアップロードされました。' ,
	'LBL_LANG_TITLE' => '言語パック' ,
	'LBL_LANG_UPLOAD' => '言語パックをアップロード' ,
	'LBL_LICENSE_ACCEPTANCE' => 'ライセンス確認' ,
	'LBL_LICENSE_CHECKING' => '整合性のチェックをしています。' ,
	'LBL_LICENSE_CHKENV_HEADER' => '環境をチェック中' ,
	'LBL_LICENSE_CHKDB_HEADER' => 'データベースの認証を確認しています。' ,
	'LBL_LICENSE_CHECK_PASSED' => 'システムコンポーネントの整合性を確認できました。' ,
	'LBL_LICENSE_REDIRECT' => '移動します ' ,
	'LBL_LICENSE_DIRECTIONS' => 'ライセンス情報をお持ちの場合は以下のフィールドに入力してください。' ,
	'LBL_LICENSE_DOWNLOAD_KEY' => 'ダウンロードキーの入力' ,
	'LBL_LICENSE_EXPIRY' => '有効期限' ,
	'LBL_LICENSE_I_ACCEPT' => '同意します' ,
	'LBL_LICENSE_NUM_USERS' => 'ユーザ数' ,
	'LBL_LICENSE_OC_DIRECTIONS' => '購入したオフラインクライアントの数を入力してください。' ,
	'LBL_LICENSE_OC_NUM' => 'オフラインクライアントライセンスの数' ,
	'LBL_LICENSE_OC' => 'オフラインクライアントライセンス数' ,
	'LBL_LICENSE_PRINTABLE' => '印刷用' ,
	'LBL_PRINT_SUMM' => '概要を印刷' ,
	'LBL_LICENSE_TITLE_2' => 'SugarCRMライセンス' ,
	'LBL_LICENSE_TITLE' => 'ライセンス情報' ,
	'LBL_LICENSE_USERS' => 'ライセンスユーザ' ,
	
	'LBL_LOCALE_CURRENCY' => '通貨設定' ,
	'LBL_LOCALE_CURR_DEFAULT' => '通貨' ,
	'LBL_LOCALE_CURR_SYMBOL' => '通貨シンボル' ,
	'LBL_LOCALE_CURR_ISO' => 'ISO 4217コード' ,
	'LBL_LOCALE_CURR_1000S' => '1000位セパレータ' ,
	'LBL_LOCALE_CURR_DECIMAL' => '小数点シンボル' ,
	'LBL_LOCALE_CURR_EXAMPLE' => '例' ,
	'LBL_LOCALE_CURR_SIG_DIGITS' => '通貨の精度' ,
	'LBL_LOCALE_DATEF' => '日付表示形式' ,
	'LBL_LOCALE_DESC' => '指定されたロケールの設定はSugarインスタンス全般に反映されます。' ,
	'LBL_LOCALE_EXPORT' => 'インポート/エクスポートのキャラクタセット<br> <i>（電子メール、csv、vCard、PDF、インポート、エクスポート）</i>' ,
	'LBL_LOCALE_EXPORT_DELIMITER' => 'CSV用区切り記号' ,
	'LBL_LOCALE_EXPORT_TITLE' => 'インポート/エクスポート設定' ,
	'LBL_LOCALE_LANG' => '言語' ,
	'LBL_LOCALE_NAMEF' => '名前表示形式' ,
	'LBL_LOCALE_NAMEF_DESC' => 's = 敬称<br />f = 名<br />l = 姓' ,
	'LBL_LOCALE_NAME_FIRST' => '太郎' ,
	'LBL_LOCALE_NAME_LAST' => 'デモ' ,
	'LBL_LOCALE_NAME_SALUTATION' => 'Dr.' ,  //use key. do not translate
	'LBL_LOCALE_TIMEF' => '時間フォーマット' ,
	'LBL_LOCALE_TITLE' => 'ロケール設定' ,
	'LBL_CUSTOMIZE_LOCALE' => 'ロケール設定のカスタマイズ' ,
	'LBL_LOCALE_UI' => 'ユーザインターフェース' ,
	
	'LBL_ML_ACTION' => 'アクション' ,
	'LBL_ML_DESCRIPTION' => '詳細' ,
	'LBL_ML_INSTALLED' => 'インストール日時' ,
	'LBL_ML_NAME' => '名前' ,
	'LBL_ML_PUBLISHED' => '公開日' ,
	'LBL_ML_TYPE' => 'タイプ' ,
	'LBL_ML_UNINSTALLABLE' => 'アンインストール' ,
	'LBL_ML_VERSION' => 'バージョン' ,
	'LBL_MSSQL' => 'SQL Server' ,
	'LBL_MSSQL2' => 'SQL Server (FreeTDS)' ,
	'LBL_MSSQL_SQLSRV'=>'SQL Server (Microsoft SQL Server Driver for PHP)',
	'LBL_MYSQL' => 'MySQL' ,
	'LBL_MYSQLI'=>'MySQL (mysqli extension)',
	'LBL_IBM_DB2'=>'IBM DB2',
	'LBL_NEXT' => '次へ' ,
	'LBL_NO' => 'いいえ' ,
	'LBL_ORACLE' => 'Oracle' ,
	'LBL_PERFORM_ADMIN_PASSWORD' => 'サイト管理者のパスワードを設定しています' ,
	'LBL_PERFORM_AUDIT_TABLE' => '監査テーブル / ' ,
	'LBL_PERFORM_CONFIG_PHP' => 'Sugar設定ファイルを作成しています' ,
	'LBL_PERFORM_CREATE_DB_1' => '<b>データベースの作成中</b> ' ,
	'LBL_PERFORM_CREATE_DB_2' => '<b>上に</b> ' ,
	'LBL_PERFORM_CREATE_DB_USER' => 'データベースのユーザ名・パスワードを作成しています...' ,
	'LBL_PERFORM_CREATE_DEFAULT' => 'デフォルトのSugarデータを作成しています' ,
	'LBL_PERFORM_CREATE_LOCALHOST' => 'ローカルホスト用データベースのユーザ名・パスワードを作成しています...' ,
	'LBL_PERFORM_CREATE_RELATIONSHIPS' => 'Sugar関連テーブルを作成しています' ,
	'LBL_PERFORM_CREATING' => '作成中 / ' ,
	'LBL_PERFORM_DEFAULT_REPORTS' => 'デフォルトのレポートを作成しています' ,
	'LBL_PERFORM_DEFAULT_SCHEDULER' => 'デフォルトのスケジューラーを作成しています' ,
	'LBL_PERFORM_DEFAULT_SETTINGS' => 'デフォルトの設定を挿入しています' ,
	'LBL_PERFORM_DEFAULT_USERS' => 'デフォルトのユーザを作成しています' ,
	'LBL_PERFORM_DEMO_DATA' => 'デモデータをデータベーステーブルに追加しています (少々お待ちください) ...' ,
	'LBL_PERFORM_DONE' => '完了<br>' ,
	'LBL_PERFORM_DROPPING' => '削除中 / ' ,
	'LBL_PERFORM_FINISH' => '完了' ,
	'LBL_PERFORM_LICENSE_SETTINGS' => 'ライセンス情報をアップデートしています' ,
	'LBL_PERFORM_OUTRO_1' => 'Sugar ' ,
	'LBL_PERFORM_OUTRO_2' => 'のインストールが完了しました。' ,
	'LBL_PERFORM_OUTRO_3' => '実行時間: ' ,
	'LBL_PERFORM_OUTRO_4' => '秒' ,
	'LBL_PERFORM_OUTRO_5' => 'メモリ使用: 約' ,
	'LBL_PERFORM_OUTRO_6' => 'バイト' ,
	'LBL_PERFORM_OUTRO_7' => 'システムのインストールと設定が完了しました。' ,
	'LBL_PERFORM_REL_META' => '関連メタ ...' ,
	'LBL_PERFORM_SUCCESS' => '成功！' ,
	'LBL_PERFORM_TABLES' => 'SugarCRMアプリケーションのテーブル、監査テーブル、関連メタテーブルを作成しています。' ,
	'LBL_PERFORM_TITLE' => 'セットアップ実行' ,
	'LBL_PRINT' => '印刷' ,
	'LBL_REG_CONF_1' => '下の短いフォームにお答えください。SugarCRMより、製品に関するご案内、トレーニングクラスに関するニュース、特別なイベントへのご招待などをお送りします。ここで得られた情報は、第三者に販売、貸与、もしくは配布しません。' ,
	'LBL_REG_CONF_2' => 'ご登録にはお名前とメールアドレスの入力が必要です。他の項目はオプションですが参考のためご記入をお願いいたします。ご提供いただいた情報を第三者に販売、貸出、譲渡することは一切ありません。' ,
	'LBL_REG_CONF_3' => 'ご登録ありがとうございました。完了ボタンをクリックし、SugarCRMにログインしてください。初回は 「admin」 と、インストール時に設定したパスワードでログインいただけます。' ,
	'LBL_REG_TITLE' => '登録' ,
	'LBL_REG_NO_THANKS' => '登録しない' ,
	'LBL_REG_SKIP_THIS_STEP'            => 'ユーザ登録しない',
	'LBL_REQUIRED' => '* 必須項目' ,
	
	'LBL_SITECFG_ADMIN_Name' => 'SugarCRM管理者のユーザ名' ,
	'LBL_SITECFG_ADMIN_PASS_2' => 'SugarCRM管理者のユーザパスワードを再入力してください。' ,
	'LBL_SITECFG_ADMIN_PASS_WARN' => '警告（重要）: 再インストールの場合は前回設定した管理者のパスワードを上書きします。' ,
	'LBL_SITECFG_ADMIN_PASS' => 'SugarCRM管理者のユーザパスワード' ,
	'LBL_SITECFG_APP_ID' => 'アプリケーションID' ,
	'LBL_SITECFG_CUSTOM_ID_DIRECTIONS' => '選択した場合、自動生成されるアプリケーションIDを上書きするIDを指定する必要があります。このIDはSugarインスタンスが他のインスタンスに使われないようにする識別子となります。Sugarインスタンスをクラスタ構成にする場合には同一のIDを共有する必要があります。' ,
	'LBL_SITECFG_CUSTOM_ID' => 'カスタムアプリケーションID' ,
	'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS' => '選択した場合、デフォルトのログディレクトリを上書きするディレクトリを指定する必要があります。ログファイルの場所によらず、Webブラウザによってログファイルに直接アクセスしても.htaccessによってリダレクトされます。' ,
	'LBL_SITECFG_CUSTOM_LOG' => 'カスタムログディレクトリを使用' ,
	'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS' => '選択した場合、SugarCRMのセッション情報を保持するデレクトリを指定する必要があります。共有サーバなどでセッション情報の脆弱性を秘匿することができます。' ,
	'LBL_SITECFG_CUSTOM_SESSION' => 'Sugar用のカスタムセッションディレクトリを使用' ,
	'LBL_SITECFG_DIRECTIONS' => '以下にサイト設定情報を入力してください。よくわからない場合はデフォルト値の使用を推奨します。' ,
	'LBL_SITECFG_FIX_ERRORS' => '<b>進む前に以下のエラーを修復してください：</b>' ,
	'LBL_SITECFG_LOG_DIR' => 'ログディレクトリ' ,
	'LBL_SITECFG_SESSION_PATH' => 'セッションディレクトリパス<br> (書き込み可である必要があります) ' ,
	'LBL_SITECFG_SITE_SECURITY' => 'セキュリティオプションの選択' ,
	'LBL_SITECFG_SUGAR_UP_DIRECTIONS' => '選択した場合、システムは定期的にアプリケーションの更新ファイルを確認します。' ,
	'LBL_SITECFG_SUGAR_UP' => '自動的にアップデートをチェック?' ,
	'LBL_SITECFG_SUGAR_UPDATES' => 'Sugarアップデート設定' ,
	'LBL_SITECFG_TITLE' => 'サイト設定' ,
	'LBL_SITECFG_TITLE2' => 'Sugarインスタンスの定義' ,
	'LBL_SITECFG_SECURITY_TITLE' => 'サイトセキュリティ' ,
	'LBL_SITECFG_URL' => 'SugarインスタンスURL' ,
	'LBL_SITECFG_USE_DEFAULTS' => 'デフォルトを使用?' ,
	'LBL_SITECFG_ANONSTATS' => '匿名の利用統計情報を送信?' ,
	'LBL_SITECFG_ANONSTATS_DIRECTIONS' => 'SugarCRM社にインストールの匿名統計情報を送ります。この情報はよりよい製品の開発と改善に利用されます。' ,
	'LBL_SITECFG_URL_MSG' => 'インストール後にSugarインスタンスにアクセスするためのURLを入力してください。このURLはSugarアプリケーション全体のベースURLにもなります。URLはWebサーバかホスト名、もしくはIPアドレスを含む必要があります。' ,
	'LBL_SITECFG_SYS_NAME_MSG' => 'このシステムの名前を入力してください。この名前はブラウザの上部バーに表示されます。' ,
	'LBL_SITECFG_PASSWORD_MSG' => 'インストール後、SugarインスタンスにログインするためにはSugarCRM管理者のユーザ（ユーザ名=admin）を使用する必要があります。この管理者のパスワードを入力してください。このパスワードは最初のログイン後に変更可能です。' ,
	'LBL_SYSTEM_CREDS' => 'システム認証情報' ,
	'LBL_SYSTEM_ENV' => 'システム環境' ,
	'LBL_START' => '開始' ,
	'LBL_SHOW_PASS' => 'パスワードの表示' ,
	'LBL_HIDE_PASS' => 'パスワードを隠す' ,
	'LBL_HIDDEN' => '<i>（非表示）</i>' ,
	'LBL_CHOOSE_LANG' => '<b>言語の選択</b>' ,
	'LBL_STEP' => 'ステップ' ,
	'LBL_TITLE_WELCOME' => 'SugarCRMへようこそ ' ,
	'LBL_WELCOME_1' => 'このインストーラはSugarCRMデータベーステーブルを作成し、必要な変数を設定します。全プロセスを完了するのに必要な時間は10分程度です。' ,
	'LBL_WELCOME_2' => 'インストールのドキュメントについては<a href="http://docs.sugarforum.jp/" target="_blank">SugarCRMドキュメント</a>を参照ください。<BR><BR> テクニカルサポートが必要な場合はオープンソースCRMまでお問い合わせください。' ,
	
	'LBL_TITLE_ARE_YOU_READY' => 'インストールの準備はできていますか？' ,
	'REQUIRED_SYS_COMP' => '必要なシステムコンポーネント' ,
	'REQUIRED_SYS_COMP_MSG' => '開始する前に下記の必要なコンポーネントについて正しいバージョンがインストールされているか確認してください：<br><ul>
	<li> データベース/データベース管理システム（例：MySQL、SQL Server、Oracle）</li>
	<li> Webサーバ（例：Apache、IIS）</li>                     </ul>
	サポート対象のバージョンについてはリリースノートのサポートプラットフォーム一覧を参照ください。<br>' ,
	'REQUIRED_SYS_CHK' => '初期のシステムチェック' ,
	'REQUIRED_SYS_CHK_MSG' => 'インストールを開始すると、システムはSugarCRMファイルが存在するWebサーバ上でチェックを開始し、システムが適切に構成され必要なコンポーネントがインストールされていることを確認します。<br><br>
	システムは以下をチェックします：<br><ul>
	<li><b>PHPバージョン</b> - アプリケーションがサポートするPHPバージョンが必要です。</li>
	<li><b>セッション変数</b> - 正常に動作する必要があります。</li>
	<li> <b>MB Strings</b> - エクステンションがインストールされている必要があります。</li>
	<li> <b>データベースサポート</b> - MySQL、SQL                      ServerまたはOracleのサポートが必要です。</li>
	<li> <b>Config.php</b> - このファイルが存在し、書き込みが可能である必要があります。</li>
	<li>以下のディレクトリまたはファイルが書き込み可である必要があります。：<b><ul>
	<li>/custom</li>
	<li>/cache</li>
	<li>/modules</ul></b></li></ul>
	チェックでエラーが出た場合、次には進めず、チェックが完了しなかったというエラーメッセージが表示されます。必要な修復をした後、再度チェックをすることで次に進むことができます。<br><br>
	システムチェックのエラーについてはインストールガイドを参照ください。<br>' ,
	
	
	'REQUIRED_INSTALLTYPE' => '通常またはカスタムインストール' ,
	'REQUIRED_INSTALLTYPE_MSG' => 'システムチェックの完了後、通常またはカスタムインストールのどちらかを選択できます。<br><br>
	<b>通常</b>および<b>カスタム</b>インストールのどちらにおいても下記が必要になります：<br>
	<ul>
	<li> <b>Sugarデータを保持するデータベースのタイプ</b> <ul><li>サポートされるデータベースタイプ：MySQL、MS SQL Server、Oracle<br><br></li></ul></li>
	<li> <b>データベースが動作するサーバのマシン（ホスト）名</b>
	<ul><li>データベースがWebサーバと同じローカルコンピュータにある場合はこの値は<i>localhost</i>となります。<br><br></li></ul></li>
	<li><b>Sugarデータを保持するデータベース名</b>
	<ul>
	<li> 既にデータベースが存在する場合、それと同じ名前を入力すると、インストール中にデータベースは削除されます。</li>
	<li> 既存のデータベースが存在しない場合、インストール処理中にこの名前で新たなデータベースが作成されます。<br><br></li>
	</ul></li>
	<li><b>データベース管理者のユーザ名とパスワード</b> <ul><li>データベース管理者はテーブルやユーザを作成し、データベースへの書き込みができる必要があります。</li><li>データベースがローカルコンピュータになく、あなたがデータベースで管理者でない場合は、データベース管理者に連絡してください。<br><br></li></ul></li>
	<li> <b>Sugarデータベースのみに使われるデータベースユーザ</b><ul>
	<li> ユーザはデータベース管理者でも構いませんし、既存のデータベースの管理者ユーザでも構いません。</li>
	<li> 新しいユーザを作成する場合は、新しいユーザ名とパスワードを入力してください。インストール処理中に作成されます。</li>
	</ul></ul><p>
	<b>カスタム</b>セットアップの場合、追加で下記が必要になります：<br>
	<ul>
	<li> <b>インストール後にSugarインスタンスにアクセスするためのURL </b>このURLはWebサーバのマシン名もしくはIPアドレスになります。<br><br></li>
	<li> [オプション] <b>セッションディレクトリのパス</b>共有サーバなどでセッション情報を脆弱性から守るため、セッション情報を特別なディレクトリに格納する場合に指定します。<br><br></li>
	<li> [オプション] <b>カスタムログディレクトリのパス</b>デフォルトのログディレクトリを上書きする場合に指定します。<br><br></li>
	<li> [オプション] <b>アプリケーションID</b>自動生成されるアプリケーションIDを上書きしたい場合に指定します。このIDは当インスタンスを他と区別するために用いられます。<br><br></li>
	<li>このロケールで一般的に用いられる<b>キャラクタセット</b><br><br></li></ul>より詳細な情報についてはインストールガイドをご覧下さい。' ,
	'LBL_WELCOME_PLEASE_READ_BELOW' => 'インストールを進める前に以下の重要情報をお読みください。この情報は、インストールの準備が出来ているかどうかを判断することに役立ちます。' ,
	
	'LBL_WELCOME_CHOOSE_LANGUAGE' => '<b>言語の選択</b>' ,
	'LBL_WELCOME_SETUP_WIZARD' => 'セットアップウィザード' ,
	'LBL_WELCOME_TITLE_WELCOME' => 'SugarCRMへようこそ ' ,
	'LBL_WELCOME_TITLE' => 'SugarCRMセットアップウィザード' ,
	'LBL_WIZARD_TITLE' => 'Sugarセットアップウィザード' ,
	'LBL_YES' => 'はい' ,
	'LBL_YES_MULTI' => 'はい - マルチバイトデータあり' ,
	// OOTB Scheduler Job Names:
	'LBL_OOTB_WORKFLOW' => 'ワークフロータスク実行' ,
	'LBL_OOTB_REPORTS' => 'レポート生成の時間指定タスクを実行' ,
	'LBL_OOTB_IE' => 'インバウンド電子メール受信箱の確認' ,
	'LBL_OOTB_BOUNCE' => 'バウンスしたキャンペーン電子メールの処理を夜間に実行' ,
	'LBL_OOTB_CAMPAIGN' => 'キャンペーン電子メール送信を夜間に実行' ,
	'LBL_OOTB_PRUNE' => '月初め（1日）にデータベースを最適化' ,
	'LBL_OOTB_TRACKER'		=> '月始め（1日）にユーザ履歴を最適化',  //trac#321
	'LBL_OOTB_SEND_EMAIL_REMINDERS'=>'Run Email Reminder Notifications',
	'LBL_UPDATE_TRACKER_SESSIONS' => 'tracker_sessionsテーブルを更新',
	
	
	'LBL_PATCHES_TITLE' => '最新パッチのインストール' ,
	'LBL_MODULE_TITLE' => '言語パックのインストール' ,
	'LBL_PATCH_1' => 'このステップを飛ばしたい場合は次へをクリックしてください。' ,
	'LBL_PATCH_TITLE' => 'システムパッチ' ,
	'LBL_PATCH_READY' => '以下のパッチがインストール待ちです:' ,
	'LBL_SESSION_ERR_DESCRIPTION' => 'SugarCRMは重要情報を格納するためにWebサーバに接続中にPHPセッションを利用しています。このPHPインストレーションはセッションが正しく設定されていません。<br><br>もっとも一般的な設定ミスは、<b>\'session.save_path\'</b>ディレクティブが正しいディレクトリを指していないことです。<br><br>php.iniの<a target=_new href=\'http://us2.php.net/manual/en/ref.session.php\'>PHPの設定</a>を見直してください。' ,
	'LBL_SESSION_ERR_TITLE' => 'PHPセッション設定エラー' ,
	'LBL_SYSTEM_NAME' => 'システム名' ,
	'LBL_COLLATION'=>'Collation Settings',
	'LBL_REQUIRED_SYSTEM_NAME' => 'Sugarインスタンスのシステム名を入力してください。' ,
	'LBL_PATCH_UPLOAD' => 'ローカルコンピュータからパッチを選択してください。',
	'LBL_INCOMPATIBLE_PHP_VERSION'              => 'PHPのバージョンは5以上である必要があります。',
	'LBL_MINIMUM_PHP_VERSION' => 'PHPのバージョンは5.1.0以上である必要があります。（5.2.x以上推奨）',
	'LBL_YOUR_PHP_VERSION' => '(ご利用システムのPHPバージョンは',
	'LBL_RECOMMENDED_PHP_VERSION' =>' PHPのバージョンは5.2.x以上を推奨します。)',
	'LBL_BACKWARD_COMPATIBILITY_ON' => 'PHP下位互換モードが有効になっています。先に進めるためにzend.ze1_compatibility_modeをOffにセットしてください。',

	'advanced_password_new_account_email'=>array(
		'subject'=>'New account information',
		'description'=>'This template is used when the System Administrator sends a new password to a user.',
		'body'=>'<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Here is your account username and temporary password:</p><p>Username : $contact_user_user_name </p><p>Password : $contact_user_user_hash </p><br><p>$config_site_url</p><br><p>After you log in using the above password, you may be required to reset the password to one of your own choice.</p>   </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
		'txt_body'=>'
Here is your account username and temporary password:
Username : $contact_user_user_name
Password : $contact_user_user_hash
	
$config_site_url
	
After you log in using the above password, you may be required to reset the password to one of your own choice.',
		'name'=>'System-generated password email',
	),
	'advanced_password_forgot_password_email'=>array(
		'subject'=>'Reset your account password',
		'description'=>"This template is used to send a user a link to click to reset the user's account password.",
		'body'=>'<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>You recently requested on $contact_user_pwd_last_changed to be able to reset your account password. </p><p>Click on the link below to reset your password:</p><p> $contact_user_link_guid </p>  </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
		'txt_body'=>'\nYou recently requested on $contact_user_pwd_last_changed to be able to reset your account password.\n\nClick on the link below to reset your password:\n\n$contact_user_link_guid',
		'name'=>'Forgot Password email',
	),
);