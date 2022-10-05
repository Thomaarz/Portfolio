<?php


class Vue_Experience
{

    public function show_experience() {
        ?>

        <div class="main-box" id="experience">
            <h1 class="black big-3 reveal"><span class="green">E</span>xpérience</h1>
            <div class="content">

                <div class="top line">

                    <?php

                    $this->show_etudes();
                    $this->show_competences();

                    ?>

                </div>
                <div class="bottom line">


                    <?php

                    $this->show_other();

                    ?>

                </div>

            </div>
        </div>

        <?php
    }

    private function show_other() {
        ?>

        <div class="exp-box mid">
            <h1 class="exp-box-title reveal">Autre</h1>

            <p class="medium reveal">
              est Ceci est un test Ceci est un test Ceci est un test Ceci est un test Ceci est un test Ceci est un test Ceci est un test

            </p>
        </div>

        <?php
    }

    private function show_etudes() {
        ?>

        <div class="exp-box left" id="etudes-box">
            <h1 class="exp-box-title reveal">Etudes</h1>

            <div class="exp-box-content">
                <p class="reveal medium">
                    Je suis actuellement en <span class="green">2</span> ème année de DUT Informatique à l'IUT de Montreuil (93).
                    J'ai obtenu mon BAC <span class="green">S</span> en 2020 à Orsay (91).
                </p>

                <img id="img-etudes" src="images/etudes.png" class="exp-element-hover reveal">
            </div>
        </div>

        <?php
    }

    private function show_competences() {
        ?>

        <div class="exp-box right" id="competences-box">
            <h1 class="exp-box-title reveal">Compétences</h1>

            <div id="competences-all">
                <div class="competence-box reveal">
                    <div class="competence-box-element">
                        <p class="big-0"><span class="green">J</span>ava</p>
                    </div>
                    <div class="competence-box-element">
                        <img src="images/star.png" class="img-star">
                        <img src="images/star.png" class="img-star">
                        <img src="images/star.png" class="img-star">
                        <img src="images/star.png" class="img-star">
                        <img src="images/star.png" class="img-star">
                    </div>
                </div>

                <div class="competence-box reveal">
                    <div class="competence-box-element">
                        <p class="big-0"><span class="green">P</span>hp</p>
                    </div>
                    <div class="competence-box-element">
                        <img src="images/star.png" class="img-star">
                        <img src="images/star.png" class="img-star">
                        <img src="images/star.png" class="img-star">
                        <img src="images/star.png" class="img-star">
                        <img src="images/star_gray.png" class="img-star">
                    </div>
                </div>

                <div class="competence-box reveal">
                    <div class="competence-box-element">
                        <p class="big-0"><span class="green">H</span>tml/<span class="green">C</span>ss</p>
                    </div>
                    <div class="competence-box-element">
                        <img src="images/star.png" class="img-star">
                        <img src="images/star.png" class="img-star">
                        <img src="images/star.png" class="img-star">
                        <img src="images/star.png" class="img-star">
                        <img src="images/star_gray.png" class="img-star">
                    </div>
                </div>

                <div class="competence-box reveal">
                    <div class="competence-box-element">
                        <p class="big-0"><span class="green">J</span>avaScript</p>
                    </div>
                    <div class="competence-box-element competence-box-stars">
                        <img src="images/star.png" class="img-star">
                        <img src="images/star.png" class="img-star">
                        <img src="images/star.png" class="img-star">
                        <img src="images/star_gray.png" class="img-star">
                        <img src="images/star_gray.png" class="img-star">
                    </div>
                </div>

                <div class="competence-box reveal">
                    <div class="competence-box-element">
                        <p class="big-0"><span class="green">S</span>QL</p>
                    </div>
                    <div class="competence-box-element">
                        <img src="images/star.png" class="img-star">
                        <img src="images/star.png" class="img-star">
                        <img src="images/star.png" class="img-star">
                        <img src="images/star_gray.png" class="img-star">
                        <img src="images/star_gray.png" class="img-star">
                    </div>
                </div>

                <div class="competence-box reveal">
                    <div class="competence-box-element">
                        <p class="big-0"><span class="green">P</span>ython</p>
                    </div>
                    <div class="competence-box-element">
                        <img src="images/star.png" class="img-star">
                        <img src="images/star.png" class="img-star">
                        <img src="images/star_gray.png" class="img-star">
                        <img src="images/star_gray.png" class="img-star">
                        <img src="images/star_gray.png" class="img-star">
                    </div>
                </div>
            </div>

        </div>

        <?php
    }

}