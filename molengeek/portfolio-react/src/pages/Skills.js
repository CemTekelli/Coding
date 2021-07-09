import React from 'react'
import Navbar from '../components/Navbar'

export default function Skills() {

    return (
        <div>
            <div className="skills">
                <div className="skills-content">
                    
                    <div className="skills-card">
                        <h2>Developpement</h2>
                        <div className="skills-inner">
                            <div className="nom">
                                <span className="dev">HTML</span>
                                <span className="dev">CSS</span>
                                <span className="dev">JavaScript</span>
                                <span className="dev">React</span>
                                <span className="dev">Python</span>
                                <span className="dev">Java</span>
                                <span className="dev">PHP</span>
                                <span className="dev">Laravel</span>
                                <span className="dev">MySQL</span>
                            </div>
                            <div className="bar">

                            </div>
                        </div>
                    </div>
                    <div className="skills-card">
                        <h2>Economics</h2>
                        <div className="skills-inner">
                            <div className="nom">
                                <span>Microéconomie</span>
                                <span>Macroéconomie</span>
                                <span>Comptabilité</span>
                                <span>Marché financiers</span>
                                <span>Analyse des états financiers</span>
                                <span>Marketing</span>
                                <span>Management</span>
                                <span>Finance</span>
                                <span>Statistique descriptive</span>
                                <span>Théorème des probabilités</span>
                                <span>Les variables aléatoires bivariées</span>
                                <span>Estimation</span>
                                <span>Tests d'hypothèses et applications</span>
                                <span>L'Analyse de la Variance</span>
                            </div>
                            <div className="bar">

                            </div>
                        </div>
                    </div>
                    
                    <div className="skills-card">
                        <h2>Mathematics</h2>
                        <div className="skills-inner">
                            <div  className="nom">
                                <span>Analyse des fonctions réelles</span>
                                <span>Optimisation à une variable</span>
                                <span>Intégrales</span>
                                <span>Fonctions à plusieurs variables</span>
                                <span>Outils statiques comparatives</span>
                                <span>Optimisation à plusieurs variables</span>
                                <span>Optimisation sous contraintes</span>
                                <span>Les équations linéaires en algèbre linéaire</span>
                                <span>Programmation linéaire</span>
                                <span>Algèbre Matricielle</span>
                                <span>Les espaces vectoriels</span>
                                <span>Orthogonalité et moindres carrés</span>
                                <span>Matrices symétriques</span>
                            </div>
                            <div className="bar">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <Navbar />
        </div>
    )
    
}