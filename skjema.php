

<form name="moore-sok-forbrukslan" action="<?php esc_url( $_SERVER['REQUEST_URI'] ) ?>" method="post">

    
    <fieldset>
        <legend>Lånebeløp</legend>

        <div class="row">
            <div class="medium-6 columns">
                <label>Lånebeløp *
                    <input type="text" name="moore-laanebelop" value="<?php isset($_POST["moore-laanebelop"]) ? esc_attr($_POST["moore-laanebelop"]) : '' ?>" required="required">                
                </label>
            </div>
            <div class="medium-6 columns">
                <label>Løpetid *
                    <select name="moore-lopetid" required="required">
                        <option value="">Velg løpetid</option>
                        <option value="3">3 år</option>
                        <option value="4">4 år</option>
                        <option value="5">5 år</option>
                        <option value="6">6 år</option>
                        <option value="7">7 år</option>
                        <option value="8">8 år</option>
                        <option value="9">9 år</option>
                        <option value="10">10 år</option>
                        <option value="11">11 år</option>
                        <option value="12">12 år</option>
                    </select>               
                </label>
            </div>
        </div>
    </fieldset>


    <fieldset>

        <legend>Personopplysninger</legend>

        <div class="row">


            <div class="medium-6 columns">
                <label>Fornavn *
                    <input type="text" name="moore-person[][fornavn]" value="213" required="required">                
                </label>
                <label>Etternavn *
                    <input type="text" name="moore-person[][etternavn]" value="" required="required">                
                </label>
                <label>Mobilnummer *
                    <input type="text" name="moore-person[][mobil]" value="" required="required">                
                </label>
                <label>E-post adresse *
                    <input type="text" name="moore-person[][epost]" value="" required="required">                
                </label>
                <input id="moore-norsk-statsborger" name="moore-person[][statsborger]" type="checkbox"><label for="moore-norsk-statsborger">Norsk statsborger</label>
            </div>


            <div class="medium-6 columns">

                <label>Personnummer (11 siffer) *
                    <input type="text" name="moore-person[][personnummer]" value="" required="required">                
                </label>
                <label>Adresse *
                    <input type="text" name="moore-person[][adresse]" value="" required="required">                
                </label>

                <div class="row">
                    <div class="medium-6 columns">
                        <label>Postnummer *
                            <input type="text" name="moore-person[][postnummer]" value="" required="required">                
                        </label>
                    </div>
                    <div class="medium-6 columns">
                        <label>Sted *
                            <input type="text" name="moore-person[][sted]" value="" required="required">                
                        </label>
                    </div>
                </div>

                <label>Hvor mange år har du bodd på adressen? *
                    <select id="moore-antall-aar-paa-adresse" name="moore-person[][lengde]" required="required">
                        <option value="">Velg antall år</option>
                        <option value="0">Under 1 år</option>
                        <option value="1">1 år</option>
                        <option value="2">2 år</option>
                        <option value="3">3 år</option>
                        <option value="4">4 år</option>
                        <option value="5">5 år</option>
                        <option value="6-10">6 til 10 år</option>
                        <option value="11-15">11 til 15 år</option>
                        <option value="16-20">16 til 20 år</option>
                        <option value="20+">Over 20 år</option>
                    </select>
                </label>

            </div>
        </div>
    </fieldset>

    <a id="addMedsoker" class="formActions"><i class="icon ion-plus-circled"></i>Legg til medsøker</a>

    <fieldset class="optional">

        <legend>Personopplysninger medsøker</legend>

        <div class="row">


            <div class="medium-6 columns">
                <label>Fornavn *
                    <input type="text" name="moore-person[][fornavn]" value="" required="required">                
                </label>
                <label>Etternavn *
                    <input type="text" name="moore-person[][etternavn]" value="" required="required">                
                </label>
                <label>Mobilnummer *
                    <input type="text" name="moore-person[][mobil]" value="" required="required">                
                </label>
                <label>E-post adresse *
                    <input type="text" name="moore-person[][epost]" value="" required="required">                
                </label>
                <input id="moore-norsk-statsborger" name="moore-person[][statsborger]" type="checkbox"><label for="moore-norsk-statsborger">Norsk statsborger</label>
            </div>


            <div class="medium-6 columns">

                <label>Personnummer (11 siffer) *
                    <input type="text" name="moore-person[][personnummer]" value="" required="required">                
                </label>
                <label>Adresse *
                    <input type="text" name="moore-person[][adresse]" value="" required="required">                
                </label>

                <div class="row">
                    <div class="medium-6 columns">
                        <label>Postnummer *
                            <input type="text" name="moore-person[][postnummer]" value="" required="required">                
                        </label>
                    </div>
                    <div class="medium-6 columns">
                        <label>Sted *
                            <input type="text" name="moore-person[][sted]" value="" required="required">                
                        </label>
                    </div>
                </div>

                <label>Hvor mange år har du bodd på adressen? *
                    <select id="moore-antall-aar-paa-adresse" name="moore-person[][lengde]" required="required">
                        <option value="">Velg antall år</option>
                        <option value="0">Under 1 år</option>
                        <option value="1">1 år</option>
                        <option value="2">2 år</option>
                        <option value="3">3 år</option>
                        <option value="4">4 år</option>
                        <option value="5">5 år</option>
                        <option value="6-10">6 til 10 år</option>
                        <option value="11-15">11 til 15 år</option>
                        <option value="16-20">16 til 20 år</option>
                        <option value="20+">Over 20 år</option>
                    </select>
                </label>

            </div>
        </div>
    </fieldset>

    <fieldset id="gjeldsrekker">

        <legend>Gjeld</legend>

        <div class="row">

            <div class="medium-3 columns">
                <label>Gjeldstype
                    <select name="moore-gjeld[][type]" required="required">
                        <option value="">Velg type</option>
                        <option value="housing_loan">Boliglån</option>
                        <option value="student_loan">Studielån</option>
                        <option value="car_loan">Billån</option>
                        <option value="other_loan">Forbrukslån</option>
                        <option value="credit_card">Kredittkort</option>
                    </select>              
                </label>
            </div>
            <div class="medium-3 columns">
                <label>Sum
                    <input type="text" name="moore-gjeld[][sum]" required="required">            
                </label>
            </div>
            <div class="medium-3 columns">
                <label>Kostnad pr. mnd.
                    <input type="text" name="moore-gjeld[][kostnad]" required="required">            
                </label>
            </div>
            <div class="medium-3 columns">
                <label>Ansvar
                    <select name="more-gjeld[][ansvar]" required="required">
                        <option value="">Velg ansv.</option>
                        <option value="main_applicant">Hovedsøker</option>
                        <option value="co_applicant">Medsøker</option>
                        <option value="with_partner">Delt m. samboer</option>
                        <option value="with_spouse">Delt m. ektefelle</option>
                    </select>
                </label>
            </div>
        </div>
        
        <a id="addRow" class="formActions"><i class="icon ion-plus-circled"></i>Legg til rekke</a>
        <a id="removeRow" class="formActions hidden"><i class="icon ion-minus-circled"></i>Fjern rekke</a>

    </fieldset>


    <button>Send søknad</button>

