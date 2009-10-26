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
	/*'ADMIN_EXPORT_ONLY'=>'Admin export only',*/
	'ADVANCED'=>'高度な設定',
	'CAPTCHA'=>'キャプチャ認証',
	'CAPTCHA_PRIVATE_KEY'=>'キャプチャ秘密キー',
	'CAPTCHA_PUBLIC_KEY'=>'キャプチャ公開キー',
	'CURRENT_LOGO'=>'現在使用中のロゴ',
	'DEFAULT_CURRENCY_ISO4217'=>'ISO 4217通貨コード',
	'DEFAULT_CURRENCY_NAME'=>'通貨名',
	'DEFAULT_CURRENCY_SYMBOL'=>'通貨シンボル',
	'DEFAULT_CURRENCY'=>'通貨',
	'DEFAULT_DATE_FORMAT'=>'デフォルトの日付フォーマット',
	'DEFAULT_DECIMAL_SEP'					=> '小数点シンボル',
	'DEFAULT_LANGUAGE'=>'デフォルト言語',
	'DEFAULT_NUMBER_GROUPING_SEP'			=> '1000位セパレータ',
	'DEFAULT_SYSTEM_SETTINGS'=>'ユーザインターフェース',
	'DEFAULT_THEME'=> 'デフォルトテーマ',
	'DEFAULT_TIME_FORMAT'=>'デフォルトの時間フォーマット',
