<?php require_once "design/dependecies.php"; ?>
<title>Investy - Depunde Ideea</title>
<body class="home">
<?php require_once "design/nav.php"; ?>
<section class="depune not-fullscreen flex column header-element">
    <div class="first column width100">
        <h1 class="title margin40">Viziune și strategie</h1>
        <div class="box-bullet row row-up width100 margin60">
            <div class="bulet-container column">
                <div class='bulet on'>1
                    <div class="line-mid"></div>
                </div>
                <span>Esența afacerii</span>
                <div class="line-oriz on"></div>
            </div>
            <div class="bulet-container column">
                
                <div class='bulet'>2
                    <div class="line-mid"></div>
                </div>
                <span>Obiective cuantificabile</span>
                <div class="line-oriz"></div>
            </div>
            <div class="bulet-container column">
                <div class='bulet'>3</div>
                <span>Activități necesare</span>
                <div class="line-oriz"></div>
            </div>
        </div>
        <textarea id='input-1' type="text" name="email" placeholder="Care este domeniul pentru care solicitați finanțare?" class="login-input margin30" required></textarea>
        <textarea id='input-2' type="text" name="email" placeholder="Care este locația (previzionata) unde va fi implementat proiectul?" class="login-input margin30" required></textarea>
        <textarea id='input-3' type="text" name="email" placeholder="Care este esența afacerii dumneavoastră?" class="login-input margin30" required></textarea>
        <textarea id='input-4' type="text" name="email" placeholder="Ce anume va genera bani și profit?" class="login-input margin30" required></textarea>
        <textarea id='input-5' type="text" name="email" placeholder="Care este misiunea principală afacerii dumneavoastră?" class="login-input margin30" required></textarea>
        <textarea id='input-6' type="text" name="email" placeholder="Care sunt obiectivele specifice pe care vi le propuneți?" class="login-input margin30" required></textarea>
        <div class="error-1 with100"></div>
        <buton class="blue-btn continue-btn">Salvează și continuă</buton>
    </div>
    <div class="second step column width100">
    <h2 class="title margin40">Depunde ideea de afacere</h2>
        <div class="box-bullet row row-up width100 margin60">
            <div class="bulet-container column">
                <div style='display: flex; border: 0px' class='bulet on'><img src="./static/content/icons/check-icon.svg" alt="check">
                    <div class="line-mid"></div>
                </div>
                <span>Esența afacerii</span>
                <div class="line-oriz"></div>
            </div>
            <div class="bulet-container column">
                <div class='bulet on'>2
                    <div class="line-mid"></div>
                </div>
                <span>Obiective cuantificabile</span>
                <div class="line-oriz on"></div>
            </div>
            <div class="bulet-container column">
                <div class='bulet'>3</div>
                <span>Activități necesare</span>
                <div class="line-oriz"></div>
            </div>
        </div>
        <h4 class='sub-title margin30'>Completați cu obiectivele afacerii din primul an după obținerea finanțării</h4>
        <input id='cifra-afaceri' type="number" min='1'name="cifra-afaceri" placeholder="Cifra de afaceri (exprimați suma în euro):" class="login-input margin30" required/>
        <input id='profit' type="number" min='1'name="profit" placeholder="Profit (exprimați suma în euro):" class="login-input margin30" required/>
        <input id='salariati' type="number" min='1'name="salariati" placeholder="Număr de salariați:" class="login-input margin30" required/>
        <div class="error-2 with100"></div>
        <div class="row">
            <button class="blue-btn mr20 back-first dark">Înapoi</button>
            <buton class="blue-btn third-btn">Continuă</buton>
        </div>
    </div>
    <div class="third step column width100">
    <h2 class="title margin40">Depunde ideea de afacere</h2>
        <div class="box-bullet row row-up width100 margin60">
            <div class="bulet-container column">
                <div style='display: flex; border: 0px' class='bulet on'><img src="./static/content/icons/check-icon.svg" alt="check">
                    <div class="line-mid"></div>
                </div>
                <span>Esența afacerii</span>
                <div class="line-oriz"></div>
            </div>
            <div class="bulet-container column">
                <div style='display: flex; border: 0px' class='bulet on'><img src="./static/content/icons/check-icon.svg" alt="check">
                    <div class="line-mid"></div>
                </div>
                <span>Obiective cuantificabile</span>
                <div class="line-oriz"></div>
            </div>
            <div class="bulet-container column">
                <div class='bulet'>3</div>
                <span>Activități necesare</span>
                <div class="line-oriz"></div>
            </div>
        </div>
        <textarea id='locatie' type="text" name="email" placeholder="Menționați unde și cum va fi asigurată locația de desfășurare a proiectului (prestarea activității la terți, asigurarea spațiului de producție / comercial prin achiziție / închiriere, elaborare proiecte tehnice, obținere avize, acorduri, autorizații necesare dacă e cazul, amenajare spațiu etc.):" class="login-input margin30" required></textarea>
        <textarea id='recrutare' type="text" name="email" placeholder="Precizați cum veți asigura recrutarea / selecția și angajarea personalului necesar - inclusiv instruirea acestuia:" class="login-input margin30" required></textarea>
        <textarea id='activitati' type="text" name="email" placeholder="Ce alte activități considerați relevante pentru implementarea proiectului dumneavoastră, care este calendarul de implementare, ce costuri implică și cum le veți asigura finanțarea?" class="login-input margin30" required></textarea>
        <div class="error-3 with100"></div>
        <div class="row">
            <button class="blue-btn mr20 back-second dark">Înapoi</button>
            <buton class="blue-btn four-btn">Continuă</buton>
        </div>
    </div>
    <div class="four step column width100">
    <h2 class="title margin40">Resurse umane</h2>
        <!-- <div class="box-bullet row row-up width100 margin60">
            <div class="bulet-container column">
                <div class='bulet'>4</div>
                <span>Administrator</span>
                <div class="line-mid"></div>
            </div>
            <div class="bulet-container column">
                <div class='bulet'>5</div>
                <span>Structura organizațională</span>
                <div class="line-oriz"></div>
            </div>
        </div> -->
        <div style='max-width: 560px;' class="row row-up width100 margin40">
            <div class="bulet-container column">
                <div class='bulet on'>4
                    <div class="line-mid one"></div>
                </div>
                <span>Administrator</span>
                <div class="line-oriz on"></div>
            </div>
            <div class="bulet-container column">
                <div class='bulet'>5</div>
                <span>Structura organizațională</span>
                <div class="line-oriz"></div>
            </div>
        </div>
        <label class="container margin20"><span class="sub-title description input-span">Eu voi fi administratorul afacerii</span>
            <input class='radio' id='eu' type="radio" name="termeni">
            <span class="checkmark"></span>
        </label>
        <h4 class='sub-title margin30 text-center'>În caz că nu este așa, <br/> Completați cu detalii despre persoana care va administra afacerea</h4>
        <input id='nume' type="text" name="nume" placeholder="Nume și prenume:" class="login-input margin30" required/>
        <input id='varsta' type="number" min='1'name="varsta" placeholder="Vârstă:" class="login-input margin30" required/>
        <input id='principii' type="text" name="principii" placeholder="Principalele responsabilități în afacere, pe scurt:" class="login-input margin30" required/>
        <textarea id='experienta' type="text" name="experienta" placeholder="Experiența în domeniul de activitate pentru care se solicita finanțare:" class="login-input margin30" required></textarea>
        <input id='studii' type="text" name="studii" placeholder="Studii/specializări cu impact asupra afacerii propuse:" class="login-input margin30" required/>
        <div class="error-4 with100"></div>
        <div class="row">
            <button class="blue-btn mr20 back-third dark">Înapoi</button>
            <buton class="blue-btn five-btn">Continuă</buton>
        </div>
    </div>
    <div class="five step column width100">
        <h2 class="title margin40">Resurse umane</h2>
        <div style='max-width: 560px;' class="row row-up width100 margin40">
            <div class="bulet-container column">
                <div style='display: flex; border: 0px' class='bulet on'><img src="./static/content/icons/check-icon.svg" alt="check">
                    <div class="line-mid one"></div>
                </div>
                <span>Administrator</span>
                <div class="line-oriz"></div>
            </div>
            <div class="bulet-container column">
                <div class='bulet'>5</div>
                <span>Structura organizațională</span>
                <div class="line-oriz on"></div>
            </div>
        </div>
        <div class="column minw420">
            <h4 class='sub-title margin30'>Adaugă departamentele afacerii tale</h4>
            <div class="box-docs study-btn relative margin40 row-left">
                <img class='icon' src="./static/content/icons/add.svg" alt="map-marker">
                <div class="column-left">
                    <h3 class="sub-title">Adaugă un departament</h3>
                </div>
            </div>
            <div id='result' class="result-study result step width100 margin80 row-left">
                <div class="column-left">
                    <span id='result-institutie' class='sub-title'></span>
                    <span id='result-calificare' class="description blue-color"></span>
                    <span id='result-localitate-tara' class="description blue-color"></span>
                </div>
                <div class="edit-delete row-left">
                    <img class='icon study-btn mr10' src="./static/content/icons/pencil.svg" alt="edit">
                    <img class='icon delete-study' src="./static/content/icons/delete.svg" alt="delete">
                </div>
            </div>
            <!-- <label class="container margin20"><span class="sub-title description input-span">Sunt de acord cu termenii și condițiile</span>
                <input class='radio' type="radio" name="termeni">
                <span class="checkmark"></span>
            </label> -->
        </div>
        <div class="error-5 with100"></div>
        <div class="box-nav row">
            <button class="blue-btn mr20 back-four dark">Înapoi</button>
            <buton class="blue-btn top-auto six-btn">Continuă</buton>
        </div>
    </div>
    <div class="six step column width100">
        <h2 class="title margin40">Prezentarea proiectului</h2>
        <div style='max-width: 640px;' class="row row-up width100 margin40">
            <div class="bulet-container column">
                <div class='bulet on'>4
                    <div style='left: 176px; width: 260px' class="line-mid one"></div>
                </div>
                <span>Alocare bugetului</span>
                <div class="line-oriz on"></div>
            </div>
            <div class="bulet-container column">
                <div class='bulet'>5</div>
                <span>Descrierea proiectului de investiții</span>
                <div class="line-oriz"></div>
            </div>
        </div>
        <p class="sub-title margin30">În prima etapă de finanțare, ați solicitat o finanțare în valoare de <span class="blue-color">120.000 euro</span></p>
        <p class="sub-title margin30">Suma disponibilă <span class="blue-color">120.000 euro</span></p>
        <h4 class="description blue-color max-width700 margin20">Adăugați fiecare element ce va fi achiziționat prin finanțarea obținută, până când valoarea acestora însumează finanțarea necesară.</h4>
        <h4 class="description blue-color max-width700 width100 margin40">Pentru a adaugă un element, apăsați pe butonul de mai jos.</h4>
        <div class="column minw420">
            <div class="box-docs element-btn relative margin40 row-left">
                <img class='icon' src="./static/content/icons/add.svg" alt="map-marker">
                <div class="column-left">
                    <h3 class="sub-title">Adaugă element</h3>
                </div>
            </div>
            <div id='element' class="result-element result step width100 margin80 row-left">
                <div class="column-left">
                    <span id='element-denumire' class='sub-title'></span>
                    <span id='result-pret' class="description blue-color"></span>
                </div>
                <div class="edit-delete row-left">
                    <img class='icon element-btn mr10' src="./static/content/icons/pencil.svg" alt="edit">
                    <img class='icon delete-element' src="./static/content/icons/delete.svg" alt="delete">
                </div>
            </div>
            <!-- <label class="container margin20"><span class="sub-title description input-span">Sunt de acord cu termenii și condițiile</span>
                <input class='radio' type="radio" name="termeni">
                <span class="checkmark"></span>
            </label> -->
        </div>
        <div class="error-6 with100"></div>
        <div class="box-nav row">
            <button class="blue-btn mr20 back-five dark">Înapoi</button>
            <buton class="blue-btn top-auto seven-btn">Continuă</buton>
        </div>
    </div>
    <div class="seven step column width100">
        <h2 class="title margin40">Prezentarea proiectului</h2>
        <div style='max-width: 640px;' class="row row-up width100 margin40">
            <div class="bulet-container column">
            <div style='display: flex; border: 0px' class='bulet on'><img src="./static/content/icons/check-icon.svg" alt="check">
                    <div style='left: 176px; width: 260px' class="line-mid one"></div>
                </div>
                <span>Alocare bugetului</span>
                <div class="line-oriz"></div>
            </div>
            <div class="bulet-container column">
                <div class='bulet'>5</div>
                <span>Descrierea proiectului de investiții</span>
                <div class="line-oriz on"></div>
            </div>
        </div>
        <textarea id='flux' type="text" name="flux" placeholder="Prezentați detaliat fluxul activității pentru care se solicită finanțare, precum și integrarea echipamentelor achiziționate din finanțare în fluxul activității" class="login-input margin30" required></textarea>
        <textarea id='finantare' type="text" name="finantare" placeholder="În afară de finanțarea obținută, care este capitalul dumneavoastră disponibil de investit în afacerea menționată? (menționați suma în euro):" class="login-input margin30" required></textarea>
        <textarea id='echipamente' type="text" name="echipamente" placeholder="În cazul în care este nevoie de alte echipamente, decât cele achiziționate prin finanțare, pentru fluxul activității al afacerii, cum veți asigura achiziționarea acestora?" class="login-input margin30" required></textarea>
        <div class="error-7 with100"></div>
        <div class="box-nav row">
            <button class="blue-btn mr20 back-six dark">Înapoi</button>
            <buton class="blue-btn top-auto eight-btn">Continuă</buton>
        </div>
    </div>
    <div class="eight step column width100">
        <h2 class="title margin40">Analiza pieței</h2>
        <div class="box-bullet row row-up width100 margin60">
            <div class="bulet-container column">
                <div class='bulet on'>1
                    <div class="line-mid"></div>
                </div>
                <span>Poziția produselor/serviciilor</span>
                <div class="line-oriz on"></div>
            </div>
            <div class="bulet-container column">
                
                <div class='bulet'>2
                    <div class="line-mid"></div>
                </div>
                <span>Piață și promovarea</span>
                <div class="line-oriz"></div>
            </div>
            <div class="bulet-container column">
                <div class='bulet'>3</div>
                <span>Proiecții financiare</span>
                <div class="line-oriz"></div>
            </div>
        </div>
        <textarea id='produse' type="text" name="produse" placeholder="Descrieți toate produsele/serviciile oferite de afacerea dumneavoastră:" class="login-input mini margin30" required></textarea>
        <textarea id='avantaje' type="text" name="avantaje" placeholder="Descrieți principalele avantaje ale produselor/serviciilor dumneavoastră în raport cu cele oferite de concurență:" class="login-input mini margin30" required></textarea>
        <textarea id='dezavantaje' type="text" name="dezavantaje" placeholder="Descrieți principalele dezavantaje ale produselor/serviciilor dumneavoastră în raport cu cele oferite de concurență:" class="login-input mini margin30" required></textarea>
        <div class="error-8 with100"></div>
                <div class="box-nav row">
            <button class="blue-btn mr20 back-seven dark">Înapoi</button>
            <buton class="blue-btn top-auto ten-btn">Continuă</buton>
        </div>
    </div>
    <div class="ten step column width100">
        <h2 class="title margin40">Analiza pieței</h2>
        <div class="box-bullet row row-up width100 margin60">
            <div class="bulet-container column">
                <div style='display: flex; border: 0px' class='bulet on'><img src="./static/content/icons/check-icon.svg" alt="check">
                    <div class="line-mid"></div>
                </div>
                <span>Poziția produselor/serviciilor</span>
                <div class="line-oriz"></div>
            </div>
            <div class="bulet-container column">
                <div class='bulet'>2
                    <div class="line-mid"></div>
                </div>
                <span>Piață și promovarea</span>
                <div class="line-oriz on"></div>
            </div>
            <div class="bulet-container column">
                <div class='bulet'>3</div>
                <span>Proiecții financiare</span>
                <div class="line-oriz"></div>
            </div>
        </div>
        <h4 style='max-width: 700px;' class='description blue-color margin30'>În cazul produselor finite, prezentați pe scurt o descriere fizică, caracteristici tehnice, performanțe, utilități, căror nevoi răspund etc. <br/><br/> În cazul serviciilor, descrieți trăsăturile caracteristice ale acestora, în așa fel încât să înțeleagă la ce servesc serviciile prestate de dumneavoastră. <br/><br/> În cazul comerțului, precizați grupele de produse ce le veți vinde și aria de valorificare, dacă vânzarea este cu amănuntul sau cu ridicata și dacă veți furniza servicii specifice (post vânzare, transport, garanție, reparații etc)</h4>
        <textarea id='raspuns' type="text" name="produse" placeholder="Introduceți aici răspunsul dumneavoastră." class="login-input mini margin30" required></textarea>
        <textarea id='pret-unitar' type="text" name="avantaje" placeholder="Pentru fiecare produs/serviciu descris mai sus, menționați prețul unitar cu care va fi vândut către clienți" class="login-input mini margin30" required></textarea>
        <textarea id='cantitate' type="text" name="dezavantaje" placeholder="Pentru fiecare produs/serviciu descris mai sus, menționați cantitatea anuală estimată a fi comercializată" class="login-input mini margin30" required></textarea>
        <textarea id='veniturile' type="text" name="dezavantaje" placeholder="Pentru fiecare produs/serviciu descris mai sus, menționați veniturile totale anuale estimate:" class="login-input mini margin30" required></textarea>
        <div class="error-9 with100"></div>
        <div class="box-nav row">
            <button class="blue-btn mr20 back-eight dark">Înapoi</button>
            <buton class="blue-btn top-auto eleven-btn">Continuă</buton>
        </div>
    </div>
    <div class="eleven step column width100">
        <h2 class="title margin40">Analiza pieței</h2>
        <div class="box-bullet row row-up width100 margin60">
            <div class="bulet-container column">
                <div style='display: flex; border: 0px' class='bulet on'><img src="./static/content/icons/check-icon.svg" alt="check">
                    <div class="line-mid"></div>
                </div>
                <span>Poziția produselor/serviciilor</span>
                <div class="line-oriz"></div>
            </div>
            <div class="bulet-container column">
                <div style='display: flex; border: 0px' class='bulet on'><img src="./static/content/icons/check-icon.svg" alt="check">
                    <div class="line-mid"></div>
                </div>
                <span>Piață și promovarea</span>
                <div class="line-oriz"></div>
            </div>
            <div class="bulet-container column">
                <div class='bulet'>3</div>
                <span>Proiecții financiare</span>
                <div class="line-oriz on"></div>
            </div>
        </div>
        <h4 style='max-width: 700px;' class='description margin30'>Completați detaliile despre cheltuielile lunare aferente afacerii</h4>
        <textarea id='detalii' type="text" name="produse" placeholder="Completați detaliile despre cheltuielile lunare aferente afacerii" class="login-input mini margin30" required></textarea>
        <textarea id='materiale' type="number" name="avantaje" placeholder="Alte cheltuieli materiale (exprimați suma în euro):" class="login-input mini margin30" required></textarea>
        <textarea id='externe' type="number" name="dezavantaje" placeholder="Alte cheltuieli externe (cu energie și apă) (exprimați suma în euro):" class="login-input mini margin30" required></textarea>
        <textarea id='marfuri' type="number" name="dezavantaje" placeholder="Cheltuieli privind mărfurile (exprimați suma în euro):" class="login-input mini margin30" required></textarea>
        <textarea id='personal' type="number" name="dezavantaje" placeholder="Cheltuieli cu personalul (salarii, indemnizații, asigurări și protecție socială) (exprimați suma în euro):" class="login-input mini margin30" required></textarea>
        <textarea id='exploatare' type="text" name="dezavantaje" placeholder="Alte cheltuieli de exploatare (prestații externe, impozite, taxe, protecția mediului încurajator etc):" class="login-input mini margin30" required></textarea>
        <textarea id='lunare' type="text" name="dezavantaje" placeholder="Alte cheltuieli lunare:" class="login-input mini margin30" required></textarea>
        <div class="error-10 with100"></div>
        <div class="box-nav row">
            <button class="blue-btn mr20 back-ten dark">Înapoi</button>
            <buton class="blue-btn top-auto twelve-btn">Continuă</buton>
        </div>
    </div>
    <div class="twelve step column width100">
        <h2 class="title margin40">Analiza pieței</h2>
        <div class="box-bullet row row-up width100 margin60">
            <div class="bulet-container column">
                <div style='display: flex; border: 0px' class='bulet on'><img src="./static/content/icons/check-icon.svg" alt="check">
                    <div class="line-mid"></div>
                </div>
                <span>Poziția produselor/serviciilor</span>
                <div class="line-oriz"></div>
            </div>
            <div class="bulet-container column">
                <div style='display: flex; border: 0px' class='bulet on'><img src="./static/content/icons/check-icon.svg" alt="check">
                    <div class="line-mid"></div>
                </div>
                <span>Piață și promovarea</span>
                <div class="line-oriz"></div>
            </div>
            <div class="bulet-container column">
                <div style='display: flex; border: 0px' class='bulet on'><img src="./static/content/icons/check-icon.svg" alt="check"></div>
                <span>Proiecții financiare</span>
                <div class="line-oriz"></div>
            </div>
        </div>
        <h2 class="title margin40">Felicitări, planul tău <span class="blue-color">a fost depus cu succes</span></h1>
        <h4 style='max-width: 700px;' class='description margin60'>Te vom anunța cu privire la răspunsul investitorilor</h4>
        <!-- <div class="error-11 with100"></div> -->
        <div class="box-nav width100 row">
            <a href='depune-ideea.php' class="nav-link big-text not mr20 row blue-btn">Depune ideea aici <img src="static/content/icons/edit.svg" alt="Depunde ideea"></a>
            <a href='cont-completat.php' class="blue-btn big-text dark">Contul meu</a>
        </div>
    </div>
