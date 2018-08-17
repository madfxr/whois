<?php
    $domain = $_GET['domain'];
    // For the full list of TLDs/Whois servers see http://www.iana.org/domains/root/db/ and http://www.whois365.com/en/listtld/
    $whoisservers = array(
        "ac" => "whois.nic.ac", // Ascension Island
        "academy" => "whois.donuts.co", // –
        "accountants" => "whois.donuts.co", // –
        "active" => "whois.afilias-srs.net", // –
        "actor" => "whois.unitedtld.com", // –
        "ae" => "whois.aeda.net.ae", // United Arab Emirates
        "aero" => "whois.aero", // –
        "af" => "whois.nic.af", // Afghanistan
        "ag" => "whois.nic.ag", // Antigua And Barbuda
        "agency" => "whois.donuts.co", // –
        "ai" => "whois.ai", // Anguilla
        "airforce" => "whois.unitedtld.com", // –
        "am" => "whois.amnic.net", // Armenia
        "archi" => "whois.ksregistry.net", // –
        "army" => "whois.rightside.co", // –
        "arpa" => "whois.iana.org", // –
        "as" => "whois.nic.as", // American Samoa
        "asia" => "whois.nic.asia", // –
        "associates" => "whois.donuts.co", // –
        "at" => "whois.nic.at", // Austria
        "attorney" => "whois.rightside.co", // –
        "au" => "whois.audns.net.au", // Australia
        "auction" => "whois.donuts.co", // –
        "audio" => "whois.uniregistry.net", // –
        "autos" => "whois.afilias-srs.net", // –
        "aw" => "whois.nic.aw", // Aruba
        "ax" => "whois.ax", // Åland Islands
        "bar" => "whois.nic.bar", // –
        "bargains" => "whois.donuts.co", // –
        "bayern" => "whois-dub.mm-registry.com", // –
        "be" => "whois.dns.be", // Belgium
        "beer" => "whois-dub.mm-registry.com", // –
        "berlin" => "whois.nic.berlin", // –
        "best" => "whois.nic.best", // –
        "bg" => "whois.register.bg", // Bulgaria
        "bike" => "whois.donuts.co", // –
        "bio" => "whois.ksregistry.net", // –
        "bi" => "whois1.nic.bi", // Burundi
        "black" => "whois.afilias.net", // –
        "blackfriday" => "whois.uniregistry.net", // –
        "blue" => "whois.afilias.net", // –
        "biz" => "whois.biz", // –
        "bj" => "whois.nic.bj", // Benin
        "bmw" => "whois.ksregistry.net", // –
        "bn" => "whois.bn", // Brunei Darussalam
        "bo" => "whois.nic.bo", // Bolivia
        "boutique" => "whois.donuts.co", // –
        "br" => "whois.registro.br", // Brazil
        "brussels" => "whois.nic.brussels", // –
        "build" => "whois.nic.build", // –
        "builders" => "whois.donuts.co", // –
        "bw" => "whois.nic.net.bw", // Botswana
        "bzh" => "whois-bzh.nic.fr", // –
        "ca" => "whois.cira.ca", // Canada
        "cab" => "whois.donuts.co", // –
        "camera" => "whois.donuts.co", // –
        "camp" => "whois.donuts.co", // –
        "cancerresearch" => "whois.nic.cancerresearch", // –
        "capetown" => "apetown-whois.registry.net.za", // –
        "capital" => "whois.donuts.co", // –
        "cards" => "whois.donuts.co", // –
        "care" => "whois.donuts.co", // –
        "career" => "whois.nic.career", // –
        "careers" => "whois.donuts.co", // –
        "cash" => "whois.donuts.co", // –
        "cat" => "whois.cat", // –
        "catering" => "whois.donuts.co", // –
        "center" => "whois.donuts.co", // –
        "ceo" => "whois.nic.ceo", // –
        "cf" => "whois.dot.cf", // Central African Republic
        "ch" => "whois.nic.ch", // Switzerland
        "cheap" => "whois.donuts.co", // –
        "christmas" => "whois.uniregistry.net", // –
        "church" => "whois.donuts.co", // –
        "ci" => "whois.nic.ci", // Cote d’Ivoire
        "city" => "whois.donuts.co", // –
        "cl" => "whois.nic.cl", // Chile
        "claims" => "whois.donuts.co", // –
        "cleaning" => "whois.donuts.co", // –
        "clinic" => "whois.donuts.co", // –
        "clothing" => "whois.donuts.co", // –
        "club" => "whois.nic.club", // –
        "cn" => "whois.cnnic.cn", // China
        "co" => "whois.nic.co", // Colombia
        "codes" => "whois.donuts.co", // –
        "coffee" => "whois.donuts.co", // –
        "college" => "whois.centralnic.com", // –
        "cologne" => "whois-fe1.pdt.cologne.tango.knipp.de", // –
        "com" => "whois.verisign-grs.com", // –
        "community" => "whois.donuts.co", // –
        "company" => "whois.donuts.co", // –
        "computer" => "whois.donuts.co", // –
        "condos" => "whois.donuts.co", // –
        "construction" => "whois.donuts.co", // –
        "consulting" => "whois.unitedtld.com", // –
        "contractors" => "whois.donuts.co", // –
        "cooking" => "whois-dub.mm-registry.com", // –
        "cool" => "whois.donuts.co", // –
        "country" => "whois-dub.mm-registry.com", // –
        "credit" => "whois.donuts.co", // –
        "creditcard" => "whois.donuts.co", // –
        "cruises" => "whois.donuts.co", // –
        "coop" => "whois.nic.coop", // –
        "cuisinella" => "whois.nic.cuisinella", // –
        "cx" => "whois.nic.cx", // Christmas Island
        "cz" => "whois.nic.cz", // Czech Republic
        "dance" => "whois.unitedtld.com", // –
        "dating" => "whois.donuts.co", // –
        "de" => "whois.denic.de", // Germany
        "deals" => "whois.donuts.co", // –
        "dental" => "whois.donuts.co", // –
        "degree" => "whois.unitedtld.com", // –
        "democrat" => "whois.unitedtld.com", // –
        "dentist" => "whois.unitedtld.com", // –
        "desi" => "whois.ksregistry.net", // –
        "diamonds" => "whois.donuts.co", // –
        "digital" => "whois.donuts.co", // –
        "direct" => "whois.donuts.co", // –
        "directory" => "whois.donuts.co", // –
        "discount" => "whois.donuts.co", // –
        "dk" => "whois.dk-hostmaster.dk", // Denmark
        "dm" => "whois.nic.dm", // Dominica
        "domains" => "whois.donuts.co", // –
        "durban" => "durban-whois.registry.net.za", // –
        "dz" => "whois.nic.dz", // Algeria
        "edu" => "whois.educause.edu", // –
        "ec" => "whois.nic.ec", // Ecuador
        "education" => "whois.donuts.co", // –
        "ee" => "whois.tld.ee", // Estonia
        "engineer" => "whois.rightside.co", // –
        "email" => "whois.donuts.co", // –
        "engineering" => "whois.donuts.co", // –
        "enterprises" => "whois.donuts.co", // –
        "equipment" => "whois.donuts.co", // –
        "estate" => "whois.donuts.co", // –
        "es" => "whois.nic.es", // Spain
        "eu" => "whois.eu", // Europe
        "eus" => "whois.eus.coreregistry.net", // –
        "events" => "whois.donuts.co", // –
        "exchange" => "whois.donuts.co", // –
        "expert" => "whois.donuts.co", // –
        "exposed" => "whois.donuts.co", // –
        "fail" => "whois.donuts.co", // –
        "farm" => "whois.donuts.co", // –
        "feedback" => "whois.centralnic.com", // –
        "fi" => "whois.ficora.fi", // Finland
        "finance" => "whois.donuts.co", // –
        "financial" => "whois.donuts.co", // –
        "fish" => "whois.donuts.co", // –
        "fitness" => "whois.donuts.co", // –
        "fishing" => "whois-dub.mm-registry.com", // –
        "flights" => "whois.donuts.co", // –
        "florist" => "whois.donuts.co", // –
        "fo" => "whois.nic.fo", // Faroe Islands
        "foo" => "domain-registry-whois.l.google.com", // –
        "foundation" => "whois.donuts.co", // –
        "fr" => "whois.nic.fr", // France
        "frogans" => "whois-frogans.nic.fr", // –
        "fund" => "whois.donuts.co", // –
        "furniture" => "whois.donuts.co", // –
        "futbol" => "whois.unitedtld.com", // –
        "gal" => "whois.gal.coreregistry.net", // –
        "gallery" => "whois.donuts.co", // –
        "gd" => "whois.adamsnames.com", // Grenada
        "gent" => "whois.nic.gent", // –
        "gg" => "whois.gg", // Guernsey
        "gi" => "whois2.afilias-grs.net", // Gibraltar
        "gift" => "whois.uniregistry.net", // –
        "gives" => "whois.rightside.co", // –
        "gl" => "whois.nic.gl", // Greenland
        "glass" => "whois.donuts.co", // –
        "global" => "whois.afilias-srs.net", // –
        "globo" => "whois.gtlds.nic.br", // –
        "gop" => "whois-cl01.mm-registry.com", // –
        "gov" => "whois.dotgov.gov", // –
        "graphics" => "whois.donuts.co", // –
        "gratis" => "whois.donuts.co", // –
        "green" => "whois.afilias.net", // –
        "gripe" => "whois.donuts.co", // –
        "gs" => "whois.nic.gs", // South Georgia And The South Sandwich Islands
        "guide" => "whois.donuts.co", // –
        "guitars" => "whois.uniregistry.net", // –
        "guru" => "whois.donuts.co", // –
        "gy" => "whois.registry.gy", // Guyana
        "hamburg" => "whois.nic.hamburg", // –
        "haus" => "whois.unitedtld.com", // –
        "healthcare" => "whois.donuts.co", // –
        "hiphop" => "whois.uniregistry.net", // –
        "hiv" => "whois.afilias-srs.net", // –
        "hk" => "whois.hkirc.hk", // Hong Kong
        "hn" => "whois2.afilias-grs.net", // Honduras
        "holdings" => "whois.donuts.co", // –
        "holiday" => "whois.donuts.co", // –
        "home" => "whois.afilias-srs.net", // –
        "horse" => "whois-dub.mm-registry.com", // –
        "host" => "whois.centralnic.com", // –
        "house" => "whois.donuts.co", // –
        "hr" => "whois.dns.hr", // Croatia
        "ht" => "whois.nic.ht", // Haiti
        "id" => "whois.pandi.or.id", // Indonesia
        "ie" => "whois.domainregistry.ie", // Ireland
        "il" => "whois.isoc.org.il", // Israel
        "im" => "whois.nic.im", // Isle of Man
        "immobilien" => "whois.unitedtld.com", // –
        "in" => "whois.inregistry.net", // India
        "industries" => "whois.donuts.co", // –
        "ink" => "whois.centralnic.com", // –
        "institute" => "whois.donuts.co", // –
        "insure" => "whois.donuts.co", // –
        "int" => "whois.iana.org", // –
        "international" => "whois.donuts.co", // –
        "investments" => "whois.donuts.co", // –
        "info" => "whois.afilias.net", // –
        "io" => "whois.nic.io", // British Indian Ocean Territory
        "iq" => "whois.cmc.iq", // Iraq
        "ir" => "whois.nic.ir", // Islamic Republic Of Iran
        "is" => "whois.isnic.is", // Iceland
        "it" => "whois.nic.it", // Italy
        "je" => "whois.je", // Jersey
        "jobs" => "jobswhois.verisign-grs.com", // –
        "joburg" => "joburg-whois.registry.net.za", // –
        "jp" => "whois.jprs.jp", // Japan
        "juegos" => "whois.uniregistry.net", // –
        "kaufen" => "whois.unitedtld.com", // –
        "ke" => "whois.kenic.or.ke", // Kenia
        "kg" => "whois.domain.kg", // Kyrgyzstan
        "ki" => "whois.nic.ki", // Kiribati
        "kim" => "whois.afilias.net", // –
        "kitchen" => "whois.donuts.co", // –
        "kiwi" => "whois.dot-kiwi.com", // –
        "koeln" => "whois-fe1.pdt.koeln.tango.knipp.de", // –
        "krd" => "whois.aridnrs.net.au", // –
        "kr" => "whois.kr", // Republic Of Korea
        "kz" => "whois.nic.kz", // Kazakhstan
        "la" => "whois.nic.la", // People’s Democratic Republic Lao
        "lacaixa" => "whois.nic.lacaixa", // –
        "land" => "whois.donuts.co", // –
        "lawyer" => "whois.rightside.co", // –
        "lease" => "whois.donuts.co", // –
        "lgbt" => "whois.afilias.net", // –
        "li" => "whois.nic.li", // Liechtenstein
        "life" => "whois.donuts.co", // –
        "lighting" => "whois.donuts.co", // –
        "limited" => "whois.donuts.co", // –
        "limo" => "whois.donuts.co", // –
        "link" => "whois.uniregistry.net", // –
        "loans" => "whois.donuts.co", // –
        "london" => "whois-lon.mm-registry.com", // –
        "lotto" => "whois.afilias.net", // –
        "lt" => "whois.domreg.lt", // Lithuania
        "lu" => "whois.dns.lu", // Luxembourg
        "luxe" => "whois-dub.mm-registry.com", // –
        "luxury" => "whois.nic.luxury", // –
        "lv" => "whois.nic.lv", // Latvia
        "ly" => "whois.nic.ly", // Libya
        "ma" => "whois.iam.net.ma", // Morocco
        "maison" => "whois.donuts.co", // –
        "management" => "whois.donuts.co", // –
        "mango" => "whois.mango.coreregistry.net", // –
        "market" => "whois.rightside.co", // –
        "marketing" => "whois.donuts.co", // –
        "md" => "whois.nic.md", // Republic Of Moldova
        "me" => "whois.nic.me", // Montenegro
        "media" => "whois.donuts.co", // –
        "meet" => "whois.afilias.net", // –
        "melbourne" => "whois.aridnrs.net.au", // –
        "menu" => "whois.nic.menu", // –
        "mg" => "whois.nic.mg", // Madagascar
        "miami" => "whois-dub.mm-registry.com", // –
        "mini" => "whois.ksregistry.net", // –
        "mk" => "whois.marnet.mk", // The Former Yugoslav Republic Of Macedonia
        "ml" => "whois.dot.ml", // Mali
        "mn" => "whois.nic.mn", // Mongolia
        "mo" => "whois.monic.mo", // Macao
        "mobi" => "whois.dotmobiregistry.net", // –
        "moda" => "whois.unitedtld.com", // –
        "monash" => "whois.nic.monash", // –
        "mortgage" => "whois.rightside.co", // –
        "moscow" => "whois.nic.moscow", // –
        "motorcycles" => "whois.afilias-srs.net", // –
        "mp" => "whois.nic.mp", // Northern Mariana Islands
        "ms" => "whois.nic.ms", // Montserrat
        "mu" => "whois.nic.mu", // Mauritius
        "museum" => "whois.museum", // –
        "mx" => "whois.mx", // Mexico
        "my" => "whois.mynic.my", // Malaysia
        "na" => "whois.na-nic.com.na", // Namibia
        "name" => "whois.nic.name", // –
        "navy" => "whois.rightside.co", // –
        "nc" => "whois.nc", // New Caledonia
        "net" => "whois.verisign-grs.com", // –
        "nf" => "whois.nic.nf", // Norfolk Island
        "ng" => "whois.nic.net.ng", // Nigeria
        "ngo" => "whois.publicinterestregistry.net", // –
        "ninja" => "whois.unitedtld.com", // –
        "nl" => "whois.domain-registry.nl", // The Netherlands
        "no" => "whois.norid.no", // Norway
        "nra" => "whois.afilias-srs.net", // –
        "nrw" => "whois-fe1.pdt.nrw.tango.knipp.de", // –
        "nu" => "whois.iis.nu", // Niue
        "nz" => "whois.srs.net.nz", // New Zealand
        "om" => "whois.registry.om", // Oman
        "onl" => "whois.afilias-srs.net", // –
        "org" => "whois.pir.org", // –
        "organic" => "whois.afilias.net", // –
        "ovh" => "whois-ovh.nic.fr", // –
        "paris" => "whois-paris.nic.fr", // –
        "partners" => "whois.donuts.co", // –
        "parts" => "whois.donuts.co", // –
        "pe" => "kero.yachay.pe", // Peru
        "pf" => "whois.registry.pf", // French Polynesia
        "photo" => "whois.uniregistry.net", // –
        "photography" => "whois.donuts.co", // –
        "photos" => "whois.donuts.co", // –
        "physio" => "whois.nic.physio", // –
        "pics" => "whois.uniregistry.net", // –
        "pictures" => "whois.donuts.co", // –
        "pink" => "whois.afilias.net", // –
        "pl" => "whois.dns.pl", // Poland
        "place" => "whois.donuts.co", // –
        "plumbing" => "whois.donuts.co", // –
        "pm" => "whois.nic.pm", // Saint Pierre and Miquelon
        "post" => "whois.dotpostregistry.net", // –
        "pr" => "whois.nic.pr", // Puerto Rico
        "press" => "whois.centralnic.com", // –
        "pro" => "whois.dotproregistry.net", // –
        "productions" => "whois.donuts.co", // –
        "properties" => "whois.donuts.co", // –
        "pt" => "whois.dns.pt", // Portugal
        "pub" => "whois.unitedtld.com", // –
        "pw" => "whois.nic.pw", // Palau
        "qa" => "whois.registry.qa", // Qatar
        "quebec" => "whois.quebec.rs.corenic.net", // –
        "re" => "whois.nic.re", // Réunion
        "recipes" => "whois.donuts.co", // –
        "red" => "whois.afilias.net", // –
        "rehab" => "whois.rightside.co", // –
        "reise" => "whois.nic.reise", // –
        "reisen" => "whois.donuts.co", // –
        "rentals" => "whois.donuts.co", // –
        "repair" => "whois.donuts.co", // –
        "report" => "whois.donuts.co", // –
        "republican" => "whois.rightside.co", // –
        "rest" => "whois.centralnic.com", // –
        "review" => "whois.unitedtld.com", // –
        "rich" => "whois.afilias-srs.net", // –
        "rio" => "whois.gtlds.nic.br", // –
        "ro" => "whois.rotld.ro", // Romania
        "rocks" => "whois.unitedtld.com", // –
        "rodeo" => "whois-dub.mm-registry.com", // –
        "rs" => "whois.rnids.rs", // Serbia
        "ru" => "whois.tcinet.ru", // Russian Federation
        "ruhr" => "whois.nic.ruhr", // –
        "sa" => "whois.nic.net.sa", // Saudi Arabia
        "saarland" => "whois.ksregistry.net", // –
        "sb" => "whois.nic.net.sb", // Solomon Islands
        "sc" => "whois2.afilias-grs.net", // Seychelles
        "scb" => "whois.nic.scb", // –
        "schmidt" => "whois.nic.schmidt", // –
        "schule" => "whois.donuts.co", // –
        "scot" => "whois.scot.coreregistry.net", // –
        "se" => "whois.iis.se", // Sweden
        "services" => "whois.donuts.co", // –
        "sexy" => "whois.uniregistry.net", // –
        "sg" => "whois.sgnic.sg", // Singapore
        "sh" => "whois.nic.sh", // Ascension And Tristan Da Cunha Saint Helena
        "shiksha" => "whois.afilias.net", // –
        "shoes" => "whois.donuts.co", // –
        "si" => "whois.arnes.si", // Slovenia
        "singles" => "whois.donuts.co", // –
        "sk" => "whois.sk-nic.sk", // Slovakia
        "sm" => "whois.nic.sm", // San Marino
        "sn" => "whois.nic.sn", // Senegal
        "so" => "whois.nic.so", // Somalia
        "social" => "whois.unitedtld.com", // –
        "software" => "whois.rightside.co", // –
        "solar" => "whois.donuts.co", // –
        "solutions" => "whois.donuts.co", // –
        "soy" => "domain-registry-whois.l.google.com", // –
        "space" => "whois.nic.space", // –
        "spiegel" => "whois.ksregistry.net", // –
        "st" => "whois.nic.st", // Sao Tome And Principe
        "su" => "whois.tcinet.ru", // Soviet Union
        "supplies" => "whois.donuts.co", // –
        "supply" => "whois.donuts.co", // –
        "support" => "whois.donuts.co", // –
        "surf" => "whois-dub.mm-registry.com", // –
        "surgery" => "whois.donuts.co", // –
        "sx" => "whois.sx", // Sint Maarten
        "sy" => "whois.tld.sy", // Syrian Arab Republic
        "systems" => "whois.donuts.co", // –
        "tattoo" => "whois.uniregistry.net", // –
        "tax" => "whois.donuts.co", // –
        "tc" => "whois.meridiantld.net", // Turks And Caicos Islands
        "technology" => "whois.donuts.co", // –
        "tel" => "whois.nic.tel", // –
        "tf" => "whois.nic.tf", // French Southern and Antarctic Lands
        "th" => "whois.thnic.co.th", // Thailand
        "tienda" => "whois.donuts.co", // –
        "tips" => "whois.donuts.co", // –
        "tirol" => "whois.nic.tirol", // –
        "tk" => "whois.dot.tk", // Tokelau
        "tl" => "whois.nic.tl", // Timor-leste
        "tm" => "whois.nic.tm", // Turkmenistan
        "tn" => "whois.ati.tn", // Tunisia
        "to" => "whois.tonic.to", // Tonga
        "today" => "whois.donuts.co", // –
        "tools" => "whois.donuts.co", // –
        "top" => "whois.nic.top", // –
        "town" => "whois.donuts.co", // –
        "toys" => "whois.donuts.co", // –
        "tr" => "whois.nic.tr", // Turkey
        "training" => "whois.donuts.co", // –
        "travel" => "whois.nic.travel", // –
        "tv" => "tvwhois.verisign-grs.com", // Tuvalu
        "tw" => "whois.twnic.net.tw", // Taiwan
        "tz" => "whois.tznic.or.tz", // United Republic Of Tanzania
        "ua" => "whois.ua", // Ukraine
        "ug" => "whois.co.ug", // Uganda
        "uk" => "whois.nic.uk", // United Kingdom
        "university" => "whois.donuts.co", // –
        "us" => "whois.nic.us", // United States of America
        "uy" => "whois.nic.org.uy", // Uruguay
        "uz" => "whois.cctld.uz", // Uzbekistan
        "vacations" => "whois.donuts.co", // –
        "vc" => "whois2.afilias-grs.net", // Saint Vincent And The Grenadines
        "ve" => "whois.nic.ve", // Bolivarian Republic Of Venezuela
        "vegas" => "whois.afilias-srs.net", // –
        "ventures" => "whois.donuts.co", // –
        "versicherung" => "whois.nic.versicherung", // –
        "vet" => "whois.rightside.co", // –
        "vg" => "ccwhois.ksregistry.net", // British Virgin Islands
        "viajes" => "whois.donuts.co", // –
        "villas" => "whois.donuts.co", // –
        "vision" => "whois.donuts.co", // –
        "vlaanderen" => "whois.nic.vlaanderen", // –
        "vodka" => "whois-dub.mm-registry.com", // –
        "vote" => "whois.afilias.net", // –
        "voting" => "whois.voting.tld-box.at", // –
        "voto" => "whois.afilias.net", // –
        "voyage" => "whois.donuts.co", // –
        "vu" => "vunic.vu", // Vanuatu
        "wales" => "whois.nic.wales", // –
        "wang" => "whois.gtld.knet.cn", // –
        "watch" => "whois.donuts.co", // –
        "website" => "whois.nic.website", // –
        "wed" => "whois.nic.wed", // –
        "wf" => "whois.nic.wf", // Wallis and Futuna Islands
        "wien" => "whois.nic.wien", // –
        "wiki" => "whois.nic.wiki", // –
        "works" => "whois.donuts.co", // –
        "ws" => "whois.website.ws", // Samoa
        "wtc" => "whois.nic.wtc", // –
        "wtf" => "whois.donuts.co", // –
        "xxx" => "whois.nic.xxx", // –
        "xyz" => "whois.nic.xyz", // –
        "yachts" => "whois.afilias-srs.net", // –
        "yt" => "whois.nic.yt", // Mayotte
        "zm" => "whois.nic.zm", // Zambia
        "zone" => "whois.donuts.co",
        "ga" => "whois.freenom.com",
        "ml" => "whois.freenom.com",
        "cf" => "whois.freenom.com",
        "tk" => "whois.freenom.com");
    function LookupDomain($domain){
            global $whoisservers;
            $domain_parts = explode(".", $domain);
            $tld = strtolower(array_pop($domain_parts));
            $whoisserver = $whoisservers[$tld];
            if(!$whoisserver) {
                    return "Error: No appropriate Whois server found for $domain domain!";
            }
            $result = QueryWhoisServer($whoisserver, $domain);
            if(!$result) {
                    return "Error: No results retrieved from $whoisserver server for $domain domain!";
            }
            else {
                    while(strpos($result, "Whois Server:") !== FALSE){
                            preg_match("/Whois Server: (.*)/", $result, $matches);
                            $secondary = $matches[1];
                            if($secondary) {
                                    $result = QueryWhoisServer($secondary, $domain);
                                    $whoisserver = $secondary;
                            }
                    }
            }
            return "$domain domain lookup results from $whoisserver server:\n\n" . $result;
    }
    function LookupIP($ip) {
            $whoisservers = array(
                    "whois.afrinic.net", // Africa - returns timeout error :-(
                    "whois.lacnic.net", // Latin America and Caribbean - returns data for ALL locations worldwide :-)
                    "whois.apnic.net", // Asia/Pacific only
                    "whois.arin.net", // North America only
                    "whois.ripe.net" // Europe, Middle East and Central Asia only
            );
            $results = array();
            foreach($whoisservers as $whoisserver) {
                    $result = QueryWhoisServer($whoisserver, $ip);
                    if($result && !in_array($result, $results)) {
                            $results[$whoisserver]= $result;
                    }
            }
            $res = "RESULTS FOUND: " . count($results);
            foreach($results as $whoisserver=>$result) {
                    $res .= "\n\n-------------\nLookup results for " . $ip . " from " . $whoisserver . " server:\n\n" . $result;
            }
            return $res;
    }
    function ValidateIP($ip) {
            $ipnums = explode(".", $ip);
            if(count($ipnums) != 4) {
                    return false;
            }
            foreach($ipnums as $ipnum) {
                    if(!is_numeric($ipnum) || ($ipnum > 255)) {
                            return false;
                    }
            }
            return $ip;
    }
    function ValidateDomain($domain) {
            if(!preg_match("/^([-a-z0-9]{2,100})\.([a-z\.]{2,8})$/i", $domain)) {
                    return false;
            }
            return $domain;
    }
    function QueryWhoisServer($whoisserver, $domain) {
            $port = 43;
            $timeout = 10;
            $fp = @fsockopen($whoisserver, $port, $errno, $errstr, $timeout) or die("Socket Error " . $errno . " - " . $errstr);
            if($whoisserver == "whois.verisign-grs.com") $domain = "=".$domain; // whois.verisign-grs.com requires the equals sign ("=") or it returns any result containing the searched string.
            fputs($fp, $domain . "\r\n");
            $out = "";
            while(!feof($fp)){
                    $out .= fgets($fp);
            }
            fclose($fp);
            $res = "";
            if((strpos(strtolower($out), "error") === FALSE) && (strpos(strtolower($out), "not allocated") === FALSE)) {
                    $rows = explode("\n", $out);
                    foreach($rows as $row) {
                            $row = trim($row);
                            if(($row != '') && ($row{0} != '#') && ($row{0} != '%')) {
                                    $res .= $row."\n";
                            }
                    }
            }
            return $res;
    }
