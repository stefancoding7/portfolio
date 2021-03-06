import React from "react";
import styled from "styled-components";


const FooterSection = styled.div`
  background-image: url(https://res.cloudinary.com/dbqxzdxhf/image/upload/v1636666568/wave_nz0os0.svg);
  background-repeat: no-repeat;
  background-size: cover;
  width: 100%;
  height: 300px;
  position: relative;
  

  span {
    position: absolute;
    bottom: 4rem;
    color: #fff;

    a {
      text-decoration: underline;
    }
  }
`;
function Footer(props) {
  return (
    <FooterSection>
      <div className="Container">
        <span className="text-secondary">
          Coded with 💙 by{" "}
          <a
            href={props.profile.email}
            target="_blank"
            rel="noopener noreferrer"
          >
            {props.profile.site_name}
          </a>{" "}
        </span>
      </div>
    </FooterSection>
  );
}

export default Footer;
