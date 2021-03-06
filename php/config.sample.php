<?php
/**
 * Zcash Status Page
 *
 * @category File
 * @package  ZcashStatus
 * @author   Quentin Le Sceller <q.lesceller@gmail.com>
 * @author   Craig Watson <craig@cwatson.org>
 * @license  https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @link     https://github.com/quentinlesceller/zcashd-status
 * @link     https://github.com/craigwatson/bitcoind-status
 */

$config = array(
  // RPC
  'rpc_user'                  => 'rpcuser',
  'rpc_pass'                  => 'rpcpass',
  'rpc_host'                  => 'localhost',
  'rpc_port'                  => '8232',
  'rpc_ssl'                   => false,
  'rpc_ssl_ca'                => null,

  // Donations
  'display_donation_text'     => true,
  'donation_address'          => 'not_set',
  'donation_amount'           => '0.001',

  // Peers
  'display_peer_info'         => false,
  'display_peer_port'         => false,
  'hide_dark_peers'           => true,
  'ignore_unknown_ping'       => false,
  'peers_to_ignore'           => array(),

  // Cache
  'use_cache'                 => true,
  'cache_file'                => '/tmp/zcashd-status.cache',
  'max_cache_time'            => 300,
  'nocache_whitelist'         => array('127.0.0.1'),

  // Geolocation
  'geolocate_peer_ip'         => false,
  'display_ip_location'       => false,

  // UI
  'display_ip'                => false,
  'display_free_disk_space'   => false,
  'display_testnet'           => false,
  'display_version'           => true,
  'display_github_ribbon'     => true,
  'display_max_height'        => true,
  'use_zcashd_ip'             => true,
  'intro_text'                => 'not_set',
  'display_chart'             => false,
  'display_peer_chart'        => false,
  'node_links'                => array(),

  // Stats
  'stats_whitelist'           => array('127.0.0.1'),
  'stats_file'                => '/tmp/zcashd-status.data',
  'stats_max_age'             => '604800',
  'stats_min_data_points'     => 5,

  // Node Count
  'peercount_whitelist'       => array('127.0.0.1'),
  'peercount_file'            => '/tmp/zcashd-peers.data',
  'peercount_max_age'         => '2592000',
  'peercount_min_data_points' => 10,
  'peercount_extra_nodes'     => array(),

  // Uptime
  'display_zcashd_uptime'     => false,
  'zcashd_process_name'       => 'zcashd',

  // System
  'date_format'               => 'H:i:s T, j F Y ',
  'timezone'                  => null,
  'stylesheet'                => 'v2-light.css',
  'debug'                     => false,
  'admin_email'               => 'admin@example.com',
);
