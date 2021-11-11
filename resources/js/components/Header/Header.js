import React, { useState, useEffect } from "react";
import { Nav, Logo, NavLink, Bars, NavMenu, NavBtn } from "./HeaderElements";
import config from '../../config/config';

const Header = (props) => {
  
  return (
    <div className="Container">
      <Nav>
        <Logo to="/">
          <img
            src={`${config.imagesUrl + props.profile.logo}`}
            alt="logo"
          />
        </Logo>
        <NavMenu>
          <NavLink className="menu-item" to="projects" smooth={true}>
            Projects
          </NavLink>
          <NavLink className="menu-item" to="about" smooth={true}>
            About
          </NavLink>
          <NavLink className="menu-item" to="contact" smooth={true}>
            Contact
          </NavLink>
        </NavMenu>
        <NavBtn>
          <a
            className="btn PrimaryBtn"
            href={props.profile.resume}
            target="_blank"
            rel="noopener noreferrer"
          >
            Resume 
          </a>
        </NavBtn>
        <Bars onClick={props.toggle} />
      </Nav>
    </div>
  );
};

export default Header;
