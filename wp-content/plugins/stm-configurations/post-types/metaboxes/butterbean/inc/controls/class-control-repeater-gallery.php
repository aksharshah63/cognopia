<?php
/**
 * Image control class.  This control allows users to set an image.  It passes the attachment
 * ID the setting, so you'll need a custom control class if you want to store anything else,
 * such as the URL or other data.
 *
 * @package    ButterBean
 * @author     Justin Tadlock <justin@justintadlock.com>
 * @copyright  Copyright (c) 2015-2016, Justin Tadlock
 * @link       https://github.com/justintadlock/butterbean
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

/**
 * Image control class.
 *
 * @since  1.0.0
 * @access public
 */
class ButterBean_Control_Repeater_Galley extends ButterBean_Control
{

	/**
	 * The type of control.
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string
	 */
	public $type = 'repeater-gallery';

	/**
	 * Array of text labels to use for the media upload frame.
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string
	 */
	public $l10n = array();

	/**
	 * Creates a new control object.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object $manager
	 * @param  string $name
	 * @param  array $args
	 * @return void
	 */
	public function __construct($manager, $name, $args = array())
	{
		parent::__construct($manager, $name, $args);

		$this->l10n = wp_parse_args(
			$this->l10n,
			array(
				'add'    => esc_html__('Add', 'butterbean'),
				'remove' => esc_html__('Delete', 'butterbean'),
				'change' => esc_html__('Change', 'butterbean'),
				'nothing' => esc_html__('No file', 'butterbean'),
				'title' => esc_html__('Enter image title', 'butterbean'),
			)
		);
	}

	/**
	 * Adds custom data to the json array.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function to_json()
	{
		parent::to_json();

		$this->json['l10n'] = $this->l10n;

		$value = $this->get_value();

		$values = array();

		if (!empty($value)) {
			foreach ($value as $image) {
				if(!empty($image['name'])) {
					$image['filename'] = get_the_title($image['name']);
				}
				if (!empty($image)) {
					$values[] = $image;
				}
			}
		}

		$this->json['values'] = $values;

	}
}