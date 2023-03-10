<?php

namespace MediaWiki\Skins\Vector;

use ExtensionRegistry;
use MediaWiki\MediaWikiServices;
use MediaWiki\Skins\Vector\Components\VectorComponentDropdown;
use MediaWiki\Skins\Vector\Components\VectorComponentIconLink;
use MediaWiki\Skins\Vector\Components\VectorComponentLanguageButton;
use MediaWiki\Skins\Vector\Components\VectorComponentLanguageDropdown;
use MediaWiki\Skins\Vector\Components\VectorComponentMainMenu;
use MediaWiki\Skins\Vector\Components\VectorComponentMenu;
use MediaWiki\Skins\Vector\Components\VectorComponentMenuListItem;
use MediaWiki\Skins\Vector\Components\VectorComponentMenuVariants;
use MediaWiki\Skins\Vector\Components\VectorComponentPageTools;
use MediaWiki\Skins\Vector\Components\VectorComponentPinnableContainer;
use MediaWiki\Skins\Vector\Components\VectorComponentSearchBox;
use MediaWiki\Skins\Vector\Components\VectorComponentStickyHeader;
use MediaWiki\Skins\Vector\Components\VectorComponentTableOfContents;
use MediaWiki\Skins\Vector\Components\VectorComponentTableOfContentsContainer;
use MediaWiki\Skins\Vector\Components\VectorComponentUserLinks;
use RuntimeException;
use SkinMustache;
use SkinTemplate;

/**
 * @ingroup Skins
 * @package Vector
 * @internal
 */
class SkinVector22 extends SkinMustache {
	private const STICKY_HEADER_ENABLED_CLASS = 'vector-sticky-header-enabled';
	/** @var null|array for caching purposes */
	private $languages;

	/**
	 * @inheritDoc
	 */
	protected function runOnSkinTemplateNavigationHooks( SkinTemplate $skin, &$content_navigation ) {
		parent::runOnSkinTemplateNavigationHooks( $skin, $content_navigation );
		Hooks::onSkinTemplateNavigation( $skin, $content_navigation );
	}

	/**
	 * @inheritDoc
	 */
	public function isResponsive() {
		// Check it's enabled by user preference and configuration
		$responsive = parent::isResponsive() && $this->getConfig()->get( 'VectorResponsive' );
		// For historic reasons, the viewport is added when Vector is loaded on the mobile
		// domain. This is only possible for 3rd parties or by useskin parameter as there is
		// no preference for changing mobile skin. Only need to check if $responsive is falsey.
		if ( !$responsive && ExtensionRegistry::getInstance()->isLoaded( 'MobileFrontend' ) ) {
			$mobFrontContext = MediaWikiServices::getInstance()->getService( 'MobileFrontend.Context' );
			if ( $mobFrontContext->shouldDisplayMobileView() ) {
				return true;
			}
		}
		return $responsive;
	}

	/**
	 * This should be upstreamed to the Skin class in core once the logic is finalized.
	 * Returns false if the page is a special page without any languages, or if an action
	 * other than view is being used.
	 * @return bool
	 */
	private function canHaveLanguages(): bool {
		if ( $this->getContext()->getActionName() !== 'view' ) {
			return false;
		}
		$title = $this->getTitle();
		// Defensive programming - if a special page has added languages explicitly, best to show it.
		if ( $title && $title->isSpecialPage() && empty( $this->getLanguagesCached() ) ) {
			return false;
		}
		return true;
	}

	/**
	 * @param string $location Either 'top' or 'bottom' is accepted.
	 * @return bool
	 */
	protected function isLanguagesInContentAt( $location ) {
		if ( !$this->canHaveLanguages() ) {
			return false;
		}
		$featureManager = VectorServices::getFeatureManager();
		$inContent = $featureManager->isFeatureEnabled(
			Constants::FEATURE_LANGUAGE_IN_HEADER
		);
		$isMainPage = $this->getTitle() ? $this->getTitle()->isMainPage() : false;

		switch ( $location ) {
			case 'top':
				return $isMainPage ? $inContent && $featureManager->isFeatureEnabled(
					Constants::FEATURE_LANGUAGE_IN_MAIN_PAGE_HEADER
				) : $inContent;
			case 'bottom':
				return $inContent && $isMainPage && !$featureManager->isFeatureEnabled(
					Constants::FEATURE_LANGUAGE_IN_MAIN_PAGE_HEADER
				);
			default:
				throw new RuntimeException( 'unknown language button location' );
		}
	}

	/**
	 * Whether or not the languages are out of the sidebar and in the content either at
	 * the top or the bottom.
	 * @return bool
	 */
	final protected function isLanguagesInContent() {
		return $this->isLanguagesInContentAt( 'top' ) || $this->isLanguagesInContentAt( 'bottom' );
	}