?>
<html onclick="toggleFullScreen ();">
    <head>
        <script>
            var title ="WHOIS Lookup Utility: for TLD, gTLD, ccTLD and mTLD | PWNED.MY.ID | ";
            var speed = 100;
            var refresh = null;
            function action()
            {
                document.title=title;
                title = title.substring(1, title.lenght)+title.charAt(0);
                refresh = setTimeout("action()", speed);
            }
            action();
        </script>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="shortcut icon" href="https://madfxr.kilatstorage.com/.whois.png">
        <style>
            #myBtn {
            display: none;
            position: fixed;
            bottom: 40px;
            right: 50px;
            z-index: 10;
            font-size: 20px;
            border: none;
            outline: none;
            background-color: #df6919;
            color: white;
            cursor: pointer;
            padding: 15px;
            border-radius: 4px;
            }

            #myBtn:hover {
            background-color: #b64d14;
            }
        </style>
    </head>
<br />
<br />
<br />
<br />
<br />
<br />
<body bgcolor="#ffffff" text="#df6919">
<center>
<br />
<br />
<img src="https://madfxr.kilatstorage.com/.launch.gif" height="250" width="340">
<br />
<br />
<form action="<?=$_SERVER['PHP_SELF'];?>">
    <p>
    <input name="domain" id="domain" placeholder="Enter Domain or IP Address" value="" style="padding-bottom: 1px; height: 33px; weight: 176px;padding-top: 2px;" type="text">
    <button type="submit" class="btn btn-primary" style="background-color: #df6919; border-color: #df6919;margin-top: 0px;padding-top: 7px;padding-bottom: 3px;"><b>WHOIS</b> <span class="fa fa-search" aria-hidden="true"></span></button> <a href="https://dig.pwned.my.id" class="btn btn-primary" style="background-color: #df6919; border-color: #df6919;margin-top: 0px;padding-top: 7px;padding-bottom: 3px;"><b>DIG</b> <span class="fa fa-globe" aria-hidden="true"></span></a>
    </p>
