<h1>Arrays</h1>

<?php
    //indexed or numeric arrays
    $fnames = ["Alex", "Peter", "James"];
    print_r ($fnames);

    echo '<br>';

    $colors = array("Black","Green","Yellow","White","Red","Blue","Red","Blue");

    // print_r($colors);
?>

<pre>
    <?php print_r($colors); ?>
</pre>
<?php print $fnames[1]; ?>
<?php
// Associative arrays

$user = [
    "fullname" => "Alex Okama",
    "email" => "AOkama@yahoo.com",
    "phone" => "+254714130665"
];

?>
<pre>
    <?php print_r($user); ?>
</pre>

<?php
// Multidimentional Arrays
$user_details = [
    "Dirctor" => array(
        "fullname" => "Alex Okama",
        "email" => "AOkama@yahoo.com",
        "address" => "Mada",
        "phone" => [
            "Mobile" => "+254714130665",
            "Work" => "+254714156765",
            "Cell" => "+254714130775"
        ]
        );
    "Manager" => array(
        "Dirctor" => array(
            "fullname" => "Alex Okama",
            "email" => "AOkama@yahoo.com",
            "address" => "Mada",
            "phone" => [
                "Mobile" => "+254714130865",
                "Work" => "+2547141306659",
                "Cell" => "+254714130465"
            ]
            ); 
    "Secretary" => array(
        "Dirctor" => array(
            "fullname" => "Alex Okama",
            "email" => "AOkama@yahoo.com",
            "address" => "Mada",
            "phone" => [
                "Mobile" => "+254714130765",
                "Work" => "+254714130365",
                "Cell" => "+254714130165"
            ]
            );
    ];
    print $user_details["secretary"["phone"]["work"]];
    ?>
    <pre>
        <?php print_r($user_details); ?>
    </pre>
    
    <?php 
        $items = ["book", "pen", 456, 45.5, "File54"]
    ?>
    <pre>
        <?php var_dump($items); ?>
    </pre>

    <?php 
        $age = [45, 42, 23];

            $user_age = array_combine($fnames, $age);

            $user_data = array_merge($fnames, $age);
    ?>
    <pre>
        <?php var_dump($user_age); ?>
    </pre>

    