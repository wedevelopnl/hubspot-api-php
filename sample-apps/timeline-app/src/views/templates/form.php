<?php

use HubSpot\Client\Crm\Timeline\Model\TimelineEventTemplate;
use HubSpot\Crm\ObjectType;

include __DIR__.'/../_partials/header.php';
$objectTypes = [
    ObjectType::CONTACTS => 'Contact',
    ObjectType::COMPANIES => 'Company',
    ObjectType::DEALS => 'Deal',
];

if ($template instanceof TimelineEventTemplate) {
?>
<pre>
// src/actions/templates/update.php - Update a Timeline Event Type
$hubSpot->timeline()->updateEventType(
        'HubSpot Application ID',
        'Event Type ID',
        'Event Type Name',
        'Header Template',
        'Detail Template',
        'Object Type'
    );
</pre>
<?php } else { ?>
<pre>
// src/actions/templates/new.php - Create a new Timeline Event Type
$hubSpot->timeline()->createEventType(
        'HubSpot Application ID',
        'Event Type Name',
        'Header Template',
        'Detail Template',
        'Object Type'
    );
</pre>
<?php } ?>
<form method="post">
<fieldset>
    <label for="name">Name</label>
    <input type="text" placeholder="Name" id="name" name="name" value="<?php echo $template->getName(); ?>">
    <label for="headerTemplate">Header Template</label>
    <input type="text" placeholder="Header Template" id="headerTemplate" name="headerTemplate" value="<?php echo $template->getHeaderTemplate(); ?>">
    <label for="detailTemplate">Detail Template</label>
    <input type="text" placeholder="Detail Template" id="detailTemplate" name="detailTemplate" value="<?php echo $template->getDetailTemplate(); ?>">
    <label for="objectType">Object Type</label>
    <select id="objectType" name="objectType">
        <?php foreach ($objectTypes as $key => $value) { ?>
        <option <?php if ($template->getObjectType() == $key) {?>selected <?php } ?>value="<?php echo $key; ?>"><?php echo $value; ?></option>
        <?php } ?>
    </select>
    <input id="save" class="button-primary" type="submit" value="Save">
</fieldset>
</form>

<?php include __DIR__.'/../_partials/footer.php'; ?>
