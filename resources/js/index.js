import "./App.css";

import { BrowserRouter as Router } from "react-router-dom";
import Home from "./pages/Home";
import config from './config/config';

require('./bootstrap');
require('../css/app.css');
import React, { useEffect } from 'react';


function App() {

  useEffect(() => {
    axios.post(`${config.apiBaseUrl}visitors`, {
      stats: true,
    })
    .then(function (response) {
      console.log(response);
    })
    .catch(function (error) {
      console.log(error);
    });
    
    
  }, []);
    
  return (
    <Router>
      <Home />
    </Router>
  );
}

export default App;

