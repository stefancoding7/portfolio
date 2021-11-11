import React from "react";
import SocialIcon from "../SocialIcon/SocialIcon";
import { ContactWrapper, Email } from "./ContactElements";
import Fade from 'react-reveal/Fade';
function Contact(props) {
  return (
    <Fade bottom>
          <ContactWrapper id="contact">
      <div className="Container">
        <div className="SectionTitle">Get In Touch</div>
        <div className="BigCard">
          <Email>
            <span>{props.profile.email}</span>
            <a
              className="btn PrimaryBtn"
              href={"mailto:" + props.profile.email}
              target="_blank"
              rel="noopener noreferrer"
            >
              Send Mail
            </a>
          </Email>
        </div>
        <SocialIcon />
      </div>
    </ContactWrapper>
    </Fade>
    
  );
}

export default Contact;
