{include file="frontend/components/header.tpl" pageTitleTranslated=$title}

<h2>{$title|escape}</h2>
<div class="page">
    {$content}
</div>

{include file="frontend/components/footer.tpl"}
