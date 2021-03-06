import React, { useState, useEffect } from "react";
import Dropdown from "../Dropdown/Dropdown";
import Header from "../Header/Header";
import axios from "axios";
import config from '../../config/config';


import {
  HeroContainer,
  HeroWrapper,
  HeroLeft,
  HeroRight,
  Image,
  ScrollDown,
  ScrollLink,
} from "./HeroElements";
function Hero({profile}) {
  const [isOpen, setIsOpen] = useState(false);
  const [avatar, setAvatar] = useState('');

  const toggle = () => {
    setIsOpen(!isOpen);
  };

  useEffect(() => {
    axios.get(`${config.apiBaseUrl}profile`).then((response) => {
      setAvatar(response.data);
    });
  }, []);

  
  return (
    <main>
      <Dropdown isOpen={isOpen} toggle={toggle} />
      <Header toggle={toggle} profile={profile}/>
      <HeroContainer>
        <HeroWrapper>
          <HeroLeft>
                  <div
          dangerouslySetInnerHTML={{
            __html: profile.short_info
          }}></div>
          </HeroLeft>
          <HeroRight>
            <Image
              src={`${config.imagesUrl + avatar.avatar}`}
              alt="StefanCoding"
            />
          </HeroRight>
        </HeroWrapper>
        <ScrollDown to="projects">
          <ScrollLink>
            Scroll down
            <img
              src="https://icon-library.com/images/scroll-down-icon-png/scroll-down-icon-png-5.jpg"
              alt="scroll-down"
            />
          </ScrollLink>
        </ScrollDown>
      </HeroContainer>
    </main>
  );
}

export default Hero;
