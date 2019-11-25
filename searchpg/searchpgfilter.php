
<?php
$loc = isset($_POST['search']) ? $_POST['search'] : null;
$budget = isset($_POST['select_budget']) ? $_POST['select_budget'] : null;
$room_type = isset($_POST['room_type']) ? $_POST['room_type'] : null;
$pg_for = isset($_POST['pg_for']) ? $_POST['pg_for'] : null;
$food = isset($_POST['food']) ? $_POST['food'] : null;

$arr=array('loc'=>$loc,'budget'=>$budget,'room_type'=>$room_type,'pg_for'=>$pg_for,'food'=>$food);
print_r($arr);
$result = array_filter($arr);                 
print_r($result);


?>
<script>
var loc= "<?php echo(isset($_POST['search']) ? $_POST['search'] : null);?>";
var budget= "<?php echo(isset($_POST['budget']) ? $_POST['budget'] : null);?>";
var room_type= "<?php echo(isset($_POST['room_type']) ? $_POST['room_type'] : null);?>";
var pg_for= "<?php echo(isset($_POST['pg_for']) ? $_POST['pg_for'] : null);?>";
var food= "<?php echo(isset($_POST['food']) ? $_POST['food'] : null);?>";

var result={
'loc': loc,
'budget':budget

};
console.log("mmmmmmmmmmmm", result);

</script>
