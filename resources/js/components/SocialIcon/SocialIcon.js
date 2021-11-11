import React, { useState, useEffect } from "react";
import { FaLinkedin, FaInstagram, FaGithub, FaTwitter, FaFacebook, FaStackOverflow, FaFreeCodeCamp, FaDev } from "react-icons/fa";

import styled from "styled-components";
import config from '../../config/config';
export const SocialDiv = styled.div`
  margin-top: 2rem;
  display: none;
  ul {
    display: flex;
    justify-content: center;
    align-items: center;
    list-style: none;
  }

  ul li {
    justify-content: start;
  }

  a {
    font-size: 2.5rem;
    color: #151418;
    transition: 0.2s ease-in;
    &:hover {
      color: rgb(57, 134, 250);
    }
  }

  .item + .item {
    margin-left: 2rem;
  }

  @media screen and (max-width: 768px) {
    display: block;
  }
`;

function SocialIcon() {
  const [socials, setSocials] = useState([]);



  useEffect(() => {
    axios.get(`${config.apiBaseUrl}socials`).then((response) => {
      setSocials(response.data);
    });
  }, []);

  
  return (
    <SocialDiv>
    <div >
    <ul className="row">
      {socials.map((social, index) => (
        <li key={index} className="col-4 mt-2">
          <a
            href={`${social.url}`}
            target="_blank"
            rel="noopener noreferrer"
          >
          
          {social.name == 'Github' ? (
            <FaGithub />
          ) : (
            ''
          )}

          {social.name == 'Linkedin' ? (
            <FaLinkedin />
          ) : (
            ''
          )}

          {social.name == 'Twitter' ? (
            <FaTwitter />
          ) : (
           ''
          )}

          {social.name == 'Facebook' ? (
            <FaFacebook />
          ) : (
           ''
          )}

          {social.name == 'StackOverflow' ? (
            <FaStackOverflow />
          ) : (
           ''
          )}

          {social.name == 'FreeCodeCamp' ? (
            <FaFreeCodeCamp />
          ) : (
           ''
          )}

          {social.name == 'Dev' ? (
            <FaDev />
          ) : (
           ''
          )}

          {social.name == 'Instagram' ? (
            <FaInstagram />
          ) : (
           ''
          )}
          

         

         

          
            
          </a>
        </li>

      ))}
        
      </ul>
    </div>
      
    </SocialDiv>
  );
}

export default SocialIcon;
