<?php
function nile_category_layout_1() {
?>
<div class="nile-tab-items">

    <div class="nile-tab-items posts-output standard">
        <?php
				while(have_posts()) {
					the_post();
					niletheme_list_layout();
				}
				niletheme_pagination ();
		?>
    </div>

</div>
<?php }


function nile_category_layout_2() {
?>
<div class="nile-tab-items">

    <div class="nile-tab-items posts-output standard row">
        <?php
				while(have_posts()) {
					the_post();
					niletheme_grid_layout();
				}
				niletheme_pagination ();
		?>
    </div>

</div>
<?php

}


function nile_category_layout_3() {
?>
<div class="nile-tab-items posts-output standard">

    <?php
				while(have_posts()) {
					the_post();
					niletheme_standard_layout();
				}
				niletheme_pagination ();
		?>

</div>
<?php
}
function nile_category_layout_search() {
?>
<div class="nile-tab-items posts-output standard">

    <?php
				while(have_posts()) {
					the_post();
					niletheme_posts_search_layout();
				}
				niletheme_pagination ();
		?>

</div>
<?php
}


function nile_category_layout_4() {
?>
<div class="nile-tab-items">

    <div class="nile-tab-items posts-output standard row">
        <?php
				while(have_posts()) {
					the_post();
					niletheme_grid_3col_layout();
				}
				niletheme_pagination ();
		?>
    </div>

</div>
<?php

}




function nile_archive_portfolio_layout_1() {
?>
<div class="nile-tab-items">

    <div class="row">
        <?php
				while(have_posts()) {
					the_post();
					niletheme_portfolio_layout_1();
				}
		?>
    </div>
    <div class="clearfix"></div>
    <?php niletheme_pagination ();?>
</div>
<?php

}

function nile_archive_prevention_layout_1() {
?>
<div class="nile-tab-items">

    <div class="row">
        <?php
				while(have_posts()) {
					the_post();
					niletheme_prevention_layout_1();
				}
		?>
    </div>
    <div class="clearfix"></div>
    <?php niletheme_pagination ();?>

</div>
<?php

}
function nile_archive_team_layout_1() {
?>
<div class="nile-tab-items">

    <ul class="nile-team-list-2 row">
        <?php
				while(have_posts()) {
					the_post();
					niletheme_team_layout_1();
				}
				niletheme_pagination ();
		?>
    </ul>

</div>
<?php

}





function search_layout() {
?>
<div class="nile-tab-items posts-output standard">

    <?php
				while(have_posts()) {
					the_post();
					niletheme_search_layout();
				}
				niletheme_pagination ();
		?>

</div>
<?php
}
