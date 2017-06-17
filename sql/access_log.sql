CREATE TABLE /*_*/access_log (
  `id` char(19) DEFAULT NULL,
  `agent` varchar(255) DEFAULT NULL,
  `bytes_sent` int(10) unsigned DEFAULT NULL,
  `child_pid` smallint(5) unsigned DEFAULT NULL,
  `cookie` varchar(255) DEFAULT NULL,
  `machine_id` varchar(25) DEFAULT NULL,
  `request_file` varchar(255) DEFAULT NULL,
  `referer` varchar(255) DEFAULT NULL,
  `remote_host` varchar(50) DEFAULT NULL,
  `remote_logname` varchar(50) DEFAULT NULL,
  `remote_user` varchar(50) DEFAULT NULL,
  `request_duration` smallint(5) unsigned DEFAULT NULL,
  `request_line` varchar(255) DEFAULT NULL,
  `request_method` varchar(10) DEFAULT NULL,
  `request_protocol` varchar(10) DEFAULT NULL,
  `request_time` char(28) DEFAULT NULL,
  `request_uri` varchar(255) DEFAULT NULL,
  `request_args` varchar(255) DEFAULT NULL,
  `server_port` smallint(5) unsigned DEFAULT NULL,
  `ssl_cipher` varchar(25) DEFAULT NULL,
  `ssl_keysize` smallint(5) unsigned DEFAULT NULL,
  `ssl_maxkeysize` smallint(5) unsigned DEFAULT NULL,
  `status` smallint(5) unsigned DEFAULT NULL,
  `time_stamp` int(10) unsigned DEFAULT NULL,
  `virtual_host` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
