<?php
$I = new AcceptanceTester( $scenario );

// Login to wp-admin
$I->loginAsAdmin();

$I->wantTo( 'edit form title' );
$I->amOnPage( '/wp-admin/admin.php?page=ninja-forms&form_id=1' );
$I->waitForText( 'Advanced' );
$I->click( 'Advanced' );

$I->waitForText( 'Display Settings' );
$I->click( '.nf-setting-wrap:first-child' );

$I->waitForText( 'FORM TITLE' );
$I->fillField( '[data-id="title"]', 'Swanky New Title' );
$I->click( 'DONE' );

$I->waitForText( 'PUBLISH' );
$I->click( 'PUBLISH' );

$I->amOnPage( '/wp-admin/admin.php?page=ninja-forms&form_id=1' );
$I->waitForText( 'Swanky New Title' );