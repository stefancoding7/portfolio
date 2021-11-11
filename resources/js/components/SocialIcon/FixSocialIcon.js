import React, { useState, useEffect } from "react";
import { FaLinkedin, FaInstagram, FaGithub, FaTwitter, FaFacebook, FaStackOverflow, FaFreeCodeCamp, FaDev } from "react-icons/fa";
import styled from "styled-components";
import config from '../../config/config';

const Social = styled.div`
  display: block;
  position: fixed;
  top: 48%;
  left: 1.5rem;
  transform: translateY(-50%);

  ul {
    display: block;
  }

  .item + .item {
    margin-top: 1rem;
  }

  a {
    font-size: 2rem;
    color: rgb(119, 119, 121);
    transition: 0.2s ease-in;
    &:hover {
      color: rgb(57, 134, 250);
    }
  }

  @media screen and (max-width: 768px) {
    display: none;
  }
`;
function FixSocialIcon() {
  const [socials, setSocials] = useState([]);



  useEffect(() => {
    axios.get(`${config.apiBaseUrl}socials`).then((response) => {
      setSocials(response.data);
    });
  }, []);

  
  return (
    <Social>
      <ul>
      {socials.map((social, index) => (
        <li key={index} className="item">
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
    </Social>
  );
}

export default FixSocialIcon;
