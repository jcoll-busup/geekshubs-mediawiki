<?php
/** French (français)
 *
 * @file
 * @ingroup Languages
 */

$namespaceNames = [
	NS_MEDIA            => 'Média',
	NS_SPECIAL          => 'Spécial',
	NS_TALK             => 'Discussion',
	NS_USER             => 'Utilisateur',
	NS_USER_TALK        => 'Discussion_utilisateur',
	NS_PROJECT_TALK     => 'Discussion_$1',
	NS_FILE             => 'Fichier',
	NS_FILE_TALK        => 'Discussion_fichier',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'Discussion_MediaWiki',
	NS_TEMPLATE         => 'Modèle',
	NS_TEMPLATE_TALK    => 'Discussion_modèle',
	NS_HELP             => 'Aide',
	NS_HELP_TALK        => 'Discussion_aide',
	NS_CATEGORY         => 'Catégorie',
	NS_CATEGORY_TALK    => 'Discussion_catégorie',
];

$namespaceAliases = [
	'Discuter' => NS_TALK,
	'Discussion_Utilisateur' => NS_USER_TALK,
	'Discussion_Fichier' => NS_FILE_TALK,
	'Discussion_Image' => NS_FILE_TALK,
	'Discussion_Modèle' => NS_TEMPLATE_TALK,
	'Discussion_Aide' => NS_HELP_TALK,
	'Discussion_Catégorie' => NS_CATEGORY_TALK
];

$namespaceGenderAliases = [
	NS_USER => [ 'male' => 'Utilisateur', 'female' => 'Utilisatrice' ],
	NS_USER_TALK => [ 'male' => 'Discussion_utilisateur', 'female' => 'Discussion_utilisatrice' ],
];

