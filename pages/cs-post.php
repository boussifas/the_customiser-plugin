<?php
/***
 * The Customiser Post Screen
 */
    enqueue_scripts();
    enqueue_styles();
//tmp
//https://developer.wordpress.org/reference/functions/register_post_type/#public
?>

<div class="cs_wrapper" id="cs_widget_screen">
    <div class="info-cntr">
        <img src="<?php echo plugin_dir_url(__FILE__); ?>../_inc/assets/images/info.png"/>
        <p>easily add custom posts (post type) to manage your website</p>
    </div>

    <div class="form-grp">
        <!-- name -->
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="nameInput" placeholder="type cs post Name">
        </div>
        <!-- position -->
        <div class="form-floating mb-3">
            <label for="positionInput">Choose position</label>
            <select class="form-select" aria-label="Choose position">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <!-- icon -->
        <!-- <div class="form-floating">
            <input type="file" class="form-control" id="iconInput" placeholder="Post Icon">
        </div> -->
        <!-- show in public -->
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" checked id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
                show in public
            </label>
        </div>
        <!-- post supports -->
        <div class="input-group mb-3">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Editor
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                <label class="form-check-label" for="flexCheckChecked">
                    Post Format
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                <label class="form-check-label" for="flexCheckChecked">
                    Thumbnails
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                <label class="form-check-label" for="flexCheckChecked">
                    Comments
                </label>
            </div>
        </div>
    </div>
</div>

