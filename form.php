<!DOCTYPE html><!-- HTML5 --> 
<html lang='sv'><!-- Talsyntes på svenska -->
    <head> 

        <meta charset='utf-8' />  <!-- för att få å, ä och ö m.m. --> 
        <title>Form widgets</title> <!-- Syns i fliken -->
        <link rel='stylesheet' href='style.css'/> <!-- Länk till stildokument -->
    </head> 
    <body><!--sidans innehåll-->
        <form action="index.php" method="post"> 
            <fieldset>
                <legend>text</legend>
                <p>
                    <label for="text">text</label>
                    <input type="text" id="text" placeholder="exempeltext" name="text" />
                </p>
            </fieldset>
            <fieldset>
                <legend>checkbox</legend>
                <p>
                    <label for="checkbox-blåbär">Gillar blåbär.</label>
                    <input type="checkbox" id="checkbox-blåbär" name="grupp-namn" value="blåbär">
                </p>
                <p>
                    <label for="checkbox-hallon">Gillar hallon.</label>
                    <input type="checkbox" id="checkbox-hallon" name="grupp-namn" value="hallon">
                </p>
                <p>
                    <label for="checkbox-jordgubbar">Gillar jordgubbar.</label>
                    <input type="checkbox" id="checkbox-jordgubbar" name="grupp-namn" value="jordgubbar">
                </p>            
            </fieldset>
            <fieldset>
                <legend>password</legend>
                <p>
                    <label for="id-password">Lösenord</label>
                    <input name="element-password" id="id-password" type="password" required="required"/>
                </p>
            </fieldset>
            <fieldset>
                <legend>radio</legend>
                <p>Vad är 2 + 3?</p>
                <label for="radio-4">4</label>
                <input type="radio" id="radio-4" name="radiogrupp" value="4"/>
                <label for="radio-5">5</label>
                <input type="radio" id="radio-5" name="radiogrupp" value="5"/>
                <label for="radio-6">6</label>
                <input type="radio" id="radio-6" name="radiogrupp" value="6"/>
            </fieldset>

            <fieldset>
                <legend>nummer och slider</legend>
                <p>
                    <label for="number">number</label>
                    <input type="number" id="number" name="number-name" min="10" max="20" step="2" value="14"/>
                </p>
                <p>
                    Slider används med fördel kombinerad med nummer i till exempel färgväljare.
                </p>
                <p>
                    <label for="slider">range</label>
                    <input type="range" id="slider" name="slider-name" min="0" max="100" step="5" value="10"/>
                </p>
            </fieldset>
            <fieldset>
                <legend>Tid</legend>
                <p>
                    <label for="datetime">datetime-local</label>
                    <input type="datetime-local" id="datetime" name="datetime-name"/>
                </p>
                <p>
                    <label for="date">date</label>
                    <input type="date" id="date" name="date-name"/>
                </p>
                <p>
                    <label for="time">time</label>
                    <input type="time" id="time" name="time-name"/>
                </p>
            </fieldset>

            <fieldset>
                <legend>rullgardin - select, option</legend>
                <p>Välj storlek</p>
                <select name="selct-name">
                    <option value="41">41</option>
                    <option value="42">42</option>
                    <option value="43" selected="selected">43</option>
                    <option value="44">44</option> 
                </select>
            </fieldset>

            <fieldset>
                <legend>textarea</legend>
                <textarea name="textarea-name" placeholder="skriv text här"></textarea>
            </fieldset>

            <fieldset>
                <legend>e-post, url, tel</legend>
                <p>
                    <label for="email">e-post</label>
                    <input type="email" id="email" name="email-name" placeholder="exempel@exempel.com"/>
                </p>
                <p>
                    <label for="url">url</label>
                    <input type="url" id="url" name="url-name" placeholder="http://www.rikardkarlsson.se"/>
                </p>
                <p>
                    <label for="tel">tel</label>
                    <input type="tel" id="tel" name="tel-name" />
                </p>
            </fieldset>
            <fieldset>
                <legend>color</legend>
                <input type="color" name="color"/>
            </fieldset>

            <input type="hidden" name="hidden-name" value="hidden-value" />

            <input type="submit" value="skicka"/>
        </form>
        <p>
            <?= var_dump($_POST); ?>
        </p>
    </body> 
</html>