/** @phpcs-require-sorted-array */
$specialPageAliases = [
	'Activeusers'               => [ 'Utilisateurs_actifs', 'UtilisateursActifs' ],
	'Allmessages'               => [ 'Messages_système', 'Messages_systeme', 'Messagessystème', 'Messagessysteme' ],
	'Allpages'                  => [ 'Toutes_les_pages', 'ToutesLesPages' ],
	'Ancientpages'              => [ 'Pages_anciennes', 'PagesAnciennes', 'Anciennes_pages', 'AnciennesPages' ],
	'Badtitle'                  => [ 'Mauvais_titre', 'MauvaisTitre' ],
	'Blankpage'                 => [ 'Page_blanche', 'PageBlanche' ],
	'Block'                     => [ 'Bloquer', 'Blocage' ],
	'BlockList'                 => [ 'Liste_des_blocages', 'ListeDesBlocages', 'Blocages', 'Utilisateurs_bloqués', 'UtilisateursBloqués', 'Utilisateurs_bloques', 'UtilisateursBloques', 'IP_bloquées', 'IPBloquees', 'IPBloquées' ],
	'Booksources'               => [ 'Ouvrages_de_référence', 'Ouvrages_de_reference', 'Ouvragesderéférence', 'Ouvragesdereference', 'Recherche_ISBN', 'Recherche_isbn', 'RechercheISBN', 'Rechercheisbn' ],
	'BrokenRedirects'           => [ 'Redirections_cassées', 'RedirectionCassées', 'Redirections_cassees', 'RedirectionsCassees' ],
	'Categories'                => [ 'Catégories' ],
	'ChangeEmail'               => [ 'Changer_courriel', 'ChangerCourriel', 'ChangerCouriel' ],
	'ChangePassword'            => [ 'Changement_du_mot_de_passe', 'ChangementDuMotDePasse' ],
	'ComparePages'              => [ 'Comparer_des_pages' ],
	'Confirmemail'              => [ 'Confirmer_l\'adresse_de_contact', 'Confirmer_le_courriel', 'ConfirmerLeCourriel' ],
	'CreateAccount'             => [ 'Créer_un_compte', 'CréerUnCompte', 'CréerCompte' ],
	'Deadendpages'              => [ 'Pages_en_impasse', 'PagesEnImpasse' ],
	'DeletedContributions'      => [ 'Contributions_supprimées', 'ContributionsSupprimées', 'ContributionSupprimees' ],
	'DoubleRedirects'           => [ 'Doubles_redirections', 'DoublesRedirections', 'Redirections_doubles', 'RedirectionsDoubles' ],
	'EditWatchlist'             => [ 'Éditer_Liste_de_suivi', 'ÉditerListeDeSuivi' ],
	'Emailuser'                 => [ 'Envoyer_un_courriel', 'EnvoyerUnCourriel', 'Courriel', 'Envoyer_un_e-mail', 'EnvoyerUnEMail', 'E-mail', 'EMail' ],
	'ExpandTemplates'           => [ 'ExpansionDesModèles' ],
	'Export'                    => [ 'Exporter', 'Exportation' ],
	'Fewestrevisions'           => [ 'Pages_les_moins_modifiées', 'PagesLesMoinsModifiées', 'Pages_les_moins_modifiees', 'PagesLesMoinsModifiees', 'Les_moins_modifiés', 'LesMoinsModifiés', 'Les_moins_modifies', 'LesMoinsModifies' ],
	'FileDuplicateSearch'       => [ 'Recherche_fichier_en_double', 'RechercheFichierEnDouble' ],
	'Filepath'                  => [ 'Chemin_du_fichier', 'CheminDuFichier', 'CheminFichier' ],
	'Import'                    => [ 'Importer', 'Importation' ],
	'Invalidateemail'           => [ 'Invalider_le_courriel', 'Invalider_courriel', 'InvaliderCourriel' ],
	'LinkSearch'                => [ 'Recherche_de_lien', 'Recherche_de_liens' ],
	'Listadmins'                => [ 'Liste_des_administrateurs', 'Listedesadministrateurs', 'Liste_des_admins', 'Listedesadmins', 'Liste_admins', 'Listeadmins' ],
	'Listbots'                  => [ 'Liste_des_bots', 'ListedesBots' ],
	'Listfiles'                 => [ 'Liste_des_fichiers', 'ListeDesFichiers', 'Liste_des_images', 'ListeDesImages' ],
	'Listgrouprights'           => [ 'Liste_des_droits_de_groupe', 'ListeDesDroitsDeGroupes' ],
	'Listredirects'             => [ 'Liste_des_redirections', 'Listedesredirections', 'Liste_des_redirects', 'Listedesredirects', 'Liste_redirections', 'Listeredirections', 'Liste_redirects', 'Listeredirects' ],
	'Listusers'                 => [ 'Liste_des_utilisateurs', 'ListeDesUtilisateurs', 'Utilisateurs' ],
	'Lockdb'                    => [ 'Verrouiller_la_base', 'Verrouillerlabase', 'Verrouiller_base', 'Verrouillerbase', 'Verrouiller_BD', 'VerrouillerBD', 'Verrouiller_bd', 'Verrouillerbd' ],
	'Log'                       => [ 'Journal', 'Journaux' ],
	'Lonelypages'               => [ 'Pages_orphelines', 'PagesOrphelines' ],
	'Longpages'                 => [ 'Pages_longues', 'PagesLongues' ],
	'MergeHistory'              => [ 'Fusionner_les_historiques', 'FusionnerHistoriques', 'Fusionner_l\'historique', 'Fusionnerlhistorique' ],
	'MIMEsearch'                => [ 'Recherche_MIME', 'RechercheMIME', 'Recherche_mime', 'Recherchemime' ],
	'Mostcategories'            => [ 'Pages_les_plus_catégorisées', 'PagesLesPlusCatégorisées', 'Pages_les_plus_categorisees', 'PagesLesPlusCategorisees', 'Les_plus_catégorisés', 'LesPlusCatégorisés', 'Les_plus_categorises', 'LesPlusCategorises' ],
	'Mostimages'                => [ 'Fichiers_les_plus_liés', 'FichiersLesPlusLiés', 'Fichiers_les_plus_lies', 'FichiersLesPlusLies', 'Fichiers_les_plus_utilisés', 'FichiersLesPlusUtilisés', 'Fichiers_les_plus_utilises', 'FichiersLesPlusUtilises', 'Images_les_plus_liées', 'ImagesLesPlusLiées', 'Images_les_plus_liees', 'ImagesLesPlusLiees', 'Images_les_plus_utilisées', 'ImagesLesPlusUtilisées', 'Images_les_plus_utilisees', 'ImagesLesPlusUtilisees' ],
	'Mostlinked'                => [ 'Pages_les_plus_liées', 'PagesLesPlusLiées', 'Pages_les_plus_liees', 'PagesLesPlusLiees', 'Les_plus_liées', 'LesPlusLiées', 'Les_plus_liees', 'LesPlusLiees' ],
	'Mostlinkedcategories'      => [ 'Catégories_les_plus_liées', 'CatégoriesLesPlusLiées', 'Categories_les_plus_liees', 'CategoriesLesPlusLiees', 'Catégories_les_plus_utilisées', 'CatégoriesLesPlusUtilisées', 'Categories_les_plus_utilisees', 'CategoriesLesPlusUtilisees' ],
	'Mostlinkedtemplates'       => [ 'Modèles_les_plus_liés', 'ModèlesLesPlusLiés', 'Modeles_les_plus_lies', 'ModelesLesPlusLies', 'Modèles_les_plus_utilisés', 'ModèlesLesPlusUtilisés', 'Modeles_les_plus_utilises', 'ModelesLesPlusUtilises' ],
	'Mostrevisions'             => [ 'Pages_les_plus_modifiées', 'PagesLesPlusModifiées', 'Pages_les_plus_modifiees', 'PagesLesPlusModifiees', 'Les_plus_modifiés', 'LesPlusModifiés', 'Les_plus_modifies', 'LesPlusModifies' ],
	'Movepage'                  => [ 'Renommer_une_page', 'Renommer', 'Renommage' ],
	'Mycontributions'           => [ 'Mes_contributions', 'Mescontributions' ],
	'MyLanguage'                => [ 'Ma_langue', 'MaLangue' ],
	'Mypage'                    => [ 'Ma_page', 'Mapage' ],
	'Mytalk'                    => [ 'Mes_discussions', 'Mesdiscussions' ],
	'Newimages'                 => [ 'Nouveaux_fichiers', 'NouveauxFichiers', 'Nouvelles_images', 'NouvellesImages' ],
	'Newpages'                  => [ 'Nouvelles_pages', 'NouvellesPages', 'Pages_récentes', 'PagesRécentes', 'Pages_recentes', 'PagesRecentes' ],
	'PagesWithProp'             => [ 'Pages_avec_la_propriété' ],
	'PasswordReset'             => [ 'Réinitialisation_du_mot_de_passe', 'RéinitialisationDuMotDePasse' ],
	'PermanentLink'             => [ 'Lien_permanent', 'LienPermanent' ],
	'Preferences'               => [ 'Préférences' ],
	'Prefixindex'               => [ 'Index', 'Préfixes', 'Prefixes' ],
	'Protectedpages'            => [ 'Pages_protégées', 'PagesProtégées', 'Pages_protegees', 'PagesProtegees' ],
	'Protectedtitles'           => [ 'Titres_protégés', 'TitresProtégés', 'Titres_proteges', 'TitresProteges' ],
	'RandomInCategory'          => [ 'Page_au_hasard_dans_une_catégorie' ],
	'Randompage'                => [ 'Page_au_hasard', 'PageAuHasard', 'Au_hasard', 'AuHasard', 'Aléatoire', 'Aleatoire' ],
	'Randomredirect'            => [ 'Redirection_au_hasard', 'Redirect_au_hasard', 'Redirectionauhasard', 'Redirectauhasard', 'Redirection_aléatoire', 'Redirect_aléatoire', 'Redirectionaléatoire', 'Redirectaléatoire', 'Redirection_aleatoire', 'Redirect_aleatoire', 'Redirectionaleatoire', 'Redirectaleatoire' ],
	'Recentchanges'             => [ 'Modifications_récentes', 'Modifications_recentes', 'ModificationsRécentes', 'ModificationsRecentes' ],
	'Recentchangeslinked'       => [ 'Suivi_des_liens', 'SuiviDesLiens' ],
	'Redirect'                  => [ 'Redirection' ],
	'Revisiondelete'            => [ 'Versions_supprimées', 'Versions_supprimees', 'Versionsupprimées', 'Versionsupprimees' ],
	'Search'                    => [ 'Recherche', 'Rechercher', 'Chercher' ],
	'Shortpages'                => [ 'Pages_courtes', 'PagesCourtes' ],
	'Specialpages'              => [ 'Pages_spéciales', 'PagesSpéciales', 'Pages_speciales', 'PagesSpeciales' ],
	'Statistics'                => [ 'Statistiques', 'Stats' ],
	'Tags'                      => [ 'Balises' ],
	'Unblock'                   => [ 'Débloquer', 'Déblocage' ],
	'Uncategorizedcategories'   => [ 'Catégories_non_catégorisées', 'CatégoriesNonCatégorisées', 'Categories_non_categorisees', 'CategoriesNonCategorisees', 'Catégories_sans_catégorie', 'CatégoriesSansCatégorie', 'Categories_sans_categorie', 'CategoriesSansCategorie' ],
	'Uncategorizedimages'       => [ 'Fichiers_non_catégorisés', 'FichiersNonCatégorisés', 'Fichiers_non_categorises', 'FichiersNonCategorises', 'Fichiers_sans_catégorie', 'FichiersSansCatégorie', 'Fichiers_sans_categorie', 'FichiersSansCategorie', 'Images_non_catégorisées', 'ImagesNonCatégorisées', 'Images_non_categorisees', 'ImagesNonCategorisees', 'Images_sans_catégorie', 'ImagesSansCatégorie', 'Images_sans_categorie', 'ImagesSansCategorie' ],
	'Uncategorizedpages'        => [ 'Pages_non_catégorisées', 'PagesNonCatégorisées', 'Pages_non_categorisees', 'PagesNonCategorisees', 'Pages_sans_catégorie', 'PagesSansCatégorie', 'Pages_sans_categorie', 'PagesSansCategorie' ],
	'Uncategorizedtemplates'    => [ 'Modèles_non_catégorisés', 'ModèlesNonCatégorisés', 'Modeles_non_categorises', 'ModelesNonCategorises', 'Modèles_sans_catégorie', 'ModèlesSansCatégorie', 'Modeles_sans_catégorie', 'ModelesSansCatégorie' ],
	'Undelete'                  => [ 'Restaurer', 'Restauration' ],
	'Unlockdb'                  => [ 'Déverrouiller_la_base', 'Déverrouillerlabase', 'Deverrouiller_la_base', 'Deverrouillerlabase', 'Déverrouiller_base', 'Déverrouillerbase', 'Deverrouiller_base', 'Deverrouillerbase', 'Déverrouiller_BD', 'DéverrouillerBD', 'Deverrouiller_BD', 'DeverrouillerBD', 'Déverrouiller_bd', 'Déverrouillerbd', 'Deverrouiller_bd', 'Deverrouillerbd' ],
	'Unusedcategories'          => [ 'Catégories_inutilisées', 'CatégoriesInutilisées', 'Categories_inutilisees', 'CategoriesInutilisees', 'Catégories_non_utilisées', 'CatégoriesNonUtilisées', 'Categories_non_utilisees', 'CategoriesNonUtilisees' ],
	'Unusedimages'              => [ 'Fichiers_inutilisés', 'FichiersInutilisés', 'Fichiers_inutilises', 'FichiersInutilises', 'Fichiers_non_utilisés', 'FichiersNon_utilisés', 'Fichiers_non_utilises', 'FichiersNon_utilises', 'Images_inutilisées', 'ImagesInutilisées', 'Images_inutilisees', 'ImagesInutilisees', 'Images_non_utilisées', 'ImagesNonUtilisées', 'Images_non_utilisees', 'ImagesNonUtilisees' ],
	'Unusedtemplates'           => [ 'Modèles_inutilisés', 'Modèlesinutilisés', 'Modeles_inutilises', 'Modelesinutilises', 'Modèles_non_utilisés', 'Modèlesnonutilisés', 'Modeles_non_utilises', 'Modelesnonutilises' ],
	'Unwatchedpages'            => [ 'Pages_non_suivies', 'Pagesnonsuivies' ],
	'Upload'                    => [ 'Téléverser', 'Televerser', 'Téléversement', 'Televersement', 'Téléchargement', 'Telechargement' ],
	'Userlogin'                 => [ 'Connexion', 'Identification' ],
	'Userlogout'                => [ 'Déconnexion', 'Deconnexion' ],
	'Userrights'                => [ 'Permissions', 'Droits', 'Droits_des_utilisateurs' ],
	'Wantedcategories'          => [ 'Catégories_demandées', 'CatégoriesDemandées', 'Categories_demandees', 'CategoriesDemandees' ],
	'Wantedfiles'               => [ 'Fichiers_demandés', 'FichiersDemandés', 'Fichiers_demandes', 'FichiersDemandes' ],
	'Wantedpages'               => [ 'Pages_demandées', 'PagesDemandées', 'Pages_demandees', 'PagesDemandees', 'Liens_brisés', 'LiensBrisés', 'Liens_brises', 'LiensBrises' ],
	'Wantedtemplates'           => [ 'Modèles_demandés', 'ModèlesDemandés', 'Modeles_demandes', 'ModelesDemandes' ],
	'Watchlist'                 => [ 'Liste_de_suivi', 'ListeDeSuivi', 'Suivi' ],
	'Whatlinkshere'             => [ 'Pages_liées', 'PagesLiées', 'Pages_liees', 'PagesLiees' ],
	'Withoutinterwiki'          => [ 'Sans_interwiki', 'Sansinterwiki', 'Sans_interwikis', 'Sansinterwikis' ],
];

