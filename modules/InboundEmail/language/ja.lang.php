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
	'LBL_RE'=>'RE:',
	'ERR_BAD_LOGIN_PASSWORD'=>'ログインIDかパスワードが不正です',
	'ERR_BODY_TOO_LONG'=>'\\r本文が長すぎてメール全体を取り込めません。整形されました。',
	'ERR_INI_ZLIB'=>'Zlibコンプレッションを一時的に無効にできませんでした。設定テストが失敗する可能性があります。',
	'ERR_MAILBOX_FAIL'=>'メールアカウントを検索できませんでした。',
	'ERR_NO_IMAP'=>'IMAPライブラリが見つかりませんでした。インバウンドメールを継続する前に解決してください。',
	'ERR_NO_OPTS_SAVED'=>'あなたのインバウンドメールアカウントに最適な条件は一つも保存されませんでした。設定を見直してください。',
	'ERR_TEST_MAILBOX'=>'設定を確認して再試行してください。',
	'LBL_APPLY_OPTIMUMS'=>'最適設定を実行',
	'LBL_ASSIGN_TO_USER'=>'ユーザにアサイン',
	'LBL_AUTOREPLY_OPTIONS'=>'自動返信オプション',
	'LBL_AUTOREPLY'=>'自動返信テンプレート',
	'LBL_AUTOREPLY_HELP'=>'Select an automated response to notify email senders that their response has been received.',
	'LBL_BASIC'=>'基本設定',
	'LBL_CASE_MACRO'=>'ケースマクロ',
	'LBL_CASE_MACRO_DESC'=>'受信したメールをケースに関連付けるためのマクロを設定してください。',
	'LBL_CASE_MACRO_DESC2'=>'任意の値を設定できますが、<b>\"%1\"</b>は残してください。',
	'LBL_CERT_DESC'=>'メールサーバのセキュリティ証明書の認証を強制します。自己署名の場合は使用しないでください。',
	'LBL_CERT'=>'認証',
	'LBL_CLOSE_POPUP'=>'ウィンドウを閉じる',
	'LBL_CREATE_NEW_GROUP'=>'--保存時にグループを作成--',
	'LBL_CREATE_TEMPLATE'=>'作成',
	'LBL_SUBSCRIBE_FOLDERS'=>'フォルダーを購読',
	'LBL_DEFAULT_FROM_ADDR'=>'デフォルト: ',
	'LBL_DEFAULT_FROM_NAME'=>'デフォルト: ',
	'LBL_DELETE_SEEN'=>'受信したメールをメールサーバから削除',
	'LBL_EDIT_TEMPLATE'=>'編集',
	'LBL_EMAIL_OPTIONS'=>'電子メール処理オプション',
	'LBL_EMAIL_BOUNCE_OPTIONS'=>'Bounce Handling Options',
	'LBL_FILTER_DOMAIN_DESC'=>'このドメインに自動返信を送信しない。',
	'LBL_ASSIGN_TO_GROUP_FOLDER_DESC'=>'グループフォルダーに電子メールアカウントを割り当て、電子メールの自動インポートを有効にする。',
	'LBL_POSSIBLE_ACTION_DESC'=>'ケースを作成オプションを選ぶには、グループフォルダーが選択されていなければいけません。',
	'LBL_FILTER_DOMAIN'=>'以下のドメインに自動送信しない',
	'LBL_FIND_OPTIMUM_KEY'=>'f',
	'LBL_FIND_OPTIMUM_MSG'=>'<br>最適な接続の設定を検出',
	'LBL_FIND_OPTIMUM_TITLE'=>'最適な設定を検出',
	'LBL_FIND_SSL_WARN'=>'<br>SSLのテストには時間がかかる場合があります。しばらくお待ち下さい。',
	'LBL_FORCE_DESC'=>'いくつかのIMAP/POP3サーバは特別なスイッチを必要とします。チェックを入れると接続時にネガティブスイッチを強制します。（例: /notls）',
	'LBL_FORCE'=>'ネガティブを強制',
	'LBL_FOUND_MAILBOXES'=>'以下の使用可能なフォルダを検出しました:',
	'LBL_FOUND_OPTIMUM_MSG'=>'<br>最適な設定を検出しました。下記のボタンを押下するとこの受信箱に設定を適用できます。',
	'LBL_FROM_ADDR'=>'From（アドレス）',
	'LBL_FROM_NAME_ADDR'=>'名前/メールから',
	'LBL_FROM_NAME'=>'From（名前）',
	'LBL_GROUP_QUEUE'=>'グループにアサイン',
	'LBL_HOME'=>'ホーム',
	'LBL_LIST_MAILBOX_TYPE'=>'受信箱用途',
	'LBL_LIST_NAME'=>'名前:',
	'LBL_LIST_GLOBAL_PERSONAL'=>'グループ/個人',
	'LBL_LIST_SERVER_URL'=>'メールサーバ',
	'LBL_LIST_STATUS'=>'ステータス:',
	'LBL_LOGIN'=>'ユーザ名',
	'LBL_MAILBOX_DEFAULT'=>'受信箱',
	'LBL_MAILBOX_SSL_DESC'=>'接続時にSSLを利用します。これが機能しない場合、PHPが\"--with-imap-ssl\"オプションでコンパイルされているかどうか確認してください。',
	'LBL_MAILBOX_SSL'=>'SSL利用',
	'LBL_MAILBOX_TYPE'=>'可能なアクション',
	'LBL_DISTRIBUTION_METHOD'=>'配布方式',
	'LBL_CREATE_CASE_REPLY_TEMPLATE'=>'ケース返信テンプレートの作成',
	'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP'=>'Select an automated response to notify email senders that a case has been created. The email contains the case number in the Subject line which adheres to the Case Macro setting.  This response is only sent when the first email is received from the recipient.',
	'LBL_MAILBOX'=>'監視フォルダ',
	'LBL_TRASH_FOLDER'=>'ごみ箱',
	'LBL_GET_TRASH_FOLDER'=>'ごみ箱の取得',
	'LBL_SENT_FOLDER'=>'送信済みフォルダ',
	'LBL_GET_SENT_FOLDER'=>'送信済みフォルダの取得',
	'LBL_SELECT'=>'選択',
	'LBL_MARK_READ_DESC'=>'受信時にメールサーバ上のメールを削除せずに既読フラグを立てます。',
	'LBL_MARK_READ_NO'=>'受信後に削除フラグを立てる',
	'LBL_MARK_READ_YES'=>'受信後にサーバにメールを保存',
	'LBL_MARK_READ'=>'メールをサーバに保存',
	'LBL_MAX_AUTO_REPLIES'=>'自動応答の数',
	'LBL_MAX_AUTO_REPLIES_DESC'=>'24時間で行う自動応答の最大数をセットしてください。',
	'LBL_PERSONAL_MODULE_NAME'=>'Personal Mail Account',
	'LBL_CREATE_CASE'=>'Create Case from Email',
	'LBL_CREATE_CASE_HELP'=>'Select to automatically create case records in Sugar from incoming emails.',
	'LBL_MODULE_NAME'=>'インバウンド電子メール設定',
	'LBL_BOUNCE_MODULE_NAME'=>'Bounce Handling Mailbox',
	'LBL_MODULE_TITLE'=>'インバウンドメール',
	'LBL_NAME'=>'名前',
	'LBL_NONE'=>'なし',
	'LBL_NO_OPTIMUMS'=>'最適設定が見つかりませんでした。設定を確認して再度実行してください。',
	'LBL_ONLY_SINCE_DESC'=>'POP3を用いる場合、PHPは新規メールと未読メールを区分できません。IMAPをサポートしていない場合、このフラグを設定することにより、最後に受信箱をチェックした時間以降のメッセージのみをチェックできるため、性能を著しく向上させることが可能です。',
	'LBL_ONLY_SINCE_NO'=>'いいえ　メールサーバのすべての電子メールをチェック',
	'LBL_ONLY_SINCE_YES'=>'はい',
	'LBL_ONLY_SINCE'=>'最後のチェック以降の新規メールのみ',
	'LBL_OUTBOUND_SERVER'=>'送信メールサーバー',
	'LBL_PASSWORD_CHECK'=>'パスワードチェック',
	'LBL_PASSWORD'=>'パスワード',
	'LBL_POP3_SUCCESS'=>'POP3の接続テストに成功しました。',
	'LBL_POPUP_FAILURE'=>'テスト接続に失敗しました。エラーは以下のとおりです。',
	'LBL_POPUP_SUCCESS'=>'テスト接続に成功しました。設定が有効に機能しています。',
	'LBL_POPUP_TITLE'=>'設定のテスト',
	'LBL_GETTING_FOLDERS_LIST'=>'フォルダリストを取得中',
	'LBL_SELECT_SUBSCRIBED_FOLDERS'=>'購読するフォルダの選択',
	'LBL_SELECT_TRASH_FOLDERS'=>'ごみ箱の選択',
	'LBL_SELECT_SENT_FOLDERS'=>'送信済みフォルダの選択',
	'LBL_DELETED_FOLDERS_LIST'=>'次のフォルダー %s は存在しないかサーバで削除されました。',
	'LBL_PORT'=>'メールサーバのポート',
	'LBL_QUEUE'=>'メールアカウントキュー',
	'LBL_REPLY_NAME_ADDR'=>'返信用の名前/電子メール',
	'LBL_REPLY_TO_NAME'=>'返信先(\"Reply-To\")の名前',
	'LBL_REPLY_TO_ADDR'=>'返信先(\"Reply-To\")のアドレス',
	'LBL_SAME_AS_ABOVE'=>'名前/メールから利用',
	'LBL_SAVE_RAW'=>'メールを加工せずに保存',
	'LBL_SAVE_RAW_DESC_1'=>'受信メールを未加工のまま追加で保存する場合は「はい」を選択してください。',
	'LBL_SAVE_RAW_DESC_2'=>'データベースのスキーマ定義やその他サイズに関連する設定値以上のメールを受信した場合、メールが正常に保存されません。',
	'LBL_SERVER_OPTIONS'=>'メールサーバオプション',
	'LBL_SERVER_TYPE'=>'メールサーバプロトコル',
	'LBL_SERVER_URL'=>'受信メールサーバ',
	'LBL_SSL_DESC'=>'メールサーバがSSLをサポートする場合、SSLを利用してメールを受信します。',
	'LBL_ASSIGN_TO_TEAM_DESC'=>'選択されたチームは電子メールアカウントへアクセスできます。グループフォルダを選択すると、グループフォルダのアサイン先チームは選択したチームに上書きされます。',
	'LBL_SSL'=>'SSL利用',
	'LBL_STATUS'=>'ステータス',
	'LBL_SYSTEM_DEFAULT'=>'システムデフォルト',
	'LBL_TEST_BUTTON_KEY'=>'t',
	'LBL_TEST_BUTTON_TITLE'=>'テスト[Alt+T]',
	'LBL_TEST_SETTINGS'=>'設定のテスト',
	'LBL_TEST_SUCCESSFUL'=>'接続に成功しました。',
	'LBL_TEST_WAIT_MESSAGE'=>'しばらくお待ちください...',
	'LBL_TLS_DESC'=>'メールサーバとの接続にTransport Layer Securityを用います。メールサーバがサポートしている場合に利用してください。',
	'LBL_TLS'=>'TLS利用',
	'LBL_WARN_IMAP_TITLE'=>'IMAP警告',
	'LBL_WARN_IMAP'=>'警告一覧:',
	'LBL_WARN_NO_IMAP'=>'このシステムはPHPモジュールにIMAP c-clientライブラリ（--with-imap=/path/to/imap_c-client_library）が入っていません。この問題を解決するには管理者に連絡してください。',
	'LNK_CREATE_GROUP'=>'新たにグループを作成',
	'LNK_LIST_CREATE_NEW_GROUP'=>'New Group Mail Account',
	'LNK_LIST_CREATE_NEW_BOUNCE'=>'New Bounce Handling Account',
	'LNK_LIST_MAILBOXES'=>'すべてのメールアカウント',
	'LNK_LIST_QUEUES'=>'すべてのキュー',
	'LNK_LIST_SCHEDULER'=>'スケジューラー',
	'LNK_LIST_TEST_IMPORT'=>'電子メールインポートをテスト',
	'LNK_NEW_QUEUES'=>'新たにキューを作成',
	'LNK_SEED_QUEUES'=>'チームからのシードキュー',
	'LBL_IS_PERSONAL'=>'個人',
	'LBL_GROUPFOLDER_ID'=>'グループフォルダID',
	'LBL_ASSIGN_TO_GROUP_FOLDER'=>'グループフォルダにアサイン',
	'LBL_ALLOW_OUTBOUND_GROUP_USAGE'=>'Allow users to send emails using the \"From\" Name and Address as the reply to address',
	'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC'=>'When this option is selected, the From Name and From Email Address associated with this group mail account will appear as an option for the From field when composing emails for users that have access to the group mail account.',
	'LBL_STATUS_ACTIVE'=>'アクティブ',
	'LBL_STATUS_INACTIVE'=>'非アクティブ',
	'LBL_IS_GROUP'=>'グループ',
	'LBL_ENABLE_AUTO_IMPORT'=>'Import Emails Automatically',
	'LBL_WARNING_CHANGING_AUTO_IMPORT'=>'Warning: You are modifying your automatic import setting which may result in loss of data.',
	'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE'=>'Warning: Auto import must be enabled when automatically creating cases.',
);