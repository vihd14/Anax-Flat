<?php
/**
 * Theme selector in the design course.
 */
?>
<article class="article">
<h1>Theme selector</h1>

<form method="post">
    <fieldset>
        <legend>Select a theme</legend>
        <select name="theme" onchange="form.submit();">
            <option value="-1">Inget tema valt</option>
            <option value="-2">Återgå till bastemat</option>
            <?php foreach ($themes as $key => $value) :
                $selected = $key == $currentTheme["key"]
                    ? "selected"
                    : null;
                $separate = $value === $separator
                    ? "disabled=\"disabled\""
                    : null;
                $value = $separate
                    ? $separator
                    : "$key - " . $value["title"];
            ?>
                <option value="<?= $key ?>" <?= $selected ?> <?= $separate ?>>
                    <?= $value ?>
                </option>
            <?php endforeach; ?>
        </select>

        <output>
            <?php if ($message) : ?>
                <p><?= $message ?></p>
            <?php endif; ?>
        </output>
    </fieldset>
</form>


<p>Här ovan kan du enkelt välja ett tema till hemsidan. Det valda temats inställningar sparas i sessionen och läggs till i huvudmallen när sidorna renderas. Om ett
aktivt tema ej valts kommer temat <i>default</i> att visas för sidan.</p>

<p>Valt tema kommer göra följande:</p>

<ul>
    <li>Ta bort alla stilmallar som tidigare definierats i <b>config/theme.php</b>.</li>
    <li>Lägga till klasser till <b>&lt;html&gt;</b> element, om dessa definierats.</li>
    <li>Lägga till de nya stilmallarna, om dessa definierats.</li>
</ul>

<!-- <p>You edit the settings for each theme in the configuration file <code>config/theme-selecotr.php</code>.</p>

<p>The view for the theme selector is in <code>view/theme-selector/index.tpl.php</code>. There is no need to edit this file.</p>

<p>The code that applies the details from session, to the template during rendering, is <code>config/routes/custom.php</code>. There is no need to change that file.</p> -->

</article>
