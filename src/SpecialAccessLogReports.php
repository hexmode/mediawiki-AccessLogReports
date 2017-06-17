<?php

/**
 * Special page for viewing access log statistics
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
 *
 * @file
 * @ingroup SpecialPage
 */

namespace AccessLogReports;

use FormSpecialPage;

class SpecialAccessLogReports extends FormSpecialPage {

	/**
	 * Ye olde constructor.
	 */
	public function __construct() {
		parent::__construct( 'AccessLogReports' );
	}

	/**
	 * Get an HTMLForm descriptor array
	 * @return array
	 */
	protected function getFormFields() {
		$this->addHelpLink( 'Help:AccessLogReports' );

		return [
			'title' => [
				'type' => 'title',
				'relative' => true,
				'label-message' => 'accesslogreports-title',
				'required' => true,
			]
		];
	}

	/**
	 * Use ooui format for the form.
	 *
	 * @return string
	 */
	protected function getDisplayFormat() {
		return 'ooui';
	}

	/**
	 * We're just reading the DB.
	 * @return bool
	 */
	public function requiresWrite() {
		return false;
	}

	/**
	 * Our form processor
	 * @param array $data field data
	 * @param HTMLForm $form form itself
	 * @return bool|string|array|Status As documented for HTMLForm::trySubmit:
	 *     - Bool true or a good Status object indicates success,
	 *     - Bool false indicates no submission was attempted,
	 *     - Anything else indicates failure. The value may be a fatal Status
	 *       object, an HTML string, or an array of arrays (message keys and
	 *       params) or strings (message keys)
	 */
	public function onSubmit( array $data, HTMLForm $form = null  ) {
		$status = false;

		return $status;
	}
}
