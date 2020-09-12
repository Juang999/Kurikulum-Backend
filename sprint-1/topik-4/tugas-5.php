<?php
$students = [
    [
        'id' => 'IT-001',
        'name' => 'Ridwan',
        'division' => 'PHP Backend',
        'age' => 25,
    ],
    [
        'id' => 'IT-010',
        'name' => 'Achmad',
        'division' => 'Java for Android',
        'age' => 23,
    ],
    [
        'id' => 'IT-005',
        'name' => 'Yusuf',
        'division' => 'ReactJS',
        'age' => 22,
    ],
    [
        'id' => 'IT-002',
        'name' => 'Arief',
        'division' => 'PHP Backend',
        'age' => 21,
    ],
    [
        'id' => 'IT-004',
        'name' => 'Dayat',
        'division' => 'React Native',
        'age' => 21,
    ],
    [
        'id' => 'IT-017',
        'name' => 'Lutfi',
        'division' => 'ReactJS',
        'age' => 18,
    ],
];
foreach ($students as $key => $value) {
    $id[] = $value['name'];
}
array_multisort($id, SORT_ASC, $students);
print_r($students);
?>