/** @phpcs-require-sorted-array */
$magicWords = [
	'anchorencode'              => [ '0', 'ENCODEANCRE', 'ANCHORENCODE' ],
	'articlepath'               => [ '0', 'CHEMINARTICLE', 'ARTICLEPATH' ],
	'basepagename'              => [ '1', 'NOMBASEDEPAGE', 'BASEPAGENAME' ],
	'basepagenamee'             => [ '1', 'NOMBASEDEPAGEX', 'BASEPAGENAMEE' ],
	'canonicalurl'              => [ '0', 'URLCANONIQUE:', 'CANONICALURL:' ],
	'canonicalurle'             => [ '0', 'URLCANONIQUEX:', 'CANONICALURLE:' ],
	'contentlanguage'           => [ '1', 'LANGUECONTENU', 'LANGCONTENU', 'CONTENTLANGUAGE', 'CONTENTLANG' ],
	'currentday'                => [ '1', 'JOURACTUEL', 'JOUR1ACTUEL', 'CURRENTDAY' ],
	'currentday2'               => [ '1', 'JOUR2ACTUEL', 'CURRENTDAY2' ],
	'currentdayname'            => [ '1', 'NOMJOURACTUEL', 'CURRENTDAYNAME' ],
	'currentdow'                => [ '1', 'JDSACTUEL', 'CURRENTDOW' ],
	'currenthour'               => [ '1', 'HEUREACTUELLE', 'CURRENTHOUR' ],
	'currentmonth'              => [ '1', 'MOISACTUEL', 'MOIS2ACTUEL', 'CURRENTMONTH', 'CURRENTMONTH2' ],
	'currentmonth1'             => [ '1', 'MOIS1ACTUEL', 'CURRENTMONTH1' ],
	'currentmonthabbrev'        => [ '1', 'ABREVMOISACTUEL', 'CURRENTMONTHABBREV' ],
	'currentmonthname'          => [ '1', 'NOMMOISACTUEL', 'CURRENTMONTHNAME' ],
	'currentmonthnamegen'       => [ '1', 'NOMGENMOISACTUEL', 'CURRENTMONTHNAMEGEN' ],
	'currenttime'               => [ '1', 'HORAIREACTUEL', 'CURRENTTIME' ],
	'currenttimestamp'          => [ '1', 'INSTANTACTUEL', 'CURRENTTIMESTAMP' ],
	'currentversion'            => [ '1', 'VERSIONACTUELLE', 'CURRENTVERSION' ],
	'currentweek'               => [ '1', 'SEMAINEACTUELLE', 'CURRENTWEEK' ],
	'currentyear'               => [ '1', 'ANNEEACTUELLE', 'CURRENTYEAR' ],
	'defaultsort'               => [ '1', 'CLEFDETRI:', 'CLEDETRI:', 'DEFAULTSORT:', 'DEFAULTSORTKEY:', 'DEFAULTCATEGORYSORT:' ],
	'defaultsort_noerror'       => [ '0', 'sanserreur', 'noerror' ],
	'defaultsort_noreplace'     => [ '0', 'sansremplacer', 'noreplace' ],
	'directionmark'             => [ '1', 'MARQUEDIRECTION', 'MARQUEDIR', 'DIRECTIONMARK', 'DIRMARK' ],
	'displaytitle'              => [ '1', 'AFFICHERTITRE', 'DISPLAYTITLE' ],
	'filepath'                  => [ '0', 'CHEMIN:', 'FILEPATH:' ],
	'forcetoc'                  => [ '0', '__FORCERSOMMAIRE__', '__FORCERTDM__', '__FORCETOC__' ],
	'formatnum'                 => [ '0', 'FORMATNOMBRE', 'FORMATNUM' ],
	'fullpagename'              => [ '1', 'NOMPAGECOMPLET', 'FULLPAGENAME' ],
	'fullpagenamee'             => [ '1', 'NOMPAGECOMPLETX', 'FULLPAGENAMEE' ],
	'fullurl'                   => [ '0', 'URLCOMPLETE:', 'FULLURL:' ],
	'fullurle'                  => [ '0', 'URLCOMPLETEX:', 'FULLURLE:' ],
	'gender'                    => [ '0', 'GENRE:', 'GENDER:' ],
	'grammar'                   => [ '0', 'GRAMMAIRE:', 'GRAMMAR:' ],
	'hiddencat'                 => [ '1', '__CATCACHEE__', '__HIDDENCAT__' ],
	'img_baseline'              => [ '1', 'base', 'ligne-de-base', 'baseline' ],
	'img_border'                => [ '1', 'bordure', 'border' ],
	'img_bottom'                => [ '1', 'bas', 'bottom' ],
	'img_center'                => [ '1', 'centré', 'center', 'centre' ],
	'img_class'                 => [ '1', 'classe=$1', 'class=$1' ],
	'img_framed'                => [ '1', 'cadre', 'encadré', 'encadre', 'frame', 'framed', 'enframed' ],
	'img_frameless'             => [ '1', 'sans_cadre', 'non_encadré', 'non_encadre', 'frameless' ],
	'img_lang'                  => [ '1', 'langue=$1', 'lang=$1' ],
	'img_left'                  => [ '1', 'gauche', 'left' ],
	'img_link'                  => [ '1', 'lien=$1', 'link=$1' ],
	'img_manualthumb'           => [ '1', 'vignette=$1', 'thumbnail=$1', 'thumb=$1' ],
	'img_middle'                => [ '1', 'milieu', 'middle' ],
	'img_none'                  => [ '1', 'néant', 'neant', 'none' ],
	'img_right'                 => [ '1', 'droite', 'right' ],
	'img_sub'                   => [ '1', 'indice', 'ind', 'sub' ],
	'img_super'                 => [ '1', 'exposant', 'exp', 'super', 'sup' ],
	'img_text_bottom'           => [ '1', 'bas-texte', 'bas-txt', 'text-bottom' ],
	'img_text_top'              => [ '1', 'haut-texte', 'haut-txt', 'text-top' ],
	'img_thumbnail'             => [ '1', 'vignette', 'thumb', 'thumbnail' ],
	'img_top'                   => [ '1', 'haut', 'top' ],
	'img_upright'               => [ '1', 'redresse', 'redresse=$1', 'redresse_$1', 'upright', 'upright=$1', 'upright $1' ],
	'language'                  => [ '0', '#LANGUE:', '#LANGUAGE:' ],
	'lc'                        => [ '0', 'MINUS:', 'LC:' ],
	'lcfirst'                   => [ '0', 'INITMINUS:', 'LCFIRST:' ],
	'localday'                  => [ '1', 'JOURLOCAL', 'JOUR1LOCAL', 'LOCALDAY' ],
	'localday2'                 => [ '1', 'JOUR2LOCAL', 'LOCALDAY2' ],
	'localdayname'              => [ '1', 'NOMJOURLOCAL', 'LOCALDAYNAME' ],
	'localdow'                  => [ '1', 'JDSLOCAL', 'LOCALDOW' ],
	'localhour'                 => [ '1', 'HEURELOCALE', 'LOCALHOUR' ],
	'localmonth'                => [ '1', 'MOISLOCAL', 'MOIS2LOCAL', 'LOCALMONTH', 'LOCALMONTH2' ],
	'localmonth1'               => [ '1', 'MOIS1LOCAL', 'LOCALMONTH1' ],
	'localmonthabbrev'          => [ '1', 'ABREVMOISLOCAL', 'LOCALMONTHABBREV' ],
	'localmonthname'            => [ '1', 'NOMMOISLOCAL', 'LOCALMONTHNAME' ],
	'localmonthnamegen'         => [ '1', 'NOMGENMOISLOCAL', 'LOCALMONTHNAMEGEN' ],
	'localtime'                 => [ '1', 'HORAIRELOCAL', 'LOCALTIME' ],
	'localtimestamp'            => [ '1', 'INSTANTLOCAL', 'LOCALTIMESTAMP' ],
	'localurl'                  => [ '0', 'URLLOCALE:', 'LOCALURL:' ],
	'localurle'                 => [ '0', 'URLLOCALEX:', 'LOCALURLE:' ],
	'localweek'                 => [ '1', 'SEMAINELOCALE', 'LOCALWEEK' ],
	'localyear'                 => [ '1', 'ANNEELOCALE', 'LOCALYEAR' ],
	'namespace'                 => [ '1', 'ESPACENOMMAGE', 'NAMESPACE' ],
	'namespacee'                => [ '1', 'ESPACENOMMAGEX', 'NAMESPACEE' ],
	'namespacenumber'           => [ '1', 'NOMBREESPACENOMMAGE', 'NAMESPACENUMBER' ],
	'newsectionlink'            => [ '1', '__LIENNOUVELLESECTION__', '__NEWSECTIONLINK__' ],
	'nocommafysuffix'           => [ '0', 'SANSSEP', 'NOSEP' ],
	'nocontentconvert'          => [ '0', '__SANSCONVERSIONCONTENU__', '__SANSCC__', '__NOCONTENTCONVERT__', '__NOCC__' ],
	'noeditsection'             => [ '0', '__SECTIONNONEDITABLE__', '__NOEDITSECTION__' ],
	'nogallery'                 => [ '0', '__AUCUNEGALERIE__', '__NOGALLERY__' ],
	'noindex'                   => [ '1', '__AUCUNINDEX__', '__NOINDEX__' ],
	'nonewsectionlink'          => [ '1', '__AUCUNLIENNOUVELLESECTION__', '__NONEWSECTIONLINK__' ],
	'notitleconvert'            => [ '0', '__SANSCONVERSIONTITRE__', '__SANSCT__', '__NOTITLECONVERT__', '__NOTC__' ],
	'notoc'                     => [ '0', '__AUCUNSOMMAIRE__', '__AUCUNETDM__', '__NOTOC__' ],
	'ns'                        => [ '0', 'ESPACEN:', 'NS:' ],
	'nse'                       => [ '0', 'ESPACENX:', 'NSE:' ],
	'numberingroup'             => [ '1', 'NOMBREDANSGROUPE', 'NBDANSGROUPE', 'NUMBERINGROUP', 'NUMINGROUP' ],
	'numberofactiveusers'       => [ '1', 'NOMBREUTILISATEURSACTIFS', 'NUMBEROFACTIVEUSERS' ],
	'numberofadmins'            => [ '1', 'NOMBREADMINS', 'NUMBEROFADMINS' ],
	'numberofarticles'          => [ '1', 'NOMBREARTICLES', 'NUMBEROFARTICLES' ],
	'numberofedits'             => [ '1', 'NOMBREMODIFS', 'NUMBEROFEDITS' ],
	'numberoffiles'             => [ '1', 'NOMBREFICHIERS', 'NUMBEROFFILES' ],
	'numberofpages'             => [ '1', 'NOMBREPAGES', 'NUMBEROFPAGES' ],
	'numberofusers'             => [ '1', 'NOMBREUTILISATEURS', 'NUMBEROFUSERS' ],
	'padleft'                   => [ '0', 'BOURRAGEGAUCHE', 'BOURREGAUCHE', 'PADLEFT' ],
	'padright'                  => [ '0', 'BOURRAGEDROITE', 'BOURREDROITE', 'PADRIGHT' ],
	'pageid'                    => [ '0', 'IDPAGE', 'PAGEID' ],
	'pagename'                  => [ '1', 'NOMPAGE', 'PAGENAME' ],
	'pagenamee'                 => [ '1', 'NOMPAGEX', 'PAGENAMEE' ],
	'pagesincategory'           => [ '1', 'PAGESDANSCAT', 'PAGESINCATEGORY', 'PAGESINCAT' ],
	'pagesincategory_all'       => [ '0', 'tous', 'all' ],
	'pagesincategory_files'     => [ '0', 'fichiers', 'files' ],
	'pagesincategory_subcats'   => [ '0', 'souscats', 'subcats' ],
	'pagesinnamespace'          => [ '1', 'PAGESDANSESPACE:', 'PAGESINNAMESPACE:', 'PAGESINNS:' ],
	'pagesize'                  => [ '1', 'TAILLEPAGE', 'PAGESIZE' ],
	'plural'                    => [ '0', 'PLURIEL:', 'PLURAL:' ],
	'protectionlevel'           => [ '1', 'NIVEAUDEPROTECTION', 'PROTECTIONLEVEL' ],
	'raw'                       => [ '0', 'BRUT:', 'RAW:' ],
	'rawsuffix'                 => [ '1', 'BRUT', 'B', 'R' ],
	'redirect'                  => [ '0', '#REDIRECTION', '#REDIRECT' ],
	'revisionday'               => [ '1', 'JOURVERSION', 'JOUR1VERSION', 'REVISIONDAY' ],
	'revisionday2'              => [ '1', 'JOUR2VERSION', 'REVISIONDAY2' ],
	'revisionid'                => [ '1', 'IDVERSION', 'REVISIONID' ],
	'revisionmonth'             => [ '1', 'MOISVERSION', 'REVISIONMONTH' ],
	'revisionmonth1'            => [ '1', 'MOISVERSION1', 'REVISIONMONTH1' ],
	'revisiontimestamp'         => [ '1', 'INSTANTVERSION', 'REVISIONTIMESTAMP' ],
	'revisionuser'              => [ '1', 'UTILISATEURVERSION', 'REVISIONUSER' ],
	'revisionyear'              => [ '1', 'ANNEEVERSION', 'REVISIONYEAR' ],
	'rootpagename'              => [ '1', 'NOMPAGERACINE', 'ROOTPAGENAME' ],
	'rootpagenamee'             => [ '1', 'NOMPAGERACINEX', 'ROOTPAGENAMEE' ],
	'scriptpath'                => [ '0', 'CHEMINSCRIPT', 'SCRIPTPATH' ],
	'server'                    => [ '0', 'SERVEUR', 'SERVER' ],
	'servername'                => [ '0', 'NOMSERVEUR', 'SERVERNAME' ],
	'sitename'                  => [ '1', 'NOMSITE', 'SITENAME' ],
	'special'                   => [ '0', 'spécial', 'special' ],
	'speciale'                  => [ '0', 'spéciale', 'speciale' ],
	'staticredirect'            => [ '1', '__REDIRECTIONSTATIQUE__', '__STATICREDIRECT__' ],
	'stylepath'                 => [ '0', 'CHEMINSTYLE', 'STYLEPATH' ],
	'subjectpagename'           => [ '1', 'NOMPAGESUJET', 'NOMPAGEARTICLE', 'SUBJECTPAGENAME', 'ARTICLEPAGENAME' ],
	'subjectpagenamee'          => [ '1', 'NOMPAGESUJETX', 'NOMPAGEARTICLEX', 'SUBJECTPAGENAMEE', 'ARTICLEPAGENAMEE' ],
	'subjectspace'              => [ '1', 'ESPACESUJET', 'ESPACEARTICLE', 'SUBJECTSPACE', 'ARTICLESPACE' ],
	'subjectspacee'             => [ '1', 'ESPACESUJETX', 'ESPACEARTICLEX', 'SUBJECTSPACEE', 'ARTICLESPACEE' ],
	'subpagename'               => [ '1', 'NOMSOUSPAGE', 'SUBPAGENAME' ],
	'subpagenamee'              => [ '1', 'NOMSOUSPAGEX', 'SUBPAGENAMEE' ],
	'tag'                       => [ '0', 'balise', 'tag' ],
	'talkpagename'              => [ '1', 'NOMPAGEDISCUSSION', 'TALKPAGENAME' ],
	'talkpagenamee'             => [ '1', 'NOMPAGEDISCUSSIONX', 'TALKPAGENAMEE' ],
	'talkspace'                 => [ '1', 'ESPACEDISCUSSION', 'TALKSPACE' ],
	'talkspacee'                => [ '1', 'ESPACEDISCUSSIONX', 'TALKSPACEE' ],
	'toc'                       => [ '0', '__SOMMAIRE__', '__TDM__', '__TOC__' ],
	'uc'                        => [ '0', 'MAJUS:', 'CAPIT:', 'UC:' ],
	'ucfirst'                   => [ '0', 'INITMAJUS:', 'INITCAPIT:', 'UCFIRST:' ],
	'urlencode'                 => [ '0', 'ENCODEURL:', 'URLENCODE:' ],
	'url_path'                  => [ '0', 'CHEMIN', 'PATH' ],
	'url_query'                 => [ '0', 'QUESTION', 'QUERY' ],
];

$bookstoreList = [
	'Amazon.fr'    => 'https://www.amazon.fr/exec/obidos/ISBN=$1',
	'alapage.fr'   => 'http://www.alapage.com/mx/?tp=F&type=101&l_isbn=$1&donnee_appel=ALASQ&devise=&',
	'fnac.com'     => 'https://www.fnac.com/SearchResult/ResultList.aspx?Search=$1',
	'chapitre.com' => 'http://www.chapitre.com/frame_rec.asp?isbn=$1',
];

$linkTrail = '/^([a-zàâçéèêîôûäëïöüùÇÉÂÊÎÔÛÄËÏÖÜÀÈÙ]+)(.*)$/sDu';

$dateFormats = [
	'mdy time' => 'H:i',
	'mdy date' => 'F j, Y',
	'mdy both' => 'F j, Y à H:i',

	'dmy time' => 'H:i',
	'dmy date' => 'j F Y',
	'dmy both' => 'j F Y à H:i',

	'ymd time' => 'H:i',
	'ymd date' => 'Y F j',
	'ymd both' => 'Y F j à H:i',
];

$separatorTransformTable = [ ',' => "\u{00A0}", '.' => ',' ];
