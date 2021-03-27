<?php
require('./header.php');

if(!empty($_POST['name'])) {
    if(array_key_exists('feed', $_POST)) {
        $temp = new Email($_POST['name'], $_POST['surname'], $_POST['phone'], $_POST['email'], $_POST['message']);
    }
} else {
    redirect();
}
?>
<div>
    <?=$temp->submit()?>
</div>
<?php
require('./foot.php');
?>