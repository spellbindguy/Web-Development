<? include_once( "database.php" ); ?>

<?
$db = new Database();

$allMenuItems = $db->SelectAllMenuItems();



?>

<ul>
<?
foreach( $allMenuItems as $item )
{
	?>
	<li><?=$item["name"]?></li>
	<li><?=$item["menu_id"]?></li>
	<li><?=$item["item_id"]?></li>
	<?
}
?>
</ul>