</form>



<script>

    'use strict';

    var mooreFormToXML = (function(document, $) {
        var docElem = document.documentElement,
            _userAgentInit = function() {
                docElem.setAttribute('data-useragent', navigator.userAgent);
            },

            _formFunctions = function() {

                

                $('#addMedsoker').on('click', function(){

                    var fields = $(this).next();
                    if(fields.is(':visible')) {
                        $(this).html('<i class="icon ion-plus-circled"></i>Legg til medsøker');
                    } else {
                        $(this).html('<i class="icon ion-minus-circled"></i>Fjern medsøker');
                    }

                    $(this).next().toggleClass('open');
                });

                (function(){

                    var current = 0;
                    var row = $('#gjeldsrekker').children('.row').first().clone(),

                    buttonVisibility = function() {
                        if (current > 0) {
                            $('#removeRow').removeClass('hidden');
                        } else {
                            $('#removeRow').addClass('hidden');
                        }
                    };

                    $('#addRow').on('click', function(){
                        current++;
                        row.clone().insertBefore(this);
                        buttonVisibility();
                    });

                    $('#removeRow').on('click', function() {
                        current--;
                        $('#gjeldsrekker').children('.row').last().remove();
                        buttonVisibility();

                    });

                    

                })();

                

            },

            _init = function() {
                _userAgentInit();
                _formFunctions();
            };


        return {
            init: _init
        };


    })(document, jQuery);



    (function() {
        mooreFormToXML.init();
    })();


</script>

