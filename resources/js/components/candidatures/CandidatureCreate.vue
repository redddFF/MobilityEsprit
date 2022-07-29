<template>
    <form @submit.prevent="saveCandidature">
        <div class="form-row">
            <div>
                <label
                    for="StudentId"
                    class="block text-sm font-medium text-gray-700"
                    >Student Id</label
                >
                <div class="mt-1">
                    <input
                        type="number"
                        name="StudentId"
                        id="StudentId"
                        class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        v-model="form.StudenntId"
                    />
                </div>
            </div>
            <div>
                <label
                    for="PersonalId"
                    class="block text-sm font-medium text-gray-700"
                    >Personal Id</label
                >
                <div class="mt-1">
                    <input
                        type="number"
                        name="PersonalId"
                        id="PersonalId"
                        class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        v-model="form.PersonalId"
                    />
                </div>
            </div>
            <div>
                <label
                    for="MobilityType"
                    class="block text-sm font-medium text-gray-700"
                    >Mobility Type</label
                >
                <div class="mt-1">
                    <input
                        type="text"
                        name="MobilityType"
                        id="MobilityType"
                        class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        v-model="form.MobilityType"
                    />
                </div>
            </div>

            <div class="form-check">
                <label class="block text-sm font-medium text-gray-700"
                    >Exchange Duration</label
                >
                <input
                    class="form-check-input"
                    type="radio"
                    name="ExchangeDuration"
                    id="Autumn_term"
                    value="Autumn_term"
                    v-model="form.ExchangeDuration"
                />
                <label class="form-check-label" for="ExchangeDuration">
                    Autumn term
                </label>
            </div>
            <div class="form-check">
                <input
                    class="form-check-input"
                    type="radio"
                    name="ExchangeDuration"
                    id="Spring_term"
                    value="Spring_term"
                    v-model="form.ExchangeDuration"
                />
                <label class="form-check-label" for="ExchangeDuration">
                    Spring term
                </label>
            </div>

            <div class="form-check">
                <input
                    class="form-check-input"
                    type="radio"
                    name="ExchangeDuration"
                    id="Full_year"
                    value="Full_year"
                    v-model="form.ExchangeDuration"
                />
                <label class="form-check-label" for="ExchangeDuration">
                    Full Academic year
                </label>

                <div>
                    <label
                        for="LastName"
                        class="block text-sm font-medium text-gray-700"
                        >Last Name</label
                    >
                    <div class="mt-1">
                        <input
                            type="text"
                            name="LastName"
                            id="LastName"
                            class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            v-model="form.LastName"
                        />
                    </div>
                </div>
                <div>
                    <label
                        for=""
                        class="block text-sm font-medium text-gray-700"
                        >Date Of Birth</label
                    >
                    <div class="mt-1">
                        <input
                            type="date"
                            name="DateOfBirth"
                            id="DateOfBirth"
                            class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            v-model="form.DateOfBirth"
                        />
                    </div>
                </div>

                <div class="form-group col-md-4">
                    <label for="Gender">Gender</label> <br />
                    <select
                        id="Gender"
                        class="form-control"
                        v-model="form.Gender"
                    >
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label
                        for="Nationality"
                        class="block text-sm font-medium text-gray-700"
                        >Nationality</label
                    >
                    <select
                        id="Nationality"
                        class="form-control"
                        v-model="form.Nationality"
                    >
                        <option value="afghan">Afghan</option>
                        <option value="albanian">Albanian</option>
                        <option value="algerian">Algerian</option>
                        <option value="american">American</option>
                        <option value="andorran">Andorran</option>
                        <option value="angolan">Angolan</option>
                        <option value="antiguans">Antiguans</option>
                        <option value="argentinean">Argentinean</option>
                        <option value="armenian">Armenian</option>
                        <option value="australian">Australian</option>
                        <option value="austrian">Austrian</option>
                        <option value="azerbaijani">Azerbaijani</option>
                        <option value="bahamian">Bahamian</option>
                        <option value="bahraini">Bahraini</option>
                        <option value="bangladeshi">Bangladeshi</option>
                        <option value="barbadian">Barbadian</option>
                        <option value="barbudans">Barbudans</option>
                        <option value="batswana">Batswana</option>
                        <option value="belarusian">Belarusian</option>
                        <option value="belgian">Belgian</option>
                        <option value="belizean">Belizean</option>
                        <option value="beninese">Beninese</option>
                        <option value="bhutanese">Bhutanese</option>
                        <option value="bolivian">Bolivian</option>
                        <option value="bosnian">Bosnian</option>
                        <option value="brazilian">Brazilian</option>
                        <option value="british">British</option>
                        <option value="bruneian">Bruneian</option>
                        <option value="bulgarian">Bulgarian</option>
                        <option value="burkinabe">Burkinabe</option>
                        <option value="burmese">Burmese</option>
                        <option value="burundian">Burundian</option>
                        <option value="cambodian">Cambodian</option>
                        <option value="cameroonian">Cameroonian</option>
                        <option value="canadian">Canadian</option>
                        <option value="cape verdean">Cape Verdean</option>
                        <option value="central african">Central African</option>
                        <option value="chadian">Chadian</option>
                        <option value="chilean">Chilean</option>
                        <option value="chinese">Chinese</option>
                        <option value="colombian">Colombian</option>
                        <option value="comoran">Comoran</option>
                        <option value="congolese">Congolese</option>
                        <option value="costa rican">Costa Rican</option>
                        <option value="croatian">Croatian</option>
                        <option value="cuban">Cuban</option>
                        <option value="cypriot">Cypriot</option>
                        <option value="czech">Czech</option>
                        <option value="danish">Danish</option>
                        <option value="djibouti">Djibouti</option>
                        <option value="dominican">Dominican</option>
                        <option value="dutch">Dutch</option>
                        <option value="east timorese">East Timorese</option>
                        <option value="ecuadorean">Ecuadorean</option>
                        <option value="egyptian">Egyptian</option>
                        <option value="emirian">Emirian</option>
                        <option value="equatorial guinean">
                            Equatorial Guinean
                        </option>
                        <option value="eritrean">Eritrean</option>
                        <option value="estonian">Estonian</option>
                        <option value="ethiopian">Ethiopian</option>
                        <option value="fijian">Fijian</option>
                        <option value="filipino">Filipino</option>
                        <option value="finnish">Finnish</option>
                        <option value="french">French</option>
                        <option value="gabonese">Gabonese</option>
                        <option value="gambian">Gambian</option>
                        <option value="georgian">Georgian</option>
                        <option value="german">German</option>
                        <option value="ghanaian">Ghanaian</option>
                        <option value="greek">Greek</option>
                        <option value="grenadian">Grenadian</option>
                        <option value="guatemalan">Guatemalan</option>
                        <option value="guinea-bissauan">Guinea-Bissauan</option>
                        <option value="guinean">Guinean</option>
                        <option value="guyanese">Guyanese</option>
                        <option value="haitian">Haitian</option>
                        <option value="herzegovinian">Herzegovinian</option>
                        <option value="honduran">Honduran</option>
                        <option value="hungarian">Hungarian</option>
                        <option value="icelander">Icelander</option>
                        <option value="indian">Indian</option>
                        <option value="indonesian">Indonesian</option>
                        <option value="iranian">Iranian</option>
                        <option value="iraqi">Iraqi</option>
                        <option value="irish">Irish</option>
                        <option value="israeli">Israeli</option>
                        <option value="italian">Italian</option>
                        <option value="ivorian">Ivorian</option>
                        <option value="jamaican">Jamaican</option>
                        <option value="japanese">Japanese</option>
                        <option value="jordanian">Jordanian</option>
                        <option value="kazakhstani">Kazakhstani</option>
                        <option value="kenyan">Kenyan</option>
                        <option value="kittian and nevisian">
                            Kittian and Nevisian
                        </option>
                        <option value="kuwaiti">Kuwaiti</option>
                        <option value="kyrgyz">Kyrgyz</option>
                        <option value="laotian">Laotian</option>
                        <option value="latvian">Latvian</option>
                        <option value="lebanese">Lebanese</option>
                        <option value="liberian">Liberian</option>
                        <option value="libyan">Libyan</option>
                        <option value="liechtensteiner">Liechtensteiner</option>
                        <option value="lithuanian">Lithuanian</option>
                        <option value="luxembourger">Luxembourger</option>
                        <option value="macedonian">Macedonian</option>
                        <option value="malagasy">Malagasy</option>
                        <option value="malawian">Malawian</option>
                        <option value="malaysian">Malaysian</option>
                        <option value="maldivan">Maldivan</option>
                        <option value="malian">Malian</option>
                        <option value="maltese">Maltese</option>
                        <option value="marshallese">Marshallese</option>
                        <option value="mauritanian">Mauritanian</option>
                        <option value="mauritian">Mauritian</option>
                        <option value="mexican">Mexican</option>
                        <option value="micronesian">Micronesian</option>
                        <option value="moldovan">Moldovan</option>
                        <option value="monacan">Monacan</option>
                        <option value="mongolian">Mongolian</option>
                        <option value="moroccan">Moroccan</option>
                        <option value="mosotho">Mosotho</option>
                        <option value="motswana">Motswana</option>
                        <option value="mozambican">Mozambican</option>
                        <option value="namibian">Namibian</option>
                        <option value="nauruan">Nauruan</option>
                        <option value="nepalese">Nepalese</option>
                        <option value="new zealander">New Zealander</option>
                        <option value="ni-vanuatu">Ni-Vanuatu</option>
                        <option value="nicaraguan">Nicaraguan</option>
                        <option value="nigerien">Nigerien</option>
                        <option value="north korean">North Korean</option>
                        <option value="northern irish">Northern Irish</option>
                        <option value="norwegian">Norwegian</option>
                        <option value="omani">Omani</option>
                        <option value="pakistani">Pakistani</option>
                        <option value="palauan">Palauan</option>
                        <option value="panamanian">Panamanian</option>
                        <option value="papua new guinean">
                            Papua New Guinean
                        </option>
                        <option value="paraguayan">Paraguayan</option>
                        <option value="peruvian">Peruvian</option>
                        <option value="polish">Polish</option>
                        <option value="portuguese">Portuguese</option>
                        <option value="qatari">Qatari</option>
                        <option value="romanian">Romanian</option>
                        <option value="russian">Russian</option>
                        <option value="rwandan">Rwandan</option>
                        <option value="saint lucian">Saint Lucian</option>
                        <option value="salvadoran">Salvadoran</option>
                        <option value="samoan">Samoan</option>
                        <option value="san marinese">San Marinese</option>
                        <option value="sao tomean">Sao Tomean</option>
                        <option value="saudi">Saudi</option>
                        <option value="scottish">Scottish</option>
                        <option value="senegalese">Senegalese</option>
                        <option value="serbian">Serbian</option>
                        <option value="seychellois">Seychellois</option>
                        <option value="sierra leonean">Sierra Leonean</option>
                        <option value="singaporean">Singaporean</option>
                        <option value="slovakian">Slovakian</option>
                        <option value="slovenian">Slovenian</option>
                        <option value="solomon islander">
                            Solomon Islander
                        </option>
                        <option value="somali">Somali</option>
                        <option value="south african">South African</option>
                        <option value="south korean">South Korean</option>
                        <option value="spanish">Spanish</option>
                        <option value="sri lankan">Sri Lankan</option>
                        <option value="sudanese">Sudanese</option>
                        <option value="surinamer">Surinamer</option>
                        <option value="swazi">Swazi</option>
                        <option value="swedish">Swedish</option>
                        <option value="swiss">Swiss</option>
                        <option value="syrian">Syrian</option>
                        <option value="taiwanese">Taiwanese</option>
                        <option value="tajik">Tajik</option>
                        <option value="tanzanian">Tanzanian</option>
                        <option value="thai">Thai</option>
                        <option value="togolese">Togolese</option>
                        <option value="tongan">Tongan</option>
                        <option value="trinidadian or tobagonian">
                            Trinidadian or Tobagonian
                        </option>
                        <option value="tunisian">Tunisian</option>
                        <option value="turkish">Turkish</option>
                        <option value="tuvaluan">Tuvaluan</option>
                        <option value="ugandan">Ugandan</option>
                        <option value="ukrainian">Ukrainian</option>
                        <option value="uruguayan">Uruguayan</option>
                        <option value="uzbekistani">Uzbekistani</option>
                        <option value="venezuelan">Venezuelan</option>
                        <option value="vietnamese">Vietnamese</option>
                        <option value="welsh">Welsh</option>
                        <option value="yemenite">Yemenite</option>
                        <option value="zambian">Zambian</option>
                        <option value="zimbabwean">Zimbabwean</option>
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label
                        for="NativeLanguage"
                        class="block text-sm font-medium text-gray-700"
                        >Native Language</label
                    >
                    <select
                        id="NativeLanguage"
                        class="form-control"
                        v-model="form.NativeLanguage"
                    >
                        <option>Select Language</option>
                        <option value="af">Afrikaans</option>
                        <option value="sq">Albanian - shqip</option>
                        <option value="am">Amharic - አማርኛ</option>
                        <option value="ar">Arabic - العربية</option>
                        <option value="an">Aragonese - aragonés</option>
                        <option value="hy">Armenian - հայերեն</option>
                        <option value="ast">Asturian - asturianu</option>
                        <option value="az">
                            Azerbaijani - azərbaycan dili
                        </option>
                        <option value="eu">Basque - euskara</option>
                        <option value="be">Belarusian - беларуская</option>
                        <option value="bn">Bengali - বাংলা</option>
                        <option value="bs">Bosnian - bosanski</option>
                        <option value="br">Breton - brezhoneg</option>
                        <option value="bg">Bulgarian - български</option>
                        <option value="ca">Catalan - català</option>
                        <option value="ckb">
                            Central Kurdish - کوردی (دەستنوسی عەرەبی)
                        </option>
                        <option value="zh">Chinese - 中文</option>
                        <option value="zh-HK">
                            Chinese (Hong Kong) - 中文（香港）
                        </option>
                        <option value="zh-CN">
                            Chinese (Simplified) - 中文（简体）
                        </option>
                        <option value="zh-TW">
                            Chinese (Traditional) - 中文（繁體）
                        </option>
                        <option value="co">Corsican</option>
                        <option value="hr">Croatian - hrvatski</option>
                        <option value="cs">Czech - čeština</option>
                        <option value="da">Danish - dansk</option>
                        <option value="nl">Dutch - Nederlands</option>
                        <option value="en">English</option>
                        <option value="en-AU">English (Australia)</option>
                        <option value="en-CA">English (Canada)</option>
                        <option value="en-IN">English (India)</option>
                        <option value="en-NZ">English (New Zealand)</option>
                        <option value="en-ZA">English (South Africa)</option>
                        <option value="en-GB">English (United Kingdom)</option>
                        <option value="en-US">English (United States)</option>
                        <option value="eo">Esperanto - esperanto</option>
                        <option value="et">Estonian - eesti</option>
                        <option value="fo">Faroese - føroyskt</option>
                        <option value="fil">Filipino</option>
                        <option value="fi">Finnish - suomi</option>
                        <option value="fr">French - français</option>
                        <option value="fr-CA">
                            French (Canada) - français (Canada)
                        </option>
                        <option value="fr-FR">
                            French (France) - français (France)
                        </option>
                        <option value="fr-CH">
                            French (Switzerland) - français (Suisse)
                        </option>
                        <option value="gl">Galician - galego</option>
                        <option value="ka">Georgian - ქართული</option>
                        <option value="de">German - Deutsch</option>
                        <option value="de-AT">
                            German (Austria) - Deutsch (Österreich)
                        </option>
                        <option value="de-DE">
                            German (Germany) - Deutsch (Deutschland)
                        </option>
                        <option value="de-LI">
                            German (Liechtenstein) - Deutsch (Liechtenstein)
                        </option>
                        <option value="de-CH">
                            German (Switzerland) - Deutsch (Schweiz)
                        </option>
                        <option value="el">Greek - Ελληνικά</option>
                        <option value="gn">Guarani</option>
                        <option value="gu">Gujarati - ગુજરાતી</option>
                        <option value="ha">Hausa</option>
                        <option value="haw">Hawaiian - ʻŌlelo Hawaiʻi</option>
                        <option value="he">Hebrew - עברית</option>
                        <option value="hi">Hindi - हिन्दी</option>
                        <option value="hu">Hungarian - magyar</option>
                        <option value="is">Icelandic - íslenska</option>
                        <option value="id">Indonesian - Indonesia</option>
                        <option value="ia">Interlingua</option>
                        <option value="ga">Irish - Gaeilge</option>
                        <option value="it">Italian - italiano</option>
                        <option value="it-IT">
                            Italian (Italy) - italiano (Italia)
                        </option>
                        <option value="it-CH">
                            Italian (Switzerland) - italiano (Svizzera)
                        </option>
                        <option value="ja">Japanese - 日本語</option>
                        <option value="kn">Kannada - ಕನ್ನಡ</option>
                        <option value="kk">Kazakh - қазақ тілі</option>
                        <option value="km">Khmer - ខ្មែរ</option>
                        <option value="ko">Korean - 한국어</option>
                        <option value="ku">Kurdish - Kurdî</option>
                        <option value="ky">Kyrgyz - кыргызча</option>
                        <option value="lo">Lao - ລາວ</option>
                        <option value="la">Latin</option>
                        <option value="lv">Latvian - latviešu</option>
                        <option value="ln">Lingala - lingála</option>
                        <option value="lt">Lithuanian - lietuvių</option>
                        <option value="mk">Macedonian - македонски</option>
                        <option value="ms">Malay - Bahasa Melayu</option>
                        <option value="ml">Malayalam - മലയാളം</option>
                        <option value="mt">Maltese - Malti</option>
                        <option value="mr">Marathi - मराठी</option>
                        <option value="mn">Mongolian - монгол</option>
                        <option value="ne">Nepali - नेपाली</option>
                        <option value="no">Norwegian - norsk</option>
                        <option value="nb">
                            Norwegian Bokmål - norsk bokmål
                        </option>
                        <option value="nn">Norwegian Nynorsk - nynorsk</option>
                        <option value="oc">Occitan</option>
                        <option value="or">Oriya - ଓଡ଼ିଆ</option>
                        <option value="om">Oromo - Oromoo</option>
                        <option value="ps">Pashto - پښتو</option>
                        <option value="fa">Persian - فارسی</option>
                        <option value="pl">Polish - polski</option>
                        <option value="pt">Portuguese - português</option>
                        <option value="pt-BR">
                            Portuguese (Brazil) - português (Brasil)
                        </option>
                        <option value="pt-PT">
                            Portuguese (Portugal) - português (Portugal)
                        </option>
                        <option value="pa">Punjabi - ਪੰਜਾਬੀ</option>
                        <option value="qu">Quechua</option>
                        <option value="ro">Romanian - română</option>
                        <option value="mo">
                            Romanian (Moldova) - română (Moldova)
                        </option>
                        <option value="rm">Romansh - rumantsch</option>
                        <option value="ru">Russian - русский</option>
                        <option value="gd">Scottish Gaelic</option>
                        <option value="sr">Serbian - српски</option>
                        <option value="sh">
                            Serbo-Croatian - Srpskohrvatski
                        </option>
                        <option value="sn">Shona - chiShona</option>
                        <option value="sd">Sindhi</option>
                        <option value="si">Sinhala - සිංහල</option>
                        <option value="sk">Slovak - slovenčina</option>
                        <option value="sl">Slovenian - slovenščina</option>
                        <option value="so">Somali - Soomaali</option>
                        <option value="st">Southern Sotho</option>
                        <option value="es">Spanish - español</option>
                        <option value="es-AR">
                            Spanish (Argentina) - español (Argentina)
                        </option>
                        <option value="es-419">
                            Spanish (Latin America) - español (Latinoamérica)
                        </option>
                        <option value="es-MX">
                            Spanish (Mexico) - español (México)
                        </option>
                        <option value="es-ES">
                            Spanish (Spain) - español (España)
                        </option>
                        <option value="es-US">
                            Spanish (United States) - español (Estados Unidos)
                        </option>
                        <option value="su">Sundanese</option>
                        <option value="sw">Swahili - Kiswahili</option>
                        <option value="sv">Swedish - svenska</option>
                        <option value="tg">Tajik - тоҷикӣ</option>
                        <option value="ta">Tamil - தமிழ்</option>
                        <option value="tt">Tatar</option>
                        <option value="te">Telugu - తెలుగు</option>
                        <option value="th">Thai - ไทย</option>
                        <option value="ti">Tigrinya - ትግርኛ</option>
                        <option value="to">Tongan - lea fakatonga</option>
                        <option value="tr">Turkish - Türkçe</option>
                        <option value="tk">Turkmen</option>
                        <option value="tw">Twi</option>
                        <option value="uk">Ukrainian - українська</option>
                        <option value="ur">Urdu - اردو</option>
                        <option value="ug">Uyghur</option>
                        <option value="uz">Uzbek - o‘zbek</option>
                        <option value="vi">Vietnamese - Tiếng Việt</option>
                        <option value="wa">Walloon - wa</option>
                        <option value="cy">Welsh - Cymraeg</option>
                        <option value="fy">Western Frisian</option>
                        <option value="xh">Xhosa</option>
                        <option value="yi">Yiddish</option>
                        <option value="yo">Yoruba - Èdè Yorùbá</option>
                        <option value="zu">Zulu - isiZulu</option>
                    </select>
                </div>

                <div>
                    <label
                        for="PostalAdress"
                        class="block text-sm font-medium text-gray-700"
                        >Postal Adress</label
                    >
                    <div class="mt-1">
                        <input
                            type="text"
                            name="PostalAdress"
                            id="PostalAdress"
                            class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            v-model="form.PostalAdress"
                        />
                    </div>
                </div>
                <div>
                    <label
                        for="Phone"
                        class="block text-sm font-medium text-gray-700"
                        >Phone</label
                    >
                    <div class="mt-1">
                        <input
                            type="text"
                            name="Phone"
                            id="Phone"
                            class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            v-model="form.Phone"
                        />
                    </div>
                </div>
                <div>
                    <label
                        for="Email"
                        class="block text-sm font-medium text-gray-700"
                        >Email</label
                    >
                    <div class="mt-1">
                        <input
                            type="email"
                            name="Email"
                            id="Email"
                            placeholder="yourmail@outlook.com"
                            class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            v-model="form.Email"
                        />
                    </div>
                </div>
                <div>
                    <label
                        for="EmergencyCallName"
                        class="block text-sm font-medium text-gray-700"
                        >Emergency Call Name</label
                    >
                    <div class="mt-1">
                        <input
                            type="text"
                            name="EmergencyCallName"
                            id="EmergencyCallName"
                            class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            v-model="form.EmergencyCallName"
                        />
                    </div>
                </div>
                <div>
                    <label
                        for="EmergencyCallAdress"
                        class="block text-sm font-medium text-gray-700"
                        >Emergency Call Adress</label
                    >
                    <div class="mt-1">
                        <input
                            type="text"
                            name="EmergencyCallAdress"
                            id="EmergencyCallAdress"
                            class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            v-model="form.EmergencyCallAdress"
                        />
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label
                        for="EmergencyCallLanguage"
                        class="block text-sm font-medium text-gray-700"
                        >Emergency Call Language</label
                    >
                    <select
                        id="EmergencyCallLanguage"
                        class="form-control"
                        v-model="form.EmergencyCallLanguage"
                    >
                        <option>Select Language</option>
                        <option value="af">Afrikaans</option>
                        <option value="sq">Albanian - shqip</option>
                        <option value="am">Amharic - አማርኛ</option>
                        <option value="ar">Arabic - العربية</option>
                        <option value="an">Aragonese - aragonés</option>
                        <option value="hy">Armenian - հայերեն</option>
                        <option value="ast">Asturian - asturianu</option>
                        <option value="az">
                            Azerbaijani - azərbaycan dili
                        </option>
                        <option value="eu">Basque - euskara</option>
                        <option value="be">Belarusian - беларуская</option>
                        <option value="bn">Bengali - বাংলা</option>
                        <option value="bs">Bosnian - bosanski</option>
                        <option value="br">Breton - brezhoneg</option>
                        <option value="bg">Bulgarian - български</option>
                        <option value="ca">Catalan - català</option>
                        <option value="ckb">
                            Central Kurdish - کوردی (دەستنوسی عەرەبی)
                        </option>
                        <option value="zh">Chinese - 中文</option>
                        <option value="zh-HK">
                            Chinese (Hong Kong) - 中文（香港）
                        </option>
                        <option value="zh-CN">
                            Chinese (Simplified) - 中文（简体）
                        </option>
                        <option value="zh-TW">
                            Chinese (Traditional) - 中文（繁體）
                        </option>
                        <option value="co">Corsican</option>
                        <option value="hr">Croatian - hrvatski</option>
                        <option value="cs">Czech - čeština</option>
                        <option value="da">Danish - dansk</option>
                        <option value="nl">Dutch - Nederlands</option>
                        <option value="en">English</option>
                        <option value="en-AU">English (Australia)</option>
                        <option value="en-CA">English (Canada)</option>
                        <option value="en-IN">English (India)</option>
                        <option value="en-NZ">English (New Zealand)</option>
                        <option value="en-ZA">English (South Africa)</option>
                        <option value="en-GB">English (United Kingdom)</option>
                        <option value="en-US">English (United States)</option>
                        <option value="eo">Esperanto - esperanto</option>
                        <option value="et">Estonian - eesti</option>
                        <option value="fo">Faroese - føroyskt</option>
                        <option value="fil">Filipino</option>
                        <option value="fi">Finnish - suomi</option>
                        <option value="fr">French - français</option>
                        <option value="fr-CA">
                            French (Canada) - français (Canada)
                        </option>
                        <option value="fr-FR">
                            French (France) - français (France)
                        </option>
                        <option value="fr-CH">
                            French (Switzerland) - français (Suisse)
                        </option>
                        <option value="gl">Galician - galego</option>
                        <option value="ka">Georgian - ქართული</option>
                        <option value="de">German - Deutsch</option>
                        <option value="de-AT">
                            German (Austria) - Deutsch (Österreich)
                        </option>
                        <option value="de-DE">
                            German (Germany) - Deutsch (Deutschland)
                        </option>
                        <option value="de-LI">
                            German (Liechtenstein) - Deutsch (Liechtenstein)
                        </option>
                        <option value="de-CH">
                            German (Switzerland) - Deutsch (Schweiz)
                        </option>
                        <option value="el">Greek - Ελληνικά</option>
                        <option value="gn">Guarani</option>
                        <option value="gu">Gujarati - ગુજરાતી</option>
                        <option value="ha">Hausa</option>
                        <option value="haw">Hawaiian - ʻŌlelo Hawaiʻi</option>
                        <option value="he">Hebrew - עברית</option>
                        <option value="hi">Hindi - हिन्दी</option>
                        <option value="hu">Hungarian - magyar</option>
                        <option value="is">Icelandic - íslenska</option>
                        <option value="id">Indonesian - Indonesia</option>
                        <option value="ia">Interlingua</option>
                        <option value="ga">Irish - Gaeilge</option>
                        <option value="it">Italian - italiano</option>
                        <option value="it-IT">
                            Italian (Italy) - italiano (Italia)
                        </option>
                        <option value="it-CH">
                            Italian (Switzerland) - italiano (Svizzera)
                        </option>
                        <option value="ja">Japanese - 日本語</option>
                        <option value="kn">Kannada - ಕನ್ನಡ</option>
                        <option value="kk">Kazakh - қазақ тілі</option>
                        <option value="km">Khmer - ខ្មែរ</option>
                        <option value="ko">Korean - 한국어</option>
                        <option value="ku">Kurdish - Kurdî</option>
                        <option value="ky">Kyrgyz - кыргызча</option>
                        <option value="lo">Lao - ລາວ</option>
                        <option value="la">Latin</option>
                        <option value="lv">Latvian - latviešu</option>
                        <option value="ln">Lingala - lingála</option>
                        <option value="lt">Lithuanian - lietuvių</option>
                        <option value="mk">Macedonian - македонски</option>
                        <option value="ms">Malay - Bahasa Melayu</option>
                        <option value="ml">Malayalam - മലയാളം</option>
                        <option value="mt">Maltese - Malti</option>
                        <option value="mr">Marathi - मराठी</option>
                        <option value="mn">Mongolian - монгол</option>
                        <option value="ne">Nepali - नेपाली</option>
                        <option value="no">Norwegian - norsk</option>
                        <option value="nb">
                            Norwegian Bokmål - norsk bokmål
                        </option>
                        <option value="nn">Norwegian Nynorsk - nynorsk</option>
                        <option value="oc">Occitan</option>
                        <option value="or">Oriya - ଓଡ଼ିଆ</option>
                        <option value="om">Oromo - Oromoo</option>
                        <option value="ps">Pashto - پښتو</option>
                        <option value="fa">Persian - فارسی</option>
                        <option value="pl">Polish - polski</option>
                        <option value="pt">Portuguese - português</option>
                        <option value="pt-BR">
                            Portuguese (Brazil) - português (Brasil)
                        </option>
                        <option value="pt-PT">
                            Portuguese (Portugal) - português (Portugal)
                        </option>
                        <option value="pa">Punjabi - ਪੰਜਾਬੀ</option>
                        <option value="qu">Quechua</option>
                        <option value="ro">Romanian - română</option>
                        <option value="mo">
                            Romanian (Moldova) - română (Moldova)
                        </option>
                        <option value="rm">Romansh - rumantsch</option>
                        <option value="ru">Russian - русский</option>
                        <option value="gd">Scottish Gaelic</option>
                        <option value="sr">Serbian - српски</option>
                        <option value="sh">
                            Serbo-Croatian - Srpskohrvatski
                        </option>
                        <option value="sn">Shona - chiShona</option>
                        <option value="sd">Sindhi</option>
                        <option value="si">Sinhala - සිංහල</option>
                        <option value="sk">Slovak - slovenčina</option>
                        <option value="sl">Slovenian - slovenščina</option>
                        <option value="so">Somali - Soomaali</option>
                        <option value="st">Southern Sotho</option>
                        <option value="es">Spanish - español</option>
                        <option value="es-AR">
                            Spanish (Argentina) - español (Argentina)
                        </option>
                        <option value="es-419">
                            Spanish (Latin America) - español (Latinoamérica)
                        </option>
                        <option value="es-MX">
                            Spanish (Mexico) - español (México)
                        </option>
                        <option value="es-ES">
                            Spanish (Spain) - español (España)
                        </option>
                        <option value="es-US">
                            Spanish (United States) - español (Estados Unidos)
                        </option>
                        <option value="su">Sundanese</option>
                        <option value="sw">Swahili - Kiswahili</option>
                        <option value="sv">Swedish - svenska</option>
                        <option value="tg">Tajik - тоҷикӣ</option>
                        <option value="ta">Tamil - தமிழ்</option>
                        <option value="tt">Tatar</option>
                        <option value="te">Telugu - తెలుగు</option>
                        <option value="th">Thai - ไทย</option>
                        <option value="ti">Tigrinya - ትግርኛ</option>
                        <option value="to">Tongan - lea fakatonga</option>
                        <option value="tr">Turkish - Türkçe</option>
                        <option value="tk">Turkmen</option>
                        <option value="tw">Twi</option>
                        <option value="uk">Ukrainian - українська</option>
                        <option value="ur">Urdu - اردو</option>
                        <option value="ug">Uyghur</option>
                        <option value="uz">Uzbek - o‘zbek</option>
                        <option value="vi">Vietnamese - Tiếng Việt</option>
                        <option value="wa">Walloon - wa</option>
                        <option value="cy">Welsh - Cymraeg</option>
                        <option value="fy">Western Frisian</option>
                        <option value="xh">Xhosa</option>
                        <option value="yi">Yiddish</option>
                        <option value="yo">Yoruba - Èdè Yorùbá</option>
                        <option value="zu">Zulu - isiZulu</option>
                    </select>
                </div>
            </div>
            <div>
                <label
                    for="EmergencyCallPhone"
                    class="block text-sm font-medium text-gray-700"
                    >Emergency Call Phone</label
                >
                <div class="mt-1">
                    <input
                        type="text"
                        name="EmergencyCallPhone"
                        id="EmergencyCallPhone"
                        class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        v-model="form.EmergencyCallPhone"
                    />
                </div>
            </div>
            <div>
                <label
                    for="HomeInstitutionName"
                    class="block text-sm font-medium text-gray-700"
                    >Home Institution Name</label
                >
                <div class="mt-1">
                    <input
                        type="text"
                        name="HomeInstitutionName"
                        id="HomeInstitutionName"
                        class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        v-model="form.HomeInstitutionName"
                    />
                </div>
            </div>
            <div>
                <label
                    for="HomeInstitutionAdress"
                    class="block text-sm font-medium text-gray-700"
                    >Home Institution Adress</label
                >
                <div class="mt-1">
                    <input
                        type="text"
                        name="HomeInstitutionAdress"
                        id="HomeInstitutionAdress"
                        class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        v-model="form.HomeInstitutionAdress"
                    />
                </div>
            </div>
            <div>
                <label
                    for="HomeInstitutionCountry"
                    class="block text-sm font-medium text-gray-700"
                    >Home Institution Country</label
                >
                <div class="mt-1">
                    <input
                        type="text"
                        name="HomeInstitutionCountry"
                        id="HomeInstitutionCountry"
                        class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        v-model="form.HomeInstitutionCountry"
                    />
                </div>
            </div>
            <div>
                <label
                    for="DepartementCoordinatorName"
                    class="block text-sm font-medium text-gray-700"
                    >Departement Coordinator Name</label
                >
                <div class="mt-1">
                    <input
                        type="text"
                        name="DepartementCoordinatorName"
                        id="DepartementCoordinatorName"
                        class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        v-model="form.DepartementCoordinatorName"
                    />
                </div>
            </div>
            <div>
                <label
                    for="DepartementCoordinatorPhone"
                    class="block text-sm font-medium text-gray-700"
                    >Departement Coordinator Phone</label
                >
                <div class="mt-1">
                    <input
                        type="text"
                        name="DepartementCoordinatorPhone"
                        id="DepartementCoordinatorPhone"
                        class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        v-model="form.DepartementCoordinatorPhone"
                    />
                </div>
            </div>
            <div>
                <label
                    for="DepartementCoordinatorFax"
                    class="block text-sm font-medium text-gray-700"
                    >Departement Coordinator Fax</label
                >
                <div class="mt-1">
                    <input
                        type="text"
                        name="DepartementCoordinatorFax"
                        id="DepartementCoordinatorFax"
                        class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        v-model="form.DepartementCoordinatorFax"
                    />
                </div>
            </div>
            <div>
                <label
                    for="DepartementCoordinatorEmail"
                    class="block text-sm font-medium text-gray-700"
                    >Departement Coordinator Email</label
                >
                <div class="mt-1">
                    <input
                        type="text"
                        name="DepartementCoordinatorEmail"
                        id="DepartementCoordinatorEmail"
                        class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        v-model="form.DepartementCoordinatorEmail"
                    />
                </div>
            </div>
            <div>
                <label
                    for="InstitutionalCoordinatorName"
                    class="block text-sm font-medium text-gray-700"
                    >Institutional Coordinator Name</label
                >
                <div class="mt-1">
                    <input
                        type="text"
                        name="InstitutionalCoordinatorName"
                        id="InstitutionalCoordinatorName"
                        class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        v-model="form.InstitutionalCoordinatorName"
                    />
                </div>
            </div>
            <div>
                <label
                    for="InstitutionalCoordinatorPhone"
                    class="block text-sm font-medium text-gray-700"
                    >Institutional Coordinator Phone</label
                >
                <div class="mt-1">
                    <input
                        type="text"
                        name="InstitutionalCoordinatorPhone"
                        id="InstitutionalCoordinatorPhone"
                        class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        v-model="form.InstitutionalCoordinatorPhone"
                    />
                </div>
            </div>
            <div>
                <label
                    for="InstitutionalCoordinatorFax"
                    class="block text-sm font-medium text-gray-700"
                    >Institutional Coordinator Fax</label
                >
                <div class="mt-1">
                    <input
                        type="text"
                        name="InstitutionalCoordinatorFax"
                        id="InstitutionalCoordinatorFax"
                        class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        v-model="form.InstitutionalCoordinatorFax"
                    />
                </div>
            </div>
            <div>
                <label
                    for="InstitutionalCoordinatorEmail"
                    class="block text-sm font-medium text-gray-700"
                    >Institutional Coordinator Email</label
                >
                <div class="mt-1">
                    <input
                        type="text"
                        name="InstitutionalCoordinatorEmail"
                        id="InstitutionalCoordinatorEmail"
                        placeholder="institutionalCoordinatorEmail@outlook.com"
                        class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        v-model="form.InstitutionalCoordinatorEmail"
                    />
                </div>
            </div>
            <div>
                <label
                    for="ExchangeProgram"
                    class="block text-sm font-medium text-gray-700"
                    >Exchange Program</label
                >
                <div class="mt-1">
                    <input
                        type="text"
                        name="ExchangeProgram"
                        id="ExchangeProgram"
                        class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        v-model="form.ExchangeProgram"
                    />
                </div>
            </div>

            <div class="form-group col-md-4">
                <label
                    class="block text-sm font-medium text-gray-700"
                    for="DoubleDegree"
                    >DoubleDegree</label
                >
                <select
                    class="form-control"
                    id="DoubleDegree"
                    v-model="form.DoubleDegree"
                >
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div>
                <label
                    for="AppDepartment"
                    class="block text-sm font-medium text-gray-700"
                    >Application Department</label
                >
                <div class="mt-1">
                    <input
                        type="text"
                        name="AppDepartment"
                        id="AppDepartment"
                        class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        v-model="form.AppDepartment"
                    />
                </div>
            </div>
            <div>
                <label
                    for="AppProgram"
                    class="block text-sm font-medium text-gray-700"
                    >Application Program</label
                >
                <div class="mt-1">
                    <input
                        type="text"
                        name="AppProgram"
                        id="AppProgram"
                        class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        v-model="form.AppProgram"
                    />
                </div>
            </div>
            <div>
                <label
                    for="AppSubject"
                    class="block text-sm font-medium text-gray-700"
                    >Application Subject</label
                >
                <div class="mt-1">
                    <input
                        type="text"
                        name="AppSubject"
                        id="AppSubject"
                        class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        v-model="form.AppSubject"
                    />
                </div>
            </div>
            <div>
                <label
                    for="AppAdditionalInfo"
                    class="block text-sm font-medium text-gray-700"
                    >Application Additional Info</label
                >
                <div class="mt-1">
                    <input
                        type="text"
                        name="AppAdditionalInfo"
                        id="AppAdditionalInfo"
                        class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        v-model="form.AppAdditionalInfo"
                    />
                </div>
            </div>

            <div class="form-group col-md-4">
                <label
                    class="block text-sm font-medium text-gray-700"
                    for="AppStudentDormitory"
                    >App Student Dormitory</label
                >
                <select
                    class="form-control"
                    id="AppStudentDormitory"
                    v-model="form.AppStudentDormitory"
                >
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div>
                <label
                    for="CurrentStudies"
                    class="block text-sm font-medium text-gray-700"
                    >Current Studies</label
                >
                <div class="mt-1">
                    <input
                        type="text"
                        name="CurrentStudies"
                        id="CurrentStudies"
                        class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        v-model="form.CurrentStudies"
                    />
                </div>
            </div>
            <div>
                <label
                    for="FieldStudies"
                    class="block text-sm font-medium text-gray-700"
                    >Field Of Studies</label
                >
                <div class="mt-1">
                    <input
                        type="text"
                        name="FieldStudies"
                        id="FieldStudies"
                        class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        v-model="form.FieldStudies"
                    />
                </div>
            </div>

            <div class="col">
                <div class="form-group col-md-4">
                    <label
                        class="block text-sm font-medium text-gray-700"
                        for="NumberYearsCompleted"
                        >NumberYearsCompleted</label
                    >
                    <select
                        class="form-control"
                        id="NumberYearsCompleted"
                        v-model="form.NumberYearsCompleted"
                    >
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
            </div>

            <div>
                <label
                    for="InstructionLanguage"
                    class="block text-sm font-medium text-gray-700"
                    >Instruction Language</label
                >
                <div class="mt-1">
                    <input
                        type="text"
                        name="InstructionLanguage"
                        id="InstructionLanguage"
                        class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        v-model="form.InstructionLanguage"
                    />
                </div>
            </div>
            <div class="col">
                <div class="form-group col-md-4">
                    <label
                        class="block text-sm font-medium text-gray-700"
                        for="LanguageKnown1"
                        >Language Known</label
                    >
                    <select
                        class="form-control"
                        id="LanguageKnown1"
                        v-model="form.LanguageKnown1"
                    >
                        <option value="Eng">English</option>
                        <option value="Fr">French</option>
                        <option value="Ar">Arabic</option>
                        <option value="Ger">German</option>
                    </select>

                    <div class="form-group col-md-4">
                        <label
                            class="block text-sm font-medium text-gray-700"
                            for="LanguageLevel1"
                            >Language Level</label
                        >
                        <select
                            class="form-control"
                            id="LanguageLevel1"
                            v-model="form.LanguageLevel1"
                        >
                            <option value="A1">A1</option>
                            <option value="A2">A2</option>
                            <option value="B1">B1</option>
                            <option value="B2">B2</option>
                            <option value="C1">C1</option>
                            <option value="C2">C2</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-group col-md-4">
                <label
                    for="LanguageKnown2"
                    class="block text-sm font-medium text-gray-700"
                    >Language Known</label
                >
                <select
                    id="LanguageKnown2"
                    class="form-control"
                    v-model="form.LanguageKnown2"
                >
                    <option value="Eng">English</option>
                    <option value="Fr">French</option>
                    <option value="Ar">Arabic</option>
                    <option value="Ger">German</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label
                    for="LanguageLevel2"
                    class="block text-sm font-medium text-gray-700"
                    >Language Level</label
                >
                <select
                    id="LanguageLevel2"
                    class="form-control"
                    v-model="form.LanguageLevel2"
                >
                    <option value="A1">A1</option>
                    <option value="A2">A2</option>
                    <option value="B1">B1</option>
                    <option value="B2">B2</option>
                    <option value="C1">C1</option>
                    <option value="C2">C2</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label
                    for="LanguageKnown3"
                    class="block text-sm font-medium text-gray-700"
                    >Language Known</label
                >
                <select
                    id="LanguageKnown3"
                    class="form-control"
                    v-model="form.LanguageKnown3"
                >
                    <option value="Eng">English</option>
                    <option value="Fr">French</option>
                    <option value="Ar">Arabic</option>
                    <option value="Ger">German</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label
                    for="LanguageLevel3"
                    class="block text-sm font-medium text-gray-700"
                    >Language Level</label
                >
                <select
                    id="LanguageLevel3"
                    class="form-control"
                    v-model="form.LanguageLevel3"
                >
                    <option value="A1">A1</option>
                    <option value="A2">A2</option>
                    <option value="B1">B1</option>
                    <option value="B2">B2</option>
                    <option value="C1">C1</option>
                    <option value="C2">C2</option>
                </select>
            </div>
            <div>
                <label
                    for="ProposedStudyPlanCode"
                    class="block text-sm font-medium text-gray-700"
                    >Proposed Study Plan Code</label
                >
                <div class="mt-1">
                    <input
                        type="number"
                        name="ProposedStudyPlanCode"
                        id="ProposedStudyPlanCode"
                        class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        v-model="form.ProposedStudyPlanCode"
                    />
                </div>
            </div>
            <div>
                <label
                    for="ProposedStudyPlanName"
                    class="block text-sm font-medium text-gray-700"
                    >Proposed Study Plan Name</label
                >
                <div class="mt-1">
                    <input
                        type="text"
                        name="ProposedStudyPlanName"
                        id="ProposedStudyPlanName"
                        class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        v-model="form.ProposedStudyPlanName"
                    />
                </div>
            </div>
            <div>
                <label
                    for="ProposedStudyPlanECTS"
                    class="block text-sm font-medium text-gray-700"
                    >Proposed Study Plan ECTS</label
                >
                <div class="mt-1">
                    <input
                        type="text"
                        name="ProposedStudyPlanECTS"
                        id="ProposedStudyPlanECTS"
                        class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        v-model="form.ProposedStudyPlanECTS"
                    />
                </div>
            </div>
            <div>
                <label
                    for="AdditionalData"
                    class="block text-sm font-medium text-gray-700"
                    >Additional Data</label
                >
                <div class="mt-1">
                    <textarea
                        type="text"
                        name="AdditionalData"
                        id="AdditionalData"
                        class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        v-model="form.AdditionalData"
                    />
                </div>
            </div>
            <div>
                <div>
                    <label
                        for="file"
                        class="block text-sm font-medium text-gray-700"
                        >Data File</label
                    >
                    <div class="mt-1">
                        <input
                            type="file"
                            name="file"
                            id="file"
                            class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        />
                        <br />
                    </div>
                </div>
            </div>
        </div>

        <button
            type="submit"
            class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-white uppercase bg-gray-800 rounded-md border border-transparent ring-gray-300 transition duration-150 ease-in-out hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring disabled:opacity-25"
        >
            Create
        </button>
    </form>
