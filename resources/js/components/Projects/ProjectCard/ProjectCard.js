import React, { useState, useEffect } from "react";
import {
  slice, concat, 
} from 'lodash';
import { ProjectList } from "../../../data/ProjectData";
import config from '../../../config/config';
import Fade from 'react-reveal/Fade';
import axios from 'axios';


import {
  Card,
  CardLeft,
  CardRight,
  Stack,
  BtnGroup,
  MoreBtn,
  btnMore
} from "./ProjectCardElements";






  



let arrayForHoldingPosts = [];

function ProjectCard({ projects}) {
  
  //const [projects, setProjects] = useState([]);
  const [postsPerPage, setPostsPerPage] = useState(5);
  const [postsToShow, setPostsToShow] = useState([]);
  const [next, setNext] = useState(5);
 // console.log('before effect' + projects);
//console.log(next);

  // useEffect(() => {
  //    axios.get(`${config.apiBaseUrl}projectperpage`).then((response) => {
  //        setNext(response.data);
  //        setPostsPerPage(response.data); 
        
  //      })
    
   
  // }, []);

  useEffect(() => {
    
    loopWithSlice(0, postsPerPage);
  }, [projects]);


  const loopWithSlice = (start, end) => {
   // console.log(projects);
    const slicedPosts = projects.slice(start, end);
    arrayForHoldingPosts = [...arrayForHoldingPosts, ...slicedPosts];
    setPostsToShow(arrayForHoldingPosts);
  };
 

  
    
  
  //  console.log('after loop' + projects);

  

  const handleShowMorePosts = () => {
    
    loopWithSlice(next, next + postsPerPage);
    setNext(next + postsPerPage);
    // console.log(projects.length);
    // console.log(next);
  };

  const counter = (id) => {
    axios.post(`${config.apiBaseUrl}counter`, {
      id: id,
    })
    .then(function (response) {
     // console.log(response);
    })
    .catch(function (error) {
     // console.log(error);
    });
    
    //console.log(id);
  };

 

  return (
    <>
  
      {postsToShow.map((lists, index) => (
        <>
        
        <Fade left>
        <Card key={index}>
          <CardLeft>
            <img src={`${config.imagesUrl + lists.image}`} alt={lists.title} />
          </CardLeft>
          <CardRight>
            <h4>{lists.title}</h4>
            <p>{lists.description}</p>
            <Stack>
              <span className="stackTitle">Tech Stack -</span>           
    <span className="tags">{lists.tags}</span>
            </Stack>
            <BtnGroup>
              <a onClick={() => { counter(lists.id); }}
                className="btn btn2 SecondarBtn"
                href={lists.source_link}
                target="_blank"
                rel="noopener noreferrer"
              >
                Github
              </a>
              <a
                onClick={() => { counter(lists.id); }}
                className="btn PrimaryBtn"
                href={lists.demo_link}
                target="_blank"
                rel="noopener noreferrer"
              >
                Demo ➜
              </a>
            </BtnGroup>
            
          </CardRight>
          
        </Card>
        </Fade>
       
        </>
        
        
      ))}

      
      <>
      
        <MoreBtn>
        <div className="d-flex justify-content-center">
        { next < projects.length ? 
          <button   className="btn PrimaryBtn"  onClick={handleShowMorePosts}>Load more</button> : ''
        }
        </div>
        
        </MoreBtn>
     
      
      </>
      
      
      
    </>
  );
}

export default ProjectCard;
