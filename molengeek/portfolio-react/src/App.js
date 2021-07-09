import React from 'react'
import HomePage from './pages/HomePage'
import AboutMe from './pages/AboutMe'
import Skills from './pages/Skills'
import Projets from './pages/Projets'
import Services from './pages/Services'



import {
  BrowserRouter as Router,
  Switch,
  Route,
} from "react-router-dom";
function App() {

  return (
    <div className="app" >
      {<Router>
        <Switch>
          <Route exact path='/'>
            <HomePage />
          </Route>
          <Route exact path='/AboutMe'>
            <AboutMe />
          </Route>
          <Route exact path='/Skills'>
            <Skills />
          </Route>
          <Route exact path='/Projets'>
            <Projets />
          </Route>
          <Route exact path='/Services'>
            <Services />
          </Route>
        </Switch>
      </Router> }
    </div>
  );
}

export default App;