</template>
<script>
import { reactive } from "vue";
import useCandidatures from "../../composables/candidatures";
export default {
    setup() {
        const form = reactive({
            StudentId: "",
            PersonalId: "",
            MobilityType: "",
            ExchangeDuration: "",
            LastName: "",
            DateOfBirth: "",
            Gender: "",
            Nationality: "",
            NativeLanguage: "",
            PostalAdress: "",
            Phone: "",
            Email: "",
            EmergencyCallName: "",
            EmergencyCallAdress: "",
            EmergencyCallLanguage: "",
            EmergencyCallPhone: "",
            HomeInstitutionName: "",
            HomeInstitutionAdress: "",
            HomeInstitutionCountry: "",
            DepartementCoordinatorName: "",
            DepartementCoordinatorPhone: "",
            DepartementCoordinatorFax: "",
            DepartementCoordinatorEmail: "",
            InstitutionalCoordinatorName: "",
            InstitutionalCoordinatorPhone: "",
            InstitutionalCoordinatorFax: "",
            InstitutionalCoordinatorEmail: "",
            ExchangeProgram: "",
            DoubleDegree: "",
            AppDepartment: "",
            AppProgram: "",
            AppSubject: "",
            AppAdditionalInfo: "",
            AppStudentDormitory: "",
            CurrentStudies: "",
            FieldStudies: "",
            NumberYearsCompleted: "",
            InstructionLanguage: "",
            LanguageKnown1: "",
            LanguageLevel1: "",
            LanguageKnown2: "",
            LanguageLevel2: "",
            LanguageKnown3: "",
            LanguageLevel3: "",
            ProposedStudyPlanCode: "",
            ProposedStudyPlanName: "",
            ProposedStudyPlanECTS: "",
            AdditionalData: "",
            file: "",
        });
        const { errors, storeCandidature } = useCandidatures();

        const saveCandidature = async () => {
            await storeCandidature({ ...form });
        };

        return {
            form,
            errors,
            saveCandidature,
        };
    },
};
</script>
