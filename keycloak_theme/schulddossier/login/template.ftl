<#macro registrationLayout bodyClass="" displayInfo=false displayMessage=true displayWide=false>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" class="${properties.kcHtmlClass!}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="robots" content="noindex, nofollow">

    <#if properties.meta?has_content>
        <#list properties.meta?split(' ') as meta>
            <meta name="${meta?split('==')[0]}" content="${meta?split('==')[1]}"/>
        </#list>
    </#if>
    <title>${msg("loginTitle",(realm.displayName!''))}</title>
    <link rel="icon" href="${url.resourcesPath}/img/favicon.ico" />
    <#if properties.styles?has_content>
        <#list properties.styles?split(' ') as style>
            <link href="${url.resourcesPath}/${style}" rel="stylesheet" />
        </#list>
    </#if>
    <#if properties.scripts?has_content>
        <#list properties.scripts?split(' ') as script>
            <script src="${url.resourcesPath}/${script}" type="text/javascript"></script>
        </#list>
    </#if>
    <#if scripts??>
        <#list scripts as script>
            <script src="${script}" type="text/javascript"></script>
        </#list>
    </#if>
</head>

<body class="${properties.kcBodyClass!}">


    <header class="top">
        <a href="/" class="logo">
          <i class="icon-andreas"></i>Gemeente Amsterdam
        </a>
        <div class="header__title">
          <strong>Schulddossier</strong>
        </div>
    </header>
    <div class="document-container document-container__narrow">
          <#if displayMessage && message?has_content>
              <div class="flash-message flash-type-${message.type}">
                <span class="message">${kcSanitize(message.summary)?no_esc}</span>
              </div>
          </#if>

    <div class="document well">
        <div class="document-header">
            <h1 class="document-title">Inloggen voor medewerkers</h1>
            <p>Log hieronder in. Gebruik hiervoor de login-gegevens van je eigen organisatie.</p>
        </div>
        <div class="form-container">
          <#nested "form">
        </div>

    </div>
    </div>
</body>
</html>
</#macro>
