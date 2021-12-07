import React, { useState, useEffect } from "react";
import { ProjectList } from "../../../data/ProjectData";
import config from '../../../config/config';
import Fade from 'react-reveal/Fade';



import {
  Card,
  CardLeft,
  CardRight,
  Stack,
  BtnGroup,
} from "./ProjectCardElements";
function ProjectCard() {

  const [project, setProject] = useState([]);
  


  useEffect(() => {
    axios.get(`${config.apiBaseUrl}projects`).then((response) => {
      setProject(response.data);
    });
  }, []);

  const counter = (id) => {
    axios.post(`${config.apiBaseUrl}counter`, {
      id: id,
    })
    .then(function (response) {
      console.log(response);
    })
    .catch(function (error) {
      console.log(error);
    });
    
    console.log(id);
  };

  

  return (
    <>
      {project.map((list, index) => (
        <>
       
        <Fade left>
        <Card key={index}>
          <CardLeft>
            <img src={`${config.imagesUrl + list.image}`} alt={list.title} />
          </CardLeft>
          <CardRight>
            <h4>{list.title}</h4>
            <p>{list.description}</p>
            <Stack>
              <span className="stackTitle">Tech Stack -</span>
              
    <span className="tags">{list.tags}</span>

                
              
             
            </Stack>
            <BtnGroup>
              <a onClick={() => { counter(list.id); }}
                className="btn btn2 SecondarBtn"
                href={list.source_link}
                target="_blank"
                rel="noopener noreferrer"
              >
                Github
              </a>
              <a
                className="btn PrimaryBtn"
                href={list.demo_link}
                target="_blank"
                rel="noopener noreferrer"
              >
                Demo ➜
              </a>
            </BtnGroup>
          </CardRight>
        </Card>
        </Fade>
        </>
        
        
      ))}
    </>
  );
}

export default ProjectCard;
