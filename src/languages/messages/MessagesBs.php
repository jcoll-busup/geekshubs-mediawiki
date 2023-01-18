<?php
/** Bosnian (bosanski)
 *
 * @file
 * @ingroup Languages
 */

$namespaceNames = [
	NS_MEDIA            => 'Mediji',
	NS_SPECIAL          => 'Posebno',
	NS_TALK             => 'Razgovor',
	NS_USER             => 'Korisnik',
	NS_USER_TALK        => 'Razgovor_s_korisnikom',
	NS_PROJECT_TALK     => 'Razgovor_o_{{grammar:lokativ|$1}}',
	NS_FILE             => 'Datoteka',
	NS_FILE_TALK        => 'Razgovor_o_datoteci',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'Razgovor_o_MediaWikiju',
	NS_TEMPLATE         => 'Šablon',
	NS_TEMPLATE_TALK    => 'Razgovor_o_šablonu',
	NS_HELP             => 'Pomoć',
	NS_HELP_TALK        => 'Razgovor_o_pomoći',
	NS_CATEGORY         => 'Kategorija',
	NS_CATEGORY_TALK    => 'Razgovor_o_kategoriji',
];

$namespaceAliases = [
	'Razgovor_sa_korisnikom' => NS_USER_TALK,
	'Medija' => NS_MEDIA,
	'Slika' => NS_FILE,
	'Razgovor_o_datoteci' => NS_FILE_TALK,
	'MedijaViki' => NS_MEDIAWIKI,
	'Razgovor_o_MedijaVikiju' => NS_MEDIAWIKI_TALK,
	'MediaWiki_razgovor' => NS_MEDIAWIKI_TALK,
	'Razgovor_{{grammar:instrumental|$1}}' => NS_PROJECT_TALK,
	'Razgovor_s_{{grammar:instrumental|$1}}' => NS_PROJECT_TALK,
];

