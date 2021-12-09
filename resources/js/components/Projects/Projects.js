import React, { useState, useEffect } from "react";
import ProjectCard from "./ProjectCard/ProjectCard";
import config from '../../config/config';
function Projects() {
  const [projects, setProjects] = useState([]);
  useEffect(() => {
    axios.get(`${config.apiBaseUrl}projects`).then((response) => {
      setProjects(response.data)
    })

  }, []);
  return (
    <>
     
      <div className="ProjectWrapper" id="projects">
        <div className="Container">
          <div className="SectionTitle">Projects</div>
          <ProjectCard projects={projects}/>
        </div>
      </div>
    </>
  );
}

export default Projects;