/*	'DISABLE_EXPORT'=>'Disable export',*/
	'DISPLAY_LOGIN_NAV'=>'ログイン画面でのタブ表示',
	'DISPLAY_RESPONSE_TIME'=>'サーバ応答時間の表示',
	'ENABLE_CAPTCHA'=>'自動フォーム入力を避けるためにキャプチャ認証を有効化しますか?',
	/*'EXPORT'=>'Export',
	'EXPORT_CHARSET' => 'エクスポート時の文字セット',
	'EXPORT_DELIMITER' => 'Export Delimiter',*/
	'IMAGES'=>'ロゴ',
	'LBL_CONFIGURE_SETTINGS_TITLE' => 'システム設定',
	'LBL_ENABLE_MAILMERGE' => 'メールマージ',
	'LBL_LOGVIEW' => 'ログ設定',
	'LBL_MAIL_SMTPAUTH_REQ'				=> 'SMTP認証を使用？',
	'LBL_MAIL_SMTPPASS'					=> 'SMTPパスワード:',
	'LBL_MAIL_SMTPPORT'					=> 'SMTPポート番号:',
	'LBL_MAIL_SMTPSERVER'				=> 'SMTPサーバ名:',
	'LBL_MAIL_SMTPUSER'					=> 'SMTPユーザ名:',
	'LBL_MAILMERGE_DESC' => 'この機能を利用するためには、個々のユーザがSugar Plug-in for Microsoft&reg; Word&reg;をインストールし、かつ、このチェックボックスを有効にする必要があります。',
	'LBL_MAILMERGE' => 'メールマージ',
	'LBL_MODULE_FAVICON'               => 'Display module icon as favicon',
    'LBL_MODULE_FAVICON_HELP'   => 'If you are in a module with an icon, use the module\'s icon as the favicon, instead of the theme\'s favicon, in the browser tab.',
	'LBL_MODULE_NAME'=>'システム設定',
    'LBL_MODULE_ID'  => 'コンフィグレータ',
	'LBL_MODULE_TITLE'=>'ユーザインターフェース',
	'LBL_NOTIFY_FROMADDRESS' => 'From（アドレス）:',
	'LBL_NOTIFY_SUBJECT' => '電子メール件名:',
	'LBL_PORTAL_ON_DESC' => 'ケース、ノート、その他のデータを外部のセルフサービスポータルで操作できるようにします。',
	'LBL_PORTAL_ON' => 'セルフサービスポータル統合を有効',
	'LBL_PORTAL_TITLE' => 'カスタマーセルフサービスポータル',
	'LBL_PROXY_AUTH'=>'認証？',
	'LBL_PROXY_HOST'=>'プロキシホスト: ',
	'LBL_PROXY_ON_DESC'=>'サーバ名と認証情報を設定します。',
	'LBL_PROXY_ON'=>'プロキシを利用',
	'LBL_PROXY_PASSWORD'=>'パスワード',
	'LBL_PROXY_PORT'=>'ポート: ',
	'LBL_PROXY_TITLE'=>'プロキシ設定',
	'LBL_PROXY_USERNAME'=>'ユーザ名',
	'LBL_RESTORE_BUTTON_LABEL'=>'リストア',
	'LBL_SKYPEOUT_ON_DESC' => 'SkypeOut&reg;を利用して、電話番号をクリックすると電話がかけられるように設定します。この機能を利用するためには、電話番号が正しく設定されている必要があります。番号は、+〔国番号〕〔電話番号〕です。例えば +1 (555) 555-1234 です。詳細は<a href="http://www.skype.com/help/faq/skypeout.html#calling" target="skype">SkypeOut&reg; faq</a>を参照してください。',
	'LBL_SKYPEOUT_ON' => 'SkypeOut&reg;統合を有効',
	'LBL_SKYPEOUT_TITLE' => 'SkypeOut&reg;',
	'LBL_USE_REAL_NAMES'	=> 'フルネームの表示（ログイン以外）',
	'LIST_ENTRIES_PER_LISTVIEW'=>'ページごとに表示するアイテムの数',
	'LIST_ENTRIES_PER_SUBPANEL'=>'ページごとに表示するアイテムの数(サブパネル)',




	'LOG_MEMORY_USAGE'=>'メモリ使用状況のログ',
	'LOG_SLOW_QUERIES'=>'遅延クエリのログ',

    'LOCK_HOMEPAGE_HELP'=>'この設定は以下を回避します。<BR> 1) ホームモジュールで新規ホームページとダッシュレットを追加 <BR>2) ドラグアンドドロップによるホームページ上のダッシュレットの配置のカスタマイズ',




    'CURRENT_LOGO'=>'Current Logo',
    'CURRENT_LOGO_HELP'=>'This logo is displayed at the top left-hand corner of the Sugar application.',
    'NEW_LOGO'=>'新たなロゴをアップロード（212×40）',
    'NEW_LOGO_HELP'=>'画像ファイルのフォーマットは.pngか.jpgの必要があります。<br>推奨サイズは212x40pxです。',
    'NEW_QUOTE_LOGO'=>'見積用の新たなロゴをアップロード（867×74）',
    'NEW_QUOTE_LOGO_HELP'=>'画像フォーマットはJPEGである必要があります。<br>推奨サイズは 867x74pxです。',
    'QUOTES_CURRENT_LOGO'=>'見積で使用されるロゴ (85%)',
	'SLOW_QUERY_TIME_MSEC'=>'遅延クエリの閾値（ミリ秒）',
	'STACK_TRACE_ERRORS'=>'エラースタックトレースの表示',
	'UPLOAD_MAX_SIZE'=>'最大アップロードサイズ(バイト)',
	'VERIFY_CLIENT_IP'=>'ユーザのIPアドレスの正当性を確認',
    'LOCK_HOMEPAGE' => 'ユーザがホームをカスタマイズすることを禁止',
    'LOCK_SUBPANELS' => 'ユーザがサブパネルをカスタマイズすることを禁止',
    'MAX_DASHLETS' => 'ホームに表示するダッシュレットの最大数',
	'SYSTEM_NAME'=>'システム名',







    'LBL_LDAP_TITLE'=>'LDAP認証',
    'LBL_LDAP_ENABLE'=>'LDAPを有効',
    'LBL_LDAP_SERVER_HOSTNAME'=> 'サーバ名:',
    'LBL_LDAP_SERVER_PORT'=> 'ポート番号:',
    'LBL_LDAP_ADMIN_USER'=> '認証ユーザ名:',
    'LBL_LDAP_ADMIN_USER_DESC'=>'Sugarユーザの検索に利用されます。指定しない場合は匿名ユーザとしてバインドします。',
    'LBL_LDAP_ADMIN_PASSWORD'=> '認証パスワード:',
	'LBL_LDAP_AUTHENTICATION'=> 'Authentication:',
	'LBL_LDAP_AUTHENTICATION_DESC'=>'Bind to the LDAP server using a specific users credentials',
    'LBL_LDAP_AUTO_CREATE_USERS'=>'ユーザを自動作成:',
    'LBL_LDAP_BASE_DN'=>'ベースDN:',
    'LBL_LDAP_USER_DN'=>'User DN:',
	'LBL_LDAP_GROUP_DN'=>'Group DN:',
	'LBL_LDAP_GROUP_DN_DESC'=>'Example: <em>ou=groups,dc=example,dc=com</em>',
	'LBL_LDAP_USER_FILTER'=>'User Filter:',
	'LBL_LDAP_GROUP_MEMBERSHIP'=>'Group Membership:',
	'LBL_LDAP_GROUP_MEMBERSHIP_DESC'=>'Users must be a member of a specific group',
	'LBL_LDAP_GROUP_USER_ATTR'=>'User Attribute:',
	'LBL_LDAP_GROUP_USER_ATTR_DESC'=>'The unique identifier of the person that will be used to check if they are a member of the group Example: <em>uid</em>',
	'LBL_LDAP_GROUP_ATTR_DESC'=>'The attribute of the Group that will be used to filter against the User Attribute Example: <em>memberUid</em>',
	'LBL_LDAP_GROUP_ATTR'=>'Group Attribute:',
	'LBL_LDAP_USER_FILTER_DESC'=>'Any additional filter params to apply when authenticating users e.g.<em>is_sugar_user=1 or (is_sugar_user=1)(is_sales=1)</em>',
    'LBL_LDAP_LOGIN_ATTRIBUTE'=>'ログイン属性:',
    'LBL_LDAP_BIND_ATTRIBUTE'=>'バインド属性:',
    'LBL_LDAP_BIND_ATTRIBUTE_DESC'=>'LDAPユーザのバインド例:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;userPrincipalName] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;uid] ',
    'LBL_LDAP_LOGIN_ATTRIBUTE_DESC'=>'LDAPユーザの検索例: [<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;dn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;dn] ',
    'LBL_LDAP_SERVER_HOSTNAME_DESC'=>'例: ldap.example.com',
    'LBL_LDAP_SERVER_PORT_DESC'=>'例: 389',
	'LBL_LDAP_GROUP_NAME'=>'Group Name:',
	'LBL_LDAP_GROUP_NAME_DESC'=>'Example <em>cn=sugarcrm</em>',
    'LBL_LDAP_BASE_DN_DESC'=>'例: DC=SugarCRM,DC=com',
    'LBL_LDAP_AUTO_CREATE_USERS_DESC'=> '認証ユーザが存在しない場合、Sugarにユーザを作成します。',
    'LBL_LDAP_ENC_KEY'	=> '暗号化キー:',
    'DEVELOPER_MODE'=>'開発者モード',
    'LBL_LDAP_ENC_KEY_DESC'	=> 'LDAP使用時のSOAP認証用',
    'LDAP_ENC_KEY_NO_FUNC_DESC' => 'php.iniファイルのphp_mcryptエクステンションを有効にする必要があります。',
    'LBL_ALL' => 'すべての',
    'LBL_MARK_POINT' => 'ポイントをマーク',
    'LBL_NEXT_' => '次へ>>',
    'LBL_REFRESH_FROM_MARK' => 'マークから再表示',
    'LBL_SEARCH' => '検索:',
    'LBL_REG_EXP' => '正規表現:',
    'LBL_IGNORE_SELF' => 'それ自身を無視する:',
    'LBL_MARKING_WHERE_START_LOGGING'=>'どこからログをスタートするかマークする',
    'LBL_DISPLAYING_LOG'=>'ログの表示',
    'LBL_YOUR_PROCESS_ID'=>'あなたのプロセスID',
    'LBL_YOUR_IP_ADDRESS'=>'あなたのIPアドレスは',
    'LBL_IT_WILL_BE_IGNORED'=>'破棄されました ',
    'LBL_LOG_NOT_CHANGED'=>'ログに変更はありません',
    'LBL_ALERT_JPG_IMAGE' => '画像フォーマットはJPEGである必要があります。拡張子が.jpgのファイルを新たにアップロードしてください。',
    'LBL_ALERT_TYPE_IMAGE' => '画像ファイルのフォーマットはJPEGかPNGである必要があります。拡張子が.jpgか.pngのファイルを新しくアップロードしてください。',
    'LBL_ALERT_SIZE_RATIO' => '画像の縦横比は1:1と10:1の間になければなりません。画像のサイズは自動的に変更されます。',
    'LBL_ALERT_SIZE_RATIO_QUOTES' => '画像の縦横比は3:1と20:1の間になければなりません。この比率で新しいファイルをアップロードしてください。',
    'ERR_ALERT_FILE_UPLOAD' => 'イメージをアップロード中にエラーが発生しました',
    'LBL_LOGGER'=>'ログ設定',
	'LBL_LOGGER_FILENAME'=>'ログファイル名',
	'LBL_LOGGER_FILE_EXTENSION'=>'拡張子',
	'LBL_LOGGER_MAX_LOG_SIZE'=>'ログファイルの最大サイズ',
	'LBL_LOGGER_DEFAULT_DATE_FORMAT'=>'デフォルトの日付出力形式',
	'LBL_LOGGER_LOG_LEVEL'=>'ログレベル',
	'LBL_LOGGER_MAX_LOGS'=>'ログファイルの最大数 (ローテーション前)',
	'LBL_LOGGER_FILENAME_SUFFIX' =>'ファイル名に追加するサフィックス',
	'LBL_VCAL_PERIOD' => 'vCal更新の周期:',
	'vCAL_HELP' => 'この設定は、現在に日付から何か月先までのコールおよびミーティングの空き状況を公開かを決定する際に利用されます。</BR>空き状況を公開しない場合は、"0"を入力してください。最低期間は1ヶ月です。最大期間は12ヶ月です。',


















    'LBL_PDFMODULE_NAME' => 'PDF Settings',
    'SUGARPDF_BASIC_SETTINGS' => 'Document Properties',
    'SUGARPDF_ADVANCED_SETTINGS' => 'Advanced Settings',
    'SUGARPDF_LOGO_SETTINGS' => 'Images',

    'PDF_CREATOR' => 'PDF Creator',
    'PDF_CREATOR_INFO' => 'Defines the creator of the document. <br>This is typically the name of the application that generates the PDF.',

    'PDF_AUTHOR' => 'Author',
    'PDF_AUTHOR_INFO' => 'The Author appears in the document properties.',

    'PDF_HEADER_LOGO' => 'For Quotes PDF Documents',
    'PDF_HEADER_LOGO_INFO' => 'This image appears in the default Header in Quotes PDF Documents.',

    'PDF_NEW_HEADER_LOGO' => 'Select New Image for Quotes',
    'PDF_NEW_HEADER_LOGO_INFO' => 'The file format can be either .jpg or .png. (Only .jpg for EZPDF)<BR>The recommended size is 867x74 px.',

    'PDF_HEADER_LOGO_WIDTH' => 'Quotes Image Width',
    'PDF_HEADER_LOGO_WIDTH_INFO' => 'Change the scale of the uploaded image that appears in Quotes PDF Documents. (TCPDF only)',

    'PDF_SMALL_HEADER_LOGO' => 'For Reports PDF Documents',
    'PDF_SMALL_HEADER_LOGO_INFO' => 'This image appears in the default Header in Reports PDF Documents.<br> This image also appears in the top left-hand corner of the Sugar application.',

    'PDF_NEW_SMALL_HEADER_LOGO' => 'Select New Image for Reports',
    'PDF_NEW_SMALL_HEADER_LOGO_INFO' => 'The file format can be either .jpg or .png. (Only .jpg for EZPDF)<BR>The recommended size is 212x40 px.',

    'PDF_SMALL_HEADER_LOGO_WIDTH' => 'Reports Image Width',
    'PDF_SMALL_HEADER_LOGO_WIDTH_INFO' => 'Change the scale of the uploaded image that appears in Reports PDF Documents. (TCPDF only)',


    'PDF_HEADER_STRING' => 'Header String',
    'PDF_HEADER_STRING_INFO' => 'Header description string',

    'PDF_HEADER_TITLE' => 'Header Title',
    'PDF_HEADER_TITLE_INFO' => 'String to print as title on document header',

    'PDF_FILENAME' => 'Default Filename',
    'PDF_FILENAME_INFO' => 'Default filename for the generated PDF files',

    'PDF_TITLE' => 'Title',
    'PDF_TITLE_INFO' => 'The Title appears in the document properties.',

    'PDF_SUBJECT' => 'Subject',
    'PDF_SUBJECT_INFO' => 'The Subject appears in the document properties.',

    'PDF_KEYWORDS' => 'Keyword(s)',
    'PDF_KEYWORDS_INFO' => 'Associate Keywords with the document, generally in the form "keyword1 keyword2..."',

    'PDF_COMPRESSION' => 'Compression',
    'PDF_COMPRESSION_INFO' => 'Activates or deactivates page compression. <br>When activated, the internal representation of each page is compressed, which leads to a compression ratio of about 2 for the resulting document.',

    'PDF_JPEG_QUALITY' => 'JPEG Quality (1-100)',
    'PDF_JPEG_QUALITY_INFO' => 'Set the default JPEG compression quality (1-100)',

    'PDF_PDF_VERSION' => 'PDF Version',
    'PDF_PDF_VERSION_INFO' => 'Set the PDF version (check PDF reference for valid values).',

    'PDF_PROTECTION' => 'Document Protection',
    'PDF_PROTECTION_INFO' => 'Set document protection<br>- copy: copy text and images to the clipboard<br>- print: print the document<br>- modify: modify it (except for annotations and forms)<br>- annot-forms: add annotations and forms<br>Note: the protection against modification is for people who have the full Acrobat product.',

    'PDF_USER_PASSWORD' => 'User Password',
    'PDF_USER_PASSWORD_INFO' => 'If you don\\\'t set any password, the document will open as usual. <br>If you set a user password, the PDF viewer will ask for it before displaying the document. <br>The master password, if different from the user one, can be used to get full access.',

    'PDF_OWNER_PASSWORD' => 'Owner Password',
    'PDF_OWNER_PASSWORD_INFO' => 'If you don\\\'t set any password, the document will open as usual. <br>If you set a user password, the PDF viewer will ask for it before displaying the document. <br>The master password, if different from the user one, can be used to get full access.',
    
    'PDF_ACL_ACCESS' => 'Access Control',
    'PDF_ACL_ACCESS_INFO' => 'Default Access Control for the PDF generation.',

    'K_CELL_HEIGHT_RATIO' => 'Cell Height Ratio',
    'K_CELL_HEIGHT_RATIO_INFO' => 'If the height of a cell is smaller than (Font Height x Cell Height Ratio), then (Font Height x Cell Height Ratio) is used as the cell height.<br>(Font Height x Cell Height Ratio) is also used as the height of the cell when no height is define.',

    'K_TITLE_MAGNIFICATION' => 'Title Magnification',
    'K_TITLE_MAGNIFICATION_INFO' => 'Title magnification respect main font size.',

    'K_SMALL_RATIO' => 'Small Font Factor',
    'K_SMALL_RATIO_INFO' => 'Reduction factor for small font.',

    'HEAD_MAGNIFICATION' => 'Head Magnification',
    'HEAD_MAGNIFICATION_INFO' => 'Magnification factor for titles.',

    'PDF_IMAGE_SCALE_RATIO' => 'Image scale ratio',
    'PDF_IMAGE_SCALE_RATIO_INFO' => 'Ratio used to scale the images',

    'PDF_UNIT' => 'Unit',
    'PDF_UNIT_INFO' => 'document unit of measure',
	'PDF_GD_WARNING'=>'You do not have the GD library installed for PHP. Without the GD library installed, only JPEG logos can be displayed in PDF documents.',
    'ERR_EZPDF_DISABLE'=>'Warning : The EZPDF class is disabled from the config table and it set as the PDF class. Please "Save" this form to set TCPDF as the PDF Class and return in a stable state.',
    'LBL_IMG_RESIZED'=>"(resized for display)",


    'LBL_FONTMANAGER_BUTTON' => 'PDF Font Manager',
    'LBL_FONTMANAGER_TITLE' => 'PDF Font Manager',
    'LBL_FONT_BOLD' => 'Bold',
    'LBL_FONT_ITALIC' => 'Italic',
    'LBL_FONT_BOLDITALIC' => 'Bold/Italic',
    'LBL_FONT_REGULAR' => 'Regular',

    'LBL_FONT_TYPE_CID0' => 'CID-0',
    'LBL_FONT_TYPE_CORE' => 'Core',
    'LBL_FONT_TYPE_TRUETYPE' => 'TrueType',
    'LBL_FONT_TYPE_TYPE1' => 'Type1',
    'LBL_FONT_TYPE_TRUETYPEU' => 'TrueTypeUnicode',

    'LBL_FONT_LIST_NAME' => 'Name',
    'LBL_FONT_LIST_FILENAME' => 'Filename',
    'LBL_FONT_LIST_TYPE' => 'Type',
    'LBL_FONT_LIST_STYLE' => 'Style',
    'LBL_FONT_LIST_STYLE_INFO' => 'Style of the font',
    'LBL_FONT_LIST_ENC' => 'Encoding',
    'LBL_FONT_LIST_EMBEDDED' => 'Embedded',
    'LBL_FONT_LIST_EMBEDDED_INFO' => 'Check to embed the font into the PDF file',
    'LBL_FONT_LIST_CIDINFO' => 'CID Information',
    'LBL_FONT_LIST_CIDINFO_INFO' => "Examples :".
