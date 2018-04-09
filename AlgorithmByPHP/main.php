<?php
include_once 'List/ListByArray.php';

$listByArray = new ListByArray();

$listByArray->insert(1,23333)->insert(2,2)->insert(2,3)->insert(2,4)->insert(3,5)->insert(2,6)->insert(2,7)->delete(2)->findKth(1)->printList();
$pos = $listByArray->find(23333);
printf("pos=%d\n",$pos);

 ?>