</section>

<div class="popup studii section">
    <div class="popup-box relative column-left">
        <div class="relative close-box width100 row">
            <p class="description">Adaugă detaliile departamentului</p>
            <img class='close close-btn pointer' src='./static/content/icons/x.svg' alt='remove-icon' class='icons'>
        </div>
            <input id='denumire-departament' type="text" name="departament" placeholder="Denumirea departamentului:*" class="login-input width100 margin40" required />
            <input id='obiective-departament' type="text" name="departament" placeholder="Obiectivul departamentului:*" class="login-input width100 margin40" required />
            <div class="margin40 hobby-box relative">
                <input id='input-post' type="text" name="hobby" placeholder="Adaugă un post al departamentului*" class="login-input inputw-390 input-hobby" required />
                <img id='button' class='remove-icon plus-btn pointer' src='./static/content/icons/add.svg' alt='remove-icon' class='icons'>
            </div>
            <ul class='hobby-list'>

            </ul>
            <div class="error-studii with100"></div>

        <button id='get-study' class="save save-btn blue-btn">Salvează</button>
    </div>
</div>

<div class="popup element section">
    <div class="popup-box relative column-left">
        <div class="relative close-box width100 row">
            <p class="description">Adaugă detaliile departamentului</p>
            <img class='close close-btn pointer' src='./static/content/icons/x.svg' alt='remove-icon' class='icons'>
        </div>
        <div class="width100 tipuri">
        <select id='tip' class='login-input margin20' id="tip" name="tip-investitie">
            <option hidden>Tipul de investiție</option>
            <option value="echipamente-tehnologice">Echipamente tehnologice (echipamente IT, elevatoare, încărcătoare autoutilitare și autovehicule cu destinație specială)</option>
            <option value="mobilier">Mobilier, aparatură birocratică și sisteme de protecție a valorilor umane și materiale</option>
            <option value="instalatii">Instalații/echipamente specifice în scopul obținerii unei economii de energie.</option>
            <option value="instalatii-incalzire">Instalații de încălzire sau climatizare</option>
            <option value="autoturisme">Autoturisme, autobuze, microbuze, motociclete, Kart, ATV, rulote cu sau fără motor, remorci și semiremorci, platforme, izoterme și frigorifice, doc plutitor, șalupe maritime pentru călători, ambarcații fluviale de agrement, </option>
            <option value="zbor">Aparate de zbor</option>
            <option value="salarii">Salarii</option>
            <option value="utilități">Utilități</option>
            <option value="contabilitate">servicii de contabilitate</option>
            <option value="website">Promovare web pentru prezentarea și promovarea activității inclusiv cheltuieli de promovare on-line și cheltuieli de înregistrare și hosting</option>
            <option value="brevete">Brevete de invenție, francize, etichetare ecologică</option>
            <option value="cursuri">Cursuri de dezvoltare a abilitaților antreprenoriale Consultanță</option>
            <option value="software">Software-uri necesare desfășurării activității, inclusiv licențe</option>
            <option value="cheltuieli">Cheltuieli financiare aferente creditelor/garanțiilor obținute pentru creditele</option>
            <option value="alt-tip">Alt tip de investiție</option>
        </select>
        </div>
        <input id='denumire-element' type="text" name="denumire-element" placeholder="Denumirea elementului ce urmează să fie achiziționat" class="login-input width100 margin20" required />
        <textarea id='activitate' type="text" name="activitate" placeholder="Care este activitatea firmei pentru care este necesar acest element de investiție?" class="login-input margin20" required></textarea>
        <textarea id='rolul' type="text" name="rolul" placeholder="Descrieți rolul și importanța elementului de cost pentru care solicitați finanțare:" class="login-input margin20" required></textarea>
        <input id='numar-element' type="number" min='1' name="numar-element" placeholder="Număr bucăți" class="login-input width100 margin40" required />
        <input id='pret-element' type="number" min='1' name="pret-element" placeholder="Valoare unitară (exprimați suma în euro)" class="login-input width100 margin20" required />
        <div class="error-element with100"></div>
        <button id='get-element' class="save save-btn blue-btn">Salvează</button>
    </div>
