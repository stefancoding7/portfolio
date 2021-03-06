import styled from "styled-components";

export const ContactWrapper = styled.div`
  margin-top: 5rem;
  -ms-transform: rotate(-1deg); /* IE 9 */
  transform: rotate(-1deg);
  @media (min-width: 992px) {
    -ms-transform: rotate(-2deg); /* IE 9 */
  transform: rotate(-2deg);
  }
`;

export const Image = styled.img`
  
  margin: 0 auto;
  margin-bottom: 1rem;
  @media only screen and (min-width: 600px) {max-width: 300px;} 
  @media only screen and (min-width: 992px) {max-width: 600px;} 
`;

export const Technologies = styled.div`
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  margin-right: auto;
  margin-left: auto;
  margin-bottom: -2rem;
`;

export const Tech = styled.div`
  display: flex;
  flex-direction: column;
  align-items: center;
  max-width: 100px;
  min-width: 100px;
  margin-bottom: 2rem;
`;

export const TechImg = styled.img`
  height: 50px;
  width: 50px;
`;

export const TechName = styled.div`
  font-size: 14px;
`;
