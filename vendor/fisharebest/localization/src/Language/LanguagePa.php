<?php namespace Fisharebest\Localization;

/**
 * Class LanguagePa - Representation of the Panjabi language.
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LanguagePa extends Language {
	/** {@inheritdoc} */
	public function code() {
		return 'pa';
	}

	/** {@inheritdoc} */
	public function defaultScript() {
		return new ScriptGuru;
	}

	/** {@inheritdoc} */
	public function defaultTerritory() {
		return new TerritoryIn;
	}
}