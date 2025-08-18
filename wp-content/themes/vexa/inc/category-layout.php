<?php
function vexa_category_layout_1() {
?>
<div class="vexa-tab-items">

    <div class="vexa-tab-items posts-output standard">
        <?php
				while(have_posts()) {
					the_post();
					vexatheme_list_layout();
				}
				vexatheme_pagination ();
		?>
    </div>

</div>
<?php }


function vexa_category_layout_2() {
?>
<div class="vexa-tab-items">

    <div class="vexa-tab-items posts-output standard row">
        <?php
				while(have_posts()) {
					the_post();
					vexatheme_grid_layout();
				}
				vexatheme_pagination ();
		?>
    </div>

</div>
<?php

}


function vexa_category_layout_3() {
?>
<div class="vexa-tab-items posts-output standard">

    <?php
				while(have_posts()) {
					the_post();
					vexatheme_standard_layout();
				}
				vexatheme_pagination ();
		?>

</div>
<?php
}
function vexa_category_layout_search() {
?>
<div class="vexa-tab-items posts-output standard">

    <?php
				while(have_posts()) {
					the_post();
					vexatheme_posts_search_layout();
				}
				vexatheme_pagination ();
		?>

</div>
<?php
}


function vexa_category_layout_4() {
?>
<div class="vexa-tab-items">

    <div class="vexa-tab-items posts-output standard row">
        <?php
				while(have_posts()) {
					the_post();
					vexatheme_grid_3col_layout();
				}
				vexatheme_pagination ();
		?>
    </div>

</div>
<?php

}




function vexa_archive_portfolio_layout_1() {
?>
<div class="vexa-tab-items">

    <div class="row">
        <?php
				while(have_posts()) {
					the_post();
					vexatheme_portfolio_layout_1();
				}
		?>
    </div>
    <div class="clearfix"></div>
    <?php vexatheme_pagination ();?>
</div>
<?php

}

function vexa_archive_prevention_layout_1() {
?>
<div class="vexa-tab-items">

    <div class="row">
        <?php
				while(have_posts()) {
					the_post();
					vexatheme_prevention_layout_1();
				}
		?>
    </div>
    <div class="clearfix"></div>
    <?php vexatheme_pagination ();?>

</div>
<?php

}
function vexa_archive_team_layout_1() {
?>
<div class="vexa-tab-items">

    <ul class="vexa-team-list-2 row">
        <?php
				while(have_posts()) {
					the_post();
					vexatheme_team_layout_1();
				}
				vexatheme_pagination ();
		?>
    </ul>

</div>
<?php

}





function search_layout() {
?>
<div class="vexa-tab-items posts-output standard">

    <?php
				while(have_posts()) {
					the_post();
					vexatheme_search_layout();
				}
				vexatheme_pagination ();
		?>

</div>
<?php
}
