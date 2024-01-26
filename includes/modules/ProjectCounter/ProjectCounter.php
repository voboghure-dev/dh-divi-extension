<?php

class DHDE_ProjectCounter extends ET_Builder_Module {

	public $slug       = 'dhde_project_counter';
	public $vb_support = 'on';

	protected $module_credits = array(
		'module_uri' => '',
		'author'     => 'DevHelpers',
		'author_uri' => '',
	);

	public function init() {
		$this->name = esc_html__( 'Beheard Project Counter', 'dhde-dh-divi-extension' );
	}

	public function get_fields() {
		// return array(
		// 	'content' => array(
		// 		'label'           => esc_html__( 'Content', 'dhde-dh-divi-extension' ),
		// 		'type'            => 'tiny_mce',
		// 		'option_category' => 'basic_option',
		// 		'description'     => esc_html__( 'Content entered here will appear inside the module.', 'dhde-dh-divi-extension' ),
		// 		'toggle_slug'     => 'main_content',
		// 	),
		// );
		return array();
	}

	public function render( $attrs, $content = null, $render_slug ) {
		global $post;

		$content = '<div data-rsssl="1">
			<div class="main">
				<h3># of Showers</h3>
				<button
					class="et_pb_button et_pb_button_0 et_pb_bg_layout_light"
					id="clickme"
				>
					Click to Add: 0
				</button>
				<p id="reset">Reset</p>
			</div>
			<div class="main">
				<h3>Loads of Laundry</h3>
				<button
					class="et_pb_button et_pb_button_0 et_pb_bg_layout_light"
					id="clickme2"
				>
					Click to Add: 0
				</button>
				<p id="reset2">Reset</p>
			</div>
			<div class="main">
				<h3># of Haircuts</h3>
				<button
					class="et_pb_button et_pb_button_0 et_pb_bg_layout_light"
					id="clickme3"
				>
					Click to Add: 0
				</button>
				<p id="reset3">Reset</p>
			</div>
			<div class="main">
				<h3># of Case Management Appointments</h3>
				<button
					class="et_pb_button et_pb_button_0 et_pb_bg_layout_light"
					id="clickme4"
				>
					Click to Add: 0
				</button>
				<p id="reset4">Reset</p>
			</div>

			<script>
				document.addEventListener("DOMContentLoaded", function () {
					var button1 = document.getElementById("clickme");
					var button2 = document.getElementById("clickme2");
					var button3 = document.getElementById("clickme3");
					var button4 = document.getElementById("clickme4");

					var buttons = [button1, button2, button3, button4];

					var resetElement1 = document.getElementById("reset");
					var resetElement2 = document.getElementById("reset2");
					var resetElement3 = document.getElementById("reset3");
					var resetElement4 = document.getElementById("reset4");

					var resetElements = [
						resetElement1,
						resetElement2,
						resetElement3,
						resetElement4,
					];

					var counts = [];

					function setInitialState() {
						counts = [0, 0, 0, 0];

						for (var i = 0; i < buttons.length; i++) {
							var count = localStorage.getItem("' . $post->ID . '" + (i + 1));

							if (count) {
								counts[i] = parseInt(count);
							} else {
								localStorage.setItem("' . $post->ID . '" + (i + 1), 0);
							}

							buttons[i].innerHTML = "Click to Add: " + counts[i];
						}
					}

					function updateCount(index) {
						counts[index] += 1;
						buttons[index].innerHTML = "Click to Add: " + counts[index];
						localStorage.setItem("' . $post->ID . '" + (index + 1), counts[index]);
					}

					function resetCount(index) {
						counts[index] = 0;
						buttons[index].innerHTML = "Click to Add: " + counts[index];
						localStorage.setItem("' . $post->ID . '" + (index + 1), counts[index]);
					}

					for (var i = 0; i < buttons.length; i++) {
						buttons[i].addEventListener(
							"click",
							(function (index) {
								return function () {
									updateCount(index);
								};
							})(i),
						);

						resetElements[i].addEventListener(
							"click",
							(function (index) {
								return function () {
									resetCount(index);
								};
							})(i),
						);
					}

					setInitialState();
				});
			</script>
		</div>';

		return $content;

		// return sprintf( '<h1>%1$s</h1>', $this->props['content'] );
	}
}

new DHDE_ProjectCounter;
