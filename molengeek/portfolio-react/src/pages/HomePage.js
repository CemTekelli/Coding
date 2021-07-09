 import React from 'react'
 import Navbar from '../components/Navbar'
 

 export default function HomePage() {


    return(
        <div className='homePage'>
            <div className="main" >
                <div className="welcome">
                    <div className="clavier">
                        <div className="hi">
                            <div className="inner-hi">
                                <h1>
                                    Hi, Welcome to my Portfolio
                                </h1>
                            </div>
                        </div>
                        <div className="wrapper">
                            <div className="keys">
                                <input type="button" value="a"/>
                                <input type="button" value="z"/>
                                <input type="button" value="e"/>
                                <input type="button" value="r"/>
                                <input type="button" value="t"/>
                                <input type="button" value="y"/>
                                <input type="button" value="u"/>
                                <input type="button" value="i"/>
                                <input type="button" value="o"/>
                                <input type="button" value="p"/>
                            </div>
                            <div className="keys">
                                <input type="button" value="q"/>
                                <input type="button" value="s"/>
                                <input type="button" value="d"/>
                                <input type="button" value="f"/>
                                <input type="button" value="g"/>
                                <input type="button" value="h"/>
                                <input type="button" value="j"/>
                                <input type="button" value="k"/>
                                <input type="button" value="l"/>
                                <input type="button" value="m"/>
                            </div>
                            <div className="keys">
                                <input type="button" value="w"/>
                                <input type="button" value="x"/>
                                <input type="button" value="c"/>
                                <input type="button" value="v"/>
                                <input type="button" value="b"/>
                                <input type="button" value="n"/>
                            </div>
                            <div className="keys">
                                <input type="button" value="space"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <Navbar />  
                </div>
            </div>
        </div>
    )
 }