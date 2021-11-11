import React, { useState, useEffect } from "react";
import Hero from "../components/Hero/Hero";
import Projects from "../components/Projects/Projects";
import About from "../components/About/About";
import Contact from "../components/Contact/Contact";
import Footer from "../components/Footer/Footer";
import FixSocialIcon from "../components/SocialIcon/FixSocialIcon";
import FadeIn from 'react-fade-in';


import config from '../config/config';




function Home() {
  const [profile, setProfile] = useState([]);



  useEffect(() => {
    axios.get(`${config.apiBaseUrl}profile`).then((response) => {
      setProfile(response.data);
    });
  }, []);
  

  return (
    <>
    <FadeIn onComplete>

      <Hero profile={profile}/>
      <Projects />
      <About profile={profile}/>
      <Contact profile={profile}/>
      <Footer profile={profile}/>
      <FixSocialIcon />
    </FadeIn>

      
    </>
  );
}

export default Home;
