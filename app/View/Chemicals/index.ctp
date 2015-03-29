<h2>Chemicals</h2>
<?php //pr($data); ?>
<?php //pr($formula); ?>
<?php
$chars=[];
foreach($data as $char=>$iarray) { $chars[]=$char; }
echo "<p>Click on a letter below to show chemicals starting with that letter</p>";
echo "<p>";
foreach($chars as $char)
{
	echo "<div onclick=\"showletter('".$char."')\" style='display: inline;cursor: pointer;'>".$char."</div>&nbsp;&nbsp;";
}
echo "</p>";
$chars=array_keys($data);
foreach($data as $char=>$iarray)
{
	if($char==$chars[0]):	echo "<div id='".$char."' class='letter' style='display: block;'>";
	else:					echo "<div id='".$char."' class='letter' style='display: none;'>";
	endif;
	echo "<ul style='font-size: 12px;'>";
	foreach($iarray as $pid=>$chemical)
	{
		echo '<li>'.html_entity_decode($this->Html->link($chemical,'/chemicals/view/'.$pid)).'</li>';
	}
	echo "</ul></div>";
}
?>
<p>&nbsp;<br /><?php echo "Information obtained from ".$this->Html->link('The NIST Solubility Database','http://srdata.nist.gov/solubility/sys_category.aspx',['target'=>'_blank']);?></p>