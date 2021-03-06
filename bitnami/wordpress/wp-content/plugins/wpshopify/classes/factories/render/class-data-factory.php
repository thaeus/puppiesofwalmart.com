<?php

namespace WP_Shopify\Factories\Render;

defined('ABSPATH') ?: die;

use WP_Shopify\Render\Data;
use WP_Shopify\Factories;

class Data_Factory {

	protected static $instantiated = null;

	public static function build() {

		if (is_null(self::$instantiated)) {

			self::$instantiated = new Data(
				Factories\DB\Products_Factory::build(),
				Factories\DB\Images_Factory::build(),
				Factories\DB\Tags_Factory::build(),
				Factories\DB\Variants_Factory::build(),
				Factories\DB\Options_Factory::build(),
				Factories\DB\Collections_Factory::build(),
				Factories\Money_Factory::build(),
				Factories\Render\Products\Defaults_Factory::build()
			);

		}

		return self::$instantiated;

	}

}
