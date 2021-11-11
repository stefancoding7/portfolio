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


  const toggle = () => {
    setIsOpen(!isOpen);
  };

  
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
              src={`${config.imagesUrl + profile.avatar}`}
              alt="man-svgrepo"
            />
          </HeroRight>
        </HeroWrapper>
        <ScrollDown to="projects">
          <ScrollLink>
            Scroll down
            <img
              src="https://raw.githubusercontent.com/gurupawar/portfolio/main/assets/scroll-down.svg"
              alt="scroll-down"
            />
          </ScrollLink>
        </ScrollDown>
      </HeroContainer>
    </main>
  );
}

export default Hero;