</div>
<?php require_once "design/footer.php"; ?>

<script>
document.getElementById('tip').addEventListener('change', function (e) {
  if (e.target.value === "alt-tip") {
    $('.tipuri').append("<input id='alt-tip' type='text' name='alt-tip' placeholder='Alt tip' class='login-input width100 margin20' required />");
  }
});

document.getElementById('tip').addEventListener('change', function (e) {
  if (e.target.value != "alt-tip") {
    $('#alt-tip').css('display', 'none');
  }
});

$(document).ready(function(){


$('.continue-btn').click(function() {
    // if ($('#judete').val() == 0 && $('#oras').val() == 0 && $('#adresa').val().length === 0) {input-hobby
    if ($('#input-1').val() == 0 || $('#input-2').val() == 0 || $('#input-3').val() == 0 || $('#input-4').val() == 0 || $('#input-5').val() == 0 || $('#input-6').val() == 0) {
        $('.error-1').append("<p class='sub-title margin30 color-red'>Toate câmpurile sunt obligatorii</p>");
    } else {
        $(".first").hide();
        $(".second").css('display', 'flex');
    }
})

$('.third-btn').click(function() {
    // if ($('#judete').val() == 0 && $('#oras').val() == 0 && $('#adresa').val().length === 0) {input-hobby
    if ($('#cifra-afaceri').val() == 0 || $('#profit').val() == 0 || $('#salariati').val() == 0) {
        $('.error-2').append("<p class='sub-title margin30 color-red'>Toate câmpurile sunt obligatorii</p>");
    } else {
        $(".second").hide();
        $(".third").css('display', 'flex');
    }
})

$('.four-btn').click(function() {
    // if ($('#judete').val() == 0 && $('#oras').val() == 0 && $('#adresa').val().length === 0) {input-hobby
    if ($('#locatie').val() == 0 || $('#recrutare').val() == 0 || $('#activitati').val() == 0) {
        $('.error-3').append("<p class='sub-title margin30 color-red'>Toate câmpurile sunt obligatorii</p>");
    } else {
        $(".third").hide();
        $(".four").css('display', 'flex');
    }
})
$('.five-btn').click(function() {
    if ($('#eu').is(':checked')) {
        $(".four").hide();
        $(".five").css('display', 'flex');
    } else if ($('#nume').val() == 0 || $('#varsta').val() == 0 || $('#principii').val() == 0 || $('#experienta').val() == 0 || $('#studii').val() == 0) {
        $('.error-4').append("<p class='sub-title margin30 color-red'>Toate câmpurile sunt obligatorii</p>");
    } else {
        $(".four").hide();
        $(".five").css('display', 'flex');
    }
})

$('.six-btn').click(function() {
    if ($('#denumire-departament').val() == 0 || $('#obiective-departament').val() == 0 || $('#input-post').val() == 0) {
        $('.error-5').append("<p class='sub-title margin30 color-red'>Toate câmpurile sunt obligatorii</p>");
    } else {
        $(".five").hide();
        $(".six").css('display', 'flex');
    }
})

$('.seven-btn').click(function() {
    if ($('#tip').val() == 0 || $('#denumire-element').val() == 0 || $('#activitate').val() == 0 || $('#rolul').val() == 0 || $('#numar-element').val() == 0 || $('#pret-element').val() == 0) {
        $('.error-6').append("<p class='sub-title margin30 color-red'>Toate câmpurile sunt obligatorii</p>");
    } else {
        $(".six").hide();
        $(".seven").css('display', 'flex');
    }
})

$('.eight-btn').click(function() {
    if ($('#flux').val() == 0 || $('#finantare').val() == 0 || $('#echipamente').val() == 0) {
        $('.error-7').append("<p class='sub-title margin30 color-red'>Toate câmpurile sunt obligatorii</p>");
    } else {
        $(".seven").hide();
        $(".eight").css('display', 'flex');
    }
})

// $('.nine-btn').click(function() {
//     if ($('#produse').val() == 0 || $('#avantaje').val() == 0 || $('#dezavantaje').val() == 0) {
//         $('.error-8').append("<p class='sub-title margin30 color-red'>Toate câmpurile sunt obligatorii</p>");
//     } else {
//         $(".eight").hide();
//         $(".nine").css('display', 'flex');
//     }
// })

$('.ten-btn').click(function() {
    if ($('#produse').val() == 0 || $('#avantaje').val() == 0 || $('#dezavantaje').val() == 0) {
    // if ($('#raspuns').val() == 0 || $('#pret-unitar').val() == 0 || $('#cantitate').val() == 0 || $('#veniturile').val() == 0) {
        $('.error-8').append("<p class='sub-title margin30 color-red'>Toate câmpurile sunt obligatorii</p>");
    } else {
        $(".eight").hide();
        $(".ten").css('display', 'flex');
    }
})

$('.eleven-btn').click(function() {
    if ($('#raspuns').val() == 0 || $('#pret-unitar').val() == 0 || $('#cantitate').val() == 0 || $('#veniturile').val() == 0) {
        $('.error-9').append("<p class='sub-title margin30 color-red'>Toate câmpurile sunt obligatorii</p>");
    } else {
        $(".ten").hide();
        $(".eleven").css('display', 'flex');
    }
})

$('.twelve-btn').click(function() {
    if ($('#detalii').val() == 0 || $('#materiale').val() == 0 || $('#externe').val() == 0 || $('#marfuri').val() == 0 || $('#personal').val() == 0 || $('#exploatare').val() == 0 || $('#lunare').val() == 0) {
        $('.error-10').append("<p class='sub-title margin30 color-red'>Toate câmpurile sunt obligatorii</p>");
    } else {
        $(".eleven").hide();
        $(".twelve").css('display', 'flex');
    }
})

// $('.nine-btn').click(function() {
//     if ($('#produse').val() == 0 || $('#avantaje').val() == 0 || $('#dezavantaje').val() == 0) {
//         $('.error').append("<p class='sub-title margin30 color-red'>Toate câmpurile sunt obligatorii</p>");
//     } else {
//         $(".nine").hide();
//         $(".ten").css('display', 'flex');
//     }
// })
$("#get-study").click(function () {
    if ($('#denumire-departament').val() == 0 || $('#obiective-departament').val() == 0 || $('#input-post').val() == 0) {
        $('.error-studii').append("<p class='sub-title margin30 color-red'>Toate câmpurile sunt obligatorii</p>");
    } else {
        $("#result-institutie").html(
            $("#denumire-departament").val()
        );
        $("#result-calificare").html(
            $("#obiective-departament").val()
        );
        $("#result-localitate-tara").html(
            $("#input-post").val()
        );
        $(".popup.studii").removeClass("show");
        $('.result-study').css('display', 'flex');
    }
});

$("#get-element").click(function () {
    if ($('#tip').val() == 0 || $('#denumire-element').val() == 0 || $('#activitate').val() == 0 || $('#rolul').val() == 0 || $('#numar-element').val() == 0 || $('#pret-element').val() == 0) {
        $('.error-element').append("<p class='sub-title margin30 color-red'>Toate câmpurile sunt obligatorii</p>");
    } else {
        $("#element-denumire").html(
            $("#denumire-element").val()
        );
        $("#result-pret").html(
            $("#pret-element").val()
        );
        $(".popup.element").removeClass("show");
        $('.result-element').css('display', 'flex');
    }
});

// $(".save-btn").click(function(){
//     $('.result-study').css('display', 'flex');
// })

$(".delete-study").click(function(){
    $('.result-study').css('display', 'none');
})

$(".delete-element").click(function(){
    $('.result-element').css('display', 'none');
})

$('.back').click(function(){
    $('.second').hide();
    $('.first').css('display', 'flex');
})
$(".back-first").click(function(){
    $(".second").hide();
    $(".first").css('display', 'flex');
})

$(".back-second").click(function(){
    $(".third").hide();
    $(".second").css('display', 'flex');
})

$(".back-third").click(function(){
    $(".four").hide();
    $(".third").css('display', 'flex');
})

$(".back-four").click(function(){
    $(".five").hide();
    $(".four").css('display', 'flex');
})

$(".back-five").click(function(){
    $(".six").hide();
    $(".five").css('display', 'flex');
})

$(".back-six").click(function(){
    $(".seven").hide();
    $(".six").css('display', 'flex');
})

$(".back-seven").click(function(){
    $(".eight").hide();
    $(".seven").css('display', 'flex');
})

$(".back-eight").click(function(){
    $(".ten").hide();
    $(".eight").css('display', 'flex');
})

$(".back-nine").click(function(){
    $(".ten").hide();
    $(".nine").css('display', 'flex');
})

$(".back-ten").click(function(){
    $(".eleven").hide();
    $(".ten").css('display', 'flex');
})

$(".study-btn").click(function(){
    $(".popup.studii").addClass("show");
})

$(".element-btn").click(function(){
    $(".popup.element").addClass("show");
})

$(".close-btn").click(function(){
        $(this).parents(".section").removeClass("show");
    })
});

