import React from 'react'
import Navbar from '../components/Navbar'

export default function AboutMe() {

    return (
        <div className="aboutme" >
            <div className="aboutme-content">
                <div className="up-img">
                    <div className="mid-img">
                        <div className="img">
                            <div className="inner-img">
                                <img src="../img/img.jpg" alt=""/>
                            </div>
                        </div>
                        <div className="card">
                            <h4>Cem Tekelli</h4>
                            <p>Developper-Economist-Entrepreneur</p>
                            <div className="reseaux">
                                <i class="fab fa-facebook fa-lg"></i>
                                <i class="fab fa-instagram fa-lg"></i>
                                <i class="fab fa-twitter fa-lg"></i>
                                <i class="fab fa-linkedin-in fa-lg"></i>
                            </div>
                            <div>
                                <button>Text Me</button>
                                <button>Call Me</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="pres">
                    <h1>Qui suis-je ?</h1>
                    <p>Bonjour! je m'apelle Cem, j'ai 22 ans et je suis un jeune ambiteux, étudiant/developpeur/entrepreneur. Je suis étudiant en sciences économiques à l'université saint louis, en formation chez Molengeek et essaye à coté de travailler sur des projets personnelles dans le but de faire un jour de créer une start-up. </p>
                </div>
            </div>
            <Navbar />
        </div>
    )
}