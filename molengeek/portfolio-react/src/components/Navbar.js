import React, { useEffect, useRef } from 'react'
import {
    BrowserRouter as Router,
    Link
  } from "react-router-dom";


export default function Navbar() {

    return(
        <div>
            <div className="navbar" >
                <Link to='/'><button>Home</button></Link>
                <Link to='/AboutMe'><button>About Me</button></Link>
                <Link to='/Skills'><button>Skills</button></Link>
                <Link to='/Projets'><button>Projects</button></Link>
            </div>
        </div>
    )
}