"<ul><li>".
"Chinese Traditional :<br>".
"<pre>\$enc=\'UniCNS-UTF16-H\';<br>".
"\$cidinfo=array(\'Registry\'=>\'Adobe\', \'Ordering\'=>\'CNS1\',\'Supplement\'=>0);<br>".
"include(\'include/tcpdf/fonts/uni2cid_ac15.php\');</pre>".
"</li><li>".
"Chinese Simplified :<br>".
"<pre>\$enc=\'UniGB-UTF16-H\';<br>".
"\$cidinfo=array(\'Registry\'=>\'Adobe\', \'Ordering\'=>\'GB1\',\'Supplement\'=>2);<br>".
"include(\'include/tcpdf/fonts/uni2cid_ag15.php\');</pre>".
"</li><li>".
"Korean :<br>".
"<pre>\$enc=\'UniKS-UTF16-H\';<br>".
"\$cidinfo=array(\'Registry\'=>\'Adobe\', \'Ordering\'=>\'Korea1\',\'Supplement\'=>0);<br>".
"include(\'include/tcpdf/fonts/uni2cid_ak12.php\');</pre>".
"</li><li>".
"Japanese :<br>".
"<pre>\$enc=\'UniJIS-UTF16-H\';<br>".
"\$cidinfo=array(\'Registry\'=>\'Adobe\', \'Ordering\'=>\'Japan1\',\'Supplement\'=>5);<br>".
"include(\'include/tcpdf/fonts/uni2cid_aj16.php\');</pre>".
"</li></ul>".
"More help : www.tcpdf.org",
    'LBL_FONT_LIST_FILESIZE' => 'Font Size (KB)',
    'LBL_ADD_FONT' => 'Add a font',
    'LBL_BACK' => 'Back',
    'LBL_REMOVE' => 'rem',
    'LBL_JS_CONFIRM_DELETE_FONT' => 'Are you sure that you want to delete this font?',

    'LBL_ADDFONT_TITLE' => 'Add a PDF Font',
    'LBL_PDF_PATCH' => 'Patch',
    'LBL_PDF_PATCH_INFO' => 'Custom modification of the encoding. Write a PHP array.<br>Example :<br>ISO-8859-1 does not contain the euro symbol. To add it at position 164, write "array(164=>\\\'Euro\\\')".',
    'LBL_PDF_ENCODING_TABLE' => 'Encoding Table',
    'LBL_PDF_ENCODING_TABLE_INFO' => 'Name of the encoding table.<br>This option is ignored for TrueType Unicode, OpenType Unicode and symbolic fonts.<br>The encoding defines the association between a code (from 0 to 255) and a character contained in the font.<br>The first 128 are fixed and correspond to ASCII.',
    'LBL_PDF_FONT_FILE' => 'Font File',
    'LBL_PDF_FONT_FILE_INFO' => '.ttf or .otf or .pfb file',
    'LBL_PDF_METRIC_FILE' => 'Metric File',
    'LBL_PDF_METRIC_FILE_INFO' => '.afm or .ufm file',
    'LBL_ADD_FONT_BUTTON' => 'Add',
    'JS_ALERT_PDF_WRONG_EXTENSION' => 'This file do not have a good file extension.',
    'LBL_PDF_INSTRUCTIONS' => 'Instructions',
    'PDF_INSTRUCTIONS_ADD_FONT' => <<<BSOFR