$(document).ready(
    function(){
        $('#button').click(
            function(){
                const toAdd = $('#input-post').val();
                 $('.hobby-list').append("<div class='hobby-box row margin20' style='width: 270px; margin-left: 40px;'><li class='hobby-text description blue-color'>" + toAdd + "</li><img class='remove-hobby pointer' src='./static/content/icons/cross-circle.svg' alt='remove-icon' class='icons'></div>");
                //  $('.').
                $(".remove-hobby").click(function(){
                // $(".limba-container").css('display', 'none');
                $(this).parents('.hobby-box').remove();
                });
            });
        $('#input-hobby').focus(function() {
            $(this).val('');
        });
    }
    
);
</script>
<script type="text/javascript">
// function GetCardType(number)
// {
//     // visa
//     var re = new RegExp("^4");
//     if (number.match(re) != null)
//         return "Visa";

//     // Mastercard 
//     // Updated for Mastercard 2017 BINs expansion
//      if (/^(5[1-5][0-9]{14}|2(22[1-9][0-9]{12}|2[3-9][0-9]{13}|[3-6][0-9]{14}|7[0-1][0-9]{13}|720[0-9]{12}))$/.test(number)) 
//         return "Mastercard";

//     // AMEX
//     re = new RegExp("^3[47]");
//     if (number.match(re) != null)
//         return "AMEX";

//     // Discover
//     re = new RegExp("^(6011|622(12[6-9]|1[3-9][0-9]|[2-8][0-9]{2}|9[0-1][0-9]|92[0-5]|64[4-9])|65)");
//     if (number.match(re) != null)
//         return "Discover";

//     // Diners
//     re = new RegExp("^36");
//     if (number.match(re) != null)
//         return "Diners";

//     // Diners - Carte Blanche
//     re = new RegExp("^30[0-5]");
//     if (number.match(re) != null)
//         return "Diners - Carte Blanche";

//     // JCB
//     re = new RegExp("^35(2[89]|[3-8][0-9])");
//     if (number.match(re) != null)
//         return "JCB";

//     // Visa Electron
//     re = new RegExp("^(4026|417500|4508|4844|491(3|7))");
//     if (number.match(re) != null)
//         return "Visa Electron";

//     return "";
// }
</script>
</body>
</html>
