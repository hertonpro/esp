<div>

    <!-- team-details -->
    <section class="team-details">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 left-column">
                    <div class="left-content">
                        <div class="lower-box">
                            <h3>Inscription en ligne</h3>
                            <div class="text">
                                <p>Pour les étudiants désirant s’inscrire depuis l’étranger, il est possible d’utiliser
                                    notre plateforme d’inscription en ligne pour faire votre demande d’inscription.<br>
                                    Pour cela, vous devez
                                </p>
                                <h4 class="mb-5">Formulaire de demande d’Inscription</h4>
                                <div id="content_block_04">
                                    <div class="form-inner">
                                        <form action="" method="post" class="appointment-form">
                                            @csrf
                                            <p>1. Information relative à l'adminssion </p>
                                            <p>Vous voulez vous inscrire à quel niveau ?</p>
                                            <div class="form-group">
                                                @foreach ($niveaus as $niveau)
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="niveau"
                                                            id="flexRadioDefault1" wire:model="nv"
                                                            value="{{ $niveau }}">
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            {{ $niveau }}
                                                        </label>
                                                    </div>
                                                @endforeach
                                                <p>Quelle filière allez-vous suivre ?</p>
                                                <div class="form-check">
                                                    @if ($nv == 'Niveau licence')
                                                        @foreach ($lc as $l)
                                                            <div class="form-check">
                                                                @error('niveau')
                                                                    {{$message}}
                                                                @enderror
                                                                <input class="form-check-input" type="radio"
                                                                    name="filiere" id="flexRadioDefault1"
                                                                    value="{{ $l }}">
                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                    {{ $l }}
                                                                </label>
                                                            </div>
                                                        @endforeach
                                                    @elseif ($nv == 'Niveau mastaire')
                                                        @foreach ($ms as $l)
                                                            <div class="form-check ">
                                                                @error('filiere')
                                                                    {{$message}}
                                                                @enderror
                                                                <input class="form-check-input" type="radio"
                                                                    name="filiere" id="flexRadioDefault1"
                                                                    value="{{ $l }}">
                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                    {{ $l }}
                                                                </label>
                                                            </div>
                                                        @endforeach
                                                    @endif
                                                </div>
                                            </div>
                                            <p>2. Informations personnelles du candidat</p>
                                            <div class="form-group row ">
                                                <div class="col-4"><i class="fas fa-user"></i>
                                                    <input type="text" name="nom" placeholder="Nom"
                                                        required="">
                                                </div>
                                                <div class="col-4"><i class="fas fa-user"></i>
                                                    <input type="text" name="postnom" placeholder="Post-nom"
                                                        required="">
                                                </div>
                                                <div class="col-4"><i class="fas fa-user"></i>
                                                    <input type="text" name="prenom" placeholder="Prénom"
                                                        required="">
                                                </div>
                                            </div>
                                            <div class="form-group row ">
                                                <div class="col-6"><i class="fas fa-map"></i>
                                                    <input type="text" name="lieu_naissance"
                                                        placeholder="Lieu de naissance" required="">
                                                </div>
                                                <div class="col-6"><i class="fas fa-date"></i>
                                                    <input type="date" name="date_naissance"
                                                        placeholder="Date de naissance" required="">
                                                </div>
                                            </div>
                                            <div class="form-group row ">
                                                <div class="col-4">
                                                    <input type="text" name="sexe" placeholder="Sexe"
                                                        required="">
                                                </div>
                                                <div class="col-4">
                                                    <input type="text" name="etatcivil" placeholder="Etat civil"
                                                        required="">
                                                </div>
                                                <div class="col-4">
                                                    <input type="text" name="nationalite" placeholder="Nationalité"
                                                        required="">
                                                </div>
                                            </div>
                                            <div class="form-group row ">
                                                <div class="col-6"><i class="fas fa-phone"></i>
                                                    <input type="text" name="tel" placeholder="Tél."
                                                        required="">
                                                </div>
                                                <div class="col-6"><i class="fas fa-envelope"></i>
                                                    <input type="email" name="email" placeholder="E-mail"
                                                        required="">
                                                </div>
                                            </div>
                                            <p>3. Information relative à l’Université, Institut supérieur ou école de
                                                provenace de provenance
                                            </p>
                                            @if ($nv == 'Niveau licence')
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Promotion</th>
                                                            <th scope="col">4e</th>
                                                            <th scope="col">5e</th>
                                                            <th scope="col">6e</th>
                                                            <th scope="col">Diplome</th>
                                                            <th scope="col">OBS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="col">
                                                            <th scope="row">Année scolaire</th>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="2023" name="ang1" required></td>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="2023" name="ang2" required></td>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="2023" name="ang3" required></td>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="2023" name="anl1" required></td>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="2023" name="anl2" required></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Ecole de Provenance</th>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="école" name="univg1" required></td>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="école" name="univg2" required></td>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="école" name="univg3" required></td>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="école" name="univl1" required></td>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="école" name="univl2" required></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Section</th>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="Section" name="facg1" required></td>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="Section" name="facg2" required></td>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="Section" name="facg3" required></td>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="Section" name="facl1" required></td>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="Section" name="facl2" required></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Option</th>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="op" name="opg1" required></td>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="op" name="opg2" required></td>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="op" name="opg3" required></td>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="op" name="opl1" required></td>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="op" name="opl2" required></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">% Obtenus / Mention</th>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="0 %" name="meng1" required></td>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="0 %" name="meng2" required></td>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="0 %" name="meng3" required></td>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="0 %" name="menl1" required></td>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="0 %" name="menl2" required></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Information supplémentaire</th>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="autre" name="infog1" required></td>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="autre" name="infog2" required></td>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="autre" name="infog3" required></td>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="autre" name="infol1" required></td>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="autre" name="infol2" required></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            @elseif ($nv == 'Niveau mastaire')
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Promotion</th>
                                                            <th scope="col">G1</th>
                                                            <th scope="col">G2</th>
                                                            <th scope="col">G3</th>
                                                            <th scope="col">L1/D1</th>
                                                            <th scope="col">L2/D2</th>
                                                            <th scope="col">D3</th>
                                                            <th scope="col">D4</th>
                                                            <th scope="col">OBS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="col">
                                                            <th scope="row">Année Académique</th>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="2023" name="ang1" required></td>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="2023" name="ang2" required></td>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="2023" name="ang3" required></td>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="2023" name="anl1" required></td>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="2023" name="anl2"></td>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="2023" name="and3"></td>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="2023" name="and4"></td>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="2023" name="anobs" required></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Université de Provenance</th>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="Univ" name="univg1" required></td>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="Univ" name="univg2" required></td>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="Univ" name="univg3" required></td>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="Univ" name="univl1" required></td>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="Univ" name="univl2"></td>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="Univ" name="univd3"></td>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="Univ" name="univd4"></td>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="Univ" name="univobs" required></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Faculté suivie</th>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="Fac" name="facg1" required></td>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="Fac" name="facg2" required></td>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="Fac" name="facg3" required></td>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="Fac" name="facl1" required></td>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="Fac" name="facl2"></td>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="Fac" name="facd3"></td>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="Fac" name="facd4"></td>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="Fac" name="facobs" required></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Option</th>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="op" name="opg1" required></td>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="op" name="opg2" required></td>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="op" name="opg3" required></td>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="op" name="opl1" required></td>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="op" name="opl2"></td>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="op" name="opd3"></td>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="op" name="opd4"></td>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="op" name="opobs" required></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">% Obtenus / Mention</th>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="0 %" name="meng1" required></td>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="0 %" name="meng2" required></td>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="0 %" name="meng3" required></td>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="0 %" name="menl1" required></td>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="0 %" name="menl2"></td>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="0 %" name="mend3"></td>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="0 %" name="mend4"></td>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="0 %" name="menobs" required></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Information supplémentaire</th>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="autre" name="infog1" required></td>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="autre" name="infog2" required></td>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="autre" name="infog3" required></td>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="autre" name="infol1" required></td>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="autre" name="infol2"></td>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="autre" name="infod3"></td>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="autre" name="infod4"></td>
                                                            <td><input style="width: 100%" type="text"
                                                                    placeholder="autre" name="infoobs" required></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            @endif
                                            <p>4. document en annexe</p>
                                            <p>Les documents exiger pour une demande d’admissions </p>
                                            <ol class="ml-5">
                                                <li>1. La pièce d’identité (passeport, carte d’électeur ou carte pour
                                                    citoyen)</li>
                                                <li>2. Documents légaux (extrait de casier judiciaire, Attestation de
                                                    bonne vie et mœurs) </li>
                                                <li>3. Documents scolaires (diplôme d’état, relevé (G1, G2, G3, L1, L2
                                                    et autre promotion mentionnées))</li>
                                                <li>4. Scanner les documents en format PDF ce document doit avoir moins
                                                    de 10Mb par document </li>
                                            </ol>

                                            <div class="form-group">
                                                <i class="fas fa--file-alt"></i>
                                                <input class="form-control" type="file" name="doc"
                                                    id="formFileMultiple" multiple>
                                            </div>
                                            <div class="form-group">
                                                <i class="fas fa-money-bill"></i>
                                                <input type="text" name="payid" placeholder="ID du payement"
                                                    required="">
                                            </div>
                                            <div class="form-group message-btn">
                                                <button type="submit" class="theme-btn style-one">Suivant</button>
                                            </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team-details end -->

</div>
