import React from 'react'
import Navbar from '../components/Navbar'
export default function Projets() {
    return(
        <div className="contact">
            <div className="contact-container">
                <div className="contact-card">
                    <div className="contact-box">
                        <div className="contact-content">
                            <h1>2</h1>
                            <h2>Chef</h2>
                            <img src="../img/chef-img.PNG" alt=""/>
                            <button>More</button>
                        </div>
                    </div>
                </div>
                <div className="contact-card">
                    <div className="contact-box">
                        <div className="contact-content">
                            <h1>1</h1>
                            <h2>Emporium</h2>
                            <img src="../img/emporium-img.PNG" alt=""/>
                            <button>More</button>
                        </div>
                    </div>
                </div>
                <div className="contact-card">
                    <div className="contact-box">
                        <div className="contact-content">
                            <h1>3</h1>
                            <h2>Study</h2>
                            <img className="study" src="../img/img-eco.PNG" alt=""/>
                            <div>
                                <button>More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <Navbar />
        </div>
    )
}   