Fonts supported by SugarPDF :
<ul>
<li>TrueTypeUnicode (UTF-8 Unicode)</li>
<li>OpenTypeUnicode</li>
<li>TrueType</li>
<li>OpenType</li>
<li>Type1</li>
<li>CID-0</li>
</ul>
<br>
If you choose to not embed your font in the PDF, the generated PDF file will be lighter but a substitution will be use if the font is not available in the system of your reader.
<br><br>
Adding a PDF font to SugarCRM requires to follow steps 1 and 2 of the TCPDF Fonts documentation available in the "DOCS" section of the <a href="http://www.tcpdf.org" target="_blank">TCPDF website</a>.
<br><br>The pfm2afm and ttf2ufm utils are available in fonts/utils in the TCPDF package that you can download on the "DOWNLOAD" section of the <a href="http://www.tcpdf.org" target="_blank">TCPDF website</a>.
<br><br>Load the metric file generated in step 2 and your font file below.
BSOFR
,
    'ERR_MISSING_CIDINFO' => 'The field CID Information cannot be empty.',
    'LBL_ADDFONTRESULT_TITLE' => 'Result of the add font process',
    'LBL_STATUS_FONT_SUCCESS' => 'SUCCESS : The font has been added to SugarCRM.',
    'LBL_STATUS_FONT_ERROR' => 'ERROR : The font has not been added. Look at the log below.',
    'LBL_FONT_MOVE_DEFFILE' => 'Font definition file move to : ',
    'LBL_FONT_MOVE_FILE' => 'Font file move to : ',

// Font manager
    'ERR_LOADFONTFILE' => 'ERROR: LoadFontFile error!',
    'ERR_FONT_EMPTYFILE' => 'ERROR: Empty filename!',
    'ERR_FONT_UNKNOW_TYPE' => 'ERROR: Unknow font type:',
    'ERR_DELETE_CORE_FILE' => 'ERROR: It is not possible to delete a core font.',
    'ERR_NO_FONT_PATH' => 'ERROR: No font path available!',
    'ERR_NO_CUSTOM_FONT_PATH' => 'ERROR: No custom font path available!',
    'ERR_FONT_NOT_WRITABLE' => 'is not writable.',
    'ERR_FONT_FILE_DO_NOT_EXIST' => 'doesn\'t exist or is not a directory.',
    'ERR_FONT_MAKEFONT' => 'ERROR: MakeFont error',
    'ERR_FONT_ALREADY_EXIST' => 'ERROR : This font already exist. Rollback...',
    'ERR_PDF_NO_UPLOAD' => 'Error during the upload of the font or metric file.',


);