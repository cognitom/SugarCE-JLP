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
		  //Labels for methods in the TrackerReporter.php file that are shown in TrackerDashlet
		  'ShowActiveUsers'      => 'アクティブユーザの表示',
		  'ShowLastModifiedRecords' => '最新10件の変更されたレコード',
		  'ShowTopUser' => 'トップユーザ',
		  'ShowMyModuleUsage' => '私のモジュール利用状況',
		  'ShowMyWeeklyActivities' => '私の今週の活動',
		  'ShowTop3ModulesUsed' => '私のトップ3利用モジュール',
		  'ShowLoggedInUserCount' => 'アクティブユーザ数',
		  'ShowMyCumulativeLoggedInTime' => '私の累積ログイン時間 (今週)',
		  'ShowUsersCumulativeLoggedInTime' => 'ユーザの累積ログイン時間 (今週)',
		  
		  //Column header mapping
		  'action' => 'アクション',
		  'active_users' => 'アクティブユーザ',
		  'date_modified' => '更新日',
		  'different_modules_accessed' => 'アクセスしたモジュール数',
		  'first_name' => '名',
		  'item_id' => 'ID',
		  'item_summary' => '名前',
		  'last_action' => '最後のアクション日時',
		  'last_name' => '姓',
		  'module_name' => 'モジュール名',
		  'records_modified' => '総変更モジュール',
		  'top_module' => '最もアクセスしたモジュール',
		  'total_count' => '総ページビュー',
		  'total_login_time' => '時間 (hh:mm:ss)',
		  'user_name' => 'ユーザ名',
		  'users' => 'ユーザ',
		  
		  //Administration related labels
		  'LBL_ENABLE' => '有効',
		  'LBL_MODULE_NAME_TITLE' => 'トラッカー',
		  'LBL_TRACKER_SETTINGS' => 'トラッカー設定',
		  'LBL_TRACKER_QUERIES_DESC' => '検索文トラッカー',
		  'LBL_TRACKER_QUERIES_HELP' => 'dump_slow_queriesが有効な時、かつconfig.phpに定義されたslow_query_time_msecの値よりも検索文の実行時間が下回った時、SQL文をトラックする',
		  'LBL_TRACKER_PERF_DESC' => 'パフォーマンストラッカー',
		  'LBL_TRACKER_PERF_HELP' => 'データベースの行き来、ファイルアクセス、メモリー使用量をトラックする',
		  'LBL_TRACKER_SESSIONS_DESC' => 'セッショントラッカー',
		  'LBL_TRACKER_SESSIONS_HELP' => 'アクティブなユーザとユーザのセッション情報をトラックする',
		  'LBL_TRACKER_DESC' => 'アクショントラッカー',
		  'LBL_TRACKER_HELP' => 'ユーザのページビュー(アクセスしたモジュールとレコード)とレコードの保存をトラックする',
		  'LBL_TRACKER_PRUNE_INTERVAL' => 'スケジューラがテーブルを最適化する際に保存するトラッカーデータの日数',
		  'LBL_TRACKER_PRUNE_RANGE' => '日数',
);