/** @phpcs-require-sorted-array */
$specialPageAliases = [
	'Activeusers'               => [ 'Aktivni_korisnici', 'AktivniKorisnici' ],
	'Allmessages'               => [ 'Sve_poruke', 'SvePoruke' ],
	'Allpages'                  => [ 'Sve_stranice', 'SveStranice' ],
	'Ancientpages'              => [ 'Najstarije_stranice', 'NajstarijeStranice' ],
	'Badtitle'                  => [ 'Loš_naslov', 'LošNaslov', 'LosNaslov', 'Losnaslov' ],
	'Blankpage'                 => [ 'Prazna_stranica', 'PraznaStranica' ],
	'Block'                     => [ 'Blokiraj', 'BlokirajIP' ],
	'BlockList'                 => [ 'Spisak_blokada', 'SpisakBlokada', 'ListaBlokiranjaPrekoIP' ],
	'Booksources'               => [ 'Knjižni_izvori', 'KnjižniIzvori', 'KnjizniIzvori' ],
	'BrokenRedirects'           => [ 'Pokvarena_preusmjerenja', 'PokvarenaPreusmjerenja', 'NedovršenaPreusmjerenja' ],
	'Categories'                => [ 'Kategorije' ],
	'ChangeEmail'               => [ 'Promijeni_email', 'PromijeniEmail', 'IzmijeniMail', 'IzmjeniMail' ],
	'ChangePassword'            => [ 'Promijeni_lozinku', 'PromijeniLozinku', 'PoništiLozinku', 'PonistiLozinku' ],
	'ComparePages'              => [ 'Uporedi_stranice', 'UporediStranice', 'UpoređivanjeStranica', 'UporedjivanjeStranica' ],
	'Confirmemail'              => [ 'Potvrdi_email', 'PotvrdiEmail' ],
	'Contributions'             => [ 'Doprinosi', 'Doprinos' ],
	'CreateAccount'             => [ 'Napravi_račun', 'NapraviRačun' ],
	'Deadendpages'              => [ 'Mrtve_stranice', 'MrtveStranice' ],
	'DeletedContributions'      => [ 'Izbrisani_doprinosi', 'IzbrisaniDoprinosi', 'ObrisaniDoprinosi' ],
	'DoubleRedirects'           => [ 'Dvostruka_preusmjerenja', 'DvostrukaPreusmjerenja' ],
	'EditWatchlist'             => [ 'Uredi_spisak_praćenja', 'UrediSpisakPraćenja', 'IzmjeniPraćeniSpisak' ],
	'Emailuser'                 => [ 'Pošalji_email_korisniku', 'PošaljiEmailKorisniku', 'EmailKorisnika' ],
	'ExpandTemplates'           => [ 'Proširi_šablone', 'ProširiŠablone', 'ProširivanjeŠablona', 'ProsirivanjeSablona' ],
	'Export'                    => [ 'Izvezi', 'Izvoz' ],
	'Fewestrevisions'           => [ 'Najmanje_izmjena', 'Najmanje_uređivane_stranice' ],
	'FileDuplicateSearch'       => [ 'Pretraga_duplikata_datoteka', 'PretragaDuplikataDatoteka', 'PotragaDuplihFajlova' ],
	'Filepath'                  => [ 'Putanja_do_datoteke', 'PutanjaDoDatoteke', 'PutDoDatoteke' ],
	'Import'                    => [ 'Uvezi', 'Uvoz' ],
	'Invalidateemail'           => [ 'Otkaži_potvrdu_emaila', 'OtkažiPotvrduEmaila', 'PogresanEmail' ],
	'LinkSearch'                => [ 'Pretraga_linkova', 'PretragaLinkova', 'PotragaLinkova' ],
	'Listadmins'                => [ 'Spisak_administratora', 'SpisakAdministratora', 'ListaAdministratora' ],
	'Listbots'                  => [ 'Spisak_botova', 'SpisakBotova', 'ListaBotova' ],
	'Listfiles'                 => [ 'Spisak_datoteka', 'SpisakDatoteka', 'Datoteke', 'Slike' ],
	'Listgrouprights'           => [ 'Spisak_korisničkih_prava', 'SpisakKorisničkihPrava', 'ListaKorisničkihPrava' ],
	'Listredirects'             => [ 'Spisak_preusmjerenja', 'SpisakPreusmjerenja', 'ListaPreusmjeravanja' ],
	'Listusers'                 => [ 'Spisak_korisnika', 'SpisakKorisnika', 'ListaKorisnika' ],
	'Lockdb'                    => [ 'Zaključaj_bazu_podataka', 'ZaključajBazuPodataka', 'ZaključajDB', 'ZakljucajDB' ],
	'Log'                       => [ 'Zapisnik', 'Evidencija', 'Protokol', 'Protokoli' ],
	'Lonelypages'               => [ 'Siročad' ],
	'Longpages'                 => [ 'Duge_stranice', 'DugeStranice' ],
	'MergeHistory'              => [ 'Spoji_historiju', 'SpojiHistoriju' ],
	'MIMEsearch'                => [ 'Pretraga_po_MIME-u', 'MIMEPretraga' ],
	'Mostcategories'            => [ 'Najviše_kategorija', 'NajvišeKategorija' ],
	'Mostimages'                => [ 'Najviše_povezane_datoteke', 'Najviše_povezane_slike', 'NajvišePovezaneDatoteke', 'NajvišePovezaneSlike' ],
	'Mostlinked'                => [ 'Najviše_povezane_stranice', 'NajvišePovezaneStranice' ],
	'Mostlinkedcategories'      => [ 'Najviše_povezane_kategorije', 'NajvišePovezaneKategorije' ],
	'Mostlinkedtemplates'       => [ 'Najviše_povezani_šabloni', 'NajvišePovezaniŠabloni' ],
	'Mostrevisions'             => [ 'Najviše_izmjena', 'Najviše_uređivane_stranice', 'NajvišeIzmjena', 'NajvišeUređivaneStranice' ],
	'Movepage'                  => [ 'Premjesti_stranicu', 'PremjestiStranicu', 'PreusmjeriStranicu' ],
	'Mycontributions'           => [ 'Moji_doprinosi', 'MojiDoprinosi' ],
	'Mypage'                    => [ 'Moja_stranica', 'MojaStranica' ],
	'Mytalk'                    => [ 'Moj_razgovor', 'MojRazgovor' ],
	'Newimages'                 => [ 'Nove_datoteke', 'Nove_slike', 'NoveDatoteke', 'NoveSlike' ],
	'Newpages'                  => [ 'Nove_stranice', 'NoveStranice' ],
	'Preferences'               => [ 'Postavke', 'Podešavanja' ],
	'Prefixindex'               => [ 'Stranice_s_prefiksom', 'StraniceSPrefiksom', 'IndeksPrefiksa' ],
	'Protectedpages'            => [ 'Zaštićene_stranice', 'ZaštićeneStranice', 'ZasticeneStranice' ],
	'Protectedtitles'           => [ 'Zaštićeni_naslovi', 'ZaštićeniNaslovi', 'ZaštićeniNazivi', 'ZasticeniNazivi' ],
	'RandomInCategory'          => [ 'Nasumična_stranica_u_kategoriji', 'NasumičnaStranicaUKategoriji', 'SlučajnoUKategoriji', 'SlucajnoUKategoriji' ],
	'Randompage'                => [ 'Nasumična_stranica', 'NasumičnaStranica', 'Slučajna_stranica', 'SlučajnaStranica' ],
	'Randomredirect'            => [ 'Nasumično_preusmjerenje', 'NasumičnoPreusmjerenje', 'SlučajnoPreusmjerenje', 'SlucajnoPreusmjerenje' ],
	'Recentchanges'             => [ 'Nedavne_izmjene', 'NedavneIzmjene' ],
	'Recentchangeslinked'       => [ 'Srodne_izmjene', 'SrodneIzmjene', 'PovezaneNedavneIzmjene' ],
	'Revisiondelete'            => [ 'Brisanje_izmjene', 'BrisanjeIzmjene', 'VratiBrisanje' ],
	'Search'                    => [ 'Pretraga' ],
	'Shortpages'                => [ 'Kratke_stranice', 'KratkeStranice' ],
	'Specialpages'              => [ 'Posebne_stranice', 'PosebneStranice', 'SpecijalneStranice' ],
	'Statistics'                => [ 'Statistika', 'Statistike' ],
	'Tags'                      => [ 'Oznake' ],
	'Unblock'                   => [ 'Deblokiraj', 'Deblokada' ],
	'Uncategorizedcategories'   => [ 'Nekategorizirane_kategorije', 'NekategoriziraneKategorije', 'KategorijeBezKategorije' ],
	'Uncategorizedimages'       => [ 'Nekategorizirane_datoteke', 'NekategoriziraneDatoteke', 'SlikeBezKategorije' ],
	'Uncategorizedpages'        => [ 'Nekategorizirane_stranice', 'NekategoriziraneStranice', 'StraniceBezKategorije' ],
	'Uncategorizedtemplates'    => [ 'Nekategorizirani_šabloni', 'NekategoriziraniŠabloni', 'ŠabloniBezKategorije', 'SabloniBezKategorije' ],
	'Undelete'                  => [ 'Vrati', 'Vraćanje', 'PovratBrisanog' ],
	'Unlockdb'                  => [ 'Otključaj_bazu_podataka', 'OtključajBazuPodataka', 'OtključajDB', 'OdkljucajDB' ],
	'Unusedcategories'          => [ 'Neiskorištene_kategorije', 'NekorišteneKategorije' ],
	'Unusedimages'              => [ 'Nekorištene_datoteke', 'Nekorištene_slike', 'NekorišteneDatoteke', 'NekorišteneSlike' ],
	'Unusedtemplates'           => [ 'Nekorišteni_šabloni', 'NekorišteniŠabloni', 'NekoristeniSabloni' ],
	'Unwatchedpages'            => [ 'Nepraćene_stranice', 'NepraćeneStranice', 'NepraceneStranice' ],
	'Upload'                    => [ 'Postavi_datoteku', 'PostaviDatoteku' ],
	'Userlogin'                 => [ 'Korisnička_prijava', 'KorisničkaPrijava' ],
	'Userlogout'                => [ 'Korisnička_odjava', 'KorisničkaOdjava' ],
	'Userrights'                => [ 'Korisnička_prava', 'KorisničkaPrava', 'KorisnickaPrava' ],
	'Version'                   => [ 'Verzija' ],
	'Wantedcategories'          => [ 'Tražene_kategorije', 'TraženeKategorije' ],
	'Wantedfiles'               => [ 'Tražene_datoteke', 'TraženeDatoteke' ],
	'Wantedpages'               => [ 'Tražene_stranice', 'TraženeStranice' ],
	'Wantedtemplates'           => [ 'Traženi_šabloni', 'TraženiŠabloni' ],
	'Watchlist'                 => [ 'Spisak_praćenja', 'SpisakPraćenja', 'ListaPraćenja' ],
	'Whatlinkshere'             => [ 'Šta_vodi_ovamo', 'ŠtaVodiOvamo', 'ŠtaJeLinkovanoOvdje', 'StaJeLinkovanoOvdje' ],
	'Withoutinterwiki'          => [ 'Bez_međuwikija', 'BezMeđuwikija', 'BezInterwiki' ],
];

