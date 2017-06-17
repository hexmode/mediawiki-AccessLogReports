<?php

/**
 * Hooks for the AccessLogReports extension
 *
 * Copyright (C) 2017  Mark A. Hershberger
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace AccessLogReports;

use DatabaseUpdater;
use GlobalVarConfig;

class Hook {
	/**
	 * Fired when MediaWiki is updated to allow extensions to update
	 * the database.
	 *
	 * @param DatabaseUpdater $updater the db handle
	 * @return bool always true
	 */
	public static function onLoadExtensionSchemaUpdates(
		DatabaseUpdater $updater
	) {
		$updater->addExtensionTable( "access_log", __DIR__ .
									 "/../sql/access_log.sql" );
		$updater->addExtensionTable( "access_log_archive", __DIR__ .
									 "/../sql/access_log_archive.sql" );
		return true;
	}

	/**
	 * Register a config thingy
	 *
	 * @return GlobalVarConfig
	 */
	public function makeConfig() {
		return new GlobalVarConfig( "AccessLogReports" );
	}
}