	/**
	 * Calls getLanguages with caching.
	 * @return array
	 */
	protected function getLanguagesCached(): array {
		if ( $this->languages === null ) {
			$this->languages = $this->getLanguages();
		}
		return $this->languages;
	}

	/**
	 * Check whether ULS is enabled
	 *
	 * @return bool
	 */
	final protected function isULSExtensionEnabled(): bool {
		return ExtensionRegistry::getInstance()->isLoaded( 'UniversalLanguageSelector' );
	}

	/**
	 * Show the ULS button if it's modern Vector, languages in header is enabled,
	 * and the ULS extension is enabled. Hide it otherwise.
	 * There is no point in showing the language button if ULS extension is unavailable
	 * as there is no ways to add languages without it.
	 * @return bool
	 */
	protected function shouldHideLanguages(): bool {
		return !$this->isLanguagesInContent() || !$this->isULSExtensionEnabled();
	}

	/**
	 * Determines if the language switching alert box should be in the sidebar.
	 *
	 * @return bool
	 */
	private function shouldLanguageAlertBeInSidebar(): bool {
		$featureManager = VectorServices::getFeatureManager();
		$isMainPage = $this->getTitle() ? $this->getTitle()->isMainPage() : false;
		$shouldShowOnMainPage = $isMainPage && !empty( $this->getLanguagesCached() ) &&
			$featureManager->isFeatureEnabled( Constants::FEATURE_LANGUAGE_IN_MAIN_PAGE_HEADER );
		return ( $this->isLanguagesInContentAt( 'top' ) && !$isMainPage && !$this->shouldHideLanguages() &&
			$featureManager->isFeatureEnabled( Constants::FEATURE_LANGUAGE_ALERT_IN_SIDEBAR ) ) ||
			$shouldShowOnMainPage;
	}

	/**
	 * Merges the `view-overflow` menu into the `action` menu.
	 * This ensures that the previous state of the menu e.g. emptyPortlet class
	 * is preserved.
	 * @param array $data
	 * @return array
	 */
	private function mergeViewOverflowIntoActions( $data ) {
		$portlets = $data['data-portlets'];
		$actions = $portlets['data-actions'];
		$overflow = $portlets['data-views-overflow'];
		// if the views overflow menu is not empty, then signal that the more menu despite
		// being initially empty now has collapsible items.
		if ( !$overflow['is-empty'] ) {
			$data['data-portlets']['data-actions']['class'] .= ' vector-has-collapsible-items';
		}
		$data['data-portlets']['data-actions']['html-items'] = $overflow['html-items'] . $actions['html-items'];
		return $data;
	}

	/**
	 * @inheritDoc
	 */
	public function getHtmlElementAttributes() {
		$original = parent::getHtmlElementAttributes();

		if ( VectorServices::getFeatureManager()->isFeatureEnabled( Constants::FEATURE_STICKY_HEADER ) ) {
			// T290518: Add scroll padding to root element when the sticky header is
			// enabled. This class needs to be server rendered instead of added from
			// JS in order to correctly handle situations where the sticky header
			// isn't visible yet but we still need scroll padding applied (e.g. when
			// the user navigates to a page with a hash fragment in the URI). For this
			// reason, we can't rely on the `vector-sticky-header-visible` class as it
			// is added too late.
			//
			// Please note that this class applies scroll padding which does not work
			// when applied to the body tag in Chrome, Safari, and Firefox (and
			// possibly others). It must instead be applied to the html tag.
			$original['class'] = implode( ' ', [ $original['class'] ?? '', self::STICKY_HEADER_ENABLED_CLASS ] );
		}

		return $original;
	}

	/**
	 * Determines wheather the initial state of sidebar is visible on not
	 *
	 * @return bool
	 */
	private function isMainMenuVisible() {
		$skin = $this->getSkin();
		if ( $skin->getUser()->isRegistered() ) {
			$userOptionsLookup = MediaWikiServices::getInstance()->getUserOptionsLookup();
			$userPrefSidebarState = $userOptionsLookup->getOption(
				$skin->getUser(),
				Constants::PREF_KEY_SIDEBAR_VISIBLE
			);

			$defaultLoggedinSidebarState = $this->getConfig()->get(
				Constants::CONFIG_KEY_DEFAULT_SIDEBAR_VISIBLE_FOR_AUTHORISED_USER
			);

			// If the sidebar user preference has been set, return that value,
			// if not, then the default sidebar state for logged-in users.
			return ( $userPrefSidebarState !== null )
				? (bool)$userPrefSidebarState
				: $defaultLoggedinSidebarState;
		}
		return $this->getConfig()->get(
			Constants::CONFIG_KEY_DEFAULT_SIDEBAR_VISIBLE_FOR_ANONYMOUS_USER
		);
	}