/** @phpcs-require-sorted-array */
$magicWords = [
	'basepagename'              => [ '1', 'IMEBAZNESTRANICE', 'BASEPAGENAME' ],
	'basepagenamee'             => [ '1', 'IMENABAZNESTRANICE', 'BASEPAGENAMEE' ],
	'currentday'                => [ '1', 'TRENUTNIDAN', 'CURRENTDAY' ],
	'currentday2'               => [ '1', 'TRENUTNIDAN2', 'CURRENTDAY2' ],
	'currentdayname'            => [ '1', 'TRENUTNIDANIME', 'CURRENTDAYNAME' ],
	'currentdow'                => [ '1', 'TRENUTNIDOV', 'CURRENTDOW' ],
	'currenthour'               => [ '1', 'TRENUTNISAT', 'CURRENTHOUR' ],
	'currentmonth'              => [ '1', 'TRENUTNIMJESEC', 'CURRENTMONTH', 'CURRENTMONTH2' ],
	'currentmonth1'             => [ '1', 'TRENUTNIMJESEC1', 'CURRENTMONTH1' ],
	'currentmonthabbrev'        => [ '1', 'TRENUTNIMJESECSKR', 'CURRENTMONTHABBREV' ],
	'currentmonthname'          => [ '1', 'TRENUTNIMJESECIME', 'CURRENTMONTHNAME' ],
	'currentmonthnamegen'       => [ '1', 'TRENUTNIMJESECROD', 'CURRENTMONTHNAMEGEN' ],
	'currenttime'               => [ '1', 'TRENUTNOVRIJEME', 'CURRENTTIME' ],
	'currenttimestamp'          => [ '1', 'SADAŠNJIVREMENSKIPEČAT', 'SADASNJIVREMENSKIPECAT', 'CURRENTTIMESTAMP' ],
	'currentversion'            => [ '1', 'SADAŠNJAVERZIJA', 'SADASNJAVERZIJA', 'CURRENTVERSION' ],
	'currentweek'               => [ '1', 'TRENUTNASEDMICA', 'CURRENTWEEK' ],
	'currentyear'               => [ '1', 'TRENUTNAGODINA', 'CURRENTYEAR' ],
	'displaytitle'              => [ '1', 'NASLOVZAPRIKAZ', 'POKAŽINASLOV', 'POKAZINASLOV', 'DISPLAYTITLE' ],
	'filepath'                  => [ '0', 'PUTANJADODATOTEKE:', 'STAZADATOTEKE:', 'FILEPATH:' ],
	'forcetoc'                  => [ '0', '__FORSIRAJSADRŽAJ__', '__FORSIRANISADRŽAJ__', '__FORCETOC__' ],
	'formatdate'                => [ '0', 'formatdatuma', 'formatdate', 'dateformat' ],
	'formatnum'                 => [ '0', 'NUMERIČKIFORMAT', 'NUMERICKIFORMAT', 'FORMATNUM' ],
	'fullpagename'              => [ '1', 'PUNOIMESTRANICE', 'PUNOIMESTRANE', 'FULLPAGENAME' ],
	'fullpagenamee'             => [ '1', 'PUNOIMESTRANICEE', 'PUNOIMESTRANEE', 'FULLPAGENAMEE' ],
	'fullurl'                   => [ '0', 'PUNURL:', 'FULLURL:' ],
	'fullurle'                  => [ '0', 'PUNURLE:', 'FULLURLE:' ],
	'gender'                    => [ '0', 'SPOL:', 'POL:', 'GENDER:' ],
	'grammar'                   => [ '0', 'GRAMATIKA:', 'GRAMMAR:' ],
	'hiddencat'                 => [ '1', '__SKRIVENAKATEGORIJA__', '__SAKRIVENAKATEGORIJA__', '__HIDDENCAT__' ],
	'img_baseline'              => [ '1', 'početna_linija', 'pocetna_linija', 'baseline' ],
	'img_border'                => [ '1', 'ivica', 'granica', 'border' ],
	'img_bottom'                => [ '1', 'dugme', 'bottom' ],
	'img_center'                => [ '1', 'centar', 'c', 'center', 'centre' ],
	'img_framed'                => [ '1', 'okvir', 'ram', 'frame', 'framed', 'enframed' ],
	'img_frameless'             => [ '1', 'bez_okvira', 'frameless' ],
	'img_left'                  => [ '1', 'lijevo', 'l', 'left' ],
	'img_manualthumb'           => [ '1', 'mini=$1', 'thumbnail=$1', 'thumb=$1' ],
	'img_middle'                => [ '1', 'sredina', 'middle' ],
	'img_none'                  => [ '1', 'n', 'bez', 'none' ],
	'img_page'                  => [ '1', 'stranica=$1', 'stranica $1', 'page=$1', 'page $1' ],
	'img_right'                 => [ '1', 'desno', 'd', 'right' ],
	'img_sub'                   => [ '1', 'odjeljak', 'sub' ],
	'img_text_bottom'           => [ '1', 'tekst-dugme', 'text-bottom' ],
	'img_text_top'              => [ '1', 'vrh_teksta', 'text-top' ],
	'img_thumbnail'             => [ '1', 'mini', 'thumb', 'thumbnail' ],
	'img_top'                   => [ '1', 'vrh', 'top' ],
	'img_upright'               => [ '1', 'na_gore', 'na_gore=$1', 'na_gore_$1', 'upright', 'upright=$1', 'upright $1' ],
	'img_width'                 => [ '1', '$1piksel', '$1p', '$1px' ],
	'index'                     => [ '1', '__INDEKSIRAJ__', '__INDEKSIRANJE__', '__SADRZAJ__', '__INDEX__' ],
	'language'                  => [ '0', '#JEZIK:', '#LANGUAGE:' ],
	'lcfirst'                   => [ '0', 'LCPRVI:', 'LCFIRST:' ],
	'localday'                  => [ '1', 'LOKALNIDAN', 'LOCALDAY' ],
	'localday2'                 => [ '1', 'LOKALNIDAN2', 'LOCALDAY2' ],
	'localdayname'              => [ '1', 'LOKALNIDANIME', 'LOCALDAYNAME' ],
	'localhour'                 => [ '1', 'LOKALNISAT', 'LOCALHOUR' ],
	'localmonth'                => [ '1', 'LOKALNIMJESEC', 'LOCALMONTH', 'LOCALMONTH2' ],
	'localmonth1'               => [ '1', 'LOKALNIMJESEC1', 'LOCALMONTH1' ],
	'localmonthabbrev'          => [ '1', 'LOKALNIMJESECSKR', 'LOCALMONTHABBREV' ],
	'localmonthname'            => [ '1', 'LOKALNIMJESECIME', 'LOCALMONTHNAME' ],
	'localmonthnamegen'         => [ '1', 'LOKALNIMJESECIMEROD', 'LOCALMONTHNAMEGEN' ],
	'localtime'                 => [ '1', 'LOKALNOVRIJEME', 'LOCALTIME' ],
	'localtimestamp'            => [ '1', 'LOKALNIVREMENSKIPECAT', 'LOCALTIMESTAMP' ],
	'localurl'                  => [ '0', 'LOKALNAADRESA:', 'LOCALURL:' ],
	'localurle'                 => [ '0', 'LOKALNEADRESE:', 'LOCALURLE:' ],
	'localweek'                 => [ '1', 'LOKALNASEDMICA', 'LOCALWEEK' ],
	'localyear'                 => [ '1', 'LOKALNAGODINA', 'LOCALYEAR' ],
	'msg'                       => [ '0', 'POR:', 'MSG:' ],
	'msgnw'                     => [ '0', 'NVPOR:', 'MSGNW:' ],
	'namespace'                 => [ '1', 'IMENSKIPROSTOR', 'NAMESPACE' ],
	'namespacee'                => [ '1', 'IMENSKIPROSTORI', 'NAMESPACEE' ],
	'newsectionlink'            => [ '1', '__LINKNOVOGODLOMKA__', '__LINKNOVESEKCIJE__', '__NEWSECTIONLINK__' ],
	'nocontentconvert'          => [ '0', '__BEZCC__', '__NOCONTENTCONVERT__', '__NOCC__' ],
	'noeditsection'             => [ '0', '__BEZ_IZMJENA__', '__BEZIZMJENA__', '__NOEDITSECTION__' ],
	'nogallery'                 => [ '0', '__BEZGALERIJE__', '__NOGALLERY__' ],
	'noindex'                   => [ '1', '__NEINDEKSIRAJ__', '__BEZINDEKSIRANJA__', '__BEZSADRZAJA__', '__NOINDEX__' ],
	'notitleconvert'            => [ '0', '__BEZTC__', '__NOTITLECONVERT__', '__NOTC__' ],
	'notoc'                     => [ '0', '__BEZSADRŽAJA__', '__NOTOC__' ],
	'ns'                        => [ '0', 'IP:', 'NS:' ],
	'numberingroup'             => [ '1', 'BROJUGRUPI', 'NUMBERINGROUP', 'NUMINGROUP' ],
	'numberofactiveusers'       => [ '1', 'BROJAKTIVNIHKORISNIKA', 'NUMBEROFACTIVEUSERS' ],
	'numberofadmins'            => [ '1', 'BROJADMINISTRATORA', 'NUMBEROFADMINS' ],
	'numberofarticles'          => [ '1', 'BROJČLANAKA', 'NUMBEROFARTICLES' ],
	'numberofedits'             => [ '1', 'BROJIZMJENA', 'BROJPROMJENA', 'NUMBEROFEDITS' ],
	'numberoffiles'             => [ '1', 'BROJDATOTEKA', 'BROJFAJLOVA', 'NUMBEROFFILES' ],
	'numberofpages'             => [ '1', 'BROJSTRANICA', 'NUMBEROFPAGES' ],
	'numberofusers'             => [ '1', 'BROJKORISNIKA', 'NUMBEROFUSERS' ],
	'padleft'                   => [ '0', 'RAZMAKLIJEVO', 'JASTUKLIJEVO', 'PADLEFT' ],
	'padright'                  => [ '0', 'RAZMAKDESNO', 'JASTUKDESNO', 'PADRIGHT' ],
	'pagename'                  => [ '1', 'STRANICA', 'PAGENAME' ],
	'pagenamee'                 => [ '1', 'STRANICE', 'PAGENAMEE' ],
	'pagesincategory'           => [ '1', 'STRANICEUKATEGORIJI', 'STRANICEUKAT', 'PAGESINCATEGORY', 'PAGESINCAT' ],
	'pagesinnamespace'          => [ '1', 'STRANICEUIMENSKOMPROSTORU:', 'PAGESINNAMESPACE:', 'PAGESINNS:' ],
	'pagesize'                  => [ '1', 'VELIČINASTRANICE', 'VELICINASTRANICE', 'PAGESIZE' ],
	'plural'                    => [ '0', 'MNOŽINA:', 'PLURAL:' ],
	'protectionlevel'           => [ '1', 'NIVOZAŠTITE', 'NIVOZASTITE', 'PROTECTIONLEVEL' ],
	'redirect'                  => [ '0', '#PREUSMJERI', '#REDIRECT' ],
	'revisionday'               => [ '1', 'IZMJENADAN', 'REVIZIJEDANA', 'REVISIONDAY' ],
	'revisionday2'              => [ '1', 'IZMJENADAN2', 'REVIZIJEDANA2', 'REVISIONDAY2' ],
	'revisionid'                => [ '1', 'IDIZMJENE', 'IDREVIZIJE', 'REVISIONID' ],
	'revisionmonth'             => [ '1', 'IZMJENAMJESEC', 'REVIZIJAMJESECA', 'REVISIONMONTH' ],
	'revisiontimestamp'         => [ '1', 'IZMJENAVREMENSKIPEČAT', 'IZMJENAVREMENSKIPECAT', 'REVIZIJAVREMENSKOGPECATA', 'REVIZIJAVREMENSKOGPEČATA', 'REVISIONTIMESTAMP' ],
	'revisionyear'              => [ '1', 'IZMJENAGODINA', 'REVIZIJAGODINE', 'REVISIONYEAR' ],
	'scriptpath'                => [ '0', 'SKRIPTA', 'SCRIPTPATH' ],
	'servername'                => [ '0', 'IMESERVERA', 'SERVERNAME' ],
	'sitename'                  => [ '1', 'IMESAJTA', 'SITENAME' ],
	'special'                   => [ '0', 'posebno', 'specijalno', 'special' ],
	'staticredirect'            => [ '1', '__STATIČNOPREUSMJERENJE__', '__STATISTICNOPREUSMJERENJE__', '__STATICREDIRECT__' ],
	'subjectpagename'           => [ '1', 'IMESTRANICESUBKJEKTA', 'IMESTRANICECLANKA', 'IMESTRANICEČLANKA', 'SUBJECTPAGENAME', 'ARTICLEPAGENAME' ],
	'subjectpagenamee'          => [ '1', 'IMENASTRANICESUBJEKTA', 'IMENASTRANICECLANAKA', 'IMENASTRANICEČLANAKA', 'SUBJECTPAGENAMEE', 'ARTICLEPAGENAMEE' ],
	'subjectspace'              => [ '1', 'PROSTORSUBJEKTA', 'PROSTORCLANAKA', 'PROSTORČLANAKA', 'SUBJECTSPACE', 'ARTICLESPACE' ],
	'subjectspacee'             => [ '1', 'PROSTORISUBJEKTA', 'PROSTORICLANKA', 'PROSTORIČLANKA', 'SUBJECTSPACEE', 'ARTICLESPACEE' ],
	'subpagename'               => [ '1', 'IMEPODSTRANICE', 'SUBPAGENAME' ],
	'subpagenamee'              => [ '1', 'IMENAPODSTRANICE', 'SUBPAGENAMEE' ],
	'subst'                     => [ '0', 'ZAMIJENI:', 'ZAMJENI:', 'SUBST:' ],
	'tag'                       => [ '0', 'oznaka', 'tag' ],
	'talkpagename'              => [ '1', 'IMESTRANICERAZGOVORA', 'TALKPAGENAME' ],
	'talkpagenamee'             => [ '1', 'IMENASTRANICERAZGOVORA', 'TALKPAGENAMEE' ],
	'talkspace'                 => [ '1', 'PROSTORZARAZGOVOR', 'TALKSPACE' ],
	'talkspacee'                => [ '1', 'PROSTORIZARAZGOVOR', 'TALKSPACEE' ],
	'toc'                       => [ '0', '__SADRŽAJ__', '__TOC__' ],
	'ucfirst'                   => [ '0', 'UCPRVI:', 'UCFIRST:' ],
	'urlencode'                 => [ '0', 'DEKODIRAJADRESU', 'URLENCODE:' ],
	'url_path'                  => [ '0', 'PUTANJA', 'PATH' ],
	'url_query'                 => [ '0', 'UPIT', 'QUERY' ],
];

$fallback8bitEncoding = "iso-8859-2";
$separatorTransformTable = [ ',' => '.', '.' => ',' ];
$linkTrail = '/^([a-zćčžšđž]+)(.*)$/sDu';