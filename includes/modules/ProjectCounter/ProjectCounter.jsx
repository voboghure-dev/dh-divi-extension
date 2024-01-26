// External Dependencies
import React, { Component } from 'react';

// Internal Dependencies
import './style.css';


class ProjectCounter extends Component {

  static slug = 'dhde_project_counter';

  render() {
    const Content = this.props.content;

    return (
      <h1>
        <Content/>
      </h1>
    );
  }
}

export default ProjectCounter;
