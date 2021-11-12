<?php
 
echo 'xin chao' . '<br>';

?>

<a href="{{route('task.create')}}">Create</a><br><br>
<a href="{{route('task.show', ['id'=>2])}}">show</a><br><br>
<a href="{{route('task.edit', ['id'=>3])}}">edit</a><br><br>
<a href="{{route('task.delete', ['id'=>4])}}">detele</a>