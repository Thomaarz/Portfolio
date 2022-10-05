<?php

include "Vue_Experience.php";
include "Vue_Projets.php";
include "Vue_Contact.php";

class Vue_Home
{

    private $vue_experience;
    private $vue_projects;
    private $vue_contact;

    public function __construct() {
        $this->vue_experience = new Vue_Experience();
        $this->vue_projects = new Vue_Projets();
        $this->vue_contact = new Vue_Contact();
    }

    public function show_header() {
        ?>

        <header id="top">
            <h1 class="lime big-3 bold shadow-black" id="header-title"></h1>

            <h2 class="uppercase green header-reveal">
                Développeur Java & Web
            </h2>
            <p class="text gray medium header-reveal">
                Bienvenue sur mon Portfolio !<br/>
                Je m'appelle Thomas Girbe, je suis née en 2002 et j'ai actuellement <span class="green">19</span> ans !
            </p>
            <p class="text gray medium header-reveal">
                Je suis passionné par l'informatique et plus particulièrement par la programmation Java/Web depuis plus de <span class="green">5</span> ans.
                Mon objectif est de continuer à progresser dans ce domaine !
            </p>

            <div class="moveable header-reveal" id="header-img"></div>

        </header>

        <?php
    }

    private function show_left_bar() {
        ?>

        <div id="modal-navigation" class="bg-white">
            <div id="hide-modal-navigation-btn">
                <img src="images/menu-nav.png" id="hide-modal-navigation-img">
            </div>

            <h1 class="black big-2 uppercase shadow-black">Menu Principal</h1>
            <nav id="modal-navigation-nav">
                <a href="index.php#top" onclick="closeModalNavigation()" class="modal-navigation-link text-reveal black uppercase big-1 undecorated">Accueil</a>
                <a href="index.php#experience" onclick="closeModalNavigation()" class="modal-navigation-link text-reveal black uppercase big-1 undecorated">Expérience</a>
                <a href="index.php#projets" onclick="closeModalNavigation()" class="modal-navigation-link text-reveal black uppercase big-1 undecorated">Projets</a>
                <a href="index.php#contact" onclick="closeModalNavigation()" class="modal-navigation-link text-reveal black uppercase big-1 undecorated">Contact</a>
            </nav>
        </div>

        <div id="left-bar" class="bg-white">
            <div id="show-modal-navigation-btn">
                <img src="images/menu-nav.png" id="show-modal-navigation-img">
            </div>

            <nav id="left-bar-nav">
                <a href="https://github.com/Thomaarz" target="_blank" class="left-bar-nav-link">
                    <img src="images/github.png" alt="GitHub" class="left-bar-nav-img">
                </a>
                <a href="https://twitter.com/Thomaarz" target="_blank" class="left-bar-nav-link">
                    <img src="images/twitter.png" alt="Twitter" class="left-bar-nav-img">
                </a>
                <a href="mailto::tgirbe@iut.univ-paris8.fr" target="_blank" class="left-bar-nav-link">
                    <img src="images/mail.png" alt="Mail" class="left-bar-nav-img">
                </a>
            </nav>

            <div class="theme-btn" id="theme-switcher-leftbar">
                <h3 class="theme-switcher black">Thème<br/>Sombre</h3>
            </div>
        </div>

        <?php
    }

    public function show_main() {

        $this->show_left_bar();
        
        ?>

        <main>

            <?php

            $this->vue_experience->show_experience();
            $this->vue_projects->show_projects();
            $this->vue_contact->show_contact();

            ?>

        </main>

        <?php
    }

    public function show_footer() {
        ?>

        <footer>
            <nav class="nav-glass">
                <a href="https://twitter.com" target="_blank" class="nav-link-glass"><img src="images/twitter.png"></a>
                <a href="https://github.com" target="_blank" class="nav-link-glass"><img src="images/github.png"></a>
                <a href="mailto:tgirbe@iut.univ-paris8.fr" target="_blank" class="nav-link-glass"><img src="images/mail.png"></a>
            </nav>
        </footer>

        <?php
    }
}