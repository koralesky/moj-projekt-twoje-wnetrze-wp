<?php
/* Template Name: package site */
get_header();?>

<section>
            <div class="row text-center">
                <div class="col-6 mx-auto">
                    <h1>Pakiet podstawowy</h1>
                </div>
            </div>
            <div class="row content">
                <div class="col-lg-6">
                    <div class="text-podstawowy">
                        <p> W ramach pakietu podstawowego, prócz serca i pasji wkładanych w projekt, oferuję: </p>
                        <ul>
                            <li>spotkanie, w ramach którego podpisujemy umowę wykonania projektu oraz rozmawiamy o wizji projektowanej przestrzeni; podczas takiego spotkania dokonuję także szczegółowych pomiarów </li>
                            <li>2 lub 3 (jeśli to możliwe) warianty funkcjonalnego zagospodarowania przestrzeni (rzuty z góry) </li>
                            <li>rozmowę o przygotowanych wariantach, wprowadzenie ewentualnych modyfikacji</li>
                            <li>przygotowanie finalnej wersji układu funkcjonalnego przestrzeni w postaci dokumentacji technicznej zawierającej zwymiarowane rzut z góry oraz kłady ścian zagospodarowanych przestrzennie. </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 img-section"> <img src="img/rzut2d.webp" alt="Wnętrze 3d" class="img-responsive"> </div>
            </div>
            <div class="row text-center justify-content-center">
                <button id="myBtn" class="btn btn-white">Pokaż cennik</button>

                <!-- The Modal -->
                <div id="myModal" class="modal">

                    <!-- Modal content -->
                    <div class="modal-content">
                        <div class="modal-header"> <span class="close">&times;</span>
                            <p class="mx-auto">Cennik pakietu podstawowego</p>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-12 col-lg-12">
                                    <div class="price-element">
                                        <p class="price-text ptx-1">Cena</p>
                                        <p class="price-text ptx-2">Przestrzeń do zaprojektowania</p>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3">
                                    <div class="price-element">
                                        <p class="price-text ptx-1">500 zł / projekt</p>
                                        <p class="price-text ptx-2">Do 8m<sup>2</sup></p>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3">
                                    <div class="price-element">
                                        <p class="price-text ptx-1">60 zł / m<sup>2</sup></p>
                                        <p class="price-text ptx-2">9-60m<sup>2</sup></p>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3">
                                    <div class="price-element">
                                        <p class="price-text ptx-1">55zł/m<sup>2</sup></p>
                                        <p class="price-text ptx-2">60-90m<sup>2</sup></p>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3">
                                    <div class="price-element">
                                        <p class="price-text ptx-1">50zł/m<sup>2</sup></p>
                                        <p class="price-text ptx-2">Powyżej 90m<sup>2</sup></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer"> </div>
                    </div>
                </div>
            </div>
            <div class="container price-container">
                <div class="row">
                    <div class="col">
                        <div class="price-element">
                            <p class="price-text ptx-1">Cena</p>
                            <p class="price-text ptx-2">Przestrzeń do zaprojektowania</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="price-element">
                            <p class="price-text ptx-1">500 zł / projekt</p>
                            <p class="price-text ptx-2">Do 8m<sup>2</sup></p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="price-element">
                            <p class="price-text ptx-1">60 zł / m<sup>2</sup></p>
                            <p class="price-text ptx-2">9-60m<sup>2</sup></p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="price-element">
                            <p class="price-text ptx-1">55zł/m<sup>2</sup></p>
                            <p class="price-text ptx-2">60-90m<sup>2</sup></p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="price-element">
                            <p class="price-text ptx-1">50zł/m<sup>2</sup></p>
                            <p class="price-text ptx-2">Powyżej 90m<sup>2</sup></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<?php get_footer();?>