	/**
	 * Pulls the page tools menu out of $sidebar into $pageToolsMenu
	 *
	 * @param array &$sidebar
	 * @param array &$pageToolsMenu
	 */
	private static function extractPageToolsFromSidebar( &$sidebar, &$pageToolsMenu ) {
		$restPortlets = $sidebar[ 'array-portlets-rest' ] ?? [];
		$toolboxMenuIndex = array_search(
			VectorComponentPageTools::TOOLBOX_ID,
			array_column(
				$restPortlets,
				'id'
			)
		);

		if ( $toolboxMenuIndex !== false ) {
			// Splice removes the toolbox menu from the $restPortlets array
			// and current returns the first value of array_splice, i.e. the $toolbox menu data.
			$pageToolsMenu = array_splice( $restPortlets, $toolboxMenuIndex );
			$sidebar['array-portlets-rest'] = $restPortlets;
		}
	}

	/**
	 * Get the ULS button label, accounting for the number of available
	 * languages.
	 *
	 * @return array
	 */
	final protected function getULSLabels(): array {
		$numLanguages = count( $this->getLanguagesCached() );

		if ( $numLanguages === 0 ) {
			return [
				'label' => $this->msg( 'vector-no-language-button-label' )->text(),
				'aria-label' => $this->msg( 'vector-no-language-button-aria-label' )->text()
			];
		} else {
			return [
				'label' => $this->msg( 'vector-language-button-label' )->numParams( $numLanguages )->escaped(),
				'aria-label' => $this->msg( 'vector-language-button-aria-label' )->numParams( $numLanguages )->escaped()
			];
		}
	}

