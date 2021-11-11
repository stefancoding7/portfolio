import React, { useState, useEffect } from "react";
import { stackList } from "../../data/ProjectData";
import Fade from 'react-reveal/Fade';
import config from '../../config/config';

import {
  Image,
  Technologies,
  Tech,
  TechImg,
  TechName,
  ContactWrapper,
} from "./AboutElements";
function About(props) {
  
  const [skills, setSkills] = useState([]);



  useEffect(() => {
    axios.get(`${config.apiBaseUrl}skills`).then((response) => {
      setSkills(response.data);
    });
  }, []);

  return (
    <Fade right>
          <ContactWrapper id="about">
      <div className="Container">
        <div className="SectionTitle">About Me</div>
        <div className="BigCard">
          <Image
             src={`${config.imagesUrl + props.profile.about_me_image}`}
            alt="man-svgrepo"
          />
           <div
          dangerouslySetInnerHTML={{
            __html: props.profile.about_me
          }}></div>
          
          <Technologies>
            {skills.map((stack, index) => (
              <Tech key={index} className="tech">
                <TechImg src={`${config.imagesUrl + stack.skill_image}`} alt={stack.skill} />
                <TechName>{stack.skill}</TechName>
              </Tech>
            ))}
          </Technologies>
        </div>
      </div>
    </ContactWrapper>
    </Fade>
    
  );
}

export default About;
