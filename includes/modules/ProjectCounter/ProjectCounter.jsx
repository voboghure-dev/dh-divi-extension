// External Dependencies
import React, { Component } from 'react';

// Internal Dependencies
import './style.css';

class ProjectCounter extends Component {
	static slug = 'dhde_project_counter';

	render() {
		return (
			<div data-rsssl='1'>
				<div class='main'>
					<h3># of Showers</h3>
					<button class='et_pb_button et_pb_button_0 et_pb_bg_layout_light' id='clickme'>
						Click to Add: 0
					</button>
					<p id='reset'>Reset</p>
				</div>
				<div class='main'>
					<h3>Loads of Laundry</h3>
					<button class='et_pb_button et_pb_button_0 et_pb_bg_layout_light' id='clickme2'>
						Click to Add: 0
					</button>
					<p id='reset2'>Reset</p>
				</div>
				<div class='main'>
					<h3># of Haircuts</h3>
					<button class='et_pb_button et_pb_button_0 et_pb_bg_layout_light' id='clickme3'>
						Click to Add: 0
					</button>
					<p id='reset3'>Reset</p>
				</div>
				<div class='main'>
					<h3># of Case Management Appointments</h3>
					<button class='et_pb_button et_pb_button_0 et_pb_bg_layout_light' id='clickme4'>
						Click to Add: 0
					</button>
					<p id='reset4'>Reset</p>
				</div>
			</div>
		);
	}
}

export default ProjectCounter;