	/**
	 * @return array
	 */
	public function getTemplateData(): array {
		$featureManager = VectorServices::getFeatureManager();
		$parentData = parent::getTemplateData();
		$localizer = $this->getContext();
		$parentData = $this->mergeViewOverflowIntoActions( $parentData );
		$portlets = $parentData['data-portlets'];

		$langData = $parentData['data-portlets']['data-languages'] ?? null;
		$config = $this->getConfig();

		$isPageToolsEnabled = $featureManager->isFeatureEnabled( Constants::FEATURE_PAGE_TOOLS );
		$sidebar = $parentData[ 'data-portlets-sidebar' ];
		$pageToolsMenu = [];
		if ( $isPageToolsEnabled ) {
			self::extractPageToolsFromSidebar( $sidebar, $pageToolsMenu );
		}

		$langButtonClass = $langData['class'] ?? '';
		$ulsLabels = $this->getULSLabels();
		$returnto = $this->getReturnToParam();
		$user = $this->getUser();
		$logoutData = $this->buildLogoutLinkData();
		$loginLinkData = $this->buildLoginData( $returnto, $this->useCombinedLoginLink() );
		$createAccountData = $this->buildCreateAccountData( $returnto );
		$localizer = $this->getContext();
		$tocData = $parentData['data-toc'];
		// If the table of contents has no items, we won't output it.
		// empty array is interpreted by Mustache as falsey.
		$isTocUnavailable = empty( $tocData ) || empty( $tocData[ 'array-sections' ] );
		$components = [
			'data-vector-variants' => new VectorComponentMenuVariants(
				$parentData['data-portlets']['data-variants'],
				$this->getTitle()->getPageLanguage(),
				$this->msg( 'vector-language-variant-switcher-label' )
			),
			'data-vector-user-links' => new VectorComponentUserLinks(
				$localizer,
				$user,
				new VectorComponentMenu(
					$portlets['data-user-menu']
				),
				new VectorComponentMenu( [
					// this menu should have no label
					'label' => '',
				] + $portlets[ 'data-vector-user-menu-overflow' ] ),
				new VectorComponentMenu(
					[],
					$user->isRegistered() ? [
						new VectorComponentMenuListItem(
							new VectorComponentIconLink(
								$logoutData[ 'href'],
								$logoutData[ 'text' ],
								$logoutData[ 'icon' ],
								$this,
								'pt-logout'
							),
							'vector-user-menu-logout',
							'pt-logout'
						)
					] : [
						new VectorComponentMenuListItem(
							new VectorComponentIconLink(
								$createAccountData['href'] ?? null,
								$createAccountData['text'] ?? null,
								$createAccountData['icon'] ?? null,
								$this,
								'create-account'
							),
							'vector-user-menu-create-account user-links-collapsible-item'
						),
						new VectorComponentMenuListItem(
							new VectorComponentIconLink(
								$loginLinkData['href'] ?? null,
								$loginLinkData['text'] ?? null,
								$loginLinkData['icon'] ?? null,
								$this,
								'login'
							),
							'vector-user-menu-login'
						)
					]
				),
			),
			'data-lang-btn' => $langData ? new VectorComponentLanguageDropdown(
				$ulsLabels['label'],
				$ulsLabels['aria-label'],
				$this->isLanguagesInContentAt( 'top' ) ?
					$langButtonClass . ' mw-ui-icon-flush-right' : $langButtonClass,
				count( $this->getLanguagesCached() ),
				$langData['html-items'] ?? '',
				$langData['html-before-portal'] ?? '',
				$langData['html-after-portal'] ?? '',
				$this->getTitle()
			) : null,
			'data-toc-container' => $isTocUnavailable ? null : new VectorComponentTableOfContentsContainer(
				$localizer,
			),
			'data-toc' => $isTocUnavailable ? null : new VectorComponentTableOfContents(
				$tocData,
				$localizer,
				$this->getConfig()
			),
			'data-search-box' => new VectorComponentSearchBox(
				$parentData['data-search-box'],
				true,
				// is primary mode of search
				true,
				'searchform',
				true,
				$config,
				Constants::SEARCH_BOX_INPUT_LOCATION_MOVED,
				$localizer
			),
			'data-main-menu' => new VectorComponentMainMenu(
				$sidebar,
				$this->shouldLanguageAlertBeInSidebar(),
				$parentData['data-portlets']['data-languages'] ?? [],
				$localizer,
				$this->getUser(),
				VectorServices::getFeatureManager(),
				$this,
			),
			'data-main-menu-dropdown' => new VectorComponentDropdown(
				VectorComponentMainMenu::ID . '-dropdown',
				$this->msg( VectorComponentMainMenu::ID . '-label' )->text(),
				VectorComponentMainMenu::ID . '-dropdown' . ' mw-ui-icon-flush-left mw-ui-icon-flush-right',
				'menu'
			),
			'data-page-tools' => $isPageToolsEnabled ? new VectorComponentPageTools(
				array_merge( [ $parentData['data-portlets']['data-actions'] ?? [] ], $pageToolsMenu ),
				$localizer,
				$this->getUser(),
				$featureManager
			) : null,
			'data-page-tools-dropdown' => $isPageToolsEnabled ? new VectorComponentDropdown(
				VectorComponentPageTools::ID . '-dropdown',
				$this->msg( 'toolbox' )->text(),
				VectorComponentPageTools::ID . '-dropdown',
			) : null,
			'data-page-titlebar-toc-dropdown' => $isTocUnavailable ? null : new VectorComponentDropdown(
				'vector-page-titlebar-toc',
				// no label,
				'',
				// class
				'vector-page-titlebar-toc mw-ui-icon-flush-left',
				// icon
				'listBullet',
			),
			'data-page-titlebar-pinnable-container' => new VectorComponentPinnableContainer(
				'vector-page-titlebar-toc',
				true
			),
			'data-vector-sticky-header' => $featureManager->isFeatureEnabled(
				Constants::FEATURE_STICKY_HEADER
			) ? new VectorComponentStickyHeader(
				$localizer,
				new VectorComponentSearchBox(
					$parentData['data-search-box'],
					// Collapse inside search box is disabled.
					false,
					false,
					'vector-sticky-search-form',
					false,
					$config,
					Constants::SEARCH_BOX_INPUT_LOCATION_MOVED,
					$localizer
				),
				// Show sticky ULS if the ULS extension is enabled and the ULS in header is not hidden
				$this->isULSExtensionEnabled() && !$this->shouldHideLanguages() ?
					new VectorComponentLanguageButton( $ulsLabels[ 'label' ] ) : null,
				$featureManager->isFeatureEnabled(
					Constants::FEATURE_STICKY_HEADER_EDIT
				)
			) : null
		];
		foreach ( $components as $key => $component ) {
			// Array of components or null values.
			if ( $component ) {
				$parentData[$key] = $component->getTemplateData();
			}
		}

		return array_merge( $parentData, [
			'is-language-in-content' => $this->isLanguagesInContent(),
			'is-language-in-content-top' => $this->isLanguagesInContentAt( 'top' ),
			'is-language-in-content-bottom' => $this->isLanguagesInContentAt( 'bottom' ),
			'is-main-menu-visible' => $this->isMainMenuVisible(),
			// Cast empty string to null
			'html-subtitle' => $parentData['html-subtitle'] === '' ? null : $parentData['html-subtitle'],
			'is-page-tools-enabled' => $isPageToolsEnabled
		] );
	}
}