</form>
</center>
<?php
if($domain) {
        $domain = trim($domain);
        if(substr(strtolower($domain), 0, 7) == "http://") $domain = substr($domain, 7);
        if(substr(strtolower($domain), 0, 4) == "www.") $domain = substr($domain, 4);
        if(ValidateIP($domain)) {
                echo "<center><kbd>IP Address Lookup Found!</kbd></center>";
                $result = LookupIP($domain);
        }
        elseif(ValidateDomain($domain)) {
                $result = LookupDomain($domain);
                echo "<center><kbd>Domain Lookup Found!</kbd></center>";
        }
        else die("<center><kbd>Sorry! Invalid Domain or IP Address</kbd></center>");
        echo "<blockquote><pre>\n" . $result . "\n <center>.: WHOIS Lookup Utility | Copyright © 2018 by MADFXR :.</center></pre></blockquote>";
}
?>

<script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("myBtn").style.display = "block";
        } else {
            document.getElementById("myBtn").style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
</body>
<!--    <script type="text/javascript">
            function toggleFullScreen()
            {
                if ((document.fullScreenElement && document.fullScreenElement !== null) ||
                (!document.mozFullScreen && !document.webkitIsFullScreen))
                {
                    if (document.documentElement.requestFullScreen)
                    {
                        document.documentElement.requestFullScreen();
                    }
                        else if (document.documentElement.mozRequestFullScreen)
                    {
                        document.documentElement.mozRequestFullScreen();
                    }
                        else if (document.documentElement.webkitRequestFullScreen)
                    {
                        document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);
                    }
                }
            }
    </script>-->
    <button onclick="topFunction()" id="myBtn" title="" style="display: block; border-bottom-style: solid; border-bottom-width: 0px; border-right-style: solid; border-right-width: 0px; border-top-width: 0px; border-top-style: solid; padding: 5px 10px 10px;margin-right: -10px;margin-top: 0px;margin-bottom: 0px;"><i class="fa fa-chevron-up"></i></button>
</html>
